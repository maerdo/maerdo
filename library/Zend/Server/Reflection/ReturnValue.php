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
php php*php Returnphp valuephp reflection
php php*
php php*php Storesphp thephp returnphp valuephp typephp andphp description
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php$Idphp:php ReturnValuephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Serverphp_Reflectionphp_ReturnValue
php{
php php php php php/php*php*
php php php php php php*php Returnphp valuephp type
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp;

php php php php php/php*php*
php php php php php php*php Returnphp valuephp description
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_descriptionphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp Returnphp valuephp type
php php php php php php*php php@paramphp stringphp php$descriptionphp Returnphp valuephp type
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$typephp php=php php'mixedphp'php,php php$descriptionphp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>setTypephp(php$typephp)php;
php php php php php php php php php$thisphp-php>setDescriptionphp(php$descriptionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp parameterphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parameterphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp|nullphp php$type
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$typephp)php php&php&php php(nullphp php!php=php=php php$typephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp parameterphp typephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp parameterphp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_descriptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp parameterphp description
php php php php php php*
php php php php php php*php php@paramphp stringphp|nullphp php$description
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDescriptionphp(php$descriptionphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$descriptionphp)php php&php&php php(nullphp php!php=php=php php$descriptionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Reflectionphp_Exceptionphp(php'Invalidphp parameterphp descriptionphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_descriptionphp php=php php$descriptionphp;
php php php php php}
php}
