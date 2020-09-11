<?php

namespace srag\Plugins\SrSearchPDBlock;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Block\Repository as BlocksRepository;
use srag\Plugins\SrSearchPDBlock\Config\Repository as ConfigRepository;
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
     * @return BlocksRepository
     */
    public function blocks() : BlocksRepository
    {
        return BlocksRepository::getInstance();
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
        $this->blocks()->dropTables();
        $this->config()->dropTables();
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->blocks()->installTables();
        $this->config()->installTables();
    }
}
