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
php php*php php@versionphp php php php php$Idphp:php Datephp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
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
classphp Zendphp_Validatephp_Datephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php php php php php php=php php'dateInvalidphp'php;
php php php php constphp INVALIDphp_DATEphp php php php=php php'dateInvalidDatephp'php;
php php php php constphp FALSEFORMATphp php php php php=php php'dateFalseFormatphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp,php integerphp,php arrayphp orphp Zendphp_Datephp expectedphp"php,
php php php php php php php php selfphp:php:INVALIDphp_DATEphp php php php=php>php php"php'php%valuephp%php'php doesphp notphp appearphp tophp bephp aphp validphp datephp"php,
php php php php php php php php selfphp:php:FALSEFORMATphp php php php php=php>php php"php'php%valuephp%php'php doesphp notphp fitphp thephp datephp formatphp php'php%formatphp%php'php"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'formatphp'php php php=php>php php'php_formatphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Optionalphp format
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_formatphp;

php php php php php/php*php*
php php php php php php*php Optionalphp locale
php php php php php php*
php php php php php php*php php@varphp stringphp|Zendphp_Localephp|null
php php php php php php*php/
php php php php protectedphp php$php_localephp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Configphp php$optionsphp OPTIONAL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'formatphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'localephp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'formatphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setFormatphp(php$optionsphp[php'formatphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'localephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Localephp'php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php Zendphp_Registryphp:php:getphp(php'Zendphp_Localephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'localephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp localephp option
php php php php php php*
php php php php php php*php php@returnphp stringphp|Zendphp_Localephp|null
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp localephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$locale
php php php php php php*php php@returnphp Zendphp_Validatephp_Datephp providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Localephp.phpphp'php;
php php php php php php php php php$thisphp-php>php_localephp php=php Zendphp_Localephp:php:findLocalephp(php$localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp localephp option
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFormatphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_formatphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp formatphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$format
php php php php php php*php php@returnphp Zendphp_Validatephp_Datephp providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setFormatphp(php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_formatphp php=php php$formatphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp php$valuephp isphp aphp validphp datephp ofphp thephp formatphp YYYYphp-MMphp-DD
php php php php php php*php Ifphp optionalphp php$formatphp orphp php$localephp isphp setphp thephp datephp formatphp isphp checked
php php php php php php*php accordingphp tophp Zendphp_Datephp,php seephp Zendphp_Datephp:php:isDatephp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Datephp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php php&php&php php!isphp_intphp(php$valuephp)php php&php&php php!isphp_floatphp(php$valuephp)php php&php&
php php php php php php php php php php php php php!isphp_arrayphp(php$valuephp)php php&php&php php!php(php$valuephp instanceofphp Zendphp_Datephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(php(php$thisphp-php>php_formatphp php!php=php=php nullphp)php php|php|php php(php$thisphp-php>php_localephp php!php=php=php nullphp)php php|php|php isphp_arrayphp(php$valuephp)php php|php|
php php php php php php php php php php php php php php$valuephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp.phpphp'php;
php php php php php php php php php php php php ifphp php(php!Zendphp_Datephp:php:isDatephp(php$valuephp,php php$thisphp-php>php_formatphp,php php$thisphp-php>php_localephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_checkFormatphp(php$valuephp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:FALSEFORMATphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_DATEphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php\dphp{php4php}php-php\dphp{php2php}php-php\dphp{php2php}php$php/php'php,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_formatphp php=php php'yyyyphp-MMphp-ddphp'php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:FALSEFORMATphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_formatphp php=php nullphp;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php listphp(php$yearphp,php php$monthphp,php php$dayphp)php php=php sscanfphp(php$valuephp,php php'php%dphp-php%dphp-php%dphp'php)php;

php php php php php php php php php php php php ifphp php(php!checkdatephp(php$monthphp,php php$dayphp,php php$yearphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_DATEphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp givenphp datephp fitsphp thephp givenphp format
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp php Datephp tophp check
php php php php php php*php php@returnphp booleanphp Falsephp whenphp datephp doesphp notphp fitphp thephp format
php php php php php php*php/
php php php php privatephp functionphp php_checkFormatphp(php$valuephp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp/Formatphp.phpphp'php;
php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$valuephp,php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'datephp_formatphp'php php=php>php php$thisphp-php>php_formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'fixphp_datephp'php php=php>php falsephp)php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$parsedphp[php'yearphp'php]php)php andphp php(php(strposphp(strtoupperphp(php$thisphp-php>php_formatphp)php,php php'YYphp'php)php php!php=php=php falsephp)php and
php php php php php php php php php php php php php php php php php(strposphp(strtoupperphp(php$thisphp-php>php_formatphp)php,php php'YYYYphp'php)php php=php=php=php falsephp)php)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php Zendphp_Datephp:php:getFullYearphp(php$parsedphp[php'yearphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php Datephp canphp notphp bephp parsed
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php(strposphp(php$thisphp-php>php_formatphp,php php'Yphp'php)php php!php=php=php falsephp)php orphp php(strposphp(php$thisphp-php>php_formatphp,php php'yphp'php)php php!php=php=php falsephp)php)php and
php php php php php php php php php php php php php(php!issetphp(php$parsedphp[php'yearphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Yearphp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$thisphp-php>php_formatphp,php php'Mphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'monthphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Monthphp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$thisphp-php>php_formatphp,php php'dphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'dayphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Dayphp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php(strposphp(php$thisphp-php>php_formatphp,php php'Hphp'php)php php!php=php=php falsephp)php orphp php(strposphp(php$thisphp-php>php_formatphp,php php'hphp'php)php php!php=php=php falsephp)php)php and
php php php php php php php php php php php php php(php!issetphp(php$parsedphp[php'hourphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Hourphp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$thisphp-php>php_formatphp,php php'mphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'minutephp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Minutephp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$thisphp-php>php_formatphp,php php'sphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'secondphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Secondphp expectedphp php butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Datephp fitsphp thephp format
php php php php php php php php returnphp truephp;
php php php php php}
php}
