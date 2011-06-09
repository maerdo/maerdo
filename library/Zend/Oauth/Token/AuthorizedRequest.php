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
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php AuthorizedRequestphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Oauthphp_Tokenphp php*php/
requirephp_oncephp php'Zendphp/Oauthphp/Tokenphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Oauth
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Oauthphp_Tokenphp_AuthorizedRequestphp extendsphp Zendphp_Oauthphp_Token
php{
php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp php$data
php php php php php php*php php@paramphp php nullphp|Zendphp_Oauthphp_Httpphp_Utilityphp php$utility
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$dataphp php=php nullphp,php Zendphp_Oauthphp_Httpphp_Utilityphp php$utilityphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$dataphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php php php php php php php php php$paramsphp php=php php$thisphp-php>php_parseDataphp(php)php;
php php php php php php php php php php php php ifphp php(countphp(php$paramsphp)php php>php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setParamsphp(php$paramsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$utilityphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php php$utilityphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_httpUtilityphp php=php newphp Zendphp_Oauthphp_Httpphp_Utilityphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp tokenphp data
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Indicatephp ifphp tokenphp isphp valid
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_paramsphp[selfphp:php:TOKENphp_PARAMphp_KEYphp]php)
php php php php php php php php php php php php php&php&php php!emptyphp(php$thisphp-php>php_paramsphp[selfphp:php:TOKENphp_PARAMphp_KEYphp]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp stringphp dataphp intophp array
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_parseDataphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$thisphp-php>php_dataphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$paramsphp[rawurldecodephp(php$keyphp)php]php php=php rawurldecodephp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$paramsphp;
php php php php php}
php}
