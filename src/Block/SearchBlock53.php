<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilSrSearchPDBlockPlugin;

/**
 * Class SearchBlock53
 *
 * @package srag\Plugins\SrSearchPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class SearchBlock53 extends BaseSearchBlock
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
