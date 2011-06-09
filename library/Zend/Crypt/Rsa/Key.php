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
php php*php php@versionphp php php php php$Idphp:php Keyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Rsaphp_Keyphp implementsphp Countable
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_pemStringphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Bitsphp,php keyphp stringphp andphp typephp ofphp key
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_detailsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Keyphp Resource
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_opensslKeyResourcephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Retrievesphp keyphp resource
php php php php php php*
php php php php php php*php php@returnphp resource
php php php php php php*php/
php php php php publicphp functionphp getOpensslKeyResourcephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_opensslKeyResourcephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Cryptphp_Exception
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_pemStringphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_pemStringphp;
php php php php php php php php php}php elseifphp php(php!emptyphp(php$thisphp-php>php_certificateStringphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_certificateStringphp;
php php php php php php php php php}
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Cryptphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Cryptphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Cryptphp_Exceptionphp(php'Nophp publicphp keyphp stringphp representationphp isphp availablephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_detailsphp[php'bitsphp'php]php;
php php php php php}

php php php php publicphp functionphp getTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_detailsphp[php'typephp'php]php;
php php php php php}
php}