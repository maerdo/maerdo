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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SharedKeyLitephp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Credentialsphp/CredentialsAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Storage
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Storagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedKey
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Credentialsphp/SharedKeyphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/WindowsAzurephp/Credentialsphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedKeyLite
php php php php extendsphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php{
php php php php php/php*php*
php php php php php php*php Signphp requestphp URLphp withphp credentials
php php php php php php*
php php php php php php*php php@paramphp stringphp php$requestUrlphp Requestphp URL
php php php php php php*php php@paramphp stringphp php$resourceTypephp Resourcephp type
php php php php php php*php php@paramphp stringphp php$requiredPermissionphp Requiredphp permission
php php php php php php*php php@returnphp stringphp Signedphp requestphp URL
php php php php php php*php/
php php php php publicphp functionphp signRequestUrlphp(
php php php php php php php php php$requestUrlphp php=php php'php'php,
php php php php php php php php php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,
php php php php php php php php php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READ
php php php php php)php php{
php php php php php php php php returnphp php$requestUrlphp;
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Signphp requestphp headersphp withphp credentials
php php php php php php*
php php php php php php*php php@paramphp stringphp php$httpVerbphp HTTPphp verbphp thephp requestphp willphp use
php php php php php php*php php@paramphp stringphp php$pathphp Pathphp forphp thephp request
php php php php php php*php php@paramphp stringphp php$queryStringphp Queryphp stringphp forphp thephp request
php php php php php php*php php@paramphp arrayphp php$headersphp xphp-msphp headersphp tophp add
php php php php php php*php php@paramphp booleanphp php$forTableStoragephp Isphp thephp requestphp forphp tablephp storagephp?
php php php php php php*php php@paramphp stringphp php$resourceTypephp Resourcephp type
php php php php php php*php php@paramphp stringphp php$requiredPermissionphp Requiredphp permission
php php php php php php*php php@paramphp mixedphp php php$rawDataphp Rawphp postphp data
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp headers
php php php php php php*php/
php php php php publicphp functionphp signRequestHeadersphp(
php php php php php php php php php$httpVerbphp php=php Zendphp_Httpphp_Clientphp:php:GETphp,
php php php php php php php php php$pathphp php=php php'php/php'php,
php php php php php php php php php$queryStringphp php=php php'php'php,
php php php php php php php php php$headersphp php=php nullphp,
php php php php php php php php php$forTableStoragephp php=php falsephp,
php php php php php php php php php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,
php php php php php php php php php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READphp,
php php php php php php php php php$rawDataphp php=php null
php php php php php)php php{
php php php php php php php php php/php/php Tablephp storagephp?
php php php php php php php php ifphp php(php!php$forTableStoragephp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_Exceptionphp(php'Thephp Windowsphp Azurephp SDKphp forphp PHPphp doesphp notphp supportphp SharedKeyLitephp authenticationphp onphp blobphp orphp queuephp storagephp.php Usephp SharedKeyphp authenticationphp insteadphp.php'php)php;
php php php php php php php php php}
php php php php php php php php 
php php php php php php php php php/php/php Determinephp path
php php php php php php php php ifphp php(php$thisphp-php>php_usePathStyleUriphp)php php{
php php php php php php php php php php php php php$pathphp php=php substrphp(php$pathphp,php strposphp(php$pathphp,php php'php/php'php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Determinephp query
php php php php php php php php php$queryStringphp php=php php$thisphp-php>php_prepareQueryStringForSigningphp(php$queryStringphp)php;

php php php php php php php php php/php/php Buildphp canonicalizedphp resourcephp string
php php php php php php php php php$canonicalizedResourcephp php php=php php'php/php'php php.php php$thisphp-php>php_accountNamephp;
php php php php php php php php ifphp php(php$thisphp-php>php_usePathStyleUriphp)php php{
php php php php php php php php php php php php php$canonicalizedResourcephp php.php=php php'php/php'php php.php php$thisphp-php>php_accountNamephp;
php php php php php php php php php}
php php php php php php php php php$canonicalizedResourcephp php.php=php php$pathphp;
php php php php php php php php ifphp php(php$queryStringphp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$canonicalizedResourcephp php.php=php php$queryStringphp;
php php php php php php php php php}

php php php php php php php php php/php/php Requestphp date
php php php php php php php php php$requestDatephp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$headersphp[Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PREFIXphp_STORAGEphp_HEADERphp php.php php'datephp'php]php)php)php php{
php php php php php php php php php php php php php$requestDatephp php=php php$headersphp[Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PREFIXphp_STORAGEphp_HEADERphp php.php php'datephp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestDatephp php=php gmdatephp(php'Dphp,php dphp Mphp Yphp Hphp:iphp:sphp'php,php timephp(php)php)php php.php php'php GMTphp'php;php php/php/php RFCphp php1php1php2php3
php php php php php php php php php}

php	php	php/php/php Createphp stringphp tophp sign
php	php	php$stringToSignphp php php php=php arrayphp(php)php;
php php php php php	php$stringToSignphp[php]php php=php php$requestDatephp;php php/php/php Date
php php php php php	php$stringToSignphp[php]php php=php php$canonicalizedResourcephp;php	php	php php	php	php	php/php/php Canonicalizedphp resource
php php php php php	php$stringToSignphp php php php=php implodephp(php"php\nphp"php,php php$stringToSignphp)php;
php php php php php	php$signStringphp php php php php php=php basephp6php4php_encodephp(hashphp_hmacphp(php'shaphp2php5php6php'php,php php$stringToSignphp,php php$thisphp-php>php_accountKeyphp,php truephp)php)php;

php php php php php	php/php/php Signphp request
php php php php php	php$headersphp[Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PREFIXphp_STORAGEphp_HEADERphp php.php php'datephp'php]php php=php php$requestDatephp;
php php php php php	php$headersphp[php'Authorizationphp'php]php php=php php'SharedKeyLitephp php'php php.php php$thisphp-php>php_accountNamephp php.php php'php:php'php php.php php$signStringphp;
php php php php php	
php php php php php	php/php/php Returnphp headers
php php php php php	returnphp php$headersphp;
php	php}
php	
php	php/php*php*
php	php php*php Preparephp queryphp stringphp forphp signing
php	php php*
php	php php*php php@paramphp php stringphp php$valuephp Originalphp queryphp string
php	php php*php php@returnphp stringphp php php php php php php php Queryphp stringphp forphp signing
php	php php*php/
php	protectedphp functionphp php_prepareQueryStringForSigningphp(php$valuephp)
php	php{
php	php php php php php/php/php Checkphp forphp php'compphp=php'
php	php php php php ifphp php(strposphp(php$valuephp,php php'compphp=php'php)php php=php=php=php falsephp)php php{
php	php php php php php php php php php/php/php Ifphp notphp foundphp,php nophp queryphp stringphp needed
php	php php php php php php php php returnphp php'php'php;
php	php php php php php}php elsephp php{
php	php php php php php php php php php/php/php Ifphp foundphp,php makephp surephp itphp isphp thephp onlyphp parameterphp beingphp used
php php php php php	php	ifphp php(strlenphp(php$valuephp)php php>php php0php php&php&php strposphp(php$valuephp,php php'php?php'php)php php=php=php=php php0php)php php{
php php php php php	php	php	php$valuephp php=php substrphp(php$valuephp,php php1php)php;
php php php php php	php	php}
php php php php php	php	
php php php php php	php	php/php/php Splitphp parts
php php php php php	php	php$queryPartsphp php=php explodephp(php'php&php'php,php php$valuephp)php;
php php php php php	php	foreachphp php(php$queryPartsphp asphp php$queryPartphp)php php{
php php php php php	php	php php php php ifphp php(strposphp(php$queryPartphp,php php'compphp=php'php)php php!php=php=php falsephp)php php{
php php php php php	php	php php php php php php php php returnphp php'php?php'php php.php php$queryPartphp;
php php php php php	php	php php php php php}
php php php php php	php	php}

php php php php php php php php php php php php php/php/php Shouldphp neverphp happenphp.php.php.
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php}
php}
