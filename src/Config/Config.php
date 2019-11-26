<?php

namespace srag\Plugins\SrSearchPDBlock\Config;

use ilSrSearchPDBlockPlugin;
use srag\ActiveRecordConfig\SrSearchPDBlock\ActiveRecordConfig;

/**
 * Class Config
 *
 * @package srag\Plugins\SrSearchPDBlock\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Config extends ActiveRecordConfig
{

    const TABLE_NAME = "srsearchpd_config";
    /**
     * @var string
     *
     * @deprecated
     */
    const TABLE_NAME_WRONG = "ui_uihk_srlppd_config";
    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    const KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP = "show_global_search_personal_desktop";
    const KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS = "show_global_search_container_objects";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP = "show_current_page_search_personal_desktop";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS = "show_current_page_search_container_objects";
    const KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR = "show_current_page_search_operator";
    const OPERATOR_AND = 1;
    const OPERATOR_OR = 2;
    /**
     * @var array
     */
    protected static $fields
        = [
            self::KEY_SHOW_GLOBAL_SEARCH_PERSONAL_DESKTOP        => [self::TYPE_BOOLEAN, false],
            self::KEY_SHOW_GLOBAL_SEARCH_CONTAINER_OBJECTS       => [self::TYPE_BOOLEAN, false],
            self::KEY_SHOW_CURRENT_PAGE_SEARCH_PERSONAL_DESKTOP  => [self::TYPE_BOOLEAN, false],
            self::KEY_SHOW_CURRENT_PAGE_SEARCH_CONTAINER_OBJECTS => [self::TYPE_BOOLEAN, false],
            self::KEY_SHOW_CURRENT_PAGE_SEARCH_OPERATOR          => [self::TYPE_INTEGER, self::OPERATOR_AND]
        ];
}
