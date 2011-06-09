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
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TableEntityQueryphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php{
php php php php php/php*php*
php php php php php php*php From
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php	protectedphp php$php_fromphp php php=php php'php'php;
php	
php	php/php*php*
php	php php*php Where
php	php php*
php	php php*php php@varphp array
php	php php*php/
php	protectedphp php$php_wherephp php=php arrayphp(php)php;
php	
php	php/php*php*
php	php php*php Orderphp by
php	php php*
php	php php*php php@varphp array
php	php php*php/
php	protectedphp php$php_orderByphp php=php arrayphp(php)php;
php	
php	php/php*php*
php	php php*php Top
php	php php*
php	php php*php php@varphp int
php	php php*php/
php	protectedphp php$php_topphp php=php nullphp;
php	
php	php/php*php*
php	php php*php Partitionphp key
php	php php*
php	php php*php php@varphp string
php	php php*php/
php	protectedphp php$php_partitionKeyphp php=php nullphp;

php	php/php*php*
php	php php*php Rowphp key
php	php php*
php	php php*php php@varphp string
php	php php*php/
php	protectedphp php$php_rowKeyphp php=php nullphp;
php	
php	php/php*php*
php	php php*php Selectphp clause
php	php php*
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp selectphp(php)
php	php{
php	php	returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Fromphp clause
php	php php*
php	php php*php php@paramphp stringphp php$namephp Tablephp namephp tophp selectphp entitiesphp from
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp fromphp(php$namephp)
php	php{
php	php	php$thisphp-php>php_fromphp php=php php$namephp;
php	php	returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Specifyphp partitionphp key
php	php php*
php	php php*php php@paramphp stringphp php$valuephp Partitionphp keyphp tophp queryphp for
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp wherePartitionKeyphp(php$valuephp php=php nullphp)
php	php{
php	php php php php php$thisphp-php>php_partitionKeyphp php=php php$valuephp;
php	php php php php returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Specifyphp rowphp key
php	php php*
php	php php*php php@paramphp stringphp php$valuephp Rowphp keyphp tophp queryphp for
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp whereRowKeyphp(php$valuephp php=php nullphp)
php	php{
php	php php php php php$thisphp-php>php_rowKeyphp php=php php$valuephp;
php	php php php php returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Addphp wherephp clause
php	php php*
php	php php*php php@paramphp stringphp php php php php php php php$conditionphp php php Conditionphp,php canphp containphp questionphp markphp(sphp)php php(php?php)php forphp parameterphp insertionphp.
php	php php*php php@paramphp stringphp|arrayphp php$valuephp php php php php php php Valuephp(sphp)php tophp insertphp inphp questionphp markphp php(php?php)php parametersphp.
php	php php*php php@paramphp stringphp php php php php php php php$condphp php php php php php php php Conditionphp forphp thephp clausephp php(andphp/orphp/notphp)
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp wherephp(php$conditionphp,php php$valuephp php=php nullphp,php php$condphp php=php php'php'php)
php	php{
php	php php php php php$conditionphp php=php php$thisphp-php>php_replaceOperatorsphp(php$conditionphp)php;
php	
php	php php php php ifphp php(php$valuephp php!php=php=php nullphp)php php{
php	php php php php php php php php php$conditionphp php=php php$thisphp-php>php_quoteIntophp(php$conditionphp,php php$valuephp)php;
php	php php php php php}
php	
php	php	ifphp php(countphp(php$thisphp-php>php_wherephp)php php=php=php php0php)php php{
php	php	php	php$condphp php=php php'php'php;
php	php	php}php elsephp ifphp php(php$condphp php!php=php=php php'php'php)php php{
php	php	php	php$condphp php=php php'php php'php php.php strtolowerphp(trimphp(php$condphp)php)php php.php php'php php'php;
php	php	php}
php	php	
php	php	php$thisphp-php>php_wherephp[php]php php=php php$condphp php.php php$conditionphp;
php	php	returnphp php$thisphp;
php	php}

php	php/php*php*
php	php php*php Addphp wherephp clausephp withphp ANDphp condition
php	php php*
php	php php*php php@paramphp stringphp php php php php php php php$conditionphp php php Conditionphp,php canphp containphp questionphp markphp(sphp)php php(php?php)php forphp parameterphp insertionphp.
php	php php*php php@paramphp stringphp|arrayphp php$valuephp php php php php php php Valuephp(sphp)php tophp insertphp inphp questionphp markphp php(php?php)php parametersphp.
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp andWherephp(php$conditionphp,php php$valuephp php=php nullphp)
php	php{
php	php	returnphp php$thisphp-php>wherephp(php$conditionphp,php php$valuephp,php php'andphp'php)php;
php	php}
php	
php	php/php*php*
php	php php*php Addphp wherephp clausephp withphp ORphp condition
php	php php*
php	php php*php php@paramphp stringphp php php php php php php php$conditionphp php php Conditionphp,php canphp containphp questionphp markphp(sphp)php php(php?php)php forphp parameterphp insertionphp.
php	php php*php php@paramphp stringphp|arrayphp php$valuephp php php php php php php Valuephp(sphp)php tophp insertphp inphp questionphp markphp php(php?php)php parametersphp.
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp orWherephp(php$conditionphp,php php$valuephp php=php nullphp)
php	php{
php	php	returnphp php$thisphp-php>wherephp(php$conditionphp,php php$valuephp,php php'orphp'php)php;
php	php}
php	
php	php/php*php*
php	php php*php OrderByphp clause
php	php php*
php	php php*php php@paramphp stringphp php$columnphp php php php Columnphp tophp sortphp by
php	php php*php php@paramphp stringphp php$directionphp Directionphp tophp sortphp php(ascphp/descphp)
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php	publicphp functionphp orderByphp(php$columnphp,php php$directionphp php=php php'ascphp'php)
php	php{
php	php	php$thisphp-php>php_orderByphp[php]php php=php php$columnphp php.php php'php php'php php.php php$directionphp;
php	php	returnphp php$thisphp;
php	php}

php	php/php*php*
php	php php*php Topphp clause
php	php php*
php	php php*php php@paramphp intphp php$topphp php Topphp tophp fetch
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Storagephp_TableEntityQuery
php	php php*php/
php php php php publicphp functionphp topphp(php$topphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_topphp php php=php php(intphp)php$topphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Assemblesphp thephp queryphp string
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$urlEncodephp Applyphp URLphp encodingphp tophp thephp queryphp string
php php php php php php*php php@returnphp string
php php php php php php*php/
php	publicphp functionphp assembleQueryStringphp(php$urlEncodephp php=php falsephp)
php	php{
php	php	php$queryphp php=php arrayphp(php)php;
php	php	ifphp php(countphp(php$thisphp-php>php_wherephp)php php!php=php php0php)php php{
php	php	php php php php php$filterphp php=php implodephp(php'php'php,php php$thisphp-php>php_wherephp)php;
php	php	php	php$queryphp[php]php php=php php'php$filterphp=php'php php.php php(php$urlEncodephp php?php selfphp:php:encodeQueryphp(php$filterphp)php php:php php$filterphp)php;
php	php	php}
php	php	
php	php	ifphp php(countphp(php$thisphp-php>php_orderByphp)php php!php=php php0php)php php{
php	php	php php php php php$orderByphp php=php implodephp(php'php,php'php,php php$thisphp-php>php_orderByphp)php;
php	php	php	php$queryphp[php]php php=php php'php$orderbyphp=php'php php.php php(php$urlEncodephp php?php selfphp:php:encodeQueryphp(php$orderByphp)php php:php php$orderByphp)php;
php	php	php}
php	php	
php	php	ifphp php(php$thisphp-php>php_topphp php!php=php=php nullphp)php php{
php	php	php	php$queryphp[php]php php=php php'php$topphp=php'php php.php php$thisphp-php>php_topphp;
php	php	php}
php	php	
php	php	ifphp php(countphp(php$queryphp)php php!php=php php0php)php php{
php	php	php	returnphp php'php?php'php php.php implodephp(php'php&php'php,php php$queryphp)php;
php	php	php}
php	php	
php	php	returnphp php'php'php;
php	php}
php	
php	php/php*php*
php	php php*php Assemblephp from
php	php php*
php	php php*php php@paramphp booleanphp php$includeParenthesesphp Includephp parenthesesphp?php php(php)
php	php php*php php@returnphp string
php	php php*php/
php	publicphp functionphp assembleFromphp(php$includeParenthesesphp php=php truephp)
php	php{
php	php php php php php$identifierphp php=php php'php'php;
php	php php php php ifphp php(php$includeParenthesesphp)php php{
php	php php php php php php php php php$identifierphp php.php=php php'php(php'php;
php	
php	php php php php php php php php ifphp php(php$thisphp-php>php_partitionKeyphp php!php=php=php nullphp)php php{
php	php php php php php php php php php php php php php$identifierphp php.php=php php'PartitionKeyphp=php\php'php'php php.php php$thisphp-php>php_partitionKeyphp php.php php'php\php'php'php;
php	php php php php php php php php php}
php	
php	php php php php php php php php ifphp php(php$thisphp-php>php_partitionKeyphp php!php=php=php nullphp php&php&php php$thisphp-php>php_rowKeyphp php!php=php=php nullphp)php php{
php	php php php php php php php php php php php php php$identifierphp php.php=php php'php,php php'php;
php	php php php php php php php php php}
php	
php	php php php php php php php php ifphp php(php$thisphp-php>php_rowKeyphp php!php=php=php nullphp)php php{
php	php php php php php php php php php php php php php$identifierphp php.php=php php'RowKeyphp=php\php'php'php php.php php$thisphp-php>php_rowKeyphp php.php php'php\php'php'php;
php	php php php php php php php php php}
php	
php	php php php php php php php php php$identifierphp php.php=php php'php)php'php;
php	php php php php php}
php	php	returnphp php$thisphp-php>php_fromphp php.php php$identifierphp;
php	php}
php	
php	php/php*php*
php	php php*php Assemblephp fullphp query
php	php php*
php	php php*php php@returnphp string
php	php php*php/
php	publicphp functionphp assembleQueryphp(php)
php	php{
php	php	php$assembledQueryphp php=php php$thisphp-php>assembleFromphp(php)php;
php	php	
php	php	php$queryStringphp php=php php$thisphp-php>assembleQueryStringphp(php)php;
php	php	ifphp php(php$queryStringphp php!php=php=php php'php'php)php php{
php	php	php	php$assembledQueryphp php.php=php php$queryStringphp;
php	php	php}
php	php	
php	php	returnphp php$assembledQueryphp;
php	php}
php	
php	php/php*php*
php	php php*php Quotesphp aphp variablephp intophp aphp condition
php	php php*
php	php php*php php@paramphp stringphp php php php php php php php$textphp php php Conditionphp,php canphp containphp questionphp markphp(sphp)php php(php?php)php forphp parameterphp insertionphp.
php	php php*php php@paramphp stringphp|arrayphp php$valuephp php Valuephp(sphp)php tophp insertphp inphp questionphp markphp php(php?php)php parametersphp.
php	php php*php php@returnphp string
php	php php*php/
php	protectedphp functionphp php_quoteIntophp(php$textphp,php php$valuephp php=php nullphp)
php	php{
php	php	ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php	php php php php php php php php php$textphp php=php strphp_replacephp(php'php?php'php,php php'php\php'php'php php.php addslashesphp(php$valuephp)php php.php php'php\php'php'php,php php$textphp)php;
php	php php php php php}php elsephp php{
php	php php php php php php php php php$iphp php=php php0php;
php	php php php php php php php php whilephp(strposphp(php$textphp,php php'php?php'php)php php!php=php=php falsephp)php php{
php	php php php php php php php php php php php php ifphp php(isphp_numericphp(php$valuephp[php$iphp]php)php)php php{
php	php php php php php php php php php php php php php php php php php$textphp php=php substrphp_replacephp(php$textphp,php php$valuephp[php$iphp+php+php]php,php strposphp(php$textphp,php php'php?php'php)php,php php1php)php;
php	php php php php php php php php php php php php php}php elsephp php{
php	php php php php php php php php php php php php php php php php php$textphp php=php substrphp_replacephp(php$textphp,php php'php\php'php'php php.php addslashesphp(php$valuephp[php$iphp+php+php]php)php php.php php'php\php'php'php,php strposphp(php$textphp,php php'php?php'php)php,php php1php)php;
php	php php php php php php php php php php php php php}
php	php php php php php php php php php}
php	php php php php php}
php	php php php php returnphp php$textphp;
php	php}
php	
php	php/php*php*
php	php php*php Replacephp operators
php	php php*
php	php php*php php@paramphp stringphp php$text
php	php php*php php@returnphp string
php	php php*php/
php	protectedphp functionphp php_replaceOperatorsphp(php$textphp)
php	php{
php	php php php php php$textphp php=php strphp_replacephp(php'php=php=php'php,php php'eqphp'php,php php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'php>php'php,php php php'gtphp'php,php php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'<php'php,php php php'ltphp'php,php php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'php>php=php'php,php php'gephp'php,php php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'<php=php'php,php php'lephp'php,php php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'php!php=php'php,php php'nephp'php,php php php$textphp)php;
php	
php	php php php php php$textphp php=php strphp_replacephp(php'php&php&php'php,php php'andphp'php,php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'php|php|php'php,php php'orphp'php,php php php$textphp)php;
php	php php php php php$textphp php=php strphp_replacephp(php'php!php'php,php php php'notphp'php,php php$textphp)php;
php	
php	php php php php returnphp php$textphp;
php	php}
php	
php	php/php*php*
php	php php*php urlencodephp aphp query
php	php php*
php	php php*php php@paramphp stringphp php$queryphp Queryphp tophp encode
php	php php*php php@returnphp stringphp Encodedphp query
php	php php*php/
php	publicphp staticphp functionphp encodeQueryphp(php$queryphp)
php	php{
php	php	php$queryphp php=php strphp_replacephp(php'php/php'php,php php'php%php2Fphp'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php?php'php,php php'php%php3Fphp'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php:php'php,php php'php%php3Aphp'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php@php'php,php php'php%php4php0php'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php&php'php,php php'php%php2php6php'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php=php'php,php php'php%php3Dphp'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php+php'php,php php'php%php2Bphp'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php,php'php,php php'php%php2Cphp'php,php php$queryphp)php;
php	php	php$queryphp php=php strphp_replacephp(php'php$php'php,php php'php%php2php4php'php,php php$queryphp)php;
php	php	
php	php	
php	php	php$queryphp php=php strphp_replacephp(php'php php'php,php php'php%php2php0php'php,php php$queryphp)php;
php	php	
php	php	returnphp php$queryphp;
php	php}
php	
php	php/php*php*
php	php php*php php_php_toStringphp overload
php	php php*
php	php php*php php@returnphp string
php	php php*php/
php	publicphp functionphp php_php_toStringphp(php)
php	php{
php	php	returnphp php$thisphp-php>assembleQueryphp(php)php;
php	php}
php}
