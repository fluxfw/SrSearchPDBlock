<?php

namespace srag\Plugins\SrSearchPDBlock;

use ilSrSearchPDBlockPlugin;
use srag\ActiveRecordConfig\SrSearchPDBlock\Config\Config;
use srag\ActiveRecordConfig\SrSearchPDBlock\Config\Repository as ConfigRepository;
use srag\ActiveRecordConfig\SrSearchPDBlock\Utils\ConfigTrait;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Config\ConfigFormGUI;
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
    use ConfigTrait {
        config as protected _config;
    }
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var self
     */
    protected static $instance = null;


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
     * Repository constructor
     */
    private function __construct()
    {
        $this->config()->withTableName(ilSrSearchPDBlockPlugin::PLUGIN_ID . "_config")->withFields([
            ConfigFormGUI::KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP        => [Config::TYPE_BOOLEAN, false],
            ConfigFormGUI::KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS       => [Config::TYPE_BOOLEAN, false],
            ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP  => [Config::TYPE_BOOLEAN, false],
            ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS => [Config::TYPE_BOOLEAN, false],
            ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR          => [Config::TYPE_INTEGER, ConfigFormGUI::OPERATOR_AND]
        ]);
    }


    /**
     * @inheritDoc
     */
    public function config() : ConfigRepository
    {
        return self::_config();
    }


    /**
     *
     */
    public function dropTables()/*:void*/
    {
        $this->config()->dropTables();
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        $this->config()->installTables();
    }
}
