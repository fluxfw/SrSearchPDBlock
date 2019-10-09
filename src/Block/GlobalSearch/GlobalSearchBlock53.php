<?php

namespace srag\Plugins\SrSearchPDBlock\Block\GlobalSearch;

use ilSrSearchPDBlockPlugin;

/**
 * Class GlobalSearchBlock53
 *
 * @package srag\Plugins\SrSearchPDBlock\Block\GlobalSearch
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class GlobalSearchBlock53 extends BaseGlobalSearchBlock
{

    /**
     * @return string
     */
    public static function getBlockType() : string
    {
        return ilSrSearchPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @return bool
     */
    public static function isRepositoryObject() : bool
    {
        return false;
    }
}
