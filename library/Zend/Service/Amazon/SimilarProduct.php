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
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SimilarProductphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Amazon
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_SimilarProduct
php{
php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$ASINphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$Titlephp;

php php php php php/php*php*
php php php php php php*php Assignsphp valuesphp tophp propertiesphp relevantphp tophp SimilarProduct
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$dom
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(DOMElementphp php$domphp)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp-php>ownerDocumentphp)php;
php php php php php php php php php$xpathphp-php>registerNamespacephp(php'azphp'php,php php'httpphp:php/php/webservicesphp.amazonphp.comphp/AWSECommerceServicephp/php2php0php0php5php-php1php0php-php0php5php'php)php;
php php php php php php php php foreachphp php(arrayphp(php'ASINphp'php,php php'Titlephp'php)php asphp php$elphp)php php{
php php php php php php php php php php php php php$textphp php=php php$xpathphp-php>queryphp(php"php.php/azphp:php$elphp/textphp(php)php"php,php php$domphp)php-php>itemphp(php0php)php;
php php php php php php php php php php php php ifphp(php$textphp instanceofphp DOMTextphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php$elphp php=php php(stringphp)php$textphp-php>dataphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}
php}
