<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\ActiveRecordConfig\SrSearchPDBlock\ActiveRecordConfigGUI;
use srag\Plugins\SrSearchPDBlock\Config\ConfigFormGUI;

/**
 * Class ilSrSearchPDBlockConfigGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockConfigGUI extends ActiveRecordConfigGUI
{

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var array
     */
    protected static $tabs = [self::TAB_CONFIGURATION => ConfigFormGUI::class];
}
