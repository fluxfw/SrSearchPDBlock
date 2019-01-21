<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Search\SearchInputGUI;
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
	const PERSONAL_DESKTOP_CENTER = "personal_desktop_center";
	const COMPONENT_PERSONAL_DESKTOP = "Services/PersonalDesktop";
	const PART_CENTER_RIGHT = "right_column";
	const LANG_MODULE_SEARCH = "search";
	/**
	 * @var bool[]
	 */
	protected static $load = [
		self::PERSONAL_DESKTOP_CENTER => false
	];


	/**
	 * @param string $a_comp
	 * @param string $a_part
	 * @param array  $a_par
	 *
	 * @return array
	 */
	public function getHTML(/*string*/
		$a_comp, /*string*/
		$a_part, $a_par = []): array {

		if (!self::$load[self::PERSONAL_DESKTOP_CENTER]) {
			if ($a_comp === self::COMPONENT_PERSONAL_DESKTOP && $a_part === self::PART_CENTER_RIGHT) {

				self::$load[self::PERSONAL_DESKTOP_CENTER] = true;

				return [
					"mode" => ilUIHookPluginGUI::PREPEND,
					"html" => self::output()->getHTML(new SearchInputGUI())
				];
			}
		}

		return parent::getHTML($a_comp, $a_part, $a_par);
	}
}
