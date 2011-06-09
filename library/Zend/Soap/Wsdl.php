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
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Wsdlphp.phpphp php2php3php3php4php2php php2php0php1php0php-php1php1php-php1php5php php1php5php:php2php9php:php2php0Zphp alexanderphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php php*php/
requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/Interfacephp.phpphp"php;

php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Strategyphp_Abstract
php php*php/
requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/Abstractphp.phpphp"php;

php/php*php*
php php*php Zendphp_Soapphp_Wsdl
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php/
classphp Zendphp_Soapphp_Wsdl
php{
php php php php php/php*php*
php php php php php php*php php@varphp objectphp DomDocumentphp Instance
php php php php php php*php/
php php php php privatephp php$php_domphp;

php php php php php/php*php*
php php php php php php*php php@varphp objectphp WSDLphp Rootphp XMLphp_Treephp_Node
php php php php php php*php/
php php php php privatephp php$php_wsdlphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp URIphp wherephp thephp WSDLphp willphp bephp available
php php php php php php*php/
php php php php privatephp php$php_uriphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMElement
php php php php php php*php/
php php php php privatephp php$php_schemaphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Typesphp definedphp onphp schema
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_includedTypesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Strategyphp forphp detectionphp ofphp complexphp types
php php php php php php*php/
php php php php protectedphp php$php_strategyphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$namephp Namephp ofphp thephp Webphp Servicephp beingphp Described
php php php php php php*php php@paramphp stringphp php php$uriphp URIphp wherephp thephp WSDLphp willphp bephp available
php php php php php php*php php@paramphp booleanphp|stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp php$strategy
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$namephp,php php$uriphp,php php$strategyphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php$uriphp php=php php$uriphp-php>getUriphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_uriphp php=php php$uriphp;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp changephp DomDocumentphp objectphp creationphp fromphp cparsingphp tophp construxtingphp usingphp API
php php php php php php php php php php*php Itphp alsophp shouldphp authomaticallyphp escapephp php$namephp andphp php$uriphp valuesphp ifphp necessary
php php php php php php php php php php*php/
php php php php php php php php php$wsdlphp php=php php"<php?xmlphp versionphp=php'php1php.php0php'php php?php>
php php php php php php php php php php php php php php php php php<definitionsphp namephp=php'php$namephp'php targetNamespacephp=php'php$uriphp'
php php php php php php php php php php php php php php php php php php php php xmlnsphp=php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/wsdlphp/php'
php php php php php php php php php php php php php php php php php php php php xmlnsphp:tnsphp=php'php$uriphp'
php php php php php php php php php php php php php php php php php php php php xmlnsphp:soapphp=php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/wsdlphp/soapphp/php'
php php php php php php php php php php php php php php php php php php php php xmlnsphp:xsdphp=php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/XMLSchemaphp'
php php php php php php php php php php php php php php php php php php php php xmlnsphp:soapphp-encphp=php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/soapphp/encodingphp/php'
php php php php php php php php php php php php php php php php php php php php xmlnsphp:wsdlphp=php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/wsdlphp/php'php><php/definitionsphp>php"php;
php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_domphp-php>loadXMLphp(php$wsdlphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Serverphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Serverphp_Exceptionphp(php'Unablephp tophp createphp DomDocumentphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_wsdlphp php=php php$thisphp-php>php_domphp-php>documentElementphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setComplexTypeStrategyphp(php$strategyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp newphp uriphp forphp thisphp WSDL
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Uriphp_Httpphp php$uri
php php php php php php*php php@returnphp Zendphp_Serverphp_Wsdl
php php php php php php*php/
php php php php publicphp functionphp setUriphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php$uriphp php=php php$uriphp-php>getUriphp(php)php;
php php php php php php php php php}
php php php php php php php php php$oldUriphp php=php php$thisphp-php>php_uriphp;
php php php php php php php php php$thisphp-php>php_uriphp php=php php$uriphp;

php php php php php php php php ifphp(php$thisphp-php>php_domphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php php@todophp:php Thisphp isphp thephp worstphp hackphp everphp,php butphp itsphp neededphp duephp tophp designphp andphp nonphp BCphp issuesphp ofphp WSDLphp generation
php php php php php php php php php php php php php$xmlphp php=php php$thisphp-php>php_domphp-php>saveXMLphp(php)php;
php php php php php php php php php php php php php$xmlphp php=php strphp_replacephp(php$oldUriphp,php php$uriphp,php php$xmlphp)php;
php php php php php php php php php php php php php$thisphp-php>php_domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_domphp-php>loadXMLphp(php$xmlphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp strategyphp forphp complexphp typephp detectionphp andphp handling
php php php php php php*
php php php php php php*php php@todophp Booleanphp isphp forphp backwardsphp compabilityphp withphp extractComplexTypephp objectphp varphp.php Removephp itphp inphp laterphp versionsphp.
php php php php php php*php php@paramphp booleanphp|stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp php$strategy
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdl
php php php php php php*php/
php php php php publicphp functionphp setComplexTypeStrategyphp(php$strategyphp)
php php php php php{
php php php php php php php php ifphp(php$strategyphp php=php=php=php truephp)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/DefaultComplexTypephp.phpphp"php;
php php php php php php php php php php php php php$strategyphp php=php newphp Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexTypephp(php)php;
php php php php php php php php php}php elsephp ifphp(php$strategyphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/AnyTypephp.phpphp"php;
php php php php php php php php php php php php php$strategyphp php=php newphp Zendphp_Soapphp_Wsdlphp_Strategyphp_AnyTypephp(php)php;
php php php php php php php php php}php elsephp ifphp(isphp_stringphp(php$strategyphp)php)php php{
php php php php php php php php php php php php ifphp(classphp_existsphp(php$strategyphp)php)php php{
php php php php php php php php php php php php php php php php php$strategyphp php=php newphp php$strategyphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php sprintfphp(php"Strategyphp withphp namephp php'php%sphp doesphp notphp existphp.php"php,php php$strategy
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp(php!php(php$strategyphp instanceofphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(php"Setphp aphp strategyphp thatphp isphp notphp ofphp typephp php'Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp'php"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_strategyphp php=php php$strategyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp complexphp typephp strategy
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getComplexTypeStrategyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_strategyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_messagesphp messagephp}php elementphp tophp thephp WSDL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Namephp forphp thephp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_messagesphp messagephp}
php php php php php php*php php@paramphp arrayphp php$partsphp Anphp arrayphp ofphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_messagephp partsphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php Thephp arrayphp isphp constructedphp likephp:php php'namephp ofphp partphp'php php=php>php php'partphp xmlphp schemaphp dataphp typephp'
php php php php php php*php php php php php php php php php php php php php php php php php php php php php orphp php'namephp ofphp partphp'php php=php>php arrayphp(php'typephp'php php=php>php php'partphp xmlphp schemaphp typephp'php)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php orphp php'namephp ofphp partphp'php php=php>php arrayphp(php'elementphp'php php=php>php php'partphp xmlphp elementphp namephp'php)
php php php php php php*php php@returnphp objectphp Thephp newphp messagephp'sphp XMLphp_Treephp_Nodephp forphp usephp inphp php{php@linkphp functionphp addDocumentationphp}
php php php php php php*php/
php php php php publicphp functionphp addMessagephp(php$namephp,php php$partsphp)
php php php php php{
php php php php php php php php php$messagephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'messagephp'php)php;

php php php php php php php php php$messagephp-php>setAttributephp(php'namephp'php,php php$namephp)php;

php php php php php php php php ifphp php(sizeofphp(php$partsphp)php php>php php0php)php php{
php php php php php php php php php php php php foreachphp php(php$partsphp asphp php$namephp php=php>php php$typephp)php php{
php php php php php php php php php php php php php php php php php$partphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'partphp'php)php;
php php php php php php php php php php php php php php php php php$partphp-php>setAttributephp(php'namephp'php,php php$namephp)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$typephp)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$typephp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$partphp-php>setAttributephp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$partphp-php>setAttributephp(php'typephp'php,php php$typephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$messagephp-php>appendChildphp(php$partphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$messagephp)php;

php php php php php php php php returnphp php$messagephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_porttypesphp portTypephp}php elementphp tophp thephp WSDL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp portTypephp elementphp'sphp name
php php php php php php*php php@returnphp objectphp Thephp newphp portTypephp'sphp XMLphp_Treephp_Nodephp forphp usephp inphp php{php@linkphp functionphp addPortOperationphp}php andphp php{php@linkphp functionphp addDocumentationphp}
php php php php php php*php/
php php php php publicphp functionphp addPortTypephp(php$namephp)
php php php php php{
php php php php php php php php php$portTypephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'portTypephp'php)php;
php php php php php php php php php$portTypephp-php>setAttributephp(php'namephp'php,php php$namephp)php;
php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$portTypephp)php;

php php php php php php php php returnphp php$portTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_requestphp-responsephp operationphp}php elementphp tophp aphp portTypephp element
php php php php php php*
php php php php php php*php php@paramphp objectphp php$portTypephp aphp portTypephp XMLphp_Treephp_Nodephp,php fromphp php{php@linkphp functionphp addPortTypephp}
php php php php php php*php php@paramphp stringphp php$namephp Operationphp name
php php php php php php*php php@paramphp stringphp php$inputphp Inputphp Message
php php php php php php*php php@paramphp stringphp php$outputphp Outputphp Message
php php php php php php*php php@paramphp stringphp php$faultphp Faultphp Message
php php php php php php*php php@returnphp objectphp Thephp newphp operationphp'sphp XMLphp_Treephp_Nodephp forphp usephp inphp php{php@linkphp functionphp addDocumentationphp}
php php php php php php*php/
php php php php publicphp functionphp addPortOperationphp(php$portTypephp,php php$namephp,php php$inputphp php=php falsephp,php php$outputphp php=php falsephp,php php$faultphp php=php falsephp)
php php php php php{
php php php php php php php php php$operationphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'operationphp'php)php;
php php php php php php php php php$operationphp-php>setAttributephp(php'namephp'php,php php$namephp)php;

php php php php php php php php ifphp php(isphp_stringphp(php$inputphp)php php&php&php php(strlenphp(trimphp(php$inputphp)php)php php>php=php php1php)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'inputphp'php)php;
php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'messagephp'php,php php$inputphp)php;
php php php php php php php php php php php php php$operationphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_stringphp(php$outputphp)php php&php&php php(strlenphp(trimphp(php$outputphp)php)php php>php=php php1php)php)php php{
php php php php php php php php php php php php php$nodephp=php php$thisphp-php>php_domphp-php>createElementphp(php'outputphp'php)php;
php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'messagephp'php,php php$outputphp)php;
php php php php php php php php php php php php php$operationphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(isphp_stringphp(php$faultphp)php php&php&php php(strlenphp(trimphp(php$faultphp)php)php php>php=php php1php)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'faultphp'php)php;
php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'messagephp'php,php php$faultphp)php;
php php php php php php php php php php php php php$operationphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}

php php php php php php php php php$portTypephp-php>appendChildphp(php$operationphp)php;

php php php php php php php php returnphp php$operationphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_bindingsphp bindingphp}php elementphp tophp WSDL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Namephp ofphp thephp Binding
php php php php php php*php php@paramphp stringphp php$typephp namephp ofphp thephp portTypephp tophp bind
php php php php php php*php php@returnphp objectphp Thephp newphp bindingphp'sphp XMLphp_Treephp_Nodephp forphp usephp withphp php{php@linkphp functionphp addBindingOperationphp}php andphp php{php@linkphp functionphp addDocumentationphp}
php php php php php php*php/
php php php php publicphp functionphp addBindingphp(php$namephp,php php$portTypephp)
php php php php php{
php php php php php php php php php$bindingphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'bindingphp'php)php;
php php php php php php php php php$bindingphp-php>setAttributephp(php'namephp'php,php php$namephp)php;
php php php php php php php php php$bindingphp-php>setAttributephp(php'typephp'php,php php$portTypephp)php;

php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$bindingphp)php;

php php php php php php php php returnphp php$bindingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp operationphp tophp aphp bindingphp element
php php php php php php*
php php php php php php*php php@paramphp objectphp php$bindingphp Aphp bindingphp XMLphp_Treephp_Nodephp returnedphp byphp php{php@linkphp functionphp addBindingphp}
php php php php php php*php php@paramphp arrayphp php$inputphp Anphp arrayphp ofphp attributesphp forphp thephp inputphp elementphp,php allowedphp keysphp arephp:php php'usephp'php,php php'namespacephp'php,php php'encodingStylephp'php.php php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_soapphp:bodyphp Morephp Informationphp}
php php php php php php*php php@paramphp arrayphp php$outputphp Anphp arrayphp ofphp attributesphp forphp thephp outputphp elementphp,php allowedphp keysphp arephp:php php'usephp'php,php php'namespacephp'php,php php'encodingStylephp'php.php php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_soapphp:bodyphp Morephp Informationphp}
php php php php php php*php php@paramphp arrayphp php$faultphp Anphp arrayphp ofphp attributesphp forphp thephp faultphp elementphp,php allowedphp keysphp arephp:php php'namephp'php,php php'usephp'php,php php'namespacephp'php,php php'encodingStylephp'php.php php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_soapphp:bodyphp Morephp Informationphp}
php php php php php php*php php@returnphp objectphp Thephp newphp Operationphp'sphp XMLphp_Treephp_Nodephp forphp usephp withphp php{php@linkphp functionphp addSoapOperationphp}php andphp php{php@linkphp functionphp addDocumentationphp}
php php php php php php*php/
php php php php publicphp functionphp addBindingOperationphp(php$bindingphp,php php$namephp,php php$inputphp php=php falsephp,php php$outputphp php=php falsephp,php php$faultphp php=php falsephp)
php php php php php{
php php php php php php php php php$operationphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'operationphp'php)php;
php php php php php php php php php$operationphp-php>setAttributephp(php'namephp'php,php php$namephp)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$inputphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'inputphp'php)php;
php php php php php php php php php php php php php$soapphp_nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'soapphp:bodyphp'php)php;
php php php php php php php php php php php php foreachphp php(php$inputphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$soapphp_nodephp-php>setAttributephp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$nodephp-php>appendChildphp(php$soapphp_nodephp)php;
php php php php php php php php php php php php php$operationphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$outputphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'outputphp'php)php;
php php php php php php php php php php php php php$soapphp_nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'soapphp:bodyphp'php)php;
php php php php php php php php php php php php foreachphp php(php$outputphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$soapphp_nodephp-php>setAttributephp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$nodephp-php>appendChildphp(php$soapphp_nodephp)php;
php php php php php php php php php php php php php$operationphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$faultphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'faultphp'php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php Notephp.php Dophp wephp reallyphp needphp namephp attributephp tophp bephp alsophp setphp atphp wsdlphp:faultphp nodephp?php?php?
php php php php php php php php php php php php php php*php Wphp3Cphp standardphp doesnphp'tphp mentionphp itphp php(httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_soapphp:faultphp)
php php php php php php php php php php php php php php*php Butphp somephp realphp worldphp WSDLsphp usephp itphp,php sophp itphp mayphp bephp requiredphp forphp compatibilityphp reasonsphp.
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php ifphp php(issetphp(php$faultphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'namephp'php,php php$faultphp[php'namephp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$soapphp_nodephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'soapphp:faultphp'php)php;
php php php php php php php php php php php php foreachphp php(php$faultphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$soapphp_nodephp-php>setAttributephp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$nodephp-php>appendChildphp(php$soapphp_nodephp)php;
php php php php php php php php php php php php php$operationphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}

php php php php php php php php php$bindingphp-php>appendChildphp(php$operationphp)php;

php php php php php php php php returnphp php$operationphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_soapphp:bindingphp SOAPphp bindingphp}php elementphp tophp aphp Bindingphp element
php php php php php php*
php php php php php php*php php@paramphp objectphp php$bindingphp Aphp bindingphp XMLphp_Treephp_Nodephp returnedphp byphp php{php@linkphp functionphp addBindingphp}
php php php php php php*php php@paramphp stringphp php$stylephp bindingphp stylephp,php possiblephp valuesphp arephp php"rpcphp"php php(thephp defaultphp)php andphp php"documentphp"
php php php php php php*php php@paramphp stringphp php$transportphp Transportphp methodphp php(defaultsphp tophp HTTPphp)
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp addSoapBindingphp(php$bindingphp,php php$stylephp php=php php'documentphp'php,php php$transportphp php=php php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/soapphp/httpphp'php)
php php php php php{
php php php php php php php php php$soapphp_bindingphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'soapphp:bindingphp'php)php;
php php php php php php php php php$soapphp_bindingphp-php>setAttributephp(php'stylephp'php,php php$stylephp)php;
php php php php php php php php php$soapphp_bindingphp-php>setAttributephp(php'transportphp'php,php php$transportphp)php;

php php php php php php php php php$bindingphp-php>appendChildphp(php$soapphp_bindingphp)php;

php php php php php php php php returnphp php$soapphp_bindingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_soapphp:operationphp SOAPphp operationphp}php tophp anphp operationphp element
php php php php php php*
php php php php php php*php php@paramphp objectphp php$operationphp Anphp operationphp XMLphp_Treephp_Nodephp returnedphp byphp php{php@linkphp functionphp addBindingOperationphp}
php php php php php php*php php@paramphp stringphp php$soapphp_actionphp SOAPphp Action
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp addSoapOperationphp(php$bindingphp,php php$soapphp_actionphp)
php php php php php{
php php php php php php php php ifphp php(php$soapphp_actionphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php$soapphp_actionphp php=php php$soapphp_actionphp-php>getUriphp(php)php;
php php php php php php php php php}
php php php php php php php php php$soapphp_operationphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'soapphp:operationphp'php)php;
php php php php php php php php php$soapphp_operationphp-php>setAttributephp(php'soapActionphp'php,php php$soapphp_actionphp)php;

php php php php php php php php php$bindingphp-php>insertBeforephp(php$soapphp_operationphp,php php$bindingphp-php>firstChildphp)php;

php php php php php php php php returnphp php$soapphp_operationphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_servicesphp servicephp}php elementphp tophp thephp WSDL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp Servicephp Name
php php php php php php*php php@paramphp stringphp php$portphp_namephp Namephp ofphp thephp portphp forphp thephp service
php php php php php php*php php@paramphp stringphp php$bindingphp Bindingphp forphp thephp port
php php php php php php*php php@paramphp stringphp php$locationphp SOAPphp Addressphp forphp thephp service
php php php php php php*php php@returnphp objectphp Thephp newphp servicephp'sphp XMLphp_Treephp_Nodephp forphp usephp withphp php{php@linkphp functionphp addDocumentationphp}
php php php php php php*php/
php php php php publicphp functionphp addServicephp(php$namephp,php php$portphp_namephp,php php$bindingphp,php php$locationphp)
php php php php php{
php php php php php php php php ifphp php(php$locationphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php$locationphp php=php php$locationphp-php>getUriphp(php)php;
php php php php php php php php php}
php php php php php php php php php$servicephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'servicephp'php)php;
php php php php php php php php php$servicephp-php>setAttributephp(php'namephp'php,php php$namephp)php;

php php php php php php php php php$portphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'portphp'php)php;
php php php php php php php php php$portphp-php>setAttributephp(php'namephp'php,php php$portphp_namephp)php;
php php php php php php php php php$portphp-php>setAttributephp(php'bindingphp'php,php php$bindingphp)php;

php php php php php php php php php$soapphp_addressphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'soapphp:addressphp'php)php;
php php php php php php php php php$soapphp_addressphp-php>setAttributephp(php'locationphp'php,php php$locationphp)php;

php php php php php php php php php$portphp-php>appendChildphp(php$soapphp_addressphp)php;
php php php php php php php php php$servicephp-php>appendChildphp(php$portphp)php;

php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$servicephp)php;

php php php php php php php php returnphp php$servicephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp documentationphp elementphp tophp anyphp elementphp inphp thephp WSDLphp.
php php php php php php*
php php php php php php*php Notephp thatphp thephp WSDLphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_documentationphp specificationphp}php usesphp php'documentphp'php,
php php php php php php*php butphp thephp WSDLphp php{php@linkphp httpphp:php/php/schemasphp.xmlsoapphp.orgphp/wsdlphp/php schemaphp}php usesphp php'documentationphp'php insteadphp.
php php php php php php*php Thephp php{php@linkphp httpphp:php/php/wwwphp.wsphp-iphp.orgphp/Profilesphp/BasicProfilephp-php1php.php1php-php2php0php0php4php-php0php8php-php2php4php.htmlphp#WSDLphp_documentationphp_Elementphp WSphp-Iphp Basicphp Profilephp php1php.php1php}php recommendsphp usingphp php'documentationphp'php.
php php php php php php*
php php php php php php*php php@paramphp objectphp php$inputphp_nodephp Anphp XMLphp_Treephp_Nodephp returnedphp byphp anotherphp methodphp tophp addphp thephp documentationphp to
php php php php php php*php php@paramphp stringphp php$documentationphp Humanphp readablephp documentationphp forphp thephp node
php php php php php php*php php@returnphp DOMElementphp Thephp documentationphp element
php php php php php php*php/
php php php php publicphp functionphp addDocumentationphp(php$inputphp_nodephp,php php$documentationphp)
php php php php php{
php php php php php php php php ifphp php(php$inputphp_nodephp php=php=php=php php$thisphp)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_domphp-php>documentElementphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$nodephp php=php php$inputphp_nodephp;
php php php php php php php php php}

php php php php php php php php php$docphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'documentationphp'php)php;
php php php php php php php php php$docphp_cdataphp php=php php$thisphp-php>php_domphp-php>createTextNodephp(strphp_replacephp(arrayphp(php"php\rphp\nphp"php,php php"php\rphp"php)php,php php"php\nphp"php,php php$documentationphp)php)php;
php php php php php php php php php$docphp-php>appendChildphp(php$docphp_cdataphp)php;

php php php php php php php php ifphp(php$nodephp-php>hasChildNodesphp(php)php)php php{
php php php php php php php php php php php php php$nodephp-php>insertBeforephp(php$docphp,php php$nodephp-php>firstChildphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$nodephp-php>appendChildphp(php$docphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$docphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp WSDLphp Typesphp element
php php php php php php*
php php php php php php*php php@paramphp objectphp php$typesphp Aphp DomDocumentphp|DomNodephp|DomElementphp|DomDocumentFragmentphp withphp allphp thephp XMLphp Schemaphp typesphp definedphp inphp it
php php php php php php*php/
php php php php publicphp functionphp addTypesphp(php$typesphp)
php php php php php{
php php php php php php php php ifphp php(php$typesphp instanceofphp DomDocumentphp)php php{
php php php php php php php php php php php php php$domphp php=php php$thisphp-php>php_domphp-php>importNodephp(php$typesphp-php>documentElementphp)php;
php php php php php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$typesphp-php>documentElementphp)php;
php php php php php php php php php}php elseifphp php(php$typesphp instanceofphp DomNodephp php|php|php php$typesphp instanceofphp DomElementphp php|php|php php$typesphp instanceofphp DomDocumentFragmentphp php)php php{
php php php php php php php php php php php php php$domphp php=php php$thisphp-php>php_domphp-php>importNodephp(php$typesphp)php;
php php php php php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$domphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp complexphp typephp namephp thatphp isphp partphp ofphp thisphp WSDLphp andphp canphp bephp usedphp inphp signaturesphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdl
php php php php php php*php/
php php php php publicphp functionphp addTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp(php!inphp_arrayphp(php$typephp,php php$thisphp-php>php_includedTypesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_includedTypesphp[php]php php=php php$typephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp allphp currentlyphp includedphp complexphp types
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getTypesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_includedTypesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp Schemaphp nodephp ofphp thephp WSDL
php php php php php php*
php php php php php php*php php@returnphp DOMElement
php php php php php php*php/
php php php php publicphp functionphp getSchemaphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_schemaphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>addSchemaTypeSectionphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_schemaphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp WSDLphp asphp XML
php php php php php php*
php php php php php php*php php@returnphp stringphp WSDLphp asphp XML
php php php php php php*php/
php php php php publicphp functionphp toXMLphp(php)
php php php php php{
php php php php php php php php php php php returnphp php$thisphp-php>php_domphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp DOMphp Document
php php php php php php*
php php php php php php*php php@returnphp objectphp DomDocumphp ent
php php php php php php*php/
php php php php publicphp functionphp toDomDocumentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_domphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Echophp thephp WSDLphp asphp XML
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp dumpphp(php$filenamephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$filenamephp)php php{
php php php php php php php php php php php php echophp php$thisphp-php>toXMLphp(php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp filephp_putphp_contentsphp(php$filenamephp,php php$thisphp-php>toXMLphp(php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp XSDphp Typephp forphp thephp givenphp PHPphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp PHPphp Typephp tophp getphp thephp XSDphp typephp for
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php$typephp)
php php php php php{
php php php php php php php php switchphp php(strtolowerphp(php$typephp)php)php php{
php php php php php php php php php php php php casephp php'stringphp'php:
php php php php php php php php php php php php casephp php'strphp'php:
php php php php php php php php php php php php php php php php returnphp php'xsdphp:stringphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'intphp'php:
php php php php php php php php php php php php casephp php'integerphp'php:
php php php php php php php php php php php php php php php php returnphp php'xsdphp:intphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'floatphp'php:
php php php php php php php php php php php php casephp php'doublephp'php:
php php php php php php php php php php php php php php php php returnphp php'xsdphp:floatphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'booleanphp'php:
php php php php php php php php php php php php casephp php'boolphp'php:
php php php php php php php php php php php php php php php php returnphp php'xsdphp:booleanphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'arrayphp'php:
php php php php php php php php php php php php php php php php returnphp php'soapphp-encphp:Arrayphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'objectphp'php:
php php php php php php php php php php php php php php php php returnphp php'xsdphp:structphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'mixedphp'php:
php php php php php php php php php php php php php php php php returnphp php'xsdphp:anyTypephp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'voidphp'php:
php php php php php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php delegatephp retrievalphp ofphp complexphp typephp tophp currentphp strategy
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>addComplexTypephp(php$typephp)php;
php php php php php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Thisphp functionphp makesphp surephp aphp complexphp typesphp sectionphp andphp schemaphp additionsphp arephp setphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdl
php php php php php php*php/
php php php php publicphp functionphp addSchemaTypeSectionphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_schemaphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_schemaphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'xsdphp:schemaphp'php)php;
php php php php php php php php php php php php php$thisphp-php>php_schemaphp-php>setAttributephp(php'targetNamespacephp'php,php php$thisphp-php>php_uriphp)php;
php php php php php php php php php php php php php$typesphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'typesphp'php)php;
php php php php php php php php php php php php php$typesphp-php>appendChildphp(php$thisphp-php>php_schemaphp)php;
php php php php php php php php php php php php php$thisphp-php>php_wsdlphp-php>appendChildphp(php$typesphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp php{php@linkphp httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/wsdlphp#php_typesphp typesphp}php dataphp typephp definition
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp Namephp ofphp thephp classphp tophp bephp specified
php php php php php php*php php@returnphp stringphp XSDphp Typephp forphp thephp givenphp PHPphp type
php php php php php php*php/
php php php php publicphp functionphp addComplexTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$typephp,php php$thisphp-php>getTypesphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php"tnsphp:php$typephp"php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>addSchemaTypeSectionphp(php)php;

php php php php php php php php php$strategyphp php=php php$thisphp-php>getComplexTypeStrategyphp(php)php;
php php php php php php php php php$strategyphp-php>setContextphp(php$thisphp)php;
php php php php php php php php php/php/php delegatesphp thephp detectionphp ofphp aphp complexphp typephp tophp thephp currentphp strategy
php php php php php php php php returnphp php$strategyphp-php>addComplexTypephp(php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp anphp xsdphp:elementphp representedphp asphp anphp arrayphp intophp aphp DOMElementphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$elementphp anphp xsdphp:elementphp representedphp asphp anphp array
php php php php php php*php php@returnphp DOMElementphp parsedphp element
php php php php php php*php/
php php php php privatephp functionphp php_parseElementphp(php$elementphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$elementphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(php"Thephp php'elementphp'php parameterphp needsphp tophp bephp anphp associativephp arrayphp.php"php)php;
php php php php php php php php php}

php php php php php php php php php$elementXmlphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'xsdphp:elementphp'php)php;
php php php php php php php php foreachphp php(php$elementphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$keyphp,php arrayphp(php'sequencephp'php,php php'allphp'php,php php'choicephp'php)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$complexTypephp php=php php$thisphp-php>php_domphp-php>createElementphp(php'xsdphp:complexTypephp'php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$valuephp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$containerphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'xsdphp:php'php php.php php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$subelementphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$subelementXmlphp php=php php$thisphp-php>php_parseElementphp(php$subelementphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$containerphp-php>appendChildphp(php$subelementXmlphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$complexTypephp-php>appendChildphp(php$containerphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$elementXmlphp-php>appendChildphp(php$complexTypephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$elementXmlphp-php>setAttributephp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$elementXmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp xsdphp:elementphp representedphp asphp anphp arrayphp tophp thephp schemaphp.
php php php php php php*
php php php php php php*php Arrayphp keysphp representphp attributephp namesphp andphp valuesphp theirphp respectivephp valuephp.
php php php php php php*php Thephp php'sequencephp'php,php php'allphp'php andphp php'choicephp'php keysphp mustphp havephp anphp arrayphp ofphp elementsphp asphp theirphp valuephp,
php php php php php php*php tophp addphp themphp tophp aphp nestedphp complexTypephp.
php php php php php php*
php php php php php php*php Examplephp:php arrayphp(php php'namephp'php php=php>php php'MyElementphp'php,
php php php php php php*php php php php php php php php php php php php php php php php php php'sequencephp'php php=php>php arrayphp(php arrayphp(php'namephp'php php=php>php php'myStringphp'php,php php'typephp'php php=php>php php'stringphp'php)php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php'namephp'php php=php>php php'myIntegerphp'php,php php'typephp'php php=php>php php'intphp'php)php php)php php)php;
php php php php php php*php Resultingphp XMLphp:php php<xsdphp:elementphp namephp=php"MyElementphp"php>php<xsdphp:complexTypephp>php<xsdphp:sequencephp>
php php php php php php*php php php php php php php php php php php php php php php php php php php<xsdphp:elementphp namephp=php"myStringphp"php typephp=php"stringphp"php/php>
php php php php php php*php php php php php php php php php php php php php php php php php php php<xsdphp:elementphp namephp=php"myIntegerphp"php typephp=php"intphp"php/php>
php php php php php php*php php php php php php php php php php php php php php php php <php/xsdphp:sequencephp><php/xsdphp:complexTypephp><php/xsdphp:elementphp>
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$elementphp anphp xsdphp:elementphp representedphp asphp anphp array
php php php php php php*php php@returnphp stringphp xsdphp:elementphp forphp thephp givenphp elementphp array
php php php php php php*php/
php php php php publicphp functionphp addElementphp(php$elementphp)
php php php php php{
php php php php php php php php php$schemaphp php=php php$thisphp-php>getSchemaphp(php)php;
php php php php php php php php php$elementXmlphp php=php php$thisphp-php>php_parseElementphp(php$elementphp)php;
php php php php php php php php php$schemaphp-php>appendChildphp(php$elementXmlphp)php;
php php php php php php php php returnphp php'tnsphp:php'php php.php php$elementphp[php'namephp'php]php;
php php php php php}
php}
