<?php

require_once __DIR__ . "/../vendor/autoload.php";

use ILIAS\DI\Container;
use srag\CustomInputGUIs\SrSearchPDBlock\Loader\CustomInputGUIsLoaderDetector;
use srag\DevTools\SrSearchPDBlock\DevToolsCtrl;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;
use srag\RemovePluginDataConfirm\SrSearchPDBlock\PluginUninstallTrait;

/**
 * Class ilSrSearchPDBlockPlugin
 */
class ilSrSearchPDBlockPlugin extends ilUserInterfaceHookPlugin
{

    use PluginUninstallTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = self::class;
    const PLUGIN_ID = "srsearchpd";
    const PLUGIN_NAME = "SrSearchPDBlock";
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * ilSrSearchPDBlockPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
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
     * @inheritDoc
     */
    public function exchangeUIRendererAfterInitialization(Container $dic) : Closure
    {
        return CustomInputGUIsLoaderDetector::exchangeUIRendererAfterInitialization();
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

        DevToolsCtrl::installLanguages(self::plugin());
    }


    /**
     * @inheritDoc
     */
    protected function deleteData()/*: void*/
    {
        self::srSearchPDBlock()->dropTables();
    }


    /**
     * @inheritDoc
     */
    protected function shouldUseOneUpdateStepOnly() : bool
    {
        return true;
    }
}
