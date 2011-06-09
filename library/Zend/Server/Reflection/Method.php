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
php php*php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Functionphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Methodphp Reflection
php php*
php php*php php@usesphp php php php php php php Zendphp_Serverphp_Reflectionphp_Functionphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php Methodphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Serverphp_Reflectionphp_Methodphp extendsphp Zendphp_Serverphp_Reflectionphp_Functionphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Parentphp classphp name
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_classphp;

php php php php php/php*php*
php php php php php php*php Parentphp classphp reflection
php php php php php php*php php@varphp Zendphp_Serverphp_Reflectionphp_Class
php php php php php php*php/
php php php php protectedphp php$php_classReflectionphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Serverphp_Reflectionphp_Classphp php$class
php php php php php php*php php@paramphp ReflectionMethodphp php$r
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@paramphp arrayphp php$argv
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Serverphp_Reflectionphp_Classphp php$classphp,php ReflectionMethodphp php$rphp,php php$namespacephp php=php nullphp,php php$argvphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_classReflectionphp php=php php$classphp;
php php php php php php php php php$thisphp-php>php_reflectionphp php php php php php php=php php$rphp;

php php php php php php php php php$classNamespacephp php=php php$classphp-php>getNamespacephp(php)php;

php php php php php php php php php/php/php Determinephp namespace
php php php php php php php php ifphp php(php!emptyphp(php$namespacephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setNamespacephp(php$namespacephp)php;
php php php php php php php php php}php elseifphp php(php!emptyphp(php$classNamespacephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setNamespacephp(php$classNamespacephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Determinephp arguments
php php php php php php php php ifphp php(isphp_arrayphp(php$argvphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_argvphp php=php php$argvphp;
php php php php php php php php php}

php php php php php php php php php/php/php Ifphp methodphp callphp,php needphp tophp storephp somephp infophp onphp thephp class
php php php php php php php php php$thisphp-php>php_classphp php=php php$classphp-php>getNamephp(php)php;

php php php php php php php php php/php/php Performphp somephp introspection
php php php php php php php php php$thisphp-php>php_reflectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp reflectionphp forphp thephp classphp thatphp definesphp thisphp method
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Serverphp_Reflectionphp_Class
php php php php php php*php/
php php php php publicphp functionphp getDeclaringClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_classReflectionphp;
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
php php php php php php php php php$thisphp-php>php_classReflectionphp php=php newphp Zendphp_Serverphp_Reflectionphp_Classphp(newphp ReflectionClassphp(php$thisphp-php>php_classphp)php,php php$thisphp-php>getNamespacephp(php)php,php php$thisphp-php>getInvokeArgumentsphp(php)php)php;
php php php php php php php php php$thisphp-php>php_reflectionphp php=php newphp ReflectionMethodphp(php$thisphp-php>php_classReflectionphp-php>getNamephp(php)php,php php$thisphp-php>getNamephp(php)php)php;
php php php php php}

php}
