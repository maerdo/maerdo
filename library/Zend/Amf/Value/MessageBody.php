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
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php MessageBodyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Anphp AMFphp Messagephp containsphp informationphp aboutphp thephp actualphp individual
php php*php transactionphp thatphp isphp tophp bephp performedphp.php Itphp specifiesphp thephp remote
php php*php operationphp thatphp isphp tophp bephp performedphp;php aphp localphp php(clientphp)php operation
php php*php tophp bephp invokedphp uponphp successphp;php andphp,php thephp dataphp tophp bephp usedphp inphp the
php php*php operationphp.
php php*php php<pphp/php>
php php*php Thisphp Messagephp structurephp definesphp howphp aphp localphp clientphp would
php php*php invokephp aphp methodphp/operationphp onphp aphp remotephp serverphp.php Additionallyphp,
php php*php thephp responsephp fromphp thephp Serverphp isphp structuredphp identicallyphp.
php php*
php php*php php@packagephp php php php Zendphp_Amf
php php*php php@subpackagephp Value
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Amfphp_Valuephp_MessageBody
php{
php php php php php/php*php*
php php php php php php*php Aphp stringphp describingphp whichphp operationphp,php functionphp,php orphp method
php php php php php php*php isphp tophp bephp remotleyphp invokedphp.
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_targetUriphp php=php php"php"php;

php php php php php/php*php*
php php php php php php*php Universalphp Resourcephp Identifierphp thatphp uniquelyphp targetsphp thephp originatorphp's
php php php php php php*php Objectphp thatphp shouldphp receivephp thephp serverphp'sphp responsephp.php Thephp serverphp will
php php php php php php*php usephp thisphp pathphp specificationphp tophp targetphp thephp php"OnResultphp(php)php"php orphp php"onStatusphp(php)php"
php php php php php php*php handlersphp withinphp thephp clientphp.php Forphp Flashphp,php itphp specifiesphp anphp ActionScript
php php php php php php*php Objectphp pathphp onlyphp.php Thephp NetResponsephp objectphp pointedphp tophp byphp thephp Responsephp Uri
php php php php php php*php containsphp thephp connectionphp statephp informationphp.php Passingphp/specifyingphp this
php php php php php php*php providesphp aphp convenientphp mechanismphp forphp thephp clientphp/serverphp tophp sharephp access
php php php php php php*php tophp anphp objectphp thatphp isphp managingphp thephp statephp ofphp thephp sharedphp connectionphp.
php php php php php php*
php php php php php php*php Sincephp thephp serverphp willphp usephp thisphp fieldphp inphp thephp eventphp ofphp anphp errorphp,
php php php php php php*php thisphp fieldphp isphp requiredphp evenphp ifphp aphp successfulphp serverphp requestphp would
php php php php php php*php notphp bephp expectedphp tophp returnphp aphp valuephp tophp thephp clientphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_responseUriphp php=php php"php"php;

php php php php php/php*php*
php php php php php php*php Containsphp thephp actualphp dataphp associatedphp withphp thephp operationphp.php Itphp contains
php php php php php php*php thephp clientphp'sphp parameterphp dataphp thatphp isphp passedphp tophp thephp serverphp'sphp operationphp/methodphp.
php php php php php php*php Whenphp serializingphp aphp rootphp levelphp dataphp typephp orphp aphp parameterphp listphp arrayphp,php no
php php php php php php*php namephp fieldphp isphp includedphp.php Thatphp isphp,php thephp dataphp isphp anonomouslyphp represented
php php php php php php*php asphp php"Typephp Markerphp"php/php"Valuephp"php pairsphp.php Whenphp serializingphp memberphp dataphp,php thephp dataphp is
php php php php php php*php representedphp asphp aphp seriesphp ofphp php"Namephp"php/php"Typephp"php/php"Valuephp"php combinationsphp.
php php php php php php*
php php php php php php*php Forphp serverphp generatedphp responsesphp,php itphp mayphp containphp anyphp ActionScript
php php php php php php*php dataphp/objectsphp thatphp thephp serverphp wasphp expectedphp tophp providephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_dataphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$targetUri
php php php php php php*php php@paramphp php stringphp php$responseUri
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$targetUriphp,php php$responseUriphp,php php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>setTargetUriphp(php$targetUriphp)php;
php php php php php php php php php$thisphp-php>setResponseUriphp(php$responseUriphp)php;
php php php php php php php php php$thisphp-php>setDataphp(php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp targetphp Uri
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTargetUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_targetUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp targetphp Uri
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$targetUri
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_MessageBody
php php php php php php*php/
php php php php publicphp functionphp setTargetUriphp(php$targetUriphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$targetUriphp)php php{
php php php php php php php php php php php php php$targetUriphp php=php php'php'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_targetUriphp php=php php(stringphp)php php$targetUriphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp targetphp Uri
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getResponseUriphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_responseUriphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp responsephp Uri
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$responseUri
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_MessageBody
php php php php php php*php/
php php php php publicphp functionphp setResponseUriphp(php$responseUriphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$responseUriphp)php php{
php php php php php php php php php php php php php$responseUriphp php=php php'php'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_responseUriphp php=php php$responseUriphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp responsephp data
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDataphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp responsephp data
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$data
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_MessageBody
php php php php php php*php/
php php php php publicphp functionphp setDataphp(php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp replyphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodName
php php php php php php*php php@returnphp Zendphp_Amfphp_Valuephp_MessageBody
php php php php php php*php/
php php php php publicphp functionphp setReplyMethodphp(php$methodNamephp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php#php^php[php/php?php]php#php'php,php php$methodNamephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_targetUriphp php=php rtrimphp(php$thisphp-php>php_targetUriphp,php php'php/php'php)php php.php php'php/php'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_targetUriphp php=php php$thisphp-php>php_targetUriphp php.php php$methodNamephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
