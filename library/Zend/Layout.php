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
php php*php php@packagephp php php php Zendphp_Layout
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Layoutphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Providephp Layoutphp supportphp forphp MVCphp applications
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Layout
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Layout
php{
php php php php php/php*php*
php php php php php php*php Placeholderphp containerphp forphp layoutphp variables
php php php php php php*php php@varphp Zendphp_Viewphp_Helperphp_Placeholderphp_Container
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php Keyphp usedphp tophp storephp contentphp fromphp php'defaultphp'php namedphp responsephp segment
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contentKeyphp php=php php'contentphp'php;

php php php php php/php*php*
php php php php php php*php Arephp layoutsphp enabledphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_enabledphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Helperphp class
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_helperClassphp php=php php'Zendphp_Layoutphp_Controllerphp_Actionphp_Helperphp_Layoutphp'php;

php php php php php/php*php*
php php php php php php*php Inflectorphp usedphp tophp resolvephp layoutphp script
php php php php php php*php php@varphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php protectedphp php$php_inflectorphp;

php php php php php/php*php*
php php php php php php*php Flagphp:php isphp inflectorphp enabledphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_inflectorEnabledphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Inflectorphp target
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_inflectorTargetphp php=php php'php:scriptphp.php:suffixphp'php;

php php php php php/php*php*
php php php php php php*php Layoutphp view
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_layoutphp php=php php'layoutphp'php;

php php php php php/php*php*
php php php php php php*php Layoutphp viewphp scriptphp path
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewScriptPathphp php=php nullphp;

php php php php protectedphp php$php_viewBasePathphp php=php nullphp;
php php php php protectedphp php$php_viewBasePrefixphp php=php php'Layoutphp_Viewphp'php;

php php php php php/php*php*
php php php php php php*php Flagphp:php isphp MVCphp integrationphp enabledphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_mvcEnabledphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Instancephp registeredphp withphp MVCphp,php ifphp any
php php php php php php*php php@varphp Zendphp_Layout
php php php php php php*php/
php php php php protectedphp staticphp php$php_mvcInstancephp;

php php php php php/php*php*
php php php php php php*php Flagphp:php isphp MVCphp successfulphp actionphp onlyphp flagphp setphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_mvcSuccessfulActionOnlyphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Pluginphp class
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pluginClassphp php=php php'Zendphp_Layoutphp_Controllerphp_Pluginphp_Layoutphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_viewphp;

php php php php php/php*php*
php php php php php php*php Viewphp scriptphp suffixphp forphp layoutphp script
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewSuffixphp php=php php'phtmlphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Acceptsphp eitherphp:
php php php php php php*php php-php Aphp stringphp pathphp tophp layouts
php php php php php php*php php-php Anphp arrayphp ofphp options
php php php php php php*php php-php Aphp Zendphp_Configphp objectphp withphp options
php php php php php php*
php php php php php php*php Layoutphp scriptphp pathphp,php eitherphp asphp argumentphp orphp asphp keyphp inphp optionsphp,php is
php php php php php php*php requiredphp.
php php php php php php*
php php php php php php*php Ifphp mvcEnabledphp flagphp isphp falsephp fromphp optionsphp,php simplyphp setsphp layoutphp scriptphp pathphp.
php php php php php php*php Otherwisephp,php alsophp instantiatesphp andphp registersphp actionphp helperphp andphp controller
php php php php php php*php pluginphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp,php php$initMvcphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setLayoutPathphp(php$optionsphp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php php php php php}php elseifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Layoutphp_Exceptionphp(php'Invalidphp optionphp providedphp tophp constructorphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_initVarContainerphp(php)php;

php php php php php php php php ifphp php(php$initMvcphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_setMvcEnabledphp(truephp)php;
php php php php php php php php php php php php php$thisphp-php>php_initMvcphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_setMvcEnabledphp(falsephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Staticphp methodphp forphp initializationphp withphp MVCphp support
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp staticphp functionphp startMvcphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_mvcInstancephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_mvcInstancephp php=php newphp selfphp(php$optionsphp,php truephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_mvcInstancephp-php>setLayoutPathphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php php|php|php php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_mvcInstancephp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_mvcInstancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp MVCphp instancephp ofphp Zendphp_Layoutphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layoutphp|null
php php php php php php*php/
php php php php publicphp staticphp functionphp getMvcInstancephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_mvcInstancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp MVCphp instance
php php php php php php*
php php php php php php*php Unregistersphp pluginsphp andphp helpersphp,php andphp destroysphp MVCphp layoutphp instancephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp resetMvcInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php selfphp:php:php$php_mvcInstancephp)php php{
php php php php php php php php php php php php php$layoutphp php=php selfphp:php:php$php_mvcInstancephp;
php php php php php php php php php php php php php$pluginClassphp php=php php$layoutphp-php>getPluginClassphp(php)php;
php php php php php php php php php php php php php$frontphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php php php php ifphp php(php$frontphp-php>hasPluginphp(php$pluginClassphp)php)php php{
php php php php php php php php php php php php php php php php php$frontphp-php>unregisterPluginphp(php$pluginClassphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:hasHelperphp(php'layoutphp'php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:removeHelperphp(php'layoutphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php unsetphp(php$layoutphp)php;
php php php php php php php php php php php php selfphp:php:php$php_mvcInstancephp php=php nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp enphp masse
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Layoutphp_Exceptionphp(php'setOptionsphp(php)php expectsphp eitherphp anphp arrayphp orphp aphp Zendphp_Configphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp MVCphp integration
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initMvcphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_initPluginphp(php)php;
php php php php php php php php php$thisphp-php>php_initHelperphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp frontphp controllerphp plugin
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initPluginphp(php)
php php php php php{
php php php php php php php php php$pluginClassphp php=php php$thisphp-php>getPluginClassphp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php$frontphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php ifphp php(php!php$frontphp-php>hasPluginphp(php$pluginClassphp)php)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$pluginClassphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$pluginClassphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$frontphp-php>registerPluginphp(
php php php php php php php php php php php php php php php php php/php/php registerphp tophp runphp lastphp php|php BUTphp beforephp thephp ErrorHandlerphp php(ifphp itsphp availablephp)
php php php php php php php php php php php php php php php php newphp php$pluginClassphp(php$thisphp)php,
php php php php php php php php php php php php php php php php php9php9
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp actionphp helper
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_initHelperphp(php)
php php php php php{
php php php php php php php php php$helperClassphp php=php php$thisphp-php>getHelperClassphp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:hasHelperphp(php'layoutphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$helperClassphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$helperClassphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStackphp(php)php-php>offsetSetphp(php-php9php0php,php newphp php$helperClassphp(php$thisphp)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp fromphp aphp configphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp placeholderphp containerphp forphp layoutphp vars
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Placeholderphp_Container
php php php php php php*php/
php php php php protectedphp functionphp php_initVarContainerphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_containerphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Placeholderphp/Registryphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_containerphp php=php Zendphp_Viewphp_Helperphp_Placeholderphp_Registryphp:php:getRegistryphp(php)php-php>getContainerphp(php_php_CLASSphp_php_php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp scriptphp tophp use
php php php php php php*
php php php php php php*php Notephp:php enablesphp layoutphp byphp defaultphp,php canphp bephp disabled
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php booleanphp php$enabled
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setLayoutphp(php$namephp,php php$enabledphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_layoutphp php=php php(stringphp)php php$namephp;
php php php php php php php php ifphp php(php$enabledphp)php php{
php php php php php php php php php php php php php$thisphp-php>enableLayoutphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp layoutphp script
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLayoutphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_layoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Disablephp layout
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp disableLayoutphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_enabledphp php=php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablephp layout
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp enableLayoutphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_enabledphp php=php truephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp layoutphp enabledphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_enabledphp;
php php php php php}


php php php php publicphp functionphp setViewBasePathphp(php$pathphp,php php$prefixphp php=php php'Layoutphp_Viewphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewBasePathphp php=php php$pathphp;
php php php php php php php php php$thisphp-php>php_viewBasePrefixphp php=php php$prefixphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getViewBasePathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewBasePathphp;
php php php php php}

php php php php publicphp functionphp setViewScriptPathphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewScriptPathphp php=php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getViewScriptPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewScriptPathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp scriptphp path
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setLayoutPathphp(php$pathphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setViewScriptPathphp(php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp layoutphp scriptphp path
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLayoutPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getViewScriptPathphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp contentphp key
php php php php php php*
php php php php php php*php Keyphp inphp namespacephp containerphp denotingphp defaultphp content
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$contentKey
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setContentKeyphp(php$contentKeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_contentKeyphp php=php php(stringphp)php php$contentKeyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp contentphp key
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentKeyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contentKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp MVCphp enabledphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$mvcEnabled
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php protectedphp functionphp php_setMvcEnabledphp(php$mvcEnabledphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mvcEnabledphp php=php php(php$mvcEnabledphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp MVCphp enabledphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getMvcEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_mvcEnabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp MVCphp Successfulphp Actionphp Onlyphp flag
php php php php php php*
php php php php php php*php php@paramphp boolphp php$successfulActionOnly
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setMvcSuccessfulActionOnlyphp(php$successfulActionOnlyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mvcSuccessfulActionOnlyphp php=php php(php$successfulActionOnlyphp)php php?php truephp php:php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp MVCphp Successfulphp Actionphp Onlyphp Flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getMvcSuccessfulActionOnlyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_mvcSuccessfulActionOnlyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewphp php=php php$viewphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp helperphp class
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHelperClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_helperClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp helperphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$helperClass
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setHelperClassphp(php$helperClassphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_helperClassphp php=php php(stringphp)php php$helperClassphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp pluginphp class
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPluginClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pluginClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pluginphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pluginClass
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setPluginClassphp(php$pluginClassphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginClassphp php=php php(stringphp)php php$pluginClassphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp viewphp object
php php php php php php*
php php php php php php*php Ifphp nophp viewphp objectphp currentlyphp setphp,php retrievesphp itphp fromphp thephp ViewRendererphp.
php php php php php php*
php php php php php php*php php@todophp Setphp inflectorphp fromphp viewphp rendererphp atphp samephp time
php php php php php php*php php@returnphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getViewphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_viewphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/HelperBrokerphp.phpphp'php;
php php php php php php php php php php php php php$viewRendererphp php=php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:getStaticHelperphp(php'viewRendererphp'php)php;
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$viewRendererphp-php>viewphp)php php{
php php php php php php php php php php php php php php php php php$viewRendererphp-php>initViewphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setViewphp(php$viewRendererphp-php>viewphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_viewphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp viewphp scriptphp suffix
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$viewSuffix
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setViewSuffixphp(php$viewSuffixphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewSuffixphp php=php php(stringphp)php php$viewSuffixphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp layoutphp viewphp scriptphp suffix
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getViewSuffixphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_viewSuffixphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp inflectorphp target
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getInflectorTargetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_inflectorTargetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp inflectorphp target
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$inflectorTarget
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setInflectorTargetphp(php$inflectorTargetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inflectorTargetphp php=php php(stringphp)php php$inflectorTargetphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp inflectorphp tophp usephp whenphp resolvingphp layoutphp names
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Filterphp_Inflectorphp php$inflector
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp setInflectorphp(Zendphp_Filterphp_Inflectorphp php$inflectorphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inflectorphp php=php php$inflectorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp inflector
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Inflector
php php php php php php*php/
php php php php publicphp functionphp getInflectorphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_inflectorphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Inflectorphp.phpphp'php;
php php php php php php php php php php php php php$inflectorphp php=php newphp Zendphp_Filterphp_Inflectorphp(php)php;
php php php php php php php php php php php php php$inflectorphp-php>setTargetReferencephp(php$thisphp-php>php_inflectorTargetphp)
php php php php php php php php php php php php php php php php php php php php php php php-php>addRulesphp(arrayphp(php'php:scriptphp'php php=php>php arrayphp(php'Wordphp_CamelCaseToDashphp'php,php php'StringToLowerphp'php)php)php)
php php php php php php php php php php php php php php php php php php php php php php php-php>setStaticRuleReferencephp(php'suffixphp'php,php php$thisphp-php>php_viewSuffixphp)php;
php php php php php php php php php php php php php$thisphp-php>setInflectorphp(php$inflectorphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_inflectorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablephp inflector
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp enableInflectorphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_inflectorEnabledphp php=php truephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Disablephp inflector
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php/
php php php php publicphp functionphp disableInflectorphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_inflectorEnabledphp php=php falsephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp statusphp ofphp inflectorphp enabledphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp inflectorEnabledphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_inflectorEnabledphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp layoutphp variable
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_containerphp[php$keyphp]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp layoutphp variable
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_containerphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_containerphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp layoutphp variablephp setphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php(issetphp(php$thisphp-php>php_containerphp[php$keyphp]php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp aphp layoutphp variablephp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_containerphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_containerphp[php$keyphp]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Assignphp onephp orphp morephp layoutphp variables
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$specphp Assocphp arrayphp orphp stringphp keyphp;php ifphp assocphp arrayphp,php setsphp each
php php php php php php*php keyphp asphp aphp layoutphp variable
php php php php php php*php php@paramphp php mixedphp php$valuephp Valuephp ifphp php$specphp isphp aphp key
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php php@throwsphp Zendphp_Layoutphp_Exceptionphp ifphp nonphp-arrayphp/stringphp valuephp passedphp tophp php$spec
php php php php php php*php/
php php php php publicphp functionphp assignphp(php$specphp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php php$origphp php=php php$thisphp-php>php_containerphp-php>getArrayCopyphp(php)php;
php php php php php php php php php php php php php$mergedphp php=php arrayphp_mergephp(php$origphp,php php$specphp)php;
php php php php php php php php php php php php php$thisphp-php>php_containerphp-php>exchangeArrayphp(php$mergedphp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$specphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_containerphp[php$specphp]php php=php php$valuephp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Layoutphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Layoutphp_Exceptionphp(php'Invalidphp valuesphp passedphp tophp assignphp(php)php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp layout
php php php php php php*
php php php php php php*php Setsphp internalphp scriptphp pathphp asphp lastphp pathphp onphp scriptphp pathphp stackphp,php assigns
php php php php php php*php layoutphp variablesphp tophp viewphp,php determinesphp layoutphp namephp usingphp inflectorphp,php and
php php php php php php*php rendersphp layoutphp viewphp scriptphp.
php php php php php php*
php php php php php php*php php$namephp willphp bephp passedphp tophp thephp inflectorphp asphp thephp keyphp php'scriptphp'php.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php php$namephp php=php php$thisphp-php>getLayoutphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>inflectorEnabledphp(php)php php&php&php php(nullphp php!php=php=php php(php$inflectorphp php=php php$thisphp-php>getInflectorphp(php)php)php)php)
php php php php php php php php php{
php php php php php php php php php php php php php$namephp php=php php$thisphp-php>php_inflectorphp-php>filterphp(arrayphp(php'scriptphp'php php=php>php php$namephp)php)php;
php php php php php php php php php}

php php php php php php php php php$viewphp php=php php$thisphp-php>getViewphp(php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$pathphp php=php php$thisphp-php>getViewScriptPathphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$viewphp,php php'addScriptPathphp'php)php)php php{
php php php php php php php php php php php php php php php php php$viewphp-php>addScriptPathphp(php$pathphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$viewphp-php>setScriptPathphp(php$pathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(nullphp php!php=php=php php(php$pathphp php=php php$thisphp-php>getViewBasePathphp(php)php)php)php php{
php php php php php php php php php php php php php$viewphp-php>addBasePathphp(php$pathphp,php php$thisphp-php>php_viewBasePrefixphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$viewphp-php>renderphp(php$namephp)php;
php php php php php}
php}
