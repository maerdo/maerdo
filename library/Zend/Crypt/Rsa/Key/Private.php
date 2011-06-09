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
php php*php php@versionphp php php php php$Idphp:php Privatephp.phpphp php2php2php6php6php2php php2php0php1php0php-php0php7php-php2php4php php1php7php:php3php7php:php3php6Zphp mabephp php$
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
classphp Zendphp_Cryptphp_Rsaphp_Keyphp_Privatephp extendsphp Zendphp_Cryptphp_Rsaphp_Key
php{

php php php php protectedphp php$php_publicKeyphp php=php nullphp;

php php php php publicphp functionphp php_php_constructphp(php$pemStringphp,php php$passPhrasephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_pemStringphp php=php php$pemStringphp;
php php php php php php php php php$thisphp-php>php_parsephp(php$passPhrasephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$passPhrase
php php php php php php*php php@throwsphp Zendphp_Cryptphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_parsephp(php$passPhrasephp)
php php php php php{
php php php php php php php php php$resultphp php=php opensslphp_getphp_privatekeyphp(php$thisphp-php>php_pemStringphp,php php$passPhrasephp)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Cryptphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Cryptphp_Exceptionphp(php'Unablephp tophp loadphp privatephp keyphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_opensslKeyResourcephp php=php php$resultphp;
php php php php php php php php php$thisphp-php>php_detailsphp php=php opensslphp_pkeyphp_getphp_detailsphp(php$thisphp-php>php_opensslKeyResourcephp)php;
php php php php php}

php php php php publicphp functionphp getPublicKeyphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_publicKeyphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Cryptphp_Rsaphp_Keyphp_Public
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Rsaphp/Keyphp/Publicphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_publicKeyphp php=php newphp Zendphp_Cryptphp_Rsaphp_Keyphp_Publicphp(php$thisphp-php>php_detailsphp[php'keyphp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_publicKeyphp;
php php php php php}

php}