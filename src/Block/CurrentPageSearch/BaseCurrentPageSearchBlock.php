<?php

namespace srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch;

use ilTemplate;
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
    protected function fillTemplate(ilTemplate $tpl) : ilTemplate
    {
        self::dic()->mainTemplate()->addJavaScript(self::plugin()->directory() . "/js/current_page_search.min.js");

        self::dic()->mainTemplate()->addOnLoadCode("il.SrSearchPDBlock.operator=" . json_encode(self::srSearchPDBlock()->config()->getField(ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR))
            . ";il.SrSearchPDBlock.init();");

        $tpl->setVariable("TXT_PLACEHOLDER", self::plugin()->translate("placeholder", self::LANG_MODULE));

        return $tpl;
    }
}
