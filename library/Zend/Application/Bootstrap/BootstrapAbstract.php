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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Bootstrap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php BootstrapAbstractphp.phpphp php2php3php2php7php8php php2php0php1php0php-php1php0php-php3php0php php1php2php:php5php0php:php2php1Zphp ramonphp php$
php php*php/

php/php*php*
php php*php Abstractphp basephp classphp forphp bootstrapphp classes
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Bootstrapphp_Bootstrapper
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Bootstrap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php implementsphp Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp,
php php php php php php php php php php php php php php php Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapper
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Applicationphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapper
php php php php php php*php/
php php php php protectedphp php$php_applicationphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Internalphp resourcephp methodsphp php(resourcephp/methodphp pairsphp)
php php php php php php*php/
php php php php protectedphp php$php_classResourcesphp;

php php php php php/php*php*
php php php php php php*php php@varphp objectphp Resourcephp container
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_environmentphp;

php php php php php/php*php*
php php php php php php*php Flattenedphp php(lowercasephp)php optionphp keysphp usedphp forphp lookups
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionKeysphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_pluginLoaderphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Classphp-basedphp resourcephp plugins
php php php php php php*php/
php php php php protectedphp php$php_pluginResourcesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Initializersphp thatphp havephp beenphp run
php php php php php php*php/
php php php php protectedphp php$php_runphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Initializersphp thatphp havephp beenphp startedphp butphp notphp yetphp completedphp php(circularphp dependencyphp detectionphp)
php php php php php php*php/
php php php php protectedphp php$php_startedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Setsphp applicationphp objectphp,php initializesphp optionsphp,php andphp preparesphp listphp of
php php php php php php*php initializerphp methodsphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Applicationphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp php$application
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Whenphp invalidphp applicationphp isphp provided
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$applicationphp)
php php php php php{
php php php php php php php php php$thisphp-php>setApplicationphp(php$applicationphp)php;
php php php php php php php php php$optionsphp php=php php$applicationphp-php>getOptionsphp(php)php;
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp classphp state
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$thisphp-php>mergeOptionsphp(php$thisphp-php>php_optionsphp,php php$optionsphp)php;

php php php php php php php php php$optionsphp php=php arrayphp_changephp_keyphp_casephp(php$optionsphp,php CASEphp_LOWERphp)php;
php php php php php php php php php$thisphp-php>php_optionKeysphp php=php arrayphp_mergephp(php$thisphp-php>php_optionKeysphp,php arrayphp_keysphp(php$optionsphp)php)php;

php php php php php php php php php$methodsphp php=php getphp_classphp_methodsphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$methodsphp asphp php$keyphp php=php>php php$methodphp)php php{
php php php php php php php php php php php php php$methodsphp[php$keyphp]php php=php strtolowerphp(php$methodphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'pluginpathsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$pluginLoaderphp php=php php$thisphp-php>getPluginLoaderphp(php)php;

php php php php php php php php php php php php foreachphp php(php$optionsphp[php'pluginpathsphp'php]php asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php php$pluginLoaderphp-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$optionsphp[php'pluginpathsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php strtolowerphp(php$keyphp)php;

php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$methodphp,php php$methodsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}php elseifphp php(php'resourcesphp'php php=php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$resourcephp php=php>php php$resourceOptionsphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>registerPluginResourcephp(php$resourcephp,php php$resourceOptionsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp optionsphp fromphp bootstrap
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp anphp optionphp presentphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasOptionphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp inphp_arrayphp(strtolowerphp(php$keyphp)php,php php$thisphp-php>php_optionKeysphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasOptionphp(php$keyphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php php$optionsphp php=php arrayphp_changephp_keyphp_casephp(php$optionsphp,php CASEphp_LOWERphp)php;
php php php php php php php php php php php php returnphp php$optionsphp[strtolowerphp(php$keyphp)php]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergephp optionsphp recursively
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$arrayphp1
php php php php php php*php php@paramphp php mixedphp php$arrayphp2
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp mergeOptionsphp(arrayphp php$arrayphp1php,php php$arrayphp2php php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$arrayphp2php)php)php php{
php php php php php php php php php php php php foreachphp php(php$arrayphp2php asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$arrayphp2php[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$arrayphp1php[php$keyphp]php php=php php(arrayphp_keyphp_existsphp(php$keyphp,php php$arrayphp1php)php php&php&php isphp_arrayphp(php$arrayphp1php[php$keyphp]php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$thisphp-php>mergeOptionsphp(php$arrayphp1php[php$keyphp]php,php php$arrayphp2php[php$keyphp]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php:php php$arrayphp2php[php$keyphp]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$arrayphp1php[php$keyphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp classphp resourcesphp php(asphp resourcephp/methodphp pairsphp)
php php php php php php*
php php php php php php*php Usesphp getphp_classphp_methodsphp(php)php byphp defaultphp,php reflectionphp onphp priorphp tophp php5php.php2php.php6php,
php php php php php php*php asphp aphp bugphp preventsphp thephp usagephp ofphp getphp_classphp_methodsphp(php)php therephp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getClassResourcesphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_classResourcesphp)php php{
php php php php php php php php php php php php ifphp php(versionphp_comparephp(PHPphp_VERSIONphp,php php'php5php.php2php.php6php'php)php php=php=php=php php-php1php)php php{
php php php php php php php php php php php php php php php php php$classphp php php php php php php php php=php newphp ReflectionObjectphp(php$thisphp)php;
php php php php php php php php php php php php php php php php php$classMethodsphp php=php php$classphp-php>getMethodsphp(php)php;
php php php php php php php php php php php php php php php php php$methodNamesphp php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$classMethodsphp asphp php$methodphp)php php{
php php php php php php php php php php php php php php php php php php php php php$methodNamesphp[php]php php=php php$methodphp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$methodNamesphp php=php getphp_classphp_methodsphp(php$thisphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_classResourcesphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$methodNamesphp asphp php$methodphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php5php <php strlenphp(php$methodphp)php php&php&php php'php_initphp'php php=php=php=php substrphp(php$methodphp,php php0php,php php5php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_classResourcesphp[strtolowerphp(substrphp(php$methodphp,php php5php)php)php]php php=php php$methodphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_classResourcesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp classphp resourcephp names
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getClassResourceNamesphp(php)
php php php php php{
php php php php php php php php php$resourcesphp php=php php$thisphp-php>getClassResourcesphp(php)php;
php php php php php php php php returnphp arrayphp_keysphp(php$resourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp aphp newphp resourcephp plugin
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Applicationphp_Resourcephp_Resourcephp php$resource
php php php php php php*php php@paramphp php mixedphp php php$options
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Whenphp invalidphp resourcephp isphp provided
php php php php php php*php/
php php php php publicphp functionphp registerPluginResourcephp(php$resourcephp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$resourcephp instanceofphp Zendphp_Applicationphp_Resourcephp_Resourcephp)php php{
php php php php php php php php php php php php php$resourcephp-php>setBootstrapphp(php$thisphp)php;
php php php php php php php php php php php php php$pluginNamephp php=php php$thisphp-php>php_resolvePluginResourceNamephp(php$resourcephp)php;
php php php php php php php php php php php php php$thisphp-php>php_pluginResourcesphp[php$pluginNamephp]php php=php php$resourcephp;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$resourcephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Invalidphp resourcephp providedphp tophp php'php php.php php_php_METHODphp_php_php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php php=php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unregisterphp aphp resourcephp fromphp thephp bootstrap
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Applicationphp_Resourcephp_Resourcephp php$resource
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Whenphp unknownphp resourcephp typephp isphp provided
php php php php php php*php/
php php php php publicphp functionphp unregisterPluginResourcephp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php$resourcephp instanceofphp Zendphp_Applicationphp_Resourcephp_Resourcephp)php php{
php php php php php php php php php php php php ifphp php(php$indexphp php=php arrayphp_searchphp(php$resourcephp,php php$thisphp-php>php_pluginResourcesphp,php truephp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pluginResourcesphp[php$indexphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$resourcephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Unknownphp resourcephp typephp providedphp tophp php'php php.php php_php_METHODphp_php_php)php;
php php php php php php php php php}

php php php php php php php php php$resourcephp php=php strtolowerphp(php$resourcephp)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$resourcephp,php php$thisphp-php>php_pluginResourcesphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp requestedphp pluginphp resourcephp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPluginResourcephp(php$resourcephp)
php php php php php{
php php php php php php php php returnphp php(nullphp php!php=php=php php$thisphp-php>getPluginResourcephp(php$resourcephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp registeredphp pluginphp resource
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resourceName
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*php/
php php php php publicphp functionphp getPluginResourcephp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(strtolowerphp(php$resourcephp)php,php php$thisphp-php>php_pluginResourcesphp)php)php php{
php php php php php php php php php php php php php$resourcephp php=php strtolowerphp(php$resourcephp)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php instanceofphp Zendphp_Applicationphp_Resourcephp_Resourcephp)php php{
php php php php php php php php php php php php php php php php php$resourceNamephp php=php php$thisphp-php>php_loadPluginResourcephp(php$resourcephp,php php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resourceNamephp)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(sprintfphp(php'Unablephp tophp resolvephp pluginphp php"php%sphp"php;php nophp correspondingphp pluginphp withphp thatphp namephp'php,php php$resourcephp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$resourcephp php=php php$resourceNamephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_pluginResourcesphp asphp php$pluginphp php=php>php php$specphp)php php{
php php php php php php php php php php php php ifphp php(php$specphp instanceofphp Zendphp_Applicationphp_Resourcephp_Resourcephp)php php{
php php php php php php php php php php php php php php php php php$pluginNamephp php=php php$thisphp-php>php_resolvePluginResourceNamephp(php$specphp)php;
php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php strcasecmpphp(php$resourcephp,php php$pluginNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pluginResourcesphp[php$pluginphp]php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pluginResourcesphp[php$pluginNamephp]php php=php php$specphp;
php php php php php php php php php php php php php php php php php php php php returnphp php$specphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php$pluginNamephp php=php php$thisphp-php>php_loadPluginResourcephp(php$pluginphp,php php$specphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php strcasecmpphp(php$resourcephp,php php$pluginNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_pluginResourcesphp[php$pluginNamephp]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(classphp_existsphp(php$pluginphp)php)php php{php php/php/php@SEEphp ZFphp-php7php5php5php0
php php php php php php php php php php php php php php php php php$specphp php=php php(arrayphp)php php$specphp;
php php php php php php php php php php php php php php php php php$specphp[php'bootstrapphp'php]php php=php php$thisphp;
php php php php php php php php php php php php php php php php php$instancephp php=php newphp php$pluginphp(php$specphp)php;
php php php php php php php php php php php php php php php php php$pluginNamephp php=php php$thisphp-php>php_resolvePluginResourceNamephp(php$instancephp)php;
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_pluginResourcesphp[php$pluginphp]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_pluginResourcesphp[php$pluginNamephp]php php=php php$instancephp;

php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php strcasecmpphp(php$resourcephp,php php$pluginNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$instancephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp pluginphp resources
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginResourcesphp(php)
php php php php php{
php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>php_pluginResourcesphp)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php$thisphp-php>getPluginResourcephp(php$resourcephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_pluginResourcesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp pluginphp resourcephp names
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginResourceNamesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getPluginResourcesphp(php)php;
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_pluginResourcesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pluginphp loaderphp forphp loadingphp resources
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loader
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php$loaderphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php php$loaderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp pluginphp loaderphp forphp resources
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_pluginLoaderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp_Applicationphp_Resourcephp'php php=php>php php'Zendphp/Applicationphp/Resourcephp'
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_pluginLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp applicationphp/parentphp bootstrap
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Applicationphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp php$application
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php/
php php php php publicphp functionphp setApplicationphp(php$applicationphp)
php php php php php{
php php php php php php php php ifphp php(php(php$applicationphp instanceofphp Zendphp_Applicationphp)
php php php php php php php php php php php php php|php|php php(php$applicationphp instanceofphp Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php ifphp php(php$applicationphp php=php=php=php php$thisphp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Cannotphp setphp applicationphp tophp samephp objectphp;php createsphp recursionphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_applicationphp php=php php$applicationphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Invalidphp applicationphp providedphp tophp bootstrapphp constructorphp php(receivedphp php"php'php php.php getphp_classphp(php$applicationphp)php php.php php'php"php instancephp)php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp parentphp applicationphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Applicationphp|Zendphp_Applicationphp_Bootstrapphp_Bootstrapper
php php php php php php*php/
php php php php publicphp functionphp getApplicationphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_applicationphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp applicationphp environment
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEnvironmentphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_environmentphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_environmentphp php=php php$thisphp-php>getApplicationphp(php)php-php>getEnvironmentphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_environmentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp resourcephp container
php php php php php php*
php php php php php php*php Byphp defaultphp,php ifphp aphp resourcephp callbackphp hasphp aphp nonphp-nullphp returnphp valuephp,php this
php php php php php php*php valuephp willphp bephp storedphp inphp aphp containerphp usingphp thephp resourcephp namephp asphp the
php php php php php php*php keyphp.
php php php php php php*
php php php php php php*php Containersphp mustphp bephp objectsphp,php andphp mustphp allowphp settingphp publicphp propertiesphp.
php php php php php php*
php php php php php php*php php@paramphp php objectphp php$container
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php/
php php php php publicphp functionphp setContainerphp(php$containerphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_objectphp(php$containerphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Resourcephp containersphp mustphp bephp objectsphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_containerphp php=php php$containerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp resourcephp container
php php php php php php*
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp functionphp getContainerphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_containerphp)php php{
php php php php php php php php php php php php php$thisphp-php>setContainerphp(newphp Zendphp_Registryphp(php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp aphp resourcephp hasphp beenphp storedphp inphp thephp container
php php php php php php*
php php php php php php*php Duringphp bootstrapphp resourcephp initializationphp,php youphp mayphp returnphp aphp valuephp.php If
php php php php php php*php youphp dophp,php itphp willphp bephp storedphp inphp thephp php{php@linkphp setContainerphp(php)php containerphp}php.
php php php php php php*php Youphp canphp usephp thisphp methodphp tophp determinephp ifphp aphp valuephp wasphp storedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasResourcephp(php$namephp)
php php php php php{
php php php php php php php php php$resourcephp php php=php strtolowerphp(php$namephp)php;
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php returnphp issetphp(php$containerphp-php>php{php$resourcephp}php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp resourcephp fromphp thephp container
php php php php php php*
php php php php php php*php Duringphp bootstrapphp resourcephp initializationphp,php youphp mayphp returnphp aphp valuephp.php If
php php php php php php*php youphp dophp,php itphp willphp bephp storedphp inphp thephp php{php@linkphp setContainerphp(php)php containerphp}php.
php php php php php php*php Youphp canphp usephp thisphp methodphp tophp retrievephp thatphp valuephp.
php php php php php php*
php php php php php php*php Ifphp nophp valuephp wasphp returnedphp,php thisphp willphp returnphp aphp nullphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp nullphp|mixed
php php php php php php*php/
php php php php publicphp functionphp getResourcephp(php$namephp)
php php php php php{
php php php php php php php php php$resourcephp php php=php strtolowerphp(php$namephp)php;
php php php php php php php php php$containerphp php=php php$thisphp-php>getContainerphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>hasResourcephp(php$resourcephp)php)php php{
php php php php php php php php php php php php returnphp php$containerphp-php>php{php$resourcephp}php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp PHPphp'sphp magicphp tophp retrievephp aphp ressource
php php php php php php*php inphp thephp bootstrap
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prop
php php php php php php*php php@returnphp nullphp|mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getResourcephp(php$propphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp PHPphp'sphp magicphp tophp askphp forphp the
php php php php php php*php existencephp ofphp aphp ressourcephp inphp thephp bootstrap
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prop
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$propphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>hasResourcephp(php$propphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bootstrapphp individualphp,php allphp,php orphp multiplephp resources
php php php php php php*
php php php php php php*php Markedphp asphp finalphp tophp preventphp issuesphp whenphp subclassingphp andphp namingphp the
php php php php php php*php childphp classphp php'Bootstrapphp'php php(inphp whichphp casephp,php overridingphp thisphp method
php php php php php php*php wouldphp resultphp inphp itphp beingphp treatedphp asphp aphp constructorphp)php.
php php php php php php*
php php php php php php*php Ifphp youphp needphp tophp overridephp thisphp functionalityphp,php overridephp the
php php php php php php*php php{php@linkphp php_bootstrapphp(php)php}php methodphp.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$resource
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Whenphp invalidphp argumentphp wasphp passed
php php php php php php*php/
php php php php finalphp publicphp functionphp bootstrapphp(php$resourcephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bootstrapphp(php$resourcephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php interceptphp callsphp tophp bootstrapphp<resourcenamephp>php(php)php methods
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php php$args
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Onphp invalidphp methodphp name
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php9php <php strlenphp(php$methodphp)php php&php&php php'bootstrapphp'php php=php=php=php substrphp(php$methodphp,php php0php,php php9php)php)php php{
php php php php php php php php php php php php php$resourcephp php=php substrphp(php$methodphp,php php9php)php;
php php php php php php php php php php php php returnphp php$thisphp-php>bootstrapphp(php$resourcephp)php;
php php php php php php php php php}

php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Invalidphp methodphp php"php'php php.php php$methodphp php.php php'php"php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bootstrapphp implementation
php php php php php php*
php php php php php php*php Thisphp methodphp mayphp bephp overriddenphp tophp providephp customphp bootstrappingphp logicphp.
php php php php php php*php Itphp isphp thephp solephp methodphp calledphp byphp php{php@linkphp bootstrapphp(php)php}php.
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$resource
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Whenphp invalidphp argumentphp wasphp passed
php php php php php php*php/
php php php php protectedphp functionphp php_bootstrapphp(php$resourcephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$resourcephp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>getClassResourceNamesphp(php)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_executeResourcephp(php$resourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$thisphp-php>getPluginResourceNamesphp(php)php asphp php$resourcephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_executeResourcephp(php$resourcephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$resourcephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_executeResourcephp(php$resourcephp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$resourcephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$resourcephp asphp php$rphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_executeResourcephp(php$rphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Invalidphp argumentphp passedphp tophp php'php php.php php_php_METHODphp_php_php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp aphp resource
php php php php php php*
php php php php php php*php Checksphp tophp seephp ifphp thephp resourcephp hasphp alreadyphp beenphp runphp.php Ifphp notphp,php itphp searches
php php php php php php*php firstphp tophp seephp ifphp aphp localphp methodphp matchesphp thephp resourcephp,php andphp executesphp thatphp.
php php php php php php*php Ifphp notphp,php itphp checksphp tophp seephp ifphp aphp pluginphp resourcephp matchesphp,php andphp executesphp that
php php php php php php*php ifphp foundphp.
php php php php php php*
php php php php php php*php Finallyphp,php ifphp notphp foundphp,php itphp throwsphp anphp exceptionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp Whenphp resourcephp notphp found
php php php php php php*php/
php php php php protectedphp functionphp php_executeResourcephp(php$resourcephp)
php php php php php{
php php php php php php php php php$resourceNamephp php=php strtolowerphp(php$resourcephp)php;

php php php php php php php php ifphp php(inphp_arrayphp(php$resourceNamephp,php php$thisphp-php>php_runphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_startedphp[php$resourceNamephp]php)php php&php&php php$thisphp-php>php_startedphp[php$resourceNamephp]php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Circularphp resourcephp dependencyphp detectedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$classResourcesphp php=php php$thisphp-php>getClassResourcesphp(php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$resourceNamephp,php php$classResourcesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_startedphp[php$resourceNamephp]php php=php truephp;
php php php php php php php php php php php php php$methodphp php=php php$classResourcesphp[php$resourceNamephp]php;
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php$methodphp(php)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_startedphp[php$resourceNamephp]php)php;
php php php php php php php php php php php php php$thisphp-php>php_markRunphp(php$resourceNamephp)php;

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$returnphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>getContainerphp(php)php-php>php{php$resourceNamephp}php php=php php$returnphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>hasPluginResourcephp(php$resourcephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_startedphp[php$resourceNamephp]php php=php truephp;
php php php php php php php php php php php php php$pluginphp php=php php$thisphp-php>getPluginResourcephp(php$resourcephp)php;
php php php php php php php php php php php php php$returnphp php=php php$pluginphp-php>initphp(php)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_startedphp[php$resourceNamephp]php)php;
php php php php php php php php php php php php php$thisphp-php>php_markRunphp(php$resourceNamephp)php;

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$returnphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>getContainerphp(php)php-php>php{php$resourceNamephp}php php=php php$returnphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php throwphp newphp Zendphp_Applicationphp_Bootstrapphp_Exceptionphp(php'Resourcephp matchingphp php"php'php php.php php$resourcephp php.php php'php"php notphp foundphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp aphp pluginphp resource
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@paramphp php arrayphp|objectphp|nullphp php$options
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php protectedphp functionphp php_loadPluginResourcephp(php$resourcephp,php php$optionsphp)
php php php php php{
php php php php php php php php php$optionsphp php php php=php php(arrayphp)php php$optionsphp;
php php php php php php php php php$optionsphp[php'bootstrapphp'php]php php=php php$thisphp;
php php php php php php php php php$classNamephp php=php php$thisphp-php>getPluginLoaderphp(php)php-php>loadphp(strtolowerphp(php$resourcephp)php,php falsephp)php;

php php php php php php php php ifphp php(php!php$classNamephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$instancephp php=php newphp php$classNamephp(php$optionsphp)php;

php php php php php php php php unsetphp(php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php)php;

php php php php php php php php ifphp php(issetphp(php$instancephp-php>php_explicitTypephp)php)php php{
php php php php php php php php php php php php php$resourcephp php=php php$instancephp-php>php_explicitTypephp;
php php php php php php php php php}
php php php php php php php php php$resourcephp php=php strtolowerphp(php$resourcephp)php;
php php php php php php php php php$thisphp-php>php_pluginResourcesphp[php$resourcephp]php php=php php$instancephp;

php php php php php php php php returnphp php$resourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Markphp aphp resourcephp asphp havingphp run
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_markRunphp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$resourcephp,php php$thisphp-php>php_runphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_runphp[php]php php=php php$resourcephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvephp aphp pluginphp resourcephp name
php php php php php php*
php php php php php php*php Usesphp,php inphp orderphp ofphp preference
php php php php php php*php php-php php$php_explicitTypephp propertyphp ofphp resource
php php php php php php*php php-php Shortphp namephp ofphp resourcephp php(ifphp aphp matchingphp prefixphp pathphp isphp foundphp)
php php php php php php*php php-php classphp namephp php(ifphp nonephp ofphp thephp abovephp arephp truephp)
php php php php php php*
php php php php php php*php Thephp namephp isphp thenphp castphp tophp lowercasephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Applicationphp_Resourcephp_Resourcephp php$resource
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_resolvePluginResourceNamephp(php$resourcephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$resourcephp-php>php_explicitTypephp)php)php php{
php php php php php php php php php php php php php$pluginNamephp php=php php$resourcephp-php>php_explicitTypephp;
php php php php php php php php php}php elsephp php php{
php php php php php php php php php php php php php$classNamephp php php=php getphp_classphp(php$resourcephp)php;
php php php php php php php php php php php php php$pluginNamephp php=php php$classNamephp;
php php php php php php php php php php php php php$loaderphp php php php php php=php php$thisphp-php>getPluginLoaderphp(php)php;
php php php php php php php php php php php php foreachphp php(php$loaderphp-php>getPathsphp(php)php asphp php$prefixphp php=php>php php$pathsphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$classNamephp,php php$prefixphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$pluginNamephp php=php substrphp(php$classNamephp,php strlenphp(php$prefixphp)php)php;
php php php php php php php php php php php php php php php php php php php php php$pluginNamephp php=php trimphp(php$pluginNamephp,php php'php_php'php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$pluginNamephp php=php strtolowerphp(php$pluginNamephp)php;
php php php php php php php php returnphp php$pluginNamephp;
php php php php php}
php}
