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
php php*php php@versionphp php php php php$Idphp:php Regexphp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
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
classphp Zendphp_Validatephp_Regexphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php=php php'regexInvalidphp'php;
php php php php constphp NOTphp_MATCHphp php=php php'regexNotMatchphp'php;
php php php php constphp ERROROUSphp php php=php php'regexErrorousphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:INVALIDphp php php php=php>php php"Invalidphp typephp givenphp.php Stringphp,php integerphp orphp floatphp expectedphp"php,
php php php php php php php php selfphp:php:NOTphp_MATCHphp php=php>php php"php'php%valuephp%php'php doesphp notphp matchphp againstphp patternphp php'php%patternphp%php'php"php,
php php php php php php php php selfphp:php:ERROROUSphp php php=php>php php"Therephp wasphp anphp internalphp errorphp whilephp usingphp thephp patternphp php'php%patternphp%php'php"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'patternphp'php php=php>php php'php_patternphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Regularphp expressionphp pattern
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_patternphp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Configphp php$pattern
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Onphp missingphp php'patternphp'php parameter
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$patternphp)
php php php php php{
php php php php php php php php ifphp php(php$patternphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$patternphp php=php php$patternphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$patternphp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'patternphp'php,php php$patternphp)php)php php{
php php php php php php php php php php php php php php php php php$patternphp php=php php$patternphp[php'patternphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Missingphp optionphp php'patternphp'php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setPatternphp(php$patternphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp patternphp option
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPatternphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_patternphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp patternphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$pattern
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp ifphp therephp isphp aphp fatalphp errorphp inphp patternphp matching
php php php php php php*php php@returnphp Zendphp_Validatephp_Regexphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setPatternphp(php$patternphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_patternphp php=php php(stringphp)php php$patternphp;
php php php php php php php php php$statusphp php php php php php php php php php=php php@pregphp_matchphp(php$thisphp-php>php_patternphp,php php"Testphp"php)php;

php php php php php php php php ifphp php(falsephp php=php=php=php php$statusphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Internalphp errorphp whilephp usingphp thephp patternphp php'php$thisphp-php>php_patternphp'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp matchesphp againstphp thephp patternphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php php&php&php php!isphp_intphp(php$valuephp)php php&php&php php!isphp_floatphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php php$statusphp php=php php@pregphp_matchphp(php$thisphp-php>php_patternphp,php php$valuephp)php;
php php php php php php php php ifphp php(falsephp php=php=php=php php$statusphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:ERROROUSphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$statusphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_MATCHphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
