<?php

namespace srag\Plugins\SrSearchPDBlock\Config;

use ilSrSearchPDBlockPlugin;
use srag\ActiveRecordConfig\SrSearchPDBlock\Config\AbstractFactory;
use srag\ActiveRecordConfig\SrSearchPDBlock\Config\AbstractRepository;
use srag\ActiveRecordConfig\SrSearchPDBlock\Config\Config;
use srag\Plugins\SrSearchPDBlock\Config\Form\FormBuilder;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrSearchPDBlock\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Repository extends AbstractRepository
{

    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var self|null
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
    protected function __construct()
    {
        parent::__construct();
    }


    /**
     * @inheritDoc
     *
     * @return Factory
     */
    public function factory() : AbstractFactory
    {
        return Factory::getInstance();
    }


    /**
     * @inheritDoc
     */
    protected function getTableName() : string
    {
        return ilSrSearchPDBlockPlugin::PLUGIN_ID . "_config";
    }


    /**
     * @inheritDoc
     */
    protected function getFields() : array
    {
        return [
            FormBuilder::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD               => [Config::TYPE_BOOLEAN, false],
            FormBuilder::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS       => [Config::TYPE_BOOLEAN, false],
            FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD         => [Config::TYPE_BOOLEAN, false],
            FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS => [Config::TYPE_BOOLEAN, false],
            FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR             => [Config::TYPE_INTEGER, FormBuilder::OPERATOR_AND]
        ];
    }
}
