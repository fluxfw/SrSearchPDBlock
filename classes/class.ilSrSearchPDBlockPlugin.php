<?php

use srag\DIC\SrSearchPDBlock\DICTrait;

require_once __DIR__ . "/../vendor/autoload.php";

/**
 * Class ilSrSearchPDBlockPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockPlugin extends ilUserInterfaceHookPlugin
{

    use DICTrait;
    const PLUGIN_ID = "srsearchpd";
    const PLUGIN_NAME = "SrSearchPDBlock";
    const PLUGIN_CLASS_NAME = self::class;
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
     * ilSrSearchPDBlockPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return string
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }
}
