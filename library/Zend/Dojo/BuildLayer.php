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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php BuildLayerphp.phpphp php2php2php2php8php0php php2php0php1php0php-php0php5php-php2php4php php2php0php:php3php9php:php4php5Zphp matthewphp php$
php php*php/

php/php*php*
php php*php Dojophp modulephp layerphp andphp customphp buildphp profilephp generationphp support
php php*
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dojophp_BuildLayer
php{
php php php php php/php*php*
php php php php php php*php Flagphp:php whetherphp orphp notphp tophp consumephp JSphp aggregatedphp inphp thephp dojophp(php)php view
php php php php php php*php helperphp whenphp generatephp thephp modulephp layerphp contents
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_consumeJavascriptphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Flagphp:php whetherphp orphp notphp tophp consumephp dojophp.addOnLoadphp eventsphp registered
php php php php php php*php withphp thephp dojophp(php)php viewphp helperphp whenphp generatingphp thephp modulephp layerphp file
php php php php php php*php contents
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_consumeOnLoadphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Dojophp viewphp helperphp reference
php php php php php php*php php@varphp Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Container
php php php php php php*php/
php php php php protectedphp php$php_dojophp;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp customphp layerphp tophp generate
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_layerNamephp;

php php php php php/php*php*
php php php php php php*php Pathphp tophp thephp customphp layerphp scriptphp relativephp tophp dojophp.jsphp php(usedphp when
php php php php php php*php creatingphp thephp buildphp profilephp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_layerScriptPathphp;

php php php php php/php*php*
php php php php php php*php Buildphp profilephp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_profileOptionsphp php=php arrayphp(
php php php php php php php php php'actionphp'php php php php php php php php php=php>php php'releasephp'php,
php php php php php php php php php'optimizephp'php php php php php php php=php>php php'shrinksafephp'php,
php php php php php php php php php'layerOptimizephp'php php=php>php php'shrinksafephp'php,
php php php php php php php php php'copyTestsphp'php php php php php php=php>php falsephp,
php php php php php php php php php'loaderphp'php php php php php php php php php=php>php php'defaultphp'php,
php php php php php php php php php'cssOptimizephp'php php php php=php>php php'commentsphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Associativephp arrayphp ofphp modulephp/pathphp pairsphp forphp thephp buildphp profile
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_profilePrefixesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Zendphp_Viewphp reference
php php php php php php*php php@varphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_viewphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Dojophp_Exceptionphp forphp invalidphp optionphp argument
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp)php php{
php php php php php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Invalidphp optionsphp providedphp tophp constructorphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php Proxiesphp tophp anyphp setterphp thatphp matchesphp anphp optionphp keyphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$methodsphp php=php getphp_classphp_methodsphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$methodsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Viewphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewphp php=php php$viewphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp viewphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Interfacephp|null
php php php php php php*php/
php php php php publicphp functionphp getViewphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp dojophp(php)php viewphp helperphp instance
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Containerphp php$helper
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setDojoHelperphp(Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Containerphp php$helperphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dojophp php=php php$helperphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp dojophp(php)php viewphp helperphp instance
php php php php php php*
php php php php php php*php Willphp retrievephp itphp fromphp thephp viewphp objectphp ifphp notphp registeredphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Container
php php php php php php*php php@throwsphp Zendphp_Dojophp_Exceptionphp ifphp notphp registeredphp andphp nophp viewphp objectphp found
php php php php php php*php/
php php php php publicphp functionphp getDojoHelperphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_dojophp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$viewphp php=php php$thisphp-php>getViewphp(php)php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Viewphp objectphp notphp registeredphp;php cannotphp retrievephp dojophp helperphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$helperphp php=php php$viewphp-php>getHelperphp(php'dojophp'php)php;
php php php php php php php php php php php php php$thisphp-php>setDojoHelperphp(php$viewphp-php>dojophp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_dojophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp customphp layerphp namephp;php ephp.gphp.php php"customphp.mainphp"
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setLayerNamephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php[aphp-zphp]php[aphp-zphp0php-php9php_php]php*php(php\php.php[aphp-zphp]php[aphp-zphp0php-php9php_php]php*php)php+php$php/iphp'php,php php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Exceptionphp(php'Invalidphp layerphp namephp providedphp;php mustphp bephp ofphp formphp[aphp-zphp]php[aphp-zphp0php-php9php_php]php(php\php.php[aphp-zphp]php[aphp-zphp0php-php9php_php]php)php+php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_layerNamephp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp customphp layerphp name
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLayerNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_layerNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp pathphp tophp thephp customphp layerphp script
php php php php php php*
php php php php php php*php Shouldphp bephp aphp pathphp relativephp tophp dojophp.js
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setLayerScriptPathphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_layerScriptPathphp php=php php(stringphp)php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp customphp layerphp scriptphp path
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getLayerScriptPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_layerScriptPathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp tophp consumephp JSphp aggregatedphp inphp dojophp(php)
php php php php php php*php viewphp helper
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setConsumeJavascriptphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_consumeJavascriptphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp flagphp indicatingphp whetherphp orphp notphp tophp consumephp JSphp aggregatedphp inphp dojophp(php)
php php php php php php*php viewphp helper
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp consumeJavascriptphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_consumeJavascriptphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp tophp consumephp dojophp.addOnLoadphp events
php php php php php php*php aggregatedphp inphp dojophp(php)php viewphp helper
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setConsumeOnLoadphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_consumeOnLoadphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp flagphp indicatingphp whetherphp orphp notphp tophp consumephp dojophp.addOnLoadphp eventsphp aggregatedphp inphp dojophp(php)php viewphp helper
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp consumeOnLoadphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_consumeOnLoadphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp manyphp buildphp profilephp optionsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setProfileOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_profileOptionsphp php+php=php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp manyphp buildphp profilephp optionsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp addProfileOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_profileOptionsphp php=php php$thisphp-php>php_profileOptionsphp php+php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp singlephp buildphp profilephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php valuephp php$value
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp addProfileOptionphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_profileOptionsphp[php(stringphp)php php$keyphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp givenphp buildphp profilephp optionphp setphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasProfileOptionphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php(stringphp)php php$keyphp,php php$thisphp-php>php_profileOptionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp buildphp profilephp option
php php php php php php*
php php php php php php*php Returnsphp nullphp ifphp profilephp optionphp doesphp notphp existphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getProfileOptionphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasProfileOptionphp(php$keyphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_profileOptionsphp[php(stringphp)php php$keyphp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp buildphp profilephp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getProfileOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_profileOptionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp buildphp profilephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp removeProfileOptionphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasProfileOptionphp(php$namephp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_profileOptionsphp[php(stringphp)php php$namephp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp buildphp profilephp options
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp clearProfileOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_profileOptionsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp buildphp profilephp dependencyphp prefix
php php php php php php*
php php php php php php*php Ifphp justphp thephp prefixphp isphp passedphp,php setsphp pathphp tophp php"php.php.php/php$prefixphp"php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php nullphp|stringphp php$path
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp addProfilePrefixphp(php$prefixphp,php php$pathphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$pathphp)php php{
php php php php php php php php php php php php php$pathphp php=php php'php.php.php/php'php php.php php$prefixphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_profilePrefixesphp[php$prefixphp]php php=php arrayphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp multiplephp dependencyphp prefixesphp forphp bulidphp profile
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$prefixes
php php php php php php*php php@returnphp Zendphp_Dojophp_BuildLayer
php php php php php php*php/
php php php php publicphp functionphp setProfilePrefixesphp(arrayphp php$prefixesphp)
php php php php php{
php php php php php php php php foreachphp php(php$prefixesphp asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php$thisphp-php>addProfilePrefixphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp buildphp profilephp dependencyphp prefixes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getProfilePrefixesphp(php)
php php php php php{
php php php php php php php php php$layerNamephp php=php php$thisphp-php>getLayerNamephp(php)php;
php php php php php php php php ifphp php(nullphp php!php=php=php php$layerNamephp)php php{
php php php php php php php php php php php php php$prefixphp php php php php=php php$thisphp-php>php_getPrefixphp(php$layerNamephp)php;
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$prefixphp,php php$thisphp-php>php_profilePrefixesphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addProfilePrefixphp(php$prefixphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$viewphp php=php php$thisphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$viewphp)php)php php{
php php php php php php php php php php php php php$helperphp php=php php$thisphp-php>getDojoHelperphp(php)php;
php php php php php php php php php php php php ifphp php(php$helperphp)php php{
php php php php php php php php php php php php php php php php php$modulesphp php=php php$helperphp-php>getModulesphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$modulesphp asphp php$modulephp)php php{
php php php php php php php php php php php php php php php php php php php php php$prefixphp php=php php$thisphp-php>php_getPrefixphp(php$modulephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$prefixphp,php php$thisphp-php>php_profilePrefixesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addProfilePrefixphp(php$prefixphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_profilePrefixesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp modulephp layerphp script
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateLayerScriptphp(php)
php php php php php{
php php php php php php php php php$helperphp php php php php php php php php=php php$thisphp-php>getDojoHelperphp(php)php;
php php php php php php php php php$layerNamephp php php php php php=php php$thisphp-php>getLayerNamephp(php)php;
php php php php php php php php php$modulePathsphp php php php=php php$helperphp-php>getModulePathsphp(php)php;
php php php php php php php php php$modulesphp php php php php php php php=php php$helperphp-php>getModulesphp(php)php;
php php php php php php php php php$onLoadActionsphp php=php php$helperphp-php>getOnLoadActionsphp(php)php;
php php php php php php php php php$javascriptphp php php php php=php php$helperphp-php>getJavascriptphp(php)php;

php php php php php php php php php$contentphp php=php php'dojophp.providephp(php"php'php php.php php$layerNamephp php.php php'php"php)php;php'php php.php php"php\nphp\nphp(functionphp(php)php{php\nphp"php;

php php php php php php php php foreachphp php(php$modulePathsphp asphp php$modulephp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php$contentphp php.php=php sprintfphp(php"dojophp.registerModulePathphp(php\php"php%sphp\php"php,php php\php"php%sphp\php"php)php;php\nphp"php,php php$modulephp,php php$pathphp)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$modulesphp asphp php$modulephp)php php{
php php php php php php php php php php php php php$contentphp php.php=php sprintfphp(php"dojophp.requirephp(php\php"php%sphp\php"php)php;php\nphp"php,php php$modulephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>consumeOnLoadphp(php)php)php php{
php php php php php php php php php php php php foreachphp php(php$helperphp-php>getOnLoadActionsphp(php)php asphp php$callbackphp)php php{
php php php php php php php php php php php php php php php php php$contentphp php.php=php sprintfphp(php"dojophp.addOnLoadphp(php%sphp)php;php\nphp"php,php php$callbackphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>consumeJavascriptphp(php)php)php php{
php php php php php php php php php php php php php$javascriptphp php=php implodephp(php"php\nphp"php,php php$helperphp-php>getJavascriptphp(php)php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$javascriptphp)php)php php{
php php php php php php php php php php php php php php php php php$contentphp php.php=php php"php\nphp"php php.php php$javascriptphp php.php php"php\nphp"php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$contentphp php.php=php php"php}php)php(php)php;php"php;

php php php php php php php php returnphp php$contentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp buildphp profile
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generateBuildProfilephp(php)
php php php php php{
php php php php php php php php php$profileOptionsphp php php=php php$thisphp-php>getProfileOptionsphp(php)php;
php php php php php php php php php$layerNamephp php php php php php php php=php php$thisphp-php>getLayerNamephp(php)php;
php php php php php php php php php$layerScriptPathphp php=php php$thisphp-php>getLayerScriptPathphp(php)php;
php php php php php php php php php$profilePrefixesphp php=php php$thisphp-php>getProfilePrefixesphp(php)php;

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'releaseNamephp'php,php php$profileOptionsphp)php)php php{
php php php php php php php php php php php php php$profileOptionsphp[php'releaseNamephp'php]php php=php substrphp(php$layerNamephp,php php0php,php strposphp(php$layerNamephp,php php'php.php'php)php)php;
php php php php php php php php php}

php php php php php php php php php$profilephp php=php php$profileOptionsphp;
php php php php php php php php php$profilephp[php'layersphp'php]php php=php arrayphp(arrayphp(
php php php php php php php php php php php php php'namephp'php php php php php php php php php php php php php php php=php>php php$layerScriptPathphp,
php php php php php php php php php php php php php'layerDependenciesphp'php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php'dependenciesphp'php php php php php php php=php>php arrayphp(php$layerNamephp)php,
php php php php php php php php php)php)php;
php php php php php php php php php$profilephp[php'prefixesphp'php]php php=php arrayphp_valuesphp(php$profilePrefixesphp)php;

php php php php php php php php returnphp php'dependenciesphp php=php php'php php.php php$thisphp-php>php_filterJsonProfileToJavascriptphp(php$profilephp)php php.php php'php;php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp modulephp prefix
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getPrefixphp(php$modulephp)
php php php php php{
php php php php php php php php php$segmentsphp php php=php explodephp(php'php.php'php,php php$modulephp,php php2php)php;
php php php php php php php php returnphp php$segmentsphp[php0php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp aphp JSONphp buildphp profilephp tophp JavaScript
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$profile
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_filterJsonProfileToJavascriptphp(php$profilephp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php php$profilephp php=php Zendphp_Jsonphp:php:encodephp(php$profilephp)php;
php php php php php php php php php$profilephp php=php trimphp(php$profilephp,php php'php"php'php)php;
php php php php php php php php php$profilephp php=php pregphp_replacephp(php'php/php'php php.php pregphp_quotephp(php'php\php\php'php)php php.php php'php/php'php,php php'php'php,php php$profilephp)php;
php php php php php php php php returnphp php$profilephp;
php php php php php}
php}
