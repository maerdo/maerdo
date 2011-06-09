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
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Csvphp.phpphp php2php1php6php6php1php php2php0php1php0php-php0php3php-php2php7php php2php0php:php2php0php:php2php7Zphp thomasphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/


php/php*php*php Zendphp_Localephp php*php/
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*php Zendphp_Translatephp_Adapterphp php*php/
requirephp_oncephp php'Zendphp/Translatephp/Adapterphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Translatephp_Adapterphp_Csvphp extendsphp Zendphp_Translatephp_Adapter
php{
php php php php privatephp php$php_dataphp php php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Generatesphp thephp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Translationphp content
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php'delimiterphp'php]php php=php php"php;php"php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'lengthphp'php]php php php php php=php php0php;
php php php php php php php php php$thisphp-php>php_optionsphp[php'enclosurephp'php]php php=php php'php"php'php;

php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php php php php php php php php php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optphp php php php php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optphp,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'contentphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp translationphp data
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php php$filenamephp php Filenamephp andphp fullphp pathphp tophp thephp translationphp source
php php php php php php*php php@paramphp php stringphp php php php php php php php php$localephp php php php Localephp/Languagephp tophp addphp dataphp forphp,php identicalphp withphp localephp identifierphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@paramphp php arrayphp php php php php php php php php php$optionphp php php php OPTIONALphp Optionsphp tophp use
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadTranslationDataphp(php$filenamephp,php php$localephp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(php)php;
php php php php php php php php php$optionsphp php php php php php=php php$optionsphp php+php php$thisphp-php>php_optionsphp;
php php php php php php php php php$thisphp-php>php_filephp php=php php@fopenphp(php$filenamephp,php php'rbphp'php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_filephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'Errorphp openingphp translationphp filephp php\php'php'php php.php php$filenamephp php.php php'php\php'php.php'php)php;
php php php php php php php php php}

php php php php php php php php whilephp(php(php$dataphp php=php fgetcsvphp(php$thisphp-php>php_filephp,php php$optionsphp[php'lengthphp'php]php,php php$optionsphp[php'delimiterphp'php]php,php php$optionsphp[php'enclosurephp'php]php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(substrphp(php$dataphp[php0php]php,php php0php,php php1php)php php=php=php=php php'php#php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$dataphp)php php=php=php php2php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$localephp]php[php$dataphp[php0php]php]php php=php php$dataphp[php1php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$singularphp php=php arrayphp_shiftphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$localephp]php[php$singularphp]php php=php php$dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp adaptersphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php"Csvphp"php;
php php php php php}
php}
