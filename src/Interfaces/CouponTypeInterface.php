<?php


namespace StrategyPattern\Interfaces;

/**
 * Interface CouponTypeInterface
 * @package StrategyPattern\Interfaces
 */
interface CouponTypeInterface
{
    public const EXACT_COUPON = 1;
    public const RANDOM_COUPON = 2;
}
