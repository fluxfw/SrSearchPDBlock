<?php

use srag\DIC\SrSearchPDBlock\Util\LibraryLanguageInstaller;
use srag\Plugins\SrSearchPDBlock\Config\Config;
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
    const PLUGIN_ID = "srsearchpd";
    const PLUGIN_NAME = "SrSearchPDBlock";
    const PLUGIN_CLASS_NAME = self::class;
    const REMOVE_PLUGIN_DATA_CONFIRM_CLASS_NAME = SrSearchPDBlockRemoveDataConfirm::class;
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


    /**
     * @inheritdoc
     */
    public function updateLanguages($a_lang_keys = null)
    {
        parent::updateLanguages($a_lang_keys);

        LibraryLanguageInstaller::getInstance()->withPlugin(self::plugin())->withLibraryLanguageDirectory(__DIR__
            . "/../vendor/srag/removeplugindataconfirm/lang")->updateLanguages();
    }


    /**
     * @inheritdoc
     */
    protected function deleteData()/*: void*/
    {
        self::dic()->database()->dropTable(Config::TABLE_NAME, false);
    }
}
