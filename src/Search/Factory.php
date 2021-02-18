<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Search\Block\SearchBlock;
use srag\Plugins\SrSearchPDBlock\Search\Everywhere\EverywhereSearch;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Factory
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @return BaseSearch
     */
    public function currentPageSearch() : BaseSearch
    {
        $search = new CurrentPageSearch();

        return $search;
    }


    /**
     * @param BaseSearch[] $searches
     *
     * @return EverywhereSearch
     */
    public function everywhereSearch(array $searches) : EverywhereSearch
    {
        $search = new EverywhereSearch($searches);

        return $search;
    }


    /**
     * @return BaseSearch
     */
    public function globalSearch() : BaseSearch
    {
        $search = new GlobalSearch();

        return $search;
    }


    /**
     * @param BaseSearch $search
     *
     * @return SearchBlock
     */
    public function searchBlock(BaseSearch $search) : SearchBlock
    {
        $block = new SearchBlock($search);

        return $block;
    }
}
