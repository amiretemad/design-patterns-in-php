<?php


namespace DesignPattern\Behavioral\StrategyPattern\Strategy;


use DesignPattern\Behavioral\StrategyPattern\Interfaces\CouponTypeInterface;
use DesignPattern\Behavioral\StrategyPattern\Interfaces\GenerateCouponStrategyInterface;

class RandomCouponGenerator implements GenerateCouponStrategyInterface
{

    /**
     * @param string $couponCode
     * @return array
     */
    public function generate(string $couponCode): array
    {
        return [$couponCode . random_int(1, 10000)];
    }

    /**
     * @param int $couponType
     * @return bool
     */
    public function isProcessable(int $couponType): bool
    {
        return $couponType === CouponTypeInterface::RANDOM_COUPON;
    }
}
