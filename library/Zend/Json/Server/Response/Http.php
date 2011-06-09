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
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Httpphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Jsonphp_Serverphp_Response
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp/Serverphp/Responsephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp_Responsephp_Httpphp extendsphp Zendphp_Jsonphp_Serverphp_Response
php{
php php php php php/php*php*
php php php php php php*php Emitphp JSON
php php php php php php*
php php php php php php*php Sendphp appropriatephp HTTPphp headersphp.php Ifphp nophp Idphp,php thenphp returnphp anphp emptyphp stringphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toJsonphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>sendHeadersphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>isErrorphp(php)php php&php&php nullphp php=php=php=php php$thisphp-php>getIdphp(php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:toJsonphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp headers
php php php php php php*
php php php php php php*php Ifphp headersphp arephp alreadyphp sentphp,php dophp nothingphp.php Ifphp nullphp IDphp,php sendphp HTTPphp php2php0php4
php php php php php php*php headerphp.php Otherwisephp,php sendphp contentphp typephp headerphp basedphp onphp contentphp typephp of
php php php php php php*php servicephp mapphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp sendHeadersphp(php)
php php php php php{
php php php php php php php php ifphp php(headersphp_sentphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>isErrorphp(php)php php&php&php php(nullphp php=php=php=php php$thisphp-php>getIdphp(php)php)php)php php{
php php php php php php php php php php php php headerphp(php'HTTPphp/php1php.php1php php2php0php4php Nophp Contentphp'php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php(php$smdphp php=php php$thisphp-php>getServiceMapphp(php)php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$contentTypephp php=php php$smdphp-php>getContentTypephp(php)php;
php php php php php php php php ifphp php(php!emptyphp(php$contentTypephp)php)php php{
php php php php php php php php php php php php headerphp(php'Contentphp-Typephp:php php'php php.php php$contentTypephp)php;
php php php php php php php php php}
php php php php php}
php}
