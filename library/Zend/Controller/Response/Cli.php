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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Cliphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Controllerphp_Responsephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Abstractphp.phpphp'php;


php/php*php*
php php*php Zendphp_Controllerphp_Responsephp_Cli
php php*
php php*php CLIphp responsephp forphp controllers
php php*
php php*php php@usesphp Zendphp_Controllerphp_Responsephp_Abstract
php php*php php@packagephp Zendphp_Controller
php php*php php@subpackagephp Response
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Responsephp_Cliphp extendsphp Zendphp_Controllerphp_Responsephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Flagphp;php ifphp truephp,php whenphp headerphp operationsphp arephp calledphp afterphp headersphp havephp been
php php php php php php*php sentphp,php anphp exceptionphp willphp bephp raisedphp;php otherwisephp,php processingphp willphp continue
php php php php php php*php asphp normalphp.php Defaultsphp tophp falsephp.
php php php php php php*
php php php php php php*php php@seephp canSendHeadersphp(php)
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php publicphp php$headersSentThrowsExceptionphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php Magicphp php_php_toStringphp functionality
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isExceptionphp(php)php php&php&php php$thisphp-php>renderExceptionsphp(php)php)php php{
php php php php php php php php php php php php php$exceptionsphp php=php php'php'php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>getExceptionphp(php)php asphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$exceptionsphp php.php=php php$ephp-php>php_php_toStringphp(php)php php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$exceptionsphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_bodyphp;
php php php php php}
php}
