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
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Definitionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Serverphp methodsphp metadata
php php*
php php*php php@todophp php php php php php php Implementphp iterator
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Definitionphp implementsphp Countablephp,php Iterator
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Definitionphp objects
php php php php php php*php/
php php php php protectedphp php$php_methodsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp overwritingphp existingphp methodsphp isphp allowed
php php php php php php*php/
php php php php protectedphp php$php_overwriteExistingMethodsphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$methods
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$methodsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$methodsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMethodsphp(php$methodsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp flagphp indicatingphp whetherphp orphp notphp overwritingphp existingphp methodsphp isphp allowed
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$flag
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setOverwriteExistingMethodsphp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_overwriteExistingMethodsphp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp methodphp tophp definition
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Serverphp_Methodphp_Definitionphp php$method
php php php php php php*php php@paramphp php nullphp|stringphp php$name
php php php php php php*php php@returnphp Zendphp_Serverphp_Definition
php php php php php php*php php@throwsphp Zendphp_Serverphp_Exceptionphp ifphp duplicatephp orphp invalidphp methodphp provided
php php php php php php*php/
php php php php publicphp functionphp addMethodphp(php$methodphp,php php$namephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Methodphp/Definitionphp.phpphp'php;
php php php php php php php php php php php php php$methodphp php=php newphp Zendphp_Serverphp_Methodphp_Definitionphp(php$methodphp)php;
php php php php php php php php php}php elseifphp php(php!php$methodphp instanceofphp Zendphp_Serverphp_Methodphp_Definitionphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Invalidphp methodphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_numericphp(php$namephp)php)php php{
php php php php php php php php php php php php php$namephp php=php nullphp;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$namephp)php php{
php php php php php php php php php php php php php$methodphp-php>setNamephp(php$namephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$namephp php=php php$methodphp-php>getNamephp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php=php=php=php php$namephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Nophp methodphp namephp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_overwriteExistingMethodsphp php&php&php arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_methodsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(sprintfphp(php'Methodphp byphp namephp ofphp php"php%sphp"php alreadyphp existsphp'php,php php$namephp)php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_methodsphp[php$namephp]php php=php php$methodphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp methods
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$methodsphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Definitionphp objectsphp orphp arrays
php php php php php php*php php@returnphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php publicphp functionphp addMethodsphp(arrayphp php$methodsphp)
php php php php php{
php php php php php php php php foreachphp php(php$methodsphp asphp php$keyphp php=php>php php$methodphp)php php{
php php php php php php php php php php php php php$thisphp-php>addMethodphp(php$methodphp,php php$keyphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp allphp methodsphp atphp oncephp php(overwritephp)
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$methodsphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Definitionphp objectsphp orphp arrays
php php php php php php*php php@returnphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php publicphp functionphp setMethodsphp(arrayphp php$methodsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearMethodsphp(php)php;
php php php php php php php php php$thisphp-php>addMethodsphp(php$methodsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp definitionphp havephp thephp givenphp methodphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasMethodphp(php$methodphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$methodphp,php php$thisphp-php>php_methodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp givenphp methodphp definition
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp nullphp|Zendphp_Serverphp_Methodphp_Definition
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php$methodphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_methodsphp[php$methodphp]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp methodphp definitions
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Serverphp_Methodphp_Definitionphp objects
php php php php php php*php/
php php php php publicphp functionphp getMethodsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp methodphp definition
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php publicphp functionphp removeMethodphp(php$methodphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasMethodphp(php$methodphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_methodsphp[php$methodphp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp methodphp definitions
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Serverphp_Definition
php php php php php php*php/
php php php php publicphp functionphp clearMethodsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_methodsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp definitionphp tophp anphp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$methodsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>getMethodsphp(php)php asphp php$keyphp php=php>php php$methodphp)php php{
php php php php php php php php php php php php php$methodsphp[php$keyphp]php php=php php$methodphp-php>toArrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$methodsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countablephp:php countphp ofphp methods
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_methodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php currentphp item
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp currentphp(php$thisphp-php>php_methodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php currentphp itemphp key
php php php php php php*
php php php php php php*php php@returnphp intphp|string
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp keyphp(php$thisphp-php>php_methodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php advancephp tophp nextphp method
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php returnphp nextphp(php$thisphp-php>php_methodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php returnphp tophp firstphp method
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php returnphp resetphp(php$thisphp-php>php_methodsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Iteratorphp:php isphp thephp currentphp indexphp validphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php(boolphp)php php$thisphp-php>currentphp(php)php;
php php php php php}
php}
