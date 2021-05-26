<?php

namespace srag\Plugins\SrSearchPDBlock\Config\Form;

use ilSrSearchPDBlockPlugin;
use srag\CustomInputGUIs\SrSearchPDBlock\FormBuilder\AbstractFormBuilder;
use srag\Plugins\SrSearchPDBlock\Config\ConfigCtrl;
use srag\Plugins\SrSearchPDBlock\Search\BaseSearch;
use srag\Plugins\SrSearchPDBlock\Search\CurrentPageSearch;
use srag\Plugins\SrSearchPDBlock\Search\GlobalSearch;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class FormBuilder
 *
 * @package srag\Plugins\SrSearchPDBlock\Config\Form
 */
class FormBuilder extends AbstractFormBuilder
{

    use SrSearchPDBlockTrait;

    const KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE = "show_" . CurrentPageSearch::TYPE . "_everywhere";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS = "show_" . CurrentPageSearch::TYPE . "_container_objects";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD = "show_" . CurrentPageSearch::TYPE . "_personal_desktop";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR = "show_" . CurrentPageSearch::TYPE . "_operator";
    const KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE = "show_" . GlobalSearch::TYPE . "_everywhere";
    const KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS = "show_" . GlobalSearch::TYPE . "_container_objects";
    const KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD = "show_" . GlobalSearch::TYPE . "_personal_desktop";
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
            GlobalSearch::TYPE      => [
                self::KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE           => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE),
                self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD         => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD),
                self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS)
            ],
            CurrentPageSearch::TYPE => [
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE           => self::srSearchPDBlock()->config()->getValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE),
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
            GlobalSearch::TYPE      => self::dic()->ui()->factory()->input()->field()->section([
                self::KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE           => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("everywhere", ConfigCtrl::LANG_MODULE)),
                self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD         => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("dashboard", ConfigCtrl::LANG_MODULE)),
                self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("container_objects", ConfigCtrl::LANG_MODULE))
            ], self::plugin()->translate(GlobalSearch::TYPE, BaseSearch::LANG_MODULE)),
            CurrentPageSearch::TYPE => self::dic()->ui()->factory()->input()->field()->section([
                self::KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE           => self::dic()->ui()->factory()->input()->field()->checkbox(self::plugin()->translate("everywhere", ConfigCtrl::LANG_MODULE)),
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
            ], self::plugin()->translate(CurrentPageSearch::TYPE, BaseSearch::LANG_MODULE))
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
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE, boolval($data[GlobalSearch::TYPE][self::KEY_SHOW_GLOBAL_SEARCH_EVERYWHERE]));
        self::srSearchPDBlock()->config()->setValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD, boolval($data[GlobalSearch::TYPE][self::KEY_SHOW_GLOBAL_SEARCH_ON_DASHBOARD]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS, boolval($data[GlobalSearch::TYPE][self::KEY_SHOW_GLOBAL_SEARCH_ON_CONTAINER_OBJECTS]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE, boolval($data[CurrentPageSearch::TYPE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_EVERYWHERE]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD, boolval($data[CurrentPageSearch::TYPE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_DASHBOARD]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS, boolval($data[CurrentPageSearch::TYPE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_ON_CONTAINER_OBJECTS]));
        self::srSearchPDBlock()
            ->config()
            ->setValue(self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR, intval($data[CurrentPageSearch::TYPE][self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR]));
    }
}
