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
php php*php php@versionphp php php php$Idphp:php ImageSizephp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp imagephp sizephp ofphp aphp imagephp file
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_ImageSizephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp WIDTHphp_TOOphp_BIGphp php php php php=php php'fileImageSizeWidthTooBigphp'php;
php php php php constphp WIDTHphp_TOOphp_SMALLphp php php=php php'fileImageSizeWidthTooSmallphp'php;
php php php php constphp HEIGHTphp_TOOphp_BIGphp php php php=php php'fileImageSizeHeightTooBigphp'php;
php php php php constphp HEIGHTphp_TOOphp_SMALLphp php=php php'fileImageSizeHeightTooSmallphp'php;
php php php php constphp NOTphp_DETECTEDphp php php php php php=php php'fileImageSizeNotDetectedphp'php;
php php php php constphp NOTphp_READABLEphp php php php php php=php php'fileImageSizeNotReadablephp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp template
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:WIDTHphp_TOOphp_BIGphp php php php php=php>php php"Maximumphp allowedphp widthphp forphp imagephp php'php%valuephp%php'php shouldphp bephp php'php%maxwidthphp%php'php butphp php'php%widthphp%php'php detectedphp"php,
php php php php php php php php selfphp:php:WIDTHphp_TOOphp_SMALLphp php php=php>php php"Minimumphp expectedphp widthphp forphp imagephp php'php%valuephp%php'php shouldphp bephp php'php%minwidthphp%php'php butphp php'php%widthphp%php'php detectedphp"php,
php php php php php php php php selfphp:php:HEIGHTphp_TOOphp_BIGphp php php php=php>php php"Maximumphp allowedphp heightphp forphp imagephp php'php%valuephp%php'php shouldphp bephp php'php%maxheightphp%php'php butphp php'php%heightphp%php'php detectedphp"php,
php php php php php php php php selfphp:php:HEIGHTphp_TOOphp_SMALLphp php=php>php php"Minimumphp expectedphp heightphp forphp imagephp php'php%valuephp%php'php shouldphp bephp php'php%minheightphp%php'php butphp php'php%heightphp%php'php detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_DETECTEDphp php php php php php=php>php php"Thephp sizephp ofphp imagephp php'php%valuephp%php'php couldphp notphp bephp detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_READABLEphp php php php php php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templatephp variables
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'minwidthphp'php php php=php>php php'php_minwidthphp'php,
php php php php php php php php php'maxwidthphp'php php php=php>php php'php_maxwidthphp'php,
php php php php php php php php php'minheightphp'php php=php>php php'php_minheightphp'php,
php php php php php php php php php'maxheightphp'php php=php>php php'php_maxheightphp'php,
php php php php php php php php php'widthphp'php php php php php php=php>php php'php_widthphp'php,
php php php php php php php php php'heightphp'php php php php php=php>php php'php_heightphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Minimumphp imagephp width
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_minwidthphp;

php php php php php/php*php*
php php php php php php*php Maximumphp imagephp width
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_maxwidthphp;

php php php php php/php*php*
php php php php php php*php Minimumphp imagephp height
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_minheightphp;

php php php php php/php*php*
php php php php php php*php Maximumphp imagephp height
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_maxheightphp;

php php php php php/php*php*
php php php php php php*php Detectedphp width
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_widthphp;

php php php php php/php*php*
php php php php php php*php Detectedphp height
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_heightphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php Acceptsphp thephp followingphp optionphp keysphp:
php php php php php php*php php-php minheight
php php php php php php*php php-php minwidth
php php php php php php*php php-php maxheight
php php php php php php*php php-php maxwidth
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp|arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(php1php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'minwidthphp'php php=php>php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php$optionsphp[php'minheightphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$argvphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'maxwidthphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$argvphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'maxheightphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp php(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'minheightphp'php]php)php php|php|php issetphp(php$optionsphp[php'minwidthphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setImageMinphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxheightphp'php]php)php php|php|php issetphp(php$optionsphp[php'maxwidthphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setImageMaxphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp minimumphp imagephp sizes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImageMinphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'minwidthphp'php php=php>php php$thisphp-php>php_minwidthphp,php php'minheightphp'php php=php>php php$thisphp-php>php_minheightphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp maximumphp imagephp sizes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImageMaxphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'maxwidthphp'php php=php>php php$thisphp-php>php_maxwidthphp,php php'maxheightphp'php php=php>php php$thisphp-php>php_maxheightphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp imagephp widthphp sizes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImageWidthphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'minwidthphp'php php=php>php php$thisphp-php>php_minwidthphp,php php'maxwidthphp'php php=php>php php$thisphp-php>php_maxwidthphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp imagephp heightphp sizes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getImageHeightphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'minheightphp'php php=php>php php$thisphp-php>php_minheightphp,php php'maxheightphp'php php=php>php php$thisphp-php>php_maxheightphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp minimumphp imagephp size
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php php php php php php php php php php php php php Thephp minimumphp imagephp dimensions
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp php php php php php Whenphp minwidthphp isphp greaterphp thanphp maxwidth
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp php php php php php Whenphp minheightphp isphp greaterphp thanphp maxheight
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_ImageSizephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setImageMinphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'minwidthphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php(php$thisphp-php>php_maxwidthphp php!php=php=php nullphp)php andphp php(php$optionsphp[php'minwidthphp'php]php php>php php$thisphp-php>php_maxwidthphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp minimumphp imagephp widthphp mustphp bephp lessphp thanphp orphp equalphp tophp thephp php"
php php php php php php php php php php php php php php php php php php php php php.php php"php maximumphp imagephp widthphp,php butphp php{php$optionsphp[php'minwidthphp'php]php}php php>php php{php$thisphp-php>php_maxwidthphp}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxheightphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php(php$thisphp-php>php_maxheightphp php!php=php=php nullphp)php andphp php(php$optionsphp[php'minheightphp'php]php php>php php$thisphp-php>php_maxheightphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp minimumphp imagephp heightphp mustphp bephp lessphp thanphp orphp equalphp tophp thephp php"
php php php php php php php php php php php php php php php php php php php php php.php php"php maximumphp imagephp heightphp,php butphp php{php$optionsphp[php'minheightphp'php]php}php php>php php{php$thisphp-php>php_maxheightphp}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'minwidthphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_minwidthphp php php=php php(intphp)php php$optionsphp[php'minwidthphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'minheightphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_minheightphp php=php php(intphp)php php$optionsphp[php'minheightphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp maximumphp imagephp size
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php php php php php php php php Thephp maximumphp imagephp dimensions
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp maxwidthphp isphp smallerphp thanphp minwidth
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp maxheightphp isphp smallerphp thanphp minheight
php php php php php php*php php@returnphp Zendphp_Validatephp_StringLengthphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setImageMaxphp(php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxwidthphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php(php$thisphp-php>php_minwidthphp php!php=php=php nullphp)php andphp php(php$optionsphp[php'maxwidthphp'php]php <php php$thisphp-php>php_minwidthphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp maximumphp imagephp widthphp mustphp bephp greaterphp thanphp orphp equalphp tophp thephp php"
php php php php php php php php php php php php php php php php php php php php php.php php"minimumphp imagephp widthphp,php butphp php{php$optionsphp[php'maxwidthphp'php]php}php <php php{php$thisphp-php>php_minwidthphp}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxheightphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php(php$thisphp-php>php_minheightphp php!php=php=php nullphp)php andphp php(php$optionsphp[php'maxheightphp'php]php <php php$thisphp-php>php_minheightphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Thephp maximumphp imagephp heightphp mustphp bephp greaterphp thanphp orphp equalphp tophp thephp php"
php php php php php php php php php php php php php php php php php php php php php.php php"minimumphp imagephp heightphp,php butphp php{php$optionsphp[php'maxheightphp'php]php}php <php php{php$thisphp-php>php_minwidthphp}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxwidthphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_maxwidthphp php php=php php(intphp)php php$optionsphp[php'maxwidthphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'maxheightphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_maxheightphp php=php php(intphp)php php$optionsphp[php'maxheightphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp mimimumphp andphp maximumphp imagephp width
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php php php php php php php php php php php php php Thephp imagephp widthphp dimensions
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_ImageSizephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setImageWidthphp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>setImageMinphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>setImageMaxphp(php$optionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp mimimumphp andphp maximumphp imagephp height
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php php php php php php php php php php php php php Thephp imagephp heightphp dimensions
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_ImageSizephp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setImageHeightphp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>setImageMinphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>setImageMaxphp(php$optionsphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp imagesizephp ofphp php$valuephp isphp atphp leastphp minphp and
php php php php php php*php notphp biggerphp thanphp max
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Realphp filephp tophp checkphp forphp imagephp size
php php php php php php*php php@paramphp php arrayphp php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Isphp filephp readablephp php?
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Loaderphp:php:isReadablephp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_READABLEphp)php;
php php php php php php php php php}

php php php php php php php php php$sizephp php=php php@getimagesizephp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_setValuephp(php$filephp)php;

php php php php php php php php ifphp php(emptyphp(php$sizephp)php orphp php(php$sizephp[php0php]php php=php=php=php php0php)php orphp php(php$sizephp[php1php]php php=php=php=php php0php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_DETECTEDphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_widthphp php php=php php$sizephp[php0php]php;
php php php php php php php php php$thisphp-php>php_heightphp php=php php$sizephp[php1php]php;
php php php php php php php php ifphp php(php$thisphp-php>php_widthphp <php php$thisphp-php>php_minwidthphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:WIDTHphp_TOOphp_SMALLphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$thisphp-php>php_maxwidthphp php!php=php=php nullphp)php andphp php(php$thisphp-php>php_maxwidthphp <php php$thisphp-php>php_widthphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:WIDTHphp_TOOphp_BIGphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_heightphp <php php$thisphp-php>php_minheightphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:HEIGHTphp_TOOphp_SMALLphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$thisphp-php>php_maxheightphp php!php=php=php nullphp)php andphp php(php$thisphp-php>php_maxheightphp <php php$thisphp-php>php_heightphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:HEIGHTphp_TOOphp_BIGphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_messagesphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
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
