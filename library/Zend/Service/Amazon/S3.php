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
php php*php php@subpackagephp Amazonphp_Sphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Sphp3php.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Hmac
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;

php/php*php*
php php*php Amazonphp Sphp3php PHPphp connectionphp class
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazonphp_Sphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@seephp php php php php php php php httpphp:php/php/docsphp.amazonwebservicesphp.comphp/AmazonSphp3php/php2php0php0php6php-php0php3php-php0php1php/
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Sphp3php extendsphp Zendphp_Servicephp_Amazonphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Storephp forphp streamphp wrapperphp clients
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_wrapperClientsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Endpointphp forphp thephp service
php php php php php php*
php php php php php php*php php@varphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php protectedphp php$php_endpointphp;

php php php php constphp Sphp3php_ENDPOINTphp php=php php'sphp3php.amazonawsphp.comphp'php;

php php php php constphp Sphp3php_ACLphp_PRIVATEphp php=php php'privatephp'php;
php php php php constphp Sphp3php_ACLphp_PUBLICphp_READphp php=php php'publicphp-readphp'php;
php php php php constphp Sphp3php_ACLphp_PUBLICphp_WRITEphp php=php php'publicphp-readphp-writephp'php;
php php php php constphp Sphp3php_ACLphp_AUTHphp_READphp php=php php'authenticatedphp-readphp'php;

php php php php constphp Sphp3php_REQUESTPAYphp_HEADERphp php=php php'xphp-amzphp-requestphp-payerphp'php;
php php php php constphp Sphp3php_ACLphp_HEADERphp php=php php'xphp-amzphp-aclphp'php;
php php php php constphp Sphp3php_CONTENTphp_TYPEphp_HEADERphp php=php php'Contentphp-Typephp'php;

php php php php php/php*php*
php php php php php php*php Setphp Sphp3php endpointphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp_Httpphp php$endpoint
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp functionphp setEndpointphp(php$endpointphp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$endpointphp instanceofphp Zendphp_Uriphp_Httpphp)php)php php{
php php php php php php php php php php php php php$endpointphp php=php Zendphp_Uriphp:php:factoryphp(php$endpointphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$endpointphp-php>validphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php'Invalidphp endpointphp suppliedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_endpointphp php=php php$endpointphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp Sphp3php endpoint
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Uriphp_Http
php php php php php php*php/
php php php php publicphp functionphp getEndpointphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_endpointphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$accessKey
php php php php php php*php php@paramphp stringphp php$secretKey
php php php php php php*php php@paramphp stringphp php$region
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$accessKeyphp=nullphp,php php$secretKeyphp=nullphp,php php$regionphp=nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$accessKeyphp,php php$secretKeyphp,php php$regionphp)php;

php php php php php php php php php$thisphp-php>setEndpointphp(php'httpphp:php/php/php'php.selfphp:php:Sphp3php_ENDPOINTphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp ifphp thephp bucketphp namephp isphp valid
php php php php php php*
php php php php php php*php php@paramphp stringphp php$bucket
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_validBucketNamephp(php$bucketphp)
php php php php php{
php php php php php php php php php$lenphp php=php strlenphp(php$bucketphp)php;
php php php php php php php php ifphp php(php$lenphp <php php3php php|php|php php$lenphp php>php php2php5php5php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Bucketphp namephp php\php"php$bucketphp\php"php mustphp bephp betweenphp php3php andphp php2php5php5php charactersphp longphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(pregphp_matchphp(php'php/php[php^aphp-zphp0php-php9php\php.php_php-php]php/php'php,php php$bucketphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Bucketphp namephp php\php"php$bucketphp\php"php containsphp invalidphp charactersphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(pregphp_matchphp(php'php/php(php\dphp)php{php1php,php3php}php\php.php(php\dphp)php{php1php,php3php}php\php.php(php\dphp)php{php1php,php3php}php\php.php(php\dphp)php{php1php,php3php}php/php'php,php php$bucketphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Bucketphp namephp php\php"php$bucketphp\php"php cannotphp bephp anphp IPphp addressphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp newphp bucket
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bucket
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp createBucketphp(php$bucketphp,php php$locationphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validBucketNamephp(php$bucketphp)php;

php php php php php php php php ifphp(php$locationphp)php php{
php php php php php php php php php php php php php$dataphp php=php php'php<CreateBucketConfigurationphp>php<LocationConstraintphp>php'php.php$locationphp.php'<php/LocationConstraintphp><php/CreateBucketConfigurationphp>php'php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$dataphp php=php nullphp;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'PUTphp'php,php php$bucketphp,php nullphp,php arrayphp(php)php,php php$dataphp)php;

php php php php php php php php returnphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp aphp givenphp bucketphp namephp isphp available
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bucket
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isBucketAvailablephp(php$bucketphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'HEADphp'php,php php$bucketphp,php arrayphp(php'maxphp-keysphp'php=php>php0php)php)php;

php php php php php php php php returnphp php(php$responsephp-php>getStatusphp(php)php php!php=php php4php0php4php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp aphp givenphp objectphp exists
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$object
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isObjectAvailablephp(php$objectphp)
php php php php php{
php php php php php php php php php$objectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$objectphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'HEADphp'php,php php$objectphp)php;

php php php php php php php php returnphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php0php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp givenphp bucketphp.php Allphp objectsphp inphp thephp bucketphp mustphp bephp removedphp prior
php php php php php php*php tophp removingphp thephp bucketphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bucket
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp removeBucketphp(php$bucketphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'DELETEphp'php,php php$bucketphp)php;

php php php php php php php php php/php/php Lookphp forphp aphp php2php0php4php Nophp Contentphp response
php php php php php php php php returnphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php4php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp metadataphp informationphp forphp aphp givenphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$object
php php php php php php*php php@returnphp arrayphp|false
php php php php php php*php/
php php php php publicphp functionphp getInfophp(php$objectphp)
php php php php php{
php php php php php php php php php$infophp php=php arrayphp(php)php;

php php php php php php php php php$objectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$objectphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'HEADphp'php,php php$objectphp)php;

php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php0php)php php{
php php php php php php php php php php php php php$infophp[php'typephp'php]php php=php php$responsephp-php>getHeaderphp(php'Contentphp-typephp'php)php;
php php php php php php php php php php php php php$infophp[php'sizephp'php]php php=php php$responsephp-php>getHeaderphp(php'Contentphp-lengthphp'php)php;
php php php php php php php php php php php php php$infophp[php'mtimephp'php]php php=php strtotimephp(php$responsephp-php>getHeaderphp(php'Lastphp-modifiedphp'php)php)php;
php php php php php php php php php php php php php$infophp[php'etagphp'php]php php=php php$responsephp-php>getHeaderphp(php'ETagphp'php)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$infophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp thephp Sphp3php buckets
php php php php php php*
php php php php php php*php php@returnphp arrayphp|false
php php php php php php*php/
php php php php publicphp functionphp getBucketsphp(php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'GETphp'php)php;

php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php php2php0php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$xmlphp php=php newphp SimpleXMLElementphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php php$bucketsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$xmlphp-php>Bucketsphp-php>Bucketphp asphp php$bucketphp)php php{
php php php php php php php php php php php php php$bucketsphp[php]php php=php php(stringphp)php$bucketphp-php>Namephp;
php php php php php php php php php}

php php php php php php php php returnphp php$bucketsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp objectsphp inphp thephp bucketphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$bucket
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp cleanBucketphp(php$bucketphp)
php php php php php{
php php php php php php php php php$objectsphp php=php php$thisphp-php>getObjectsByBucketphp(php$bucketphp)php;
php php php php php php php php ifphp php(php!php$objectsphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$objectsphp asphp php$objectphp)php php{
php php php php php php php php php php php php php$thisphp-php>removeObjectphp(php"php$bucketphp/php$objectphp"php)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp thephp objectsphp inphp aphp bucketphp.
php php php php php php*
php php php php php php*php Providesphp thephp listphp ofphp objectphp keysphp thatphp arephp containedphp inphp thephp bucketphp.php php Validphp paramsphp includephp thephp followingphp.
php php php php php php*php prefixphp php-php Limitsphp thephp responsephp tophp keysphp whichphp beginphp withphp thephp indicatedphp prefixphp.php Youphp canphp usephp prefixesphp tophp separatephp aphp bucketphp intophp differentphp setsphp ofphp keysphp inphp aphp wayphp similarphp tophp howphp aphp filephp systemphp usesphp foldersphp.
php php php php php php*php markerphp php-php Indicatesphp wherephp inphp thephp bucketphp tophp beginphp listingphp.php Thephp listphp willphp onlyphp includephp keysphp thatphp occurphp lexicographicallyphp afterphp markerphp.php Thisphp isphp convenientphp forphp paginationphp:php Tophp getphp thephp nextphp pagephp ofphp resultsphp usephp thephp lastphp keyphp ofphp thephp currentphp pagephp asphp thephp markerphp.
php php php php php php*php maxphp-keysphp php-php Thephp maximumphp numberphp ofphp keysphp youphp'dphp likephp tophp seephp inphp thephp responsephp bodyphp.php Thephp serverphp mightphp returnphp fewerphp thanphp thisphp manyphp keysphp,php butphp willphp notphp returnphp morephp.
php php php php php php*php delimiterphp php-php Causesphp keysphp thatphp containphp thephp samephp stringphp betweenphp thephp prefixphp andphp thephp firstphp occurrencephp ofphp thephp delimiterphp tophp bephp rolledphp upphp intophp aphp singlephp resultphp elementphp inphp thephp CommonPrefixesphp collectionphp.php Thesephp rolledphp-upphp keysphp arephp notphp returnedphp elsewherephp inphp thephp responsephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bucket
php php php php php php*php php@paramphp arrayphp php$paramsphp Sphp3php GETphp Bucketphp Paramater
php php php php php php*php php@returnphp arrayphp|false
php php php php php php*php/
php php php php publicphp functionphp getObjectsByBucketphp(php$bucketphp,php php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'GETphp'php,php php$bucketphp,php php$paramsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php php2php0php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$xmlphp php=php newphp SimpleXMLElementphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php php$objectsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$xmlphp-php>Contentsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$xmlphp-php>Contentsphp asphp php$contentsphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$contentsphp-php>Keyphp asphp php$objectphp)php php{
php php php php php php php php php php php php php php php php php php php php php$objectsphp[php]php php=php php(stringphp)php$objectphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$objectsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp surephp thephp objectphp namephp isphp valid
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$object
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_fixupObjectNamephp(php$objectphp)
php php php php php{
php php php php php php php php php$namepartsphp php=php explodephp(php'php/php'php,php php$objectphp)php;

php php php php php php php php php$thisphp-php>php_validBucketNamephp(php$namepartsphp[php0php]php)php;

php php php php php php php php php$firstpartphp php=php arrayphp_shiftphp(php$namepartsphp)php;
php php php php php php php php ifphp php(countphp(php$namepartsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php$firstpartphp;
php php php php php php php php php}

php php php php php php php php returnphp php$firstpartphp.php'php/php'php.joinphp(php'php/php'php,php arrayphp_mapphp(php'rawurlencodephp'php,php php$namepartsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$object
php php php php php php*php php@paramphp php boolphp php php php$paidobjectphp Thisphp isphp php"requestorphp paysphp"php object
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php publicphp functionphp getObjectphp(php$objectphp,php php$paidobjectphp=falsephp)
php php php php php{
php php php php php php php php php$objectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$objectphp)php;
php php php php php php php php ifphp php(php$paidobjectphp)php php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'GETphp'php,php php$objectphp,php nullphp,php arrayphp(selfphp:php:Sphp3php_REQUESTPAYphp_HEADERphp php=php>php php'requesterphp'php)php)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'GETphp'php,php php$objectphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php php2php0php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp-php>getBodyphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp objectphp usingphp streaming
php php php php php php*
php php php php php php*php Canphp usephp eitherphp providedphp filenamephp forphp storagephp orphp createphp aphp tempphp filephp ifphp nonephp providedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$objectphp Objectphp path
php php php php php php*php php@paramphp php stringphp php$streamfilephp Filephp tophp writephp thephp streamphp to
php php php php php php*php php@paramphp php boolphp php php php$paidobjectphp Thisphp isphp php"requestorphp paysphp"php object
php php php php php php*php php@returnphp Zendphp_Httpphp_Responsephp_Streamphp|false
php php php php php php*php/
php php php php publicphp functionphp getObjectStreamphp(php$objectphp,php php$streamfilephp php=php nullphp,php php$paidobjectphp=falsephp)
php php php php php{
php php php php php php php php php$objectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$objectphp)php;
php php php php php php php php selfphp:php:getHttpClientphp(php)php-php>setStreamphp(php$streamfilephp?php$streamfilephp:truephp)php;
php php php php php php php php ifphp php(php$paidobjectphp)php php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'GETphp'php,php php$objectphp,php nullphp,php arrayphp(selfphp:php:Sphp3php_REQUESTPAYphp_HEADERphp php=php>php php'requesterphp'php)php)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'GETphp'php,php php$objectphp)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:getHttpClientphp(php)php-php>setStreamphp(nullphp)php;

php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php php2php0php0php php|php|php php!php(php$responsephp instanceofphp Zendphp_Httpphp_Responsephp_Streamphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Uploadphp anphp objectphp byphp aphp PHPphp string
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$objectphp Objectphp name
php php php php php php*php php@paramphp php stringphp|resourcephp php$dataphp php php Objectphp dataphp php(canphp bephp stringphp orphp streamphp)
php php php php php php*php php@paramphp php arrayphp php php$metaphp php php Metadata
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp putObjectphp(php$objectphp,php php$dataphp,php php$metaphp=nullphp)
php php php php php{
php php php php php php php php php$objectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$objectphp)php;
php php php php php php php php php$headersphp php=php php(isphp_arrayphp(php$metaphp)php)php php?php php$metaphp php:php arrayphp(php)php;

php php php php php php php php ifphp(php!isphp_resourcephp(php$dataphp)php)php php{
php php php php php php php php php php php php php$headersphp[php'Contentphp-MDphp5php'php]php php=php basephp6php4php_encodephp(mdphp5php(php$dataphp,php truephp)php)php;
php php php php php php php php php}
php php php php php php php php php$headersphp[php'Expectphp'php]php php=php php'php1php0php0php-continuephp'php;

php php php php php php php php ifphp php(php!issetphp(php$headersphp[selfphp:php:Sphp3php_CONTENTphp_TYPEphp_HEADERphp]php)php)php php{
php php php php php php php php php php php php php$headersphp[selfphp:php:Sphp3php_CONTENTphp_TYPEphp_HEADERphp]php php=php selfphp:php:getMimeTypephp(php$objectphp)php;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'PUTphp'php,php php$objectphp,php nullphp,php php$headersphp,php php$dataphp)php;

php php php php php php php php php/php/php Checkphp thephp MDphp5php Etagphp returnedphp byphp Sphp3php againstphp andphp MDphp5php ofphp thephp buffer
php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php0php)php php{
php php php php php php php php php php php php php/php/php Itphp isphp escapedphp byphp doublephp quotesphp forphp somephp reason
php php php php php php php php php php php php php$etagphp php=php strphp_replacephp(php'php"php'php,php php'php'php,php php$responsephp-php>getHeaderphp(php'Etagphp'php)php)php;

php php php php php php php php php php php php ifphp php(isphp_resourcephp(php$dataphp)php php|php|php php$etagphp php=php=php mdphp5php(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Putphp filephp tophp Sphp3php asphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pathphp php php Filephp name
php php php php php php*php php@paramphp stringphp php$objectphp Objectphp name
php php php php php php*php php@paramphp arrayphp php php$metaphp php php Metadata
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp putFilephp(php$pathphp,php php$objectphp,php php$metaphp=nullphp)
php php php php php{
php php php php php php php php php$dataphp php=php php@filephp_getphp_contentsphp(php$pathphp)php;
php php php php php php php php ifphp php(php$dataphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Cannotphp readphp filephp php$pathphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$metaphp)php)php php{
php php php php php php php php php php php php php$metaphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$metaphp[selfphp:php:Sphp3php_CONTENTphp_TYPEphp_HEADERphp]php)php)php php{
php php php php php php php php php php php php$metaphp[selfphp:php:Sphp3php_CONTENTphp_TYPEphp_HEADERphp]php php=php selfphp:php:getMimeTypephp(php$pathphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>putObjectphp(php$objectphp,php php$dataphp,php php$metaphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Putphp filephp tophp Sphp3php asphp objectphp,php usingphp streaming
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pathphp php php Filephp name
php php php php php php*php php@paramphp stringphp php$objectphp Objectphp name
php php php php php php*php php@paramphp arrayphp php php$metaphp php php Metadata
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp putFileStreamphp(php$pathphp,php php$objectphp,php php$metaphp=nullphp)
php php php php php{
php php php php php php php php php$dataphp php=php php@fopenphp(php$pathphp,php php"rbphp"php)php;
php php php php php php php php ifphp php(php$dataphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Cannotphp openphp filephp php$pathphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$metaphp)php)php php{
php php php php php php php php php php php php php$metaphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$metaphp[selfphp:php:Sphp3php_CONTENTphp_TYPEphp_HEADERphp]php)php)php php{
php php php php php php php php php php php php$metaphp[selfphp:php:Sphp3php_CONTENTphp_TYPEphp_HEADERphp]php php=php selfphp:php:getMimeTypephp(php$pathphp)php;
php php php php php php php php php}

php php php php php php php php ifphp(php!issetphp(php$metaphp[php'Contentphp-MDphp5php'php]php)php)php php{
php php php php php php php php php php php php php$headersphp[php'Contentphp-MDphp5php'php]php php=php basephp6php4php_encodephp(mdphp5php_filephp(php$pathphp,php truephp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>putObjectphp(php$objectphp,php php$dataphp,php php$metaphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp givenphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$object
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp removeObjectphp(php$objectphp)
php php php php php{
php php php php php php php php php$objectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$objectphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'DELETEphp'php,php php$objectphp)php;

php php php php php php php php php/php/php Lookphp forphp aphp php2php0php4php Nophp Contentphp response
php php php php php php php php returnphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php4php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Copyphp anphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$sourceObjectphp php Sourcephp objectphp name
php php php php php php*php php@paramphp php stringphp php$destObjectphp php php php Destinationphp objectphp name
php php php php php php*php php@paramphp php arrayphp php php$metaphp php php php php php php php php php php(OPTIONALphp)php Metadataphp tophp applyphp tophp desinationphp objectphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Setphp tophp nullphp tophp copyphp metadataphp fromphp sourcephp objectphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp copyObjectphp(php$sourceObjectphp,php php$destObjectphp,php php$metaphp php=php nullphp)
php php php php php{
php php php php php php php php php$sourceObjectphp php=php php$thisphp-php>php_fixupObjectNamephp(php$sourceObjectphp)php;
php php php php php php php php php$destObjectphp php php php=php php$thisphp-php>php_fixupObjectNamephp(php$destObjectphp)php;

php php php php php php php php php$headersphp php=php php(isphp_arrayphp(php$metaphp)php)php php?php php$metaphp php:php arrayphp(php)php;
php php php php php php php php php$headersphp[php'xphp-amzphp-copyphp-sourcephp'php]php php=php php$sourceObjectphp;
php php php php php php php php php$headersphp[php'xphp-amzphp-metadataphp-directivephp'php]php php=php php$metaphp php=php=php=php nullphp php?php php'COPYphp'php php:php php'REPLACEphp'php;

php php php php php php php php php$responsephp php=php php$thisphp-php>php_makeRequestphp(php'PUTphp'php,php php$destObjectphp,php nullphp,php php$headersphp)php;

php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php=php=php php2php0php0php php&php&php php!stristrphp(php$responsephp-php>getBodyphp(php)php,php php'php<Errorphp>php'php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp anphp object
php php php php php php*
php php php php php php*php Performsphp aphp copyphp tophp destphp php+php verifyphp php+php removephp source
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sourceObjectphp php Sourcephp objectphp name
php php php php php php*php php@paramphp stringphp php$destObjectphp php php php Destinationphp objectphp name
php php php php php php*php php@paramphp arrayphp php php$metaphp php php php php php php php php php php(OPTIONALphp)php Metadataphp tophp applyphp tophp destinationphp objectphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Setphp tophp nullphp tophp retainphp existingphp metadataphp.
php php php php php php*php/
php php php php publicphp functionphp moveObjectphp(php$sourceObjectphp,php php$destObjectphp,php php$metaphp php=php nullphp)
php php php php php{
php php php php php php php php php$sourceInfophp php=php php$thisphp-php>getInfophp(php$sourceObjectphp)php;

php php php php php php php php php$thisphp-php>copyObjectphp(php$sourceObjectphp,php php$destObjectphp,php php$metaphp)php;
php php php php php php php php php$destInfophp php=php php$thisphp-php>getInfophp(php$destObjectphp)php;

php php php php php php php php ifphp php(php$sourceInfophp[php'etagphp'php]php php=php=php=php php$destInfophp[php'etagphp'php]php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>removeObjectphp(php$sourceObjectphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp requestphp tophp Amazonphp Sphp3
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp php php php Requestphp method
php php php php php php*php php@paramphp php stringphp php$pathphp php php php php php php php Pathphp tophp requestedphp object
php php php php php php*php php@paramphp php arrayphp php php$paramsphp php php php Requestphp parameters
php php php php php php*php php@paramphp php arrayphp php php$headersphp php php php HTTPphp headers
php php php php php php*php php@paramphp php stringphp|resourcephp php$dataphp php php php php php php php Requestphp data
php php php php php php*php php@returnphp Zendphp_Httpphp_Response
php php php php php php*php/
php php php php publicphp functionphp php_makeRequestphp(php$methodphp,php php$pathphp=php'php'php,php php$paramsphp=nullphp,php php$headersphp=arrayphp(php)php,php php$dataphp=nullphp)
php php php php php{
php php php php php php php php php$retryphp_countphp php=php php0php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$headersphp)php)php php{
php php php php php php php php php php php php php$headersphp php=php arrayphp(php$headersphp)php;
php php php php php php php php php}

php php php php php php php php php$headersphp[php'Datephp'php]php php=php gmdatephp(DATEphp_RFCphp1php1php2php3php,php timephp(php)php)php;

php php php php php php php php ifphp(isphp_resourcephp(php$dataphp)php php&php&php php$methodphp php!php=php php'PUTphp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Sphp3php_Exceptionphp(php"Onlyphp PUTphp requestphp supportsphp streamphp dataphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php buildphp thephp endphp pointphp out
php php php php php php php php php$partsphp php=php explodephp(php'php/php'php,php php$pathphp,php php2php)php;
php php php php php php php php php$endpointphp php=php clonephp(php$thisphp-php>php_endpointphp)php;
php php php php php php php php ifphp php(php$partsphp[php0php]php)php php{
php php php php php php php php php php php php php/php/php prependphp bucketphp namephp tophp thephp hostname
php php php php php php php php php php php php php$endpointphp-php>setHostphp(php$partsphp[php0php]php.php'php.php'php.php$endpointphp-php>getHostphp(php)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$partsphp[php1php]php)php)php php{
php php php php php php php php php php php php php$endpointphp-php>setPathphp(php'php/php'php.php$partsphp[php1php]php)php;
php php php php php php php php php}
php php php php php php php php elsephp php{
php php php php php php php php php php php php php$endpointphp-php>setPathphp(php'php/php'php)php;
php php php php php php php php php php php php ifphp php(php$partsphp[php0php]php)php php{
php php php php php php php php php php php php php php php php php$pathphp php=php php$partsphp[php0php]php.php'php/php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php selfphp:php:addSignaturephp(php$methodphp,php php$pathphp,php php$headersphp)php;

php php php php php php php php php$clientphp php=php selfphp:php:getHttpClientphp(php)php;

php php php php php php php php php$clientphp-php>resetParametersphp(php)php;
php php php php php php php php php$clientphp-php>setUriphp(php$endpointphp)php;
php php php php php php php php php$clientphp-php>setAuthphp(falsephp)php;
php php php php php php php php php/php/php Workphp aroundphp bugletphp inphp HTTPphp clientphp php-php itphp doesnphp'tphp cleanphp headers
php php php php php php php php php/php/php Removephp whenphp ZHCphp isphp fixed
php php php php php php php php php$clientphp-php>setHeadersphp(arrayphp(php'Contentphp-MDphp5php'php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Contentphp-Encodingphp'php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Expectphp'php php php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Rangephp'php php php php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'xphp-amzphp-aclphp'php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'xphp-amzphp-copyphp-sourcephp'php php php php php php php php php=php>php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'xphp-amzphp-metadataphp-directivephp'php php=php>php nullphp)php)php;

php php php php php php php php php$clientphp-php>setHeadersphp(php$headersphp)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$namephp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php php$clientphp-php>setParameterGetphp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php}

php php php php php php php php php ifphp php(php(php$methodphp php=php=php php'PUTphp'php)php php&php&php php(php$dataphp php!php=php=php nullphp)php)php php{
php php php php php php php php php php php php php ifphp php(php!issetphp(php$headersphp[php'Contentphp-typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php$headersphp[php'Contentphp-typephp'php]php php=php selfphp:php:getMimeTypephp(php$pathphp)php;
php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php$clientphp-php>setRawDataphp(php$dataphp,php php$headersphp[php'Contentphp-typephp'php]php)php;
php php php php php php php php php php}
php php php php php php php php php dophp php{
php php php php php php php php php php php php php$retryphp php=php falsephp;

php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php$methodphp)php;
php php php php php php php php php php php php php$responsephp_codephp php=php php$responsephp-php>getStatusphp(php)php;

php php php php php php php php php php php php php/php/php Somephp php5xxphp errorsphp arephp expectedphp,php sophp retryphp automatically
php php php php php php php php php php php php ifphp php(php$responsephp_codephp php>php=php php5php0php0php php&php&php php$responsephp_codephp <php php6php0php0php php&php&php php$retryphp_countphp <php=php php5php)php php{
php php php php php php php php php php php php php php php php php$retryphp php=php truephp;
php php php php php php php php php php php php php php php php php$retryphp_countphp+php+php;
php php php php php php php php php php php php php php php php sleepphp(php$retryphp_countphp php/php php4php php*php php$retryphp_countphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp ifphp php(php$responsephp_codephp php=php=php php3php0php7php)php php{
php php php php php php php php php php php php php php php php php/php/php Needphp tophp redirectphp,php newphp Sphp3php endpointphp given
php php php php php php php php php php php php php php php php php/php/php Thisphp shouldphp neverphp happenphp asphp Zendphp_Httpphp_Clientphp willphp redirectphp automatically
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp ifphp php(php$responsephp_codephp php=php=php php1php0php0php)php php{
php php php php php php php php php php php php php php php php php/php/php echophp php'OKphp tophp Continuephp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php whilephp php(php$retryphp)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp thephp Sphp3php Authorizationphp signaturephp tophp thephp requestphp headers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php arrayphp php&php$headers
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp addSignaturephp(php$methodphp,php php$pathphp,php php&php$headersphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$headersphp)php)php php{
php php php php php php php php php php php php php$headersphp php=php arrayphp(php$headersphp)php;
php php php php php php php php php}

php php php php php php php php php$typephp php=php php$mdphp5php php=php php$datephp php=php php'php'php;

php php php php php php php php php/php/php Searchphp forphp thephp Contentphp-typephp,php Contentphp-MDphp5php andphp Datephp headers
php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp=php>php$valphp)php php{
php php php php php php php php php php php php ifphp php(strcasecmpphp(php$keyphp,php php'contentphp-typephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$typephp php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp ifphp php(strcasecmpphp(php$keyphp,php php'contentphp-mdphp5php'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$mdphp5php php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp ifphp php(strcasecmpphp(php$keyphp,php php'datephp'php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$datephp php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp wephp havephp anphp xphp-amzphp-datephp headerphp,php usephp thatphp insteadphp ofphp thephp normalphp Date
php php php php php php php php ifphp php(issetphp(php$headersphp[php'xphp-amzphp-datephp'php]php)php php&php&php issetphp(php$datephp)php)php php{
php php php php php php php php php php php php php$datephp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$sigphp_strphp php=php php"php$methodphp\nphp$mdphp5php\nphp$typephp\nphp$datephp\nphp"php;
php php php php php php php php php/php/php Forphp xphp-amzphp-php headersphp,php combinephp likephp keysphp,php lowercasephp themphp,php sortphp them
php php php php php php php php php/php/php alphabeticallyphp andphp removephp excessphp spacesphp aroundphp values
php php php php php php php php php$amzphp_headersphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$headersphp asphp php$keyphp=php>php$valphp)php php{
php php php php php php php php php php php php php$keyphp php=php strtolowerphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(substrphp(php$keyphp,php php0php,php php6php)php php=php=php php'xphp-amzphp-php'php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$amzphp_headersphp[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$amzphp_headersphp[php$keyphp]php[php]php php=php pregphp_replacephp(php'php/php\sphp+php/php'php,php php'php php'php,php php$valphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$amzphp_headersphp)php)php php{
php php php php php php php php php php php php ksortphp(php$amzphp_headersphp)php;
php php php php php php php php php php php php foreachphp php(php$amzphp_headersphp asphp php$keyphp=php>php$valphp)php php{
php php php php php php php php php php php php php php php php php$sigphp_strphp php.php=php php$keyphp.php'php:php'php.implodephp(php'php,php'php,php php$valphp)php.php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$sigphp_strphp php.php=php php'php/php'php.parsephp_urlphp(php$pathphp,php PHPphp_URLphp_PATHphp)php;
php php php php php php php php ifphp php(strposphp(php$pathphp,php php'php?locationphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$sigphp_strphp php.php=php php'php?locationphp'php;
php php php php php php php php php}
php php php php php php php php elsephp ifphp php(strposphp(php$pathphp,php php'php?aclphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$sigphp_strphp php.php=php php'php?aclphp'php;
php php php php php php php php php}
php php php php php php php php elsephp ifphp php(strposphp(php$pathphp,php php'php?torrentphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$sigphp_strphp php.php=php php'php?torrentphp'php;
php php php php php php php php php}

php php php php php php php php php$signaturephp php=php basephp6php4php_encodephp(Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_getSecretKeyphp(php)php,php php'shaphp1php'php,php utfphp8php_encodephp(php$sigphp_strphp)php,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php)php;
php php php php php php php php php$headersphp[php'Authorizationphp'php]php php=php php'AWSphp php'php.php$thisphp-php>php_getAccessKeyphp(php)php.php'php:php'php.php$signaturephp;

php php php php php php php php returnphp php$sigphp_strphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp getphp thephp contentphp-typephp ofphp aphp filephp basedphp onphp thephp extension
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getMimeTypephp(php$pathphp)
php php php php php{
php php php php php php php php php$extphp php=php substrphp(strrchrphp(php$pathphp,php php'php.php'php)php,php php1php)php;

php php php php php php php php ifphp(php!php$extphp)php php{
php php php php php php php php php php php php php/php/php shortcut
php php php php php php php php php php php php returnphp php'binaryphp/octetphp-streamphp'php;
php php php php php php php php php}

php php php php php php php php switchphp php(strtolowerphp(php$extphp)php)php php{
php php php php php php php php php php php php casephp php'xlsphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/excelphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'hqxphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/macbinhexphp4php0php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'docphp'php:
php php php php php php php php php php php php casephp php'dotphp'php:
php php php php php php php php php php php php casephp php'wrdphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/mswordphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'pdfphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/pdfphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'pgpphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/pgpphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'psphp'php:
php php php php php php php php php php php php casephp php'epsphp'php:
php php php php php php php php php php php php casephp php'aiphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/postscriptphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'pptphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/powerpointphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'rtfphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/rtfphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'tgzphp'php:
php php php php php php php php php php php php casephp php'gtarphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-gtarphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'gzphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-gzipphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'phpphp'php:
php php php php php php php php php php php php casephp php'phpphp3php'php:
php php php php php php php php php php php php casephp php'phpphp4php'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-httpdphp-phpphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'jsphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-javascriptphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'ppdphp'php:
php php php php php php php php php php php php casephp php'psdphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-photoshopphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'swfphp'php:
php php php php php php php php php php php php casephp php'swcphp'php:
php php php php php php php php php php php php casephp php'rfphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-shockwavephp-flashphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'tarphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/xphp-tarphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'zipphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'applicationphp/zipphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'midphp'php:
php php php php php php php php php php php php casephp php'midiphp'php:
php php php php php php php php php php php php casephp php'karphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'audiophp/midiphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'mpphp2php'php:
php php php php php php php php php php php php casephp php'mpphp3php'php:
php php php php php php php php php php php php casephp php'mpgaphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'audiophp/mpegphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'raphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'audiophp/xphp-realaudiophp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'wavphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'audiophp/wavphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'bmpphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/bitmapphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'gifphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/gifphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'iffphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/iffphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'jbphp2php'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/jbphp2php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'jpgphp'php:
php php php php php php php php php php php php casephp php'jpephp'php:
php php php php php php php php php php php php casephp php'jpegphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/jpegphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'jpxphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/jpxphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'pngphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/pngphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'tifphp'php:
php php php php php php php php php php php php casephp php'tiffphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/tiffphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'wbmpphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/vndphp.wapphp.wbmpphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'xbmphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'imagephp/xbmphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'cssphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'textphp/cssphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'txtphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'textphp/plainphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'htmphp'php:
php php php php php php php php php php php php casephp php'htmlphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'textphp/htmlphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'xmlphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'textphp/xmlphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'xslphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'textphp/xslphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'mpgphp'php:
php php php php php php php php php php php php casephp php'mpephp'php:
php php php php php php php php php php php php casephp php'mpegphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'videophp/mpegphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'qtphp'php:
php php php php php php php php php php php php casephp php'movphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'videophp/quicktimephp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'aviphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'videophp/xphp-msphp-videophp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'emlphp'php:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'messagephp/rfcphp8php2php2php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$contentphp_typephp php=php php'binaryphp/octetphp-streamphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$contentphp_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thisphp objectphp asphp streamphp wrapperphp client
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp functionphp registerAsClientphp(php$namephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_wrapperClientsphp[php$namephp]php php=php php$thisphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unregisterphp thisphp objectphp asphp streamphp wrapperphp client
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp functionphp unregisterAsClientphp(php$namephp)
php php php php php{
php php php php php php php php unsetphp(selfphp:php:php$php_wrapperClientsphp[php$namephp]php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp wrapperphp clientphp forphp streamphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp staticphp functionphp getWrapperClientphp(php$namephp)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_wrapperClientsphp[php$namephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thisphp objectphp asphp streamphp wrapper
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp functionphp registerStreamWrapperphp(php$namephp=php'sphp3php'php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Amazonphp_Sphp3php_Stream
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Sphp3php/Streamphp.phpphp'php;

php php php php php php php php streamphp_registerphp_wrapperphp(php$namephp,php php'Zendphp_Servicephp_Amazonphp_Sphp3php_Streamphp'php)php;
php php php php php php php php php$thisphp-php>registerAsClientphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unregisterphp thisphp objectphp asphp streamphp wrapper
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Sphp3
php php php php php php*php/
php php php php publicphp functionphp unregisterStreamWrapperphp(php$namephp=php'sphp3php'php)
php php php php php{
php php php php php php php php streamphp_wrapperphp_unregisterphp(php$namephp)php;
php php php php php php php php php$thisphp-php>unregisterAsClientphp(php$namephp)php;
php php php php php}
php}
