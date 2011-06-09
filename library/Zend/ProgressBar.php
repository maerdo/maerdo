<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_ProgressBar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ProgressBarphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_ProgressBarphp offersphp anphp interfacephp forphp multiplephp enviromentsphp.
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_ProgressBar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_ProgressBar
php{
php php php php php/php*php*
php php php php php php*php Minphp value
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_minphp;

php php php php php/php*php*
php php php php php php*php Maxphp value
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_maxphp;

php php php php php/php*php*
php php php php php php*php Currentphp value
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_currentphp;

php php php php php/php*php*
php php php php php php*php Startphp timephp ofphp thephp progressbarphp,php requiredphp forphp ETA
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_startTimephp;

php php php php php/php*php*
php php php php php php*php Currentphp statusphp text
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_statusTextphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Adapterphp forphp thephp output
php php php php php php*
php php php php php php*php php@varphp Zendphp_ProgressBarphp_Adapter
php php php php php php*php/
php php php php protectedphp php$php_adapterphp;

php php php php php/php*php*
php php php php php php*php Namespacephp forphp keepingphp thephp progressbarphp persistent
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_persistenceNamespacephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp progressbarphp backendphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_ProgressBarphp_Adapterphp php$adapter
php php php php php php*php php@paramphp php floatphp php php php php php php php php php php php php php php php php php php php php$min
php php php php php php*php php@paramphp php floatphp php php php php php php php php php php php php php php php php php php php php$max
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$persistenceNamespace
php php php php php php*php php@throwsphp Zendphp_ProgressBarphp_Exceptionphp Whenphp php$minphp isphp greaterphp thanphp php$max
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_ProgressBarphp_Adapterphp php$adapterphp,php php$minphp php=php php0php,php php$maxphp php=php php1php0php0php,php php$persistenceNamespacephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Checkphp minphp/maxphp valuesphp andphp setphp them
php php php php php php php php ifphp php(php$minphp php>php php$maxphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_ProgressBarphp_Exceptionphp(php'php$maxphp mustphp bephp greaterphp thanphp php$minphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_minphp php php php php php=php php(floatphp)php php$minphp;
php php php php php php php php php$thisphp-php>php_maxphp php php php php php=php php(floatphp)php php$maxphp;
php php php php php php php php php$thisphp-php>php_currentphp php=php php(floatphp)php php$minphp;

php php php php php php php php php/php/php Seephp ifphp wephp havephp tophp openphp aphp sessionphp namespace
php php php php php php php php ifphp php(php$persistenceNamespacephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Namespacephp.phpphp'php;

php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp php=php newphp Zendphp_Sessionphp_Namespacephp(php$persistenceNamespacephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp adapter
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;

php php php php php php php php php/php/php Trackphp thephp startphp time
php php php php php php php php php$thisphp-php>php_startTimephp php=php timephp(php)php;

php php php php php php php php php/php/php Seephp Ifphp aphp persistenceNamespacephp existsphp andphp handlephp accordingly
php php php php php php php php ifphp php(php$thisphp-php>php_persistenceNamespacephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_persistenceNamespacephp-php>isSetphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_startTimephp php php=php php$thisphp-php>php_persistenceNamespacephp-php>startTimephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php php php php=php php$thisphp-php>php_persistenceNamespacephp-php>currentphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_statusTextphp php=php php$thisphp-php>php_persistenceNamespacephp-php>statusTextphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp-php>isSetphp php php php php php php=php truephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp-php>startTimephp php php=php php$thisphp-php>php_startTimephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp-php>currentphp php php php php=php php$thisphp-php>php_currentphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp-php>statusTextphp php=php php$thisphp-php>php_statusTextphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>updatephp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp thephp progressbar
php php php php php php*
php php php php php php*php php@paramphp php floatphp php php$value
php php php php php php*php php@paramphp php stringphp php$text
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp updatephp(php$valuephp php=php nullphp,php php$textphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Updatephp valuephp ifphp given
php php php php php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php minphp(php$thisphp-php>php_maxphp,php maxphp(php$thisphp-php>php_minphp,php php$valuephp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Updatephp textphp ifphp given
php php php php php php php php ifphp php(php$textphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_statusTextphp php=php php$textphp;
php php php php php php php php php}

php php php php php php php php php/php/php Seephp ifphp wephp havephp tophp updatephp aphp namespace
php php php php php php php php ifphp php(php$thisphp-php>php_persistenceNamespacephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp-php>currentphp php php php php=php php$thisphp-php>php_currentphp;
php php php php php php php php php php php php php$thisphp-php>php_persistenceNamespacephp-php>statusTextphp php=php php$thisphp-php>php_statusTextphp;
php php php php php php php php php}

php php php php php php php php php/php/php Calculatephp percent
php php php php php php php php ifphp php(php$thisphp-php>php_minphp php=php=php=php php$thisphp-php>php_maxphp)php php{
php php php php php php php php php php php php php$percentphp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$percentphp php=php php(floatphp)php php(php$thisphp-php>php_currentphp php-php php$thisphp-php>php_minphp)php php/php php(php$thisphp-php>php_maxphp php-php php$thisphp-php>php_minphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Calculatephp ETA
php php php php php php php php php$timeTakenphp php=php timephp(php)php php-php php$thisphp-php>php_startTimephp;

php php php php php php php php ifphp php(php$percentphp php=php=php=php php.php0php php|php|php php$percentphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$timeRemainingphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$timeRemainingphp php=php roundphp(php(php(php1php php/php php$percentphp)php php*php php$timeTakenphp)php php-php php$timeTakenphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Pollphp thephp adapter
php php php php php php php php php$thisphp-php>php_adapterphp-php>notifyphp(php$thisphp-php>php_currentphp,php php$thisphp-php>php_maxphp,php php$percentphp,php php$timeTakenphp,php php$timeRemainingphp,php php$thisphp-php>php_statusTextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Updatephp thephp progressbarphp tophp thephp nextphp value
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$text
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php$diffphp php=php php1php,php php$textphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>updatephp(maxphp(php$thisphp-php>php_minphp,php minphp(php$thisphp-php>php_maxphp,php php$thisphp-php>php_currentphp php+php php$diffphp)php)php,php php$textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp thephp adaptersphp finishphp(php)php behaviour
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp finishphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_persistenceNamespacephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_persistenceNamespacephp-php>isSetphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_adapterphp-php>finishphp(php)php;
php php php php php}
php}
