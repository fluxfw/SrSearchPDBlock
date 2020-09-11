<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
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
     * Factory constructor
     */
    private function __construct()
    {

    }


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
     * @return CurrentPageSearchBlock
     */
    public function currentPageSearch() : CurrentPageSearchBlock
    {
        $block = new CurrentPageSearchBlock();

        return $block;
    }


    /**
     * @return GlobalSearchBlock
     */
    public function globalSearch() : GlobalSearchBlock
    {
        $block = new GlobalSearchBlock();

        return $block;
    }
}
