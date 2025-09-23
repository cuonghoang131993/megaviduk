<?php
// ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
ini_set("session.cookie_httponly", True);
session_start();

require_once('DI/Container.php');
require_once('controllers/VideoController.php');
require_once('services/VideoService.php');
require_once('repositories/VideoRepository.php');
require_once('infrastructures/db/Database.php');
require_once('entities/VideoDAO.php');
require_once('utils/PriceUtils.php');

$container = new Container();
// Register a simple service (class name)
$container->register('DatabaseConnection', function () {
    $c = include 'infrastructures/config/database.php';
    return new DatabaseConnection("mysql:host=" . $c['host'] . ";dbname=" . $c['database'] . ";charset=" . $c['charset']);
});
// Register a service with a dependency
$container->register('VideoRepository', VideoRepository::class);
$container->register('VideoService', VideoService::class);
$container->register('VideoController', VideoController::class);

// Resolve and use the service
$videoController = $container->get('VideoController');

// Get the raw POST data
$json_data = file_get_contents('php://input');

// Decode the JSON data into a PHP array or object
$data = json_decode($json_data, true); // true for associative array

if (is_array($data)) {
    $videoId = $data['videoId'];

    $video = $videoController->findById($videoId);

    if ($video !== null) {
        $cart = [
            'bulkDiscount' => 0,
            'bulkDiscountStr' => "",
            'itemCount' => $_SESSION['cart']['cart']['itemCount'] ?? 0,
            'price' => $_SESSION['cart']['cart']['price'] ?? 0,
            'priceWithDiscounts' => $_SESSION['cart']['cart']['priceWithDiscounts'] ?? 0,
            'promoActivated' => false,
            'promoDiscount' => 0,
            'vat' => 0
        ];

        $uniqueVidId = uniqid("video_");
        $saveItem = [
            'itemId' => $uniqueVidId,
            'video' => $video,
            'licenseDetails' => []
        ];

        $price = PriceUtils::getPrice($data, $data['isGerman']);

        $cart['itemCount'] += 1;
        
        if (!empty($price)) {
            $cart['price'] += $price['priceWithoutVat'];
            $cart['vat'] += $price['vat'];
            
            $priceBulkDiscount = PriceUtils::getBulkDiscount($cart);
            $cart['bulkDiscount'] = $priceBulkDiscount['bulkDiscount'];
            $cart['bulkDiscountStr'] = $priceBulkDiscount['bulkDiscountStr'];
            $cart['priceWithDiscounts'] = $cart['price'] - $cart['bulkDiscount'] - $cart['promoDiscount'];

            $saveItem['price'] = $price['priceWithoutVat'];
            $saveItem['vat'] = $price['vat'];
        }
        

        if (!empty($data['selectedAudienceSize'])) {
            $saveItem['licenseDetails']['selectedAudienceSize'] = $data['selectedAudienceSize'];
        }
        if (!empty($data['selectedContext'])) {
            $saveItem['licenseDetails']['selectedContext'] = $data['selectedContext'];
        }
        if (!empty($data['selectedCredit'])) {
            $saveItem['licenseDetails']['selectedCredit'] = $data['selectedCredit'];
        }
        if (!empty($data['selectedDigitalPosts'])) {
            $saveItem['licenseDetails']['selectedDigitalPosts'] = $data['selectedDigitalPosts'];
        }
        if (!empty($data['selectedMedia'])) {
            $saveItem['licenseDetails']['selectedMedia'] = $data['selectedMedia'];
        }
        if (!empty($data['selectedMonetization'])) {
            $saveItem['licenseDetails']['selectedMonetization'] = $data['selectedMonetization'];
        }
        if (!empty($data['selectedPeriod'])) {
            $saveItem['licenseDetails']['selectedPeriod'] = $data['selectedPeriod'];
        }
        if (!empty($data['selectedRights'])) {
            $saveItem['licenseDetails']['selectedRights'] = $data['selectedRights'];
        }

        // Add the new product to the cart
        $_SESSION['cart']['cart'] = $cart;
        $_SESSION['cart']['items'][] = $saveItem;

        // header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'items' => [$saveItem], 'cart' => $cart]);
        // }
    }
    // Redirect to prevent re-submission on refresh
    // header('Location: ' . $_SERVER['PHP_SELF']);
    // exit();
}

?>
