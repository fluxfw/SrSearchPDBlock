<?php

namespace srag\Plugins\SrSearchPDBlock\Config\Form;

use ilSrSearchPDBlockPlugin;
use srag\CustomInputGUIs\SrSearchPDBlock\FormBuilder\AbstractFormBuilder;
use srag\Plugins\SrSearchPDBlock\Block\CurrentPageSearchBlock;
use srag\Plugins\SrSearchPDBlock\Block\GlobalSearchBlock;
use srag\Plugins\SrSearchPDBlock\Config\ConfigCtrl;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class FormBuilder
 *
 * @package srag\Plugins\SrSearchPDBlock\Config\Form
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class FormBuilder extends AbstractFormBuilder
{

    use SrSearchPDBlockTrait;

    const KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS = "show_current_page_search_container_objects";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD = "show_current_page_search_personal_desktop";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR = "show_current_page_search_operator";
    const KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS = "show_global_search_container_objects";
    const KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD = "show_global_search_personal_desktop";
    const OPERATOR_AND = 1;
    const OPERATOR_OR = 2;
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;


    /**
     * @inheritDoc
     *
     * @param ConfigCtrl $parent
     */
    public function __construct(ConfigCtrl $parent)
    {
        parent::__construct($parent);
    }


    /**
     * @inheritDoc
     */
    protected function getButtons() : array
    {
        $buttons = [
            ConfigCtrl::CMD_UPDATE_CONFIGURE => self::plugin()->translate("save", ConfigCtrl::LANG_MODULE)
        ];

        return $buttons;
    }


    /**
     * @inheritDoc
     */
    protected function getData() : array
    {
        $data = [
            GlobalSearchBlock::LANG_MODULE      => [
                self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD         => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD),
                self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS)
            ],
            CurrentPageSearchBlock::LANG_MODULE => [
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD         => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD),
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS),
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR             => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR)
            ]
        ];

        return $data;
    }


    /**
     * @inheritDoc
     */
    protected function getFields() : array
    {
        $fields = [
            GlobalSearchBlock::LANG_MODULE      => self::dic()->ui()->factory()->input()->field()->section([
                self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD         => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("dashboard", ConfigCtrl::LANG_MODULE)),
                self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("container_objects", ConfigCtrl::LANG_MODULE))
            ], self::plugin()->translate("title", GlobalSearchBlock::LANG_MODULE)),
            CurrentPageSearchBlock::LANG_MODULE => self::dic()->ui()->factory()->input()->field()->section([
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD         => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("dashboard", ConfigCtrl::LANG_MODULE)),
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()
                    ->translate("container_objects", ConfigCtrl::LANG_MODULE)),
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR             => self::dic()
                    ->ui()
                    ->factory()
                    ->input()
                    ->field()
                    ->radio(self::plugin()
                        ->translate("operator", ConfigCtrl::LANG_MODULE))
                    ->withRequired(true)
                    ->withOption(self::OPERATOR_AND, self::plugin()->translate("operator_and", ConfigCtrl::LANG_MODULE))
                    ->withOption(self::OPERATOR_OR, self::plugin()->translate("operator_or", ConfigCtrl::LANG_MODULE))
            ], self::plugin()->translate("title", CurrentPageSearchBlock::LANG_MODULE))
        ];

        return $fields;
    }


    /**
     * @inheritDoc
     */
    protected function getTitle() : string
    {
        return self::plugin()->translate("configuration", ConfigCtrl::LANG_MODULE);
    }


    /**
     * @inheritDoc
     */
    protected function storeData(array $data)/* : void*/
    {
        self::srSearchPDBlock()->config()->setValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD, boolval($data[GlobalSearchBlock::LANG_MODULE][self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS, boolval($data[GlobalSearchBlock::LANG_MODULE][self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD, boolval($data[CurrentPageSearchBlock::LANG_MODULE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS, boolval($data[CurrentPageSearchBlock::LANG_MODULE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR, intval($data[CurrentPageSearchBlock::LANG_MODULE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR]));
    }
}
