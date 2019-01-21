<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class ilSrSearchPDBlockUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockUIHookGUI extends ilUIHookPluginGUI {

	use DICTrait;
	use SrSearchPDBlockTrait;
	const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
}
