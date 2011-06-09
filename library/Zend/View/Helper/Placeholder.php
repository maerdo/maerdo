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
php php*php php@versionphp php php php php$Idphp:php Placeholderphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Registryphp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp passingphp dataphp betweenphp otherwisephp segregatedphp Viewsphp.php Itphp'sphp called
php php*php Placeholderphp tophp makephp itsphp typicalphp usagephp obviousphp,php butphp canphp bephp usedphp justphp asphp easily
php php*php forphp nonphp-Placeholderphp thingsphp.php Thatphp saidphp,php thephp supportphp forphp thisphp isphp only
php php*php guaranteedphp tophp effectphp subsequentlyphp renderedphp templatesphp,php andphp ofphp coursephp Layoutsphp.
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Placeholderphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Placeholderphp items
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_itemsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registry
php php php php php php*php/
php php php php protectedphp php$php_registryphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Retrievephp containerphp registryphp fromphp Zendphp_Registryphp,php orphp createphp newphp onephp andphp registerphp itphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp:php:getRegistryphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Placeholderphp helper
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Containerphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp placeholderphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php(stringphp)php php$namephp;
php php php php php php php php returnphp php$thisphp-php>php_registryphp-php>getContainerphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp registry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Registry
php php php php php php*php/
php php php php publicphp functionphp getRegistryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryphp;
php php php php php}
php}
