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
php php*php php@versionphp php php php php$Idphp:php DefaultValuephp.phpphp php2php1php9php7php9php php2php0php1php0php-php0php4php-php2php4php php1php1php:php0php7php:php1php1Zphp janphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValuephp extendsphp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Constantphp values
php php php php php php*php/
php php php php constphp TYPEphp_AUTOphp php php php php php=php php'autophp'php;
php php php php constphp TYPEphp_BOOLEANphp php php=php php'booleanphp'php;
php php php php constphp TYPEphp_BOOLphp php php php php php=php php'boolphp'php;
php php php php constphp TYPEphp_NUMBERphp php php php=php php'numberphp'php;
php php php php constphp TYPEphp_INTEGERphp php php=php php'integerphp'php;
php php php php constphp TYPEphp_INTphp php php php php php php=php php'intphp'php;
php php php php constphp TYPEphp_FLOATphp php php php php=php php'floatphp'php;
php php php php constphp TYPEphp_DOUBLEphp php php php=php php'doublephp'php;
php php php php constphp TYPEphp_STRINGphp php php php=php php'stringphp'php;
php php php php constphp TYPEphp_ARRAYphp php php php php=php php'arrayphp'php;
php php php php constphp TYPEphp_CONSTANTphp php=php php'constantphp'php;
php php php php constphp TYPEphp_NULLphp php php php php php=php php'nullphp'php;
php php php php constphp TYPEphp_OTHERphp php php php php=php php'otherphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp ofphp reflectedphp constants
php php php php php php*php/
php php php php protectedphp staticphp php$php_constantsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_valuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php php=php selfphp:php:TYPEphp_AUTOphp;

php php php php php/php*php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_arrayDepthphp php=php php1php;

php php php php php/php*php*
php php php php php php*php php_initphp(php)
php php php php php php*
php php php php php php*php Thisphp methodphp willphp preparephp thephp constantphp arrayphp forphp thisphp class
php php php php php php*php/
php php php php protectedphp functionphp php_initphp(php)
php php php php php{
php php php php php php php php ifphp(countphp(selfphp:php:php$php_constantsphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$reflectphp php=php newphp ReflectionClassphp(getphp_classphp(php$thisphp)php)php;
php php php php php php php php php php php php selfphp:php:php$php_constantsphp php=php php$reflectphp-php>getConstantsphp(php)php;
php php php php php php php php php php php php unsetphp(php$reflectphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php isValidConstantTypephp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidConstantTypephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_typephp php=php=php selfphp:php:TYPEphp_AUTOphp)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_getAutoDeterminedTypephp(php$thisphp-php>php_valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_typephp;
php php php php php php php php php}

php php php php php php php php php/php/php validphp typesphp forphp constants
php php php php php php php php php$scalarTypesphp php=php arrayphp(
php php php php php php php php php php php php selfphp:php:TYPEphp_BOOLEANphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_BOOLphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_NUMBERphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_INTEGERphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_INTphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_FLOATphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_DOUBLEphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_STRINGphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_CONSTANTphp,
php php php php php php php php php php php php selfphp:php:TYPEphp_NULL
php php php php php php php php php php php php php)php;

php php php php php php php php returnphp inphp_arrayphp(php$typephp,php php$scalarTypesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setValuephp(php)
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValue
php php php php php php*php/
php php php php publicphp functionphp setValuephp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getValuephp(php)
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setTypephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValue
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
php php php php php php*php setArrayDepthphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp php$arrayDepth
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValue
php php php php php php*php/
php php php php publicphp functionphp setArrayDepthphp(php$arrayDepthphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_arrayDepthphp php=php php$arrayDepthphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getArrayDepthphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getArrayDepthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_arrayDepthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getValidatedTypephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getValidatedTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php(php$constNamephp php=php arrayphp_searchphp(php$typephp,php selfphp:php:php$php_constantsphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php$typephp;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:TYPEphp_AUTOphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_getAutoDeterminedTypephp(php)
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_getAutoDeterminedTypephp(php$valuephp)
php php php php php{
php php php php php php php php switchphp php(gettypephp(php$valuephp)php)php php{
php php php php php php php php php php php php casephp php'booleanphp'php:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_BOOLEANphp;
php php php php php php php php php php php php casephp php'integerphp'php:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_INTphp;
php php php php php php php php php php php php casephp php'stringphp'php:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_STRINGphp;
php php php php php php php php php php php php casephp php'doublephp'php:
php php php php php php php php php php php php casephp php'floatphp'php:
php php php php php php php php php php php php casephp php'integerphp'php:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_NUMBERphp;
php php php php php php php php php php php php casephp php'arrayphp'php:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_ARRAYphp;
php php php php php php php php php php php php casephp php'NULLphp'php:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_NULLphp;
php php php php php php php php php php php php casephp php'objectphp'php:
php php php php php php php php php php php php casephp php'resourcephp'php:
php php php php php php php php php php php php casephp php'unknownphp typephp'php:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp selfphp:php:TYPEphp_OTHERphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php php$typephp php=php php$thisphp-php>php_typephp;

php php php php php php php php ifphp php(php$typephp php!php=php selfphp:php:TYPEphp_AUTOphp)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_getValidatedTypephp(php$typephp)php;
php php php php php php php php php}

php php php php php php php php php$valuephp php=php php$thisphp-php>php_valuephp;

php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:TYPEphp_AUTOphp)php php{
php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_getAutoDeterminedTypephp(php$valuephp)php;

php php php php php php php php php php php php ifphp php(php$typephp php=php=php selfphp:php:TYPEphp_ARRAYphp)php php{
php php php php php php php php php php php php php php php php php$riiphp php=php newphp RecursiveIteratorIteratorphp(
php php php php php php php php php php php php php php php php php php php php php$itphp php=php newphp RecursiveArrayIteratorphp(php$valuephp)php,
php php php php php php php php php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRST
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$riiphp asphp php$curKeyphp php=php>php php$curValuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$curValuephp instanceofphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$curValuephp php=php newphp selfphp(arrayphp(php'valuephp'php php=php>php php$curValuephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$riiphp-php>getSubIteratorphp(php)php-php>offsetSetphp(php$curKeyphp,php php$curValuephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$curValuephp-php>setArrayDepthphp(php$riiphp-php>getDepthphp(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$valuephp php=php php$riiphp-php>getSubIteratorphp(php)php-php>getArrayCopyphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php php$outputphp php=php php'php'php;

php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_BOOLEANphp:
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_BOOLphp:
php php php php php php php php php php php php php php php php php$outputphp php.php=php php(php php$valuephp php?php php'truephp'php php:php php'falsephp'php php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_STRINGphp:
php php php php php php php php php php php php php php php php php$outputphp php.php=php php"php'php"php php.php addcslashesphp(php$valuephp,php php"php'php"php)php php.php php"php'php"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_NULLphp:
php php php php php php php php php php php php php php php php php$outputphp php.php=php php'nullphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_NUMBERphp:
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_INTEGERphp:
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_INTphp:
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_FLOATphp:
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_DOUBLEphp:
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_CONSTANTphp:
php php php php php php php php php php php php php php php php php$outputphp php.php=php php$valuephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_ARRAYphp:
php php php php php php php php php php php php php php php php php$outputphp php.php=php php'arrayphp(php'php;
php php php php php php php php php php php php php php php php php$curArrayMultiblockphp php=php falsephp;
php php php php php php php php php php php php php php php php ifphp php(countphp(php$valuephp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$curArrayMultiblockphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php PHPphp_EOLphp php.php strphp_repeatphp(php$thisphp-php>php_indentationphp,php php$thisphp-php>php_arrayDepthphp+php1php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$outputPartsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$noKeyIndexphp php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$nphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php php php php php$vphp-php>setArrayDepthphp(php$thisphp-php>php_arrayDepthphp php+php php1php)php;
php php php php php php php php php php php php php php php php php php php php php$partVphp php=php php$vphp-php>generatephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$partVphp php=php substrphp(php$partVphp,php php0php,php strlenphp(php$partVphp)php-php1php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$nphp php=php=php=php php$noKeyIndexphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputPartsphp[php]php php=php php$partVphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$noKeyIndexphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$outputPartsphp[php]php php=php php(isphp_intphp(php$nphp)php php?php php$nphp php:php php"php'php"php php.php addcslashesphp(php$nphp,php php"php'php"php)php php.php php"php'php"php)php php.php php'php php=php>php php'php php.php php$partVphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$outputphp php.php=php implodephp(php'php,php'php php.php PHPphp_EOLphp php.php strphp_repeatphp(php$thisphp-php>php_indentationphp,php php$thisphp-php>php_arrayDepthphp+php1php)php,php php$outputPartsphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$curArrayMultiblockphp php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$outputphp php.php=php PHPphp_EOLphp php.php strphp_repeatphp(php$thisphp-php>php_indentationphp,php php$thisphp-php>php_arrayDepthphp+php1php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$outputphp php.php=php php'php)php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TYPEphp_OTHERphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/CodeGeneratorphp/Phpphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_CodeGeneratorphp_Phpphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php"Typephp php'php"php.getphp_classphp(php$valuephp)php.php"php'php isphp unknownphp orphp cannotphp bephp usedphp asphp propertyphp defaultphp valuephp.php"
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$outputphp php.php=php php'php;php'php;

php php php php php php php php returnphp php$outputphp;
php php php php php}
php}
