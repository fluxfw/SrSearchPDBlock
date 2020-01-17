<?php

namespace srag\Plugins\SrSearchPDBlock\Config;

use ilSrSearchPDBlockConfigGUI;
use ilSrSearchPDBlockPlugin;
use srag\ActiveRecordConfig\SrSearchPDBlock\Config\AbstractFactory;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrSearchPDBlock\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Factory extends AbstractFactory
{

    use SrSearchPDBlockTrait;
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
     * Factory constructor
     */
    private function __construct()
    {
        parent::__construct();
    }


    /**
     * @param ilSrSearchPDBlockConfigGUI $parent
     *
     * @return ConfigFormGUI
     */
    public function newFormInstance(ilSrSearchPDBlockConfigGUI $parent) : ConfigFormGUI
    {
        $form = new ConfigFormGUI($parent);

        return $form;
    }
}
