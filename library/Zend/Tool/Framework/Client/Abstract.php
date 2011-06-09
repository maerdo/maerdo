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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loaderphp_Autoloader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp/Autoloaderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Abstractphp implementsphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registry
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp callbackphp|null
php php php php php php*php/
php php php php protectedphp php$php_interactiveCallbackphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isInitializedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Log
php php php php php php*php/
php php php php protectedphp php$php_debugLoggerphp php=php nullphp;

php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php requirephp autoloader
php php php php php php php php Zendphp_Loaderphp_Autoloaderphp:php:getInstancephp(php)php;

php php php php php php php php php/php/php thisphp mightphp lookphp goofyphp,php butphp thisphp isphp settingphp upphp the
php php php php php php php php php/php/php registryphp forphp dependencyphp injectionphp intophp thephp client
php php php php php php php php php$registryphp php=php newphp Zendphp_Toolphp_Frameworkphp_Registryphp(php)php;
php php php php php php php php php$registryphp-php>setClientphp(php$thisphp)php;

php php php php php php php php php/php/php NOTEphp:php atphp thisphp momentphp,php php$thisphp-php>php_registryphp shouldphp containphp thephp registryphp object

php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$optionNamephp php=php>php php$optionValuephp)php php{
php php php php php php php php php php php php php$setMethodNamephp php=php php'setphp'php php.php php$optionNamephp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$setMethodNamephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$setMethodNamephp}php(php$optionValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)php php-php Returnphp thephp clientphp namephp whichphp canphp bephp usedphp to
php php php php php php*php queryphp thephp manifestphp ifphp needphp bephp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp clientphp name
php php php php php php*php/
php php php php abstractphp publicphp functionphp getNamephp(php)php;

php php php php php/php*php*
php php php php php php*php initializedphp(php)php php-php Thisphp willphp initializephp thephp clientphp forphp use
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp initializephp(php)
php php php php php{
php php php php php php php php php/php/php ifphp itsphp alreadyphp initializedphp,php nophp needphp tophp initializephp again
php php php php php php php php ifphp php(php$thisphp-php>php_isInitializedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php runphp anyphp preInit
php php php php php php php php php$thisphp-php>php_preInitphp(php)php;

php php php php php php php php php$manifestphp php=php php$thisphp-php>php_registryphp-php>getManifestRepositoryphp(php)php;
php php php php php php php php php$manifestphp-php>addManifestphp(newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Manifestphp(php)php)php;

php php php php php php php php php/php/php setupphp thephp debugphp log
php php php php php php php php ifphp php(php!php$thisphp-php>php_debugLoggerphp instanceofphp Zendphp_Logphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp.phpphp'php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Writerphp/Nullphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_debugLoggerphp php=php newphp Zendphp_Logphp(newphp Zendphp_Logphp_Writerphp_Nullphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php letphp thephp loaderphp loadphp,php thenphp thephp repositoriesphp processphp whatsphp beenphp loaded
php php php php php php php php php$thisphp-php>php_registryphp-php>getLoaderphp(php)php-php>loadphp(php)php;

php php php php php php php php php/php/php processphp thephp actionphp repository
php php php php php php php php php$thisphp-php>php_registryphp-php>getActionRepositoryphp(php)php-php>processphp(php)php;

php php php php php php php php php/php/php processphp thephp providerphp repository
php php php php php php php php php$thisphp-php>php_registryphp-php>getProviderRepositoryphp(php)php-php>processphp(php)php;

php php php php php php php php php/php/php processphp thephp manifestphp repository
php php php php php php php php php$thisphp-php>php_registryphp-php>getManifestRepositoryphp(php)php-php>processphp(php)php;

php php php php php php php php ifphp php(php$thisphp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Interactivephp/InputHandlerphp.phpphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_OutputInterfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>setContentCallbackphp(arrayphp(php$thisphp,php php'handleInteractiveOutputphp'php)php)php;
php php php php php php php php php}

php php php php php}


php php php php php/php*php*
php php php php php php*php Thisphp methodphp shouldphp bephp implementedphp byphp thephp clientphp implementationphp to
php php php php php php*php constructphp andphp setphp customphp inflectorsphp,php requestphp andphp responsephp objectsphp.
php php php php php php*php/
php php php php protectedphp functionphp php_preInitphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Thisphp methodphp php*mustphp*php bephp implementedphp byphp thephp clientphp implementationphp to
php php php php php php*php parsephp outphp andphp setupphp thephp requestphp objectsphp actionphp,php providerphp andphp parameter
php php php php php php*php informationphp.
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_preDispatchphp(php)php;

php php php php php/php*php*
php php php php php php*php Thisphp methodphp shouldphp bephp implementedphp byphp thephp clientphp implementationphp to
php php php php php php*php takephp thephp outputphp ofphp thephp responsephp objectphp andphp returnphp itphp php(inphp anphp client
php php php php php php*php specificphp wayphp)php backphp tophp thephp Toolingphp Clientphp.
php php php php php php*php/
php php php php protectedphp functionphp php_postDispatchphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)php php-php Requiredphp byphp thephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php php php php php*php interfacephp whichphp ensuresphp properphp registryphp dependencyphp resolution
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getRegistryphp(php)php;
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getRegistryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasInteractiveInputphp(php)php php-php Convienencephp methodphp forphp determiningphp ifphp this
php php php php php php*php clientphp canphp handlephp interactivephp inputphp,php andphp thusphp bephp ablephp tophp runphp the
php php php php php php*php promptInteractiveInput
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasInteractiveInputphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterfacephp)php;
php php php php php}

php php php php publicphp functionphp promptInteractiveInputphp(php$inputRequestphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasInteractiveInputphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'promptInteractivephp(php)php cannotphp bephp calledphp onphp aphp nonphp-interactivephp clientphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$inputHandlerphp php=php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputHandlerphp(php)php;
php php php php php php php php php$inputHandlerphp-php>setClientphp(php$thisphp)php;
php php php php php php php php php$inputHandlerphp-php>setInputRequestphp(php$inputRequestphp)php;
php php php php php php php php returnphp php$inputHandlerphp-php>handlephp(php)php;

php php php php php}

php php php php php/php*php*
php php php php php php*php Thisphp methodphp shouldphp bephp calledphp inphp orderphp tophp php"handlephp"php aphp Toolingphp Client
php php php php php php*php requestphp thatphp hasphp comephp tophp thephp clientphp thatphp hasphp beenphp implementedphp.
php php php php php php*php/
php php php php publicphp functionphp dispatchphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>initializephp(php)php;

php php php php php php php php tryphp php{

php php php php php php php php php php php php php$thisphp-php>php_preDispatchphp(php)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isDispatchablephp(php)php)php php{

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>getActionNamephp(php)php php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Clientphp failedphp tophp setupphp thephp actionphp namephp.php'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>getProviderNamephp(php)php php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Clientphp failedphp tophp setupphp thephp providerphp namephp.php'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_handleDispatchphp(php)php;

php php php php php php php php php php php php php}

php php php php php php php php php}php catchphp php(Exceptionphp php$exceptionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp-php>getResponsephp(php)php-php>setExceptionphp(php$exceptionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_postDispatchphp(php)php;
php php php php php}

php php php php publicphp functionphp convertToClientNamingphp(php$stringphp)
php php php php php{
php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php publicphp functionphp convertFromClientNamingphp(php$stringphp)
php php php php php{
php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php protectedphp functionphp php_handleDispatchphp(php)
php php php php php{
php php php php php php php php php/php/php getphp thephp providerphp repository
php php php php php php php php php$providerRepositoryphp php=php php$thisphp-php>php_registryphp-php>getProviderRepositoryphp(php)php;

php php php php php php php php php$requestphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;

php php php php php php php php php/php/php getphp thephp dispatchablephp providerphp signature
php php php php php php php php php$providerSignaturephp php=php php$providerRepositoryphp-php>getProviderSignaturephp(php$requestphp-php>getProviderNamephp(php)php)php;

php php php php php php php php php/php/php getphp thephp actualphp provider
php php php php php php php php php$providerphp php=php php$providerSignaturephp-php>getProviderphp(php)php;

php php php php php php php php php/php/php ensurephp thatphp wephp canphp pretendphp ifphp thisphp isphp aphp pretendphp request
php php php php php php php php ifphp php(php$requestphp-php>isPretendphp(php)php php&php&php php(php!php$providerphp instanceofphp Zendphp_Toolphp_Frameworkphp_Providerphp_Pretendablephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Dispatcherphp errorphp php-php providerphp doesphp notphp supportphp pretendphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp thephp actionphp name
php php php php php php php php php$actionNamephp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>getActionNamephp(php)php;
php php php php php php php php php$specialtyNamephp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>getSpecialtyNamephp(php)php;

php php php php php php php php ifphp php(php!php$actionableMethodphp php=php php$providerSignaturephp-php>getActionableMethodByActionNamephp(php$actionNamephp,php php$specialtyNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Dispatcherphp errorphp php-php actionablephp methodphp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp thephp actualphp methodphp andphp paramphp information
php php php php php php php php php$methodNamephp php php php php php php php=php php$actionableMethodphp[php'methodNamephp'php]php;
php php php php php php php php php$methodParametersphp php=php php$actionableMethodphp[php'parameterInfophp'php]php;

php php php php php php php php php/php/php getphp thephp providerphp params
php php php php php php php php php$requestParametersphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>getProviderParametersphp(php)php;

php php php php php php php php php/php/php php@todophp Thisphp seemsphp hackishphp,php determinephp ifphp therephp isphp aphp betterphp way
php php php php php php php php php$callParametersphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$methodParametersphp asphp php$methodParameterNamephp php=php>php php$methodParameterValuephp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$methodParameterNamephp,php php$requestParametersphp)php php&php&php php$methodParameterValuephp[php'optionalphp'php]php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp instanceofphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterfacephp)php php{
php php php php php php php php php php php php php php php php php php php php php$promptStingphp php=php php$thisphp-php>getMissingParameterPromptStringphp(php$providerphp,php php$actionableMethodphp[php'actionphp'php]php,php php$methodParameterValuephp[php'namephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$parameterPromptValuephp php=php php$thisphp-php>promptInteractiveInputphp(php$promptStingphp)php-php>getContentphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$parameterPromptValuephp php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Valuephp suppliedphp forphp requiredphp parameterphp php"php'php php.php php$methodParameterValuephp[php'namephp'php]php php.php php'php"php isphp emptyphp'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$callParametersphp[php]php php=php php$parameterPromptValuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Aphp requiredphp parameterphp php"php'php php.php php$methodParameterValuephp[php'namephp'php]php php.php php'php"php wasphp notphp suppliedphp.php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$callParametersphp[php]php php=php php(arrayphp_keyphp_existsphp(php$methodParameterNamephp,php php$requestParametersphp)php)php php?php php$requestParametersphp[php$methodParameterNamephp]php php:php php$methodParameterValuephp[php'defaultphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_handleDispatchExecutionphp(php$providerphp,php php$methodNamephp,php php$callParametersphp)php;
php php php php php}

php php php php protectedphp functionphp php_handleDispatchExecutionphp(php$classphp,php php$methodNamephp,php php$callParametersphp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$classphp,php php$methodNamephp)php)php php{
php php php php php php php php php php php php callphp_userphp_funcphp_arrayphp(arrayphp(php$classphp,php php$methodNamephp)php,php php$callParametersphp)php;
php php php php php php php php php}php elseifphp php(methodphp_existsphp(php$classphp,php php$methodNamephp php.php php'Actionphp'php)php)php php{
php php php php php php php php php php php php callphp_userphp_funcphp_arrayphp(arrayphp(php$classphp,php php$methodNamephp php.php php'Actionphp'php)php,php php$callParametersphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Notphp aphp supportedphp methodphp.php'php)php;
php php php php php php php php php}
php php php php php}

php}
