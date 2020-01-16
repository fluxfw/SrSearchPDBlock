<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85442f6844a11e7759c1b2726154a12e
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrSearchPDBlock\\' => 45,
            'srag\\Plugins\\SrSearchPDBlock\\' => 29,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\SrSearchPDBlock\\' => 25,
            'srag\\CustomInputGUIs\\SrSearchPDBlock\\' => 37,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\SrSearchPDBlock\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrSearchPDBlock\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\SrSearchPDBlock\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ilSrSearchPDBlockConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilSrSearchPDBlockConfigGUI.php',
        'ilSrSearchPDBlockPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrSearchPDBlockPlugin.php',
        'ilSrSearchPDBlockUIHookGUI' => __DIR__ . '/../..' . '/classes/class.ilSrSearchPDBlockUIHookGUI.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\Config\\Config' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Config.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\Config\\Factory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Factory.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\Config\\Repository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Repository.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\ActiveRecordConfig\\SrSearchPDBlock\\Utils\\ConfigTrait' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Utils/ConfigTrait.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Component\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Component\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/Section.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Implementation\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PieChart\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Component\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Component\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Component\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Component\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Component\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Implementation\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Implementation\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Implementation\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ProgressMeter\\Implementation\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\SrSearchPDBlock\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\SrSearchPDBlock\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrSearchPDBlock\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrSearchPDBlock\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrSearchPDBlock\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrSearchPDBlock\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrSearchPDBlock\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\SrSearchPDBlock\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrSearchPDBlock\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrSearchPDBlock\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrSearchPDBlock\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrSearchPDBlock\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrSearchPDBlock\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrSearchPDBlock\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrSearchPDBlock\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrSearchPDBlock\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrSearchPDBlock\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrSearchPDBlock\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrSearchPDBlock\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrSearchPDBlock\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrSearchPDBlock\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrSearchPDBlock\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrSearchPDBlock\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrSearchPDBlock\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\BaseSearchBlock' => __DIR__ . '/../..' . '/src/Block/BaseSearchBlock.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\CurrentPageSearch\\BaseCurrentPageSearchBlock' => __DIR__ . '/../..' . '/src/Block/CurrentPageSearch/BaseCurrentPageSearchBlock.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\CurrentPageSearch\\CurrentPageSearchBlock53' => __DIR__ . '/../..' . '/src/Block/CurrentPageSearch/CurrentPageSearchBlock53.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\CurrentPageSearch\\CurrentPageSearchBlock54' => __DIR__ . '/../..' . '/src/Block/CurrentPageSearch/CurrentPageSearchBlock54.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\GlobalSearch\\BaseGlobalSearchBlock' => __DIR__ . '/../..' . '/src/Block/GlobalSearch/BaseGlobalSearchBlock.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\GlobalSearch\\GlobalSearchBlock53' => __DIR__ . '/../..' . '/src/Block/GlobalSearch/GlobalSearchBlock53.php',
        'srag\\Plugins\\SrSearchPDBlock\\Block\\GlobalSearch\\GlobalSearchBlock54' => __DIR__ . '/../..' . '/src/Block/GlobalSearch/GlobalSearchBlock54.php',
        'srag\\Plugins\\SrSearchPDBlock\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\SrSearchPDBlock\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'srag\\Plugins\\SrSearchPDBlock\\Utils\\SrSearchPDBlockTrait' => __DIR__ . '/../..' . '/src/Utils/SrSearchPDBlockTrait.php',
        'srag\\RemovePluginDataConfirm\\SrSearchPDBlock\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrSearchPDBlock\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrSearchPDBlock\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\SrSearchPDBlock\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85442f6844a11e7759c1b2726154a12e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85442f6844a11e7759c1b2726154a12e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85442f6844a11e7759c1b2726154a12e::$classMap;

        }, null, ClassLoader::class);
    }
}
