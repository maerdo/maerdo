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
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Controllerphp_Routerphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Routerphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Simplephp firstphp implementationphp ofphp aphp routerphp,php tophp bephp replaced
php php*php withphp rulesphp-basedphp URIphp processorphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Router
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Routerphp_Abstractphp implementsphp Zendphp_Controllerphp_Routerphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Frontphp controllerphp instance
php php php php php php*php php@varphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php protectedphp php$php_frontControllerphp;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp invocationphp parametersphp tophp usephp whenphp instantiatingphp action
php php php php php php*php controllers
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_invokeParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setParamsphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp orphp modifyphp aphp parameterphp tophp usephp whenphp instantiatingphp anphp actionphp controller
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Router
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
php php php php php php*php php@returnphp Zendphp_Controllerphp_Router
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
php php php php php php*php php@returnphp Zendphp_Controllerphp_Router
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
php php php php php php*php Retrievephp Frontphp Controller
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp getFrontControllerphp(php)
php php php php php{
php php php php php php php php php/php/php Usedphp cachephp versionphp ifphp found
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_frontControllerphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_frontControllerphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_frontControllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_frontControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Frontphp Controller
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Frontphp php$controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Routerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp setFrontControllerphp(Zendphp_Controllerphp_Frontphp php$controllerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_frontControllerphp php=php php$controllerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php}
