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
php php*php php@packagephp php php php Zendphp_Version
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Versionphp.phpphp php2php3php5php8php5php php2php0php1php0php-php1php2php-php2php8php php1php9php:php5php2php:php5php2Zphp matthewphp php$
php php*php/

php/php*php*
php php*php Classphp tophp storephp andphp retrievephp thephp versionphp ofphp Zendphp Frameworkphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Version
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
finalphp classphp Zendphp_Version
php{
php php php php php/php*php*
php php php php php php*php Zendphp Frameworkphp versionphp identificationphp php-php seephp compareVersionphp(php)
php php php php php php*php/
php php php php constphp VERSIONphp php=php php'php1php.php1php1php.php2php'php;

php php php php php/php*php*
php php php php php php*php Thephp latestphp stablephp versionphp Zendphp Frameworkphp available
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_lastestVersionphp;

php php php php php/php*php*
php php php php php php*php Comparephp thephp specifiedphp Zendphp Frameworkphp versionphp stringphp php$version
php php php php php php*php withphp thephp currentphp Zendphp_Versionphp:php:VERSIONphp ofphp Zendphp Frameworkphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$versionphp php Aphp versionphp stringphp php(ephp.gphp.php php"php0php.php7php.php1php"php)php.
php php php php php php*php php@returnphp intphp php php php php php php php php php php php-php1php ifphp thephp php$versionphp isphp olderphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php0php ifphp theyphp arephp thephp samephp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php andphp php+php1php ifphp php$versionphp isphp newerphp.
php php php php php php*
php php php php php php*php/
php php php php publicphp staticphp functionphp compareVersionphp(php$versionphp)
php php php php php{
php php php php php php php php php$versionphp php=php strtolowerphp(php$versionphp)php;
php php php php php php php php php$versionphp php=php pregphp_replacephp(php'php/php(php\dphp)prphp(php\dphp?php)php/php'php,php php'php$php1aphp$php2php'php,php php$versionphp)php;
php php php php php php php php returnphp versionphp_comparephp(php$versionphp,php strtolowerphp(selfphp:php:VERSIONphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchesphp thephp versionphp ofphp thephp latestphp stablephp release
php php php php php php*
php php php php php php*php php@linkphp httpphp:php/php/frameworkphp.zendphp.comphp/downloadphp/latest
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getLatestphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_lastestVersionphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_lastestVersionphp php=php php'notphp availablephp'php;

php php php php php php php php php php php php php$handlephp php=php fopenphp(php'httpphp:php/php/frameworkphp.zendphp.comphp/apiphp/zfphp-versionphp'php,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(falsephp php!php=php=php php$handlephp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_lastestVersionphp php=php streamphp_getphp_contentsphp(php$handlephp)php;
php php php php php php php php php php php php php php php php fclosephp(php$handlephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_lastestVersionphp;
php php php php php}
php}
