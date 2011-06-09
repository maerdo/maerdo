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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Atomphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Entryphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Entryphp/Abstractphp.phpphp'php;


php/php*php*
php php*php Concretephp classphp forphp workingphp withphp Atomphp entriesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Entryphp_Atomphp extendsphp Zendphp_Feedphp_Entryphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Contentphp-Type
php php php php php php*php/
php php php php constphp CONTENTphp_TYPEphp php=php php'applicationphp/atomphp+xmlphp'php;

php php php php php/php*php*
php php php php php php*php Rootphp XMLphp elementphp forphp Atomphp entriesphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp php=php php'entryphp'php;

php php php php php/php*php*
php php php php php php*php Rootphp namespacephp forphp Atomphp entriesphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_rootNamespacephp php=php php'atomphp'php;


php php php php php/php*php*
php php php php php php*php Deletephp anphp atomphp entryphp.
php php php php php php*
php php php php php php*php Deletephp triesphp tophp deletephp thisphp entryphp fromphp itsphp feedphp.php Ifphp thephp entry
php php php php php php*php doesphp notphp containphp aphp linkphp relphp=php"editphp"php,php wephp throwphp anphp errorphp php(either
php php php php php php*php thephp entryphp doesphp notphp yetphp existphp orphp thisphp isphp notphp anphp editable
php php php php php php*php feedphp)php.php Ifphp wephp havephp aphp linkphp relphp=php"editphp"php,php wephp dophp thephp emptyphp-body
php php php php php php*php HTTPphp DELETEphp tophp thatphp URIphp andphp checkphp forphp aphp responsephp ofphp php2xxphp.
php php php php php php*php Usuallyphp thephp responsephp wouldphp bephp php2php0php4php Nophp Contentphp,php butphp thephp Atom
php php php php php php*php Publishingphp Protocolphp permitsphp itphp tophp bephp php2php0php0php OKphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp deletephp(php)
php php php php php{
php php php php php php php php php/php/php Lookphp forphp linkphp relphp=php"editphp"php inphp thephp entryphp objectphp.
php php php php php php php php php$deleteUriphp php=php php$thisphp-php>linkphp(php'editphp'php)php;
php php php php php php php php ifphp php(php!php$deleteUriphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Cannotphp deletephp entryphp;php nophp linkphp relphp=php"editphp"php isphp presentphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php DELETE
php php php php php php php php php$clientphp php=php Zendphp_Feedphp:php:getHttpClientphp(php)php;
php php php php php php php php dophp php{
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$deleteUriphp)php;
php php php php php php php php php php php php ifphp php(Zendphp_Feedphp:php:getHttpMethodOverridephp(php)php)php php{
php php php php php php php php php php php php php php php php php$clientphp-php>setHeaderphp(php'Xphp-HTTPphp-Methodphp-Overridephp'php,php php'DELETEphp'php)php;
php php php php php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'POSTphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'DELETEphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$httpStatusphp php=php php$responsephp-php>getStatusphp(php)php;
php php php php php php php php php php php php switchphp php(php(intphp)php php$httpStatusphp php/php php1php0php0php)php php{
php php php php php php php php php php php php php php php php php/php/php Success
php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php/php/php Redirect
php php php php php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php php php php php$deleteUriphp php=php php$responsephp-php>getHeaderphp(php'Locationphp'php)php;
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php/php/php Error
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php"Expectedphp responsephp codephp php2xxphp,php gotphp php$httpStatusphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php whilephp php(truephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Savephp aphp newphp orphp updatedphp Atomphp entryphp.
php php php php php php*
php php php php php php*php Savephp isphp usedphp tophp eitherphp createphp newphp entriesphp orphp tophp savephp changesphp to
php php php php php php*php existingphp onesphp.php Ifphp wephp havephp aphp linkphp relphp=php"editphp"php,php wephp arephp changing
php php php php php php*php anphp existingphp entryphp.php Inphp thisphp casephp wephp rephp-serializephp thephp entryphp and
php php php php php php*php PUTphp itphp tophp thephp editphp URIphp,php checkingphp forphp aphp php2php0php0php OKphp resultphp.
php php php php php php*
php php php php php php*php Forphp postingphp newphp entriesphp,php youphp mustphp specifyphp thephp php$postUri
php php php php php php*php parameterphp tophp savephp(php)php tophp tellphp thephp objectphp wherephp tophp postphp itselfphp.
php php php php php php*php Wephp usephp php$postUriphp andphp POSTphp thephp serializedphp entryphp therephp,php checking
php php php php php php*php forphp aphp php2php0php1php Createdphp responsephp.php Ifphp thephp insertphp isphp successfulphp,php we
php php php php php php*php thenphp parsephp thephp responsephp fromphp thephp POSTphp tophp getphp anyphp valuesphp that
php php php php php php*php thephp serverphp hasphp generatedphp:php anphp idphp,php anphp updatedphp timephp,php andphp itsphp new
php php php php php php*php linkphp relphp=php"editphp"php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$postUriphp Locationphp tophp POSTphp forphp creatingphp newphp entriesphp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp savephp(php$postUriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>idphp(php)php)php php{
php php php php php php php php php php php php php/php/php Ifphp idphp isphp setphp,php lookphp forphp linkphp relphp=php"editphp"php inphp the
php php php php php php php php php php php php php/php/php entryphp objectphp andphp PUTphp.
php php php php php php php php php php php php php$editUriphp php=php php$thisphp-php>linkphp(php'editphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$editUriphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Cannotphp editphp entryphp;php nophp linkphp relphp=php"editphp"php isphp presentphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$clientphp php=php Zendphp_Feedphp:php:getHttpClientphp(php)php;
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$editUriphp)php;
php php php php php php php php php php php php ifphp php(Zendphp_Feedphp:php:getHttpMethodOverridephp(php)php)php php{
php php php php php php php php php php php php php php php php php$clientphp-php>setHeadersphp(arrayphp(php'Xphp-HTTPphp-Methodphp-Overridephp:php PUTphp'php,
php php php php php php php php php php php php php php php php php php php php php'Contentphp-Typephp:php php'php php.php selfphp:php:CONTENTphp_TYPEphp)php)php;
php php php php php php php php php php php php php php php php php$clientphp-php>setRawDataphp(php$thisphp-php>saveXMLphp(php)php)php;
php php php php php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'POSTphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$clientphp-php>setHeadersphp(php'Contentphp-Typephp'php,php selfphp:php:CONTENTphp_TYPEphp)php;
php php php php php php php php php php php php php php php php php$clientphp-php>setRawDataphp(php$thisphp-php>saveXMLphp(php)php)php;
php php php php php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'PUTphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php0php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Expectedphp responsephp codephp php2php0php0php,php gotphp php'php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$postUriphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'PostURIphp mustphp bephp specifiedphp tophp savephp newphp entriesphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$clientphp php=php Zendphp_Feedphp:php:getHttpClientphp(php)php;
php php php php php php php php php php php php php$clientphp-php>setUriphp(php$postUriphp)php;
php php php php php php php php php php php php php$clientphp-php>setHeadersphp(php'Contentphp-Typephp'php,php selfphp:php:CONTENTphp_TYPEphp)php;
php php php php php php php php php php php php php$clientphp-php>setRawDataphp(php$thisphp-php>saveXMLphp(php)php)php;
php php php php php php php php php php php php php$responsephp php=php php$clientphp-php>requestphp(php'POSTphp'php)php;

php php php php php php php php php php php php ifphp php(php$responsephp-php>getStatusphp(php)php php!php=php=php php2php0php1php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Expectedphp responsephp codephp php2php0php1php,php gotphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Updatephp internalphp propertiesphp usingphp php$clientphp-php>responseBodyphp;
php php php php php php php php php@iniphp_setphp(php'trackphp_errorsphp'php,php php1php)php;
php php php php php php php php php$newEntryphp php=php newphp DOMDocumentphp;
php php php php php php php php php$statusphp php=php php@php$newEntryphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php php@iniphp_restorephp(php'trackphp_errorsphp'php)php;

php php php php php php php php ifphp php(php!php$statusphp)php php{
php php php php php php php php php php php php php/php/php preventphp thephp classphp tophp generatephp anphp undefinedphp variablephp noticephp php(ZFphp-php2php5php9php0php)
php php php php php php php php php php php php ifphp php(php!issetphp(php$phpphp_errormsgphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'xdebugphp_isphp_enabledphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$phpphp_errormsgphp php=php php'php(errorphp messagephp notphp availablephp,php whenphp XDebugphp isphp runningphp)php'php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$phpphp_errormsgphp php=php php'php(errorphp messagephp notphp availablephp)php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'XMLphp cannotphp bephp parsedphp:php php'php php.php php$phpphp_errormsgphp)php;
php php php php php php php php php}

php php php php php php php php php$newEntryphp php=php php$newEntryphp-php>getElementsByTagNamephp(php$thisphp-php>php_rootElementphp)php-php>itemphp(php0php)php;
php php php php php php php php ifphp php(php!php$newEntryphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Nophp rootphp php<feedphp>php elementphp foundphp inphp serverphp responsephp:php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp\nphp"php php.php php$clientphp-php>responseBodyphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_elementphp-php>parentNodephp)php php{
php php php php php php php php php php php php php$oldElementphp php=php php$thisphp-php>php_elementphp;
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$oldElementphp-php>ownerDocumentphp-php>importNodephp(php$newEntryphp,php truephp)php;
php php php php php php php php php php php php php$oldElementphp-php>parentNodephp-php>replaceChildphp(php$thisphp-php>php_elementphp,php php$oldElementphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$newEntryphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Easyphp accessphp tophp php<linkphp>php tagsphp keyedphp byphp php"relphp"php attributesphp.
php php php php php php*
php php php php php php*php Ifphp php$eltphp-php>linkphp(php)php isphp calledphp withphp nophp argumentsphp,php wephp willphp attemptphp to
php php php php php php*php returnphp thephp valuephp ofphp thephp php<linkphp>php tagphp(sphp)php likephp allphp other
php php php php php php*php methodphp-syntaxphp attributephp accessphp.php Ifphp anphp argumentphp isphp passedphp to
php php php php php php*php linkphp(php)php,php howeverphp,php thenphp wephp willphp returnphp thephp php"hrefphp"php valuephp ofphp the
php php php php php php*php firstphp php<linkphp>php tagphp thatphp hasphp aphp php"relphp"php attributephp matchingphp php$relphp:
php php php php php php*
php php php php php php*php php$eltphp-php>linkphp(php)php:php returnsphp thephp valuephp ofphp thephp linkphp tagphp.
php php php php php php*php php$eltphp-php>linkphp(php'selfphp'php)php:php returnsphp thephp hrefphp fromphp thephp firstphp php<linkphp relphp=php"selfphp"php>php inphp thephp entryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$relphp Thephp php"relphp"php attributephp tophp lookphp forphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp linkphp(php$relphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$relphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp parentphp:php:php_php_callphp(php'linkphp'php,php nullphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php indexphp linkphp tagsphp byphp theirphp php"relphp"php attributephp.
php php php php php php php php php$linksphp php=php parentphp:php:php_php_getphp(php'linkphp'php)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$linksphp)php)php php{
php php php php php php php php php php php php ifphp php(php$linksphp instanceofphp Zendphp_Feedphp_Elementphp)php php{
php php php php php php php php php php php php php php php php php$linksphp php=php arrayphp(php$linksphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$linksphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$linksphp asphp php$linkphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$linkphp[php'relphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$linkphp[php'relphp'php]php php=php php'alternatephp'php;php php/php/php seephp Atomphp php1php.php0php spec
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$relphp php=php=php php$linkphp[php'relphp'php]php)php php{
php php php php php php php php php php php php php php php php returnphp php$linkphp[php'hrefphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php}
