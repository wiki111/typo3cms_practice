<?php
defined('TYPO3_MODE') or die();

// Add a "no print" checkbox
// USAGE: TCA Reference >  $TCA array reference > Extending the $TCA array
$temporaryColumn = array(
        'tx_examples_noprint' => array(
                'exclude' => 0,
                'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.tx_examples_noprint',
                'config' => array(
                        'type' => 'check',
                )
        )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $temporaryColumn,
        true
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'visibility',
        'tx_examples_noprint',
        'after:linkToTop'
);

// Create various FE plugins to demonstrate FlexForms definition
// USAGE: TCA Reference > $TCA array reference > ['columns'][fieldname]['config'] / TYPE: "flex"

// Add the plugins to the list of plugins
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
                'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
                'examples_pi1'
        ),
        'list_type',
        'examples'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
                'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi2',
                'examples_pi2'
        ),
        'list_type',
        'examples'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
                'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi3',
                'examples_pi3'
        ),
        'list_type',
        'examples'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        array(
                'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi4',
                'examples_pi4'
        ),
        'list_type',
        'examples'
);

// Register the "error" plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Documentation.Examples',
        'Error',
        'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pierror'
);
// Register the HTML Parser plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Documentation.Examples',
        'HtmlParser',
        'LLL:EXT:examples/Resources/Private/Language/locallang.xlf:htmlparser_plugin_title'
);
// Register the collections plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'Documentation.Examples',
        'Collections',
        'LLL:EXT:examples/Resources/Private/Language/locallang.xlf:collections_plugin_title'
);
// Register the FAL example plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Documentation.Examples',
	'FalExamples',
    'LLL:EXT:examples/Resources/Private/Language/locallang.xlf:falexample_plugin_title'
);

// Disable the display of layout and select_key fields for the plugins
// provided by the extension
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['examples_pi1'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['examples_pi2'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['examples_pi3'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['examples_pi4'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['examples_error'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['examples_htmlparser'] = 'layout,select_key,pages';

// Activate the display of the plug-in flexform field and set FlexForm definition
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['examples_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'examples_pi1', 'FILE:EXT:examples/Configuration/Flexforms/flexform_ds1.xml'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['examples_pi2'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'examples_pi2', 'FILE:EXT:examples/Configuration/Flexforms/flexform_ds2.xml'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['examples_pi3'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'examples_pi3', 'FILE:EXT:examples/Configuration/Flexforms/flexform_ds3.xml'
);
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['examples_pi4'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'examples_pi4', 'FILE:EXT:examples/Configuration/Flexforms/flexform_ds4.xml'
);
