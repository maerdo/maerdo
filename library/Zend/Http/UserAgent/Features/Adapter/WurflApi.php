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

php/php*php*
php php*php Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Adapterphp.phpphp'php;

php/php*php*
php php*php Featuresphp adapterphp buildphp withphp thephp officialphp WURFLphp PHPphp API
php php*php Seephp installationphp instructionphp herephp php:php httpphp:php/php/wurflphp.sourceforgephp.netphp/nphpphp/
php php*php Downloadphp php:php httpphp:php/php/sourceforgephp.netphp/projectsphp/wurflphp/filesphp/WURFLphp PHPphp/php1php.php1php/wurflphp-phpphp-php1php.php1php.tarphp.gzphp/download
php php*
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapterphp_WurflApi
php php php php implementsphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Adapter
php{
php php php php constphp DEFAULTphp_APIphp_VERSIONphp php=php php'php1php.php1php'php;

php php php php php/php*php*
php php php php php php*php Getphp featuresphp fromphp request
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$requestphp php$php_SERVERphp variable
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getFromRequestphp(php$requestphp,php arrayphp php$configphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$configphp[php'wurflapiphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'php"wurflapiphp"php configurationphp isphp notphp definedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$configphp php=php php$configphp[php'wurflapiphp'php]php;

php php php php php php php php ifphp php(emptyphp(php$configphp[php'wurflphp_libphp_dirphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'Thephp php"wurflphp_libphp_dirphp"php parameterphp isphp notphp definedphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$configphp[php'wurflphp_configphp_filephp'php]php)php php&php&php emptyphp(php$configphp[php'wurflphp_configphp_arrayphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(php'Thephp php"wurflphp_configphp_filephp"php parameterphp isphp notphp definedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$configphp[php'wurflphp_apiphp_versionphp'php]php)php)php php{
php php php php php php php php php php php php php$configphp[php'wurflphp_apiphp_versionphp'php]php php=php selfphp:php:DEFAULTphp_APIphp_VERSIONphp;
php php php php php php php php php}

php php php php php php php php switchphp php(php$configphp[php'wurflphp_apiphp_versionphp'php]php)php php{
php php php php php php php php php php php php casephp php'php1php.php0php'php:
php php php php php php php php php php php php php php php php php/php/php Zendphp_Httpphp_UserAgentphp:php:php$configphp[php'wurflphp_configphp_filephp'php]php mustphp bephp anphp XMLphp file
php php php php php php php php php php php php php php php php requirephp_oncephp php(php$configphp[php'wurflphp_libphp_dirphp'php]php php.php php'WURFLManagerProviderphp.phpphp'php)php;
php php php php php php php php php php php php php php php php php$wurflManagerphp php=php WURFLphp_WURFLManagerProviderphp:php:getWURFLManagerphp(Zendphp_Httpphp_UserAgentphp:php:php$configphp[php'wurflphp_configphp_filephp'php]php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'php1php.php1php'php:
php php php php php php php php php php php php php php php php requirephp_oncephp php(php$configphp[php'wurflphp_libphp_dirphp'php]php php.php php'Applicationphp.phpphp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$configphp[php'wurflphp_configphp_filephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$wurflConfigphp php=php WURFLphp_Configurationphp_ConfigFactoryphp:php:createphp(php$configphp[php'wurflphp_configphp_filephp'php]php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(php!emptyphp(php$configphp[php'wurflphp_configphp_arrayphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$cphp php php php php php php php php php php php php=php php$configphp[php'wurflphp_configphp_arrayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$wurflConfigphp php php=php newphp WURFLphp_Configurationphp_InMemoryConfigphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$wurflConfigphp-php>wurflFilephp(php$cphp[php'wurflphp'php]php[php'mainphp-filephp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>wurflPatchphp(php$cphp[php'wurflphp'php]php[php'patchesphp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php>persistencephp(php$cphp[php'persistencephp'php]php[php'providerphp'php]php,php php$cphp[php'persistencephp'php]php[php'dirphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$wurflManagerFactoryphp php=php newphp WURFLphp_WURFLManagerFactoryphp(php$wurflConfigphp)php;
php php php php php php php php php php php php php php php php php$wurflManagerphp php=php php$wurflManagerFactoryphp-php>createphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Featuresphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Featuresphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php'Unknownphp APIphp versionphp php"php%sphp"php'php,
php php php php php php php php php php php php php php php php php php php php php$configphp[php'wurflphp_apiphp_versionphp'php]
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php php$devicephp php php php=php php$wurflManagerphp-php>getDeviceForHttpRequestphp(arrayphp_changephp_keyphp_casephp(php$requestphp,php CASEphp_UPPERphp)php)php;
php php php php php php php php php$featuresphp php=php php$devicephp-php>getAllCapabilitiesphp(php)php;
php php php php php php php php returnphp php$featuresphp;
php php php php php}
php}
