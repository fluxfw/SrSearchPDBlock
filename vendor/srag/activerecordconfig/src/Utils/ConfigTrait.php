<?php

namespace srag\ActiveRecordConfig\SrSearchPDBlock\Utils;

use srag\ActiveRecordConfig\SrSearchPDBlock\Config\Repository as ConfigRepository;

/**
 * Trait ConfigTrait
 *
 * @package srag\ActiveRecordConfig\SrSearchPDBlock\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait ConfigTrait
{

    /**
     * @return ConfigRepository
     */
    protected static function config() : ConfigRepository
    {
        return ConfigRepository::getInstance();
    }
}
