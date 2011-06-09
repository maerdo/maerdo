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
php php*php php@versionphp php php php php$Idphp:php ArgumentParserphp.phpphp php2php2php8php7php7php php2php0php1php0php-php0php8php-php2php1php php1php9php:php5php3php:php1php4Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Consolephp_GetOpt
php php*php/
requirephp_oncephp php'Zendphp/Consolephp/Getoptphp.phpphp'php;

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
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ArgumentParserphp implementsphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Holdsphp thephp manifestphp repositoryphp takenphp fromphp thephp registryphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Manifestphp_Repository
php php php php php php*php/
php php php php php php protectedphp php$php_manifestRepositoryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Clientphp_Request
php php php php php php*php/
php php php php protectedphp php$php_requestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*php#php@php+
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_argumentsOriginalphp php=php nullphp;
php php php php protectedphp php$php_argumentsWorkingphp php php=php nullphp;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_helpphp php=php falsephp;
php php php php protectedphp php$php_helpKnownActionphp php=php falsephp;
php php php php protectedphp php$php_helpKnownProviderphp php=php falsephp;
php php php php protectedphp php$php_helpKnownSpecialtyphp php=php falsephp;


php php php php php/php*php*
php php php php php php*php setArguments
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$arguments
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ArgumentParser
php php php php php php*php/
php php php php publicphp functionphp setArgumentsphp(Arrayphp php$argumentsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_argumentsOriginalphp php=php php$thisphp-php>php_argumentsWorkingphp php=php php$argumentsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ArgumentParser
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php/php/php getphp thephp clientphp registry
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;

php php php php php php php php php/php/php setphp manifestphp repositoryphp,php requestphp,php responsephp forphp easyphp access
php php php php php php php php php$thisphp-php>php_manifestRepositoryphp php=php php$thisphp-php>php_registryphp-php>getManifestRepositoryphp(php)php;
php php php php php php php php php$thisphp-php>php_requestphp php php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;
php php php php php php php php php$thisphp-php>php_responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp(php)php php-php Thisphp methodphp doesphp thephp workphp ofphp parsingphp thephp argumentsphp intophp thephp enpoointphp requestphp,
php php php php php php*php thisphp willphp alsophp php(duringphp helpphp operationsphp)php fillphp thephp responsephp inphp withphp informationphp asphp needed
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp parsephp(php)
php php php php php{

php php php php php php php php ifphp php(php$thisphp-php>php_requestphp php=php=php nullphp php|php|php php$thisphp-php>php_responsephp php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Thephp clientphp registryphp mustphp havephp bothphp aphp requestphp andphp responsephp registeredphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php setupphp thephp helpphp options
php php php php php php php php php$helpResponseOptionsphp php=php arrayphp(php)php;

php php php php php php php php php/php/php checkphp tophp seephp ifphp thephp firstphp cliphp argphp isphp thephp scriptphp name
php php php php php php php php ifphp php(php$thisphp-php>php_argumentsWorkingphp[php0php]php php=php=php php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php php]php)php php{
php php php php php php php php php php php php arrayphp_shiftphp(php$thisphp-php>php_argumentsWorkingphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php processphp globalphp options
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_parseGlobalPartphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp php$exceptionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(arrayphp(php'errorphp'php php=php>php php$exceptionphp-php>getMessagephp(php)php)php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php ensurephp therephp arephp argumentsphp left
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_argumentsWorkingphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchablephp(falsephp)php;php php/php/php atphp thisphp pointphp requestphp isphp notphp dispatchable

php php php php php php php php php php php php php/php/php checkphp tophp seephp ifphp thisphp wasphp aphp helpphp request
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_helpphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(arrayphp(php'errorphp'php php=php>php php'Anphp actionphp andphp providerphp isphp requiredphp.php'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php processphp thephp actionphp partphp ofphp thephp commandphp line
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_parseActionPartphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp php$exceptionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchablephp(falsephp)php;
php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(arrayphp(php'errorphp'php php=php>php php$exceptionphp-php>getMessagephp(php)php)php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_helpKnownActionphp)php php{
php php php php php php php php php php php php php$helpResponseOptionsphp php=php arrayphp_mergephp(
php php php php php php php php php php php php php php php php php$helpResponseOptionsphp,
php php php php php php php php php php php php php php php php arrayphp(php'actionNamephp'php php=php>php php$thisphp-php>php_requestphp-php>getActionNamephp(php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php*php php@TODOphp Actionphp Parameterphp Requirementsphp php*php/

php php php php php php php php php/php/php makephp surephp therephp arephp morephp php"wordsphp"php onphp thephp commandphp line
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_argumentsWorkingphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchablephp(falsephp)php;php php/php/php atphp thisphp pointphp requestphp isphp notphp dispatchable

php php php php php php php php php php php php php/php/php checkphp tophp seephp ifphp thisphp isphp aphp helpphp request
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_helpphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(php$helpResponseOptionsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(arrayphp_mergephp(php$helpResponseOptionsphp,php arrayphp(php'errorphp'php php=php>php php'Aphp providerphp isphp requiredphp.php'php)php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp;
php php php php php php php php php}


php php php php php php php php php/php/php processphp thephp providerphp partphp ofphp thephp commandphp line
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_parseProviderPartphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp php$exceptionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchablephp(falsephp)php;
php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(arrayphp(php'errorphp'php php=php>php php$exceptionphp-php>getMessagephp(php)php)php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_helpKnownProviderphp)php php{
php php php php php php php php php php php php php$helpResponseOptionsphp php=php arrayphp_mergephp(
php php php php php php php php php php php php php php php php php$helpResponseOptionsphp,
php php php php php php php php php php php php php php php php arrayphp(php'providerNamephp'php php=php>php php$thisphp-php>php_requestphp-php>getProviderNamephp(php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_helpKnownSpecialtyphp)php php{
php php php php php php php php php php php php php$helpResponseOptionsphp php=php arrayphp_mergephp(
php php php php php php php php php php php php php php php php php$helpResponseOptionsphp,
php php php php php php php php php php php php php php php php arrayphp(php'specialtyNamephp'php php=php>php php$thisphp-php>php_requestphp-php>getSpecialtyNamephp(php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp therephp arephp argumentsphp onphp thephp commandphp linephp,php letsphp processphp themphp asphp providerphp options
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_argumentsWorkingphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_parseProviderOptionsPartphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp therephp isphp stillphp argumentsphp lingeringphp aroundphp,php wephp canphp assumephp somethingphp isphp wrong
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_argumentsWorkingphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchablephp(falsephp)php;php php/php/php atphp thisphp pointphp requestphp isphp notphp dispatchable
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_helpphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(php$helpResponseOptionsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(arrayphp_mergephp(
php php php php php php php php php php php php php php php php php php php php php$helpResponseOptionsphp,
php php php php php php php php php php php php php php php php php php php php arrayphp(php'errorphp'php php=php>php php'Unknownphp argumentsphp leftphp onphp thephp commandphp linephp:php php'php php.php implodephp(php'php php'php,php php$thisphp-php>php_argumentsWorkingphp)php)
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php everythingphp wasphp processedphp andphp thisphp isphp aphp requestphp forphp helpphp information
php php php php php php php php ifphp php(php$thisphp-php>php_helpphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchablephp(falsephp)php;php php/php/php atphp thisphp pointphp requestphp isphp notphp dispatchable
php php php php php php php php php php php php php$thisphp-php>php_createHelpResponsephp(php$helpResponseOptionsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp routinephp forphp parsingphp globalphp optionsphp fromphp thephp commandphp line
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php protectedphp functionphp php_parseGlobalPartphp(php)
php php php php php{
php php php php php php php php php$getoptOptionsphp php=php arrayphp(php)php;
php php php php php php php php php$getoptOptionsphp[php'helpphp|hphp'php]php php php php php=php php'HELPphp'php;
php php php php php php php php php$getoptOptionsphp[php'verbosephp|vphp'php]php php=php php'VERBOSEphp'php;
php php php php php php php php php$getoptOptionsphp[php'pretendphp|pphp'php]php php=php php'PRETENDphp'php;
php php php php php php php php php$getoptOptionsphp[php'debugphp|dphp'php]php php php php=php php'DEBUGphp'php;
php php php php php php php php php$getoptParserphp php=php newphp Zendphp_Consolephp_Getoptphp(php$getoptOptionsphp,php php$thisphp-php>php_argumentsWorkingphp,php arrayphp(php'parseAllphp'php php=php>php falsephp)php)php;

php php php php php php php php php/php/php php@todophp catchphp anyphp exceptionsphp here
php php php php php php php php php$getoptParserphp-php>parsephp(php)php;

php php php php php php php php foreachphp php(php$getoptParserphp-php>getOptionsphp(php)php asphp php$optionphp)php php{
php php php php php php php php php php php php ifphp php(php$optionphp php=php=php php'pretendphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setPretendphp(truephp)php;
php php php php php php php php php php php php php}php elseifphp php(php$optionphp php=php=php php'debugphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDebugphp(truephp)php;
php php php php php php php php php php php php php}php elseifphp php(php$optionphp php=php=php php'verbosephp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setVerbosephp(truephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$propertyphp php=php php'php_php'php.php$optionphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php{php$propertyphp}php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_argumentsWorkingphp php=php php$getoptParserphp-php>getRemainingArgsphp(php)php;

php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp routinephp forphp parsingphp thephp actionphp namephp fromphp thephp arguments
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php protectedphp functionphp php_parseActionPartphp(php)
php php php php php{
php php php php php php php php php/php/php thephp nextphp php"wordphp"php shouldphp bephp thephp actionphp name
php php php php php php php php php$consoleActionNamephp php=php arrayphp_shiftphp(php$thisphp-php>php_argumentsWorkingphp)php;

php php php php php php php php ifphp php(php$consoleActionNamephp php=php=php php'php?php'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_helpphp php=php truephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$actionSearchCriteriaphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'actionNamephp'php,
php php php php php php php php php php php php php'valuephp'php php php php php php php=php>php php$consoleActionNamephp,
php php php php php php php php php php php php php'clientNamephp'php php=php>php php'consolephp'
php php php php php php php php php php php php php)php;

php php php php php php php php php/php/php isphp thephp actionphp namephp validphp?
php php php php php php php php php$actionMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(php$actionSearchCriteriaphp)php;

php php php php php php php php php/php/php checkphp forphp normalizedphp namesphp asphp wellphp php(allphp lowerphp,php nophp separatorsphp)
php php php php php php php php ifphp php(php!php$actionMetadataphp)php php{
php php php php php php php php php php php php php$actionSearchCriteriaphp[php'namephp'php]php php php=php php'normalizedActionNamephp'php;
php php php php php php php php php php php php php$actionSearchCriteriaphp[php'valuephp'php]php php=php strtolowerphp(strphp_replacephp(arrayphp(php'php-php'php,php php'php_php'php)php,php php'php'php,php php$consoleActionNamephp)php)php;
php php php php php php php php php php php php php$actionSearchCriteriaphp[php'clientNamephp'php]php php=php php'allphp'php;
php php php php php php php php php php php php php$actionMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(php$actionSearchCriteriaphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp nophp actionphp,php handlephp error
php php php php php php php php ifphp php(php!php$actionMetadataphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Actionphp php\php'php'php php.php php$consoleActionNamephp php.php php'php\php'php isphp notphp aphp validphp actionphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php preparephp actionphp requestphp name
php php php php php php php php php$thisphp-php>php_helpKnownActionphp php=php truephp;
php php php php php php php php php$thisphp-php>php_requestphp-php>setActionNamephp(php$actionMetadataphp-php>getActionNamephp(php)php)php;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp routinephp forphp parsingphp thephp providerphp partphp ofphp thephp commandphp linephp arguments
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php protectedphp functionphp php_parseProviderPartphp(php)
php php php php php{
php php php php php php php php php/php/php getphp thephp cliphp php"wordphp"php asphp thephp providerphp namephp fromphp commandphp line
php php php php php php php php php$consoleProviderFullphp php=php arrayphp_shiftphp(php$thisphp-php>php_argumentsWorkingphp)php;
php php php php php php php php php$consoleSpecialtyNamephp php=php php'php_globalphp'php;

php php php php php php php php php/php/php ifphp therephp isphp notationphp forphp specialtiesphp?php Ifphp sophp,php breakphp themphp up
php php php php php php php php ifphp php(strstrphp(php$consoleProviderFullphp,php php'php.php'php)php)php php{
php php php php php php php php php php php php listphp(php$consoleProviderNamephp,php php$consoleSpecialtyNamephp)php php=php explodephp(php'php.php'php,php php$consoleProviderFullphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$consoleProviderNamephp php=php php$consoleProviderFullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$consoleProviderNamephp php=php=php php'php?php'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_helpphp php=php truephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$providerSearchCriteriaphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'providerNamephp'php,
php php php php php php php php php php php php php'valuephp'php php php php php php php=php>php php$consoleProviderNamephp,
php php php php php php php php php php php php php'clientNamephp'php php=php>php php'consolephp'
php php php php php php php php php php php php php)php;

php php php php php php php php php/php/php getphp thephp cliphp providerphp namesphp fromphp thephp manifest
php php php php php php php php php$providerMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(php$providerSearchCriteriaphp)php;

php php php php php php php php php/php/php checkphp forphp normalizedphp namesphp asphp wellphp php(allphp lowerphp,php nophp separatorsphp)
php php php php php php php php ifphp php(php!php$providerMetadataphp)php php{
php php php php php php php php php php php php php$providerSearchCriteriaphp[php'namephp'php]php php php=php php'normalizedProviderNamephp'php;
php php php php php php php php php php php php php$providerSearchCriteriaphp[php'valuephp'php]php php=php strtolowerphp(strphp_replacephp(arrayphp(php'php-php'php,php php'php_php'php)php,php php'php'php,php php$consoleProviderNamephp)php)php;
php php php php php php php php php php php php php$providerSearchCriteriaphp[php'clientNamephp'php]php php=php php'allphp'php;
php php php php php php php php php php php php php$providerMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(php$providerSearchCriteriaphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$providerMetadataphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Providerphp php\php'php'php php.php php$consoleProviderFullphp php.php php'php\php'php isphp notphp aphp validphp providerphp.php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_helpKnownProviderphp php=php truephp;
php php php php php php php php php$thisphp-php>php_requestphp-php>setProviderNamephp(php$providerMetadataphp-php>getProviderNamephp(php)php)php;

php php php php php php php php ifphp php(php$consoleSpecialtyNamephp php=php=php php'php?php'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_helpphp php=php truephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$providerSpecialtySearchCriteriaphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php'namephp'php php php php php php php php php php=php>php php'specialtyNamephp'php,
php php php php php php php php php php php php php'valuephp'php php php php php php php php php=php>php php$consoleSpecialtyNamephp,
php php php php php php php php php php php php php'providerNamephp'php php=php>php php$providerMetadataphp-php>getProviderNamephp(php)php,
php php php php php php php php php php php php php'clientNamephp'php php php php=php>php php'consolephp'
php php php php php php php php php php php php php)php;

php php php php php php php php php$providerSpecialtyMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(php$providerSpecialtySearchCriteriaphp)php;

php php php php php php php php ifphp php(php!php$providerSpecialtyMetadataphp)php php{
php php php php php php php php php php php php php$providerSpecialtySearchCriteriaphp[php'namephp'php]php php=php php'normalizedSpecialtyNamephp'php;
php php php php php php php php php php php php php$providerSpecialtySearchCriteriaphp[php'valuephp'php]php php=php strtolowerphp(strphp_replacephp(arrayphp(php'php-php'php,php php'php_php'php)php,php php'php'php,php php$consoleSpecialtyNamephp)php)php;
php php php php php php php php php php php php php$providerSpecialtySearchCriteriaphp[php'clientNamephp'php]php php=php php'allphp'php;
php php php php php php php php php php php php php$providerSpecialtyMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(php$providerSpecialtySearchCriteriaphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$providerSpecialtyMetadataphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Providerphp php\php'php'php php.php php$consoleSpecialtyNamephp php.php php'php\php'php isphp notphp aphp validphp specialtyphp.php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_helpKnownSpecialtyphp php=php truephp;
php php php php php php php php php$thisphp-php>php_requestphp-php>setSpecialtyNamephp(php$providerSpecialtyMetadataphp-php>getSpecialtyNamephp(php)php)php;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp routinephp forphp parsingphp thephp providerphp optionsphp fromphp thephp commandphp line
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php protectedphp functionphp php_parseProviderOptionsPartphp(php)
php php php php php{
php php php php php php php php ifphp php(currentphp(php$thisphp-php>php_argumentsWorkingphp)php php=php=php php'php?php'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_helpphp php=php truephp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$searchParamsphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php'providerNamephp'php php php=php>php php$thisphp-php>php_requestphp-php>getProviderNamephp(php)php,
php php php php php php php php php php php php php'actionNamephp'php php php php php=php>php php$thisphp-php>php_requestphp-php>getActionNamephp(php)php,
php php php php php php php php php php php php php'specialtyNamephp'php php=php>php php$thisphp-php>php_requestphp-php>getSpecialtyNamephp(php)php,
php php php php php php php php php php php php php'clientNamephp'php php php php php=php>php php'consolephp'
php php php php php php php php php php php php php)php;

php php php php php php php php php$actionableMethodLongParamsMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(
php php php php php php php php php php php php arrayphp_mergephp(php$searchParamsphp,php arrayphp(php'namephp'php php=php>php php'actionableMethodLongParamsphp'php)php)
php php php php php php php php php php php php php)php;

php php php php php php php php php$actionableMethodShortParamsMetadataphp php=php php$thisphp-php>php_manifestRepositoryphp-php>getMetadataphp(
php php php php php php php php php php php php arrayphp_mergephp(php$searchParamsphp,php arrayphp(php'namephp'php php=php>php php'actionableMethodShortParamsphp'php)php)
php php php php php php php php php php php php php)php;

php php php php php php php php php$paramNameShortValuesphp php=php php$actionableMethodShortParamsMetadataphp-php>getValuephp(php)php;

php php php php php php php php php$getoptOptionsphp php=php arrayphp(php)php;
php php php php php php php php php$wordArgumentsphp php=php arrayphp(php)php;
php php php php php php php php php$longParamCanonicalNamesphp php=php arrayphp(php)php;

php php php php php php php php php$actionableMethodLongParamsMetadataReferencephp php=php php$actionableMethodLongParamsMetadataphp-php>getReferencephp(php)php;
php php php php php php php php foreachphp php(php$actionableMethodLongParamsMetadataphp-php>getValuephp(php)php asphp php$parameterNameLongphp php=php>php php$consoleParameterNameLongphp)php php{
php php php php php php php php php php php php php$optionConfigphp php=php php$consoleParameterNameLongphp php.php php'php|php'php;

php php php php php php php php php php php php php$parameterInfophp php=php php$actionableMethodLongParamsMetadataReferencephp[php'parameterInfophp'php]php[php$parameterNameLongphp]php;

php php php php php php php php php php php php php/php/php processphp ParameterInfophp intophp arrayphp forphp commandphp linephp optionphp matching
php php php php php php php php php php php php ifphp php(php$parameterInfophp[php'typephp'php]php php=php=php php'stringphp'php php|php|php php$parameterInfophp[php'typephp'php]php php=php=php php'boolphp'php)php php{
php php php php php php php php php php php php php php php php php$optionConfigphp php.php=php php$paramNameShortValuesphp[php$parameterNameLongphp]
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php(php(php$parameterInfophp[php'optionalphp'php]php)php php?php php'php-php'php php:php php'php=php'php)php php.php php'sphp'php;
php php php php php php php php php php php php php}php elseifphp php(inphp_arrayphp(php$parameterInfophp[php'typephp'php]php,php arrayphp(php'intphp'php,php php'integerphp'php,php php'floatphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$optionConfigphp php.php=php php$paramNameShortValuesphp[php$parameterNameLongphp]
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php(php(php$parameterInfophp[php'optionalphp'php]php)php php?php php'php-php'php php:php php'php=php'php)php php.php php'iphp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$optionConfigphp php.php=php php$paramNameShortValuesphp[php$parameterNameLongphp]php php.php php'php-sphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$getoptOptionsphp[php$optionConfigphp]php php=php php(php$parameterInfophp[php'descriptionphp'php]php php!php=php php'php'php)php php?php php$parameterInfophp[php'descriptionphp'php]php php:php php'Nophp descriptionphp availablephp.php'php;


php php php php php php php php php php php php php/php/php processphp ParameterInfophp intophp arrayphp forphp commandphp linephp WORDphp php(argumentphp)php matching
php php php php php php php php php php php php php$wordArgumentsphp[php$parameterInfophp[php'positionphp'php]php]php[php'parameterNamephp'php]php php=php php$parameterInfophp[php'namephp'php]php;
php php php php php php php php php php php php php$wordArgumentsphp[php$parameterInfophp[php'positionphp'php]php]php[php'optionalphp'php]php php php php php php php=php php$parameterInfophp[php'optionalphp'php]php;
php php php php php php php php php php php php php$wordArgumentsphp[php$parameterInfophp[php'positionphp'php]php]php[php'typephp'php]php php php php php php php php php php php=php php$parameterInfophp[php'typephp'php]php;

php php php php php php php php php php php php php/php/php keepphp aphp translationphp ofphp consolephp tophp canonicalphp names
php php php php php php php php php php php php php$longParamCanonicalNamesphp[php$consoleParameterNameLongphp]php php=php php$parameterNameLongphp;
php php php php php php php php php}


php php php php php php php php ifphp php(php!php$getoptOptionsphp)php php{
php php php php php php php php php php php php php/php/php nophp optionsphp tophp parsephp herephp,php return
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp nonphp-optionphp argumentsphp existphp,php attemptphp tophp processphp themphp beforephp processingphp options
php php php php php php php php php$wordStackphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php(php$wordOnTopphp php=php arrayphp_shiftphp(php$thisphp-php>php_argumentsWorkingphp)php)php)php php{
php php php php php php php php php php php php ifphp php(substrphp(php$wordOnTopphp,php php0php,php php1php)php php!php=php php'php-php'php)php php{
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$wordStackphp,php php$wordOnTopphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php putphp wordphp backphp onphp stackphp andphp movephp on
php php php php php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_argumentsWorkingphp,php php$wordOnTopphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$wordStackphp)php php=php=php countphp(php$wordArgumentsphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php whenphp wephp getphp atphp mostphp thephp numberphp ofphp argumentsphp wephp arephp expecting
php php php php php php php php php php php php php php php php php/php/php thenphp breakphp outphp.
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php ifphp php(php$wordStackphp php&php&php php$wordArgumentsphp)php php{
php php php php php php php php php php php php forphp php(php$wordIndexphp php=php php1php;php php$wordIndexphp <php=php countphp(php$wordArgumentsphp)php;php php$wordIndexphp+php+php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$wordIndexphp-php1php,php php$wordStackphp)php php|php|php php!arrayphp_keyphp_existsphp(php$wordIndexphp,php php$wordArgumentsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setProviderParameterphp(php$wordArgumentsphp[php$wordIndexphp]php[php'parameterNamephp'php]php,php php$wordStackphp[php$wordIndexphp-php1php]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$wordStackphp[php$wordIndexphp-php1php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$getoptParserphp php=php newphp Zendphp_Consolephp_Getoptphp(php$getoptOptionsphp,php php$thisphp-php>php_argumentsWorkingphp,php arrayphp(php'parseAllphp'php php=php>php falsephp)php)php;
php php php php php php php php php$getoptParserphp-php>parsephp(php)php;
php php php php php php php php foreachphp php(php$getoptParserphp-php>getOptionsphp(php)php asphp php$optionphp)php php{
php php php php php php php php php php php php php$valuephp php=php php$getoptParserphp-php>getOptionphp(php$optionphp)php;
php php php php php php php php php php php php php$providerParamOptionphp php=php php$longParamCanonicalNamesphp[php$optionphp]php;
php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setProviderParameterphp(php$providerParamOptionphp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_argumentsWorkingphp php=php php$getoptParserphp-php>getRemainingArgsphp(php)php;

php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_createHelpResponse
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$options
php php php php php php*php/
php php php php protectedphp functionphp php_createHelpResponsephp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Consolephp/HelpSystemphp.phpphp'php;
php php php php php php php php php$helpSystemphp php=php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystemphp(php)php;
php php php php php php php php php$helpSystemphp-php>setRegistryphp(php$thisphp-php>php_registryphp)php;

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'errorphp'php]php)php)php php{
php php php php php php php php php php php php php$helpSystemphp-php>respondWithErrorMessagephp(php$optionsphp[php'errorphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'actionNamephp'php]php)php php&php&php issetphp(php$optionsphp[php'providerNamephp'php]php)php)php php{
php php php php php php php php php php php php php$helpSystemphp-php>respondWithSpecialtyAndParamHelpphp(php$optionsphp[php'providerNamephp'php]php,php php$optionsphp[php'actionNamephp'php]php)php;
php php php php php php php php php}php elseifphp php(issetphp(php$optionsphp[php'actionNamephp'php]php)php)php php{
php php php php php php php php php php php php php$helpSystemphp-php>respondWithActionHelpphp(php$optionsphp[php'actionNamephp'php]php)php;
php php php php php php php php php}php elseifphp php(issetphp(php$optionsphp[php'providerNamephp'php]php)php)php php{
php php php php php php php php php php php php php$helpSystemphp-php>respondWithProviderHelpphp(php$optionsphp[php'providerNamephp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$helpSystemphp-php>respondWithGeneralHelpphp(php)php;
php php php php php php php php php}

php php php php php}

php}
