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
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Channel
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php HttpHeadersphp.phpphp php2php3php0php9php6php php2php0php1php0php-php1php0php-php1php2php php2php0php:php3php6php:php1php5Zphp cadornphp php$
php php*php/

php/php*php*php Zendphp_Wildfirephp_Channelphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Channelphp/Interfacephp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Requestphp_Abstractphp php*php/
requirephp_oncephp(php'Zendphp/Controllerphp/Requestphp/Abstractphp.phpphp'php)php;

php/php*php*php Zendphp_Controllerphp_Responsephp_Abstractphp php*php/
requirephp_oncephp(php'Zendphp/Controllerphp/Responsephp/Abstractphp.phpphp'php)php;

php/php*php*php Zendphp_Controllerphp_Pluginphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Pluginphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Wildfirephp_Protocolphp_JsonStreamphp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Protocolphp/JsonStreamphp.phpphp'php;

php/php*php*php Zendphp_Controllerphp_Frontphp php*php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;

php/php*php*
php php*php Implementsphp communicationphp viaphp HTTPphp requestphp andphp responsephp headersphp forphp Wildfirephp Protocolsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Channel
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp extendsphp Zendphp_Controllerphp_Pluginphp_Abstractphp implementsphp Zendphp_Wildfirephp_Channelphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Thephp stringphp tophp bephp usedphp tophp prefixphp thephp headersphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_headerPrefixphp php=php php'Xphp-WFphp-php'php;

php php php php php/php*php*
php php php php php php*php Singletonphp instance
php php php php php php*php php@varphp Zendphp_Wildfirephp_Channelphp_HttpHeaders
php php php php php php*php/
php php php php protectedphp staticphp php$php_instancephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp indexphp ofphp thephp pluginphp inphp thephp controllerphp dispatchphp loopphp pluginphp stack
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp staticphp php$php_controllerPluginStackIndexphp php=php php9php9php9php;

php php php php php/php*php*
php php php php php php*php Thephp protocolphp instancesphp forphp thisphp channel
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_protocolsphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Initializephp singletonphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$classphp OPTIONALphp Subclassphp ofphp Zendphp_Wildfirephp_Channelphp_HttpHeaders
php php php php php php*php php@returnphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp Returnsphp thephp singletonphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp instance
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp staticphp functionphp initphp(php$classphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_instancephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Singletonphp instancephp ofphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp alreadyphp existsphp!php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$classphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_stringphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Thirdphp argumentphp isphp notphp aphp classphp stringphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$classphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp php$classphp(php)php;

php php php php php php php php php php php php ifphp php(php!selfphp:php:php$php_instancephp instanceofphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php nullphp;
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Invalidphp classphp tophp thirdphp argumentphp.php Mustphp bephp subclassphp ofphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp selfphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp orphp createphp singletonphp instance
php php php php php php*
php php php php php php*php php@paramphp php$skipCreatephp booleanphp Truephp ifphp anphp instancephp shouldphp notphp bephp created
php php php php php php*php php@returnphp Zendphp_Wildfirephp_Channelphp_HttpHeaders
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(php$skipCreatephp=falsephp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_instancephp=php=php=nullphp php&php&php php$skipCreatephp!php=php=truephp)php php{
php php php php php php php php php php php php returnphp selfphp:php:initphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Destroysphp thephp singletonphp instance
php php php php php php*
php php php php php php*php Primarilyphp usedphp forphp testingphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp destroyInstancephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_instancephp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp instancephp ofphp aphp givephp protocolphp forphp thisphp channel
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uriphp Thephp URIphp forphp thephp protocol
php php php php php php*php php@returnphp objectphp Returnsphp thephp protocolphp instancephp forphp thephp divenphp URI
php php php php php php*php/
php php php php publicphp functionphp getProtocolphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_protocolsphp[php$uriphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_protocolsphp[php$uriphp]php php=php php$thisphp-php>php_initProtocolphp(php$uriphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_registerControllerPluginphp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_protocolsphp[php$uriphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp aphp newphp protocol
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uriphp Thephp URIphp forphp thephp protocolphp tophp bephp initialized
php php php php php php*php php@returnphp objectphp Returnsphp thephp newphp initializedphp protocolphp instance
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_initProtocolphp(php$uriphp)
php php php php php{
php php php php php php php php switchphp php(php$uriphp)php php{
php php php php php php php php php php php php casephp Zendphp_Wildfirephp_Protocolphp_JsonStreamphp:php:PROTOCOLphp_URIphp;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Wildfirephp_Protocolphp_JsonStreamphp(php)php;
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Tyringphp tophp initializephp unknownphp protocolphp forphp URIphp php"php'php.php$uriphp.php'php"php.php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Flushphp allphp dataphp fromphp allphp protocolsphp andphp sendphp allphp dataphp tophp responsephp headersphp.
php php php php php php*
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp dataphp wasphp flushed
php php php php php php*php/
php php php php publicphp functionphp flushphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolsphp php|php|php php!php$thisphp-php>isReadyphp(php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php php$thisphp-php>php_protocolsphp asphp php$protocolphp php)php php{

php php php php php php php php php php php php php$payloadphp php=php php$protocolphp-php>getPayloadphp(php$thisphp)php;

php php php php php php php php php php php php ifphp php(php$payloadphp)php php{
php php php php php php php php php php php php php php php php foreachphp(php php$payloadphp asphp php$messagephp php)php php{

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getResponsephp(php)php-php>setHeaderphp(selfphp:php:php$php_headerPrefixphp.php$messagephp[php0php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$messagephp[php1php]php,php truephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp indexphp ofphp thephp pluginphp inphp thephp controllerphp dispatchphp loopphp pluginphp stack
php php php php php php*
php php php php php php*php php@paramphp integerphp php$indexphp Thephp indexphp ofphp thephp pluginphp inphp thephp stack
php php php php php php*php php@returnphp integerphp Thephp previousphp indexphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp setControllerPluginStackIndexphp(php$indexphp)
php php php php php{
php php php php php php php php php$previousphp php=php selfphp:php:php$php_controllerPluginStackIndexphp;
php php php php php php php php selfphp:php:php$php_controllerPluginStackIndexphp php=php php$indexphp;
php php php php php php php php returnphp php$previousphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp thisphp objectphp asphp aphp controllerphp pluginphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_registerControllerPluginphp(php)
php php php php php{
php php php php php php php php php$controllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php ifphp php(php!php$controllerphp-php>hasPluginphp(getphp_classphp(php$thisphp)php)php)php php{
php php php php php php php php php php php php php$controllerphp-php>registerPluginphp(php$thisphp,php selfphp:php:php$php_controllerPluginStackIndexphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*
php php php php php php*php Zendphp_Wildfirephp_Channelphp_Interface
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Determinephp ifphp channelphp isphp readyphp.
php php php php php php*
php php php php php php*php Thephp channelphp isphp readyphp asphp longphp asphp thephp requestphp andphp responsephp objectsphp arephp initializedphp,
php php php php php php*php canphp sendphp headersphp andphp thephp FirePHPphp headerphp existsphp inphp thephp Userphp-Agentphp.
php php php php php php*
php php php php php php*php Ifphp thephp headerphp doesphp notphp existphp inphp thephp Userphp-Agentphp,php nophp appropriatephp client
php php php php php php*php isphp makingphp thisphp requestphp andphp thephp messagesphp shouldphp notphp bephp sentphp.
php php php php php php*
php php php php php php*php Aphp timingphp issuephp arisesphp whenphp messagesphp arephp loggedphp beforephp thephp requestphp/response
php php php php php php*php objectsphp arephp initializedphp.php Inphp thisphp casephp wephp dophp notphp yetphp knowphp ifphp thephp client
php php php php php php*php willphp bephp ablephp tophp acceptphp thephp messagesphp.php Ifphp wephp consequentlyphp indicatephp that
php php php php php php*php thephp channelphp isphp notphp readyphp,php thesephp messagesphp willphp bephp droppedphp whichphp isphp in
php php php php php php*php mostphp casesphp notphp thephp intendedphp behaviourphp.php Thephp intentphp isphp tophp sendphp themphp atphp the
php php php php php php*php endphp ofphp thephp requestphp whenphp thephp requestphp/responsephp objectsphp willphp bephp available
php php php php php php*php forphp surephp.
php php php php php php*
php php php php php php*php Ifphp thephp requestphp/responsephp objectsphp arephp notphp yetphp initializedphp wephp assumephp ifphp messagesphp are
php php php php php php*php loggedphp,php thephp clientphp willphp bephp ablephp tophp receivephp themphp.php Asphp soonphp asphp thephp requestphp/response
php php php php php php*php objectsphp arephp availoablephp andphp aphp messagephp isphp loggedphp thisphp assumptionphp isphp challengedphp.
php php php php php php*php Ifphp thephp clientphp cannotphp acceptphp thephp messagesphp anyphp furtherphp messagesphp arephp dropped
php php php php php php*php andphp messagesphp sentphp priorphp arephp keptphp butphp discardedphp whenphp thephp channelphp isphp finally
php php php php php php*php flushedphp atphp thephp endphp ofphp thephp requestphp.
php php php php php php*
php php php php php php*php Whenphp thephp channelphp isphp flushedphp thephp php$forceCheckRequestphp optionphp isphp usedphp tophp force
php php php php php php*php aphp checkphp ofphp thephp requestphp/responsephp objectsphp.php Thisphp isphp thephp lastphp verificationphp tophp ensure
php php php php php php*php messagesphp arephp onlyphp sentphp whenphp thephp clientphp canphp acceptphp themphp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$forceCheckRequestphp OPTIONALphp Setphp tophp TRUEphp ifphp thephp requestphp mustphp bephp checked
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp channelphp isphp readyphp.
php php php php php php*php/
php php php php publicphp functionphp isReadyphp(php$forceCheckRequestphp=falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$forceCheckRequest
php php php php php php php php php php php php php&php&php php!php$thisphp-php>php_request
php php php php php php php php php php php php php&php&php php!php$thisphp-php>php_response
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$thisphp-php>getRequestphp(php)php instanceofphp Zendphp_Controllerphp_Requestphp_Httpphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php(php$thisphp-php>getResponsephp(php)php-php>canSendHeadersphp(php)
php php php php php php php php php php php php php php php php php&php&php php(pregphp_matchphp_allphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'php/php\sphp?FirePHPphp\php/php(php[php\php.php\dphp]php*php)php\sphp?php/siphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getRequestphp(php)php-php>getHeaderphp(php'Userphp-Agentphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php$m
php php php php php php php php php php php php php php php php php php php php php)php php|php|
php php php php php php php php php php php php php php php php php php php php php(php(php$headerphp php=php php$thisphp-php>getRequestphp(php)php-php>getHeaderphp(php'Xphp-FirePHPphp-Versionphp'php)php)
php php php php php php php php php php php php php php php php php php php php php php&php&php pregphp_matchphp_allphp(php'php/php^php(php[php\php.php\dphp]php*php)php$php/siphp'php,php php$headerphp,php php$mphp)
php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php)php;
php php php php php}


php php php php php/php*
php php php php php php*php Zendphp_Controllerphp_Pluginphp_Abstract
php php php php php php*php/

php php php php php/php*php*
php php php php php php*php Flushphp messagesphp tophp headersphp asphp latephp asphp possiblephp butphp beforephp headersphp havephp beenphp sentphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchLoopShutdownphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>flushphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp requestphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_requestphp)php php{
php php php php php php php php php php php php php$controllerphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php php php php php$thisphp-php>setRequestphp(php$controllerphp-php>getRequestphp(php)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_requestphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Requestphp objectsphp notphp initializedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_requestphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp responsephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstract
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_responsephp)php php{
php php php php php php php php php php php php php$responsephp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getResponsephp(php)php;
php php php php php php php php php php php php ifphp php(php$responsephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setResponsephp(php$responsephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_responsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Responsephp objectsphp notphp initializedphp.php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_responsephp;
php php php php php}
php}
