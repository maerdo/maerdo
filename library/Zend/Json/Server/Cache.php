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
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Cachephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Serverphp_Cachephp php*php/
requirephp_oncephp php'Zendphp/Serverphp/Cachephp.phpphp'php;

php/php*php*
php php*php Zendphp_Jsonphp_Serverphp_Cachephp:php cachephp Zendphp_Jsonphp_Serverphp serverphp definitionphp andphp SMD
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Json
php php*php php@subpackagephp Server
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Jsonphp_Serverphp_Cachephp extendsphp Zendphp_Serverphp_Cache
php{
php php php php php/php*php*
php php php php php php*php Cachephp aphp servicephp mapphp descriptionphp php(SMDphp)php tophp aphp file
php php php php php php*
php php php php php php*php Returnsphp truephp onphp successphp,php falsephp onphp failure
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@paramphp php Zendphp_Jsonphp_Serverphp php$server
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp saveSmdphp(php$filenamephp,php Zendphp_Jsonphp_Serverphp php$serverphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$filenamephp)
php php php php php php php php php php php php php|php|php php(php!filephp_existsphp(php$filenamephp)php php&php&php php!isphp_writablephp(dirnamephp(php$filenamephp)php)php)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php0php php=php=php=php php@filephp_putphp_contentsphp(php$filenamephp,php php$serverphp-php>getServiceMapphp(php)php-php>toJsonphp(php)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp cachedphp SMD
php php php php php php*
php php php php php php*php Onphp successphp,php returnsphp thephp cachedphp SMDphp php(aphp JSONphp stringphp)php;php anphp failurephp,php returns
php php php php php php*php booleanphp falsephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php publicphp staticphp functionphp getSmdphp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$filenamephp)
php php php php php php php php php php php php php|php|php php!filephp_existsphp(php$filenamephp)
php php php php php php php php php php php php php|php|php php!isphp_readablephp(php$filenamephp)php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}


php php php php php php php php ifphp php(falsephp php=php=php=php php(php$smdphp php=php php@filephp_getphp_contentsphp(php$filenamephp)php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$smdphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp filephp containingphp aphp cachedphp SMD
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filename
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp deleteSmdphp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$filenamephp)php php&php&php filephp_existsphp(php$filenamephp)php)php php{
php php php php php php php php php php php php unlinkphp(php$filenamephp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}
php}
