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
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@subpackagephp Rsa
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Publicphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Rsaphp_Key
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Rsaphp/Keyphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp extendsphp Zendphp_Cryptphp_Rsaphp_Key
php{

php php php php protectedphp php$php_certificateStringphp php=php nullphp;

php php php php publicphp functionphp php_php_constructphp(php$stringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parsephp(php$stringphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$string
php php php php php php*php php@throwsphp Zendphp_Cryptphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parsephp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(pregphp_matchphp(php"php/php^php-php-php-php-php-BEGINphp CERTIFICATEphp-php-php-php-php-php/php"php,php php$stringphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_certificateStringphp php=php php$stringphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_pemStringphp php=php php$stringphp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php opensslphp_getphp_publickeyphp(php$stringphp)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Cryptphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Exceptionphp(php'Unablephp tophp loadphp publicphp keyphp'php)php;
php php php php php php php php php}
php php php php php php php php php/php/opensslphp_pkeyphp_exportphp(php$resultphp,php php$publicphp)php;
php php php php php php php php php/php/php$thisphp-php>php_pemStringphp php=php php$publicphp;
php php php php php php php php php$thisphp-php>php_opensslKeyResourcephp php=php php$resultphp;
php php php php php php php php php$thisphp-php>php_detailsphp php=php opensslphp_pkeyphp_getphp_detailsphp(php$thisphp-php>php_opensslKeyResourcephp)php;
php php php php php}

php php php php publicphp functionphp getCertificatephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_certificateStringphp;
php php php php php}

php}