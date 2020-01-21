<?php

use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;
use srag\RemovePluginDataConfirm\SrSearchPDBlock\PluginUninstallTrait;

require_once __DIR__ . "/../vendor/autoload.php";

/**
 * Class ilSrSearchPDBlockPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockPlugin extends ilUserInterfaceHookPlugin
{

    use PluginUninstallTrait;
    use SrSearchPDBlockTrait;
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
     * @inheritDoc
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }


    /**
     * @inheritDoc
     */
    public function updateLanguages(/*?array*/ $a_lang_keys = null)/*:void*/
    {
        parent::updateLanguages($a_lang_keys);

        $this->installRemovePluginDataConfirmLanguages();
    }


    /**
     * @inheritDoc
     */
    protected function deleteData()/*: void*/
    {
        self::srSearchPDBlock()->dropTables();
    }
}
