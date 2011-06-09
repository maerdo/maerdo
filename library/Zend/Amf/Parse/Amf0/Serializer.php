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
php php*php php@versionphp php php php php$Idphp:php Serializerphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Amfphp_Constantsphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Constantsphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_Serializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Serializerphp.phpphp'php;

php/php*php*
php php*php Serializerphp PHPphp miscphp typesphp backphp tophp therephp correspondingphp AMFphp0php Typephp Markerphp.
php php*
php php*php php@usesphp php php php php php php Zendphp_Amfphp_Parsephp_Serializer
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parsephp_Amfphp0
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializerphp extendsphp Zendphp_Amfphp_Parsephp_Serializer
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Namephp ofphp thephp classphp tophp bephp returned
php php php php php php*php/
php php php php protectedphp php$php_classNamephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Anphp arrayphp ofphp referencephp objects
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_referenceObjectsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Determinephp typephp andphp serializephp accordingly
php php php php php php*
php php php php php php*php Checksphp tophp seephp ifphp thephp typephp wasphp declaredphp andphp thenphp either
php php php php php php*php autophp negotiatesphp thephp typephp orphp reliesphp onphp thephp userphp definedphp markerTypephp to
php php php php php php*php serializephp thephp dataphp intophp amf
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@paramphp php mixedphp php$markerType
php php php php php php*php php@paramphp php mixedphp php$dataByVal
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializer
php php php php php php*php php@throwsphp Zendphp_Amfphp_Exceptionphp forphp unrecognizedphp typesphp orphp data
php php php php php php*php/
php php php php publicphp functionphp writeTypeMarkerphp(php&php$dataphp,php php$markerTypephp php=php nullphp,php php$dataByValphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Workaroundphp forphp PHPphp5php withphp Ephp_STRICTphp enabledphp complainingphp aboutphp php"Only
php php php php php php php php php/php/php variablesphp shouldphp bephp passedphp byphp referencephp"
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$dataphp)php php&php&php php(php$dataByValphp php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$dataphp php=php php&php$dataByValphp;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$markerTypephp)php php{
php php php php php php php php php php php php php/php/tryphp tophp referencephp thephp givenphp object
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>writeObjectReferencephp(php$dataphp,php php$markerTypephp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Writephp thephp Typephp Markerphp tophp denotephp thephp followingphp actionphp scriptphp dataphp type
php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$markerTypephp)php;
php php php php php php php php php php php php php php php php switchphp(php$markerTypephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_NUMBERphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeDoublephp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_BOOLEANphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_STRINGphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeUTFphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeObjectphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_NULLphp:
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_REFERENCEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeIntphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_MIXEDARRAYphp:
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Writephp lengthphp ofphp numericphp keysphp asphp zerophp.
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeLongphp(php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeObjectphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_ARRAYphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeArrayphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_DATEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeDatephp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_LONGSTRINGphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeLongUTFphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_TYPEDOBJECTphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeTypedObjectphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp0php_AMFphp3php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>writeAmfphp3TypeMarkerphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php"Unknownphp Typephp Markerphp:php php"php php.php php$markerTypephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_resourcephp(php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$dataphp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:handleResourcephp(php$dataphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php php php php casephp php(isphp_intphp(php$dataphp)php php|php|php isphp_floatphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_NUMBERphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_boolphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_BOOLEANphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_stringphp(php$dataphp)php php&php&php php(strlenphp(php$dataphp)php php>php php6php5php5php3php6php)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_LONGSTRINGphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_stringphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_STRINGphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_objectphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$dataphp instanceofphp DateTimephp)php php|php|php php(php$dataphp instanceofphp Zendphp_Datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_DATEphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php php php php php php php php php php php php php ifphp(php$classNamephp php=php php$thisphp-php>getClassNamephp(php$dataphp)php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/Objectphp isphp aphp Typedphp objectphp setphp classname
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_TYPEDOBJECTphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_classNamephp php=php php$classNamephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Objectphp isphp aphp genericphp classname
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(nullphp php=php=php=php php$dataphp)php:
php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_NULLphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(isphp_arrayphp(php$dataphp)php)php:
php php php php php php php php php php php php php php php php php php php php php/php/php checkphp ifphp itphp isphp anphp associativephp array
php php php php php php php php php php php php php php php php php php php php php$iphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(arrayphp_keysphp(php$dataphp)php asphp php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php checkphp ifphp itphp containsphp nonphp-integerphp keys
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_numericphp(php$keyphp)php php|php|php intvalphp(php$keyphp)php php!php=php php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php checkphp ifphp itphp isphp aphp sparsephp indexedphp array
php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$keyphp php!php=php php$iphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_MIXEDARRAYphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php/php/php Dealingphp withphp aphp standardphp numericphp array
php php php php php php php php php php php php php php php php php php php php ifphp(php!php$markerTypephp)php{
php php php php php php php php php php php php php php php php php php php php php php php php php$markerTypephp php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_ARRAYphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unsupportedphp dataphp typephp:php php'php php.php gettypephp(php$dataphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$dataphp,php php$markerTypephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp givenphp objectphp isphp inphp thephp referencephp tablephp,php writephp thephp referencephp ifphp itphp existsphp,
php php php php php php*php otherwisephp addphp thephp objectphp tophp thephp referencephp table
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$objectphp objectphp referencephp tophp checkphp forphp reference
php php php php php php*php php@paramphp php$markerTypephp AMFphp typephp ofphp thephp objectphp tophp write
php php php php php php*php php@paramphp mixedphp php$objectByValphp objectphp tophp checkphp forphp reference
php php php php php php*php php@returnphp Booleanphp truephp,php ifphp thephp referencephp wasphp writtenphp,php falsephp otherwise
php php php php php php*php/
php php php php protectedphp functionphp writeObjectReferencephp(php&php$objectphp,php php$markerTypephp,php php$objectByValphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php Workaroundphp forphp PHPphp5php withphp Ephp_STRICTphp enabledphp complainingphp aboutphp php"Only
php php php php php php php php php/php/php variablesphp shouldphp bephp passedphp byphp referencephp"
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$objectphp)php php&php&php php(php$objectByValphp php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$objectphp php=php php&php$objectByValphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$markerTypephp php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECT
php php php php php php php php php php php php php|php|php php$markerTypephp php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_MIXEDARRAY
php php php php php php php php php php php php php|php|php php$markerTypephp php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_ARRAY
php php php php php php php php php php php php php|php|php php$markerTypephp php=php=php Zendphp_Amfphp_Constantsphp:php:AMFphp0php_TYPEDOBJECT
php php php php php php php php php)php php{
php php php php php php php php php php php php php$refphp php=php arrayphp_searchphp(php$objectphp,php php$thisphp-php>php_referenceObjectsphp,php truephp)php;
php php php php php php php php php php php php php/php/handlephp objectphp reference
php php php php php php php php php php php php ifphp(php$refphp php!php=php=php falsephp)php{
php php php php php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$refphp,Zendphp_Amfphp_Constantsphp:php:AMFphp0php_REFERENCEphp)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_referenceObjectsphp[php]php php=php php$objectphp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp PHPphp arrayphp withphp stringphp orphp mixedphp keysphp.
php php php php php php*
php php php php php php*php php@paramphp objectphp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeObjectphp(php$objectphp)
php php php php php{
php php php php php php php php php/php/php Loopphp eachphp elementphp andphp writephp thephp namephp ofphp thephp propertyphp.
php php php php php php php php foreachphp php(php$objectphp asphp php$keyphp php=php>php php&php$valuephp)php php{
php php php php php php php php php php php php php/php/php skipphp variablesphp startingphp withphp anphp php_php privatephp transient
php php php php php php php php php php php php ifphp(php php$keyphp[php0php]php php=php=php php"php_php"php)php continuephp;
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeUTFphp(php$keyphp)php;
php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Writephp thephp endphp objectphp flag
php php php php php php php php php$thisphp-php>php_streamphp-php>writeIntphp(php0php)php;
php php php php php php php php php$thisphp-php>php_streamphp-php>writeBytephp(Zendphp_Amfphp_Constantsphp:php:AMFphp0php_OBJECTTERMphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp standardphp numericphp arrayphp tophp thephp outputphp streamphp.php Ifphp aphp mixedphp array
php php php php php php*php isphp encounteredphp callphp writeTypeMarkerphp withphp mixedphp arrayphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$array
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeArrayphp(php&php$arrayphp)
php php php php php{
php php php php php php php php php$lengthphp php=php countphp(php$arrayphp)php;
php php php php php php php php ifphp php(php!php$lengthphp <php php0php)php php{
php php php php php php php php php php php php php/php/php writephp thephp lengthphp ofphp thephp array
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeLongphp(php0php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Writephp thephp lengthphp ofphp thephp numericphp array
php php php php php php php php php php php php php$thisphp-php>php_streamphp-php>writeLongphp(php$lengthphp)php;
php php php php php php php php php php php php forphp php(php$iphp=php0php;php php$i<php$lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php issetphp(php$arrayphp[php$iphp]php)php php?php php$arrayphp[php$iphp]php php:php nullphp;
php php php php php php php php php php php php php php php php php$thisphp-php>writeTypeMarkerphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp thephp DateTimephp intophp anphp AMFphp Date
php php php php php php*
php php php php php php*php php@paramphp php DateTimephp|Zendphp_Datephp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeDatephp(php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php$dataphp instanceofphp DateTimephp)php php{
php php php php php php php php php php php php php$dateStringphp php=php php$dataphp-php>formatphp(php'Uphp'php)php;
php php php php php php php php php}php elseifphp php(php$dataphp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$dateStringphp php=php php$dataphp-php>toStringphp(php'Uphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Invalidphp datephp specifiedphp;php mustphp bephp aphp DateTimephp orphp Zendphp_Datephp objectphp'php)php;
php php php php php php php php php}
php php php php php php php php php$dateStringphp php*php=php php1php0php0php0php;

php php php php php php php php php/php/php Makephp thephp conversionphp andphp removephp millisecondsphp.
php php php php php php php php php$thisphp-php>php_streamphp-php>writeDoublephp(php$dateStringphp)php;

php php php php php php php php php/php/php Flashphp doesphp notphp respectphp timezonephp butphp requiresphp itphp.
php php php php php php php php php$thisphp-php>php_streamphp-php>writeIntphp(php0php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp aphp classphp mappedphp objectphp tophp thephp outputphp streamphp.
php php php php php php*
php php php php php php*php php@paramphp php objectphp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeTypedObjectphp(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_streamphp-php>writeUTFphp(php$thisphp-php>php_classNamephp)php;
php php php php php php php php php$thisphp-php>writeObjectphp(php$dataphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Encounteredphp andphp AMFphp3php Typephp Markerphp usephp AMFphp3php serializerphp.php Oncephp AMFphp3php is
php php php php php php*php encounteredphp itphp willphp notphp returnphp tophp AMfphp0php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Parsephp_Amfphp0php_Serializer
php php php php php php*php/
php php php php publicphp functionphp writeAmfphp3TypeMarkerphp(php&php$dataphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Amfphp3php/Serializerphp.phpphp'php;
php php php php php php php php php$serializerphp php=php newphp Zendphp_Amfphp_Parsephp_Amfphp3php_Serializerphp(php$thisphp-php>php_streamphp)php;
php php php php php php php php php$serializerphp-php>writeTypeMarkerphp(php$dataphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp ifphp thephp classphp namephp isphp aphp classphp mappedphp namephp andphp returnphp the
php php php php php php*php respectivephp classnamephp ifphp itphp isphp.
php php php php php php*
php php php php php php*php php@paramphp objectphp php$object
php php php php php php*php php@returnphp falsephp|stringphp php$className
php php php php php php*php/
php php php php protectedphp functionphp getClassNamephp(php$objectphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;
php php php php php php php php php/php/Checkphp tophp seephp ifphp thephp objectphp isphp aphp typedphp objectphp andphp wephp needphp tophp change
php php php php php php php php php$classNamephp php=php php'php'php;
php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php php/php/php thephp returnphp classphp mappedphp namephp backphp tophp actionscriptphp classphp namephp.
php php php php php php php php php php php php casephp Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:getMappedClassNamephp(getphp_classphp(php$objectphp)php)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:getMappedClassNamephp(getphp_classphp(php$objectphp)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php/php/php Checkphp tophp seephp ifphp thephp userphp hasphp definedphp anphp explicitphp Actionphp Scriptphp typephp.
php php php php php php php php php php php php casephp issetphp(php$objectphp-php>php_explicitTypephp)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php php$objectphp-php>php_explicitTypephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp userphp hasphp definedphp aphp methodphp forphp accessingphp thephp Actionphp Scriptphp type
php php php php php php php php php php php php casephp methodphp_existsphp(php$objectphp,php php'getASClassNamephp'php)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php php$objectphp-php>getASClassNamephp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php/php/php Nophp returnphp classphp namephp isphp setphp makephp itphp aphp genericphp object
php php php php php php php php php php php php casephp php(php$objectphp instanceofphp stdClassphp)php:
php php php php php php php php php php php php php php php php php$classNamephp php=php php'php'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php/php/php Byphp defaultphp,php usephp objectphp'sphp classphp name
php php php php php php php php php php php php defaultphp:
php php php php php php php php php$classNamephp php=php getphp_classphp(php$objectphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php ifphp(php!php$classNamephp php=php=php php'php'php)php php{
php php php php php php php php php php php php returnphp php$classNamephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}
php}
