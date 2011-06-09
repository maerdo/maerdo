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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Countphp.phpphp php2php1php3php2php5php php2php0php1php0php-php0php3php-php0php4php php2php0php:php2php6php:php3php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp countingphp allphp givenphp files
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_Countphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*php#php@php+
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp TOOphp_MANYphp php=php php'fileCountTooManyphp'php;
php php php php constphp TOOphp_FEWphp php php=php php'fileCountTooFewphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:TOOphp_MANYphp php=php>php php"Toophp manyphp filesphp,php maximumphp php'php%maxphp%php'php arephp allowedphp butphp php'php%countphp%php'php arephp givenphp"php,
php php php php php php php php selfphp:php:TOOphp_FEWphp php php=php>php php"Toophp fewphp filesphp,php minimumphp php'php%minphp%php'php arephp expectedphp butphp php'php%countphp%php'php arephp givenphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templatephp variables
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'minphp'php php php php=php>php php'php_minphp'php,
php php php php php php php php php'maxphp'php php php php=php>php php'php_maxphp'php,
php php php php php php php php php'countphp'php php=php>php php'php_countphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Minimumphp filephp count
php php php php php php*
php php php php php php*php Ifphp nullphp,php therephp isphp nophp minimumphp filephp count
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_minphp;

php php php php php/php*php*
php php php php php php*php Maximumphp filephp count
php php php php php php*
php php php php php php*php Ifphp nullphp,php therephp isphp nophp maximumphp filephp count
php php php php php php*
php php php php php php*php php@varphp integerphp|null
php php php php php php*php/
php php php php protectedphp php$php_maxphp;

php php php php php/php*php*
php php php php php php*php Actualphp filecount
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_countphp;

php php php php php/php*php*
php php php php php php*php Internalphp filephp array
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_filesphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php Minphp limitsphp thephp filephp countphp,php whenphp usedphp withphp maxphp=nullphp itphp isphp thephp maximumphp filephp count
php php php php php php*php Itphp alsophp acceptsphp anphp arrayphp withphp thephp keysphp php'minphp'php andphp php'maxphp'
php php php php php php*
php php php php php php*php Ifphp php$optionsphp isphp aphp integerphp,php itphp willphp bephp usedphp asphp maximumphp filephp count
php php php php php php*php Asphp Arrayphp isphp acceptsphp thephp followingphp keysphp:
php php php php php php*php php'minphp'php:php Minimumphp filecount
php php php php php php*php php'maxphp'php:php Maximumphp filecount
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp|Zendphp_Configphp php$optionsphp Optionsphp forphp thephp adapter
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$optionsphp)php php|php|php isphp_numericphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'maxphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php1php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'minphp'php]php php=php funcphp_getphp_argphp(php0php)php;
php php php php php php php php php php php php php$optionsphp[php'maxphp'php]php php=php funcphp_getphp_argphp(php1php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'minphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMinphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMaxphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minimumphp filephp count
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMinphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_minphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minimumphp filephp count
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp php$minphp Thephp minimumphp filephp count
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Countphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp minphp isphp greaterphp thanphp max
php php php php php php*php/
php php php php publicphp functionphp setMinphp(php$minphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$minphp)php andphp issetphp(php$minphp[php'minphp'php]php)php)php php{
php php php php php php php php php php php php php$minphp php=php php$minphp[php'minphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$minphp)php andphp php!isphp_numericphp(php$minphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$minphp php=php php(integerphp)php php$minphp;
php php php php php php php php ifphp php(php(php$thisphp-php>php_maxphp php!php=php=php nullphp)php php&php&php php(php$minphp php>php php$thisphp-php>php_maxphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp minimumphp mustphp bephp lessphp thanphp orphp equalphp tophp thephp maximumphp filephp countphp,php butphp php$minphp php>php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php php{php$thisphp-php>php_maxphp}php"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_minphp php=php php$minphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp maximumphp filephp count
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMaxphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_maxphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp filephp count
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp php$maxphp Thephp maximumphp filephp count
php php php php php php*php php@returnphp Zendphp_Validatephp_StringLengthphp Providesphp aphp fluentphp interface
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp maxphp isphp smallerphp thanphp min
php php php php php php*php/
php php php php publicphp functionphp setMaxphp(php$maxphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$maxphp)php andphp issetphp(php$maxphp[php'maxphp'php]php)php)php php{
php php php php php php php php php php php php php$maxphp php=php php$maxphp[php'maxphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$maxphp)php andphp php!isphp_numericphp(php$maxphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$maxphp php=php php(integerphp)php php$maxphp;
php php php php php php php php ifphp php(php(php$thisphp-php>php_minphp php!php=php=php nullphp)php php&php&php php(php$maxphp <php php$thisphp-php>php_minphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp maximumphp mustphp bephp greaterphp thanphp orphp equalphp tophp thephp minimumphp filephp countphp,php butphp php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php$maxphp <php php{php$thisphp-php>php_minphp}php"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_maxphp php=php php$maxphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp filephp forphp validation
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$file
php php php php php php*php/
php php php php publicphp functionphp addFilephp(php$filephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$filephp)php)php php{
php php php php php php php php php php php php php$filephp php=php arrayphp(php$filephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$filephp)php)php php{
php php php php php php php php php php php php foreachphp php(php$filephp asphp php$namephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_filesphp[php$namephp]php)php php&php&php php!emptyphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$namephp]php php=php php$namephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp filephp countphp ofphp allphp checkedphp filesphp isphp atphp leastphp minphp and
php php php php php php*php notphp biggerphp thanphp maxphp php(whenphp maxphp isphp notphp nullphp)php.php Attentionphp:php Whenphp checkingphp withphp setphp minphp you
php php php php php php*php mustphp givephp allphp filesphp withphp thephp firstphp callphp,php otherwisephp youphp willphp getphp anphp falsephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$valuephp Filenamesphp tophp checkphp forphp count
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php(php$filephp php!php=php=php nullphp)php php&php&php php!arrayphp_keyphp_existsphp(php'destinationphp'php,php php$filephp)php)php php{
php php php php php php php php php php php php php$filephp[php'destinationphp'php]php php=php dirnamephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$filephp php!php=php=php nullphp)php php&php&php arrayphp_keyphp_existsphp(php'tmpphp_namephp'php,php php$filephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$filephp[php'destinationphp'php]php php.php DIRECTORYphp_SEPARATORphp php.php php$filephp[php'namephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$filephp php=php=php=php nullphp)php php|php|php php!emptyphp(php$filephp[php'tmpphp_namephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>addFilephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_countphp php=php countphp(php$thisphp-php>php_filesphp)php;
php php php php php php php php ifphp php(php(php$thisphp-php>php_maxphp php!php=php=php nullphp)php php&php&php php(php$thisphp-php>php_countphp php>php php$thisphp-php>php_maxphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_MANYphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$thisphp-php>php_minphp php!php=php=php nullphp)php php&php&php php(php$thisphp-php>php_countphp <php php$thisphp-php>php_minphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_FEWphp)php;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp anphp errorphp ofphp thephp givenphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@paramphp php stringphp php$errorType
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php protectedphp functionphp php_throwphp(php$filephp,php php$errorTypephp)
php php php php php{
php php php php php php php php ifphp php(php$filephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp[php'namephp'php]php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_errorphp(php$errorTypephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
