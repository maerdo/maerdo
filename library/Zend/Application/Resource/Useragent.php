<php?php
php/php*php*
php php*php Zendphp Framework
php php*
php php*php LICENSE
php php*
php php*php Thisphp sourcephp filephp isphp subjectphp tophp thephp newphp BSDphp licensephp thatphp isphp bundled
php php*php withphp thisphp packagephp inphp thephp filephp LICENSEphp.txtphp.
php php*php Itphp isphp alsophp availablephp throughphp thephp worldphp-widephp-webphp atphp thisphp URLphp:
php php*php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsd
php php*php Ifphp youphp didphp notphp receivephp aphp copyphp ofphp thephp licensephp andphp arephp unablephp to
php php*php obtainphp itphp throughphp thephp worldphp-widephp-webphp,php pleasephp sendphp anphp email
php php*php tophp licensephp@zendphp.comphp sophp wephp canphp sendphp youphp aphp copyphp immediatelyphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_UserAgentphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Httpphp_UserAgent
php php php php php php*php/
php	protectedphp php$php_userAgentphp;
php	
php php php php php/php*php*
php php php php php php*php Intializephp resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_UserAgent
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php	php	php$userAgentphp php=php php$thisphp-php>getUserAgentphp(php)php;

php php php php php php php php php/php/php Optionallyphp seedphp thephp UserAgentphp viewphp helper
php php php php php php php php php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php;
php php php php php php php php ifphp php(php$bootstrapphp-php>hasResourcephp(php'viewphp'php)php php|php|php php$bootstrapphp-php>hasPluginResourcephp(php'viewphp'php)php)php php{
php php php php php php php php php php php php php$bootstrapphp-php>bootstrapphp(php'viewphp'php)php;
php php php php php php php php php php php php php$viewphp php=php php$bootstrapphp-php>getResourcephp(php'viewphp'php)php;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$viewphp)php php{
php php php php php php php php php php php php php php php php php$viewphp-php>userAgentphp(php$userAgentphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$userAgentphp;
php	php}
php	
php php php php php/php*php*
php php php php php php*php Getphp UserAgentphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_UserAgent
php php php php php php*php/
php php php php publicphp functionphp getUserAgentphp(php)
php php php php php{
php	php	ifphp php(nullphp php=php=php=php php$thisphp-php>php_userAgentphp)php php{
php	php	php	php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php	php	php	php$thisphp-php>php_userAgentphp php=php newphp Zendphp_Httpphp_UserAgentphp(php$optionsphp)php;
php	php	php}
php	php	
php	php	returnphp php$thisphp-php>php_userAgentphp;
php	php}
php}
