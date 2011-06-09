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
php php*php php@subpackagephp Dispatcher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Controllerphp_Dispatcherphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Dispatcher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Dispatcherphp_Abstractphp implementsphp Zendphp_Controllerphp_Dispatcherphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Defaultphp action
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultActionphp php=php php'indexphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp controller
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultControllerphp php=php php'indexphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp module
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultModulephp php=php php'defaultphp'php;

php php php php php/php*php*
php php php php php php*php Frontphp Controllerphp instance
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
php php php php php php*php Pathphp delimiterphp character
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pathDelimiterphp php=php php'php_php'php;

php php php php php/php*php*
php php php php php php*php Responsephp objectphp tophp passphp tophp actionphp controllersphp,php ifphp any
php php php php php php*php php@varphp Zendphp_Controllerphp_Responsephp_Abstractphp|null
php php php php php php*php/
php php php php protectedphp php$php_responsephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Wordphp delimiterphp characters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_wordDelimiterphp php=php arrayphp(php'php-php'php,php php'php.php'php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>setParamsphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatsphp aphp stringphp intophp aphp controllerphp namephp.php php Thisphp isphp usedphp tophp takephp aphp raw
php php php php php php*php controllerphp namephp,php suchphp asphp onephp storedphp insidephp aphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php objectphp,php andphp reformatphp itphp tophp aphp properphp classphp namephp thatphp aphp classphp extending
php php php php php php*php Zendphp_Controllerphp_Actionphp wouldphp usephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formatControllerNamephp(php$unformattedphp)
php php php php php{
php php php php php php php php returnphp ucfirstphp(php$thisphp-php>php_formatNamephp(php$unformattedphp)php)php php.php php'Controllerphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatsphp aphp stringphp intophp anphp actionphp namephp.php php Thisphp isphp usedphp tophp takephp aphp raw
php php php php php php*php actionphp namephp,php suchphp asphp onephp thatphp wouldphp bephp storedphp insidephp aphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php objectphp,php andphp reformatphp intophp aphp properphp methodphp namephp thatphp wouldphp bephp found
php php php php php php*php insidephp aphp classphp extendingphp Zendphp_Controllerphp_Actionphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formatActionNamephp(php$unformattedphp)
php php php php php{
php php php php php php php php php$formattedphp php=php php$thisphp-php>php_formatNamephp(php$unformattedphp,php truephp)php;
php php php php php php php php returnphp strtolowerphp(substrphp(php$formattedphp,php php0php,php php1php)php)php php.php substrphp(php$formattedphp,php php1php)php php.php php'Actionphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp delimiter
php php php php php php*
php php php php php php*php Verifyphp aphp delimiterphp tophp usephp inphp controllersphp orphp actionsphp.php Mayphp bephp aphp single
php php php php php php*php stringphp orphp anphp arrayphp ofphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$spec
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp withphp invalidphp delimiters
php php php php php php*php/
php php php php publicphp functionphp php_verifyDelimiterphp(php$specphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$specphp)php)php php{
php php php php php php php php php php php php returnphp php(arrayphp)php php$specphp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php php$allStringsphp php=php truephp;
php php php php php php php php php php php php foreachphp php(php$specphp asphp php$delimphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$delimphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$allStringsphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$allStringsphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(php'Wordphp delimiterphp arrayphp mustphp containphp onlyphp stringsphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$specphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(php'Invalidphp wordphp delimiterphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp wordphp delimiterphp characterphp(sphp)php usedphp in
php php php php php php*php controllerphp orphp actionphp names
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getWordDelimiterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_wordDelimiterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp wordphp delimiter
php php php php php php*
php php php php php php*php Setphp thephp wordphp delimiterphp tophp usephp inphp controllersphp andphp actionsphp.php Mayphp bephp a
php php php php php php*php singlephp stringphp orphp anphp arrayphp ofphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$spec
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setWordDelimiterphp(php$specphp)
php php php php php{
php php php php php php php php php$specphp php=php php$thisphp-php>php_verifyDelimiterphp(php$specphp)php;
php php php php php php php php php$thisphp-php>php_wordDelimiterphp php=php php$specphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp pathphp delimiterphp characterphp(sphp)php usedphp in
php php php php php php*php controllerphp names
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPathDelimiterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pathDelimiterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pathphp delimiter
php php php php php php*
php php php php php php*php Setphp thephp pathphp delimiterphp tophp usephp inphp controllersphp.php Mayphp bephp aphp singlephp stringphp or
php php php php php php*php anphp arrayphp ofphp stringsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$spec
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setPathDelimiterphp(php$specphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$specphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(php'Invalidphp pathphp delimiterphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_pathDelimiterphp php=php php$specphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatsphp aphp stringphp fromphp aphp URIphp intophp aphp PHPphp-friendlyphp namephp.
php php php php php php*
php php php php php php*php Byphp defaultphp,php replacesphp wordsphp separatedphp byphp thephp wordphp separatorphp characterphp(sphp)
php php php php php php*php withphp camelCapsphp.php Ifphp php$isActionphp isphp falsephp,php itphp alsophp preservesphp replacesphp words
php php php php php php*php separatedphp byphp thephp pathphp separationphp characterphp withphp anphp underscorephp,php making
php php php php php php*php thephp followingphp wordphp Titlephp casedphp.php Allphp nonphp-alphanumericphp charactersphp are
php php php php php php*php removedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@paramphp booleanphp php$isActionphp Defaultsphp tophp false
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_formatNamephp(php$unformattedphp,php php$isActionphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php preservephp directories
php php php php php php php php ifphp php(php!php$isActionphp)php php{
php php php php php php php php php php php php php$segmentsphp php=php explodephp(php$thisphp-php>getPathDelimiterphp(php)php,php php$unformattedphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$segmentsphp php=php php(arrayphp)php php$unformattedphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$segmentsphp asphp php$keyphp php=php>php php$segmentphp)php php{
php php php php php php php php php php php php php$segmentphp php php php php php php php php=php strphp_replacephp(php$thisphp-php>getWordDelimiterphp(php)php,php php'php php'php,php strtolowerphp(php$segmentphp)php)php;
php php php php php php php php php php php php php$segmentphp php php php php php php php php=php pregphp_replacephp(php'php/php[php^aphp-zphp0php-php9php php]php/php'php,php php'php'php,php php$segmentphp)php;
php php php php php php php php php php php php php$segmentsphp[php$keyphp]php php=php strphp_replacephp(php'php php'php,php php'php'php,php ucwordsphp(php$segmentphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php'php_php'php,php php$segmentsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp frontphp controllerphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp getFrontControllerphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_frontControllerphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_frontControllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_frontControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp frontphp controllerphp instance
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Frontphp php$controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setFrontControllerphp(Zendphp_Controllerphp_Frontphp php$controllerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_frontControllerphp php=php php$controllerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp orphp modifyphp aphp parameterphp tophp usephp whenphp instantiatingphp anphp actionphp controller
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
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
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
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
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
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
php php php php php php*php Setphp responsephp objectphp tophp passphp tophp actionphp controllers
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp|nullphp php$response
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setResponsephp(Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_responsephp php=php php$responsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp registeredphp responsephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstractphp|null
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp controllerphp php(minusphp anyphp formattingphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setDefaultControllerNamephp(php$controllerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultControllerphp php=php php(stringphp)php php$controllerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp controllerphp namephp php(minusphp formattingphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultControllerNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp actionphp php(minusphp anyphp formattingphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$action
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setDefaultActionphp(php$actionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultActionphp php=php php(stringphp)php php$actionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp actionphp namephp php(minusphp formattingphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultActionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultActionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp module
php php php php php php*
php php php php php php*php php@paramphp stringphp php$module
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setDefaultModulephp(php$modulephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultModulephp php=php php(stringphp)php php$modulephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp module
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultModulephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultModulephp;
php php php php php}
php}
