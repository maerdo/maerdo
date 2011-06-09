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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Cloudphp/AbstractFactoryphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp QueueService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_QueueServicephp_Factoryphp extendsphp Zendphp_Cloudphp_AbstractFactory
php{
php php php php constphp QUEUEphp_ADAPTERphp_KEYphp php=php php'queuephp_adapterphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Interfacephp whichphp adapterphp mustphp implementphp tophp bephp consideredphp valid
php php php php php php*php/
php php php php protectedphp staticphp php$php_adapterInterfacephp php=php php'Zendphp_Cloudphp_QueueServicephp_Adapterphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php/php/php privatephp ctorphp php-php shouldphp notphp bephp used
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp QueueServicephp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp getAdapterphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$adapterphp php=php parentphp:php:php_getAdapterphp(selfphp:php:QUEUEphp_ADAPTERphp_KEYphp,php php$optionsphp)php;
php php php php php php php php ifphp php(php!php$adapterphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(php'Classphp mustphp bephp specifiedphp usingphp thephp php\php'php'php php.
php php php php php php php php php php php php selfphp:php:QUEUEphp_ADAPTERphp_KEYphp php.php php'php\php'php keyphp'php)php;
php php php php php php php php php}php elseifphp php(php!php$adapterphp instanceofphp selfphp:php:php$php_adapterInterfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/QueueServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_QueueServicephp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Adapterphp mustphp implementphp php\php'php'php php.php selfphp:php:php$php_adapterInterfacephp php.php php'php\php'php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$adapterphp;
php php php php php}
php}
