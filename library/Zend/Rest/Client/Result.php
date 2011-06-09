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
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Resultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Rest
php php*php php@subpackagephp Client
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Restphp_Clientphp_Resultphp implementsphp IteratorAggregatephp php{
php php php php php/php*php*
php php php php php php*php php@varphp SimpleXMLElement
php php php php php php*php/
php php php php protectedphp php$php_sxmlphp;

php php php php php/php*php*
php php php php php php*php errorphp information
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_errstrphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dataphp XMLphp Result
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$dataphp)
php php php php php{
php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'handleXmlErrorsphp'php)php)php;
php php php php php php php php php$thisphp-php>php_sxmlphp php=php simplexmlphp_loadphp_stringphp(php$dataphp)php;
php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php ifphp(php$thisphp-php>php_sxmlphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_errstrphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$messagephp php=php php"Anphp errorphp occuredphp whilephp parsingphp thephp RESTphp responsephp withphp simplexmlphp.php"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$messagephp php=php php"RESTphp Responsephp Errorphp:php php"php php.php php$thisphp-php>php_errstrphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_errstrphp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Restphp/Clientphp/Resultphp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Restphp_Clientphp_Resultphp_Exceptionphp(php$messagephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Temporaryphp errorphp handlerphp forphp parsingphp RESTphp responsesphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php php php php$errno
php php php php php php*php php@paramphp stringphp php$errstr
php php php php php php*php php@paramphp stringphp php$errfile
php php php php php php*php php@paramphp stringphp php$errline
php php php php php php*php php@paramphp arrayphp php php$errcontext
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp handleXmlErrorsphp(php$errnophp,php php$errstrphp,php php$errfilephp php=php nullphp,php php$errlinephp php=php nullphp,php arrayphp php$errcontextphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errstrphp php=php php$errstrphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castsphp aphp SimpleXMLElementphp tophp itsphp appropriatephp PHPphp value
php php php php php php*
php php php php php php*php php@paramphp SimpleXMLElementphp php$value
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp toValuephp(SimpleXMLElementphp php$valuephp)
php php php php php{
php php php php php php php php php$nodephp php=php domphp_importphp_simplexmlphp(php$valuephp)php;
php php php php php php php php returnphp php$nodephp-php>nodeValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Propertyphp Overload
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp nullphp|SimpleXMLElementphp|arrayphp Nullphp ifphp notphp foundphp,php SimpleXMLElementphp ifphp onlyphp onephp valuephp foundphp,php arrayphp ofphp Zendphp_Restphp_Clientphp_Resultphp objectsphp otherwise
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_sxmlphp-php>php{php$namephp}php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_sxmlphp-php>php{php$namephp}php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>php_sxmlphp-php>xpathphp(php"php/php/php$namephp"php)php;
php php php php php php php php php$countphp php php=php countphp(php$resultphp)php;

php php php php php php php php ifphp php(php$countphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elseifphp php(php$countphp php=php=php php1php)php php{
php php php php php php php php php php php php returnphp php$resultphp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp propertiesphp tophp PHPphp values
php php php php php php*
php php php php php php*php Forphp arraysphp,php loopsphp throughphp eachphp elementphp andphp castsphp tophp aphp valuephp asphp wellphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$valuephp php=php php$thisphp-php>php_php_getphp(php$methodphp)php)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>toValuephp(php$valuephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$elementphp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php]php php=php php$thisphp-php>toValuephp(php$elementphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Issetphp Overload
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_sxmlphp-php>php{php$namephp}php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$thisphp-php>php_sxmlphp-php>xpathphp(php"php/php/php$namephp"php)php;

php php php php php php php php ifphp php(sizeofphp(php$resultphp)php php>php php0php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Implementphp IteratorAggregatephp:php:getIteratorphp(php)
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sxmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Requestphp Status
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getStatusphp(php)
php php php php php{
php php php php php php php php php$statusphp php=php php$thisphp-php>php_sxmlphp-php>xpathphp(php'php/php/statusphp/textphp(php)php'php)php;

php php php php php php php php php$statusphp php=php strtolowerphp(php$statusphp[php0php]php)php;

php php php php php php php php ifphp php(ctypephp_alphaphp(php$statusphp)php php&php&php php$statusphp php=php=php php'successphp'php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elseifphp php(ctypephp_alphaphp(php$statusphp)php php&php&php php$statusphp php!php=php php'successphp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php(boolphp)php php$statusphp;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp isErrorphp(php)
php php php php php{
php php php php php php php php php$statusphp php=php php$thisphp-php>getStatusphp(php)php;
php php php php php php php php ifphp php(php$statusphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp isSuccessphp(php)
php php php php php{
php php php php php php php php php$statusphp php=php php$thisphp-php>getStatusphp(php)php;
php php php php php php php php ifphp php(php$statusphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php toStringphp overload
php php php php php php*
php php php php php php*php Bephp surephp tophp onlyphp callphp thisphp whenphp thephp resultphp isphp aphp singlephp valuephp!
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>getStatusphp(php)php)php php{
php php php php php php php php php php php php php$messagephp php=php php$thisphp-php>php_sxmlphp-php>xpathphp(php'php/php/messagephp'php)php;
php php php php php php php php php php php php returnphp php(stringphp)php php$messagephp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_sxmlphp-php>xpathphp(php'php/php/responsephp'php)php;
php php php php php php php php php php php php ifphp php(sizeofphp(php$resultphp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php returnphp php(stringphp)php php"Anphp errorphp occuredphp.php"php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php(stringphp)php php$resultphp[php0php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
