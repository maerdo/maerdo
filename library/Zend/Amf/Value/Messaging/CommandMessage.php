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
php php*php php@versionphp php php php php$Idphp:php CommandMessagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Amfphp_Valuephp_Messagingphp_AsyncMessage
php php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/Messagingphp/AsyncMessagephp.phpphp'php;

php/php*php*
php php*php Aphp messagephp thatphp representsphp anphp infrastructurephp commandphp passedphp between
php php*php clientphp andphp serverphp.php Subscribephp/unsubscribephp operationsphp resultphp in
php php*php CommandMessagephp transmissionsphp,php asphp dophp pollingphp operationsphp.
php php*
php php*php Correspondsphp tophp flexphp.messagingphp.messagesphp.CommandMessage
php php*
php php*php Notephp:php THESEphp VALUESphp MUSTphp BEphp THEphp SAMEphp ONphp CLIENTphp ANDphp SERVER
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Valuephp_Messagingphp_CommandMessagephp extendsphp Zendphp_Amfphp_Valuephp_Messagingphp_AsyncMessage
php{
php php php php php/php*php*
php php php php php php*php php Thisphp operationphp isphp usedphp tophp subscribephp tophp aphp remotephp destinationphp.
php php php php php php*php/
php php php php constphp SUBSCRIBEphp_OPERATIONphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp unsubscribephp fromphp aphp remotephp destinationphp.
php php php php php php*php/
php php php php constphp UNSUSBSCRIBEphp_OPERATIONphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp pollphp aphp remotephp destinationphp forphp pendingphp,
php php php php php php*php undeliveredphp messagesphp.
php php php php php php*php/
php php php php constphp POLLphp_OPERATIONphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp byphp aphp remotephp destinationphp tophp syncphp missedphp orphp cachedphp messages
php php php php php php*php backphp tophp aphp clientphp asphp aphp resultphp ofphp aphp clientphp issuedphp pollphp commandphp.
php php php php php php*php/
php php php php constphp CLIENTphp_SYNCphp_OPERATIONphp php=php php4php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp testphp connectivityphp overphp thephp currentphp channelphp to
php php php php php php*php thephp remotephp endpointphp.
php php php php php php*php/
php php php php constphp CLIENTphp_PINGphp_OPERATIONphp php=php php5php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp requestphp aphp listphp ofphp failoverphp endpointphp URIs
php php php php php php*php forphp thephp remotephp destinationphp basedphp onphp clusterphp membershipphp.
php php php php php php*php/
php php php php constphp CLUSTERphp_REQUESTphp_OPERATIONphp php=php php7php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp sendphp credentialsphp tophp thephp endpointphp sophp that
php php php php php php*php thephp userphp canphp bephp loggedphp inphp overphp thephp currentphp channelphp.
php php php php php php*php Thephp credentialsphp needphp tophp bephp Basephp6php4php encodedphp andphp storedphp inphp thephp php<codephp>body<php/codephp>
php php php php php php*php ofphp thephp messagephp.
php php php php php php*php/
php php php php constphp LOGINphp_OPERATIONphp php=php php8php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp logphp thephp userphp outphp ofphp thephp currentphp channelphp,php and
php php php php php php*php willphp invalidatephp thephp serverphp sessionphp ifphp thephp channelphp isphp HTTPphp basedphp.
php php php php php php*php/
php php php php constphp LOGOUTphp_OPERATIONphp php=php php9php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp indicatephp thatphp thephp clientphp'sphp subscriptionphp tophp a
php php php php php php*php remotephp destinationphp hasphp beenphp invalidatedphp.
php php php php php php*php/
php php php php constphp SESSIONphp_INVALIDATEphp_OPERATIONphp php=php php1php0php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp byphp thephp MultiTopicConsumerphp tophp subscribephp/unsubscribe
php php php php php php*php fromphp multiplephp subtopicsphp/selectorsphp inphp thephp samephp messagephp.
php php php php php php*php/
php php php php constphp MULTIphp_SUBSCRIBEphp_OPERATIONphp php=php php1php1php;

php php php php php/php*php*
php php php php php php*php Thisphp operationphp isphp usedphp tophp indicatephp thatphp aphp channelphp hasphp disconnected
php php php php php php*php/
php php php php constphp DISCONNECTphp_OPERATIONphp php=php php1php2php;

php php php php php/php*php*
php php php php php php*php Thisphp isphp thephp defaultphp operationphp forphp newphp CommandMessagephp instancesphp.
php php php php php php*php/
php php php php constphp UNKNOWNphp_OPERATIONphp php=php php1php0php0php0php0php;

php php php php php/php*php*
php php php php php php*php Thephp operationphp tophp executephp forphp messagesphp ofphp thisphp type
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php publicphp php$operationphp php=php selfphp:php:UNKNOWNphp_OPERATIONphp;
php}
