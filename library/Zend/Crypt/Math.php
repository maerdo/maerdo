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
php php*php php@subpackagephp Math
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mathphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Mathphp_BigInteger
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Mathphp/BigIntegerphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Crypt
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cryptphp_Mathphp extendsphp Zendphp_Cryptphp_Mathphp_BigInteger
php{

php php php php php/php*php*
php php php php php php*php Generatephp aphp pseudorandomphp numberphp withinphp thephp givenphp rangephp.
php php php php php php*php Willphp attemptphp tophp readphp fromphp aphp systemsphp RNGphp ifphp itphp existsphp orphp elsephp utilises
php php php php php php*php aphp simplephp randomphp characterphp tophp maximumphp lengthphp processphp.php Simplicity
php php php php php php*php isphp aphp factorphp betterphp leftphp forphp developmentphp.php.php.
php php php php php php*
php php php php php php*php php@paramphp stringphp|intphp php$minimum
php php php php php php*php php@paramphp stringphp|intphp php$maximum
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp randphp(php$minimumphp,php php$maximumphp)
php php php php php{
php php php php php php php php ifphp php(filephp_existsphp(php'php/devphp/urandomphp'php)php)php php{
php php php php php php php php php php php php php$frandomphp php=php fopenphp(php'php/devphp/urandomphp'php,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php$frandomphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp freadphp(php$frandomphp,php strlenphp(php$maximumphp)php php-php php1php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(strlenphp(php$maximumphp)php <php php4php)php php{
php php php php php php php php php php php php returnphp mtphp_randphp(php$minimumphp,php php$maximumphp php-php php1php)php;
php php php php php php php php php}
php php php php php php php php php$randphp php=php php'php'php;
php php php php php php php php php$iphp2php php=php strlenphp(php$maximumphp)php php-php php1php;
php php php php php php php php forphp php(php$iphp php=php php1php;php$iphp <php php$iphp2php;php$iphp+php+php)php php{
php php php php php php php php php php php php php$randphp php.php=php mtphp_randphp(php0php,php9php)php;
php php php php php php php php php}
php php php php php php php php php$randphp php.php=php mtphp_randphp(php0php,php9php)php;
php php php php php php php php returnphp php$randphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp bigphp endianphp twophp'sphp complementphp ofphp aphp givenphp bigphp integerphp in
php php php php php php*php binaryphp notation
php php php php php php*
php php php php php php*php php@paramphp stringphp php$long
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp btwocphp(php$longphp)php php{
php php php php php php php php ifphp php(ordphp(php$longphp[php0php]php)php php>php php1php2php7php)php php{
php php php php php php php php php php php php returnphp php"php\xphp0php0php"php php.php php$longphp;
php php php php php php php php php}
php php php php php php php php returnphp php$longphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp aphp binaryphp formphp intophp aphp bigphp integerphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$binary
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp fromBinaryphp(php$binaryphp)php php{
php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>binaryToIntegerphp(php$binaryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp aphp bigphp integerphp stringphp intophp aphp binaryphp form
php php php php php php*
php php php php php php*php php@paramphp stringphp php$integer
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toBinaryphp(php$integerphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_mathphp-php>integerToBinaryphp(php$integerphp)php;
php php php php php}

php}
