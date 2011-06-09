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
php php*php php@versionphp php php php php$Idphp:php Deserializerphp.phpphp php2php1php9php6php8php php2php0php1php0php-php0php4php-php2php2php php0php3php:php5php3php:php3php4Zphp matthewphp php$
php php*php/

php/php*php*php Zendphp_Amfphp_Parsephp_Deserializerphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/Deserializerphp.phpphp'php;

php/php*php*php Zendphp_Amfphp_Parsephp_TypeLoaderphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;

php/php*php*
php php*php Readphp anphp AMFphp3php inputphp streamphp andphp convertphp itphp intophp PHPphp dataphp typesphp.
php php*
php php*php php@todophp php php php php php php readObjectphp tophp handlephp Typedphp Objects
php php*php php@todophp php php php php php php readXMLStrimgphp tophp bephp implementedphp.
php php*php php@todophp php php php php php php Classphp couldphp bephp implementedphp asphp Factoryphp Classphp withphp eachphp dataphp typephp itphp'sphp ownphp classphp.
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Parsephp_Amfphp3
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Parsephp_Amfphp3php_Deserializerphp extendsphp Zendphp_Amfphp_Parsephp_Deserializer
php{
php php php php php/php*php*
php php php php php php*php Totalphp numberphp ofphp objectsphp inphp thephp referenceObjectphp array
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_objectCountphp;

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
php php php php php php*php Anphp arrayphp ofphp referencephp classphp definitionsphp perphp body
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_referenceDefinitionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Readphp AMFphp markersphp andphp dispatchphp forphp deserialization
php php php php php php*
php php php php php php*php Checksphp forphp AMFphp markerphp typesphp andphp callsphp thephp appropriatephp methods
php php php php php php*php forphp deserializingphp thosephp markerphp typesphp.php markersphp arephp thephp dataphp typephp of
php php php php php php*php thephp followingphp valuephp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$typeMarker
php php php php php php*php php@returnphp mixedphp Whateverphp thephp correspondingphp PHPphp dataphp typephp is
php php php php php php*php php@throwsphp Zendphp_Amfphp_Exceptionphp forphp unidentifiedphp markerphp type
php php php php php php*php/
php php php php publicphp functionphp readTypeMarkerphp(php$typeMarkerphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp(nullphp php=php=php=php php$typeMarkerphp)php php{
php php php php php php php php php php php php php$typeMarkerphp php=php php$thisphp-php>php_streamphp-php>readBytephp(php)php;
php php php php php php php php php}

php php php php php php php php switchphp(php$typeMarkerphp)php php{
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_UNDEFINEDphp:
php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NULLphp:
php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BOOLEANphp_FALSEphp:
php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BOOLEANphp_TRUEphp:
php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_INTEGERphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readIntegerphp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_NUMBERphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_streamphp-php>readDoublephp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_STRINGphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readStringphp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_DATEphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readDatephp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_ARRAYphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readArrayphp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_OBJECTphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readObjectphp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_XMLphp:
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_XMLSTRINGphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readXmlStringphp(php)php;
php php php php php php php php php php php php casephp Zendphp_Amfphp_Constantsphp:php:AMFphp3php_BYTEARRAYphp:
php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>readStringphp(php)php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unsupportedphp typephp markerphp:php php'php php.php php$typeMarkerphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp andphp deserializephp anphp integer
php php php php php php*
php php php php php php*php AMFphp php3php representsphp smallerphp integersphp withphp fewerphp bytesphp usingphp thephp most
php php php php php php*php significantphp bitphp ofphp eachphp bytephp.php Thephp worstphp casephp usesphp php3php2php-bits
php php php php php php*php tophp representphp aphp php2php9php-bitphp numberphp,php whichphp isphp whatphp wephp wouldphp have
php php php php php php*php donephp withphp nophp compressionphp.
php php php php php php*php php-php php0xphp0php0php0php0php0php0php0php0php php-php php0xphp0php0php0php0php0php0php7Fphp php:php php0xxxxxxx
php php php php php php*php php-php php0xphp0php0php0php0php0php0php8php0php php-php php0xphp0php0php0php0php3FFFphp php:php php1xxxxxxxphp php0xxxxxxx
php php php php php php*php php-php php0xphp0php0php0php0php4php0php0php0php php-php php0xphp0php0php1FFFFFphp php:php php1xxxxxxxphp php1xxxxxxxphp php0xxxxxxx
php php php php php php*php php-php php0xphp0php0php2php0php0php0php0php0php php-php php0xphp3FFFFFFFphp php:php php1xxxxxxxphp php1xxxxxxxphp php1xxxxxxxphp xxxxxxxx
php php php php php php*php php-php php0xphp4php0php0php0php0php0php0php0php php-php php0xFFFFFFFFphp php:php throwphp rangephp exception
php php php php php php*
php php php php php php*php php0xphp0php4php php-php>php integerphp typephp codephp,php followedphp byphp upphp tophp php4php bytesphp ofphp dataphp.
php php php php php php*
php php php php php php*php Parsingphp integersphp onphp OSFlashphp forphp thephp AMFphp3php integerphp dataphp formatphp:
php php php php php php*php php@linkphp httpphp:php/php/osflashphp.orgphp/amfphp3php/parsingphp_integers
php php php php php php*php php@returnphp intphp|float
php php php php php php*php/
php php php php publicphp functionphp readIntegerphp(php)
php php php php php{
php php php php php php php php php$countphp php php php php php php php php=php php1php;
php php php php php php php php php$intReferencephp php=php php$thisphp-php>php_streamphp-php>readBytephp(php)php;
php php php php php php php php php$resultphp php php php php php php php=php php0php;
php php php php php php php php whilephp php(php(php(php$intReferencephp php&php php0xphp8php0php)php php!php=php php0php)php php&php&php php$countphp <php php4php)php php{
php php php php php php php php php php php php php$resultphp php php php php php php <php<php=php php7php;
php php php php php php php php php php php php php$resultphp php php php php php php php php|php=php php(php$intReferencephp php&php php0xphp7fphp)php;
php php php php php php php php php php php php php$intReferencephp php php php=php php$thisphp-php>php_streamphp-php>readBytephp(php)php;
php php php php php php php php php php php php php$countphp+php+php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$countphp <php php4php)php php{
php php php php php php php php php php php php php$resultphp <php<php=php php7php;
php php php php php php php php php php php php php$resultphp php php|php=php php$intReferencephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Usephp allphp php8php bitsphp fromphp thephp php4thphp byte
php php php php php php php php php php php php php$resultphp <php<php=php php8php;
php php php php php php php php php php php php php$resultphp php php|php=php php$intReferencephp;

php php php php php php php php php php php php php/php/php Checkphp ifphp thephp integerphp shouldphp bephp negative
php php php php php php php php php php php php ifphp php(php(php$resultphp php&php php0xphp1php0php0php0php0php0php0php0php)php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php/php/andphp extendphp thephp signphp bit
php php php php php php php php php php php php php php php php php$resultphp php|php=php php~php0xFFFFFFFphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp andphp deserializephp aphp string
php php php php php php*
php php php php php php*php Stringsphp canphp bephp sentphp asphp aphp referencephp tophp aphp previously
php php php php php php*php occurringphp Stringphp byphp usingphp anphp indexphp tophp thephp implicitphp stringphp referencephp tablephp.
php php php php php php*php Stringsphp arephp encodingphp usingphp UTFphp-php8php php-php howeverphp thephp headerphp mayphp either
php php php php php php*php describephp aphp stringphp literalphp orphp aphp stringphp referencephp.
php php php php php php*
php php php php php php*php php-php stringphp php=php php0xphp0php6php stringphp-data
php php php php php php*php php-php stringphp-dataphp php=php integerphp-dataphp php[php modifiedphp-utfphp-php8php php]
php php php php php php*php php-php modifiedphp-utfphp-php8php php=php php*OCTET
php php php php php php*
php php php php php php*php php@returnphp String
php php php php php php*php/
php php php php publicphp functionphp readStringphp(php)
php php php php php{
php php php php php php php php php$stringReferencephp php=php php$thisphp-php>readIntegerphp(php)php;

php php php php php php php php php/php/Checkphp ifphp thisphp isphp aphp referencephp string
php php php php php php php php ifphp php(php(php$stringReferencephp php&php php0xphp0php1php)php php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php referencephp string
php php php php php php php php php php php php php$stringReferencephp php=php php$stringReferencephp php>php>php php1php;
php php php php php php php php php php php php ifphp php(php$stringReferencephp php>php=php countphp(php$thisphp-php>php_referenceStringsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Undefinedphp stringphp referencephp:php php'php php.php php$stringReferencephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php referencephp stringphp found
php php php php php php php php php php php php returnphp php$thisphp-php>php_referenceStringsphp[php$stringReferencephp]php;
php php php php php php php php php}

php php php php php php php php php$lengthphp php=php php$stringReferencephp php>php>php php1php;
php php php php php php php php ifphp php(php$lengthphp)php php{
php php php php php php php php php php php php php$stringphp php=php php$thisphp-php>php_streamphp-php>readBytesphp(php$lengthphp)php;
php php php php php php php php php php php php php$thisphp-php>php_referenceStringsphp[php]php php=php php$stringphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$stringphp php=php php"php"php;
php php php php php php php php php}
php php php php php php php php returnphp php$stringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp andphp deserializephp aphp date
php php php php php php*
php php php php php php*php Dataphp isphp thephp numberphp ofphp millisecondsphp elapsedphp sincephp thephp epoch
php php php php php php*php ofphp midnightphp,php php1stphp Janphp php1php9php7php0php inphp thephp UTCphp timephp zonephp.
php php php php php php*php Localphp timephp zonephp informationphp isphp notphp sentphp tophp flashphp.
php php php php php php*
php php php php php php*php php-php datephp php=php php0xphp0php8php integerphp-dataphp php[php numberphp-dataphp php]
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp readDatephp(php)
php php php php php{
php php php php php php php php php$dateReferencephp php=php php$thisphp-php>readIntegerphp(php)php;
php php php php php php php php ifphp php(php(php$dateReferencephp php&php php0xphp0php1php)php php=php=php php0php)php php{
php php php php php php php php php php php php php$dateReferencephp php=php php$dateReferencephp php>php>php php1php;
php php php php php php php php php php php php ifphp php(php$dateReferencephp>php=countphp(php$thisphp-php>php_referenceObjectsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Undefinedphp datephp referencephp:php php'php php.php php$dateReferencephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_referenceObjectsphp[php$dateReferencephp]php;
php php php php php php php php php}

php php php php php php php php php$timestampphp php=php floorphp(php$thisphp-php>php_streamphp-php>readDoublephp(php)php php/php php1php0php0php0php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Datephp.phpphp'php;
php php php php php php php php php$dateTimephp php php=php newphp Zendphp_Datephp(php(intphp)php php$timestampphp)php;
php php php php php php php php php$thisphp-php>php_referenceObjectsphp[php]php php=php php$dateTimephp;
php php php php php php php php returnphp php$dateTimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp amfphp arrayphp tophp PHPphp array
php php php php php php*
php php php php php php*php php-php arrayphp php=php php0xphp0php9php integerphp-dataphp php(php php[php php1OCTETphp php*amfphp3php-dataphp php]php php|php php[OCTETphp php*amfphp3php-dataphp php1php]php php|php php[php OCTETphp php*amfphp-dataphp php]php php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp readArrayphp(php)
php php php php php{
php php php php php php php php php$arrayReferencephp php=php php$thisphp-php>readIntegerphp(php)php;
php php php php php php php php ifphp php(php(php$arrayReferencephp php&php php0xphp0php1php)php=php=php0php)php{
php php php php php php php php php php php php php$arrayReferencephp php=php php$arrayReferencephp php>php>php php1php;
php php php php php php php php php php php php ifphp php(php$arrayReferencephp>php=countphp(php$thisphp-php>php_referenceObjectsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unknowphp arrayphp referencephp:php php'php php.php php$arrayReferencephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp-php>php_referenceObjectsphp[php$arrayReferencephp]php;
php php php php php php php php php}

php php php php php php php php php/php/php Createphp aphp holderphp forphp thephp arrayphp inphp thephp referencephp list
php php php php php php php php php$dataphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_referenceObjectsphp[php]php php=php&php php$dataphp;
php php php php php php php php php$keyphp php=php php$thisphp-php>readStringphp(php)php;

php php php php php php php php php/php/php Iteratingphp forphp stringphp basedphp keysphp.
php php php php php php php php whilephp php(php$keyphp php!php=php php'php'php)php php{
php php php php php php php php php php php php php$dataphp[php$keyphp]php php=php php$thisphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php php php php php$keyphp php=php php$thisphp-php>readStringphp(php)php;
php php php php php php php php php}

php php php php php php php php php$arrayReferencephp php=php php$arrayReferencephp php>php>php1php;

php php php php php php php php php/php/Wephp havephp aphp densephp array
php php php php php php php php forphp php(php$iphp=php0php;php php$iphp <php php$arrayReferencephp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$dataphp[php]php php=php php$thisphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp anphp objectphp fromphp thephp AMFphp streamphp andphp convertphp itphp intophp aphp PHPphp object
php php php php php php*
php php php php php php*php php@todophp php php Ratherphp thanphp usingphp anphp arrayphp ofphp traitsInfophp createphp Zendphp_Amfphp_Valuephp_TraitsInfo
php php php php php php*php php@returnphp objectphp|array
php php php php php php*php/
php php php php publicphp functionphp readObjectphp(php)
php php php php php{
php php php php php php php php php$traitsInfophp php php php=php php$thisphp-php>readIntegerphp(php)php;
php php php php php php php php php$storedObjectphp php=php php(php$traitsInfophp php&php php0xphp0php1php)php=php=php0php;
php php php php php php php php php$traitsInfophp php php php=php php$traitsInfophp php>php>php php1php;

php php php php php php php php php/php/php Checkphp ifphp thephp Objectphp isphp inphp thephp storedphp Objectsphp referencephp table
php php php php php php php php ifphp php(php$storedObjectphp)php php{
php php php php php php php php php php php php php$refphp php=php php$traitsInfophp;
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_referenceObjectsphp[php$refphp]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unknownphp Objectphp referencephp:php php'php php.php php$refphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$returnObjectphp php=php php$thisphp-php>php_referenceObjectsphp[php$refphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Checkphp ifphp thephp Objectphp isphp inphp thephp storedphp Definitionsphp referencephp table
php php php php php php php php php php php php php$storedClassphp php=php php(php$traitsInfophp php&php php0xphp0php1php)php php=php=php php0php;
php php php php php php php php php php php php php$traitsInfophp php php=php php$traitsInfophp php>php>php php1php;
php php php php php php php php php php php php ifphp php(php$storedClassphp)php php{
php php php php php php php php php php php php php php php php php$refphp php=php php$traitsInfophp;
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_referenceDefinitionsphp[php$refphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Unknowsphp Definitionphp referencephp:php php'php.php php$refphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php Populatephp thephp referencephp attributes
php php php php php php php php php php php php php php php php php$classNamephp php php php php php=php php$thisphp-php>php_referenceDefinitionsphp[php$refphp]php[php'classNamephp'php]php;
php php php php php php php php php php php php php php php php php$encodingphp php php php php php php=php php$thisphp-php>php_referenceDefinitionsphp[php$refphp]php[php'encodingphp'php]php;
php php php php php php php php php php php php php php php php php$propertyNamesphp php=php php$thisphp-php>php_referenceDefinitionsphp[php$refphp]php[php'propertyNamesphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Thephp classphp wasphp notphp inphp thephp referencephp tablesphp.php Startphp readingphp rawdataphp tophp buildphp traitsphp.
php php php php php php php php php php php php php php php php php/php/php Createphp aphp traitsphp tablephp.php Zendphp_Amfphp_Valuephp_TraitsInfophp wouldphp bephp ideal
php php php php php php php php php php php php php php php php php$classNamephp php php php php php=php php$thisphp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php$encodingphp php php php php php php=php php$traitsInfophp php&php php0xphp0php3php;
php php php php php php php php php php php php php php php php php$propertyNamesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$traitsInfophp php php php php=php php$traitsInfophp php>php>php php2php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Wephp nowphp havephp thephp objectphp traitsphp definedphp inphp variablesphp.php Timephp tophp gophp tophp workphp:
php php php php php php php php php php php php ifphp php(php!php$classNamephp)php php{
php php php php php php php php php php php php php php php php php/php/php Nophp classphp namephp genericphp object
php php php php php php php php php php php php php php php php php$returnObjectphp php=php newphp stdClassphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Definedphp object
php php php php php php php php php php php php php php php php php/php/php Typedphp objectphp lookupphp againstphp registeredphp classnamephp maps
php php php php php php php php php php php php php php php php ifphp php(php$loaderphp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:loadTypephp(php$classNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$returnObjectphp php=php newphp php$loaderphp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/userphp definedphp typedphp object
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Amfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Amfphp_Exceptionphp(php'Typedphp objectphp notphp foundphp:php php'php.php php$classNamephp php.php php'php php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Addphp thephp Objectphp tophp thephp referencephp table
php php php php php php php php php php php php php$thisphp-php>php_referenceObjectsphp[php]php php=php php$returnObjectphp;

php php php php php php php php php php php php php$propertiesphp php=php arrayphp(php)php;php php/php/php clearphp value
php php php php php php php php php php php php php/php/php Checkphp encodingphp typesphp forphp additionalphp processingphp.
php php php php php php php php php php php php switchphp php(php$encodingphp)php php{
php php php php php php php php php php php php php php php php casephp php(Zendphp_Amfphp_Constantsphp:php:ETphp_EXTERNALphp)php:
php php php php php php php php php php php php php php php php php php php php php/php/php Externalizablephp objectphp suchphp asphp php{ArrayCollectionphp}php andphp php{ObjectProxyphp}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$storedClassphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_referenceDefinitionsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'classNamephp'php php php php php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'encodingphp'php php php php php php php=php>php php$encodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'propertyNamesphp'php php=php>php php$propertyNamesphp,
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$returnObjectphp-php>externalizedDataphp php=php php$thisphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php(Zendphp_Amfphp_Constantsphp:php:ETphp_DYNAMICphp)php:
php php php php php php php php php php php php php php php php php php php php php/php/php usedphp forphp Namephp-valuephp encoding
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$storedClassphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_referenceDefinitionsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'classNamephp'php php php php php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'encodingphp'php php php php php php php=php>php php$encodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'propertyNamesphp'php php=php>php php$propertyNamesphp,
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php/php/php notphp aphp referencephp objectphp readphp namephp valuephp propertiesphp fromphp bytephp stream
php php php php php php php php php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$propertyphp php=php php$thisphp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$propertyphp php!php=php php"php"php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$propertyNamesphp[php]php php php php php php php php=php php$propertyphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$propertiesphp[php$propertyphp]php php=php php$thisphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php whilephp php(php$propertyphp php!php=php"php"php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php/php basicphp propertyphp listphp objectphp.
php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$storedClassphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$countphp php=php php$traitsInfophp;php php/php/php Numberphp ofphp propertiesphp inphp thephp list
php php php php php php php php php php php php php php php php php php php php php php php php forphp(php$iphp=php0php;php php$i<php php$countphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$propertyNamesphp[php]php php=php php$thisphp-php>readStringphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Addphp aphp referencephp tophp thephp classphp.
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_referenceDefinitionsphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'classNamephp'php php php php php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'encodingphp'php php php php php php php=php>php php$encodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'propertyNamesphp'php php=php>php php$propertyNamesphp,
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$propertyNamesphp asphp php$propertyphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$propertiesphp[php$propertyphp]php php=php php$thisphp-php>readTypeMarkerphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php Addphp propertiesphp backphp tophp thephp returnphp objectphp.
php php php php php php php php php php php php foreachphp(php$propertiesphp asphp php$keyphp=php>php$valuephp)php php{
php php php php php php php php php php php php php php php php ifphp(php$keyphp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnObjectphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}


php php php php php php php php php}

php php php php php php php ifphp php(php$returnObjectphp instanceofphp Zendphp_Amfphp_Valuephp_Messagingphp_ArrayCollectionphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$returnObjectphp-php>externalizedDataphp)php)php php{
php php php php php php php php php php php php php php php php php$returnObjectphp php=php php$returnObjectphp-php>externalizedDataphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnObjectphp php=php getphp_objectphp_varsphp(php$returnObjectphp)php;
php php php php php php php php php php php php php}
php php php php php php php php}

php php php php php php php php returnphp php$returnObjectphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertphp XMLphp tophp SimpleXml
php php php php php php*php Ifphp userphp wantsphp DomDocumentphp theyphp canphp usephp domphp_importphp_simplexml
php php php php php php*
php php php php php php*php php@returnphp SimpleXmlphp Object
php php php php php php*php/
php php php php publicphp functionphp readXmlStringphp(php)
php php php php php{
php php php php php php php php php$xmlReferencephp php=php php$thisphp-php>readIntegerphp(php)php;
php php php php php php php php php$lengthphp php=php php$xmlReferencephp php>php>php php1php;
php php php php php php php php php$stringphp php=php php$thisphp-php>php_streamphp-php>readBytesphp(php$lengthphp)php;
php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$stringphp)php;
php php php php php}
php}
