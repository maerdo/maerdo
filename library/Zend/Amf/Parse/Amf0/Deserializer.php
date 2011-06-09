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
php php*php php@subpackagephp Parsephp_Amfphp0
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Deserializerphp.phpphp php2php1php2php0php9php php2php0php1php0php-php0php2php-php2php7php php1php0php:php3php7php:php1php5Zphp yoshidaphp@zendphp.cophp.jpphp php$
php php*php/

php/php*php*php Zendphp_Amfphp_Constantsphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Constantsphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_Deserializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Deserializerphp.phpphp'php;

php/php*php*
php php*php Readphp anphp AMFphp0php inputphp streamphp andphp convertphp itphp intophp PHPphp dataphp types
php php*
php php*php php@todophp php php php php php php Implementphp Typedphp Objectphp Classphp Mapping
php php*php php@todophp php php php php php php Classphp couldphp bephp implementedphp asphp Factoryphp Classphp withphp eachphp dataphp typephp itphp'sphp ownphp class
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parsephp_Amfphp0
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Parsephp_Amfphp0php_Deserializerphp extendsphp Zendphp_Amfphp_Parsephp_Deserializer
php{
php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp objectsphp usedphp forphp recursivelyphp deserializingphp anphp objectphp.
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_referencephp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Ifphp AMFphp3php serializationphp occursphp,php updatephp tophp AMFphp0php php0xphp0php3
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_objectEncodingphp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp_ENCODINGphp;

php php php php php/php*php*
php php php php php php*php Readphp AMFphp markersphp andphp dispatchphp forphp deserialization
php php php php php php*
php php php php php php*php Checksphp forphp AMFphp markerphp typesphp andphp callsphp thephp appropriatephp methods
php php php php php php*php forphp deserializingphp thosephp markerphp typesphp.php Markersphp arephp thephp dataphp typephp of
php php php php php php*php thephp followingphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$typeMarker
php php php php php php*php php@returnphp mixedphp whateverphp thephp dataphp typephp isphp ofphp thephp markerphp inphp php
php php php php php php*php php@throwsphp Zendphp_Amfphp_Exceptionphp forphp invalidphp type
php php php php php php*php/
php php php php publicphp functionphp readTypeMarkerphp(php$typeMarkerphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$typeMarkerphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$typeMarkerphp php=php php$thisphp-php>php_streamphp-php>readBytephp(php)php;
php php php php php php php php php}

php php php php php php php php switchphp(php$typeMarkerphp)php php{
php php php php php php php php php php php php php/php/php number
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_NUMBERphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_streamphp-php>readDoublephp(php)php;

php php php php php php php php php php php php php/php/php boolean
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_BOOLEANphp:
php php php php php php php php php php php php php php php php returnphp php(booleanphp)php php$thisphp-php>php_streamphp-php>readBytephp(php)php;

php php php php php php php php php php php php php/php/php string
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_STRINGphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_streamphp-php>readUTFphp(php)php;

php php php php php php php php php php php php php/php/php object
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readObjectphp(php)php;

php php php php php php php php php php php php php/php/php null
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_NULLphp:
php php php php php php php php php php php php php php php php returnphp nullphp;

php php php php php php php php php php php php php/php/php undefined
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_UNDEFINEDphp:
php php php php php php php php php php php php php php php php returnphp nullphp;

php php php php php php php php php php php php php/php/php Circularphp referencesphp arephp returnedphp here
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_REFERENCEphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readReferencephp(php)php;

php php php php php php php php php php php php php/php/php mixedphp arrayphp withphp numericphp andphp stringphp keys
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_MIXEDARRAYphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readMixedArrayphp(php)php;

php php php php php php php php php php php php php/php/php array
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_ARRAYphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readArrayphp(php)php;

php php php php php php php php php php php php php/php/php date
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_DATEphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readDatephp(php)php;

php php php php php php php php php php php php php/php/php longStringphp php strlenphp(stringphp)php php>php php2php^php1php6
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_LONGSTRINGphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_streamphp-php>readLongUTFphp(php)php;

php php php php php php php php php php php php php/php/internalphp ASphp objectphp,php php notphp supported
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_UNSUPPORTEDphp:
php php php php php php php php php php php php php php php php returnphp nullphp;

php php php php php php php php php php php php php/php/php XML
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_XMLphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readXmlStringphp(php)php;

php php php php php php php php php php php php php/php/php typedphp objectphp iephp Customphp Class
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_TYPEDOBJECTphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readTypedObjectphp(php)php;

php php php php php php php php php php php php php/php/AMFphp3php-specific
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_AMFphp3php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readAmfphp3TypeMarkerphp(php)php;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unsupportedphp markerphp typephp:php php'php php.php php$typeMarkerphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp AMFphp objectsphp andphp convertphp tophp PHPphp objects
php php php php php php*
php php php php php php*php Readphp thephp namephp valuephp pairphp objectsphp formphp thephp phpphp messagephp andphp convertphp themphp to
php php php php php php*php aphp phpphp objectphp classphp.
php php php php php php*
php php php php php php*php Calledphp whenphp thephp markerphp typephp isphp php3php.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|nullphp php$object
php php php php php php*php php@returnphp object
php php php php php php*php/
php php php php publicphp functionphp readObjectphp(php$objectphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$objectphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$objectphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php whilephp php(truephp)php php{
php php php php php php php php php php php php php$keyphp php php php php php php php php=php php$thisphp-php>php_streamphp-php>readUTFphp(php)php;
php php php php php php php php php php php php php$typeMarkerphp php=php php$thisphp-php>php_streamphp-php>readBytephp(php)php;
php php php php php php php php php php php php ifphp php(php$typeMarkerphp php!php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTTERMphp php)php{
php php php php php php php php php php php php php php php php php/php/Recursivlyphp callphp readTypeMarkerphp tophp getphp thephp typesphp ofphp propertiesphp inphp thephp object
php php php php php php php php php php php php php php php php php$objectphp[php$keyphp]php php=php php$thisphp-php>readTypeMarkerphp(php$typeMarkerphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/encounteredphp AMFphp objectphp terminator
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_referencephp[php]php php=php php$objectphp;
php php php php php php php php returnphp php(objectphp)php php$objectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp referencephp objects
php php php php php php*
php php php php php php*php Usedphp tophp gainphp accessphp tophp thephp privatephp arrayphp ofphp referencephp objectsphp.
php php php php php php*php Calledphp whenphp markerphp typephp isphp php7php.
php php php php php php*
php php php php php php*php php@returnphp object
php php php php php php*php php@throwsphp Zendphp_Amfphp_Exceptionphp forphp invalidphp referencephp keys
php php php php php php*php/
php php php php publicphp functionphp readReferencephp(php)
php php php php php{
php php php php php php php php php$keyphp php=php php$thisphp-php>php_streamphp-php>readIntphp(php)php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_referencephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Invalidphp referencephp keyphp:php php'php.php php$keyphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_referencephp[php$keyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readsphp anphp arrayphp withphp numericphp andphp stringphp indexesphp.
php php php php php php*
php php php php php php*php Calledphp whenphp markerphp typephp isphp php8
php php php php php php*
php php php php php php*php php@todophp php php Asphp ofphp Flashphp Playerphp php9php therephp isphp notphp supportphp forphp mixedphp typedphp arrays
php php php php php php*php php php php php php php php php sophp wephp handlephp thisphp asphp anphp objectphp.php Withphp thephp introductionphp ofphp vectors
php php php php php php*php php php php php php php php php inphp Flashphp Playerphp php1php0php thisphp mayphp needphp tophp bephp reconsideredphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp readMixedArrayphp(php)
php php php php php{
php php php php php php php php php$lengthphp php=php php$thisphp-php>php_streamphp-php>readLongphp(php)php;
php php php php php php php php returnphp php$thisphp-php>readObjectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp numericallyphp indexedphp actiosncriptphp arraysphp intophp phpphp arraysphp.
php php php php php php*
php php php php php php*php Calledphp whenphp markerphp typephp isphp php1php0
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp readArrayphp(php)
php php php php php{
php php php php php php php php php$lengthphp php=php php$thisphp-php>php_streamphp-php>readLongphp(php)php;
php php php php php php php php php$arrayphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$lengthphp-php-php)php php{
php php php php php php php php php php php php php$arrayphp[php]php php=php php$thisphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$arrayphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp ASphp Datephp tophp Zendphp_Date
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp readDatephp(php)
php php php php php{
php php php php php php php php php/php/php getphp thephp unixphp timephp stampphp.php Notphp surephp whyphp ActionScriptphp doesphp notphp use
php php php php php php php php php/php/php milliseconds
php php php php php php php php php$timestampphp php=php floorphp(php$thisphp-php>php_streamphp-php>readDoublephp(php)php php/php php1php0php0php0php)php;

php php php php php php php php php/php/php Thephp timezonephp offsetphp isphp neverphp returnedphp tophp thephp serverphp;php itphp isphp alwaysphp php0php,
php php php php php php php php php/php/php sophp readphp andphp ignorephp.
php php php php php php php php php$offsetphp php=php php$thisphp-php>php_streamphp-php>readIntphp(php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Datephp.phpphp'php;
php php php php php php php php php$datephp php php php=php newphp Zendphp_Datephp(php$timestampphp)php;
php php php php php php php php returnphp php$datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp XMLphp tophp SimpleXml
php php php php php php*php Ifphp userphp wantsphp DomDocumentphp theyphp canphp usephp domphp_importphp_simplexml
php php php php php php*
php php php php php php*php php@returnphp SimpleXmlphp Object
php php php php php php*php/
php php php php publicphp functionphp readXmlStringphp(php)
php php php php php{
php php php php php php php php php$stringphp php=php php$thisphp-php>php_streamphp-php>readLongUTFphp(php)php;
php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$stringphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp Classphp thatphp isphp tophp bephp mappedphp tophp aphp serverphp classphp.
php php php php php php*
php php php php php php*php Commonlyphp usedphp forphp Valuephp Objectsphp onphp thephp server
php php php php php php*
php php php php php php*php php@todophp php php implementphp Typedphp Classphp mapping
php php php php php php*php php@returnphp objectphp|array
php php php php php php*php php@throwsphp Zendphp_Amfphp_Exceptionphp ifphp unablephp tophp loadphp type
php php php php php php*php/
php php php php publicphp functionphp readTypedObjectphp(php)
php php php php php{
php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;
php php php php php php php php php/php/php getphp thephp remotephp classphp name
php php php php php php php php php$classNamephp php=php php$thisphp-php>php_streamphp-php>readUTFphp(php)php;
php php php php php php php php php$loaderphp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:loadTypephp(php$classNamephp)php;
php php php php php php php php php$returnObjectphp php=php newphp php$loaderphp(php)php;
php php php php php php php php php$propertiesphp php=php getphp_objectphp_varsphp(php$thisphp-php>readObjectphp(php)php)php;
php php php php php php php php foreachphp(php$propertiesphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php ifphp(php$keyphp)php php{
php php php php php php php php php php php php php php php php php$returnObjectphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp(php$returnObjectphp instanceofphp Zendphp_Amfphp_Valuephp_Messagingphp_ArrayCollectionphp)php php{
php php php php php php php php php php php php php$returnObjectphp php=php getphp_objectphp_varsphp(php$returnObjectphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$returnObjectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php AMFphp3php dataphp typephp encounteredphp loadphp AMFphp3php Deserializerphp tophp handle
php php php php php php*php typephp markersphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readAmfphp3TypeMarkerphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Amfphp3php/Deserializerphp.phpphp'php;
php php php php php php php php php$deserializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp3php_Deserializerphp(php$thisphp-php>php_streamphp)php;
php php php php php php php php php$thisphp-php>php_objectEncodingphp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp_ENCODINGphp;
php php php php php php php php returnphp php$deserializerphp-php>readTypeMarkerphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp objectphp encodingphp tophp checkphp ifphp anphp AMFphp3php object
php php php php php php*php isphp goingphp tophp bephp returnphp.
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getObjectEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_objectEncodingphp;
php php php php php}
php}
