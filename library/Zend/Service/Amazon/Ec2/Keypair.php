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
php php*php php@versionphp php php php php$Idphp:php Keypairphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp tophp createphp,php deletephp andphp describephp Ecphp2php KeyPairsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Keypairphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp php2php0php4php8php bitphp RSAphp keyphp pairphp andphp returnsphp aphp uniquephp IDphp thatphp can
php php php php php php*php bephp usedphp tophp referencephp thisphp keyphp pairphp whenphp launchingphp newphp instancesphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyNamephp php php php php php php php php php php Aphp uniquephp namephp forphp thephp keyphp pairphp.
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp createphp(php$keyNamephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;

php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'CreateKeyPairphp'php;

php php php php php php php php ifphp(php!php$keyNamephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exceptionphp(php'Invalidphp Keyphp Namephp'php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'KeyNamephp'php]php php=php php$keyNamephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'keyNamephp'php]php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:keyNamephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'keyFingerprintphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:keyFingerprintphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'keyMaterialphp'php]php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:keyMaterialphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp informationphp aboutphp keyphp pairsphp availablephp tophp youphp.php Ifphp youphp specify
php php php php php php*php keyphp pairsphp,php informationphp aboutphp thosephp keyphp pairsphp isphp returnedphp.php Otherwisephp,
php php php php php php*php informationphp forphp allphp registeredphp keyphp pairsphp isphp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|rarrayphp php$keyNamephp php php php Keyphp pairphp IDsphp tophp describephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describephp(php$keyNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;

php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeKeyPairsphp'php;
php php php php php php php php ifphp(isphp_arrayphp(php$keyNamephp)php php&php&php php!emptyphp(php$keyNamephp)php)php php{
php php php php php php php php php php php php foreachphp(php$keyNamephp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'KeyNamephp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$keyNamephp)php php{
php php php php php php php php php php php php php$paramsphp[php'KeyNamephp.php1php'php]php php=php php$keyNamephp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$nodesphp php php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:keySetphp/ecphp2php:itemphp'php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$kphp php=php>php php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$itemphp[php'keyNamephp'php]php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:keyNamephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'keyFingerprintphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:keyFingerprintphp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;
php php php php php php php php php php php php unsetphp(php$itemphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp keyphp pair
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyNamephp php php php php php php php php php php Namephp ofphp thephp keyphp pairphp tophp deletephp.
php php php php php php*php php@throwsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exception
php php php php php php*php php@returnphp booleanphp php php php php php php php php php php php php php php php php php Returnphp truephp orphp falsephp fromphp thephp deletionphp.
php php php php php php*php/
php php php php publicphp functionphp deletephp(php$keyNamephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;

php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DeleteKeyPairphp'php;

php php php php php php php php ifphp(php!php$keyNamephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exceptionphp(php'Invalidphp Keyphp Namephp'php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp[php'KeyNamephp'php]php php=php php$keyNamephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$successphp php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$successphp php=php=php=php php"truephp"php)php;
php php php php php}
php}
