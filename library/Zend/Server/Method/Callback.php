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
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Callbackphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Methodphp callbackphp metadata
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Server
php php*php php@subpackagephp Method
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Serverphp_Methodphp_Callback
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Classphp namephp forphp classphp methodphp callback
php php php php php php*php/
php php php php protectedphp php$php_classphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Functionphp namephp forphp functionphp callback
php php php php php php*php/
php php php php protectedphp php$php_functionphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Methodphp namephp forphp classphp methodphp callback
php php php php php php*php/
php php php php protectedphp php$php_methodphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Callbackphp type
php php php php php php*php/
php php php php protectedphp php$php_typephp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Validphp callbackphp types
php php php php php php*php/
php php php php protectedphp php$php_typesphp php=php arrayphp(php'functionphp'php,php php'staticphp'php,php php'instancephp'php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(nullphp php!php=php=php php$optionsphp)php php&php&php isphp_arrayphp(php$optionsphp)php)php php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp objectphp statephp fromphp arrayphp ofphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php ucfirstphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setClassphp(php$classphp)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$classphp)php)php php{
php php php php php php php php php php php php php$classphp php=php getphp_classphp(php$classphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_classphp php=php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp callbackphp class
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_classphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp function
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$function
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setFunctionphp(php$functionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_functionphp php=php php(stringphp)php php$functionphp;
php php php php php php php php php$thisphp-php>setTypephp(php'functionphp'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp callbackphp function
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getFunctionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_functionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp classphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setMethodphp(php$methodphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_methodphp php=php php$methodphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp callbackphp classphp php method
php php php php php php*
php php php php php php*php php@returnphp nullphp|string
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_methodphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp callbackphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Serverphp_Methodphp_Callback
php php php php php php*php php@throwsphp Zendphp_Serverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_typesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Invalidphp methodphp callbackphp typephp php passedphp tophp php'php php.php php_php_CLASSphp_php_php php.php php'php:php:php'php php.php php_php_METHODphp_php_php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_typephp php=php php$typephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp callbackphp type
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_typephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp callbackphp tophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php php$typephp php=php php$thisphp-php>getTypephp(php)php;
php php php php php php php php php$arrayphp php=php arrayphp(
php php php php php php php php php php php php php'typephp'php php=php>php php$typephp,
php php php php php php php php php)php;
php php php php php php php php ifphp php(php'functionphp'php php=php=php php$typephp)php php{
php php php php php php php php php php php php php$arrayphp[php'functionphp'php]php php=php php$thisphp-php>getFunctionphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$arrayphp[php'classphp'php]php php php=php php$thisphp-php>getClassphp(php)php;
php php php php php php php php php php php php php$arrayphp[php'methodphp'php]php php=php php$thisphp-php>getMethodphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp;
php php php php php}
php}
