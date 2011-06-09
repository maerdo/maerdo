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
php php*php php@versionphp php php php php$Idphp:php Ebsphp.phpphp php2php2php0php4php7php php2php0php1php0php-php0php4php-php2php8php php2php2php:php1php4php:php5php1Zphp shaharphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Amazonphp/Ecphp2php/Abstractphp.phpphp'php;

php/php*php*
php php*php Anphp Amazonphp ECphp2php interfacephp tophp createphp,php describephp,php attachphp,php detachphp andphp deletephp Elasticphp Block
php php*php Storagephp Volumesphp andphp Snaphsotsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp Ecphp2
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Ebsphp extendsphp Zendphp_Servicephp_Amazonphp_Ecphp2php_Abstract
php{
php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Amazonphp EBSphp volumephp thatphp youphp canphp mountphp fromphp anyphp Amazonphp ECphp2php instancephp.
php php php php php php*
php php php php php php*php Youphp mustphp specifyphp anphp availabilityphp zonephp whenphp creatingphp aphp volumephp.php Thephp volumephp and
php php php php php php*php anyphp instancephp tophp whichphp itphp attachesphp mustphp bephp inphp thephp samephp availabilityphp zonephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$sizephp php php php php php php php php php php php php php php php php php Thephp sizephp ofphp thephp volumephp,php inphp GiBphp.
php php php php php php*php php@paramphp stringphp php$availabilityZonephp php php php php php Thephp availabilityphp zonephp inphp whichphp tophp createphp thephp newphp volumephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp createNewVolumephp(php$sizephp,php php$availabilityZonephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'CreateVolumephp'php;
php php php php php php php php php$paramsphp[php'AvailabilityZonephp'php]php php=php php$availabilityZonephp;
php php php php php php php php php$paramsphp[php'Sizephp'php]php php=php php$sizephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'volumeIdphp'php]php php php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:volumeIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'sizephp'php]php php php php php php php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:sizephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statusphp'php]php php php php php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:statusphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'createTimephp'php]php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:createTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'availabilityZonephp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:availabilityZonephp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Amazonphp EBSphp volumephp thatphp youphp canphp mountphp fromphp anyphp Amazonphp ECphp2php instancephp.
php php php php php php*
php php php php php php*php Youphp mustphp specifyphp anphp availabilityphp zonephp whenphp creatingphp aphp volumephp.php Thephp volumephp and
php php php php php php*php anyphp instancephp tophp whichphp itphp attachesphp mustphp bephp inphp thephp samephp availabilityphp zonephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$snapshotIdphp php php php php php php php php php php php Thephp snapshotphp fromphp whichphp tophp createphp thephp newphp volumephp.
php php php php php php*php php@paramphp stringphp php$availabilityZonephp php php php php php Thephp availabilityphp zonephp inphp whichphp tophp createphp thephp newphp volumephp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp createVolumeFromSnapshotphp(php$snapshotIdphp,php php$availabilityZonephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'CreateVolumephp'php;
php php php php php php php php php$paramsphp[php'AvailabilityZonephp'php]php php=php php$availabilityZonephp;
php php php php php php php php php$paramsphp[php'SnapshotIdphp'php]php php=php php$snapshotIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'volumeIdphp'php]php php php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:volumeIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'sizephp'php]php php php php php php php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:sizephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statusphp'php]php php php php php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:statusphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'createTimephp'php]php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:createTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'availabilityZonephp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:availabilityZonephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'snapshotIdphp'php]php php php php php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:snapshotIdphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Listsphp onephp orphp morephp Amazonphp EBSphp volumesphp thatphp youphp ownphp,php Ifphp youphp dophp not
php php php php php php*php specifyphp anyphp volumesphp,php Amazonphp EBSphp returnsphp allphp volumesphp thatphp youphp ownphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$volumeIdphp php php php php php php php Thephp IDphp orphp arrayphp ofphp IDphp'sphp ofphp thephp volumephp(sphp)php tophp list
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeVolumephp(php$volumeIdphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeVolumesphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$volumeIdphp)php php&php&php php!emptyphp(php$volumeIdphp)php)php php{
php php php php php php php php php php php php foreachphp(php$volumeIdphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'VolumeIdphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$volumeIdphp)php php{
php php php php php php php php php php php php php$paramsphp[php'VolumeIdphp.php1php'php]php php=php php$volumeIdphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$nodesphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:volumeSetphp/ecphp2php:itemphp'php,php php$responsephp-php>getDocumentphp(php)php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$itemphp[php'volumeIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:volumeIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'sizephp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:sizephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'statusphp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:statusphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'createTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:createTimephp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$attachmentSetphp php=php php$xpathphp-php>queryphp(php'ecphp2php:attachmentSetphp/ecphp2php:itemphp'php,php php$nodephp)php;
php php php php php php php php php php php php ifphp(php$attachmentSetphp-php>lengthphp php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$php_asphp php=php php$attachmentSetphp-php>itemphp(php0php)php;
php php php php php php php php php php php php php php php php php$asphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php$asphp[php'volumeIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:volumeIdphp/textphp(php)php)php'php,php php$php_asphp)php;
php php php php php php php php php php php php php php php php php$asphp[php'instanceIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:instanceIdphp/textphp(php)php)php'php,php php$php_asphp)php;
php php php php php php php php php php php php php php php php php$asphp[php'devicephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:devicephp/textphp(php)php)php'php,php php$php_asphp)php;
php php php php php php php php php php php php php php php php php$asphp[php'statusphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:statusphp/textphp(php)php)php'php,php php$php_asphp)php;
php php php php php php php php php php php php php php php php php$asphp[php'attachTimephp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:attachTimephp/textphp(php)php)php'php,php php$php_asphp)php;
php php php php php php php php php php php php php php php php php$itemphp[php'attachmentSetphp'php]php php=php php$asphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;
php php php php php php php php php php php php unsetphp(php$itemphp,php php$nodephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php publicphp functionphp describeAttachedVolumesphp(php$instanceIdphp)
php php php php php{
php php php php php php php php php$volumesphp php=php php$thisphp-php>describeVolumephp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp(php$volumesphp asphp php$volphp)php php{
php php php php php php php php php php php php ifphp(issetphp(php$volphp[php'attachmentSetphp'php]php)php php&php&php php$volphp[php'attachmentSetphp'php]php[php'instanceIdphp'php]php php=php=php php$instanceIdphp)php php{
php php php php php php php php php php php php php php php php php$returnphp[php]php php=php php$volphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attachesphp anphp Amazonphp EBSphp volumephp tophp anphp instance
php php php php php php*
php php php php php php*php php@paramphp stringphp php$volumeIdphp php php php php php php php php php php php php php Thephp IDphp ofphp thephp Amazonphp EBSphp volume
php php php php php php*php php@paramphp stringphp php$instanceIdphp php php php php php php php php php php php Thephp IDphp ofphp thephp instancephp tophp whichphp thephp volumephp attaches
php php php php php php*php php@paramphp stringphp php$devicephp php php php php php php php php php php php php php php php Specifiesphp howphp thephp devicephp isphp exposedphp tophp thephp instancephp php(ephp.gphp.php,php php/devphp/sdhphp)php.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp attachVolumephp(php$volumeIdphp,php php$instanceIdphp,php php$devicephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'AttachVolumephp'php;
php php php php php php php php php$paramsphp[php'VolumeIdphp'php]php php php php php php=php php$volumeIdphp;
php php php php php php php php php$paramsphp[php'InstanceIdphp'php]php php php php=php php$instanceIdphp;
php php php php php php php php php$paramsphp[php'Devicephp'php]php php php php php php php php=php php$devicephp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'volumeIdphp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:volumeIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'instanceIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:instanceIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'devicephp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:devicephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statusphp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:statusphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'attachTimephp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:attachTimephp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Detachesphp anphp Amazonphp EBSphp volumephp fromphp anphp instance
php php php php php php*
php php php php php php*php php@paramphp stringphp php$volumeIdphp php php php php php php php php php php php php php Thephp IDphp ofphp thephp Amazonphp EBSphp volume
php php php php php php*php php@paramphp stringphp php$instanceIdphp php php php php php php php php php php php Thephp IDphp ofphp thephp instancephp fromphp whichphp thephp volumephp willphp detach
php php php php php php*php php@paramphp stringphp php$devicephp php php php php php php php php php php php php php php php Thephp devicephp name
php php php php php php*php php@paramphp booleanphp php$forcephp php php php php php php php php php php php php php php php Forcesphp detachmentphp ifphp thephp previousphp detachmentphp attemptphp didphp notphp occurphp cleanly
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(loggingphp intophp anphp instancephp,php unmountingphp thephp volumephp,php andphp detachingphp normallyphp)php.
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp optionphp canphp leadphp tophp dataphp lossphp orphp aphp corruptedphp filephp systemphp.php Usephp thisphp option
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php onlyphp asphp aphp lastphp resortphp tophp detachphp anphp instancephp fromphp aphp failedphp instancephp.php The
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php instancephp willphp notphp havephp anphp opportunityphp tophp flushphp filephp systemphp cachesphp nor
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php filephp systemphp metaphp dataphp.
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp detachVolumephp(php$volumeIdphp,php php$instanceIdphp php=php nullphp,php php$devicephp php=php nullphp,php php$forcephp php=php falsephp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'DetachVolumephp'php;
php php php php php php php php php$paramsphp[php'VolumeIdphp'php]php php php php php php=php php$volumeIdphp;
php php php php php php php php php$paramsphp[php'InstanceIdphp'php]php php php php=php strvalphp(php$instanceIdphp)php;
php php php php php php php php php$paramsphp[php'Devicephp'php]php php php php php php php php=php strvalphp(php$devicephp)php;
php php php php php php php php php$paramsphp[php'Forcephp'php]php php php php php php php php php=php strvalphp(php$forcephp)php;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'volumeIdphp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:volumeIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'instanceIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:instanceIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'devicephp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:devicephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statusphp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:statusphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'attachTimephp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:attachTimephp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp anphp Amazonphp EBSphp volume
php php php php php php*
php php php php php php*php php@paramphp stringphp php$volumeIdphp php php php php php php php php php php php php php Thephp IDphp ofphp thephp volumephp tophp delete
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deleteVolumephp(php$volumeIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'DeleteVolumephp'php;
php php php php php php php php php$paramsphp[php'VolumeIdphp'php]php php php php php php=php php$volumeIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;
php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp snapshotphp ofphp anphp Amazonphp EBSphp volumephp andphp storesphp itphp inphp Amazonphp Sphp3php.php Youphp canphp usephp snapshotsphp forphp backupsphp,
php php php php php php*php tophp launchphp instancesphp fromphp identicalphp snapshotsphp,php andphp tophp savephp dataphp beforephp shuttingphp downphp anphp instance
php php php php php php*
php php php php php php*php php@paramphp stringphp php$volumeIdphp php php php php php php php php php php php php php Thephp IDphp ofphp thephp Amazonphp EBSphp volumephp tophp snapshot
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp createSnapshotphp(php$volumeIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'CreateSnapshotphp'php;
php php php php php php php php php$paramsphp[php'VolumeIdphp'php]php php php php php php=php php$volumeIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php php$returnphp[php'snapshotIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:snapshotIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'volumeIdphp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:volumeIdphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'statusphp'php]php php php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:statusphp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'startTimephp'php]php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:startTimephp/textphp(php)php)php'php)php;
php php php php php php php php php$returnphp[php'progressphp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:progressphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Describesphp thephp statusphp ofphp Amazonphp EBSphp snapshots
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$snapshotIdphp php php php php php Thephp IDphp orphp arryphp ofphp IDphp'sphp ofphp thephp Amazonphp EBSphp snapshot
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp describeSnapshotphp(php$snapshotIdphp php=php nullphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php=php php'DescribeSnapshotsphp'php;

php php php php php php php php ifphp(isphp_arrayphp(php$snapshotIdphp)php php&php&php php!emptyphp(php$snapshotIdphp)php)php php{
php php php php php php php php php php php php foreachphp(php$snapshotIdphp asphp php$kphp=php>php$namephp)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'SnapshotIdphp.php'php php.php php(php$kphp+php1php)php]php php=php php$namephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elseifphp(php$snapshotIdphp)php php{
php php php php php php php php php php php php php$paramsphp[php'SnapshotIdphp.php1php'php]php php=php php$snapshotIdphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$nodesphp php=php php$xpathphp-php>queryphp(php'php/php/ecphp2php:snapshotSetphp/ecphp2php:itemphp'php,php php$responsephp-php>getDocumentphp(php)php)php;

php php php php php php php php php$returnphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$nodesphp asphp php$nodephp)php php{
php php php php php php php php php php php php php$itemphp php=php arrayphp(php)php;

php php php php php php php php php php php php php$itemphp[php'snapshotIdphp'php]php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:snapshotIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'volumeIdphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:volumeIdphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'statusphp'php]php php php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:statusphp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'startTimephp'php]php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:startTimephp/textphp(php)php)php'php,php php$nodephp)php;
php php php php php php php php php php php php php$itemphp[php'progressphp'php]php php php php=php php$xpathphp-php>evaluatephp(php'stringphp(ecphp2php:progressphp/textphp(php)php)php'php,php php$nodephp)php;

php php php php php php php php php php php php php$returnphp[php]php php=php php$itemphp;
php php php php php php php php php php php php unsetphp(php$itemphp,php php$nodephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp snapshotphp ofphp anphp Amazonphp EBSphp php volumephp thatphp isphp storedphp inphp Amazonphp Sphp3
php php php php php php*
php php php php php php*php php@paramphp stringphp php$snapshotIdphp php php php php php php php php php php php Thephp IDphp ofphp thephp Amazonphp EBSphp snapshotphp tophp delete
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp deleteSnapshotphp(php$snapshotIdphp)
php php php php php{
php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php php$paramsphp[php'Actionphp'php]php php php php php php php php=php php'DeleteSnapshotphp'php;
php php php php php php php php php$paramsphp[php'SnapshotIdphp'php]php php php php=php php$snapshotIdphp;

php php php php php php php php php$responsephp php=php php$thisphp-php>sendRequestphp(php$paramsphp)php;

php php php php php php php php php$xpathphp php=php php$responsephp-php>getXPathphp(php)php;
php php php php php php php php php$returnphp php=php php$xpathphp-php>evaluatephp(php'stringphp(php/php/ecphp2php:returnphp/textphp(php)php)php'php)php;

php php php php php php php php returnphp php(php$returnphp php=php=php=php php"truephp"php)php;
php php php php php}
php}
