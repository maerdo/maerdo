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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Regionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp tophp queryphp whichphp Regionsphp yourphp accountphp hasphp accessphp tophp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Regionphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{

php php php php php/php*php*
php php php php php php*php Describesphp availabilityphp zonesphp thatphp arephp currentlyphp availablephp tophp thephp account
php php php php php php*php andphp theirphp statesphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$regionphp php php php php php php php php php php php php php Namephp ofphp anphp regionphp.
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php Anphp arrayphp thatphp containsphp allphp thephp returnphp itemsphp.php php Keysphp:php regionNamephp andphp regionUrlphp.
php php php php php php*php/
php php php php publicphp functionphp describephp(php$regionphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeRegionsphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$regionphp)php php&php&php php!emptyphp(php$regionphp)php)php php{
php php php php php php php php php php php php foreachphp(php$regionphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'Regionphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$regionphp)php php{
php php php php php php php php php php php php php$paramsphp[php'Regionphp.php1php'php]php php=php php$regionphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$nodesphp php php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:itemphp'php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$kphp php=php>php php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$itemphp[php'regionNamephp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:regionNamephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'regionUrlphp'php]php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:regionUrlphp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;
php php php php php php php php php php php php unsetphp(php$itemphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}
php}
