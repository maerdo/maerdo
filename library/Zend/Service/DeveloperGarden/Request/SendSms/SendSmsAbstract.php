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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SendSmsAbstractphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/RequestAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstract
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php{
php php php php php/php*php*
php php php php php php*php thephp numberphp orphp numbersphp tophp receivephp thisphp sms
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$numberphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php thephp messagephp ofphp thisphp sms
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$messagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php namephp ofphp thephp sender
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$originatorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php account
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$accountphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php arrayphp ofphp specialphp charsphp thatphp arephp usedphp forphp counting
php php php php php php*php messagephp length
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_specialCharsphp php=php arrayphp(
php php php php php php php php php'php|php'php,
php php php php php php php php php'php^php'php,
php php php php php php php php php'php{php'php,
php php php php php php php php php'php}php'php,
php php php php php php php php php'php[php'php,
php php php php php php php php php'php]php'php,
php php php php php php php php php'php~php'php,
php php php php php php php php php'php\php\php'php,
php php php php php php php php php"php\nphp"php,
php php php php php php php php php/php/php php'php€php'php,php removedphp becausephp itsphp countedphp inphp utfphp8php correctly
php php php php php)php;

php php php php php/php*php*
php php php php php php*php whatphp SMSphp typephp isphp it
php php php php php php*
php php php php php php*php php1php php=php SMS
php php php php php php*php php2php php=php FlashSMS
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_smsTypephp php=php php1php;

php php php php php/php*php*
php php php php php php*php thephp counterphp forphp increasingphp messagephp count
php php php php php php*php ifphp morephp thanphp thisphp php1php6php0php charsphp wephp sendphp aphp php2ndphp orphp counting
php php php php php php*php smsphp message
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_smsLengthphp php=php php1php5php3php;

php php php php php/php*php*
php php php php php php*php maximumphp lengthphp ofphp anphp smsphp message
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_maxLengthphp php=php php7php6php5php;

php php php php php/php*php*
php php php php php php*php thephp maximumphp numbersphp tophp sendphp anphp sms
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_maxNumbersphp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php returnsphp thephp assignedphp numbers
php php php php php php*
php php php php php php*php php@returnphp stringphp php$number
php php php php php php*php/
php php php php publicphp functionphp getNumberphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>numberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp aphp newphp numberphp(sphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_Exception
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstract
php php php php php php*php/
php php php php publicphp functionphp setNumberphp(php$numberphp)
php php php php php{
php php php php php php php php php$thisphp-php>numberphp php=php php$numberphp;
php php php php php php php php ifphp php(php$thisphp-php>getNumberCountphp(php)php php>php php$thisphp-php>php_maxNumbersphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_Exceptionphp(php'Thephp messagephp isphp toophp longphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp currentphp message
php php php php php php*
php php php php php php*php php@returnphp stringphp php$message
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp aphp newphp message
php php php php php php*
php php php php php php*php php@paramphp stringphp php$message
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_Exception
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstract
php php php php php php*php/
php php php php publicphp functionphp setMessagephp(php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>messagephp php=php php$messagephp;
php php php php php php php php ifphp php(php$thisphp-php>getMessageLengthphp(php)php php>php php$thisphp-php>php_maxLengthphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_Exceptionphp(php'Thephp messagephp isphp toophp longphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp originator
php php php php php php*
php php php php php php*php php@returnphp thephp php$originator
php php php php php php*php/
php php php php publicphp functionphp getOriginatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>originatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php thephp originatorphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$originator
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstract
php php php php php php*php/
php php php php publicphp functionphp setOriginatorphp(php$originatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>originatorphp php=php php$originatorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php thephp account
php php php php php php*php php@returnphp integerphp php$account
php php php php php php*php/
php php php php publicphp functionphp getAccountphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>accountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp aphp newphp accounts
php php php php php php*
php php php php php php*php php@paramphp php$accountphp thephp php$accountphp tophp set
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstract
php php php php php php*php/
php php php php publicphp functionphp setAccountphp(php$accountphp)
php php php php php{
php php php php php php php php php$thisphp-php>accountphp php=php php$accountphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp calculatedphp messagephp length
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMessageLengthphp(php)
php php php php php{
php php php php php php php php php$messagephp php=php php$thisphp-php>getMessagephp(php)php;
php php php php php php php php php$lengthphp php php=php strlenphp(php$messagephp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_specialCharsphp asphp php$charphp)php php{
php php php php php php php php php php php php php$cphp php=php php(substrphp_countphp(php$messagephp,php php$charphp)php php*php php2php)php php-php php1php;
php php php php php php php php php php php php ifphp php(php$cphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$lengthphp php+php=php php$cphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$lengthphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp countphp ofphp smsphp messagesphp thatphp wouldphp bephp send
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMessageCountphp(php)
php php php php php{
php php php php php php php php php$smsLengthphp php=php php$thisphp-php>getMessageLengthphp(php)php;
php php php php php php php php php$retValuephp php=php php1php;
php php php php php php php php ifphp php(php$smsLengthphp php>php php1php6php0php)php php{
php php php php php php php php php php php php php$retValuephp php=php ceilphp(php$smsLengthphp php/php php$thisphp-php>php_smsLengthphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$retValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp countphp ofphp numbersphp inphp thisphp sms
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getNumberCountphp(php)
php php php php php{
php php php php php php php php php$numberphp php php php=php php$thisphp-php>getNumberphp(php)php;
php php php php php php php php php$retValuephp php=php php0php;
php php php php php php php php ifphp php(php!emptyphp(php$numberphp)php)php php{
php php php php php php php php php php php php php$retValuephp php=php countphp(explodephp(php'php,php'php,php php$numberphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$retValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp smsphp type
php php php php php php*php currentlyphp wephp have
php php php php php php*php php1php php=php Sms
php php php php php php*php php2php php=php FlashSms
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getSmsTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_smsTypephp;
php php php php php}
php}
