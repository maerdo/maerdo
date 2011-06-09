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
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Filterphp_Priorityphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Filterphp/Priorityphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
abstractphp classphp Zendphp_Logphp_Writerphp_Abstractphp implementsphp Zendphp_Logphp_FactoryInterface
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp ofphp Zendphp_Logphp_Filterphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_filtersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Formatsphp thephp logphp messagephp beforephp writingphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Logphp_Formatterphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_formatterphp;

php php php php php/php*php*
php php php php php php*php Addphp aphp filterphp specificphp tophp thisphp writerphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Logphp_Filterphp_Interfacephp php php$filter
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(php$filterphp)
php php php php php{
php php php php php php php php ifphp php(isphp_intphp(php$filterphp)php)php php{
php php php php php php php php php php php php php$filterphp php=php newphp Zendphp_Logphp_Filterphp_Priorityphp(php$filterphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$filterphp instanceofphp Zendphp_Logphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Logphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Invalidphp filterphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_filtersphp[php]php php=php php$filterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Logphp aphp messagephp tophp thisphp writerphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$eventphp logphp dataphp event
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp writephp(php$eventphp)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_filtersphp asphp php$filterphp)php php{
php php php php php php php php php php php php ifphp php(php!php php$filterphp-php>acceptphp(php$eventphp)php)php php{
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php exceptionphp occursphp onphp error
php php php php php php php php php$thisphp-php>php_writephp(php$eventphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp newphp formatterphp forphp thisphp writer
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Logphp_Formatterphp_Interfacephp php$formatter
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setFormatterphp(Zendphp_Logphp_Formatterphp_Interfacephp php$formatterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_formatterphp php=php php$formatterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performphp shutdownphp activitesphp suchphp asphp closingphp openphp resources
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp shutdownphp(php)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Writephp aphp messagephp tophp thephp logphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$eventphp php logphp dataphp event
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_writephp(php$eventphp)php;

php php php php php/php*php*
php php php php php php*php Validatephp andphp optionallyphp convertphp thephp configphp tophp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$configphp Zendphp_Configphp orphp Array
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php staticphp protectedphp functionphp php_parseConfigphp(php$configphp)
php php php php php{
php php php php php php php php ifphp php(php$configphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$configphp php=php php$configphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Configurationphp mustphp bephp anphp arrayphp orphp instancephp ofphp Zendphp_Configphp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$configphp;
php php php php php}
php}
