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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php IpAddressphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Ip
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Ipphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddress
php{
php php php php php/php*php*
php php php php php php*php thephp ipphp version
php php php php php php*php ipphp vphp4php php=php php4
php php php php php php*php ipphp vphp6php php=php php6
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_versionphp php=php php4php;

php php php php php/php*php*
php php php php php php*php currentlyphp supportedphp versions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_versionSupportedphp php=php arrayphp(
php php php php php php php php php4php,
php php php php php php php php php/php/php6php,php notphp supportedphp yet
php php php php php)php;

php php php php privatephp php$php_addressphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php createphp ipaddressphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ip
php php php php php php*php php@paramphp integerphp php$version
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Developergardephp_IpLocationphp_IpAddress
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$ipphp,php php$versionphp php=php php4php)
php php php php php{
php php php php php php php php php$thisphp-php>setIpphp(php$ipphp)
php php php php php php php php php php php php php php-php>setVersionphp(php$versionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp newphp ipphp address
php php php php php php*
php php php php php php*php php@paramphp stringphp php$ip
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddress
php php php php php php*php/
php php php php publicphp functionphp setIpphp(php$ipphp)
php php php php php{
php php php php php php php php php$validatorphp php=php newphp Zendphp_Validatephp_Ipphp(php)php;

php php php php php php php php ifphp php(php!php$validatorphp-php>isValidphp(php$ipphp)php)php php{
php php php php php php php php php php php php php$messagephp php=php php$validatorphp-php>getMessagesphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php$messagephp[php'notIpAddressphp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_addressphp php=php php$ipphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp currentphp address
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIpphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_addressphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp newphp ipphp version
php php php php php php*
php php php php php php*php php@paramphp integerphp php$version
php php php php php php*php php@throwsphp Zendphp_Servicephp_DeveloperGardenphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddress
php php php php php php*php/
php php php php publicphp functionphp setVersionphp(php$versionphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$versionphp,php php$thisphp-php>php_versionSupportedphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Exceptionphp(php'Ipphp Versionphp php'php php.php php(intphp)php$versionphp php.php php'php isphp notphp supportedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_versionphp php=php php$versionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnsphp thephp ipphp version
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getVersionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_versionphp;
php php php php php}
php}
