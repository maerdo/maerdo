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
php php*php php@subpackagephp Authentication
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Authentication
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Authenticationphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Hmac
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Authentication
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Authenticationphp_Vphp1php extendsphp Zendphp_Servicephp_Amazonphp_Authentication
php{
php php php php php/php*php*
php php php php php php*php Signaturephp Version
php php php php php php*php/
php php php php protectedphp php$php_signatureVersionphp php=php php'php1php'php;

php php php php php/php*php*
php php php php php php*php Signaturephp Encodingphp Method
php php php php php php*php/
php php php php protectedphp php$php_signatureMethodphp php=php php'HmacSHAphp2php5php6php'php;

php php php php php/php*php*
php php php php php php*php Generatephp thephp requiredphp attributesphp forphp thephp signature
php php php php php php*php php@paramphp stringphp php$url
php php php php php php*php php@paramphp arrayphp php$parameters
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateSignaturephp(php$urlphp,php arrayphp php&php$parametersphp)
php php php php php{
php php php php php php php php php$parametersphp[php'AWSAccessKeyIdphp'php]php php php php=php php$thisphp-php>php_accessKeyphp;
php php php php php php php php php$parametersphp[php'SignatureVersionphp'php]php php=php php$thisphp-php>php_signatureVersionphp;
php php php php php php php php php$parametersphp[php'Versionphp'php]php php php php php php php php php php php=php php$thisphp-php>php_apiVersionphp;
php php php php php php php php ifphp(php!issetphp(php$parametersphp[php'Timestampphp'php]php)php)php php{
php php php php php php php php php php php php php$parametersphp[php'Timestampphp'php]php php php php php=php gmdatephp(php'Yphp-mphp-dphp\THphp:iphp:sphp\Zphp'php,php timephp(php)php+php1php0php)php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php php$thisphp-php>php_signParametersphp(php$urlphp,php php$parametersphp)php;

php php php php php php php php returnphp php$dataphp;
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
php php php php php php*php php@paramphp php stringphp php$queuephp_urlphp php Queuephp URL
php php php php php php*php php@paramphp php arrayphp php php$parametersphp thephp parametersphp forphp whichphp tophp getphp thephp signaturephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp signedphp dataphp.
php php php php php php*php/
php php php php protectedphp functionphp php_signParametersphp(php$urlphp,php arrayphp php&php$paramatersphp)
php php php php php{
php php php php php php php php php$dataphp php=php php'php'php;

php php php php php php php php uksortphp(php$paramatersphp,php php'strcasecmpphp'php)php;
php php php php php php php php unsetphp(php$paramatersphp[php'Signaturephp'php]php)php;

php php php php php php php php foreachphp(php$paramatersphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$dataphp php.php=php php$keyphp php.php php$valuephp;
php php php php php php php php php}

php php php php php php php php php$hmacphp php=php Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_secretKeyphp,php php'SHAphp1php'php,php php$dataphp,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php;

php php php php php php php php php$paramatersphp[php'Signaturephp'php]php php=php basephp6php4php_encodephp(php$hmacphp)php;

php php php php php php php php returnphp php$dataphp;
php php php php php}
php}
