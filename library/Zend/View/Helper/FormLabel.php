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
php php*php php@versionphp php php php php$Idphp:php FormLabelphp.phpphp php2php2php2php9php0php php2php0php1php0php-php0php5php-php2php5php php1php4php:php2php7php:php1php2Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_FormElementphp php*php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;

php/php*php*
php php*php Formphp labelphp helper
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_FormLabelphp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{
php php php php php/php*php*
php php php php php php*php Generatesphp aphp php'labelphp'php elementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Thephp formphp elementphp namephp forphp whichphp thephp labelphp isphp beingphp generated
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp labelphp text
php php php php php php*php php@paramphp php arrayphp php$attribsphp Formphp elementphp attributesphp php(usedphp tophp determinephp ifphp disabledphp)
php php php php php php*php php@returnphp stringphp Thephp elementphp XHTMLphp.
php php php php php php*php/
php php php php publicphp functionphp formLabelphp(php$namephp,php php$valuephp php=php nullphp,php arrayphp php$attribsphp php=php nullphp)
php php php php php{
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfophp(php$namephp,php php$valuephp,php php$attribsphp)php;
php php php php php php php php extractphp(php$infophp)php;php php/php/php namephp,php valuephp,php attribsphp,php optionsphp,php listsepphp,php disablephp,php escape

php php php php php php php php php/php/php buildphp thephp element
php php php php php php php php ifphp php(php$disablephp)php php{
php php php php php php php php php php php php php/php/php disabledphp;php displayphp nothing
php php php php php php php php php php php php returnphp php php'php'php;
php php php php php php php php php}

php php php php php php php php php$valuephp php=php php(php$escapephp)php php?php php$thisphp-php>viewphp-php>escapephp(php$valuephp)php php:php php$valuephp;
php php php php php php php php php$forphp php php php=php php(emptyphp(php$attribsphp[php'disableForphp'php]php)php php|php|php php!php$attribsphp[php'disableForphp'php]php)
php php php php php php php php php php php php php php php php?php php'php forphp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$idphp)php php.php php'php"php'
php php php php php php php php php php php php php php php php:php php'php'php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'disableForphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php unsetphp(php$attribsphp[php'disableForphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php enabledphp;php displayphp label
php php php php php php php php php$xhtmlphp php=php php'php<labelphp'
php php php php php php php php php php php php php php php php php.php php$for
php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)
php php php php php php php php php php php php php php php php php.php php'php>php'php php.php php$valuephp php.php php'<php/labelphp>php'php;

php php php php php php php php returnphp php$xhtmlphp;
php php php php php}
php}
