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

php/php*php*php php@seephp Zendphp_Formphp_Decoratorphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Wordphp-basedphp captchaphp decorator
php php*
php php*php Addsphp hiddenphp fieldphp forphp IDphp andphp textphp inputphp fieldphp forphp captchaphp text
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Wordphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Captchaphp_Wordphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Renderphp captcha
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

php php php php php php php php php$namephp php=php php$elementphp-php>getFullyQualifiedNamephp(php)php;

php php php php php php php php php$hiddenNamephp php=php php$namephp php.php php'php[idphp]php'php;
php php php php php php php php php$textNamephp php php php=php php$namephp php.php php'php[inputphp]php'php;

php php php php php php php php php$labelphp php=php php$elementphp-php>getDecoratorphp(php"Labelphp"php)php;
php php php php php php php php ifphp(php$labelphp)php php{
php php php php php php php php php php php php php$labelphp-php>setOptionphp(php"idphp"php,php php$elementphp-php>getIdphp(php)php.php"php-inputphp"php)php;
php php php php php php php php php}

php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;

php php php php php php php php php$hiddenphp php=php php$viewphp-php>formHiddenphp(php$hiddenNamephp,php php$elementphp-php>getValuephp(php)php,php php$elementphp-php>getAttribsphp(php)php)php;
php php php php php php php php php$textphp php php php=php php$viewphp-php>formTextphp(php$textNamephp,php php'php'php,php php$elementphp-php>getAttribsphp(php)php)php;
php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp php'PREPENDphp'php:
php php php php php php php php php php php php php php php php php$contentphp php=php php$hiddenphp php.php php$separatorphp php.php php$textphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'APPENDphp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$contentphp php=php php$contentphp php.php php$separatorphp php.php php$hiddenphp php.php php$separatorphp php.php php$textphp;
php php php php php php php php php}
php php php php php php php php returnphp php$contentphp;
php php php php php}
php}
