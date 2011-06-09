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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php BaseUrlphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php php@seephp Zendphp_Viewphp_Helperphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Helperphp forphp retrievingphp thephp BaseUrl
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_BaseUrlphp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php BaseUrl
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUrlphp;

php php php php php/php*php*
php php php php php php*php Returnsphp sitephp'sphp basephp urlphp,php orphp filephp withphp basephp urlphp prepended
php php php php php php*
php php php php php php*php php$filephp isphp appendedphp tophp thephp basephp urlphp forphp simplicity
php php php php php php*
php php php php php php*php php@paramphp php stringphp|nullphp php$file
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp baseUrlphp(php$filephp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Getphp baseUrl
php php php php php php php php php$baseUrlphp php=php php$thisphp-php>getBaseUrlphp(php)php;

php php php php php php php php php/php/php Removephp trailingphp slashes
php php php php php php php php ifphp php(nullphp php!php=php=php php$filephp)php php{
php php php php php php php php php php php php php$filephp php=php php'php/php'php php.php ltrimphp(php$filephp,php php'php/php\php\php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$baseUrlphp php.php php$filephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp BaseUrl
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$base
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_BaseUrl
php php php php php php*php/
php php php php publicphp functionphp setBaseUrlphp(php$basephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_baseUrlphp php=php rtrimphp(php$basephp,php php'php/php\php\php'php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp BaseUrl
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBaseUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_baseUrlphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Controllerphp_Frontphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Frontphp.phpphp'php;
php php php php php php php php php php php php php$baseUrlphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php-php>getBaseUrlphp(php)php;

php php php php php php php php php php php php php/php/php Removephp scriptnamephp,php egphp.php indexphp.phpphp fromphp baseUrl
php php php php php php php php php php php php php$baseUrlphp php=php php$thisphp-php>php_removeScriptNamephp(php$baseUrlphp)php;

php php php php php php php php php php php php php$thisphp-php>setBaseUrlphp(php$baseUrlphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_baseUrlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp Scriptphp filenamephp fromphp baseurl
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$url
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_removeScriptNamephp(php$urlphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php)php)php php{
php php php php php php php php php php php php php/php/php Wephp canphp'tphp dophp muchphp nowphp canphp wephp?php php(Wellphp,php wephp couldphp parsephp outphp byphp php"php.php"php)
php php php php php php php php php php php php returnphp php$urlphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$posphp php=php strriposphp(php$urlphp,php basenamephp(php$php_SERVERphp[php'SCRIPTphp_NAMEphp'php]php)php)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$urlphp php=php substrphp(php$urlphp,php php0php,php php$posphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$urlphp;
php php php php php}
php}
