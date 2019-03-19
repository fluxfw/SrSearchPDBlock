<?php

namespace srag\Plugins\SrSearchPDBlock\Block;

use ilSrSearchPDBlockPlugin;

/**
 * Class SearchBlock54
 *
 * @package srag\Plugins\SrSearchPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class SearchBlock54 extends BaseSearchBlock {

	/**
	 * @return string
	 */
	public function getBlockType(): string {
		return ilSrSearchPDBlockPlugin::PLUGIN_ID;
	}


	/**
	 * @return bool
	 */
	protected function isRepositoryObject(): bool {
		return false;
	}
}
