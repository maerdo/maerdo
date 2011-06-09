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
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Authphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Auth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Auth
php{
php php php php php/php*php*
php php php php php php*php Singletonphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Auth
php php php php php php*php/
php php php php protectedphp staticphp php$php_instancephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Persistentphp storagephp handler
php php php php php php*
php php php php php php*php php@varphp Zendphp_Authphp_Storagephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_storagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Singletonphp patternphp implementationphp makesphp php"newphp"php unavailable
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Singletonphp patternphp implementationphp makesphp php"clonephp"php unavailable
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_clonephp(php)
php php php php php{php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp instancephp ofphp Zendphp_Auth
php php php php php php*
php php php php php php*php Singletonphp patternphp implementation
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_instancephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp selfphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp persistentphp storagephp handler
php php php php php php*
php php php php php php*php Sessionphp storagephp isphp usedphp byphp defaultphp unlessphp aphp differentphp storagephp adapterphp hasphp beenphp setphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Authphp_Storagephp_Interface
php php php php php php*php/
php php php php publicphp functionphp getStoragephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_storagephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Authphp_Storagephp_Session
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Authphp/Storagephp/Sessionphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setStoragephp(newphp Zendphp_Authphp_Storagephp_Sessionphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_storagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp persistentphp storagephp handler
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Authphp_Storagephp_Interfacephp php$storage
php php php php php php*php php@returnphp Zendphp_Authphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setStoragephp(Zendphp_Authphp_Storagephp_Interfacephp php$storagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_storagephp php=php php$storagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Authenticatesphp againstphp thephp suppliedphp adapter
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Authphp_Adapterphp_Interfacephp php$adapter
php php php php php php*php php@returnphp Zendphp_Authphp_Result
php php php php php php*php/
php php php php publicphp functionphp authenticatephp(Zendphp_Authphp_Adapterphp_Interfacephp php$adapterphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$adapterphp-php>authenticatephp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php ZFphp-php7php5php4php6php php-php preventphp multiplephp succesivephp callsphp fromphp storingphp inconsistentphp results
php php php php php php php php php php*php Ensurephp storagephp hasphp cleanphp state
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$thisphp-php>hasIdentityphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>clearIdentityphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$resultphp-php>isValidphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getStoragephp(php)php-php>writephp(php$resultphp-php>getIdentityphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp anphp identityphp isphp availablephp fromphp storage
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasIdentityphp(php)
php php php php php{
php php php php php php php php returnphp php!php$thisphp-php>getStoragephp(php)php-php>isEmptyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp identityphp fromphp storagephp orphp nullphp ifphp nophp identityphp isphp available
php php php php php php*
php php php php php php*php php@returnphp mixedphp|null
php php php php php php*php/
php php php php publicphp functionphp getIdentityphp(php)
php php php php php{
php php php php php php php php php$storagephp php=php php$thisphp-php>getStoragephp(php)php;

php php php php php php php php ifphp php(php$storagephp-php>isEmptyphp(php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$storagephp-php>readphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp thephp identityphp fromphp persistentphp storage
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp clearIdentityphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getStoragephp(php)php-php>clearphp(php)php;
php php php php php}
php}
