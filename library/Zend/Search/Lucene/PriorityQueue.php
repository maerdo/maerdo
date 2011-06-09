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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PriorityQueuephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Abstractphp Priorityphp Queue
php php*
php php*php Itphp implementsphp aphp priorityphp queuephp.
php php*php Pleasephp gophp tophp php"Dataphp Structuresphp andphp Algorithmsphp"php,
php php*php Ahophp,php Hopcroftphp,php andphp Ullmanphp,php Addisonphp-Wesleyphp,php php1php9php8php3php php(correctedphp php1php9php8php7php editionphp)php,
php php*php forphp implementationphp detailsphp.
php php*
php php*php Itphp providesphp Ophp(logphp(Nphp)php)php timephp ofphp putphp/popphp operationsphp,php wherephp Nphp isphp aphp sizephp ofphp queue
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_PriorityQueue
php{
php php php php php/php*php*
php php php php php php*php Queuephp heap
php php php php php php*
php php php php php php*php Heapphp containsphp balancedphp partialphp orderedphp binaryphp treephp representedphp inphp array
php php php php php php*php php[php0php]php php-php topphp ofphp thephp tree
php php php php php php*php php[php1php]php php-php firstphp childphp ofphp php[php0php]
php php php php php php*php php[php2php]php php-php secondphp childphp ofphp php[php0php]
php php php php php php*php php.php.php.
php php php php php php*php php[php2php*nphp php+php php1php]php php-php firstphp childphp ofphp php[nphp]
php php php php php php*php php[php2php*nphp php+php php2php]php php-php secondphp childphp ofphp php[nphp]
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_heapphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Addphp elementphp tophp thephp queue
php php php php php php*
php php php php php php*php Ophp(logphp(Nphp)php)php time
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$element
php php php php php php*php/
php php php php publicphp functionphp putphp(php$elementphp)
php php php php php{
php php php php php php php php php$nodeIdphp php php php=php countphp(php$thisphp-php>php_heapphp)php;
php php php php php php php php php$parentIdphp php=php php(php$nodeIdphp-php1php)php php>php>php php1php;php php php php/php/php floorphp(php php(php$nodeIdphp-php1php)php/php2php php)

php php php php php php php php whilephp php(php$nodeIdphp php!php=php php0php php php&php&php php php$thisphp-php>php_lessphp(php$elementphp,php php$thisphp-php>php_heapphp[php$parentIdphp]php)php)php php{
php php php php php php php php php php php php php/php/php Movephp parentphp nodephp down
php php php php php php php php php php php php php$thisphp-php>php_heapphp[php$nodeIdphp]php php=php php$thisphp-php>php_heapphp[php$parentIdphp]php;

php php php php php php php php php php php php php/php/php Movephp pointerphp tophp thephp nextphp levelphp ofphp tree
php php php php php php php php php php php php php$nodeIdphp php php php=php php$parentIdphp;
php php php php php php php php php php php php php$parentIdphp php=php php(php$nodeIdphp-php1php)php php>php>php php1php;php php php php/php/php floorphp(php php(php$nodeIdphp-php1php)php/php2php php)
php php php php php php php php php}

php php php php php php php php php/php/php Putphp newphp nodephp intophp thephp tree
php php php php php php php php php$thisphp-php>php_heapphp[php$nodeIdphp]php php=php php$elementphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp leastphp elementphp ofphp thephp queue
php php php php php php*
php php php php php php*php Constantphp time
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp topphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_heapphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_heapphp[php0php]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Removesphp andphp returnphp leastphp elementphp ofphp thephp queue
php php php php php php*
php php php php php php*php Ophp(logphp(Nphp)php)php time
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp popphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_heapphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$topphp php=php php$thisphp-php>php_heapphp[php0php]php;
php php php php php php php php php$lastIdphp php=php countphp(php$thisphp-php>php_heapphp)php php-php php1php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Findphp appropriatephp positionphp forphp lastphp node
php php php php php php php php php php*php/
php php php php php php php php php$nodeIdphp php php=php php0php;php php php php php php/php/php Startphp fromphp aphp top
php php php php php php php php php$childIdphp php=php php1php;php php php php php php/php/php Firstphp child

php php php php php php php php php/php/php Choosephp smallerphp child
php php php php php php php php ifphp php(php$lastIdphp php>php php2php php php&php&php php php$thisphp-php>php_lessphp(php$thisphp-php>php_heapphp[php2php]php,php php$thisphp-php>php_heapphp[php1php]php)php)php php{
php php php php php php php php php php php php php$childIdphp php=php php2php;
php php php php php php php php php}

php php php php php php php php whilephp php(php$childIdphp <php php$lastIdphp php php&php&
php php php php php php php php php php php php php php php php$thisphp-php>php_lessphp(php$thisphp-php>php_heapphp[php$childIdphp]php,php php$thisphp-php>php_heapphp[php$lastIdphp]php)
php php php php php php php php php php php)php php{
php php php php php php php php php php php php php/php/php Movephp childphp nodephp up
php php php php php php php php php php php php php$thisphp-php>php_heapphp[php$nodeIdphp]php php=php php$thisphp-php>php_heapphp[php$childIdphp]php;

php php php php php php php php php php php php php$nodeIdphp php php=php php$childIdphp;php php php php php php php php php php php php php php php php/php/php Gophp down
php php php php php php php php php php php php php$childIdphp php=php php(php$nodeIdphp <php<php php1php)php php+php php1php;php php php php php php/php/php Firstphp child

php php php php php php php php php php php php php/php/php Choosephp smallerphp child
php php php php php php php php php php php php ifphp php(php(php$childIdphp+php1php)php <php php$lastIdphp php php&php&
php php php php php php php php php php php php php php php php php$thisphp-php>php_lessphp(php$thisphp-php>php_heapphp[php$childIdphp+php1php]php,php php$thisphp-php>php_heapphp[php$childIdphp]php)
php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$childIdphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Movephp lastphp elementphp tophp thephp newphp position
php php php php php php php php php$thisphp-php>php_heapphp[php$nodeIdphp]php php=php php$thisphp-php>php_heapphp[php$lastIdphp]php;
php php php php php php php php unsetphp(php$thisphp-php>php_heapphp[php$lastIdphp]php)php;

php php php php php php php php returnphp php$topphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Clearphp queue
php php php php php php*php/
php php php php publicphp functionphp clearphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_heapphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparephp elements
php php php php php php*
php php php php php php*php Returnsphp truephp,php ifphp php$elphp1php isphp lessphp thanphp php$elphp2php;php elsephp otherwise
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$elphp1
php php php php php php*php php@paramphp mixedphp php$elphp2
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_lessphp(php$elphp1php,php php$elphp2php)php;
php}

