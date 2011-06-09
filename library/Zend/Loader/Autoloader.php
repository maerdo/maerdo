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
php php*php php@versionphp php php php php$Idphp:php Autoloaderphp.phpphp php2php3php1php6php1php php2php0php1php0php-php1php0php-php1php9php php1php6php:php0php8php:php3php6Zphp matthewphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Loaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php Autoloaderphp stackphp andphp namespacephp autoloader
php php*
php php*php php@usesphp php php php php php php Zendphp_Loaderphp_Autoloader
php php*php php@packagephp php php php Zendphp_Loader
php php*php php@subpackagephp Autoloader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Loaderphp_Autoloader
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Loaderphp_Autoloaderphp Singletonphp instance
php php php php php php*php/
php php php php protectedphp staticphp php$php_instancephp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Concretephp autoloaderphp callbackphp implementations
php php php php php php*php/
php php php php protectedphp php$php_autoloadersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Defaultphp autoloaderphp callback
php php php php php php*php/
php php php php protectedphp php$php_defaultAutoloaderphp php=php arrayphp(php'Zendphp_Loaderphp'php,php php'loadClassphp'php)php;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp tophp actphp asphp aphp fallbackphp autoloader
php php php php php php*php/
php php php php protectedphp php$php_fallbackAutoloaderphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Callbackphp forphp internalphp autoloaderphp implementation
php php php php php php*php/
php php php php protectedphp php$php_internalAutoloaderphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Supportedphp namespacesphp php'Zendphp'php andphp php'ZendXphp'php byphp defaultphp.
php php php php php php*php/
php php php php protectedphp php$php_namespacesphp php=php arrayphp(
php php php php php php php php php'Zendphp_php'php php php=php>php truephp,
php php php php php php php php php'ZendXphp_php'php php=php>php truephp,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Namespacephp-specificphp autoloaders
php php php php php php*php/
php php php php protectedphp php$php_namespaceAutoloadersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp tophp suppressphp filephp notphp foundphp warnings
php php php php php php*php/
php php php php protectedphp php$php_suppressNotFoundWarningsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp nullphp|string
php php php php php php*php/
php php php php protectedphp php$php_zfPathphp;

php php php php php/php*php*
php php php php php php*php Retrievephp singletonphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_instancephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp selfphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp thephp singletonphp instance
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp resetInstancephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_instancephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Autoloadphp aphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp autoloadphp(php$classphp)
php php php php php{
php php php php php php php php php$selfphp php=php selfphp:php:getInstancephp(php)php;

php php php php php php php php foreachphp php(php$selfphp-php>getClassAutoloadersphp(php$classphp)php asphp php$autoloaderphp)php php{
php php php php php php php php php php php php ifphp php(php$autoloaderphp instanceofphp Zendphp_Loaderphp_Autoloaderphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$autoloaderphp-php>autoloadphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$autoloaderphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(callphp_userphp_funcphp(php$autoloaderphp,php php$classphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$autoloaderphp)php php|php|php isphp_callablephp(php$autoloaderphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$autoloaderphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp autoloaderphp implementation
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$callbackphp PHPphp callback
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDefaultAutoloaderphp(php$callbackphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp callbackphp specifiedphp forphp defaultphp autoloaderphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_defaultAutoloaderphp php=php php$callbackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp defaultphp autoloaderphp callback
php php php php php php*
php php php php php php*php php@returnphp stringphp|arrayphp PHPphp Callback
php php php php php php*php/
php php php php publicphp functionphp getDefaultAutoloaderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultAutoloaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp severalphp autoloaderphp callbacksphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$autoloadersphp Arrayphp ofphp PHPphp callbacksphp php(orphp Zendphp_Loaderphp_Autoloaderphp_Interfacephp implementationsphp)php tophp actphp asphp autoloaders
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp setAutoloadersphp(arrayphp php$autoloadersphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_autoloadersphp php=php php$autoloadersphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp attachedphp autoloaderphp implementations
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAutoloadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_autoloadersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp allphp autoloadersphp forphp aphp givenphp namespace
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namespace
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getNamespaceAutoloadersphp(php$namespacephp)
php php php php php{
php php php php php php php php php$namespacephp php=php php(stringphp)php php$namespacephp;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$namespacephp,php php$thisphp-php>php_namespaceAutoloadersphp)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_namespaceAutoloadersphp[php$namespacephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp aphp namespacephp tophp autoload
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$namespace
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp registerNamespacephp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php php(arrayphp)php php$namespacephp;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$namespacephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp namespacephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$namespacephp asphp php$nsphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_namespacesphp[php$nsphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_namespacesphp[php$nsphp]php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unloadphp aphp registeredphp autoloadphp namespace
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$namespace
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp unregisterNamespacephp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php php(arrayphp)php php$namespacephp;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$namespacephp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp namespacephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$namespacephp asphp php$nsphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_namespacesphp[php$nsphp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_namespacesphp[php$nsphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp listphp ofphp registeredphp autoloadphp namespaces
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getRegisteredNamespacesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp_keysphp(php$thisphp-php>php_namespacesphp)php;
php php php php php}

php php php php publicphp functionphp setZfPathphp(php$specphp,php php$versionphp php=php php'latestphp'php)
php php php php php{
php php php php php php php php php$pathphp php=php php$specphp;
php php php php php php php php ifphp php(isphp_arrayphp(php$specphp)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$specphp[php'pathphp'php]php)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Nophp pathphp specifiedphp forphp ZFphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$pathphp php=php php$specphp[php'pathphp'php]php;
php php php php php php php php php php php php ifphp php(issetphp(php$specphp[php'versionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$versionphp php=php php$specphp[php'versionphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_zfPathphp php=php php$thisphp-php>php_getVersionPathphp(php$pathphp,php php$versionphp)php;
php php php php php php php php setphp_includephp_pathphp(implodephp(PATHphp_SEPARATORphp,php arrayphp(
php php php php php php php php php php php php php$thisphp-php>php_zfPathphp,
php php php php php php php php php php php php getphp_includephp_pathphp(php)php,
php php php php php php php php php)php)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp getZfPathphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_zfPathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp orphp setphp thephp valuephp ofphp thephp php"suppressphp notphp foundphp warningsphp"php flag
php php php php php php*
php php php php php php*php php@paramphp php nullphp|boolphp php$flag
php php php php php php*php php@returnphp boolphp|Zendphp_Loaderphp_Autoloaderphp Returnsphp booleanphp ifphp nophp argumentphp isphp passedphp,php objectphp instancephp otherwise
php php php php php php*php/
php php php php publicphp functionphp suppressNotFoundWarningsphp(php$flagphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$flagphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_suppressNotFoundWarningsphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_suppressNotFoundWarningsphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp whetherphp orphp notphp thisphp autoloaderphp shouldphp bephp aphp fallbackphp autoloader
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp setFallbackAutoloaderphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_fallbackAutoloaderphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp thisphp instancephp actingphp asphp aphp fallbackphp autoloaderphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isFallbackAutoloaderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fallbackAutoloaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp autoloadersphp tophp usephp whenphp matchingphp class
php php php php php php*
php php php php php php*php Determinesphp ifphp thephp classphp matchesphp aphp registeredphp namespacephp,php andphp,php ifphp sophp,
php php php php php php*php returnsphp onlyphp thephp autoloadersphp forphp thatphp namespacephp.php Otherwisephp,php itphp returns
php php php php php php*php allphp nonphp-namespacedphp autoloadersphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp autoloadersphp tophp use
php php php php php php*php/
php php php php publicphp functionphp getClassAutoloadersphp(php$classphp)
php php php php php{
php php php php php php php php php$namespacephp php php php=php falsephp;
php php php php php php php php php$autoloadersphp php=php arrayphp(php)php;

php php php php php php php php php/php/php Addphp concretephp namespacedphp autoloaders
php php php php php php php php foreachphp php(arrayphp_keysphp(php$thisphp-php>php_namespaceAutoloadersphp)php asphp php$nsphp)php php{
php php php php php php php php php php php php ifphp php(php'php'php php=php=php php$nsphp)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$classphp,php php$nsphp)php)php php{
php php php php php php php php php php php php php php php php php$namespacephp php php php=php php$nsphp;
php php php php php php php php php php php php php php php php php$autoloadersphp php=php php$autoloadersphp php+php php$thisphp-php>getNamespaceAutoloadersphp(php$nsphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Addphp internalphp namespacedphp autoloader
php php php php php php php php foreachphp php(php$thisphp-php>getRegisteredNamespacesphp(php)php asphp php$nsphp)php php{
php php php php php php php php php php php php ifphp php(php0php php=php=php=php strposphp(php$classphp,php php$nsphp)php)php php{
php php php php php php php php php php php php php php php php php$namespacephp php php php php php=php php$nsphp;
php php php php php php php php php php php php php php php php php$autoloadersphp[php]php php=php php$thisphp-php>php_internalAutoloaderphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Addphp nonphp-namespacedphp autoloaders
php php php php php php php php php$autoloadersphp php=php php$autoloadersphp php+php php$thisphp-php>getNamespaceAutoloadersphp(php'php'php)php;

php php php php php php php php php/php/php Addphp fallbackphp autoloader
php php php php php php php php ifphp php(php!php$namespacephp php&php&php php$thisphp-php>isFallbackAutoloaderphp(php)php)php php{
php php php php php php php php php php php php php$autoloadersphp[php]php php=php php$thisphp-php>php_internalAutoloaderphp;
php php php php php php php php php}

php php php php php php php php returnphp php$autoloadersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp autoloaderphp tophp thephp beginningphp ofphp thephp stack
php php php php php php*
php php php php php php*php php@paramphp php objectphp|arrayphp|stringphp php$callbackphp PHPphp callbackphp orphp Zendphp_Loaderphp_Autoloaderphp_Interfacephp implementation
php php php php php php*php php@paramphp php stringphp|arrayphp php$namespacephp Specificphp namespacephp(sphp)php underphp whichphp tophp registerphp callback
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp unshiftAutoloaderphp(php$callbackphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php php$autoloadersphp php=php php$thisphp-php>getAutoloadersphp(php)php;
php php php php php php php php arrayphp_unshiftphp(php$autoloadersphp,php php$callbackphp)php;
php php php php php php php php php$thisphp-php>setAutoloadersphp(php$autoloadersphp)php;

php php php php php php php php php$namespacephp php=php php(arrayphp)php php$namespacephp;
php php php php php php php php foreachphp php(php$namespacephp asphp php$nsphp)php php{
php php php php php php php php php php php php php$autoloadersphp php=php php$thisphp-php>getNamespaceAutoloadersphp(php$nsphp)php;
php php php php php php php php php php php php arrayphp_unshiftphp(php$autoloadersphp,php php$callbackphp)php;
php php php php php php php php php php php php php$thisphp-php>php_setNamespaceAutoloadersphp(php$autoloadersphp,php php$nsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp anphp autoloaderphp tophp thephp autoloaderphp stack
php php php php php php*
php php php php php php*php php@paramphp php objectphp|arrayphp|stringphp php$callbackphp PHPphp callbackphp orphp Zendphp_Loaderphp_Autoloaderphp_Interfacephp implementation
php php php php php php*php php@paramphp php stringphp|arrayphp php$namespacephp Specificphp namespacephp(sphp)php underphp whichphp tophp registerphp callback
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp pushAutoloaderphp(php$callbackphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php php$autoloadersphp php=php php$thisphp-php>getAutoloadersphp(php)php;
php php php php php php php php arrayphp_pushphp(php$autoloadersphp,php php$callbackphp)php;
php php php php php php php php php$thisphp-php>setAutoloadersphp(php$autoloadersphp)php;

php php php php php php php php php$namespacephp php=php php(arrayphp)php php$namespacephp;
php php php php php php php php foreachphp php(php$namespacephp asphp php$nsphp)php php{
php php php php php php php php php php php php php$autoloadersphp php=php php$thisphp-php>getNamespaceAutoloadersphp(php$nsphp)php;
php php php php php php php php php php php php arrayphp_pushphp(php$autoloadersphp,php php$callbackphp)php;
php php php php php php php php php php php php php$thisphp-php>php_setNamespaceAutoloadersphp(php$autoloadersphp,php php$nsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp autoloaderphp fromphp thephp autoloaderphp stack
php php php php php php*
php php php php php php*php php@paramphp php objectphp|arrayphp|stringphp php$callbackphp PHPphp callbackphp orphp Zendphp_Loaderphp_Autoloaderphp_Interfacephp implementation
php php php php php php*php php@paramphp php nullphp|stringphp|arrayphp php$namespacephp Specificphp namespacephp(sphp)php fromphp whichphp tophp removephp autoloader
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php publicphp functionphp removeAutoloaderphp(php$callbackphp,php php$namespacephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$namespacephp)php php{
php php php php php php php php php php php php php$autoloadersphp php=php php$thisphp-php>getAutoloadersphp(php)php;
php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php(php$indexphp php=php arrayphp_searchphp(php$callbackphp,php php$autoloadersphp,php truephp)php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$autoloadersphp[php$indexphp]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setAutoloadersphp(php$autoloadersphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_namespaceAutoloadersphp asphp php$nsphp php=php>php php$autoloadersphp)php php{
php php php php php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php(php$indexphp php=php arrayphp_searchphp(php$callbackphp,php php$autoloadersphp,php truephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$autoloadersphp[php$indexphp]php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setNamespaceAutoloadersphp(php$autoloadersphp,php php$nsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$namespacephp php=php php(arrayphp)php php$namespacephp;
php php php php php php php php php php php php foreachphp php(php$namespacephp asphp php$nsphp)php php{
php php php php php php php php php php php php php php php php php$autoloadersphp php=php php$thisphp-php>getNamespaceAutoloadersphp(php$nsphp)php;
php php php php php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php(php$indexphp php=php arrayphp_searchphp(php$callbackphp,php php$autoloadersphp,php truephp)php)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$autoloadersphp[php$indexphp]php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_setNamespaceAutoloadersphp(php$autoloadersphp,php php$nsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Registersphp instancephp withphp splphp_autoloadphp stack
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php splphp_autoloadphp_registerphp(arrayphp(php_php_CLASSphp_php_php,php php'autoloadphp'php)php)php;
php php php php php php php php php$thisphp-php>php_internalAutoloaderphp php=php arrayphp(php$thisphp,php php'php_autoloadphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp autoloaderphp implementation
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_autoloadphp(php$classphp)
php php php php php{
php php php php php php php php php$callbackphp php=php php$thisphp-php>getDefaultAutoloaderphp(php)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>suppressNotFoundWarningsphp(php)php)php php{
php php php php php php php php php php php php php php php php php@callphp_userphp_funcphp(php$callbackphp,php php$classphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php callphp_userphp_funcphp(php$callbackphp,php php$classphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$classphp;
php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp autoloadersphp forphp aphp specificphp namespace
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$autoloaders
php php php php php php*php php@paramphp php stringphp php$namespace
php php php php php php*php php@returnphp Zendphp_Loaderphp_Autoloader
php php php php php php*php/
php php php php protectedphp functionphp php_setNamespaceAutoloadersphp(arrayphp php$autoloadersphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php php$namespacephp php=php php(stringphp)php php$namespacephp;
php php php php php php php php php$thisphp-php>php_namespaceAutoloadersphp[php$namespacephp]php php=php php$autoloadersphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp filesystemphp pathphp forphp thephp requestedphp ZFphp version
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$version
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getVersionPathphp(php$pathphp,php php$versionphp)
php php php php php{
php php php php php php php php php$typephp php=php php$thisphp-php>php_getVersionTypephp(php$versionphp)php;

php php php php php php php php ifphp php(php$typephp php=php=php php'latestphp'php)php php{
php php php php php php php php php php php php php$versionphp php=php php'latestphp'php;
php php php php php php php php php}

php php php php php php php php php$availableVersionsphp php=php php$thisphp-php>php_getAvailableVersionsphp(php$pathphp,php php$versionphp)php;
php php php php php php php php ifphp php(emptyphp(php$availableVersionsphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Nophp validphp ZFphp installationsphp discoveredphp'php)php;
php php php php php php php php php}

php php php php php php php php php$matchedVersionphp php=php arrayphp_popphp(php$availableVersionsphp)php;
php php php php php php php php returnphp php$matchedVersionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp ZFphp versionphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$version
php php php php php php*php php@returnphp stringphp php"latestphp"php,php php"majorphp"php,php php"minorphp"php,php orphp php"specificphp"
php php php php php php*php php@throwsphp Zendphp_Loaderphp_Exceptionphp ifphp versionphp stringphp containsphp toophp manyphp dots
php php php php php php*php/
php php php php protectedphp functionphp php_getVersionTypephp(php$versionphp)
php php php php php{
php php php php php php php php ifphp php(strtolowerphp(php$versionphp)php php=php=php php'latestphp'php)php php{
php php php php php php php php php php php php returnphp php'latestphp'php;
php php php php php php php php php}

php php php php php php php php php$partsphp php=php explodephp(php'php.php'php,php php$versionphp)php;
php php php php php php php php php$countphp php=php countphp(php$partsphp)php;
php php php php php php php php ifphp php(php1php php=php=php php$countphp)php php{
php php php php php php php php php php php php returnphp php'majorphp'php;
php php php php php php php php php}
php php php php php php php php ifphp php(php2php php=php=php php$countphp)php php{
php php php php php php php php php php php php returnphp php'minorphp'php;
php php php php php php php php php}
php php php php php php php php ifphp php(php3php <php php$countphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp versionphp stringphp providedphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php'specificphp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp availablephp versionsphp forphp thephp versionphp typephp requested
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$version
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getAvailableVersionsphp(php$pathphp,php php$versionphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_dirphp(php$pathphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Loaderphp_Exceptionphp(php'Invalidphp ZFphp pathphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$pathphp php php php php php php php=php rtrimphp(php$pathphp,php php'php/php'php)php;
php php php php php php php php php$pathphp php php php php php php php=php rtrimphp(php$pathphp,php php'php\php\php'php)php;
php php php php php php php php php$versionLenphp php=php strlenphp(php$versionphp)php;
php php php php php php php php php$versionsphp php php php=php arrayphp(php)php;
php php php php php php php php php$dirsphp php php php php php php php=php globphp(php"php$pathphp/php*php"php,php GLOBphp_ONLYDIRphp)php;
php php php php php php php php foreachphp php(php(arrayphp)php php$dirsphp asphp php$dirphp)php php{
php php php php php php php php php php php php php$dirNamephp php=php substrphp(php$dirphp,php strlenphp(php$pathphp)php php+php php1php)php;
php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php(php?php:ZendFrameworkphp-php)php?php(php\dphp+php\php.php\dphp+php\php.php\dphp+php(php(aphp|bphp|plphp|prphp|pphp|rcphp)php\dphp+php)php?php)php(php?php:php-minimalphp)php?php$php/iphp'php,php php$dirNamephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$matchedVersionphp php=php php$matchesphp[php1php]php;

php php php php php php php php php php php php ifphp php(php(php'latestphp'php php=php=php php$versionphp)
php php php php php php php php php php php php php php php php php|php|php php(php(strlenphp(php$matchedVersionphp)php php>php=php php$versionLenphp)
php php php php php php php php php php php php php php php php php php php php php&php&php php(php0php php=php=php=php strposphp(php$matchedVersionphp,php php$versionphp)php)php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$versionsphp[php$matchedVersionphp]php php=php php$dirphp php.php php'php/libraryphp'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php uksortphp(php$versionsphp,php php'versionphp_comparephp'php)php;
php php php php php php php php returnphp php$versionsphp;
php php php php php}
php}
