<?php
// ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
ini_set("session.cookie_httponly", True);
session_start();

require_once('DI/Container.php');
require_once('controllers/CartController.php');
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
$container->register('CartController', CartController::class);

// Resolve and use the service
$videoController = $container->get('VideoController');
$cartController = $container->get('CartController');

// Get the raw POST data
$json_data = file_get_contents('php://input');

// Decode the JSON data into a PHP array or object
$data = json_decode($json_data, true); // true for associative array

if (is_array($data)) {
    $videoId = $data['videoId'];

    $video = $videoController->findById($videoId);

    if ($video !== null) {
        $addToCartResponse = $cartController->addToCart($video, $data);

        // header('Content-Type: application/json');
        echo json_encode(['status' => 'success', 'items' => [$addToCartResponse['saveItem']], 'cart' => $addToCartResponse['cart']]);
        // }
    }
    // Redirect to prevent re-submission on refresh
    // header('Location: ' . $_SERVER['PHP_SELF']);
    // exit();
}

?>
