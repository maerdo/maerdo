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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Directoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_AdapterInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Storagephp/AdapterInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_Directory
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp_AdapterInterface
php{

php php php php protectedphp php$php_directoryPathphp php=php nullphp;

php php php php publicphp functionphp php_php_constructphp(php$directoryPathphp)
php php php php php{
php php php php php php php php ifphp php(php!filephp_existsphp(php$directoryPathphp)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php_php_CLASSphp_php_php php.php php'php:php thephp suppliedphp directoryphp doesphp notphp existphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_directoryPathphp php=php php$directoryPathphp;
php php php php php}

php php php php publicphp functionphp putphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php returnphp filephp_putphp_contentsphp(php$thisphp-php>php_directoryPathphp php.php DIRECTORYphp_SEPARATORphp php.php php$namephp,php php$valuephp)php;
php php php php php}

php php php php publicphp functionphp getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp filephp_getphp_contentsphp(php$thisphp-php>php_directoryPathphp php.php DIRECTORYphp_SEPARATORphp php.php php$namephp)php;
php php php php php}

php php php php publicphp functionphp hasphp(php$namephp)
php php php php php{
php php php php php php php php returnphp filephp_existsphp(php$thisphp-php>php_directoryPathphp php.php DIRECTORYphp_SEPARATORphp php.php php$namephp)php;
php php php php php}

php php php php publicphp functionphp removephp(php$namephp)
php php php php php{
php php php php php php php php returnphp unlinkphp(php$thisphp-php>php_directoryPathphp php.php DIRECTORYphp_SEPARATORphp php.php php$namephp)php;
php php php php php}

php php php php publicphp functionphp getStreamUriphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_directoryPathphp php.php DIRECTORYphp_SEPARATORphp php.php php$namephp;
php php php php php}

php}
