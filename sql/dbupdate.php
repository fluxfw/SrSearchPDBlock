<#1>
<?php
\srag\Plugins\SrSearchPDBlock\Config\Config::updateDB();
?>
<#2>
<?php
if (\srag\DIC\SrSearchPDBlock\DICStatic::dic()->database()->tableExists(\srag\Plugins\SrSearchPDBlock\Config\Config::TABLE_NAME_WRONG)) {
    \srag\DIC\SrSearchPDBlock\DICStatic::dic()->database()->dropTable(\srag\Plugins\SrSearchPDBlock\Config\Config::TABLE_NAME, false);

    \srag\DIC\SrSearchPDBlock\DICStatic::dic()->database()->renameTable(\srag\Plugins\SrSearchPDBlock\Config\Config::TABLE_NAME_WRONG, \srag\Plugins\SrSearchPDBlock\Config\Config::TABLE_NAME);
} else {
    \srag\Plugins\SrSearchPDBlock\Config\Config::updateDB();
}
?>
