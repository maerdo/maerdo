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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Doctypephp.phpphp php2php3php5php3php9php php2php0php1php0php-php1php2php-php1php7php php2php3php:php5php0php:php1php4Zphp gammamatrixphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Registryphp php*php/
requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp settingphp andphp retrievingphp thephp doctype
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Doctypephp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*php#php@php+
php php php php php php*php DocTypephp constants
php php php php php php*php/
php php php php constphp XHTMLphp1php1php php php php php php php php php php php php php php=php php'XHTMLphp1php1php'php;
php php php php constphp XHTMLphp1php_STRICTphp php php php php php php php=php php'XHTMLphp1php_STRICTphp'php;
php php php php constphp XHTMLphp1php_TRANSITIONALphp php=php php'XHTMLphp1php_TRANSITIONALphp'php;
php php php php constphp XHTMLphp1php_FRAMESETphp php php php php php=php php'XHTMLphp1php_FRAMESETphp'php;
php php php php constphp XHTMLphp1php_RDFAphp php php php php php php php php php=php php'XHTMLphp1php_RDFAphp'php;
php php php php constphp XHTMLphp_BASICphp1php php php php php php php php php=php php'XHTMLphp_BASICphp1php'php;
php php php php constphp XHTMLphp5php php php php php php php php php php php php php php php=php php'XHTMLphp5php'php;
php php php php constphp HTMLphp4php_STRICTphp php php php php php php php php=php php'HTMLphp4php_STRICTphp'php;
php php php php constphp HTMLphp4php_LOOSEphp php php php php php php php php php=php php'HTMLphp4php_LOOSEphp'php;
php php php php constphp HTMLphp4php_FRAMESETphp php php php php php php=php php'HTMLphp4php_FRAMESETphp'php;
php php php php constphp HTMLphp5php php php php php php php php php php php php php php php php=php php'HTMLphp5php'php;
php php php php constphp CUSTOMphp_XHTMLphp php php php php php php php php=php php'CUSTOMphp_XHTMLphp'php;
php php php php constphp CUSTOMphp php php php php php php php php php php php php php php=php php'CUSTOMphp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Defaultphp DocType
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultDoctypephp php=php selfphp:php:HTMLphp4php_LOOSEphp;

php php php php php/php*php*
php php php php php php*php Registryphp containingphp currentphp doctypephp andphp mappings
php php php php php php*php php@varphp ArrayObject
php php php php php php*php/
php php php php protectedphp php$php_registryphp;

php php php php php/php*php*
php php php php php php*php Registryphp keyphp inphp whichphp helperphp isphp stored
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_regKeyphp php=php php'Zendphp_Viewphp_Helperphp_Doctypephp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php Mapphp constantsphp tophp doctypephp stringsphp,php andphp setphp defaultphp doctype
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Registryphp:php:isRegisteredphp(php$thisphp-php>php_regKeyphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp php=php newphp ArrayObjectphp(arrayphp(
php php php php php php php php php php php php php php php php php'doctypesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp1php1php php php php php php php php php php php php php php=php>php php'<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp php1php.php1php/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp1php1php/DTDphp/xhtmlphp1php1php.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp1php_STRICTphp php php php php php php php=php>php php'<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp php1php.php0php Strictphp/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp1php/DTDphp/xhtmlphp1php-strictphp.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp1php_TRANSITIONALphp php=php>php php'<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp php1php.php0php Transitionalphp/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp1php/DTDphp/xhtmlphp1php-transitionalphp.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp1php_FRAMESETphp php php php php php=php>php php'<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp php1php.php0php Framesetphp/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp1php/DTDphp/xhtmlphp1php-framesetphp.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp1php_RDFAphp php php php php php php php php php=php>php php'<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp+RDFaphp php1php.php0php/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/MarkUpphp/DTDphp/xhtmlphp-rdfaphp-php1php.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp_BASICphp1php php php php php php php php php=php>php php'<php!DOCTYPEphp htmlphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp XHTMLphp Basicphp php1php.php0php/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/xhtmlphp-basicphp/xhtmlphp-basicphp1php0php.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:XHTMLphp5php php php php php php php php php php php php php php php=php>php php'<php!DOCTYPEphp htmlphp>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:HTMLphp4php_STRICTphp php php php php php php php php=php>php php'<php!DOCTYPEphp HTMLphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp HTMLphp php4php.php0php1php/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/htmlphp4php/strictphp.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:HTMLphp4php_LOOSEphp php php php php php php php php php=php>php php'<php!DOCTYPEphp HTMLphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp HTMLphp php4php.php0php1php Transitionalphp/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/htmlphp4php/loosephp.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:HTMLphp4php_FRAMESETphp php php php php php php=php>php php'<php!DOCTYPEphp HTMLphp PUBLICphp php"php-php/php/Wphp3Cphp/php/DTDphp HTMLphp php4php.php0php1php Framesetphp/php/ENphp"php php"httpphp:php/php/wwwphp.wphp3php.orgphp/TRphp/htmlphp4php/framesetphp.dtdphp"php>php'php,
php php php php php php php php php php php php php php php php php php php php selfphp:php:HTMLphp5php php php php php php php php php php php php php php php php=php>php php'<php!DOCTYPEphp htmlphp>php'php,
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php Zendphp_Registryphp:php:setphp(php$thisphp-php>php_regKeyphp,php php$thisphp-php>php_registryphp)php;
php php php php php php php php php php php php php$thisphp-php>setDoctypephp(php$thisphp-php>php_defaultDoctypephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_registryphp php=php Zendphp_Registryphp:php:getphp(php$thisphp-php>php_regKeyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp orphp retrievephp doctype
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$doctype
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Doctype
php php php php php php*php/
php php php php publicphp functionphp doctypephp(php$doctypephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$doctypephp)php php{
php php php php php php php php php php php php switchphp php(php$doctypephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp1php1php:
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp1php_STRICTphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp1php_TRANSITIONALphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp1php_FRAMESETphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp_BASICphp1php:
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp1php_RDFAphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:XHTMLphp5php:
php php php php php php php php php php php php php php php php casephp selfphp:php:HTMLphp4php_STRICTphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:HTMLphp4php_LOOSEphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:HTMLphp4php_FRAMESETphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:HTMLphp5php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setDoctypephp(php$doctypephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(substrphp(php$doctypephp,php php0php,php php9php)php php!php=php php'<php!DOCTYPEphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Thephp specifiedphp doctypephp isphp malformedphp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(stristrphp(php$doctypephp,php php'xhtmlphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:CUSTOMphp_XHTMLphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:CUSTOMphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setDoctypephp(php$typephp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_registryphp[php'doctypesphp'php]php[php$typephp]php php=php php$doctypephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp doctype
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$doctype
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Doctype
php php php php php php*php/
php php php php publicphp functionphp setDoctypephp(php$doctypephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp[php'doctypephp'php]php php=php php$doctypephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp doctype
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDoctypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryphp[php'doctypephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp doctypephp php=php>php stringphp mappings
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDoctypesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_registryphp[php'doctypesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp doctypephp XHTMLphp?
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isXhtmlphp(php)
php php php php php{
php php php php php php php php returnphp php(stristrphp(php$thisphp-php>getDoctypephp(php)php,php php'xhtmlphp'php)php php?php truephp php:php falsephp)php;
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Isphp doctypephp HTMLphp5php?php php(HeadMetaphp usesphp thisphp forphp validationphp)
php php php php php php*
php php php php php php*php php@returnphp booleean
php php php php php php*php/
php php php php publicphp functionphp isHtmlphp5php(php)php php{
php php php php php php php php returnphp php(stristrphp(php$thisphp-php>doctypephp(php)php,php php'<php!DOCTYPEphp htmlphp>php'php)php php?php truephp php:php falsephp)php;
php php php php php}
php php php php 
php php php php php/php*php*
php php php php php php*php Isphp doctypephp RDFaphp?
php php php php php php*
php php php php php php*php php@returnphp booleean
php php php php php php*php/
php php php php publicphp functionphp isRdfaphp(php)php php{
php php php php php php php php returnphp php(stristrphp(php$thisphp-php>getDoctypephp(php)php,php php'rdfaphp'php)php php?php truephp php:php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Stringphp representationphp ofphp doctype
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php$doctypesphp php=php php$thisphp-php>getDoctypesphp(php)php;
php php php php php php php php returnphp php$doctypesphp[php$thisphp-php>getDoctypephp(php)php]php;
php php php php php}
php}
