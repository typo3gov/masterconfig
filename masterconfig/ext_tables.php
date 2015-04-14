<?php

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Adding static TypoScript to list of available libraries

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY,
	"static/init",
	"Master configuration"
);

$tempColumns = array (
	'tx_masterconfig_css_class' => array (
		'exclude' => 1,
		'label' => 'CSS Class',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'tx_masterconfig_teaserswitch' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:masterconfig/locallang_db.xml:pages.tx_masterconfig_teaseronoff',
		'config' => array (
			'type' => 'check',
			'cols' => '1',
			'default' => '1'
		)
	),
	'tx_masterconfig_teaserimage' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:masterconfig/locallang_db.xml:pages.tx_masterconfig_teaserimage',
		'config' => array (
			'type' => 'group',
			'internal_type' => 'file',
			'allowed' => 'gif,jpg,jpeg,tif,bmp,pcx,tga,png',
			'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
			'uploadfolder' => 'uploads/media',
			'show_thumbs' => 1,
			'size' => 1,
			'minitems' => 0,
			'maxitems' => 1,
		)
	),
	'tx_masterconfig_teasertitle' => array (
		'exclude' => 1,
		'label' => 'Teaserbild Title-Text',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
	'tx_masterconfig_teaseralt' => array (
		'exclude' => 1,
		'label' => 'Teaserbild Alt-Text',
		'config' => array (
			'type' => 'input',
			'size' => '30',
		)
	),
);

t3lib_div::loadTCA('pages');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_masterconfig_teaserswitch;;;;1-1-1',1,'before:abstract');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_masterconfig_teaserimage;;;;1-1-1',1,'before:abstract');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_masterconfig_teasertitle;;;;1-1-1',1,'after:tx_masterconfig_teaserimage');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_masterconfig_teaseralt;;;;1-1-1',1,'after:tx_masterconfig_teaserimage');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','tx_masterconfig_css_class;;;;1-1-1',1,'after:tx_masterconfig_teaseralt');
$TCA['pages']['columns']['abstract']['defaultExtras'] = 'richtext[*]';
$TCA['pages_language_overlay']['columns']['abstract']['defaultExtras'] = 'richtext[*]';
#$TCA['pages']['columns']['nav_title']['config']['placeholder'] = 'Hier ist ein Placeholder-Text!';

$newsColumns = array(
    'tx_masterconfig_enddatetime' => array(
        'exclude' => 0,
        'l10n_mode' => 'mergeIfNotBlank',
        'label' => 'Endzeitpunkt für Termine',
        'config' => array(
            'type' => 'input',
            'size' => 12,
            'max' => 20,
            'eval' => 'datetime',
            'default' => mktime(date('H'), date('i'), 0, date('m'), date('d'), date('Y'))
        )
    ),
);
t3lib_div::loadTCA("tx_news_domain_model_news");
t3lib_extMgm::addTCAcolumns("tx_news_domain_model_news", $newsColumns, 1);
t3lib_extMgm::addToAllTCAtypes("tx_news_domain_model_news", "tx_masterconfig_enddatetime", '', 'after:datetime');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array(
	'LLL:EXT:masterconfig/locallang_db.xml:tt_content.menu_type_pi1',
	$_EXTKEY . '_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'menu_type');

?>
