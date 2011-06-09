<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Adapterphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Documentphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/DocumentSetphp.phpphp'php;
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Queryphp.phpphp'php;

php/php*php*
php php*php Abstractphp documentphp servicephp adapter
php php*
php php*php Providesphp functionalityphp surroundingphp settingphp classesphp forphp eachphp ofphp:
php php*php php-php documentphp objects
php php*php php-php documentphp setphp objects
php php*php php-php queryphp classphp objects
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_AbstractAdapter
php php php php implementsphp Zendphp_Cloudphp_DocumentServicephp_Adapter
php{
php php php php constphp DOCUMENTphp_CLASSphp php php php php=php php'documentphp_classphp'php;
php php php php constphp DOCUMENTSETphp_CLASSphp php=php php'documentsetphp_classphp'php;
php php php php constphp QUERYphp_CLASSphp php php php php php php php=php php'queryphp_classphp'php;

php php php php php/php*php*
php php php php php php*php Classphp tophp utilizephp forphp newphp documentphp objects
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_documentClassphp php=php php'Zendphp_Cloudphp_DocumentServicephp_Documentphp'php;

php php php php php/php*php*
php php php php php php*php Classphp tophp utilizephp forphp newphp documentphp setphp objects
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_documentSetClassphp php=php php'Zendphp_Cloudphp_DocumentServicephp_DocumentSetphp'php;

php php php php php/php*php*
php php php php php php*php Classphp tophp utilizephp forphp newphp queryphp objects
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_queryClassphp php=php php'Zendphp_Cloudphp_DocumentServicephp_Queryphp'php;

php php php php php/php*php*
php php php php php php*php Setphp thephp classphp forphp documentphp objects
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_AbstractAdapter
php php php php php php*php/
php php php php publicphp functionphp setDocumentClassphp(php$classphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_documentClassphp php=php php(stringphp)php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp classphp forphp documentphp objects
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDocumentClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_documentClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp classphp forphp documentphp setphp objects
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_AbstractAdapter
php php php php php php*php/
php php php php publicphp functionphp setDocumentSetClassphp(php$classphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_documentSetClassphp php=php php(stringphp)php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp classphp forphp documentphp setphp objects
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDocumentSetClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_documentSetClassphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp queryphp classphp forphp queryphp objects
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$class
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_AbstractAdapter
php php php php php php*php/
php php php php publicphp functionphp setQueryClassphp(php$classphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_queryClassphp php=php php(stringphp)php php$classphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp classphp forphp queryphp objects
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getQueryClassphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_queryClassphp;
php php php php php}
php}
