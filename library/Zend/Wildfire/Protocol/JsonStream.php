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
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php JsonStreamphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Wildfirephp_Pluginphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Pluginphp/Interfacephp.phpphp'php;

php/php*php*php Zendphp_Wildfirephp_Channelphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Channelphp/Interfacephp.phpphp'php;

php/php*php*php Zendphp_Jsonphp php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php Encodesphp messagesphp intophp thephp Wildfirephp JSONphp Streamphp Communicationphp Protocolphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Protocol
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Wildfirephp_Protocolphp_JsonStream
php{
php php php php php/php*php*
php php php php php php*php Thephp protocolphp URIphp forphp thisphp protocol
php php php php php php*php/
php php php php constphp PROTOCOLphp_URIphp php=php php'httpphp:php/php/metaphp.wildfirehqphp.orgphp/Protocolphp/JsonStreamphp/php0php.php2php'php;

php php php php php/php*php*
php php php php php php*php Allphp messagesphp tophp bephp sentphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messagesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Pluginsphp thatphp arephp usingphp thisphp protocol
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_pluginsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Registerphp aphp pluginphp thatphp usesphp thisphp protocol
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Wildfirephp_Pluginphp_Interfacephp php$pluginphp Thephp pluginphp tophp bephp registered
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp pluginphp wasphp registeredphp,php falsephp ifphp itphp wasphp alreadyphp registered
php php php php php php*php/
php php php php publicphp functionphp registerPluginphp(Zendphp_Wildfirephp_Pluginphp_Interfacephp php$pluginphp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$pluginphp,php$thisphp-php>php_pluginsphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_pluginsphp[php]php php=php php$pluginphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Recordphp aphp messagephp withphp thephp givenphp dataphp inphp thephp givenphp structure
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Wildfirephp_Pluginphp_Interfacephp php$pluginphp Thephp pluginphp recordingphp thephp message
php php php php php php*php php@paramphp stringphp php$structurephp Thephp structurephp tophp bephp usedphp forphp thephp data
php php php php php php*php php@paramphp arrayphp php$dataphp Thephp dataphp tophp bephp recorded
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp messagephp wasphp recorded
php php php php php php*php/
php php php php publicphp functionphp recordMessagephp(Zendphp_Wildfirephp_Pluginphp_Interfacephp php$pluginphp,php php$structurephp,php php$dataphp)
php php php php php{
php php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_messagesphp[php$structurephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_messagesphp[php$structurephp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$uriphp php=php php$pluginphp-php>getUriphp(php)php;

php php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_messagesphp[php$structurephp]php[php$uriphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_messagesphp[php$structurephp]php[php$uriphp]php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_messagesphp[php$structurephp]php[php$uriphp]php[php]php php=php php$thisphp-php>php_encodephp(php$dataphp)php;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp allphp quedphp messages
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Wildfirephp_Pluginphp_Interfacephp php$pluginphp Thephp pluginphp forphp whichphp tophp clearphp messages
php php php php php php*php php@returnphp booleanphp Returnsphp TRUEphp ifphp messagesphp werephp present
php php php php php php*php/
php php php php publicphp functionphp clearMessagesphp(Zendphp_Wildfirephp_Pluginphp_Interfacephp php$pluginphp)
php php php php php{
php php php php php php php php php$uriphp php=php php$pluginphp-php>getUriphp(php)php;

php php php php php php php php php$presentphp php=php falsephp;
php php php php php php php php foreachphp php(php$thisphp-php>php_messagesphp asphp php$structurephp php=php>php php$messagesphp)php php{

php php php php php php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_messagesphp[php$structurephp]php[php$uriphp]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$presentphp php=php truephp;

php php php php php php php php php php php php unsetphp(php$thisphp-php>php_messagesphp[php$structurephp]php[php$uriphp]php)php;

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_messagesphp[php$structurephp]php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_messagesphp[php$structurephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$presentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp quedphp messages
php php php php php php*
php php php php php php*php php@returnphp mixedphp Returnsphp quedphp messagesphp orphp FALSEphp ifphp nophp messagesphp arephp qued
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_messagesphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_messagesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Usephp thephp JSONphp encodingphp schemephp forphp thephp valuephp specified
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp valuephp tophp bephp encoded
php php php php php php*php php@returnphp stringphp php Thephp encodedphp value
php php php php php php*php/
php php php php protectedphp functionphp php_encodephp(php$valuephp)
php php php php php{
php php php php php php php php returnphp Zendphp_Jsonphp:php:encodephp(php$valuephp,php truephp,php arrayphp(php'silenceCyclicalExceptionsphp'php=php>truephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievesphp allphp formattedphp dataphp readyphp tophp bephp sentphp byphp thephp channelphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Wildfirephp_Channelphp_Interfacephp php$channelphp Thephp instancephp ofphp thephp channelphp thatphp willphp bephp transmittingphp thephp data
php php php php php php*php php@returnphp mixedphp Returnsphp thephp dataphp tophp bephp sentphp byphp thephp channelphp.
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getPayloadphp(Zendphp_Wildfirephp_Channelphp_Interfacephp php$channelphp)
php php php php php{
php php php php php php php php ifphp php(php!php$channelphp instanceofphp Zendphp_Wildfirephp_Channelphp_HttpHeadersphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Thephp php'php.getphp_classphp(php$channelphp)php.php'php channelphp isphp notphp supportedphp byphp thephp php'php.getphp_classphp(php$thisphp)php.php'php protocolphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_pluginsphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php php php php php php$pluginphp-php>flushMessagesphp(selfphp:php:PROTOCOLphp_URIphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_messagesphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$protocolphp_indexphp php=php php1php;
php php php php php php php php php$structurephp_indexphp php=php php1php;
php php php php php php php php php$pluginphp_indexphp php=php php1php;
php php php php php php php php php$messagephp_indexphp php=php php1php;

php php php php php php php php php$payloadphp php=php arrayphp(php)php;

php php php php php php php php php$payloadphp[php]php php=php arrayphp(php'Protocolphp-php'php.php$protocolphp_indexphp,php selfphp:php:PROTOCOLphp_URIphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_messagesphp asphp php$structurephp_uriphp php=php>php php$pluginphp_messagesphp php)php php{

php php php php php php php php php php php php php$payloadphp[php]php php=php arrayphp(php$protocolphp_indexphp.php'php-Structurephp-php'php.php$structurephp_indexphp,php php$structurephp_uriphp)php;

php php php php php php php php php php php php foreachphp php(php$pluginphp_messagesphp asphp php$pluginphp_uriphp php=php>php php$messagesphp php)php php{

php php php php php php php php php php php php php php php php php$payloadphp[php]php php=php arrayphp(php$protocolphp_indexphp.php'php-Pluginphp-php'php.php$pluginphp_indexphp,php php$pluginphp_uriphp)php;

php php php php php php php php php php php php php php php php foreachphp php(php$messagesphp asphp php$messagephp)php php{

php php php php php php php php php php php php php php php php php php php php php$partsphp php=php explodephp(php"php\nphp"php,chunkphp_splitphp(php$messagephp,php php5php0php0php0php,php php"php\nphp"php)php)php;

php php php php php php php php php php php php php php php php php php php php forphp php(php$iphp=php0php php;php php$iphp<countphp(php$partsphp)php php;php php$iphp+php+php)php php{

php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php=php php$partsphp[php$iphp]php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partphp)php php{

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$msgphp php=php php'php'php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$partsphp)php>php2php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$msgphp php=php php(php(php$iphp=php=php0php)php?strlenphp(php$messagephp)php:php'php'php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php|php'php php.php php$partphp php.php php'php|php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php(php(php$iphp<countphp(php$partsphp)php-php2php)php?php'php\php\php'php:php'php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$msgphp php=php strlenphp(php$partphp)php php.php php'php|php'php php.php php$partphp php.php php'php|php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$payloadphp[php]php php=php arrayphp(php$protocolphp_indexphp php.php php'php-php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$structurephp_indexphp php.php php'php-php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$pluginphp_indexphp php.php php'php-php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$messagephp_indexphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$msgphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$messagephp_indexphp+php+php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$messagephp_indexphp php>php php9php9php9php9php9php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Maximumphp numberphp php(php9php9php,php9php9php9php)php ofphp messagesphp reachedphp!php'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$pluginphp_indexphp+php+php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$structurephp_indexphp+php+php;
php php php php php php php php php}

php php php php php php php php returnphp php$payloadphp;
php php php php php}

php}

