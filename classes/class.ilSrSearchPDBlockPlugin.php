<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;
use srag\RemovePluginDataConfirm\SrSearchPDBlock\PluginUninstallTrait;

/**
 * Class ilSrSearchPDBlockPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockPlugin extends ilUserInterfaceHookPlugin {

	use PluginUninstallTrait;
	use SrSearchPDBlockTrait;
	const PLUGIN_ID = "srsearchpd";
	const PLUGIN_NAME = "SrSearchPDBlock";
	const PLUGIN_CLASS_NAME = self::class;
	const REMOVE_PLUGIN_DATA_CONFIRM_CLASS_NAME = SrSearchPDBlockRemoveDataConfirm::class;
	/**
	 * @var self|null
	 */
	protected static $instance = NULL;


	/**
	 * @return self
	 */
	public static function getInstance(): self {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * ilSrSearchPDBlockPlugin constructor
	 */
	public function __construct() {
		parent::__construct();
	}


	/**
	 * @return string
	 */
	public function getPluginName(): string {
		return self::PLUGIN_NAME;
	}


	/**
	 * @inheritdoc
	 */
	protected function deleteData()/*: void*/ {

	}
}
