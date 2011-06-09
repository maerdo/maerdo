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
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ClientAbstractphp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Soap
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Soapphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Credential
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Credentialphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServer
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/SecurityTokenServerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php{
php php php php php/php*php*
php php php php php php*php constantsphp forphp usingphp withphp thephp odgphp api
php php php php php php*php/
php php php php constphp ENVphp_PRODUCTIONphp php=php php1php;php php/php/php Productionphp Environment
php php php php constphp ENVphp_SANDBOXphp php php php php=php php2php;php php/php/php Sandboxphp Environmentphp,php limitedphp accessphp tophp thephp api
php php php php constphp ENVphp_MOCKphp php php php php php php php=php php3php;php php/php/php Apiphp callsphp arephp withoutphp anyphp functionality

php php php php constphp PARTICIPANTphp_MUTEphp_OFFphp php=php php0php;php php/php/php removesphp mutephp fromphp participantphp inphp aphp conference
php php php php constphp PARTICIPANTphp_MUTEphp_ONphp php php=php php1php;php php/php/php mutephp participantphp inphp aphp conference
php php php php constphp PARTICIPANTphp_RECALLphp php php php=php php2php;php php/php/php recallsphp thephp participantphp inphp aphp conference

php php php php php/php*php*
php php php php php php*php arrayphp ofphp allphp possiblephp envphp types
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php staticphp protectedphp php$php_constsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Thephp servicephp idphp tophp generatephp thephp authphp servicephp token
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_serviceAuthIdphp php=php php'httpsphp:php/php/odgphp.tphp-onlinephp.dephp'php;

php php php php php/php*php*
php php php php php php*php Variablephp thatphp holdsphp thephp Zendphp_Servicephp_DeveloperGardenphp envphp value
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_serviceEnvironmentphp php=php Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstractphp:php:ENVphp_PRODUCTIONphp;

php php php php php/php*php*
php php php php php php*php wsdlphp file
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlFilephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php thephp localphp wsdlFile
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlFileLocalphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php shouldphp wephp usephp thephp localphp wsdlphp filephp?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_useLocalWsdlphp php=php truephp;

php php php php php/php*php*
php php php php php php*php classphp withphp credentials
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Credential
php php php php php php*php/
php php php php protectedphp php$php_credentialphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp internalphp Soapphp Client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Soapphp_Client
php php php php php php*php/
php php php php protectedphp php$php_soapClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php arrayphp withphp optionsphp forphp classmapping
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_classMapphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_credentialphp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Credentialphp(php)php;

php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php switchphp php(ucfirstphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php casephp php'Usernamephp'php php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_credentialphp-php>setUsernamephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'Passwordphp'php php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_credentialphp-php>setPasswordphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'Realmphp'php php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_credentialphp-php>setRealmphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'Environmentphp'php php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setEnvironmentphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_wsdlFilephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php'php_wsdlFilephp notphp setphp forphp thisphp servicephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_wsdlFileLocalphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_wsdlFileLocalphp php=php realpathphp(dirnamephp(php_php_FILEphp_php_php)php php.php php'php/php.php.php/php'php php.php php$thisphp-php>php_wsdlFileLocalphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_wsdlFileLocalphp)php php|php|php php$thisphp-php>php_wsdlFileLocalphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php'php_wsdlFileLocalphp notphp setphp forphp thisphp servicephp.php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Incorrectphp optionphp namephp:php php'php php.php php$namephp)php;
php php php php php php php php php}
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp anphp optionphp valuephp fromphp thephp internalphp optionsphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp internalphp soapphp client
php php php php php php*php ifphp notphp allreadyphp existsphp wephp createphp anphp instancephp of
php php php php php php*php Zendphp_Soapphp_Client
php php php php php php*
php php php php php php*php php@final
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Soap
php php php php php php*php/
php php php php finalphp publicphp functionphp getSoapClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_soapClientphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php initphp thephp soapClient
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_soapClientphp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Soapphp(
php php php php php php php php php php php php php php php php php$thisphp-php>getWsdlphp(php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>getClientOptionsphp(php)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_soapClientphp-php>setCredentialphp(php$thisphp-php>php_credentialphp)php;
php php php php php php php php php php php php php$tokenServicephp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp(
php php php php php php php php php php php php php php php php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'usernamephp'php php php php php=php>php php$thisphp-php>php_credentialphp-php>getUsernamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php'passwordphp'php php php php php=php>php php$thisphp-php>php_credentialphp-php>getPasswordphp(php)php,
php php php php php php php php php php php php php php php php php php php php php'environmentphp'php php=php>php php$thisphp-php>getEnvironmentphp(php)php,
php php php php php php php php php php php php php php php php php php php php php'realmphp'php php php php php php php php=php>php php$thisphp-php>php_credentialphp-php>getRealmphp(php)php,
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php$thisphp-php>php_soapClientphp-php>setTokenServicephp(php$tokenServicephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_soapClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp newphp environment
php php php php php php*
php php php php php php*php php@paramphp intphp php$environment
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setEnvironmentphp(php$environmentphp)
php php php php php{
php php php php php php php php selfphp:php:checkEnvironmentphp(php$environmentphp)php;
php php php php php php php php php$thisphp-php>php_serviceEnvironmentphp php=php php$environmentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp currentphp configuredphp environemnt
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getEnvironmentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_serviceEnvironmentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp wsdlphp filephp pathphp,php aphp uriphp orphp thephp localphp path
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getWsdlphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_useLocalWsdlphp)php php{
php php php php php php php php php php php php php$retValphp php=php php$thisphp-php>php_wsdlFileLocalphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$retValphp php=php php$thisphp-php>php_wsdlFilephp;
php php php php php php php php php}

php php php php php php php php returnphp php$retValphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php switchphp tophp thephp localphp wsdlphp filephp usage
php php php php php php*
php php php php php php*php php@paramphp boolenphp php$use
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setUseLocalWsdlphp(php$usephp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_useLocalWsdlphp php=php php(booleanphp)php php$usephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp aphp newphp wsdlphp file
php php php php php php*
php php php php php php*php php@paramphp stringphp php$wsdlFile
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setWsdlphp(php$wsdlFilephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$wsdlFilephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php'php_wsdlFilephp notphp setphp forphp thisphp servicephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_wsdlFilephp php=php php$wsdlFilephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp aphp newphp localphp wsdlphp file
php php php php php php*
php php php php php php*php php@paramphp stringphp php$wsdlFile
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php php php php php*php/
php php php php publicphp functionphp setLocalWsdlphp(php$wsdlFilephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$wsdlFilephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php'php_wsdlFileLocalphp notphp setphp forphp thisphp servicephp.php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_wsdlFileLocalphp php=php php$wsdlFilephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp anphp arrayphp withphp configuredphp optionsphp forphp thisphp client
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getClientOptionsphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php'soapphp_versionphp'php php=php>php SOAPphp_php1php_php1php,
php php php php php php php php php)php;
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_classMapphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'classmapphp'php]php php=php php$thisphp-php>php_classMapphp;
php php php php php php php php php}
php php php php php php php php php$wsdlCachephp php=php Zendphp_Servicephp_DeveloperGardenphp_SecurityTokenServerphp_Cachephp:php:getWsdlCachephp(php)php;
php php php php php php php php ifphp php(php$wsdlCachephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$optionsphp[php'cachephp_wsdlphp'php]php php=php php$wsdlCachephp;
php php php php php php php php php}
php php php php php php php php returnphp php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp internalphp credentialphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Credential
php php php php php php*php/
php php php php publicphp functionphp getCredentialphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_credentialphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php helperphp methodphp tophp createphp constphp arrays
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php staticphp protectedphp functionphp php_buildConstArrayphp(php)
php php php php php{
php php php php php php php php php$rphp php=php newphp ReflectionClassphp(php_php_CLASSphp_php_php)php;
php php php php php php php php foreachphp php(php$rphp-php>getConstantsphp(php)php asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php$sphp php=php explodephp(php'php_php'php,php php$kphp,php php2php)php;
php php php php php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$php_constsphp[php$sphp[php0php]php]php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_constsphp[php$sphp[php0php]php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php selfphp:php:php$php_constsphp[php$sphp[php0php]php]php[php$vphp]php php=php php$kphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp anphp arrayphp ofphp allphp availablephp environments
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php staticphp publicphp functionphp getParticipantActionsphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(selfphp:php:php$php_constsphp)php)php php{
php php php php php php php php php php php php selfphp:php:php_buildConstArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_constsphp[php'PARTICIPANTphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php checksphp ifphp thephp givenphp actionphp isphp valid
php php php php php php*php otherwisephp itphp php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Exception
php php php php php php*
php php php php php php*php php@paramphp intphp php$action
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php staticphp publicphp functionphp checkParticipantActionphp(php$actionphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$actionphp,php selfphp:php:getParticipantActionsphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Wrongphp Participantphp Actionphp php'php php.php php$actionphp php.php php'php suppliedphp.php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp anphp arrayphp ofphp allphp availablephp environments
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php staticphp publicphp functionphp getEnvironmentsphp(php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(selfphp:php:php$php_constsphp)php)php php{
php php php php php php php php php php php php selfphp:php:php_buildConstArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_constsphp[php'ENVphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php checksphp ifphp thephp givenphp environemntphp isphp valid
php php php php php php*php otherwisephp itphp php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*
php php php php php php*php php@paramphp intphp php$environment
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php staticphp publicphp functionphp checkEnvironmentphp(php$environmentphp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$environmentphp,php selfphp:php:getEnvironmentsphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Wrongphp environmentphp php'php php.php php$environmentphp php.php php'php suppliedphp.php'
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}
php}
