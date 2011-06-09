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
php php*php php@versionphp php php php php$Idphp:php Iteratorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Queue
php php*php php@subpackagephp Message
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Queuephp_Messagephp_Iteratorphp implementsphp Iteratorphp,php Countable
php{
php php php php php/php*php*
php php php php php php*php Thephp dataphp forphp thephp queuephp message
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php php/php*php*
php php php php php php*php Connectedphp isphp truephp ifphp wephp havephp aphp referencephp tophp aphp live
php php php php php php*php Zendphp_Queuephp_Adapterphp_AdapterInterfacephp objectphp.
php php php php php php*php Thisphp isphp falsephp afterphp thephp Messagephp hasphp beenphp deserializedphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_connectedphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Zendphp_Queuephp_Adapterphp_AdapterInterfacephp parentphp classphp orphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Queuephp_Adapterphp_AdapterInterface
php php php php php php*php/
php php php php protectedphp php$php_queuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp classphp ofphp thephp Zendphp_Queuephp_Adapterphp_AdapterInterfacephp objectphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_queueClassphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Zendphp_Queuephp_Messagephp classphp name
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messageClassphp php=php php'Zendphp_Queuephp_Messagephp'php;

php php php php php php/php*php*
php php php php php php*php Iteratorphp pointerphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_pointerphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php(php'queuephp'php,php php'messageClassphp'php,php php'dataphp'php=php>arrayphp(php)php)php;
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'queuephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_queuephp php php php php php php=php php$optionsphp[php'queuephp'php]php;
php php php php php php php php php php php php php$thisphp-php>php_queueClassphp php=php getphp_classphp(php$thisphp-php>php_queuephp)php;
php php php php php php php php php php php php php$thisphp-php>php_connectedphp php php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_connectedphp php=php falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'messageClassphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_messageClassphp php=php php$optionsphp[php'messageClassphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Queuephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Queuephp_Exceptionphp(php'arrayphp optionsurationphp mustphp havephp php$optionsphp[php\php'dataphp\php'php]php php=php arrayphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php loadphp thephp messagephp class
php php php php php php php php php$classnamephp php=php php$thisphp-php>php_messageClassphp;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php forphp eachphp ofphp thephp messages
php php php php php php php php foreachphp php(php$optionsphp[php'dataphp'php]php asphp php$dataphp)php php{
php php php php php php php php php php php php php/php/php constructphp thephp messagephp parameters
php php php php php php php php php php php php php$messagephp php=php arrayphp(php'dataphp'php php=php>php php$dataphp)php;

php php php php php php php php php php php php php/php/php Ifphp queuephp hasphp notphp beenphp setphp,php thenphp usephp thephp defaultphp.
php php php php php php php php php php php php ifphp php(emptyphp(php$messagephp[php'queuephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$messagephp[php'queuephp'php]php php=php php$thisphp-php>php_queuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php constructphp thephp messagephp andphp addphp itphp tophp php_dataphp[php]php;
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php]php php=php newphp php$classnamephp(php$messagephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp queuephp andphp dataphp inphp serializedphp object
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_dataphp'php,php php'php_queueClassphp'php,php php'php_messageClassphp'php,php php'php_pointerphp'php)php;
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

php php php php php/php*php*
php php php php php php*php Returnsphp allphp dataphp asphp anphp arrayphp.
php php php php php php*
php php php php php php*php Usedphp forphp debuggingphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php/php/php php@todophp Thisphp worksphp onlyphp ifphp wephp havephp iteratedphp through
php php php php php php php php php/php/php thephp resultphp setphp oncephp tophp instantiatephp thephp messagesphp.
php php php php php php php php foreachphp php(php$thisphp-php>php_dataphp asphp php$iphp php=php>php php$messagephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$iphp]php php=php php$messagephp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp queuephp objectphp,php orphp nullphp ifphp thisphp isphp disconnectedphp messagephp set
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
php php php php php php*php php@paramphp php Zendphp_Queuephp_Adapterphp_AdapterInterfacephp php$queue
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Queuephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setQueuephp(Zendphp_Queuephp php$queuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queuephp php php php php php=php php$queuephp;
php php php php php php php php php$thisphp-php>php_connectedphp php=php falsephp;

php php php php php php php php php/php/php php@todophp Thisphp worksphp onlyphp ifphp wephp havephp iteratedphp through
php php php php php php php php php/php/php thephp resultphp setphp oncephp tophp instantiatephp thephp rowsphp.
php php php php php php php php foreachphp php(php$thisphp-php>php_dataphp asphp php$iphp php=php>php php$messagephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_connectedphp php=php php$thisphp-php>php_connectedphp php|php|php php$messagephp-php>setQueuephp(php$queuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_connectedphp;
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

php php php php php/php*
php php php php php php*php Iteratorphp implementation
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp elementphp.
php php php php php php*php Similarphp tophp thephp resetphp(php)php functionphp forphp arraysphp inphp PHPphp.
php php php php php php*php Requiredphp byphp interfacephp Iteratorphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_pointerphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp elementphp.
php php php php php php*php Similarphp tophp thephp currentphp(php)php functionphp forphp arraysphp inphp PHP
php php php php php php*php Requiredphp byphp interfacephp Iteratorphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Queuephp_Messagephp currentphp elementphp fromphp thephp collection
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp php(php(php$thisphp-php>validphp(php)php php=php=php=php falsephp)
php php php php php php php php php php php php php?php null
php php php php php php php php php php php php php:php php$thisphp-php>php_dataphp[php$thisphp-php>php_pointerphp]php)php;php php/php/php returnphp thephp messagesphp object
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp identifyingphp keyphp ofphp thephp currentphp elementphp.
php php php php php php*php Similarphp tophp thephp keyphp(php)php functionphp forphp arraysphp inphp PHPphp.
php php php php php php*php Requiredphp byphp interfacephp Iteratorphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pointerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp elementphp.
php php php php php php*php Similarphp tophp thephp nextphp(php)php functionphp forphp arraysphp inphp PHPphp.
php php php php php php*php Requiredphp byphp interfacephp Iteratorphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php+php+php$thisphp-php>php_pointerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp elementphp afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)php.
php php php php php php*php Usedphp tophp checkphp ifphp wephp'vephp iteratedphp tophp thephp endphp ofphp thephp collectionphp.
php php php php php php*php Requiredphp byphp interfacephp Iteratorphp.
php php php php php php*
php php php php php php*php php@returnphp boolphp Falsephp ifphp therephp'sphp nothingphp morephp tophp iteratephp over
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pointerphp <php countphp(php$thisphp)php;
php php php php php}

php php php php php/php*
php php php php php php*php Countablephp Implementation
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp elementsphp inphp thephp collectionphp.
php php php php php php*
php php php php php php*php Implementsphp Countablephp:php:countphp(php)
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_dataphp)php;
php php php php php}
php}
