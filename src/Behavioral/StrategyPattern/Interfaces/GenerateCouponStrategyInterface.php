<?php

namespace DesignPattern\Behavioral\StrategyPattern\Interfaces;

/**
 * Interface GenerateCouponInterface
 * @package StrategyPattern\Interfaces
 */
interface GenerateCouponStrategyInterface
{

    /**
     * @param string $couponCode
     * @return array
     */
    public function generate(string $couponCode): array;

    /**
     * @param int $couponType
     * @return bool
     */
    public function isProcessable(int $couponType): bool;

}