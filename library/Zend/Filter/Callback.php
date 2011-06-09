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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Callbackphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Callbackphp implementsphp Zendphp_Filterphp_Interface
php{
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
php php php php protectedphp php$php_optionsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$callbackphp Callbackphp inphp aphp callphp_userphp_funcphp format
php php php php php php*php php@paramphp mixedphp php php php php php php php php$optionsphp php php(Optionalphp)php Defaultphp optionsphp forphp thisphp filter
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php php|php|php php!arrayphp_keyphp_existsphp(php'callbackphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'callbackphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'optionsphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'callbackphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Missingphp callbackphp tophp usephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setCallbackphp(php$optionsphp[php'callbackphp'php]php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp[php'optionsphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp callback
php php php php php php*
php php php php php php*php php@returnphp stringphp|arrayphp Setphp callback
php php php php php php*php/
php php php php publicphp functionphp getCallbackphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_callbackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp callbackphp forphp thisphp filter
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$callback
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp setCallbackphp(php$callbackphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filterphp_Exceptionphp(php'Callbackphp canphp notphp bephp accessedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_callbackphp php=php php$callbackphp;
php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp defaultphp options
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp newphp defaultphp optionsphp tophp thephp callbackphp filter
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$optionsphp Defaultphp optionsphp tophp set
php php php php php php*php php@returnphp Zendphp_Filterphp_Callback
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callsphp thephp filterphp perphp callback
php php php php php php*
php php php php php php*php php@paramphp php$valuephp mixedphp Optionsphp forphp thephp setphp callback
php php php php php php*php php@returnphp mixedphp php php php php php php Resultphp fromphp thephp filterphp whichphp wasphp callbacked
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp(php$thisphp-php>php_optionsphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>php_optionsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php arrayphp_unshiftphp(php$optionsphp,php php$valuephp)php;

php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(php$thisphp-php>php_callbackphp,php php$optionsphp)php;
php php php php php}
php}