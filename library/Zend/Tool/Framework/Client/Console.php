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
php php*php php@versionphp php php php php$Idphp:php Consolephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Clientphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Interactivephp/InputInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_OutputInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Interactivephp/OutputInterfacephp.phpphp'php;

php/php*php*
php php*php Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp php-php thephp CLIphp Clientphp implementationphp forphp Zendphp_Toolphp_Framework
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Console
php php php php extendsphp Zendphp_Toolphp_Frameworkphp_Clientphp_Abstract
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputInterfacephp,
php php php php php php php php php php php php php php php Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_OutputInterface
php{

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configOptionsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_storageOptionsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filterphp_Wordphp_CamelCaseToDash
php php php php php php*php/
php php php php protectedphp php$php_filterToClientNamingphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filterphp_Wordphp_DashToCamelCase
php php php php php php*php/
php php php php protectedphp php$php_filterFromClientNamingphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_classesToLoadphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php mainphp(php)php php-php Thisphp isphp typicallyphp calledphp fromphp zfphp.phpphp.php Thisphp methodphp isphp a
php php php php php php*php selfphp containedphp mainphp(php)php functionphp.
php php php php php php*
php php php php php php*php/
php php php php publicphp staticphp functionphp mainphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$cliClientphp php=php newphp selfphp(php$optionsphp)php;
php php php php php php php php php$cliClientphp-php>dispatchphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)php php-php returnphp thephp namephp ofphp thephp clientphp,php inphp thisphp casephp php'consolephp'
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'consolephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setConfigOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp php$configOptions
php php php php php php*php/
php php php php publicphp functionphp setConfigOptionsphp(php$configOptionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_configOptionsphp php=php php$configOptionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setStorageOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp php$storageOptions
php php php php php php*php/
php php php php publicphp functionphp setStorageOptionsphp(php$storageOptionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_storageOptionsphp php=php php$storageOptionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp setClassesToLoadphp(php$classesToLoadphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_classesToLoadphp php=php php$classesToLoadphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_initphp(php)php php-php Tasksphp processedphp beforephp thephp constructorphp,php generallyphp settingphp upphp objectsphp tophp use
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_preInitphp(php)
php php php php php{
php php php php php php php php php$configphp php=php php$thisphp-php>php_registryphp-php>getConfigphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_configOptionsphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$configphp-php>setOptionsphp(php$thisphp-php>php_configOptionsphp)php;
php php php php php php php php php}

php php php php php php php php php$storagephp php=php php$thisphp-php>php_registryphp-php>getStoragephp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_storageOptionsphp php!php=php nullphp php&php&php issetphp(php$thisphp-php>php_storageOptionsphp[php'directoryphp'php]php)php)php php{
php php php php php php php php php php php php php$storagephp-php>setAdapterphp(
php php php php php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_Directoryphp(php$thisphp-php>php_storageOptionsphp[php'directoryphp'php]php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php whichphp classesphp arephp essentialphp tophp initializingphp Zendphp_Toolphp_Frameworkphp_Clientphp_Console
php php php php php php php php php$classesToLoadphp php=php arrayphp(
php php php php php php php php php php php php php'Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_Manifestphp'php,
php php php php php php php php php php php php php'Zendphp_Toolphp_Frameworkphp_Systemphp_Manifestphp'
php php php php php php php php php php php php php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_classesToLoadphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_classesToLoadphp)php)php php{
php php php php php php php php php php php php php php php php php$classesToLoadphp[php]php php=php php$thisphp-php>php_classesToLoadphp;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$thisphp-php>php_classesToLoadphp)php)php php{
php php php php php php php php php php php php php php php php php$classesToLoadphp php=php arrayphp_mergephp(php$classesToLoadphp,php php$thisphp-php>php_classesToLoadphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php addphp classesphp tophp thephp basicphp loaderphp fromphp thephp configphp filephp basicloaderphp.classesphp.php1php php.php.
php php php php php php php php ifphp php(issetphp(php$configphp-php>basicloaderphp)php php&php&php issetphp(php$configphp-php>basicloaderphp-php>classesphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$configphp-php>basicloaderphp-php>classesphp asphp php$classKeyphp php=php>php php$classNamephp)php php{
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$classesToLoadphp,php php$classNamephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_registryphp-php>setLoaderphp(
php php php php php php php php php php php php newphp Zendphp_Toolphp_Frameworkphp_Loaderphp_BasicLoaderphp(arrayphp(php'classesToLoadphp'php php=php>php php$classesToLoadphp)php)
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_preDispatchphp(php)php php-php Tasksphp handedphp afterphp initializationphp butphp beforephp dispatching
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_preDispatchphp(php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php php$responsephp-php>addContentDecoratorphp(newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ResponseDecoratorphp_AlignCenterphp(php)php)php;
php php php php php php php php php$responsephp-php>addContentDecoratorphp(newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ResponseDecoratorphp_Indentionphp(php)php)php;
php php php php php php php php php$responsephp-php>addContentDecoratorphp(newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ResponseDecoratorphp_Blockizephp(php)php)php;

php php php php php php php php ifphp php(functionphp_existsphp(php'posixphp_isattyphp'php)php)php php{
php php php php php php php php php php php php php$responsephp-php>addContentDecoratorphp(newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ResponseDecoratorphp_Colorizerphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$responsephp-php>addContentDecoratorphp(newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Responsephp_ContentDecoratorphp_Separatorphp(php)php)
php php php php php php php php php php php php php-php>setDefaultDecoratorOptionsphp(arrayphp(php'separatorphp'php php=php>php truephp)php)php;

php php php php php php php php php$optParserphp php=php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_ArgumentParserphp(php)php;
php php php php php php php php php$optParserphp-php>setArgumentsphp(php$php_SERVERphp[php'argvphp'php]php)
php php php php php php php php php php php php php-php>setRegistryphp(php$thisphp-php>php_registryphp)
php php php php php php php php php php php php php-php>parsephp(php)php;

php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_postDispatchphp(php)php php-php Tasksphp handledphp afterphp dispatching
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_postDispatchphp(php)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>php_registryphp-php>getRequestphp(php)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_registryphp-php>getResponsephp(php)php;

php php php php php php php php ifphp php(php$responsephp-php>isExceptionphp(php)php)php php{
php php php php php php php php php php php php php$helpSystemphp php=php newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Consolephp_HelpSystemphp(php)php;
php php php php php php php php php php php php php$helpSystemphp-php>setRegistryphp(php$thisphp-php>php_registryphp)
php php php php php php php php php php php php php php php php php-php>respondWithErrorMessagephp(php$responsephp-php>getExceptionphp(php)php-php>getMessagephp(php)php,php php$responsephp-php>getExceptionphp(php)php)
php php php php php php php php php php php php php php php php php-php>respondWithSpecialtyAndParamHelpphp(
php php php php php php php php php php php php php php php php php php php php php$requestphp-php>getProviderNamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php$requestphp-php>getActionNamephp(php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php echophp PHPphp_EOLphp;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php handleInteractiveInputRequestphp(php)php isphp requiredphp byphp thephp Interactivephp InputInterface
php php php php php php*
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputRequestphp php$inputRequest
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp handleInteractiveInputRequestphp(Zendphp_Toolphp_Frameworkphp_Clientphp_Interactivephp_InputRequestphp php$inputRequestphp)
php php php php php{
php php php php php php php php fwritephp(STDOUTphp,php php$inputRequestphp-php>getContentphp(php)php php.php PHPphp_EOLphp php.php php'zfphp>php php'php)php;
php php php php php php php php php$inputContentphp php=php fgetsphp(STDINphp)php;
php php php php php php php php returnphp rtrimphp(php$inputContentphp)php;php php/php/php removephp thephp returnphp fromphp thephp endphp ofphp thephp string
php php php php php}

php php php php php/php*php*
php php php php php php*php handleInteractiveOutputphp(php)php isphp requiredphp byphp thephp Interactivephp OutputInterface
php php php php php php*
php php php php php php*php Thisphp allowsphp usphp tophp displayphp outputphp immediatelyphp fromphp providersphp,php rather
php php php php php php*php thanphp displayingphp itphp afterphp thephp providerphp isphp donephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$output
php php php php php php*php/
php php php php publicphp functionphp handleInteractiveOutputphp(php$outputphp)
php php php php php{
php php php php php php php php echophp php$outputphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getMissingParameterPromptStringphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$provider
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Actionphp_Interfacephp php$actionInterface
php php php php php php*php php@paramphp stringphp php$missingParameterName
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMissingParameterPromptStringphp(Zendphp_Toolphp_Frameworkphp_Providerphp_Interfacephp php$providerphp,php Zendphp_Toolphp_Frameworkphp_Actionphp_Interfacephp php$actionInterfacephp,php php$missingParameterNamephp)
php php php php php{
php php php php php php php php returnphp php'Pleasephp providephp aphp valuephp forphp php$php'php php.php php$missingParameterNamephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php convertToClientNamingphp(php)
php php php php php php*
php php php php php php*php Convertphp wordsphp tophp clientphp specificphp namingphp,php inphp thisphp casephp isphp lowerphp,php dashphp separated
php php php php php php*
php php php php php php*php Filtersphp arephp lazyphp-loadedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp convertToClientNamingphp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_filterToClientNamingphp)php php{
php php php php php php php php php php php php php$filterphp php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php php php php php$filterphp-php>addFilterphp(newphp Zendphp_Filterphp_Wordphp_CamelCaseToDashphp(php)php)php;
php php php php php php php php php php php php php$filterphp-php>addFilterphp(newphp Zendphp_Filterphp_StringToLowerphp(php)php)php;

php php php php php php php php php php php php php$thisphp-php>php_filterToClientNamingphp php=php php$filterphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_filterToClientNamingphp-php>filterphp(php$stringphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php convertFromClientNamingphp(php)
php php php php php php*
php php php php php php*php Convertphp wordsphp fromphp clientphp specificphp namingphp tophp codephp namingphp php-php camelcased
php php php php php php*
php php php php php php*php Filtersphp arephp lazyphp-loadedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp convertFromClientNamingphp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_filterFromClientNamingphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_filterFromClientNamingphp php=php newphp Zendphp_Filterphp_Wordphp_DashToCamelCasephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_filterFromClientNamingphp-php>filterphp(php$stringphp)php;
php php php php php}

php}
