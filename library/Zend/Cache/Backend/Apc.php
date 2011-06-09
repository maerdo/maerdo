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
php php*php php@versionphp php php php php$Idphp:php Apcphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Cachephp_Backendphp_Apcphp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Logphp message
php php php php php php*php/
php php php php constphp TAGSphp_UNSUPPORTEDphp_BYphp_CLEANphp_OFphp_APCphp_BACKENDphp php=php php'Zendphp_Cachephp_Backendphp_Apcphp:php:cleanphp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Apcphp backendphp'php;
php php php php constphp TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_APCphp_BACKENDphp php=php php php'Zendphp_Cachephp_Backendphp_Apcphp:php:savephp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Apcphp backendphp'php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'apcphp'php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp apcphp extensionphp mustphp bephp loadedphp forphp usingphp thisphp backendphp php!php'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php WARNINGphp php$doNotTestCacheValidityphp=truephp isphp unsupportedphp byphp thephp Apcphp backend
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp cachedphp datasphp php(orphp falsephp)
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php$tmpphp php=php apcphp_fetchphp(php$idphp)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$tmpphp)php)php php{
php php php php php php php php php php php php returnphp php$tmpphp[php0php]php;
php php php php php php php php php}
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
php php php php php php php php php$tmpphp php=php apcphp_fetchphp(php$idphp)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$tmpphp)php)php php{
php php php php php php php php php php php php returnphp php$tmpphp[php1php]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Notephp php:php php$dataphp isphp alwaysphp php"stringphp"php php(serializationphp isphp donephp byphp the
php php php php php php*php corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dataphp datasphp tophp cache
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp intphp php$specificLifetimephp ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php php$lifetimephp php=php php$thisphp-php>getLifetimephp(php$specificLifetimephp)php;
php php php php php php php php php$resultphp php=php apcphp_storephp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php,php php$lifetimephp)php,php php$lifetimephp)php;
php php php php php php php php ifphp php(countphp(php$tagsphp)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_APCphp_BACKENDphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php returnphp apcphp_deletephp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php php'allphp'php php(defaultphp)php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php php'oldphp'php php php php php php php php php php php php php=php>php unsupported
php php php php php php*php php'matchingTagphp'php php php php php=php>php unsupported
php php php php php php*php php'notMatchingTagphp'php php=php>php unsupported
php php php php php php*php php'matchingAnyTagphp'php php=php>php unsupported
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp arrayphp ofphp tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php php php php php returnphp apcphp_clearphp_cachephp(php'userphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Apcphp:php:cleanphp(php)php php:php CLEANINGphp_MODEphp_OLDphp isphp unsupportedphp byphp thephp Apcphp backendphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_CLEANphp_OFphp_APCphp_BACKENDphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp truephp ifphp thephp automaticphp cleaningphp isphp availablephp forphp thephp backend
php php php php php php*
php php php php php php*php DEPRECATEDphp php:php usephp getCapabilitiesphp(php)php instead
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAutomaticCleaningAvailablephp(php)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php php$memphp php=php apcphp_smaphp_infophp(truephp)php;
php php php php php php php php php$memSizephp php php php php=php php$memphp[php'numphp_segphp'php]php php*php php$memphp[php'segphp_sizephp'php]php;
php php php php php php php php php$memAvailablephp=php php$memphp[php'availphp_memphp'php]php;
php php php php php php php php php$memUsedphp php=php php$memSizephp php-php php$memAvailablephp;
php php php php php php php php ifphp php(php$memSizephp php=php=php php0php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'canphp\php'tphp getphp apcphp memoryphp sizephp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$memUsedphp php>php php$memSizephp)php php{
php php php php php php php php php php php php returnphp php1php0php0php;
php php php php php php php php php}
php php php php php php php php returnphp php(php(intphp)php php(php1php0php0php.php php*php php(php$memUsedphp php/php php$memSizephp)php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_APCphp_BACKENDphp)php;
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
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_APCphp_BACKENDphp)php;
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
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_APCphp_BACKENDphp)php;
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp idsphp whichphp matchphp anyphp givenphp tags
php php php php php php*
php php php php php php*php Inphp casephp ofphp multiplephp tagsphp,php aphp logicalphp ANDphp isphp madephp betweenphp tags
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp arrayphp arrayphp ofphp anyphp matchingphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsMatchingAnyTagsphp(php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_APCphp_BACKENDphp)php;
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php php$resphp php=php arrayphp(php)php;
php php php php php php php php php$arrayphp php=php apcphp_cachephp_infophp(php'userphp'php,php falsephp)php;
php php php php php php php php php$recordsphp php=php php$arrayphp[php'cachephp_listphp'php]php;
php php php php php php php php foreachphp php(php$recordsphp asphp php$recordphp)php php{
php php php php php php php php php php php php php$resphp[php]php php=php php$recordphp[php'infophp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$resphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp metadatasphp forphp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php Thephp arrayphp mustphp includephp thesephp keysphp php:
php php php php php php*php php-php expirephp php:php thephp expirephp timestamp
php php php php php php*php php-php tagsphp php:php aphp stringphp arrayphp ofphp tags
php php php php php php*php php-php mtimephp php:php timestampphp ofphp lastphp modificationphp time
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@returnphp arrayphp arrayphp ofphp metadatasphp php(falsephp ifphp thephp cachephp idphp isphp notphp foundphp)
php php php php php php*php/
php php php php publicphp functionphp getMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php php$tmpphp php=php apcphp_fetchphp(php$idphp)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$tmpphp)php)php php{
php php php php php php php php php php php php php$dataphp php=php php$tmpphp[php0php]php;
php php php php php php php php php php php php php$mtimephp php=php php$tmpphp[php1php]php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$tmpphp[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php becausephp thisphp recordphp isphp onlyphp withphp php1php.php7php release
php php php php php php php php php php php php php php php php php/php/php ifphp oldphp cachephp recordsphp arephp stillphp therephp.php.php.
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$lifetimephp php=php php$tmpphp[php2php]php;
php php php php php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php php php php php'expirephp'php php=php>php php$mtimephp php+php php$lifetimephp,
php php php php php php php php php php php php php php php php php'tagsphp'php php=php>php arrayphp(php)php,
php php php php php php php php php php php php php php php php php'mtimephp'php php=php>php php$mtime
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Givephp php(ifphp possiblephp)php anphp extraphp lifetimephp tophp thephp givenphp cachephp id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@paramphp intphp php$extraLifetime
php php php php php php*php php@returnphp booleanphp truephp ifphp ok
php php php php php php*php/
php php php php publicphp functionphp touchphp(php$idphp,php php$extraLifetimephp)
php php php php php{
php php php php php php php php php$tmpphp php=php apcphp_fetchphp(php$idphp)php;
php php php php php php php php ifphp php(isphp_arrayphp(php$tmpphp)php)php php{
php php php php php php php php php php php php php$dataphp php=php php$tmpphp[php0php]php;
php php php php php php php php php php php php php$mtimephp php=php php$tmpphp[php1php]php;
php php php php php php php php php php php php ifphp php(php!issetphp(php$tmpphp[php2php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php becausephp thisphp recordphp isphp onlyphp withphp php1php.php7php release
php php php php php php php php php php php php php php php php php/php/php ifphp oldphp cachephp recordsphp arephp stillphp therephp.php.php.
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$lifetimephp php=php php$tmpphp[php2php]php;
php php php php php php php php php php php php php$newLifetimephp php=php php$lifetimephp php-php php(timephp(php)php php-php php$mtimephp)php php+php php$extraLifetimephp;
php php php php php php php php php php php php ifphp php(php$newLifetimephp <php=php0php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php apcphp_storephp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php,php php$newLifetimephp)php,php php$newLifetimephp)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
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
php php php php php php php php php php php php php'automaticphp_cleaningphp'php php=php>php falsephp,
php php php php php php php php php php php php php'tagsphp'php php=php>php falsephp,
php php php php php php php php php php php php php'expiredphp_readphp'php php=php>php falsephp,
php php php php php php php php php php php php php'priorityphp'php php=php>php falsephp,
php php php php php php php php php php php php php'infinitephp_lifetimephp'php php=php>php falsephp,
php php php php php php php php php php php php php'getphp_listphp'php php=php>php true
php php php php php php php php php)php;
php php php php php}

php}
