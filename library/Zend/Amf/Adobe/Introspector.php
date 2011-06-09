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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Introspectorphp.phpphp php2php3php3php1php6php php2php0php1php0php-php1php1php-php1php0php php1php6php:php3php7php:php4php0Zphp matthewphp php$
php php*php/

php/php*php*php php@seephp Zendphp_Amfphp_Parsephp_TypeLoaderphp php*php/
requirephp_oncephp php'Zendphp/Amfphp/Parsephp/TypeLoaderphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Reflectionphp_Classphp php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Classphp.phpphp'php;

php/php*php*php php@seephp Zendphp_Serverphp_Reflectionphp php*php/
requirephp_oncephp php'Zendphp/Serverphp/Reflectionphp.phpphp'php;

php/php*php*
php php*php Thisphp classphp implementsphp aphp servicephp forphp generatingphp AMFphp servicephp descriptionsphp asphp XMLphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Adobe
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Adobephp_Introspector
php{
php php php php php/php*php*
php php php php php php*php Optionsphp usedphp:
php php php php php php*php php-php serverphp:php instancephp ofphp Zendphp_Amfphp_Serverphp tophp use
php php php php php php*php php-php directoriesphp:php directoriesphp wherephp classphp filesphp mayphp bephp lookedphp up
php php php php php php*
php php php php php php*php php@varphp arrayphp Introspectorphp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp;

php php php php php/php*php*
php php php php php php*php php@varphp DOMElementphp DOMphp elementphp tophp storephp types
php php php php php php*php/
php php php php protectedphp php$php_typesphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Mapphp ofphp thephp knownphp types
php php php php php php*php/
php php php php protectedphp php$php_typesMapphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp DOMDocumentphp XMLphp documentphp tophp storephp data
php php php php php php*php/
php php php php protectedphp php$php_xmlphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xmlphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php'utfphp-php8php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp XMLphp definitionphp onphp anphp AMFphp servicephp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$serviceClassphp Servicephp classphp name
php php php php php php*php php@paramphp php arrayphp php$optionsphp invocationphp options
php php php php php php*php php@returnphp stringphp XMLphp withphp servicephp classphp introspection
php php php php php php*php/
php php php php publicphp functionphp introspectphp(php$serviceClassphp,php php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;

php php php php php php php php ifphp php(strpbrkphp(php$serviceClassphp,php php'php\php\php/<php>php'php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_returnErrorphp(php'Invalidphp servicephp namephp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Transformphp comphp.foophp.Barphp intophp comphp_foophp_Bar
php php php php php php php php php$serviceClassphp php=php strphp_replacephp(php'php.php'php php,php php'php_php'php,php php$serviceClassphp)php;

php php php php php php php php php/php/php Introspectphp!
php php php php php php php php ifphp php(php!classphp_existsphp(php$serviceClassphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$serviceClassphp,php php$thisphp-php>php_getServicePathphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$servphp php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'servicephp-descriptionphp'php)php;
php php php php php php php php php$servphp-php>setAttributephp(php'xmlnsphp'php,php php'httpphp:php/php/nsphp.adobephp.comphp/flexphp/servicephp-descriptionphp/php2php0php0php8php'php)php;

php php php php php php php php php$thisphp-php>php_typesphp php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'typesphp'php)php;
php php php php php php php php php$thisphp-php>php_opsphp php php php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'operationsphp'php)php;

php php php php php php php php php$rphp php=php Zendphp_Serverphp_Reflectionphp:php:reflectClassphp(php$serviceClassphp)php;
php php php php php php php php php$thisphp-php>php_addServicephp(php$rphp,php php$thisphp-php>php_opsphp)php;

php php php php php php php php php$servphp-php>appendChildphp(php$thisphp-php>php_typesphp)php;
php php php php php php php php php$servphp-php>appendChildphp(php$thisphp-php>php_opsphp)php;
php php php php php php php php php$thisphp-php>php_xmlphp-php>appendChildphp(php$servphp)php;

php php php php php php php php returnphp php$thisphp-php>php_xmlphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Authenticationphp handler
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Aclphp php$acl
php php php php php php*php php@returnphp unknownphp_type
php php php php php php*php/
php php php php publicphp functionphp initAclphp(Zendphp_Aclphp php$aclphp)
php php php php php{
php php php php php php php php returnphp falsephp;php php/php/php wephp dophp notphp needphp authphp forphp thisphp class
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp mapphp ofphp publicphp classphp attributes
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typenamephp typephp name
php php php php php php*php php@paramphp php DOMElementphp php$typexmlphp targetphp XMLphp element
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addClassAttributesphp(php$typenamephp,php DOMElementphp php$typexmlphp)
php php php php php{
php php php php php php php php php/php/php Dophp notphp tryphp tophp autoloadphp herephp becausephp php_phpTypeToASphp should
php php php php php php php php php/php/php havephp alreadyphp attemptedphp tophp loadphp thisphp class
php php php php php php php php ifphp php(php!classphp_existsphp(php$typenamephp,php falsephp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$rcphp php=php newphp Zendphp_Reflectionphp_Classphp(php$typenamephp)php;
php php php php php php php php foreachphp php(php$rcphp-php>getPropertiesphp(php)php asphp php$propphp)php php{
php php php php php php php php php php php php ifphp php(php!php$propphp-php>isPublicphp(php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$propxmlphp php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'propertyphp'php)php;
php php php php php php php php php php php php php$propxmlphp-php>setAttributephp(php'namephp'php,php php$propphp-php>getNamephp(php)php)php;

php php php php php php php php php php php php php$typephp php=php php$thisphp-php>php_registerTypephp(php$thisphp-php>php_getPropertyTypephp(php$propphp)php)php;
php php php php php php php php php php php php php$propxmlphp-php>setAttributephp(php'typephp'php,php php$typephp)php;

php php php php php php php php php php php php php$typexmlphp-php>appendChildphp(php$propxmlphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildphp XMLphp servicephp descriptionphp fromphp reflectionphp class
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Serverphp_Reflectionphp_Classphp php$refclass
php php php php php php*php php@paramphp php DOMElementphp php$targetphp targetphp XMLphp element
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addServicephp(Zendphp_Serverphp_Reflectionphp_Classphp php$refclassphp,php DOMElementphp php$targetphp)
php php php php php{
php php php php php php php php foreachphp php(php$refclassphp-php>getMethodsphp(php)php asphp php$methodphp)php php{
php php php php php php php php php php php php ifphp php(php!php$methodphp-php>isPublicphp(php)
php php php php php php php php php php php php php php php php php|php|php php$methodphp-php>isConstructorphp(php)
php php php php php php php php php php php php php php php php php|php|php php(php'php_php_php'php php=php=php substrphp(php$methodphp-php>namephp,php php0php,php php2php)php)
php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$methodphp-php>getPrototypesphp(php)php asphp php$protophp)php php{
php php php php php php php php php php php php php php php php php$opphp php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'operationphp'php)php;
php php php php php php php php php php php php php php php php php$opphp-php>setAttributephp(php'namephp'php,php php$methodphp-php>getNamephp(php)php)php;

php php php php php php php php php php php php php php php php php$rettypephp php=php php$thisphp-php>php_registerTypephp(php$protophp-php>getReturnTypephp(php)php)php;
php php php php php php php php php php php php php php php php php$opphp-php>setAttributephp(php'returnTypephp'php,php php$rettypephp)php;

php php php php php php php php php php php php php php php php foreachphp php(php$protophp-php>getParametersphp(php)php asphp php$paramphp)php php{
php php php php php php php php php php php php php php php php php php php php php$argphp php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'argumentphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$argphp-php>setAttributephp(php'namephp'php,php php$paramphp-php>getNamephp(php)php)php;

php php php php php php php php php php php php php php php php php php php php php$typephp php=php php$paramphp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$typephp php=php=php php'mixedphp'php php&php&php php(php$pclassphp php=php php$paramphp-php>getClassphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php$pclassphp-php>getNamephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$ptypephp php=php php$thisphp-php>php_registerTypephp(php$typephp)php;
php php php php php php php php php php php php php php php php php php php php php$argphp-php>setAttributephp(php'typephp'php,php php$ptypephp)php;

php php php php php php php php php php php php php php php php php php php php ifphp(php$paramphp-php>isDefaultValueAvailablephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$argphp-php>setAttributephp(php'defaultvaluephp'php,php php$paramphp-php>getDefaultValuephp(php)php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$opphp-php>appendChildphp(php$argphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$targetphp-php>appendChildphp(php$opphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractphp typephp ofphp thephp propertyphp fromphp DocBlock
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Reflectionphp_Propertyphp php$propphp reflectionphp propertyphp object
php php php php php php*php php@returnphp stringphp Propertyphp type
php php php php php php*php/
php php php php protectedphp functionphp php_getPropertyTypephp(Zendphp_Reflectionphp_Propertyphp php$propphp)
php php php php php{
php php php php php php php php php$docBlockphp php=php php$propphp-php>getDocCommentphp(php)php;

php php php php php php php php ifphp php(php!php$docBlockphp)php php{
php php php php php php php php php php php php returnphp php'Unknownphp'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$docBlockphp-php>hasTagphp(php'varphp'php)php)php php{
php php php php php php php php php php php php returnphp php'Unknownphp'php;
php php php php php php php php php}

php php php php php php php php php$tagphp php=php php$docBlockphp-php>getTagphp(php'varphp'php)php;
php php php php php php php php returnphp trimphp(php$tagphp-php>getDescriptionphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp arrayphp ofphp servicephp directories
php php php php php php*
php php php php php php*php php@returnphp arrayphp Servicephp classphp directories
php php php php php php*php/
php php php php protectedphp functionphp php_getServicePathphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'serverphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'serverphp'php]php-php>getDirectoryphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'directoriesphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php'directoriesphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mapphp fromphp PHPphp typephp namephp tophp ASphp typephp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typenamephp PHPphp typephp name
php php php php php php*php php@returnphp stringphp ASphp typephp name
php php php php php php*php/
php php php php protectedphp functionphp php_phpTypeToASphp(php$typenamephp)
php php php php php{
php php php php php php php php ifphp php(classphp_existsphp(php$typenamephp)php)php php{
php php php php php php php php php php php php php$varsphp php=php getphp_classphp_varsphp(php$typenamephp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$varsphp[php'php_explicitTypephp'php]php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$varsphp[php'php_explicitTypephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(falsephp php!php=php=php php(php$asnamephp php=php Zendphp_Amfphp_Parsephp_TypeLoaderphp:php:getMappedClassNamephp(php$typenamephp)php)php)php php{
php php php php php php php php php php php php returnphp php$asnamephp;
php php php php php php php php php}

php php php php php php php php returnphp php$typenamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp newphp typephp onphp thephp system
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$typenamephp typephp name
php php php php php php*php php@returnphp stringphp Newphp typephp name
php php php php php php*php/
php php php php protectedphp functionphp php_registerTypephp(php$typenamephp)
php php php php php{
php php php php php php php php php/php/php Knownphp typephp php-php returnphp itsphp ASphp name
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_typesMapphp[php$typenamephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_typesMapphp[php$typenamephp]php;
php php php php php php php php php}

php php php php php php php php php/php/php Standardphp types
php php php php php php php php ifphp php(inphp_arrayphp(php$typenamephp,php arrayphp(php'voidphp'php,php php'nullphp'php,php php'mixedphp'php,php php'unknownphp_typephp'php)php)php)php php{
php php php php php php php php php php php php returnphp php'Unknownphp'php;
php php php php php php php php php}

php php php php php php php php php/php/php Arrays
php php php php php php php php ifphp php(php'arrayphp'php php=php=php php$typenamephp)php php{
php php php php php php php php php php php php returnphp php'Unknownphp[php]php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(inphp_arrayphp(php$typenamephp,php arrayphp(php'intphp'php,php php'integerphp'php,php php'boolphp'php,php php'booleanphp'php,php php'floatphp'php,php php'stringphp'php,php php'objectphp'php,php php'Unknownphp'php,php php'stdClassphp'php)php)php)php php{
php php php php php php php php php php php php returnphp php$typenamephp;
php php php php php php php php php}

php php php php php php php php php/php/php Resolvephp andphp storephp ASphp name
php php php php php php php php php$asTypeNamephp php=php php$thisphp-php>php_phpTypeToASphp(php$typenamephp)php;
php php php php php php php php php$thisphp-php>php_typesMapphp[php$typenamephp]php php=php php$asTypeNamephp;

php php php php php php php php php/php/php Createphp elementphp forphp thephp name
php php php php php php php php php$typeElphp php=php php$thisphp-php>php_xmlphp-php>createElementphp(php'typephp'php)php;
php php php php php php php php php$typeElphp-php>setAttributephp(php'namephp'php,php php$asTypeNamephp)php;
php php php php php php php php php$thisphp-php>php_addClassAttributesphp(php$typenamephp,php php$typeElphp)php;
php php php php php php php php php$thisphp-php>php_typesphp-php>appendChildphp(php$typeElphp)php;

php php php php php php php php returnphp php$asTypeNamephp;
php php php php php}

php php php php/php*php*
php php php php php php*php Returnphp errorphp withphp errorphp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$msgphp Errorphp message
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_returnErrorphp(php$msgphp)
php php php php php{
php php php php php php php php returnphp php'ERRORphp:php php$msgphp'php;
php php php php php}
php}
