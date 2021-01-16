<?php


namespace StrategyPattern;

use StrategyPattern\Interfaces\GenerateCouponStrategyInterface;

class GenerateCouponContext
{

    /**
     * @var GenerateCouponStrategyInterface[]
     */
    protected $strategies = [];

    /** @param GenerateCouponStrategyInterface $generateCouponStrategy */
    public function setStrategy(GenerateCouponStrategyInterface $generateCouponStrategy)
    {
        $this->strategies [] = $generateCouponStrategy;
    }

    /**
     * @param int $couponType
     * @param string $couponCode
     * @return array|null
     */
    public function generateCoupon(int $couponType, string $couponCode): ?array
    {
        foreach ($this->strategies as $strategy) {
            if ($strategy->isProcessable($couponType)) {
                return $strategy->generate($couponCode);
            }
        }

        return null;
    }

}
