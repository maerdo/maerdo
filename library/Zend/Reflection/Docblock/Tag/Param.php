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
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Paramphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Reflectionphp_Docblockphp_Tagphp php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Docblockphp/Tagphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Reflectionphp_Docblockphp_Tagphp_Paramphp extendsphp Zendphp_Reflectionphp_Docblockphp_Tag
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_variableNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tagDocblockLine
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$tagDocblockLinephp)
php php php php php{
php php php php php php php php php$matchesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!pregphp_matchphp(php'php#php^php@php(php\wphp+php)php\sphp+php(php[php\wphp|php\php\php\php]php+php)php(php?php:php\sphp+php(php\php$php\Sphp+php)php)php?php(php?php:php\sphp+php(php.php*php)php)php?php#sphp'php,php php$tagDocblockLinephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Providedphp docblockphp linephp isphp doesphp notphp containphp aphp validphp tagphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$matchesphp[php1php]php php!php=php php'paramphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Providedphp docblockphp linephp isphp doesphp notphp containphp aphp validphp php@paramphp tagphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_namephp php=php php'paramphp'php;
php php php php php php php php php$thisphp-php>php_typephp php=php php$matchesphp[php2php]php;

php php php php php php php php ifphp php(issetphp(php$matchesphp[php3php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_variableNamephp php=php php$matchesphp[php3php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$matchesphp[php4php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_descriptionphp php=php pregphp_replacephp(php'php#php\sphp+php#php'php,php php'php php'php,php php$matchesphp[php4php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp parameterphp variablephp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp parameterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getVariableNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_variableNamephp;
php php php php php}
php}
