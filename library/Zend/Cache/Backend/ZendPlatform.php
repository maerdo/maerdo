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
php php*php php@versionphp php php php php$Idphp:php ZendPlatformphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backendphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backendphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/Interfacephp.phpphp'php;


php/php*php*
php php*php Impementationphp ofphp Zendphp Cachephp Backendphp usingphp thephp Zendphp Platformphp php(Outputphp Contentphp Cachingphp)
php php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Backendphp_ZendPlatformphp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_Interface
php{
php php php php php/php*php*
php php php php php php*php internalphp ZPphp prefix
php php php php php php*php/
php php php php constphp TAGSphp_PREFIXphp php=php php"internalphp_ZPtagphp:php"php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*php Validatephp thatphp thephp Zendphp Platformphp isphp loadedphp andphp licensed
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'acceleratorphp_licensephp_infophp'php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp Zendphp Platformphp extensionphp mustphp bephp loadedphp forphp usingphp thisphp backendphp php!php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!functionphp_existsphp(php'acceleratorphp_getphp_configurationphp'php)php)php php{
php php php php php php php php php php php php php$licenseInfophp php=php acceleratorphp_licensephp_infophp(php)php;
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp Zendphp Platformphp extensionphp isphp notphp loadedphp correctlyphp:php php'php.php$licenseInfophp[php'failurephp_reasonphp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$accConfphp php=php acceleratorphp_getphp_configurationphp(php)php;
php php php php php php php php ifphp php(php@php!php$accConfphp[php'outputphp_cachephp_licensedphp'php]php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp Zendphp Platformphp extensionphp doesphp notphp havephp thephp properphp licensephp tophp usephp contentphp cachingphp featuresphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php@php!php$accConfphp[php'outputphp_cachephp_enabledphp'php]php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp Zendphp Platformphp contentphp cachingphp featurephp mustphp bephp enabledphp forphp usingphp thisphp backendphp,php setphp thephp php\php'zendphp_acceleratorphp.outputphp_cachephp_enabledphp\php'php directivephp tophp Onphp php!php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_writablephp(php$accConfphp[php'outputphp_cachephp_dirphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp cachephp copiesphp directoryphp php\php'php'php.php iniphp_getphp(php'zendphp_acceleratorphp.outputphp_cachephp_dirphp'php)php php.php'php\php'php mustphp bephp writablephp php!php'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp Cachedphp dataphp php(orphp falsephp)
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php/php/php doNotTestCacheValidityphp implementedphp byphp givingphp zerophp lifetimephp tophp thephp cache
php php php php php php php php ifphp php(php$doNotTestCacheValidityphp)php php{
php php php php php php php php php php php php php$lifetimephp php=php php0php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$lifetimephp php=php php$thisphp-php>php_directivesphp[php'lifetimephp'php]php;
php php php php php php php php php}
php php php php php php php php php$resphp php=php outputphp_cachephp_getphp(php$idphp,php php$lifetimephp)php;
php php php php php php php php ifphp(php$resphp)php php{
php php php php php php php php php php php php returnphp php$resphp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp mixedphp|falsephp falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$resultphp php=php outputphp_cachephp_getphp(php$idphp,php php$thisphp-php>php_directivesphp[php'lifetimephp'php]php)php;
php php php php php php php php ifphp php(php$resultphp)php php{
php php php php php php php php php php php php returnphp php$resultphp[php1php]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Notephp php:php php$dataphp isphp alwaysphp php"stringphp"php php(serializationphp isphp donephp byphp the
php php php php php php*php corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php php php php php php Dataphp tophp cache
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php php$tagsphp php php php php php php php php php php php php Arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp php intphp php php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$specificLifetimephp php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_ZendPlatformphp:php:savephp(php)php php:php nonphp falsephp specifcphp lifetimephp isphp unsuportedphp forphp thisphp backendphp"php)php;
php php php php php php php php php}

php php php php php php php php php$lifetimephp php=php php$thisphp-php>php_directivesphp[php'lifetimephp'php]php;
php php php php php php php php php$resultphp1php php php=php outputphp_cachephp_putphp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php)php)php;
php php php php php php php php php$resultphp2php php php=php php(countphp(php$tagsphp)php php=php=php php0php)php;

php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php$tagidphp php=php selfphp:php:TAGSphp_PREFIXphp.php$tagphp;
php php php php php php php php php php php php php$oldphp_tagsphp php=php outputphp_cachephp_getphp(php$tagidphp,php php$lifetimephp)php;
php php php php php php php php php php php php ifphp php(php$oldphp_tagsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$oldphp_tagsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$oldphp_tagsphp[php$idphp]php php=php php$idphp;
php php php php php php php php php php php php outputphp_cachephp_removephp_keyphp(php$tagidphp)php;
php php php php php php php php php php php php php$resultphp2php php=php outputphp_cachephp_putphp(php$tagidphp,php php$oldphp_tagsphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp1php php&php&php php$resultphp2php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php returnphp outputphp_cachephp_removephp_keyphp(php$idphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp php(defaultphp)php php php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp php php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Thisphp modephp isphp notphp supportedphp inphp thisphp backend
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp php=php>php unsupported
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$cachephp_dirphp php=php iniphp_getphp(php'zendphp_acceleratorphp.outputphp_cachephp_dirphp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$cachephp_dirphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$cachephp_dirphp php.php=php php'php/php.phpphp_cachephp_apiphp/php'php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_cleanphp(php$cachephp_dirphp,php php$modephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php$idlistphp php=php nullphp;
php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php$nextphp_idlistphp php=php outputphp_cachephp_getphp(selfphp:php:TAGSphp_PREFIXphp.php$tagphp,php php$thisphp-php>php_directivesphp[php'lifetimephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$idlistphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$idlistphp php=php arrayphp_intersectphp_assocphp(php$idlistphp,php php$nextphp_idlistphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$idlistphp php=php php$nextphp_idlistphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$idlistphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ifphp IDphp listphp isphp alreadyphp emptyphp php-php wephp mayphp skipphp checkingphp otherphp IDs
php php php php php php php php php php php php php php php php php php php php php php php php php$idlistphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$idlistphp)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$idlistphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php outputphp_cachephp_removephp_keyphp(php$idphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_ZendPlatformphp:php:cleanphp(php)php php:php CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp isphp notphp supportedphp byphp thephp Zendphp Platformphp backendphp"php)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$idlistphp php=php nullphp;
php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php$nextphp_idlistphp php=php outputphp_cachephp_getphp(selfphp:php:TAGSphp_PREFIXphp.php$tagphp,php php$thisphp-php>php_directivesphp[php'lifetimephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$idlistphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$idlistphp php=php arrayphp_mergephp_recursivephp(php$idlistphp,php php$nextphp_idlistphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$idlistphp php=php php$nextphp_idlistphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$idlistphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php ifphp IDphp listphp isphp alreadyphp emptyphp php-php wephp mayphp skipphp checkingphp otherphp IDs
php php php php php php php php php php php php php php php php php php php php php php php php php$idlistphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$idlistphp)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$idlistphp asphp php$idphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php outputphp_cachephp_removephp_keyphp(php$idphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp aphp directoryphp andphp recursivlyphp gophp overphp itphp'sphp subdirectories
php php php php php php*
php php php php php php*php Removephp allphp thephp cachedphp filesphp thatphp needphp tophp bephp cleanedphp php(accordingphp tophp modephp andphp filesphp mtimephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dirphp php Pathphp ofphp directoryphp otphp clean
php php php php php php*php php@paramphp php stringphp php$modephp Thephp samephp parameterphp asphp inphp Zendphp_Cachephp_Backendphp_ZendPlatformphp:php:cleanphp(php)
php php php php php php*php php@returnphp booleanphp Truephp ifphp ok
php php php php php php*php/
php php php php privatephp functionphp php_cleanphp(php$dirphp,php php$modephp)
php php php php php{
php php php php php php php php php$dphp php=php php@dirphp(php$dirphp)php;
php php php php php php php php ifphp php(php!php$dphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php whilephp php(falsephp php!php=php=php php(php$filephp php=php php$dphp-php>readphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$filephp php=php=php php'php.php'php php|php|php php$filephp php=php=php php'php.php.php'php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$filephp php=php php$dphp-php>pathphp php.php php$filephp;
php php php php php php php php php php php php ifphp php(isphp_dirphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php php(php$thisphp-php>php_cleanphp(php$filephp php.php'php/php'php,php php$modephp)php)php php&php&php php(php$resultphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$modephp php=php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp)php php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php(php$thisphp-php>php_removephp(php$filephp)php)php php&php&php php(php$resultphp)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$modephp php=php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Filesphp olderphp thanphp lifetimephp getphp deletedphp fromphp cache
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_directivesphp[php'lifetimephp'php]php php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(timephp(php)php php-php php@filemtimephp(php$filephp)php)php php>php php$thisphp-php>php_directivesphp[php'lifetimephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php(php$thisphp-php>php_removephp(php$filephp)php)php php&php&php php(php$resultphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$dphp-php>closephp(php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp file
php php php php php php*
php php php php php php*php Ifphp wephp canphp'tphp removephp thephp filephp php(becausephp ofphp locksphp orphp anyphp problemphp)php,php wephp willphp touch
php php php php php php*php thephp filephp tophp invalidatephp it
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filephp Completephp filephp path
php php php php php php*php php@returnphp booleanphp Truephp ifphp ok
php php php php php php*php/
php php php php privatephp functionphp php_removephp(php$filephp)
php php php php php{
php php php php php php php php ifphp php(php!php@unlinkphp(php$filephp)php)php php{
php php php php php php php php php php php php php#php Ifphp wephp canphp'tphp removephp thephp filephp php(becausephp ofphp locksphp orphp anyphp problemphp)php,php wephp willphp touch
php php php php php php php php php php php php php#php thephp filephp tophp invalidatephp it
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_ZendPlatformphp:php:php_removephp(php)php php:php wephp canphp'tphp removephp php$filephp php=php>php wephp arephp goingphp tophp tryphp tophp invalidatephp itphp"php)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_directivesphp[php'lifetimephp'php]php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php@touchphp(php$filephp,php timephp(php)php php-php php2php*absphp(php$thisphp-php>php_directivesphp[php'lifetimephp'php]php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php}
