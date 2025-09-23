<?php
// api/CartController.php

class CartController
{
    public function __construct()
    { }

    public function addToCart(VideoDAO $video, array $data) {
        $cart = $this->getCartSummary();

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

        return [
            'cart' => $cart,
            'saveItem' => $saveItem
        ];
    }

    public function removeFromCart(array $data) {
        $cart = $this->getCartSummary();
        $listItems = $this->getAllCartItems();

        foreach ($listItems as $index => $item) {
            if ($item['itemId'] === $data['cartItemId']) {
                $cart['itemCount'] -= 1;
                $cart['price'] -= $listItems[$index]['price'];
                $cart['vat'] -= $listItems[$index]['vat'];
                
                $priceBulkDiscount = PriceUtils::getBulkDiscount($cart);
                $cart['bulkDiscount'] = $priceBulkDiscount['bulkDiscount'];
                $cart['bulkDiscountStr'] = $priceBulkDiscount['bulkDiscountStr'];

                $cart['priceWithDiscounts'] = $cart['price'] - $cart['bulkDiscount'] - $cart['promoDiscount'];

                array_splice($listItems, $index, 1);
            }
        }

        $_SESSION['cart']['cart'] = $cart;
        $_SESSION['cart']['items'] = $listItems;
    }

    public function getCartSummary() {
        return $_SESSION['cart']['cart'] ?? [
            'bulkDiscount' => 0,
            'bulkDiscountStr' => "",
            'itemCount' => 0,
            'price' => 0,
            'priceWithDiscounts' => 0,
            'promoActivated' => false,
            'promoDiscount' => 0,
            'vat' => 0
        ];
    }

    public function getAllCartItems() {
        return $_SESSION['cart']['items'] ?? [];
    }
}

?>
