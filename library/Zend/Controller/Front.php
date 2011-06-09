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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Frontphp.phpphp php2php0php2php4php6php php2php0php1php0php-php0php1php-php1php2php php2php1php:php3php6php:php0php8Zphp daspridphp php$
php php*php/


php/php*php*php Zendphp_Loaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Actionphp_HelperBrokerphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Pluginphp_Brokerphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/Brokerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Front
php{
php php php php php/php*php*
php php php php php php*php Basephp URL
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUrlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Directoryphp|iesphp wherephp controllersphp arephp stored
php php php php php php*
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_controllerDirphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php php@varphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_dispatcherphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Singletonphp instance
php php php php php php*
php php php php php php*php Markedphp onlyphp asphp protectedphp tophp allowphp extensionphp ofphp thephp classphp.php Tophp extendphp,
php php php php php php*php simplyphp overridephp php{php@linkphp getInstancephp(php)php}php.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php protectedphp staticphp php$php_instancephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp invocationphp parametersphp tophp usephp whenphp instantiatingphp action
php php php php php php*php controllers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_invokeParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Subdirectoryphp withinphp aphp modulephp containingphp controllersphp;php defaultsphp tophp php'controllersphp'
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_moduleControllerDirectoryNamephp php=php php'controllersphp'php;

php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Controllerphp_Pluginphp_Broker
php php php php php php*php php@varphp Zendphp_Controllerphp_Pluginphp_Broker
php php php php php php*php/
php php php php protectedphp php$php_pluginsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php php@varphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_requestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php php@varphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp returnphp thephp responsephp priorphp tophp renderingphp outputphp whilephp in
php php php php php php*php php{php@linkphp dispatchphp(php)php}php;php defaultphp isphp tophp sendphp headersphp andphp renderphp outputphp.
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_returnResponsephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Instancephp ofphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php php@varphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_routerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp exceptionsphp encounteredphp inphp php{php@linkphp dispatchphp(php)php}php shouldphp be
php php php php php php*php thrownphp orphp trappedphp inphp thephp responsephp object
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_throwExceptionsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Instantiatephp usingphp php{php@linkphp getInstancephp(php)php}php;php frontphp controllerphp isphp aphp singleton
php php php php php php*php objectphp.
php php php php php php*
php php php php php php*php Instantiatesphp thephp pluginphp brokerphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginsphp php=php newphp Zendphp_Controllerphp_Pluginphp_Brokerphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enforcephp singletonphp;php disallowphp cloning
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_php_clonephp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Singletonphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_instancephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp selfphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp allphp objectphp propertiesphp ofphp thephp singletonphp instance
php php php php php php*
php php php php php php*php Primarilyphp usedphp forphp testingphp;php couldphp bephp usedphp tophp chainphp frontphp controllersphp.
php php php php php php*
php php php php php php*php Alsophp resetsphp actionphp helperphp brokerphp,php clearingphp allphp registeredphp helpersphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp resetInstancephp(php)
php php php php php{
php php php php php php php php php$reflectionphp php=php newphp ReflectionObjectphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$reflectionphp-php>getPropertiesphp(php)php asphp php$propertyphp)php php{
php php php php php php php php php php php php php$namephp php=php php$propertyphp-php>getNamephp(php)php;
php php php php php php php php php php php php switchphp php(php$namephp)php php{
php php php php php php php php php php php php php php php php casephp php'php_instancephp'php:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'php_controllerDirphp'php:
php php php php php php php php php php php php php php php php casephp php'php_invokeParamsphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$namephp}php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'php_pluginsphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$namephp}php php=php newphp Zendphp_Controllerphp_Pluginphp_Brokerphp(php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'php_throwExceptionsphp'php:
php php php php php php php php php php php php php php php php casephp php'php_returnResponsephp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$namephp}php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'php_moduleControllerDirectoryNamephp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$namephp}php php=php php'controllersphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$namephp}php php=php nullphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:resetHelpersphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Conveniencephp featurephp,php callsphp setControllerDirectoryphp(php)php-php>setRouterphp(php)php-php>dispatchphp(php)
php php php php php php*
php php php php php php*php Inphp PHPphp php5php.php1php.xphp,php aphp callphp tophp aphp staticphp methodphp neverphp populatesphp php$thisphp php-php-php sophp runphp(php)
php php php php php php*php mayphp actuallyphp bephp calledphp afterphp settingphp upphp yourphp frontphp controllerphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$controllerDirectoryphp Pathphp tophp Zendphp_Controllerphp_Action
php php php php php php*php controllerphp classesphp orphp arrayphp ofphp suchphp paths
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Exceptionphp ifphp calledphp fromphp anphp objectphp instance
php php php php php php*php/
php php php php publicphp staticphp functionphp runphp(php$controllerDirectoryphp)
php php php php php{
php php php php php php php php selfphp:php:getInstancephp(php)
php php php php php php php php php php php php php-php>setControllerDirectoryphp(php$controllerDirectoryphp)
php php php php php php php php php php php php php-php>dispatchphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp controllerphp directoryphp tophp thephp controllerphp directoryphp stack
php php php php php php*
php php php php php php*php Ifphp php$argsphp isphp presentedphp andphp isphp aphp stringphp,php usesphp itphp forphp thephp arrayphp keyphp mapping
php php php php php php*php tophp thephp directoryphp specifiedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$directory
php php php php php php*php php@paramphp stringphp php$modulephp Optionalphp argumentphp;php modulephp withphp whichphp tophp associatephp directoryphp.php Ifphp nonephp providedphp,php assumesphp php'defaultphp'
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Exceptionphp ifphp directoryphp notphp foundphp orphp readable
php php php php php php*php/
php php php php publicphp functionphp addControllerDirectoryphp(php$directoryphp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>getDispatcherphp(php)php-php>addControllerDirectoryphp(php$directoryphp,php php$modulephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp controllerphp directory
php php php php php php*
php php php php php php*php Storesphp controllerphp directoryphp(iesphp)php inphp dispatcherphp.php Mayphp bephp anphp arrayphp of
php php php php php php*php directoriesphp orphp aphp stringphp containingphp aphp singlephp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$directoryphp Pathphp tophp Zendphp_Controllerphp_Actionphp controller
php php php php php php*php classesphp orphp arrayphp ofphp suchphp paths
php php php php php php*php php@paramphp php stringphp php$modulephp Optionalphp modulephp namephp tophp usephp withphp stringphp php$directory
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setControllerDirectoryphp(php$directoryphp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>getDispatcherphp(php)php-php>setControllerDirectoryphp(php$directoryphp,php php$modulephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp controllerphp directory
php php php php php php*
php php php php php php*php Retrievesphp:
php php php php php php*php php-php Arrayphp ofphp allphp controllerphp directoriesphp ifphp nophp php$namephp passed
php php php php php php*php php-php Stringphp pathphp ifphp php$namephp passedphp andphp existsphp asphp aphp keyphp inphp controllerphp directoryphp array
php php php php php php*php php-php nullphp ifphp php$namephp passedphp butphp doesphp notphp existphp inphp controllerphp directoryphp keys
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp Defaultphp null
php php php php php php*php php@returnphp arrayphp|stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getControllerDirectoryphp(php$namephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDispatcherphp(php)php-php>getControllerDirectoryphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp controllerphp directoryphp byphp modulephp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp removeControllerDirectoryphp(php$modulephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDispatcherphp(php)php-php>removeControllerDirectoryphp(php$modulephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Specifyphp aphp directoryphp asphp containingphp modules
php php php php php php*
php php php php php php*php Iteratesphp throughphp thephp directoryphp,php addingphp anyphp subdirectoriesphp asphp modulesphp;
php php php php php php*php thephp subdirectoryphp withinphp eachphp modulephp namedphp afterphp php{php@linkphp php$php_moduleControllerDirectoryNamephp}
php php php php php php*php willphp bephp usedphp asphp thephp controllerphp directoryphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp addModuleDirectoryphp(php$pathphp)
php php php php php{
php php php php php php php php tryphp{
php php php php php php php php php php php php php$dirphp php=php newphp DirectoryIteratorphp(php$pathphp)php;
php php php php php php php php php}php catchphp(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php"Directoryphp php$pathphp notphp readablephp"php,php php0php,php php$ephp)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$dirphp asphp php$filephp)php php{
php php php php php php php php php php php php ifphp php(php$filephp-php>isDotphp(php)php php|php|php php!php$filephp-php>isDirphp(php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$modulephp php php php php=php php$filephp-php>getFilenamephp(php)php;

php php php php php php php php php php php php php/php/php Donphp'tphp usephp SCCSphp directoriesphp asphp modules
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php^php[php^aphp-zphp]php/iphp'php,php php$modulephp)php php|php|php php(php'CVSphp'php php=php=php php$modulephp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$moduleDirphp php=php php$filephp-php>getPathnamephp(php)php php.php DIRECTORYphp_SEPARATORphp php.php php$thisphp-php>getModuleControllerDirectoryNamephp(php)php;
php php php php php php php php php php php php php$thisphp-php>addControllerDirectoryphp(php$moduleDirphp,php php$modulephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp pathphp tophp aphp modulephp directoryphp php(butphp notphp thephp controllersphp directoryphp withinphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getModuleDirectoryphp(php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$requestphp)php php{
php php php php php php php php php php php php php php php php php$modulephp php=php php$thisphp-php>getRequestphp(php)php-php>getModuleNamephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$modulephp)php)php php{
php php php php php php php php php php php php php php php php php$modulephp php=php php$thisphp-php>getDispatcherphp(php)php-php>getDefaultModulephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$controllerDirphp php=php php$thisphp-php>getControllerDirectoryphp(php$modulephp)php;

php php php php php php php php ifphp php(php(nullphp php=php=php=php php$controllerDirphp)php php|php|php php!isphp_stringphp(php$controllerDirphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp dirnamephp(php$controllerDirphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp directoryphp namephp withinphp aphp modulephp containingphp controllers
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setModuleControllerDirectoryNamephp(php$namephp php=php php'controllersphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_moduleControllerDirectoryNamephp php=php php(stringphp)php php$namephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp directoryphp namephp withinphp aphp modulephp containingphp controllers
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModuleControllerDirectoryNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_moduleControllerDirectoryNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp controllerphp php(unformattedphp stringphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setDefaultControllerNamephp(php$controllerphp)
php php php php php{
php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getDispatcherphp(php)php;
php php php php php php php php php$dispatcherphp-php>setDefaultControllerNamephp(php$controllerphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp controllerphp php(unformattedphp stringphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultControllerNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDispatcherphp(php)php-php>getDefaultControllerNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp actionphp php(unformattedphp stringphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$action
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setDefaultActionphp(php$actionphp)
php php php php php{
php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getDispatcherphp(php)php;
php php php php php php php php php$dispatcherphp-php>setDefaultActionphp(php$actionphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp actionphp php(unformattedphp stringphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultActionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDispatcherphp(php)php-php>getDefaultActionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp modulephp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$module
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setDefaultModulephp(php$modulephp)
php php php php php{
php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getDispatcherphp(php)php;
php php php php php php php php php$dispatcherphp-php>setDefaultModulephp(php$modulephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp module
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultModulephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDispatcherphp(php)php-php>getDefaultModulephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp classphp/object
php php php php php php*
php php php php php php*php Setphp thephp requestphp objectphp.php php Thephp requestphp holdsphp thephp requestphp environmentphp.
php php php php php php*
php php php php php php*php Ifphp aphp classphp namephp isphp providedphp,php itphp willphp instantiatephp it
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Exceptionphp ifphp invalidphp requestphp class
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(php$requestphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$requestphp)php)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$requestphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$requestphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$requestphp php=php newphp php$requestphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$requestphp instanceofphp Zendphp_Controllerphp_Requestphp_Abstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Invalidphp requestphp classphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp requestphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp routerphp classphp/object
php php php php php php*
php php php php php php*php Setphp thephp routerphp objectphp.php php Thephp routerphp isphp responsiblephp forphp mapping
php php php php php php*php thephp requestphp tophp aphp controllerphp andphp actionphp.
php php php php php php*
php php php php php php*php Ifphp aphp classphp namephp isphp providedphp,php instantiatesphp routerphp withphp anyphp parameters
php php php php php php*php registeredphp viaphp php{php@linkphp setParamphp(php)php}php orphp php{php@linkphp setParamsphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Controllerphp_Routerphp_Interfacephp php$router
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Exceptionphp ifphp invalidphp routerphp class
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setRouterphp(php$routerphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$routerphp)php)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$routerphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$routerphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$routerphp php=php newphp php$routerphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$routerphp instanceofphp Zendphp_Controllerphp_Routerphp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Invalidphp routerphp classphp'php)php;
php php php php php php php php php}

php php php php php php php php php$routerphp-php>setFrontControllerphp(php$thisphp)php;
php php php php php php php php php$thisphp-php>php_routerphp php=php php$routerphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp routerphp objectphp.
php php php php php php*
php php php php php php*php Instantiatesphp aphp Zendphp_Controllerphp_Routerphp_Rewritephp objectphp ifphp nophp routerphp currentlyphp setphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getRouterphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php php$thisphp-php>php_routerphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Rewritephp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setRouterphp(newphp Zendphp_Controllerphp_Routerphp_Rewritephp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_routerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp basephp URLphp usedphp forphp requests
php php php php php php*
php php php php php php*php Usephp tophp setphp thephp basephp URLphp segmentphp ofphp thephp REQUESTphp_URIphp tophp usephp when
php php php php php php*php determiningphp PATHphp_INFOphp,php etcphp.php Examplesphp:
php php php php php php*php php-php php/admin
php php php php php php*php php-php php/myapp
php php php php php php*php php-php php/subdirphp/indexphp.php
php php php php php php*
php php php php php php*php Notephp thatphp thephp URLphp shouldphp notphp includephp thephp fullphp URIphp.php Dophp notphp usephp:
php php php php php php*php php-php httpphp:php/php/examplephp.comphp/admin
php php php php php php*php php-php httpphp:php/php/examplephp.comphp/myapp
php php php php php php*php php-php httpphp:php/php/examplephp.comphp/subdirphp/indexphp.php
php php php php php php*
php php php php php php*php Ifphp aphp nullphp valuephp isphp passedphp,php thisphp canphp bephp usedphp asphp wellphp forphp autodiscoveryphp php(defaultphp)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$base
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Exceptionphp forphp nonphp-stringphp php$base
php php php php php php*php/
php php php php publicphp functionphp setBaseUrlphp(php$basephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$basephp)php php&php&php php(nullphp php!php=php=php php$basephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Rewritephp basephp mustphp bephp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_baseUrlphp php=php php$basephp;

php php php php php php php php ifphp php(php(nullphp php!php=php=php php(php$requestphp php=php php$thisphp-php>getRequestphp(php)php)php)php php&php&php php(methodphp_existsphp(php$requestphp,php php'setBaseUrlphp'php)php)php)php php{
php php php php php php php php php php php php php$requestphp-php>setBaseUrlphp(php$basephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentlyphp setphp basephp URL
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$requestphp)php php&php&php methodphp_existsphp(php$requestphp,php php'getBaseUrlphp'php)php)php php{
php php php php php php php php php php php php returnphp php$requestphp-php>getBaseUrlphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_baseUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp dispatcherphp objectphp.php php Thephp dispatcherphp isphp responsiblephp for
php php php php php php*php takingphp aphp Zendphp_Controllerphp_Dispatcherphp_Tokenphp objectphp,php instantiatingphp thephp controllerphp,php and
php php php php php php*php callphp thephp actionphp methodphp ofphp thephp controllerphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Dispatcherphp_Interfacephp php$dispatcher
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setDispatcherphp(Zendphp_Controllerphp_Dispatcherphp_Interfacephp php$dispatcherphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dispatcherphp php=php php$dispatcherphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp dispatcherphp objectphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getDispatcherphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Instantiatephp thephp defaultphp dispatcherphp ifphp onephp wasphp notphp setphp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!php$thisphp-php>php_dispatcherphp instanceofphp Zendphp_Controllerphp_Dispatcherphp_Interfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Standardphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_dispatcherphp php=php newphp Zendphp_Controllerphp_Dispatcherphp_Standardphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dispatcherphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp responsephp classphp/object
php php php php php php*
php php php php php php*php Setphp thephp responsephp objectphp.php php Thephp responsephp isphp aphp containerphp forphp action
php php php php php php*php responsesphp andphp headersphp.php Usagephp isphp optionalphp.
php php php php php php*
php php php php php php*php Ifphp aphp classphp namephp isphp providedphp,php instantiatesphp aphp responsephp objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Exceptionphp ifphp invalidphp responsephp class
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(php$responsephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$responsephp)php)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$responsephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$responsephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$responsephp php=php newphp php$responsephp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$responsephp instanceofphp Zendphp_Controllerphp_Responsephp_Abstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Invalidphp responsephp classphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp responsephp objectphp.
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp orphp modifyphp aphp parameterphp tophp usephp whenphp instantiatingphp anphp actionphp controller
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$namephp php=php php(stringphp)php php$namephp;
php php php php php php php php php$thisphp-php>php_invokeParamsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parametersphp tophp passphp tophp actionphp controllerphp constructors
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_invokeParamsphp php=php arrayphp_mergephp(php$thisphp-php>php_invokeParamsphp,php php$paramsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp parameterphp fromphp thephp controllerphp parameterphp stack
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$namephp)
php php php php php{
php php php php php php php php ifphp(issetphp(php$thisphp-php>php_invokeParamsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_invokeParamsphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp actionphp controllerphp instantiationphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_invokeParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp thephp controllerphp parameterphp stack
php php php php php php*
php php php php php php*php Byphp defaultphp,php clearsphp allphp parametersphp.php Ifphp aphp parameterphp namephp isphp givenphp,php clears
php php php php php php*php onlyphp thatphp parameterphp;php ifphp anphp arrayphp ofphp parameterphp namesphp isphp providedphp,php clears
php php php php php php*php eachphp.
php php php php php php*
php php php php php php*php php@paramphp nullphp|stringphp|arrayphp singlephp keyphp orphp arrayphp ofphp keysphp forphp paramsphp tophp clear
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp clearParamsphp(php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_invokeParamsphp php=php arrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$namephp)php php&php&php issetphp(php$thisphp-php>php_invokeParamsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_invokeParamsphp[php$namephp]php)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$namephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$namephp asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$keyphp)php php&php&php issetphp(php$thisphp-php>php_invokeParamsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_invokeParamsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp aphp pluginphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Pluginphp_Abstractphp php$plugin
php php php php php php*php php@paramphp php intphp php$stackIndexphp Optionalphp;php stackphp indexphp forphp plugin
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp registerPluginphp(Zendphp_Controllerphp_Pluginphp_Abstractphp php$pluginphp,php php$stackIndexphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginsphp-php>registerPluginphp(php$pluginphp,php php$stackIndexphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unregisterphp aphp pluginphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Controllerphp_Pluginphp_Abstractphp php$pluginphp Pluginphp classphp orphp objectphp tophp unregister
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp unregisterPluginphp(php$pluginphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginsphp-php>unregisterPluginphp(php$pluginphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp particularphp pluginphp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPluginphp(php$classphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pluginsphp-php>hasPluginphp(php$classphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp pluginphp orphp pluginsphp byphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp falsephp|Zendphp_Controllerphp_Pluginphp_Abstractphp|array
php php php php php php*php/
php php php php publicphp functionphp getPluginphp(php$classphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pluginsphp-php>getPluginphp(php$classphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp plugins
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pluginsphp-php>getPluginsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp throwExceptionsphp flagphp andphp retrievephp currentphp status
php php php php php php*
php php php php php php*php Setphp whetherphp exceptionsphp encountedphp inphp thephp dispatchphp loopphp shouldphp bephp thrown
php php php php php php*php orphp caughtphp andphp trappedphp inphp thephp responsephp objectphp.
php php php php php php*
php php php php php php*php Defaultphp behaviourphp isphp tophp trapphp themphp inphp thephp responsephp objectphp;php callphp this
php php php php php php*php methodphp tophp havephp themphp thrownphp.
php php php php php php*
php php php php php php*php Passingphp nophp valuephp willphp returnphp thephp currentphp valuephp ofphp thephp flagphp;php passingphp a
php php php php php php*php booleanphp truephp orphp falsephp valuephp willphp setphp thephp flagphp andphp returnphp thephp current
php php php php php php*php objectphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flagphp Defaultsphp tophp nullphp php(returnphp flagphp statephp)
php php php php php php*php php@returnphp booleanphp|Zendphp_Controllerphp_Frontphp Usedphp asphp aphp setterphp,php returnsphp objectphp;php asphp aphp getterphp,php returnsphp boolean
php php php php php php*php/
php php php php publicphp functionphp throwExceptionsphp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$flagphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwExceptionsphp php=php php(boolphp)php php$flagphp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_throwExceptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp php{php@linkphp dispatchphp(php)php}php shouldphp returnphp thephp responsephp withoutphp first
php php php php php php*php renderingphp outputphp.php Byphp defaultphp,php outputphp isphp renderedphp andphp dispatchphp(php)php returns
php php php php php php*php nothingphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flag
php php php php php php*php php@returnphp booleanphp|Zendphp_Controllerphp_Frontphp Usedphp asphp aphp setterphp,php returnsphp objectphp;php asphp aphp getterphp,php returnsphp boolean
php php php php php php*php/
php php php php publicphp functionphp returnResponsephp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(truephp php=php=php=php php$flagphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_returnResponsephp php=php truephp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elseifphp php(falsephp php=php=php=php php$flagphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_returnResponsephp php=php falsephp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_returnResponsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dispatchphp anphp HTTPphp requestphp tophp aphp controllerphp/actionphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp|nullphp php$request
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp|nullphp php$response
php php php php php php*php php@returnphp voidphp|Zendphp_Controllerphp_Responsephp_Abstractphp Returnsphp responsephp objectphp ifphp returnResponsephp(php)php isphp true
php php php php php php*php/
php php php php publicphp functionphp dispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp php=php nullphp,php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>getParamphp(php'noErrorHandlerphp'php)php php&php&php php!php$thisphp-php>php_pluginsphp-php>hasPluginphp(php'Zendphp_Controllerphp_Pluginphp_ErrorHandlerphp'php)php)php php{
php php php php php php php php php php php php php/php/php Registerphp withphp stackphp indexphp ofphp php1php0php0
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/ErrorHandlerphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>registerPluginphp(newphp Zendphp_Controllerphp_Pluginphp_ErrorHandlerphp(php)php,php php1php0php0php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>getParamphp(php'noViewRendererphp'php)php php&php&php php!Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:hasHelperphp(php'viewRendererphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/ViewRendererphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStackphp(php)php-php>offsetSetphp(php-php8php0php,php newphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Instantiatephp defaultphp requestphp objectphp php(HTTPphp versionphp)php ifphp nonephp provided
php php php php php php php php php php*php/
php php php php php php php php ifphp php(nullphp php!php=php=php php$requestphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php}php elseifphp php(php(nullphp php=php=php=php php$requestphp)php php&php&php php(nullphp php=php=php=php php(php$requestphp php=php php$thisphp-php>getRequestphp(php)php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Requestphp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$requestphp php=php newphp Zendphp_Controllerphp_Requestphp_Httpphp(php)php;
php php php php php php php php php php php php php$thisphp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Setphp basephp URLphp ofphp requestphp objectphp,php ifphp available
php php php php php php php php php php*php/
php php php php php php php php ifphp php(isphp_callablephp(arrayphp(php$thisphp-php>php_requestphp,php php'setBaseUrlphp'php)php)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_baseUrlphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setBaseUrlphp(php$thisphp-php>php_baseUrlphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Instantiatephp defaultphp responsephp objectphp php(HTTPphp versionphp)php ifphp nonephp provided
php php php php php php php php php php*php/
php php php php php php php php ifphp php(nullphp php!php=php=php php$responsephp)php php{
php php php php php php php php php php php php php$thisphp-php>setResponsephp(php$responsephp)php;
php php php php php php php php php}php elseifphp php(php(nullphp php=php=php=php php$thisphp-php>php_responsephp)php php&php&php php(nullphp php=php=php=php php(php$thisphp-php>php_responsephp php=php php$thisphp-php>getResponsephp(php)php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Responsephp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$responsephp php=php newphp Zendphp_Controllerphp_Responsephp_Httpphp(php)php;
php php php php php php php php php php php php php$thisphp-php>setResponsephp(php$responsephp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Registerphp requestphp andphp responsephp objectsphp withphp pluginphp broker
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_plugins
php php php php php php php php php php php php php php-php>setRequestphp(php$thisphp-php>php_requestphp)
php php php php php php php php php php php php php php-php>setResponsephp(php$thisphp-php>php_responsephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Initializephp router
php php php php php php php php php php*php/
php php php php php php php php php$routerphp php=php php$thisphp-php>getRouterphp(php)php;
php php php php php php php php php$routerphp-php>setParamsphp(php$thisphp-php>getParamsphp(php)php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Initializephp dispatcher
php php php php php php php php php php*php/
php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getDispatcherphp(php)php;
php php php php php php php php php$dispatcherphp-php>setParamsphp(php$thisphp-php>getParamsphp(php)php)
php php php php php php php php php php php php php php php php php php php php-php>setResponsephp(php$thisphp-php>php_responsephp)php;

php php php php php php php php php/php/php Beginphp dispatch
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Routephp requestphp tophp controllerphp/actionphp,php ifphp aphp routerphp isphp provided
php php php php php php php php php php php php php php*php/

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php*php Notifyphp pluginsphp ofphp routerphp startup
php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>routeStartupphp(php$thisphp-php>php_requestphp)php;

php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$routerphp-php>routephp(php$thisphp-php>php_requestphp)php;
php php php php php php php php php php php php php}php php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php*php Notifyphp pluginsphp ofphp routerphp completion
php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>routeShutdownphp(php$thisphp-php>php_requestphp)php;

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Notifyphp pluginsphp ofphp dispatchphp loopphp startup
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>dispatchLoopStartupphp(php$thisphp-php>php_requestphp)php;

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php Attemptphp tophp dispatchphp thephp controllerphp/actionphp.php Ifphp thephp php$thisphp-php>php_request
php php php php php php php php php php php php php php*php php indicatesphp thatphp itphp needsphp tophp bephp dispatchedphp,php movephp tophp thephp next
php php php php php php php php php php php php php php*php php actionphp inphp thephp requestphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_requestphp-php>setDispatchedphp(truephp)php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Notifyphp pluginsphp ofphp dispatchphp startup
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>preDispatchphp(php$thisphp-php>php_requestphp)php;

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Skipphp requestedphp actionphp ifphp preDispatchphp(php)php hasphp resetphp it
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_requestphp-php>isDispatchedphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Dispatchphp request
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$dispatcherphp-php>dispatchphp(php$thisphp-php>php_requestphp,php php$thisphp-php>php_responsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Notifyphp pluginsphp ofphp dispatchphp completion
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>postDispatchphp(php$thisphp-php>php_requestphp)php;
php php php php php php php php php php php php php}php whilephp php(php!php$thisphp-php>php_requestphp-php>isDispatchedphp(php)php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Notifyphp pluginsphp ofphp dispatchphp loopphp completion
php php php php php php php php php php*php/
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_pluginsphp-php>dispatchLoopShutdownphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>throwExceptionsphp(php)php)php php{
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_responsephp-php>setExceptionphp(php$ephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>returnResponsephp(php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_responsephp-php>sendResponsephp(php)php;
php php php php php}
php}
