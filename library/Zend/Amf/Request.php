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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Requestphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_InputStreamphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/InputStreamphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_Amfphp0php_Deserializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Amfphp0php/Deserializerphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Constantsphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Constantsphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Valuephp_MessageHeaderphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/MessageHeaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Valuephp_MessageBodyphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Valuephp/MessageBodyphp.phpphp'php;

php/php*php*
php php*php Handlephp thephp incomingphp AMFphp requestphp byphp deserializingphp thephp dataphp tophp phpphp object
php php*php typesphp andphp storingphp thephp dataphp forphp Zendphp_Amfphp_Serverphp tophp handlephp forphp processingphp.
php php*
php php*php php@todophp php php php php php php Currentlyphp notphp checkingphp ifphp thephp objectphp needsphp tophp bephp Typephp Mappedphp tophp aphp serverphp objectphp.
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Request
php{
php php php php php/php*php*
php php php php php php*php php@varphp intphp AMFphp clientphp typephp php(AMFphp0php,php AMFphp3php)
php php php php php php*php/
php php php php protectedphp php$php_clientTypephp php=php php0php;php php/php/php defaultphp AMFphp0

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Messagephp bodies
php php php php php php*php/
php php php php protectedphp php$php_bodiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Messagephp headers
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Messagephp encodingphp tophp usephp forphp objectsphp inphp response
php php php php php php*php/
php php php php protectedphp php$php_objectEncodingphp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Amfphp_Parsephp_InputStream
php php php php php php*php/
php php php php protectedphp php$php_inputStreamphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Amfphp_Parsephp_AMFphp0php_Deserializer
php php php php php php*php/
php php php php protectedphp php$php_deserializerphp;

php php php php php/php*php*
php php php php php php*php Timephp ofphp thephp request
php php php php php php*php php@varphp php mixed
php php php php php php*php/
php php php php protectedphp php$php_timephp;

php php php php php/php*php*
php php php php php php*php Preparephp thephp AMFphp InputStreamphp forphp parsingphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$request
php php php php php php*php php@returnphp Zendphp_Amfphp_Request
php php php php php php*php/
php php php php publicphp functionphp initializephp(php$requestphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_inputStreamphp php php=php newphp Zendphp_Amfphp_Parsephp_InputStreamphp(php$requestphp)php;
php php php php php php php php php$thisphp-php>php_deserializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp0php_Deserializerphp(php$thisphp-php>php_inputStreamphp)php;
php php php php php php php php php$thisphp-php>readMessagephp(php$thisphp-php>php_inputStreamphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Takesphp thephp rawphp AMFphp inputphp streamphp andphp convertsphp itphp intophp validphp PHPphp objects
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Parsephp_InputStream
php php php php php php*php php@returnphp Zendphp_Amfphp_Request
php php php php php php*php/
php php php php publicphp functionphp readMessagephp(Zendphp_Amfphp_Parsephp_InputStreamphp php$streamphp)
php php php php php{
php php php php php php php php php$clientVersionphp php=php php$streamphp-php>readUnsignedShortphp(php)php;
php php php php php php php php ifphp php(php(php$clientVersionphp php!php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp_ENCODINGphp)
php php php php php php php php php php php php php&php&php php(php$clientVersionphp php!php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp_ENCODINGphp)
php php php php php php php php php php php php php&php&php php(php$clientVersionphp php!php=php Zendphp_Amfphp_Constantsphp:php:FMSphp_OBJECTphp_ENCODINGphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unknownphp Playerphp Versionphp php'php php.php php$clientVersionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_bodiesphp php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_headersphp php=php arrayphp(php)php;
php php php php php php php php php$headerCountphp php php php php=php php$streamphp-php>readIntphp(php)php;

php php php php php php php php php/php/php Iteratephp throughphp thephp AMFphp envelopephp header
php php php php php php php php whilephp php(php$headerCountphp-php-php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headersphp[php]php php=php php$thisphp-php>readHeaderphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Iteratephp throughphp thephp AMFphp envelopephp body
php php php php php php php php php$bodyCountphp php=php php$streamphp-php>readIntphp(php)php;
php php php php php php php php whilephp php(php$bodyCountphp-php-php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bodiesphp[php]php php=php php$thisphp-php>readBodyphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deserializephp aphp messagephp headerphp fromphp thephp inputphp streamphp.
php php php php php php*
php php php php php php*php Aphp messagephp headerphp isphp structuredphp asphp:
php php php php php php*php php-php NAMEphp String
php php php php php php*php php-php MUSTphp UNDERSTANDphp Boolean
php php php php php php*php php-php LENGTHphp Int
php php php php php php*php php-php DATAphp Object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_MessageHeader
php php php php php php*php/
php php php php publicphp functionphp readHeaderphp(php)
php php php php php{
php php php php php php php php php$namephp php php php php php=php php$thisphp-php>php_inputStreamphp-php>readUTFphp(php)php;
php php php php php php php php php$mustReadphp php=php php(boolphp)php$thisphp-php>php_inputStreamphp-php>readBytephp(php)php;
php php php php php php php php php$lengthphp php php php=php php$thisphp-php>php_inputStreamphp-php>readLongphp(php)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$dataphp php=php php$thisphp-php>php_deserializerphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unablephp tophp parsephp php'php php.php php$namephp php.php php'php headerphp dataphp:php php'php php.php php$ephp-php>getMessagephp(php)php php.php php'php php'php.php php$ephp-php>getLinephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php$headerphp php=php newphp Zendphp_Amfphp_Valuephp_MessageHeaderphp(php$namephp,php php$mustReadphp,php php$dataphp,php php$lengthphp)php;
php php php php php php php php returnphp php$headerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deserializephp aphp messagephp bodyphp fromphp thephp inputphp stream
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_MessageBody
php php php php php php*php/
php php php php publicphp functionphp readBodyphp(php)
php php php php php{
php php php php php php php php php$targetURIphp php php php=php php$thisphp-php>php_inputStreamphp-php>readUTFphp(php)php;
php php php php php php php php php$responseURIphp php=php php$thisphp-php>php_inputStreamphp-php>readUTFphp(php)php;
php php php php php php php php php$lengthphp php php php php php php=php php$thisphp-php>php_inputStreamphp-php>readLongphp(php)php;

php php php php php php php php tryphp php{
php php php php php php php php php php php php php$dataphp php=php php$thisphp-php>php_deserializerphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unablephp tophp parsephp php'php php.php php$targetURIphp php.php php'php bodyphp dataphp php'php php.php php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Checkphp forphp AMFphp3php objectEncoding
php php php php php php php php ifphp php(php$thisphp-php>php_deserializerphp-php>getObjectEncodingphp(php)php php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp_ENCODINGphp)php php{
php php php php php php php php php php php php php/php*
php php php php php php php php php php php php php php*php Whenphp andphp AMFphp3php messagephp isphp sentphp tophp thephp serverphp itphp isphp nestedphp inside
php php php php php php php php php php php php php php*php anphp AMFphp0php arrayphp calledphp Contentphp.php Thephp followingphp codephp getsphp thephp object
php php php php php php php php php php php php php php*php outphp ofphp thephp contentphp arrayphp andphp setsphp itphp asphp thephp messagephp dataphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp(isphp_arrayphp(php$dataphp)php php&php&php php$dataphp[php0php]php instanceofphp Zendphp_Amfphp_Valuephp_Messagingphp_AbstractMessagephp)php{
php php php php php php php php php php php php php php php php php$dataphp php=php php$dataphp[php0php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php setphp thephp encodingphp sophp wephp returnphp ourphp messagephp inphp AMFphp3
php php php php php php php php php php php php php$thisphp-php>php_objectEncodingphp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp_ENCODINGphp;
php php php php php php php php php}

php php php php php php php php php$bodyphp php=php newphp Zendphp_Amfphp_Valuephp_MessageBodyphp(php$targetURIphp,php php$responseURIphp,php php$dataphp)php;
php php php php php php php php returnphp php$bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp thephp bodyphp objectsphp thatphp werephp foundphp inphp thephp amfphp requestphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp php{targetphp,php responsephp,php lengthphp,php contentphp}
php php php php php php*php/
php php php php publicphp functionphp getAmfBodiesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bodiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Accessorphp tophp privatephp arrayphp ofphp messagephp bodiesphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Valuephp_MessageBodyphp php$message
php php php php php php*php php@returnphp Zendphp_Amfphp_Request
php php php php php php*php/
php php php php publicphp functionphp addAmfBodyphp(Zendphp_Amfphp_Valuephp_MessageBodyphp php$messagephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bodiesphp[php]php php=php php$messagephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp headersphp thatphp werephp foundphp inphp thephp amfphp requestphp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp php{operationphp,php mustUnderstandphp,php lengthphp,php paramphp}
php php php php php php*php/
php php php php publicphp functionphp getAmfHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp eitherphp php0php orphp php3php forphp respectphp AMFphp version
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getObjectEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectEncodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp objectphp responsephp encoding
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$int
php php php php php php*php php@returnphp Zendphp_Amfphp_Request
php php php php php php*php/
php php php php publicphp functionphp setObjectEncodingphp(php$intphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectEncodingphp php=php php$intphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
