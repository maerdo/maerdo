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
php php*php php@versionphp php php php php$Idphp:php DefaultComplexTypephp.phpphp php2php2php6php7php4php php2php0php1php0php-php0php7php-php2php5php php1php9php:php3php5php:php2php0Zphp ramonphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Soapphp_Wsdlphp_Strategyphp_Abstract
php php*php/
requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Strategyphp/Abstractphp.phpphp"php;

php/php*php*
php php*php Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexType
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Soap
php php*php php@subpackagephp Wsdl
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Soapphp_Wsdlphp_Strategyphp_DefaultComplexTypephp extendsphp Zendphp_Soapphp_Wsdlphp_Strategyphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Addphp aphp complexphp typephp byphp recursivlyphp usingphp allphp thephp classphp propertiesphp fetchedphp viaphp Reflectionphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typephp Namephp ofphp thephp classphp tophp bephp specified
php php php php php php*php php@returnphp stringphp XSDphp Typephp forphp thephp givenphp PHPphp type
php php php php php php*php/
php php php php publicphp functionphp addComplexTypephp(php$typephp)
php php php php php{
php php php php php php php php ifphp(php!classphp_existsphp(php$typephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Soapphp/Wsdlphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Soapphp_Wsdlphp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php"Cannotphp addphp aphp complexphp typephp php%sphp thatphp isphp notphp anphp objectphp orphp wherephp php"php.
php php php php php php php php php php php php php php php php php"classphp couldphp notphp bephp foundphp inphp php'DefaultComplexTypephp'php strategyphp.php"php,php php$type
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php php$thisphp-php>getContextphp(php)php-php>toDomDocumentphp(php)php;
php php php php php php php php php$classphp php=php newphp ReflectionClassphp(php$typephp)php;

php php php php php php php php php$defaultPropertiesphp php=php php$classphp-php>getDefaultPropertiesphp(php)php;

php php php php php php php php php$complexTypephp php=php php$domphp-php>createElementphp(php'xsdphp:complexTypephp'php)php;
php php php php php php php php php$complexTypephp-php>setAttributephp(php'namephp'php,php php$typephp)php;

php php php php php php php php php$allphp php=php php$domphp-php>createElementphp(php'xsdphp:allphp'php)php;

php php php php php php php php foreachphp php(php$classphp-php>getPropertiesphp(php)php asphp php$propertyphp)php php{
php php php php php php php php php php php php ifphp php(php$propertyphp-php>isPublicphp(php)php php&php&php pregphp_matchphp_allphp(php'php/php@varphp\sphp+php(php[php^php\sphp]php+php)php/mphp'php,php php$propertyphp-php>getDocCommentphp(php)php,php php$matchesphp)php)php php{

php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@todophp checkphp ifphp php'xsdphp:elementphp'php mustphp bephp usedphp herephp php(itphp mayphp notphp bephp compatiblephp withphp usingphp php'complexTypephp'
php php php php php php php php php php php php php php php php php php*php nodephp forphp describingphp otherphp classesphp usedphp asphp attributephp typesphp forphp currentphp class
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php$elementphp php=php php$domphp-php>createElementphp(php'xsdphp:elementphp'php)php;
php php php php php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'namephp'php,php php$propertyNamephp php=php php$propertyphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'typephp'php,php php$thisphp-php>getContextphp(php)php-php>getTypephp(trimphp(php$matchesphp[php1php]php[php0php]php)php)php)php;

php php php php php php php php php php php php php php php php php/php/php Ifphp thephp defaultphp valuephp isphp nullphp,php thenphp thisphp propertyphp isphp nillablephp.
php php php php php php php php php php php php php php php php ifphp php(php$defaultPropertiesphp[php$propertyNamephp]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$elementphp-php>setAttributephp(php'nillablephp'php,php php'truephp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$allphp-php>appendChildphp(php$elementphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$complexTypephp-php>appendChildphp(php$allphp)php;
php php php php php php php php php$thisphp-php>getContextphp(php)php-php>getSchemaphp(php)php-php>appendChildphp(php$complexTypephp)php;
php php php php php php php php php$thisphp-php>getContextphp(php)php-php>addTypephp(php$typephp)php;

php php php php php php php php returnphp php"tnsphp:php$typephp"php;
php php php php php}
php}
