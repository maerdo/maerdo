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
php php*php php@versionphp php php php php$Idphp:php ContextSwitchphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Simplifyphp contextphp switchingphp basedphp onphp requestedphp format
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Triggerphp typephp constants
php php php php php php*php/
php php php php constphp TRIGGERphp_INITphp php=php php'TRIGGERphp_INITphp'php;
php php php php constphp TRIGGERphp_POSTphp php=php php'TRIGGERphp_POSTphp'php;

php php php php php/php*php*
php php php php php php*php Supportedphp contexts
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_contextsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php JSONphp autophp-serializationphp flag
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_autoJsonSerializationphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Controllerphp propertyphp keyphp tophp utilizephp forphp contextphp switching
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contextKeyphp php=php php'contextsphp'php;

php php php php php/php*php*
php php php php php php*php Requestphp parameterphp containingphp requestedphp context
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contextParamphp php=php php'formatphp'php;

php php php php php/php*php*
php php php php php php*php Currentphp context
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_currentContextphp;

php php php php php/php*php*
php php php php php php*php Defaultphp contextphp php(xmlphp)
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultContextphp php=php php'xmlphp'php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp disablephp layoutsphp whenphp switchingphp contexts
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_disableLayoutphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Methodsphp thatphp requirephp specialphp configuration
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_specialConfigphp php=php arrayphp(
php php php php php php php php php'setSuffixphp'php,
php php php php php php php php php'setHeadersphp'php,
php php php php php php php php php'setCallbacksphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Methodsphp thatphp arephp notphp configurablephp viaphp setOptionsphp andphp setConfig
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_unconfigurablephp php=php arrayphp(
php php php php php php php php php'setOptionsphp'php,
php php php php php php php php php'setConfigphp'php,
php php php php php php php php php'setHeaderphp'php,
php php php php php php php php php'setCallbackphp'php,
php php php php php php php php php'setContextphp'php,
php php php php php php php php php'setActionContextphp'php,
php php php php php php php php php'setActionContextsphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRenderer
php php php php php php*php/
php php php php protectedphp php$php_viewRendererphp;

php php php php php/php*php*
php php php php php php*php Originalphp viewphp suffixphp priorphp tophp detectingphp contextphp switch
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewSuffixOrigphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_contextsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addContextsphp(arrayphp(
php php php php php php php php php php php php php php php php php'jsonphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'suffixphp'php php php php php=php>php php'jsonphp'php,
php php php php php php php php php php php php php php php php php php php php php'headersphp'php php php php=php>php arrayphp(php'Contentphp-Typephp'php php=php>php php'applicationphp/jsonphp'php)php,
php php php php php php php php php php php php php php php php php php php php php'callbacksphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'initphp'php php=php>php php'initJsonContextphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'postphp'php php=php>php php'postJsonContextphp'
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php'xmlphp'php php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'suffixphp'php php php php php=php>php php'xmlphp'php,
php php php php php php php php php php php php php php php php php php php php php'headersphp'php php php php=php>php arrayphp(php'Contentphp-Typephp'php php=php>php php'applicationphp/xmlphp'php)php,
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp atphp startphp ofphp actionphp controller
php php php php php php*
php php php php php php*php Resetphp thephp viewphp scriptphp suffixphp tophp thephp originalphp statephp,php orphp storephp the
php php php php php php*php originalphp statephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_viewSuffixOrigphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_viewSuffixOrigphp php=php php$thisphp-php>php_getViewRendererphp(php)php-php>getViewSuffixphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_getViewRendererphp(php)php-php>setViewSuffixphp(php$thisphp-php>php_viewSuffixOrigphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Configurephp objectphp fromphp arrayphp ofphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'contextsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setContextsphp(php$optionsphp[php'contextsphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'contextsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$thisphp-php>php_unconfigurablephp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$thisphp-php>php_specialConfigphp)php)php php{
php php php php php php php php php php php php php php php php php$methodphp php=php php'php_php'php php.php php$methodphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp configphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Strategyphp patternphp:php returnphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp directphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp contextphp detectionphp andphp switching
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$format
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initContextphp(php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentContextphp php=php nullphp;

php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php php$requestphp php php php php=php php$thisphp-php>getRequestphp(php)php;
php php php php php php php php php$actionphp php php php php php=php php$requestphp-php>getActionNamephp(php)php;

php php php php php php php php php/php/php Returnphp ifphp nophp contextphp switchingphp enabledphp,php orphp nophp contextphp switching
php php php php php php php php php/php/php enabledphp forphp thisphp action
php php php php php php php php php$contextsphp php=php php$thisphp-php>getActionContextsphp(php$actionphp)php;
php php php php php php php php ifphp php(emptyphp(php$contextsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp ifphp nophp contextphp parameterphp provided
php php php php php php php php ifphp php(php!php$contextphp php=php php$requestphp-php>getParamphp(php$thisphp-php>getContextParamphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$formatphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$contextphp php=php php$formatphp;
php php php php php php php php php php php php php$formatphp php php=php nullphp;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp ifphp contextphp allowedphp byphp actionphp controller
php php php php php php php php ifphp php(php!php$thisphp-php>hasActionContextphp(php$actionphp,php php$contextphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Returnphp ifphp invalidphp contextphp parameterphp providedphp andphp nophp formatphp orphp invalid
php php php php php php php php php/php/php formatphp provided
php php php php php php php php ifphp php(php!php$thisphp-php>hasContextphp(php$contextphp)php)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$formatphp)php php|php|php php!php$thisphp-php>hasContextphp(php$formatphp)php)php php{

php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Usephp providedphp formatphp ifphp passed
php php php php php php php php ifphp php(php!emptyphp(php$formatphp)php php&php&php php$thisphp-php>hasContextphp(php$formatphp)php)php php{
php php php php php php php php php php php php php$contextphp php=php php$formatphp;
php php php php php php php php php}

php php php php php php php php php$suffixphp php=php php$thisphp-php>getSuffixphp(php$contextphp)php;

php php php php php php php php php$thisphp-php>php_getViewRendererphp(php)php-php>setViewSuffixphp(php$suffixphp)php;

php php php php php php php php php$headersphp php=php php$thisphp-php>getHeadersphp(php$contextphp)php;
php php php php php php php php ifphp php(php!emptyphp(php$headersphp)php)php php{
php php php php php php php php php php php php php$responsephp php=php php$thisphp-php>getResponsephp(php)php;
php php php php php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp php=php>php php$contentphp)php php{
php php php php php php php php php php php php php php php php php$responsephp-php>setHeaderphp(php$headerphp,php php$contentphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getAutoDisableLayoutphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Layout
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp.phpphp'php;
php php php php php php php php php php php php php$layoutphp php=php Zendphp_Layoutphp:php:getMvcInstancephp(php)php;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$layoutphp)php php{
php php php php php php php php php php php php php php php php php$layoutphp-php>disableLayoutphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$callbackphp php=php php$thisphp-php>getCallbackphp(php$contextphp,php selfphp:php:TRIGGERphp_INITphp)php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$callbackphp)php php&php&php methodphp_existsphp(php$thisphp,php php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$callbackphp(php)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$callbackphp)php php&php&php functionphp_existsphp(php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php php$callbackphp(php)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php callphp_userphp_funcphp(php$callbackphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Invalidphp contextphp callbackphp registeredphp forphp contextphp php"php%sphp"php'php,php php$contextphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_currentContextphp php=php php$contextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php JSONphp contextphp extraphp initialization
php php php php php php*
php php php php php php*php Turnsphp offphp viewRendererphp autophp-rendering
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initJsonContextphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>getAutoJsonSerializationphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$viewRendererphp php=php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php;
php php php php php php php php php$viewphp php=php php$viewRendererphp-php>viewphp;
php php php php php php php php ifphp php(php$viewphp instanceofphp Zendphp_Viewphp_Interfacephp)php php{
php php php php php php php php php php php php php$viewRendererphp-php>setNoRenderphp(truephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Shouldphp JSONphp contextsphp autophp-serializephp?
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAutoJsonSerializationphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_autoJsonSerializationphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp JSONphp contextphp autophp-serializationphp flag
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getAutoJsonSerializationphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_autoJsonSerializationphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp suffixphp fromphp array
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$spec
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_setSuffixphp(arrayphp php$specphp)
php php php php php{
php php php php php php php php foreachphp php(php$specphp asphp php$contextphp php=php>php php$suffixInfophp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$contextphp)php)php php{
php php php php php php php php php php php php php php php php php$contextphp php=php nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(isphp_stringphp(php$suffixInfophp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php$suffixInfophp)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$suffixInfophp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$suffixInfophp[php'suffixphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$suffixphp php php php php php php php php php php php php php php php php php php php php=php php$suffixInfophp[php'suffixphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$prependViewRendererSuffixphp php=php truephp;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(nullphp php=php=php=php php$contextphp)php php&php&php issetphp(php$suffixInfophp[php'contextphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$contextphp php=php php$suffixInfophp[php'contextphp'php]php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$suffixInfophp[php'prependViewRendererSuffixphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$prependViewRendererSuffixphp php=php php$suffixInfophp[php'prependViewRendererSuffixphp'php]php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php$suffixphp,php php$prependViewRendererSuffixphp)php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$countphp php=php countphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php(php(php$countphp <php php2php)php php&php&php php(nullphp php=php=php=php php$contextphp)php)php:
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Invalidphp suffixphp informationphp providedphp inphp configphp'php)php;
php php php php php php php php php php php php php php php php php php php php casephp php(php$countphp <php php2php)php:
php php php php php php php php php php php php php php php php php php php php php php php php php$suffixphp php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php$suffixphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php(php(php$countphp <php php3php)php php&php&php php(nullphp php=php=php=php php$contextphp)php)php:
php php php php php php php php php php php php php php php php php php php php php php php php php$contextphp php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$suffixphp php php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php$suffixphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php(php(php$countphp php=php=php php3php)php php&php&php php(nullphp php=php=php=php php$contextphp)php)php:
php php php php php php php php php php php php php php php php php php php php php php php php php$contextphp php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$suffixphp php php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$prependViewRendererSuffixphp php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php$suffixphp,php php$prependViewRendererSuffixphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php(php$countphp php>php=php php2php)php:
php php php php php php php php php php php php php php php php php php php php php php php php php$suffixphp php php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$prependViewRendererSuffixphp php=php arrayphp_shiftphp(php$suffixInfophp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php$suffixphp,php php$prependViewRendererSuffixphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Customizephp viewphp scriptphp suffixphp tophp usephp whenphp switchingphp contextphp.
php php php php php php*
php php php php php php*php Passingphp anphp emptyphp suffixphp valuephp tophp thephp settersphp disablesphp thephp viewphp script
php php php php php php*php suffixphp changephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$contextphp php php php php php php php php php php php php php php php php php php Contextphp typephp forphp whichphp tophp setphp suffix
php php php php php php*php php@paramphp php stringphp php php$suffixphp php php php php php php php php php php php php php php php php php php php Suffixphp tophp use
php php php php php php*php php@paramphp php booleanphp php$prependViewRendererSuffixphp Whetherphp orphp notphp tophp prependphp thephp newphp suffixphp tophp thephp viewrendererphp suffix
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setSuffixphp(php$contextphp,php php$suffixphp,php php$prependViewRendererSuffixphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Cannotphp setphp suffixphp;php invalidphp contextphp typephp php"php%sphp"php'php,php php$contextphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$suffixphp)php)php php{
php php php php php php php php php php php php php$suffixphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$suffixphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$suffixphp[php'prependViewRendererSuffixphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$prependViewRendererSuffixphp php=php php$suffixphp[php'prependViewRendererSuffixphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$suffixphp[php'suffixphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$suffixphp php=php php$suffixphp[php'suffixphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$suffixphp php=php php'php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$suffixphp php=php php(stringphp)php php$suffixphp;

php php php php php php php php ifphp php(php$prependViewRendererSuffixphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$suffixphp)php)php php{
php php php php php php php php php php php php php php php php php$suffixphp php=php php$thisphp-php>php_getViewRendererphp(php)php-php>getViewSuffixphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$suffixphp php.php=php php'php.php'php php.php php$thisphp-php>php_getViewRendererphp(php)php-php>getViewSuffixphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'suffixphp'php]php php=php php$suffixphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp suffixphp forphp givenphp contextphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp Contextphp type
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSuffixphp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_contextsphp[php$typephp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Cannotphp retrievephp suffixphp;php invalidphp contextphp typephp php"php%sphp"php'php,php php$typephp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$typephp]php[php'suffixphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp givenphp contextphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$context
php php php php php php*php php@paramphp php booleanphp php$throwException
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exceptionphp ifphp contextphp doesphp notphp existphp andphp throwExceptionphp isphp true
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasContextphp(php$contextphp,php php$throwExceptionphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$contextphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$contextphp)php)php php{
php php php php php php php php php php php php php$errorphp php=php falsephp;
php php php php php php php php php php php php foreachphp php(php$contextphp asphp php$testphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_contextsphp[php$testphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$errorphp php=php php(stringphp)php php$testphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(falsephp php=php=php=php php$errorphp)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$contextphp php=php php$errorphp;
php php php php php php php php php}php elseifphp php(truephp php=php=php=php php$contextphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$throwExceptionphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Contextphp php"php%sphp"php doesphp notphp existphp'php,php php$contextphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp headerphp tophp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php stringphp php$header
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addHeaderphp(php$contextphp,php php$headerphp,php php$contentphp)
php php php php php{
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;

php php php php php php php php php$headerphp php php=php php(stringphp)php php$headerphp;
php php php php php php php php php$contentphp php=php php(stringphp)php php$contentphp;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Cannotphp addphp php"php%sphp"php headerphp tophp contextphp php"php%sphp"php:php alreadyphp existsphp'php,php php$headerphp,php php$contextphp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php php=php php$contentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Customizephp responsephp headerphp tophp usephp whenphp switchingphp context
php php php php php php*
php php php php php php*php Passingphp anphp emptyphp headerphp valuephp tophp thephp settersphp disablesphp thephp response
php php php php php php*php headerphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp php php Contextphp typephp forphp whichphp tophp setphp suffix
php php php php php php*php php@paramphp php stringphp php$headerphp Headerphp tophp set
php php php php php php*php php@paramphp php stringphp php$contentphp Headerphp content
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$contextphp,php php$headerphp,php php$contentphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php php$headerphp php php=php php(stringphp)php php$headerphp;
php php php php php php php php php$contentphp php=php php(stringphp)php php$contentphp;

php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php php=php php$contentphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp headersphp atphp oncephp forphp aphp givenphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php arrayphp php php$headers
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addHeadersphp(php$contextphp,php arrayphp php$headersphp)
php php php php php{
php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp php=php>php php$contentphp)php php{
php php php php php php php php php php php php php$thisphp-php>addHeaderphp(php$contextphp,php php$headerphp,php php$contentphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp headersphp fromphp contextphp php=php>php headersphp pairs
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_setHeadersphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$contextphp php=php>php php$headersphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$headersphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setHeadersphp(php$contextphp,php php$headersphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp multiplephp headersphp atphp oncephp forphp aphp givenphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php arrayphp php php$headers
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setHeadersphp(php$contextphp,php arrayphp php$headersphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearHeadersphp(php$contextphp)php;
php php php php php php php php foreachphp php(php$headersphp asphp php$headerphp php=php>php php$contentphp)php php{
php php php php php php php php php php php php php$thisphp-php>setHeaderphp(php$contextphp,php php$headerphp,php php$contentphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp contextphp header
php php php php php php*
php php php php php php*php Returnsphp thephp valuephp ofphp aphp givenphp headerphp forphp aphp givenphp contextphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php stringphp php$header
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$contextphp,php php$headerphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php php$headerphp php php=php php(stringphp)php php$headerphp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp contextphp headers
php php php php php php*
php php php php php php*php Returnsphp allphp headersphp forphp aphp contextphp asphp keyphp/valuephp pairs
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp singlephp headerphp fromphp aphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php stringphp php$header
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp removeHeaderphp(php$contextphp,php php$headerphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php php$headerphp php php=php php(stringphp)php php$headerphp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php[php$headerphp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp headersphp forphp aphp givenphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearHeadersphp(php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'headersphp'php]php php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp triggerphp andphp returnphp inphp normalizedphp form
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$trigger
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_validateTriggerphp(php$triggerphp)
php php php php php{
php php php php php php php php php$triggerphp php=php strtoupperphp(php$triggerphp)php;
php php php php php php php php ifphp php(php'TRIGGERphp_php'php php!php=php=php substrphp(php$triggerphp,php php0php,php php8php)php)php php{
php php php php php php php php php php php php php$triggerphp php=php php'TRIGGERphp_php'php php.php php$triggerphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!inphp_arrayphp(php$triggerphp,php arrayphp(selfphp:php:TRIGGERphp_INITphp,php selfphp:php:TRIGGERphp_POSTphp)php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Invalidphp triggerphp php"php%sphp"php'php,php php$triggerphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$triggerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp callbackphp forphp aphp givenphp contextphp andphp trigger
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$context
php php php php php php*php php@paramphp php stringphp php php php php php php php$trigger
php php php php php php*php php@paramphp php stringphp|arrayphp php$callback
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCallbackphp(php$contextphp,php php$triggerphp,php php$callbackphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$triggerphp php=php php$thisphp-php>php_validateTriggerphp(php$triggerphp)php;

php php php php php php php php ifphp php(php!isphp_stringphp(php$callbackphp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$callbackphp)php php|php|php php(php2php php!php=php countphp(php$callbackphp)php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Invalidphp callbackphp specifiedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php[php$triggerphp]php php=php php$callbackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbacksphp fromphp arrayphp ofphp contextphp php=php>php callbacksphp pairs
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_setCallbacksphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$contextphp php=php>php php$callbacksphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$callbacksphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>setCallbacksphp(php$contextphp,php php$callbacksphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbacksphp forphp aphp givenphp context
php php php php php php*
php php php php php php*php Callbacksphp shouldphp bephp inphp triggerphp/callbackphp pairsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php arrayphp php php$callbacks
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCallbacksphp(php$contextphp,php arrayphp php$callbacksphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$callbacksphp asphp php$triggerphp php=php>php php$callbackphp)php php{
php php php php php php php php php php php php php$thisphp-php>setCallbackphp(php$contextphp,php php$triggerphp,php php$callbackphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp singlephp callbackphp forphp aphp givenphp contextphp andphp trigger
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php stringphp php$trigger
php php php php php php*php php@returnphp stringphp|arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getCallbackphp(php$contextphp,php php$triggerphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$triggerphp php=php php$thisphp-php>php_validateTriggerphp(php$triggerphp)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php[php$triggerphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php[php$triggerphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp callbacksphp forphp aphp givenphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCallbacksphp(php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp aphp callbackphp forphp aphp givenphp contextphp andphp trigger
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@paramphp php stringphp php$trigger
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp removeCallbackphp(php$contextphp,php php$triggerphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$triggerphp php=php php$thisphp-php>php_validateTriggerphp(php$triggerphp)php;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php[php$triggerphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php[php$triggerphp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp callbacksphp forphp aphp givenphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearCallbacksphp(php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php[php'callbacksphp'php]php php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp namephp ofphp parameterphp tophp usephp whenphp determiningphp contextphp format
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setContextParamphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextParamphp php=php php(stringphp)php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp contextphp formatphp requestphp parameterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContextParamphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextParamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp defaultphp contextphp tophp usephp whenphp nophp contextphp formatphp provided
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setDefaultContextphp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_contextsphp[php$typephp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Cannotphp setphp defaultphp contextphp;php invalidphp contextphp typephp php"php%sphp"php'php,php php$typephp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_defaultContextphp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp defaultphp context
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultContextphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultContextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp ifphp layoutphp shouldphp bephp disabled
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAutoDisableLayoutphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_disableLayoutphp php=php php(php$flagphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp autophp layoutphp disablephp flag
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getAutoDisableLayoutphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_disableLayoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp newphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$contextphp Contextphp type
php php php php php php*php php@paramphp php arrayphp php php$specphp php php php Contextphp specification
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addContextphp(php$contextphp,php arrayphp php$specphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasContextphp(php$contextphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Cannotphp addphp contextphp php"php%sphp"php;php alreadyphp existsphp'php,php php$contextphp)php)php;
php php php php php php php php php}
php php php php php php php php php$contextphp php=php php(stringphp)php php$contextphp;

php php php php php php php php php$thisphp-php>php_contextsphp[php$contextphp]php php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>setSuffixphp(php$contextphp,php php php php php(issetphp(php$specphp[php'suffixphp'php]php)php php php php php?php php$specphp[php'suffixphp'php]php php php php php:php php'php'php)php)
php php php php php php php php php php php php php php-php>setHeadersphp(php$contextphp,php php php php(issetphp(php$specphp[php'headersphp'php]php)php php php php?php php$specphp[php'headersphp'php]php php php php:php arrayphp(php)php)php)
php php php php php php php php php php php php php php-php>setCallbacksphp(php$contextphp,php php(issetphp(php$specphp[php'callbacksphp'php]php)php php?php php$specphp[php'callbacksphp'php]php php:php arrayphp(php)php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp existingphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$contextphp Contextphp type
php php php php php php*php php@paramphp php arrayphp php php$specphp php php php Contextphp specification
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setContextphp(php$contextphp,php arrayphp php$specphp)
php php php php php{
php php php php php php php php php$thisphp-php>removeContextphp(php$contextphp)php;
php php php php php php php php returnphp php$thisphp-php>addContextphp(php$contextphp,php php$specphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp contexts
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$contexts
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addContextsphp(arrayphp php$contextsphp)
php php php php php{
php php php php php php php php foreachphp php(php$contextsphp asphp php$contextphp php=php>php php$specphp)php php{
php php php php php php php php php php php php php$thisphp-php>addContextphp(php$contextphp,php php$specphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp multiplephp contextsphp,php afterphp firstphp removingphp all
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$contexts
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setContextsphp(arrayphp php$contextsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearContextsphp(php)php;
php php php php php php php php foreachphp php(php$contextsphp asphp php$contextphp php=php>php php$specphp)php php{
php php php php php php php php php php php php php$thisphp-php>addContextphp(php$contextphp,php php$specphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp contextphp specification
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp functionphp getContextphp(php$contextphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasContextphp(php$contextphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contextsphp[php(stringphp)php php$contextphp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp contextphp definitions
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getContextsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp context
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$context
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp removeContextphp(php$contextphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasContextphp(php$contextphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_contextsphp[php(stringphp)php php$contextphp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp contexts
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearContextsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp currentphp contextphp,php ifphp any
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getCurrentContextphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentContextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Postphp dispatchphp processing
php php php php php php*
php php php php php php*php Executephp postDispatchphp callbackphp forphp currentphp contextphp,php ifphp available
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(php)
php php php php php{
php php php php php php php php php$contextphp php=php php$thisphp-php>getCurrentContextphp(php)php;
php php php php php php php php ifphp php(nullphp php!php=php=php php$contextphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$callbackphp php=php php$thisphp-php>getCallbackphp(php$contextphp,php selfphp:php:TRIGGERphp_POSTphp)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$callbackphp)php php&php&php methodphp_existsphp(php$thisphp,php php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$callbackphp(php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$callbackphp)php php&php&php functionphp_existsphp(php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$callbackphp(php)php;
php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$callbackphp)php)php php{
php php php php php php php php php php php php php php php php php php php php callphp_userphp_funcphp(php$callbackphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php'Invalidphp postDispatchphp contextphp callbackphp registeredphp forphp contextphp php"php%sphp"php'php,php php$contextphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php JSONphp postphp processing
php php php php php php*
php php php php php php*php JSONphp serializephp viewphp variablesphp tophp responsephp body
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postJsonContextphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>getAutoJsonSerializationphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$viewRendererphp php=php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php;
php php php php php php php php php$viewphp php=php php$viewRendererphp-php>viewphp;
php php php php php php php php ifphp php(php$viewphp instanceofphp Zendphp_Viewphp_Interfacephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Json
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp(methodphp_existsphp(php$viewphp,php php'getVarsphp'php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;
php php php php php php php php php php php php php php php php php$varsphp php=php Zendphp_Jsonphp:php:encodephp(php$viewphp-php>getVarsphp(php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setBodyphp(php$varsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Viewphp doesphp notphp implementphp thephp getVarsphp(php)php methodphp neededphp tophp encodephp thephp viewphp intophp JSONphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp onephp orphp morephp contextsphp tophp anphp action
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$action
php php php php php php*php php@paramphp php stringphp|arrayphp php$context
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp|voidphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addActionContextphp(php$actionphp,php php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$actionphp php php php php php=php php(stringphp)php php$actionphp;
php php php php php php php php php$contextKeyphp php=php php$thisphp-php>php_contextKeyphp;

php php php php php php php php ifphp php(php!issetphp(php$controllerphp-php>php$contextKeyphp)php)php php{
php php php php php php php php php php php php php$controllerphp-php>php$contextKeyphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(truephp php=php=php=php php$contextphp)php php{
php php php php php php php php php php php php php$contextsphp php=php php$thisphp-php>getContextsphp(php)php;
php php php php php php php php php php php php php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php php=php arrayphp_keysphp(php$contextsphp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$contextphp php=php php(arrayphp)php php$contextphp;
php php php php php php php php ifphp php(php!issetphp(php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php)php)php php{
php php php php php php php php php php php php php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php php=php php$contextphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php php=php arrayphp_mergephp(
php php php php php php php php php php php php php php php php php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php,
php php php php php php php php php php php php php php php php php$context
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp contextphp asphp availablephp forphp aphp givenphp controllerphp action
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$action
php php php php php php*php php@paramphp php stringphp|arrayphp php$context
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp|voidphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setActionContextphp(php$actionphp,php php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$actionphp php php php php php=php php(stringphp)php php$actionphp;
php php php php php php php php php$contextKeyphp php=php php$thisphp-php>php_contextKeyphp;

php php php php php php php php ifphp php(php!issetphp(php$controllerphp-php>php$contextKeyphp)php)php php{
php php php php php php php php php php php php php$controllerphp-php>php$contextKeyphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(truephp php=php=php=php php$contextphp)php php{
php php php php php php php php php php php php php$contextsphp php=php php$thisphp-php>getContextsphp(php)php;
php php php php php php php php php php php php php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php php=php arrayphp_keysphp(php$contextsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php php=php php(arrayphp)php php$contextphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp actionphp/contextphp pairsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$contexts
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addActionContextsphp(arrayphp php$contextsphp)
php php php php php{
php php php php php php php php foreachphp php(php$contextsphp asphp php$actionphp php=php>php php$contextphp)php php{
php php php php php php php php php php php php php$thisphp-php>addActionContextphp(php$actionphp,php php$contextphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp andphp setphp multiplephp actionphp contextsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$contexts
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setActionContextsphp(arrayphp php$contextsphp)
php php php php php{
php php php php php php php php foreachphp php(php$contextsphp asphp php$actionphp php=php>php php$contextphp)php php{
php php php php php php php php php php php php php$thisphp-php>setActionContextphp(php$actionphp,php php$contextphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp aphp particularphp controllerphp actionphp havephp thephp givenphp contextphp(sphp)php?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$action
php php php php php php*php php@paramphp php stringphp|arrayphp php$context
php php php php php php*php php@throwsphp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasActionContextphp(php$actionphp,php php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>hasContextphp(php$contextphp,php truephp)php;
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$actionphp php php php php php=php php(stringphp)php php$actionphp;
php php php php php php php php php$contextKeyphp php=php php$thisphp-php>php_contextKeyphp;

php php php php php php php php ifphp php(php!issetphp(php$controllerphp-php>php{php$contextKeyphp}php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$allContextsphp php=php php$controllerphp-php>php{php$contextKeyphp}php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$allContextsphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php"Invalidphp contextsphp foundphp forphp controllerphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$allContextsphp[php$actionphp]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(truephp php=php=php=php php$allContextsphp[php$actionphp]php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$contextsphp php=php php$allContextsphp[php$actionphp]php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$contextsphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Controllerphp_Actionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(sprintfphp(php"Invalidphp contextsphp foundphp forphp actionphp php'php%sphp'php"php,php php$actionphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$contextphp)php php&php&php inphp_arrayphp(php$contextphp,php php$contextsphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$contextphp)php)php php{
php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php foreachphp php(php$contextphp asphp php$testphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$testphp,php php$contextsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$foundphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$foundphp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp contextsphp forphp aphp givenphp actionphp orphp allphp actionsphp inphp thephp controller
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getActionContextsphp(php$actionphp php=php nullphp)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$actionphp php php php php php=php php(stringphp)php php$actionphp;
php php php php php php php php php$contextKeyphp php=php php$thisphp-php>php_contextKeyphp;

php php php php php php php php ifphp php(php!issetphp(php$controllerphp-php>php$contextKeyphp)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$actionphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$controllerphp-php>php$contextKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp onephp orphp morephp contextsphp forphp aphp givenphp controllerphp action
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php$action
php php php php php php*php php@paramphp php stringphp|arrayphp php$context
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp removeActionContextphp(php$actionphp,php php$contextphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasActionContextphp(php$actionphp,php php$contextphp)php)php php{
php php php php php php php php php php php php php$controllerphp php php php php php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php php php php php php$contextKeyphp php php php php php=php php$thisphp-php>php_contextKeyphp;
php php php php php php php php php php php php php$actionphp php php php php php php php php php=php php(stringphp)php php$actionphp;
php php php php php php php php php php php php php$contextsphp php php php php php php php=php php$controllerphp-php>php$contextKeyphp;
php php php php php php php php php php php php php$actionContextsphp php=php php$contextsphp[php$actionphp]php;
php php php php php php php php php php php php php$contextsphp php php php php php php php=php php(arrayphp)php php$contextphp;
php php php php php php php php php php php php foreachphp php(php$contextsphp asphp php$contextphp)php php{
php php php php php php php php php php php php php php php php php$indexphp php=php arrayphp_searchphp(php$contextphp,php php$actionContextsphp)php;
php php php php php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php$indexphp)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php[php$indexphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp contextsphp forphp aphp givenphp controllerphp actionphp orphp allphp actions
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ContextSwitchphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp clearActionContextsphp(php$actionphp php=php nullphp)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php php$contextKeyphp php=php php$thisphp-php>php_contextKeyphp;

php php php php php php php php ifphp php(php!issetphp(php$controllerphp-php>php$contextKeyphp)php php|php|php emptyphp(php$controllerphp-php>php$contextKeyphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$actionphp)php php{
php php php php php php php php php php php php php$controllerphp-php>php$contextKeyphp php=php arrayphp(php)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$actionphp php=php php(stringphp)php php$actionphp;
php php php php php php php php ifphp php(issetphp(php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$controllerphp-php>php{php$contextKeyphp}php[php$actionphp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp ViewRenderer
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_ViewRendererphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php protectedphp functionphp php_getViewRendererphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_viewRendererphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_viewRendererphp php=php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_viewRendererphp;
php php php php php}
php}

