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
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Devicephp.phpphp'php;

php/php*php*
php php*php Abstractphp Classphp tophp definephp aphp browserphp devicephp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Httpphp_UserAgentphp_AbstractDevice
php php php php implementsphp Zendphp_Httpphp_UserAgentphp_Device
php{
php php php php php/php*php*
php php php php php php*php Browserphp signature
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_browserphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Browserphp version
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_browserVersionphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Configuration
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp;

php php php php php/php*php*
php php php php php php*php Userphp Agentphp chain
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_userAgentphp;

php php php php php/php*php*
php php php php php php*php Serverphp variable
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_serverphp;

php php php php php/php*php*
php php php php php php*php Imagephp types
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_imagesphp php=php arrayphp(
php php php php php php php php php'jpegphp'php,
php php php php php php php php php'gifphp'php,
php php php php php php php php php'pngphp'php,
php php php php php php php php php'pjpegphp'php,
php php php php php php php php php'xphp-pngphp'php,
php php php php php php php php php'bmpphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Browserphp/Devicephp features
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_aFeaturesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Browserphp/Devicephp featuresphp groups
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_aGroupphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$userAgentphp Ifphp arrayphp,php restoresphp fromphp serializedphp version
php php php php php php*php php@paramphp php arrayphp php$server
php php php php php php*php php@paramphp php arrayphp php$config
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$userAgentphp php=php nullphp,php arrayphp php$serverphp php=php arrayphp(php)php,php arrayphp php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$userAgentphp)php)php php{
php php php php php php php php php php php php php/php/php Restoringphp fromphp serializedphp array
php php php php php php php php php php php php php$thisphp-php>php_restoreFromArrayphp(php$userAgentphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Constructingphp newphp object
php php php php php php php php php php php php php$thisphp-php>setUserAgentphp(php$userAgentphp)php;
php php php php php php php php php php php php php$thisphp-php>php_serverphp php php php php=php php$serverphp;
php php php php php php php php php php php php php$thisphp-php>php_configphp php php php php=php php$configphp;
php php php php php php php php php php php php php$thisphp-php>php_getDefaultFeaturesphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_defineFeaturesphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp object
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp serializephp(php)
php php php php php{
php php php php php php php php php$specphp php=php arrayphp(
php php php php php php php php php php php php php'php_aFeaturesphp'php php php php php php php=php>php php$thisphp-php>php_aFeaturesphp,
php php php php php php php php php php php php php'php_aGroupphp'php php php php php php php php php php=php>php php$thisphp-php>php_aGroupphp,
php php php php php php php php php php php php php'php_browserphp'php php php php php php php php php=php>php php$thisphp-php>php_browserphp,
php php php php php php php php php php php php php'php_browserVersionphp'php php=php>php php$thisphp-php>php_browserVersionphp,
php php php php php php php php php php php php php'php_userAgentphp'php php php php php php php=php>php php$thisphp-php>php_userAgentphp,
php php php php php php php php php php php php php'php_imagesphp'php php php php php php php php php php=php>php php$thisphp-php>php_imagesphp,
php php php php php php php php php)php;
php php php php php php php php returnphp serializephp(php$specphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unserialize
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$serialized
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp unserializephp(php$serializedphp)
php php php php php{
php php php php php php php php php$specphp php=php unserializephp(php$serializedphp)php;
php php php php php php php php php$thisphp-php>php_restoreFromArrayphp(php$specphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Restorephp objectphp statephp fromphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$spec
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_restoreFromArrayphp(arrayphp php$specphp)
php php php php php{
php php php php php php php php foreachphp php(php$specphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(propertyphp_existsphp(php$thisphp,php php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$keyphp}php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Lookphp forphp features
php php php php php php*
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php protectedphp functionphp php_defineFeaturesphp(php)
php php php php php{
php php php php php php php php php$featuresphp php=php php$thisphp-php>php_loadFeaturesAdapterphp(php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$featuresphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_aFeaturesphp php=php arrayphp_mergephp(php$thisphp-php>php_aFeaturesphp,php php$featuresphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_aFeaturesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp browserphp typephp identifier
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp getTypephp(php)php;

php php php php php/php*php*
php php php php php php*php Checkphp aphp featurephp forphp thephp currentphp browserphp/devicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$featurephp Thephp featurephp tophp checkphp.
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasFeaturephp(php$featurephp)
php php php php php{
php php php php php php php php returnphp php(php!emptyphp(php$thisphp-php>php_aFeaturesphp[php$featurephp]php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp thephp valuephp ofphp thephp currentphp browserphp/devicephp feature
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$featurephp Featurephp tophp search
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFeaturephp(php$featurephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasFeaturephp(php$featurephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_aFeaturesphp[php$featurephp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp featurephp forphp thephp currentphp browserphp/devicephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$featurephp Thephp featurephp tophp setphp.
php php php php php php*php php@paramphp php stringphp php$valuephp php(optionphp)php featurephp valuephp.
php php php php php php*php php@paramphp php stringphp php$groupphp php(optionphp)php Groupphp tophp associatephp withphp thephp feature
php php php php php php*php php@returnphp Zendphp_Httpphp_UserAgentphp_AbstractDevice
php php php php php php*php/
php php php php publicphp functionphp setFeaturephp(php$featurephp,php php$valuephp php=php falsephp,php php$groupphp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_aFeaturesphp[php$featurephp]php php=php php$valuephp;
php php php php php php php php ifphp php(php!emptyphp(php$groupphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setGroupphp(php$groupphp,php php$featurephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Affectsphp aphp featurephp tophp aphp group
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$groupphp Groupphp name
php php php php php php*php php@paramphp php stringphp php$featurephp Featurephp name
php php php php php php*php php@returnphp Zendphp_Httpphp_UserAgentphp_AbstractDevice
php php php php php php*php/
php php php php publicphp functionphp setGroupphp(php$groupphp,php php$featurephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_aGroupphp[php$groupphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_aGroupphp[php$groupphp]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!inphp_arrayphp(php$featurephp,php php$thisphp-php>php_aGroupphp[php$groupphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_aGroupphp[php$groupphp]php[php]php php=php php$featurephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp anphp arrayphp ofphp featuresphp associatedphp tophp aphp group
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$groupphp Groupphp param
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getGroupphp(php$groupphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_aGroupphp[php$groupphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp allphp thephp browserphp/devicephp features
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAllFeaturesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_aFeaturesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp allphp thephp browserphp/devicephp featuresphp'php groups
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAllGroupsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_aGroupphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp allphp thephp standardphp featuresphp extractedphp fromphp thephp Userphp Agentphp chainphp andphp php$thisphp-php>php_server
php php php php php php*php vars
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultFeaturesphp(php)
php php php php php{
php php php php php php php php php$serverphp php=php arrayphp(php)php;

php php php php php php php php php/php/php getsphp infophp fromphp userphp agentphp chain
php php php php php php php php php$uaExtractphp php=php php$thisphp-php>extractFromUserAgentphp(php$thisphp-php>getUserAgentphp(php)php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$uaExtractphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$uaExtractphp asphp php$keyphp php=php>php php$infophp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php$keyphp,php php$infophp,php php'productphp_infophp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$uaExtractphp[php'browserphp_namephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_browserphp php=php php$uaExtractphp[php'browserphp_namephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$uaExtractphp[php'browserphp_versionphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_browserVersionphp php=php php$uaExtractphp[php'browserphp_versionphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$uaExtractphp[php'devicephp_osphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>devicephp_osphp php=php php$uaExtractphp[php'devicephp_osphp_namephp'php]php;
php php php php php php php php php}

php php php php php php php php php/php*php browserphp php&php devicephp infophp php*php/
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_wirelessphp_devicephp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_mobilephp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_desktopphp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_tabletphp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_botphp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_emailphp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_textphp'php,php falsephp,php php'productphp_infophp'php)php;
php php php php php php php php php$thisphp-php>setFeaturephp(php'devicephp_claimsphp_webphp_supportphp'php,php falsephp,php php'productphp_infophp'php)php;

php php php php php php php php php$thisphp-php>setFeaturephp(php'isphp_php'php php.php strtolowerphp(php$thisphp-php>getTypephp(php)php)php,php truephp,php php'productphp_infophp'php)php;

php php php php php php php php php/php*php setsphp thephp browserphp namephp php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>listphp)php php&php&php emptyphp(php$thisphp-php>php_browserphp)php)php php{
php php php php php php php php php php php php php$lowerUserAgentphp php=php strtolowerphp(php$thisphp-php>getUserAgentphp(php)php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>listphp asphp php$browserphp_signaturephp)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$lowerUserAgentphp,php php$browserphp_signaturephp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_browserphp php=php strtolowerphp(php$browserphp_signaturephp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'browserphp_namephp'php,php php$thisphp-php>php_browserphp,php php'productphp_infophp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php setsphp thephp clientphp IPphp php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serverphp[php'remotephp_addrphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'clientphp_ipphp'php,php php$thisphp-php>php_serverphp[php'remotephp_addrphp'php]php,php php'productphp_infophp'php)php;
php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_serverphp[php'httpphp_xphp_forwardedphp_forphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'clientphp_ipphp'php,php php$thisphp-php>php_serverphp[php'httpphp_xphp_forwardedphp_forphp'php]php,php php'productphp_infophp'php)php;
php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_serverphp[php'httpphp_clientphp_ipphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'clientphp_ipphp'php,php php$thisphp-php>php_serverphp[php'httpphp_clientphp_ipphp'php]php,php php'productphp_infophp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php setsphp thephp serverphp infosphp php*php/
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php'Apachephp'php)php php!php=php=php falsephp php|php|php strposphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php'LiteSpeedphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$serverphp[php'versionphp'php]php php=php php1php;
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php'Apachephp/php2php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$serverphp[php'versionphp'php]php php=php php2php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$serverphp[php'serverphp'php]php php=php php'apachephp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php'Microsoftphp-IISphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$serverphp[php'serverphp'php]php php=php php'iisphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php'Unixphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$serverphp[php'osphp'php]php php=php php'unixphp'php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_ENVphp[php'MACHTYPEphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$php_ENVphp[php'MACHTYPEphp'php]php,php php'linuxphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$serverphp[php'osphp'php]php php=php php'linuxphp'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(strposphp(php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php'Winphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$serverphp[php'osphp'php]php php=php php'windowsphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/Apachephp\php/php(php[php0php-php9php\php.php]php*php)php/php'php,php php$thisphp-php>php_serverphp[php'serverphp_softwarephp'php]php,php php$arrphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$arrphp[php1php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$serverphp[php'versionphp'php]php php=php php$arrphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php$serverphp[php'serverphp'php]php php php=php php'apachephp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setFeaturephp(php'phpphp_versionphp'php,php phpversionphp(php)php,php php'serverphp_infophp'php)php;
php php php php php php php php ifphp php(issetphp(php$serverphp[php'serverphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'serverphp_osphp'php,php php$serverphp[php'serverphp'php]php,php php'serverphp_infophp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$serverphp[php'versionphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'serverphp_osphp_versionphp'php,php php$serverphp[php'versionphp'php]php,php php'serverphp_infophp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serverphp[php'httpphp_acceptphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'serverphp_httpphp_acceptphp'php,php php$thisphp-php>php_serverphp[php'httpphp_acceptphp'php]php,php php'serverphp_infophp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serverphp[php'httpphp_acceptphp_languagephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'serverphp_httpphp_acceptphp_languagephp'php,php php$thisphp-php>php_serverphp[php'httpphp_acceptphp_languagephp'php]php,php php'serverphp_infophp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serverphp[php'serverphp_addrphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'serverphp_ipphp'php,php php$thisphp-php>php_serverphp[php'serverphp_addrphp'php]php,php php'serverphp_infophp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_serverphp[php'serverphp_namephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFeaturephp(php'serverphp_namephp'php,php php$thisphp-php>php_serverphp[php'serverphp_namephp'php]php,php php'serverphp_infophp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractphp andphp setsphp informationsphp fromphp thephp Userphp Agentphp chain
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userAgentphp Userphp Agentphp chain
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp extractFromUserAgentphp(php$userAgentphp)
php php php php php{
php php php php php php php php php$userAgentphp php=php trimphp(php$userAgentphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp httpphp:php/php/wwwphp.texsoftphp.itphp/indexphp.phpphp?cphp=softwarephp&mphp=swphp.phpphp.useragentphp&lphp=it
php php php php php php php php php php*php/
php php php php php php php php php$patternphp php=php php php"php(php(php[php^php/php\sphp]php*php)php(php/php(php\Sphp*php)php)php?php)php(php\sphp*php\php[php[aphp-zAphp-Zphp]php[aphp-zAphp-Zphp]php\php]php)php?php\sphp*php(php\php\php(php(php(php[php^php(php)php]php|php(php\php\php(php[php^php(php)php]php*php\php\php)php)php)php*php)php\php\php)php)php?php\sphp*php"php;
php php php php php php php php pregphp_matchphp(php"php#php^php$patternphp#php"php,php php$userAgentphp,php php$matchphp)php;

php php php php php php php php php$commentphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$matchphp[php7php]php)php)php php{
php php php php php php php php php php php php php$commentphp php=php explodephp(php'php;php'php,php php$matchphp[php7php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php secondphp partphp ifphp exists
php php php php php php php php php$endphp php=php substrphp(php$userAgentphp,php strlenphp(php$matchphp[php0php]php)php)php;
php php php php php php php php ifphp php(php!emptyphp(php$endphp)php)php php{
php php php php php php php php php php php php php$resultphp[php'othersphp'php]php[php'fullphp'php]php php=php php$endphp;
php php php php php php php php php}

php php php php php php php php php$matchphp2php php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$resultphp[php'othersphp'php]php)php)php php{
php php php php php php php php php php php php pregphp_matchphp_allphp(php'php/php(php(php[php^php\php/php\sphp]php*php)php(php\php/php)php?php(php[php^php\php/php\php(php\php)php\sphp]php*php)php?php)php(php\sphp\php(php(php(php[php^php\php)php]php*php)php*php)php\php)php)php?php/iphp'php,php php$resultphp[php'othersphp'php]php[php'fullphp'php]php,php php$matchphp2php)php;
php php php php php php php php php}
php php php php php php php php php$resultphp[php'userphp_agentphp'php]php php php php=php trimphp(php$matchphp[php1php]php)php;
php php php php php php php php php$resultphp[php'productphp_namephp'php]php php=php issetphp(php$matchphp[php2php]php)php php?php trimphp(php$matchphp[php2php]php)php php:php php'php'php;
php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php=php php$resultphp[php'productphp_namephp'php]php;
php php php php php php php php ifphp php(issetphp(php$matchphp[php4php]php)php php&php&php trimphp(php$matchphp[php4php]php)php)php php{
php php php php php php php php php php php php php$resultphp[php'productphp_versionphp'php]php php=php trimphp(php$matchphp[php4php]php)php;
php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php trimphp(php$matchphp[php4php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(countphp(php$commentphp)php php&php&php php!emptyphp(php$commentphp[php0php]php)php)php php{
php php php php php php php php php php php php php$resultphp[php'commentphp'php]php[php'fullphp'php]php php php php php php=php trimphp(php$matchphp[php7php]php)php;
php php php php php php php php php php php php php$resultphp[php'commentphp'php]php[php'detailphp'php]php php php php=php php$commentphp;
php php php php php php php php php php php php php$resultphp[php'compatibilityphp_flagphp'php]php php php=php trimphp(php$commentphp[php0php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$commentphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_tokenphp'php]php php php php=php trimphp(php$commentphp[php1php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$commentphp[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_tokenphp'php]php php=php trimphp(php$commentphp[php2php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$resultphp[php'devicephp_osphp_tokenphp'php]php)php php&php&php php!emptyphp(php$resultphp[php'compatibilityphp_flagphp'php]php)php)php php{
php php php php php php php php php php php php php/php/php somephp browsersphp dophp notphp havephp aphp platformphp token
php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_tokenphp'php]php php=php php$resultphp[php'compatibilityphp_flagphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$matchphp2php)php php{
php php php php php php php php php php php php php$iphp php=php php0php;
php php php php php php php php php php php php php$maxphp php=php countphp(php$matchphp2php[php0php]php)php;
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$maxphp;php php$iphp php+php+php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchphp2php[php0php]php[php$iphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$matchphp2php[php0php]php[php$iphp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$matchphp2php[php2php]php[php$iphp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$matchphp2php[php4php]php[php$iphp]php,
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*php Securityphp levelphp php*php/
php php php php php php php php php$securityphp php=php arrayphp(
php php php php php php php php php php php php php'Nphp'php php=php>php php'nophp securityphp'php,
php php php php php php php php php php php php php'Uphp'php php=php>php php'strongphp securityphp'php,
php php php php php php php php php php php php php'Iphp'php php=php>php php'weakphp securityphp'php,
php php php php php php php php php)php;
php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'browserphp_tokenphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$securityphp[php$resultphp[php'browserphp_tokenphp'php]php]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'securityphp_levelphp'php]php php=php php$securityphp[php$resultphp[php'browserphp_tokenphp'php]php]php;
php php php php php php php php php php php php php php php php unsetphp(php$resultphp[php'browserphp_tokenphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$productphp php=php strtolowerphp(php$resultphp[php'browserphp_namephp'php]php)php;

php php php php php php php php php/php/php Mozillaphp php:php truephp php&php&php false
php php php php php php php php php$compatibleOrIephp php=php falsephp;
php php php php php php php php ifphp php(issetphp(php$resultphp[php'compatibilityphp_flagphp'php]php)php php&php&php issetphp(php$resultphp[php'commentphp'php]php)php)php php{
php php php php php php php php php php php php php$compatibleOrIephp php=php php(php$resultphp[php'compatibilityphp_flagphp'php]php php=php=php php'compatiblephp'php php|php|php strposphp(php$resultphp[php'commentphp'php]php[php'fullphp'php]php,php php"MSIEphp"php)php php!php=php=php falsephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$productphp php=php=php php'mozillaphp'php php&php&php php$compatibleOrIephp)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'browserphp_tokenphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Classicphp Mozillaphp chain
php php php php php php php php php php php php php php php php pregphp_matchphp_allphp(php'php/php(php[php^php\php/php\sphp]php.php*php)php(php\php/php|php\sphp)php(php.php*php)php/iphp'php,php php$resultphp[php'browserphp_tokenphp'php]php,php php$realphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php MSIEphp specificphp chainphp withphp php'Windowsphp'php compatibilityphp flag
php php php php php php php php php php php php php php php php foreachphp php(php$resultphp[php'commentphp'php]php[php'detailphp'php]php asphp php$vphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$vphp,php php'MSIEphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$realphp[php0php]php[php1php]php php php php php php php php php php php php php php php php=php trimphp(php$vphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_enginephp'php]php php=php php"MSIEphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php$realphp[php1php]php[php0php]php php php php php php php php php php php php php php php php=php php"Internetphp Explorerphp"php;
php php php php php php php php php php php php php php php php php php php php php php php php php$tempphp php php php php php php php php php php php php php php php php php php php php php=php explodephp(php'php php'php,php trimphp(php$vphp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$realphp[php3php]php[php0php]php php php php php php php php php php php php php php php php=php php$tempphp[php1php]php;

php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$vphp,php php'Winphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_tokenphp'php]php php=php trimphp(php$vphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$realphp[php0php]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php$realphp[php1php]php[php0php]php;
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$realphp[php3php]php[php0php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php$resultphp[php'browserphp_tokenphp'php]php;
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php'php?php?php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php$productphp php=php=php php'mozillaphp'php php&php&php php$resultphp[php'browserphp_versionphp'php]php <php php5php.php0php)php php{
php php php php php php php php php php php php php/php/php handlesphp thephp realphp Mozillaphp php(orphp oldphp Netscapephp ifphp versionphp <php php5php.php0php)
php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php=php php'Netscapephp'php;
php php php php php php php php php}

php php php php php php php php php/php*php*php windowsphp php*php/
php php php php php php php php ifphp php(php$resultphp[php'browserphp_namephp'php]php php=php=php php'MSIEphp'php)php php{
php php php php php php php php php php php php php$resultphp[php'browserphp_enginephp'php]php php=php php'MSIEphp'php;
php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php=php php'Internetphp Explorerphp'php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$resultphp[php'devicephp_osphp_tokenphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$resultphp[php'devicephp_osphp_tokenphp'php]php,php php'Winphp'php)php php!php=php=php falsephp)php php{

php php php php php php php php php php php php php php php php php$windowsphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php6php.php1php'php php php php php php php php php php php=php>php php'Windowsphp php7php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php6php.php0php'php php php php php php php php php php php=php>php php'Windowsphp Vistaphp'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php5php.php2php'php php php php php php php php php php php=php>php php'Windowsphp Serverphp php2php0php0php3php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php5php.php1php'php php php php php php php php php php php=php>php php'Windowsphp XPphp'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php5php.php0php1php'php php php php php php php php php php=php>php php'Windowsphp php2php0php0php0php SPphp1php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php5php.php0php'php php php php php php php php php php php=php>php php'Windowsphp php2php0php0php0php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp NTphp php4php.php0php'php php php php php php php php php php php=php>php php'Microsoftphp Windowsphp NTphp php4php.php0php'php,
php php php php php php php php php php php php php php php php php php php php php'WinNTphp'php php php php php php php php php php php php php php php php php php php php=php>php php'Microsoftphp Windowsphp NTphp php4php.php0php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp php9php8php;php Winphp php9xphp php4php.php9php0php'php php=php>php php'Windowsphp Mephp'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp php9php8php'php php php php php php php php php php php php php php php=php>php php'Windowsphp php9php8php'php,
php php php php php php php php php php php php php php php php php php php php php'Winphp9php8php'php php php php php php php php php php php php php php php php php php php php=php>php php'Windowsphp php9php8php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp php9php5php'php php php php php php php php php php php php php php php=php>php php'Windowsphp php9php5php'php,
php php php php php php php php php php php php php php php php php php php php php'Winphp9php5php'php php php php php php php php php php php php php php php php php php php php=php>php php'Windowsphp php9php5php'php,
php php php php php php php php php php php php php php php php php php php php php'Windowsphp CEphp'php php php php php php php php php php php php php php php=php>php php'Windowsphp CEphp'php,
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$windowsphp[php$resultphp[php'devicephp_osphp_tokenphp'php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_namephp'php]php php=php php$windowsphp[php$resultphp[php'devicephp_osphp_tokenphp'php]php]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_namephp'php]php php=php php$resultphp[php'devicephp_osphp_tokenphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php iphone
php php php php php php php php php$applephp_devicephp php=php arrayphp(
php php php php php php php php php php php php php'iPhonephp'php,
php php php php php php php php php php php php php'iPodphp'php,
php php php php php php php php php php php php php'iPadphp'php,
php php php php php php php php php)php;
php php php php php php php php ifphp php(issetphp(php$resultphp[php'compatibilityphp_flagphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$resultphp[php'compatibilityphp_flagphp'php]php,php php$applephp_devicephp)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'devicephp'php]php php php php php php php php php php php php=php strtolowerphp(php$resultphp[php'compatibilityphp_flagphp'php]php)php;
php php php php php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_tokenphp'php]php php php=php php'iPhonephp OSphp'php;
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_languagephp'php]php php=php trimphp(php$commentphp[php3php]php)php;
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'firmwarephp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php2php]php[php2php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php3php]php[php1php]php;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_buildphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php3php]php[php2php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Safari
php php php php php php php php ifphp php(issetphp(php$resultphp[php'othersphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php php=php=php php'AppleWebKitphp'php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_enginephp'php]php php=php php'AppleWebKitphp'php;
php php php php php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php php=php=php php'Versionphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[countphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php)php php-php php1php]php[php2php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$commentphp[php3php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_languagephp'php]php php=php trimphp(php$commentphp[php3php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$lastphp php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[countphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php)php php-php php1php]php[php1php]php;

php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php2php]php[php1php]php)php php|php|php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php2php]php[php1php]php php=php=php php'Safariphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php php&php&php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php php!php=php php'Versionphp'php php?php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php php:php php'Safariphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php php?php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php php:php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php2php]php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php2php]php[php1php]php;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php2php]php[php2php]php;

php php php php php php php php php php php php php php php php php php php php php/php/php mobilephp version
php php php php php php php php php php php php php php php php php php php php ifphp php(php$resultphp[php'browserphp_namephp'php]php php=php=php php'Mobilephp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php=php php'Safariphp php'php php.php php$resultphp[php'browserphp_namephp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php php=php=php php'Versionphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Forphp Safariphp <php php2php.php2php,php AppleWebKitphp versionphp givesphp thephp Safariphp version
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$resultphp[php'browserphp_versionphp'php]php,php php'php.php'php)php php>php php2php php|php|php php(intphp)php php$resultphp[php'browserphp_versionphp'php]php php>php php2php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$tempphp php=php explodephp(php'php.php'php,php php$resultphp[php'browserphp_versionphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$buildphp php=php php(intphp)php php$tempphp[php0php]php;
php php php php php php php php php php php php php php php php php php php php php$awkVersionphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php4php8php php php=php>php php'php0php.php8php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php7php3php php php=php>php php'php0php.php9php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php8php5php php php=php>php php'php1php.php0php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php1php0php3php php=php>php php'php1php.php1php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php1php2php4php php=php>php php'php1php.php2php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php3php0php0php php=php>php php'php1php.php3php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php4php0php0php php=php>php php'php2php.php0php'php,
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$awkVersionphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$buildphp php>php=php php$kphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$vphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Geckophp php(Firefoxphp orphp compatiblephp)
php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php php=php=php php'Geckophp'php)php php{
php php php php php php php php php php php php php php php php php$searchRVphp php=php truephp;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php)php php&php&php php!emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[countphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php)php php-php php1php]php[php2php]php)php php|php|php strposphp(strtolowerphp(php$resultphp[php'othersphp'php]php[php'fullphp'php]php)php,php php'operaphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$searchRVphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_enginephp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php;

php php php php php php php php php php php php php php php php php php php php php/php/php thephp namephp ofphp thephp applicationphp isphp atphp thephp endphp indepenently
php php php php php php php php php php php php php php php php php php php php php/php/php ofphp quantityphp ofphp informationphp inphp php$resultphp[php'othersphp'php]php[php'detailphp'php]
php php php php php php php php php php php php php php php php php php php php php$lastphp php=php countphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php)php php-php php1php;

php php php php php php php php php php php php php php php php php php php php php/php/php exceptionphp php:php ifphp thephp versionphp ofphp thephp lastphp informationphp is
php php php php php php php php php php php php php php php php php php php php php/php/php emptyphp wephp takephp thephp previousphp one
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php$lastphp]php[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$lastphp php-php-php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php exceptionphp php:php ifphp thephp lastphp onephp isphp php'Redphp Hatphp'php orphp php'Debianphp'php php=php>
php php php php php php php php php php php php php php php php php php php php php/php/php usephp rvphp:php tophp findphp browserphp_versionphp php*php/
php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php$lastphp]php[php1php]php,php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Debianphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'Hatphp'php,
php php php php php php php php php php php php php php php php php php php php php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$searchRVphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php$lastphp]php[php1php]php;
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php$lastphp]php[php2php]php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$commentphp[php4php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_buildphp'php]php php=php trimphp(php$commentphp[php4php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_languagephp'php]php php=php trimphp(php$commentphp[php3php]php)php;

php php php php php php php php php php php php php php php php php php php php php/php/php Netscape
php php php php php php php php php php php php php php php php php php php php ifphp php(php$resultphp[php'browserphp_namephp'php]php php=php=php php'Navigatorphp'php php|php|php php$resultphp[php'browserphp_namephp'php]php php=php=php php'Netscapephp6php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php=php php'Netscapephp'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$searchRVphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Mozillaphp alonephp php:php thephp versionphp isphp identifiedphp byphp rvphp:
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php=php php'Mozillaphp'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$resultphp[php'commentphp'php]php[php'detailphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$resultphp[php'commentphp'php]php[php'detailphp'php]php asphp php$rvphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$rvphp,php php'rvphp:php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php trimphp(strphp_replacephp(php'rvphp:php'php,php php'php'php,php php$rvphp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Netscape
php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php php=php=php php'Netscapephp'php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php'Netscapephp'php;
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php2php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Opera
php php php php php php php php php php php php php/php/php Operaphp:php enginephp Presto
php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php php=php=php php'Prestophp'php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_enginephp'php]php php=php php'Prestophp'php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php2php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php UAphp endsphp withphp php'Operaphp Xphp.XXphp'
php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php php=php=php php'Operaphp'php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php php php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php;
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php1php]php[php1php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Operaphp Mini
php php php php php php php php php php php php ifphp php(issetphp(php$resultphp[php"browserphp_tokenphp"php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$resultphp[php"browserphp_tokenphp"php]php,php php'Operaphp Miniphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_namephp'php]php php=php php'Operaphp Miniphp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Symbian
php php php php php php php php php php php php ifphp php(php$resultphp[php'othersphp'php]php[php'detailphp'php]php[php0php]php[php1php]php php=php=php php'SymbianOSphp'php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'devicephp_osphp_tokenphp'php]php php=php php'SymbianOSphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php UAphp endsphp withphp php'Operaphp Xphp.XXphp'
php php php php php php php php ifphp php(issetphp(php$resultphp[php'browserphp_namephp'php]php)php php&php&php issetphp(php$resultphp[php'browserphp_enginephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$resultphp[php'browserphp_namephp'php]php php=php=php php'Operaphp'php php&php&php php$resultphp[php'browserphp_enginephp'php]php php=php=php php'Geckophp'php php&php&php emptyphp(php$resultphp[php'browserphp_versionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_versionphp'php]php php=php php$resultphp[php'othersphp'php]php[php'detailphp'php]php[countphp(php$resultphp[php'othersphp'php]php[php'detailphp'php]php)php php-php php1php]php[php1php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php cleanup
php php php php php php php php ifphp php(issetphp(php$resultphp[php'browserphp_versionphp'php]php)php php&php&php issetphp(php$resultphp[php'browserphp_buildphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$resultphp[php'browserphp_versionphp'php]php php=php=php php$resultphp[php'browserphp_buildphp'php]php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$resultphp[php'browserphp_buildphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php compatibility
php php php php php php php php php$compatibilityphp[php'AppleWebKitphp'php]php php=php php'Safariphp'php;
php php php php php php php php php$compatibilityphp[php'Geckophp'php]php php php php php php php php=php php'Firefoxphp'php;
php php php php php php php php php$compatibilityphp[php'MSIEphp'php]php php php php php php php php php=php php'Internetphp Explorerphp'php;
php php php php php php php php php$compatibilityphp[php'Prestophp'php]php php php php php php php=php php'Operaphp'php;
php php php php php php php php ifphp php(php!emptyphp(php$resultphp[php'browserphp_enginephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$compatibilityphp[php$resultphp[php'browserphp_enginephp'php]php]php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp[php'browserphp_compatibilityphp'php]php php=php php$compatibilityphp[php$resultphp[php'browserphp_enginephp'php]php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ksortphp(php$resultphp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp thephp Featuresphp Adapterphp ifphp itphp'sphp definedphp inphp thephp php$configphp array
php php php php php php*php Otherwisephp,php nothingphp isphp done
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$browserTypephp Browserphp type
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadFeaturesAdapterphp(php)
php php php php php{
php php php php php php php php php$configphp php php php php php php=php php$thisphp-php>php_configphp;
php php php php php php php php php$browserTypephp php=php php$thisphp-php>getTypephp(php)php;
php php php php php php php php ifphp php(php!issetphp(php$configphp[php$browserTypephp]php)php php|php|php php!issetphp(php$configphp[php$browserTypephp]php[php'featuresphp'php]php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$configphp php=php php$configphp[php$browserTypephp]php[php'featuresphp'php]php;

php php php php php php php php ifphp php(emptyphp(php$configphp[php'classnamephp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Exceptionphp(php'Thephp php'php php.php php$thisphp-php>getTypephp(php)php php.php php'php featuresphp adapterphp mustphp havephp aphp php"classnamephp"php configphp parameterphp definedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$classNamephp php=php php$configphp[php'classnamephp'php]php;
php php php php php php php php ifphp php(php!classphp_existsphp(php$classNamephp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$configphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$pathphp php=php php$configphp[php'pathphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Exceptionphp(php'Thephp php'php php.php php$thisphp-php>getTypephp(php)php php.php php'php featuresphp adapterphp mustphp havephp aphp php"pathphp"php configphp parameterphp definedphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(falsephp php=php=php=php includephp_oncephp php(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Exceptionphp(php'Thephp php'php php.php php$thisphp-php>getTypephp(php)php php.php php'php featuresphp adapterphp pathphp thatphp doesphp notphp existphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp callphp_userphp_funcphp(arrayphp(php$classNamephp,php php'getFromRequestphp'php)php,php php$thisphp-php>php_serverphp,php php$thisphp-php>php_configphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp imagephp formatphp support
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImageFormatSupportphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_imagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp maximumphp imagephp heightphp supportedphp byphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getMaxImageHeightphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp maximumphp imagephp widthphp supportedphp byphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getMaxImageWidthphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp physicalphp screenphp heightphp ofphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getPhysicalScreenHeightphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp physicalphp screenphp widthphp ofphp thisphp device
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getPhysicalScreenWidthphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp preferredphp markupphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPreferredMarkupphp(php)
php php php php php{
php php php php php php php php returnphp php'xhtmlphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp supportedphp Xphp/HTMLphp version
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getXhtmlSupportLevelphp(php)
php php php php php{
php php php php php php php php returnphp php4php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp supportphp Flashphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasFlashSupportphp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp supportphp PDFphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPdfSupportphp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp havephp aphp phonephp numberphp associatedphp withphp itphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPhoneNumberphp(php)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp devicephp supportphp HTTPSphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp httpsSupportphp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp browserphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBrowserphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_browserphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp browserphp version
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBrowserVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_browserVersionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp userphp agentphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUserAgentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_userAgentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp thephp php$php_images
php php php php php php*php/
php php php php publicphp functionphp getImagesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_imagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$browser
php php php php php php*php/
php php php php publicphp functionphp setBrowserphp(php$browserphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_browserphp php=php php$browserphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$browserVersion
php php php php php php*php/
php php php php publicphp functionphp setBrowserVersionphp(php$browserVersionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_browserVersionphp php=php php$browserVersionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$userAgent
php php php php php php*php/
php php php php publicphp functionphp setUserAgentphp(php$userAgentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_userAgentphp php=php php$userAgentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp arrayphp php$php_images
php php php php php php*php/
php php php php publicphp functionphp setImagesphp(php$php_imagesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_imagesphp php=php php$php_imagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Matchphp aphp userphp agentphp stringphp againstphp aphp listphp ofphp signatures
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userAgent
php php php php php php*php php@paramphp php arrayphp php$signatures
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_matchAgentAgainstSignaturesphp(php$userAgentphp,php php$signaturesphp)
php php php php php{
php php php php php php php php php$userAgentphp php=php strtolowerphp(php$userAgentphp)php;
php php php php php php php php foreachphp php(php$signaturesphp asphp php$signaturephp)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$signaturephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(strposphp(php$userAgentphp,php php$signaturephp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Browserphp signaturephp wasphp foundphp inphp userphp agentphp string
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}
php}
