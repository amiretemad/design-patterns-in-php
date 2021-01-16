<?php


namespace StrategyPattern\Strategy;


use StrategyPattern\Interfaces\CouponTypeInterface;
use StrategyPattern\Interfaces\GenerateCouponStrategyInterface;

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
