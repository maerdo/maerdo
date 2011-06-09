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
php php*php php@versionphp php php php php$Idphp:php IPAddressLocationTypephp.phpphp php2php0php1php6php6php php2php0php1php0php-php0php1php-php0php9php php1php9php:php0php0php:php1php7Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_BaseType
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/BaseTypephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_IPAddressLocationType
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_BaseType
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_RegionType
php php php php php php*php/
php php php php publicphp php$isInRegionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_GeoCoordinatesType
php php php php php php*php/
php php php php publicphp php$isInGeophp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_CityType
php php php php php php*php/
php php php php publicphp php$isInCityphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$ipTypephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$ipAddressphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$radiusphp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_RegionType
php php php php php php*php/
php php php php publicphp functionphp getRegionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>isInRegionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_GeoCoordinatesType
php php php php php php*php/
php php php php publicphp functionphp getGeoCoordinatesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>isInGeophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_CityType
php php php php php php*php/
php php php php publicphp functionphp getCityphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>isInCityphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getIpTypephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>ipTypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIpAddressphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>ipAddressphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getRadiusphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>radiusphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementphp parsing
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp parsephp(php)
php php php php php{
php php php php php php php php parentphp:php:parsephp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>isInCityphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/IpLocationphp/CityTypephp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>isInCityphp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_CityTypephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>isInRegionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/IpLocationphp/RegionTypephp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>isInRegionphp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_RegionTypephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>isInGeophp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Responsephp/IpLocationphp/GeoCoordinatesTypephp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>isInGeophp php=php newphp Zendphp_Servicephp_DeveloperGardenphp_Responsephp_IpLocationphp_GeoCoordinatesTypephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
