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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Responsephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp decoratesphp aphp SimpleXMLElementphp parsedphp fromphp aphp Nirvanixphp webphp service
php php*php responsephp.php php Itphp isphp primarilyphp existsphp tophp providephp aphp conveniencephp featurephp that
php php*php throwsphp anphp exceptionphp whenphp php<ResponseCodephp>php containsphp anphp errorphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Nirvanix
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Nirvanixphp_Response
php{
php php php php php/php*php*
php php php php php php*php SimpleXMLElementphp parsedphp fromphp Nirvanixphp webphp servicephp responsephp.
php php php php php php*
php php php php php php*php php@varphp SimpleXMLElement
php php php php php php*php/
php php php php protectedphp php$php_sxmlphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Parsephp thephp XMLphp responsephp fromphp aphp Nirvanixphp method
php php php php php php*php callphp intophp aphp decoratedphp SimpleXMLElementphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$xmlphp php XMLphp responsephp stringphp fromphp Nirvanix
php php php php php php*php php@throwsphp Zendphp_Servicephp_Nirvanixphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$xmlphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sxmlphp php=php php@simplexmlphp_loadphp_stringphp(php$xmlphp)php;

php php php php php php php php ifphp php(php!php php$thisphp-php>php_sxmlphp instanceofphp SimpleXMLElementphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwExceptionphp(php"XMLphp couldphp notphp bephp parsedphp fromphp responsephp:php php$xmlphp"php)php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php php$thisphp-php>php_sxmlphp-php>getNamephp(php)php;
php php php php php php php php ifphp php(php$namephp php!php=php php'Responsephp'php)php php{
php php php php php php php php php php php php php$thisphp-php>php_throwExceptionphp(php"Expectedphp XMLphp elementphp Responsephp,php gotphp php$namephp"php)php;
php php php php php php php php php}

php php php php php php php php php$codephp php=php php(intphp)php$thisphp-php>php_sxmlphp-php>ResponseCodephp;
php php php php php php php php ifphp php(php$codephp php!php=php php0php)php php{
php php php php php php php php php php php php php$msgphp php=php php(stringphp)php$thisphp-php>php_sxmlphp-php>ErrorMessagephp;
php php php php php php php php php php php php php$thisphp-php>php_throwExceptionphp(php$msgphp,php php$codephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp SimpleXMLElementphp representingphp thisphp response
php php php php php php*php forphp directphp accessphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp getSxmlphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sxmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Delegatephp undefinedphp propertiesphp tophp thephp decoratedphp SimpleXMLElementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$offsetphp php Undefinedphp propertyphp name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sxmlphp-php>php$offsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Delegatephp undefinedphp methodsphp tophp thephp decoratedphp SimpleXMLElementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$offsetphp php Underfinedphp methodphp name
php php php php php php*php php@paramphp php arrayphp php php php$argsphp php php php Methodphp arguments
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_sxmlphp,php php$methodphp)php,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwphp anphp exceptionphp.php php Thisphp methodphp existsphp tophp onlyphp containphp the
php php php php php php*php lazyphp-requirephp(php)php ofphp thephp exceptionphp classphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php$messagephp php Errorphp message
php php php php php php*php php@paramphp php integerphp php php$codephp php php php php Errorphp code
php php php php php php*php php@throwsphp Zendphp_Servicephp_Nirvanixphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_throwExceptionphp(php$messagephp,php php$codephp php=php nullphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Nirvanixphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Nirvanixphp/Exceptionphp.phpphp'php;

php php php php php php php php throwphp newphp Zendphp_Servicephp_Nirvanixphp_Exceptionphp(php$messagephp,php php$codephp)php;
php php php php php}

php}
