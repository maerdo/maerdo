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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Keeperphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Pdfphp_Trailerphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Trailerphp.phpphp'php;

php/php*php*
php php*php PDFphp filephp trailerphp.
php php*php Storesphp andphp providesphp accessphp tophp thephp trailerphp parcedphp fromphp aphp PDFphp file
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Trailerphp_Keeperphp extendsphp Zendphp_Pdfphp_Trailer
php{
php php php php php/php*php*
php php php php php php*php Referencephp context
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Referencephp_Context
php php php php php php*php/
php php php php privatephp php$php_contextphp;

php php php php php/php*php*
php php php php php php*php Previousphp trailer
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Trailer
php php php php php php*php/
php php php php privatephp php$php_prevphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dict
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$context
php php php php php php*php php@paramphp Zendphp_Pdfphp_Trailerphp php$prev
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dictphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Elementphp_Referencephp_Contextphp php$contextphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Trailerphp php$prevphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dictphp)php;

php php php php php php php php php$thisphp-php>php_contextphp php=php php$contextphp;
php php php php php php php php php$thisphp-php>php_prevphp php php php php=php php$prevphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp php$thisphp-php>php_prev
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Trailerphp_Keeperphp php$prev
php php php php php php*php/
php php php php publicphp functionphp setPrevphp(Zendphp_Pdfphp_Trailerphp_Keeperphp php$prevphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_prevphp php=php php$prevphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp php$thisphp-php>php_prev
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Trailer
php php php php php php*php/
php php php php publicphp functionphp getPrevphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_prevphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp lengthphp ofphp sourcephp PDF
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPDFLengthphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextphp-php>getParserphp(php)php-php>getLengthphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp PDFphp String
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPDFStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextphp-php>getParserphp(php)php-php>getStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp referencephp tablephp,php whichphp correspondsphp tophp thephp trailerphp.
php php php php php php*php Proxyphp tophp thephp php$php_contextphp memberphp methadphp call
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Elementphp_Referencephp_Context
php php php php php php*php/
php php php php publicphp functionphp getRefTablephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_contextphp-php>getRefTablephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp headerphp ofphp freephp objectsphp list
php php php php php php*php Returnsphp objectphp numberphp ofphp lastphp freephp object
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getLastFreeObjectphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_contextphp-php>getRefTablephp(php)php-php>getNextFreephp(php'php0php php6php5php5php3php5php Rphp'php)php;
php php php php php php php php php}php catchphp php(Zendphp_Pdfphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(php$ephp-php>getMessagephp(php)php php=php=php php'Objectphp notphp foundphp.php'php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php Herephp isphp workphp aroundphp forphp somephp wrongphp generatedphp PDFsphp.
php php php php php php php php php php php php php php php php php php*php Wephp havephp notphp foundphp referencephp tophp thephp headerphp ofphp freephp objectphp listphp,
php php php php php php php php php php php php php php php php php php*php thusphp wephp treatphp itphp asphp therephp arephp nophp freephp objectsphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php}
php php php php php}
php}
