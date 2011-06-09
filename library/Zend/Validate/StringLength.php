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
php php*php php@versionphp php php php php$Idphp:php StringLengthphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
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
classphp Zendphp_Validatephp_StringLengthphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php=php php'stringLengthInvalidphp'php;
php php php php constphp TOOphp_SHORTphp php=php php'stringLengthTooShortphp'php;
php php php php constphp TOOphp_LONGphp php php=php php'stringLengthTooLongphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php php php php selfphp:php:TOOphp_SHORTphp php=php>php php"php'php%valuephp%php'php isphp lessphp thanphp php%minphp%php charactersphp longphp"php,
php php php php php php php php selfphp:php:TOOphp_LONGphp php php=php>php php"php'php%valuephp%php'php isphp morephp thanphp php%maxphp%php charactersphp longphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'minphp'php php=php>php php'php_minphp'php,
php php php php php php php php php'maxphp'php php=php>php php'php_maxphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Minimumphp length
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_minphp;

php php php php php/php*php*
php php php php php php*php Maximumphp length
php php php php php php*
php php php php php php*php Ifphp nullphp,php therephp isphp nophp maximumphp length
php php php php php php*
php php php php php php*php php@varphp integerphp|null
php php php php php php*php/
php php php php protectedphp php$php_maxphp;

php php php php php/php*php*
php php php php php php*php Encodingphp tophp use
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$tempphp[php'minphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'maxphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp[php'encodingphp'php]php php=php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$tempphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'minphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'minphp'php]php php=php php0php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setMinphp(php$optionsphp[php'minphp'php]php)php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'maxphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMaxphp(php$optionsphp[php'maxphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'encodingphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$optionsphp[php'encodingphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minphp option
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMinphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_minphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minphp option
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$min
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php php@returnphp Zendphp_Validatephp_StringLengthphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMinphp(php$minphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_maxphp php&php&php php$minphp php>php php$thisphp-php>php_maxphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp minimumphp mustphp bephp lessphp thanphp orphp equalphp tophp thephp maximumphp lengthphp,php butphp php$minphp php>php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php php$thisphp-php>php_maxphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_minphp php=php maxphp(php0php,php php(integerphp)php php$minphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp maxphp option
php php php php php php*
php php php php php php*php php@returnphp integerphp|null
php php php php php php*php/
php php php php publicphp functionphp getMaxphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_maxphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maxphp option
php php php php php php*
php php php php php php*php php@paramphp php integerphp|nullphp php$max
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php php@returnphp Zendphp_Validatephp_StringLengthphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMaxphp(php$maxphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$maxphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_maxphp php=php nullphp;
php php php php php php php php php}php elsephp ifphp php(php$maxphp <php php$thisphp-php>php_minphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp maximumphp mustphp bephp greaterphp thanphp orphp equalphp tophp thephp minimumphp lengthphp,php butphp php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php$maxphp <php php$thisphp-php>php_minphp"php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_maxphp php=php php(integerphp)php php$maxphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp encodingphp tophp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Validatephp_StringLength
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$encodingphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$origphp php php php=php iconvphp_getphp_encodingphp(php'internalphp_encodingphp'php)php;
php php php php php php php php php php php php php$resultphp php=php iconvphp_setphp_encodingphp(php'internalphp_encodingphp'php,php php$encodingphp)php;
php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Givenphp encodingphp notphp supportedphp onphp thisphp OSphp!php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php iconvphp_setphp_encodingphp(php'internalphp_encodingphp'php,php php$origphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp stringphp lengthphp ofphp php$valuephp isphp atphp leastphp thephp minphp optionphp and
php php php php php php*php nophp greaterphp thanphp thephp maxphp optionphp php(whenphp thephp maxphp optionphp isphp notphp nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_encodingphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$lengthphp php=php iconvphp_strlenphp(php$valuephp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$lengthphp php=php iconvphp_strlenphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$lengthphp <php php$thisphp-php>php_minphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:TOOphp_SHORTphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>php_maxphp php&php&php php$thisphp-php>php_maxphp <php php$lengthphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:TOOphp_LONGphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_messagesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php}
php}
