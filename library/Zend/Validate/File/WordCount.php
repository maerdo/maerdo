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
php php*php php@versionphp php php php$Idphp:php WordCountphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Filephp_Count
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Filephp/Countphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp countingphp allphp wordsphp inphp aphp file
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_WordCountphp extendsphp Zendphp_Validatephp_Filephp_Count
php{
php php php php php/php*php*php#php@php+
php php php php php php*php php@constphp stringphp Errorphp constants
php php php php php php*php/
php php php php constphp TOOphp_MUCHphp php php=php php'fileWordCountTooMuchphp'php;
php php php php constphp TOOphp_LESSphp php php=php php'fileWordCountTooLessphp'php;
php php php php constphp NOTphp_FOUNDphp php=php php'fileWordCountNotFoundphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:TOOphp_MUCHphp php=php>php php"Toophp muchphp wordsphp,php maximumphp php'php%maxphp%php'php arephp allowedphp butphp php'php%countphp%php'php werephp countedphp"php,
php php php php php php php php selfphp:php:TOOphp_LESSphp php=php>php php"Toophp lessphp wordsphp,php minimumphp php'php%minphp%php'php arephp expectedphp butphp php'php%countphp%php'php werephp countedphp"php,
php php php php php php php php selfphp:php:NOTphp_FOUNDphp php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp thephp countedphp wordsphp arephp atphp leastphp minphp and
php php php php php php*php notphp biggerphp thanphp maxphp php(whenphp maxphp isphp notphp nullphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Filenamephp tophp checkphp forphp wordphp count
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

php php php php php php php php php$contentphp php=php filephp_getphp_contentsphp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_countphp php=php strphp_wordphp_countphp(php$contentphp)php;
php php php php php php php php ifphp php(php(php$thisphp-php>php_maxphp php!php=php=php nullphp)php php&php&php php(php$thisphp-php>php_countphp php>php php$thisphp-php>php_maxphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_MUCHphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$thisphp-php>php_minphp php!php=php=php nullphp)php php&php&php php(php$thisphp-php>php_countphp <php php$thisphp-php>php_minphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:TOOphp_LESSphp)php;
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
