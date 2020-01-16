<?php

namespace srag\Plugins\SrSearchPDBlock\Config;

use ilCheckboxInputGUI;
use ilFormSectionHeaderGUI;
use ilRadioGroupInputGUI;
use ilRadioOption;
use ilSrSearchPDBlockConfigGUI;
use ilSrSearchPDBlockPlugin;
use srag\CustomInputGUIs\SrSearchPDBlock\PropertyFormGUI\PropertyFormGUI;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\BaseCurrentPageSearchBlock;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\BaseGlobalSearchBlock;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class ConfigFormGUI
 *
 * @package srag\Plugins\SrSearchPDBlock\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ConfigFormGUI extends PropertyFormGUI
{

    use SrSearchPDBlockTrait;
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    const KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP = "show_global_search_personal_desktop";
    const KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS = "show_global_search_container_objects";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP = "show_current_page_search_personal_desktop";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS = "show_current_page_search_container_objects";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR = "show_current_page_search_operator";
    const LANG_MODULE = ilSrSearchPDBlockConfigGUI::LANG_MODULE;
    const OPERATOR_AND = 1;
    const OPERATOR_OR = 2;


    /**
     * ConfigFormGUI constructor
     *
     * @param ilSrSearchPDBlockConfigGUI $parent
     */
    public function __construct(ilSrSearchPDBlockConfigGUI $parent)
    {
        parent::__construct($parent);
    }


    /**
     * @inheritDoc
     */
    protected function getValue(/*string*/ $key)
    {
        switch ($key) {
            default:
                return self::srSearchPDBlock()->config()->getField($key);
        }
    }


    /**
     * @inheritDoc
     */
    protected function initCommands()/*: void*/
    {
        $this->addCommandButton(ilSrSearchPDBlockConfigGUI::CMD_UPDATE_CONFIGURE, $this->txt("save"));
    }


    /**
     * @inheritDoc
     */
    protected function initFields()/*: void*/
    {
        $this->fields = [
            BaseGlobalSearchBlock::LANG_MODULE . "_header" => [
                self::PROPERTY_CLASS => ilFormSectionHeaderGUI::class,
                "setTitle"           => self::plugin()->translate("title", BaseGlobalSearchBlock::LANG_MODULE)
            ],
            self::KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP  => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("personal_desktop", self::LANG_MODULE)
                ])
            ],
            self::KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("container_objects", self::LANG_MODULE)
                ])
            ],

            BaseCurrentPageSearchBlock::LANG_MODULE . "_header"  => [
                self::PROPERTY_CLASS => ilFormSectionHeaderGUI::class,
                "setTitle"           => self::plugin()->translate("title", BaseCurrentPageSearchBlock::LANG_MODULE)
            ],
            self::KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP  => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("personal_desktop", self::LANG_MODULE)
                ])
            ],
            self::KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("container_objects", self::LANG_MODULE)
                ])
            ],
            self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR          => [
                self::PROPERTY_CLASS    => ilRadioGroupInputGUI::class,
                self::PROPERTY_SUBITEMS => [
                    self::OPERATOR_AND => [
                        self::PROPERTY_CLASS => ilRadioOption::class,
                        "setTitle"           => self::plugin()->translate("operator_and", self::LANG_MODULE)
                    ],
                    self::OPERATOR_OR  => [
                        self::PROPERTY_CLASS => ilRadioOption::class,
                        "setTitle"           => self::plugin()->translate("operator_or", self::LANG_MODULE)
                    ]
                ],
                "setTitle"              => self::plugin()->translate("operator", self::LANG_MODULE)
            ]
        ];
    }


    /**
     * @inheritDoc
     */
    protected function initId()/*: void*/
    {

    }


    /**
     * @inheritDoc
     */
    protected function initTitle()/*: void*/
    {

    }


    /**
     * @inheritDoc
     */
    protected function storeValue(/*string*/ $key, $value)/*: void*/
    {
        switch ($key) {
            default:
                self::srSearchPDBlock()->config()->setField($key, $value);
                break;
        }
    }
}
