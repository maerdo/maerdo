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
php php*php php@versionphp php php php php$Idphp:php Formphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Dijitphp.phpphp'php;

php/php*php*
php php*php Dojophp Formphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php php*php/
classphp Zendphp_Dojophp_Viewphp_Helperphp_Formphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php Dijitphp beingphp used
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_dijitphp php php=php php'dijitphp.formphp.Formphp'php;

php php php php php/php*php*
php php php php php php*php Modulephp beingphp used
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_modulephp php=php php'dijitphp.formphp.Formphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Helperphp_Form
php php php php php php*php/
php php php php protectedphp php$php_helperphp;

php php php php php/php*php*
php php php php php php*php dijitphp.formphp.Form
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php nullphp|arrayphp php$attribsphp HTMLphp attributes
php php php php php php*php php@paramphp php falsephp|stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formphp(php$idphp,php php$attribsphp php=php nullphp,php php$contentphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$attribsphp)php)php php{
php php php php php php php php php php php php php$attribsphp php=php php(arrayphp)php php$attribsphp;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$attribsphp[php'namephp'php]php php=php php$idphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$idphp;
php php php php php php php php php}

php php php php php php php php ifphp php(falsephp php=php=php=php php$contentphp)php php{
php php php php php php php php php php php php php$contentphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$attribsphp php=php php$thisphp-php>php_prepareDijitphp(php$attribsphp,php arrayphp(php)php,php php'layoutphp'php)php;

php php php php php php php php returnphp php$thisphp-php>getFormHelperphp(php)php-php>formphp(php$idphp,php php$attribsphp,php php$contentphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp standardphp formphp helper
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Form
php php php php php php*php/
php php php php publicphp functionphp getFormHelperphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_helperphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Formphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_helperphp php=php newphp Zendphp_Viewphp_Helperphp_Formphp;
php php php php php php php php php php php php php$thisphp-php>php_helperphp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_helperphp;
php php php php php}
php}
