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
php php*php php@versionphp php php php php$Idphp:php LocateIPRequestphp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/RequestAbstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddress
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/IpLocationphp/IpAddressphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_IpLocationphp_LocateIPRequest
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php{
php php php php php/php*php*
php php php php php php*php thephp ipphp addressesphp tophp lookupphp for
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_IpLocationphp_IpAddress
php php php php php php*php/
php php php php publicphp php$addressphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php thephp account
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$accountphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructorphp givephp themphp thephp environment
php php php php php php*
php php php php php php*php php@paramphp integerphp php$environment
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddressphp|arrayphp php$ip
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$environmentphp,php php$ipphp php=php nullphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$environmentphp)php;

php php php php php php php php ifphp php(php$ipphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setIpphp(php$ipphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php setsphp newphp ipphp orphp arrayphp ofphp ips
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddressphp|arrayphp php$ip
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_IpLocationphp_LocateIPRequest
php php php php php php*php/
php php php php publicphp functionphp setIpphp(php$ipphp)
php php php php php{
php php php php php php php php ifphp php(php$ipphp instanceofphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddressphp)php php{
php php php php php php php php php php php php php$thisphp-php>addressphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'ipTypephp'php php php php php=php>php php$ipphp-php>getVersionphp(php)php,
php php php php php php php php php php php php php php php php php'ipAddressphp'php php=php>php php$ipphp-php>getIpphp(php)php,
php php php php php php php php php php php php php)php;
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$ipphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$ipphp asphp php$ipObjectphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$ipObjectphp instanceofphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddress
php php php php php php php php php php php php php php php php php php php php php&php&php php!isphp_stringphp(php$ipObjectphp)
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Notphp aphp validphp Ipphp Addressphp objectphp foundphp.php'
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>setIpphp(php$ipObjectphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$ipphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_Exceptionphp(php'Notphp aphp validphp Ipphp Addressphp objectphp foundphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>setIpphp(newphp Zendphp_Servicephp_DeveloperGardenphp_IpLocationphp_IpAddressphp(php$ipphp)php)php;
php php php php php}
php}
