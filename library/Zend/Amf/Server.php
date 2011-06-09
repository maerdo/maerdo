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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Serverphp.phpphp php2php3php2php5php6php php2php0php1php0php-php1php0php-php2php6php php1php2php:php5php1php:php5php4Zphp alexanderphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Serverphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Serverphp/Interfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Serverphp_Reflectionphp php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Constantsphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Constantsphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Valuephp_MessageBodyphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/MessageBodyphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Valuephp_MessageHeaderphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/MessageHeaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/Messagingphp/CommandMessagephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Loaderphp_PluginLoaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_TypeLoaderphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Authphp php*php/
requirephp_oncephp php'Zendphp/Authphp.phpphp'php;
php/php*php*
php php*php Anphp AMFphp gatewayphp serverphp implementationphp tophp allowphp thephp connectionphp ofphp thephp Adobephp Flashphp Playerphp to
php php*php Zendphp Framework
php php*
php php*php php@todophp php php php php php php Makephp thephp reflectionphp methodsphp cachephp andphp autoloadphp.
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Serverphp implementsphp Zendphp_Serverphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp dispatchables
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_methodsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp classesphp thatphp canphp bephp calledphp withoutphp beingphp explicitlyphp loaded
php php php php php php*
php php php php php php*php Keysphp arephp classphp namesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_classAllowedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Loaderphp forphp classesphp inphp addedphp directories
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp php$php_loaderphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Productionphp flagphp;php whetherphp orphp notphp tophp returnphp exceptionphp messages
php php php php php php*php/
php php php php protectedphp php$php_productionphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Requestphp processed
php php php php php php*php php@varphp nullphp|Zendphp_Amfphp_Request
php php php php php php*php/
php php php php protectedphp php$php_requestphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Classphp tophp usephp forphp responses
php php php php php php*php php@varphp nullphp|Zendphp_Amfphp_Response
php php php php php php*php/
php php php php protectedphp php$php_responsephp;

php php php php php/php*php*
php php php php php php*php Dispatchphp tablephp ofphp namephp php=php>php methodphp pairs
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tablephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@varphp boolphp sessionphp flagphp;php whetherphp orphp notphp tophp addphp aphp sessionphp tophp eachphp responsephp.
php php php php php php*php/
php php php php protectedphp php$php_sessionphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Namespacephp allowsphp allphp AMFphp callsphp tophp notphp clobberphp otherphp PHPphp sessionphp variables
php php php php php php*php php@varphp Zendphp_Sessionphp_NameSpacephp defaultphp sessionphp namespacephp zendphp_amf
php php php php php php*php/
php php php php protectedphp php$php_sesionNamespacephp php=php php'zendphp_amfphp'php;

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp sessionphp.namephp ifphp phpphp_
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sessionNamephp php=php php'PHPSESSIDphp'php;

php php php php php/php*php*
php php php php php php*php Authenticationphp handlerphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Amfphp_Authphp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_authphp;
php php php php php/php*php*
php php php php php php*php ACLphp handlerphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Acl
php php php php php php*php/
php php php php protectedphp php$php_aclphp;
php php php php php/php*php*
php php php php php php*php Thephp serverphp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:setResourceLoaderphp(newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(php"Zendphp_Amfphp_Parsephp_Resourcephp"php php=php>php php"Zendphp/Amfphp/Parsephp/Resourcephp"php)php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp authenticationphp adapter
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Authphp_Abstractphp php$auth
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setAuthphp(Zendphp_Amfphp_Authphp_Abstractphp php$authphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_authphp php=php php$authphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php php php php/php*php*
php php php php php php*php Getphp authenticationphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Amfphp_Authphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getAuthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_authphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp ACLphp adapter
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp php$acl
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setAclphp(Zendphp_Aclphp php$aclphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_aclphp php=php php$aclphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php php php php/php*php*
php php php php php php*php Getphp ACLphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Acl
php php php php php php*php/
php php php php publicphp functionphp getAclphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_aclphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp productionphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setProductionphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_productionphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp thephp serverphp isphp inphp production
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isProductionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_productionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp namespacephp ofphp allphp incomingphp sessionsphp defaultsphp tophp Zendphp_Amf
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setSessionphp(php$namespacephp php=php php'Zendphp_Amfphp'php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_sessionphp php=php truephp;
php php php php php php php php php$thisphp-php>php_sesionNamespacephp php=php newphp Zendphp_Sessionphp_Namespacephp(php$namespacephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp ofphp notphp thephp serverphp isphp usingphp sessions
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isSessionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sessionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp ACLphp allowsphp accessingphp thephp functionphp orphp method
php php php php php php*
php php php php php php*php php@paramphp stringphp|objectphp php$objectphp Objectphp orphp classphp beingphp accessed
php php php php php php*php php@paramphp stringphp php$functionphp Functionphp orphp methodphp beingphp accessed
php php php php php php*php php@returnphp unknownphp_type
php php php php php php*php/
php php php php protectedphp functionphp php_checkAclphp(php$objectphp,php php$functionphp)
php php php php php{
php php php php php php php php ifphp(php!php$thisphp-php>php_aclphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php ifphp(php$objectphp)php php{
php php php php php php php php php php php php php$classphp php=php isphp_objectphp(php$objectphp)php?getphp_classphp(php$objectphp)php:php$objectphp;
php php php php php php php php php php php php ifphp(php!php$thisphp-php>php_aclphp-php>hasphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Aclphp/Resourcephp.phpphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_aclphp-php>addphp(newphp Zendphp_Aclphp_Resourcephp(php$classphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$callphp php=php arrayphp(php$objectphp,php php"initAclphp"php)php;
php php php php php php php php php php php php ifphp(isphp_callablephp(php$callphp)php php&php&php php!callphp_userphp_funcphp(php$callphp,php php$thisphp-php>php_aclphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php ifphp initAclphp returnsphp falsephp,php nophp ACLphp check
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$authphp php=php Zendphp_Authphp:php:getInstancephp(php)php;
php php php php php php php php ifphp(php$authphp-php>hasIdentityphp(php)php)php php{
php php php php php php php php php php php php php$rolephp php=php php$authphp-php>getIdentityphp(php)php-php>rolephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp(php$thisphp-php>php_aclphp-php>hasRolephp(Zendphp_Amfphp_Constantsphp:php:GUESTphp_ROLEphp)php)php php{
php php php php php php php php php php php php php php php php php$rolephp php=php Zendphp_Amfphp_Constantsphp:php:GUESTphp_ROLEphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php"Unauthenticatedphp accessphp notphp allowedphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp(php$thisphp-php>php_aclphp-php>isAllowedphp(php$rolephp,php php$classphp,php php$functionphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php"Accessphp notphp allowedphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp PluginLoaderphp forphp thephp Server
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp functionphp getLoaderphp(php)
php php php php php{
php php php php php php php php ifphp(emptyphp(php$thisphp-php>php_loaderphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_loaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_loaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadsphp aphp remotephp classphp orphp methodphp andphp executesphp thephp functionphp andphp returns
php php php php php php*php thephp result
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp Isphp thephp methodphp tophp execute
php php php php php php*php php@paramphp php mixedphp php$paramphp valuesphp forphp thephp method
php php php php php php*php php@returnphp mixedphp php$responsephp thephp resultphp ofphp executingphp thephp method
php php php php php php*php php@throwsphp Zendphp_Amfphp_Serverphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_dispatchphp(php$methodphp,php php$paramsphp php=php nullphp,php php$sourcephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp(php$sourcephp)php php{
php php php php php php php php php php php php ifphp(php(php$mappedphp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:getMappedClassNamephp(php$sourcephp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$sourcephp php=php php$mappedphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$qualifiedNamephp php=php emptyphp(php$sourcephp)php php?php php$methodphp php:php php$sourcephp php.php php'php.php'php php.php php$methodphp;

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_tablephp[php$qualifiedNamephp]php)php)php php{
php php php php php php php php php php php php php/php/php ifphp sourcephp isphp nullphp aphp methodphp thatphp wasphp notphp definedphp wasphp calledphp.
php php php php php php php php php php php php ifphp php(php$sourcephp)php php{
php php php php php php php php php php php php php php php php php$classNamephp php=php strphp_replacephp(php'php.php'php,php php'php_php'php,php php$sourcephp)php;
php php php php php php php php php php php php php php php php ifphp(classphp_existsphp(php$classNamephp,php falsephp)php php&php&php php!issetphp(php$thisphp-php>php_classAllowedphp[php$classNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Canphp notphp callphp php"php'php php.php php$classNamephp php.php php'php"php php-php usephp setClassphp(php)php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getLoaderphp(php)php-php>loadphp(php$classNamephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Classphp php"php'php php.php php$classNamephp php.php php'php"php doesphp notphp existphp:php php'php.php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php Addphp thephp newphp loadedphp classphp tophp thephp serverphp.
php php php php php php php php php php php php php php php php php$thisphp-php>setClassphp(php$classNamephp,php php$sourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_tablephp[php$qualifiedNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Sourcephp isphp nullphp orphp doesnphp'tphp containphp specifiedphp method
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Methodphp php"php'php php.php php$methodphp php.php php'php"php doesphp notphp existphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$infophp php=php php$thisphp-php>php_tablephp[php$qualifiedNamephp]php;
php php php php php php php php php$argvphp php=php php$infophp-php>getInvokeArgumentsphp(php)php;

php php php php php php php php ifphp php(php0php <php countphp(php$argvphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php arrayphp_mergephp(php$paramsphp,php php$argvphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$infophp instanceofphp Zendphp_Serverphp_Reflectionphp_Functionphp)php php{
php php php php php php php php php php php php php$funcphp php=php php$infophp-php>getNamephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_checkAclphp(nullphp,php php$funcphp)php;
php php php php php php php php php php php php php$returnphp php=php callphp_userphp_funcphp_arrayphp(php$funcphp,php php$paramsphp)php;
php php php php php php php php php}php elseifphp php(php$infophp instanceofphp Zendphp_Serverphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php/php/php Getphp class
php php php php php php php php php php php php php$classphp php=php php$infophp-php>getDeclaringClassphp(php)php-php>getNamephp(php)php;
php php php php php php php php php php php php ifphp php(php'staticphp'php php=php=php php$infophp-php>isStaticphp(php)php)php php{
php php php php php php php php php php php php php php php php php/php/php forphp somephp reasonphp,php invokeArgsphp(php)php doesphp notphp workphp thephp samephp as
php php php php php php php php php php php php php php php php php/php/php invokephp(php)php,php andphp expectsphp thephp firstphp argumentphp tophp bephp anphp objectphp.
php php php php php php php php php php php php php php php php php/php/php Sophp,php usingphp aphp callbackphp ifphp thephp methodphp isphp staticphp.
php php php php php php php php php php php php php php php php php$thisphp-php>php_checkAclphp(php$classphp,php php$infophp-php>getNamephp(php)php)php;
php php php php php php php php php php php php php php php php php$returnphp php=php callphp_userphp_funcphp_arrayphp(arrayphp(php$classphp,php php$infophp-php>getNamephp(php)php)php,php php$paramsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Objectphp methods
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$objectphp php=php php$infophp-php>getDeclaringClassphp(php)php-php>newInstancephp(php)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Errorphp instantiatingphp classphp php'php php.php php$classphp php.php php'php tophp invokephp methodphp php'php php.php php$infophp-php>getNamephp(php)php php.php php'php:php php'php.php$ephp-php>getMessagephp(php)php,php php6php2php1php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_checkAclphp(php$objectphp,php php$infophp-php>getNamephp(php)php)php;
php php php php php php php php php php php php php php php php php$returnphp php=php php$infophp-php>invokeArgsphp(php$objectphp,php php$paramsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Methodphp missingphp implementationphp php'php php.php getphp_classphp(php$infophp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlesphp eachphp ofphp thephp php1php1php differentphp commandphp messagephp typesphp.
php php php php php php*
php php php php php php*php Aphp commandphp messagephp isphp aphp flexphp.messagingphp.messagesphp.CommandMessage
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessage
php php php php php php*php php@paramphp php Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp php$message
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_Messagingphp_AcknowledgeMessage
php php php php php php*php/
php php php php protectedphp functionphp php_loadCommandMessagephp(Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp php$messagephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Valuephp/Messagingphp/AcknowledgeMessagephp.phpphp'php;
php php php php php php php php switchphp(php$messagephp-php>operationphp)php php{
php php php php php php php php php php php php casephp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp:php:DISCONNECTphp_OPERATIONphp php:
php php php php php php php php php php php php casephp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp:php:CLIENTphp_PINGphp_OPERATIONphp php:
php php php php php php php php php php php php php php php php php$returnphp php=php newphp Zendphp_Amfphp_Valuephp_Messagingphp_AcknowledgeMessagephp(php$messagephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp:php:LOGINphp_OPERATIONphp php:
php php php php php php php php php php php php php php php php php$dataphp php=php explodephp(php'php:php'php,php basephp6php4php_decodephp(php$messagephp-php>bodyphp)php)php;
php php php php php php php php php php php php php php php php php$useridphp php=php php$dataphp[php0php]php;
php php php php php php php php php php php php php php php php php$passwordphp php=php issetphp(php$dataphp[php1php]php)php?php$dataphp[php1php]php:php"php"php;
php php php php php php php php php php php php php php php php ifphp(emptyphp(php$useridphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Loginphp failedphp:php usernamephp notphp suppliedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp(php!php$thisphp-php>php_handleAuthphp(php$useridphp,php php$passwordphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Authenticationphp failedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$returnphp php=php newphp Zendphp_Amfphp_Valuephp_Messagingphp_AcknowledgeMessagephp(php$messagephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php casephp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp:php:LOGOUTphp_OPERATIONphp php:
php php php php php php php php php php php php php php php php ifphp(php$thisphp-php>php_authphp)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Authphp:php:getInstancephp(php)php-php>clearIdentityphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$returnphp php=php newphp Zendphp_Amfphp_Valuephp_Messagingphp_AcknowledgeMessagephp(php$messagephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'CommandMessagephp:php:php'php php.php php$messagephp-php>operationphp php.php php'php notphp implementedphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp appropriatephp errorphp message
php php php php php php*
php php php php php php*php php@paramphp intphp php$objectEncodingphp Currentphp AMFphp encoding
php php php php php php*php php@paramphp stringphp php$messagephp Messagephp thatphp wasphp beingphp processedphp whenphp errorphp happened
php php php php php php*php php@paramphp stringphp php$descriptionphp Errorphp description
php php php php php php*php php@paramphp mixedphp php$detailphp Detailedphp dataphp aboutphp thephp error
php php php php php php*php php@paramphp intphp php$codephp Errorphp code
php php php php php php*php php@paramphp intphp php$linephp Errorphp line
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_Messagingphp_ErrorMessagephp|array
php php php php php php*php/
php php php php protectedphp functionphp php_errorMessagephp(php$objectEncodingphp,php php$messagephp,php php$descriptionphp,php php$detailphp,php php$codephp,php php$linephp)
php php php php php{
php php php php php php php php php$returnphp php=php nullphp;
php php php php php php php php switchphp php(php$objectEncodingphp)php php{
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp_ENCODINGphp php:
php php php php php php php php php php php php php php php php returnphp arrayphp php(
php php php php php php php php php php php php php php php php php php php php php php php php php'descriptionphp'php php=php>php php(php$thisphp-php>isProductionphp php(php)php)php php?php php'php'php php:php php$descriptionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'detailphp'php php=php>php php(php$thisphp-php>isProductionphp php(php)php)php php?php php'php'php php:php php$detailphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'linephp'php php=php>php php(php$thisphp-php>isProductionphp php(php)php)php php?php php0php php:php php$linephp,
php php php php php php php php php php php php php php php php php php php php php php php php php'codephp'php php=php>php php$code
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp_ENCODINGphp php:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Valuephp/Messagingphp/ErrorMessagephp.phpphp'php;
php php php php php php php php php php php php php php php php php$returnphp php=php newphp Zendphp_Amfphp_Valuephp_Messagingphp_ErrorMessagephp php(php php$messagephp php)php;
php php php php php php php php php php php php php php php php php$returnphp-php>faultStringphp php=php php$thisphp-php>isProductionphp php(php)php php?php php'php'php php:php php$descriptionphp;
php php php php php php php php php php php php php php php php php$returnphp-php>faultCodephp php=php php$codephp;
php php php php php php php php php php php php php php php php php$returnphp-php>faultDetailphp php=php php$thisphp-php>isProductionphp php(php)php php?php php'php'php php:php php$detailphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp AMFphp authentication
php php php php php php*
php php php php php php*php php@paramphp stringphp php$userid
php php php php php php*php php@paramphp stringphp php$password
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_handleAuthphp(php php$useridphp,php php php$passwordphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_authphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_authphp-php>setCredentialsphp(php$useridphp,php php$passwordphp)php;
php php php php php php php php php$authphp php=php Zendphp_Authphp:php:getInstancephp(php)php;
php php php php php php php php php$resultphp php=php php$authphp-php>authenticatephp(php$thisphp-php>php_authphp)php;
php php php php php php php php ifphp php(php$resultphp-php>isValidphp(php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>isSessionphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setSessionphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php authenticationphp failedphp,php goodphp bye
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Authenticationphp failedphp:php php"php php.php joinphp(php"php\nphp"php,
php php php php php php php php php php php php php php php php php php php php php$resultphp-php>getMessagesphp(php)php)php,php php$resultphp-php>getCodephp(php)php)php;
php php php php php php php php php}

php php php php php}

php php php php php/php*php*
php php php php php php*php Takesphp thephp deserializedphp AMFphp requestphp andphp performsphp anyphp operationsphp.
php php php php php php*
php php php php php php*php php@todophp php php shouldphp implementphp andphp SPLphp observerphp patternphp forphp customphp AMFphp headers
php php php php php php*php php@todophp php php DescribeServicephp support
php php php php php php*php php@paramphp php Zendphp_Amfphp_Requestphp php$request
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php php@throwsphp Zendphp_Amfphp_serverphp_Exceptionphp|Exception
php php php php php php*php/
php php php php protectedphp functionphp php_handlephp(Zendphp_Amfphp_Requestphp php$requestphp)
php php php php php{
php php php php php php php php php/php/php Getphp thephp objectphp encodingphp ofphp thephp requestphp.
php php php php php php php php php$objectEncodingphp php=php php$requestphp-php>getObjectEncodingphp(php)php;

php php php php php php php php php/php/php createphp aphp responsephp objectphp tophp placephp thephp outputphp fromphp thephp servicesphp.
php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;

php php php php php php php php php/php/php setphp responsephp encoding
php php php php php php php php php$responsephp-php>setObjectEncodingphp(php$objectEncodingphp)php;

php php php php php php php php php$responseBodyphp php=php php$requestphp-php>getAmfBodiesphp(php)php;

php php php php php php php php php$handleAuthphp php=php falsephp;
php php php php php php php php ifphp php(php$thisphp-php>php_authphp)php php{
php php php php php php php php php php php php php$headersphp php=php php$requestphp-php>getAmfHeadersphp(php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$headersphp[Zendphp_Amfphp_Constantsphp:php:CREDENTIALSphp_HEADERphp]php)php php&php&
php php php php php php php php php php php php php php php php issetphp(php$headersphp[Zendphp_Amfphp_Constantsphp:php:CREDENTIALSphp_HEADERphp]php-php>useridphp)php)php php{
php php php php php php php php php php php php php php php php php$handleAuthphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Iteratephp throughphp eachphp ofphp thephp servicephp callsphp inphp thephp AMFphp request
php php php php php php php php foreachphp(php$responseBodyphp asphp php$bodyphp)
php php php php php php php php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php ifphp php(php$handleAuthphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_handleAuthphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$headersphp[Zendphp_Amfphp_Constantsphp:php:CREDENTIALSphp_HEADERphp]php-php>useridphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$headersphp[Zendphp_Amfphp_Constantsphp:php:CREDENTIALSphp_HEADERphp]php-php>passwordphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php usephp RequestPersistentHeaderphp tophp clearphp credentials
php php php php php php php php php php php php php php php php php php php php php php php php php$responsephp-php>addAmfHeaderphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Amfphp_Valuephp_MessageHeaderphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Amfphp_Constantsphp:php:PERSISTENTphp_HEADERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_Amfphp_Valuephp_MessageHeaderphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Amfphp_Constantsphp:php:CREDENTIALSphp_HEADERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp,php nullphp)php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$handleAuthphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$objectEncodingphp php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp_ENCODINGphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php AMFphp0php Objectphp Encoding
php php php php php php php php php php php php php php php php php php php php php$targetURIphp php=php php$bodyphp-php>getTargetURIphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$messagephp php=php php'php'php;

php php php php php php php php php php php php php php php php php php php php php/php/php Splitphp thephp targetphp stringphp intophp itsphp valuesphp.
php php php php php php php php php php php php php php php php php php php php php$sourcephp php=php substrphp(php$targetURIphp,php php0php,php strrposphp(php$targetURIphp,php php'php.php'php)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$sourcephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Breakphp offphp methodphp namephp fromphp namespacephp intophp source
php php php php php php php php php php php php php php php php php php php php php php php php php$methodphp php=php substrphp(strrchrphp(php$targetURIphp,php php'php.php'php)php,php php1php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_dispatchphp(php$methodphp,php php$bodyphp-php>getDataphp(php)php,php php$sourcephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Justphp havephp aphp methodphp namephp.
php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_dispatchphp(php$targetURIphp,php php$bodyphp-php>getDataphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php AMFphp3php readphp messagephp type
php php php php php php php php php php php php php php php php php php php php php$messagephp php=php php$bodyphp-php>getDataphp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$messagephp instanceofphp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php asyncphp callphp withphp commandphp message
php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_loadCommandMessagephp(php$messagephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php$messagephp instanceofphp Zendphp_Amfphp_Valuephp_Messagingphp_RemotingMessagephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Valuephp/Messagingphp/AcknowledgeMessagephp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp php=php newphp Zendphp_Amfphp_Valuephp_Messagingphp_AcknowledgeMessagephp(php$messagephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp-php>bodyphp php=php php$thisphp-php>php_dispatchphp(php$messagephp-php>operationphp,php php$messagephp-php>bodyphp,php php$messagephp-php>sourcephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Amfphp3php messagephp sentphp withphp netConnection
php php php php php php php php php php php php php php php php php php php php php php php php php$targetURIphp php=php php$bodyphp-php>getTargetURIphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Splitphp thephp targetphp stringphp intophp itsphp valuesphp.
php php php php php php php php php php php php php php php php php php php php php php php php php$sourcephp php=php substrphp(php$targetURIphp,php php0php,php strrposphp(php$targetURIphp,php php'php.php'php)php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$sourcephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Breakphp offphp methodphp namephp fromphp namespacephp intophp source
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$methodphp php=php substrphp(strrchrphp(php$targetURIphp,php php'php.php'php)php,php php1php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_dispatchphp(php$methodphp,php php$bodyphp-php>getDataphp(php)php,php php$sourcephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Justphp havephp aphp methodphp namephp.
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_dispatchphp(php$targetURIphp,php php$bodyphp-php>getDataphp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$responseTypephp php=php Zendphp_AMFphp_Constantsphp:php:RESULTphp_METHODphp;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_errorMessagephp(php$objectEncodingphp,php php$messagephp,
php php php php php php php php php php php php php php php php php php php php php$ephp-php>getMessagephp(php)php,php php$ephp-php>getTraceAsStringphp(php)php,php$ephp-php>getCodephp(php)php,php php php$ephp-php>getLinephp(php)php)php;
php php php php php php php php php php php php php php php php php$responseTypephp php=php Zendphp_AMFphp_Constantsphp:php:STATUSphp_METHODphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$responseURIphp php=php php$bodyphp-php>getResponseURIphp(php)php php.php php$responseTypephp;
php php php php php php php php php php php php php$newBodyphp php php php php php=php newphp Zendphp_Amfphp_Valuephp_MessageBodyphp(php$responseURIphp,php nullphp,php php$returnphp)php;
php php php php php php php php php php php php php$responsephp-php>addAmfBodyphp(php$newBodyphp)php;
php php php php php php php php php}
php php php php php php php php php/php/php Addphp aphp sessionphp headerphp tophp thephp bodyphp ifphp sessionphp isphp requestedphp.
php php php php php php php php ifphp(php$thisphp-php>isSessionphp(php)php)php php{
php php php php php php php php php php php php$currentIDphp php=php sessionphp_idphp(php)php;
php php php php php php php php php php php php$jointphp php=php php"php?php"php;
php php php php php php php php php php php ifphp(issetphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php)php)php php{
php php php php php php php php php php php php php php php ifphp(php!strposphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php,php php$currentIDphp)php php!php=php=php FALSEphp)php php{
php php php php php php php php php php php php php php php php php php php ifphp(strrposphp(php$php_SERVERphp[php'QUERYphp_STRINGphp'php]php,php php"php?php"php)php php!php=php=php FALSEphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php$jointphp php=php php"php&php"php;
php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php createphp aphp newphp AMFphp messagephp headerphp withphp thephp sessionphp idphp asphp aphp variablephp.
php php php php php php php php php php php php php$sessionValuephp php=php php$jointphp php.php php$thisphp-php>php_sessionNamephp php.php php"php=php"php php.php php$currentIDphp;
php php php php php php php php php php php php php$sessionHeaderphp php=php newphp Zendphp_Amfphp_Valuephp_MessageHeaderphp(Zendphp_Amfphp_Constantsphp:php:URLphp_APPENDphp_HEADERphp,php falsephp,php php$sessionValuephp)php;
php php php php php php php php php php php php php$responsephp-php>addAmfHeaderphp(php$sessionHeaderphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php serializephp thephp responsephp andphp returnphp serializedphp bodyphp.
php php php php php php php php php$responsephp-php>finalizephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp anphp AMFphp callphp fromphp thephp gatewayphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|Zendphp_Amfphp_Requestphp php$requestphp Optional
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php/
php php php php publicphp functionphp handlephp(php$requestphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Checkphp ifphp requestphp wasphp passedphp otherwisephp getphp itphp fromphp thephp server
php php php php php php php php ifphp php(php$requestphp php=php=php=php nullphp php|php|php php!php$requestphp instanceofphp Zendphp_Amfphp_Requestphp)php php{
php php php php php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>isSessionphp(php)php)php php{
php php php php php php php php php php php php php php/php/php Checkphp ifphp aphp sessionphp isphp beingphp sentphp fromphp thephp amfphp call
php php php php php php php php php php php php php ifphp php(issetphp(php$php_COOKIEphp[php$thisphp-php>php_sessionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php sessionphp_idphp(php$php_COOKIEphp[php$thisphp-php>php_sessionNamephp]php)php;
php php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp errorsphp thatphp mayphp havephp happendphp inphp deserializationphp ofphp Requestphp.
php php php php php php php php tryphp php{
php php php php php php php php php php php php php/php/php Takephp convertedphp PHPphp objectsphp andphp handlephp servicephp callphp.
php php php php php php php php php php php php php/php/php Serializephp tophp Zendphp_Amfphp_responsephp forphp outputphp stream
php php php php php php php php php php php php php$thisphp-php>php_handlephp(php$requestphp)php;
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php Handlephp anyphp errorsphp inphp thephp serializationphp andphp servicephp php callsphp.
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Handlephp errorphp:php php'php php.php php$ephp-php>getMessagephp(php)php php.php php'php php'php php.php php$ephp-php>getLinephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp thephp Amfphp serializedphp outputphp string
php php php php php php php php returnphp php$responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp requestphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Amfphp_Requestphp php$request
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setRequestphp(php$requestphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$requestphp)php php&php&php classphp_existsphp(php$requestphp)php)php php{
php php php php php php php php php php php php php$requestphp php=php newphp php$requestphp(php)php;
php php php php php php php php php php php php ifphp php(php!php$requestphp instanceofphp Zendphp_Amfphp_Requestphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Invalidphp requestphp classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php!php$requestphp instanceofphp Zendphp_Amfphp_Requestphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Invalidphp requestphp objectphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_requestphp php=php php$requestphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp currentlyphp registeredphp requestphp object
php php php php php php*
php php php php php php*php php@returnphp nullphp|Zendphp_Amfphp_Request
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_requestphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Requestphp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setRequestphp(newphp Zendphp_Amfphp_Requestphp_Httpphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Publicphp accessphp methodphp tophp privatephp Zendphp_Amfphp_Serverphp_Responsephp reference
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Amfphp_Serverphp_Responsephp php$response
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(php$responsephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$responsephp)php php&php&php classphp_existsphp(php$responsephp)php)php php{
php php php php php php php php php php php php php$responsephp php=php newphp php$responsephp(php)php;
php php php php php php php php php php php php ifphp php(php!php$responsephp instanceofphp Zendphp_Amfphp_Responsephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Invalidphp responsephp classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php!php$responsephp instanceofphp Zendphp_Amfphp_Responsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Invalidphp responsephp objectphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp aphp referencephp tophp thephp Zendphp_Amfphp_responsephp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Amfphp_Serverphp_Response
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$responsephp php=php php$thisphp-php>php_responsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Responsephp/Httpphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>setResponsephp(newphp Zendphp_Amfphp_Responsephp_Httpphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp aphp classphp orphp objectphp tophp thephp server
php php php php php php*
php php php php php php*php Classphp mayphp bephp eitherphp aphp classphp namephp orphp anphp instantiatedphp objectphp.php Reflection
php php php php php php*php isphp donephp onphp thephp classphp orphp objectphp tophp determinephp thephp availablephp public
php php php php php php*php methodsphp,php andphp eachphp isphp attachedphp tophp thephp serverphp asphp andphp availablephp methodphp.php If
php php php php php php*php aphp php$namespacephp hasphp beenphp providedphp,php thatphp namespacephp isphp usedphp tophp prefix
php php php php php php*php AMFphp servicephp callphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|objectphp php$class
php php php php php php*php php@paramphp php stringphp php$namespacephp Optional
php php php php php php*php php@paramphp php mixedphp php$argphp Optionalphp argumentsphp tophp passphp tophp aphp method
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php php@throwsphp Zendphp_Amfphp_Serverphp_Exceptionphp onphp invalidphp input
php php php php php php*php/
php php php php publicphp functionphp setClassphp(php$classphp,php php$namespacephp php=php php'php'php,php php$argvphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$classphp)php php&php&php php!classphp_existsphp(php$classphp)php)php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Invalidphp methodphp orphp classphp'php)php;
php php php php php php php php php}php elseifphp php(php!isphp_stringphp(php$classphp)php php&php&php php!isphp_objectphp(php$classphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Invalidphp methodphp orphp classphp;php mustphp bephp aphp classnamephp orphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php$argvphp php=php nullphp;
php php php php php php php php ifphp php(php2php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php arrayphp_slicephp(funcphp_getphp_argsphp(php)php,php php2php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Usephp thephp classphp namephp asphp thephp namephp spacephp byphp defaultphp.

php php php php php php php php ifphp php(php$namespacephp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$namespacephp php=php isphp_objectphp(php$classphp)php php?php getphp_classphp(php$classphp)php php:php php$classphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_classAllowedphp[isphp_objectphp(php$classphp)php php?php getphp_classphp(php$classphp)php php:php php$classphp]php php=php truephp;

php php php php php php php php php$thisphp-php>php_methodsphp[php]php php=php Zendphp_Serverphp_Reflectionphp:php:reflectClassphp(php$classphp,php php$argvphp,php php$namespacephp)php;
php php php php php php php php php$thisphp-php>php_buildDispatchTablephp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachphp aphp functionphp tophp thephp server
php php php php php php*
php php php php php php*php Additionalphp argumentsphp tophp passphp tophp thephp functionphp atphp dispatchphp mayphp bephp passedphp;
php php php php php php*php anyphp argumentsphp followingphp thephp namespacephp willphp bephp aggregatedphp andphp passedphp at
php php php php php php*php dispatchphp timephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$functionphp Validphp callback
php php php php php php*php php@paramphp php stringphp php$namespacephp Optionalphp namespacephp prefix
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php php@throwsphp Zendphp_Amfphp_Serverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp addFunctionphp(php$functionphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$functionphp)php php&php&php php!isphp_arrayphp(php$functionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Unablephp tophp attachphp functionphp'php)php;
php php php php php php php php php}

php php php php php php php php php$argvphp php=php nullphp;
php php php php php php php php ifphp php(php2php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php arrayphp_slicephp(funcphp_getphp_argsphp(php)php,php php2php)php;
php php php php php php php php php}

php php php php php php php php php$functionphp php=php php(arrayphp)php php$functionphp;
php php php php php php php php foreachphp php(php$functionphp asphp php$funcphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$funcphp)php php|php|php php!functionphp_existsphp(php$funcphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Unablephp tophp attachphp functionphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_methodsphp[php]php php=php Zendphp_Serverphp_Reflectionphp:php:reflectFunctionphp(php$funcphp,php php$argvphp,php php$namespacephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_buildDispatchTablephp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Createsphp anphp arrayphp ofphp directoriesphp inphp whichphp servicesphp canphp residephp.
php php php php php php*php TODOphp:php addphp supportphp forphp prefixesphp?
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dir
php php php php php php*php/
php php php php publicphp functionphp addDirectoryphp(php$dirphp)
php php php php php{
php php php php php php php php php$thisphp-php>getLoaderphp(php)php-php>addPrefixPathphp(php"php"php,php php$dirphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp directoriesphp thatphp canphp holdphp servicesphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDirectoryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getLoaderphp(php)php-php>getPathsphp(php"php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php(Rephp)Buildphp thephp dispatchphp table
php php php php php php*
php php php php php php*php Thephp dispatchphp tablephp consistsphp ofphp aphp anphp arrayphp ofphp methodphp namephp php=php>
php php php php php php*php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp pairs
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_buildDispatchTablephp(php)
php php php php php{
php php php php php php php php php$tablephp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_methodsphp asphp php$keyphp php=php>php php$dispatchablephp)php php{
php php php php php php php php php php php php ifphp php(php$dispatchablephp instanceofphp Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp)php php{
php php php php php php php php php php php php php php php php php$nsphp php php php=php php$dispatchablephp-php>getNamespacephp(php)php;
php php php php php php php php php php php php php php php php php$namephp php=php php$dispatchablephp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php$namephp php=php emptyphp(php$nsphp)php php?php php$namephp php:php php$nsphp php.php php'php.php'php php.php php$namephp;

php php php php php php php php php php php php php php php php ifphp php(issetphp(php$tablephp[php$namephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Duplicatephp methodphp registeredphp:php php'php php.php php$namephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tablephp[php$namephp]php php=php php$dispatchablephp;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$dispatchablephp instanceofphp Zendphp_Serverphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$dispatchablephp-php>getMethodsphp(php)php asphp php$methodphp)php php{
php php php php php php php php php php php php php php php php php php php php php$nsphp php php php=php php$methodphp-php>getNamespacephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$namephp php=php php$methodphp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$namephp php=php emptyphp(php$nsphp)php php?php php$namephp php:php php$nsphp php.php php'php.php'php php.php php$namephp;

php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$tablephp[php$namephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Serverphp_Exceptionphp(php'Duplicatephp methodphp registeredphp:php php'php php.php php$namephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$tablephp[php$namephp]php php=php php$methodphp;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_tablephp php=php php$tablephp;
php php php php php}



php php php php php/php*php*
php php php php php php*php Raisephp aphp serverphp fault
php php php php php php*
php php php php php php*php Unimplemented
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Exceptionphp php$fault
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp faultphp(php$faultphp php=php nullphp,php php$codephp php=php php4php0php4php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp registeredphp methods
php php php php php php*
php php php php php php*php Returnsphp anphp arrayphp ofphp dispatchablesphp php(Zendphp_Serverphp_Reflectionphp_Functionphp,
php php php php php php*php php_Methodphp,php andphp php_Classphp itemsphp)php.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFunctionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp serverphp persistence
php php php php php php*
php php php php php php*php Unimplemented
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$mode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setPersistencephp(php$modephp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp serverphp definition
php php php php php php*
php php php php php php*php Unimplemented
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$definition
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadFunctionsphp(php$definitionphp)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapphp ActionScriptphp classesphp tophp PHPphp classes
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$asClass
php php php php php php*php php@paramphp php stringphp php$phpClass
php php php php php php*php php@returnphp Zendphp_Amfphp_Server
php php php php php php*php/
php php php php publicphp functionphp setClassMapphp(php$asClassphp,php php$phpClassphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;
php php php php php php php php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:setMappingphp(php$asClassphp,php php$phpClassphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listphp allphp availablephp methods
php php php php php php*
php php php php php php*php Returnsphp anphp arrayphp ofphp methodphp namesphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp listMethodsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_tablephp)php;
php php php php php}
php}
