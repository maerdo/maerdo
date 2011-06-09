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
php php*php php@versionphp php php php php$Idphp:php SendSmsphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/ClientAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SendSmsphp_SendSMSResponse
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/SendSmsphp/SendSMSResponsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SendSmsphp_SendFlashSMSResponse
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/SendSmsphp/SendFlashSMSResponsephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSMS
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/SendSmsphp/SendSMSphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendFlashSMS
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/SendSmsphp/SendFlashSMSphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_SendSms
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_ClientAbstract
php{
php php php php php/php*php*
php php php php php php*php wsdlphp file
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlFilephp php=php php'httpsphp:php/php/gatewayphp.developerphp.telekomphp.comphp/pphp3gwphp-modphp-odgphp-smsphp/servicesphp/SmsServicephp?wsdlphp'php;

php php php php php/php*php*
php php php php php php*php wsdlphp filephp local
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlFileLocalphp php=php php'Wsdlphp/SmsServicephp.wsdlphp'php;

php php php php php/php*php*
php php php php php php*php Responsephp,php Requestphp Classmapping
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*
php php php php php php*php/
php php php php protectedphp php$php_classMapphp php=php arrayphp(
php php php php php php php php php'sendSMSResponsephp'php php php php php php php=php>php php'Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SendSmsphp_SendSMSResponsephp'php,
php php php php php php php php php'sendFlashSMSResponsephp'php php=php>php php'Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SendSmsphp_SendFlashSMSResponsephp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php thisphp functionphp createsphp thephp rawphp smsphp objectphp thatphp canphp bephp usedphp tophp sendphp anphp sms
php php php php php php*php orphp asphp flashphp sms
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@paramphp stringphp php$message
php php php php php php*php php@paramphp stringphp php$originator
php php php php php php*php php@paramphp integerphp php$account
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSMS
php php php php php php*php/
php php php php publicphp functionphp createSmsphp(php$numberphp php=php nullphp,php php$messagephp php=php nullphp,php php$originatorphp php=php nullphp,php php$accountphp php=php nullphp)
php php php php php{
php php php php php php php php php$requestphp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSMSphp(php$thisphp-php>getEnvironmentphp(php)php)php;
php php php php php php php php php$requestphp-php>setNumberphp(php$numberphp)
php php php php php php php php php php php php php php php php php-php>setMessagephp(php$messagephp)
php php php php php php php php php php php php php php php php php-php>setOriginatorphp(php$originatorphp)
php php php php php php php php php php php php php php php php php-php>setAccountphp(php$accountphp)php;
php php php php php php php php returnphp php$requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php thisphp functionphp createsphp thephp rawphp smsphp objectphp thatphp canphp bephp usedphp tophp sendphp anphp sms
php php php php php php*php orphp asphp flashphp sms
php php php php php php*
php php php php php php*php php@paramphp stringphp php$number
php php php php php php*php php@paramphp stringphp php$message
php php php php php php*php php@paramphp stringphp php$originator
php php php php php php*php php@paramphp integerphp php$account
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendFlashSMS
php php php php php php*php/
php php php php publicphp functionphp createFlashSmsphp(php$numberphp php=php nullphp,php php$messagephp php=php nullphp,php php$originatorphp php=php nullphp,php php$accountphp php=php nullphp)
php php php php php{
php php php php php php php php php$requestphp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendFlashSMSphp(php$thisphp-php>getEnvironmentphp(php)php)php;
php php php php php php php php php$requestphp-php>setNumberphp(php$numberphp)
php php php php php php php php php php php php php php php php php-php>setMessagephp(php$messagephp)
php php php php php php php php php php php php php php php php php-php>setOriginatorphp(php$originatorphp)
php php php php php php php php php php php php php php php php php-php>setAccountphp(php$accountphp)php;
php php php php php php php php returnphp php$requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php sendsphp anphp smsphp withphp thephp givenphp parameters
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstractphp php$sms
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_SendSmsphp_SendSmsAbstract
php php php php php php*php/
php php php php publicphp functionphp sendphp(Zendphp_Servicephp_DeveloperGardenphp_Requestphp_SendSmsphp_SendSmsAbstractphp php$smsphp)
php php php php php{
php php php php php php php php php$clientphp php=php php$thisphp-php>getSoapClientphp(php)php;
php php php php php php php php php$requestphp php=php arrayphp(
php php php php php php php php php php php php php'requestphp'php php=php>php php$sms
php php php php php php php php php)php;
php php php php php php php php switchphp php(php$smsphp-php>getSmsTypephp(php)php)php php{
php php php php php php php php php php php php php/php/php Sms
php php php php php php php php php php php php casephp php1php php:
php php php php php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>sendSmsphp(php$requestphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php/php/php flashSms
php php php php php php php php php php php php casephp php2php php:
php php php php php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>sendFlashSmsphp(php$requestphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp php:php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Clientphp_Exceptionphp(php'Unknownphp SMSphp Typephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$responsephp-php>parsephp(php)php;
php php php php php}
php}
