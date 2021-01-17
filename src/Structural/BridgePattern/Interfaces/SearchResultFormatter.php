<?php


namespace DesignPattern\Structural\BridgePattern\Interfaces;

use DesignPattern\Structural\BridgePattern\Schema\SearchResult;

/**
 * Interface SearchResultFormatter
 * @package DesignPattern\Structural\BridgePattern\Interfaces
 */
interface SearchResultFormatter
{
    /**
     * @param SearchResult[] $searchResult
     * @return array
     */
    public function format(array $searchResult): array;
}
