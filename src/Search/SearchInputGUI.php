<?php

namespace srag\Plugins\SrSearchPDBlock\Search;

use ilBlockGUI;
use ilSearchController;
use ilSrSearchPDBlockPlugin;
use ilSrSearchPDBlockUIHookGUI;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class SearchInputGUI
 *
 * @package srag\Plugins\SrSearchPDBlock\Search
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class SearchInputGUI extends ilBlockGUI {

	use DICTrait;
	use SrSearchPDBlockTrait;
	const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;


	/**
	 * SearchInputGUI constructor
	 */
	public function __construct() {
		parent::__construct();

		$this->initBlock();
	}


	/**
	 *
	 */
	protected function initBlock()/*: void*/ {
		self::dic()->mainTemplate()->addCss(self::plugin()->directory() . "/css/srsearchpdblock.css");

		$this->setTitle(self::plugin()->translate("search", ilSrSearchPDBlockUIHookGUI::LANG_MODULE_SEARCH));
	}


	/**
	 *
	 */
	public function fillDataSection()/*: void*/ {
		$tpl = self::plugin()->template("search_input.html");

		$tpl->setVariable("TXT_PLACEHOLDER", self::plugin()->translate("placeholder", ilSrSearchPDBlockUIHookGUI::LANG_MODULE_SEARCH));
		$tpl->setVariable("TXT_GO", self::plugin()->translate("go", ilSrSearchPDBlockUIHookGUI::LANG_MODULE_SEARCH));

		//Services/Search/classes/class.ilMainMenuSearchGUI.php::getHTML
		$search_action = "ilias.php?baseClass=" . ilSearchController::class . "&cmd=post&rtoken=" . self::dic()->ctrl()->getRequestToken()
			. "&fallbackCmd=remoteSearch";
		$tpl->setVariable("ACTION", $search_action);

		$tpl->setVariable("BUTTON", self::output()->getHTML(self::dic()->ui()->factory()->button()->standard(self::plugin()
			->translate("search", ilSrSearchPDBlockUIHookGUI::LANG_MODULE_SEARCH), "")));

		$this->setDataSection(self::output()->getHTML($tpl));
	}


	/**
	 * @return string
	 */
	public static function getBlockType(): string {
		return ilSrSearchPDBlockPlugin::PLUGIN_ID;
	}


	/**
	 * @return bool
	 */
	public static function isRepositoryObject(): bool {
		return false;
	}
}
