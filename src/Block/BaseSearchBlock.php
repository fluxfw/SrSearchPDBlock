<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilBlockGUI;
use ilSearchController;
use ilSrSearchPDBlockPlugin;
use ilTemplateException;
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
     * @throws DICException
     */
    protected function initBlock()/*: void*/
    {
        self::dic()->mainTemplate()->addCss(self::plugin()->directory() . "/css/srsearchpdblock.css");

        $this->setTitle(self::dic()->language()->txt("search"));
    }


    /**
     * @throws DICException
     * @throws ilTemplateException
     */
    public function fillDataSection()/*: void*/
    {
        $tpl = self::plugin()->template("search_input.html");

        $tpl->setVariable("TXT_PLACEHOLDER", self::dic()->language()->txt("search") . " ...");
        $tpl->setVariable("TXT_GO", self::dic()->language()->txt("go"));

        //Services/Search/classes/class.ilMainMenuSearchGUI.php::getHTML
        $search_action = "ilias.php?baseClass=" . ilSearchController::class . "&cmd=post&rtoken=" . self::dic()->ctrl()->getRequestToken()
            . "&fallbackCmd=remoteSearch";
        $tpl->setVariable("ACTION", $search_action);

        $tpl->setVariable("BUTTON", self::output()->getHTML(self::dic()->ui()->factory()->button()->standard(self::dic()->language()
            ->txt("search"), "")));

        $this->setDataSection(self::output()->getHTML($tpl));
    }
}
