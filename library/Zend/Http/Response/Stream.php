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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Response
php php*php php@versionphp php php php php$Idphp:php Streamphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Zendphp_Httpphp_Responsephp representsphp anphp HTTPphp php1php.php0php php/php php1php.php1php responsephp messagephp.php It
php php*php includesphp easyphp accessphp tophp allphp thephp responsephp'sphp differentphp elemtsphp,php asphp wellphp asphp some
php php*php conveniencephp methodsphp forphp parsingphp andphp validatingphp HTTPphp responsesphp.
php php*
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp Response
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_Responsephp_Streamphp extendsphp Zendphp_Httpphp_Response
php{
php php php php php/php*php*
php php php php php php*php Responsephp asphp stream
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$streamphp;

php php php php php/php*php*
php php php php php php*php Thephp namephp ofphp thephp filephp containingphp thephp stream
php php php php php php*
php php php php php php*php Willphp bephp emptyphp ifphp streamphp isphp notphp filephp-basedphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$streamphp_namephp;

php php php php php/php*php*
php php php php php php*php Shouldphp wephp cleanphp upphp thephp streamphp filephp whenphp thisphp responsephp isphp closedphp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_cleanupphp;

php php php php php/php*php*
php php php php php php*php Getphp thephp responsephp asphp stream
php php php php php php*
php php php php php php*php php@returnphp resourse
php php php php php php*php/
php php php php publicphp functionphp getStreamphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>streamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp responsephp stream
php php php php php php*
php php php php php php*php php@paramphp resoursephp php$stream
php php php php php php*php php@returnphp Zendphp_Httpphp_Responsephp_Stream
php php php php php php*php/
php php php php publicphp functionphp setStreamphp(php$streamphp)
php php php php php{
php php php php php php php php php$thisphp-php>streamphp php=php php$streamphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp cleanupphp trigger
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getCleanupphp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_cleanupphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp cleanupphp trigger
php php php php php php*
php php php php php php*php php@paramphp php$cleanupphp Setphp cleanupphp trigger
php php php php php php*php/
php php php php publicphp functionphp setCleanupphp(php$cleanupphp php=php truephp)php php{
php php php php php php php php php$thisphp-php>php_cleanupphp php=php php$cleanupphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp filephp namephp associatedphp withphp thephp stream
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getStreamNamephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>streamphp_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp filephp namephp associatedphp withphp thephp stream
php php php php php php*
php php php php php php*php php@paramphp stringphp php$streamphp_namephp Namephp tophp set
php php php php php php*php php@returnphp Zendphp_Httpphp_Responsephp_Stream
php php php php php php*php/
php php php php publicphp functionphp setStreamNamephp(php$streamphp_namephp)php php{
php php php php php php php php php$thisphp-php>streamphp_namephp php=php php$streamphp_namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php HTTPphp responsephp constructor
php php php php php php*
php php php php php php*php Inphp mostphp casesphp,php youphp wouldphp usephp Zendphp_Httpphp_Responsephp:php:fromStringphp tophp parsephp anphp HTTP
php php php php php php*php responsephp stringphp andphp createphp aphp newphp Zendphp_Httpphp_Responsephp objectphp.
php php php php php php*
php php php php php php*php NOTEphp:php Thephp constructorphp nophp longerphp acceptsphp nullsphp orphp emptyphp valuesphp forphp thephp codephp and
php php php php php php*php headersphp andphp willphp throwphp anphp exceptionphp ifphp thephp passedphp valuesphp dophp notphp formphp aphp validphp HTTP
php php php php php php*php responsesphp.
php php php php php php*
php php php php php php*php Ifphp nophp messagephp isphp passedphp,php thephp messagephp willphp bephp guessedphp accordingphp tophp thephp responsephp codephp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$codephp Responsephp codephp php(php2php0php0php,php php4php0php4php,php php.php.php.php)
php php php php php php*php php@paramphp arrayphp php$headersphp Headersphp array
php php php php php php*php php@paramphp stringphp php$bodyphp Responsephp body
php php php php php php*php php@paramphp stringphp php$versionphp HTTPphp version
php php php php php php*php php@paramphp stringphp php$messagephp Responsephp codephp asphp text
php php php php php php*php php@throwsphp Zendphp_Httpphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$codephp,php php$headersphp,php php$bodyphp php=php nullphp,php php$versionphp php=php php'php1php.php1php'php,php php$messagephp php=php nullphp)
php php php php php{

php php php php php php php php ifphp(isphp_resourcephp(php$bodyphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setStreamphp(php$bodyphp)php;
php php php php php php php php php php php php php$bodyphp php=php php'php'php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$codephp,php php$headersphp,php php$bodyphp,php php$versionphp,php php$messagephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp Zendphp_Httpphp_Responsephp_Streamphp objectphp fromphp aphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$responsephp_str
php php php php php php*php php@paramphp resourcephp php$stream
php php php php php php*php php@returnphp Zendphp_Httpphp_Responsephp_Stream
php php php php php php*php/
php php php php publicphp staticphp functionphp fromStreamphp(php$responsephp_strphp,php php$streamphp)
php php php php php{
php php php php php php php php php$codephp php php php php=php selfphp:php:extractCodephp(php$responsephp_strphp)php;
php php php php php php php php php$headersphp php=php selfphp:php:extractHeadersphp(php$responsephp_strphp)php;
php php php php php php php php php$versionphp php=php selfphp:php:extractVersionphp(php$responsephp_strphp)php;
php php php php php php php php php$messagephp php=php selfphp:php:extractMessagephp(php$responsephp_strphp)php;

php php php php php php php php returnphp newphp selfphp(php$codephp,php php$headersphp,php php$streamphp,php php$versionphp,php php$messagephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp responsephp bodyphp asphp string
php php php php php php*
php php php php php php*php Thisphp methodphp returnsphp thephp bodyphp ofphp thephp HTTPphp responsephp php(thephp contentphp)php,php asphp it
php php php php php php*php shouldphp bephp inphp itphp'sphp readablephp versionphp php-php thatphp isphp,php afterphp decodingphp itphp php(ifphp it
php php php php php php*php wasphp decodedphp)php,php deflatingphp itphp php(ifphp itphp wasphp gzipphp compressedphp)php,php etcphp.
php php php php php php*
php php php php php php*php Ifphp youphp wantphp tophp getphp thephp rawphp bodyphp php(asphp transferedphp onphp wirephp)php use
php php php php php php*php php$thisphp-php>getRawBodyphp(php)php insteadphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBodyphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>streamphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>readStreamphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:getBodyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp rawphp responsephp bodyphp php(asphp transferedphp php"onphp wirephp"php)php asphp string
php php php php php php*
php php php php php php*php Ifphp thephp bodyphp isphp encodedphp php(withphp Transferphp-Encodingphp,php notphp contentphp-encodingphp php-
php php php php php php*php IEphp php"chunkedphp"php bodyphp)php,php gzipphp compressedphp,php etcphp.php itphp willphp notphp bephp decodedphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRawBodyphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>streamphp)php php{
php php php php php php php php php php php php php$thisphp-php>readStreamphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp streamphp contentphp andphp returnphp itphp asphp string
php php php php php php*
php php php php php php*php Functionphp readsphp thephp remainderphp ofphp thephp bodyphp fromphp thephp streamphp andphp closesphp thephp streamphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp readStreamphp(php)
php php php php php{
php php php php php php php php ifphp(php!isphp_resourcephp(php$thisphp-php>streamphp)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp(issetphp(php$headersphp[php'contentphp-lengthphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>bodyphp php=php streamphp_getphp_contentsphp(php$thisphp-php>streamphp,php php$headersphp[php'contentphp-lengthphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>bodyphp php=php streamphp_getphp_contentsphp(php$thisphp-php>streamphp)php;
php php php php php php php php php}
php php php php php php php php fclosephp(php$thisphp-php>streamphp)php;
php php php php php php php php php$thisphp-php>streamphp php=php nullphp;
php php php php php}

php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp(isphp_resourcephp(php$thisphp-php>streamphp)php)php php{
php php php php php php php php php php php php fclosephp(php$thisphp-php>streamphp)php;
php php php php php php php php php php php php php$thisphp-php>streamphp php=php nullphp;
php php php php php php php php php}
php php php php php php php php ifphp(php$thisphp-php>php_cleanupphp)php php{
php php php php php php php php php php php php php@unlinkphp(php$thisphp-php>streamphp_namephp)php;
php php php php php php php php php}
php php php php php}

php}
