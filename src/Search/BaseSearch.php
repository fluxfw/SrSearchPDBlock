<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\DIC\SrSearchPDBlock\Version\PluginVersionParameter;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class BaseSearch
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 */
abstract class BaseSearch
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const LANG_MODULE = "search";
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var string
     *
     * @abstract
     */
    const TYPE = "";
    /**
     * @var bool
     */
    protected static $init = false;


    /**
     * BaseSearch constructor
     */
    public function __construct()
    {

    }


    /**
     * @return string
     */
    public function render() : string
    {
        if (!self::$init) {
            self::$init = true;

            $version_parameter = PluginVersionParameter::getInstance()->withPlugin(self::plugin());

            self::dic()->ui()->mainTemplate()->addCss($version_parameter->appendToUrl(self::plugin()->directory() . "/css/SrSearchPDBlock.css"));

            self::dic()->ui()->mainTemplate()->addJavaScript($version_parameter->appendToUrl(self::plugin()->directory() . "/js/SrSearchPDBlock.min.js",
                self::plugin()->directory() . "/js/SrSearchPDBlock.js"));
        }

        $tpl = self::plugin()->template("SrSearchPDBlock.html");

        $config = $this->getConfig();
        if (!$config) {
            $config["texts"] = [];
        }
        $config["texts"]["placeholder"] = self::plugin()->translate(static::TYPE, self::LANG_MODULE);
        $config["type"] = static::TYPE;
        $tpl->setVariableEscaped("CONFIG", base64_encode(json_encode($config)));

        return self::output()->getHTML($tpl);
    }


    /**
     * @return array
     */
    protected abstract function getConfig() : array;
}
