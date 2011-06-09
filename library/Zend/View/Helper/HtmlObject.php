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
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HtmlObjectphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Viewphp_Helperphp_HtmlElement
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/HtmlElementphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_HtmlObjectphp extendsphp Zendphp_Viewphp_Helperphp_HtmlElement
php{
php php php php php/php*php*
php php php php php php*php Outputphp anphp objectphp set
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dataphp Thephp dataphp file
php php php php php php*php php@paramphp stringphp php$typephp Dataphp filephp type
php php php php php php*php php@paramphp arrayphp php php$attribsphp Attribsphp forphp thephp objectphp tag
php php php php php php*php php@paramphp arrayphp php php$paramsphp Paramsphp forphp inphp thephp objectphp tag
php php php php php php*php php@paramphp stringphp php$contentphp Alternativephp contentphp forphp object
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp htmlObjectphp(php$dataphp,php php$typephp,php arrayphp php$attribsphp php=php arrayphp(php)php,php arrayphp php$paramsphp php=php arrayphp(php)php,php php$contentphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Mergephp dataphp andphp type
php php php php php php php php php$attribsphp php=php arrayphp_mergephp(arrayphp(php'dataphp'php php=php>php php$dataphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$typephp)php,php php$attribsphp)php;

php php php php php php php php php/php/php Params
php php php php php php php php php$paramHtmlphp php=php arrayphp(php)php;
php php php php php php php php php$closingBracketphp php=php php$thisphp-php>getClosingBracketphp(php)php;

php php php php php php php php foreachphp php(php$paramsphp asphp php$paramphp php=php>php php$optionsphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'valuephp'php php=php>php php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(arrayphp(php'namephp'php php=php>php php$paramphp)php,php php$optionsphp)php;

php php php php php php php php php php php php php$paramHtmlphp[php]php php=php php'php<paramphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$optionsphp)php php.php php$closingBracketphp;
php php php php php php php php php}

php php php php php php php php php/php/php Content
php php php php php php php php ifphp php(isphp_arrayphp(php$contentphp)php)php php{
php php php php php php php php php php php php php$contentphp php=php implodephp(selfphp:php:EOLphp,php php$contentphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Objectphp header
php php php php php php php php php$xhtmlphp php=php php'php<objectphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php php.php php'php>php'php php.php selfphp:php:EOL
php php php php php php php php php php php php php php php php php php.php implodephp(selfphp:php:EOLphp,php php$paramHtmlphp)php php.php selfphp:php:EOL
php php php php php php php php php php php php php php php php php php.php php(php$contentphp php?php php$contentphp php.php selfphp:php:EOLphp php:php php'php'php)
php php php php php php php php php php php php php php php php php php.php php'<php/objectphp>php'php;

php php php php php php php php returnphp php$xhtmlphp;
php php php php php}
php}
