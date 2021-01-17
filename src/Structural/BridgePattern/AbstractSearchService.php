<?php


namespace DesignPattern\Structural\BridgePattern;


use DesignPattern\Structural\BridgePattern\Interfaces\SearchResultFormatter;

abstract class AbstractSearchService
{
    /** @var SearchResultFormatter */
    protected $formatter;

    /**
     * AbstractSearchService constructor.
     * @param SearchResultFormatter $formatter
     */
    public function __construct(SearchResultFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /** @return array */
    abstract public function get(): array;

}
