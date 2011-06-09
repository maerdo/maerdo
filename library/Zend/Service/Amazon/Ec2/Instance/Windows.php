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
php php*php php@versionphp php php php php$Idphp:php Windowsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cryptphp_Hmac
php php*php/
requirephp_oncephp php'Zendphp/Cryptphp/Hmacphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Json
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp thatphp allowsphp youtphp tophp runphp,php terminatephp,php rebootphp andphp describephp Amazon
php php*php Ecphp2php Instancesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Instancephp_Windowsphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Bundlesphp anphp Amazonphp ECphp2php instancephp runningphp Windows
php php php php php php*
php php php php php php*php php@paramphp stringphp php$instanceIdphp php php php php php php php Thephp instancephp youphp wantphp tophp bundle
php php php php php php*php php@paramphp stringphp php$sphp3Bucketphp php php php php php php php php php Wherephp youphp wantphp thephp amiphp tophp livephp onphp Sphp3
php php php php php php*php php@paramphp stringphp php$sphp3Prefixphp php php php php php php php php php Thephp prefixphp youphp wantphp tophp assignphp tophp thephp AMIphp onphp Sphp3
php php php php php php*php php@paramphp integerphp php$uploadExpirationphp Thephp expirationphp ofphp thephp uploadphp policyphp.php php Amazonphp recommendsphp php1php2php hoursphp orphp longerphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp isphp basedphp inphp nubmerphp ofphp minutesphp.php Defaultphp isphp php1php4php4php0php minutesphp php(php2php4php hoursphp)
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php php php php php php php php containingphp thephp informationphp onphp thephp newphp bundlephp operation
php php php php php php*php/
php php php php publicphp functionphp bundlephp(php$instanceIdphp,php php$sphp3Bucketphp,php php$sphp3Prefixphp,php php$uploadExpirationphp php=php php1php4php4php0php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'BundleInstancephp'php;
php php php php php php php php php$paramsphp[php'InstanceIdphp'php]php php=php php$instanceIdphp;
php php php php php php php php php$paramsphp[php'Storagephp.Sphp3php.AWSAccessKeyIdphp'php]php php=php php$thisphp-php>php_getAccessKeyphp(php)php;
php php php php php php php php php$paramsphp[php'Storagephp.Sphp3php.Bucketphp'php]php php=php php$sphp3Bucketphp;
php php php php php php php php php$paramsphp[php'Storagephp.Sphp3php.Prefixphp'php]php php=php php$sphp3Prefixphp;
php php php php php php php php php$uploadPolicyphp php=php php$thisphp-php>php_getSphp3UploadPolicyphp(php$sphp3Bucketphp,php php$sphp3Prefixphp,php php$uploadExpirationphp)php;
php php php php php php php php php$paramsphp[php'Storagephp.Sphp3php.UploadPolicyphp'php]php php=php php$uploadPolicyphp;
php php php php php php php php php$paramsphp[php'Storagephp.Sphp3php.UploadPolicySignaturephp'php]php php=php php$thisphp-php>php_signSphp3UploadPolicyphp(php$uploadPolicyphp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'instanceIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:instanceIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'bundleIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:bundleIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:statephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'startTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:startTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'updateTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:updateTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'progressphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:progressphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'storagephp'php]php[php'sphp3php'php]php[php'bucketphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:storagephp/ecphp2php:Sphp3php/ecphp2php:bucketphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'storagephp'php]php[php'sphp3php'php]php[php'prefixphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:storagephp/ecphp2php:Sphp3php/ecphp2php:prefixphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cancelsphp anphp Amazonphp ECphp2php bundlingphp operation
php php php php php php*
php php php php php php*php php@paramphp stringphp php$bundleIdphp php php php php php php php php php Thephp IDphp ofphp thephp bundlephp taskphp tophp cancel
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php php php php php php php php Informationphp onphp thephp bundlephp task
php php php php php php*php/
php php php php publicphp functionphp cancelBundlephp(php$bundleIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'CancelBundleTaskphp'php;
php php php php php php php php php$paramsphp[php'BundleIdphp'php]php php=php php$bundleIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'instanceIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:instanceIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'bundleIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:bundleIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:statephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'startTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:startTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'updateTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:updateTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'progressphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:progressphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'storagephp'php]php[php'sphp3php'php]php[php'bucketphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:storagephp/ecphp2php:Sphp3php/ecphp2php:bucketphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'storagephp'php]php[php'sphp3php'php]php[php'prefixphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:bundleInstanceTaskphp/ecphp2php:storagephp/ecphp2php:Sphp3php/ecphp2php:prefixphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Describesphp currentphp bundlingphp tasks
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$bundleIdphp php php php php php php php php php php php Aphp singlephp orphp aphp listphp ofphp bundlephp tasksphp thatphp youphp want
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php tophp findphp informationphp forphp.
php php php php php php*php php@returnphp arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php Informationphp forphp thephp taskphp thatphp youphp requested
php php php php php php*php/
php php php php publicphp functionphp describeBundlephp(php$bundleIdphp php=php php'php'php)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeBundleTasksphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$bundleIdphp)php php&php&php php!emptyphp(php$bundleIdphp)php)php php{
php php php php php php php php php php php php foreachphp(php$bundleIdphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'bundleIdphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php!emptyphp(php$bundleIdphp)php)php php{
php php php php php php php php php php php php php$paramsphp[php'bundleIdphp.php1php'php]php php=php php$bundleIdphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$itemsphp php=php php$xpathphp-php>evaluatephp(php'php/php/ecphp2php:bundleInstanceTasksSetphp/ecphp2php:itemphp'php)php;
php php php php php php php php php$returnphp php=php arrayphp(php)php;

php php php php php php php php foreachphp(php$itemsphp asphp php$itemphp)php php{
php php php php php php php php php php php php php$iphp php=php arrayphp(php)php;
php php php php php php php php php php php php php$iphp[php'instanceIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:instanceIdphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'bundleIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:bundleIdphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'statephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:statephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'startTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:startTimephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'updateTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:updateTimephp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'progressphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:progressphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'storagephp'php]php[php'sphp3php'php]php[php'bucketphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:storagephp/ecphp2php:Sphp3php/ecphp2php:bucketphp/textphp(php)php)php'php,php php$itemphp)php;
php php php php php php php php php php php php php$iphp[php'storagephp'php]php[php'sphp3php'php]php[php'prefixphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:storagephp/ecphp2php:Sphp3php/ecphp2php:prefixphp/textphp(php)php)php'php,php php$itemphp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$iphp;
php php php php php php php php php php php php unsetphp(php$iphp)php;
php php php php php php php php php}


php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatesphp thephp Sphp3php Uploadphp Policyphp Information
php php php php php php*
php php php php php php*php php@paramphp stringphp php$bucketNamephp php php php php php php php Whichphp bucketphp youphp wantphp thephp amiphp tophp livephp inphp onphp Sphp3
php php php php php php*php php@paramphp stringphp php$prefixphp php php php php php php php php php php php Thephp prefixphp youphp wantphp tophp assignphp tophp thephp AMIphp onphp Sphp3
php php php php php php*php php@paramphp integerphp php$expireInMinutesphp php Thephp expirationphp ofphp thephp uploadphp policyphp.php php Amazonphp recommendsphp php1php2php hoursphp orphp longerphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp isphp basedphp inphp nubmerphp ofphp minutesphp.php Defaultphp isphp php1php4php4php0php minutesphp php(php2php4php hoursphp)
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php Basephp6php4php encodedphp stringphp thatphp isphp thephp uploadphp policy
php php php php php php*php/
php php php php protectedphp functionphp php_getSphp3UploadPolicyphp(php$bucketNamephp,php php$prefixphp,php php$expireInMinutesphp php=php php1php4php4php0php)
php php php php php{
php php php php php php php php php$arrParamsphp php=php arrayphp(php)php;
php php php php php php php php php$arrParamsphp[php'expirationphp'php]php php=php gmdatephp(php"Yphp-mphp-dphp\THphp:iphp:sphp.php\php\php0php\php\php0php\php\php0php\php\Zphp"php,php php(timephp(php)php php+php php(php$expireInMinutesphp php*php php6php0php)php)php)php;
php php php php php php php php php$arrParamsphp[php'conditionsphp'php]php[php]php php=php arrayphp(php'bucketphp'php php=php>php php$bucketNamephp)php;
php php php php php php php php php$arrParamsphp[php'conditionsphp'php]php[php]php php=php arrayphp(php'aclphp'php php=php>php php'ecphp2php-bundlephp-readphp'php)php;
php php php php php php php php php$arrParamsphp[php'conditionsphp'php]php[php]php php=php arrayphp(php'startsphp-withphp'php,php php'php$keyphp'php,php php$prefixphp)php;

php php php php php php php php returnphp basephp6php4php_encodephp(Zendphp_Jsonphp:php:encodephp(php$arrParamsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Signedphp Sphp3php Uploadphp Policy
php php php php php php*
php php php php php php*php php@paramphp stringphp php$policyphp php php php php php php php php php php php Basephp6php4php Encodedphp stringphp thatphp isphp thephp uploadphp policy
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php SHAphp1php encodedphp Sphp3php Uploadphp Policy
php php php php php php*php/
php php php php protectedphp functionphp php_signSphp3UploadPolicyphp(php$policyphp)
php php php php php{
php php php php php php php php php$hmacphp php=php Zendphp_Cryptphp_Hmacphp:php:computephp(php$thisphp-php>php_getSecretKeyphp(php)php,php php'SHAphp1php'php,php php$policyphp,php Zendphp_Cryptphp_Hmacphp:php:BINARYphp)php;
php php php php php php php php returnphp php$hmacphp;
php php php php php}
php}
