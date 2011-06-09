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
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Message
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Messagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Classphp forphp managingphp queuephp messages
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Message
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Message
php{
php php php php php/php*php*
php php php php php php*php Thephp dataphp forphp thephp queuephp message
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php php/php*php*
php php php php php php*php Connectedphp isphp truephp ifphp wephp havephp aphp referencephp tophp aphp live
php php php php php php*php Zendphp_Queuephp_Adapterphp_Abstractphp objectphp.
php php php php php php*php Thisphp isphp falsephp afterphp thephp Messagephp hasphp beenphp deserializedphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_connectedphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Zendphp_Queuephp parentphp classphp orphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Queue
php php php php php php*php/
php php php php protectedphp php$php_queuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp classphp ofphp thephp Zendphp_Queue
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_queueClassphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'queuephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$optionsphp[php'queuephp'php]php instanceofphp Zendphp_Queuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_queuephp php php php php php php=php php$optionsphp[php'queuephp'php]php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_queueClassphp php=php getphp_classphp(php$thisphp-php>php_queuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$resultphp php=php gettypephp(php$optionsphp[php'queuephp'php]php)php;
php php php php php php php php php php php php php php php php ifphp php(php$resultphp php=php=php=php php'objectphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php getphp_classphp(php$optionsphp[php'queuephp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'php$optionsphp[php\php'queuephp\php'php]php php=php php'
php php php php php php php php php php php php php php php php php php php php php.php php$result
php php php php php php php php php php php php php php php php php php php php php.php php'php:php mustphp bephp instanceofphp Zendphp_Queuephp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Dataphp mustphp bephp anphp arrayphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_dataphp php=php php$optionsphp[php'dataphp'php]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp messagephp fieldphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp Thephp userphp-specifiedphp keyphp namephp.
php php php php php php*php php@returnphp stringphp php php php php php Thephp correspondingphp keyphp valuephp.
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exceptionphp ifphp thephp php$keyphp isphp notphp aphp columnphp inphp thephp messagephp.
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Specifiedphp fieldphp php\php"php$keyphp\php"php isphp notphp inphp thephp messagephp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$keyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp messagephp fieldphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$keyphp php php Thephp messagephp keyphp.
php php php php php php*php php@paramphp php mixedphp php php$valuephp Thephp valuephp forphp thephp propertyphp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Specifiedphp fieldphp php\php"php$keyphp\php"php isphp notphp inphp thephp messagephp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dataphp[php$keyphp]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp existencephp ofphp messagephp field
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$keyphp Thephp columnphp keyphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_dataphp)php;
php php php php php}

php php php php php/php*
php php php php php php*php Serialize
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Storephp queuephp andphp dataphp inphp serializedphp object
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_queueClassphp'php,php php'php_dataphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setupphp tophp dophp onphp wakeupphp.
php php php php php php*php Aphp dephp-serializedphp Messagephp shouldphp notphp bephp assumedphp tophp havephp accessphp tophp aphp live
php php php php php php*php queuephp connectionphp,php sophp setphp php_connectedphp php=php falsephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_connectedphp php=php falsephp;
php php php php php}

php php php php php php/php*php*
php php php php php php*php Returnsphp thephp queuephp objectphp,php orphp nullphp ifphp thisphp isphp disconnectedphp message
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp|null
php php php php php php*php/
php php php php publicphp functionphp getQueuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_queuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp queuephp objectphp,php tophp rephp-establishphp aphp livephp connection
php php php php php php*php tophp thephp queuephp forphp aphp Messagephp thatphp hasphp beenphp dephp-serializedphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp setQueuephp(Zendphp_Queuephp php$queuephp)
php php php php php{
php php php php php php php php php$queueClassphp php php php php php php php php=php getphp_classphp(php$queuephp)php;
php php php php php php php php php$thisphp-php>php_queuephp php php php php php php=php php$queuephp;
php php php php php php php php php$thisphp-php>php_queueClassphp php=php php$queueClassphp;
php php php php php php php php php$thisphp-php>php_connectedphp php php=php truephp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp thephp classphp namephp ofphp thephp Queuephp objectphp forphp whichphp this
php php php php php php*php Messagephp wasphp createdphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getQueueClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_queueClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp columnphp/valuephp dataphp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp allphp dataphp inphp thephp rowphp fromphp anphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp Zendphp_Queuephp_Messagephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFromArrayphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php foreachphp php(php$dataphp asphp php$columnNamephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php$columnNamephp php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
