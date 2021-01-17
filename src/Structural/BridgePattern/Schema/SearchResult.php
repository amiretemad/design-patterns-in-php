<?php


namespace DesignPattern\Structural\BridgePattern\Schema;

/**
 * Class SearchResult
 * @package DesignPattern\Structural\BridgePattern\Schema
 */
class SearchResult
{

    /** @var string $title */
    protected $title;

    /** @var string $description */
    protected $description;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return SearchResult
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return SearchResult
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

}
