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
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php BlackHolephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backendphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/ExtendedInterfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backend
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp.phpphp'php;

php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Backendphp_BlackHole
php php php php extendsphp Zendphp_Cachephp_Backend
php php php php implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp|falsephp cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp mixedphp falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Notephp php:php php$dataphp isphp alwaysphp php"stringphp"php php(serializationphp isphp donephp byphp the
php php php php php php*php corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php php php php php php Datasphp tophp cache
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php php$tagsphp php php php php php php php php php php php php Arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp php intphp php php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php php'allphp'php php(defaultphp)php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php php'oldphp'php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php php'matchingTagphp'php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php php'notMatchingTagphp'php php=php>php removephp cachephp entriesphp notphp matchingphp onephp ofphp thephp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php php'matchingAnyTagphp'php php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp cleanphp mode
php php php php php php*php php@paramphp php tagsphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp donphp'tphp matchphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ORphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp notphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsNotMatchingTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp anyphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp anyphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingAnyTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php returnphp php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp metadatasphp forphp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php expirephp php:php thephp expirephp timestamp
php php php php php php*php php-php tagsphp php:php aphp stringphp arrayphp ofphp tags
php php php php php php*php php-php mtimephp php:php timestampphp ofphp lastphp modificationphp time
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp arrayphp arrayphp ofphp metadatasphp php(falsephp ifphp thephp cachephp idphp isphp notphp foundphp)
php php php php php php*php/
php php php php publicphp functionphp getMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givephp php(ifphp possiblephp)php anphp extraphp lifetimephp tophp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@paramphp php intphp php$extraLifetime
php php php php php php*php php@returnphp booleanphp truephp ifphp ok
php php php php php php*php/
php php php php publicphp functionphp touchphp(php$idphp,php php$extraLifetimephp)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp associativephp arrayphp ofphp capabilitiesphp php(booleansphp)php ofphp thephp backend
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php automaticphp_cleaningphp php(isphp automatingphp cleaningphp necessaryphp)
php php php php php php*php php-php tagsphp php(arephp tagsphp supportedphp)
php php php php php php*php php-php expiredphp_readphp php(isphp itphp possiblephp tophp readphp expiredphp cachephp records
php php php php php php*php php php php php php php php php php php php php php php php php php(forphp doNotTestCacheValidityphp optionphp forphp examplephp)php)
php php php php php php*php php-php priorityphp doesphp thephp backendphp dealphp withphp priorityphp whenphp saving
php php php php php php*php php-php infinitephp_lifetimephp php(isphp infinitephp lifetimephp canphp workphp withphp thisphp backendphp)
php php php php php php*php php-php getphp_listphp php(isphp itphp possiblephp tophp getphp thephp listphp ofphp cachephp idsphp andphp thephp completephp listphp ofphp tagsphp)
php php php php php php*
php php php php php php*php php@returnphp arrayphp associativephp ofphp withphp capabilities
php php php php php php*php/
php php php php publicphp functionphp getCapabilitiesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'automaticphp_cleaningphp'php php=php>php truephp,
php php php php php php php php php php php php php'tagsphp'php php php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'expiredphp_readphp'php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'priorityphp'php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'infinitephp_lifetimephp'php php php=php>php truephp,
php php php php php php php php php php php php php'getphp_listphp'php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php PUBLICphp METHODphp FORphp UNITphp TESTINGphp ONLYphp php!
php php php php php php*
php php php php php php*php Forcephp aphp cachephp recordphp tophp expire
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php/
php php php php publicphp functionphp php_php_php_expirephp(php$idphp)
php php php php php{
php php php php php}
php}
