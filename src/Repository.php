<?php

namespace srag\Plugins\SrSearchPDBlock;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Config\Config;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrSearchPDBlock
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Repository
{

    use DICTrait;
    use SrSearchPDBlockTrait;
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var self
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
     * Repository constructor
     */
    private function __construct()
    {

    }


    /**
     *
     */
    public function dropTables()/*:void*/
    {
        self::dic()->database()->dropTable(Config::TABLE_NAME, false);
        self::dic()->database()->dropTable(Config::TABLE_NAME_WRONG, false);
    }


    /**
     *
     */
    public function installTables()/*:void*/
    {
        if (self::dic()->database()->tableExists(Config::TABLE_NAME_WRONG)) {
            self::dic()->database()->dropTable(Config::TABLE_NAME, false);

            self::dic()->database()->renameTable(Config::TABLE_NAME_WRONG, Config::TABLE_NAME);

            Config::updateDB();
        } else {
            Config::updateDB();
        }
    }
}
