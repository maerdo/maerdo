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
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HelperBrokerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp/PriorityStackphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_HelperBroker
php{
php php php php php/php*php*
php php php php php php*php php$php_actionControllerphp php-php ActionControllerphp reference
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Action
php php php php php php*php/
php php php php protectedphp php$php_actionControllerphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php/
php php php php protectedphp staticphp php$php_pluginLoaderphp;

php php php php php/php*php*
php php php php php php*php php$php_helpersphp php-php Helperphp array
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php protectedphp staticphp php$php_stackphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Setphp PluginLoaderphp forphp usephp withphp broker
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loader
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setPluginLoaderphp(php$loaderphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$loaderphp)php php&php&php php(php!php$loaderphp instanceofphp Zendphp_Loaderphp_PluginLoaderphp_Interfacephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Invalidphp pluginphp loaderphp providedphp tophp HelperBrokerphp'php)php;
php php php php php php php php php}
php php php php php php php php selfphp:php:php$php_pluginLoaderphp php=php php$loaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp PluginLoader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getPluginLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_pluginLoaderphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php selfphp:php:php$php_pluginLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp_Controllerphp_Actionphp_Helperphp'php php=php>php php'Zendphp/Controllerphp/Actionphp/Helperphp/php'php,
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_pluginLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php addPrefixphp(php)php php-php Addphp repositoryphp ofphp helpersphp byphp prefix
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php/
php php php php staticphp publicphp functionphp addPrefixphp(php$prefixphp)
php php php php php{
php php php php php php php php php$prefixphp php=php rtrimphp(php$prefixphp,php php'php_php'php)php;
php php php php php php php php php$pathphp php php php=php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$prefixphp)php;
php php php php php php php php selfphp:php:getPluginLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php addPathphp(php)php php-php Addphp pathphp tophp repositoriesphp wherephp Actionphp_Helpersphp couldphp bephp foundphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp stringphp php$prefixphp Optionalphp;php defaultsphp tophp php'Zendphp_Controllerphp_Actionphp_Helperphp'
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php staticphp publicphp functionphp addPathphp(php$pathphp,php php$prefixphp php=php php'Zendphp_Controllerphp_Actionphp_Helperphp'php)
php php php php php{
php php php php php php php php selfphp:php:getPluginLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php addHelperphp(php)php php-php Addphp helperphp objects
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp php$helper
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php staticphp publicphp functionphp addHelperphp(Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp php$helperphp)
php php php php php{
php php php php php php php php selfphp:php:getStackphp(php)php-php>pushphp(php$helperphp)php;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php resetHelpersphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php staticphp publicphp functionphp resetHelpersphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_stackphp php=php nullphp;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp orphp initializephp aphp helperphp statically
php php php php php php*
php php php php php php*php Retrievesphp aphp helperphp objectphp staticallyphp,php loadingphp onphp-demandphp ifphp thephp helper
php php php php php php*php doesphp notphp alreadyphp existphp inphp thephp stackphp.php Alwaysphp returnsphp aphp helperphp,php unless
php php php php php php*php thephp helperphp classphp cannotphp bephp foundphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php/
php php php php publicphp staticphp functionphp getStaticHelperphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php php=php selfphp:php:php_normalizeHelperNamephp(php$namephp)php;
php php php php php php php php php$stackphp php=php selfphp:php:getStackphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$stackphp-php>php{php$namephp}php)php)php php{
php php php php php php php php php php php php selfphp:php:php_loadHelperphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$stackphp-php>php{php$namephp}php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getExistingHelperphp(php)php php-php getphp helperphp byphp name
php php php php php php*
php php php php php php*php Staticphp methodphp tophp retrievephp helperphp objectphp.php Onlyphp retrievesphp helpersphp already
php php php php php php*php initializedphp withphp thephp brokerphp php(eitherphp viaphp addHelperphp(php)php orphp onphp-demandphp loading
php php php php php php*php viaphp getHelperphp(php)php)php.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp thephp referencedphp helperphp doesphp notphp existphp inphp the
php php php php php php*php stackphp;php usephp php{php@linkphp hasHelperphp(php)php}php tophp checkphp ifphp thephp helperphp isphp registered
php php php php php php*php priorphp tophp retrievingphp itphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp getExistingHelperphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php php=php selfphp:php:php_normalizeHelperNamephp(php$namephp)php;
php php php php php php php php php$stackphp php=php selfphp:php:getStackphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$stackphp-php>php{php$namephp}php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Actionphp helperphp php"php'php php.php php$namephp php.php php'php"php hasphp notphp beenphp registeredphp withphp thephp helperphp brokerphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$stackphp-php>php{php$namephp}php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp allphp registeredphp helpersphp asphp helperphp php=php>php objectphp pairs
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getExistingHelpersphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:getStackphp(php)php-php>getHelpersByNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp particularphp helperphp loadedphp inphp thephp brokerphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasHelperphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php selfphp:php:php_normalizeHelperNamephp(php$namephp)php;
php php php php php php php php returnphp issetphp(selfphp:php:getStackphp(php)php-php>php{php$namephp}php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp particularphp helperphp fromphp thephp broker
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp removeHelperphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php selfphp:php:php_normalizeHelperNamephp(php$namephp)php;
php php php php php php php php php$stackphp php=php selfphp:php:getStackphp(php)php;
php php php php php php php php ifphp php(issetphp(php$stackphp-php>php{php$namephp}php)php)php php{
php php php php php php php php php php php php unsetphp(php$stackphp-php>php{php$namephp}php)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lazyphp loadphp thephp priorityphp stackphp andphp returnphp it
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php publicphp staticphp functionphp getStackphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_stackphp php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_stackphp php=php newphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStackphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_stackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Actionphp php$actionController
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Controllerphp_Actionphp php$actionControllerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionControllerphp php=php php$actionControllerphp;
php php php php php php php php foreachphp php(selfphp:php:getStackphp(php)php asphp php$helperphp)php php{
php php php php php php php php php php php php php$helperphp-php>setActionControllerphp(php$actionControllerphp)php;
php php php php php php php php php php php php php$helperphp-php>initphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php notifyPreDispatchphp(php)php php-php calledphp byphp actionphp controllerphp dispatchphp method
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp notifyPreDispatchphp(php)
php php php php php{
php php php php php php php php foreachphp php(selfphp:php:getStackphp(php)php asphp php$helperphp)php php{
php php php php php php php php php php php php php$helperphp-php>preDispatchphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php notifyPostDispatchphp(php)php php-php calledphp byphp actionphp controllerphp dispatchphp method
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp notifyPostDispatchphp(php)
php php php php php{
php php php php php php php php foreachphp php(selfphp:php:getStackphp(php)php asphp php$helperphp)php php{
php php php php php php php php php php php php php$helperphp-php>postDispatchphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getHelperphp(php)php php-php getphp helperphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getHelperphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php php=php selfphp:php:php_normalizeHelperNamephp(php$namephp)php;
php php php php php php php php php$stackphp php=php selfphp:php:getStackphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$stackphp-php>php{php$namephp}php)php)php php{
php php php php php php php php php php php php selfphp:php:php_loadHelperphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php php$helperphp php=php php$stackphp-php>php{php$namephp}php;

php php php php php php php php php$initializephp php=php falsephp;
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$actionControllerphp php=php php$helperphp-php>getActionControllerphp(php)php)php)php php{
php php php php php php php php php php php php php$initializephp php=php truephp;
php php php php php php php php php}php elseifphp php(php$actionControllerphp php!php=php=php php$thisphp-php>php_actionControllerphp)php php{
php php php php php php php php php php php php php$initializephp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$initializephp)php php{
php php php php php php php php php php php php php$helperphp-php>setActionControllerphp(php$thisphp-php>php_actionControllerphp)
php php php php php php php php php php php php php php php php php php php php-php>initphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$helperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp overloading
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exceptionphp ifphp helperphp doesphp notphp havephp aphp directphp(php)php method
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$helperphp php=php php$thisphp-php>getHelperphp(php$methodphp)php;
php php php php php php php php ifphp php(php!methodphp_existsphp(php$helperphp,php php'directphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Helperphp php"php'php php.php php$methodphp php.php php'php"php doesphp notphp supportphp overloadingphp viaphp directphp(php)php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$helperphp,php php'directphp'php)php,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp helperphp byphp namephp asphp objectphp property
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getHelperphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp helperphp namephp forphp lookups
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_normalizeHelperNamephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$namephp,php php'php_php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$namephp php=php strphp_replacephp(php'php php'php,php php'php'php,php ucwordsphp(strphp_replacephp(php'php_php'php,php php'php php'php,php php$namephp)php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp ucfirstphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp aphp helper
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_loadHelperphp(php$namephp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$classphp php=php selfphp:php:getPluginLoaderphp(php)php-php>loadphp(php$namephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Actionphp Helperphp byphp namephp php'php php.php php$namephp php.php php'php notphp foundphp'php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$helperphp php=php newphp php$classphp(php)php;

php php php php php php php php ifphp php(php!php$helperphp instanceofphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Helperphp namephp php'php php.php php$namephp php.php php'php php-php>php classphp php'php php.php php$classphp php.php php'php isphp notphp ofphp typephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp'php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:getStackphp(php)php-php>pushphp(php$helperphp)php;
php php php php php}
php}
