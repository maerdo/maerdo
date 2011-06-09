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
php php*php php@packagephp php php php Zendphp_Loader
php php*php php@subpackagephp Autoloader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Resourcephp.phpphp php2php3php5php6php8php php2php0php1php0php-php1php2php-php2php0php php0php8php:php1php3php:php2php0Zphp mjhphp_caphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Loaderphp_Autoloaderphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Loaderphp/Autoloaderphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Resourcephp loader
php php*
php php*php php@usesphp php php php php php php Zendphp_Loaderphp_Autoloaderphp_Interface
php php*php php@packagephp php php php Zendphp_Loader
php php*php php@subpackagephp Autoloader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Loaderphp_Autoloaderphp_Resourcephp implementsphp Zendphp_Loaderphp_Autoloaderphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Basephp pathphp tophp resourcephp classes
php php php php php php*php/
php php php php protectedphp php$php_basePathphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Componentsphp handledphp withinphp thisphp resource
php php php php php php*php/
php php php php protectedphp php$php_componentsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Defaultphp resourcephp/componentphp tophp usephp whenphp usingphp objectphp registry
php php php php php php*php/
php php php php protectedphp php$php_defaultResourceTypephp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Namespacephp ofphp classesphp withinphp thisphp resource
php php php php php php*php/
php php php php protectedphp php$php_namespacephp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Availablephp resourcephp typesphp handledphp byphp thisphp resourcephp autoloader
php php php php php php*php/
php php php php protectedphp php$php_resourceTypesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Configurationphp optionsphp forphp resourcephp autoloader
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Optionsphp mustphp bephp passedphp tophp resourcephp loaderphp constructorphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;

php php php php php php php php php$namespacephp php=php php$thisphp-php>getNamespacephp(php)php;
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$namespacephp)
php php php php php php php php php php php php php|php|php php(nullphp php=php=php=php php$thisphp-php>getBasePathphp(php)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Resourcephp loaderphp requiresphp bothphp aphp namespacephp andphp aphp basephp pathphp forphp initializationphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php.php=php php'php_php'php;
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Autoloaderphp.phpphp'php;
php php php php php php php php Zendphp_Loaderphp_Autoloaderphp:php:getInstancephp(php)php-php>unshiftAutoloaderphp(php$thisphp,php php$namespacephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloadingphp:php methods
php php php php php php*
php php php php php php*php Allowphp retrievingphp concretephp resourcephp objectphp instancesphp usingphp php'getphp<Resourcenamephp>php(php)php'
php php php php php php*php syntaxphp.php Examplephp:
php php php php php php*php php<codephp>
php php php php php php*php php$loaderphp php=php newphp Zendphp_Loaderphp_Autoloaderphp_Resourcephp(arrayphp(
php php php php php php*php php php php php php'namespacephp'php php=php>php php'Stuffphp_php'php,
php php php php php php*php php php php php php'basePathphp'php php php=php>php php'php/pathphp/tophp/somephp/stuffphp'php,
php php php php php php*php php)php)
php php php php php php*php php$loaderphp-php>addResourceTypephp(php'Modelphp'php,php php'modelsphp'php,php php'Modelphp'php)php;
php php php php php php*
php php php php php php*php php$foophp php=php php$loaderphp-php>getModelphp(php'Foophp'php)php;php php/php/php getphp instancephp ofphp Stuffphp_Modelphp_Foophp class
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Loaderphp_Exceptionphp ifphp methodphp notphp beginningphp withphp php'getphp'php orphp notphp matchingphp aphp validphp resourcephp typephp isphp called
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php'getphp'php php=php=php substrphp(php$methodphp,php php0php,php php3php)php)php php{
php php php php php php php php php php php php php$typephp php php=php strtolowerphp(substrphp(php$methodphp,php php3php)php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>hasResourceTypephp(php$typephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php"Invalidphp resourcephp typephp php$typephp;php cannotphp loadphp resourcephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php"Cannotphp loadphp resourcesphp;php nophp resourcephp specifiedphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$resourcephp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php returnphp php$thisphp-php>loadphp(php$resourcephp,php php$typephp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php"Methodphp php'php$methodphp'php isphp notphp supportedphp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Helperphp methodphp tophp calculatephp thephp correctphp classphp path
php php php php php php*
php php php php php php*php php@paramphp stringphp php$class
php php php php php php*php php@returnphp Falsephp ifphp notphp matchedphp otherphp wisephp thephp correctphp path
php php php php php php*php/
php php php php publicphp functionphp getClassPathphp(php$classphp)
php php php php php{
php php php php php php php php php$segmentsphp php php php php php php php php php php=php explodephp(php'php_php'php,php php$classphp)php;
php php php php php php php php php$namespaceTopLevelphp php=php php$thisphp-php>getNamespacephp(php)php;
php php php php php php php php php$namespacephp php php php php php php php php php=php php'php'php;

php php php php php php php php ifphp php(php!emptyphp(php$namespaceTopLevelphp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php arrayphp_shiftphp(php$segmentsphp)php;
php php php php php php php php php php php php ifphp php(php$namespacephp php!php=php php$namespaceTopLevelphp)php php{
php php php php php php php php php php php php php php php php php/php/php wrongphp prefixphp?php wephp'rephp done
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$segmentsphp)php <php php2php)php php{
php php php php php php php php php php php php php/php/php assumesphp allphp resourcesphp havephp aphp componentphp andphp classphp namephp,php minimum
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$finalphp php php php php php=php arrayphp_popphp(php$segmentsphp)php;
php php php php php php php php php$componentphp php=php php$namespacephp;
php php php php php php php php php$lastMatchphp php=php falsephp;
php php php php php php php php dophp php{
php php php php php php php php php php php php php$segmentphp php php php php=php arrayphp_shiftphp(php$segmentsphp)php;
php php php php php php php php php php php php php$componentphp php.php=php emptyphp(php$componentphp)php php?php php$segmentphp php:php php'php_php'php php.php php$segmentphp;
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_componentsphp[php$componentphp]php)php)php php{
php php php php php php php php php php php php php php php php php$lastMatchphp php=php php$componentphp;
php php php php php php php php php php php php php}
php php php php php php php php php}php whilephp php(countphp(php$segmentsphp)php)php;

php php php php php php php php ifphp php(php!php$lastMatchphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$finalphp php=php substrphp(php$classphp,php strlenphp(php$lastMatchphp)php php+php php1php)php;
php php php php php php php php php$pathphp php=php php$thisphp-php>php_componentsphp[php$lastMatchphp]php;
php php php php php php php php php$classPathphp php=php php$pathphp php.php php'php/php'php php.php strphp_replacephp(php'php_php'php,php php'php/php'php,php php$finalphp)php php.php php'php.phpphp'php;

php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php$classPathphp)php)php php{
php php php php php php php php php php php php returnphp php$classPathphp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp autoloadphp aphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp mixedphp Falsephp ifphp notphp matchedphp,php otherwisephp resultphp ifphp includephp operation
php php php php php php*php/
php php php php publicphp functionphp autoloadphp(php$classphp)
php php php php php{
php php php php php php php php php$classPathphp php=php php$thisphp-php>getClassPathphp(php$classphp)php;
php php php php php php php php ifphp php(falsephp php!php=php=php php$classPathphp)php php{
php php php php php php php php php php php php returnphp includephp php$classPathphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp classphp statephp fromphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php/php/php Setphp namespacephp firstphp,php seephp ZFphp-php1php0php8php3php6
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'namespacephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setNamespacephp(php$optionsphp[php'namespacephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'namespacephp'php]php)php;
php php php php php php php php php}

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
php php php php php php*php Setphp namespacephp thatphp thisphp autoloaderphp handles
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namespace
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp setNamespacephp(php$namespacephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namespacephp php=php rtrimphp(php(stringphp)php php$namespacephp,php php'php_php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp namespacephp thisphp autoloaderphp handles
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp basephp pathphp forphp thisphp setphp ofphp resources
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp setBasePathphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_basePathphp php=php php(stringphp)php php$pathphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp basephp pathphp tophp thisphp setphp ofphp resources
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBasePathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_basePathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp resourcephp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp identifierphp forphp thephp resourcephp typephp beingphp loaded
php php php php php php*php php@paramphp php stringphp php$pathphp pathphp relativephp tophp resourcephp basephp pathphp containingphp thephp resourcephp types
php php php php php php*php php@paramphp php nullphp|stringphp php$namespacephp subphp-componentphp namespacephp tophp appendphp tophp basephp namespacephp thatphp qualifiesphp thisphp resourcephp type
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp addResourceTypephp(php$typephp,php php$pathphp,php php$namespacephp php=php nullphp)
php php php php php{
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_resourceTypesphp[php$typephp]php)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$namespacephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Initialphp definitionphp ofphp aphp resourcephp typephp mustphp includephp aphp namespacephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$namespaceTopLevelphp php=php php$thisphp-php>getNamespacephp(php)php;
php php php php php php php php php php php php php$namespacephp php=php ucfirstphp(trimphp(php$namespacephp,php php'php_php'php)php)php;
php php php php php php php php php php php php php$thisphp-php>php_resourceTypesphp[php$typephp]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'namespacephp'php php=php>php emptyphp(php$namespaceTopLevelphp)php php?php php$namespacephp php:php php$namespaceTopLevelphp php.php php'php_php'php php.php php$namespacephp,
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_stringphp(php$pathphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp pathphp specificationphp providedphp;php mustphp bephp stringphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_resourceTypesphp[php$typephp]php[php'pathphp'php]php php=php php$thisphp-php>getBasePathphp(php)php php.php php'php/php'php php.php rtrimphp(php$pathphp,php php'php\php/php'php)php;

php php php php php php php php php$componentphp php=php php$thisphp-php>php_resourceTypesphp[php$typephp]php[php'namespacephp'php]php;
php php php php php php php php php$thisphp-php>php_componentsphp[php$componentphp]php php=php php$thisphp-php>php_resourceTypesphp[php$typephp]php[php'pathphp'php]php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp resourcesphp atphp once
php php php php php php*
php php php php php php*php php$typesphp shouldphp bephp anphp associativephp arrayphp ofphp resourcephp typephp php=php>php specification
php php php php php php*php pairsphp.php Eachphp specificationphp shouldphp bephp anphp associativephp arrayphp containing
php php php php php php*php minimallyphp thephp php'pathphp'php keyphp php(specifyingphp thephp pathphp relativephp tophp thephp resource
php php php php php php*php basephp pathphp)php andphp optionallyphp thephp php'namespacephp'php keyphp php(indicatingphp thephp subcomponent
php php php php php php*php namespacephp tophp appendphp tophp thephp resourcephp namespacephp)php.
php php php php php php*
php php php php php php*php Asphp anphp examplephp:
php php php php php php*php php<codephp>
php php php php php php*php php$loaderphp-php>addResourceTypesphp(arrayphp(
php php php php php php*php php php php php php'modelphp'php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php'pathphp'php php php php php php php=php>php php'modelsphp'php,
php php php php php php*php php php php php php php php php php'namespacephp'php php=php>php php'Modelphp'php,
php php php php php php*php php php php php php)php,
php php php php php php*php php php php php php'formphp'php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php'pathphp'php php php php php php php=php>php php'formsphp'php,
php php php php php php*php php php php php php php php php php'namespacephp'php php=php>php php'Formphp'php,
php php php php php php*php php php php php php)php,
php php php php php php*php php)php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$types
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp addResourceTypesphp(arrayphp php$typesphp)
php php php php php{
php php php php php php php php foreachphp php(php$typesphp asphp php$typephp php=php>php php$specphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'addResourceTypesphp(php)php expectsphp anphp arrayphp ofphp arraysphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!issetphp(php$specphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'addResourceTypesphp(php)php expectsphp eachphp arrayphp tophp includephp aphp pathsphp elementphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$pathsphp php php=php php$specphp[php'pathphp'php]php;
php php php php php php php php php php php php php$namespacephp php=php nullphp;
php php php php php php php php php php php php ifphp php(issetphp(php$specphp[php'namespacephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$namespacephp php=php php$specphp[php'namespacephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>addResourceTypephp(php$typephp,php php$pathsphp,php php$namespacephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp existingphp andphp setphp multiplephp resourcephp typesphp atphp once
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Loaderphp_Autoloaderphp_Resourcephp:php:addResourceTypesphp(php)
php php php php php php*php php@paramphp php arrayphp php$types
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp setResourceTypesphp(arrayphp php$typesphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearResourceTypesphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addResourceTypesphp(php$typesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp resourcephp typephp mappings
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getResourceTypesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_resourceTypesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thephp requestedphp resourcephp typephp definedphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasResourceTypephp(php$typephp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_resourceTypesphp[php$typephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp thephp requestedphp resourcephp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp removeResourceTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasResourceTypephp(php$typephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php php$thisphp-php>php_resourceTypesphp[php$typephp]php[php'namespacephp'php]php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_componentsphp[php$namespacephp]php)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_resourceTypesphp[php$typephp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp resourcephp types
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp clearResourceTypesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_resourceTypesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_componentsphp php php php php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp resourcephp typephp tophp usephp whenphp callingphp loadphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloaderphp_Resource
php php php php php php*php/
php php php php publicphp functionphp setDefaultResourceTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasResourceTypephp(php$typephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultResourceTypephp php=php php$typephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp defaultphp resourcephp typephp tophp usephp whenphp callingphp loadphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDefaultResourceTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultResourceTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp registryphp andphp factory
php php php php php php*
php php php php php php*php Loadsphp thephp requestedphp resourcephp ofphp typephp php$typephp php(orphp usesphp thephp defaultphp resource
php php php php php php*php typephp ifphp nonephp providedphp)php.php Ifphp thephp resourcephp hasphp beenphp loadedphp previouslyphp,
php php php php php php*php returnsphp thephp previousphp instancephp;php otherwisephp,php instantiatesphp itphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp object
php php php php php php*php php@throwsphp Zendphp_Loaderphp_Exceptionphp ifphp resourcephp typephp notphp specifiedphp orphp invalid
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$resourcephp,php php$typephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$typephp)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>getDefaultResourceTypephp(php)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$typephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Nophp resourcephp typephp specifiedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>hasResourceTypephp(php$typephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp resourcephp typephp specifiedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$namespacephp php=php php$thisphp-php>php_resourceTypesphp[php$typephp]php[php'namespacephp'php]php;
php php php php php php php php php$classphp php php php php php=php php$namespacephp php.php php'php_php'php php.php ucfirstphp(php$resourcephp)php;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_resourcesphp[php$classphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_resourcesphp[php$classphp]php php=php newphp php$classphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_resourcesphp[php$classphp]php;
php php php php php}
php}
