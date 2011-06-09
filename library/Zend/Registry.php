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
php php*php php@packagephp php php php Zendphp_Registry
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Registryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Genericphp storagephp classphp helpsphp tophp managephp globalphp dataphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Registry
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Registryphp extendsphp ArrayObject
php{
php php php php php/php*php*
php php php php php php*php Classphp namephp ofphp thephp singletonphp registryphp objectphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp staticphp php$php_registryClassNamephp php=php php'Zendphp_Registryphp'php;

php php php php php/php*php*
php php php php php php*php Registryphp objectphp providesphp storagephp forphp sharedphp objectsphp.
php php php php php php*php php@varphp Zendphp_Registry
php php php php php php*php/
php php php php privatephp staticphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Retrievesphp thephp defaultphp registryphp instancephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Registry
php php php php php php*php/
php php php php publicphp staticphp functionphp getInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_registryphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:initphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp registryphp instancephp tophp aphp specifiedphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Registryphp php$registryphp Anphp objectphp instancephp ofphp typephp Zendphp_Registryphp,
php php php php php php*php php php orphp aphp subclassphp.
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Exceptionphp ifphp registryphp isphp alreadyphp initializedphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp setInstancephp(Zendphp_Registryphp php$registryphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_registryphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'Registryphp isphp alreadyphp initializedphp'php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:setClassNamephp(getphp_classphp(php$registryphp)php)php;
php php php php php php php php selfphp:php:php$php_registryphp php=php php$registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp thephp defaultphp registryphp instancephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp staticphp functionphp initphp(php)
php php php php php{
php php php php php php php php selfphp:php:setInstancephp(newphp selfphp:php:php$php_registryClassNamephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp classphp namephp tophp usephp forphp thephp defaultphp registryphp instancephp.
php php php php php php*php Doesphp notphp affectphp thephp currentlyphp initializedphp instancephp,php itphp onlyphp applies
php php php php php php*php forphp thephp nextphp timephp youphp instantiatephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$registryClassName
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Exceptionphp ifphp thephp registryphp isphp initializedphp orphp ifphp the
php php php php php php*php php php classphp namephp isphp notphp validphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp setClassNamephp(php$registryClassNamephp php=php php'Zendphp_Registryphp'php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_registryphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'Registryphp isphp alreadyphp initializedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$registryClassNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php"Argumentphp isphp notphp aphp classphp namephp"php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Loader
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php!classphp_existsphp(php$registryClassNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$registryClassNamephp)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_registryClassNamephp php=php php$registryClassNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp thephp defaultphp registryphp instancephp.
php php php php php php*php Primarilyphp usedphp inphp tearDownphp(php)php inphp unitphp testsphp.
php php php php php php*php php@returnsphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp php_unsetInstancephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_registryphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getterphp methodphp,php basicallyphp samephp asphp offsetGetphp(php)php.
php php php php php php*
php php php php php php*php Thisphp methodphp canphp bephp calledphp fromphp anphp objectphp ofphp typephp Zendphp_Registryphp,php orphp it
php php php php php php*php canphp bephp calledphp staticallyphp.php php Inphp thephp latterphp casephp,php itphp usesphp thephp default
php php php php php php*php staticphp instancephp storedphp inphp thephp classphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$indexphp php-php getphp thephp valuephp associatedphp withphp php$index
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Exceptionphp ifphp nophp entryphp isphp registerdphp forphp php$indexphp.
php php php php php php*php/
php php php php publicphp staticphp functionphp getphp(php$indexphp)
php php php php php{
php php php php php php php php php$instancephp php=php selfphp:php:getInstancephp(php)php;

php php php php php php php php ifphp php(php!php$instancephp-php>offsetExistsphp(php$indexphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php"Nophp entryphp isphp registeredphp forphp keyphp php'php$indexphp'php"php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$instancephp-php>offsetGetphp(php$indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setterphp methodphp,php basicallyphp samephp asphp offsetSetphp(php)php.
php php php php php php*
php php php php php php*php Thisphp methodphp canphp bephp calledphp fromphp anphp objectphp ofphp typephp Zendphp_Registryphp,php orphp it
php php php php php php*php canphp bephp calledphp staticallyphp.php php Inphp thephp latterphp casephp,php itphp usesphp thephp default
php php php php php php*php staticphp instancephp storedphp inphp thephp classphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$indexphp Thephp locationphp inphp thephp ArrayObjectphp inphp whichphp tophp store
php php php php php php*php php php thephp valuephp.
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp objectphp tophp storephp inphp thephp ArrayObjectphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setphp(php$indexphp,php php$valuephp)
php php php php php{
php php php php php php php php php$instancephp php=php selfphp:php:getInstancephp(php)php;
php php php php php php php php php$instancephp-php>offsetSetphp(php$indexphp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp TRUEphp ifphp thephp php$indexphp isphp aphp namedphp valuephp inphp thephp registryphp,
php php php php php php*php orphp FALSEphp ifphp php$indexphp wasphp notphp foundphp inphp thephp registryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$index
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isRegisteredphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_registryphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_registryphp-php>offsetExistsphp(php$indexphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructsphp aphp parentphp ArrayObjectphp withphp default
php php php php php php*php ARRAYphp_ASphp_PROPSphp tophp allowphp accesphp asphp anphp object
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$arrayphp dataphp array
php php php php php php*php php@paramphp integerphp php$flagsphp ArrayObjectphp flags
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$arrayphp php=php arrayphp(php)php,php php$flagsphp php=php parentphp:php:ARRAYphp_ASphp_PROPSphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$arrayphp,php php$flagsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@paramphp stringphp php$index
php php php php php php*php php@returnsphp mixed
php php php php php php*
php php php php php php*php Workaroundphp forphp httpphp:php/php/bugsphp.phpphp.netphp/bugphp.phpphp?idphp=php4php0php4php4php2php php(ZFphp-php9php6php0php)php.
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$indexphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$indexphp,php php$thisphp)php;
php php php php php}

php}
