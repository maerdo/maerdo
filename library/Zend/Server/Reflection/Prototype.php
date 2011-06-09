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
php php*php Zendphp_Serverphp_Reflectionphp_ReturnValue
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/ReturnValuephp.phpphp'php;

php/php*php*
php php*php Zendphp_Serverphp_Reflectionphp_Parameter
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Parameterphp.phpphp'php;

php/php*php*
php php*php Methodphp/Functionphp prototypes
php php*
php php*php Containsphp accessorsphp forphp thephp returnphp valuephp andphp allphp methodphp argumentsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Prototypephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Serverphp_Reflectionphp_Prototype
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Serverphp_Reflectionphp_ReturnValuephp php$return
php php php php php php*php php@paramphp arrayphp php$params
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Serverphp_Reflectionphp_ReturnValuephp php$returnphp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_returnphp php=php php$returnphp;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$paramsphp)php php&php&php php(nullphp php!php=php=php php$paramsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp parametersphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$paramsphp asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$paramphp instanceofphp Zendphp_Serverphp_Reflectionphp_Parameterphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Onephp orphp morephp paramsphp arephp invalidphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_paramsphp php=php php$paramsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp returnphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getReturnTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_returnphp-php>getTypephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp returnphp valuephp object
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*php php@returnphp Zendphp_Serverphp_Reflectionphp_ReturnValue
php php php php php php*php/
php php php php publicphp functionphp getReturnValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp methodphp parameters
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp php{php@linkphp Zendphp_Serverphp_Reflectionphp_Parameterphp}s
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_paramsphp;
php php php php php}
php}
