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
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@subpackagephp PHP
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Parameterphp.phpphp php2php1php8php8php9php php2php0php1php0php-php0php4php-php1php6php php1php8php:php4php0php:php5php0Zphp juokazphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_ParameterDefaultValue
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Parameterphp/DefaultValuephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp extendsphp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultValuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_positionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_passedByReferencephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php fromReflectionphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Reflectionphp_Parameterphp php$reflectionParameter
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp staticphp functionphp fromReflectionphp(Zendphp_Reflectionphp_Parameterphp php$reflectionParameterphp)
php php php php php{
php php php php php php php php php$paramphp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp(php)php;
php php php php php php php php php$paramphp-php>setNamephp(php$reflectionParameterphp-php>getNamephp(php)php)php;

php php php php php php php php ifphp(php$reflectionParameterphp-php>isArrayphp(php)php)php php{
php php php php php php php php php php php php php$paramphp-php>setTypephp(php'arrayphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$typeClassphp php=php php$reflectionParameterphp-php>getClassphp(php)php;
php php php php php php php php php php php php ifphp(php$typeClassphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$paramphp-php>setTypephp(php$typeClassphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$paramphp-php>setPositionphp(php$reflectionParameterphp-php>getPositionphp(php)php)php;

php php php php php php php php ifphp(php$reflectionParameterphp-php>isOptionalphp(php)php)php php{
php php php php php php php php php php php php php$paramphp-php>setDefaultValuephp(php$reflectionParameterphp-php>getDefaultValuephp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$paramphp-php>setPassedByReferencephp(php$reflectionParameterphp-php>isPassedByReferencephp(php)php)php;

php php php php php php php php returnphp php$paramphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setTypephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getTypephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp valuephp ofphp thephp parameterphp.
php php php php php php*
php php php php php php*php Certainphp variablesphp arephp difficultphp tophp expres
php php php php php php*
php php php php php php*php php@paramphp nullphp|boolphp|stringphp|intphp|floatphp|Zendphp_CodeGeneratorphp_Phpphp_Parameterphp_DefaultValuephp php$defaultValue
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setDefaultValuephp(php$defaultValuephp)
php php php php php{
php php php php php php php php ifphp(php$defaultValuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultValuephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp_DefaultValuephp(php"nullphp"php)php;
php php php php php php php php php}php elsephp ifphp(isphp_arrayphp(php$defaultValuephp)php)php php{
php php php php php php php php php php php php php$defaultValuephp php=php strphp_replacephp(arrayphp(php"php\rphp"php,php php"php\nphp"php)php,php php"php"php,php varphp_exportphp(php$defaultValuephp,php truephp)php)php;
php php php php php php php php php php php php php$thisphp-php>php_defaultValuephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp_DefaultValuephp(php$defaultValuephp)php;
php php php php php php php php php}php elsephp ifphp(isphp_boolphp(php$defaultValuephp)php)php php{
php php php php php php php php php php php php ifphp(php$defaultValuephp php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_defaultValuephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp_DefaultValuephp(php"truephp"php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_defaultValuephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp_DefaultValuephp(php"falsephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_defaultValuephp php=php php$defaultValuephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getDefaultValuephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDefaultValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setPositionphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp php$position
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setPositionphp(php$positionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_positionphp php=php php$positionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPositionphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getPositionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_positionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getPassedByReferencephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_passedByReferencephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp boolphp php$passedByReference
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp setPassedByReferencephp(php$passedByReferencephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_passedByReferencephp php=php php$passedByReferencephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php php$outputphp php=php php'php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_typephp)php php{
php php php php php php php php php php php php php$outputphp php.php=php php$thisphp-php>php_typephp php.php php'php php'php;
php php php php php php php php php}

php php php php php php php php ifphp(php$thisphp-php>php_passedByReferencephp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$outputphp php.php=php php'php&php'php;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php'php$php'php php.php php$thisphp-php>php_namephp;

php php php php php php php php ifphp php(php$thisphp-php>php_defaultValuephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$outputphp php.php=php php'php php=php php'php;
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$thisphp-php>php_defaultValuephp)php)php php{
php php php php php php php php php php php php php php php php php$outputphp php.php=php php'php\php'php'php php.php php$thisphp-php>php_defaultValuephp php.php php'php\php'php'php;
php php php php php php php php php php php php php}php elsephp ifphp(php$thisphp-php>php_defaultValuephp instanceofphp Zendphp_CodeGeneratorphp_Phpphp_Parameterphp_DefaultValuephp)php php{
php php php php php php php php php php php php php php php php php$outputphp php.php=php php(stringphp)php$thisphp-php>php_defaultValuephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$outputphp php.php=php php$thisphp-php>php_defaultValuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$outputphp;
php php php php php}

php}