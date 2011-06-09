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
php php*php php@versionphp php php php php$Idphp:php LocalSearchRequestphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_DeveloperGardenphp_RequestAbstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/DeveloperGardenphp/Requestphp/RequestAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp DeveloperGarden
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Marcophp Kaiser
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_LocalSearchphp_LocalSearchRequest
php php php php extendsphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php{
php php php php php/php*php*
php php php php php php*php arrayphp ofphp searchphp parameters
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$searchParametersphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php originalphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_DeveloperGardenphp_LocalSearchphp_SearchParameters
php php php php php php*php/
php php php php privatephp php$php_searchParametersphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php accountphp id
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php publicphp php$accountphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php constructorphp givephp themphp thephp environmentphp andphp thephp sessionId
php php php php php php*
php php php php php php*php php@paramphp integerphp php$environment
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_LocalSearchphp_SearchParametersphp php$searchParameters
php php php php php php*php php@paramphp integerphp php$account
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_Requestphp_RequestAbstract
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$environmentphp,
php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_LocalSearchphp_SearchParametersphp php$searchParametersphp,
php php php php php php php php php$accountphp php=php null
php php php php php)php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$environmentphp)php;
php php php php php php php php php$thisphp-php>setSearchParametersphp(php$searchParametersphp)
php php php php php php php php php php php php php php-php>setAccountphp(php$accountphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp integerphp php$account
php php php php php php*php/
php php php php publicphp functionphp setAccountphp(php$accountphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>accountphp php=php php$accountphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getAccountphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>accountphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp Zendphp_Servicephp_DeveloperGardenphp_LocalSearchphp_SearchParametersphp php$searchParameters
php php php php php php*php/
php php php php publicphp functionphp setSearchParametersphp(
php php php php php php php php Zendphp_Servicephp_DeveloperGardenphp_LocalSearchphp_SearchParametersphp php$searchParameters
php php php php php)php php{
php php php php php php php php php$thisphp-php>searchParametersphp php php=php php$searchParametersphp-php>getSearchParametersphp(php)php;
php php php php php php php php php$thisphp-php>php_searchParametersphp php=php php$searchParametersphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp Zendphp_Servicephp_DeveloperGardenphp_LocalSearchphp_SearchParameters
php php php php php php*php/
php php php php publicphp functionphp getSearchParametersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_searchParametersphp;
php php php php php}

php}
