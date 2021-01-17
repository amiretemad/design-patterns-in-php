<?php

use DesignPattern\Behavioral\StrategyPattern\GenerateCouponContext;
use DesignPattern\Behavioral\StrategyPattern\Interfaces\CouponTypeInterface;
use DesignPattern\Behavioral\StrategyPattern\Strategy\ExactCouponGenerator;
use DesignPattern\Behavioral\StrategyPattern\Strategy\RandomCouponGenerator;

include "bootstrap.php";


$generateCouponContext = new GenerateCouponContext();
$generateCouponContext->setStrategy(new ExactCouponGenerator());
$generateCouponContext->setStrategy(new RandomCouponGenerator());

$exactCoupon = $generateCouponContext->generateCoupon(CouponTypeInterface::EXACT_COUPON,'HAPPY-NEW-YEAR');
$randomCoupon = $generateCouponContext->generateCoupon(CouponTypeInterface::RANDOM_COUPON,'HAPPY-');

var_dump($exactCoupon,$randomCoupon);
