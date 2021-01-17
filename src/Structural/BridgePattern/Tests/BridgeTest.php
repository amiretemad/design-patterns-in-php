<?php


namespace DesignPattern\Structural\BridgePattern\Tests;

use DesignPattern\Structural\BridgePattern\Formatters\APISearchResultFormatter;
use DesignPattern\Structural\BridgePattern\Formatters\MainSearchResultFormatter;
use DesignPattern\Structural\BridgePattern\SearchService;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{

    public function testAdminSearchResult(): void
    {
        /**
         * @todo complete tests
         */
        $adminSearchService = new SearchService(new MainSearchResultFormatter());
        $result = $adminSearchService->get();
    }

    public function testHomePageSearchResult(): void
    {
        /**
         * @todo complete tests
         */
        $adminSearchService = new SearchService(new MainSearchResultFormatter());
        $result = $adminSearchService->get();
    }

    public function testApiSearchResult(): void
    {
        /**
         * @todo complete tests
         */
        $apiSearchResult = new SearchService(new APISearchResultFormatter());
        $result = $apiSearchResult->get();
    }

}