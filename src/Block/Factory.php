<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\BaseCurrentPageSearchBlock;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\CurrentPageSearchBlock53;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\CurrentPageSearchBlock54;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\BaseGlobalSearchBlock;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\GlobalSearchBlock53;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\GlobalSearchBlock54;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrSearchPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Factory
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return BaseGlobalSearchBlock
     */
    public function globalSearch() : BaseGlobalSearchBlock
    {
        if (self::version()->is54()) {
            $block = new GlobalSearchBlock54();
        } else {
            $block = new GlobalSearchBlock53();
        }

        return $block;
    }


    /**
     * @return BaseCurrentPageSearchBlock
     */
    public function currentPageSearch() : BaseCurrentPageSearchBlock
    {
        if (self::version()->is54()) {
            $block = new CurrentPageSearchBlock54();
        } else {
            $block = new CurrentPageSearchBlock53();
        }

        return $block;
    }
}
