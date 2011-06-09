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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Applicationphp.phpphp php2php3php1php6php3php php2php0php1php0php-php1php0php-php1php9php php1php6php:php3php0php:php2php6Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Application
php{
php php php php php/php*php*
php php php php php php*php Autoloaderphp tophp use
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php protectedphp php$php_autoloaderphp;

php php php php php/php*php*
php php php php php php*php Bootstrap
php php php php php php*
php php php php php php*php php@varphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php/
php php php php protectedphp php$php_bootstrapphp;

php php php php php/php*php*
php php php php php php*php Applicationphp environment
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_environmentphp;

php php php php php/php*php*
php php php php php php*php Flattenedphp php(lowercasephp)php optionphp keys
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionKeysphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Optionsphp forphp Zendphp_Application
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Initializephp applicationphp.php Potentiallyphp initializesphp includephp_pathsphp,php PHP
php php php php php php*php settingsphp,php andphp bootstrapphp classphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php$environment
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$optionsphp Stringphp pathphp tophp configurationphp filephp,php orphp arrayphp/Zendphp_Configphp ofphp configurationphp options
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Exceptionphp Whenphp invalidphp optionsphp arephp provided
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$environmentphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_environmentphp php=php php(stringphp)php php$environmentphp;

php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/Autoloaderphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_autoloaderphp php=php Zendphp_Loaderphp_Autoloaderphp:php:getInstancephp(php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>php_loadConfigphp(php$optionsphp)php;
php php php php php php php php php php php php php}php elseifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Invalidphp optionsphp providedphp;php mustphp bephp locationphp ofphp configphp filephp,php aphp configphp objectphp,php orphp anphp arrayphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp environment
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEnvironmentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_environmentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp autoloaderphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp getAutoloaderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_autoloaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp applicationphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Exceptionphp Whenphp nophp bootstrapphp pathphp isphp provided
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Exceptionphp Whenphp invalidphp bootstrapphp informationphp arephp provided
php php php php php php*php php@returnphp Zendphp_Application
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'configphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp[php'configphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$php_optionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$optionsphp[php'configphp'php]php asphp php$tmpphp)php php{
php php php php php php php php php php php php php php php php php php php php php$php_optionsphp php=php php$thisphp-php>mergeOptionsphp(php$php_optionsphp,php php$thisphp-php>php_loadConfigphp(php$tmpphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>mergeOptionsphp(php$php_optionsphp,php php$optionsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>mergeOptionsphp(php$thisphp-php>php_loadConfigphp(php$optionsphp[php'configphp'php]php)php,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;

php php php php php php php php php$optionsphp php=php arrayphp_changephp_keyphp_casephp(php$optionsphp,php CASEphp_LOWERphp)php;

php php php php php php php php php$thisphp-php>php_optionKeysphp php=php arrayphp_keysphp(php$optionsphp)php;

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'phpsettingsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setPhpSettingsphp(php$optionsphp[php'phpsettingsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'includepathsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setIncludePathsphp(php$optionsphp[php'includepathsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'autoloadernamespacesphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setAutoloaderNamespacesphp(php$optionsphp[php'autoloadernamespacesphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'autoloaderzfpathphp'php]php)php)php php{
php php php php php php php php php php php php php$autoloaderphp php=php php$thisphp-php>getAutoloaderphp(php)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$autoloaderphp,php php'setZfPathphp'php)php)php php{
php php php php php php php php php php php php php php php php php$zfPathphp php php php php=php php$optionsphp[php'autoloaderzfpathphp'php]php;
php php php php php php php php php php php php php php php php php$zfVersionphp php=php php!emptyphp(php$optionsphp[php'autoloaderzfversionphp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$optionsphp[php'autoloaderzfversionphp'php]
php php php php php php php php php php php php php php php php php php php php php php php php php php php php:php php'latestphp'php;
php php php php php php php php php php php php php php php php php$autoloaderphp-php>setZfPathphp(php$zfPathphp,php php$zfVersionphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'bootstrapphp'php]php)php)php php{
php php php php php php php php php php php php php$bootstrapphp php=php php$optionsphp[php'bootstrapphp'php]php;

php php php php php php php php php php php php ifphp php(isphp_stringphp(php$bootstrapphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setBootstrapphp(php$bootstrapphp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$bootstrapphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$bootstrapphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Nophp bootstrapphp pathphp providedphp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$pathphp php php=php php$bootstrapphp[php'pathphp'php]php;
php php php php php php php php php php php php php php php php php$classphp php=php nullphp;

php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$bootstrapphp[php'classphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$classphp php=php php$bootstrapphp[php'classphp'php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>setBootstrapphp(php$pathphp,php php$classphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Invalidphp bootstrapphp informationphp providedphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp applicationphp optionsphp php(forphp cachingphp)
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
php php php php php php*php Setphp PHPphp configurationphp settings
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$settings
php php php php php php*php php@paramphp php stringphp php$prefixphp Keyphp prefixphp tophp prependphp tophp arrayphp valuesphp php(usedphp tophp mapphp php.php separatedphp INIphp valuesphp)
php php php php php php*php php@returnphp Zendphp_Application
php php php php php php*php/
php php php php publicphp functionphp setPhpSettingsphp(arrayphp php$settingsphp,php php$prefixphp php=php php'php'php)
php php php php php{
php php php php php php php php foreachphp php(php$settingsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$keyphp php=php emptyphp(php$prefixphp)php php?php php$keyphp php:php php$prefixphp php.php php$keyphp;
php php php php php php php php php php php php ifphp php(isphp_scalarphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php iniphp_setphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setPhpSettingsphp(php$valuephp,php php$keyphp php.php php'php.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp includephp path
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$paths
php php php php php php*php php@returnphp Zendphp_Application
php php php php php php*php/
php php php php publicphp functionphp setIncludePathsphp(arrayphp php$pathsphp)
php php php php php{
php php php php php php php php php$pathphp php=php implodephp(PATHphp_SEPARATORphp,php php$pathsphp)php;
php php php php php php php php setphp_includephp_pathphp(php$pathphp php.php PATHphp_SEPARATORphp php.php getphp_includephp_pathphp(php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp autoloaderphp namespaces
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$namespaces
php php php php php php*php php@returnphp Zendphp_Application
php php php php php php*php/
php php php php publicphp functionphp setAutoloaderNamespacesphp(arrayphp php$namespacesphp)
php php php php php{
php php php php php php php php php$autoloaderphp php=php php$thisphp-php>getAutoloaderphp(php)php;

php php php php php php php php foreachphp php(php$namespacesphp asphp php$namespacephp)php php{
php php php php php php php php php php php php php$autoloaderphp-php>registerNamespacephp(php$namespacephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp bootstrapphp pathphp/class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Application
php php php php php php*php/
php php php php publicphp functionphp setBootstrapphp(php$pathphp,php php$classphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php setOptionsphp(php)php canphp potentiallyphp sendphp aphp nullphp valuephp;php specifyphp default
php php php php php php php php php/php/php here
php php php php php php php php ifphp php(nullphp php=php=php=php php$classphp)php php{
php php php php php php php php php php php php php$classphp php=php php'Bootstrapphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp,php falsephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php$pathphp;
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Bootstrapphp classphp notphp foundphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_bootstrapphp php=php newphp php$classphp(php$thisphp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_bootstrapphp instanceofphp Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Bootstrapphp classphp doesphp notphp implementphp Zendphp_Applicationphp_Bootstrapphp_Bootstrapperphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp bootstrapphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Applicationphp_Bootstrapphp_BootstrapAbstract
php php php php php php*php/
php php php php publicphp functionphp getBootstrapphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_bootstrapphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_bootstrapphp php=php newphp Zendphp_Applicationphp_Bootstrapphp_Bootstrapphp(php$thisphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_bootstrapphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Bootstrapphp application
php php php php php php*
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$resource
php php php php php php*php php@returnphp Zendphp_Application
php php php php php php*php/
php php php php publicphp functionphp bootstrapphp(php$resourcephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>getBootstrapphp(php)php-php>bootstrapphp(php$resourcephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Runphp thephp application
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp runphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getBootstrapphp(php)php-php>runphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp configurationphp filephp ofphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Exceptionphp Whenphp invalidphp configurationphp filephp isphp provided
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadConfigphp(php$filephp)
php php php php php{
php php php php php php php php php$environmentphp php=php php$thisphp-php>getEnvironmentphp(php)php;
php php php php php php php php php$suffixphp php php php php php php=php strtolowerphp(pathinfophp(php$filephp,php PATHINFOphp_EXTENSIONphp)php)php;

php php php php php php php php switchphp php(php$suffixphp)php php{
php php php php php php php php php php php php casephp php'iniphp'php:
php php php php php php php php php php php php php php php php php$configphp php=php newphp Zendphp_Configphp_Iniphp(php$filephp,php php$environmentphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'xmlphp'php:
php php php php php php php php php php php php php php php php php$configphp php=php newphp Zendphp_Configphp_Xmlphp(php$filephp,php php$environmentphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'jsonphp'php:
php php php php php php php php php php php php php php php php php$configphp php=php newphp Zendphp_Configphp_Jsonphp(php$filephp,php php$environmentphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'yamlphp'php:
php php php php php php php php php php php php php php php php php$configphp php=php newphp Zendphp_Configphp_Yamlphp(php$filephp,php php$environmentphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'phpphp'php:
php php php php php php php php php php php php casephp php'incphp'php:
php php php php php php php php php php php php php php php php php$configphp php=php includephp php$filephp;
php php php php php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Invalidphp configurationphp filephp providedphp;php PHPphp filephp doesphp notphp returnphp arrayphp valuephp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$configphp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Exceptionphp(php'Invalidphp configurationphp filephp providedphp;php unknownphp configphp typephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$configphp-php>toArrayphp(php)php;
php php php php php}
php}
