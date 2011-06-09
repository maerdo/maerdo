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
php php*php php@versionphp php php php php$Idphp:php HtmlListphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_Viewphp_Helperphp_FormELement
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp orderedphp andphp unorderedphp lists
php php*
php php*php php@usesphp Zendphp_Viewphp_Helperphp_FormElement
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_HtmlListphp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{

php php php php php/php*php*
php php php php php php*php Generatesphp aphp php'Listphp'php elementphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php php$itemsphp php php Arrayphp withphp thephp elementsphp ofphp thephp list
php php php php php php*php php@paramphp booleanphp php$orderedphp Specifiesphp orderedphp/unorderedphp listphp;php defaultphp unordered
php php php php php php*php php@paramphp arrayphp php php php$attribsphp Attributesphp forphp thephp olphp/ulphp tagphp.
php php php php php php*php php@returnphp stringphp Thephp listphp XHTMLphp.
php php php php php php*php/
php php php php publicphp functionphp htmlListphp(arrayphp php$itemsphp,php php$orderedphp php=php falsephp,php php$attribsphp php=php falsephp,php php$escapephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$itemsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Firstphp paramphp mustphp bephp anphp arrayphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$listphp php=php php'php'php;

php php php php php php php php foreachphp php(php$itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$itemphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$escapephp)php php{
php php php php php php php php php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>viewphp-php>escapephp(php$itemphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$listphp php.php=php php'php<liphp>php'php php.php php$itemphp php.php php'<php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php6php <php strlenphp(php$listphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$listphp php=php substrphp(php$listphp,php php0php,php strlenphp(php$listphp)php php-php php6php)
php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>htmlListphp(php$itemphp,php php$orderedphp,php php$attribsphp,php php$escapephp)php php.php php'<php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$listphp php.php=php php'php<liphp>php'php php.php php$thisphp-php>htmlListphp(php$itemphp,php php$orderedphp,php php$attribsphp,php php$escapephp)php php.php php'<php/liphp>php'php php.php selfphp:php:EOLphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$attribsphp)php php{
php php php php php php php php php php php php php$attribsphp php=php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$attribsphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$tagphp php=php php'ulphp'php;
php php php php php php php php ifphp php(php$orderedphp)php php{
php php php php php php php php php php php php php$tagphp php=php php'olphp'php;
php php php php php php php php php}

php php php php php php php php returnphp php'<php'php php.php php$tagphp php.php php$attribsphp php.php php'php>php'php php.php selfphp:php:EOLphp php.php php$listphp php.php php'<php/php'php php.php php$tagphp php.php php'php>php'php php.php selfphp:php:EOLphp;
php php php php php}
php}
