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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Response
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Responsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Exceptionphp.phpphp'php;

php/php*php*
php php*php Providesphp thephp basicphp functionalityphp tophp sendphp aphp requestphp tophp thephp Amazonphp Ecphp2php Queryphp API
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstractphp extendsphp Zendphp_Servicephp_Amazonphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp HTTPphp queryphp server
php php php php php php*php/
php php php php protectedphp php$php_ecphp2Endpointphp php=php php'ecphp2php.amazonawsphp.comphp'php;

php php php php php/php*php*
php php php php php php*php Thephp APIphp versionphp tophp use
php php php php php php*php/
php php php php protectedphp php$php_ecphp2ApiVersionphp php=php php'php2php0php0php9php-php0php4php-php0php4php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Version
php php php php php php*php/
php php php php protectedphp php$php_ecphp2SignatureVersionphp php=php php'php2php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Encodingphp Method
php php php php php php*php/
php php php php protectedphp php$php_ecphp2SignatureMethodphp php=php php'HmacSHAphp2php5php6php'php;

php php php php php/php*php*
php php php php php php*php Periodphp afterphp whichphp HTTPphp requestphp willphp timeoutphp inphp seconds
php php php php php php*php/
php php php php protectedphp php$php_httpTimeoutphp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Amazonphp Region
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultRegionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Amazonphp Region
php php php php php php*php/
php php php php protectedphp php$php_regionphp;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp thatphp containsphp allphp thephp validphp Amazonphp Ecphp2php Regionsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_validEcphp2Regionsphp php=php arrayphp(php'euphp-westphp-php1php'php,php php'usphp-eastphp-php1php'php)php;

php php php php php/php*php*
php php php php php php*php Createphp Amazonphp clientphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$accessphp_keyphp php php php php php php Overridephp thephp defaultphp Accessphp Key
php php php php php php*php php@paramphp php stringphp php$secretphp_keyphp php php php php php php Overridephp thephp defaultphp Secretphp Key
php php php php php php*php php@paramphp php stringphp php$regionphp php php php php php php php php php php Setsphp thephp AWSphp Region
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$accessKeyphp=nullphp,php php$secretKeyphp=nullphp,php php$regionphp=nullphp)
php php php php php{
php php php php php php php php ifphp(php!php$regionphp)php php{
php php php php php php php php php php php php php$regionphp php=php selfphp:php:php$php_defaultRegionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php makephp ruephp thephp regionphp isphp valid
php php php php php php php php php php php php ifphp(php!emptyphp(php$regionphp)php php&php&php php!inphp_arrayphp(strtolowerphp(php$regionphp)php,php selfphp:php:php$php_validEcphp2Regionsphp,php truephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Exceptionphp(php'Invalidphp Amazonphp Ecphp2php Regionphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_regionphp php=php php$regionphp;

php php php php php php php php parentphp:php:php_php_constructphp(php$accessKeyphp,php php$secretKeyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whichphp regionphp youphp arephp workingphp inphp.php php Itphp willphp appendphp the
php php php php php php*php endphp pointphp automaticly
php php php php php php*
php php php php php php*php php@paramphp stringphp php$region
php php php php php php*php/
php php php php publicphp staticphp functionphp setRegionphp(php$regionphp)
php php php php php{
php php php php php php php php ifphp(inphp_arrayphp(strtolowerphp(php$regionphp)php,php selfphp:php:php$php_validEcphp2Regionsphp,php truephp)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_defaultRegionphp php=php php$regionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Exceptionphp(php'Invalidphp Amazonphp Ecphp2php Regionphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp tophp fetchphp thephp AWSphp Region
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getRegionphp(php)
php php php php php{
php php php php php php php php returnphp php(php!emptyphp(php$thisphp-php>php_regionphp)php)php php?php php$thisphp-php>php_regionphp php.php php'php.php'php php:php php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendsphp aphp HTTPphp requestphp tophp thephp queuephp servicephp usingphp Zendphp_Httpphp_Client
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$paramsphp php php php php php php php php Listphp ofphp parametersphp tophp sendphp withphp thephp request
php php php php php php*php php@returnphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Response
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exception
php php php php php php*php/
php php php php protectedphp functionphp sendRequestphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$urlphp php=php php'httpsphp:php/php/php'php php.php php$thisphp-php>php_getRegionphp(php)php php.php php$thisphp-php>php_ecphp2Endpointphp php.php php'php/php'php;

php php php php php php php php php$paramsphp php=php php$thisphp-php>addRequiredParametersphp(php$paramsphp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php*php php@varphp php$requestphp Zendphp_Httpphp_Clientphp php*php/
php php php php php php php php php php php php php$requestphp php=php selfphp:php:getHttpClientphp(php)php;
php php php php php php php php php php php php php$requestphp-php>resetParametersphp(php)php;

php php php php php php php php php php php php php$requestphp-php>setConfigphp(arrayphp(
php php php php php php php php php php php php php php php php php'timeoutphp'php php=php>php php$thisphp-php>php_httpTimeout
php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php$requestphp-php>setUriphp(php$urlphp)php;
php php php php php php php php php php php php php$requestphp-php>setMethodphp(Zendphp_Httpphp_Clientphp:php:POSTphp)php;
php php php php php php php php php php php php php$requestphp-php>setParameterPostphp(php$paramsphp)php;

php php php php php php php php php php php php php$httpResponsephp php=php php$requestphp-php>requestphp(php)php;


php php php php php php php php php}php catchphp php(Zendphp_Httpphp_Clientphp_Exceptionphp php$zhcephp)php php{
php php php php php php php php php php php php php$messagephp php=php php'Errorphp inphp requestphp tophp AWSphp servicephp:php php'php php.php php$zhcephp-php>getMessagephp(php)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exceptionphp(php$messagephp,php php$zhcephp-php>getCodephp(php)php,php php$zhcephp)php;
php php php php php php php php php}
php php php php php php php php php$responsephp php=php newphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Responsephp(php$httpResponsephp)php;
php php php php php php php php php$thisphp-php>checkForErrorsphp(php$responsephp)php;

php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp requiredphp authenticationphp andphp versionphp parametersphp tophp anphp arrayphp of
php php php php php php*php parameters
php php php php php php*
php php php php php php*php Thephp requiredphp parametersphp arephp:
php php php php php php*php php-php AWSAccessKey
php php php php php php*php php-php SignatureVersion
php php php php php php*php php-php Timestamp
php php php php php php*php php-php Versionphp and
php php php php php php*php php-php Signature
php php php php php php*
php php php php php php*php Ifphp aphp requiredphp parameterphp isphp alreadyphp setphp inphp thephp php<ttphp>php$parameters<php/ttphp>php arrayphp,
php php php php php php*php itphp isphp overwrittenphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$parametersphp thephp arrayphp tophp whichphp tophp addphp thephp required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php parametersphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp addRequiredParametersphp(arrayphp php$parametersphp)
php php php php php{
php php php php php php php php php$parametersphp[php'AWSAccessKeyIdphp'php]php php php php=php php$thisphp-php>php_getAccessKeyphp(php)php;
php php php php php php php php php$parametersphp[php'SignatureVersionphp'php]php php=php php$thisphp-php>php_ecphp2SignatureVersionphp;
php php php php php php php php php$parametersphp[php'Timestampphp'php]php php php php php php php php php=php gmdatephp(php'Yphp-mphp-dphp\THphp:iphp:sphp\Zphp'php)php;
php php php php php php php php php$parametersphp[php'Versionphp'php]php php php php php php php php php php php=php php$thisphp-php>php_ecphp2ApiVersionphp;
php php php php php php php php php$parametersphp[php'SignatureMethodphp'php]php php php=php php$thisphp-php>php_ecphp2SignatureMethodphp;
php php php php php php php php php$parametersphp[php'Signaturephp'php]php php php php php php php php php=php php$thisphp-php>signParametersphp(php$parametersphp)php;

php php php php php php php php returnphp php$parametersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computesphp thephp RFCphp php2php1php0php4php-compliantphp HMACphp signaturephp forphp requestphp parameters
php php php php php php*
php php php php php php*php Thisphp implementsphp thephp Amazonphp Webphp Servicesphp signaturephp,php asphp perphp thephp following
php php php php php php*php specificationphp:
php php php php php php*
php php php php php php*php php1php.php Sortphp allphp requestphp parametersphp php(includingphp php<ttphp>SignatureVersion<php/ttphp>php and
php php php php php php*php php php php excludingphp php<ttphp>Signature<php/ttphp>php,php thephp valuephp ofphp whichphp isphp beingphp createdphp)php,
php php php php php php*php php php php ignoringphp casephp.
php php php php php php*
php php php php php php*php php2php.php Iteratephp overphp thephp sortedphp listphp andphp appendphp thephp parameterphp namephp php(inphp its
php php php php php php*php php php php originalphp casephp)php andphp thenphp itsphp valuephp.php Dophp notphp URLphp-encodephp thephp parameter
php php php php php php*php php php php valuesphp beforephp constructingphp thisphp stringphp.php Dophp notphp usephp anyphp separator
php php php php php php*php php php php charactersphp whenphp appendingphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php$parametersphp thephp parametersphp forphp whichphp tophp getphp thephp signaturephp.
php php php php php php*php php@paramphp stringphp php$secretKeyphp php thephp secretphp keyphp tophp usephp tophp signphp thephp parametersphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp signedphp dataphp.
php php php php php php*php/
php php php php protectedphp functionphp signParametersphp(arrayphp php$paramatersphp)
php php php php php{
php php php php php php php php php$dataphp php=php php"POSTphp\nphp"php;
php php php php php php php php php$dataphp php.php=php php$thisphp-php>php_getRegionphp(php)php php.php php$thisphp-php>php_ecphp2Endpointphp php.php php"php\nphp"php;
php php php php php php php php php$dataphp php.php=php php"php/php\nphp"php;

php php php php php php php php uksortphp(php$paramatersphp,php php'strcmpphp'php)php;
php php php php php php php php unsetphp(php$paramatersphp[php'Signaturephp'php]php)php;

php php php php php php php php php$arrDataphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$paramatersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$arrDataphp[php]php php=php php$keyphp php.php php'php=php'php php.php strphp_replacephp(php"php%php7Ephp"php,php php"php~php"php,php rawurlencodephp(php$valuephp)php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php.php=php implodephp(php'php&php'php,php php$arrDataphp)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;
php php php php php php php php php$hmacphp php=php Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_getSecretKeyphp(php)php,php php'SHAphp2php5php6php'php,php php$dataphp,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php;

php php php php php php php php returnphp basephp6php4php_encodephp(php$hmacphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp forphp errorsphp responsesphp fromphp Amazon
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Responsephp php$responsephp thephp responsephp objectphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php checkphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exceptionphp ifphp onephp orphp morephp errorsphp are
php php php php php php*php php php php php php php php php returnedphp fromphp Amazonphp.
php php php php php php*php/
php php php php privatephp functionphp checkForErrorsphp(Zendphp_Servicephp_Amazonphp_Ecphp2php_Responsephp php$responsephp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$responsephp-php>getDocumentphp(php)php)php;
php php php php php php php php php$listphp php php=php php$xpathphp-php>queryphp(php'php/php/Errorphp'php)php;
php php php php php php php php ifphp php(php$listphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php$nodephp php php php php=php php$listphp-php>itemphp(php0php)php;
php php php php php php php php php php php php php$codephp php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(Codephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$messagephp php=php php$xpathphp-php>evaluatephp(php'stringphp(Messagephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exceptionphp(php$messagephp,php php0php,php php$codephp)php;
php php php php php php php php php}

php php php php php}
php}
