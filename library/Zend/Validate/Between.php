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
php php*php php@versionphp php php php php$Idphp:php Betweenphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Validatephp_Betweenphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp keyphp forphp whenphp thephp valuephp isphp notphp betweenphp thephp minphp andphp maxphp,php inclusively
php php php php php php*php/
php php php php constphp NOTphp_BETWEENphp php php php php php php php php=php php'notBetweenphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp keyphp forphp whenphp thephp valuephp isphp notphp strictlyphp betweenphp thephp minphp andphp max
php php php php php php*php/
php php php php constphp NOTphp_BETWEENphp_STRICTphp php=php php'notBetweenStrictphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:NOTphp_BETWEENphp php php php php php php php php=php>php php"php'php%valuephp%php'php isphp notphp betweenphp php'php%minphp%php'php andphp php'php%maxphp%php'php,php inclusivelyphp"php,
php php php php php php php php selfphp:php:NOTphp_BETWEENphp_STRICTphp php=php>php php"php'php%valuephp%php'php isphp notphp strictlyphp betweenphp php'php%minphp%php'php andphp php'php%maxphp%php'php"
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Additionalphp variablesphp availablephp forphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'minphp'php php=php>php php'php_minphp'php,
php php php php php php php php php'maxphp'php php=php>php php'php_maxphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Minimumphp value
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_minphp;

php php php php php/php*php*
php php php php php php*php Maximumphp value
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_maxphp;

php php php php php/php*php*
php php php php php php*php Whetherphp tophp dophp inclusivephp comparisonsphp,php allowingphp equivalencephp tophp minphp andphp/orphp max
php php php php php php*
php php php php php php*php Ifphp falsephp,php thenphp strictphp comparisonsphp arephp donephp,php andphp thephp valuephp mayphp equalphp neither
php php php php php php*php thephp minphp norphp maxphp options
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_inclusivephp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*php Acceptsphp thephp followingphp optionphp keysphp:
php php php php php php*php php php php'minphp'php php=php>php scalarphp,php minimumphp border
php php php php php php*php php php php'maxphp'php php=php>php scalarphp,php maximumphp border
php php php php php php*php php php php'inclusivephp'php php=php>php booleanphp,php inclusivephp borderphp values
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'minphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'maxphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'inclusivephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'minphp'php,php php$optionsphp)php php|php|php php!arrayphp_keyphp_existsphp(php'maxphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Missingphp optionphp.php php'minphp'php andphp php'maxphp'php hasphp tophp bephp givenphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'inclusivephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'inclusivephp'php]php php=php truephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setMinphp(php$optionsphp[php'minphp'php]php)
php php php php php php php php php php php php php php-php>setMaxphp(php$optionsphp[php'maxphp'php]php)
php php php php php php php php php php php php php php-php>setInclusivephp(php$optionsphp[php'inclusivephp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minphp option
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getMinphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_minphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minphp option
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$min
php php php php php php*php php@returnphp Zendphp_Validatephp_Betweenphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMinphp(php$minphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_minphp php=php php$minphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp maxphp option
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getMaxphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_maxphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maxphp option
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$max
php php php php php php*php php@returnphp Zendphp_Validatephp_Betweenphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMaxphp(php$maxphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_maxphp php=php php$maxphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp inclusivephp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getInclusivephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_inclusivephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp inclusivephp option
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$inclusive
php php php php php php*php php@returnphp Zendphp_Validatephp_Betweenphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setInclusivephp(php$inclusivephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inclusivephp php=php php$inclusivephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp betweenphp minphp andphp maxphp optionsphp,php inclusively
php php php php php php*php ifphp inclusivephp optionphp isphp truephp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_inclusivephp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_minphp php>php php$valuephp php|php|php php$valuephp php>php php$thisphp-php>php_maxphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_BETWEENphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_minphp php>php=php php$valuephp php|php|php php$valuephp php>php=php php$thisphp-php>php_maxphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_BETWEENphp_STRICTphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php}
