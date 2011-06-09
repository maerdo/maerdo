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
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@subpackagephp Item
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Itemphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Tagphp_Taggable
php php*php/
requirephp_oncephp php'Zendphp/Tagphp/Taggablephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tag
php php*php php@usesphp php php php php php php Zendphp_Tagphp_Taggable
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Tagphp_Itemphp implementsphp Zendphp_Tagphp_Taggable
php{
php php php php php/php*php*
php php php php php php*php Titlephp ofphp thephp tag
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_titlephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Weightphp ofphp thephp tag
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp php$php_weightphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Customphp parameters
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_paramsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Optionphp keysphp tophp skipphp whenphp callingphp setOptionsphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_skipOptionsphp php=php arrayphp(
php php php php php php php php php'optionsphp'php,
php php php php php php php php php'paramphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp tagphp accordingphp tophp thephp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@throwsphp Zendphp_Tagphp_Exceptionphp Whenphp invalidphp optionsphp arephp provided
php php php php php php*php php@throwsphp Zendphp_Tagphp_Exceptionphp Whenphp titlephp wasphp notphp set
php php php php php php*php php@throwsphp Zendphp_Tagphp_Exceptionphp Whenphp weightphp wasphp notphp set
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Invalidphp optionsphp providedphp tophp constructorphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_titlephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Titlephp wasphp notphp setphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_weightphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Weightphp wasphp notphp setphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp ofphp thephp tag
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Tagphp_Item
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php foreachphp php(php$optionsphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(strtolowerphp(php$keyphp)php,php php$thisphp-php>php_skipOptionsphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$methodphp php=php php'setphp'php php.php php$keyphp;
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp,php php$methodphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$methodphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Tagphp_Taggable
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_titlephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp title
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$title
php php php php php php*php php@throwsphp Zendphp_Tagphp_Exceptionphp Whenphp titlephp isphp nophp string
php php php php php php*php php@returnphp Zendphp_Tagphp_Item
php php php php php php*php/
php php php php publicphp functionphp setTitlephp(php$titlephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$titlephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Titlephp mustphp bephp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_titlephp php=php php(stringphp)php php$titlephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Tagphp_Taggable
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getWeightphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_weightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp weight
php php php php php php*
php php php php php php*php php@paramphp php floatphp php$weight
php php php php php php*php php@throwsphp Zendphp_Tagphp_Exceptionphp Whenphp weightphp isphp notphp numeric
php php php php php php*php php@returnphp Zendphp_Tagphp_Item
php php php php php php*php/
php php php php publicphp functionphp setWeightphp(php$weightphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_numericphp(php$weightphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Tagphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Tagphp_Exceptionphp(php'Weightphp mustphp bephp numericphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_weightphp php=php php(floatphp)php php$weightphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp multiplephp paramsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Tagphp_Item
php php php php php php*php/
php php php php publicphp functionphp setParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php foreachphp php(php$paramsphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>setParamphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Tagphp_Taggable
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php php$value
php php php php php php*php php@returnphp Zendphp_Tagphp_Item
php php php php php php*php/
php php php php publicphp functionphp setParamphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Tagphp_Taggable
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getParamphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$namephp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}
php}
