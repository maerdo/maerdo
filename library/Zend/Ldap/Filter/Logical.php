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
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Logicalphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Filterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Abstractphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Ldapphp_Filterphp_String
php php*php/
requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Stringphp.phpphp'php;

php/php*php*
php php*php Zendphp_Ldapphp_Filterphp_Logicalphp providesphp aphp basephp implementationphp forphp aphp groupingphp filterphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Ldap
php php*php php@subpackagephp Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Ldapphp_Filterphp_Logicalphp extendsphp Zendphp_Ldapphp_Filterphp_Abstract
php{
php php php php constphp TYPEphp_ANDphp php=php php'php&php'php;
php php php php constphp TYPEphp_ORphp php php=php php'php|php'php;

php php php php php/php*php*
php php php php php php*php Allphp thephp subphp-filtersphp forphp thisphp groupingphp filterphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_subfiltersphp;

php php php php php/php*php*
php php php php php php*php Thephp groupingphp symbolphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_symbolphp;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp groupingphp filterphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php php$subfilters
php php php php php php*php php@paramphp stringphp php$symbol
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(arrayphp php$subfiltersphp,php php$symbolphp)
php php php php php{
php php php php php php php php foreachphp php(php$subfiltersphp asphp php$keyphp php=php>php php$sphp)php php{
php php php php php php php php php php php php ifphp php(isphp_stringphp(php$sphp)php)php php$subfiltersphp[php$keyphp]php php=php newphp Zendphp_Ldapphp_Filterphp_Stringphp(php$sphp)php;
php php php php php php php php php php php php elsephp ifphp php(php!php(php$sphp instanceofphp Zendphp_Ldapphp_Filterphp_Abstractphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Ldapphp_Filterphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Ldapphp/Filterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Ldapphp_Filterphp_Exceptionphp(php'Onlyphp stringsphp orphp Zendphp_Ldapphp_Filterphp_Abstractphp allowedphp.php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_subfiltersphp php=php php$subfiltersphp;
php php php php php php php php php$thisphp-php>php_symbolphp php=php php$symbolphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp filterphp tophp thisphp groupingphp filterphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Ldapphp_Filterphp_Abstractphp php$filter
php php php php php php*php php@returnphp Zendphp_Ldapphp_Filterphp_Logical
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(Zendphp_Ldapphp_Filterphp_Abstractphp php$filterphp)
php php php php php{
php php php php php php php php php$newphp php=php clonephp php$thisphp;
php php php php php php php php php$newphp-php>php_subfiltersphp[php]php php=php php$filterphp;
php php php php php php php php returnphp php$newphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representationphp ofphp thephp filterphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php php$returnphp php=php php'php(php'php php.php php$thisphp-php>php_symbolphp;
php php php php php php php php foreachphp php(php$thisphp-php>php_subfiltersphp asphp php$subphp)php php$returnphp php.php=php php$subphp-php>toStringphp(php)php;
php php php php php php php php php$returnphp php.php=php php'php)php'php;
php php php php php php php php returnphp php$returnphp;
php php php php php}
php}