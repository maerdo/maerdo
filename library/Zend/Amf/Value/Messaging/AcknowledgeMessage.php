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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AcknowledgeMessagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Amfphp_Valuephp_Messagingphp_AsyncMessagephp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/Messagingphp/AsyncMessagephp.phpphp'php;

php/php*php*
php php*php Thisphp isphp thephp typephp ofphp messagephp returnedphp byphp thephp MessageBroker
php php*php tophp endpointsphp afterphp thephp brokerphp hasphp routedphp anphp endpointphp'sphp message
php php*php tophp aphp servicephp.
php php*
php php*php flexphp.messagingphp.messagesphp.AcknowledgeMessage
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Valuephp_Messagingphp_AcknowledgeMessagephp extendsphp Zendphp_Amfphp_Valuephp_Messagingphp_AsyncMessage
php{
php php php php php/php*php*
php php php php php php*php Createphp aphp newphp Acknowledgephp Message
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$message
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>clientIdphp php php php php=php php$thisphp-php>generateIdphp(php)php;
php php php php php php php php php$thisphp-php>destinationphp php=php nullphp;
php php php php php php php php php$thisphp-php>messageIdphp php php php=php php$thisphp-php>generateIdphp(php)php;
php php php php php php php php php$thisphp-php>timestampphp php php php=php timephp(php)php.php'php0php0php'php;
php php php php php php php php php$thisphp-php>timeToLivephp php php=php php0php;
php php php php php php php php php$thisphp-php>headersphp php php php php php=php newphp STDClassphp(php)php;
php php php php php php php php php$thisphp-php>bodyphp php php php php php php php php=php nullphp;

php php php php php php php php php/php/php correleatephp thephp twophp messages
php php php php php php php php ifphp php(php$messagephp php&php&php issetphp(php$messagephp-php>messageIdphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>correlationIdphp php=php php$messagephp-php>messageIdphp;
php php php php php php php php php}
php php php php php}
php}
