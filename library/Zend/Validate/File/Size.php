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
php php*php php@versionphp php php php$Idphp:php Sizephp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp maximumphp sizephp ofphp aphp filephp upphp tophp aphp maxphp ofphp php2GB
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_Sizephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*php#php@php+
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp TOOphp_BIGphp php php php=php php'fileSizeTooBigphp'php;
php php php php constphp TOOphp_SMALLphp php=php php'fileSizeTooSmallphp'php;
php php php php constphp NOTphp_FOUNDphp php=php php'fileSizeNotFoundphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:TOOphp_BIGphp php php php=php>php php"Maximumphp allowedphp sizephp forphp filephp php'php%valuephp%php'php isphp php'php%maxphp%php'php butphp php'php%sizephp%php'php detectedphp"php,
php php php php php php php php selfphp:php:TOOphp_SMALLphp php=php>php php"Minimumphp expectedphp sizephp forphp filephp php'php%valuephp%php'php isphp php'php%minphp%php'php butphp php'php%sizephp%php'php detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_FOUNDphp php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templatephp variables
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'minphp'php php php=php>php php'php_minphp'php,
php php php php php php php php php'maxphp'php php php=php>php php'php_maxphp'php,
php php php php php php php php php'sizephp'php php=php>php php'php_sizephp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Minimumphp filesize
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_minphp;

php php php php php/php*php*
php php php php php php*php Maximumphp filesize
php php php php php php*
php php php php php php*php Ifphp nullphp,php therephp isphp nophp maximumphp filesize
php php php php php php*
php php php php php php*php php@varphp integerphp|null
php php php php php php*php/
php php php php protectedphp php$php_maxphp;

php php php php php/php*php*
php php php php php php*php Detectedphp size
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_sizephp;

php php php php php/php*php*
php php php php php php*php Usephp bytestringphp php?
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_useByteStringphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php Ifphp php$optionsphp isphp aphp integerphp,php itphp willphp bephp usedphp asphp maximumphp filesize
php php php php php php*php Asphp Arrayphp isphp acceptsphp thephp followingphp keysphp:
php php php php php php*php php'minphp'php:php Minimumphp filesize
php php php php php php*php php'maxphp'php:php Maximumphp filesize
php php php php php php*php php'bytestringphp'php:php Usephp bytestringphp orphp realphp sizephp forphp messages
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp php$optionsphp Optionsphp forphp thephp adapter
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
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php$optionsphp[php'maxphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$argvphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'bytestringphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'bytestringphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setUseByteStringphp(php$optionsphp[php'bytestringphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'minphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMinphp(php$optionsphp[php'minphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMaxphp(php$optionsphp[php'maxphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minimumphp filesize
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$byteStringphp Usephp bytestringphp php?
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp setUseByteStringphp(php$byteStringphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_useByteStringphp php=php php(boolphp)php php$byteStringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Willphp bytestringphp bephp usedphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp useByteStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_useByteStringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp minimumphp filesize
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$rawphp Whetherphp orphp notphp tophp forcephp returnphp ofphp thephp rawphp valuephp php(defaultsphp offphp)
php php php php php php*php php@returnphp integerphp|string
php php php php php php*php/
php php php php publicphp functionphp getMinphp(php$rawphp php=php falsephp)
php php php php php{
php php php php php php php php php$minphp php=php php$thisphp-php>php_minphp;
php php php php php php php php ifphp php(php!php$rawphp php&php&php php$thisphp-php>useByteStringphp(php)php)php php{
php php php php php php php php php php php php php$minphp php=php php$thisphp-php>php_toByteStringphp(php$minphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$minphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minimumphp filesize
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$minphp Thephp minimumphp filesize
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp minphp isphp greaterphp thanphp max
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Sizephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMinphp(php$minphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$minphp)php andphp php!isphp_numericphp(php$minphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$minphp php=php php(integerphp)php php$thisphp-php>php_fromByteStringphp(php$minphp)php;
php php php php php php php php php$maxphp php=php php$thisphp-php>getMaxphp(truephp)php;
php php php php php php php php ifphp php(php(php$maxphp php!php=php=php nullphp)php php&php&php php(php$minphp php>php php$maxphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp minimumphp mustphp bephp lessphp thanphp orphp equalphp tophp thephp maximumphp filesizephp,php butphp php$minphp php>php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php php$maxphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_minphp php=php php$minphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp maximumphp filesize
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$rawphp Whetherphp orphp notphp tophp forcephp returnphp ofphp thephp rawphp valuephp php(defaultsphp offphp)
php php php php php php*php php@returnphp integerphp|string
php php php php php php*php/
php php php php publicphp functionphp getMaxphp(php$rawphp php=php falsephp)
php php php php php{
php php php php php php php php php$maxphp php=php php$thisphp-php>php_maxphp;
php php php php php php php php ifphp php(php!php$rawphp php&php&php php$thisphp-php>useByteStringphp(php)php)php php{
php php php php php php php php php php php php php$maxphp php=php php$thisphp-php>php_toByteStringphp(php$maxphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$maxphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp filesize
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$maxphp Thephp maximumphp filesize
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp maxphp isphp smallerphp thanphp min
php php php php php php*php php@returnphp Zendphp_Validatephp_StringLengthphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMaxphp(php$maxphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$maxphp)php php&php&php php!isphp_numericphp(php$maxphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$maxphp php=php php(integerphp)php php$thisphp-php>php_fromByteStringphp(php$maxphp)php;
php php php php php php php php php$minphp php=php php$thisphp-php>getMinphp(truephp)php;
php php php php php php php php ifphp php(php(php$minphp php!php=php=php nullphp)php php&php&php php(php$maxphp <php php$minphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp maximumphp mustphp bephp greaterphp thanphp orphp equalphp tophp thephp minimumphp filesizephp,php butphp php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php$maxphp <php php$minphp"php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_maxphp php=php php$maxphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp detectedphp filephp size
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php protectedphp functionphp php_getSizephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp currentphp size
php php php php php php*
php php php php php php*php php@paramphp php intphp php$size
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Size
php php php php php php*php/
php php php php protectedphp functionphp php_setSizephp(php$sizephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sizephp php=php php$sizephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp filesizephp ofphp php$valuephp isphp atphp leastphp minphp and
php php php php php php*php notphp biggerphp thanphp maxphp php(whenphp maxphp isphp notphp nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Realphp filephp tophp checkphp forphp size
php php php php php php*php php@paramphp php arrayphp php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Isphp filephp readablephp php?
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Loaderphp:php:isReadablephp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_FOUNDphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php limitedphp tophp php4GBphp files
php php php php php php php php php$sizephp php php php php php php php php=php sprintfphp(php"php%uphp"php,php php@filesizephp(php$valuephp)php)php;
php php php php php php php php php$thisphp-php>php_sizephp php=php php$sizephp;

php php php php php php php php php/php/php Checkphp tophp seephp ifphp itphp'sphp smallerphp thanphp minphp size
php php php php php php php php php$minphp php=php php$thisphp-php>getMinphp(truephp)php;
php php php php php php php php php$maxphp php=php php$thisphp-php>getMaxphp(truephp)php;
php php php php php php php php ifphp php(php(php$minphp php!php=php=php nullphp)php php&php&php php(php$sizephp <php php$minphp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>useByteStringphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_minphp php php=php php$thisphp-php>php_toByteStringphp(php$minphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$thisphp-php>php_toByteStringphp(php$sizephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_SMALLphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_minphp php php=php php$minphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$sizephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_SMALLphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp tophp seephp ifphp itphp'sphp largerphp thanphp maxphp size
php php php php php php php php ifphp php(php(php$maxphp php!php=php=php nullphp)php php&php&php php(php$maxphp <php php$sizephp)php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>useByteStringphp(php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_maxphp php php=php php$thisphp-php>php_toByteStringphp(php$maxphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$thisphp-php>php_toByteStringphp(php$sizephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_BIGphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_maxphp php php=php php$maxphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$sizephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_BIGphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_messagesphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp formattedphp size
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$size
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_toByteStringphp(php$sizephp)
php php php php php{
php php php php php php php php php$sizesphp php=php arrayphp(php'Bphp'php,php php'kBphp'php,php php'MBphp'php,php php'GBphp'php,php php'TBphp'php,php php'PBphp'php,php php'EBphp'php,php php'ZBphp'php,php php'YBphp'php)php;
php php php php php php php php forphp php(php$iphp=php0php;php php$sizephp php>php=php php1php0php2php4php php&php&php php$iphp <php php9php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$sizephp php/php=php php1php0php2php4php;
php php php php php php php php php}

php php php php php php php php returnphp roundphp(php$sizephp,php php2php)php php.php php$sizesphp[php$iphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp unformattedphp size
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$size
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_fromByteStringphp(php$sizephp)
php php php php php{
php php php php php php php php ifphp php(isphp_numericphp(php$sizephp)php)php php{
php php php php php php php php php php php php returnphp php(integerphp)php php$sizephp;
php php php php php php php php php}

php php php php php php php php php$typephp php php=php trimphp(substrphp(php$sizephp,php php-php2php,php php1php)php)php;

php php php php php php php php php$valuephp php=php substrphp(php$sizephp,php php0php,php php-php1php)php;
php php php php php php php php ifphp php(php!isphp_numericphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php substrphp(php$valuephp,php php0php,php php-php1php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(strtoupperphp(php$typephp)php)php php{
php php php php php php php php php php php php casephp php'Yphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Zphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Ephp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Pphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Tphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Gphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Mphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php(php1php0php2php4php php*php php1php0php2php4php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'Kphp'php:
php php php php php php php php php php php php php php php php php$valuephp php*php=php php1php0php2php4php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$valuephp;
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
