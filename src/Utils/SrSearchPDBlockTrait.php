<?php

namespace srag\Plugins\SrSearchPDBlock\Utils;

use srag\Plugins\SrSearchPDBlock\Repository;

/**
 * Trait SrSearchPDBlockTrait
 *
 * @package srag\Plugins\SrSearchPDBlock\Utils
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
