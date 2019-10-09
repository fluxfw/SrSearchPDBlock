<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilBlockGUI;
use ilSrSearchPDBlockPlugin;
use ilTemplate;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\DIC\SrSearchPDBlock\Exception\DICException;

/**
 * Class BaseSearchBlock
 *
 * @package srag\Plugins\SrSearchPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class BaseSearchBlock extends ilBlockGUI
{

    use DICTrait;
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var string
     *
     * @abstract
     */
    const LANG_MODULE = "";


    /**
     * BaseSearchBlock constructor
     *
     * @throws DICException
     */
    public function __construct()
    {
        parent::__construct();

        $this->initBlock();
    }


    /**
     *
     */
    protected function initBlock()/*: void*/
    {
        self::dic()->mainTemplate()->addCss(self::plugin()->directory() . "/css/srsearchpdblock.css");

        $this->setTitle(self::plugin()->translate("title", static::LANG_MODULE));
    }


    /**
     *
     */
    public function fillDataSection()/*: void*/
    {
        $this->setDataSection(self::output()->getHTML($this->fillTemplate($this->getTemplate())));
    }


    /**
     * @return ilTemplate
     */
    protected function getTemplate() : ilTemplate
    {
        return self::plugin()->template(static::LANG_MODULE . ".html");
    }


    /**
     * @param ilTemplate $tpl
     *
     * @return ilTemplate
     */
    protected abstract function fillTemplate(ilTemplate $tpl) : ilTemplate;
}
