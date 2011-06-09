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

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_FormElements
php php*
php php*php Renderphp allphp formphp elementsphp registeredphp withphp currentphp form
php php*
php php*php Acceptsphp followingphp optionsphp:
php php*php php-php separatorphp:php Separatorphp tophp usephp betweenphp elements
php php*
php php*php Anyphp otherphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp formphp tagphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FormElementsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_FormElementsphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Mergesphp givenphp twophp belongsTophp php(arrayphp notationphp)php strings
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$baseBelongsTo
php php php php php php*php php@paramphp php stringphp php$belongsTo
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp mergeBelongsTophp(php$baseBelongsTophp,php php$belongsTophp)
php php php php php{
php php php php php php php php php$endOfArrayNamephp php=php strposphp(php$belongsTophp,php php'php[php'php)php;

php php php php php php php php ifphp php(php$endOfArrayNamephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$baseBelongsTophp php.php php'php[php'php php.php php$belongsTophp php.php php'php]php'php;
php php php php php php php php php}

php php php php php php php php php$arrayNamephp php=php substrphp(php$belongsTophp,php php0php,php php$endOfArrayNamephp)php;

php php php php php php php php returnphp php$baseBelongsTophp php.php php'php[php'php php.php php$arrayNamephp php.php php'php]php'php php.php substrphp(php$belongsTophp,php php$endOfArrayNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp formphp elements
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$formphp php php php php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php ifphp php(php(php!php$formphp instanceofphp Zendphp_Formphp)php php&php&php php(php!php$formphp instanceofphp Zendphp_Formphp_DisplayGroupphp)php)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$belongsTophp php php php php php php=php php(php$formphp instanceofphp Zendphp_Formphp)php php?php php$formphp-php>getElementsBelongTophp(php)php php:php nullphp;
php php php php php php php php php$elementContentphp php=php php'php'php;
php php php php php php php php php$separatorphp php php php php php php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$translatorphp php php php php php=php php$formphp-php>getTranslatorphp(php)php;
php php php php php php php php php$itemsphp php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$viewphp php php php php php php php php php php php=php php$formphp-php>getViewphp(php)php;
php php php php php php php php foreachphp php(php$formphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$itemphp-php>setViewphp(php$viewphp)
php php php php php php php php php php php php php php php php php php-php>setTranslatorphp(php$translatorphp)php;
php php php php php php php php php php php php ifphp php(php$itemphp instanceofphp Zendphp_Formphp_Elementphp)php php{
php php php php php php php php php php php php php php php php php$itemphp-php>setBelongsTophp(php$belongsTophp)php;
php php php php php php php php php php php php php}php elseifphp php(php!emptyphp(php$belongsTophp)php php&php&php php(php$itemphp instanceofphp Zendphp_Formphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$itemphp-php>isArrayphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp php=php php$thisphp-php>mergeBelongsTophp(php$belongsTophp,php php$itemphp-php>getElementsBelongTophp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php$itemphp-php>setElementsBelongTophp(php$namephp,php truephp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$itemphp-php>setElementsBelongTophp(php$belongsTophp,php truephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(php!emptyphp(php$belongsTophp)php php&php&php php(php$itemphp instanceofphp Zendphp_Formphp_DisplayGroupphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$itemphp asphp php$elementphp)php php{
php php php php php php php php php php php php php php php php php php php php php$elementphp-php>setBelongsTophp(php$belongsTophp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$itemsphp[php]php php=php php$itemphp-php>renderphp(php)php;

php php php php php php php php php php php php ifphp php(php(php$itemphp instanceofphp Zendphp_Formphp_Elementphp_Filephp)
php php php php php php php php php php php php php php php php php|php|php php(php(php$itemphp instanceofphp Zendphp_Formphp)
php php php php php php php php php php php php php php php php php php php php php&php&php php(Zendphp_Formphp:php:ENCTYPEphp_MULTIPARTphp php=php=php php$itemphp-php>getEnctypephp(php)php)php)
php php php php php php php php php php php php php php php php php|php|php php(php(php$itemphp instanceofphp Zendphp_Formphp_DisplayGroupphp)
php php php php php php php php php php php php php php php php php php php php php&php&php php(Zendphp_Formphp:php:ENCTYPEphp_MULTIPARTphp php=php=php php$itemphp-php>getAttribphp(php'enctypephp'php)php)php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$formphp instanceofphp Zendphp_Formphp)php php{
php php php php php php php php php php php php php php php php php php php php php$formphp-php>setEnctypephp(Zendphp_Formphp:php:ENCTYPEphp_MULTIPARTphp)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(php$formphp instanceofphp Zendphp_Formphp_DisplayGroupphp)php php{
php php php php php php php php php php php php php php php php php php php php php$formphp-php>setAttribphp(php'enctypephp'php,php Zendphp_Formphp:php:ENCTYPEphp_MULTIPARTphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$elementContentphp php=php implodephp(php$separatorphp,php php$itemsphp)php;

php php php php php php php php switchphp php(php$thisphp-php>getPlacementphp(php)php)php php{
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$elementContentphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$elementContentphp;
php php php php php php php php php}
php php php php php}
php}
