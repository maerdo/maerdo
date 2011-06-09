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
php php*php php@packagephp php php php Zendphp_Json
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Responsephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp_Response
php{
php php php php php/php*php*
php php php php php php*php Responsephp error
php php php php php php*php php@varphp nullphp|Zendphp_Jsonphp_Serverphp_Error
php php php php php php*php/
php php php php protectedphp php$php_errorphp;

php php php php php/php*php*
php php php php php php*php Requestphp ID
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_idphp;

php php php php php/php*php*
php php php php php php*php Result
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_resultphp;

php php php php php/php*php*
php php php php php php*php Servicephp map
php php php php php php*php php@varphp Zendphp_Jsonphp_Serverphp_Smd
php php php php php php*php/
php php php php protectedphp php$php_serviceMapphp;

php php php php php/php*php*
php php php php php php*php JSONphp-RPCphp version
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_versionphp;

php php php php php/php*php*
php php php php php php*php Setphp result
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp setResultphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_resultphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp result
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getResultphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_resultphp;
php php php php php}

php php php php php/php/php RPCphp errorphp,php ifphp responsephp resultsphp inphp fault
php php php php php/php*php*
php php php php php php*php Setphp resultphp error
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Jsonphp_Serverphp_Errorphp php$error
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp setErrorphp(Zendphp_Jsonphp_Serverphp_Errorphp php$errorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorphp php=php php$errorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp responsephp error
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Jsonphp_Serverphp_Error
php php php php php php*php/
php php php php publicphp functionphp getErrorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_errorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp responsephp anphp errorphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isErrorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getErrorphp(php)php instanceofphp Zendphp_Jsonphp_Serverphp_Errorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp ID
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$name
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_idphp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp requestphp ID
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp JSONphp-RPCphp version
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$version
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp setVersionphp(php$versionphp)
php php php php php{
php php php php php php php php php$versionphp php=php php(stringphp)php php$versionphp;
php php php php php php php php ifphp php(php'php2php.php0php'php php=php=php php$versionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_versionphp php=php php'php2php.php0php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_versionphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp JSONphp-RPCphp version
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_versionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp JSON
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php$responsephp php=php arrayphp(
php php php php php php php php php php php php php php php php php'resultphp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php'errorphp'php php php=php>php php$thisphp-php>getErrorphp(php)php-php>toArrayphp(php)php,
php php php php php php php php php php php php php php php php php'idphp'php php php php php php=php>php php$thisphp-php>getIdphp(php)php,
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$responsephp php=php arrayphp(
php php php php php php php php php php php php php php php php php'resultphp'php php=php>php php$thisphp-php>getResultphp(php)php,
php php php php php php php php php php php php php php php php php'idphp'php php php php php php=php>php php$thisphp-php>getIdphp(php)php,
php php php php php php php php php php php php php php php php php'errorphp'php php php=php>php nullphp,
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$versionphp php=php php$thisphp-php>getVersionphp(php)php)php)php php{
php php php php php php php php php php php php php$responsephp[php'jsonrpcphp'php]php php=php php$versionphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp args
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getArgsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_argsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp args
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$args
php php php php php php*php php@returnphp self
php php php php php php*php/
php php php php publicphp functionphp setArgsphp(php$argsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_argsphp php=php php$argsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp servicephp mapphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Jsonphp_Serverphp_Smdphp php$serviceMap
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp setServiceMapphp(php$serviceMapphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_serviceMapphp php=php php$serviceMapphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp servicephp map
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Jsonphp_Serverphp_Smdphp|null
php php php php php php*php/
php php php php publicphp functionphp getServiceMapphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_serviceMapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp stringphp php(JSONphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toJsonphp(php)php;
php php php php php}
php}

