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
php php*php php@subpackagephp PluginLoader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PluginLoaderphp.phpphp php2php2php6php0php3php php2php0php1php0php-php0php7php-php1php7php php0php0php:php0php2php:php1php0Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Loaderphp_PluginLoaderphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Interfacephp.phpphp'php;

php/php*php*php Zendphp_Loaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php Genericphp pluginphp classphp loader
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Loader
php php*php php@subpackagephp PluginLoader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Loaderphp_PluginLoaderphp implementsphp Zendphp_Loaderphp_PluginLoaderphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Classphp mapphp cachephp file
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_includeFileCachephp;

php php php php php/php*php*
php php php php php php*php Instancephp loadedphp pluginphp paths
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_loadedPluginPathsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Instancephp loadedphp plugins
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_loadedPluginsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Instancephp registryphp property
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_prefixToPathsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Staticallyphp loadedphp pluginphp pathphp mappings
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_staticLoadedPluginPathsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Staticallyphp loadedphp plugins
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_staticLoadedPluginsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Staticphp registryphp property
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_staticPrefixToPathsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp usephp aphp staticallyphp namedphp registryphp forphp loadingphp plugins
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_useStaticRegistryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$prefixToPaths
php php php php php php*php php@paramphp stringphp php$staticRegistryNamephp OPTIONAL
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Arrayphp php$prefixToPathsphp php=php arrayphp(php)php,php php$staticRegistryNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$staticRegistryNamephp)php php&php&php php!emptyphp(php$staticRegistryNamephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_useStaticRegistryphp php=php php$staticRegistryNamephp;
php php php php php php php php php php php php ifphp(php!issetphp(selfphp:php:php$php_staticPrefixToPathsphp[php$staticRegistryNamephp]php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_staticPrefixToPathsphp[php$staticRegistryNamephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp(php!issetphp(selfphp:php:php$php_staticLoadedPluginsphp[php$staticRegistryNamephp]php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_staticLoadedPluginsphp[php$staticRegistryNamephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$prefixToPathsphp asphp php$prefixphp php=php>php php$pathphp)php php{
php php php php php php php php php php php php php$thisphp-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatphp prefixphp forphp internalphp use
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_formatPrefixphp(php$prefixphp)
php php php php php{
php php php php php php php php ifphp(php$prefixphp php=php=php php"php"php)php php{
php php php php php php php php php php php php returnphp php$prefixphp;
php php php php php php php php php}

php php php php php php php php php$lastphp php=php strlenphp(php$prefixphp)php php-php php1php;
php php php php php php php php ifphp php(php$prefixphp{php$lastphp}php php=php=php php'php\php\php'php)php php{
php php php php php php php php php php php php returnphp php$prefixphp;
php php php php php php php php php}

php php php php php php php php returnphp rtrimphp(php$prefixphp,php php'php_php'php)php php.php php'php_php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp prefixedphp pathsphp tophp thephp registryphp ofphp paths
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php php@paramphp stringphp php$path
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp addPrefixPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$prefixphp)php php|php|php php!isphp_stringphp(php$pathphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php'Zendphp_Loaderphp_PluginLoaderphp:php:addPrefixPathphp(php)php methodphp onlyphp takesphp stringsphp forphp prefixphp andphp pathphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$prefixphp php=php php$thisphp-php>php_formatPrefixphp(php$prefixphp)php;
php php php php php php php php php$pathphp php php php=php rtrimphp(php$pathphp,php php'php/php\php\php'php)php php.php php'php/php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$prefixphp]php[php]php php=php php$pathphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$pathphp,php php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php[php]php php=php php$pathphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp pathphp stack
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@returnphp falsephp|arrayphp Falsephp ifphp prefixphp doesphp notphp existphp,php arrayphp otherwise
php php php php php php*php/
php php php php publicphp functionphp getPathsphp(php$prefixphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$prefixphp)php php&php&php isphp_stringphp(php$prefixphp)php)php php{
php php php php php php php php php php php php php$prefixphp php=php php$thisphp-php>php_formatPrefixphp(php$prefixphp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$prefixphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$prefixphp]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_prefixToPathsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp pathphp stack
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@returnphp boolphp Falsephp onlyphp ifphp php$prefixphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp functionphp clearPathsphp(php$prefixphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$prefixphp)php php&php&php isphp_stringphp(php$prefixphp)php)php php{
php php php php php php php php php php php php php$prefixphp php=php php$thisphp-php>php_formatPrefixphp(php$prefixphp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$prefixphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$prefixphp]php)php;
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_prefixToPathsphp[php$prefixphp]php)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php php=php arrayphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_prefixToPathsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp prefixphp php(orphp prefixedphp-pathphp)php fromphp thephp registry
php php php php php php*
php php php php php php*php php@paramphp stringphp php$prefix
php php php php php php*php php@paramphp stringphp php$pathphp OPTIONAL
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp removePrefixPathphp(php$prefixphp,php php$pathphp php=php nullphp)
php php php php php{
php php php php php php php php php$prefixphp php=php php$thisphp-php>php_formatPrefixphp(php$prefixphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php php$registryphp php=php&php selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$registryphp php=php&php php$thisphp-php>php_prefixToPathsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$registryphp[php$prefixphp]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php'Prefixphp php'php php.php php$prefixphp php.php php'php wasphp notphp foundphp inphp thephp PluginLoaderphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$pathphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$posphp php=php arrayphp_searchphp(php$pathphp,php php$registryphp[php$prefixphp]php)php;
php php php php php php php php php php php php ifphp php(falsephp php=php=php=php php$posphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php'Prefixphp php'php php.php php$prefixphp php.php php'php php/php Pathphp php'php php.php php$pathphp php.php php'php wasphp notphp foundphp inphp thephp PluginLoaderphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$registryphp[php$prefixphp]php[php$posphp]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php unsetphp(php$registryphp[php$prefixphp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp pluginphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_formatNamephp(php$namephp)
php php php php php{
php php php php php php php php returnphp ucfirstphp(php(stringphp)php php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp aphp Pluginphp byphp aphp specificphp namephp isphp loaded
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp isLoadedphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_formatNamephp(php$namephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php returnphp issetphp(selfphp:php:php$php_staticLoadedPluginsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php)php;
php php php php php php php php php}

php php php php php php php php returnphp issetphp(php$thisphp-php>php_loadedPluginsphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp fullphp classphp namephp forphp aphp namedphp plugin
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp stringphp|falsephp Falsephp ifphp classphp notphp foundphp,php classphp namephp otherwise
php php php php php php*php/
php php php php publicphp functionphp getClassNamephp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_formatNamephp(php$namephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistry
php php php php php php php php php php php php php&php&php issetphp(selfphp:php:php$php_staticLoadedPluginsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_staticLoadedPluginsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php;
php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_loadedPluginsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_loadedPluginsphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp pathphp tophp pluginphp class
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$name
php php php php php php*php php@returnphp stringphp|falsephp Falsephp ifphp notphp found
php php php php php php*php/
php php php php publicphp functionphp getClassPathphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_formatNamephp(php$namephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistry
php php php php php php php php php php php php php&php&php php!emptyphp(selfphp:php:php$php_staticLoadedPluginPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_staticLoadedPluginPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php;
php php php php php php php php php}php elseifphp php(php!emptyphp(php$thisphp-php>php_loadedPluginPathsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_loadedPluginPathsphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>isLoadedphp(php$namephp)php)php php{
php php php php php php php php php php php php php$classphp php=php php$thisphp-php>getClassNamephp(php$namephp)php;
php php php php php php php php php php php php php$rphp php php php php php=php newphp ReflectionClassphp(php$classphp)php;
php php php php php php php php php php php php php$pathphp php php=php php$rphp-php>getFileNamephp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_staticLoadedPluginPathsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php php=php php$pathphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_loadedPluginPathsphp[php$namephp]php php=php php$pathphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$pathphp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp aphp pluginphp viaphp thephp namephp provided
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php boolphp php$throwExceptionsphp Whetherphp orphp notphp tophp throwphp exceptionsphp ifphp the
php php php php php php*php classphp isphp notphp resolved
php php php php php php*php php@returnphp stringphp|falsephp Classphp namephp ofphp loadedphp classphp;php falsephp ifphp php$throwExceptions
php php php php php php*php ifphp falsephp andphp nophp classphp found
php php php php php php*php php@throwsphp Zendphp_Loaderphp_Exceptionphp ifphp classphp notphp found
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$namephp,php php$throwExceptionsphp php=php truephp)
php php php php php{
php php php php php php php php php$namephp php=php php$thisphp-php>php_formatNamephp(php$namephp)php;
php php php php php php php php ifphp php(php$thisphp-php>isLoadedphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getClassNamephp(php$namephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php php$registryphp php=php selfphp:php:php$php_staticPrefixToPathsphp[php$thisphp-php>php_useStaticRegistryphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$registryphp php=php php$thisphp-php>php_prefixToPathsphp;
php php php php php php php php php}

php php php php php php php php php$registryphp php php=php arrayphp_reversephp(php$registryphp,php truephp)php;
php php php php php php php php php$foundphp php php php php php=php falsephp;
php php php php php php php php php$classFilephp php=php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$namephp)php php.php php'php.phpphp'php;
php php php php php php php php php$incFilephp php php php=php selfphp:php:getIncludeFileCachephp(php)php;
php php php php php php php php foreachphp php(php$registryphp asphp php$prefixphp php=php>php php$pathsphp)php php{
php php php php php php php php php php php php php$classNamephp php=php php$prefixphp php.php php$namephp;

php php php php php php php php php php php php ifphp php(classphp_existsphp(php$classNamephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$pathsphp php php php php php=php arrayphp_reversephp(php$pathsphp,php truephp)php;

php php php php php php php php php php php php foreachphp php(php$pathsphp asphp php$pathphp)php php{
php php php php php php php php php php php php php php php php php$loadFilephp php=php php$pathphp php.php php$classFilephp;
php php php php php php php php php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php$loadFilephp)php)php php{
php php php php php php php php php php php php php php php php php php php php includephp_oncephp php$loadFilephp;
php php php php php php php php php php php php php php php php php php php php ifphp php(classphp_existsphp(php$classNamephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$incFilephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:php_appendIncFilephp(php$loadFilephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$foundphp)php php{
php php php php php php php php php php php php ifphp php(php!php$throwExceptionsphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$messagephp php=php php"Pluginphp byphp namephp php'php$namephp'php wasphp notphp foundphp inphp thephp registryphp;php usedphp pathsphp:php"php;
php php php php php php php php php php php php foreachphp php(php$registryphp asphp php$prefixphp php=php>php php$pathsphp)php php{
php php php php php php php php php php php php php php php php php$messagephp php.php=php php"php\nphp$prefixphp:php php"php php.php implodephp(PATHphp_SEPARATORphp,php php$pathsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php$messagephp)php;
php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_useStaticRegistryphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_staticLoadedPluginsphp[php$thisphp-php>php_useStaticRegistryphp]php[php$namephp]php php php php php php=php php$classNamephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_loadedPluginsphp[php$namephp]php php php php php php=php php$classNamephp;
php php php php php php php php php}
php php php php php php php php returnphp php$classNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp pathphp tophp classphp filephp cache
php php php php php php*
php php php php php php*php Specifyphp aphp pathphp tophp aphp filephp thatphp willphp addphp includephp_oncephp statementsphp forphp each
php php php php php php*php pluginphp classphp loadedphp.php Thisphp isphp anphp optphp-inphp featurephp forphp performancephp purposesphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp ifphp filephp isphp notphp writeablephp orphp pathphp doesphp notphp exist
php php php php php php*php/
php php php php publicphp staticphp functionphp setIncludeFileCachephp(php$filephp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$filephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_includeFileCachephp php=php nullphp;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!filephp_existsphp(php$filephp)php php&php&php php!filephp_existsphp(dirnamephp(php$filephp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php'Specifiedphp filephp doesphp notphp existphp andphp/orphp directoryphp doesphp notphp existphp php(php'php php.php php$filephp php.php php'php)php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(filephp_existsphp(php$filephp)php php&php&php php!isphp_writablephp(php$filephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php'Specifiedphp filephp isphp notphp writeablephp php(php'php php.php php$filephp php.php php'php)php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!filephp_existsphp(php$filephp)php php&php&php filephp_existsphp(dirnamephp(php$filephp)php)php php&php&php php!isphp_writablephp(dirnamephp(php$filephp)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_PluginLoaderphp_Exceptionphp(php'Specifiedphp filephp isphp notphp writeablephp php(php'php php.php php$filephp php.php php'php)php'php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_includeFileCachephp php=php php$filephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp classphp filephp cachephp path
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp staticphp functionphp getIncludeFileCachephp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_includeFileCachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp anphp includephp_oncephp statementphp tophp thephp classphp filephp cache
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$incFile
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_appendIncFilephp(php$incFilephp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(selfphp:php:php$php_includeFileCachephp)php)php php{
php php php php php php php php php php php php php$filephp php=php php'<php?phpphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$filephp php=php filephp_getphp_contentsphp(selfphp:php:php$php_includeFileCachephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!strstrphp(php$filephp,php php$incFilephp)php)php php{
php php php php php php php php php php php php php$filephp php.php=php php"php\nincludephp_oncephp php'php$incFilephp'php;php"php;
php php php php php php php php php php php php filephp_putphp_contentsphp(selfphp:php:php$php_includeFileCachephp,php php$filephp)php;
php php php php php php php php php}
php php php php php}
php}
