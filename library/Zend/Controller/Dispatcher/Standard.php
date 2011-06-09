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
php php*php php@versionphp php php php php$Idphp:php Standardphp.phpphp php2php2php0php3php8php php2php0php1php0php-php0php4php-php2php8php php1php8php:php5php4php:php2php2Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Loaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Dispatcherphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Dispatcher
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Dispatcherphp_Standardphp extendsphp Zendphp_Controllerphp_Dispatcherphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Currentphp dispatchablephp directory
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_curDirectoryphp;

php php php php php/php*php*
php php php php php php*php Currentphp modulephp php(formattedphp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_curModulephp;

php php php php php/php*php*
php php php php php php*php Controllerphp directoryphp(iesphp)
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_controllerDirectoryphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructorphp:php Setphp currentphp modulephp tophp defaultphp value
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$paramsphp)php;
php php php php php php php php php$thisphp-php>php_curModulephp php=php php$thisphp-php>getDefaultModulephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp singlephp pathphp tophp thephp controllerphp directoryphp stack
php php php php php php*
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@paramphp stringphp php$module
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Standard
php php php php php php*php/
php php php php publicphp functionphp addControllerDirectoryphp(php$pathphp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$modulephp php=php php$thisphp-php>php_defaultModulephp;
php php php php php php php php php}

php php php php php php php php php$modulephp php=php php(stringphp)php php$modulephp;
php php php php php php php php php$pathphp php php php=php rtrimphp(php(stringphp)php php$pathphp,php php'php/php\php\php'php)php;

php php php php php php php php php$thisphp-php>php_controllerDirectoryphp[php$modulephp]php php=php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp controllerphp directory
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$directory
php php php php php php*php php@returnphp Zendphp_Controllerphp_Dispatcherphp_Standard
php php php php php php*php/
php php php php publicphp functionphp setControllerDirectoryphp(php$directoryphp,php php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_controllerDirectoryphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(isphp_stringphp(php$directoryphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addControllerDirectoryphp(php$directoryphp,php php$modulephp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$directoryphp)php)php php{
php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$directoryphp asphp php$modulephp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addControllerDirectoryphp(php$pathphp,php php$modulephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Controllerphp directoryphp specphp mustphp bephp eitherphp aphp stringphp orphp anphp arrayphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentlyphp setphp directoriesphp forphp Zendphp_Controllerphp_Actionphp class
php php php php php php*php lookup
php php php php php php*
php php php php php php*php Ifphp aphp modulephp isphp specifiedphp,php returnsphp justphp thatphp directoryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modulephp Modulephp name
php php php php php php*php php@returnphp arrayphp|stringphp Returnsphp arrayphp ofphp allphp directoriesphp byphp defaultphp,php single
php php php php php php*php modulephp directoryphp ifphp modulephp argumentphp provided
php php php php php php*php/
php php php php publicphp functionphp getControllerDirectoryphp(php$modulephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_controllerDirectoryphp;
php php php php php php php php php}

php php php php php php php php php$modulephp php=php php(stringphp)php php$modulephp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$modulephp,php php$thisphp-php>php_controllerDirectoryphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_controllerDirectoryphp[php$modulephp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp controllerphp directoryphp byphp modulephp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp removeControllerDirectoryphp(php$modulephp)
php php php php php{
php php php php php php php php php$modulephp php=php php(stringphp)php php$modulephp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$modulephp,php php$thisphp-php>php_controllerDirectoryphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_controllerDirectoryphp[php$modulephp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatphp thephp modulephp namephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$unformatted
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formatModuleNamephp(php$unformattedphp)
php php php php php{
php php php php php php php php ifphp php(php(php$thisphp-php>php_defaultModulephp php=php=php php$unformattedphp)php php&php&php php!php$thisphp-php>getParamphp(php'prefixDefaultModulephp'php)php)php php{
php php php php php php php php php php php php returnphp php$unformattedphp;
php php php php php php php php php}

php php php php php php php php returnphp ucfirstphp(php$thisphp-php>php_formatNamephp(php$unformattedphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatphp actionphp classphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$moduleNamephp Namephp ofphp thephp currentphp module
php php php php php php*php php@paramphp stringphp php$classNamephp Namephp ofphp thephp actionphp class
php php php php php php*php php@returnphp stringphp Formattedphp classphp name
php php php php php php*php/
php php php php publicphp functionphp formatClassNamephp(php$moduleNamephp,php php$classNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>formatModuleNamephp(php$moduleNamephp)php php.php php'php_php'php php.php php$classNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp aphp classphp namephp tophp aphp filename
php php php php php php*
php php php php php php*php php@paramphp stringphp php$class
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp classToFilenamephp(php$classphp)
php php php php php{
php php php php php php php php returnphp strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$classphp)php php.php php'php.phpphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp TRUEphp ifphp thephp Zendphp_Controllerphp_Requestphp_Abstractphp objectphp canphp be
php php php php php php*php dispatchedphp tophp aphp controllerphp.
php php php php php php*
php php php php php php*php Usephp thisphp methodphp wiselyphp.php Byphp defaultphp,php thephp dispatcherphp willphp fallphp backphp tophp the
php php php php php php*php defaultphp controllerphp php(eitherphp inphp thephp modulephp specifiedphp orphp thephp globalphp defaultphp)
php php php php php php*php ifphp aphp givenphp controllerphp doesphp notphp existphp.php Thisphp methodphp returningphp falsephp does
php php php php php php*php notphp necessarilyphp indicatephp thephp dispatcherphp willphp notphp stillphp dispatchphp thephp callphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$action
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isDispatchablephp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$classNamephp php=php php$thisphp-php>getControllerClassphp(php$requestphp)php;
php php php php php php php php ifphp php(php!php$classNamephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$finalClassphp php php=php php$classNamephp;
php php php php php php php php ifphp php(php(php$thisphp-php>php_defaultModulephp php!php=php php$thisphp-php>php_curModulephp)
php php php php php php php php php php php php php|php|php php$thisphp-php>getParamphp(php'prefixDefaultModulephp'php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$finalClassphp php=php php$thisphp-php>formatClassNamephp(php$thisphp-php>php_curModulephp,php php$classNamephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(classphp_existsphp(php$finalClassphp,php falsephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$fileSpecphp php php php php=php php$thisphp-php>classToFilenamephp(php$classNamephp)php;
php php php php php php php php php$dispatchDirphp php=php php$thisphp-php>getDispatchDirectoryphp(php)php;
php php php php php php php php php$testphp php php php php php php php php=php php$dispatchDirphp php.php DIRECTORYphp_SEPARATORphp php.php php$fileSpecphp;
php php php php php php php php returnphp Zendphp_Loaderphp:php:isReadablephp(php$testphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dispatchphp tophp aphp controllerphp/action
php php php php php php*
php php php php php php*php Byphp defaultphp,php ifphp aphp controllerphp isphp notphp dispatchablephp,php dispatchphp(php)php willphp throw
php php php php php php*php anphp exceptionphp.php Ifphp youphp wishphp tophp usephp thephp defaultphp controllerphp insteadphp,php setphp the
php php php php php php*php paramphp php'useDefaultControllerAlwaysphp'php viaphp php{php@linkphp setParamphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Dispatcherphp_Exception
php php php php php php*php/
php php php php publicphp functionphp dispatchphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp,php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp)
php php php php php{
php php php php php php php php php$thisphp-php>setResponsephp(php$responsephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Getphp controllerphp class
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!php$thisphp-php>isDispatchablephp(php$requestphp)php)php php{
php php php php php php php php php php php php php$controllerphp php=php php$requestphp-php>getControllerNamephp(php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>getParamphp(php'useDefaultControllerAlwaysphp'php)php php&php&php php!emptyphp(php$controllerphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(php'Invalidphp controllerphp specifiedphp php(php'php php.php php$requestphp-php>getControllerNamephp(php)php php.php php'php)php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$classNamephp php=php php$thisphp-php>getDefaultControllerClassphp(php$requestphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$classNamephp php=php php$thisphp-php>getControllerClassphp(php$requestphp)php;
php php php php php php php php php php php php ifphp php(php!php$classNamephp)php php{
php php php php php php php php php php php php php php php php php$classNamephp php=php php$thisphp-php>getDefaultControllerClassphp(php$requestphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Loadphp thephp controllerphp classphp file
php php php php php php php php php php*php/
php php php php php php php php php$classNamephp php=php php$thisphp-php>loadClassphp(php$classNamephp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Instantiatephp controllerphp withphp requestphp,php responsephp,php andphp invocation
php php php php php php php php php php*php argumentsphp;php throwphp exceptionphp ifphp itphp'sphp notphp anphp actionphp controller
php php php php php php php php php php*php/
php php php php php php php php php$controllerphp php=php newphp php$classNamephp(php$requestphp,php php$thisphp-php>getResponsephp(php)php,php php$thisphp-php>getParamsphp(php)php)php;
php php php php php php php php ifphp php(php!php(php$controllerphp instanceofphp Zendphp_Controllerphp_Actionphp_Interfacephp)php php&php&
php php php php php php php php php php php php php!php(php$controllerphp instanceofphp Zendphp_Controllerphp_Actionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'Controllerphp php"php'php php.php php$classNamephp php.php php'php"php isphp notphp anphp instancephp ofphp Zendphp_Controllerphp_Actionphp_Interfacephp'
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Retrievephp thephp actionphp name
php php php php php php php php php php*php/
php php php php php php php php php$actionphp php=php php$thisphp-php>getActionMethodphp(php$requestphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php Dispatchphp thephp methodphp call
php php php php php php php php php php*php/
php php php php php php php php php$requestphp-php>setDispatchedphp(truephp)php;

php php php php php php php php php/php/php byphp defaultphp,php bufferphp output
php php php php php php php php php$disableObphp php=php php$thisphp-php>getParamphp(php'disableOutputBufferingphp'php)php;
php php php php php php php php php$obLevelphp php php php=php obphp_getphp_levelphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$disableObphp)php)php php{
php php php php php php php php php php php php obphp_startphp(php)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$controllerphp-php>dispatchphp(php$actionphp)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php Cleanphp outputphp bufferphp onphp error
php php php php php php php php php php php php php$curObLevelphp php=php obphp_getphp_levelphp(php)php;
php php php php php php php php php php php php ifphp php(php$curObLevelphp php>php php$obLevelphp)php php{
php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php obphp_getphp_cleanphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$curObLevelphp php=php obphp_getphp_levelphp(php)php;
php php php php php php php php php php php php php php php php php}php whilephp php(php$curObLevelphp php>php php$obLevelphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$disableObphp)php)php php{
php php php php php php php php php php php php php$contentphp php=php obphp_getphp_cleanphp(php)php;
php php php php php php php php php php php php php$responsephp-php>appendBodyphp(php$contentphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Destroyphp thephp pagephp controllerphp instancephp andphp reflectionphp objects
php php php php php php php php php$controllerphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp aphp controllerphp class
php php php php php php*
php php php php php php*php Attemptsphp tophp loadphp thephp controllerphp classphp filephp from
php php php php php php*php php{php@linkphp getControllerDirectoryphp(php)php}php.php php Ifphp thephp controllerphp belongsphp tophp a
php php php php php php*php modulephp,php looksphp forphp thephp modulephp prefixphp tophp thephp controllerphp classphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$className
php php php php php php*php php@returnphp stringphp Classphp namephp loaded
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp ifphp classphp notphp loaded
php php php php php php*php/
php php php php publicphp functionphp loadClassphp(php$classNamephp)
php php php php php{
php php php php php php php php php$finalClassphp php php=php php$classNamephp;
php php php php php php php php ifphp php(php(php$thisphp-php>php_defaultModulephp php!php=php php$thisphp-php>php_curModulephp)
php php php php php php php php php php php php php|php|php php$thisphp-php>getParamphp(php'prefixDefaultModulephp'php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$finalClassphp php=php php$thisphp-php>formatClassNamephp(php$thisphp-php>php_curModulephp,php php$classNamephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(classphp_existsphp(php$finalClassphp,php falsephp)php)php php{
php php php php php php php php php php php php returnphp php$finalClassphp;
php php php php php php php php php}

php php php php php php php php php$dispatchDirphp php=php php$thisphp-php>getDispatchDirectoryphp(php)php;
php php php php php php php php php$loadFilephp php php php php=php php$dispatchDirphp php.php DIRECTORYphp_SEPARATORphp php.php php$thisphp-php>classToFilenamephp(php$classNamephp)php;

php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php$loadFilephp)php)php php{
php php php php php php php php php php php php includephp_oncephp php$loadFilephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(php'Cannotphp loadphp controllerphp classphp php"php'php php.php php$classNamephp php.php php'php"php fromphp filephp php"php'php php.php php$loadFilephp php.php php"php'php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!classphp_existsphp(php$finalClassphp,php falsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Dispatcherphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Dispatcherphp_Exceptionphp(php'Invalidphp controllerphp classphp php(php"php'php php.php php$finalClassphp php.php php'php"php)php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$finalClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp controllerphp classphp name
php php php php php php*
php php php php php php*php Tryphp requestphp firstphp;php ifphp notphp foundphp,php tryphp pullingphp fromphp requestphp parameterphp;
php php php php php php*php ifphp stillphp notphp foundphp,php fallbackphp tophp default
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp stringphp|falsephp Returnsphp classphp namephp onphp success
php php php php php php*php/
php php php php publicphp functionphp getControllerClassphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$controllerNamephp php=php php$requestphp-php>getControllerNamephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$controllerNamephp)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>getParamphp(php'useDefaultControllerAlwaysphp'php)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$controllerNamephp php=php php$thisphp-php>getDefaultControllerNamephp(php)php;
php php php php php php php php php php php php php$requestphp-php>setControllerNamephp(php$controllerNamephp)php;
php php php php php php php php php}

php php php php php php php php php$classNamephp php=php php$thisphp-php>formatControllerNamephp(php$controllerNamephp)php;

php php php php php php php php php$controllerDirsphp php php php php php php=php php$thisphp-php>getControllerDirectoryphp(php)php;
php php php php php php php php php$modulephp php=php php$requestphp-php>getModuleNamephp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>isValidModulephp(php$modulephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_curModulephp php php php php=php php$modulephp;
php php php php php php php php php php php php php$thisphp-php>php_curDirectoryphp php=php php$controllerDirsphp[php$modulephp]php;
php php php php php php php php php}php elseifphp php(php$thisphp-php>isValidModulephp(php$thisphp-php>php_defaultModulephp)php)php php{
php php php php php php php php php php php php php$requestphp-php>setModuleNamephp(php$thisphp-php>php_defaultModulephp)php;
php php php php php php php php php php php php php$thisphp-php>php_curModulephp php php php php=php php$thisphp-php>php_defaultModulephp;
php php php php php php php php php php php php php$thisphp-php>php_curDirectoryphp php=php php$controllerDirsphp[php$thisphp-php>php_defaultModulephp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Exceptionphp(php'Nophp defaultphp modulephp definedphp forphp thisphp applicationphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$classNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp givenphp modulephp isphp valid
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidModulephp(php$modulephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$modulephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$modulephp php php php php php php php php=php strtolowerphp(php$modulephp)php;
php php php php php php php php php$controllerDirphp php=php php$thisphp-php>getControllerDirectoryphp(php)php;
php php php php php php php php foreachphp php(arrayphp_keysphp(php$controllerDirphp)php asphp php$moduleNamephp)php php{
php php php php php php php php php php php php ifphp php(php$modulephp php=php=php strtolowerphp(php$moduleNamephp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp defaultphp controllerphp class
php php php php php php*
php php php php php php*php Determinesphp whetherphp thephp defaultphp controllerphp tophp usephp liesphp withinphp the
php php php php php php*php requestedphp modulephp,php orphp ifphp thephp globalphp defaultphp shouldphp bephp usedphp.
php php php php php php*
php php php php php php*php Byphp defaultphp,php willphp onlyphp usephp thephp modulephp defaultphp unlessphp thatphp controllerphp does
php php php php php php*php notphp existphp;php ifphp thisphp isphp thephp casephp,php itphp fallsphp backphp tophp thephp defaultphp controller
php php php php php php*php inphp thephp defaultphp modulephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultControllerClassphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getDefaultControllerNamephp(php)php;
php php php php php php php php php$defaultphp php php php php=php php$thisphp-php>formatControllerNamephp(php$controllerphp)php;
php php php php php php php php php$requestphp-php>setControllerNamephp(php$controllerphp)
php php php php php php php php php php php php php php php php php-php>setActionNamephp(nullphp)php;

php php php php php php php php php$modulephp php php php php php php php php php php php php php php=php php$requestphp-php>getModuleNamephp(php)php;
php php php php php php php php php$controllerDirsphp php php php php php php=php php$thisphp-php>getControllerDirectoryphp(php)php;
php php php php php php php php php$thisphp-php>php_curModulephp php php php php=php php$thisphp-php>php_defaultModulephp;
php php php php php php php php php$thisphp-php>php_curDirectoryphp php=php php$controllerDirsphp[php$thisphp-php>php_defaultModulephp]php;
php php php php php php php php ifphp php(php$thisphp-php>isValidModulephp(php$modulephp)php)php php{
php php php php php php php php php php php php php$foundphp php=php falsephp;
php php php php php php php php php php php php ifphp php(classphp_existsphp(php$defaultphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$moduleDirphp php=php php$controllerDirsphp[php$modulephp]php;
php php php php php php php php php php php php php php php php php$fileSpecphp php php=php php$moduleDirphp php.php DIRECTORYphp_SEPARATORphp php.php php$thisphp-php>classToFilenamephp(php$defaultphp)php;
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php$fileSpecphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_curDirectoryphp php=php php$moduleDirphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$foundphp)php php{
php php php php php php php php php php php php php php php php php$requestphp-php>setModuleNamephp(php$modulephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_curModulephp php php php php=php php$thisphp-php>formatModuleNamephp(php$modulephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestphp-php>setModuleNamephp(php$thisphp-php>php_defaultModulephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$defaultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp valuephp ofphp thephp currentlyphp selectedphp dispatchphp directoryphp php(asphp setphp by
php php php php php php*php php{php@linkphp getControllerphp(php)php}php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDispatchDirectoryphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_curDirectoryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp thephp actionphp name
php php php php php php*
php php php php php php*php Firstphp attemptphp tophp retrievephp fromphp requestphp;php thenphp fromphp requestphp params
php php php php php php*php usingphp actionphp keyphp;php defaultphp tophp defaultphp action
php php php php php php*
php php php php php php*php Returnsphp formattedphp actionphp name
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getActionMethodphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp)
php php php php php{
php php php php php php php php php$actionphp php=php php$requestphp-php>getActionNamephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$actionphp)php)php php{
php php php php php php php php php php php php php$actionphp php=php php$thisphp-php>getDefaultActionphp(php)php;
php php php php php php php php php php php php php$requestphp-php>setActionNamephp(php$actionphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>formatActionNamephp(php$actionphp)php;
php php php php php}
php}
