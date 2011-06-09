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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Issnphp.phpphp php2php0php7php8php5php php2php0php1php0php-php0php1php-php3php1php php0php9php:php4php3php:php0php3Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Barcodephp_AdapterAbstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Barcodephp/AdapterAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Barcodephp_Issnphp extendsphp Zendphp_Validatephp_Barcodephp_AdapterAbstract
php{
php php php php php/php*php*
php php php php php php*php Allowedphp barcodephp lengths
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_lengthphp php=php arrayphp(php8php,php php1php3php)php;

php php php php php/php*php*
php php php php php php*php Allowedphp barcodephp characters
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_charactersphp php=php php'php0php1php2php3php4php5php6php7php8php9Xphp'php;

php php php php php/php*php*
php php php php php php*php Checksumphp function
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_checksumphp php=php php'php_gtinphp'php;

php php php php php/php*php*
php php php php php php*php Allowsphp Xphp onphp lengthphp ofphp php8php chars
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp checkphp forphp allowedphp characters
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp checkCharsphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(strlenphp(php$valuephp)php php!php=php php8php)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$valuephp,php php'Xphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:checkCharsphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksum
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp checkphp thephp checksumphp for
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp checksumphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(strlenphp(php$valuephp)php php=php=php php8php)php php{
php php php php php php php php php php php php php$thisphp-php>php_checksumphp php=php php'php_issnphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_checksumphp php=php php'php_gtinphp'php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:checksumphp(php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatesphp thephp checksumphp php(php)
php php php php php php*php ISSNphp implementationphp php(reversedphp modphp1php1php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Thephp barcodephp tophp validate
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php protectedphp functionphp php_issnphp(php$valuephp)
php php php php php{
php php php php php php php php php$checksumphp php=php substrphp(php$valuephp,php php-php1php,php php1php)php;
php php php php php php php php php$valuesphp php php php=php strphp_splitphp(substrphp(php$valuephp,php php0php,php php-php1php)php)php;
php php php php php php php php php$checkphp php php php php=php php0php;
php php php php php php php php php$multiphp php php php php=php php8php;
php php php php php php php php foreachphp(php$valuesphp asphp php$tokenphp)php php{
php php php php php php php php php php php php ifphp php(php$tokenphp php=php=php php'Xphp'php)php php{
php php php php php php php php php php php php php php php php php$tokenphp php=php php1php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$checkphp php+php=php php(php$tokenphp php*php php$multiphp)php;
php php php php php php php php php php php php php-php-php$multiphp;
php php php php php php php php php}

php php php php php php php php php$checkphp php%php=php php1php1php;
php php php php php php php php php$checkphp php php=php php1php1php php-php php$checkphp;
php php php php php php php php ifphp php(php$checkphp php=php=php php$checksumphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp ifphp php(php(php$checkphp php=php=php php1php0php)php php&php&php php(php$checksumphp php=php=php php'Xphp'php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}
