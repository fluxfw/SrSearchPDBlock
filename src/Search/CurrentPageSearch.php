<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use srag\Plugins\SrSearchPDBlock\Config\Form\FormBuilder;

/**
 * Class CurrentPageSearch
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CurrentPageSearch extends BaseSearch
{

    const TYPE = "current_page_search";


    /**
     * @inheritDoc
     */
    protected function getConfig() : array
    {
        return [
            "operator" => self::srSearchPDBlock()->config()->getValue(FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR)
        ];
    }
}
