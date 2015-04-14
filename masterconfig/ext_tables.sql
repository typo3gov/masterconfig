#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_masterconfig_css_class tinytext,
	tx_masterconfig_teaserimage text,
	tx_masterconfig_teasertitle tinytext,
	tx_masterconfig_teaseralt tinytext,
	tx_masterconfig_teaserswitch tinyint(4) unsigned DEFAULT '0' NOT NULL, 
);

#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	tx_masterconfig_enddatetime int(11) DEFAULT '0' NOT NULL,
);