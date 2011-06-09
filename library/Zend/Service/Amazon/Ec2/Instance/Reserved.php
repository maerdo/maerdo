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
php php*php php@versionphp php php php php$Idphp:php Reservedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Allowsphp youphp tophp interfacephp withphp thephp reservedphp instancesphp onphp Amazonphp Ecphp2
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Instancephp_Reservedphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Describesphp Reservedphp Instancesphp thatphp youphp purchasedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$instanceIdphp php php php php php php php IDsphp ofphp thephp Reservedphp Instancephp tophp describephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeInstancesphp(php$instanceIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeReservedInstancesphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$instanceIdphp)php php&php&php php!emptyphp(php$instanceIdphp)php)php php{
php php php php php php php php php php php php foreachphp(php$instanceIdphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'ReservedInstancesIdphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$instanceIdphp)php php{
php php php php php php php php php php php php php$paramsphp[php'ReservedInstancesIdphp.php1php'php]php php=php php$instanceIdphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$itemsphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:reservedInstancesSetphp/ecphp2php:itemphp'php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$iphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$iphp[php'reservedInstancesIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:reservedInstancesIdphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'instanceTypephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:instanceTypephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'availabilityZonephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:availabilityZonephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'durationphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:durationphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'fixedPricephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:fixedPricephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'usagePricephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:usagePricephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'productDescriptionphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:productDescriptionphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'instanceCountphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:instanceCountphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'statephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:statephp/textphp(php)php)php'php,php php$itemphp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$iphp;
php php php php php php php php php php php php unsetphp(php$iphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Describesphp Reservedphp Instancephp offeringsphp thatphp arephp availablephp forphp purchasephp.
php php php php php php*php Withphp Amazonphp ECphp2php Reservedphp Instancesphp,php youphp purchasephp thephp rightphp tophp launchphp Amazon
php php php php php php*php ECphp2php instancesphp forphp aphp periodphp ofphp timephp php(withoutphp gettingphp insufficientphp capacity
php php php php php php*php errorsphp)php andphp payphp aphp lowerphp usagephp ratephp forphp thephp actualphp timephp usedphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeOfferingsphp(php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeReservedInstancesOfferingsphp'php;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$itemsphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:reservedInstancesOfferingsSetphp/ecphp2php:itemphp'php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$iphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$iphp[php'reservedInstancesOfferingIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:reservedInstancesOfferingIdphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'instanceTypephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:instanceTypephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'availabilityZonephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:availabilityZonephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'durationphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:durationphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'fixedPricephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:fixedPricephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'usagePricephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:usagePricephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'productDescriptionphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:productDescriptionphp/textphp(php)php)php'php,php php$itemphp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$iphp;
php php php php php php php php php php php php unsetphp(php$iphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Purchasesphp aphp Reservedphp Instancephp forphp usephp withphp yourphp accountphp.php Withphp Amazonphp ECphp2
php php php php php php*php Reservedphp Instancesphp,php youphp purchasephp thephp rightphp tophp launchphp Amazonphp ECphp2php instances
php php php php php php*php forphp aphp periodphp ofphp timephp php(withoutphp gettingphp insufficientphp capacityphp errorsphp)php and
php php php php php php*php payphp aphp lowerphp usagephp ratephp forphp thephp actualphp timephp usedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$offeringIdphp php php php php php php php php php php php Thephp offeringphp IDphp ofphp thephp Reservedphp Instancephp tophp purchase
php php php php php php*php php@paramphp integerphp php$intanceCountphp php php php php php php php php Thephp numberphp ofphp Reservedphp Instancesphp tophp purchasephp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php Thephp IDphp ofphp thephp purchasedphp Reservedphp Instancesphp.
php php php php php php*php/
php php php php publicphp functionphp purchaseOfferingphp(php$offeringIdphp,php php$intanceCountphp php=php php1php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'PurchaseReservedInstancesOfferingphp'php;
php php php php php php php php php$paramsphp[php'OfferingIdphp.php1php'php]php php=php php$offeringIdphp;
php php php php php php php php php$paramsphp[php'instanceCountphp.php1php'php]php php=php intvalphp(php$intanceCountphp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$reservedInstancesIdphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:reservedInstancesIdphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$reservedInstancesIdphp;
php php php php php}
php}
