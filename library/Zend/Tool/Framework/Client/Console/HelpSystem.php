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
php php*php php@versionphp php php php php$Idphp:php HelpSystemphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php php$thisphp-php>php_responsephp php=php php$registryphp-php>getResponsephp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php respondWithErrorMessagephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$errorMessage
php php php php php php*php php@paramphp Exceptionphp php$exception
php php php php php php*php/
php php php php publicphp functionphp respondWithErrorMessagephp(php$errorMessagephp,php Exceptionphp php$exceptionphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php breakphp apartphp thephp messagephp intophp wrappedphp chunks
php php php php php php php php php$errorMessagesphp php=php explodephp(PHPphp_EOLphp,php wordwrapphp(php$errorMessagephp,php php7php0php,php PHPphp_EOLphp,php falsephp)php)php;

php php php php php php php php php$textphp php=php php'Anphp Errorphp Hasphp Occurredphp'php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php$textphp,php arrayphp(php'colorphp'php php=php>php arrayphp(php'hiWhitephp'php,php php'bgRedphp'php)php,php php'aligncenterphp'php php=php>php truephp)php)php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php$errorMessagephp,php arrayphp(php'indentionphp'php php=php>php php1php,php php'blockizephp'php php=php>php php7php2php,php php'colorphp'php php=php>php arrayphp(php'whitephp'php,php php'bgRedphp'php)php)php)php;

php php php php php php php php ifphp php(php$exceptionphp php&php&php php$thisphp-php>php_registryphp-php>getRequestphp(php)php-php>isDebugphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php$exceptionphp-php>getTraceAsStringphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(nullphp,php arrayphp(php'separatorphp'php php=php>php truephp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php respondWithGeneralHelpphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php publicphp functionphp respondWithGeneralHelpphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_respondWithHeaderphp(php)php;

php php php php php php php php php$noSeparatorphp php=php arrayphp(php'separatorphp'php php=php>php falsephp)php;

php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'Usagephp:php'php,php arrayphp(php'colorphp'php php=php>php php'greenphp'php)php)
php php php php php php php php php php php php php-php>appendContentphp(php'php php php php php'php,php php$noSeparatorphp)
php php php php php php php php php php php php php-php>appendContentphp(php'zfphp'php,php arrayphp_mergephp(arrayphp(php'colorphp'php php=php>php php'cyanphp'php)php,php php$noSeparatorphp)php)
php php php php php php php php php php php php php-php>appendContentphp(php'php php[php-php-globalphp-optsphp]php'php,php php$noSeparatorphp)
php php php php php php php php php php php php php-php>appendContentphp(php'php actionphp-namephp'php,php arrayphp_mergephp(arrayphp(php'colorphp'php php=php>php php'cyanphp'php)php,php php$noSeparatorphp)php)
php php php php php php php php php php php php php-php>appendContentphp(php'php php[php-php-actionphp-optsphp]php'php,php php$noSeparatorphp)
php php php php php php php php php php php php php-php>appendContentphp(php'php providerphp-namephp'php,php arrayphp_mergephp(arrayphp(php'colorphp'php php=php>php php'cyanphp'php)php,php php$noSeparatorphp)php)
php php php php php php php php php php php php php-php>appendContentphp(php'php php[php-php-providerphp-optsphp]php'php,php php$noSeparatorphp)
php php php php php php php php php php php php php-php>appendContentphp(php'php php[providerphp parametersphp php.php.php.php]php'php)
php php php php php php php php php php php php php-php>appendContentphp(php'php php php php Notephp:php Youphp mayphp usephp php"php?php"php inphp anyphp placephp ofphp thephp abovephp usagephp stringphp tophp askphp forphp morephp specificphp helpphp informationphp.php'php,php arrayphp(php'colorphp'php=php>php'yellowphp'php)php)
php php php php php php php php php php php php php-php>appendContentphp(php'php php php php Examplephp:php php"zfphp php?php versionphp"php willphp listphp allphp availablephp actionsphp forphp thephp versionphp providerphp.php'php,php arrayphp(php'colorphp'php=php>php'yellowphp'php,php php'separatorphp'php php=php>php php2php)php)
php php php php php php php php php php php php php-php>appendContentphp(php'Providersphp andphp theirphp actionsphp:php'php,php arrayphp(php'colorphp'php php=php>php php'greenphp'php)php)php;

php php php php php php php php php$thisphp-php>php_respondWithSystemInformationphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php respondWithActionHelpphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php publicphp functionphp respondWithActionHelpphp(php$actionNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_respondWithHeaderphp(php)php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'Providersphp thatphp supportphp thephp actionphp php"php'php php.php php$actionNamephp php.php php'php"php'php,php arrayphp(php'colorphp'php php=php>php php'greenphp'php)php)php;
php php php php php php php php php$thisphp-php>php_respondWithSystemInformationphp(nullphp,php php$actionNamephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php respondWithSpecialtyAndParamHelpphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerName
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php publicphp functionphp respondWithSpecialtyAndParamHelpphp(php$providerNamephp,php php$actionNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_respondWithHeaderphp(php)php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(
php php php php php php php php php php php php php'Detailsphp forphp actionphp php"php'php php.php php$actionNamephp php.php php'php"php andphp providerphp php"php'php php.php php$providerNamephp php.php php'php"php'php,
php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php php'greenphp'php)
php php php php php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>php_respondWithSystemInformationphp(php$providerNamephp,php php$actionNamephp,php truephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php respondWithProviderHelpphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerName
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php publicphp functionphp respondWithProviderHelpphp(php$providerNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_respondWithHeaderphp(php)php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'Actionsphp supportedphp byphp providerphp php"php'php php.php php$providerNamephp php.php php'php"php'php,php arrayphp(php'colorphp'php php=php>php php'greenphp'php)php)php;
php php php php php php php php php$thisphp-php>php_respondWithSystemInformationphp(php$providerNamephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_respondWithHeaderphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php protectedphp functionphp php_respondWithHeaderphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Version
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'Zendphp Frameworkphp'php,php arrayphp(php'colorphp'php php=php>php arrayphp(php'hiWhitephp'php)php,php php'separatorphp'php php=php>php falsephp)php)php;
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'php Commandphp Linephp Consolephp Toolphp vphp'php php.php Zendphp_Versionphp:php:VERSIONphp php.php php'php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_respondWithSystemInformationphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$providerNameFilter
php php php php php php*php php@paramphp stringphp php$actionNameFilter
php php php php php php*php php@paramphp boolphp php$includeAllSpecialties
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php protectedphp functionphp php_respondWithSystemInformationphp(php$providerNameFilterphp php=php nullphp,php php$actionNameFilterphp php=php nullphp,php php$includeAllSpecialtiesphp php=php falsephp)
php php php php php{
php php php php php php php php php$manifestphp php=php php$thisphp-php>php_registryphp-php>getManifestRepositoryphp(php)php;

php php php php php php php php php$providerMetadatasSearchphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'providerNamephp'php,
php php php php php php php php php php php php php'clientNamephp'php php=php>php php'consolephp'
php php php php php php php php php php php php php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$providerNameFilterphp)php)php php{
php php php php php php php php php php php php php$providerMetadatasSearchphp php=php arrayphp_mergephp(php$providerMetadatasSearchphp,php arrayphp(php'providerNamephp'php php=php>php php$providerNameFilterphp)php)php;
php php php php php php php php php}

php php php php php php php php php$actionMetadatasSearchphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'actionNamephp'php,
php php php php php php php php php php php php php'clientNamephp'php php=php>php php'consolephp'
php php php php php php php php php php php php php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$actionNameFilterphp)php)php php{
php php php php php php php php php php php php php$actionMetadatasSearchphp php=php arrayphp_mergephp(php$actionMetadatasSearchphp,php arrayphp(php'actionNamephp'php php=php>php php$actionNameFilterphp)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp thephp metadataphp'sphp forphp thephp thingsphp tophp display
php php php php php php php php php$displayProviderMetadatasphp php=php php$manifestphp-php>getMetadatasphp(php$providerMetadatasSearchphp)php;
php php php php php php php php php$displayActionMetadatasphp php=php php$manifestphp-php>getMetadatasphp(php$actionMetadatasSearchphp)php;

php php php php php php php php php/php/php createphp indexphp ofphp actionNames
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php countphp(php$displayActionMetadatasphp)php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$displayActionNamesphp[php]php php=php php$displayActionMetadatasphp[php$iphp]php-php>getActionNamephp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$displayProviderMetadatasphp asphp php$providerMetadataphp)php php{

php php php php php php php php php php php php php$providerNameDisplayedphp php=php falsephp;

php php php php php php php php php php php php php$providerNamephp php=php php$providerMetadataphp-php>getProviderNamephp(php)php;
php php php php php php php php php php php php php$providerSignaturephp php=php php$providerMetadataphp-php>getReferencephp(php)php;

php php php php php php php php php php php php foreachphp php(php$providerSignaturephp-php>getActionsphp(php)php asphp php$actionInfophp)php php{

php php php php php php php php php php php php php php php php php$actionNamephp php=php php$actionInfophp-php>getNamephp(php)php;

php php php php php php php php php php php php php php php php php/php/php checkphp tophp seephp ifphp thisphp actionphp namephp isphp valid
php php php php php php php php php php php php php php php php ifphp php(php(php$foundActionIndexphp php=php arrayphp_searchphp(php$actionNamephp,php php$displayActionNamesphp)php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$actionMetadataphp php=php php$displayActionMetadatasphp[php$foundActionIndexphp]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$specialtyMetadataphp php=php php$manifestphp-php>getMetadataphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php php php php=php>php php'specialtyNamephp'php,
php php php php php php php php php php php php php php php php php php php php php'providerNamephp'php php php=php>php php$providerNamephp,
php php php php php php php php php php php php php php php php php php php php php'specialtyNamephp'php php=php>php php'php_Globalphp'php,
php php php php php php php php php php php php php php php php php php php php php'clientNamephp'php php php php php=php>php php'consolephp'
php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php php php php php/php/php letsphp dophp thephp mainphp php_Globalphp actionphp first
php php php php php php php php php php php php php php php php php$actionableGlobalLongParamMetadataphp php=php php$manifestphp-php>getMetadataphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php php php php=php>php php'actionableMethodLongParamsphp'php,
php php php php php php php php php php php php php php php php php php php php php'providerNamephp'php php php=php>php php$providerNamephp,
php php php php php php php php php php php php php php php php php php php php php'specialtyNamephp'php php=php>php php'php_Globalphp'php,
php php php php php php php php php php php php php php php php php php php php php'actionNamephp'php php php php php=php>php php$actionNamephp,
php php php php php php php php php php php php php php php php php php php php php'clientNamephp'php php php php php=php>php php'consolephp'
php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php php php php php$actionableGlobalMetadatasphp php=php php$manifestphp-php>getMetadatasphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php php php php=php>php php'actionableMethodLongParamsphp'php,
php php php php php php php php php php php php php php php php php php php php php'providerNamephp'php php php=php>php php$providerNamephp,
php php php php php php php php php php php php php php php php php php php php php'actionNamephp'php php php php php=php>php php$actionNamephp,
php php php php php php php php php php php php php php php php php php php php php'clientNamephp'php php php php php=php>php php'consolephp'
php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php php php php ifphp php(php$actionableGlobalLongParamMetadataphp)php php{

php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$providerNameDisplayedphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_respondWithProviderNamephp(php$providerMetadataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$providerNameDisplayedphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_respondWithCommandphp(php$providerMetadataphp,php php$actionMetadataphp,php php$specialtyMetadataphp,php php$actionableGlobalLongParamMetadataphp)php;

php php php php php php php php php php php php php php php php php php php php php$actionIsGlobalphp php=php truephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$actionIsGlobalphp php=php falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php checkphp forphp providersphp withoutphp aphp php_Globalphp action
php php php php php php php php php php php php php php php php php$isSingleSpecialProviderActionphp php=php falsephp;
php php php php php php php php php php php php php php php php ifphp php(php!php$actionIsGlobalphp php&php&php countphp(php$actionableGlobalMetadatasphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$isSingleSpecialProviderActionphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_respondWithProviderNamephp(php$providerMetadataphp)php;
php php php php php php php php php php php php php php php php php php php php php$providerNameDisplayedphp php=php truephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$includeAllSpecialtiesphp php|php|php php$isSingleSpecialProviderActionphp)php php{

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$providerSignaturephp-php>getSpecialtiesphp(php)php asphp php$specialtyNamephp)php php{

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$specialtyNamephp php=php=php php'php_Globalphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$specialtyMetadataphp php=php php$manifestphp-php>getMetadataphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php php php php=php>php php'specialtyNamephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'providerNamephp'php php php=php>php php$providerMetadataphp-php>getProviderNamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'specialtyNamephp'php php=php>php php$specialtyNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'clientNamephp'php php php php php=php>php php'consolephp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$actionableSpecialtyLongMetadataphp php=php php$manifestphp-php>getMetadataphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php php php php=php>php php'Toolphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php php php php=php>php php'actionableMethodLongParamsphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'providerNamephp'php php php=php>php php$providerMetadataphp-php>getProviderNamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'specialtyNamephp'php php=php>php php$specialtyNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'actionNamephp'php php php php php=php>php php$actionNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'clientNamephp'php php php php php=php>php php'consolephp'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$actionableSpecialtyLongMetadataphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_respondWithCommandphp(php$providerMetadataphp,php php$actionMetadataphp,php php$specialtyMetadataphp,php php$actionableSpecialtyLongMetadataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php resetphp thephp specialphp flagphp forphp singlephp providerphp actionphp withphp specialty
php php php php php php php php php php php php php php php php php$isSingleSpecialProviderActionphp php=php falsephp;

php php php php php php php php php php php php php php php php ifphp php(php!php$includeAllSpecialtiesphp php&php&php countphp(php$actionableGlobalMetadatasphp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'php php php php Notephp:php Therephp arephp specialtiesphp,php usephp php'php,php arrayphp(php'colorphp'php php=php>php php'yellowphp'php,php php'separatorphp'php php=php>php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'zfphp php'php php.php php$actionMetadataphp-php>getValuephp(php)php php.php php'php php'php php.php php$providerMetadataphp-php>getValuephp(php)php php.php php'php.php?php'php,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php php'cyanphp'php,php php'separatorphp'php php=php>php falsephp)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'php tophp getphp specificphp helpphp onphp themphp.php'php,php arrayphp(php'colorphp'php php=php>php php'yellowphp'php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$providerNameDisplayedphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(nullphp,php arrayphp(php'separatorphp'php php=php>php truephp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_respondWithProviderNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$providerMetadata
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php protectedphp functionphp php_respondWithProviderNamephp(Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$providerMetadataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'php php php'php php.php php$providerMetadataphp-php>getProviderNamephp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_respondWithCommandphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$providerMetadata
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$actionMetadata
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$specialtyMetadata
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$parameterLongMetadata
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystem
php php php php php php*php/
php php php php protectedphp functionphp php_respondWithCommandphp(
php php php php php php php php Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$providerMetadataphp,
php php php php php php php php Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$actionMetadataphp,
php php php php php php php php Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$specialtyMetadataphp,
php php php php php php php php Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$parameterLongMetadataphp)php/php/php,
php php php php php php php php php/php/Zendphp_Toolphp_Frameworkphp_Metadataphp_Toolphp php$parameterShortMetadataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(
php php php php php php php php php php php php php'php php php php zfphp php'php php.php php$actionMetadataphp-php>getValuephp(php)php php.php php'php php'php php.php php$providerMetadataphp-php>getValuephp(php)php,
php php php php php php php php php php php php arrayphp(php'colorphp'php php=php>php php'cyanphp'php,php php'separatorphp'php php=php>php falsephp)
php php php php php php php php php php php php php)php;

php php php php php php php php ifphp php(php$specialtyMetadataphp-php>getSpecialtyNamephp(php)php php!php=php php'php_Globalphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php'php.php'php php.php php$specialtyMetadataphp-php>getValuephp(php)php,php arrayphp(php'colorphp'php php=php>php php'cyanphp'php,php php'separatorphp'php php=php>php falsephp)php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$parameterLongMetadataphp-php>getValuephp(php)php asphp php$paramNamephp php=php>php php$consoleParamNamephp)php php{
php php php php php php php php php php php php php$methodInfophp php=php php$parameterLongMetadataphp-php>getReferencephp(php)php;
php php php php php php php php php php php php php$paramStringphp php=php php'php php'php php.php php$consoleParamNamephp;
php php php php php php php php php php php php ifphp php(php php(php$defaultValuephp php=php php$methodInfophp[php'parameterInfophp'php]php[php$paramNamephp]php[php'defaultphp'php]php)php php!php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$paramStringphp php.php=php php'php[php=php'php php.php php$defaultValuephp php.php php'php]php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(php$paramStringphp php.php php'php'php,php arrayphp(php'separatorphp'php php=php>php falsephp)php)php;
php php php php php php php php php}

php php php php php php php php$thisphp-php>php_responsephp-php>appendContentphp(nullphp,php arrayphp(php'separatorphp'php php=php>php truephp)php)php;
php php php php php php php returnphp php$thisphp;
php php php php php}

php}
