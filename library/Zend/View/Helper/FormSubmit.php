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
php php*php php@versionphp php php php php$Idphp:php FormSubmitphp.phpphp php2php3php4php0php3php php2php0php1php0php-php1php1php-php1php9php php1php9php:php2php3php:php2php9Zphp bittarmanphp php$
php php*php/


php/php*php*
php php*php Abstractphp classphp forphp extension
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;


php/php*php*
php php*php Helperphp tophp generatephp aphp php"submitphp"php button
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_FormSubmitphp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{
php php php php php/php*php*
php php php php php php*php Generatesphp aphp php'submitphp'php buttonphp.
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$namephp Ifphp aphp stringphp,php thephp elementphp namephp.php php Ifphp an
php php php php php php*php arrayphp,php allphp otherphp parametersphp arephp ignoredphp,php andphp thephp arrayphp elements
php php php php php php*php arephp extractedphp inphp placephp ofphp addedphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp elementphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$attribsphp Attributesphp forphp thephp elementphp tagphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp elementphp XHTMLphp.
php php php php php php*php/
php php php php publicphp functionphp formSubmitphp(php$namephp,php php$valuephp php=php nullphp,php php$attribsphp php=php nullphp)
php php php php php{
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfophp(php$namephp,php php$valuephp,php php$attribsphp)php;
php php php php php php php php extractphp(php$infophp)php;php php/php/php namephp,php valuephp,php attribsphp,php optionsphp,php listsepphp,php disablephp,php id
php php php php php php php php php/php/php checkphp ifphp disabled
php php php php php php php php php$disabledphp php=php php'php'php;
php php php php php php php php ifphp php(php$disablephp)php php{
php php php php php php php php php php php php php$disabledphp php=php php'php disabledphp=php"disabledphp"php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$idphp)php php{
php php php php php php php php php php php php php$idphp php=php php'php idphp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$idphp)php php.php php'php"php'php;
php php php php php php php php php}

php php php php php php php php php/php/php XHTMLphp orphp HTMLphp endphp tagphp?
php php php php php php php php php$endTagphp php=php php'php php/php>php'php;
php php php php php php php php ifphp php(php(php$thisphp-php>viewphp instanceofphp Zendphp_Viewphp_Abstractphp)php php&php&php php!php$thisphp-php>viewphp-php>doctypephp(php)php-php>isXhtmlphp(php)php)php php{
php php php php php php php php php php php php php$endTagphp=php php'php>php'php;
php php php php php php php php php}

php php php php php php php php php/php/php Renderphp thephp buttonphp.
php php php php php php php php php$xhtmlphp php=php php'php<inputphp typephp=php"submitphp"php'
php php php php php php php php php php php php php php php php.php php'php namephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$namephp)php php.php php'php"php'
php php php php php php php php php php php php php php php php.php php$id
php php php php php php php php php php php php php php php php.php php'php valuephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$valuephp)php php.php php'php"php'
php php php php php php php php php php php php php php php php.php php$disabled
php php php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)
php php php php php php php php php php php php php php php php.php php$endTagphp;

php php php php php php php php returnphp php$xhtmlphp;
php php php php php}
php}
