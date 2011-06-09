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
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ViewRendererphp.phpphp php2php0php2php6php1php php2php0php1php0php-php0php1php-php1php3php php1php8php:php5php5php:php2php5Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_View
php php*php/
requirephp_oncephp php'Zendphp/Viewphp.phpphp'php;

php/php*php*
php php*php Viewphp scriptphp integration
php php*
php php*php Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp providesphp transparentphp view
php php*php integrationphp forphp actionphp controllersphp.php Itphp allowsphp youphp tophp createphp aphp viewphp object
php php*php oncephp,php andphp populatephp itphp throughoutphp allphp actionsphp.php Severalphp globalphp optionsphp mayphp be
php php*php setphp:
php php*
php php*php php-php noControllerphp:php ifphp setphp truephp,php renderphp(php)php willphp notphp lookphp forphp viewphp scriptsphp in
php php*php php php subdirectoriesphp namedphp afterphp thephp controller
php php*php php-php viewSuffixphp:php whatphp viewphp scriptphp filenamephp suffixphp tophp use
php php*
php php*php Thephp helperphp autoinitializesphp thephp actionphp controllerphp viewphp preDispatchphp(php)php.php It
php php*php determinesphp thephp pathphp tophp thephp classphp filephp,php andphp thenphp determinesphp thephp viewphp base
php php*php directoryphp fromphp therephp.php Itphp alsophp usesphp thephp modulephp namephp asphp aphp classphp prefixphp for
php php*php helpersphp andphp viewsphp suchphp thatphp ifphp yourphp modulephp namephp isphp php'Searchphp'php,php itphp willphp setphp the
php php*php helperphp classphp prefixphp tophp php'Searchphp_Viewphp_Helperphp'php andphp thephp filterphp classphp prefixphp tophp php;
php php*php php'Searchphp_Viewphp_Filterphp'php.
php php*
php php*php Usagephp:
php php*php php<codephp>
php php*php php/php/php Inphp yourphp bootstrapphp:
php php*php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:addHelperphp(newphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp(php)php)php;
php php*
php php*php php/php/php Inphp yourphp actionphp controllerphp methodsphp:
php php*php php$viewHelperphp php=php php$thisphp-php>php_helperphp-php>getHelperphp(php'viewphp'php)php;
php php*
php php*php php/php/php Donphp'tphp usephp controllerphp subdirectories
php php*php php$viewHelperphp-php>setNoControllerphp(truephp)php;
php php*
php php*php php/php/php Specifyphp aphp differentphp scriptphp tophp renderphp:
php php*php php$thisphp-php>php_helperphp-php>viewRendererphp(php'formphp'php)php;
php php*
php php*php <php/codephp>
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php publicphp php$viewphp;

php php php php php/php*php*
php php php php php php*php Wordphp delimiters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_delimitersphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php protectedphp php$php_inflectorphp;

php php php php php/php*php*
php php php php php php*php Inflectorphp target
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_inflectorTargetphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Currentphp modulephp directory
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_moduleDirphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp autorenderphp usingphp controllerphp namephp asphp subdirectoryphp;
php php php php php php*php globalphp settingphp php(notphp resetphp atphp nextphp invocationphp)
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_neverControllerphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp autorenderphp postDispatchphp;php globalphp settingphp php(notphp resetphp at
php php php php php php*php nextphp invocationphp)
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_neverRenderphp php php php php php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp usephp aphp controllerphp namephp asphp aphp subdirectoryphp whenphp rendering
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_noControllerphp php php php php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp autorenderphp postDispatchphp;php perphp controllerphp/actionphp settingphp php(reset
php php php php php php*php atphp nextphp invocationphp)
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_noRenderphp php php php php php php php php=php falsephp;

php php php php php/php*php*
php php php php php php*php Charactersphp representingphp pathphp delimitersphp inphp thephp controller
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_pathDelimitersphp;

php php php php php/php*php*
php php php php php php*php Whichphp namedphp segmentphp ofphp thephp responsephp tophp utilize
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_responseSegmentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Whichphp actionphp viewphp scriptphp tophp render
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_scriptActionphp php php php php=php nullphp;

php php php php php/php*php*
php php php php php php*php Viewphp objectphp basePath
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewBasePathSpecphp php=php php'php:moduleDirphp/viewsphp'php;

php php php php php/php*php*
php php php php php php*php Viewphp scriptphp pathphp specificationphp string
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewScriptPathSpecphp php=php php'php:controllerphp/php:actionphp.php:suffixphp'php;

php php php php php/php*php*
php php php php php php*php Viewphp scriptphp pathphp specificationphp stringphp,php minusphp controllerphp segment
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewScriptPathNoControllerSpecphp php=php php'php:actionphp.php:suffixphp'php;

php php php php php/php*php*
php php php php php php*php Viewphp scriptphp suffix
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewSuffixphp php php php php php php=php php'phtmlphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Optionallyphp setphp viewphp objectphp andphp optionsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php php php php php php php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$viewphp)php php{
php php php php php php php php php php php php php$thisphp-php>setViewphp(php$viewphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Clonephp php-php alsophp makephp surephp thephp viewphp isphp clonedphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_clonephp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>viewphp)php php&php&php php$thisphp-php>viewphp instanceofphp Zendphp_Viewphp_Interfacephp)php php{
php php php php php php php php php php php php php$thisphp-php>viewphp php=php clonephp php$thisphp-php>viewphp;

php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp viewphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$thisphp-php>viewphp php=php php$viewphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp modulephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModulephp(php)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php$modulephp php php=php php$requestphp-php>getModuleNamephp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$modulephp)php php{
php php php php php php php php php php php php php$modulephp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getDispatcherphp(php)php-php>getDefaultModulephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$modulephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp modulephp directory
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getModuleDirectoryphp(php)
php php php php php{
php php php php php php php php php$modulephp php php php php=php php$thisphp-php>getModulephp(php)php;
php php php php php php php php php$moduleDirphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getControllerDirectoryphp(php$modulephp)php;
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$moduleDirphp)php php|php|php isphp_arrayphp(php$moduleDirphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'ViewRendererphp cannotphp locatephp modulephp directoryphp forphp modulephp php"php'php php.php php$modulephp php.php php'php"php'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_moduleDirphp php=php dirnamephp(php$moduleDirphp)php;
php php php php php php php php returnphp php$thisphp-php>php_moduleDirphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp inflector
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp getInflectorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_inflectorphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Filterphp_Inflector
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Inflectorphp.phpphp'php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Filterphp_PregReplace
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/PregReplacephp.phpphp'php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Filterphp_Wordphp_UnderscoreToSeparator
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Wordphp/UnderscoreToSeparatorphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_inflectorphp php=php newphp Zendphp_Filterphp_Inflectorphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_inflectorphp-php>setStaticRuleReferencephp(php'moduleDirphp'php,php php$thisphp-php>php_moduleDirphp)php php/php/php moduleDirphp mustphp bephp specifiedphp beforephp thephp lessphp specificphp php'modulephp'
php php php php php php php php php php php php php php php php php php-php>addRulesphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php'php:modulephp'php php php php php php=php>php arrayphp(php'Wordphp_CamelCaseToDashphp'php,php php'StringToLowerphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'php:controllerphp'php php=php>php arrayphp(php'Wordphp_CamelCaseToDashphp'php,php newphp Zendphp_Filterphp_Wordphp_UnderscoreToSeparatorphp(php'php/php'php)php,php php'StringToLowerphp'php,php newphp Zendphp_Filterphp_PregReplacephp(php'php/php\php.php/php'php,php php'php-php'php)php)php,
php php php php php php php php php php php php php php php php php php php php php php'php:actionphp'php php php php php php=php>php arrayphp(php'Wordphp_CamelCaseToDashphp'php,php newphp Zendphp_Filterphp_PregReplacephp(php'php#php[php^aphp-zphp0php-php9php'php php.php pregphp_quotephp(php'php/php'php,php php'php#php'php)php php.php php'php]php+php#iphp'php,php php'php-php'php)php,php php'StringToLowerphp'php)php,
php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php php-php>setStaticRuleReferencephp(php'suffixphp'php,php php$thisphp-php>php_viewSuffixphp)
php php php php php php php php php php php php php php php php php php-php>setTargetReferencephp(php$thisphp-php>php_inflectorTargetphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Ensurephp thatphp modulephp directoryphp isphp current
php php php php php php php php php$thisphp-php>getModuleDirectoryphp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_inflectorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp inflector
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Filterphp_Inflectorphp php$inflector
php php php php php php*php php@paramphp php booleanphp php php php php php php php php php php php php php php php$referencephp Whetherphp thephp moduleDirphp,php targetphp,php andphp suffixphp shouldphp bephp setphp asphp referencesphp tophp ViewRendererphp properties
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setInflectorphp(Zendphp_Filterphp_Inflectorphp php$inflectorphp,php php$referencephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inflectorphp php=php php$inflectorphp;
php php php php php php php php ifphp php(php$referencephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_inflectorphp-php>setStaticRuleReferencephp(php'suffixphp'php,php php$thisphp-php>php_viewSuffixphp)
php php php php php php php php php php php php php php php php php php-php>setStaticRuleReferencephp(php'moduleDirphp'php,php php$thisphp-php>php_moduleDirphp)
php php php php php php php php php php php php php php php php php php-php>setTargetReferencephp(php$thisphp-php>php_inflectorTargetphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp inflectorphp target
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$target
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setInflectorTargetphp(php$targetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inflectorTargetphp php=php php(stringphp)php php$targetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp internalphp modulephp directoryphp representation
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dir
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setModuleDirphp(php$dirphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_moduleDirphp php=php php(stringphp)php php$dirphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp internalphp modulephp directoryphp representation
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getModuleDirphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_moduleDirphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp aphp classphp prefixphp forphp helperphp andphp filterphp classes
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_generateDefaultPrefixphp(php)
php php php php php{
php php php php php php php php php$defaultphp php=php php'Zendphp_Viewphp'php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_actionControllerphp)php php{
php php php php php php php php php php php php returnphp php$defaultphp;
php php php php php php php php php}

php php php php php php php php php$classphp php=php getphp_classphp(php$thisphp-php>php_actionControllerphp)php;

php php php php php php php php ifphp php(php!strstrphp(php$classphp,php php'php_php'php)php)php php{
php php php php php php php php php php php php returnphp php$defaultphp;
php php php php php php php php php}

php php php php php php php php php$modulephp php=php php$thisphp-php>getModulephp(php)php;
php php php php php php php php ifphp php(php'defaultphp'php php=php=php php$modulephp)php php{
php php php php php php php php php php php php returnphp php$defaultphp;
php php php php php php php php php}

php php php php php php php php php$prefixphp php=php substrphp(php$classphp,php php0php,php strposphp(php$classphp,php php'php_php'php)php)php php.php php'php_Viewphp'php;

php php php php php php php php returnphp php$prefixphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp basephp pathphp basedphp onphp locationphp ofphp currentphp actionphp controller
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getBasePathphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_actionControllerphp)php php{
php php php php php php php php php php php php returnphp php'php.php/viewsphp'php;
php php php php php php php php php}

php php php php php php php php php$inflectorphp php=php php$thisphp-php>getInflectorphp(php)php;
php php php php php php php php php$thisphp-php>php_setInflectorTargetphp(php$thisphp-php>getViewBasePathSpecphp(php)php)php;

php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getDispatcherphp(php)php;
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;

php php php php php php php php php$partsphp php=php arrayphp(
php php php php php php php php php php php php php'modulephp'php php php php php php=php>php php(php(php$moduleNamephp php=php php$requestphp-php>getModuleNamephp(php)php)php php!php=php php'php'php)php php?php php$dispatcherphp-php>formatModuleNamephp(php$moduleNamephp)php php:php php$moduleNamephp,
php php php php php php php php php php php php php'controllerphp'php php=php>php php$requestphp-php>getControllerNamephp(php)php,
php php php php php php php php php php php php php'actionphp'php php php php php php=php>php php$dispatcherphp-php>formatActionNamephp(php$requestphp-php>getActionNamephp(php)php)
php php php php php php php php php php php php php)php;

php php php php php php php php php$pathphp php=php php$inflectorphp-php>filterphp(php$partsphp)php;
php php php php php php php php returnphp php$pathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)
php php php php php php php php php{
php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php'neverRenderphp'php:
php php php php php php php php php php php php php php php php casephp php'neverControllerphp'php:
php php php php php php php php php php php php php php php php casephp php'noControllerphp'php:
php php php php php php php php php php php php php php php php casephp php'noRenderphp'php:
php php php php php php php php php php php php php php php php php php php php php$propertyphp php=php php'php_php'php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$propertyphp}php php=php php(php$valuephp)php php?php truephp php:php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'responseSegmentphp'php:
php php php php php php php php php php php php php php php php casephp php'scriptActionphp'php:
php php php php php php php php php php php php php php php php casephp php'viewBasePathSpecphp'php:
php php php php php php php php php php php php php php php php casephp php'viewScriptPathSpecphp'php:
php php php php php php php php php php php php php php php php casephp php'viewScriptPathNoControllerSpecphp'php:
php php php php php php php php php php php php php php php php casephp php'viewSuffixphp'php:
php php php php php php php php php php php php php php php php php php php php php$propertyphp php=php php'php_php'php php.php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php{php$propertyphp}php php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp viewphp object
php php php php php php*
php php php php php php*php php$optionsphp mayphp containphp thephp followingphp keysphp:
php php php php php php*php php-php neverRenderphp php-php flagphp disphp/enablingphp postDispatchphp(php)php autorenderphp php(affectsphp allphp subsequentphp callsphp)
php php php php php php*php php-php noControllerphp php-php flagphp indicatingphp whetherphp orphp notphp tophp lookphp forphp viewphp scriptsphp inphp subdirectoriesphp namedphp afterphp thephp controller
php php php php php php*php php-php noRenderphp php-php flagphp indicatingphp whetherphp orphp notphp tophp autorenderphp postDispatchphp(php)
php php php php php php*php php-php responseSegmentphp php-php whichphp namedphp responsephp segmentphp tophp renderphp aphp viewphp scriptphp to
php php php php php php*php php-php scriptActionphp php-php whatphp actionphp scriptphp tophp render
php php php php php php*php php-php viewBasePathSpecphp php-php specificationphp tophp usephp forphp determiningphp viewphp basephp path
php php php php php php*php php-php viewScriptPathSpecphp php-php specificationphp tophp usephp forphp determiningphp viewphp scriptphp paths
php php php php php php*php php-php viewScriptPathNoControllerSpecphp php-php specificationphp tophp usephp forphp determiningphp viewphp scriptphp pathsphp whenphp noControllerphp flagphp isphp set
php php php php php php*php php-php viewSuffixphp php-php whatphp viewphp scriptphp filenamephp suffixphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php arrayphp php php$options
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initViewphp(php$pathphp php=php nullphp,php php$prefixphp php=php nullphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>viewphp)php php{
php php php php php php php php php php php php php$thisphp-php>setViewphp(newphp Zendphp_Viewphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Resetphp somephp flagsphp everyphp time
php php php php php php php php php$optionsphp[php'noControllerphp'php]php php=php php(issetphp(php$optionsphp[php'noControllerphp'php]php)php)php php?php php$optionsphp[php'noControllerphp'php]php php:php falsephp;
php php php php php php php php php$optionsphp[php'noRenderphp'php]php php php php php php=php php(issetphp(php$optionsphp[php'noRenderphp'php]php)php)php php?php php$optionsphp[php'noRenderphp'php]php php:php falsephp;
php php php php php php php php php$thisphp-php>php_scriptActionphp php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_responseSegmentphp php php=php nullphp;

php php php php php php php php php/php/php Setphp optionsphp firstphp;php mayphp bephp usedphp tophp determinephp otherphp initializations
php php php php php php php php php$thisphp-php>php_setOptionsphp(php$optionsphp)php;

php php php php php php php php php/php/php Getphp basephp viewphp path
php php php php php php php php ifphp php(emptyphp(php$pathphp)php)php php{
php php php php php php php php php php php php php$pathphp php=php php$thisphp-php>php_getBasePathphp(php)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'ViewRendererphp initializationphp failedphp:php retrievedphp viewphp basephp pathphp isphp emptyphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$prefixphp)php php{
php php php php php php php php php php php php php$prefixphp php=php php$thisphp-php>php_generateDefaultPrefixphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Determinephp ifphp thisphp pathphp hasphp alreadyphp beenphp registered
php php php php php php php php php$currentPathsphp php=php php$thisphp-php>viewphp-php>getScriptPathsphp(php)php;
php php php php php php php php php$pathphp php php php php php php php php php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php php'php/php'php,php php$pathphp)php;
php php php php php php php php php$pathExistsphp php php php=php falsephp;
php php php php php php php php foreachphp php(php$currentPathsphp asphp php$tmpPathphp)php php{
php php php php php php php php php php php php php$tmpPathphp php=php strphp_replacephp(arrayphp(php'php/php'php,php php'php\php\php'php)php,php php'php/php'php,php php$tmpPathphp)php;
php php php php php php php php php php php php ifphp php(strstrphp(php$tmpPathphp,php php$pathphp)php)php php{
php php php php php php php php php php php php php php php php php$pathExistsphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$pathExistsphp)php php{
php php php php php php php php php php php php php$thisphp-php>viewphp-php>addBasePathphp(php$pathphp,php php$prefixphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Registerphp viewphp withphp actionphp controllerphp php(unlessphp alreadyphp registeredphp)
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$thisphp-php>php_actionControllerphp)php php&php&php php(nullphp php=php=php=php php$thisphp-php>php_actionControllerphp-php>viewphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_actionControllerphp-php>viewphp php php php php php php php=php php$thisphp-php>viewphp;
php php php php php php php php php php php php php$thisphp-php>php_actionControllerphp-php>viewSuffixphp php=php php$thisphp-php>php_viewSuffixphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php initphp php-php initializephp view
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getFrontControllerphp(php)php-php>getParamphp(php'noViewRendererphp'php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>initViewphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp basePathphp specification
php php php php php php*
php php php php php php*php Specificationphp canphp containphp onephp orphp morephp ofphp thephp followingphp:
php php php php php php*php php-php php:moduleDirphp php-php currentphp modulephp directory
php php php php php php*php php-php php:controllerphp php-php namephp ofphp currentphp controllerphp inphp thephp request
php php php php php php*php php-php php:actionphp php-php namephp ofphp currentphp actionphp inphp thephp request
php php php php php php*php php-php php:modulephp php-php namephp ofphp currentphp modulephp inphp thephp request
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setViewBasePathSpecphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewBasePathSpecphp php=php php(stringphp)php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp viewphp basePathphp specificationphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getViewBasePathSpecphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewBasePathSpecphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp scriptphp pathphp specification
php php php php php php*
php php php php php php*php Specificationphp canphp containphp onephp orphp morephp ofphp thephp followingphp:
php php php php php php*php php-php php:moduleDirphp php-php currentphp modulephp directory
php php php php php php*php php-php php:controllerphp php-php namephp ofphp currentphp controllerphp inphp thephp request
php php php php php php*php php-php php:actionphp php-php namephp ofphp currentphp actionphp inphp thephp request
php php php php php php*php php-php php:modulephp php-php namephp ofphp currentphp modulephp inphp thephp request
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setViewScriptPathSpecphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewScriptPathSpecphp php=php php(stringphp)php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp viewphp scriptphp pathphp specificationphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getViewScriptPathSpecphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewScriptPathSpecphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp scriptphp pathphp specificationphp php(nophp controllerphp variantphp)
php php php php php php*
php php php php php php*php Specificationphp canphp containphp onephp orphp morephp ofphp thephp followingphp:
php php php php php php*php php-php php:moduleDirphp php-php currentphp modulephp directory
php php php php php php*php php-php php:controllerphp php-php namephp ofphp currentphp controllerphp inphp thephp request
php php php php php php*php php-php php:actionphp php-php namephp ofphp currentphp actionphp inphp thephp request
php php php php php php*php php-php php:modulephp php-php namephp ofphp currentphp modulephp inphp thephp request
php php php php php php*
php php php php php php*php php:controllerphp willphp likelyphp bephp ignoredphp inphp thisphp variantphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setViewScriptPathNoControllerSpecphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewScriptPathNoControllerSpecphp php=php php(stringphp)php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp currentphp viewphp scriptphp pathphp specificationphp stringphp php(nophp controllerphp variantphp)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getViewScriptPathNoControllerSpecphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewScriptPathNoControllerSpecphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp viewphp scriptphp basedphp onphp anphp actionphp andphp/orphp otherphp variables
php php php php php php*
php php php php php php*php Usesphp valuesphp foundphp inphp currentphp requestphp ifphp nophp valuesphp passedphp inphp php$varsphp.
php php php php php php*
php php php php php php*php Ifphp php{php@linkphp php$php_noControllerphp}php isphp setphp,php usesphp php{php@linkphp php$php_viewScriptPathNoControllerSpecphp}php;
php php php php php php*php otherwisephp,php usesphp php{php@linkphp php$php_viewScriptPathSpecphp}php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php arrayphp php php$vars
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getViewScriptphp(php$actionphp php=php nullphp,php arrayphp php$varsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$requestphp php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$actionphp)php php&php&php php(php!issetphp(php$varsphp[php'actionphp'php]php)php)php)php php{
php php php php php php php php php php php php php$actionphp php=php php$thisphp-php>getScriptActionphp(php)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$actionphp)php php{
php php php php php php php php php php php php php php php php php$actionphp php=php php$requestphp-php>getActionNamephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$varsphp[php'actionphp'php]php php=php php$actionphp;
php php php php php php php php php}php elseifphp php(nullphp php!php=php=php php$actionphp)php php{
php php php php php php php php php php php php php$varsphp[php'actionphp'php]php php=php php$actionphp;
php php php php php php php php php}

php php php php php php php php php$inflectorphp php=php php$thisphp-php>getInflectorphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>getNoControllerphp(php)php php|php|php php$thisphp-php>getNeverControllerphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setInflectorTargetphp(php$thisphp-php>getViewScriptPathNoControllerSpecphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_setInflectorTargetphp(php$thisphp-php>getViewScriptPathSpecphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_translateSpecphp(php$varsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp neverRenderphp flagphp php(iphp.ephp.php,php globallyphp disphp/enablephp autorenderingphp)
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setNeverRenderphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_neverRenderphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp neverRenderphp flagphp value
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getNeverRenderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_neverRenderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp noRenderphp flagphp php(iphp.ephp.php,php whetherphp orphp notphp tophp autorenderphp)
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setNoRenderphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_noRenderphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp noRenderphp flagphp value
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getNoRenderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_noRenderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp viewphp scriptphp tophp use
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setScriptActionphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_scriptActionphp php=php php(stringphp)php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp viewphp scriptphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getScriptActionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_scriptActionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp responsephp segmentphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setResponseSegmentphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_responseSegmentphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_responseSegmentphp php=php php(stringphp)php php$namephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp namedphp responsephp segmentphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getResponseSegmentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responseSegmentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp noControllerphp flagphp php(iphp.ephp.php,php whetherphp orphp notphp tophp renderphp intophp controllerphp subdirectoriesphp)
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setNoControllerphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_noControllerphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp noControllerphp flagphp value
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getNoControllerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_noControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp neverControllerphp flagphp php(iphp.ephp.php,php whetherphp orphp notphp tophp renderphp intophp controllerphp subdirectoriesphp)
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setNeverControllerphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_neverControllerphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp neverControllerphp flagphp value
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getNeverControllerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_neverControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp scriptphp suffix
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$suffix
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setViewSuffixphp(php$suffixphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewSuffixphp php=php php(stringphp)php php$suffixphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp viewphp scriptphp suffix
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getViewSuffixphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewSuffixphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp forphp renderingphp aphp viewphp script
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$actionphp php php php php php php Viewphp scriptphp tophp render
php php php php php php*php php@paramphp php stringphp php php$namephp php php php php php php php php Responsephp namedphp segmentphp tophp renderphp to
php php php php php php*php php@paramphp php booleanphp php$noControllerphp Whetherphp orphp notphp tophp renderphp withinphp aphp subdirectoryphp namedphp afterphp thephp controller
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setRenderphp(php$actionphp php=php nullphp,php php$namephp php=php nullphp,php php$noControllerphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$actionphp)php php{
php php php php php php php php php php php php php$thisphp-php>setScriptActionphp(php$actionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$namephp)php php{
php php php php php php php php php php php php php$thisphp-php>setResponseSegmentphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$noControllerphp)php php{
php php php php php php php php php php php php php$thisphp-php>setNoControllerphp(php$noControllerphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Inflectphp basedphp onphp providedphp vars
php php php php php php*
php php php php php php*php Allowedphp variablesphp arephp:
php php php php php php*php php-php php:moduleDirphp php-php currentphp modulephp directory
php php php php php php*php php-php php:modulephp php-php currentphp modulephp name
php php php php php php*php php-php php:controllerphp php-php currentphp controllerphp name
php php php php php php*php php-php php:actionphp php-php currentphp actionphp name
php php php php php php*php php-php php:suffixphp php-php viewphp scriptphp filephp suffix
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$vars
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_translateSpecphp(arrayphp php$varsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$inflectorphp php php=php php$thisphp-php>getInflectorphp(php)php;
php php php php php php php php php$requestphp php php php php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php$dispatcherphp php=php php$thisphp-php>getFrontControllerphp(php)php-php>getDispatcherphp(php)php;
php php php php php php php php php$modulephp php php php php php=php php$dispatcherphp-php>formatModuleNamephp(php$requestphp-php>getModuleNamephp(php)php)php;
php php php php php php php php php$controllerphp php=php php$requestphp-php>getControllerNamephp(php)php;
php php php php php php php php php$actionphp php php php php php=php php$dispatcherphp-php>formatActionNamephp(php$requestphp-php>getActionNamephp(php)php)php;

php php php php php php php php php$paramsphp php php php php php=php compactphp(php'modulephp'php,php php'controllerphp'php,php php'actionphp'php)php;
php php php php php php php php foreachphp php(php$varsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(php$keyphp)php php{
php php php php php php php php php php php php php php php php casephp php'modulephp'php:
php php php php php php php php php php php php php php php php casephp php'controllerphp'php:
php php php php php php php php php php php php php php php php casephp php'actionphp'php:
php php php php php php php php php php php php php php php php casephp php'moduleDirphp'php:
php php php php php php php php php php php php php php php php casephp php'suffixphp'php:
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php$keyphp]php php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'suffixphp'php]php)php)php php{
php php php php php php php php php php php php php$origSuffixphp php=php php$thisphp-php>getViewSuffixphp(php)php;
php php php php php php php php php php php php php$thisphp-php>setViewSuffixphp(php$paramsphp[php'suffixphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'moduleDirphp'php]php)php)php php{
php php php php php php php php php php php php php$origModuleDirphp php=php php$thisphp-php>php_getModuleDirphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_setModuleDirphp(php$paramsphp[php'moduleDirphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$filteredphp php=php php$inflectorphp-php>filterphp(php$paramsphp)php;

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'suffixphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setViewSuffixphp(php$origSuffixphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'moduleDirphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setModuleDirphp(php$origModuleDirphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$filteredphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp viewphp scriptphp php(optionallyphp tophp aphp namedphp responsephp segmentphp)
php php php php php php*
php php php php php php*php Setsphp thephp noRenderphp flagphp tophp truephp whenphp calledphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$script
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renderScriptphp(php$scriptphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php php$namephp php=php php$thisphp-php>getResponseSegmentphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>appendBodyphp(
php php php php php php php php php php php php php$thisphp-php>viewphp-php>renderphp(php$scriptphp)php,
php php php php php php php php php php php php php$name
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>setNoRenderphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp viewphp basedphp onphp pathphp specifications
php php php php php php*
php php php php php php*php Rendersphp aphp viewphp basedphp onphp thephp viewphp scriptphp pathphp specificationsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$action
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php booleanphp php$noController
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$actionphp php=php nullphp,php php$namephp php=php nullphp,php php$noControllerphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setRenderphp(php$actionphp,php php$namephp,php php$noControllerphp)php;
php php php php php php php php php$pathphp php=php php$thisphp-php>getViewScriptphp(php)php;
php php php php php php php php php$thisphp-php>renderScriptphp(php$pathphp,php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp scriptphp basedphp onphp specificationphp variables
php php php php php php*
php php php php php php*php Passphp anphp actionphp,php andphp onephp orphp morephp specificationphp variablesphp php(viewphp scriptphp suffixphp)
php php php php php php*php tophp determinephp thephp viewphp scriptphp pathphp,php andphp renderphp thatphp scriptphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@paramphp php arrayphp php php$vars
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renderBySpecphp(php$actionphp php=php nullphp,php arrayphp php$varsphp php=php arrayphp(php)php,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$namephp)php php{
php php php php php php php php php php php php php$thisphp-php>setResponseSegmentphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php php$pathphp php=php php$thisphp-php>getViewScriptphp(php$actionphp,php php$varsphp)php;

php php php php php php php php php$thisphp-php>renderScriptphp(php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php postDispatchphp php-php autophp renderphp aphp view
php php php php php php*
php php php php php php*php Onlyphp autorendersphp ifphp:
php php php php php php*php php-php php_noRenderphp isphp false
php php php php php php*php php-php actionphp controllerphp isphp present
php php php php php php*php php-php requestphp hasphp notphp beenphp rephp-dispatchedphp php(iphp.ephp.php,php php_forwardphp(php)php hasphp notphp beenphp calledphp)
php php php php php php*php php-php responsephp isphp notphp aphp redirect
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_shouldRenderphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>renderphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Shouldphp thephp ViewRendererphp renderphp aphp viewphp scriptphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_shouldRenderphp(php)
php php php php php{
php php php php php php php php returnphp php(php!php$thisphp-php>getFrontControllerphp(php)php-php>getParamphp(php'noViewRendererphp'php)
php php php php php php php php php php php php php&php&php php!php$thisphp-php>php_neverRender
php php php php php php php php php php php php php&php&php php!php$thisphp-php>php_noRender
php php php php php php php php php php php php php&php&php php(nullphp php!php=php=php php$thisphp-php>php_actionControllerphp)
php php php php php php php php php php php php php&php&php php$thisphp-php>getRequestphp(php)php-php>isDispatchedphp(php)
php php php php php php php php php php php php php&php&php php!php$thisphp-php>getResponsephp(php)php-php>isRedirectphp(php)
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Usephp thisphp helperphp asphp aphp methodphp;php proxiesphp tophp setRenderphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$action
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@paramphp php booleanphp php$noController
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp directphp(php$actionphp php=php nullphp,php php$namephp php=php nullphp,php php$noControllerphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>setRenderphp(php$actionphp,php php$namephp,php php$noControllerphp)php;
php php php php php}
php}
