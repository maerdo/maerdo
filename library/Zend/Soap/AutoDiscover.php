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
php php*php php@subpackagephp AutoDiscover
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AutoDiscoverphp.phpphp php2php3php3php3php8php php2php0php1php0php-php1php1php-php1php5php php1php4php:php5php9php:php3php3Zphp alexanderphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Serverphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Interfacephp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdl
php php*php/
requirephp_oncephp php'Zendphp/Soapphp/Wsdlphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Serverphp_Reflection
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Serverphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Serverphp/Abstractphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php Zendphp_Soapphp_AutoDiscover
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp AutoDiscover
php php*php/
classphp Zendphp_Soapphp_AutoDiscoverphp implementsphp Zendphp_Serverphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Soapphp_Wsdl
php php php php php php*php/
php php php php protectedphp php$php_wsdlphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Serverphp_Reflection
php php php php php php*php/
php php php php protectedphp php$php_reflectionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_functionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_strategyphp;

php php php php php/php*php*
php php php php php php*php Urlphp wherephp thephp WSDLphp filephp willphp bephp availablephp atphp.
php php php php php php*
php php php php php php*php php@varphp WSDLphp Uri
php php php php php php*php/
php php php php protectedphp php$php_uriphp;

php php php php php/php*php*
php php php php php php*php soapphp:bodyphp operationphp stylephp options
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_operationBodyStylephp php=php arrayphp(php'usephp'php php=php>php php'encodedphp'php,php php'encodingStylephp'php php=php>php php"httpphp:php/php/schemasphp.xmlsoapphp.orgphp/soapphp/encodingphp/php"php)php;

php php php php php/php*php*
php php php php php php*php soapphp:operationphp style
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_bindingStylephp php=php arrayphp(php'stylephp'php php=php>php php'rpcphp'php,php php'transportphp'php php=php>php php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/soapphp/httpphp'php)php;

php php php php php/php*php*
php php php php php php*php Namephp ofphp thephp classphp tophp handlephp thephp WSDLphp creationphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_wsdlClassphp php=php php'Zendphp_Soapphp_Wsdlphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp booleanphp|stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp php$strategy
php php php php php php*php php@paramphp stringphp|Zendphp_Uriphp php$uri
php php php php php php*php php@paramphp stringphp php$wsdlClass
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$strategyphp php=php truephp,php php$uriphp=nullphp,php php$wsdlClassphp=nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_reflectionphp php=php newphp Zendphp_Serverphp_Reflectionphp(php)php;
php php php php php php php php php$thisphp-php>setComplexTypeStrategyphp(php$strategyphp)php;

php php php php php php php php ifphp(php$uriphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php}

php php php php php php php php ifphp(php$wsdlClassphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setWsdlClassphp(php$wsdlClassphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp locationphp atphp whichphp thephp WSDLphp filephp willphp bephp availabephp.
php php php php php php*
php php php php php php*php php@seephp Zendphp_Soapphp_Exception
php php php php php php*php php@paramphp php Zendphp_Uriphp|stringphp php$uri
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setUriphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$uriphp)php php&php&php php!php(php$uriphp instanceofphp Zendphp_Uriphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Nophp uriphp givenphp tophp Zendphp_Soapphp_AutoDiscoverphp:php:setUriphp asphp stringphp orphp Zendphp_Uriphp instancephp.php"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_uriphp php=php php$uriphp;

php php php php php php php php php/php/php changephp uriphp inphp WSDLphp filephp alsophp ifphp existant
php php php php php php php php ifphp php(php$thisphp-php>php_wsdlphp instanceofphp Zendphp_Soapphp_Wsdlphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_wsdlphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp Uriphp thatphp thephp SOAPphp WSDLphp Servicephp willphp bephp locatedphp atphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Uri
php php php php php php*php/
php php php php publicphp functionphp getUriphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_uriphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$uriphp php=php php$thisphp-php>php_uriphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$schemaphp php php php php php=php php$thisphp-php>getSchemaphp(php)php;
php php php php php php php php php php php php php$hostphp php php php php php php php=php php$thisphp-php>getHostNamephp(php)php;
php php php php php php php php php php php php php$scriptNamephp php=php php$thisphp-php>getRequestUriWithoutParametersphp(php)php;
php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$schemaphp php.php php'php:php/php/php'php php.php php$hostphp php.php php$scriptNamephp)php;
php php php php php php php php php php php php php$thisphp-php>setUriphp(php$uriphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$uriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp namephp ofphp thephp WSDLphp handlingphp classphp.
php php php php php php*
php php php php php php*php php@seephp Zendphp_Soapphp_Exception
php php php php php php*php php@seephp Zendphp_Soapphp_Exception
php php php php php php*php php@paramphp php stringphp php$wsdlClass
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setWsdlClassphp(php$wsdlClassphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$wsdlClassphp)php php&php&php php!isphp_subclassphp_ofphp(php$wsdlClassphp,php php'Zendphp_Soapphp_Wsdlphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Nophp Zendphp_Soapphp_Wsdlphp subclassphp givenphp tophp Zendphp_Soapphp_AutoDiscoverphp:php:setWsdlClassphp asphp stringphp.php"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_wsdlClassphp php=php php$wsdlClassphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp namephp ofphp thephp WSDLphp handlingphp classphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getWsdlClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_wsdlClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp forphp allphp thephp bindingphp operationsphp soapphp:bodyphp elementsphp.
php php php php php php*
php php php php php php*php Byphp defaultphp thephp optionsphp arephp setphp tophp php'usephp'php php=php>php php'encodedphp'php and
php php php php php php*php php'encodingStylephp'php php=php>php php"httpphp:php/php/schemasphp.xmlsoapphp.orgphp/soapphp/encodingphp/php"php.
php php php php php php*
php php php php php php*php php@seephp php php php Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php php@paramphp php arrayphp php$operationStyle
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setOperationBodyStylephp(arrayphp php$operationStylephp=arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp(php!issetphp(php$operationStylephp[php'usephp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Keyphp php'usephp'php isphp requiredphp inphp Operationphp soapphp:bodyphp stylephp.php"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_operationBodyStylephp php=php php$operationStylephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Bindingphp soapphp:bindingphp stylephp.
php php php php php php*
php php php php php php*php Byphp defaultphp php'stylephp'php isphp php'rpcphp'php andphp php'transportphp'php isphp php'httpphp:php/php/schemasphp.xmlsoapphp.orgphp/soapphp/httpphp'php.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$bindingStyle
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php/
php php php php publicphp functionphp setBindingStylephp(arrayphp php$bindingStylephp=arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp(issetphp(php$bindingStylephp[php'stylephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bindingStylephp[php'stylephp'php]php php=php php$bindingStylephp[php'stylephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp(issetphp(php$bindingStylephp[php'transportphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bindingStylephp[php'transportphp'php]php php=php php$bindingStylephp[php'transportphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp andphp returnsphp thephp currentphp HTTPphp/HTTPSphp Schema
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp getSchemaphp(php)
php php php php php{
php php php php php php php php php$schemaphp php=php php"httpphp"php;
php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'HTTPSphp'php]php)php php&php&php php$php_SERVERphp[php'HTTPSphp'php]php php=php=php php'onphp'php)php php{
php php php php php php php php php php php php php$schemaphp php=php php'httpsphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$schemaphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp andphp returnphp thephp currentphp hostname
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp getHostNamephp(php)
php php php php php{
php php php php php php php php ifphp(issetphp(php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php)php)php php{
php php php php php php php php php php php php php$hostphp php=php php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hostphp php=php php$php_SERVERphp[php'SERVERphp_NAMEphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$hostphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp andphp returnphp thephp currentphp scriptphp namephp withoutphp parameters
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp getRequestUriWithoutParametersphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php)php)php php{php php/php/php checkphp thisphp firstphp sophp IISphp willphp catch
php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'HTTPphp_Xphp_REWRITEphp_URLphp'php]php;
php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'REQUESTphp_URIphp'php]php)php)php php{
php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php php php php php}php elseifphp php(issetphp(php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php)php)php php{php php/php/php IISphp php5php.php0php,php PHPphp asphp CGI
php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'ORIGphp_PATHphp_INFOphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$requestUriphp php=php php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp(php php(php$posphp php=php strposphp(php$requestUriphp,php php"php?php"php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$requestUriphp php=php substrphp(php$requestUriphp,php php0php,php php$posphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$requestUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp strategyphp thatphp handlesphp functionsphp andphp classesphp thatphp arephp addedphp AFTERphp thisphp callphp.
php php php php php php*
php php php php php php*php php@paramphp php booleanphp|stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp php$strategy
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php/
php php php php publicphp functionphp setComplexTypeStrategyphp(php$strategyphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_strategyphp php=php php$strategyphp;
php php php php php php php php ifphp(php$thisphp-php>php_wsdlphp instanceofphp php Zendphp_Soapphp_Wsdlphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_wsdlphp-php>setComplexTypeStrategyphp(php$strategyphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp Classphp thephp SOAPphp serverphp willphp use
php php php php php php*
php php php php php php*php php@paramphp stringphp php$classphp Classphp Name
php php php php php php*php php@paramphp stringphp php$namespacephp Classphp Namspacephp php-php Notphp Used
php php php php php php*php php@paramphp arrayphp php$argvphp Argumentsphp tophp instantiatephp thephp classphp php-php Notphp Used
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php/
php php php php publicphp functionphp setClassphp(php$classphp,php php$namespacephp php=php php'php'php,php php$argvphp php=php nullphp)
php php php php php{
php php php php php php php php php$uriphp php=php php$thisphp-php>getUriphp(php)php;

php php php php php php php php php$wsdlphp php=php newphp php$thisphp-php>php_wsdlClassphp(php$classphp,php php$uriphp,php php$thisphp-php>php_strategyphp)php;

php php php php php php php php php/php/php Thephp wsdlphp:typesphp elementphp mustphp precedephp allphp otherphp elementsphp php(WSphp-Iphp Basicphp Profilephp php1php.php1php Rphp2php0php2php3php)
php php php php php php php php php$wsdlphp-php>addSchemaTypeSectionphp(php)php;

php php php php php php php php php$portphp php=php php$wsdlphp-php>addPortTypephp(php$classphp php.php php'Portphp'php)php;
php php php php php php php php php$bindingphp php=php php$wsdlphp-php>addBindingphp(php$classphp php.php php'Bindingphp'php,php php'tnsphp:php'php php.php$classphp.php php'Portphp'php)php;

php php php php php php php php php$wsdlphp-php>addSoapBindingphp(php$bindingphp,php php$thisphp-php>php_bindingStylephp[php'stylephp'php]php,php php$thisphp-php>php_bindingStylephp[php'transportphp'php]php)php;
php php php php php php php php php$wsdlphp-php>addServicephp(php$classphp php.php php'Servicephp'php,php php$classphp php.php php'Portphp'php,php php'tnsphp:php'php php.php php$classphp php.php php'Bindingphp'php,php php$uriphp)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_reflectionphp-php>reflectClassphp(php$classphp)php-php>getMethodsphp(php)php asphp php$methodphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addFunctionToWsdlphp(php$methodphp,php php$wsdlphp,php php$portphp,php php$bindingphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_wsdlphp php=php php$wsdlphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp Singlephp orphp Multiplephp Functionsphp tophp thephp WSDL
php php php php php php*
php php php php php php*php php@paramphp stringphp php$functionphp Functionphp Name
php php php php php php*php php@paramphp stringphp php$namespacephp Functionphp namespacephp php-php Notphp Used
php php php php php php*php php@returnphp Zendphp_Soapphp_AutoDiscover
php php php php php php*php/
php php php php publicphp functionphp addFunctionphp(php$functionphp,php php$namespacephp php=php php'php'php)
php php php php php{
php php php php php php php php staticphp php$portphp;
php php php php php php php php staticphp php$operationphp;
php php php php php php php php staticphp php$bindingphp;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$functionphp)php)php php{
php php php php php php php php php php php php php$functionphp php=php php(arrayphp)php php$functionphp;
php php php php php php php php php}

php php php php php php php php php$uriphp php=php php$thisphp-php>getUriphp(php)php;

php php php php php php php php ifphp php(php!php(php$thisphp-php>php_wsdlphp instanceofphp Zendphp_Soapphp_Wsdlphp)php)php php{
php php php php php php php php php php php php php$partsphp php=php explodephp(php'php.php'php,php basenamephp(php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php)php)php;
php php php php php php php php php php php php php$namephp php=php php$partsphp[php0php]php;
php php php php php php php php php php php php php$wsdlphp php=php newphp Zendphp_Soapphp_Wsdlphp(php$namephp,php php$uriphp,php php$thisphp-php>php_strategyphp)php;

php php php php php php php php php php php php php/php/php Thephp wsdlphp:typesphp elementphp mustphp precedephp allphp otherphp elementsphp php(WSphp-Iphp Basicphp Profilephp php1php.php1php Rphp2php0php2php3php)
php php php php php php php php php php php php php$wsdlphp-php>addSchemaTypeSectionphp(php)php;

php php php php php php php php php php php php php$portphp php=php php$wsdlphp-php>addPortTypephp(php$namephp php.php php'Portphp'php)php;
php php php php php php php php php php php php php$bindingphp php=php php$wsdlphp-php>addBindingphp(php$namephp php.php php'Bindingphp'php,php php'tnsphp:php'php php.php$namephp.php php'Portphp'php)php;

php php php php php php php php php php php php php$wsdlphp-php>addSoapBindingphp(php$bindingphp,php php$thisphp-php>php_bindingStylephp[php'stylephp'php]php,php php$thisphp-php>php_bindingStylephp[php'transportphp'php]php)php;
php php php php php php php php php php php php php$wsdlphp-php>addServicephp(php$namephp php.php php'Servicephp'php,php php$namephp php.php php'Portphp'php,php php'tnsphp:php'php php.php php$namephp php.php php'Bindingphp'php,php php$uriphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$wsdlphp php=php php$thisphp-php>php_wsdlphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$functionphp asphp php$funcphp)php php{
php php php php php php php php php php php php php$methodphp php=php php$thisphp-php>php_reflectionphp-php>reflectFunctionphp(php$funcphp)php;
php php php php php php php php php php php php php$thisphp-php>php_addFunctionToWsdlphp(php$methodphp,php php$wsdlphp,php php$portphp,php php$bindingphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_wsdlphp php=php php$wsdlphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp functionphp tophp thephp WSDLphp documentphp.
php php php php php php*
php php php php php php*php php@paramphp php$functionphp Zendphp_Serverphp_Reflectionphp_Functionphp_Abstractphp functionphp tophp add
php php php php php php*php php@paramphp php$wsdlphp Zendphp_Soapphp_Wsdlphp WSDLphp document
php php php php php php*php php@paramphp php$portphp objectphp wsdlphp:portType
php php php php php php*php php@paramphp php$bindingphp objectphp wsdlphp:binding
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addFunctionToWsdlphp(php$functionphp,php php$wsdlphp,php php$portphp,php php$bindingphp)
php php php php php{
php php php php php php php php php$uriphp php=php php$thisphp-php>getUriphp(php)php;

php php php php php php php php php/php/php Wephp onlyphp supportphp onephp prototypephp:php thephp onephp withphp thephp maximumphp numberphp ofphp arguments
php php php php php php php php php$prototypephp php=php nullphp;
php php php php php php php php php$maxNumArgumentsOfPrototypephp php=php php-php1php;
php php php php php php php php foreachphp php(php$functionphp-php>getPrototypesphp(php)php asphp php$tmpPrototypephp)php php{
php php php php php php php php php php php php php$numParamsphp php=php countphp(php$tmpPrototypephp-php>getParametersphp(php)php)php;
php php php php php php php php php php php php ifphp php(php$numParamsphp php>php php$maxNumArgumentsOfPrototypephp)php php{
php php php php php php php php php php php php php php php php php$maxNumArgumentsOfPrototypephp php=php php$numParamsphp;
php php php php php php php php php php php php php php php php php$prototypephp php=php php$tmpPrototypephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$prototypephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Nophp prototypesphp couldphp bephp foundphp forphp thephp php'php"php php.php php$functionphp-php>getNamephp(php)php php.php php"php'php functionphp"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp thephp inputphp messagephp php(parametersphp)
php php php php php php php php php$argsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_bindingStylephp[php'stylephp'php]php php=php=php php'documentphp'php)php php{
php php php php php php php php php php php php php/php/php Documentphp stylephp:php wrapphp allphp parametersphp inphp aphp sequencephp element
php php php php php php php php php php php php php$sequencephp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$prototypephp-php>getParametersphp(php)php asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php php$sequenceElementphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$paramphp-php>getNamephp(php)php,
php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$wsdlphp-php>getTypephp(php$paramphp-php>getTypephp(php)php)
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php ifphp php(php$paramphp-php>isOptionalphp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$sequenceElementphp[php'nillablephp'php]php php=php php'truephp'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$sequencephp[php]php php=php php$sequenceElementphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$elementphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$functionphp-php>getNamephp(php)php,
php php php php php php php php php php php php php php php php php'sequencephp'php php=php>php php$sequence
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php/php/php Addphp thephp wrapperphp elementphp partphp,php whichphp mustphp bephp namedphp php'parametersphp'
php php php php php php php php php php php php php$argsphp[php'parametersphp'php]php php=php arrayphp(php'elementphp'php php=php>php php$wsdlphp-php>addElementphp(php$elementphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php RPCphp stylephp:php addphp eachphp parameterphp asphp aphp typedphp part
php php php php php php php php php php php php foreachphp php(php$prototypephp-php>getParametersphp(php)php asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php php$argsphp[php$paramphp-php>getNamephp(php)php]php php=php arrayphp(php'typephp'php php=php>php php$wsdlphp-php>getTypephp(php$paramphp-php>getTypephp(php)php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$wsdlphp-php>addMessagephp(php$functionphp-php>getNamephp(php)php php.php php'Inphp'php,php php$argsphp)php;

php php php php php php php php php$isOneWayMessagephp php=php falsephp;
php php php php php php php php ifphp(php$prototypephp-php>getReturnTypephp(php)php php=php=php php"voidphp"php)php php{
php php php php php php php php php php php php php$isOneWayMessagephp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp(php$isOneWayMessagephp php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php Addphp thephp outputphp messagephp php(returnphp valuephp)
php php php php php php php php php php php php php$argsphp php=php arrayphp(php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_bindingStylephp[php'stylephp'php]php php=php=php php'documentphp'php)php php{
php php php php php php php php php php php php php php php php php/php/php Documentphp stylephp:php wrapphp thephp returnphp valuephp inphp aphp sequencephp element
php php php php php php php php php php php php php php php php php$sequencephp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$prototypephp-php>getReturnTypephp(php)php php!php=php php"voidphp"php)php php{
php php php php php php php php php php php php php php php php php php php php php$sequencephp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$functionphp-php>getNamephp(php)php php.php php'Resultphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$wsdlphp-php>getTypephp(php$prototypephp-php>getReturnTypephp(php)php)
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$elementphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$functionphp-php>getNamephp(php)php php.php php'Responsephp'php,
php php php php php php php php php php php php php php php php php php php php php'sequencephp'php php=php>php php$sequence
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php/php/php Addphp thephp wrapperphp elementphp partphp,php whichphp mustphp bephp namedphp php'parametersphp'
php php php php php php php php php php php php php php php php php$argsphp[php'parametersphp'php]php php=php arrayphp(php'elementphp'php php=php>php php$wsdlphp-php>addElementphp(php$elementphp)php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$prototypephp-php>getReturnTypephp(php)php php!php=php php"voidphp"php)php php{
php php php php php php php php php php php php php php php php php/php/php RPCphp stylephp:php addphp thephp returnphp valuephp asphp aphp typedphp part
php php php php php php php php php php php php php php php php php$argsphp[php'returnphp'php]php php=php arrayphp(php'typephp'php php=php>php php$wsdlphp-php>getTypephp(php$prototypephp-php>getReturnTypephp(php)php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$wsdlphp-php>addMessagephp(php$functionphp-php>getNamephp(php)php php.php php'Outphp'php,php php$argsphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp thephp portTypephp operation
php php php php php php php php ifphp(php$isOneWayMessagephp php=php=php falsephp)php php{
php php php php php php php php php php php php php$portOperationphp php=php php$wsdlphp-php>addPortOperationphp(php$portphp,php php$functionphp-php>getNamephp(php)php,php php'tnsphp:php'php php.php php$functionphp-php>getNamephp(php)php php.php php'Inphp'php,php php'tnsphp:php'php php.php php$functionphp-php>getNamephp(php)php php.php php'Outphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$portOperationphp php=php php$wsdlphp-php>addPortOperationphp(php$portphp,php php$functionphp-php>getNamephp(php)php,php php'tnsphp:php'php php.php php$functionphp-php>getNamephp(php)php php.php php'Inphp'php,php falsephp)php;
php php php php php php php php php}
php php php php php php php php php$descphp php=php php$functionphp-php>getDescriptionphp(php)php;
php php php php php php php php ifphp php(strlenphp(php$descphp)php php>php php0php)php php{
php php php php php php php php php php php php php$wsdlphp-php>addDocumentationphp(php$portOperationphp,php php$descphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Whenphp usingphp thephp RPCphp stylephp,php makephp surephp thephp operationphp stylephp includesphp aphp php'namespacephp'php attributephp php(WSphp-Iphp Basicphp Profilephp php1php.php1php Rphp2php7php1php7php)
php php php php php php php php ifphp php(php$thisphp-php>php_bindingStylephp[php'stylephp'php]php php=php=php php'rpcphp'php php&php&php php!issetphp(php$thisphp-php>php_operationBodyStylephp[php'namespacephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_operationBodyStylephp[php'namespacephp'php]php php=php php'php'php.php$uriphp;
php php php php php php php php php}

php php php php php php php php php/php/php Addphp thephp bindingphp operation
php php php php php php php php ifphp(php$isOneWayMessagephp php=php=php falsephp)php php{
php php php php php php php php php php php php php$operationphp php=php php$wsdlphp-php>addBindingOperationphp(php$bindingphp,php php$functionphp-php>getNamephp(php)php,php php php$thisphp-php>php_operationBodyStylephp,php php$thisphp-php>php_operationBodyStylephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$operationphp php=php php$wsdlphp-php>addBindingOperationphp(php$bindingphp,php php$functionphp-php>getNamephp(php)php,php php php$thisphp-php>php_operationBodyStylephp)php;
php php php php php php php php php}
php php php php php php php php php$wsdlphp-php>addSoapOperationphp(php$operationphp,php php$uriphp php.php php'php#php'php php.php$functionphp-php>getNamephp(php)php)php;

php php php php php php php php php/php/php Addphp thephp functionphp namephp tophp thephp list
php php php php php php php php php$thisphp-php>php_functionsphp[php]php php=php php$functionphp-php>getNamephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Actionphp tophp takephp whenphp anphp errorphp occurs
php php php php php php*
php php php php php php*php php@paramphp stringphp php$fault
php php php php php php*php php@paramphp stringphp|intphp php$code
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp faultphp(php$faultphp php=php nullphp,php php$codephp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Functionphp hasphp nophp usephp inphp AutoDiscoverphp.php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlephp thephp Request
php php php php php php*
php php php php php php*php php@paramphp stringphp php$requestphp Aphp nonphp-standardphp requestphp php-php Notphp Used
php php php php php php*php/
php php php php publicphp functionphp handlephp(php$requestphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!headersphp_sentphp(php)php)php php{
php php php php php php php php php php php php headerphp(php'Contentphp-Typephp:php textphp/xmlphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_wsdlphp-php>dumpphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp WSDLphp dumpphp function
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filename
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp dumpphp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_wsdlphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_wsdlphp-php>dumpphp(php$filenamephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Cannotphp dumpphp autodiscoveredphp contentsphp,php WSDLphp filephp hasphp notphp beenphp generatedphp yetphp.php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp WSDLphp toXmlphp(php)php function
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp toXmlphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_wsdlphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_wsdlphp-php>toXmlphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Cannotphp returnphp autodiscoveredphp contentsphp,php WSDLphp filephp hasphp notphp beenphp generatedphp yetphp.php"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp functionsphp inphp thephp WSDL
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getFunctionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_functionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp Functions
php php php php php php*
php php php php php php*php php@paramphp unknownphp_typephp php$definition
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp loadFunctionsphp(php$definitionphp)
php php php php php{
php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Functionphp hasphp nophp usephp inphp AutoDiscoverphp.php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Persistance
php php php php php php*
php php php php php php*php php@paramphp intphp php$mode
php php php php php php*php php@throwsphp Zendphp_Soapphp_AutoDiscoverphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setPersistencephp(php$modephp)
php php php php php{
php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/AutoDiscoverphp/Exceptionphp.phpphp"php;
php php php php php php php php throwphp newphp Zendphp_Soapphp_AutoDiscoverphp_Exceptionphp(php"Functionphp hasphp nophp usephp inphp AutoDiscoverphp.php"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp XSDphp Typephp forphp thephp givenphp PHPphp type
php php php php php php*
php php php php php php*php php@paramphp stringphp php$typephp PHPphp Typephp tophp getphp thephp XSDphp typephp for
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_wsdlphp instanceofphp Zendphp_Soapphp_Wsdlphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@todophp Exceptionphp throwingphp mayphp bephp morephp correctphp php*php/

php php php php php php php php php php php php php/php/php WSDLphp isphp notphp definedphp yetphp,php sophp wephp canphp'tphp recognizephp typephp inphp contextphp ofphp currentphp service
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_wsdlphp-php>getTypephp(php$typephp)php;
php php php php php php php php php}
php php php php php}
php}
