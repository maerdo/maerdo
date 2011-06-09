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
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Controllerphp_Pluginphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Registryphp php*php/
requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;

php/php*php*
php php*php Managephp aphp stackphp ofphp actions
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Pluginphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Plugins
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ActionStackphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Controllerphp_Pluginphp_ActionStackphp extendsphp Zendphp_Controllerphp_Pluginphp_Abstract
php{
php php php php php/php*php*php php@varphp Zendphp_Registryphp php*php/
php php php php protectedphp php$php_registryphp;

php php php php php/php*php*
php php php php php php*php Registryphp keyphp underphp whichphp actionsphp arephp stored
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_registryKeyphp php=php php'Zendphp_Controllerphp_Pluginphp_ActionStackphp'php;

php php php php php/php*php*
php php php php php php*php Validphp keysphp forphp stackphp items
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_validKeysphp php=php arrayphp(
php php php php php php php php php'modulephp'php,
php php php php php php php php php'controllerphp'php,
php php php php php php php php php'actionphp'php,
php php php php php php php php php'paramsphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Flagphp tophp determinephp whetherphp requestphp parametersphp arephp clearedphp betweenphp actionsphp,php orphp whetherphp newphp parameters
php php php php php php*php arephp addedphp tophp existingphp requestphp parametersphp.
php php php php php php*
php php php php php php*php php@varphp Bool
php php php php php php*php/
php php php php protectedphp php$php_clearRequestParamsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Registryphp php$registry
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Registryphp php$registryphp php=php nullphp,php php$keyphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$registryphp)php php{
php php php php php php php php php php php php php$registryphp php=php Zendphp_Registryphp:php:getInstancephp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setRegistryphp(php$registryphp)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$keyphp)php php{
php php php php php php php php php php php php php$thisphp-php>setRegistryKeyphp(php$keyphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php php$thisphp-php>getRegistryKeyphp(php)php;
php php php php php php php php php}

php php php php php php php php php$registryphp[php$keyphp]php php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp registryphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Registryphp php$registry
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Registryphp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp registryphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Registry
php php php php php php*php/
php php php php publicphp functionphp getRegistryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp registryphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getRegistryKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp registryphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php*php/
php php php php publicphp functionphp setRegistryKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryKeyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php Setphp clearRequestParamsphp flag
php php php php php php*
php php php php php php*php php php@paramphp php boolphp php$clearRequestParams
php php php php php php*php php php@returnphp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php*php/
php php php php publicphp functionphp setClearRequestParamsphp(php$clearRequestParamsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_clearRequestParamsphp php=php php(boolphp)php php$clearRequestParamsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp clearRequestParamsphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getClearRequestParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_clearRequestParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp actionphp stack
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getStackphp(php)
php php php php php{
php php php php php php php php php$registryphp php=php php$thisphp-php>getRegistryphp(php)php;
php php php php php php php php php$stackphp php php php php=php php$registryphp[php$thisphp-php>getRegistryKeyphp(php)php]php;
php php php php php php php php returnphp php$stackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp stackphp tophp registry
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$stack
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php*php/
php php php php protectedphp functionphp php_saveStackphp(arrayphp php$stackphp)
php php php php php{
php php php php php php php php php$registryphp php=php php$thisphp-php>getRegistryphp(php)php;
php php php php php php php php php$registryphp[php$thisphp-php>getRegistryKeyphp(php)php]php php=php php$stackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Pushphp anphp itemphp ontophp thephp stack
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$next
php php php php php php*php php@returnphp Zendphp_Controllerphp_Pluginphp_ActionStack
php php php php php php*php/
php php php php publicphp functionphp pushStackphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$nextphp)
php php php php php{
php php php php php php php php php$stackphp php=php php$thisphp-php>getStackphp(php)php;
php php php php php php php php arrayphp_pushphp(php$stackphp,php php$nextphp)php;
php php php php php php php php returnphp php$thisphp-php>php_saveStackphp(php$stackphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Popphp anphp itemphp offphp thephp actionphp stack
php php php php php php*
php php php php php php*php php@returnphp falsephp|Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp popStackphp(php)
php php php php php{
php php php php php php php php php$stackphp php=php php$thisphp-php>getStackphp(php)php;
php php php php php php php php ifphp php(php0php php=php=php countphp(php$stackphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$nextphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php$thisphp-php>php_saveStackphp(php$stackphp)php;

php php php php php php php php ifphp php(php!php$nextphp instanceofphp Zendphp_Controllerphp_Requestphp_Abstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'ArrayStackphp shouldphp onlyphp containphp requestphp objectsphp'php)php;
php php php php php php php php php}
php php php php php php php php php$actionphp php=php php$nextphp-php>getActionNamephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$actionphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>popStackphp(php$stackphp)php;
php php php php php php php php php}

php php php php php php php php php$requestphp php php php php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php$controllerphp php=php php$nextphp-php>getControllerNamephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$controllerphp)php)php php{
php php php php php php php php php php php php php$nextphp-php>setControllerNamephp(php$requestphp-php>getControllerNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$modulephp php=php php$nextphp-php>getModuleNamephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$modulephp)php)php php{
php php php php php php php php php php php php php$nextphp-php>setModuleNamephp(php$requestphp-php>getModuleNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$nextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php postDispatchphp(php)php pluginphp hookphp php-php-php checkphp forphp actionsphp inphp stackphp,php andphp dispatchphp ifphp anyphp found
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php/php/php Donphp'tphp movephp onphp tophp nextphp requestphp ifphp thisphp isphp alreadyphp anphp attemptphp to
php php php php php php php php php/php/php forward
php php php php php php php php ifphp php(php!php$requestphp-php>isDispatchedphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setRequestphp(php$requestphp)php;
php php php php php php php php php$stackphp php=php php$thisphp-php>getStackphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$stackphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$nextphp php=php php$thisphp-php>popStackphp(php)php;
php php php php php php php php ifphp php(php!php$nextphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>forwardphp(php$nextphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Forwardphp requestphp withphp nextphp action
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$next
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp forwardphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$nextphp)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>getClearRequestParamsphp(php)php)php php{
php php php php php php php php php php php php php$requestphp-php>clearParamsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$requestphp-php>setModuleNamephp(php$nextphp-php>getModuleNamephp(php)php)
php php php php php php php php php php php php php php php php php-php>setControllerNamephp(php$nextphp-php>getControllerNamephp(php)php)
php php php php php php php php php php php php php php php php php-php>setActionNamephp(php$nextphp-php>getActionNamephp(php)php)
php php php php php php php php php php php php php php php php php-php>setParamsphp(php$nextphp-php>getParamsphp(php)php)
php php php php php php php php php php php php php php php php php-php>setDispatchedphp(falsephp)php;
php php php php php}
php}
