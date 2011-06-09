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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filterphp.phpphp php2php1php0php9php6php php2php0php1php0php-php0php2php-php1php9php php2php0php:php1php0php:php5php4Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp implementsphp Zendphp_Filterphp_Interface
php{

php php php php constphp CHAINphp_APPENDphp php php=php php'appendphp'php;
php php php php constphp CHAINphp_PREPENDphp php=php php'prependphp'php;

php php php php php/php*php*
php php php php php php*php Filterphp chain
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_filtersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp Namespaces
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultNamespacesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Addsphp aphp filterphp tophp thephp chain
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*php php@paramphp php stringphp php$placement
php php php php php php*php php@returnphp Zendphp_Filterphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp,php php$placementphp php=php selfphp:php:CHAINphp_APPENDphp)
php php php php php{
php php php php php php php php ifphp php(php$placementphp php=php=php selfphp:php:CHAINphp_PREPENDphp)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$thisphp-php>php_filtersphp,php php$filterphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_filtersphp[php]php php=php php$filterphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp filterphp tophp thephp endphp ofphp thephp chain
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*php php@returnphp Zendphp_Filterphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp appendFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>addFilterphp(php$filterphp,php selfphp:php:CHAINphp_APPENDphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp filterphp tophp thephp startphp ofphp thephp chain
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*php php@returnphp Zendphp_Filterphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp prependFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>addFilterphp(php$filterphp,php selfphp:php:CHAINphp_PREPENDphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp thephp filters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFiltersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_filtersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp php$valuephp filteredphp throughphp eachphp filterphp inphp thephp chain
php php php php php php*
php php php php php php*php Filtersphp arephp runphp inphp thephp orderphp inphp whichphp theyphp werephp addedphp tophp thephp chainphp php(FIFOphp)
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php php$valueFilteredphp php=php php$valuephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_filtersphp asphp php$filterphp)php php{
php php php php php php php php php php php php php$valueFilteredphp php=php php$filterphp-php>filterphp(php$valueFilteredphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valueFilteredphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp defaultphp namespaces
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultNamespacesphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_defaultNamespacesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp newphp defaultphp namespaces
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$namespace
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultNamespacesphp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php arrayphp(php(stringphp)php php$namespacephp)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_defaultNamespacesphp php=php php$namespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp newphp defaultphp namespace
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$namespace
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp addDefaultNamespacesphp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$namespacephp php=php arrayphp(php(stringphp)php php$namespacephp)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_defaultNamespacesphp php=php arrayphp_uniquephp(arrayphp_mergephp(selfphp:php:php$php_defaultNamespacesphp,php php$namespacephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp defaultNamespacesphp arephp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasDefaultNamespacesphp(php)
php php php php php{
php php php php php php php php returnphp php(php!emptyphp(selfphp:php:php$php_defaultNamespacesphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@deprecated
php php php php php php*php php@seephp Zendphp_Filterphp:php:filterStaticphp(php)
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php php php php php php$value
php php php php php php*php php@paramphp php stringphp php php php php php php php$classBaseName
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$argsphp php php php php php php php php php OPTIONAL
php php php php php php*php php@paramphp php arrayphp|stringphp php$namespacesphp php php php OPTIONAL
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp getphp(php$valuephp,php php$classBaseNamephp,php arrayphp php$argsphp php=php arrayphp(php)php,php php$namespacesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php triggerphp_errorphp(
php php php php php php php php php php php php php'Zendphp_Filterphp:php:getphp(php)php isphp deprecatedphp asphp ofphp php1php.php9php.php0php;php pleasephp updatephp yourphp codephp tophp utilizephp Zendphp_Filterphp:php:filterStaticphp(php)php'php,
php php php php php php php php php php php php Ephp_USERphp_NOTICE
php php php php php php php php php)php;

php php php php php php php php returnphp selfphp:php:filterStaticphp(php$valuephp,php php$classBaseNamephp,php php$argsphp,php php$namespacesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp valuephp filteredphp throughphp aphp specifiedphp filterphp classphp,php withoutphp requiringphp separate
php php php php php php*php instantiationphp ofphp thephp filterphp objectphp.
php php php php php php*
php php php php php php*php Thephp firstphp argumentphp ofphp thisphp methodphp isphp aphp dataphp inputphp valuephp,php thatphp youphp wouldphp havephp filteredphp.
php php php php php php*php Thephp secondphp argumentphp isphp aphp stringphp,php whichphp correspondsphp tophp thephp basenamephp ofphp thephp filterphp classphp,
php php php php php php*php relativephp tophp thephp Zendphp_Filterphp namespacephp.php Thisphp methodphp automaticallyphp loadsphp thephp classphp,
php php php php php php*php createsphp anphp instancephp,php andphp appliesphp thephp filterphp(php)php methodphp tophp thephp dataphp inputphp.php Youphp canphp alsophp pass
php php php php php php*php anphp arrayphp ofphp constructorphp argumentsphp,php ifphp theyphp arephp neededphp forphp thephp filterphp classphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php php php php php php php php$value
php php php php php php*php php@paramphp php stringphp php php php php php php php$classBaseName
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$argsphp php php php php php php php php php OPTIONAL
php php php php php php*php php@paramphp php arrayphp|stringphp php$namespacesphp php php php OPTIONAL
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Filterphp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp filterStaticphp(php$valuephp,php php$classBaseNamephp,php arrayphp php$argsphp php=php arrayphp(php)php,php php$namespacesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php$namespacesphp php=php arrayphp_mergephp(php(arrayphp)php php$namespacesphp,php selfphp:php:php$php_defaultNamespacesphp,php arrayphp(php'Zendphp_Filterphp'php)php)php;
php php php php php php php php foreachphp php(php$namespacesphp asphp php$namespacephp)php php{
php php php php php php php php php php php php php$classNamephp php=php php$namespacephp php.php php'php_php'php php.php ucfirstphp(php$classBaseNamephp)php;
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classNamephp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$filephp php=php strphp_replacephp(php'php_php'php,php DIRECTORYphp_SEPARATORphp,php php$classNamephp)php php.php php'php.phpphp'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classNamephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Exceptionphp php$zephp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$classphp php=php newphp ReflectionClassphp(php$classNamephp)php;
php php php php php php php php php php php php ifphp php(php$classphp-php>implementsInterfacephp(php'Zendphp_Filterphp_Interfacephp'php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$classphp-php>hasMethodphp(php'php_php_constructphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstanceArgsphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$objectphp php=php php$classphp-php>newInstancephp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$objectphp-php>filterphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php"Filterphp classphp notphp foundphp fromphp basenamephp php'php$classBaseNamephp'php"php)php;
php php php php php}
php}
