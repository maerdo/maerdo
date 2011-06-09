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
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php2php3php0php0php php2php0php1php0php-php0php5php-php2php6php php1php0php:php1php3php:php3php4Zphp padraicphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Entryphp_EntryAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/EntryAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_Contentphp_Entry
php php php php extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php{

php php php php publicphp functionphp getContentphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php1php0
php php php php php php php php php php php php php&php&php php$thisphp-php>getTypephp(php)php php!php=php=php Zendphp_Feedphp_Readerphp:php:TYPEphp_RSSphp_php0php9php0
php php php php php php php php php)php php{
php php php php php php php php php php php php php$contentphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php.php$thisphp-php>getXpathPrefixphp(php)php.php'php/contentphp:encodedphp)php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$contentphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php.php$thisphp-php>getXpathPrefixphp(php)php.php'php/contentphp:encodedphp)php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$contentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp RSSphp Contentphp Modulephp namespace
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'contentphp'php,php php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/contentphp/php'php)php;
php php php php php}
php}
