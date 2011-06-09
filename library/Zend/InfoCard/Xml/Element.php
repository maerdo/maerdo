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
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Elementphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Xmlphp_Elementphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Elementphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Anphp abstractphp classphp representingphp aphp anphp XMLphp dataphp block
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Zendphp_InfoCardphp_Xml
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_InfoCardphp_Xmlphp_Element
php php php php extendsphp SimpleXMLElement
php php php php implementsphp Zendphp_InfoCardphp_Xmlphp_Elementphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Convertphp thephp objectphp tophp aphp stringphp byphp displayingphp itsphp XMLphp content
php php php php php php*
php php php php php php*php php@returnphp stringphp anphp XMLphp representationphp ofphp thephp object
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>asXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp anphp XMLphp Elementphp objectphp intophp aphp DOMphp object
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@paramphp Zendphp_InfoCardphp_Xmlphp_Elementphp php$ephp Thephp objectphp tophp convert
php php php php php php*php php@returnphp DOMElementphp Aphp DOMElementphp representationphp ofphp thephp samephp object
php php php php php php*php/
php php php php staticphp publicphp functionphp convertToDOMphp(Zendphp_InfoCardphp_Xmlphp_Elementphp php$ephp)
php php php php php{
php php php php php php php php php$domphp php=php domphp_importphp_simplexmlphp(php$ephp)php;

php php php php php php php php ifphp(php!php(php$domphp instanceofphp DOMElementphp)php)php php{
php php php php php php php php php php php php php/php/php Zendphp_InfoCardphp_Xmlphp_Elementphp exntesphp SimpleXMLElementphp,php sophp thisphp shouldphp php*neverphp*php fail
php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreStart
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Failedphp tophp convertphp betweenphp SimpleXMLphp andphp DOMphp"php)php;
php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreEnd
php php php php php php php php php}

php php php php php php php php returnphp php$domphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Convertsphp aphp DOMElementphp objectphp intophp thephp specificphp class
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_InfoCardphp_Xmlphp_Exception
php php php php php php*php php@paramphp DOMElementphp php$ephp Thephp DOMElementphp objectphp tophp convert
php php php php php php*php php@paramphp stringphp php$classnamephp Thephp namephp ofphp thephp classphp tophp convertphp itphp tophp php(mustphp inhertphp fromphp Zendphp_InfoCardphp_Xmlphp_Elementphp)
php php php php php php*php php@returnphp Zendphp_InfoCardphp_Xmlphp_Elementphp aphp Xmlphp Elementphp objectphp fromphp thephp DOMphp element
php php php php php php*php/
php php php php staticphp publicphp functionphp convertToObjectphp(DOMElementphp php$ephp,php php$classnamephp)
php php php php php{
php php php php php php php php ifphp php(php!classphp_existsphp(php$classnamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$classnamephp)php;
php php php php php php php php php}

php php php php php php php php php$reflectionphp php=php newphp ReflectionClassphp(php$classnamephp)php;

php php php php php php php php ifphp(php!php$reflectionphp-php>isSubclassOfphp(php'Zendphp_InfoCardphp_Xmlphp_Elementphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"DOMphp elementphp mustphp bephp convertedphp tophp anphp instancephp ofphp Zendphp_InfoCardphp_Xmlphp_Elementphp"php)php;
php php php php php php php php php}

php php php php php php php php php$sxephp php=php simplexmlphp_importphp_domphp(php$ephp,php php$classnamephp)php;

php php php php php php php php ifphp(php!php(php$sxephp instanceofphp Zendphp_InfoCardphp_Xmlphp_Elementphp)php)php php{
php php php php php php php php php php php php php/php/php Sincephp wephp justphp checkedphp tophp seephp ifphp thisphp wasphp aphp subclassphp ofphp Zendphp_infoCardphp_Xmlphp_Elementphp thisphp shoudlphp neverphp fail
php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreStart
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/InfoCardphp/Xmlphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_InfoCardphp_Xmlphp_Exceptionphp(php"Failedphp tophp convertphp betweenphp DOMphp andphp SimpleXMLphp"php)php;
php php php php php php php php php php php php php/php/php php@codeCoverageIgnoreEnd
php php php php php php php php php}

php php php php php php php php returnphp php$sxephp;
php php php php php}
php}
