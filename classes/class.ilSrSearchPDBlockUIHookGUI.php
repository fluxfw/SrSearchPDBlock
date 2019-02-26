<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\DIC\SrSearchPDBlock\Exception\DICException;
use srag\Plugins\SrSearchPDBlock\Block\SearchBlock53;
use srag\Plugins\SrSearchPDBlock\Block\SearchBlock54;

/**
 * Class ilSrSearchPDBlockUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockUIHookGUI extends ilUIHookPluginGUI {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
	const PERSONAL_DESKTOP_INIT = "personal_desktop";
	const COMPONENT_PERSONAL_DESKTOP = "Services/PersonalDesktop";
	const PART_CENTER_RIGHT = "right_column";
	/**
	 * @var bool[]
	 */
	protected static $load = [
		self::PERSONAL_DESKTOP_INIT => false
	];


	/**
	 * @param string $a_comp
	 * @param string $a_part
	 * @param array  $a_par
	 *
	 * @return array
	 *
	 * @throws DICException
	 * @throws ilTemplateException
	 */
	public function getHTML(/*string*/
		$a_comp, /*string*/
		$a_part, $a_par = []): array {

		if (!self::$load[self::PERSONAL_DESKTOP_INIT]) {

			if ($a_comp === self::COMPONENT_PERSONAL_DESKTOP && $a_part === self::PART_CENTER_RIGHT) {

				self::$load[self::PERSONAL_DESKTOP_INIT] = true;

				return [
					"mode" => ilUIHookPluginGUI::PREPEND,
					"html" => self::output()->getHTML(self::version()->is54() ? new SearchBlock54() : new SearchBlock53())
				];
			}
		}

		return parent::getHTML($a_comp, $a_part, $a_par);
	}
}
