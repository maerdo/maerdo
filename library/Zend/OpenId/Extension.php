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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Extensionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp extensionphp classphp forphp Zendphp_OpenId
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_OpenId
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_OpenIdphp_Extension
php{

php php php php php/php*php*
php php php php php php*php Callsphp givenphp functionphp withphp givenphp argumentphp forphp allphp extensions
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$extensionsphp listphp ofphp extensionsphp orphp onephp extension
php php php php php php*php php@paramphp stringphp php$funcphp functionphp tophp bephp called
php php php php php php*php php@paramphp mixedphp php&php$paramsphp argumentphp tophp passphp tophp givenphp funcion
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php staticphp publicphp functionphp forAllphp(php$extensionsphp,php php$funcphp,php php&php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(php$extensionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$extensionsphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$extensionsphp asphp php$extphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$extphp instanceofphp Zendphp_OpenIdphp_Extensionphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$extphp-php>php$funcphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php!isphp_objectphp(php$extensionsphp)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php!php(php$extensionsphp instanceofphp Zendphp_OpenIdphp_Extensionphp)php php|php|
php php php php php php php php php php php php php php php php php php php php php php php php!php$extensionsphp-php>php$funcphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp addphp additionalphp dataphp tophp OpenIdphp php'checkidphp_immediatephp'php or
php php php php php php*php php'checkidphp_setupphp'php requestphp.php Thisphp methodphp addesphp nothingphp butphp inheritedphp class
php php php php php php*php mayphp addphp additionalphp dataphp intophp requestphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$paramsphp requestphp'sphp varphp/valphp pairs
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp prepareRequestphp(php&php$paramsphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp parsephp OpenIdphp php'checkidphp_immediatephp'php orphp php'checkidphp_setupphp'php request
php php php php php php*php andphp initializephp objectphp withphp passedphp dataphp.php Thisphp methodphp parsesphp nothingphp but
php php php php php php*php inheritedphp classphp mayphp overridephp thisphp methodphp tophp dophp somthingphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp requestphp'sphp varphp/valphp pairs
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp parseRequestphp(php$paramsphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp addphp additionalphp dataphp tophp OpenIdphp php'idphp_resphp'php responsephp.php Thisphp method
php php php php php php*php addesphp nothingphp butphp inheritedphp classphp mayphp addphp additionalphp dataphp intophp responsephp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$paramsphp responsephp'sphp varphp/valphp pairs
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp prepareResponsephp(php&php$paramsphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp parsephp OpenIdphp php'idphp_resphp'php responsephp andphp initializephp objectphp with
php php php php php php*php passedphp dataphp.php Thisphp methodphp parsesphp nothingphp butphp inheritedphp classphp mayphp override
php php php php php php*php thisphp methodphp tophp dophp somthingphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp responsephp'sphp varphp/valphp pairs
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp parseResponsephp(php$paramsphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp preparephp dataphp tophp storephp itphp inphp trustedphp serversphp databasephp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php&php$dataphp dataphp tophp bephp storedphp inphp tustedphp serversphp database
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getTrustDataphp(php&php$dataphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp checkphp ifphp dataphp fromphp trustedphp serversphp databasephp isphp enoughphp to
php php php php php php*php sutisfyphp requestphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$dataphp dataphp fromphp tustedphp serversphp database
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp checkTrustDataphp(php$dataphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}
php}
