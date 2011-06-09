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
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php2php1php0php php2php0php1php0php-php0php1php-php1php2php php0php2php:php0php6php:php3php4Zphp yoshidaphp@zendphp.cophp.jpphp php$
php php*php/


php/php*php*
php php*php Interfacephp classphp forphp Zendphp_Viewphp compatiblephp templatephp enginephp implementations
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Viewphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Returnphp thephp templatephp enginephp objectphp,php ifphp any
php php php php php php*
php php php php php php*php Ifphp usingphp aphp thirdphp-partyphp templatephp enginephp,php suchphp asphp Smartyphp,php patTemplatephp,
php php php php php php*php phplibphp,php etcphp,php returnphp thephp templatephp enginephp objectphp.php Usefulphp forphp calling
php php php php php php*php methodsphp onphp thesephp objectsphp,php suchphp asphp forphp settingphp filtersphp,php modifiersphp,php etcphp.
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getEnginephp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp thephp pathphp tophp findphp thephp viewphp scriptphp usedphp byphp renderphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp Thephp directoryphp php(php-iesphp)php tophp setphp asphp thephp pathphp.php Notephp that
php php php php php php*php thephp concretephp viewphp implentationphp mayphp notphp necessarilyphp supportphp multiple
php php php php php php*php directoriesphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setScriptPathphp(php$pathphp)php;

php php php php php/php*php*
php php php php php php*php Retrievephp allphp viewphp scriptphp paths
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getScriptPathsphp(php)php;

php php php php php/php*php*
php php php php php php*php Setphp aphp basephp pathphp tophp allphp viewphp resources
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$classPrefix
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setBasePathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp'php)php;

php php php php php/php*php*
php php php php php php*php Addphp anphp additionalphp pathphp tophp viewphp resources
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@paramphp php stringphp php$classPrefix
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addBasePathphp(php$pathphp,php php$classPrefixphp php=php php'Zendphp_Viewphp'php)php;

php php php php php/php*php*
php php php php php php*php Assignphp aphp variablephp tophp thephp view
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyphp Thephp variablephp namephp.
php php php php php php*php php@paramphp mixedphp php$valphp Thephp variablephp valuephp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valphp)php;

php php php php php/php*php*
php php php php php php*php Allowsphp testingphp withphp emptyphp(php)php andphp issetphp(php)php tophp work
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)php;

php php php php php/php*php*
php php php php php php*php Allowsphp unsetphp(php)php onphp objectphp propertiesphp tophp work
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)php;

php php php php php/php*php*
php php php php php php*php Assignphp variablesphp tophp thephp viewphp scriptphp viaphp differingphp strategiesphp.
php php php php php php*
php php php php php php*php Suggestedphp implementationphp isphp tophp allowphp settingphp aphp specificphp keyphp tophp the
php php php php php php*php specifiedphp valuephp,php ORphp passingphp anphp arrayphp ofphp keyphp php=php>php valuephp pairsphp tophp setphp en
php php php php php php*php massephp.
php php php php php php*
php php php php php php*php php@seephp php_php_setphp(php)
php php php php php php*php php@paramphp stringphp|arrayphp php$specphp Thephp assignmentphp strategyphp tophp usephp php(keyphp orphp arrayphp ofphp key
php php php php php php*php php=php>php valuephp pairsphp)
php php php php php php*php php@paramphp mixedphp php$valuephp php(Optionalphp)php Ifphp assigningphp aphp namedphp variablephp,php usephp this
php php php php php php*php asphp thephp valuephp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp assignphp(php$specphp,php php$valuephp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Clearphp allphp assignedphp variables
php php php php php php*
php php php php php php*php Clearsphp allphp variablesphp assignedphp tophp Zendphp_Viewphp eitherphp viaphp php{php@linkphp assignphp(php)php}php or
php php php php php php*php propertyphp overloadingphp php(php{php@linkphp php_php_getphp(php)php}php/php{php@linkphp php_php_setphp(php)php}php)php.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp clearVarsphp(php)php;

php php php php php/php*php*
php php php php php php*php Processesphp aphp viewphp scriptphp andphp returnsphp thephp outputphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Thephp scriptphp namephp tophp processphp.
php php php php php php*php php@returnphp stringphp Thephp scriptphp outputphp.
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$namephp)php;
php}
