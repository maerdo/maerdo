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
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Defaultphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Zendphp_InfoCardphp_Adapterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/InfoCardphp/Adapterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Thephp defaultphp InfoCardphp componentphp Adapterphp whichphp servesphp asphp aphp passphp-thruphp placeholder
php php*php forphp developersphp.php Initiallyphp developedphp tophp providephp aphp callbackphp mechanismphp tophp storephp andphp retrieve
php php*php assertionsphp asphp partphp ofphp thephp validationphp processphp itphp canphp bephp usedphp anytimephp callbackphp facilities
php php*php arephp necessary
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_InfoCard
php php*php php@subpackagephp Adapter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_InfoCardphp_Adapterphp_Defaultphp implementsphp Zendphp_InfoCardphp_Adapterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Storephp thephp assertionphp php(passphp-thruphp doesphp nothingphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$assertionURIphp Thephp assertionphp typephp URI
php php php php php php*php php@paramphp stringphp php$assertionIDphp Thephp specificphp assertionphp ID
php php php php php php*php php@paramphp arrayphp php$conditionsphp Anphp arrayphp ofphp claimsphp tophp storephp associatedphp withphp thephp assertion
php php php php php php*php php@returnphp boolphp Alwaysphp returnsphp truephp php(wouldphp returnphp falsephp onphp storephp failurephp)
php php php php php php*php/
php php php php publicphp functionphp storeAssertionphp(php$assertionURIphp,php php$assertionIDphp,php php$conditionsphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anphp assertionphp php(passphp-thruphp doesphp nothingphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$assertionURIphp Thephp assertionphp typephp URI
php php php php php php*php php@paramphp stringphp php$assertionIDphp Thephp assertionphp IDphp tophp retrieve
php php php php php php*php php@returnphp mixedphp Falsephp ifphp thephp assertionphp IDphp wasphp notphp foundphp forphp thatphp URIphp,php orphp anphp arrayphp of
php php php php php php*php php php php php php php php php php php php php php php conditionsphp associatedphp withphp thatphp assertionphp ifphp foundphp php(alwaysphp returnsphp falsephp)
php php php php php php*php/
php php php php publicphp functionphp retrieveAssertionphp(php$assertionURIphp,php php$assertionIDphp)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp assertionphp php(passphp-thruphp doesphp nothingphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$assertionURIphp Thephp assertionphp typephp URI
php php php php php php*php php@paramphp stringphp php$assertionIDphp Thephp assertionphp IDphp tophp remove
php php php php php php*php php@returnphp boolphp Alwaysphp returnsphp truephp php(falsephp onphp removalphp failurephp)
php php php php php php*php/
php php php php publicphp functionphp removeAssertionphp(php$assertionURIphp,php php$assertionIDphp)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}
php}
