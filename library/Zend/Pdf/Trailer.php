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
php php*php php@versionphp php php php php$Idphp:php Trailerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php PDFphp filephp trailer
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Pdfphp_Trailer
php{
php php php php privatephp staticphp php$php_allowedKeysphp php=php arrayphp(php'Sizephp'php,php php'Prevphp'php,php php'Rootphp'php,php php'Encryptphp'php,php php'Infophp'php,php php'IDphp'php,php php'Indexphp'php,php php'Wphp'php,php php'XRefStmphp'php,php php'DocChecksumphp'php)php;

php php php php php/php*php*
php php php php php php*php Trailerphp dictionaryphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Elementphp_Dictionary
php php php php php php*php/
php php php php privatephp php$php_dictphp;

php php php php php/php*php*
php php php php php php*php Checkphp ifphp keyphp isphp correct
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_checkDictKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php php!inphp_arrayphp(php$keyphp,php selfphp:php:php$php_allowedKeysphp)php php)php php{
php php php php php php php php php php php php php/php*php*php php@todophp Makephp warningphp php(logphp entryphp)php insteadphp ofphp anphp exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Unknownphp trailerphp dictionaryphp keyphp:php php'php$keyphp'php.php"php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dict
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dictphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dictphp php php php=php php$dictphp;

php php php php php php php php foreachphp php(php$thisphp-php>php_dictphp-php>getKeysphp(php)php asphp php$dictKeyphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_checkDictKeyphp(php$dictKeyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$propertyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dictphp-php>php$propertyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp handler
php php php php php php*
php php php php php php*php php@paramphp stringphp php$property
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$propertyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkDictKeyphp(php$propertyphp)php;
php php php php php php php php php$thisphp-php>php_dictphp-php>php$propertyphp php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp stringphp trailerphp representation
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php"trailerphp\nphp"php php.php php$thisphp-php>php_dictphp-php>toStringphp(php)php php.php php"php\nphp"php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp lengthphp ofphp sourcephp PDF
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp getPDFLengthphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp PDFphp String
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp getPDFStringphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp headerphp ofphp freephp objectsphp list
php php php php php php*php Returnsphp objectphp numberphp ofphp lastphp freephp object
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php abstractphp publicphp functionphp getLastFreeObjectphp(php)php;
php}
