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
php php*php php@versionphp php php php php$Idphp:php PostCodephp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Localephp_Format
php php*php/
requirephp_oncephp php'Zendphp/Localephp/Formatphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_PostCodephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php=php php'postcodeInvalidphp'php;
php php php php constphp NOphp_MATCHphp php=php php'postcodeNoMatchphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php=php>php php"Invalidphp typephp givenphp.php Stringphp orphp integerphp expectedphp"php,
php php php php php php php php selfphp:php:NOphp_MATCHphp php=php>php php"php'php%valuephp%php'php doesphp notphp appearphp tophp bephp aphp postalphp codephp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Localephp tophp use
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_localephp;

php php php php php/php*php*
php php php php php php*php Manualphp postalphp codephp format
php php php php php php*
php php php php php php*php php@varphp unknownphp_type
php php php php php php*php/
php php php php protectedphp php$php_formatphp;

php php php php php/php*php*
php php php php php php*php Constructorphp forphp thephp integerphp validator
php php php php php php*
php php php php php php*php Acceptsphp eitherphp aphp stringphp localephp,php aphp Zendphp_Localephp objectphp,php orphp anphp arrayphp or
php php php php php php*php Zendphp_Configphp objectphp containingphp thephp keysphp php"localephp"php andphp/orphp php"formatphp"php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Localephp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Onphp emptyphp format
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Localephp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setLocalephp(Zendphp_Registryphp:php:getphp(php'Zendphp_Localephp'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php/php/php Received
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'localephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$optionsphp[php'localephp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'formatphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setFormatphp(php$optionsphp[php'formatphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp php(php$optionsphp instanceofphp Zendphp_Localephp php|php|php isphp_stringphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php/php/php Receivedphp Localephp objectphp orphp stringphp locale
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php php$formatphp php=php php$thisphp-php>getFormatphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$formatphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Aphp postcodephp-formatphp stringphp hasphp tophp bephp givenphp forphp validationphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp locale
php php php php php php*
php php php php php php*php php@returnphp stringphp|Zendphp_Localephp Thephp setphp locale
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp localephp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp|Zendphp_Localephp php$locale
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Onphp unrecognisedphp region
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Onphp notphp detectedphp format
php php php php php php*php php@returnphp Zendphp_Validatephp_PostCodephp php Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Localephp.phpphp'php;
php php php php php php php php php$thisphp-php>php_localephp php=php Zendphp_Localephp:php:findLocalephp(php$localephp)php;
php php php php php php php php php$localephp php php php php php php php php=php newphp Zendphp_Localephp(php$thisphp-php>php_localephp)php;
php php php php php php php php php$regionphp php php php php php php php php=php php$localephp-php>getRegionphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$regionphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Unablephp tophp detectphp aphp regionphp forphp thephp localephp php'php$localephp'php"php)php;
php php php php php php php php php}

php php php php php php php php php$formatphp php=php Zendphp_Localephp:php:getTranslationphp(
php php php php php php php php php php php php php$localephp-php>getRegionphp(php)php,
php php php php php php php php php php php php php'postaltoterritoryphp'php,
php php php php php php php php php php php php php$thisphp-php>php_locale
php php php php php php php php php)php;

php php php php php php php php ifphp php(emptyphp(php$formatphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Unablephp tophp detectphp aphp postcodephp formatphp forphp thephp regionphp php'php{php$localephp-php>getRegionphp(php)php}php'php"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setFormatphp(php$formatphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp postalphp codephp format
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getFormatphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_formatphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp selfphp definedphp postalphp formatphp asphp regex
php php php php php php*
php php php php php php*php php@paramphp stringphp php$format
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Onphp emptyphp format
php php php php php php*php php@returnphp Zendphp_Validatephp_PostCodephp php Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setFormatphp(php$formatphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$formatphp)php php|php|php php!isphp_stringphp(php$formatphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Aphp postcodephp-formatphp stringphp hasphp tophp bephp givenphp forphp validationphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$formatphp[php0php]php php!php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'php/php^php'php php.php php$formatphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$formatphp[strlenphp(php$formatphp)php php-php php1php]php php!php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php$formatphp php.php=php php'php$php/php'php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_formatphp php=php php$formatphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp isphp aphp validphp postalcode
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php php&php&php php!isphp_intphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$formatphp php=php php$thisphp-php>getFormatphp(php)php;
php php php php php php php php ifphp php(php!pregphp_matchphp(php$formatphp,php php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOphp_MATCHphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
