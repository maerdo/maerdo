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
php php*php php@versionphp php php php php$Idphp:php CredentialsAbstractphp.phpphp php2php3php5php8php4php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php1php:php4php9Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

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
abstractphp classphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php{
php php php php php/php*php*
php php php php php php*php Developmentphp storagephp accountphp andphp key
php php php php php php*php/
php php php php constphp DEVSTOREphp_ACCOUNTphp php php php php php php php=php php"devstoreaccountphp1php"php;
php php php php constphp DEVSTOREphp_KEYphp php php php php php php php php php php php=php php"Ebyphp8vdMphp0php2xNOcqFlqUwJPLlmEtlCDXJphp1OUzFTphp5php0uSRZphp6IFsuFqphp2UVErCzphp4Iphp6tqphp/Kphp1SZFPTOtrphp/KBHBeksoGMGwphp=php=php"php;
php php php php 
php php php php php/php*php*
php php php php php php*php HTTPphp headerphp prefixes
php php php php php php*php/
php php php php constphp PREFIXphp_PROPERTIESphp php php php php php php=php php"xphp-msphp-propphp-php"php;
php php php php constphp PREFIXphp_METADATAphp php php php php php php php php=php php"xphp-msphp-metaphp-php"php;
php php php php constphp PREFIXphp_STORAGEphp_HEADERphp php php=php php"xphp-msphp-php"php;
php php php php 
php php php php php/php*php*
php php php php php php*php Permissions
php php php php php php*php/
php php php php constphp PERMISSIONphp_READphp php php php php php php php php=php php"rphp"php;
php php php php constphp PERMISSIONphp_WRITEphp php php php php php php php=php php"wphp"php;
php php php php constphp PERMISSIONphp_DELETEphp php php php php php php=php php"dphp"php;
php php php php constphp PERMISSIONphp_LISTphp php php php php php php php php=php php"lphp"php;

php	php/php*php*
php	php php*php Accountphp namephp forphp Windowsphp Azure
php	php php*
php	php php*php php@varphp string
php	php php*php/
php	protectedphp php$php_accountNamephp php=php php'php'php;
php	
php	php/php*php*
php	php php*php Accountphp keyphp forphp Windowsphp Azure
php	php php*
php	php php*php php@varphp string
php	php php*php/
php	protectedphp php$php_accountKeyphp php=php php'php'php;
php	
php	php/php*php*
php	php php*php Usephp pathphp-stylephp URIphp's
php	php php*
php	php php*php php@varphp boolean
php	php php*php/
php	protectedphp php$php_usePathStyleUriphp php=php falsephp;
php	
php	php/php*php*
php	php php*php Createsphp aphp newphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp instance
php	php php*
php	php php*php php@paramphp stringphp php$accountNamephp Accountphp namephp forphp Windowsphp Azure
php	php php*php php@paramphp stringphp php$accountKeyphp Accountphp keyphp forphp Windowsphp Azure
php	php php*php php@paramphp booleanphp php$usePathStyleUriphp Usephp pathphp-stylephp URIphp's
php	php php*php/
php	publicphp functionphp php_php_constructphp(
php	php	php$accountNamephp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_ACCOUNTphp,
php	php	php$accountKeyphp php php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_KEYphp,
php	php	php$usePathStyleUriphp php=php false
php	php)php php{
php	php	php$thisphp-php>php_accountNamephp php=php php$accountNamephp;
php	php	php$thisphp-php>php_accountKeyphp php=php basephp6php4php_decodephp(php$accountKeyphp)php;
php	php	php$thisphp-php>php_usePathStyleUriphp php=php php$usePathStyleUriphp;
php	php}
php	
php	php/php*php*
php	php php*php Setphp accountphp namephp forphp Windowsphp Azure
php	php php*
php	php php*php php@paramphp php stringphp php$value
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php	php php*php/
php	publicphp functionphp setAccountNamephp(php$valuephp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_ACCOUNTphp)
php	php{
php	php	php$thisphp-php>php_accountNamephp php=php php$valuephp;
php	php	returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Setphp accountphp keyphp forphp Windowsphp Azure
php	php php*
php	php php*php php@paramphp php stringphp php$value
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php	php php*php/
php	publicphp functionphp setAccountkeyphp(php$valuephp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:DEVSTOREphp_KEYphp)
php	php{
php	php	php$thisphp-php>php_accountKeyphp php=php basephp6php4php_decodephp(php$valuephp)php;
php	php	returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Setphp usephp pathphp-stylephp URIphp's
php	php php*
php	php php*php php@paramphp php booleanphp php$value
php	php php*php php@returnphp Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstract
php	php php*php/
php	publicphp functionphp setUsePathStyleUriphp(php$valuephp php=php falsephp)
php	php{
php	php	php$thisphp-php>php_usePathStyleUriphp php=php php$valuephp;
php	php	returnphp php$thisphp;
php	php}
php	
php	php/php*php*
php	php php*php Signphp requestphp URLphp withphp credentials
php	php php*
php	php php*php php@paramphp stringphp php$requestUrlphp Requestphp URL
php	php php*php php@paramphp stringphp php$resourceTypephp Resourcephp type
php	php php*php php@paramphp stringphp php$requiredPermissionphp Requiredphp permission
php	php php*php php@returnphp stringphp Signedphp requestphp URL
php	php php*php/
php	abstractphp publicphp functionphp signRequestUrlphp(
php	php	php$requestUrlphp php=php php'php'php,
php	php	php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,
php	php	php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READ
php	php)php;
php	
php	php/php*php*
php	php php*php Signphp requestphp headersphp withphp credentials
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
php	abstractphp publicphp functionphp signRequestHeadersphp(
php	php	php$httpVerbphp php=php Zendphp_Httpphp_Clientphp:php:GETphp,
php	php	php$pathphp php=php php'php/php'php,
php	php	php$queryStringphp php=php php'php'php,
php	php	php$headersphp php=php nullphp,
php	php	php$forTableStoragephp php=php falsephp,
php	php	php$resourceTypephp php=php Zendphp_Servicephp_WindowsAzurephp_Storagephp:php:RESOURCEphp_UNKNOWNphp,
php	php	php$requiredPermissionphp php=php Zendphp_Servicephp_WindowsAzurephp_Credentialsphp_CredentialsAbstractphp:php:PERMISSIONphp_READphp,
php	php	php$rawDataphp php=php null
php	php)php;
php	
php	
php	php/php*php*
php	php php*php Preparephp queryphp stringphp forphp signing
php	php php*
php	php php*php php@paramphp php stringphp php$valuephp Originalphp queryphp string
php	php php*php php@returnphp stringphp php php php php php php php Queryphp stringphp forphp signing
php	php php*php/
php	protectedphp functionphp php_prepareQueryStringForSigningphp(php$valuephp)
php	php{
php	php php php php php/php/php Returnphp value
php	php php php php php$returnValuephp php=php arrayphp(php)php;
php	
php	php php php php php/php/php Preparephp queryphp string
php	php php php php php$queryPartsphp php=php php$thisphp-php>php_makeArrayOfQueryStringphp(php$valuephp)php;
php	php php php php foreachphp php(php$queryPartsphp asphp php$keyphp php=php>php php$valuephp)php php{
php	php php php php php	php$returnValuephp[php]php php=php php$keyphp php.php php'php=php'php php.php php$valuephp;
php	php php php php php}
php	
php	php php php php php/php/php Return
php	php php php php ifphp php(countphp(php$returnValuephp)php php>php php0php)php php{
php	php php php php php	returnphp php'php?php'php php.php implodephp(php'php&php'php,php php$returnValuephp)php;
php	php php php php php}php elsephp php{
php	php php php php php	returnphp php'php'php;
php	php php php php php}
php	php}
php	
php	php/php*php*
php	php php*php Makephp arrayphp ofphp queryphp string
php	php php*
php	php php*php php@paramphp php stringphp php$valuephp Queryphp string
php	php php*php php@returnphp arrayphp php php php php php php php php Arrayphp ofphp keyphp/valuephp pairs
php	php php*php/
php	protectedphp functionphp php_makeArrayOfQueryStringphp(php$valuephp)
php	php{
php	php	php/php/php Returnvalue
php	php	php$returnValuephp php=php arrayphp(php)php;
php	php	
php	php php php php php/php/php Removephp frontphp php?
php php php php	php	ifphp php(strlenphp(php$valuephp)php php>php php0php php&php&php strposphp(php$valuephp,php php'php?php'php)php php=php=php=php php0php)php php{
php php php php php	php	php$valuephp php=php substrphp(php$valuephp,php php1php)php;
php php php php php	php}
php php php php php	php	
php php php php php	php/php/php Splitphp parts
php php php php php	php$queryPartsphp php=php explodephp(php'php&php'php,php php$valuephp)php;
php php php php php	foreachphp php(php$queryPartsphp asphp php$queryPartphp)php php{
php php php php php	php	php$queryPartphp php=php explodephp(php'php=php'php,php php$queryPartphp,php php2php)php;
php php php php php	php	
php php php php php	php	ifphp php(php$queryPartphp[php0php]php php!php=php php'php'php)php php{
php php php php php	php	php	php$returnValuephp[php php$queryPartphp[php0php]php php]php php=php issetphp(php$queryPartphp[php1php]php)php php?php php$queryPartphp[php1php]php php:php php'php'php;
php php php php php	php	php}
php php php php php	php}
php php php php php	
php php php php php	php/php/php Sort
php php php php php	ksortphp(php$returnValuephp)php;

php php php php php	php/php/php Return
php	php	returnphp php$returnValuephp;
php	php}
php	
php	php/php*php*
php	php php*php Returnsphp anphp arrayphp valuephp ifphp thephp keyphp isphp setphp,php otherwidephp returnsphp php$valueIfNotSet
php	php php*
php	php php*php php@paramphp arrayphp php$array
php	php php*php php@paramphp mixedphp php$key
php	php php*php php@paramphp mixedphp php$valueIfNotSet
php	php php*php php@returnphp mixed
php	php php*php/
php	protectedphp functionphp php_issetOrphp(php$arrayphp,php php$keyphp,php php$valueIfNotSetphp)
php	php{
php	php	returnphp issetphp(php$arrayphp[php$keyphp]php)php php?php php$arrayphp[php$keyphp]php php:php php$valueIfNotSetphp;
php	php}
php}
