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
php php*php php@versionphp php php php php$Idphp:php Propertyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Memberphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Memberphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValue
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Propertyphp/DefaultValuephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp extendsphp Zendphp_CodeGeneratorphp_Phpphp_Memberphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isConstphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultValuephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php fromReflectionphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Reflectionphp_Propertyphp php$reflectionProperty
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Property
php php php php php php*php/
php php php php publicphp staticphp functionphp fromReflectionphp(Zendphp_Reflectionphp_Propertyphp php$reflectionPropertyphp)
php php php php php{
php php php php php php php php php$propertyphp php=php newphp selfphp(php)php;

php php php php php php php php php$propertyphp-php>setNamephp(php$reflectionPropertyphp-php>getNamephp(php)php)php;

php php php php php php php php php$allDefaultPropertiesphp php=php php$reflectionPropertyphp-php>getDeclaringClassphp(php)php-php>getDefaultPropertiesphp(php)php;

php php php php php php php php php$propertyphp-php>setDefaultValuephp(php$allDefaultPropertiesphp[php$reflectionPropertyphp-php>getNamephp(php)php]php)php;

php php php php php php php php ifphp php(php$reflectionPropertyphp-php>getDocCommentphp(php)php php!php=php php'php'php)php php{
php php php php php php php php php php php php php$propertyphp-php>setDocblockphp(Zendphp_CodeGeneratorphp_Phpphp_Docblockphp:php:fromReflectionphp(php$reflectionPropertyphp-php>getDocCommentphp(php)php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$reflectionPropertyphp-php>isStaticphp(php)php)php php{
php php php php php php php php php php php php php$propertyphp-php>setStaticphp(truephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$reflectionPropertyphp-php>isPrivatephp(php)php)php php{
php php php php php php php php php php php php php$propertyphp-php>setVisibilityphp(selfphp:php:VISIBILITYphp_PRIVATEphp)php;
php php php php php php php php php}php elseifphp php(php$reflectionPropertyphp-php>isProtectedphp(php)php)php php{
php php php php php php php php php php php php php$propertyphp-php>setVisibilityphp(selfphp:php:VISIBILITYphp_PROTECTEDphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$propertyphp-php>setVisibilityphp(selfphp:php:VISIBILITYphp_PUBLICphp)php;
php php php php php php php php php}

php php php php php php php php php$propertyphp-php>setSourceDirtyphp(falsephp)php;

php php php php php php php php returnphp php$propertyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setConstphp(php)
php php php php php php*
php php php php php php*php php@paramphp boolphp php$const
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Property
php php php php php php*php/
php php php php publicphp functionphp setConstphp(php$constphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_isConstphp php=php php$constphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php isConstphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isConstphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_isConstphp)php php?php truephp php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setDefaultValuephp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValuephp|stringphp|arrayphp php$defaultValue
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Property
php php php php php php*php/
php php php php publicphp functionphp setDefaultValuephp(php$defaultValuephp)
php php php php php{
php php php php php php php php php/php/php ifphp itphp looksphp like
php php php php php php php php ifphp php(isphp_arrayphp(php$defaultValuephp)
php php php php php php php php php php php php php&php&php arrayphp_keyphp_existsphp(php'valuephp'php,php php$defaultValuephp)
php php php php php php php php php php php php php&php&php arrayphp_keyphp_existsphp(php'typephp'php,php php$defaultValuephp)php)php php{
php php php php php php php php php php php php php$defaultValuephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValuephp(php$defaultValuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$defaultValuephp instanceofphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValuephp)php)php php{
php php php php php php php php php php php php php$defaultValuephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValuephp(arrayphp(php'valuephp'php php=php>php php$defaultValuephp)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_defaultValuephp php=php php$defaultValuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getDefaultValuephp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Propertyphp_DefaultValue
php php php php php php*php/
php php php php publicphp functionphp getDefaultValuephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_defaultValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php php$namephp php php php php php php php php php=php php$thisphp-php>getNamephp(php)php;
php php php php php php php php php$defaultValuephp php=php php$thisphp-php>getDefaultValuephp(php)php;

php php php php php php php php php$outputphp php=php php'php'php;

php php php php php php php php ifphp php(php(php$docblockphp php=php php$thisphp-php>getDocblockphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$docblockphp-php>setIndentationphp(php'php php php php php'php)php;
php php php php php php php php php php php php php$outputphp php.php=php php$docblockphp-php>generatephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>isConstphp(php)php)php php{
php php php php php php php php php php php php ifphp php(php$defaultValuephp php!php=php nullphp php&php&php php!php$defaultValuephp-php>isValidConstantTypephp(php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_CodeGeneratorphp_Phpphp_Exceptionphp(php'Thephp propertyphp php'php php.php php$thisphp-php>php_namephp php.php php'php isphp saidphp tophp bephp php'
php php php php php php php php php php php php php php php php php php php php php.php php'constantphp butphp doesphp notphp havephp aphp validphp constantphp valuephp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$outputphp php.php=php php$thisphp-php>php_indentationphp php.php php'constphp php'php php.php php$namephp php.php php'php php=php php'
php php php php php php php php php php php php php php php php php.php php(php(php$defaultValuephp php!php=php=php nullphp)php php?php php$defaultValuephp-php>generatephp(php)php php:php php'nullphp;php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$outputphp php.php=php php$thisphp-php>php_indentation
php php php php php php php php php php php php php php php php php.php php$thisphp-php>getVisibilityphp(php)
php php php php php php php php php php php php php php php php php.php php(php(php$thisphp-php>isStaticphp(php)php)php php?php php'php staticphp'php php:php php'php'php)
php php php php php php php php php php php php php php php php php.php php'php php$php'php php.php php$namephp php.php php'php php=php php'
php php php php php php php php php php php php php php php php php.php php(php(php$defaultValuephp php!php=php=php nullphp)php php?php php$defaultValuephp-php>generatephp(php)php php:php php'nullphp;php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$outputphp;
php php php php php}

php}
