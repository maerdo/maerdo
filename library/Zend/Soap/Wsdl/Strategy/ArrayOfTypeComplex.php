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
php php*php php@versionphp php php php php$Idphp:php ArrayOfTypeComplexphp.phpphp php2php1php8php5php8php php2php0php1php0php-php0php4php-php1php5php php1php9php:php5php8php:php1php2Zphp beberleiphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexType
php php*php/
requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/DefaultComplexTypephp.phpphp"php;

php/php*php*
php php*php Zendphp_Soapphp_Wsdlphp_Strategyphp_ArrayOfTypeComplex
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Wsdl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Soapphp_Wsdlphp_Strategyphp_ArrayOfTypeComplexphp extendsphp Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexType
php{
php php php php protectedphp php$php_inProcessphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Addphp anphp ArrayOfTypephp basedphp onphp thephp xsdphp:complexTypephp syntaxphp ifphp typephp[php]php isphp detectedphp inphp returnphp valuephp docphp commentphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp stringphp tnsphp:xsdphp-type
php php php php php php*php/
php php php php publicphp functionphp addComplexTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(php$typephp,php php$thisphp-php>php_inProcessphp)php)php php{
php php php php php php php php php php php php returnphp php"tnsphp:php"php php.php php$typephp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_inProcessphp[php$typephp]php php=php php$typephp;

php php php php php php php php php$nestingLevelphp php=php php$thisphp-php>php_getNestedCountphp(php$typephp)php;

php php php php php php php php ifphp(php$nestingLevelphp php>php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(
php php php php php php php php php php php php php php php php php"ArrayOfTypeComplexphp cannotphp returnphp nestedphp ArrayOfObjectphp deeperphp thanphp php"php.
php php php php php php php php php php php php php php php php php"onephp levelphp.php Usephp arrayphp objectphp propertiesphp tophp returnphp deepphp nestedphp dataphp.
php php php php php php php php php php php php php"php)php;
php php php php php php php php php}

php php php php php php php php php$singularTypephp php=php php$thisphp-php>php_getSingularPhpTypephp(php$typephp)php;

php php php php php php php php ifphp(php!classphp_existsphp(php$singularTypephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php"Cannotphp addphp aphp complexphp typephp php%sphp thatphp isphp notphp anphp objectphp orphp wherephp php"php.
php php php php php php php php php php php php php php php php php"classphp couldphp notphp bephp foundphp inphp php'DefaultComplexTypephp'php strategyphp.php"php,php php$type
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp(php$nestingLevelphp php=php=php php1php)php php{
php php php php php php php php php php php php php/php/php Thephp followingphp blocksphp definephp thephp Arrayphp ofphp Objectphp structure
php php php php php php php php php php php php php$xsdComplexTypeNamephp php=php php$thisphp-php>php_addArrayOfComplexTypephp(php$singularTypephp,php php$typephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$xsdComplexTypeNamephp php=php php$singularTypephp;
php php php php php php php php php}

php php php php php php php php php/php/php Thephp arrayphp forphp thephp objectsphp hasphp beenphp createdphp,php nowphp buildphp thephp objectphp definitionphp:
php php php php php php php php ifphp(php!inphp_arrayphp(php$singularTypephp,php php$thisphp-php>getContextphp(php)php-php>getTypesphp(php)php)php)php php{
php php php php php php php php php php php php parentphp:php:addComplexTypephp(php$singularTypephp)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_inProcessphp[php$typephp]php)php;
php php php php php php php php returnphp php"tnsphp:php"php.php$xsdComplexTypeNamephp;
php php php php php}

php php php php protectedphp functionphp php_addArrayOfComplexTypephp(php$singularTypephp,php php$typephp)
php php php php php{
php php php php php php php php php$domphp php=php php$thisphp-php>getContextphp(php)php-php>toDomDocumentphp(php)php;

php php php php php php php php php$xsdComplexTypeNamephp php=php php$thisphp-php>php_getXsdComplexTypeNamephp(php$singularTypephp)php;

php php php php php php php php ifphp(php!inphp_arrayphp(php$xsdComplexTypeNamephp,php php$thisphp-php>getContextphp(php)php-php>getTypesphp(php)php)php)php php{
php php php php php php php php php php php php php$complexTypephp php=php php$domphp-php>createElementphp(php'xsdphp:complexTypephp'php)php;
php php php php php php php php php php php php php$complexTypephp-php>setAttributephp(php'namephp'php,php php$xsdComplexTypeNamephp)php;

php php php php php php php php php php php php php$complexContentphp php=php php$domphp-php>createElementphp(php"xsdphp:complexContentphp"php)php;
php php php php php php php php php php php php php$complexTypephp-php>appendChildphp(php$complexContentphp)php;

php php php php php php php php php php php php php$xsdRestrictionphp php=php php$domphp-php>createElementphp(php"xsdphp:restrictionphp"php)php;
php php php php php php php php php php php php php$xsdRestrictionphp-php>setAttributephp(php'basephp'php,php php'soapphp-encphp:Arrayphp'php)php;
php php php php php php php php php php php php php$complexContentphp-php>appendChildphp(php$xsdRestrictionphp)php;

php php php php php php php php php php php php php$xsdAttributephp php=php php$domphp-php>createElementphp(php"xsdphp:attributephp"php)php;
php php php php php php php php php php php php php$xsdAttributephp-php>setAttributephp(php"refphp"php,php php"soapphp-encphp:arrayTypephp"php)php;
php php php php php php php php php php php php php$xsdAttributephp-php>setAttributephp(php"wsdlphp:arrayTypephp"php,php sprintfphp(php"tnsphp:php%sphp[php]php"php,php php$singularTypephp)php)php;
php php php php php php php php php php php php php$xsdRestrictionphp-php>appendChildphp(php$xsdAttributephp)php;

php php php php php php php php php php php php php$thisphp-php>getContextphp(php)php-php>getSchemaphp(php)php-php>appendChildphp(php$complexTypephp)php;
php php php php php php php php php php php php php$thisphp-php>getContextphp(php)php-php>addTypephp(php$xsdComplexTypeNamephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$xsdComplexTypeNamephp;
php php php php php}

php php php php protectedphp functionphp php_getXsdComplexTypeNamephp(php$typephp)
php php php php php{
php php php php php php php php returnphp sprintfphp(php'ArrayOfphp%sphp'php,php php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fromphp aphp nestedphp definitionphp withphp typephp[php]php,php getphp thephp singularphp PHPphp Type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getSingularPhpTypephp(php$typephp)
php php php php php{
php php php php php php php php returnphp strphp_replacephp(php"php[php]php"php,php php"php"php,php php$typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp arrayphp nestingphp levelphp basedphp onphp thephp typephp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php protectedphp functionphp php_getNestedCountphp(php$typephp)
php php php php php{
php php php php php php php php returnphp substrphp_countphp(php$typephp,php php"php[php]php"php)php;
php php php php php}
php}