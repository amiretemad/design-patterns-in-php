<?php


namespace DesignPattern\Structural\BridgePattern\Formatters;

use DesignPattern\Structural\BridgePattern\Interfaces\SearchResultFormatter;
use DesignPattern\Structural\BridgePattern\Schema\SearchResult;

class APISearchResultFormatter implements SearchResultFormatter
{
    /**
     * @param SearchResult[] $searchResult
     * @return array
     */
    public function format(array $searchResult): array
    {
        foreach ($searchResult as $result) {
            $result
                ->setDescription(str_replace(' ', '-', $result->getDescription()));
        }

        return $searchResult;
    }
}
