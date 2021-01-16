<?php

use StrategyPattern\GenerateCouponContext;
use StrategyPattern\Interfaces\CouponTypeInterface;
use StrategyPattern\Strategy\ExactCouponGenerator;
use StrategyPattern\Strategy\RandomCouponGenerator;

include "vendor/autoload.php";


$generateCouponContext = new GenerateCouponContext();
$generateCouponContext->setStrategy(new ExactCouponGenerator());
$generateCouponContext->setStrategy(new RandomCouponGenerator());

$exactCoupon = $generateCouponContext->generateCoupon(CouponTypeInterface::EXACT_COUPON,'HAPPY-NEW-YEAR');
$randomCoupon = $generateCouponContext->generateCoupon(CouponTypeInterface::RANDOM_COUPON,'HAPPY-');

var_dump($exactCoupon,$randomCoupon);
