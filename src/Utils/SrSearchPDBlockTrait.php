<?php

namespace srag\Plugins\SrSearchPDBlock\Utils;

use srag\Plugins\SrSearchPDBlock\Repository;

/**
 * Trait SrSearchPDBlockTrait
 *
 * @package srag\Plugins\SrSearchPDBlock\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait SrSearchPDBlockTrait
{

    /**
     * @return Repository
     */
    protected static function srSearchPDBlock() : Repository
    {
        return Repository::getInstance();
    }
}
