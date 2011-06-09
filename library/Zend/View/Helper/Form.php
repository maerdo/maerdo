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
php php*php php@versionphp php php php php$Idphp:php Formphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_FormElementphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp renderingphp HTMLphp forms
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Formphp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{
php php php php php/php*php*
php php php php php php*php Renderphp HTMLphp form
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Formphp name
php php php php php php*php php@paramphp php nullphp|arrayphp php$attribsphp HTMLphp formphp attributes
php php php php php php*php php@paramphp php falsephp|stringphp php$contentphp Formphp content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formphp(php$namephp,php php$attribsphp php=php nullphp,php php$contentphp php=php falsephp)
php php php php php{
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfophp(php$namephp,php php$contentphp,php php$attribsphp)php;
php php php php php php php php extractphp(php$infophp)php;

php php php php php php php php ifphp php(php!emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php php$idphp php=php php'php idphp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$idphp)php php.php php'php"php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$idphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php php&php&php emptyphp(php$attribsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$attribsphp[php'idphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$xhtmlphp php=php php'php<formphp'
php php php php php php php php php php php php php php php php.php php$id
php php php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)
php php php php php php php php php php php php php php php php.php php'php>php'php;

php php php php php php php php ifphp php(falsephp php!php=php=php php$contentphp)php php{
php php php php php php php php php php php php php$xhtmlphp php.php=php php$content
php php php php php php php php php php php php php php php php php php php php.php php php'<php/formphp>php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$xhtmlphp;
php php php php php}
php}
