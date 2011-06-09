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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php InArrayphp.phpphp php2php0php3php5php2php php2php0php1php0php-php0php1php-php1php7php php1php7php:php5php5php:php3php8Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_InArrayphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp NOTphp_INphp_ARRAYphp php=php php'notInArrayphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:NOTphp_INphp_ARRAYphp php=php>php php"php'php%valuephp%php'php wasphp notphp foundphp inphp thephp haystackphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Haystackphp ofphp possiblephp values
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_haystackphp;

php php php php php/php*php*
php php php php php php*php Whetherphp aphp strictphp inphp_arrayphp(php)php invocationphp isphp used
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_strictphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp aphp recursivephp searchphp shouldphp bephp done
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_recursivephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$haystack
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Arrayphp expectedphp asphp parameterphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$countphp php=php funcphp_numphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp php php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php$countphp php>php php1php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'haystackphp'php]php php=php funcphp_getphp_argphp(php0php)php;
php php php php php php php php php php php php php php php php php$tempphp[php'strictphp'php]php php php php=php funcphp_getphp_argphp(php1php)php;
php php php php php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$tempphp php=php funcphp_getphp_argphp(php0php)php;
php php php php php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'haystackphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'haystackphp'php]php php=php php$tempphp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setHaystackphp(php$optionsphp[php'haystackphp'php]php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'strictphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setStrictphp(php$optionsphp[php'strictphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'recursivephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setRecursivephp(php$optionsphp[php'recursivephp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp haystackphp option
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getHaystackphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_haystackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp haystackphp option
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$haystack
php php php php php php*php php@returnphp Zendphp_Validatephp_InArrayphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setHaystackphp(arrayphp php$haystackphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_haystackphp php=php php$haystackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp strictphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getStrictphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_strictphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp strictphp option
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$strict
php php php php php php*php php@returnphp Zendphp_Validatephp_InArrayphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setStrictphp(php$strictphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_strictphp php=php php(booleanphp)php php$strictphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp recursivephp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getRecursivephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_recursivephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp recursivephp option
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$recursive
php php php php php php*php php@returnphp Zendphp_Validatephp_InArrayphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setRecursivephp(php$recursivephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_recursivephp php=php php(booleanphp)php php$recursivephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp containedphp inphp thephp haystackphp optionphp.php Ifphp thephp strict
php php php php php php*php optionphp isphp truephp,php thenphp thephp typephp ofphp php$valuephp isphp alsophp checkedphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php ifphp php(php$thisphp-php>getRecursivephp(php)php)php php{
php php php php php php php php php php php php php$iteratorphp php=php newphp RecursiveIteratorIteratorphp(newphp RecursiveArrayIteratorphp(php$thisphp-php>php_haystackphp)php)php;
php php php php php php php php php php php php foreachphp(php$iteratorphp asphp php$elementphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_strictphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$elementphp php=php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$elementphp php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$valuephp,php php$thisphp-php>php_haystackphp,php php$thisphp-php>php_strictphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_INphp_ARRAYphp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
