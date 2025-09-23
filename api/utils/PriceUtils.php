<?php

function closest($array, $number) {

    sort($array);
    $res = null;
    foreach ($array as $a) {
        if ($a <= $number) $res = $a;
    }
    return $res;
}

class PriceUtils
{
    private static $vat = [
        'text' => "7%",
        'value' => .07
    ];
    private static $bulkDiscountRange = [
        1 => 0,
        5 => .15,
        10 => .2,
        20 => .25,
        25 => .3
    ];

    public static function calculateVatPrice($e, $t)
    {
        return $t ? [
            'priceWithoutVat' => $e,
            'vat' => round(100 * self::$vat['value'] * $e) / 100
        ] : [
            'priceWithoutVat' => $e,
            'vat' => 0
        ];
    }

    public static function getPrice(array $e, bool $t)
    {
        $n = null;
        if (!empty($e['selectedMedia']) && "broadcast" === $e['selectedMedia'] && !empty($e['selectedContext']) && !empty($e['selectedRights']) && !empty($e['selectedPeriod'])) {
            if ("local" === $e['selectedContext'] && "singleMarket" === $e['selectedRights'] && "24h" === $e['selectedPeriod']) {
                $n = 50;
            } else if ("local" === $e['selectedContext'] && "singleMarket" === $e['selectedRights'] && "1w" === $e['selectedPeriod']) {
                $n = 200;
            } else if ("local" === $e['selectedContext'] && "singleMarketDigital" === $e['selectedRights'] && "24h" === $e['selectedPeriod']) {
                $n = 149;
            } else if ("local" === $e['selectedContext'] && "singleMarketDigital" === $e['selectedRights'] && "1w" === $e['selectedPeriod']) {
                $n = 300;
            } else if ("national" === $e['selectedContext'] && "worldwideDigital" === $e['selectedRights'] && "24h" === $e['selectedPeriod']) {
                $n = 330;
            } else if ("national" === $e['selectedContext'] && "worldwideDigital" === $e['selectedRights'] && "1w" === $e['selectedPeriod']) {
                $n = 400;
            } else if ("national" === $e['selectedContext'] && "worldwideAllMedia" === $e['selectedRights'] && "24h" === $e['selectedPeriod']) {
                $n = 430;
            } else if ("national" === $e['selectedContext'] && "worldwideAllMedia" === $e['selectedRights'] && "1w" === $e['selectedPeriod']) {
                $n = 500;
            } else if ("network" === $e['selectedContext'] && "worldwideBroadcast" === $e['selectedRights'] && "1y" === $e['selectedPeriod']) {
                $n = 450;
            } else if ("network" === $e['selectedContext'] && "worldwideBroadcast" === $e['selectedRights'] && "perpetual" === $e['selectedPeriod']) {
                $n = 750;
            } else if ("network" === $e['selectedContext'] && "worldwideBroadcastDigital" === $e['selectedRights'] && "1y" === $e['selectedPeriod']) {
                $n = 500;
            } else if ("network" === $e['selectedContext'] && "worldwideBroadcastDigital" === $e['selectedRights'] && "perpetual" === $e['selectedPeriod']) {
                $n = 850;
            } else if ("network" === $e['selectedContext'] && "worldwideBroadcastAllMedia" === $e['selectedRights'] && "1y" === $e['selectedPeriod']) {
                $n = 580;
            } else if ("network" === $e['selectedContext'] && "worldwideBroadcastAllMedia" === $e['selectedRights'] && "perpetual" === $e['selectedPeriod']) {
                $n = 930;
            }
        } else if (!empty($e['selectedMedia']) && "digital" === $e['selectedMedia'] && !empty($e['selectedDigitalPosts']) && !empty($e['selectedMonetization']) && !empty($e['selectedAudienceSize']) && !empty($e['selectedCredit'])) {
            if (
                "worldwide" === $e['selectedDigitalPosts'] && "noMonetization" === $e['selectedMonetization'] && "10m" === $e['selectedAudienceSize'] && "short" === $e['selectedCredit']
            ) {
                $n = 250;
            } else if ("worldwide" === $e['selectedDigitalPosts'] && "noMonetization" === $e['selectedMonetization'] && "10m" === $e['selectedAudienceSize'] && "long" === $e['selectedCredit']) {
                $n = 200;
            } else if ("worldwide" === $e['selectedDigitalPosts'] && "withMonetization" === $e['selectedMonetization'] && "10m" === $e['selectedAudienceSize'] && "short" === $e['selectedCredit']) {
                $n = 500;
            } else if ("worldwide" === $e['selectedDigitalPosts'] && "withMonetization" === $e['selectedMonetization'] && "10m" === $e['selectedAudienceSize'] && "long" === $e['selectedCredit']) {
                $n = 450;
            }
        }

        return $n ? PriceUtils::calculateVatPrice($n, $t) : $n;
    }

    public static function getBulkDiscount($cart)
    {
        $discountKeys = array_keys(self::$bulkDiscountRange);
        $closetKey = closest($discountKeys, $cart['itemCount']);

        if (isset($closetKey)) {
            return [
                'bulkDiscount' => self::$bulkDiscountRange[$closetKey] * $cart['price'],
                'bulkDiscountStr'   => self::$bulkDiscountRange[$closetKey] !== 0 ? '(' . self::$bulkDiscountRange[$closetKey] * 100 . '%)' : ''
            ];
        }

        return [
            'bulkDiscount'      => 0,
            'bulkDiscountStr'   => ''
        ];
    }
}

?>