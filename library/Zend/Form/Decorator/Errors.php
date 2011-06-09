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
php php*php Zendphp_Formphp_Decoratorphp_Errors
php php*
php php*php Anyphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp ulphp tagphp forphp thephp errorsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Errorsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Errorsphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Renderphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php$viewphp php php php php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$errorsphp php=php php$elementphp-php>getMessagesphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$errorsphp)php)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$errorsphp php php php php=php php$viewphp-php>formErrorsphp(php$errorsphp,php php$thisphp-php>getOptionsphp(php)php)php;

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$errorsphp;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$errorsphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php}
php php php php php}
php}
