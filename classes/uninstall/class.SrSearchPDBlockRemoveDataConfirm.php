<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use srag\RemovePluginDataConfirm\SrSearchPDBlock\AbstractRemovePluginDataConfirm;

/**
 * Class SrSearchPDBlockRemoveDataConfirm
 *
 * @author            studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 *
 * @ilCtrl_isCalledBy SrSearchPDBlockRemoveDataConfirm: ilUIPluginRouterGUI
 */
class SrSearchPDBlockRemoveDataConfirm extends AbstractRemovePluginDataConfirm
{

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
}
