<?php

namespace srag\Plugins\SrSearchPDBlock\Config;

use ilCheckboxInputGUI;
use ilFormSectionHeaderGUI;
use ilRadioGroupInputGUI;
use ilRadioOption;
use ilSrSearchPDBlockPlugin;
use srag\ActiveRecordConfig\SrSearchPDBlock\ActiveRecordConfigFormGUI;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearch\BaseCurrentPageSearchBlock;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearch\BaseGlobalSearchBlock;

/**
 * Class ConfigFormGUI
 *
 * @package srag\Plugins\SrSearchPDBlock\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ConfigFormGUI extends ActiveRecordConfigFormGUI
{

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    const CONFIG_CLASS_NAME = Config::class;


    /**
     * @inheritDoc
     */
    protected function initTitle()
    {
        $this->setTitle("");
    }


    /**
     * @inheritDoc
     */
    protected function initFields()/*: void*/
    {
        $this->fields = [
            BaseGlobalSearchBlock::LANG_MODULE . "_header"   => [
                self::PROPERTY_CLASS => ilFormSectionHeaderGUI::class,
                "setTitle"           => self::plugin()->translate("title", BaseGlobalSearchBlock::LANG_MODULE)
            ],
            Config::KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP  => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("personal_desktop", self::LANG_MODULE)
                ])
            ],
            Config::KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("container_objects", self::LANG_MODULE)
                ])
            ],

            BaseCurrentPageSearchBlock::LANG_MODULE . "_header"    => [
                self::PROPERTY_CLASS => ilFormSectionHeaderGUI::class,
                "setTitle"           => self::plugin()->translate("title", BaseCurrentPageSearchBlock::LANG_MODULE)
            ],
            Config::KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP  => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("personal_desktop", self::LANG_MODULE)
                ])
            ],
            Config::KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS => [
                self::PROPERTY_CLASS => ilCheckboxInputGUI::class,
                "setTitle"           => self::plugin()->translate("show", self::LANG_MODULE, [
                    self::plugin()->translate("container_objects", self::LANG_MODULE)
                ])
            ],
            Config::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR          => [
                self::PROPERTY_CLASS    => ilRadioGroupInputGUI::class,
                self::PROPERTY_SUBITEMS => [
                    Config::OPERATOR_AND => [
                        self::PROPERTY_CLASS => ilRadioOption::class,
                        "setTitle"           => self::plugin()->translate("operator_and", self::LANG_MODULE)
                    ],
                    Config::OPERATOR_OR  => [
                        self::PROPERTY_CLASS => ilRadioOption::class,
                        "setTitle"           => self::plugin()->translate("operator_or", self::LANG_MODULE)
                    ]
                ],
                "setTitle"              => self::plugin()->translate("operator", self::LANG_MODULE)
            ]
        ];
    }
}
