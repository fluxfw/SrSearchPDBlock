<?php

namespace srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch;

use ilSrSearchPDBlockPlugin;

/**
 * Class CurrentPageSearchBlock54
 *
 * @package srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CurrentPageSearchBlock54 extends BaseCurrentPageSearchBlock
{

    /**
     * @return string
     */
    public function getBlockType() : string
    {
        return ilSrSearchPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @return bool
     */
    protected function isRepositoryObject() : bool
    {
        return false;
    }
}
