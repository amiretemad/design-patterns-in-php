<?php


namespace DesignPattern\Structural\BridgePattern;


use DesignPattern\Structural\BridgePattern\Repository\SearchResultRepository;

/**
 * Class AdminSearchService
 * @package DesignPattern\Structural\BridgePattern
 */
class SearchService extends AbstractSearchService
{
    /** @return array */
    public function get(): array
    {
        return $this->formatter->format(SearchResultRepository::result());
    }
}
