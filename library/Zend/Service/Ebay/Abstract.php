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
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php2php8php2php4php php2php0php1php0php-php0php8php-php0php9php php1php8php:php5php9php:php5php4Zphp renanbrphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Ebay
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_Ebayphp_Abstract
php{
php php php php constphp OPTIONphp_APPphp_IDphp php php php php=php php'appphp_idphp'php;
php php php php constphp OPTIONphp_GLOBALphp_IDphp php=php php'globalphp_idphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_clientphp;

php php php php php/php*php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$optionsphp php=php selfphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>setOptionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Configphp|arrayphp php$name
php php php php php php*php php@paramphp php mixedphp php php php php php php php php php php php php php php php php php php php php$value
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$namephp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$namephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$namephp php=php php$namephp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp php=php php$namephp php+php php$thisphp-php>php_optionsphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>hasOptionphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$namephp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasOptionphp(php$namephp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp php mixedphp php$client
php php php php php php*php php@returnphp Zendphp_Servicephp_Ebayphp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php abstractphp publicphp functionphp setClientphp(php$clientphp)php;

php php php php php/php*php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php abstractphp publicphp functionphp getClientphp(php)php;

php php php php php/php*php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp Whenphp php$optionsphp isphp notphp anphp arrayphp neitherphp aphp Zendphp_Configphp object
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp optionsToArrayphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$optionsphp)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Ebayphp_Exceptionphp(php'Invalidphp optionsphp providedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementsphp Namephp-valuephp Syntaxphp translatorphp.
php php php php php php*
php php php php php php*php Examplephp:
php php php php php php*
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'paginationInputphp'php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php'entriesPerPagephp'php php=php>php php5php,
php php php php php php*php php php php php php php php php php'pageNumberphp'php php php php php php=php>php php2
php php php php php php*php php php php php php)php,
php php php php php php*php php php php php php'itemFilterphp'php php=php>php arrayphp(
php php php php php php*php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'MaxPricephp'php,
php php php php php php*php php php php php php php php php php php php php php'valuephp'php php php php php php php=php>php php2php5php,
php php php php php php*php php php php php php php php php php php php php php'paramNamephp'php php php=php>php php'Currencyphp'php,
php php php php php php*php php php php php php php php php php php php php php'paramValuephp'php php=php>php php'USDphp'
php php php php php php*php php php php php php php php php php)php,
php php php php php php*php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php'namephp'php php php=php>php php'FreeShippingOnlyphp'php,
php php php php php php*php php php php php php php php php php php php php php'valuephp'php php=php>php true
php php php php php php*php php php php php php php php php php)php,
php php php php php php*php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php'namephp'php php php=php>php php'ListingTypephp'php,
php php php php php php*php php php php php php php php php php php php php php'valuephp'php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php'AuctionWithBINphp'php,
php php php php php php*php php php php php php php php php php php php php php php php php php'FixedPricephp'php,
php php php php php php*php php php php php php php php php php php php php php php php php php'StoreInventoryphp'
php php php php php php*php php php php php php php php php php php php php php)
php php php php php php*php php php php php php php php php php)
php php php php php php*php php php php php php)php,
php php php php php php*php php php php php php'productIdphp'php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php'php'php php php php php php=php>php php1php2php3php,
php php php php php php*php php php php php php php php php php'typephp'php php=php>php php'UPCphp'
php php php php php php*php php php php php php)
php php php php php php*php php)
php php php php php php*
php php php php php php*php thisphp abovephp isphp translatedphp to
php php php php php php*
php php php php php php*php arrayphp(
php php php php php php*php php php php php php'paginationInputphp.entriesPerPagephp'php php=php>php php'php5php'php,
php php php php php php*php php php php php php'paginationInputphp.pageNumberphp'php php php php php php=php>php php'php2php'php,
php php php php php php*php php php php php php'itemFilterphp(php0php)php.namephp'php php php php php php php php php php php php php php=php>php php'MaxPricephp'php,
php php php php php php*php php php php php php'itemFilterphp(php0php)php.valuephp'php php php php php php php php php php php php php=php>php php'php2php5php'php,
php php php php php php*php php php php php php'itemFilterphp(php0php)php.paramNamephp'php php php php php php php php php=php>php php'Currencyphp'php,
php php php php php php*php php php php php php'itemFilterphp(php0php)php.paramValuephp'php php php php php php php php=php>php php'USDphp'php,
php php php php php php*php php php php php php'itemFilterphp(php1php)php.namephp'php php php php php php php php php php php php php php=php>php php'FreeShippingOnlyphp'php,
php php php php php php*php php php php php php'itemFilterphp(php1php)php.valuephp'php php php php php php php php php php php php php=php>php php'php1php'php,
php php php php php php*php php php php php php'itemFilterphp(php2php)php.namephp'php php php php php php php php php php php php php php=php>php php'ListingTypephp'php,
php php php php php php*php php php php php php'itemFilterphp(php2php)php.valuephp(php0php)php'php php php php php php php php php php=php>php php'AuctionWithBINphp'php,
php php php php php php*php php php php php php'itemFilterphp(php2php)php.valuephp(php1php)php'php php php php php php php php php php=php>php php'FixedPricephp'php,
php php php php php php*php php php php php php'itemFilterphp(php2php)php.valuephp(php2php)php'php php php php php php php php php php=php>php php'StoreInventoryphp'php,
php php php php php php*php php php php php php'productIdphp'php php php php php php php php php php php php php php php php php php php php php php php=php>php php'php1php2php3php'php,
php php php php php php*php php php php php php'productIdphp.php@typephp'php php php php php php php php php php php php php php php php php=php>php php'UPCphp'
php php php php php php*php php)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@linkphp php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/Conceptsphp/MakingACallphp.htmlphp#nvsyntax
php php php php php php*php php@returnphp arrayphp Aphp simplephp arrayphp ofphp strings
php php php php php php*php/
php php php php protectedphp functionphp php_optionsToNameValueSyntaxphp(php$optionsphp)
php php php php php{
php php php php php php php php php$optionsphp php php=php selfphp:php:optionsToArrayphp(php$optionsphp)php;
php php php php php php php php ksortphp(php$optionsphp)php;
php php php php php php php php php$newphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$runAgainphp php=php falsephp;
php php php php php php php php foreachphp php(php$optionsphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php parsephp anphp arrayphp valuephp,php checkphp ifphp itphp isphp associative
php php php php php php php php php php php php php php php php php$keyRawphp php php php php=php arrayphp_keysphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php$keyNumberphp php=php rangephp(php0php,php countphp(php$valuephp)php php-php php1php)php;
php php php php php php php php php php php php php php php php php$isAssocphp php php php=php countphp(arrayphp_diffphp(php$keyRawphp,php php$keyNumberphp)php)php php>php php0php;
php php php php php php php php php php php php php php php php php/php/php checkphp forphp tagphp representationphp,php likephp php<namephp attphp=php"sometinhgphp"php><php/valuephp>
php php php php php php php php php php php php php php php php php/php/php emptyphp keyphp refersphp tophp textphp value
php php php php php php php php php php php php php php php php php/php/php whenphp therephp isphp aphp rootphp tagphp,php attributesphp receivephp flags
php php php php php php php php php php php php php php php php php$hasAttributephp php=php arrayphp_keyphp_existsphp(php'php'php,php php$valuephp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$subNamephp php=php>php php$subValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php generatephp newphp keyphp name
php php php php php php php php php php php php php php php php php php php php ifphp php(php$isAssocphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php namedphp keys
php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp php=php php$namephp;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$subNamephp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php whenphp php$subNamephp isphp emptyphp meansphp thatphp currentphp value
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php isphp thephp mainphp valuephp forphp thephp mainphp key
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$gluephp php php php php php=php php$hasAttributephp php?php php'php.php@php'php php:php php'php.php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp php.php=php php$gluephp php.php php$subNamephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php numericphp keys
php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp php=php php$namephp php.php php'php(php'php php.php php$subNamephp php.php php'php)php'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php/php/php savephp value
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$subValuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php itphp isphp necessaryphp runphp thisphp againphp,php valuephp isphp anphp array
php php php php php php php php php php php php php php php php php php php php php php php php php$runAgainphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php parsephp basicphp type
php php php php php php php php php php php php php php php php php php php php php php php php php$subValuephp php=php selfphp:php:toEbayValuephp(php$subValuephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$newphp[php$newNamephp]php php=php php$subValuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php parsephp basicphp type
php php php php php php php php php php php php php php php php php$newphp[php$namephp]php php=php selfphp:php:toEbayValuephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$runAgainphp)php php{
php php php php php php php php php php php php php/php/php thisphp happensphp ifphp anyphp php$subValuephp foundphp isphp anphp array
php php php php php php php php php php php php php$newphp php=php php$thisphp-php>php_optionsToNameValueSyntaxphp(php$newphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$newphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp nativephp PHPphp valuesphp formatphp tophp ebayphp formatphp forphp requestphp.
php php php php php php*
php php php php php php*php Booleanphp isphp translatedphp tophp php"php0php"php orphp php"php1php"php,php datephp objectphp generatesphp ISOphp php8php6php0php1php,
php php php php php php*php everythingphp elsephp isphp translatedphp tophp stringphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp toEbayValuephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$valuephp php?php php'php1php'php php:php php'php0php'php;
php php php php php php php php php}php elsephp ifphp php(php$valuephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$valuephp php=php php$valuephp-php>getIsophp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$valuephp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php php$valuephp php=php php$valuephp-php>formatphp(DateTimephp:php:ISOphp8php6php0php1php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp anphp ebayphp valuephp formatphp tophp nativephp PHPphp typephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@seephp php php php httpphp:php/php/developerphp.ebayphp.comphp/DevZonephp/findingphp/CallRefphp/typesphp/simpleTypesphp.html
php php php php php php*php php@throwsphp Zendphp_Servicephp_Ebayphp_Findingphp_Exceptionphp Whenphp php$typephp isphp notphp valid
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp staticphp functionphp toPhpValuephp(php$valuephp,php php$typephp)
php php php php php{
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php/php/php castphp forphp:php boolean
php php php php php php php php php php php php casephp php'booleanphp'php:
php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp php=php=php php'truephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php castphp forphp:php Amountphp,php decimalphp,php doublephp,php floatphp,php MeasureType
php php php php php php php php php php php php casephp php'floatphp'php:
php php php php php php php php php php php php php php php php php$valuephp php=php floatvalphp(php(stringphp)php php$valuephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php castphp forphp:php intphp,php long
php php php php php php php php php php php php php/php/php integerphp typephp generatesphp aphp stringphp valuephp,php becausephp php3php2php bitphp systems
php php php php php php php php php php php php php/php/php havephp anphp integerphp rangephp ofphp php-php2php1php4php7php4php8php3php6php4php8php tophp php2php1php4php7php4php8php3php6php4php7
php php php php php php php php php php php php casephp php'integerphp'php:
php php php php php php php php php php php php php php php php php/php/php breakphp intentionallyphp omitted

php php php php php php php php php php php php php/php/php castphp forphp:php anyURIphp,php basephp6php4Binaryphp,php dateTimephp,php durationphp,php stringphp,php token
php php php php php php php php php php php php casephp php'stringphp'php:
php php php php php php php php php php php php php php php php php$valuephp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Ebayphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Ebayphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Ebayphp_Exceptionphp(php"Invalidphp typephp php'php{php$typephp}php'php.php"php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}
php}
