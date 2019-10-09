<?php

namespace srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch;

use ilSrSearchPDBlockPlugin;

/**
 * Class CurrentPageSearchBlock53
 *
 * @package srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CurrentPageSearchBlock53 extends BaseCurrentPageSearchBlock
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
