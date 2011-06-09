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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Jsonphp.phpphp php2php3php4php5php1php php2php0php1php0php-php1php1php-php2php8php php1php3php:php1php0php:php0php3Zphp ramonphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Jsonphp php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Frontphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp simplifyingphp JSONphp responses
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Jsonphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Encodephp dataphp asphp JSONphp,php disablephp layoutsphp,php andphp setphp responsephp header
php php php php php php*
php php php php php php*php Ifphp php$keepLayoutsphp isphp truephp,php doesphp notphp disablephp layoutsphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php boolphp php$keepLayouts
php php php php php php*php NOTEphp:php php php ifphp booleanphp,php establishphp php$keepLayoutsphp tophp truephp|false
php php php php php php*php php php php php php php php php ifphp arrayphp,php admitphp paramsphp forphp Zendphp_Jsonphp:php:encodephp asphp enableJsonExprFinderphp=php>truephp|false
php php php php php php*php php php php php php php php php thisphp arrayphp canphp containsphp aphp php'keepLayoutphp'php=php>truephp|false
php php php php php php*php php php php php php php php php thatphp willphp notphp bephp passedphp tophp Zendphp_Jsonphp:php:encodephp methodphp butphp willphp bephp usedphp here
php php php php php php*php php@returnphp stringphp|void
php php php php php php*php/
php php php php publicphp functionphp jsonphp(php$dataphp,php php$keepLayoutsphp php=php falsephp)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$keepLayoutsphp)php)
php php php php php php php php php{
php php php php php php php php php php php php php$optionsphp php php php php php=php php$keepLayoutsphp;
php php php php php php php php php php php php php$keepLayoutsphp php=php php(arrayphp_keyphp_existsphp(php'keepLayoutsphp'php,php php$keepLayoutsphp)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$keepLayoutsphp[php'keepLayoutsphp'php]
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php:php falsephp;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'keepLayoutsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php Zendphp_Jsonphp:php:encodephp(php$dataphp,php nullphp,php php$optionsphp)php;
php php php php php php php php ifphp php(php!php$keepLayoutsphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php php php php php php$layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php;
php php php php php php php php php php php php ifphp php(php$layoutphp instanceofphp Zendphp_Layoutphp)php php{
php php php php php php php php php php php php php php php php php$layoutphp-php>disableLayoutphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$responsephp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getResponsephp(php)php;
php php php php php php php php php$responsephp-php>setHeaderphp(php'Contentphp-Typephp'php,php php'applicationphp/jsonphp'php,php truephp)php;
php php php php php php php php returnphp php$dataphp;
php php php php php}
php}
