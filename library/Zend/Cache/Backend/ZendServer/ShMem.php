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
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ShMemphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php php@seephp Zendphp_Cachephp_Backendphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/Interfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Cachephp_Backendphp_ZendServerphp php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/ZendServerphp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Backendphp_ZendServerphp_ShMemphp extendsphp Zendphp_Cachephp_Backendphp_ZendServerphp implementsphp Zendphp_Cachephp_Backendphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'zendphp_shmphp_cachephp_storephp'php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Zendphp_Cachephp_ZendServerphp_ShMemphp backendphp hasphp tophp bephp usedphp withinphp Zendphp Serverphp environmentphp.php'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storephp data
php php php php php php*
php php php php php php*php php@paramphp mixedphp php php$dataphp php php php php php php php Objectphp tophp store
php php php php php php*php php@paramphp stringphp php$idphp php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp intphp php php php php$timeToLivephp php Timephp tophp livephp inphp seconds
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_storephp(php$dataphp,php php$idphp,php php$timeToLivephp)
php php php php php{
php php php php php php php php ifphp php(zendphp_shmphp_cachephp_storephp(php$thisphp-php>php_optionsphp[php'namespacephp'php]php php.php php'php:php:php'php php.php php$idphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$timeToLivephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Storephp operationphp failedphp.php'php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp php php php php php php php php php Cachephp id
php php php php php php*php/
php php php php protectedphp functionphp php_fetchphp(php$idphp)
php php php php php{
php php php php php php php php returnphp zendphp_shmphp_cachephp_fetchphp(php$thisphp-php>php_optionsphp[php'namespacephp'php]php php.php php'php:php:php'php php.php php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp php php php php php php php php php Cachephp id
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php protectedphp functionphp php_unsetphp(php$idphp)
php php php php php{
php php php php php php php php returnphp zendphp_shmphp_cachephp_deletephp(php$thisphp-php>php_optionsphp[php'namespacephp'php]php php.php php'php:php:php'php php.php php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp cache
php php php php php php*php/
php php php php protectedphp functionphp php_clearphp(php)
php php php php php{
php php php php php php php php zendphp_shmphp_cachephp_clearphp(php$thisphp-php>php_optionsphp[php'namespacephp'php]php)php;
php php php php php}
php}
