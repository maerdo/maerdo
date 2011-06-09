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
php php*php php@packagephp php php php Zendphp_View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php2php4php4php6php php2php0php1php0php-php0php6php-php1php8php php1php2php:php1php1php:php4php3Zphp matthewphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Loaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Loaderphp_PluginLoaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Viewphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Abstractphp classphp forphp Zendphp_Viewphp tophp helpphp enforcephp privatephp constructsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Viewphp_Abstractphp implementsphp Zendphp_Viewphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Pathphp stackphp forphp scriptphp,php helperphp,php andphp filterphp directoriesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_pathphp php=php arrayphp(
php php php php php php php php php'scriptphp'php php=php>php arrayphp(php)php,
php php php php php php php php php'helperphp'php php=php>php arrayphp(php)php,
php php php php php php php php php'filterphp'php php=php>php arrayphp(php)php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Scriptphp filephp namephp tophp execute
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_filephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Instancesphp ofphp helperphp objectsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_helperphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Mapphp ofphp helperphp php=php>php classphp pairsphp tophp helpphp inphp determiningphp helperphp classphp from
php php php php php php*php name
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_helperLoadedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Mapphp ofphp helperphp php=php>php classfilephp pairsphp tophp aidphp inphp determiningphp helperphp classfile
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_helperLoadedDirphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Stackphp ofphp Zendphp_Viewphp_Filterphp namesphp tophp applyphp asphp filtersphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_filterphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Stackphp ofphp Zendphp_Viewphp_Filterphp objectsphp thatphp havephp beenphp loaded
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_filterClassphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Mapphp ofphp filterphp php=php>php classphp pairsphp tophp helpphp inphp determiningphp filterphp classphp from
php php php php php php*php name
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_filterLoadedphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Mapphp ofphp filterphp php=php>php classfilephp pairsphp tophp aidphp inphp determiningphp filterphp classfile
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_filterLoadedDirphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Callbackphp forphp escapingphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_escapephp php=php php'htmlspecialcharsphp'php;

php php php php php/php*php*
php php php php php php*php Encodingphp tophp usephp inphp escapingphp mechanismsphp;php defaultsphp tophp utfphp-php8
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_encodingphp php=php php'UTFphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Flagphp indicatingphp whetherphp orphp notphp LFIphp protectionphp forphp renderingphp viewphp scriptsphp isphp enabled
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp php$php_lfiProtectionOnphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Pluginphp loaders
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_loadersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Pluginphp types
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_loaderTypesphp php=php arrayphp(php'filterphp'php,php php'helperphp'php)php;

php php php php php/php*php*
php php php php php php*php Strictphp variablesphp flagphp;php whenphp onphp,php undefinedphp variablesphp accessedphp inphp thephp view
php php php php php php*php scriptsphp willphp triggerphp notices
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_strictVarsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructorphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$configphp Configurationphp keyphp-valuephp pairsphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$configphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php setphp initalphp pathsphp andphp properties
php php php php php php php php php$thisphp-php>setScriptPathphp(nullphp)php;

php php php php php php php php php/php/php php$thisphp-php>setHelperPathphp(nullphp)php;
php php php php php php php php php$thisphp-php>setFilterPathphp(nullphp)php;

php php php php php php php php php/php/php userphp-definedphp escapingphp callback
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'escapephp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEscapephp(php$configphp[php'escapephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php encoding
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'encodingphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$configphp[php'encodingphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php basephp path
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'basePathphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$prefixphp php=php php'Zendphp_Viewphp'php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'basePathPrefixphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php php php php php$prefixphp php=php php$configphp[php'basePathPrefixphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setBasePathphp(php$configphp[php'basePathphp'php]php,php php$prefixphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php userphp-definedphp viewphp scriptphp path
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'scriptPathphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addScriptPathphp(php$configphp[php'scriptPathphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php userphp-definedphp helperphp path
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'helperPathphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$configphp[php'helperPathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$configphp[php'helperPathphp'php]php asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addHelperPathphp(php$pathphp,php php$prefixphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$prefixphp php=php php'Zendphp_Viewphp_Helperphp'php;
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'helperPathPrefixphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$prefixphp php=php php$configphp[php'helperPathPrefixphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>addHelperPathphp(php$configphp[php'helperPathphp'php]php,php php$prefixphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php userphp-definedphp filterphp path
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'filterPathphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$configphp[php'filterPathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$configphp[php'filterPathphp'php]php asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addFilterPathphp(php$pathphp,php php$prefixphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$prefixphp php=php php'Zendphp_Viewphp_Filterphp'php;
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'filterPathPrefixphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$prefixphp php=php php$configphp[php'filterPathPrefixphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>addFilterPathphp(php$configphp[php'filterPathphp'php]php,php php$prefixphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php userphp-definedphp filters
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'filterphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addFilterphp(php$configphp[php'filterphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php strictphp vars
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'strictVarsphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>strictVarsphp(php$configphp[php'strictVarsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php LFIphp protectionphp flag
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'lfiProtectionOnphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setLfiProtectionphp(php$configphp[php'lfiProtectionOnphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp templatephp enginephp object
php php php php php php*
php php php php php php*php Returnsphp thephp objectphp instancephp,php asphp itphp isphp itsphp ownphp templatephp engine
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp getEnginephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowphp customphp objectphp initializationphp whenphp extendingphp Zendphp_Viewphp_Abstractphp or
php php php php php php*php Zendphp_View
php php php php php php*
php php php php php php*php Triggeredphp byphp php{php@linkphp php_php_constructphp(php)php thephp constructorphp}php asphp itsphp finalphp actionphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Preventphp Ephp_NOTICEphp forphp nonexistentphp values
php php php php php php*
php php php php php php*php Ifphp php{php@linkphp strictVarsphp(php)php}php isphp onphp,php raisesphp aphp noticephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_strictVarsphp)php php{
php php php php php php php php php php php php triggerphp_errorphp(php'Keyphp php"php'php php.php php$keyphp php.php php'php"php doesphp notphp existphp'php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp testingphp withphp emptyphp(php)php andphp issetphp(php)php tophp workphp inside
php php php php php php*php templatesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php'php_php'php php!php=php substrphp(php$keyphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php returnphp issetphp(php$thisphp-php>php$keyphp)php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Directlyphp assignsphp aphp variablephp tophp thephp viewphp scriptphp.
php php php php php php*
php php php php php php*php Checksphp firstphp tophp ensurephp thatphp thephp callerphp isphp notphp attemptingphp tophp setphp a
php php php php php php*php protectedphp orphp privatephp memberphp php(byphp checkingphp forphp aphp prefixedphp underscorephp)php;php if
php php php php php php*php notphp,php thephp publicphp memberphp isphp setphp;php otherwisephp,php anphp exceptionphp isphp raisedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyphp Thephp variablephp namephp.
php php php php php php*php php@paramphp mixedphp php$valphp Thephp variablephp valuephp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp ifphp anphp attemptphp tophp setphp aphp privatephp orphp protected
php php php php php php*php memberphp isphp detected
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valphp)
php php php php php{
php php php php php php php php ifphp php(php'php_php'php php!php=php substrphp(php$keyphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$valphp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Settingphp privatephp orphp protectedphp classphp membersphp isphp notphp allowedphp'php)php;
php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php throwphp php$ephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp unsetphp(php)php onphp objectphp propertiesphp tophp work
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php'php_php'php php!php=php substrphp(php$keyphp,php php0php,php php1php)php php&php&php issetphp(php$thisphp-php>php$keyphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php$keyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Accessesphp aphp helperphp objectphp fromphp withinphp aphp scriptphp.
php php php php php php*
php php php php php php*php Ifphp thephp helperphp classphp hasphp aphp php'viewphp'php propertyphp,php setsphp itphp withphp thephp currentphp view
php php php php php php*php objectphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Thephp helperphp namephp.
php php php php php php*php php@paramphp arrayphp php$argsphp Thephp parametersphp forphp thephp helperphp.
php php php php php php*php php@returnphp stringphp Thephp resultphp ofphp thephp helperphp outputphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$namephp,php php$argsphp)
php php php php php{
php php php php php php php php php/php/php isphp thephp helperphp alreadyphp loadedphp?
php php php php php php php php php$helperphp php=php php$thisphp-php>getHelperphp(php$namephp)php;

php php php php php php php php php/php/php callphp thephp helperphp method
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(
php php php php php php php php php php php php arrayphp(php$helperphp,php php$namephp)php,
php php php php php php php php php php php php php$args
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givenphp aphp basephp pathphp,php setsphp thephp scriptphp,php helperphp,php andphp filterphp pathsphp relativephp tophp it
php php php php php php*
php php php php php php*php Assumesphp aphp directoryphp structurephp ofphp:
php php php php php php*php php<codephp>
php php php php php php*php basePathphp/
php php php php php php*php php php php php scriptsphp/
php php php php php php*php php php php php helpersphp/
php php php php php php*php php php php php filtersphp/
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$prefixphp Prefixphp tophp usephp forphp helperphp andphp filterphp paths
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setBasePathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp'php)
php php php php php{
php php php php php php php php php$pathphp php php php php php php php php=php rtrimphp(php$pathphp,php php'php/php'php)php;
php php php php php php php php php$pathphp php php php php php php php php=php rtrimphp(php$pathphp,php php'php\php\php'php)php;
php php php php php php php php php$pathphp php php php php php php php.php=php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php$classPrefixphp php=php rtrimphp(php$classPrefixphp,php php'php_php'php)php php.php php'php_php'php;
php php php php php php php php php$thisphp-php>setScriptPathphp(php$pathphp php.php php'scriptsphp'php)php;
php php php php php php php php php$thisphp-php>setHelperPathphp(php$pathphp php.php php'helpersphp'php,php php$classPrefixphp php.php php'Helperphp'php)php;
php php php php php php php php php$thisphp-php>setFilterPathphp(php$pathphp php.php php'filtersphp'php,php php$classPrefixphp php.php php'Filterphp'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givenphp aphp basephp pathphp,php addphp scriptphp,php helperphp,php andphp filterphp pathsphp relativephp tophp it
php php php php php php*
php php php php php php*php Assumesphp aphp directoryphp structurephp ofphp:
php php php php php php*php php<codephp>
php php php php php php*php basePathphp/
php php php php php php*php php php php php scriptsphp/
php php php php php php*php php php php php helpersphp/
php php php php php php*php php php php php filtersphp/
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$prefixphp Prefixphp tophp usephp forphp helperphp andphp filterphp paths
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addBasePathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp'php)
php php php php php{
php php php php php php php php php$pathphp php php php php php php php php=php rtrimphp(php$pathphp,php php'php/php'php)php;
php php php php php php php php php$pathphp php php php php php php php php=php rtrimphp(php$pathphp,php php'php\php\php'php)php;
php php php php php php php php php$pathphp php php php php php php php.php=php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php$classPrefixphp php=php rtrimphp(php$classPrefixphp,php php'php_php'php)php php.php php'php_php'php;
php php php php php php php php php$thisphp-php>addScriptPathphp(php$pathphp php.php php'scriptsphp'php)php;
php php php php php php php php php$thisphp-php>addHelperPathphp(php$pathphp php.php php'helpersphp'php,php php$classPrefixphp php.php php'Helperphp'php)php;
php php php php php php php php php$thisphp-php>addFilterPathphp(php$pathphp php.php php'filtersphp'php,php php$classPrefixphp php.php php'Filterphp'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp tophp thephp stackphp ofphp viewphp scriptphp pathsphp inphp LIFOphp orderphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Thephp directoryphp php(php-iesphp)php tophp addphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addScriptPathphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addPathphp(php'scriptphp'php,php php$pathphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp thephp stackphp ofphp viewphp scriptphp pathsphp.
php php php php php php*
php php php php php php*php Tophp clearphp allphp pathsphp,php usephp Zendphp_Viewphp:php:setScriptPathphp(nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Thephp directoryphp php(php-iesphp)php tophp setphp asphp thephp pathphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setScriptPathphp(php$pathphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pathphp[php'scriptphp'php]php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_addPathphp(php'scriptphp'php,php php$pathphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp fullphp pathphp tophp aphp viewphp scriptphp specifiedphp byphp php$name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp falsephp|stringphp Falsephp ifphp scriptphp notphp found
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp ifphp nophp scriptphp directoryphp set
php php php php php php*php/
php php php php publicphp functionphp getScriptPathphp(php$namephp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$pathphp php=php php$thisphp-php>php_scriptphp(php$namephp)php;
php php php php php php php php php php php php returnphp php$pathphp;
php php php php php php php php php}php catchphp php(Zendphp_Viewphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(strstrphp(php$ephp-php>getMessagephp(php)php,php php'nophp viewphp scriptphp directoryphp setphp'php)php)php php{
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp currentlyphp setphp scriptphp paths
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getScriptPathsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getPathsphp(php'scriptphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pluginphp loaderphp forphp aphp particularphp pluginphp type
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Loaderphp_PluginLoaderphp php$loader
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp php$loaderphp,php php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_loaderTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Invalidphp pluginphp loaderphp typephp php"php%sphp"php'php,php php$typephp)php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_loadersphp[php$typephp]php php=php php$loaderphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp pluginphp loaderphp forphp aphp specificphp pluginphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php$typephp)
php php php php php{
php php php php php php php php php$typephp php=php strtolowerphp(php$typephp)php;
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_loaderTypesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(sprintfphp(php'Invalidphp pluginphp loaderphp typephp php"php%sphp"php;php cannotphp retrievephp'php,php php$typephp)php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$typephp,php php$thisphp-php>php_loadersphp)php)php php{
php php php php php php php php php php php php php$prefixphp php php php php php=php php'Zendphp_Viewphp_php'php;
php php php php php php php php php php php php php$pathPrefixphp php=php php'Zendphp/Viewphp/php'php;

php php php php php php php php php php php php php$pTypephp php=php ucfirstphp(php$typephp)php;
php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp php'filterphp'php:
php php php php php php php php php php php php php php php php casephp php'helperphp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$prefixphp php php php php php.php=php php$pTypephp;
php php php php php php php php php php php php php php php php php php php php php$pathPrefixphp php.php=php php$pTypephp;
php php php php php php php php php php php php php php php php php php php php php$loaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$prefixphp php=php>php php$pathPrefix
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_loadersphp[php$typephp]php php=php php$loaderphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_loadersphp[php$typephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp tophp thephp stackphp ofphp helperphp pathsphp inphp LIFOphp orderphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Thephp directoryphp php(php-iesphp)php tophp addphp.
php php php php php php*php php@paramphp stringphp php$classPrefixphp Classphp prefixphp tophp usephp withphp classesphp inphp this
php php php php php php*php directoryphp;php defaultsphp tophp Zendphp_Viewphp_Helper
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addHelperPathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp_Helperphp_php'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_addPluginPathphp(php'helperphp'php,php php$classPrefixphp,php php(arrayphp)php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp thephp stackphp ofphp helperphp pathsphp.
php php php php php php*
php php php php php php*php Tophp clearphp allphp pathsphp,php usephp Zendphp_Viewphp:php:setHelperPathphp(nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$pathphp Thephp directoryphp php(php-iesphp)php tophp setphp asphp thephp pathphp.
php php php php php php*php php@paramphp stringphp php$classPrefixphp Thephp classphp prefixphp tophp applyphp tophp allphp elementsphp in
php php php php php php*php php$pathphp;php defaultsphp tophp Zendphp_Viewphp_Helper
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setHelperPathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp_Helperphp_php'php)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_loadersphp[php'helperphp'php]php)php;
php php php php php php php php returnphp php$thisphp-php>addHelperPathphp(php$pathphp,php php$classPrefixphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fullphp pathphp tophp aphp helperphp classphp filephp specifiedphp byphp php$name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp stringphp|falsephp Falsephp onphp failurephp,php pathphp onphp success
php php php php php php*php/
php php php php publicphp functionphp getHelperPathphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getPluginPathphp(php'helperphp'php,php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp currentlyphp setphp helperphp paths
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHelperPathsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getPluginLoaderphp(php'helperphp'php)php-php>getPathsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registersphp aphp helperphp objectphp,php bypassingphp pluginphp loader
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Helperphp_Abstractphp|objectphp php$helper
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exception
php php php php php php*php/
php php php php publicphp functionphp registerHelperphp(php$helperphp,php php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_objectphp(php$helperphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Viewphp helperphp mustphp bephp anphp objectphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$helperphp instanceofphp Zendphp_Viewphp_Interfacephp)php php{
php php php php php php php php php php php php ifphp php(php!methodphp_existsphp(php$helperphp,php php$namephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php php newphp Zendphp_Viewphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Viewphp helperphp mustphp implementphp Zendphp_Viewphp_Interfacephp orphp havephp aphp methodphp matchingphp thephp namephp providedphp'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$helperphp,php php'setViewphp'php)php)php php{
php php php php php php php php php php php php php$helperphp-php>setViewphp(php$thisphp)php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php ucfirstphp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_helperphp[php$namephp]php php=php php$helperphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp helperphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp functionphp getHelperphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getPluginphp(php'helperphp'php,php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp arrayphp ofphp allphp activephp helpers
php php php php php php*
php php php php php php*php Onlyphp returnsphp thosephp thatphp havephp alreadyphp beenphp instantiatedphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHelpersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_helperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp tophp thephp stackphp ofphp filterphp pathsphp inphp LIFOphp orderphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Thephp directoryphp php(php-iesphp)php tophp addphp.
php php php php php php*php php@paramphp stringphp php$classPrefixphp Classphp prefixphp tophp usephp withphp classesphp inphp this
php php php php php php*php directoryphp;php defaultsphp tophp Zendphp_Viewphp_Filter
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addFilterPathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp_Filterphp_php'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_addPluginPathphp(php'filterphp'php,php php$classPrefixphp,php php(arrayphp)php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp thephp stackphp ofphp filterphp pathsphp.
php php php php php php*
php php php php php php*php Tophp clearphp allphp pathsphp,php usephp Zendphp_Viewphp:php:setFilterPathphp(nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Thephp directoryphp php(php-iesphp)php tophp setphp asphp thephp pathphp.
php php php php php php*php php@paramphp stringphp php$classPrefixphp Thephp classphp prefixphp tophp applyphp tophp allphp elementsphp in
php php php php php php*php php$pathphp;php defaultsphp tophp Zendphp_Viewphp_Filter
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setFilterPathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp_Filterphp_php'php)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_loadersphp[php'filterphp'php]php)php;
php php php php php php php php returnphp php$thisphp-php>addFilterPathphp(php$pathphp,php php$classPrefixphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fullphp pathphp tophp aphp filterphp classphp filephp specifiedphp byphp php$name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp stringphp|falsephp Falsephp onphp failurephp,php pathphp onphp success
php php php php php php*php/
php php php php publicphp functionphp getFilterPathphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getPluginPathphp(php'filterphp'php,php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp filterphp objectphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp functionphp getFilterphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getPluginphp(php'filterphp'php,php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp arrayphp ofphp allphp currentlyphp activephp filters
php php php php php php*
php php php php php php*php Onlyphp returnsphp thosephp thatphp havephp alreadyphp beenphp instantiatedphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFiltersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp allphp currentlyphp setphp filterphp paths
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFilterPathsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getPluginLoaderphp(php'filterphp'php)php-php>getPathsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp associativephp arrayphp ofphp pathphp typesphp php=php>php paths
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAllPathsphp(php)
php php php php php{
php php php php php php php php php$pathsphp php=php php$thisphp-php>php_pathphp;
php php php php php php php php php$pathsphp[php'helperphp'php]php php=php php$thisphp-php>getHelperPathsphp(php)php;
php php php php php php php php php$pathsphp[php'filterphp'php]php php=php php$thisphp-php>getFilterPathsphp(php)php;
php php php php php php php php returnphp php$pathsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp onephp orphp morephp filtersphp tophp thephp stackphp inphp FIFOphp orderphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Onephp orphp morephp filtersphp tophp addphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(php$namephp)
php php php php php{
php php php php php php php php foreachphp php(php(arrayphp)php php$namephp asphp php$valphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_filterphp[php]php php=php php$valphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp thephp filterphp stackphp.
php php php php php php*
php php php php php php*php Tophp clearphp allphp filtersphp,php usephp Zendphp_Viewphp:php:setFilterphp(nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Onephp orphp morephp filtersphp tophp setphp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setFilterphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filterphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>addFilterphp(php$namephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp php_escapephp(php)php callbackphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$specphp Thephp callbackphp forphp php_escapephp(php)php tophp usephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setEscapephp(php$specphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_escapephp php=php php$specphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp LFIphp protectionphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setLfiProtectionphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_lfiProtectionOnphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp statusphp ofphp LFIphp protectionphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isLfiProtectionOnphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_lfiProtectionOnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assignsphp variablesphp tophp thephp viewphp scriptphp viaphp differingphp strategiesphp.
php php php php php php*
php php php php php php*php Zendphp_Viewphp:php:assignphp(php'namephp'php,php php$valuephp)php assignsphp aphp variablephp calledphp php'namephp'
php php php php php php*php withphp thephp correspondingphp php$valuephp.
php php php php php php*
php php php php php php*php Zendphp_Viewphp:php:assignphp(php$arrayphp)php assignsphp thephp arrayphp keysphp asphp variable
php php php php php php*php namesphp php(withphp thephp correspondingphp arrayphp valuesphp)php.
php php php php php php*
php php php php php php*php php@seephp php php php php_php_setphp(php)
php php php php php php*php php@paramphp php stringphp|arrayphp Thephp assignmentphp strategyphp tophp usephp.
php php php php php php*php php@paramphp php mixedphp php(Optionalphp)php Ifphp assigningphp aphp namedphp variablephp,php usephp this
php php php php php php*php asphp thephp valuephp.
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstractphp Fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp ifphp php$specphp isphp neitherphp aphp stringphp norphp anphp arrayphp,
php php php php php php*php orphp ifphp anphp attemptphp tophp setphp aphp privatephp orphp protectedphp memberphp isphp detected
php php php php php php*php/
php php php php publicphp functionphp assignphp(php$specphp,php php$valuephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php whichphp strategyphp tophp usephp?
php php php php php php php php ifphp php(isphp_stringphp(php$specphp)php)php php{
php php php php php php php php php php php php php/php/php assignphp byphp namephp andphp value
php php php php php php php php php php php php ifphp php(php'php_php'php php=php=php substrphp(php$specphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Settingphp privatephp orphp protectedphp classphp membersphp isphp notphp allowedphp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php$specphp php=php php$valuephp;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php php/php/php assignphp fromphp associativephp array
php php php php php php php php php php php php php$errorphp php=php falsephp;
php php php php php php php php php php php php foreachphp php(php$specphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php'php_php'php php=php=php substrphp(php$keyphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$errorphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$valphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$errorphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Settingphp privatephp orphp protectedphp classphp membersphp isphp notphp allowedphp'php)php;
php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'assignphp(php)php expectsphp aphp stringphp orphp arrayphp,php receivedphp php'php php.php gettypephp(php$specphp)php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp listphp ofphp allphp assignedphp variables
php php php php php php*
php php php php php php*php Returnsphp allphp publicphp propertiesphp ofphp thephp objectphp.php Reflectionphp isphp notphp used
php php php php php php*php herephp asphp testingphp reflectionphp propertiesphp forphp visibilityphp isphp buggyphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getVarsphp(php)
php php php php php{
php php php php php php php php php$varsphp php php php=php getphp_objectphp_varsphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$varsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php'php_php'php php=php=php substrphp(php$keyphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$varsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$varsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp assignedphp variables
php php php php php php*
php php php php php php*php Clearsphp allphp variablesphp assignedphp tophp Zendphp_Viewphp eitherphp viaphp php{php@linkphp assignphp(php)php}php or
php php php php php php*php propertyphp overloadingphp php(php{php@linkphp php_php_setphp(php)php}php)php.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp clearVarsphp(php)
php php php php php{
php php php php php php php php php$varsphp php php php=php getphp_objectphp_varsphp(php$thisphp)php;
php php php php php php php php foreachphp php(php$varsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(php'php_php'php php!php=php substrphp(php$keyphp,php php0php,php php1php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php$keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Processesphp aphp viewphp scriptphp andphp returnsphp thephp outputphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Thephp scriptphp namephp tophp processphp.
php php php php php php*php php@returnphp stringphp Thephp scriptphp outputphp.
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$namephp)
php php php php php{
php php php php php php php php php/php/php findphp thephp scriptphp filephp namephp usingphp thephp parentphp privatephp method
php php php php php php php php php$thisphp-php>php_filephp php=php php$thisphp-php>php_scriptphp(php$namephp)php;
php php php php php php php php unsetphp(php$namephp)php;php php/php/php removephp php$namephp fromphp localphp scope

php php php php php php php php obphp_startphp(php)php;
php php php php php php php php php$thisphp-php>php_runphp(php$thisphp-php>php_filephp)php;

php php php php php php php php returnphp php$thisphp-php>php_filterphp(obphp_getphp_cleanphp(php)php)php;php php/php/php filterphp output
php php php php php}

php php php php php/php*php*
php php php php php php*php Escapesphp aphp valuephp forphp outputphp inphp aphp viewphp scriptphp.
php php php php php php*
php php php php php php*php Ifphp escapingphp mechanismphp isphp onephp ofphp htmlspecialcharsphp orphp htmlentitiesphp,php uses
php php php php php php*php php{php@linkphp php$php_encodingphp}php settingphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$varphp Thephp outputphp tophp escapephp.
php php php php php php*php php@returnphp mixedphp Thephp escapedphp valuephp.
php php php php php php*php/
php php php php publicphp functionphp escapephp(php$varphp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$thisphp-php>php_escapephp,php arrayphp(php'htmlspecialcharsphp'php,php php'htmlentitiesphp'php)php)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp(php$thisphp-php>php_escapephp,php php$varphp,php ENTphp_COMPATphp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php1php php=php=php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp(php$thisphp-php>php_escapephp,php php$varphp)php;
php php php php php php php php php}
php php php php php php php php php$argsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(php$thisphp-php>php_escapephp,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encodingphp tophp usephp withphp htmlentitiesphp(php)php andphp htmlspecialcharsphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp currentphp escapephp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Enablephp orphp disablephp strictphp vars
php php php php php php*
php php php php php php*php Ifphp strictphp variablesphp arephp enabledphp,php php{php@linkphp php_php_getphp(php)php}php willphp raisephp aphp notice
php php php php php php*php whenphp aphp variablephp isphp notphp definedphp.
php php php php php php*
php php php php php php*php Usephp inphp conjunctionphp withphp php{php@linkphp Zendphp_Viewphp_Helperphp_DeclareVarsphp thephp declareVarsphp(php)php helperphp}
php php php php php php*php tophp enforcephp strictphp variablephp handlingphp inphp yourphp viewphp scriptsphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$flag
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp strictVarsphp(php$flagphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_strictVarsphp php=php php(php$flagphp)php php?php truephp php:php falsephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp aphp viewphp scriptphp fromphp thephp availablephp directoriesphp.
php php php php php php*
php php php php php php*php php@paramphp php$namephp stringphp Thephp basephp namephp ofphp thephp scriptphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_scriptphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>isLfiProtectionOnphp(php)php php&php&php pregphp_matchphp(php'php#php\php.php\php.php[php\php\php\php/php]php#php'php,php php$namephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Requestedphp scriptsphp mayphp notphp includephp parentphp directoryphp traversalphp php(php"php.php.php/php"php,php php"php.php.php\php\php"php notationphp)php'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php0php php=php=php countphp(php$thisphp-php>php_pathphp[php'scriptphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'nophp viewphp scriptphp directoryphp setphp;php unablephp tophp determinephp locationphp forphp viewphp scriptphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_pathphp[php'scriptphp'php]php asphp php$dirphp)php php{
php php php php php php php php php php php php ifphp php(isphp_readablephp(php$dirphp php.php php$namephp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$dirphp php.php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php$messagephp php=php php"scriptphp php'php$namephp'php notphp foundphp inphp pathphp php(php"
php php php php php php php php php php php php php php php php php php.php implodephp(PATHphp_SEPARATORphp,php php$thisphp-php>php_pathphp[php'scriptphp'php]php)
php php php php php php php php php php php php php php php php php php.php php"php)php"php;
php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php$ephp-php>setViewphp(php$thisphp)php;
php php php php php php php php throwphp php$ephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appliesphp thephp filterphp callbackphp tophp aphp bufferphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$bufferphp Thephp bufferphp contentsphp.
php php php php php php*php php@returnphp stringphp Thephp filteredphp bufferphp.
php php php php php php*php/
php php php php privatephp functionphp php_filterphp(php$bufferphp)
php php php php php{
php php php php php php php php php/php/php loopphp throughphp eachphp filterphp class
php php php php php php php php foreachphp php(php$thisphp-php>php_filterphp asphp php$namephp)php php{
php php php php php php php php php php php php php/php/php loadphp andphp applyphp thephp filterphp class
php php php php php php php php php php php php php$filterphp php=php php$thisphp-php>getFilterphp(php$namephp)php;
php php php php php php php php php php php php php$bufferphp php=php callphp_userphp_funcphp(arrayphp(php$filterphp,php php'filterphp'php)php,php php$bufferphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php donephp!
php php php php php php php php returnphp php$bufferphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp pathsphp tophp thephp pathphp stackphp inphp LIFOphp orderphp.
php php php php php php*
php php php php php php*php Zendphp_Viewphp:php:php_addPathphp(php$typephp,php php'dirnamephp'php)php addsphp onephp directory
php php php php php php*php tophp thephp pathphp stackphp.
php php php php php php*
php php php php php php*php Zendphp_Viewphp:php:php_addPathphp(php$typephp,php php$arrayphp)php addsphp onephp directoryphp for
php php php php php php*php eachphp arrayphp elementphp valuephp.
php php php php php php*
php php php php php php*php Inphp thephp casephp ofphp filterphp andphp helperphp pathsphp,php php$prefixphp shouldphp bephp usedphp to
php php php php php php*php specifyphp whatphp classphp prefixphp tophp usephp withphp thephp givenphp pathphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp Thephp pathphp typephp php(php'scriptphp'php,php php'helperphp'php,php orphp php'filterphp'php)php.
php php php php php php*php php@paramphp stringphp|arrayphp php$pathphp Thephp pathphp specificationphp.
php php php php php php*php php@paramphp stringphp php$prefixphp Classphp prefixphp tophp usephp withphp pathphp php(helpersphp andphp filters
php php php php php php*php onlyphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_addPathphp(php$typephp,php php$pathphp,php php$prefixphp php=php nullphp)
php php php php php{
php php php php php php php php foreachphp php(php(arrayphp)php php$pathphp asphp php$dirphp)php php{
php php php php php php php php php php php php php/php/php attemptphp tophp stripphp anyphp possiblephp separatorphp and
php php php php php php php php php php php php php/php/php appendphp thephp systemphp directoryphp separator
php php php php php php php php php php php php php$dirphp php php=php rtrimphp(php$dirphp,php php'php/php'php)php;
php php php php php php php php php php php php php$dirphp php php=php rtrimphp(php$dirphp,php php'php\php\php'php)php;
php php php php php php php php php php php php php$dirphp php.php=php php'php/php'php;

php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp php'scriptphp'php:
php php php php php php php php php php php php php php php php php php php php php/php/php addphp tophp thephp topphp ofphp thephp stackphp.
php php php php php php php php php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_pathphp[php$typephp]php,php php$dirphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'filterphp'php:
php php php php php php php php php php php php php php php php casephp php'helperphp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php/php addphp asphp arrayphp withphp prefixphp andphp dirphp keys
php php php php php php php php php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_pathphp[php$typephp]php,php arrayphp(php'prefixphp'php php=php>php php$prefixphp,php php'dirphp'php php=php>php php$dirphp)php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp thephp pathphp stackphp forphp helpersphp andphp filtersphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp Thephp pathphp typephp php(php'helperphp'php orphp php'filterphp'php)php.
php php php php php php*php php@paramphp stringphp|arrayphp php$pathphp Thephp directoryphp php(php-iesphp)php tophp setphp asphp thephp pathphp.
php php php php php php*php php@paramphp stringphp php$classPrefixphp Classphp prefixphp tophp applyphp tophp elementsphp ofphp php$path
php php php php php php*php/
php php php php privatephp functionphp php_setPathphp(php$typephp,php php$pathphp,php php$classPrefixphp php=php nullphp)
php php php php php{
php php php php php php php php php$dirphp php=php DIRECTORYphp_SEPARATORphp php.php ucfirstphp(php$typephp)php php.php DIRECTORYphp_SEPARATORphp;

php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'scriptphp'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_pathphp[php$typephp]php php=php arrayphp(dirnamephp(php_php_FILEphp_php_php)php php.php php$dirphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_addPathphp(php$typephp,php php$pathphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'filterphp'php:
php php php php php php php php php php php php casephp php'helperphp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_pathphp[php$typephp]php php=php arrayphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'prefixphp'php php=php>php php'Zendphp_Viewphp_php'php php.php ucfirstphp(php$typephp)php php.php php'php_php'php,
php php php php php php php php php php php php php php php php php php php php php'dirphp'php php php php php=php>php dirnamephp(php_php_FILEphp_php_php)php php.php php$dir
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_addPathphp(php$typephp,php php$pathphp,php php$classPrefixphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp allphp pathsphp forphp aphp givenphp pathphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp Thephp pathphp typephp php php(php'helperphp'php,php php'filterphp'php,php php'scriptphp'php)
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php privatephp functionphp php_getPathsphp(php$typephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pathphp[php$typephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp helperphp classphp asphp loaded
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@paramphp php stringphp php$filephp pathphp tophp classphp file
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_setHelperClassphp(php$namephp,php php$classphp,php php$filephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_helperLoadedDirphp[php$namephp]php php=php php$filephp;
php php php php php php php php php$thisphp-php>php_helperLoadedphp[php$namephp]php php php php php=php php$classphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp filterphp classphp asphp loaded
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@paramphp php stringphp php$filephp pathphp tophp classphp file
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_setFilterClassphp(php$namephp,php php$classphp,php php$filephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filterLoadedDirphp[php$namephp]php php=php php$filephp;
php php php php php php php php php$thisphp-php>php_filterLoadedphp[php$namephp]php php php php php=php php$classphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp prefixPathphp forphp aphp pluginphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$classPrefix
php php php php php php*php php@paramphp php arrayphp php$paths
php php php php php php*php php@returnphp Zendphp_Viewphp_Abstract
php php php php php php*php/
php php php php privatephp functionphp php_addPluginPathphp(php$typephp,php php$classPrefixphp,php arrayphp php$pathsphp)
php php php php php{
php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php;
php php php php php php php php foreachphp php(php$pathsphp asphp php$pathphp)php php{
php php php php php php php php php php php php php$loaderphp-php>addPrefixPathphp(php$classPrefixphp,php php$pathphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp pathphp tophp aphp givenphp pluginphp classphp ofphp aphp givenphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php privatephp functionphp php_getPluginPathphp(php$typephp,php php$namephp)
php php php php php{
php php php php php php php php php$loaderphp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php;
php php php php php php php php ifphp php(php$loaderphp-php>isLoadedphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp php$loaderphp-php>getClassPathphp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$loaderphp-php>loadphp(php$namephp)php;
php php php php php php php php php php php php returnphp php$loaderphp-php>getClassPathphp(php$namephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Loaderphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp pluginphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php privatephp functionphp php_getPluginphp(php$typephp,php php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php ucfirstphp(php$namephp)php;
php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'filterphp'php:
php php php php php php php php php php php php php php php php php$storeVarphp php=php php'php_filterClassphp'php;
php php php php php php php php php php php php php php php php php$storephp php php php php=php php$thisphp-php>php_filterClassphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'helperphp'php:
php php php php php php php php php php php php php php php php php$storeVarphp php=php php'php_helperphp'php;
php php php php php php php php php php php php php php php php php$storephp php php php php=php php$thisphp-php>php_helperphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$storephp[php$namephp]php)php)php php{
php php php php php php php php php php php php php$classphp php=php php$thisphp-php>getPluginLoaderphp(php$typephp)php-php>loadphp(php$namephp)php;
php php php php php php php php php php php php php$storephp[php$namephp]php php=php newphp php$classphp(php)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$storephp[php$namephp]php,php php'setViewphp'php)php)php php{
php php php php php php php php php php php php php php php php php$storephp[php$namephp]php-php>setViewphp(php$thisphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php$storeVarphp php=php php$storephp;
php php php php php php php php returnphp php$storephp[php$namephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Usephp tophp includephp thephp viewphp scriptphp inphp aphp scopephp thatphp onlyphp allowsphp public
php php php php php php*php membersphp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_runphp(php)php;
php}
