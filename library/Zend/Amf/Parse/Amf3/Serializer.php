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
php php*php php@subpackagephp Parsephp_Amfphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Serializerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Amfphp_Constantsphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Constantsphp.phpphp'php;


php/php*php*php Zendphp_Amfphp_Parsephp_Serializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Serializerphp.phpphp'php;

php/php*php*php Zendphp_Amfphp_Parsephp_TypeLoaderphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;

php/php*php*
php php*php Detectphp PHPphp objectphp typephp andphp convertphp itphp tophp aphp correspondingphp AMFphp3php objectphp type
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parsephp_Amfphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializerphp extendsphp Zendphp_Amfphp_Parsephp_Serializer
php{
php php php php php/php*php*
php php php php php php*php Aphp constantphp emptyphp string
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_strEmptyphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp referencephp objectsphp perphp amfphp body
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_referenceObjectsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp referencephp stringsphp perphp amfphp body
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_referenceStringsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp referencephp classphp definitionsphp,php indexedphp byphp classname
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_referenceDefinitionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Serializephp PHPphp typesphp tophp AMFphp3php andphp writephp tophp stream
php php php php php php*
php php php php php php*php Checksphp tophp seephp ifphp thephp typephp wasphp declaredphp andphp thenphp either
php php php php php php*php autophp negotiatesphp thephp typephp orphp usephp thephp userphp definedphp markerTypephp to
php php php php php php*php serializephp thephp dataphp fromphp phpphp backphp tophp AMFphp3
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php intphp php$markerType
php php php php php php*php php@paramphp php mixedphp php$dataByVal
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp writeTypeMarkerphp(php&php$dataphp,php php$markerTypephp php=php nullphp,php php$dataByValphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Workaroundphp forphp PHPphp5php withphp Ephp_STRICTphp enabledphp complainingphp aboutphp php"Only
php php php php php php php php php/php/php variablesphp shouldphp bephp passedphp byphp referencephp"
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$dataphp)php php&php&php php(php$dataByValphp php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$dataphp php=php php&php$dataByValphp;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$markerTypephp)php php{
php php php php php php php php php php php php php/php/php Writephp thephp Typephp Markerphp tophp denotephp thephp followingphp actionphp scriptphp dataphp type
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$markerTypephp)php;

php php php php php php php php php php php php switchphp php(php$markerTypephp)php php{
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NULLphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BOOLEANphp_FALSEphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BOOLEANphp_TRUEphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_INTEGERphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeIntegerphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NUMBERphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeDoublephp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_STRINGphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeStringphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_DATEphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeDatephp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_ARRAYphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeArrayphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeObjectphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BYTEARRAYphp:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeByteArrayphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_XMLSTRINGphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeXmlphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unknownphp Typephp Markerphp:php php'php php.php php$markerTypephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Detectphp Typephp Marker
php php php php php php php php php php php php ifphp php(isphp_resourcephp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:handleResourcephp(php$dataphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php php php casephp php(nullphp php=php=php=php php$dataphp)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NULLphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_boolphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$dataphp)php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BOOLEANphp_TRUEphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BOOLEANphp_FALSEphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_intphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$dataphp php>php php0xFFFFFFFphp)php php|php|php php(php$dataphp <php php-php2php6php8php4php3php5php4php5php6php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NUMBERphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_INTEGERphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_floatphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NUMBERphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_stringphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_STRINGphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_arrayphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_ARRAYphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_objectphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php Handlephp objectphp typesphp.
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$dataphp instanceofphp DateTimephp)php php|php|php php(php$dataphp instanceofphp Zendphp_Datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_DATEphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$dataphp instanceofphp Zendphp_Amfphp_Valuephp_ByteArrayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BYTEARRAYphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php(php$dataphp instanceofphp DOMDocumentphp)php php|php|php php(php$dataphp instanceofphp SimpleXMLElementphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_XMLSTRINGphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unsupportedphp dataphp typephp:php php'php php.php gettypephp(php$dataphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$dataphp,php php$markerTypephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp anphp AMFphp3php integer
php php php php php php*
php php php php php php*php php@paramphp intphp|floatphp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeIntegerphp(php$intphp)
php php php php php{
php php php php php php php php ifphp php(php(php$intphp php&php php0xffffffphp8php0php)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$intphp php&php php0xphp7fphp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$intphp php&php php0xffffcphp0php0php0php)php php=php=php php0php php)php php{
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php(php$intphp php>php>php php7php php)php php|php php0xphp8php0php)php;
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$intphp php&php php0xphp7fphp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$intphp php&php php0xffephp0php0php0php0php0php)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php(php$intphp php>php>php php1php4php php)php php|php php0xphp8php0php)php;
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php(php$intphp php>php>php php7php php)php php|php php0xphp8php0php)php;
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$intphp php&php php0xphp7fphp)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php(php$intphp php>php>php php2php2php php)php php|php php0xphp8php0php)php;
php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php(php$intphp php>php>php php1php5php php)php php|php php0xphp8php0php)php;
php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php(php$intphp php>php>php php8php php)php php|php php0xphp8php0php)php;
php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$intphp php&php php0xffphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp stringphp tophp outputphp streamphp,php withoutphp tryingphp tophp referencephp itphp.
php php php php php php*php Thephp stringphp isphp prependedphp withphp strlenphp(php$stringphp)php <php<php php1php php|php php0xphp0php1
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php protectedphp functionphp writeBinaryStringphp(php&php$stringphp)php{
php php php php php php php php php$refphp php=php strlenphp(php$stringphp)php <php<php php1php php|php php0xphp0php1php;
php php php php php php php php php$thisphp-php>writeIntegerphp(php$refphp)php;
php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytesphp(php$stringphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp stringphp tophp outputphp stream
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeStringphp(php&php$stringphp)
php php php php php{
php php php php php php php php php$lenphp php=php strlenphp(php$stringphp)php;
php php php php php php php php ifphp(php!php$lenphp)php{
php php php php php php php php php php php php php$thisphp-php>writeIntegerphp(php0xphp0php1php)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$refphp php=php arrayphp_searchphp(php$stringphp,php php$thisphp-php>php_referenceStringsphp,php truephp)php;
php php php php php php php php ifphp(php$refphp php=php=php=php falsephp)php{
php php php php php php php php php php php php php$thisphp-php>php_referenceStringsphp[php]php php=php php$stringphp;
php php php php php php php php php php php php php$thisphp-php>writeBinaryStringphp(php$stringphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$refphp <php<php=php php1php;
php php php php php php php php php php php php php$thisphp-php>writeIntegerphp(php$refphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp ByteArrayphp tophp outputphp stream
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Amfphp_Valuephp_ByteArrayphp php php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeByteArrayphp(php&php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>writeObjectReferencephp(php$dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$dataphp)php)php php{
php php php php php php php php php php php php php/php/nothingphp tophp do
php php php php php php php php php}php elsephp ifphp php(php$dataphp instanceofphp Zendphp_Amfphp_Valuephp_ByteArrayphp)php php{
php php php php php php php php php php php php php$dataphp php=php php$dataphp-php>getDataphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Invalidphp ByteArrayphp specifiedphp;php mustphp bephp aphp stringphp orphp Zendphp_Amfphp_Valuephp_ByteArrayphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>writeBinaryStringphp(php$dataphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp xmlphp tophp outputphp stream
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp|SimpleXMLElementphp php php$xml
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeXmlphp(php$xmlphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>writeObjectReferencephp(php$xmlphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp(isphp_stringphp(php$xmlphp)php)php php{
php php php php php php php php php php php php php/php/nothingphp tophp do
php php php php php php php php php}php elsephp ifphp php(php$xmlphp instanceofphp DOMDocumentphp)php php{
php php php php php php php php php php php php php$xmlphp php=php php$xmlphp-php>saveXmlphp(php)php;
php php php php php php php php php}php elsephp ifphp php(php$xmlphp instanceofphp SimpleXMLElementphp)php php{
php php php php php php php php php php php php php$xmlphp php=php php$xmlphp-php>asXMLphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Invalidphp xmlphp specifiedphp;php mustphp bephp aphp DOMDocumentphp orphp SimpleXMLElementphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>writeBinaryStringphp(php$xmlphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp DateTimephp/Zendphp_Datephp tophp AMFphp date
php php php php php php*
php php php php php php*php php@paramphp php DateTimephp|Zendphp_Datephp php$date
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeDatephp(php$datephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>writeObjectReferencephp(php$datephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$datephp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php php$dateStringphp php=php php$datephp-php>formatphp(php'Uphp'php)php php*php php1php0php0php0php;
php php php php php php php php php}php elseifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$dateStringphp php=php php$datephp-php>toStringphp(php'Uphp'php)php php*php php1php0php0php0php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Invalidphp datephp specifiedphp;php mustphp bephp aphp stringphp DateTimephp orphp Zendphp_Datephp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>writeIntegerphp(php0xphp0php1php)php;
php php php php php php php php php/php/php writephp timephp tophp streamphp minusphp milliseconds
php php php php php php php php php$thisphp-php>php_streamphp-php>writeDoublephp(php$dateStringphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp PHPphp arrayphp backphp tophp thephp amfphp outputphp stream
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$array
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeArrayphp(php&php$arrayphp)
php php php php php{
php php php php php php php php php/php/php arraysphp arenphp'tphp referencephp herephp butphp stillphp counted
php php php php php php php php php$thisphp-php>php_referenceObjectsphp[php]php php=php php$arrayphp;

php php php php php php php php php/php/php havephp tophp seperatephp mixedphp fromphp numbericphp keysphp.
php php php php php php php php php$numericphp php=php arrayphp(php)php;
php php php php php php php php php$stringphp php php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$arrayphp asphp php$keyphp php=php>php php&php$valuephp)php php{
php php php php php php php php php php php php ifphp php(isphp_intphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$numericphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$stringphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php writephp thephp preamblephp idphp ofphp thephp array
php php php php php php php php php$lengthphp php=php countphp(php$numericphp)php;
php php php php php php php php php$idphp php php php php php=php php(php$lengthphp <php<php php1php)php php|php php0xphp0php1php;
php php php php php php php php php$thisphp-php>writeIntegerphp(php$idphp)php;

php php php php php php php php php/php/Writephp thephp mixedphp typephp arrayphp tophp thephp outputphp stream
php php php php php php php php foreachphp(php$stringphp asphp php$keyphp php=php>php php&php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>writeStringphp(php$keyphp)
php php php php php php php php php php php php php php php php php php-php>writeTypeMarkerphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>writeStringphp(php$thisphp-php>php_strEmptyphp)php;

php php php php php php php php php/php/php Writephp thephp numericphp arrayphp tophp ouputphp stream
php php php php php php php php foreachphp(php$numericphp asphp php&php$valuephp)php php{
php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp givenphp objectphp isphp inphp thephp referencephp tablephp,php writephp thephp referencephp ifphp itphp existsphp,
php php php php php php*php otherwisephp addphp thephp objectphp tophp thephp referencephp table
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$objectphp objectphp referencephp tophp checkphp forphp reference
php php php php php php*php php@paramphp mixedphp php$objectByValphp objectphp tophp checkphp forphp reference
php php php php php php*php php@returnphp Booleanphp truephp,php ifphp thephp referencephp wasphp writtenphp,php falsephp otherwise
php php php php php php*php/
php php php php protectedphp functionphp writeObjectReferencephp(php&php$objectphp,php php$objectByValphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Workaroundphp forphp PHPphp5php withphp Ephp_STRICTphp enabledphp complainingphp aboutphp php"Only
php php php php php php php php php/php/php variablesphp shouldphp bephp passedphp byphp referencephp"
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$objectphp)php php&php&php php(php$objectByValphp php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$objectphp php=php php&php$objectByValphp;
php php php php php php php php php}

php php php php php php php php php$refphp php=php arrayphp_searchphp(php$objectphp,php php$thisphp-php>php_referenceObjectsphp,truephp)php;

php php php php php php php php php/php/php quicklyphp handlephp objectphp references
php php php php php php php php ifphp php(php$refphp php!php=php=php falsephp)php{
php php php php php php php php php php php php php$refphp <php<php=php php1php;
php php php php php php php php php php php php php$thisphp-php>writeIntegerphp(php$refphp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_referenceObjectsphp[php]php php=php php$objectphp;
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp objectphp tophp ouputphp stream
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeObjectphp(php$objectphp)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>writeObjectReferencephp(php$objectphp)php)php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$classNamephp php=php php'php'php;

php php php php php php php php php/php/Checkphp tophp seephp ifphp thephp objectphp isphp aphp typedphp objectphp andphp wephp needphp tophp change
php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php/php/php thephp returnphp classphp mappedphp namephp backphp tophp actionscriptphp classphp namephp.
php php php php php php php php php php php php casephp php(php$classNamephp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:getMappedClassNamephp(getphp_classphp(php$objectphp)php)php)php:
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php Checkphp tophp seephp ifphp thephp userphp hasphp definedphp anphp explicitphp Actionphp Scriptphp typephp.
php php php php php php php php php php php php casephp issetphp(php$objectphp-php>php_explicitTypephp)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php php$objectphp-php>php_explicitTypephp;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php Checkphp ifphp userphp hasphp definedphp aphp methodphp forphp accessingphp thephp Actionphp Scriptphp type
php php php php php php php php php php php php casephp methodphp_existsphp(php$objectphp,php php'getASClassNamephp'php)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php php$objectphp-php>getASClassNamephp(php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php Nophp returnphp classphp namephp isphp setphp makephp itphp aphp genericphp object
php php php php php php php php php php php php casephp php(php$objectphp instanceofphp stdClassphp)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php php'php'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php/php/php Byphp defaultphp,php usephp objectphp'sphp classphp name
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php$classNamephp php=php getphp_classphp(php$objectphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$writeTraitsphp php=php truephp;

php php php php php php php php php/php/checkphp tophp seephp,php ifphp wephp havephp aphp correspondingphp definition
php php php php php php php php ifphp(arrayphp_keyphp_existsphp(php$classNamephp,php php$thisphp-php>php_referenceDefinitionsphp)php)php{
php php php php php php php php php php php php php$traitsInfophp php php php php=php php$thisphp-php>php_referenceDefinitionsphp[php$classNamephp]php[php'idphp'php]php;
php php php php php php php php php php php php php$encodingphp php php php php php php=php php$thisphp-php>php_referenceDefinitionsphp[php$classNamephp]php[php'encodingphp'php]php;
php php php php php php php php php php php php php$propertyNamesphp php=php php$thisphp-php>php_referenceDefinitionsphp[php$classNamephp]php[php'propertyNamesphp'php]php;

php php php php php php php php php php php php php$traitsInfophp php=php php(php$traitsInfophp <php<php php2php)php php|php php0xphp0php1php;

php php php php php php php php php php php php php$writeTraitsphp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$propertyNamesphp php=php arrayphp(php)php;

php php php php php php php php php php php php ifphp(php$classNamephp php=php=php php'php'php)php{
php php php php php php php php php php php php php php php php php/php/ifphp therephp isphp nophp classNamephp,php wephp interpretphp thephp classphp asphp dynamicphp withoutphp anyphp sealedphp members
php php php php php php php php php php php php php php php php php$encodingphp php=php Zendphp_Amfphp_Constantsphp:php:ETphp_DYNAMICphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$encodingphp php=php Zendphp_Amfphp_Constantsphp:php:ETphp_PROPLISTphp;

php php php php php php php php php php php php php php php php foreachphp(php$objectphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp(php php$keyphp[php0php]php php!php=php php"php_php"php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$propertyNamesphp[php]php php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_referenceDefinitionsphp[php$classNamephp]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'idphp'php php php php php php php php php php php php php=php>php countphp(php$thisphp-php>php_referenceDefinitionsphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php'encodingphp'php php php php php php php=php>php php$encodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'propertyNamesphp'php php=php>php php$propertyNamesphp,
php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$traitsInfophp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp_ENCODINGphp;
php php php php php php php php php php php php php$traitsInfophp php|php=php php$encodingphp <php<php php2php;
php php php php php php php php php php php php php$traitsInfophp php|php=php php(countphp(php$propertyNamesphp)php <php<php php4php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>writeIntegerphp(php$traitsInfophp)php;

php php php php php php php php ifphp(php$writeTraitsphp)php{
php php php php php php php php php php php php php$thisphp-php>writeStringphp(php$classNamephp)php;
php php php php php php php php php php php php foreachphp php(php$propertyNamesphp asphp php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>writeStringphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php tryphp php{
php php php php php php php php php php php php switchphp(php$encodingphp)php php{
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:ETphp_PROPLISTphp:
php php php php php php php php php php php php php php php php php php php php php/php/Writephp thephp sealedphp valuesphp tophp thephp outputphp streamphp.
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$propertyNamesphp asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$objectphp-php>php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:ETphp_DYNAMICphp:
php php php php php php php php php php php php php php php php php php php php php/php/Writephp thephp sealedphp valuesphp tophp thephp outputphp streamphp.
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$propertyNamesphp asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$objectphp-php>php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/Writephp remainingphp properties
php php php php php php php php php php php php php php php php php php php php foreachphp(php$objectphp asphp php$keyphp php=php>php php$valuephp)php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php!inphp_arrayphp(php$keyphp,php$propertyNamesphp)php php&php&php php$keyphp[php0php]php php!php=php php"php_php"php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeStringphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/Writephp anphp emptyphp stringphp tophp endphp thephp dynamicphp part
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeStringphp(php$thisphp-php>php_strEmptyphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:ETphp_EXTERNALphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Externalphp Objectphp Encodingphp notphp implementedphp'php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unknownphp Objectphp Encodingphp typephp:php php'php php.php php$encodingphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unablephp tophp writeObjectphp outputphp:php php'php php.php php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
