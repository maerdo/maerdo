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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Elasticipphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp tophp allocatephp,php associatephp,php describephp andphp releasephp Elasticphp IPphp address
php php*php fromphp yourphp accountphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Elasticipphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Acquiresphp anphp elasticphp IPphp addressphp forphp usephp withphp yourphp account
php php php php php php*
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php Returnsphp thephp newlyphp Allocatedphp IPphp Address
php php php php php php*php/
php php php php publicphp functionphp allocatephp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'AllocateAddressphp'php;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$ipphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:publicIpphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$ipphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listsphp elasticphp IPphp addressesphp assignedphp tophp yourphp accountphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$publicIpphp php php php php php php php php php php php Elasticphp IPphp orphp listphp ofphp addressesphp tophp describephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describephp(php$publicIpphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeAddressesphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$publicIpphp)php php&php&php php!emptyphp(php$publicIpphp)php)php php{
php php php php php php php php php php php php foreachphp(php$publicIpphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'PublicIpphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$publicIpphp)php php{
php php php php php php php php php php php php php$paramsphp[php'PublicIpphp.php1php'php]php php=php php$publicIpphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$nodesphp php php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:itemphp'php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$kphp php=php>php php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$itemphp[php'publicIpphp'php]php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:publicIpphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'instanceIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:instanceIdphp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;
php php php php php php php php php php php php unsetphp(php$itemphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Releasesphp anphp elasticphp IPphp addressphp thatphp isphp associatedphp withphp yourphp account
php php php php php php*
php php php php php php*php php@paramphp stringphp php$publicIpphp php php php php php php php php php php php php php php php php php IPphp addressphp thatphp youphp arephp releasingphp fromphp yourphp accountphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp releasephp(php$publicIpphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'ReleaseAddressphp'php;
php php php php php php php php php$paramsphp[php'PublicIpphp'php]php php=php php$publicIpphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Associatesphp anphp elasticphp IPphp addressphp withphp anphp instance
php php php php php php*
php php php php php php*php php@paramphp stringphp php$instanceIdphp php php php php php php php php php php php php php php php Thephp instancephp tophp whichphp thephp IPphp addressphp isphp assigned
php php php php php php*php php@paramphp stringphp php$publicIpphp php php php php php php php php php php php php php php php php php IPphp addressphp thatphp youphp arephp assigningphp tophp thephp instancephp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp associatephp(php$instanceIdphp,php php$publicIpphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'AssociateAddressphp'php;
php php php php php php php php php$paramsphp[php'PublicIpphp'php]php php=php php$publicIpphp;
php php php php php php php php php$paramsphp[php'InstanceIdphp'php]php php=php php$instanceIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Disassociatesphp thephp specifiedphp elasticphp IPphp addressphp fromphp thephp instancephp tophp whichphp itphp isphp assignedphp.
php php php php php php*php Thisphp isphp anphp idempotentphp operationphp.php Ifphp youphp enterphp itphp morephp thanphp oncephp,php Amazonphp ECphp2php doesphp notphp returnphp anphp errorphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$publicIpphp php php php php php php php php php php php php php php php php php IPphp addressphp thatphp youphp arephp disassociatingphp fromphp thephp instancephp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp disassocatephp(php$publicIpphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DisssociateAddressphp'php;
php php php php php php php php php$paramsphp[php'PublicIpphp'php]php php=php php$publicIpphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}

php}
