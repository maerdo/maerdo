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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp ReCaptcha
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Zendphp_Servicephp_ReCaptchaphp_Response
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp ReCaptcha
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Responsephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Servicephp_ReCaptchaphp_Response
php{
php php php php php/php*php*
php php php php php php*php Status
php php php php php php*
php php php php php php*php truephp ifphp thephp responsephp isphp validphp orphp falsephp otherwise
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_statusphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Errorphp code
php php php php php php*
php php php php php php*php Thephp errorphp codephp ifphp thephp statusphp isphp falsephp.php Thephp differentphp errorphp codesphp canphp bephp foundphp inphp the
php php php php php php*php recaptchaphp APIphp docsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errorCodephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp usedphp tophp constructphp aphp response
php php php php php php*
php php php php php php*php php@paramphp stringphp php$status
php php php php php php*php php@paramphp stringphp php$errorCode
php php php php php php*php php@paramphp Zendphp_Httpphp_Responsephp php$httpResponsephp Ifphp thisphp isphp setphp thephp contentphp willphp overridephp php$statusphp andphp php$errorCode
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$statusphp php=php nullphp,php php$errorCodephp php=php nullphp,php Zendphp_Httpphp_Responsephp php$httpResponsephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$statusphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setStatusphp(php$statusphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$errorCodephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setErrorCodephp(php$errorCodephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$httpResponsephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setFromHttpResponsephp(php$httpResponsephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp status
php php php php php php*
php php php php php php*php php@paramphp stringphp php$status
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_Response
php php php php php php*php/
php php php php publicphp functionphp setStatusphp(php$statusphp)
php php php php php{
php php php php php php php php ifphp php(php$statusphp php=php=php=php php'truephp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_statusphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_statusphp php=php falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp status
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getStatusphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_statusphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Aliasphp forphp getStatusphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getStatusphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp errorphp code
php php php php php php*
php php php php php php*php php@paramphp stringphp php$errorCode
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_Response
php php php php php php*php/
php php php php publicphp functionphp setErrorCodephp(php$errorCodephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorCodephp php=php php$errorCodephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp errorphp code
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getErrorCodephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorCodephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Populatephp thisphp instancephp basedphp onphp aphp Zendphp_Httpphp_Responsephp object
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Responsephp php$response
php php php php php php*php php@returnphp Zendphp_Servicephp_ReCaptchaphp_Response
php php php php php php*php/
php php php php publicphp functionphp setFromHttpResponsephp(Zendphp_Httpphp_Responsephp php$responsephp)
php php php php php{
php php php php php php php php php$bodyphp php=php php$responsephp-php>getBodyphp(php)php;

php php php php php php php php php$partsphp php=php explodephp(php"php\nphp"php,php php$bodyphp,php php2php)php;

php php php php php php php php ifphp php(countphp(php$partsphp)php php!php=php=php php2php)php php{
php php php php php php php php php php php php php$statusphp php=php php'falsephp'php;
php php php php php php php php php php php php php$errorCodephp php=php php'php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php listphp(php$statusphp,php php$errorCodephp)php php=php php$partsphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setStatusphp(php$statusphp)php;
php php php php php php php php php$thisphp-php>setErrorCodephp(php$errorCodephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}