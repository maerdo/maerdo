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
php php*php php@subpackagephp Zendphp_InfoCardphp_Xmlphp_Security
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Transformphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Aphp classphp tophp createphp aphp transformphp rulephp setphp basedphp onphp XMLphp URIsphp andphp thenphp applyphp thosephp rules
php php*php inphp thephp correctphp orderphp tophp aphp givenphp XMLphp input
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xmlphp_Security
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transform
php{
php php php php php/php*php*
php php php php php php*php Aphp listphp ofphp transformsphp tophp apply
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_transformListphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnsphp thephp namephp ofphp thephp transformphp classphp basedphp onphp aphp givenphp URI
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Exception
php php php php php php*php php@paramphp stringphp php$uriphp Thephp transformphp URI
php php php php php php*php php@returnphp stringphp Thephp transformphp implementationphp classphp name
php php php php php php*php/
php php php php protectedphp functionphp php_findClassbyURIphp(php$uriphp)
php php php php php{
php php php php php php php php switchphp(php$uriphp)php php{
php php php php php php php php php php php php casephp php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php0php/php0php9php/xmldsigphp#envelopedphp-signaturephp'php:
php php php php php php php php php php php php php php php php returnphp php'Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_EnvelopedSignaturephp'php;
php php php php php php php php php php php php casephp php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php1php/php1php0php/xmlphp-excphp-cphp1php4nphp#php'php:
php php php php php php php php php php php php php php php php returnphp php'Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_XmlExcCphp1php4Nphp'php;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Securityphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Exceptionphp(php"Unknownphp orphp Unsupportedphp Transformationphp Requestedphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp Transformphp URIphp tophp thephp listphp ofphp transformsphp tophp perform
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uriphp Thephp Transformphp URI
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transform
php php php php php php*php/
php php php php publicphp functionphp addTransformphp(php$uriphp)
php php php php php{
php php php php php php php php php$classphp php=php php$thisphp-php>php_findClassbyURIphp(php$uriphp)php;

php php php php php php php php php$thisphp-php>php_transformListphp[php]php php=php arrayphp(php'uriphp'php php=php>php php$uriphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'classphp'php php=php>php php$classphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp listphp ofphp transformsphp tophp perform
php php php php php php*
php php php php php php*php php@returnphp arrayphp Thephp listphp ofphp transforms
php php php php php php*php/
php php php php publicphp functionphp getTransformListphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_transformListphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Applyphp thephp transformsphp inphp thephp transformphp listphp tophp thephp inputphp XMLphp document
php php php php php php*
php php php php php php*php php@paramphp stringphp php$strXmlDocumentphp Thephp inputphp XML
php php php php php php*php php@returnphp stringphp Thephp XMLphp afterphp thephp transformationsphp havephp beenphp applied
php php php php php php*php/
php php php php publicphp functionphp applyTransformsphp(php$strXmlDocumentphp)
php php php php php{
php php php php php php php php foreachphp(php$thisphp-php>php_transformListphp asphp php$transformphp)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$transformphp[php'classphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$transformphp[php'classphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$transformerphp php=php newphp php$transformphp[php'classphp'php]php;

php php php php php php php php php php php php php/php/php Wephp canphp'tphp reallyphp testphp thisphp checkphp becausephp itphp wouldphp requirephp logicphp changesphp inphp thephp componentphp itself
php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreStart
php php php php php php php php php php php php ifphp(php!php(php$transformerphp instanceofphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Transformphp_Interfacephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Securityphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Securityphp_Exceptionphp(php"Transformsphp mustphp implementphp thephp Transformphp Interfacephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreEnd

php php php php php php php php php php php php php$strXmlDocumentphp php=php php$transformerphp-php>transformphp(php$strXmlDocumentphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$strXmlDocumentphp;
php php php php php}
php}
