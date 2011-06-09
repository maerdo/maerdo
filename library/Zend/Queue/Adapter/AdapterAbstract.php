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
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AdapterAbstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Queue
php php*php/
requirephp_oncephp php'Zendphp/Queuephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Queuephp_Adapterphp_AdapterInterface
php php*php/
requirephp_oncephp php'Zendphp/Queuephp/Adapterphp/AdapterInterfacephp.phpphp'php;

php/php*php*
php php*php Classphp forphp connectingphp tophp queuesphp performingphp commonphp operationsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Queuephp_Adapterphp_AdapterAbstract
php php php php implementsphp Zendphp_Queuephp_Adapterphp_AdapterInterface
php{
php php php php php/php*php*
php php php php php php*php Defaultphp timeoutphp forphp createQueuephp(php)php function
php php php php php php*php/
php php php php constphp CREATEphp_TIMEOUTphp_DEFAULTphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php Defaultphp timeoutphp forphp recievephp(php)php function
php php php php php php*php/
php php php php constphp RECEIVEphp_TIMEOUTphp_DEFAULTphp php=php php3php0php;

php php php php php/php*php*
php php php php php php*php Userphp-providedphp options
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Internalphp arrayphp ofphp queuesphp tophp savephp onphp lookups
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_queuesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Containsphp thephp Zendphp_Queuephp thatphp thisphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Queuephp_Adapterphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_queuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php$optionsphp isphp anphp arrayphp ofphp keyphp/valuephp pairsphp orphp anphp instancephp ofphp Zendphp_Config
php php php php php php*php containingphp configurationphp optionsphp.php php Thesephp optionsphp arephp commonphp tophp mostphp adaptersphp:
php php php php php php*
php php php php php php*php Seephp thephp Zendphp_Queuephp Adapterphp Notesphp documentationphp forphp examplephp configurationsphp.
php php php php php php*
php php php php php php*php Somephp optionsphp arephp usedphp onphp aphp casephp-byphp-casephp basisphp byphp adaptersphp:
php php php php php php*
php php php php php php*php accessphp_keyphp php php php php php=php>php php(stringphp)php Amazonphp AWSphp Accessphp Key
php php php php php php*php secretphp_keyphp php php php php php=php>php php(stringphp)php Amazonphp AWSphp Secretphp Key
php php php php php php*php dbnamephp php php php php php php php php php=php>php php(stringphp)php Thephp namephp ofphp thephp databasephp tophp user
php php php php php php*php usernamephp php php php php php php php=php>php php(stringphp)php Connectphp tophp thephp databasephp asphp thisphp usernamephp.
php php php php php php*php passwordphp php php php php php php php=php>php php(stringphp)php Passwordphp associatedphp withphp thephp usernamephp.
php php php php php php*php hostphp php php php php php php php php php php php=php>php php(stringphp)php Whatphp hostphp tophp connectphp tophp,php defaultsphp tophp localhost
php php php php php php*php portphp php php php php php php php php php php php=php>php php(stringphp)php Thephp portphp ofphp thephp database
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$configphp Anphp arrayphp havingphp configurationphp data
php php php php php php*php php@paramphp php Zendphp_Queuephp Thephp Zendphp_Queuephp objectphp thatphp createdphp thisphp class
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp,php Zendphp_Queuephp php$queuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php Verifyphp thatphp adapterphp parametersphp arephp inphp anphp arrayphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'Adapterphp optionsphp mustphp bephp anphp arrayphp orphp Zendphp_Configphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp thephp queue
php php php php php php php php ifphp php(php$queuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setQueuephp(php$queuephp)php;
php php php php php php php php php}

php php php php php php php php php$adapterOptionsphp php=php arrayphp(php)php;
php php php php php php php php php$driverOptionsphp php php=php arrayphp(php)php;

php php php php php php php php php/php/php Normalizephp thephp optionsphp andphp mergephp withphp thephp defaults
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp[php'optionsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php"Configurationphp arrayphp php'optionsphp'php mustphp bephp anphp arrayphp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Canphp'tphp usephp arrayphp_mergephp(php)php becausephp keysphp mightphp bephp integers
php php php php php php php php php php php php foreachphp php(php$optionsphp[php'optionsphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$adapterOptionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'driverOptionsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php/php/php canphp'tphp usephp arrayphp_mergephp(php)php becausephp keysphp mightphp bephp integers
php php php php php php php php php php php php foreachphp php(php(arrayphp)php$optionsphp[php'driverOptionsphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$driverOptionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_optionsphp php=php arrayphp_mergephp(php$thisphp-php>php_optionsphp,php php$optionsphp)php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'optionsphp'php]php php php php php php php php=php php$adapterOptionsphp;
php php php php php php php php php$thisphp-php>php_optionsphp[php'driverOptionsphp'php]php php=php php$driverOptionsphp;
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php*php Queuephp managementphp functions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/
php php php php php/php*php*
php php php php php php*php getphp thephp Zendphp_Queuephp classphp thatphp isphp attachedphp tophp thisphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp|null
php php php php php php*php/
php php php php publicphp functionphp getQueuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_queuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp thephp Zendphp_Queuephp classphp forphp thisphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Queuephp php$queue
php php php php php php*php php@returnphp Zendphp_Queuephp_Adapterphp_AdapterInterface
php php php php php php*php/
php php php php publicphp functionphp setQueuephp(Zendphp_Queuephp php$queuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queuephp php=php php$queuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp configurationphp optionsphp inphp thisphp adapterphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatesphp ifphp aphp functionphp isphp supportedphp orphp notphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isSupportedphp(php$namephp)
php php php php php{
php php php php php php php php php$listphp php=php php$thisphp-php>getCapabilitiesphp(php)php;

php php php php php php php php returnphp php(issetphp(php$listphp[php$namephp]php)php php&php&php php$listphp[php$namephp]php)php;
php php php php php php}
php}
