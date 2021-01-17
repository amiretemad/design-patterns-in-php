<?php


namespace DesignPattern\Structural\BridgePattern\Repository;

use DesignPattern\Structural\BridgePattern\Schema\SearchResult;

class SearchResultRepository
{

    /**
     * @return SearchResult[]
     */
    public static function result(): array
    {
        return [
            (new SearchResult())->setTitle('bmw')->setDescription('best for ever!'),
            (new SearchResult())->setTitle('kia')->setDescription('kill in accident!'),
            (new SearchResult())->setTitle('ford')->setDescription('is an American car!'),
        ];
    }

}