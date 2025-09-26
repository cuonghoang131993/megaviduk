<?php

ini_set("session.cookie_httponly", True);
session_start();

require_once('DI/Container.php');
require_once('controllers/CartController.php');
require_once('utils/PriceUtils.php');

$container = new Container();
// Register a service with a dependency
$container->register('CartController', CartController::class);

// Resolve and use the service
$cartController = $container->get('CartController');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['cartSummary'])) {
        $cart = $cartController->getCartSummary();
        echo json_encode($cart);
    } else {
        $cartItems = $cartController->getAllCartItems();
        echo json_encode($cartItems);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $requestBody = file_get_contents('php://input');
    $data = json_decode($requestBody, true);

    $cartController->removeFromCart($data);
}
