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
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TraitsInfophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_Amfphp_Valuephp_TraitsInfo
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Valuephp_TraitsInfo
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Classphp name
php php php php php php*php/
php php php php protectedphp php$php_classNamephp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp thisphp isphp aphp dynamicphp class
php php php php php php*php/
php php php php protectedphp php$php_dynamicphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp thephp classphp isphp externalizable
php php php php php php*php/
php php php php protectedphp php$php_externalizablephp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Classphp properties
php php php php php php*php/
php php php php protectedphp php$php_propertiesphp;

php php php php php/php*php*
php php php php php php*php Usedphp tophp keepphp trackphp ofphp allphp classphp traitsphp ofphp anphp AMFphp3php object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$className
php php php php php php*php php@paramphp php booleanphp php$dynamic
php php php php php php*php php@paramphp php booleanphp php$externalizable
php php php php php php*php php@paramphp php booleanphp php$properties
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$classNamephp,php php$dynamicphp=falsephp,php php$externalizablephp=falsephp,php php$propertiesphp=nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_classNamephp php php php php php php=php php$classNamephp;
php php php php php php php php php$thisphp-php>php_dynamicphp php php php php php php php php=php php$dynamicphp;
php php php php php php php php php$thisphp-php>php_externalizablephp php=php php$externalizablephp;
php php php php php php php php php$thisphp-php>php_propertiesphp php php php php php=php php$propertiesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp thephp classphp isphp aphp dynamicphp class
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isDynamicphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dynamicphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp classphp isphp externalizable
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isExternalizablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_externalizablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp numberphp ofphp propertiesphp inphp thephp class
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp lengthphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_propertiesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp classphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getClassNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_classNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp additionalphp property
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_TraitsInfo
php php php php php php*php/
php php php php publicphp functionphp addPropertyphp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_propertiesphp[php]php php=php php$namephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp allphp propertiesphp ofphp thephp classphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$props
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_TraitsInfo
php php php php php php*php/
php php php php publicphp functionphp addAllPropertiesphp(arrayphp php$propsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_propertiesphp php=php php$propsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp propertyphp atphp aphp givenphp index
php php php php php php*
php php php php php php*php php@paramphp php intphp php$index
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPropertyphp(php$indexphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_propertiesphp[php(intphp)php php$indexphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp allphp propertiesphp ofphp thephp classphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAllPropertiesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_propertiesphp;
php php php php php}
php}
