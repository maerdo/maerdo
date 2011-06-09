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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Decoratorphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Formphp_Decoratorphp_Markerphp_Filephp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Markerphp/Filephp/Interfacephp.phpphp'php;

php/php*php*php Zendphp_Filephp_Transferphp_Adapterphp_Httpphp php*php/
requirephp_oncephp php'Zendphp/Filephp/Transferphp/Adapterphp/Httpphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_File
php php*
php php*php Fixesphp thephp renderingphp forphp allphp subformphp andphp multiphp filephp elements
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_File
php php php php extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php php php php implementsphp Zendphp_Formphp_Decoratorphp_Markerphp_Filephp_Interface
php{
php php php php php/php*php*
php php php php php php*php Attributesphp thatphp shouldphp notphp bephp passedphp tophp helper
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attribBlacklistphp php=php arrayphp(php'helperphp'php,php php'placementphp'php,php php'separatorphp'php,php php'valuephp'php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php append
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php php'APPENDphp'php;

php php php php php/php*php*
php php php php php php*php Getphp attributesphp tophp passphp tophp filephp helper
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttribsphp(php)
php php php php php{
php php php php php php php php php$attribsphp php php php=php php$thisphp-php>getOptionsphp(php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php$attribsphp php=php arrayphp_mergephp(php$attribsphp,php php$elementphp-php>getAttribsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_attribBlacklistphp asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$attribsphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$attribsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp formphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php ifphp php(php!php$elementphp instanceofphp Zendphp_Formphp_Elementphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$viewphp php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(php!php$viewphp instanceofphp Zendphp_Viewphp_Interfacephp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$namephp php php php php php php=php php$elementphp-php>getNamephp(php)php;
php php php php php php php php php$attribsphp php php php=php php$thisphp-php>getAttribsphp(php)php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$namephp;
php php php php php php php php php}

php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$markupphp php php php php=php arrayphp(php)php;
php php php php php php php php php$sizephp php php php php php php=php php$elementphp-php>getMaxFileSizephp(php)php;
php php php php php php php php ifphp php(php$sizephp php>php php0php)php php{
php php php php php php php php php php php php php$elementphp-php>setMaxFileSizephp(php0php)php;
php php php php php php php php php php php php php$markupphp[php]php php=php php$viewphp-php>formHiddenphp(php'MAXphp_FILEphp_SIZEphp'php,php php$sizephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(Zendphp_Filephp_Transferphp_Adapterphp_Httpphp:php:isApcAvailablephp(php)php)php php{
php php php php php php php php php php php php php$markupphp[php]php php=php php$viewphp-php>formHiddenphp(iniphp_getphp(php'apcphp.rfcphp1php8php6php7php_namephp'php)php,php uniqidphp(php)php,php arrayphp(php'idphp'php php=php>php php'progressphp_keyphp'php)php)php;
php php php php php php php php php}php elsephp ifphp php(Zendphp_Filephp_Transferphp_Adapterphp_Httpphp:php:isUploadProgressAvailablephp(php)php)php php{
php php php php php php php php php php php php php$markupphp[php]php php=php php$viewphp-php>formHiddenphp(php'UPLOADphp_IDENTIFIERphp'php,php uniqidphp(php)php,php arrayphp(php'idphp'php php=php>php php'progressphp_keyphp'php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$elementphp-php>isArrayphp(php)php)php php{
php php php php php php php php php php php php php$namephp php.php=php php"php[php]php"php;
php php php php php php php php php php php php php$countphp php=php php$elementphp-php>getMultiFilephp(php)php;
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$countphp;php php+php+php$iphp)php php{
php php php php php php php php php php php php php php php php php$htmlAttribsphp php php php php php php php php=php php$attribsphp;
php php php php php php php php php php php php php php php php php$htmlAttribsphp[php'idphp'php]php php.php=php php'php-php'php php.php php$iphp;
php php php php php php php php php php php php php php php php php$markupphp[php]php php=php php$viewphp-php>formFilephp(php$namephp,php php$htmlAttribsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$markupphp[php]php php=php php$viewphp-php>formFilephp(php$namephp,php php$attribsphp)php;
php php php php php php php php php}

php php php php php php php php php$markupphp php=php implodephp(php$separatorphp,php php$markupphp)php;

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$markupphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$markupphp;
php php php php php php php php php}
php php php php php}
php}
