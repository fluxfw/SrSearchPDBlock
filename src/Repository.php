<?php

namespace srag\Plugins\SrSearchPDBlock;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Config\Repository as ConfigRepository;
use srag\Plugins\SrSearchPDBlock\Search\Repository as SearchRepository;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrSearchPDBlock
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
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
     * @return ConfigRepository
     */
    public function config() : ConfigRepository
    {
        return ConfigRepository::getInstance();
    }


    /**
     *
     */
    public function dropTables()/*:void*/
    {
        $this->config()->dropTables();
        $this->search()->dropTables();
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->config()->installTables();
        $this->search()->installTables();
    }


    /**
     * @return SearchRepository
     */
    public function search() : SearchRepository
    {
        return SearchRepository::getInstance();
    }
}
