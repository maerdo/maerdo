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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Requestphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Hasphp thephp actionphp beenphp dispatchedphp?
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_dispatchedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Module
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_modulephp;

php php php php php/php*php*
php php php php php php*php Modulephp keyphp forphp retrievingphp modulephp fromphp params
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_moduleKeyphp php=php php'modulephp'php;

php php php php php/php*php*
php php php php php php*php Controller
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_controllerphp;

php php php php php/php*php*
php php php php php php*php Controllerphp keyphp forphp retrievingphp controllerphp fromphp params
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_controllerKeyphp php=php php'controllerphp'php;

php php php php php/php*php*
php php php php php php*php Action
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_actionphp;

php php php php php/php*php*
php php php php php php*php Actionphp keyphp forphp retrievingphp actionphp fromphp params
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_actionKeyphp php=php php'actionphp'php;

php php php php php/php*php*
php php php php php php*php Requestphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Retrievephp thephp modulephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModuleNamephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_modulephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_modulephp php=php php$thisphp-php>getParamphp(php$thisphp-php>getModuleKeyphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_modulephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp modulephp namephp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setModuleNamephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_modulephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp controllerphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getControllerNamephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_controllerphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_controllerphp php=php php$thisphp-php>getParamphp(php$thisphp-php>getControllerKeyphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_controllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp controllerphp namephp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setControllerNamephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_controllerphp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp actionphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getActionNamephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_actionphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_actionphp php=php php$thisphp-php>getParamphp(php$thisphp-php>getActionKeyphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_actionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp actionphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setActionNamephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionphp php=php php$valuephp;
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp ZFphp-php3php4php6php5
php php php php php php php php php php*php/
php php php php php php php php ifphp php(nullphp php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setParamphp(php$thisphp-php>getActionKeyphp(php)php,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp modulephp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModuleKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_moduleKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp modulephp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setModuleKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_moduleKeyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp controllerphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getControllerKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_controllerKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp controllerphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setControllerKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_controllerKeyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp actionphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getActionKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp actionphp key
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setActionKeyphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionKeyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp anphp actionphp parameter
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$keyphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp onlyphp userphp paramsphp php(iphp.ephp,php anyphp paramphp specificphp tophp thephp objectphp andphp notphp thephp environmentphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUserParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp userphp paramphp php(iphp.ephp,php aphp paramphp specificphp tophp thephp objectphp andphp notphp thephp environmentphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$defaultphp Defaultphp valuephp tophp usephp ifphp keyphp notphp found
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getUserParamphp(php$keyphp,php php$defaultphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp actionphp parameter
php php php php php php*
php php php php php php*php Aphp php$valuephp ofphp nullphp willphp unsetphp thephp php$keyphp ifphp itphp exists
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;

php php php php php php php php ifphp php(php(nullphp php=php=php=php php$valuephp)php php&php&php issetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php;
php php php php php php php php php}php elseifphp php(nullphp php!php=php=php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_paramsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp actionphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php php publicphp functionphp getParamsphp(php)
php php php php php php{
php php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp actionphp parametersphp enphp massephp;php doesphp notphp overwrite
php php php php php php*
php php php php php php*php Nullphp valuesphp willphp unsetphp thephp associatedphp keyphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$array
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$arrayphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp php=php php$thisphp-php>php_paramsphp php+php php(arrayphp)php php$arrayphp;

php php php php php php php php foreachphp php(php$thisphp-php>php_paramsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_paramsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp allphp userphp parameters
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearParamsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp requestphp hasphp beenphp dispatched
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setDispatchedphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dispatchedphp php=php php$flagphp php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp thephp requestphp hasphp beenphp dispatched
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isDispatchedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dispatchedphp;
php php php php php}
php}
