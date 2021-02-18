<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class BaseSearch
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
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

            self::dic()->ui()->mainTemplate()->addCss(self::plugin()->directory() . "/css/SrSearchPDBlock.css");

            self::dic()->ui()->mainTemplate()->addJavaScript(self::plugin()->directory() . "/js/SrSearchPDBlock.min.js");
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
