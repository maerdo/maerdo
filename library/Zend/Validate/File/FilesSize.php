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
php php*php php@versionphp php php php$Idphp:php FilesSizephp.phpphp php2php0php4php5php4php php2php0php1php0php-php0php1php-php2php0php php2php2php:php5php0php:php5php9Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Filephp_Size
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Filephp/Sizephp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp sizephp ofphp allphp filesphp whichphp willphp bephp validatedphp inphp sum
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_FilesSizephp extendsphp Zendphp_Validatephp_Filephp_Size
php{
php php php php php/php*php*
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp TOOphp_BIGphp php php php php php php=php php'fileFilesSizeTooBigphp'php;
php php php php constphp TOOphp_SMALLphp php php php php=php php'fileFilesSizeTooSmallphp'php;
php php php php constphp NOTphp_READABLEphp php=php php'fileFilesSizeNotReadablephp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:TOOphp_BIGphp php php php php php php=php>php php"Allphp filesphp inphp sumphp shouldphp havephp aphp maximumphp sizephp ofphp php'php%maxphp%php'php butphp php'php%sizephp%php'php werephp detectedphp"php,
php php php php php php php php selfphp:php:TOOphp_SMALLphp php php php php=php>php php"Allphp filesphp inphp sumphp shouldphp havephp aphp minimumphp sizephp ofphp php'php%minphp%php'php butphp php'php%sizephp%php'php werephp detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_READABLEphp php=php>php php"Onephp orphp morephp filesphp canphp notphp bephp readphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Internalphp filephp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_filesphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php Minphp limitsphp thephp usedphp diskspacephp forphp allphp filesphp,php whenphp usedphp withphp maxphp=nullphp itphp isphp thephp maximumphp filesize
php php php php php php*php Itphp alsophp acceptsphp anphp arrayphp withphp thephp keysphp php'minphp'php andphp php'maxphp'
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp|Zendphp_Configphp php$optionsphp Optionsphp forphp thisphp validator
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_setSizephp(php0php)php;

php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_scalarphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'maxphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Invalidphp optionsphp tophp validatorphp providedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php1php <php funcphp_numphp_argsphp(php)php)php php{
php php php php php php php php php php php php php$argvphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php$optionsphp[php'maxphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$argvphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'bytestringphp'php]php php=php arrayphp_shiftphp(php$argvphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp diskphp usagephp ofphp allphp filesphp isphp atphp leastphp minphp and
php php php php php php*php notphp biggerphp thanphp maxphp php(whenphp maxphp isphp notphp nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$valuephp Realphp filephp tophp checkphp forphp size
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$valuephp php=php arrayphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$minphp php php=php php$thisphp-php>getMinphp(truephp)php;
php php php php php php php php php$maxphp php php=php php$thisphp-php>getMaxphp(truephp)php;
php php php php php php php php php$sizephp php=php php$thisphp-php>php_getSizephp(php)php;
php php php php php php php php foreachphp php(php$valuephp asphp php$filesphp)php php{
php php php php php php php php php php php php php/php/php Isphp filephp readablephp php?
php php php php php php php php php php php php ifphp php(php!Zendphp_Loaderphp:php:isReadablephp(php$filesphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_READABLEphp)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_filesphp[php$filesphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filesphp]php php=php php$filesphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php filephp alreadyphp countedphp.php.php.php dophp notphp countphp twice
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php limitedphp tophp php2GBphp files
php php php php php php php php php php php php php$sizephp php+php=php php@filesizephp(php$filesphp)php;
php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$sizephp;
php php php php php php php php php php php php ifphp php(php(php$maxphp php!php=php=php nullphp)php php&php&php php(php$maxphp <php php$sizephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>useByteStringphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_maxphp php php=php php$thisphp-php>php_toByteStringphp(php$maxphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$thisphp-php>php_toByteStringphp(php$sizephp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_BIGphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_maxphp php php=php php$maxphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_sizephp php=php php$sizephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_BIGphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp thatphp aggregatephp filesphp arephp php>php=php minimumphp size
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

php php php php php php php php ifphp php(countphp(php$thisphp-php>php_messagesphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
