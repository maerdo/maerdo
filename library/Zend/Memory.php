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
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Memoryphp.phpphp php2php3php5php5php4php php2php0php1php0php-php1php2php-php1php8php php1php5php:php3php7php:php4php7Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Memoryphp_Exceptionphp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Managerphp.phpphp'php;

php/php*php*php Zendphp_Memoryphp_Valuephp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Valuephp.phpphp'php;

php/php*php*php Zendphp_Memoryphp_Containerphp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Containerphp.phpphp'php;

php/php*php*php Zendphp_Memoryphp_Exceptionphp php*php/
requirephp_oncephp php'Zendphp/Cachephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Memory
php{
php php php php php/php*php*
php php php php php php*php Factory
php php php php php php*
php php php php php php*php php@paramphp stringphp php$backendphp backendphp name
php php php php php php*php php@paramphp arrayphp php$backendOptionsphp associativephp arrayphp ofphp optionsphp forphp thephp correspondingphp backendphp constructor
php php php php php php*php php@returnphp Zendphp_Memoryphp_Manager
php php php php php php*php php@throwsphp Zendphp_Memoryphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$backendphp,php php$backendOptionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(strcasecmpphp(php$backendphp,php php'nonephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Memoryphp_Managerphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Lookphp throughphp availablephp backendsand
php php php php php php php php php/php/php php(thatphp allowsphp tophp specifyphp itphp inphp anyphp casephp)
php php php php php php php php php$backendIsFoundphp php=php falsephp;
php php php php php php php php foreachphp php(Zendphp_Cachephp:php:php$standardBackendsphp asphp php$zendCacheBackendphp)php php{
php php php php php php php php php php php php ifphp php(strcasecmpphp(php$backendphp,php php$zendCacheBackendphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$backendphp php=php php$zendCacheBackendphp;
php php php php php php php php php php php php php php php php php$backendIsFoundphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$backendIsFoundphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Memoryphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Memoryphp_Exceptionphp(php"Incorrectphp backendphp php(php$backendphp)php"php)php;
php php php php php php php php php}

php php php php php php php php php$backendClassphp php=php php'Zendphp_Cachephp_Backendphp_php'php php.php php$backendphp;

php php php php php php php php php/php/php Forphp perfsphp reasonsphp,php wephp dophp notphp usephp thephp Zendphp_Loaderphp:php:loadClassphp(php)php method
php php php php php php php php php/php/php php(securityphp controlsphp arephp explicitphp)
php php php php php php php php requirephp_oncephp strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$backendClassphp)php php.php php'php.phpphp'php;

php php php php php php php php php$backendObjectphp php=php newphp php$backendClassphp(php$backendOptionsphp)php;

php php php php php php php php returnphp newphp Zendphp_Memoryphp_Managerphp(php$backendObjectphp)php;
php php php php php}
php}
