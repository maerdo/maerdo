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
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php URIphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Stringphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Booleanphp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Actionphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Actionphp.phpphp'php;


php/php*php*
php php*php PDFphp php'Resolvephp aphp uniformphp resourcephp identifierphp'php action
php php*
php php*php Aphp URIphp actionphp causesphp aphp URIphp tophp bephp resolvedphp.
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Actionphp_URIphp extendsphp Zendphp_Pdfphp_Action
php{
php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dictionary
php php php php php php*php php@paramphp SplObjectStoragephp php php php php php php php php php php php php$processedActionsphp php listphp ofphp alreadyphp processedphp actionphp dictionariesphp,php usedphp tophp avoidphp cyclicphp references
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$dictionaryphp,php SplObjectStoragephp php$processedActionsphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dictionaryphp,php php$processedActionsphp)php;

php php php php php php php php ifphp php(php$dictionaryphp-php>URIphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'URIphp actionphp dictionaryphp entryphp isphp requiredphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp URI
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uri
php php php php php php*php php@returnphp true
php php php php php php*php php@throwsphp Zendphp_Pdfphp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_validateUriphp(php$uriphp)
php php php php php{
php php php php php php php php php$schemephp php=php parsephp_urlphp(php(stringphp)php$uriphp,php PHPphp_URLphp_SCHEMEphp)php;
php php php php php php php php ifphp php(php$schemephp php=php=php=php falsephp php|php|php php$schemephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'Invalidphp URIphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp Zendphp_Pdfphp_Actionphp_URIphp objectphp usingphp specifiedphp uri
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$uriphp php php php Thephp URIphp tophp resolvephp,php encodedphp inphp php7php-bitphp ASCII
php php php php php php*php php@paramphp booleanphp php$isMapphp php Aphp flagphp specifyingphp whetherphp tophp trackphp thephp mousephp positionphp whenphp thephp URIphp isphp resolved
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp_URI
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$uriphp,php php$isMapphp php=php falsephp)
php php php php php{
php php php php php php php php selfphp:php:php_validateUriphp(php$uriphp)php;

php php php php php php php php php$dictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php$dictionaryphp-php>Typephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Actionphp'php)php;
php php php php php php php php php$dictionaryphp-php>Sphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'URIphp'php)php;
php php php php php php php php php$dictionaryphp-php>Nextphp php=php nullphp;
php php php php php php php php php$dictionaryphp-php>URIphp php php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$uriphp)php;
php php php php php php php php ifphp php(php$isMapphp)php php{
php php php php php php php php php php php php php$dictionaryphp-php>IsMapphp php=php newphp Zendphp_Pdfphp_Elementphp_Booleanphp(truephp)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_URIphp(php$dictionaryphp,php newphp SplObjectStoragephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp URIphp tophp resolve
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uriphp php php Thephp uriphp tophp resolvephp,php encodedphp inphp php7php-bitphp ASCIIphp.
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp_URI
php php php php php php*php/
php php php php publicphp functionphp setUriphp(php$uriphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_validateUriphp(php$uriphp)php;

php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>touchphp(php)php;
php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>URIphp php=php newphp Zendphp_Pdfphp_Elementphp_Stringphp(php$uriphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp URIphp tophp resolve
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionDictionaryphp-php>URIphp-php>valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp IsMapphp property
php php php php php php*
php php php php php php*php Ifphp thephp IsMapphp flagphp isphp truephp andphp thephp userphp hasphp triggeredphp thephp URIphp actionphp byphp clicking
php php php php php php*php anphp annotationphp,php thephp coordinatesphp ofphp thephp mousephp positionphp atphp thephp timephp thephp actionphp is
php php php php php php*php performedphp shouldphp bephp transformedphp fromphp devicephp spacephp tophp userphp spacephp andphp thenphp offset
php php php php php php*php relativephp tophp thephp upperphp-leftphp cornerphp ofphp thephp annotationphp rectanglephp.
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$isMapphp php Aphp flagphp specifyingphp whetherphp tophp trackphp thephp mousephp positionphp whenphp thephp URIphp isphp resolved
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp_URI
php php php php php php*php/
php php php php publicphp functionphp setIsMapphp(php$isMapphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>touchphp(php)php;

php php php php php php php php ifphp php(php$isMapphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>IsMapphp php=php newphp Zendphp_Pdfphp_Elementphp_Booleanphp(truephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>IsMapphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp IsMapphp property
php php php php php php*
php php php php php php*php Ifphp thephp IsMapphp flagphp isphp truephp andphp thephp userphp hasphp triggeredphp thephp URIphp actionphp byphp clicking
php php php php php php*php anphp annotationphp,php thephp coordinatesphp ofphp thephp mousephp positionphp atphp thephp timephp thephp actionphp is
php php php php php php*php performedphp shouldphp bephp transformedphp fromphp devicephp spacephp tophp userphp spacephp andphp thenphp offset
php php php php php php*php relativephp tophp thephp upperphp-leftphp cornerphp ofphp thephp annotationphp rectanglephp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getIsMapphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionDictionaryphp-php>IsMapphp php!php=php=php nullphp php php&php&
php php php php php php php php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>IsMapphp-php>valuephp;
php php php php php}
php}
