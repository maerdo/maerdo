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
php php*php php@versionphp php php php php$Idphp:php GoTophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Internallyphp usedphp classesphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp.phpphp'php;

requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Dictionaryphp.phpphp'php;
requirephp_oncephp php'Zendphp/Pdfphp/Elementphp/Namephp.phpphp'php;


php/php*php*php Zendphp_Pdfphp_Actionphp php*php/
requirephp_oncephp php'Zendphp/Pdfphp/Actionphp.phpphp'php;

php/php*php*
php php*php PDFphp php'Gophp tophp'php action
php php*
php php*php php@packagephp php php php Zendphp_Pdf
php php*php php@subpackagephp Actions
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Pdfphp_Actionphp_GoTophp extendsphp Zendphp_Pdfphp_Action
php{
php php php php php/php*php*
php php php php php php*php GoTophp Actionphp destination
php php php php php php*
php php php php php php*php php@varphp Zendphp_Pdfphp_Destination
php php php php php php*php/
php php php php protectedphp php$php_destinationphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Elementphp_Dictionaryphp php$dictionary
php php php php php php*php php@paramphp SplObjectStoragephp php php php php php php php php php php php php$processedActionsphp php listphp ofphp alreadyphp processedphp actionphp dictionariesphp,php usedphp tophp avoidphp cyclicphp references
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Pdfphp_Elementphp php$dictionaryphp,php SplObjectStoragephp php$processedActionsphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$dictionaryphp,php php$processedActionsphp)php;

php php php php php php php php php$thisphp-php>php_destinationphp php=php Zendphp_Pdfphp_Destinationphp:php:loadphp(php$dictionaryphp-php>Dphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp Zendphp_Pdfphp_Actionphp_GoTophp objectphp usingphp specifiedphp destination
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Destinationphp|stringphp php$destination
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp_GoTo
php php php php php php*php/
php php php php publicphp staticphp functionphp createphp(php$destinationphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$destinationphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Destinationphp/Namedphp.phpphp'php;
php php php php php php php php php php php php php$destinationphp php=php Zendphp_Pdfphp_Destinationphp_Namedphp:php:createphp(php$destinationphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$destinationphp instanceofphp Zendphp_Pdfphp_Destinationphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Pdfphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Pdfphp_Exceptionphp(php'php$destinationphp parameterphp mustphp bephp aphp Zendphp_Pdfphp_Destinationphp objectphp orphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$dictionaryphp php=php newphp Zendphp_Pdfphp_Elementphp_Dictionaryphp(php)php;
php php php php php php php php php$dictionaryphp-php>Typephp php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'Actionphp'php)php;
php php php php php php php php php$dictionaryphp-php>Sphp php php php php=php newphp Zendphp_Pdfphp_Elementphp_Namephp(php'GoTophp'php)php;
php php php php php php php php php$dictionaryphp-php>Nextphp php=php nullphp;
php php php php php php php php php$dictionaryphp-php>Dphp php php php php=php php$destinationphp-php>getResourcephp(php)php;

php php php php php php php php returnphp newphp Zendphp_Pdfphp_Actionphp_GoTophp(php$dictionaryphp,php newphp SplObjectStoragephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp gotophp actionphp destination
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Pdfphp_Destinationphp|stringphp php$destination
php php php php php php*php php@returnphp Zendphp_Pdfphp_Actionphp_GoTo
php php php php php php*php/
php php php php publicphp functionphp setDestinationphp(Zendphp_Pdfphp_Destinationphp php$destinationphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_destinationphp php=php php$destinationphp;

php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>touchphp(php)php;
php php php php php php php php php$thisphp-php>php_actionDictionaryphp-php>Dphp php=php php$destinationphp-php>getResourcephp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp gotophp actionphp destination
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Pdfphp_Destination
php php php php php php*php/
php php php php publicphp functionphp getDestinationphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_destinationphp;
php php php php php}
php}
