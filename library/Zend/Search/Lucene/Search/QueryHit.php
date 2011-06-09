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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php QueryHitphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryHit
php{
php php php php php/php*php*
php php php php php php*php Objectphp handlephp ofphp thephp index
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Interface
php php php php php php*php/
php php php php protectedphp php$php_indexphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Objectphp handlephp ofphp thephp documentphp associatedphp withphp thisphp hit
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Document
php php php php php php*php/
php php php php protectedphp php$php_documentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Numberphp ofphp thephp documentphp inphp thephp index
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$idphp;

php php php php php/php*php*
php php php php php php*php Scorephp ofphp thephp hit
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php publicphp php$scorephp;


php php php php php/php*php*
php php php php php php*php Constructorphp php-php passphp objectphp handlephp ofphp Zendphp_Searchphp_Lucenephp_Interfacephp indexphp thatphp produced
php php php php php php*php thephp hitphp sophp thephp documentphp canphp bephp retrievedphp easilyphp fromphp thephp hitphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php/

php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Proxyphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_indexphp php=php newphp Zendphp_Searchphp_Lucenephp_Proxyphp(php$indexphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Conveniencephp functionphp forphp gettingphp fieldsphp fromphp thephp document
php php php php php php*php associatedphp withphp thisphp hitphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$offset
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getDocumentphp(php)php-php>getFieldValuephp(php$offsetphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp thephp documentphp objectphp forphp thisphp hit
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Document
php php php php php php*php/
php php php php publicphp functionphp getDocumentphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_documentphp instanceofphp Zendphp_Searchphp_Lucenephp_Documentphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_documentphp php=php php$thisphp-php>php_indexphp-php>getDocumentphp(php$thisphp-php>idphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_documentphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp thephp indexphp objectphp forphp thisphp hit
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Interface
php php php php php php*php/
php php php php publicphp functionphp getIndexphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_indexphp;
php php php php php}
php}

