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
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@subpackagephp PHP
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_CodeGeneratorphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sourceContentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isSourceDirtyphp php=php truephp;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initphp(php)php;
php php php php php php php php ifphp php(php$optionsphp php!php=php nullphp)php php{
php php php php php php php php php php php php php/php/php usephp Zendphp_Configphp objectsphp ifphp provided
php php php php php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php passphp arraysphp tophp setOptions
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_preparephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setConfigphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php php$methodNamephp php=php php'setphp'php php.php php$optionNamephp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodNamephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$methodNamephp}php(php$optionValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setSourceContentphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sourceContent
php php php php php php*php/
php php php php publicphp functionphp setSourceContentphp(php$sourceContentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sourceContentphp php=php php$sourceContentphp;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getSourceContentphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSourceContentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sourceContentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_initphp(php)php php-php thisphp isphp calledphp beforephp thephp constuctor
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{

php php php php php}

php php php php php/php*php*
php php php php php php*php php_preparephp(php)php php-php thisphp isphp calledphp atphp constructionphp completion
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_preparephp(php)
php php php php php{

php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)php php-php mustphp bephp implementedphp byphp thephp child
php php php php php php*
php php php php php php*php/
php php php php abstractphp publicphp functionphp generatephp(php)php;

php php php php php/php*php*
php php php php php php*php php_php_toStringphp(php)php php-php castingphp tophp aphp stringphp willphp inphp turnphp callphp generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php finalphp publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>generatephp(php)php;
php php php php php}

php}
