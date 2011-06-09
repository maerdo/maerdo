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
php php*php php@versionphp php php php php$Idphp:php Tagphp.phpphp php2php3php5php6php0php php2php0php1php0php-php1php2php-php1php9php php2php0php:php4php7php:php1php1Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp_Param
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Docblockphp/Tagphp/Paramphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp_Return
php php*php/
requirephp_oncephp php'Zendphp/CodeGeneratorphp/Phpphp/Docblockphp/Tagphp/Returnphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_CodeGenerator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp extendsphp Zendphp_CodeGeneratorphp_Phpphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp staticphp php$php_pluginLoaderphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_descriptionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php fromReflectionphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Reflectionphp_Docblockphp_Tagphp php$reflectionTag
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tag
php php php php php php*php/
php php php php publicphp staticphp functionphp fromReflectionphp(Zendphp_Reflectionphp_Docblockphp_Tagphp php$reflectionTagphp)
php php php php php{
php php php php php php php php php$tagNamephp php=php php$reflectionTagphp-php>getNamephp(php)php;

php php php php php php php php php$codeGenDocblockTagphp php=php selfphp:php:factoryphp(php$tagNamephp)php;

php php php php php php php php php/php/php transportphp anyphp propertiesphp viaphp accessorsphp andphp mutatorsphp fromphp reflectionphp tophp codegenphp object
php php php php php php php php php$reflectionClassphp php=php newphp ReflectionClassphp(php$reflectionTagphp)php;
php php php php php php php php foreachphp php(php$reflectionClassphp-php>getMethodsphp(ReflectionMethodphp:php:ISphp_PUBLICphp)php asphp php$methodphp)php php{
php php php php php php php php php php php php ifphp php(substrphp(php$methodphp-php>getNamephp(php)php,php php0php,php php3php)php php=php=php php'getphp'php)php php{
php php php php php php php php php php php php php php php php php$propertyNamephp php=php substrphp(php$methodphp-php>getNamephp(php)php,php php3php)php;
php php php php php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$codeGenDocblockTagphp,php php'setphp'php php.php php$propertyNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$codeGenDocblockTagphp-php>php{php'setphp'php php.php php$propertyNamephp}php(php$reflectionTagphp-php>php{php'getphp'php php.php php$propertyNamephp}php(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$codeGenDocblockTagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setPluginLoaderphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Loaderphp_PluginLoaderphp php$pluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp setPluginLoaderphp(Zendphp_Loaderphp_PluginLoaderphp php$pluginLoaderphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_pluginLoaderphp php=php php$pluginLoaderphp;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPluginLoaderphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getPluginLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_pluginLoaderphp php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;
php php php php php php php php php php php php selfphp:php:setPluginLoaderphp(newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp'php php=php>php dirnamephp(php_php_FILEphp_php_php)php php.php php'php/Tagphp/php'php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_pluginLoaderphp;
php php php php php}

php php php php publicphp staticphp functionphp factoryphp(php$tagNamephp)
php php php php php{
php php php php php php php php php$pluginLoaderphp php=php selfphp:php:getPluginLoaderphp(php)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$tagClassphp php=php php$pluginLoaderphp-php>loadphp(php$tagNamephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Loaderphp_Exceptionphp php$exceptionphp)php php{
php php php php php php php php php php php php php$tagClassphp php=php php'Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tagphp'php;
php php php php php php php php php}

php php php php php php php php php$tagphp php=php newphp php$tagClassphp(arrayphp(php'namephp'php php=php>php php$tagNamephp)php)php;
php php php php php php php php returnphp php$tagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setNamephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tag
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_namephp php=php ltrimphp(php$namephp,php php'php@php'php)php;
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
php php php php php php*php setDescriptionphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$description
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Docblockphp_Tag
php php php php php php*php/
php php php php publicphp functionphp setDescriptionphp(php$descriptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_descriptionphp php=php php$descriptionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getDescriptionphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_descriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php generatephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp generatephp(php)
php php php php php{
php php php php php php php php php$tagphp php=php php'php@php'php php.php php$thisphp-php>php_namephp;
php php php php php php php php ifphp php(php$thisphp-php>php_descriptionphp)php php{
php php php php php php php php php php php php php$tagphp php.php=php php'php php'php php.php php$thisphp-php>php_descriptionphp;
php php php php php php php php php}
php php php php php php php php returnphp php$tagphp;
php php php php php}

php}
