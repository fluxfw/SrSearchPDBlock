<?php

use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Config\ConfigFormGUI;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class ilSrSearchPDBlockUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockUIHookGUI extends ilUIHookPluginGUI
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    const COMPONENT_CONTAINER = "Services/Container";
    const COMPONENT_PERSONAL_DESKTOP = "Services/PersonalDesktop";
    const PART_RIGHT_COLUMN = "right_column";


    /**
     * @inheritDoc
     */
    public function getHTML(/*string*/ $a_comp, /*string*/ $a_part, $a_par = []) : array
    {

        if ($a_comp === self::COMPONENT_PERSONAL_DESKTOP && $a_part === self::PART_RIGHT_COLUMN) {

            return [
                "mode" => self::PREPEND,
                "html" => $this->getBlocks(ConfigFormGUI::KEY_SHOW_GLOBAL_SEARCH_ON_PERSONAL_DESKTOP, ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_PERSONAL_DESKTOP)
            ];
        }

        if ($a_comp === self::COMPONENT_CONTAINER && $a_part === self::PART_RIGHT_COLUMN) {

            return [
                "mode" => self::PREPEND,
                "html" => $this->getBlocks(ConfigFormGUI::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS, ConfigFormGUI::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS)
            ];
        }

        return parent::getHTML($a_comp, $a_part, $a_par);
    }


    /**
     * @param string $key_config_global_search
     * @param string $key_config_current_page_search
     *
     * @return string
     */
    protected function getBlocks(string $key_config_global_search, string $key_config_current_page_search) : string
    {
        $blocks = [];

        if (self::srSearchPDBlock()->config()->getValue($key_config_global_search)) {
            $blocks[] = self::srSearchPDBlock()->blocks()->factory()->globalSearch();
        }

        if (self::srSearchPDBlock()->config()->getValue($key_config_current_page_search)) {
            $blocks[] = self::srSearchPDBlock()->blocks()->factory()->currentPageSearch();
        }

        return self::output()->getHTML($blocks);
    }
}
