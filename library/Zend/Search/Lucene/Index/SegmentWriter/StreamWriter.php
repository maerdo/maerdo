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
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php StreamWriterphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentWriterphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Index
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriterphp_StreamWriterphp extendsphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentWriter
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directory
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Storagephp_Directoryphp php$directoryphp,php php$namephp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$directoryphp,php php$namephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Createphp storedphp fieldsphp filesphp andphp openphp themphp forphp write
php php php php php php*php/
php php php php publicphp functionphp createStoredFieldsFilesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_fdxFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.fdxphp'php)php;
php php php php php php php php php$thisphp-php>php_fdtFilephp php=php php$thisphp-php>php_directoryphp-php>createFilephp(php$thisphp-php>php_namephp php.php php'php.fdtphp'php)php;

php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.fdxphp'php;
php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$thisphp-php>php_namephp php.php php'php.fdtphp'php;
php php php php php}

php php php php publicphp functionphp addNormphp(php$fieldNamephp,php php$normVectorphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_normsphp[php$fieldNamephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fieldNamephp]php php.php=php php$normVectorphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_normsphp[php$fieldNamephp]php php=php php$normVectorphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp segmentphp,php writephp itphp tophp diskphp andphp returnphp segmentphp info
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfo
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_docCountphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dumpFNMphp(php)php;
php php php php php php php php php$thisphp-php>php_generateCFSphp(php)php;

php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/SegmentInfophp.phpphp'php;

php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Indexphp_SegmentInfophp(php$thisphp-php>php_directoryphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_docCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php truephp)php;
php php php php php}
php}

