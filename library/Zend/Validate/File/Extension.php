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
php php*php php@versionphp php php php$Idphp:php Extensionphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp filephp extensionphp ofphp aphp file
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_Extensionphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp FALSEphp_EXTENSIONphp php=php php'fileExtensionFalsephp'php;
php php php php constphp NOTphp_FOUNDphp php php php php php php php=php php'fileExtensionNotFoundphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:FALSEphp_EXTENSIONphp php=php>php php"Filephp php'php%valuephp%php'php hasphp aphp falsephp extensionphp"php,
php php php php php php php php selfphp:php:NOTphp_FOUNDphp php php php php php php php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp listphp ofphp extensions
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_extensionphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Validatephp casephp sensitive
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_casephp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templatephp variables
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'extensionphp'php php=php>php php'php_extensionphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php1php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$casephp php=php funcphp_getphp_argphp(php1php)php;
php php php php php php php php php php php php php$thisphp-php>setCasephp(php$casephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php andphp issetphp(php$optionsphp[php'casephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCasephp(php$optionsphp[php'casephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'casephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setExtensionphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp casephp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getCasephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_casephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp casephp tophp use
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$case
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCasephp(php$casephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_casephp php=php php(booleanphp)php php$casephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp filephp extension
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getExtensionphp(php)
php php php php php{
php php php php php php php php php$extensionphp php=php explodephp(php'php,php'php,php php$thisphp-php>php_extensionphp)php;

php php php php php php php php returnphp php$extensionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp filephp extensions
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$extensionphp Thephp extensionsphp tophp validate
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setExtensionphp(php$extensionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_extensionphp php=php nullphp;
php php php php php php php php php$thisphp-php>addExtensionphp(php$extensionphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp thephp filephp extensions
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$extensionphp Thephp extensionsphp tophp addphp forphp validation
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addExtensionphp(php$extensionphp)
php php php php php{
php php php php php php php php php$extensionsphp php=php php$thisphp-php>getExtensionphp(php)php;
php php php php php php php php ifphp php(isphp_stringphp(php$extensionphp)php)php php{
php php php php php php php php php php php php php$extensionphp php=php explodephp(php'php,php'php,php php$extensionphp)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$extensionphp asphp php$contentphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$contentphp)php php|php|php php!isphp_stringphp(php$contentphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$extensionsphp[php]php php=php trimphp(php$contentphp)php;
php php php php php php php php php}
php php php php php php php php php$extensionsphp php=php arrayphp_uniquephp(php$extensionsphp)php;

php php php php php php php php php/php/php Sanityphp checkphp tophp ensurephp nophp emptyphp values
php php php php php php php php foreachphp php(php$extensionsphp asphp php$keyphp php=php>php php$extphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$extphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$extensionsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_extensionphp php=php implodephp(php'php,php'php,php php$extensionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp fileextensionphp ofphp php$valuephp isphp includedphp inphp the
php php php php php php*php setphp extensionphp list
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$valuephp Realphp filephp tophp checkphp forphp extension
php php php php php php*php php@paramphp php arrayphp php php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Isphp filephp readablephp php?
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Loaderphp:php:isReadablephp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_FOUNDphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$filephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$infophp[php'extensionphp'php]php php=php substrphp(php$filephp[php'namephp'php]php,php strrposphp(php$filephp[php'namephp'php]php,php php'php.php'php)php php+php php1php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$infophp php=php pathinfophp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$extensionsphp php=php php$thisphp-php>getExtensionphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_casephp php&php&php php(inphp_arrayphp(php$infophp[php'extensionphp'php]php,php php$extensionsphp)php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp ifphp php(php!php$thisphp-php>getCasephp(php)php)php php{
php php php php php php php php php php php php foreachphp php(php$extensionsphp asphp php$extensionphp)php php{
php php php php php php php php php php php php php php php php ifphp php(strtolowerphp(php$extensionphp)php php=php=php strtolowerphp(php$infophp[php'extensionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:FALSEphp_EXTENSIONphp)php;
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
php php php php php php php php ifphp php(nullphp php!php=php=php php$filephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp[php'namephp'php]php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_errorphp(php$errorTypephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
