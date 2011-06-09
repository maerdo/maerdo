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
php php*php php@versionphp php php php php$Idphp:php Identicalphp.phpphp php2php2php0php7php5php php2php0php1php0php-php0php5php-php0php2php php1php3php:php4php2php:php0php8Zphp thomasphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Validatephp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Identicalphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Errorphp codes
php php php php php php*php php@constphp string
php php php php php php*php/
php php php php constphp NOTphp_SAMEphp php php php php php php=php php'notSamephp'php;
php php php php constphp MISSINGphp_TOKENphp php=php php'missingTokenphp'php;

php php php php php/php*php*
php php php php php php*php Errorphp messages
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:NOTphp_SAMEphp php php php php php php=php>php php"Thephp twophp givenphp tokensphp dophp notphp matchphp"php,
php php php php php php php php selfphp:php:MISSINGphp_TOKENphp php=php>php php'Nophp tokenphp wasphp providedphp tophp matchphp againstphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'tokenphp'php php=php>php php'php_tokenStringphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Originalphp tokenphp againstphp whichphp tophp validate
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tokenStringphp;
php php php php protectedphp php$php_tokenphp;
php php php php protectedphp php$php_strictphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$token
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$tokenphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$tokenphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$tokenphp php=php php$tokenphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$tokenphp)php php&php&php arrayphp_keyphp_existsphp(php'tokenphp'php,php php$tokenphp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'strictphp'php,php php$tokenphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setStrictphp(php$tokenphp[php'strictphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>setTokenphp(php$tokenphp[php'tokenphp'php]php)php;
php php php php php php php php php}php elsephp ifphp php(nullphp php!php=php=php php$tokenphp)php php{
php php php php php php php php php php php php php$thisphp-php>setTokenphp(php$tokenphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp token
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTokenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_tokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp tokenphp againstphp whichphp tophp compare
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$token
php php php php php php*php php@returnphp Zendphp_Validatephp_Identical
php php php php php php*php/
php php php php publicphp functionphp setTokenphp(php$tokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tokenStringphp php=php php(stringphp)php php$tokenphp;
php php php php php php php php php$thisphp-php>php_tokenphp php php php php php php php=php php$tokenphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp strictphp parameter
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getStrictphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_strictphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp strictphp parameter
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Validatephp_Identical
php php php php php php*php/
php php php php publicphp functionphp setStrictphp(php$strictphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_strictphp php=php php(booleanphp)php php$strictphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp aphp tokenphp hasphp beenphp setphp andphp thephp providedphp value
php php php php php php*php matchesphp thatphp tokenphp.
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php arrayphp php$context
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$contextphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php(stringphp)php php$valuephp)php;

php php php php php php php php ifphp php(php(php$contextphp php!php=php=php nullphp)php php&php&php issetphp(php$contextphp)php php&php&php arrayphp_keyphp_existsphp(php$thisphp-php>getTokenphp(php)php,php php$contextphp)php)php php{
php php php php php php php php php php php php php$tokenphp php=php php$contextphp[php$thisphp-php>getTokenphp(php)php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tokenphp php=php php$thisphp-php>getTokenphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$tokenphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:MISSINGphp_TOKENphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$strictphp php=php php$thisphp-php>getStrictphp(php)php;
php php php php php php php php ifphp php(php(php$strictphp php&php&php php(php$valuephp php!php=php=php php$tokenphp)php)php php|php|php php(php!php$strictphp php&php&php php(php$valuephp php!php=php php$tokenphp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTphp_SAMEphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
