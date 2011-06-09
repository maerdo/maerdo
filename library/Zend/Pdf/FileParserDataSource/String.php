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
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Stringphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Pdfphp_FileParserDataSourcephp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/FileParserDataSourcephp.phpphp'php;

php/php*php*
php php*php Concretephp subclassphp ofphp php{php@linkphp Zendphp_Pdfphp_FileParserDataSourcephp}php thatphp providesphp an
php php*php interfacephp tophp binaryphp stringsphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp FileParser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_FileParserDataSourcephp_Stringphp extendsphp Zendphp_Pdfphp_FileParserDataSource
php{
php php php/php*php*php*php*php Instancephp Variablesphp php*php*php*php*php/


php php php php php/php*php*
php php php php php php*php Thephp stringphp tophp parsephp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_stringphp php=php php'php'php;



php php php/php*php*php*php*php Publicphp Interfacephp php*php*php*php*php/


php php php/php*php Concretephp Classphp Implementationphp php*php/

php php php php php/php*php*
php php php php php php*php Objectphp constructorphp.
php php php php php php*
php php php php php php*php Verifiesphp thatphp thephp stringphp isphp notphp emptyphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$stringphp Stringphp tophp parsephp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$stringphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Stringphp isphp emptyphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:PARAMETERphp_VALUEphp_OUTphp_OFphp_RANGEphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_sizephp php=php strlenphp(php$stringphp)php;
php php php php php php php php php$thisphp-php>php_stringphp php=php php$stringphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp destructorphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_stringphp php=php php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp specifiedphp numberphp ofphp rawphp bytesphp fromphp thephp stringphp atphp thephp byte
php php php php php php*php offsetphp ofphp thephp currentphp readphp positionphp.
php php php php php php*
php php php php php php*php Advancesphp thephp readphp positionphp byphp thephp numberphp ofphp bytesphp readphp.
php php php php php php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp therephp isphp insufficientphp dataphp tophp completelyphp fulfill
php php php php php php*php thephp requestphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$byteCountphp Numberphp ofphp bytesphp tophp readphp.
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp readBytesphp(php$byteCountphp)
php php php php php{
php php php php php php php php ifphp php(php(php$thisphp-php>php_offsetphp php+php php$byteCountphp)php php>php php$thisphp-php>php_sizephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php"Insufficientphp dataphp tophp readphp php$byteCountphp bytesphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Pdfphp_Exceptionphp:php:INSUFFICIENTphp_DATAphp)php;
php php php php php php php php php}
php php php php php php php php php$bytesphp php=php substrphp(php$thisphp-php>php_stringphp,php php$thisphp-php>php_offsetphp,php php$byteCountphp)php;
php php php php php php php php php$thisphp-php>php_offsetphp php+php=php php$byteCountphp;
php php php php php php php php returnphp php$bytesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp entirephp stringphp.
php php php php php php*
php php php php php php*php Preservesphp thephp currentphp readphp positionphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp readAllBytesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_stringphp;
php php php php php}


php php php/php*php Objectphp Magicphp Methodsphp php*php/

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp containingphp thephp parsedphp stringphp'sphp lengthphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php"Stringphp php(php$thisphp-php>php_sizephp bytesphp)php"php;
php php php php php}
php}
