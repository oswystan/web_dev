<?php

$app_root = dirname(__FILE__);
define(APP_ROOT, 		$app_root);
define(APP_BUSINESS, 	APP_ROOT."/business");
define(APP_CSS, 		APP_ROOT."/css");
define(APP_IMAGES, 		APP_ROOT."/images");
define(APP_JS, 			APP_ROOT."/js");
define(APP_LANGUAGES, 	APP_ROOT."/languages");

function dump_all_global_vars()
{
	printf("APP_ROOT 		= [%s]<br>", 	APP_ROOT);
	printf("APP_BUSINESS 	= [%s]<br>", 	APP_BUSINESS);
	printf("APP_CSS 		= [%s]<br>", 	APP_CSS);
	printf("APP_IMAGES 		= [%s]<br>", 	APP_IMAGES);
	printf("APP_JS 			= [%s]<br>", 	APP_JS);
	printf("APP_LANGUAGES 	= [%s]<br>", 	APP_LANGUAGES);
}

?>