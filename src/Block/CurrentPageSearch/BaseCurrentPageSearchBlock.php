<?php

namespace srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch;

use srag\CustomInputGUIs\SrSearchPDBlock\Template\Template;
use srag\Plugins\SrSearchPDBlock\Block\BaseSearchBlock;
use srag\Plugins\SrSearchPDBlock\Config\ConfigFormGUI;

/**
 * Class BaseCurrentPageSearchBlock
 *
 * @package srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class BaseCurrentPageSearchBlock extends BaseSearchBlock
{

    const LANG_MODULE = "current_page_search";


    /**
     * @inheritDoc
     */
    protected function fillTemplate(Template $tpl) : Template
    {
        self::dic()->ui()->mainTemplate()->addJavaScript(self::plugin()->directory() . "/js/current_page_search.min.js");

        self::dic()->ui()->mainTemplate()->addOnLoadCode("il.SrSearchPDBlock.operator=" . json_encode(self::srSearchPDBlock()->config()->getValue(ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR))
            . ";il.SrSearchPDBlock.init();");

        $tpl->setVariableEscaped("TXT_PLACEHOLDER", self::plugin()->translate("placeholder", self::LANG_MODULE));

        return $tpl;
    }
}
