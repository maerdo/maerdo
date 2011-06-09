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
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ServerUrlphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Helperphp forphp returningphp thephp currentphp serverphp URLphp php(optionallyphp withphp requestphp URIphp)
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_ServerUrl
php{
php php php php php/php*php*
php php php php php php*php Scheme
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_schemephp;

php php php php php/php*php*
php php php php php php*php Hostphp php(includingphp portphp)
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_hostphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php switchphp php(truephp)php php{
php php php php php php php php php php php php casephp php(issetphp(php$php_SERVERphp[php'HTTPSphp'php]php)php php&php&php php(php$php_SERVERphp[php'HTTPSphp'php]php php=php=php php'onphp'php php|php|php php$php_SERVERphp[php'HTTPSphp'php]php php=php=php=php truephp)php)php:
php php php php php php php php php php php php casephp php(issetphp(php$php_SERVERphp[php'HTTPphp_SCHEMEphp'php]php)php php&php&php php(php$php_SERVERphp[php'HTTPphp_SCHEMEphp'php]php php=php=php php'httpsphp'php)php)php:
php php php php php php php php php php php php casephp php(issetphp(php$php_SERVERphp[php'SERVERphp_PORTphp'php]php)php php&php&php php(php$php_SERVERphp[php'SERVERphp_PORTphp'php]php php=php=php php4php4php3php)php)php:
php php php php php php php php php php php php php php php php php$schemephp php=php php'httpsphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php$schemephp php=php php'httpphp'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setSchemephp(php$schemephp)php;

php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php)php php&php&php php!emptyphp(php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setHostphp(php$php_SERVERphp[php'HTTPphp_HOSTphp'php]php)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$php_SERVERphp[php'SERVERphp_NAMEphp'php]php,php php$php_SERVERphp[php'SERVERphp_PORTphp'php]php)php)php php{
php php php php php php php php php php php php php$namephp php=php php$php_SERVERphp[php'SERVERphp_NAMEphp'php]php;
php php php php php php php php php php php php php$portphp php=php php$php_SERVERphp[php'SERVERphp_PORTphp'php]php;

php php php php php php php php php php php php ifphp php(php(php$schemephp php=php=php php'httpphp'php php&php&php php$portphp php=php=php php8php0php)php php|php|
php php php php php php php php php php php php php php php php php(php$schemephp php=php=php php'httpsphp'php php&php&php php$portphp php=php=php php4php4php3php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setHostphp(php$namephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setHostphp(php$namephp php.php php'php:php'php php.php php$portphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Viewphp helperphp entryphp pointphp:
php php php php php php*php Returnsphp thephp currentphp hostphp'sphp URLphp likephp httpphp:php/php/sitephp.com
php php php php php php*
php php php php php php*php php@paramphp php stringphp|booleanphp php$requestUriphp php php[optionalphp]php ifphp truephp,php thephp requestphp URI
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php foundphp inphp php$php_SERVERphp willphp bephp appended
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php asphp aphp pathphp.php Ifphp aphp stringphp isphp givenphp,php it
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php willphp bephp appendedphp asphp aphp pathphp.php Default
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php isphp tophp notphp appendphp anyphp pathphp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php serverphp url
php php php php php php*php/
php php php php publicphp functionphp serverUrlphp(php$requestUriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$requestUriphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$pathphp php=php php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php php php php php}php elsephp ifphp php(isphp_stringphp(php$requestUriphp)php)php php{
php php php php php php php php php php php php php$pathphp php=php php$requestUriphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$pathphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getSchemephp(php)php php.php php'php:php/php/php'php php.php php$thisphp-php>getHostphp(php)php php.php php$pathphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp host
php php php php php php*
php php php php php php*php php@returnphp stringphp php host
php php php php php php*php/
php php php php publicphp functionphp getHostphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_hostphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp host
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hostphp php php php php php php php php php php php php php php php newphp host
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_ServerUrlphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setHostphp(php$hostphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_hostphp php=php php$hostphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp schemephp php(typicallyphp httpphp orphp httpsphp)
php php php php php php*
php php php php php php*php php@returnphp stringphp php schemephp php(typicallyphp httpphp orphp httpsphp)
php php php php php php*php/
php php php php publicphp functionphp getSchemephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_schemephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp schemephp php(typicallyphp httpphp orphp httpsphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$schemephp php php php php php php php php php php php php php newphp schemephp php(typicallyphp httpphp orphp httpsphp)
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_ServerUrlphp php fluentphp interfacephp,php returnsphp self
php php php php php php*php/
php php php php publicphp functionphp setSchemephp(php$schemephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_schemephp php=php php$schemephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
