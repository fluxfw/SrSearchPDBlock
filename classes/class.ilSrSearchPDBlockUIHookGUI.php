<?php

require_once __DIR__ . "/../vendor/autoload.php";

use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Config\Form\FormBuilder;
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

    const COMPONENT_CONTAINER = "Services/Container";
    const COMPONENT_DASHBOARD = "Services/Dashboard";
    const COMPONENT_PERSONAL_DESKTOP = "Services/PersonalDesktop";
    const MAIN_MENU_TEMPLATE_ID = "Services/MainMenu/tpl.main_menu.html";
    const META_BAR_TEMPLATE_ID = "src/UI/templates/default/MainControls/tpl.metabar.html";
    const PART_RIGHT_COLUMN = "right_column";
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    const TEMPLATE_GET = "template_get";


    /**
     * @inheritDoc
     */
    public function getHTML(/*string*/ $a_comp, /*string*/ $a_part, $a_par = []) : array
    {
        if (($a_par["tpl_id"] === self::META_BAR_TEMPLATE_ID || $a_par["tpl_id"] === self::MAIN_MENU_TEMPLATE_ID) && $a_part === self::TEMPLATE_GET) {
            return [
                "mode" => self::APPEND,
                "html" => self::srSearchPDBlock()->search()->getSearches(FormBuilder::KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE, FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE, true)
            ];
        }

        if (($a_comp === self::COMPONENT_DASHBOARD || $a_comp === self::COMPONENT_PERSONAL_DESKTOP) && $a_part === self::PART_RIGHT_COLUMN) {
            return [
                "mode" => self::PREPEND,
                "html" => self::srSearchPDBlock()->search()->getSearches(FormBuilder::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD, FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD)
            ];
        }

        if ($a_comp === self::COMPONENT_CONTAINER && $a_part === self::PART_RIGHT_COLUMN) {
            return [
                "mode" => self::PREPEND,
                "html" => self::srSearchPDBlock()->search()->getSearches(FormBuilder::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS, FormBuilder::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS)
            ];
        }

        return parent::getHTML($a_comp, $a_part, $a_par);
    }
}
