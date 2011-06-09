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
php php*php php@versionphp php php php php$Idphp:php Ccnumphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Validatephp_Ccnumphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp keyphp forphp whenphp thephp valuephp isphp notphp ofphp validphp length
php php php php php php*php/
php php php php constphp LENGTHphp php php php=php php'ccnumLengthphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp keyphp forphp whenphp thephp valuephp failsphp thephp modphp-php1php0php checksum
php php php php php php*php/
php php php php constphp CHECKSUMphp php=php php'ccnumChecksumphp'php;

php php php php php/php*php*
php php php php php php*php Digitsphp filterphp forphp input
php php php php php php*
php php php php php php*php php@varphp Zendphp_Filterphp_Digits
php php php php php php*php/
php php php php protectedphp staticphp php$php_filterphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:LENGTHphp php php php=php>php php"php'php%valuephp%php'php mustphp containphp betweenphp php1php3php andphp php1php9php digitsphp"php,
php php php php php php php php selfphp:php:CHECKSUMphp php=php>php php"Luhnphp algorithmphp php(modphp-php1php0php checksumphp)php failedphp onphp php'php%valuephp%php'php"
php php php php php)php;

php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php triggerphp_errorphp(php'Usingphp thephp Ccnumphp validatorphp isphp deprecatedphp inphp favorphp ofphp thephp CreditCardphp validatorphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp followsphp thephp Luhnphp algorithmphp php(modphp-php1php0php checksumphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_filterphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Filterphp_Digits
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Digitsphp.phpphp'php;
php php php php php php php php php php php php selfphp:php:php$php_filterphp php=php newphp Zendphp_Filterphp_Digitsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$valueFilteredphp php=php selfphp:php:php$php_filterphp-php>filterphp(php$valuephp)php;

php php php php php php php php php$lengthphp php=php strlenphp(php$valueFilteredphp)php;

php php php php php php php php ifphp php(php$lengthphp <php php1php3php php|php|php php$lengthphp php>php php1php9php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:LENGTHphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$sumphp php php php php=php php0php;
php php php php php php php php php$weightphp php=php php2php;

php php php php php php php php forphp php(php$iphp php=php php$lengthphp php-php php2php;php php$iphp php>php=php php0php;php php$iphp-php-php)php php{
php php php php php php php php php php php php php$digitphp php=php php$weightphp php*php php$valueFilteredphp[php$iphp]php;
php php php php php php php php php php php php php$sumphp php+php=php floorphp(php$digitphp php/php php1php0php)php php+php php$digitphp php%php php1php0php;
php php php php php php php php php php php php php$weightphp php=php php$weightphp php%php php2php php+php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php1php0php php-php php$sumphp php%php php1php0php)php php%php php1php0php php!php=php php$valueFilteredphp[php$lengthphp php-php php1php]php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CHECKSUMphp,php php$valueFilteredphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
