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
php php*php/

php/php*php*
php php*php Zendphp_Serverphp_Reflectionphp_Method
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Methodphp.phpphp'php;

php/php*php*
php php*php Classphp/Objectphp reflection
php php*
php php*php Proxiesphp callsphp tophp aphp ReflectionClassphp objectphp,php andphp decoratesphp getMethodsphp(php)php by
php php*php creatingphp itsphp ownphp listphp ofphp php{php@linkphp Zendphp_Serverphp_Reflectionphp_Methodphp}sphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Classphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Serverphp_Reflectionphp_Class
php{
php php php php php/php*php*
php php php php php php*php Optionalphp configurationphp parametersphp;php accessiblephp viaphp php{php@linkphp php_php_getphp}php and
php php php php php php*php php{php@linkphp php_php_setphp(php)php}
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_configphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp php{php@linkphp Zendphp_Serverphp_Reflectionphp_Methodphp}s
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_methodsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Namespace
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namespacephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php ReflectionClassphp object
php php php php php php*php php@varphp ReflectionClass
php php php php php php*php/
php php php php protectedphp php$php_reflectionphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Createphp arrayphp ofphp dispatchablephp methodsphp,php eachphp a
php php php php php php*php php{php@linkphp Zendphp_Serverphp_Reflectionphp_Methodphp}php.php Setsphp reflectionphp objectphp propertyphp.
php php php php php php*
php php php php php php*php php@paramphp ReflectionClassphp php$reflection
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@paramphp mixedphp php$argv
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(ReflectionClassphp php$reflectionphp,php php$namespacephp php=php nullphp,php php$argvphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_reflectionphp php=php php$reflectionphp;
php php php php php php php php php$thisphp-php>setNamespacephp(php$namespacephp)php;

php php php php php php php php foreachphp php(php$reflectionphp-php>getMethodsphp(php)php asphp php$methodphp)php php{
php php php php php php php php php php php php php/php/php Donphp'tphp aggregatephp magicphp methods
php php php php php php php php php php php php ifphp php(php'php_php_php'php php=php=php substrphp(php$methodphp-php>getNamephp(php)php,php php0php,php php2php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$methodphp-php>isPublicphp(php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Getphp signaturesphp andphp description
php php php php php php php php php php php php php php php php php$thisphp-php>php_methodsphp[php]php php=php newphp Zendphp_Serverphp_Reflectionphp_Methodphp(php$thisphp,php php$methodphp,php php$thisphp-php>getNamespacephp(php)php,php php$argvphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp reflectionphp calls
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_reflectionphp,php php$methodphp)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_reflectionphp,php php$methodphp)php,php php$argsphp)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp methodphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp configurationphp parameters
php php php php php php*
php php php php php php*php Valuesphp arephp retrievedphp byphp keyphp fromphp php{php@linkphp php$php_configphp}php.php Returnsphp nullphp ifphp no
php php php php php php*php valuephp foundphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_configphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_configphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp configurationphp parameters
php php php php php php*
php php php php php php*php Valuesphp arephp storedphp byphp php$keyphp inphp php{php@linkphp php$php_configphp}php.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_configphp[php$keyphp]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp arrayphp ofphp dispatchablephp php{php@linkphp Zendphp_Serverphp_Reflectionphp_Methodphp}sphp.
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMethodsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp namespacephp forphp thisphp class
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp namespacephp forphp thisphp class
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setNamespacephp(php$namespacephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_namespacephp php=php php'php'php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$namespacephp)php php|php|php php!pregphp_matchphp(php'php/php[aphp-zphp0php-php9php_php\php.php]php+php/iphp'php,php php$namespacephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp namespacephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_namespacephp php=php php$namespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Wakeupphp fromphp serialization
php php php php php php*
php php php php php php*php Reflectionphp needsphp explicitphp instantiationphp tophp workphp correctlyphp.php Rephp-instantiate
php php php php php php*php reflectionphp objectphp onphp wakeupphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_reflectionphp php=php newphp ReflectionClassphp(php$thisphp-php>getNamephp(php)php)php;
php php php php php}
php}
