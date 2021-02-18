<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use ilSearchController;

/**
 * Class GlobalSearch
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class GlobalSearch extends BaseSearch
{

    const TYPE = "global_search";


    /**
     * @inheritDoc
     */
    protected function getConfig() : array
    {
        return [
            "action" => "ilias.php?baseClass=" . ilSearchController::class . "&cmd=post&rtoken=" . self::dic()->ctrl()->getRequestToken() . "&fallbackCmd=remoteSearch"
            /*Services/Search/classes/class.ilMainMenuSearchGUI.php::getHTML*/,
            "method" => "post",
            "name"   => "queryString",
            "texts"  => [
                "go" => self::plugin()->translate("go", self::LANG_MODULE)
            ]
        ];
    }
}
