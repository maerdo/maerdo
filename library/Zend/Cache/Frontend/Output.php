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
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Outputphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Core
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Corephp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Frontendphp_Outputphp extendsphp Zendphp_Cachephp_Core
php{

php php php php privatephp php$php_idStackphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>php_idStackphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Startphp thephp cache
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@paramphp php booleanphp php$echoDataphp php php php php php php php php php php php php php php Ifphp setphp tophp truephp,php datasphp arephp sentphp tophp thephp browserphp ifphp thephp cachephp isphp hitphp php(simpyphp returnedphp elsephp)
php php php php php php*php php@returnphp mixedphp Truephp ifphp thephp cachephp isphp hitphp php(falsephp elsephp)php withphp php$echoDataphp=truephp php(defaultphp)php php;php stringphp elsephp php(datasphp)
php php php php php php*php/
php php php php publicphp functionphp startphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp,php php$echoDataphp php=php truephp)
php php php php php{
php php php php php php php php php$dataphp php=php php$thisphp-php>loadphp(php$idphp,php php$doNotTestCacheValidityphp)php;
php php php php php php php php ifphp php(php$dataphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php php$echoDataphp php)php php{
php php php php php php php php php php php php php php php php echophp(php$dataphp)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php obphp_startphp(php)php;
php php php php php php php php obphp_implicitphp_flushphp(falsephp)php;
php php php php php php php php php$thisphp-php>php_idStackphp[php]php php=php php$idphp;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Stopphp thephp cache
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php$tagsphp php php php php php php php php php php php php Tagsphp array
php php php php php php*php php@paramphp php intphp php php php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@paramphp php stringphp php php$forcedDatasphp php php php php php Ifphp notphp nullphp,php forcephp writtenphp datasphp withphp this
php php php php php php*php php@paramphp php booleanphp php$echoDataphp php php php php php php php php Ifphp setphp tophp truephp,php datasphp arephp sentphp tophp thephp browser
php php php php php php*php php@paramphp php intphp php php php php php$priorityphp php php php php php php php php integerphp betweenphp php0php php(veryphp lowphp priorityphp)php andphp php1php0php php(maximumphp priorityphp)php usedphp byphp somephp particularphp backends
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp endphp(php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp,php php$forcedDatasphp php=php nullphp,php php$echoDataphp php=php truephp,php php$priorityphp php=php php8php)
php php php php php{
php php php php php php php php ifphp php(php$forcedDatasphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataphp php=php obphp_getphp_contentsphp(php)php;
php php php php php php php php php php php php obphp_endphp_cleanphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp php=php&php php$forcedDatasphp;
php php php php php php php php php}
php php php php php php php php php$idphp php=php arrayphp_popphp(php$thisphp-php>php_idStackphp)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'usephp ofphp endphp(php)php withoutphp aphp startphp(php)php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>savephp(php$dataphp,php php$idphp,php php$tagsphp,php php$specificLifetimephp,php php$priorityphp)php;
php php php php php php php php ifphp php(php$echoDataphp)php php{
php php php php php php php php php php php php echophp(php$dataphp)php;
php php php php php php php php php}
php php php php php}

php}
