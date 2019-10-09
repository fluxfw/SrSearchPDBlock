<?php

namespace srag\Plugins\SrSearchPDBlock\Block\GlobalSearch;

use ilSearchController;
use ilTemplate;
use srag\Plugins\SrSearchPDBlock\Block\BaseSearchBlock;

/**
 * Class BaseGlobalSearchBlock
 *
 * @package srag\Plugins\SrSearchPDBlock\Block\GlobalSearch
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class BaseGlobalSearchBlock extends BaseSearchBlock
{

    const LANG_MODULE = "global_search";


    /**
     * @inheritDoc
     */
    protected function fillTemplate(ilTemplate $tpl) : ilTemplate
    {
        $tpl->setVariable("TXT_PLACEHOLDER", self::plugin()->translate("placeholder", self::LANG_MODULE));

        //Services/Search/classes/class.ilMainMenuSearchGUI.php::getHTML
        $search_action = "ilias.php?baseClass=" . ilSearchController::class . "&cmd=post&rtoken=" . self::dic()->ctrl()->getRequestToken() . "&fallbackCmd=remoteSearch";
        $tpl->setVariable("ACTION", $search_action);

        $tpl->setVariable("BUTTON", self::output()->getHTML(self::dic()->ui()->factory()->button()->standard(self::plugin()->translate("go", self::LANG_MODULE), "")));

        return $tpl;
    }
}
