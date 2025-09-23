<?php

require_once('utils/PriceUtils.php');

ini_set("session.cookie_httponly", True);
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['cart'])) {
    if (isset($_GET['cartSummary'])) {
        echo json_encode($_SESSION['cart']['cart']);
    } else {
        echo json_encode($_SESSION['cart']['items']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_SESSION['cart'])) {
    $requestBody = file_get_contents('php://input');
    $data = json_decode($requestBody, true);

    $cart = $_SESSION['cart']['cart'];
    $listItems = $_SESSION['cart']['items'];

    foreach ($listItems as $index => $item) {
        if ($item['itemId'] === $data['cartItemId']) {
            $cart['itemCount'] -= 1;
            $cart['price'] -= $listItems[$index]['price'];
            $cart['vat'] -= $listItems[$index]['vat'];
            
            $priceBulkDiscount = PriceUtils::getBulkDiscount($cart);
            $cart['bulkDiscount'] = $priceBulkDiscount['bulkDiscount'];
            $cart['bulkDiscountStr'] = $priceBulkDiscount['bulkDiscountStr'];

            $cart['priceWithDiscounts'] = $cart['price'] - $cart['bulkDiscount'] - $cart['promoDiscount'];

            unset($listItems[$index]);
        }
    }

    $_SESSION['cart']['cart'] = $cart;
    $_SESSION['cart']['items'] = $listItems;
}
