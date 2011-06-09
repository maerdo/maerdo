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
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/FeedAbstractphp.phpphp'php;

requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_Syndicationphp_Feed
php php php php extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php{
php php php php php/php*php*
php php php php php php*php Getphp updatephp period
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUpdatePeriodphp(php)
php php php php php{
php php php php php php php php php$namephp php=php php'updatePeriodphp'php;
php php php php php php php php php$periodphp php=php php$thisphp-php>php_getDataphp(php$namephp)php;

php php php php php php php php ifphp php(php$periodphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php'dailyphp'php;
php php php php php php php php php php php php returnphp php'dailyphp'php;php php/php/Defaultphp specifiedphp byphp spec
php php php php php php php php php}

php php php php php php php php switchphp php(php$periodphp)
php php php php php php php php php{
php php php php php php php php php php php php casephp php'hourlyphp'php:
php php php php php php php php php php php php casephp php'dailyphp'php:
php php php php php php php php php php php php casephp php'weeklyphp'php:
php php php php php php php php php php php php casephp php'yearlyphp'php:
php php php php php php php php php php php php php php php php returnphp php$periodphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"Feedphp specifiedphp invalidphp updatephp periodphp:php php'php$periodphp'php.php"
php php php php php php php php php php php php php php php php php php php php php.php php php"php Mustphp bephp onephp ofphp hourlyphp,php dailyphp,php weeklyphp orphp yearlyphp"
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp updatephp frequency
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getUpdateFrequencyphp(php)
php php php php php{
php php php php php php php php php$namephp php=php php'updateFrequencyphp'php;
php php php php php php php php php$freqphp php=php php$thisphp-php>php_getDataphp(php$namephp,php php'numberphp'php)php;

php php php php php php php php ifphp php(php!php$freqphp php|php|php php$freqphp <php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php1php;
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}

php php php php php php php php returnphp php$freqphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp updatephp frequencyphp asphp ticks
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getUpdateFrequencyAsTicksphp(php)
php php php php php{
php php php php php php php php php$namephp php=php php'updateFrequencyphp'php;
php php php php php php php php php$freqphp php=php php$thisphp-php>php_getDataphp(php$namephp,php php'numberphp'php)php;

php php php php php php php php ifphp php(php!php$freqphp php|php|php php$freqphp <php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php1php;
php php php php php php php php php php php php php$freqphp php=php php1php;
php php php php php php php php php}

php php php php php php php php php$periodphp php=php php$thisphp-php>getUpdatePeriodphp(php)php;
php php php php php php php php php$ticksphp php=php php1php;

php php php php php php php php switchphp php(php$periodphp)
php php php php php php php php php{
php php php php php php php php php php php php php/php/intentionalphp fallphp through
php php php php php php php php php php php php casephp php'yearlyphp'php:
php php php php php php php php php php php php php php php php php$ticksphp php*php=php php5php2php;php php/php/TODOphp:php fixphp generalisationphp,php howphp?
php php php php php php php php php php php php casephp php'weeklyphp'php:
php php php php php php php php php php php php php php php php php$ticksphp php*php=php php7php;
php php php php php php php php php php php php casephp php'dailyphp'php:
php php php php php php php php php php php php php php php php php$ticksphp php*php=php php2php4php;
php php php php php php php php php php php php casephp php'hourlyphp'php:
php php php php php php php php php php php php php php php php php$ticksphp php*php=php php3php6php0php0php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:php php/php/Neverphp arrivephp herephp,php exceptionphp thrownphp inphp getPeriodphp(php)
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$ticksphp php/php php$freqphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp updatephp base
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Datephp|null
php php php php php php*php/
php php php php publicphp functionphp getUpdateBasephp(php)
php php php php php{
php php php php php php php php php$updateBasephp php=php php$thisphp-php>php_getDataphp(php'updateBasephp'php)php;
php php php php php php php php php$datephp php=php nullphp;
php php php php php php php php ifphp php(php$updateBasephp)php php{
php php php php php php php php php php php php php$datephp php=php newphp Zendphp_Datephp;
php php php php php php php php php php php php php$datephp-php>setphp(php$updateBasephp,php Zendphp_Datephp:php:Wphp3Cphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp dataphp specifiedphp byphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp mixedphp|null
php php php php php php*php/
php php php php privatephp functionphp php_getDataphp(php$namephp,php php$typephp php=php php'stringphp'php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$typephp php.php php'php(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/synphp1php0php:php'php php.php php$namephp php.php php'php)php'php)php;

php php php php php php php php ifphp php(php!php$dataphp)php php{
php php php php php php php php php php php php php$dataphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php$dataphp;

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp Syndicationphp namespaces
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'synphp1php0php'php,php php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/syndicationphp/php'php)php;
php php php php php}
php}
