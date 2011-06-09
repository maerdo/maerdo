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
php php*php php@versionphp php php php php$Idphp:php ArrayOfTypeSequencephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexType
php php*php/
requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/DefaultComplexTypephp.phpphp"php;

php/php*php*
php php*php Zendphp_Soapphp_Wsdlphp_Strategyphp_ArrayOfTypeSequence
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Wsdl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Soapphp_Wsdlphp_Strategyphp_ArrayOfTypeSequencephp extendsphp Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexType
php{
php php php php php/php*php*
php php php php php php*php Addphp anphp unboundedphp ArrayOfTypephp basedphp onphp thephp xsdphp:sequencephp syntaxphp ifphp typephp[php]php isphp detectedphp inphp returnphp valuephp docphp commentphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@returnphp stringphp tnsphp:xsdphp-type
php php php php php php*php/
php php php php publicphp functionphp addComplexTypephp(php$typephp)
php php php php php{
php php php php php php php php php$nestedCounterphp php=php php$thisphp-php>php_getNestedCountphp(php$typephp)php;

php php php php php php php php ifphp(php$nestedCounterphp php>php php0php)php php{
php php php php php php php php php php php php php$singularTypephp php=php php$thisphp-php>php_getSingularTypephp(php$typephp)php;

php php php php php php php php php php php php forphp(php$iphp php=php php1php;php php$iphp <php=php php$nestedCounterphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$complexTypeNamephp php=php substrphp(php$thisphp-php>php_getTypeNameBasedOnNestingLevelphp(php$singularTypephp,php php$iphp)php,php php4php)php;
php php php php php php php php php php php php php php php php php$childTypeNamephp php=php php$thisphp-php>php_getTypeNameBasedOnNestingLevelphp(php$singularTypephp,php php$iphp-php1php)php;

php php php php php php php php php php php php php php php php php$thisphp-php>php_addElementFromWsdlAndChildTypesphp(php$complexTypeNamephp,php php$childTypeNamephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php addingphp thephp PHPphp typephp whichphp isphp resolvedphp tophp aphp nestedphp XSDphp typephp.php thereforephp addphp onlyphp oncephp.
php php php php php php php php php php php php php$thisphp-php>getContextphp(php)php-php>addTypephp(php$complexTypeNamephp)php;

php php php php php php php php php php php php returnphp php"tnsphp:php$complexTypeNamephp"php;
php php php php php php php php php}php elsephp ifphp php(php!inphp_arrayphp(php$typephp,php php$thisphp-php>getContextphp(php)php-php>getTypesphp(php)php)php)php php{
php php php php php php php php php php php php php/php/php Newphp singularphp complexphp type
php php php php php php php php php php php php returnphp parentphp:php:addComplexTypephp(php$typephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Existingphp complexphp type
php php php php php php php php php php php php returnphp php$thisphp-php>getContextphp(php)php-php>getTypephp(php$typephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp ArrayOfphp orphp simplephp typephp namephp basedphp onphp thephp singularphp xsdtypephp andphp thephp nestingphp level
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$singularType
php php php php php php*php php@paramphp php intphp php php php php$level
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getTypeNameBasedOnNestingLevelphp(php$singularTypephp,php php$levelphp)
php php php php php{
php php php php php php php php ifphp(php$levelphp php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Thisphp isphp notphp anphp Arrayphp anymorephp,php returnphp thephp xsdphp simplephp type
php php php php php php php php php php php php returnphp php$singularTypephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$prefixphp php=php strphp_repeatphp(php"ArrayOfphp"php,php php$levelphp)php;
php php php php php php php php php php php php php$xsdTypephp php=php php$thisphp-php>php_getStrippedXsdTypephp(php$singularTypephp)php;
php php php php php php php php php php php php php$arrayTypephp php=php php$prefixphp.php$xsdTypephp;
php php php php php php php php php php php php returnphp php"tnsphp:php$arrayTypephp"php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Stripphp thephp xsdphp:php fromphp aphp singularTypephp andphp Formatphp itphp nicephp forphp ArrayOfphp<Typephp>php naming
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$singularType
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getStrippedXsdTypephp(php$singularTypephp)
php php php php php{
php php php php php php php php returnphp ucfirstphp(substrphp(strtolowerphp(php$singularTypephp)php,php php4php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fromphp aphp nestedphp defintionphp withphp typephp[php]php,php getphp thephp singularphp xsdphp:type
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Soapphp_Wsdlphp_Exceptionphp Whenphp nophp xsdphp:simpletypephp canphp bephp detectedphp.
php php php php php php*php php@paramphp php stringphp php$type
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getSingularTypephp(php$typephp)
php php php php php{
php php php php php php php php php$singulartypephp php=php php$thisphp-php>getContextphp(php)php-php>getTypephp(strphp_replacephp(php"php[php]php"php,php php"php"php,php php$typephp)php)php;
php php php php php php php php returnphp php$singulartypephp;
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

php php php php php/php*php*
php php php php php php*php Appendphp thephp complexphp typephp definitionphp tophp thephp WSDLphp viaphp thephp contextphp access
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$arrayType
php php php php php php*php php@paramphp php stringphp php$childTypeName
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addElementFromWsdlAndChildTypesphp(php$arrayTypephp,php php$childTypeNamephp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$arrayTypephp,php php$thisphp-php>getContextphp(php)php-php>getTypesphp(php)php)php)php php{
php php php php php php php php php php php php php$domphp php=php php$thisphp-php>getContextphp(php)php-php>toDomDocumentphp(php)php;

php php php php php php php php php php php php php$complexTypephp php=php php$domphp-php>createElementphp(php'xsdphp:complexTypephp'php)php;
php php php php php php php php php php php php php$complexTypephp-php>setAttributephp(php'namephp'php,php php$arrayTypephp)php;

php php php php php php php php php php php php php$sequencephp php=php php$domphp-php>createElementphp(php'xsdphp:sequencephp'php)php;

php php php php php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php'xsdphp:elementphp'php)php;
php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'namephp'php,php php php php php php php'itemphp'php)php;
php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'typephp'php,php php php php php php php$childTypeNamephp)php;
php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'minOccursphp'php,php php0php)php;
php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'maxOccursphp'php,php php'unboundedphp'php)php;
php php php php php php php php php php php php php$sequencephp-php>appendChildphp(php$elementphp)php;

php php php php php php php php php php php php php$complexTypephp-php>appendChildphp(php$sequencephp)php;

php php php php php php php php php php php php php$thisphp-php>getContextphp(php)php-php>getSchemaphp(php)php-php>appendChildphp(php$complexTypephp)php;
php php php php php php php php php php php php php$thisphp-php>getContextphp(php)php-php>addTypephp(php$arrayTypephp)php;
php php php php php php php php php}
php php php php php}
php}
