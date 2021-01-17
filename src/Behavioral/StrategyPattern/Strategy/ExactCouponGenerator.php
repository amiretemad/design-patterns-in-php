<?php


namespace DesignPattern\Behavioral\StrategyPattern\Strategy;


use DesignPattern\Behavioral\StrategyPattern\Interfaces\CouponTypeInterface;
use DesignPattern\Behavioral\StrategyPattern\Interfaces\GenerateCouponStrategyInterface;

class ExactCouponGenerator implements GenerateCouponStrategyInterface
{

    /**
     * @param string $couponCode
     * @return array
     */
    public function generate(string $couponCode): array
    {
        return [$couponCode];
    }

    /**
     * @param int $couponType
     * @return bool
     */
    public function isProcessable(int $couponType): bool
    {
        return $couponType === CouponTypeInterface::EXACT_COUPON;
    }

}
