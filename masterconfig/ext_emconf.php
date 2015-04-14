<?php

########################################################################
# Extension Manager/Repository config file for ext: "masterconfig"
#
# Auto generated 31-03-2009 20:00
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Master configuration for websites',
	'description' => 'Master configuration for websites',
	'category' => 'be',
	'author' => 'Sacha Vorbeck',
	'author_email' => 'sacha.vorbeck@ble.de',
	'shy' => '',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:118:{s:9:"ChangeLog";s:4:"d01d";s:10:"README.txt";s:4:"c3ac";s:21:"ext_conf_template.txt";s:4:"837b";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"69e6";s:14:"ext_tables.php";s:4:"c5f3";s:13:"locallang.xml";s:4:"a85d";s:19:"doc/wizard_form.dat";s:4:"c51a";s:20:"doc/wizard_form.html";s:4:"a635";s:39:"res/libs/class.tx_mboxtagfixaddress.php";s:4:"e5c8";s:37:"res/libs/class.tx_metatagscleaner.php";s:4:"caf1";s:23:"settings/page/pagetsconfig.txt";s:4:"e8e7";s:20:"settings/page/rteconfig.txt";s:4:"aed2";s:29:"res/ts/usertsconfig_BASIS.txt";s:4:"294e";s:34:"res/ts/usertsconfig_REDAKTEURE.txt";s:4:"5e5a";s:33:"res/ts/usertsconfig_SYSADMINS.txt";s:4:"902f";s:36:"res/templates/main/main_default.html";s:4:"e72b";s:45:"res/templates/main/css/KampagnenLayoutDef.css";s:4:"6cf7";s:47:"res/templates/main/css/KampagnenLayoutDefIe.css";s:4:"69aa";s:50:"res/templates/main/css/KampagnenLayoutGenerals.css";s:4:"8eb8";s:51:"res/templates/main/css/KampagnenLayoutPositions.css";s:4:"5d9f";s:47:"res/templates/main/css/KampagnenLayoutPrint.css";s:4:"c8e3";s:36:"res/templates/main/css/img/Thumbs.db";s:4:"9b84";s:48:"res/templates/main/css/img/backgroundContent.gif";s:4:"9586";s:40:"res/templates/main/css/img/bmelvLogo.gif";s:4:"b42e";s:37:"res/templates/main/css/img/header.gif";s:4:"2260";s:41:"res/templates/main/css/img/headerName.gif";s:4:"44d2";s:42:"res/templates/main/css/img/headerStart.gif";s:4:"a2ce";s:44:"res/templates/main/css/img/headerStripes.gif";s:4:"cd91";s:41:"res/templates/main/css/img/inhalt_doc.gif";s:4:"27ed";s:58:"res/templates/main/css/img/inhalt_form_button_loeschen.gif";s:4:"4c68";s:56:"res/templates/main/css/img/inhalt_form_button_senden.gif";s:4:"3f93";s:56:"res/templates/main/css/img/inhalt_inhaltsverzeichnis.gif";s:4:"6d16";s:51:"res/templates/main/css/img/inhalt_link_download.gif";s:4:"5459";s:58:"res/templates/main/css/img/inhalt_link_download_kasten.gif";s:4:"e994";s:49:"res/templates/main/css/img/inhalt_link_extern.gif";s:4:"32b9";s:56:"res/templates/main/css/img/inhalt_link_extern_kasten.gif";s:4:"0e0a";s:49:"res/templates/main/css/img/inhalt_link_intern.gif";s:4:"2124";s:56:"res/templates/main/css/img/inhalt_link_intern_kasten.gif";s:4:"30a1";s:57:"res/templates/main/css/img/inhalt_link_intern_zurueck.gif";s:4:"fa29";s:47:"res/templates/main/css/img/inhalt_link_mail.gif";s:4:"cd1b";s:54:"res/templates/main/css/img/inhalt_link_mail_kasten.gif";s:4:"f4cd";s:49:"res/templates/main/css/img/inhalt_listenpunkt.gif";s:4:"f2e6";s:55:"res/templates/main/css/img/inhalt_listenpunkt_unter.gif";s:4:"14eb";s:41:"res/templates/main/css/img/inhalt_pdf.gif";s:4:"104b";s:50:"res/templates/main/css/img/inhalt_seitenanfang.gif";s:4:"01ce";s:39:"res/templates/main/css/img/margLogo.gif";s:4:"9aa6";s:53:"res/templates/main/css/img/marg_liste_vorschalter.gif";s:4:"6c06";s:50:"res/templates/main/css/img/marg_pfeil_download.gif";s:4:"a7ba";s:45:"res/templates/main/css/img/marg_pfeil_ext.gif";s:4:"7970";s:45:"res/templates/main/css/img/marg_pfeil_int.gif";s:4:"3971";s:58:"res/templates/main/css/img/marg_ueberschrift_vorschalt.gif";s:4:"f2e6";s:41:"res/templates/main/css/img/navContact.gif";s:4:"5902";s:40:"res/templates/main/css/img/navHaken1.gif";s:4:"dee6";s:42:"res/templates/main/css/img/navHaken1Hi.gif";s:4:"1880";s:40:"res/templates/main/css/img/navHaken2.gif";s:4:"cf4b";s:42:"res/templates/main/css/img/navHaken2Hi.gif";s:4:"7aa0";s:40:"res/templates/main/css/img/navHaken3.gif";s:4:"3115";s:42:"res/templates/main/css/img/navHaken3Hi.gif";s:4:"b0cd";s:38:"res/templates/main/css/img/navHelp.gif";s:4:"af74";s:41:"res/templates/main/css/img/navImprint.gif";s:4:"07ac";s:38:"res/templates/main/css/img/navLang.gif";s:4:"32b3";s:40:"res/templates/main/css/img/navLangDE.gif";s:4:"d5d4";s:40:"res/templates/main/css/img/navLangEN.gif";s:4:"c33d";s:40:"res/templates/main/css/img/navLangFR.gif";s:4:"546e";s:39:"res/templates/main/css/img/navPrint.gif";s:4:"e0ce";s:41:"res/templates/main/css/img/navSitemap.gif";s:4:"4489";s:34:"res/templates/main/css/img/top.gif";s:4:"46dd";s:34:"res/templates/main/img/atmopic.jpg";s:4:"dcdc";s:37:"res/templates/main/img/ci/favicon.ico";s:4:"c8f4";s:40:"res/templates/main/img/ci/headerName.gif";s:4:"44d2";s:34:"res/templates/main/img/ci/logo.gif";s:4:"b42e";s:34:"res/templates/main/img/rss/rss.gif";s:4:"9f47";s:34:"res/templates/main/img/rss/rss.png";s:4:"513b";s:39:"res/templates/main/scripts/swfobject.js";s:4:"66d4";s:53:"res/templates/main/scripts/jquery/jquery-1.2.5.min.js";s:4:"85b7";s:51:"res/templates/main/scripts/jquery/jquery_cssmenu.js";s:4:"c06d";s:52:"res/templates/main/scripts/jquery/jquery_dropdown.js";s:4:"c797";s:47:"res/templates/main/scripts/jquery/jquery_min.js";s:4:"85b7";s:26:"res/templates/pdf/pdf.html";s:4:"20ed";s:30:"res/templates/print/print.html";s:4:"b814";s:35:"res/templates/sub/content_2col.html";s:4:"14fa";s:38:"res/templates/sub/content_default.html";s:4:"1d9e";s:41:"res/templates/extensions/irfaq/index.html";s:4:"be7a";s:45:"res/templates/extensions/tt_news/news_02.html";s:4:"0596";s:51:"res/templates/extensions/tt_news/newsticker_02.html";s:4:"9cbf";s:59:"res/templates/extensions/tt_news/tt_news_archiv_single.html";s:4:"dc62";s:58:"res/templates/extensions/tt_news/tt_news_headlinelist.html";s:4:"eca4";s:55:"res/templates/extensions/tt_news/fileicons/ext_link.gif";s:4:"9e48";s:55:"res/templates/extensions/tt_news/fileicons/int_link.gif";s:4:"12b9";s:55:"res/templates/extensions/tt_news/fileicons/int_news.gif";s:4:"402a";s:43:"res/templates/extensions/userreg/index.html";s:4:"edad";s:30:"settings/page/pagetsconfig.txt";s:4:"a93b";s:34:"settings/page/pagetsconfig_old.txt";s:4:"a1c1";s:27:"settings/page/rteconfig.txt";s:4:"aed2";s:31:"settings/page/rteconfig_old.txt";s:4:"3854";s:37:"settings/users/usertsconfig_BASIS.txt";s:4:"ca22";s:39:"settings/users/usertsconfig_EDITORS.txt";s:4:"5e5a";s:41:"settings/users/usertsconfig_SYSADMINS.txt";s:4:"902f";s:43:"static/component/document/atmopic/setup.txt";s:4:"0878";s:43:"static/component/document/content/setup.txt";s:4:"7bbf";s:40:"static/component/document/logo/setup.txt";s:4:"2830";s:53:"static/component/document/title_as_headline/setup.txt";s:4:"424a";s:47:"static/component/navigation/directory/setup.txt";s:4:"c9f9";s:43:"static/component/navigation/level/setup.txt";s:4:"2ecb";s:38:"static/configuration/general/setup.txt";s:4:"0626";s:40:"static/configuration/languages/setup.txt";s:4:"a78a";s:44:"static/configuration/rendering/constants.txt";s:4:"3bc1";s:40:"static/configuration/rendering/setup.txt";s:4:"6384";s:48:"static/configuration/rlmp_tmplselector/setup.txt";s:4:"50ab";s:33:"static/common/xhtml/css/setup.txt";s:4:"3c7c";s:34:"static/common/xhtml/head/setup.txt";s:4:"e4d0";s:39:"static/common/xhtml/seo_title/setup.txt";s:4:"0d98";s:52:"static/common/xhtml/template_selector/main/setup.txt";s:4:"6dbc";s:51:"static/common/xhtml/template_selector/sub/setup.txt";s:4:"fca1";s:34:"static/document/type/pdf/setup.txt";s:4:"f029";s:53:"static/document/type/xhtml/transitional/constants.txt";s:4:"6e01";s:49:"static/document/type/xhtml/transitional/setup.txt";s:4:"fce6";}',
	'suggests' => array(
	),
);

?>
