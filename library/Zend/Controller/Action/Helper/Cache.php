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
php php*php php@versionphp php php php php$Idphp:php Cachephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Manager
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Managerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_Cache
php php php php extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Localphp Cachephp Managerphp objectphp usedphp byphp Helper
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Manager
php php php php php php*php/
php php php php protectedphp php$php_managerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Indexedphp mapphp ofphp Actionsphp tophp attemptphp Pagephp cachingphp onphp byphp Controller
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_cachingphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Indexedphp mapphp ofphp Tagsphp byphp Controllerphp andphp Action
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Indexedphp mapphp ofphp Extensionsphp byphp Controllerphp andphp Action
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_extensionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Trackphp outputphp bufferingphp condition
php php php php php php*php/
php php php php protectedphp php$php_obStartedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Tellphp thephp helperphp whichphp actionsphp arephp cacheablephp andphp underphp which
php php php php php php*php tagsphp php(ifphp applicablephp)php theyphp shouldphp bephp recordedphp with
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$actions
php php php php php php*php php@paramphp arrayphp php$tags
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp directphp(arrayphp php$actionsphp,php arrayphp php$tagsphp php=php arrayphp(php)php,php php$extensionphp php=php nullphp)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getRequestphp(php)php-php>getControllerNamephp(php)php;
php php php php php php php php php$actionsphp php=php arrayphp_uniquephp(php$actionsphp)php;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_cachingphp[php$controllerphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_cachingphp[php$controllerphp]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$tagsphp)php)php php{
php php php php php php php php php php php php php$tagsphp php=php arrayphp_uniquephp(php$tagsphp)php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_tagsphp[php$controllerphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_tagsphp[php$controllerphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php foreachphp php(php$actionsphp asphp php$actionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_cachingphp[php$controllerphp]php[php]php php=php php$actionphp;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$tagsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_tagsphp[php$controllerphp]php[php$actionphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tagsphp[php$controllerphp]php[php$actionphp]php[php]php php=php php$tagphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$extensionphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_extensionsphp[php$controllerphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$controllerphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(php$actionsphp asphp php$actionphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_extensionsphp[php$controllerphp]php[php$actionphp]php php=php php$extensionphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp specificphp pagephp cachephp staticphp filephp basedphp onphp its
php php php php php php*php relativephp URLphp fromphp thephp applicationphp'sphp publicphp directoryphp.
php php php php php php*php Thephp filephp extensionphp isphp notphp requiredphp herephp;php usuallyphp matches
php php php php php php*php thephp originalphp REQUESTphp_URIphp thatphp wasphp cachedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$relativeUrl
php php php php php php*php php@paramphp boolphp php$recursive
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp removePagephp(php$relativeUrlphp,php php$recursivephp php=php falsephp)
php php php php php{
php php php php php php php php php$cachephp php=php php$thisphp-php>getCachephp(Zendphp_Cachephp_Managerphp:php:PAGECACHEphp)php;
php php php php php php php php ifphp php(php$recursivephp)php php{
php php php php php php php php php php php php php$backendphp php=php php$cachephp-php>getBackendphp(php)php;
php php php php php php php php php php php php ifphp php(php(php$backendphp instanceofphp Zendphp_Cachephp_Backendphp)
php php php php php php php php php php php php php php php php php&php&php methodphp_existsphp(php$backendphp,php php'removeRecursivelyphp'php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php returnphp php$backendphp-php>removeRecursivelyphp(php$relativeUrlphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$cachephp-php>removephp(php$relativeUrlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp specificphp pagephp cachephp staticphp filephp basedphp onphp its
php php php php php php*php relativephp URLphp fromphp thephp applicationphp'sphp publicphp directoryphp.
php php php php php php*php Thephp filephp extensionphp isphp notphp requiredphp herephp;php usuallyphp matches
php php php php php php*php thephp originalphp REQUESTphp_URIphp thatphp wasphp cachedphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tags
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp removePagesTaggedphp(arrayphp php$tagsphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getCachephp(Zendphp_Cachephp_Managerphp:php:PAGECACHEphp)
php php php php php php php php php php php php php-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp,php php$tagsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commencephp pagephp cachingphp forphp anyphp cacheablephp actions
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp preDispatchphp(php)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getRequestphp(php)php-php>getControllerNamephp(php)php;
php php php php php php php php php$actionphp php=php php$thisphp-php>getRequestphp(php)php-php>getActionNamephp(php)php;
php php php php php php php php php$statsphp php=php obphp_getphp_statusphp(truephp)php;
php php php php php php php php foreachphp php(php$statsphp asphp php$statusphp)php php{
php php php php php php php php php php php php ifphp php(php$statusphp[php'namephp'php]php php=php=php php'Zendphp_Cachephp_Frontendphp_Pagephp:php:php_flushphp'
php php php php php php php php php php php php php|php|php php$statusphp[php'namephp'php]php php=php=php php'Zendphp_Cachephp_Frontendphp_Capturephp:php:php_flushphp'php)php php{
php php php php php php php php php php php php php php php php php$obStartedphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$obStartedphp)php php&php&php issetphp(php$thisphp-php>php_cachingphp[php$controllerphp]php)php php&php&
php php php php php php php php inphp_arrayphp(php$actionphp,php php$thisphp-php>php_cachingphp[php$controllerphp]php)php)php php{
php php php php php php php php php php php php php$reqUriphp php=php php$thisphp-php>getRequestphp(php)php-php>getRequestUriphp(php)php;
php php php php php php php php php php php php php$tagsphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_tagsphp[php$controllerphp]php[php$actionphp]php)
php php php php php php php php php php php php php&php&php php!emptyphp(php$thisphp-php>php_tagsphp[php$controllerphp]php[php$actionphp]php)php)php php{
php php php php php php php php php php php php php php php php php$tagsphp php=php arrayphp_uniquephp(php$thisphp-php>php_tagsphp[php$controllerphp]php[php$actionphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$extensionphp php=php nullphp;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_extensionsphp[php$controllerphp]php[php$actionphp]php)php)php php{
php php php php php php php php php php php php php php php php php$extensionphp php=php php$thisphp-php>php_extensionsphp[php$controllerphp]php[php$actionphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>getCachephp(Zendphp_Cachephp_Managerphp:php:PAGECACHEphp)
php php php php php php php php php php php php php php php php php-php>startphp(php$thisphp-php>php_encodeCacheIdphp(php$reqUriphp)php,php php$tagsphp,php php$extensionphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Encodephp aphp Cachephp IDphp asphp hexadecimalphp.php Thisphp isphp aphp workaroundphp becausephp Backendphp IDphp validation
php php php php php php*php isphp trappedphp inphp thephp Frontendphp classesphp.php Willphp tryphp tophp getphp thisphp reversedphp forphp ZFphp php2php.php0
php php php php php php*php becausephp itphp'sphp aphp majorphp annoyancephp tophp havephp IDsphp sophp restrictedphp!
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@paramphp stringphp php$requestUri
php php php php php php*php/
php php php php protectedphp functionphp php_encodeCacheIdphp(php$requestUriphp)
php php php php php{
php php php php php php php php returnphp binphp2hexphp(php$requestUriphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp instancephp ofphp thephp Cachephp Managerphp forphp thisphp helper
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp_Managerphp php$manager
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setManagerphp(Zendphp_Cachephp_Managerphp php$managerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_managerphp php=php php$managerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Cachephp Managerphp instancephp orphp instantiatephp thephp objectphp ifphp not
php php php php php php*php existsphp.php Attemptsphp tophp loadphp fromphp bootstrapphp ifphp availablephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Manager
php php php php php php*php/
php php php php publicphp functionphp getManagerphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_managerphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_managerphp;
php php php php php php php php php}
php php php php php php php php php$frontphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php ifphp php(php$frontphp-php>getParamphp(php'bootstrapphp'php)
php php php php php php php php php&php&php php$frontphp-php>getParamphp(php'bootstrapphp'php)php-php>getResourcephp(php'CacheManagerphp'php)php)php php{
php php php php php php php php php php php php returnphp php$frontphp-php>getParamphp(php'bootstrapphp'php)
php php php php php php php php php php php php php php php php php-php>getResourcephp(php'CacheManagerphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_managerphp php=php newphp Zendphp_Cachephp_Managerphp;
php php php php php php php php returnphp php$thisphp-php>php_managerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp listphp ofphp actionsphp forphp thephp currentphp Controllerphp markedphp for
php php php php php php*php caching
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCacheableActionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_cachingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp listphp ofphp tagsphp setphp forphp allphp cacheablephp actions
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCacheableTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tagsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp nonphp-matchedphp methodsphp backphp tophp Zendphp_Cachephp_Managerphp where
php php php php php php*php appropriate
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>getManagerphp(php)php,php php$methodphp)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(
php php php php php php php php php php php php php php php php arrayphp(php$thisphp-php>getManagerphp(php)php,php php$methodphp)php,php php$args
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Methodphp doesphp notphp existphp:php'
php php php php php php php php php php php php php.php php$methodphp)php;
php php php php php}

php}
