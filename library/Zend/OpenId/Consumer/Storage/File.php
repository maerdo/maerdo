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
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Consumer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php3php1php6php1php php2php0php1php0php-php1php0php-php1php9php php1php6php:php0php8php:php3php6Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_OpenIdphp_Consumerphp_Storage
php php*php/
requirephp_oncephp php"Zendphp/OpenIdphp/Consumerphp/Storagephp.phpphp"php;

php/php*php*
php php*php Externalphp storagephp implemmentationphp usingphp serializedphp files
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@subpackagephp Zendphp_OpenIdphp_Consumer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_OpenIdphp_Consumerphp_Storagephp_Filephp extendsphp Zendphp_OpenIdphp_Consumerphp_Storage
php{

php php php php php/php*php*
php php php php php php*php Directoryphp namephp tophp storephp dataphp filesphp in
php php php php php php*
php php php php php php*php php@varphp stringphp php$php_dir
php php php php php php*php/
php php php php privatephp php$php_dirphp;

php php php php php/php*php*
php php php php php php*php Constructsphp storagephp objectphp andphp createsphp storagephp directory
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dirphp directoryphp namephp tophp storephp dataphp filesphp in
php php php php php php*php php@throwsphp Zendphp_OpenIdphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$dirphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$dirphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$tmpphp php=php getenvphp(php'TMPphp'php)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$tmpphp)php)php php{
php php php php php php php php php php php php php php php php php$tmpphp php=php getenvphp(php'TEMPphp'php)php;
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tmpphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$tmpphp php=php php"php/tmpphp"php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$userphp php=php getphp_currentphp_userphp(php)php;
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$userphp)php php&php&php php!emptyphp(php$userphp)php)php php{
php php php php php php php php php php php php php php php php php$tmpphp php.php=php php'php/php'php php.php php$userphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dirphp php=php php$tmpphp php.php php'php/openidphp/consumerphp'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_dirphp php=php php$dirphp;
php php php php php php php php ifphp php(php!isphp_dirphp(php$thisphp-php>php_dirphp)php)php php{
php php php php php php php php php php php php ifphp php(php!php@mkdirphp(php$thisphp-php>php_dirphp,php php0php7php0php0php,php php1php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_OpenIdphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/OpenIdphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_OpenIdphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Cannotphp accessphp storagephp directoryphp php'php php.php php$dirphp,
php php php php php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Exceptionphp:php:ERRORphp_STORAGEphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$fphp php=php fopenphp(php$thisphp-php>php_dirphp.php'php/assocphp.lockphp'php,php php'wphp+php'php)php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_OpenIdphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/OpenIdphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_OpenIdphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Cannotphp createphp aphp lockphp filephp inphp thephp directoryphp php'php php.php php$dirphp,
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Exceptionphp:php:ERRORphp_STORAGEphp)php;
php php php php php php php php php}
php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php ifphp php(php(php$fphp php=php fopenphp(php$thisphp-php>php_dirphp.php'php/discoveryphp.lockphp'php,php php'wphp+php'php)php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_OpenIdphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/OpenIdphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_OpenIdphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Cannotphp createphp aphp lockphp filephp inphp thephp directoryphp php'php php.php php$dirphp,
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Exceptionphp:php:ERRORphp_STORAGEphp)php;
php php php php php php php php php}
php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php ifphp php(php(php$fphp php=php fopenphp(php$thisphp-php>php_dirphp.php'php/noncephp.lockphp'php,php php'wphp+php'php)php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_OpenIdphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/OpenIdphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_OpenIdphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Cannotphp createphp aphp lockphp filephp inphp thephp directoryphp php'php php.php php$dirphp,
php php php php php php php php php php php php php php php php Zendphp_OpenIdphp_Exceptionphp:php:ERRORphp_STORAGEphp)php;
php php php php php php php php php}
php php php php php php php php fclosephp(php$fphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storesphp informationphp aboutphp associationphp identifiedphp byphp php$urlphp/php$handle
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp stringphp php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php$secretphp sharedphp secret
php php php php php php*php php@paramphp longphp php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp addAssociationphp(php$urlphp,php php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)
php php php php php{
php php php php php php php php php$namephp1php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_urlphp_php'php php.php mdphp5php(php$urlphp)php;
php php php php php php php php php$namephp2php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_handlephp_php'php php.php mdphp5php(php$handlephp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/assocphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp1php,php php'wphp+php'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dataphp php=php serializephp(arrayphp(php$urlphp,php php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php)php;
php php php php php php php php php php php php fwritephp(php$fphp,php php$dataphp)php;
php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'symlinkphp'php)php)php php{
php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp2php)php;
php php php php php php php php php php php php php php php php ifphp php(symlinkphp(php$namephp1php,php php$namephp2php)php)php php{
php php php php php php php php php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$fphp2php php=php php@fopenphp(php$namephp2php,php php'wphp+php'php)php;
php php php php php php php php php php php php ifphp php(php$fphp2php)php php{
php php php php php php php php php php php php php php php php fwritephp(php$fphp2php,php php$dataphp)php;
php php php php php php php php php php php php php php php php fclosephp(php$fphp2php)php;
php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp1php)php;
php php php php php php php php php php php php php php php php php$retphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$retphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp informationphp aboutphp associationphp identifiedphp byphp php$url
php php php php php php*php Returnsphp truephp ifphp givenphp associationphp foundphp andphp notphp expiredphp andphp false
php php php php php php*php otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp stringphp php&php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php&php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php&php$secretphp sharedphp secret
php php php php php php*php php@paramphp longphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getAssociationphp(php$urlphp,php php&php$handlephp,php php&php$macFuncphp,php php&php$secretphp,php php&php$expiresphp)
php php php php php{
php php php php php php php php php$namephp1php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_urlphp_php'php php.php mdphp5php(php$urlphp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/assocphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp1php,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$retphp php=php falsephp;
php php php php php php php php php php php php php$dataphp php=php streamphp_getphp_contentsphp(php$fphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php listphp(php$storedUrlphp,php php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php php=php unserializephp(php$dataphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$urlphp php=php=php=php php$storedUrlphp php&php&php php$expiresphp php>php timephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$retphp php=php truephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$namephp2php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_handlephp_php'php php.php mdphp5php(php$handlephp)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp2php)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp1php)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp informationphp aboutphp associationphp identifiedphp byphp php$handle
php php php php php php*php Returnsphp truephp ifphp givenphp associationphp foundphp andphp notphp expiredphp andphp false
php php php php php php*php otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$handlephp assiciationphp handle
php php php php php php*php php@paramphp stringphp php&php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp stringphp php&php$macFuncphp HMACphp functionphp php(shaphp1php orphp shaphp2php5php6php)
php php php php php php*php php@paramphp stringphp php&php$secretphp sharedphp secret
php php php php php php*php php@paramphp longphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getAssociationByHandlephp(php$handlephp,php php&php$urlphp,php php&php$macFuncphp,php php&php$secretphp,php php&php$expiresphp)
php php php php php{
php php php php php php php php php$namephp2php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_handlephp_php'php php.php mdphp5php(php$handlephp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/assocphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp2php,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$retphp php=php falsephp;
php php php php php php php php php php php php php$dataphp php=php streamphp_getphp_contentsphp(php$fphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php listphp(php$urlphp,php php$storedHandlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php php=php unserializephp(php$dataphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$handlephp php=php=php=php php$storedHandlephp php&php&php php$expiresphp php>php timephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$retphp php=php truephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp2php)php;
php php php php php php php php php php php php php php php php php php php php php$namephp1php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_urlphp_php'php php.php mdphp5php(php$urlphp)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp1php)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp associationphp identifiedphp byphp php$url
php php php php php php*
php php php php php php*php php@paramphp stringphp php$urlphp OpenIDphp serverphp URL
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp delAssociationphp(php$urlphp)
php php php php php{
php php php php php php php php php$namephp1php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_urlphp_php'php php.php mdphp5php(php$urlphp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/assocphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp1php,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dataphp php=php streamphp_getphp_contentsphp(php$fphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php listphp(php$storedUrlphp,php php$handlephp,php php$macFuncphp,php php$secretphp,php php$expiresphp)php php=php unserializephp(php$dataphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$urlphp php=php=php=php php$storedUrlphp)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp2php php=php php$thisphp-php>php_dirphp php.php php'php/assocphp_handlephp_php'php php.php mdphp5php(php$handlephp)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp2php)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp1php)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storesphp informationphp discoveredphp fromphp identityphp php$id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp identity
php php php php php php*php php@paramphp stringphp php$realIdphp discoveredphp realphp identityphp URL
php php php php php php*php php@paramphp stringphp php$serverphp discoveredphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp floatphp php$versionphp discoveredphp OpenIDphp protocolphp version
php php php php php php*php php@paramphp longphp php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp addDiscoveryInfophp(php$idphp,php php$realIdphp,php php$serverphp,php php$versionphp,php php$expiresphp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_dirphp php.php php'php/discoveryphp_php'php php.php mdphp5php(php$idphp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/discoveryphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp,php php'wphp+php'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$dataphp php=php serializephp(arrayphp(php$idphp,php php$realIdphp,php php$serverphp,php php$versionphp,php php$expiresphp)php)php;
php php php php php php php php php php php php fwritephp(php$fphp,php php$dataphp)php;
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp informationphp discoveredphp fromphp identityphp php$id
php php php php php php*php Returnsphp truephp ifphp suchphp informationphp existsphp andphp falsephp otherwise
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp identity
php php php php php php*php php@paramphp stringphp php&php$realIdphp discoveredphp realphp identityphp URL
php php php php php php*php php@paramphp stringphp php&php$serverphp discoveredphp OpenIDphp serverphp URL
php php php php php php*php php@paramphp floatphp php&php$versionphp discoveredphp OpenIDphp protocolphp version
php php php php php php*php php@paramphp longphp php&php$expiresphp expirationphp UNIXphp time
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getDiscoveryInfophp(php$idphp,php php&php$realIdphp,php php&php$serverphp,php php&php$versionphp,php php&php$expiresphp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_dirphp php.php php'php/discoveryphp_php'php php.php mdphp5php(php$idphp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/discoveryphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$retphp php=php falsephp;
php php php php php php php php php php php php php$dataphp php=php streamphp_getphp_contentsphp(php$fphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php listphp(php$storedIdphp,php php$realIdphp,php php$serverphp,php php$versionphp,php php$expiresphp)php php=php unserializephp(php$dataphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$idphp php=php=php=php php$storedIdphp php&php&php php$expiresphp php>php timephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$retphp php=php truephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp)php;
php php php php php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp php$retphp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp cachedphp informationphp discoveredphp fromphp identityphp php$id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp identity
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp delDiscoveryInfophp(php$idphp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_dirphp php.php php'php/discoveryphp_php'php php.php mdphp5php(php$idphp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/discoveryphp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php@unlinkphp(php$namephp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Thephp functionphp checksphp thephp uniquenessphp ofphp openidphp.responsephp_nonce
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerphp openidphp.openidphp_opphp_endpointphp fieldphp fromphp authenticationphp response
php php php php php php*php php@paramphp php stringphp php$noncephp openidphp.responsephp_noncephp fieldphp fromphp authenticationphp response
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isUniqueNoncephp(php$providerphp,php php$noncephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_dirphp php.php php'php/noncephp_php'php php.php mdphp5php(php$providerphp.php'php;php'php.php$noncephp)php;
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/noncephp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!flockphp(php$lockphp,php LOCKphp_EXphp)php)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$fphp php=php php@fopenphp(php$namephp,php php'xphp'php)php;
php php php php php php php php php php php php ifphp php(php$fphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php fwritephp(php$fphp,php php$providerphp.php'php;php'php.php$noncephp)php;
php php php php php php php php php php php php fclosephp(php$fphp)php;
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp dataphp fromphp thephp uniquenessphp databasephp thatphp isphp olderphp thenphp givenphp date
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$datephp datephp ofphp expiredphp data
php php php php php php*php/
php php php php publicphp functionphp purgeNoncesphp(php$datephp=nullphp)
php php php php php{
php php php php php php php php php$lockphp php=php php@fopenphp(php$thisphp-php>php_dirphp php.php php'php/noncephp.lockphp'php,php php'wphp+php'php)php;
php php php php php php php php ifphp php(php$lockphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php flockphp(php$lockphp,php LOCKphp_EXphp)php;
php php php php php php php php php}
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!isphp_intphp(php$datephp)php php&php&php php!isphp_stringphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php$nonceFilesphp php=php globphp(php$thisphp-php>php_dirphp php.php php'php/noncephp_php*php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$nonceFilesphp asphp php$namephp)php php{
php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php unsetphp(php$nonceFilesphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$timephp php=php timephp(php$datephp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$timephp php=php php$datephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$nonceFilesphp php=php globphp(php$thisphp-php>php_dirphp php.php php'php/noncephp_php*php'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$nonceFilesphp asphp php$namephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(filemtimephp(php$namephp)php <php php$timephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php@unlinkphp(php$namephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php unsetphp(php$nonceFilesphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$lockphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$lockphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php fclosephp(php$lockphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}
php php php php php}
php}
