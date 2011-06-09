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
php php*php php@versionphp php php php php$Idphp:php SharedAccessSignaturephp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
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
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_WindowsAzure
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedAccessSignature
php php php php extendsphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php{
php php php php php/php*php*
php php php php php php*php Permissionphp set
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_permissionSetphp php=php arrayphp(php)php;

php	php/php*php*
php	php php*php Createsphp aphp newphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedAccessSignaturephp instance
php	php php*
php	php php*php php@paramphp stringphp php$accountNamephp Accountphp namephp forphp Windowsphp Azure
php	php php*php php@paramphp stringphp php$accountKeyphp Accountphp keyphp forphp Windowsphp Azure
php	php php*php php@paramphp booleanphp php$usePathStyleUriphp Usephp pathphp-stylephp URIphp's
php	php php*php php@paramphp arrayphp php$permissionSetphp Permissionphp set
php	php php*php/
php	publicphp functionphp php_php_constructphp(
php	php	php$accountNamephp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_ACCOUNTphp,
php	php	php$accountKeyphp php php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_KEYphp,
php	php	php$usePathStyleUriphp php=php falsephp,php php$permissionSetphp php=php arrayphp(php)
php	php)php php{
php	php php php php parentphp:php:php_php_constructphp(php$accountNamephp,php php$accountKeyphp,php php$usePathStyleUriphp)php;
php	php php php php php$thisphp-php>php_permissionSetphp php=php php$permissionSetphp;
php	php}
php	
php	php/php*php*
php	php php*php Getphp permissionphp set
php	php php*
php	php php*php php@returnphp array
php	php php*php/
php php php php publicphp functionphp getPermissionSetphp(php)
php	php{
php	php php php php returnphp php$thisphp-php>php_permissionSetphp;
php	php}
php	
php php php php php/php*php*
php php php php php php*php Setphp permisisonphp set
php php php php php php*
php php php php php php*php Warningphp:php finephp-grainedphp permissionsphp shouldphp bephp addedphp priorphp tophp coarsephp-grainedphp permissionsphp.
php php php php php php*php Forphp examplephp:php firstphp addphp blobphp permissionsphp,php endphp withphp containerphp-widephp permissionsphp.
php php php php php php*
php php php php php php*php Warningphp:php thephp signedphp accessphp signaturephp URLphp mustphp matchphp thephp accountphp namephp ofphp the
php php php php php php*php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedAccessSignaturephp instance
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$valuephp Permissionphp set
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setPermissionSetphp(php$valuephp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php foreachphp php(php$valuephp asphp php$urlphp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$urlphp,php php$thisphp-php>php_accountNamephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_WindowsAzurephp_Exceptionphp(php'Thephp permissionphp setphp canphp onlyphp containphp URLsphp forphp thephp accountphp namephp specifiedphp inphp thephp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_SharedAccessSignaturephp instancephp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_permissionSetphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp signature
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pathphp php	php	php php php Pathphp forphp thephp request
php php php php php php*php php@paramphp stringphp php$resourcephp php php php php Signedphp resourcephp php-php containerphp php(cphp)php php-php blobphp php(bphp)
php php php php php php*php php@paramphp stringphp php$permissionsphp php Signedphp permissionsphp php-php readphp php(rphp)php,php writephp php(wphp)php,php deletephp php(dphp)php andphp listphp php(lphp)
php php php php php php*php php@paramphp stringphp php$startphp php php php php php php php Thephp timephp atphp whichphp thephp Sharedphp Accessphp Signaturephp becomesphp validphp.
php php php php php php*php php@paramphp stringphp php$expiryphp php php php php php php Thephp timephp atphp whichphp thephp Sharedphp Accessphp Signaturephp becomesphp invalidphp.
php php php php php php*php php@paramphp stringphp php$identifierphp php php Signedphp identifier
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp createSignaturephp(
php php php php php php php php php$pathphp php=php php'php/php'php,
php php php php php php php php php$resourcephp php=php php'bphp'php,
php php php php php php php php php$permissionsphp php=php php'rphp'php,
php php php php php php php php php$startphp php=php php'php'php,
php php php php php php php php php$expiryphp php=php php'php'php,
php php php php php php php php php$identifierphp php=php php'php'
php php php php php)php php{
php php php php php php php php php/php/php Determinephp path
php php php php php php php php ifphp php(php$thisphp-php>php_usePathStyleUriphp)php php{
php php php php php php php php php php php php php$pathphp php=php substrphp(php$pathphp,php strposphp(php$pathphp,php php'php/php'php)php)php;
php php php php php php php php php}
php php php php php php php php php php php php 
php php php php php php php php php/php/php Addphp trailingphp slashphp tophp php$path
php php php php php php php php ifphp php(substrphp(php$pathphp,php php0php,php php1php)php php!php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php$pathphp php=php php'php/php'php php.php php$pathphp;
php php php php php php php php php}

php	php	php/php/php Buildphp canonicalizedphp resourcephp string
php	php	php$canonicalizedResourcephp php php=php php'php/php'php php.php php$thisphp-php>php_accountNamephp;
php	php	php/php*ifphp php(php$thisphp-php>php_usePathStyleUriphp)php php{
php	php	php	php$canonicalizedResourcephp php.php=php php'php/php'php php.php php$thisphp-php>php_accountNamephp;
php	php	php}php*php/
php	php	php$canonicalizedResourcephp php.php=php php$pathphp;
php	php	
php	php	php/php/php Createphp stringphp tophp sign
php	php	php$stringToSignphp php php php=php arrayphp(php)php;
php	php	php$stringToSignphp[php]php php=php php$permissionsphp;
php php php php php	php$stringToSignphp[php]php php=php php$startphp;
php php php php php	php$stringToSignphp[php]php php=php php$expiryphp;
php php php php php	php$stringToSignphp[php]php php=php php$canonicalizedResourcephp;
php php php php php	php$stringToSignphp[php]php php=php php$identifierphp;

php php php php php php php php php$stringToSignphp php=php implodephp(php"php\nphp"php,php php$stringToSignphp)php;
php php php php php php php php php$signaturephp php php php php=php basephp6php4php_encodephp(hashphp_hmacphp(php'shaphp2php5php6php'php,php php$stringToSignphp,php php$thisphp-php>php_accountKeyphp,php truephp)php)php;
php php php php 
php php php php php php php php returnphp php$signaturephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp signedphp queryphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$pathphp php	php	php php php Pathphp forphp thephp request
php php php php php php*php php@paramphp stringphp php$queryStringphp php Queryphp stringphp forphp thephp request
php php php php php php*php php@paramphp stringphp php$resourcephp php php php php Signedphp resourcephp php-php containerphp php(cphp)php php-php blobphp php(bphp)
php php php php php php*php php@paramphp stringphp php$permissionsphp php Signedphp permissionsphp php-php readphp php(rphp)php,php writephp php(wphp)php,php deletephp php(dphp)php andphp listphp php(lphp)
php php php php php php*php php@paramphp stringphp php$startphp php php php php php php php Thephp timephp atphp whichphp thephp Sharedphp Accessphp Signaturephp becomesphp validphp.
php php php php php php*php php@paramphp stringphp php$expiryphp php php php php php php Thephp timephp atphp whichphp thephp Sharedphp Accessphp Signaturephp becomesphp invalidphp.
php php php php php php*php php@paramphp stringphp php$identifierphp php php Signedphp identifier
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp createSignedQueryStringphp(
php php php php php php php php php$pathphp php=php php'php/php'php,
php php php php php php php php php$queryStringphp php=php php'php'php,
php php php php php php php php php$resourcephp php=php php'bphp'php,
php php php php php php php php php$permissionsphp php=php php'rphp'php,
php php php php php php php php php$startphp php=php php'php'php,
php php php php php php php php php$expiryphp php=php php'php'php,
php php php php php php php php php$identifierphp php=php php'php'
php php php php php)php php{
php php php php php php php php php/php/php Parts
php php php php php php php php php$partsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$startphp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$partsphp[php]php php=php php'stphp=php'php php.php urlencodephp(php$startphp)php;
php php php php php php php php php}
php php php php php php php php php$partsphp[php]php php=php php'sephp=php'php php.php urlencodephp(php$expiryphp)php;
php php php php php php php php php$partsphp[php]php php=php php'srphp=php'php php.php php$resourcephp;
php php php php php php php php php$partsphp[php]php php=php php'spphp=php'php php.php php$permissionsphp;
php php php php php php php php ifphp php(php$identifierphp php!php=php=php php'php'php)php php{
php php php php php php php php php php php php php$partsphp[php]php php=php php'siphp=php'php php.php urlencodephp(php$identifierphp)php;
php php php php php php php php php}
php php php php php php php php php$partsphp[php]php php=php php'sigphp=php'php php.php urlencodephp(php$thisphp-php>createSignaturephp(php$pathphp,php php$resourcephp,php php$permissionsphp,php php$startphp,php php$expiryphp,php php$identifierphp)php)php;

php php php php php php php php php/php/php Assemblephp partsphp andphp queryphp string
php php php php php php php php ifphp php(php$queryStringphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php$queryStringphp php.php=php php'php&php'php;
php php php php php php php php php}
php php php php php php php php php$queryStringphp php.php=php implodephp(php'php&php'php,php php$partsphp)php;

php php php php php php php php returnphp php$queryStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Permissionphp matchesphp requestphp?
php php php php php php*
php php php php php php*php php@paramphp stringphp php$permissionUrlphp Permissionphp URL
php php php php php php*php php@paramphp stringphp php$requestUrlphp Requestphp URL
php php php php php php*php php@paramphp stringphp php$resourceTypephp Resourcephp type
php php php php php php*php php@paramphp stringphp php$requiredPermissionphp Requiredphp permission
php php php php php php*php php@returnphp stringphp Signedphp requestphp URL
php php php php php php*php/
php php php php publicphp functionphp permissionMatchesRequestphp(
php php php php php php php php php$permissionUrlphp php=php php'php'php,
php php php php php php php php php$requestUrlphp php=php php'php'php,
php php php php php php php php php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,
php php php php php php php php php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READ
php php php php php)php php{
php php php php php php php php php/php/php Buildphp requirements
php php php php php php php php php$requiredResourceTypephp php=php php$resourceTypephp;
php php php php php php php php ifphp php(php$requiredResourceTypephp php=php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_BLOBphp)php php{
php php php php php php php php php php php php php$requiredResourceTypephp php.php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_CONTAINERphp;
php php php php php php php php php}

php php php php php php php php php/php/php Parsephp permissionphp url
php	php php php php php$parsedPermissionUrlphp php=php parsephp_urlphp(php$permissionUrlphp)php;
php	
php	php php php php php/php/php Parsephp permissionphp properties
php	php php php php php$permissionPartsphp php=php explodephp(php'php&php'php,php php$parsedPermissionUrlphp[php'queryphp'php]php)php;
php	
php	php php php php php/php/php Parsephp requestphp url
php	php php php php php$parsedRequestUrlphp php=php parsephp_urlphp(php$requestUrlphp)php;
php	
php	php php php php php/php/php Checkphp ifphp permissionphp matchesphp request
php	php php php php php$matchesphp php=php truephp;
php	php php php php foreachphp php(php$permissionPartsphp asphp php$partphp)php php{
php	php php php php php php php php listphp(php$propertyphp,php php$valuephp)php php=php explodephp(php'php=php'php,php php$partphp,php php2php)php;
php	
php	php php php php php php php php ifphp php(php$propertyphp php=php=php php'srphp'php)php php{
php	php php php php php php php php php php php php php$matchesphp php=php php$matchesphp php&php&php php(strpbrkphp(php$valuephp,php php$requiredResourceTypephp)php php!php=php=php falsephp)php;
php	php php php php php php php php php}
php	
php	php php php php php	ifphp php(php$propertyphp php=php=php php'spphp'php)php php{
php	php php php php php php php php php php php php php$matchesphp php=php php$matchesphp php&php&php php(strpbrkphp(php$valuephp,php php$requiredPermissionphp)php php!php=php=php falsephp)php;
php	php php php php php php php php php}
php	php php php php php}
php	
php	php php php php php/php/php Okphp,php butphp.php.php.php doesphp thephp resourcephp matchphp?
php	php php php php php$matchesphp php=php php$matchesphp php&php&php php(strposphp(php$parsedRequestUrlphp[php'pathphp'php]php,php php$parsedPermissionUrlphp[php'pathphp'php]php)php php!php=php=php falsephp)php;
php	
php php php php php php php php php/php/php Return
php	php php php php returnphp php$matchesphp;
php php php php php}

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
php php php php php php php php php/php/php Lookphp forphp aphp matchingphp permission
php php php php php php php php foreachphp php(php$thisphp-php>getPermissionSetphp(php)php asphp php$permittedUrlphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>permissionMatchesRequestphp(php$permittedUrlphp,php php$requestUrlphp,php php$resourceTypephp,php php$requiredPermissionphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Thisphp matchesphp,php appendphp signaturephp data
php php php php php php php php php php php php php php php php php$parsedPermittedUrlphp php=php parsephp_urlphp(php$permittedUrlphp)php;

php	php php php php php php php php php php php php ifphp php(strposphp(php$requestUrlphp,php php'php?php'php)php php=php=php=php falsephp)php php{
php	php php php php php php php php php php php php php php php php php$requestUrlphp php.php=php php'php?php'php;
php	php php php php php php php php php php php php php}php elsephp php{
php	php php php php php php php php php php php php php php php php php$requestUrlphp php.php=php php'php&php'php;
php	php php php php php php php php php php php php php}
php	
php	php php php php php php php php php php php php php$requestUrlphp php.php=php php$parsedPermittedUrlphp[php'queryphp'php]php;

php	php php php php php php php php php php php php php/php/php Returnphp url
php	php php php php php php php php php php php php returnphp php$requestUrlphp;
php	php php php php php php php php php}
php	php php php php php}
php	
php	php php php php php/php/php Returnphp urlphp,php willphp bephp unsignedphp.php.php.
php	php php php php returnphp php$requestUrlphp;
php	php}

php	php/php*php*
php	php php*php Signphp requestphp withphp credentials
php	php php*
php	php php*php php@paramphp stringphp php$httpVerbphp HTTPphp verbphp thephp requestphp willphp use
php	php php*php php@paramphp stringphp php$pathphp Pathphp forphp thephp request
php	php php*php php@paramphp stringphp php$queryStringphp Queryphp stringphp forphp thephp request
php	php php*php php@paramphp arrayphp php$headersphp xphp-msphp headersphp tophp add
php	php php*php php@paramphp booleanphp php$forTableStoragephp Isphp thephp requestphp forphp tablephp storagephp?
php	php php*php php@paramphp stringphp php$resourceTypephp Resourcephp type
php	php php*php php@paramphp stringphp php$requiredPermissionphp Requiredphp permission
php	php php*php php@paramphp mixedphp php php$rawDataphp Rawphp postphp data
php	php php*php php@returnphp arrayphp Arrayphp ofphp headers
php	php php*php/
php	publicphp functionphp signRequestHeadersphp(
php	php	php$httpVerbphp php=php Zendphp_Httpphp_Clientphp:php:GETphp,
php	php	php$pathphp php=php php'php/php'php,
php	php	php$queryStringphp php=php php'php'php,
php	php	php$headersphp php=php nullphp,
php	php	php$forTableStoragephp php=php falsephp,
php	php	php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,
php	php	php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READphp,
php	php	php$rawDataphp php=php null
php	php)php php{
php	php php php php returnphp php$headersphp;
php	php}
php}
