<?php

use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\CurrentPageSearchBlock53;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\CurrentPageSearchBlock54;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\GlobalSearchBlock53;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\GlobalSearchBlock54;
use srag\Plugins\SrSearchPDBlock\Config\Config;

/**
 * Class ilSrSearchPDBlockUIHookGUI
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilSrSearchPDBlockUIHookGUI extends ilUIHookPluginGUI
{

    use DICTrait;
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    const COMPONENT_CONTAINER = "Services/Container";
    const COMPONENT_PERSONAL_DESKTOP = "Services/PersonalDesktop";
    const PART_CENTER_RIGHT = "right_column";


    /**
     * @param string $a_comp
     * @param string $a_part
     * @param array  $a_par
     *
     * @return array
     */
    public function getHTML(/*string*/
        $a_comp, /*string*/
        $a_part,
        $a_par = []
    ) : array {

        if ($a_comp === self::COMPONENT_PERSONAL_DESKTOP && $a_part === self::PART_CENTER_RIGHT) {
            return [
                "mode" => self::PREPEND,
                "html" => $this->getBlocks(Config::KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP, Config::KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP)
            ];
        }

        if ($a_comp === self::COMPONENT_CONTAINER && $a_part === self::PART_CENTER_RIGHT) {
            return [
                "mode" => self::PREPEND,
                "html" => $this->getBlocks(Config::KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS, Config::KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS)
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

        if (Config::getField($key_config_global_search)) {
            $blocks[] = self::version()->is54() ? new GlobalSearchBlock54() : new GlobalSearchBlock53();
        }

        if (Config::getField($key_config_current_page_search)) {
            $blocks[] = self::version()->is54() ? new CurrentPageSearchBlock54() : new CurrentPageSearchBlock53();
        }

        return self::output()->getHTML($blocks);
    }
}
