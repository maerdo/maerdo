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
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp tophp registerphp,php describephp andphp deregisterphp Amamzonphp Machinephp Instancesphp php(AMIphp)
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Imagephp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Registersphp anphp AMIphp withphp Amazonphp ECphp2php.php Imagesphp mustphp bephp registeredphp before
php php php php php php*php theyphp canphp bephp launchedphp.
php php php php php php*
php php php php php php*php Eachphp AMIphp isphp associatedphp withphp anphp uniquephp IDphp whichphp isphp providedphp byphp thephp Amazon
php php php php php php*php ECphp2php servicephp throughphp thephp RegisterImagephp operationphp.php Duringphp registrationphp,php Amazon
php php php php php php*php ECphp2php retrievesphp thephp specifiedphp imagephp manifestphp fromphp Amazonphp Sphp3php andphp verifiesphp that
php php php php php php*php thephp imagephp isphp ownedphp byphp thephp userphp registeringphp thephp imagephp.
php php php php php php*
php php php php php php*php Thephp imagephp manifestphp isphp retrievedphp oncephp andphp storedphp withinphp thephp Amazonphp ECphp2php.
php php php php php php*php Anyphp modificationsphp tophp anphp imagephp inphp Amazonphp Sphp3php invalidatesphp thisphp registrationphp.
php php php php php php*php Ifphp youphp makephp changesphp tophp anphp imagephp,php deregisterphp thephp previousphp imagephp andphp register
php php php php php php*php thephp newphp imagephp.php Forphp morephp informationphp,php seephp DeregisterImagephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageLocationphp php php php php php php php php Fullphp pathphp tophp yourphp AMIphp manifestphp inphp Amazonphp Sphp3php storagephp.
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php php php php php php php php php php php Thephp amiphp frophp thephp newlyphp registredphp imagephp;
php php php php php php*php/
php php php php publicphp functionphp registerphp(php$imageLocationphp)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'RegisterImagephp'php;
php php php php php php php php php$paramsphp[php'ImageLocationphp'php]php=php php$imageLocationphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$amiIdphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:imageIdphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$amiIdphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp informationphp aboutphp AMIsphp,php AKIsphp,php andphp ARIsphp availablephp tophp thephp userphp.
php php php php php php*php Informationphp returnedphp includesphp imagephp typephp,php productphp codesphp,php architecturephp,
php php php php php php*php andphp kernelphp andphp RAMphp diskphp IDsphp.php Imagesphp availablephp tophp thephp userphp includephp public
php php php php php php*php imagesphp availablephp forphp anyphp userphp tophp launchphp,php privatephp imagesphp ownedphp byphp thephp user
php php php php php php*php makingphp thephp requestphp,php andphp privatephp imagesphp ownedphp byphp otherphp usersphp forphp whichphp the
php php php php php php*php userphp hasphp explicitphp launchphp permissionsphp.
php php php php php php*
php php php php php php*php Launchphp permissionsphp fallphp intophp threephp categoriesphp:
php php php php php php*php php php php php php publicphp:php Thephp ownerphp ofphp thephp AMIphp grantedphp launchphp permissionsphp forphp thephp AMI
php php php php php php*php php php php php php php php php php php php php php tophp thephp allphp groupphp.php Allphp usersphp havephp launchphp permissionsphp forphp thesephp AMIsphp.
php php php php php php*php php php php php php explicitphp:php Thephp ownerphp ofphp thephp AMIphp grantedphp launchphp permissionsphp tophp aphp specificphp userphp.
php php php php php php*php php php php php php implicitphp:php Aphp userphp hasphp implicitphp launchphp permissionsphp forphp allphp AMIsphp hephp orphp shephp ownsphp.
php php php php php php*
php php php php php php*php Thephp listphp ofphp AMIsphp returnedphp canphp bephp modifiedphp byphp specifyingphp AMIphp IDsphp,php AMIphp ownersphp,
php php php php php php*php orphp usersphp withphp launchphp permissionsphp.php Ifphp nophp optionsphp arephp specifiedphp,php Amazonphp ECphp2php returns
php php php php php php*php allphp AMIsphp forphp whichphp thephp userphp hasphp launchphp permissionsphp.
php php php php php php*
php php php php php php*php Ifphp youphp specifyphp onephp orphp morephp AMIphp IDsphp,php onlyphp AMIsphp thatphp havephp thephp specifiedphp IDsphp arephp returnedphp.
php php php php php php*php Ifphp youphp specifyphp anphp invalidphp AMIphp IDphp,php aphp faultphp isphp returnedphp.php Ifphp youphp specifyphp anphp AMIphp IDphp forphp which
php php php php php php*php youphp dophp notphp havephp accessphp,php itphp willphp notphp bephp includedphp inphp thephp returnedphp resultsphp.
php php php php php php*
php php php php php php*php Ifphp youphp specifyphp onephp orphp morephp AMIphp ownersphp,php onlyphp AMIsphp fromphp thephp specifiedphp ownersphp andphp for
php php php php php php*php whichphp youphp havephp accessphp arephp returnedphp.php Thephp resultsphp canphp includephp thephp accountphp IDsphp ofphp the
php php php php php php*php specifiedphp ownersphp,php amazonphp forphp AMIsphp ownedphp byphp Amazonphp orphp selfphp forphp AMIsphp thatphp youphp ownphp.
php php php php php php*
php php php php php php*php Ifphp youphp specifyphp aphp listphp ofphp executablephp usersphp,php onlyphp usersphp thatphp havephp launchphp permissions
php php php php php php*php forphp thephp AMIsphp arephp returnedphp.php Youphp canphp specifyphp accountphp IDsphp php(ifphp youphp ownphp thephp AMIphp(sphp)php)php,php self
php php php php php php*php forphp AMIsphp forphp whichphp youphp ownphp orphp havephp explicitphp permissionsphp,php orphp allphp forphp publicphp AMIsphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$imageIdphp php php php php php php php php php php php php Aphp listphp ofphp imagephp descriptions
php php php php php php*php php@paramphp stringphp|arrayphp php$ownerphp php php php php php php php php php php php php php php Ownersphp ofphp AMIsphp tophp describephp.
php php php php php php*php php@paramphp stringphp|arrayphp php$executableByphp php php php php php php php AMIsphp forphp whichphp specifiedphp usersphp havephp accessphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describephp(php$imageIdphp php=php nullphp,php php$ownerphp php=php nullphp,php php$executableByphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeImagesphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$imageIdphp)php php&php&php php!emptyphp(php$imageIdphp)php)php php{
php php php php php php php php php php php php foreachphp(php$imageIdphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'ImageIdphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$imageIdphp)php php{
php php php php php php php php php php php php php$paramsphp[php'ImageIdphp.php1php'php]php php=php php$imageIdphp;
php php php php php php php php php}

php php php php php php php php ifphp(isphp_arrayphp(php$ownerphp)php php&php&php php!emptyphp(php$ownerphp)php)php php{
php php php php php php php php php php php php foreachphp(php$ownerphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'Ownerphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$ownerphp)php php{
php php php php php php php php php php php php php$paramsphp[php'Ownerphp.php1php'php]php php=php php$ownerphp;
php php php php php php php php php}

php php php php php php php php ifphp(isphp_arrayphp(php$executableByphp)php php&php&php php!emptyphp(php$executableByphp)php)php php{
php php php php php php php php php php php php foreachphp(php$executableByphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'ExecutableByphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$executableByphp)php php{
php php php php php php php php php php php php php$paramsphp[php'ExecutableByphp.php1php'php]php php=php php$executableByphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$nodesphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:imagesSetphp/ecphp2php:itemphp'php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$itemphp[php'imageIdphp'php]php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:imageIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'imageLocationphp'php]php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:imageLocationphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'imageStatephp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:imageStatephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'imageOwnerIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:imageOwnerIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'isPublicphp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:isPublicphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'architecturephp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:architecturephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'imageTypephp'php]php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:imageTypephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'kernelIdphp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:kernelIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'ramdiskIdphp'php]php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:ramdiskIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'platformphp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:platformphp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;
php php php php php php php php php php php php unsetphp(php$itemphp,php php$nodephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deregistersphp anphp AMIphp.php Oncephp deregisteredphp,php instancesphp ofphp thephp AMIphp canphp nophp longerphp bephp launchedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageIdphp php php php php php php php php php php php php php php php php php php Uniquephp IDphp ofphp aphp machinephp imagephp,php returnedphp byphp aphp call
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php tophp RegisterImagephp orphp DescribeImagesphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deregisterphp(php$imageIdphp)
php php php php php{
php php php php php php php php php$paramsphp php php php php php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'DeregisterImagephp'php;
php php php php php php php php php$paramsphp[php'ImageIdphp'php]php php php php php php php=php php$imageIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Modifiesphp anphp attributephp ofphp anphp AMIphp.
php php php php php php*
php php php php php php*php Validphp Attributesphp:
php php php php php php*php php php php php php php launchPermissionphp:php php Controlsphp whophp hasphp permissionphp tophp launchphp thephp AMIphp.php Launchphp permissions
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php canphp bephp grantedphp tophp specificphp usersphp byphp addingphp userIdsphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php Tophp makephp thephp AMIphp publicphp,php addphp thephp allphp groupphp.
php php php php php php*php php php php php php php productCodesphp:php php php php php php Associatesphp aphp productphp codephp withphp AMIsphp.php Thisphp allowsphp developersphp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php chargephp usersphp forphp usingphp AMIsphp.php Thephp userphp mustphp bephp signedphp upphp forphp the
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php productphp beforephp theyphp canphp launchphp thephp AMIphp.php Thisphp isphp aphp writephp oncephp attributephp;
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php afterphp itphp isphp setphp,php itphp cannotphp bephp changedphp orphp removedphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageIdphp php php php php php php php php php php php php php php php php php php AMIphp IDphp tophp modifyphp.
php php php php php php*php php@paramphp stringphp php$attributephp php php php php php php php php php php php php php php php php Specifiesphp thephp attributephp tophp modifyphp.php Seephp thephp preceding
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php attributesphp tablephp forphp supportedphp attributesphp.
php php php php php php*php php@paramphp stringphp php$operationTypephp php php php php php php php php php php php php Specifiesphp thephp operationphp tophp performphp onphp thephp attributephp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Seephp thephp precedingphp attributesphp tablephp forphp supportedphp operationsphp forphp attributesphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Validphp Valuesphp:php addphp php|php remove
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Requiredphp forphp launchPermssionphp Attribute
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$userIdphp php php php php php php php php php php php php php Userphp IDsphp tophp addphp tophp orphp removephp fromphp thephp launchPermissionphp attributephp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Requiredphp forphp launchPermssionphp Attribute
php php php php php php*php php@paramphp stringphp|arrayphp php$userGroupphp php php php php php php php php php php Userphp groupsphp tophp addphp tophp orphp removephp fromphp thephp launchPermissionphp attributephp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Currentlyphp,php thephp allphp groupphp isphp availablephp,php whichphp willphp makephp itphp aphp publicphp AMIphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Requiredphp forphp launchPermssionphp Attribute
php php php php php php*php php@paramphp stringphp php$productCodephp php php php php php php php php php php php php php php Attachesphp aphp productphp codephp tophp thephp AMIphp.php Currentlyphp onlyphp onephp productphp code
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php canphp bephp associatedphp withphp anphp AMIphp.php Oncephp setphp,php thephp productphp codephp cannotphp bephp changedphp orphp resetphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Requiredphp forphp productCodesphp Attribute
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp modifyAttributephp(php$imageIdphp,php php$attributephp,php php$operationTypephp php=php php'addphp'php,php php$userIdphp php=php nullphp,php php$userGroupphp php=php nullphp,php php$productCodephp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'ModifyImageAttributephp'php;
php php php php php php php php php$parmasphp[php'ImageIdphp'php]php php=php php$imageIdphp;
php php php php php php php php php$paramsphp[php'Attributephp'php]php php=php php$attributephp;

php php php php php php php php switchphp(php$attributephp)php php{
php php php php php php php php php php php php casephp php'launchPermissionphp'php:
php php php php php php php php php php php php php php php php php/php/php breakphp leftphp out
php php php php php php php php php php php php casephp php'launchpermissionphp'php:
php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp'php]php php=php php'launchPermissionphp'php;
php php php php php php php php php php php php php php php php php$paramsphp[php'OperationTypephp'php]php php=php php$operationTypephp;

php php php php php php php php php php php php php php php php ifphp(isphp_arrayphp(php$userIdphp)php php&php&php php!emptyphp(php$userIdphp)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp(php$userIdphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'UserIdphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elseifphp(php$userIdphp)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'UserIdphp.php1php'php]php php=php php$userIdphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp(isphp_arrayphp(php$userGroupphp)php php&php&php php!emptyphp(php$userGroupphp)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp(php$userGroupphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'UserGroupphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elseifphp(php$userGroupphp)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp[php'UserGroupphp.php1php'php]php php=php php$userGroupphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'productCodesphp'php:
php php php php php php php php php php php php php php php php php/php/php breakphp leftphp out
php php php php php php php php php php php php casephp php'productcodesphp'php:
php php php php php php php php php php php php php php php php php$paramsphp[php'Attributephp'php]php php=php php'productCodesphp'php;
php php php php php php php php php php php php php php php php php$paramsphp[php'ProductCodephp.php1php'php]php php=php php$productCodephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Exceptionphp(php'Invalidphp Attributephp Passedphp Inphp.php php Validphp Imagephp Attributesphp arephp launchPermissionphp andphp productCodephp.php'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp informationphp aboutphp anphp attributephp ofphp anphp AMIphp.php Onlyphp onephp attributephp canphp bephp specifiedphp perphp callphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageIdphp php php php php php php php php php php php php php php php php php php IDphp ofphp thephp AMIphp forphp whichphp anphp attributephp willphp bephp describedphp.
php php php php php php*php php@paramphp stringphp php$attributephp php php php php php php php php php php php php php php php php Specifiesphp thephp attributephp tophp describephp.php php Validphp Attributesphp are
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php launchPermissionphp,php productCodes
php php php php php php*php/
php php php php publicphp functionphp describeAttributephp(php$imageIdphp,php php$attributephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeImageAttributephp'php;
php php php php php php php php php$paramsphp[php'ImageIdphp'php]php php=php php$imageIdphp;
php php php php php php php php php$paramsphp[php'Attributephp'php]php php=php php$attributephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'imageIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:imageIdphp/textphp(php)php)php'php)php;

php php php php php php php php php/php/php checkphp forphp launchPermission
php php php php php php php php ifphp(php$attributephp php=php=php php'launchPermissionphp'php)php php{
php php php php php php php php php php php php php$lPnodesphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:launchPermissionphp/ecphp2php:itemphp'php)php;

php php php php php php php php php php php php ifphp(php$lPnodesphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$returnphp[php'launchPermissionphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$lPnodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php'launchPermissionphp'php]php[php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:userIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php checkphp forphp productphp codes
php php php php php php php php ifphp(php$attributephp php=php=php php'productCodesphp'php)php php{
php php php php php php php php php php php php php$pCnodesphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:productCodesphp/ecphp2php:itemphp'php)php;
php php php php php php php php php php php php ifphp(php$pCnodesphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$returnphp[php'productCodesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php foreachphp(php$pCnodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php php php php php php$returnphp[php'productCodesphp'php]php[php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:productCodephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;

php php php php php}

php php php php php/php*php*
php php php php php php*php Resetsphp anphp attributephp ofphp anphp AMIphp tophp itsphp defaultphp valuephp.php php Thephp productCodesphp attributephp cannotphp bephp reset
php php php php php php*
php php php php php php*php php@paramphp stringphp php$imageIdphp php php php php php php php php php php php php php php php php php php IDphp ofphp thephp AMIphp forphp whichphp anphp attributephp willphp bephp resetphp.
php php php php php php*php php@paramphp Stringphp php$attributephp php php php php php php php php php php php php php php php php Specifiesphp thephp attributephp tophp resetphp.php Currentlyphp,php onlyphp launchPermissionphp isphp supportedphp.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Inphp thephp casephp ofphp launchPermissionphp,php allphp publicphp andphp explicitphp launchphp permissionsphp for
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php thephp AMIphp arephp revokedphp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp resetAttributephp(php$imageIdphp,php php$attributephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'ResetImageAttributephp'php;
php php php php php php php php php$paramsphp[php'ImageIdphp'php]php php=php php$imageIdphp;
php php php php php php php php php$paramsphp[php'Attributephp'php]php php=php php$attributephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}
php}
