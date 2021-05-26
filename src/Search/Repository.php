<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 */
final class Repository
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Repository constructor
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
     * @internal
     */
    public function dropTables()/*:void*/
    {

    }


    /**
     * @return Factory
     */
    public function factory() : Factory
    {
        return Factory::getInstance();
    }


    /**
     * @param string $key_config_global_search
     * @param string $key_config_current_page_search
     * @param bool   $everywhere
     *
     * @return string
     */
    public function getSearches(string $key_config_global_search, string $key_config_current_page_search, bool $everywhere = false) : string
    {
        $searches = [];

        if (self::srSearchPDBlock()->config()->getValue($key_config_global_search)) {
            $searches[] = $this->factory()->globalSearch();
        }

        if (self::srSearchPDBlock()->config()->getValue($key_config_current_page_search)) {
            $searches[] = $this->factory()->currentPageSearch();
        }

        if ($everywhere) {
            $searches = $this->factory()->everywhereSearch($searches);
        } else {
            $searches = array_map([$this->factory(), "searchBlock"], $searches);
        }

        return self::output()->getHTML($searches);
    }


    /**
     * @internal
     */
    public function installTables()/*:void*/
    {

    }
}
