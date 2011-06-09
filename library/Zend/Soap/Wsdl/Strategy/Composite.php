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
php php*php php@subpackagephp Wsdl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Compositephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php php*php/
requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/Interfacephp.phpphp"php;

php/php*php*
php php*php Zendphp_Soapphp_Wsdlphp_Strategyphp_Composite
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Wsdl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Compositephp implementsphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Typemapphp ofphp Complexphp Typephp php=php>php Strategyphp pairsphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_typeMapphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp Strategyphp ofphp thisphp composite
php php php php php php*
php php php php php php*php php@varphp stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_defaultStrategyphp;

php php php php php/php*php*
php php php php php php*php Contextphp WSDLphp filephp thatphp thisphp compositephp serves
php php php php php php*
php php php php php php*php php@varphp Zendphp_Soapphp_Wsdlphp|null
php php php php php php*php/
php php php php protectedphp php$php_contextphp;

php php php php php/php*php*
php php php php php php*php Constructphp Compositephp WSDLphp Strategyphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php*php php@paramphp arrayphp php$typeMap
php php php php php php*php php@paramphp stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp php$defaultStrategy
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$typeMapphp=arrayphp(php)php,php php$defaultStrategyphp=php"Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexTypephp"php)
php php php php php{
php php php php php php php php foreachphp(php$typeMapphp ASphp php$typephp php=php>php php$strategyphp)php php{
php php php php php php php php php php php php php$thisphp-php>connectTypeToStrategyphp(php$typephp,php php$strategyphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_defaultStrategyphp php=php php$defaultStrategyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Connectphp aphp complexphp typephp tophp aphp givenphp strategyphp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@paramphp php stringphp|Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp php$strategy
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Composite
php php php php php php*php/
php php php php publicphp functionphp connectTypeToStrategyphp(php$typephp,php php$strategyphp)
php php php php php{
php php php php php php php php ifphp(php!isphp_stringphp(php$typephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(php"Invalidphp typephp givenphp tophp Compositephp Typephp Mapphp.php"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_typeMapphp[php$typephp]php php=php php$strategyphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp defaultphp strategyphp ofphp thisphp composite
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getDefaultStrategyphp(php)
php php php php php{
php php php php php php php php php$strategyphp php=php php$thisphp-php>php_defaultStrategyphp;
php php php php php php php php ifphp(isphp_stringphp(php$strategyphp)php php&php&php classphp_existsphp(php$strategyphp)php)php php{
php php php php php php php php php php php php php$strategyphp php=php newphp php$strategyphp;
php php php php php php php php php}
php php php php php php php php ifphp(php php!php(php$strategyphp instanceofphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp)php php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Defaultphp Strategyphp forphp Complexphp Typesphp isphp notphp aphp validphp strategyphp objectphp.php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_defaultStrategyphp php=php php$strategyphp;
php php php php php php php php returnphp php$strategyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp specificphp strategyphp orphp thephp defaultphp strategyphp ofphp thisphp typephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getStrategyOfTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp(issetphp(php$thisphp-php>php_typeMapphp[php$typephp]php)php)php php{
php php php php php php php php php php php php php$strategyphp php=php php$thisphp-php>php_typeMapphp[php$typephp]php;

php php php php php php php php php php php php ifphp(isphp_stringphp(php$strategyphp)php php&php&php classphp_existsphp(php$strategyphp)php)php php{
php php php php php php php php php php php php php php php php php$strategyphp php=php newphp php$strategyphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp(php php!php(php$strategyphp instanceofphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Interfacephp)php php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php"Strategyphp forphp Complexphp Typephp php'php"php.php$typephp.php"php'php isphp notphp aphp validphp strategyphp objectphp.php"
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_typeMapphp[php$typephp]php php=php php$strategyphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$strategyphp php=php php$thisphp-php>getDefaultStrategyphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$strategyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Methodphp acceptsphp thephp currentphp WSDLphp contextphp filephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Soapphp_Wsdlphp php$context
php php php php php php*php/
php php php php publicphp functionphp setContextphp(Zendphp_Soapphp_Wsdlphp php$contextphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp php=php php$contextphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp complexphp typephp basedphp onphp aphp strategy
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp stringphp XSDphp type
php php php php php php*php/
php php php php publicphp functionphp addComplexTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp(php!php(php$thisphp-php>php_contextphp instanceofphp Zendphp_Soapphp_Wsdlphp)php php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Cannotphp addphp complexphp typephp php'php"php.php$typephp.php"php'php,php nophp contextphp isphp setphp forphp thisphp compositephp strategyphp.php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php$strategyphp php=php php$thisphp-php>getStrategyOfTypephp(php$typephp)php;
php php php php php php php php php$strategyphp-php>setContextphp(php$thisphp-php>php_contextphp)php;
php php php php php php php php returnphp php$strategyphp-php>addComplexTypephp(php$typephp)php;
php php php php php}
php}