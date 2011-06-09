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
php php*php php@versionphp php php php php$Idphp:php Callbackphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
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
classphp Zendphp_Validatephp_Callbackphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Invalidphp callback
php php php php php php*php/
php php php php constphp INVALIDphp_CALLBACKphp php=php php'callbackInvalidphp'php;

php php php php php/php*php*
php php php php php php*php Invalidphp value
php php php php php php*php/
php php php php constphp INVALIDphp_VALUEphp php=php php'callbackValuephp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp_VALUEphp php php php php=php>php php"php'php%valuephp%php'php isphp notphp validphp"php,
php php php php php php php php selfphp:php:INVALIDphp_CALLBACKphp php=php>php php"Anphp exceptionphp hasphp beenphp raisedphp withinphp thephp callbackphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Callbackphp inphp aphp callphp_userphp_funcphp format
php php php php php php*
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_callbackphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Defaultphp optionsphp tophp setphp forphp thephp filter
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$callback
php php php php php php*php php@paramphp php mixedphp php php php$max
php php php php php php*php php@paramphp php booleanphp php$inclusive
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$callbackphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setCallbackphp(php$callbackphp)php;
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$callbackphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$callbackphp[php'callbackphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setCallbackphp(php$callbackphp[php'callbackphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$callbackphp[php'optionsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$callbackphp[php'optionsphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php(php$initializedCallackphp php=php php$thisphp-php>getCallbackphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Nophp callbackphp registeredphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp callback
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getCallbackphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_callbackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp callback
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$callback
php php php php php php*php php@returnphp Zendphp_Validatephp_Callbackphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setCallbackphp(php$callbackphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp callbackphp givenphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_callbackphp php=php php$callbackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp optionsphp forphp thephp callback
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp optionsphp forphp thephp callback
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$max
php php php php php php*php php@returnphp Zendphp_Validatephp_Callbackphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php(arrayphp)php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp setphp callbackphp returns
php php php php php php*php forphp thephp providedphp php$value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php php$optionsphp php php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php$callbackphp php=php php$thisphp-php>getCallbackphp(php)php;
php php php php php php php php php$argsphp php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php$optionsphp php php=php arrayphp_mergephp(php$argsphp,php php$optionsphp)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!callphp_userphp_funcphp_arrayphp(php$callbackphp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_VALUEphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_CALLBACKphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
