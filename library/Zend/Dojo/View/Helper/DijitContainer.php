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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DijitContainerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Dijitphp.phpphp'php;

php/php*php*
php php*php Dijitphp layoutphp containerphp basephp class
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php php*php/
abstractphp classphp Zendphp_Dojophp_Viewphp_Helperphp_DijitContainerphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php Capturephp locks
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_captureLockphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Metadataphp informationphp tophp usephp withphp capturedphp content
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_captureInfophp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Beginphp capturingphp contentphp forphp layoutphp container
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp captureStartphp(php$idphp,php arrayphp php$paramsphp php=php arrayphp(php)php,php arrayphp php$attribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$idphp,php php$thisphp-php>php_captureLockphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(sprintfphp(php'Lockphp alreadyphp existsphp forphp idphp php"php%sphp"php'php,php php$idphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_captureLockphp[php$idphp]php php=php truephp;
php php php php php php php php php$thisphp-php>php_captureInfophp[php$idphp]php php=php arrayphp(
php php php php php php php php php php php php php'paramsphp'php php php=php>php php$paramsphp,
php php php php php php php php php php php php php'attribsphp'php php=php>php php$attribsphp,
php php php php php php php php php)php;

php php php php php php php php obphp_startphp(php)php;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Finishphp capturingphp contentphp forphp layoutphp container
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp captureEndphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$idphp,php php$thisphp-php>php_captureLockphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(sprintfphp(php'Nophp capturephp lockphp existsphp forphp idphp php"php%sphp"php;php nothingphp tophp capturephp'php,php php$idphp)php)php;
php php php php php php php php php}

php php php php php php php php php$contentphp php=php obphp_getphp_cleanphp(php)php;
php php php php php php php php extractphp(php$thisphp-php>php_captureInfophp[php$idphp]php)php;
php php php php php php php php unsetphp(php$thisphp-php>php_captureLockphp[php$idphp]php,php php$thisphp-php>php_captureInfophp[php$idphp]php)php;
php php php php php php php php returnphp php$thisphp-php>php_createLayoutContainerphp(php$idphp,php php$contentphp,php php$paramsphp,php php$attribsphp)php;
php php php php php}
php}
