<?php

global $_zp_conf_vars;
$conf = array();

$conf["db_software"] = "MySQLi";
$conf["mysql_user"] = 'isben23_zenp1';
$conf["mysql_pass"] = 'U*iaU(S3Rpx49AGn]R~72]#2';
$conf["mysql_host"] = 'localhost';
$conf["mysql_database"] = 'isben23_zenp1';
$conf["mysql_prefix"] = 'zenp_';

$conf["UTF-8"] = true;

$conf["album_folder"] = "/albums/";
$conf["album_folder_class"] = "std";

$conf["server_protocol"] = 'http';

if (!defined("CHMOD_VALUE")) { define("CHMOD_VALUE",0755); }

$conf['special_pages'] = array(
														'page'=>				array('define'=>'_PAGE_',					'rewrite'=>'page'),
														'search'=>			array('define'=>'_SEARCH_',				'rewrite'=>'page/search'),
														'archive'=>			array('define'=>'_ARCHIVE_',			'rewrite'=>'page/archive'),
														'tags'=>				array('define'=>'_TAGS_',					'rewrite'=>'page/search/tags'),
														'news'=>				array('define'=>'_NEWS_',					'rewrite'=>'news'),
														'category'=>		array('define'=>'_CATEGORY_',			'rewrite'=>'news/category'),
														'news_archive'=>array('define'=>'_NEWS_ARCHIVE_',	'rewrite'=>'news/archive'),
														'pages'=>				array('define'=>'_PAGES_',				'rewrite'=>'pages')
												);

$_zp_conf_vars = $conf;
unset($conf);
?>