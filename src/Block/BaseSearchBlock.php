<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilBlockGUI;
use ilSrSearchPDBlockPlugin;
use srag\CustomInputGUIs\SrSearchPDBlock\Template\Template;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

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
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var string
     *
     * @abstract
     */
    const LANG_MODULE = "";


    /**
     * BaseSearchBlock constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->initBlock();
    }


    /**
     * @inheritDoc
     */
    public function getBlockType() : string
    {
        return ilSrSearchPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @inheritDoc
     */
    protected function isRepositoryObject() : bool
    {
        return false;
    }


    /**
     *
     */
    protected function initBlock()/*: void*/
    {
        self::dic()->ui()->mainTemplate()->addCss(self::plugin()->directory() . "/css/srsearchpdblock.css");

        $this->setTitle(self::plugin()->translate("title", static::LANG_MODULE));

        if (self::version()->is60()) {
            $this->new_rendering = true;
        }
    }


    /**
     * @inheritDoc
     */
    protected function getLegacyContent() : string
    {
        return self::output()->getHTML($this->fillTemplate($this->getTemplate()));
    }


    /**
     *
     */
    public function fillDataSection()/*: void*/
    {
        $this->setDataSection(self::output()->getHTML($this->fillTemplate($this->getTemplate())));
    }


    /**
     * @return Template
     */
    protected function getTemplate() : Template
    {
        return self::plugin()->template(static::LANG_MODULE . ".html");
    }


    /**
     * @param Template $tpl
     *
     * @return Template
     */
    protected abstract function fillTemplate(Template $tpl) : Template;
}
