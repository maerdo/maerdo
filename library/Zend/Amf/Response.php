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
php php*php php@versionphp php php php php$Idphp:php Responsephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Amfphp_Constantsphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Constantsphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_OutputStreamphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/OutputStreamphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Amfphp0php/Serializerphp.phpphp'php;

php/php*php*
php php*php Handlesphp convertingphp thephp PHPphp objectphp readyphp forphp responsephp backphp intophp AMF
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Response
php{
php php php php php/php*php*
php php php php php php*php php@varphp intphp Objectphp encodingphp forphp response
php php php php php php*php/
php php php php protectedphp php$php_objectEncodingphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp Zendphp_Amfphp_Valuephp_MessageBodyphp objects
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_bodiesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp Zendphp_Amfphp_Valuephp_MessageHeaderphp objects
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Amfphp_Parsephp_OutputStream
php php php php php php*php/
php php php php protectedphp php$php_outputStreamphp;

php php php php php/php*php*
php php php php php php*php Instantiatephp newphp outputphp streamphp andphp startphp serialization
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php/
php php php php publicphp functionphp finalizephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_outputStreamphp php=php newphp Zendphp_Amfphp_Parsephp_OutputStreamphp(php)php;
php php php php php php php php php$thisphp-php>writeMessagephp(php$thisphp-php>php_outputStreamphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp thephp PHPphp dataphp typesphp backphp intophp Actionscriptphp and
php php php php php php*php createphp andphp AMFphp streamphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Parsephp_OutputStreamphp php$stream
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php/
php php php php publicphp functionphp writeMessagephp(Zendphp_Amfphp_Parsephp_OutputStreamphp php$streamphp)
php php php php php{
php php php php php php php php php$objectEncodingphp php=php php$thisphp-php>php_objectEncodingphp;

php php php php php php php php php/php/Writephp encodingphp tophp startphp ofphp streamphp.php Preamblephp bytephp isphp writtenphp ofphp twophp bytephp Unsignedphp Short
php php php php php php php php php$streamphp-php>writeBytephp(php0xphp0php0php)php;
php php php php php php php php php$streamphp-php>writeBytephp(php$objectEncodingphp)php;

php php php php php php php php php/php/php Loopphp throughphp thephp AMFphp Headersphp thatphp needphp tophp bephp returnedphp.
php php php php php php php php php$headerCountphp php=php countphp(php$thisphp-php>php_headersphp)php;
php php php php php php php php php$streamphp-php>writeIntphp(php$headerCountphp)php;
php php php php php php php php foreachphp php(php$thisphp-php>getAmfHeadersphp(php)php asphp php$headerphp)php php{
php php php php php php php php php php php php php$serializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializerphp(php$streamphp)php;
php php php php php php php php php php php php php$streamphp-php>writeUTFphp(php$headerphp-php>namephp)php;
php php php php php php php php php php php php php$streamphp-php>writeBytephp(php$headerphp-php>mustReadphp)php;
php php php php php php php php php php php php php$streamphp-php>writeLongphp(Zendphp_Amfphp_Constantsphp:php:UNKNOWNphp_CONTENTphp_LENGTHphp)php;
php php php php php php php php php php php php ifphp php(isphp_objectphp(php$headerphp-php>dataphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Workaroundphp forphp PHPphp5php withphp Ephp_STRICTphp enabledphp complainingphp about
php php php php php php php php php php php php php php php php php/php/php php"Onlyphp variablesphp shouldphp bephp passedphp byphp referencephp"
php php php php php php php php php php php php php php php php php$placeholderphp php=php nullphp;
php php php php php php php php php php php php php php php php php$serializerphp-php>writeTypeMarkerphp(php$placeholderphp,php nullphp,php php$headerphp-php>dataphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$serializerphp-php>writeTypeMarkerphp(php$headerphp-php>dataphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php loopphp throughphp thephp AMFphp bodiesphp thatphp needphp tophp bephp returnedphp.
php php php php php php php php php$bodyCountphp php=php countphp(php$thisphp-php>php_bodiesphp)php;
php php php php php php php php php$streamphp-php>writeIntphp(php$bodyCountphp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_bodiesphp asphp php$bodyphp)php php{
php php php php php php php php php php php php php$serializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializerphp(php$streamphp)php;
php php php php php php php php php php php php php$streamphp-php>writeUTFphp(php$bodyphp-php>getTargetURIphp(php)php)php;
php php php php php php php php php php php php php$streamphp-php>writeUTFphp(php$bodyphp-php>getResponseURIphp(php)php)php;
php php php php php php php php php php php php php$streamphp-php>writeLongphp(Zendphp_Amfphp_Constantsphp:php:UNKNOWNphp_CONTENTphp_LENGTHphp)php;
php php php php php php php php php php php php php$bodyDataphp php=php php$bodyphp-php>getDataphp(php)php;
php php php php php php php php php php php php php$markerTypephp php=php php(php$thisphp-php>php_objectEncodingphp php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp_ENCODINGphp)php php?php nullphp php:php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_AMFphp3php;
php php php php php php php php php php php php ifphp php(isphp_objectphp(php$bodyDataphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Workaroundphp forphp PHPphp5php withphp Ephp_STRICTphp enabledphp complainingphp about
php php php php php php php php php php php php php php php php php/php/php php"Onlyphp variablesphp shouldphp bephp passedphp byphp referencephp"
php php php php php php php php php php php php php php php php php$placeholderphp php=php nullphp;
php php php php php php php php php php php php php php php php php$serializerphp-php>writeTypeMarkerphp(php$placeholderphp,php php$markerTypephp,php php$bodyDataphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$serializerphp-php>writeTypeMarkerphp(php$bodyDataphp,php php$markerTypephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp outputphp streamphp content
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp contentsphp ofphp thephp outputphp stream
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_outputStreamphp-php>getStreamphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp outputphp streamphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getResponsephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp AMFphp bodyphp tophp bephp sentphp tophp thephp Flashphp Player
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Valuephp_MessageBodyphp php$body
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php/
php php php php publicphp functionphp addAmfBodyphp(Zendphp_Amfphp_Valuephp_MessageBodyphp php$bodyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bodiesphp[php]php php=php php$bodyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp AMFphp bodiesphp tophp bephp serialized
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAmfBodiesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bodiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp AMFphp Headerphp tophp bephp sentphp backphp tophp thephp flashphp player
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Amfphp_Valuephp_MessageHeaderphp php$header
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php/
php php php php publicphp functionphp addAmfHeaderphp(Zendphp_Amfphp_Valuephp_MessageHeaderphp php$headerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_headersphp[php]php php=php php$headerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp attachedphp AMFphp messagephp headers
php php php php php php*
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Amfphp_Valuephp_MessageHeaderphp objects
php php php php php php*php/
php php php php publicphp functionphp getAmfHeadersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp AMFphp encodingphp thatphp willphp bephp usedphp forphp serialization
php php php php php php*
php php php php php php*php php@paramphp php intphp php$encoding
php php php php php php*php php@returnphp Zendphp_Amfphp_Response
php php php php php php*php/
php php php php publicphp functionphp setObjectEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_objectEncodingphp php=php php$encodingphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
