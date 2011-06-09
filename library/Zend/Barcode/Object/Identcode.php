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
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@subpackagephp Object
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Identcodephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Barcodephp_Objectphp_Codephp2php5interleaved
php php*php/
requirephp_oncephp php'Zendphp/Barcodephp/Objectphp/Codephp2php5interleavedphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Barcode
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Barcodephp.phpphp'php;

php/php*php*
php php*php Classphp forphp generatephp Identcodephp barcode
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Barcode
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Barcodephp_Objectphp_Identcodephp extendsphp Zendphp_Barcodephp_Objectphp_Codephp2php5interleaved
php{

php php php php php/php*php*
php php php php php php*php Defaultphp optionsphp forphp Identcodephp barcode
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_getDefaultOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_barcodeLengthphp php=php php1php2php;
php php php php php php php php php$thisphp-php>php_mandatoryChecksumphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp textphp tophp display
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTextToDisplayphp(php)
php php php php php{
php php php php php php php php returnphp pregphp_replacephp(php'php/php(php[php0php-php9php]php{php2php}php)php(php[php0php-php9php]php{php3php}php)php(php[php0php-php9php]php{php3php}php)php(php[php0php-php9php]php{php3php}php)php(php[php0php-php9php]php)php/php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php$php1php.php$php2php php$php3php.php$php4php php$php5php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>getTextphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp allowedphp characters
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php php@throwphp Zendphp_Barcodephp_Objectphp_Exception
php php php php php php*php/
php php php php publicphp functionphp validateTextphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validateTextphp(php$valuephp,php arrayphp(php'validatorphp'php php=php>php php$thisphp-php>getTypephp(php)php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp barcodephp checksum
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$text
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getChecksumphp(php$textphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkTextphp(php$textphp)php;
php php php php php php php php php$checksumphp php=php php0php;

php php php php php php php php forphp php(php$iphp php=php strlenphp(php$textphp)php;php php$iphp php>php php0php;php php$iphp php-php-php)php php{
php php php php php php php php php php php php php$checksumphp php+php=php intvalphp(php$textphp{php$iphp php-php php1php}php)php php*php php(php(php$iphp php%php php2php)php php?php php4php php:php php9php)php;
php php php php php php php php php}

php php php php php php php php php$checksumphp php=php php(php1php0php php-php php(php$checksumphp php%php php1php0php)php)php php%php php1php0php;

php php php php php php php php returnphp php$checksumphp;
php php php php php}
php}
