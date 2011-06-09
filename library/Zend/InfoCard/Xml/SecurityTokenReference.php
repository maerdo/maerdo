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
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SecurityTokenReferencephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Element
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Elementphp.phpphp'php;

php/php*php*
php php*php Representsphp aphp SecurityTokenReferencephp XMLphp block
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_SecurityTokenReferencephp extendsphp Zendphp_InfoCardphp_Xmlphp_Element
php{
php php php php php/php*php*
php php php php php php*php Basephp6php4php Binaryphp Encodingphp URI
php php php php php php*php/
php php php php constphp ENCODINGphp_BASEphp6php4BINphp php=php php'httpphp:php/php/docsphp.oasisphp-openphp.orgphp/wssphp/php2php0php0php4php/php0php1php/oasisphp-php2php0php0php4php0php1php-wssphp-soapphp-messagephp-securityphp-php1php.php0php#Basephp6php4Binaryphp'php;

php php php php php/php*php*
php php php php php php*php Returnphp anphp instancephp ofphp thephp objectphp basedphp onphp thephp inputphp XML
php php php php php php*
php php php php php php*php php@paramphp stringphp php$xmlDataphp Thephp SecurityTokenReferencephp XMLphp Block
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_SecurityTokenReference
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php staticphp publicphp functionphp getInstancephp(php$xmlDataphp)
php php php php php{
php php php php php php php php ifphp(php$xmlDataphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp-php>asXMLphp(php)php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$xmlDataphp)php)php php{
php php php php php php php php php php php php php$strXmlDataphp php=php php$xmlDataphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Invalidphp Dataphp providedphp tophp createphp instancephp"php)php;
php php php php php php php php php}

php php php php php php php php php$sxephp php=php simplexmlphp_loadphp_stringphp(php$strXmlDataphp)php;

php php php php php php php php ifphp(php$sxephp-php>getNamephp(php)php php!php=php php"SecurityTokenReferencephp"php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Invalidphp XMLphp Blockphp providedphp forphp SecurityTokenReferencephp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp simplexmlphp_loadphp_stringphp(php$strXmlDataphp,php php"Zendphp_InfoCardphp_Xmlphp_SecurityTokenReferencephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp Keyphp Identifierphp XMLphp Object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_Element
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_getKeyIdentifierphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>registerXPathNamespacephp(php'ophp'php,php php'httpphp:php/php/docsphp.oasisphp-openphp.orgphp/wssphp/php2php0php0php4php/php0php1php/oasisphp-php2php0php0php4php0php1php-wssphp-wssecurityphp-secextphp-php1php.php0php.xsdphp'php)php;
php php php php php php php php listphp(php$keyidentphp)php php=php php$thisphp-php>xpathphp(php'php/php/ophp:KeyIdentifierphp'php)php;

php php php php php php php php ifphp(php!php(php$keyidentphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Failedphp tophp retrievephp Keyphp Identifierphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$keyidentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp Keyphp URIphp identifyingphp thephp thumbprintphp typephp used
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp thumbprintphp typephp URI
php php php php php php*php php@throwsphp php Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getKeyThumbprintTypephp(php)
php php php php php{

php php php php php php php php php$keyidentphp php=php php$thisphp-php>php_getKeyIdentifierphp(php)php;

php php php php php php php php php$domphp php=php selfphp:php:convertToDOMphp(php$keyidentphp)php;

php php php php php php php php ifphp(php!php$domphp-php>hasAttributephp(php'ValueTypephp'php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Keyphp Identifierphp didphp notphp providephp aphp typephp forphp thephp valuephp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp-php>getAttributephp(php'ValueTypephp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp thephp thumbprintphp encodingphp typephp usedphp asphp aphp URI
php php php php php php*
php php php php php php*php php@returnphp stringphp thephp URIphp ofphp thephp thumbprintphp encodingphp used
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getKeyThumbprintEncodingTypephp(php)
php php php php php{

php php php php php php php php php$keyidentphp php=php php$thisphp-php>php_getKeyIdentifierphp(php)php;

php php php php php php php php php$domphp php=php selfphp:php:convertToDOMphp(php$keyidentphp)php;

php php php php php php php php ifphp(php!php$domphp-php>hasAttributephp(php'EncodingTypephp'php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unablephp tophp determinephp thephp encodingphp typephp forphp thephp keyphp identifierphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$domphp-php>getAttributephp(php'EncodingTypephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp keyphp referencephp dataphp usedphp tophp identifyphp thephp publicphp key
php php php php php php*
php php php php php php*php php@paramphp boolphp php$decodephp ifphp truephp,php willphp returnphp aphp decodedphp versionphp ofphp thephp key
php php php php php php*php php@returnphp stringphp thephp keyphp referencephp thumbprintphp,php eitherphp inphp binaryphp orphp encodedphp form
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getKeyReferencephp(php$decodephp php=php truephp)
php php php php php{
php php php php php php php php php$keyIdentifierphp php=php php$thisphp-php>php_getKeyIdentifierphp(php)php;

php php php php php php php php php$domphp php=php selfphp:php:convertToDOMphp(php$keyIdentifierphp)php;
php php php php php php php php php$encodedphp php=php php$domphp-php>nodeValuephp;

php php php php php php php php ifphp(emptyphp(php$encodedphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Couldphp notphp findphp thephp Keyphp Referencephp Encodedphp Valuephp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php$decodephp)php php{

php php php php php php php php php php php php php$decodedphp php=php php"php"php;
php php php php php php php php php php php php switchphp(php$thisphp-php>getKeyThumbprintEncodingTypephp(php)php)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:ENCODINGphp_BASEphp6php4BINphp:

php php php php php php php php php php php php php php php php php php php php ifphp(versionphp_comparephp(PHPphp_VERSIONphp,php php"php5php.php2php.php0php"php,php php"php>php=php"php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$decodedphp php=php basephp6php4php_decodephp(php$encodedphp,php truephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$decodedphp php=php basephp6php4php_decodephp(php$encodedphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Unknownphp Keyphp Referencephp Encodingphp Typephp:php php{php$thisphp-php>getKeyThumbprintEncodingTypephp(php)php}php"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(php!php$decodedphp php|php|php emptyphp(php$decodedphp)php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Failedphp tophp decodephp keyphp referencephp"php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$decodedphp;
php php php php php php php php php}

php php php php php php php php returnphp php$encodedphp;
php php php php php}
php}
