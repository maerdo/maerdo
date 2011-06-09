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
php php*php php@packagephp php php php Zend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Exceptionphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php*php php@categoryphp php php Zend
php*php php@packagephp php php php Zend
php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php*php/
classphp Zendphp_Exceptionphp extendsphp Exception
php{
php php php php php/php*php*
php php php php php php*php php@varphp nullphp|Exception
php php php php php php*php/
php php php php privatephp php$php_previousphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructphp thephp exception
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$msg
php php php php php php*php php@paramphp php intphp php$code
php php php php php php*php php@paramphp php Exceptionphp php$previous
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$msgphp php=php php'php'php,php php$codephp php=php php0php,php Exceptionphp php$previousphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(versionphp_comparephp(PHPphp_VERSIONphp,php php'php5php.php3php.php0php'php,php php'<php'php)php)php php{
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$msgphp,php php(intphp)php php$codephp)php;
php php php php php php php php php php php php php$thisphp-php>php_previousphp php=php php$previousphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php parentphp:php:php_php_constructphp(php$msgphp,php php(intphp)php php$codephp,php php$previousphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloading
php php php php php php*
php php php php php php*php Forphp PHPphp <php php5php.php3php.php0php,php providesphp accessphp tophp thephp getPreviousphp(php)php methodphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php'getpreviousphp'php php=php=php strtolowerphp(php$methodphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_getPreviousphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Stringphp representationphp ofphp thephp exception
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php ifphp php(versionphp_comparephp(PHPphp_VERSIONphp,php php'php5php.php3php.php0php'php,php php'<php'php)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$ephp php=php php$thisphp-php>getPreviousphp(php)php)php)php php{
php php php php php php php php php php php php php php php php returnphp php$ephp-php>php_php_toStringphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php.php php"php\nphp\nNextphp php"
php php php php php php php php php php php php php php php php php php php php php php php php.php parentphp:php:php_php_toStringphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:php_php_toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp previousphp Exception
php php php php php php*
php php php php php php*php php@returnphp Exceptionphp|null
php php php php php php*php/
php php php php protectedphp functionphp php_getPreviousphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_previousphp;
php php php php php}
php}
