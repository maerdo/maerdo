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
php php*php php@versionphp php php php php$Idphp:php Libmemcachedphp.phpphp php2php3php2php2php0php php2php0php1php0php-php1php0php-php2php2php php1php0php:php2php4php:php1php4Zphp mabephp php$
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
classphp Zendphp_Cachephp_Backendphp_Libmemcachedphp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Defaultphp Serverphp Values
php php php php php php*php/
php php php php constphp DEFAULTphp_HOSTphp php=php php'php1php2php7php.php0php.php0php.php1php'php;
php php php php constphp DEFAULTphp_PORTphp php=php php php1php1php2php1php1php;
php php php php constphp DEFAULTphp_WEIGHTphp php php=php php1php;

php php php php php/php*php*
php php php php php php*php Logphp message
php php php php php php*php/
php php php php constphp TAGSphp_UNSUPPORTEDphp_BYphp_CLEANphp_OFphp_LIBMEMCACHEDphp_BACKENDphp php=php php'Zendphp_Cachephp_Backendphp_Libmemcachedphp:php:cleanphp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Libmemcachedphp backendphp'php;
php php php php constphp TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_LIBMEMCACHEDphp_BACKENDphp php=php php php'Zendphp_Cachephp_Backendphp_Libmemcachedphp:php:savephp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Libmemcachedphp backendphp'php;

php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(arrayphp)php serversphp php:
php php php php php php*php anphp arrayphp ofphp memcachedphp serverphp php;php eachphp memcachedphp serverphp isphp describedphp byphp anphp associativephp arrayphp php:
php php php php php php*php php'hostphp'php php=php>php php(stringphp)php php:php thephp namephp ofphp thephp memcachedphp server
php php php php php php*php php'portphp'php php=php>php php(intphp)php php:php thephp portphp ofphp thephp memcachedphp server
php php php php php php*php php'weightphp'php php=php>php php(intphp)php php:php numberphp ofphp bucketsphp tophp createphp forphp thisphp serverphp whichphp inphp turnphp controlphp its
php php php php php php*php php php php php php php php php php php php php php php php php php php php php probabilityphp ofphp itphp beingphp selectedphp.php Thephp probabilityphp isphp relativephp tophp thephp total
php php php php php php*php php php php php php php php php php php php php php php php php php php php php weightphp ofphp allphp serversphp.
php php php php php php*php php=php=php=php=php=php>php php(arrayphp)php clientphp php:
php php php php php php*php anphp arrayphp ofphp memcachedphp clientphp optionsphp php;php thephp memcachedphp clientphp isphp describedphp byphp anphp associativephp arrayphp php:
php php php php php php*php php@seephp httpphp:php/php/phpphp.netphp/manualphp/memcachedphp.constantsphp.php
php php php php php php*php php-php Thephp optionphp namephp canphp bephp thephp namephp ofphp thephp constantphp withoutphp thephp prefixphp php'OPTphp_php'
php php php php php php*php php php orphp thephp integerphp valuephp ofphp thisphp optionphp constant
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'serversphp'php php=php>php arrayphp(arrayphp(
php php php php php php php php php php php php php'hostphp'php php php php=php>php selfphp:php:DEFAULTphp_HOSTphp,
php php php php php php php php php php php php php'portphp'php php php php=php>php selfphp:php:DEFAULTphp_PORTphp,
php php php php php php php php php php php php php'weightphp'php php=php>php selfphp:php:DEFAULTphp_WEIGHTphp,
php php php php php php php php php)php)php,
php php php php php php php php php'clientphp'php php=php>php arrayphp(php)
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Memcachedphp object
php php php php php php*
php php php php php php*php php@varphp mixedphp memcachedphp object
php php php php php php*php/
php php php php protectedphp php$php_memcachephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'memcachedphp'php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp memcachedphp extensionphp mustphp bephp loadedphp forphp usingphp thisphp backendphp php!php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php overridephp defaultphp clientphp options
php php php php php php php php php$thisphp-php>php_optionsphp[php'clientphp'php]php php=php arrayphp(
php php php php php php php php php php php php Memcachedphp:php:OPTphp_DISTRIBUTIONphp php php php php php php php php php=php>php Memcachedphp:php:DISTRIBUTIONphp_CONSISTENTphp,
php php php php php php php php php php php php Memcachedphp:php:OPTphp_HASHphp php php php php php php php php php php php php php php php php php=php>php Memcachedphp:php:HASHphp_MDphp5php,
php php php php php php php php php php php php Memcachedphp:php:OPTphp_LIBKETAMAphp_COMPATIBLEphp php=php>php truephp,
php php php php php php php php php)php;

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'serversphp'php]php)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>php_optionsphp[php'serversphp'php]php;
php php php php php php php php php php php php ifphp php(issetphp(php$valuephp[php'hostphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php inphp thisphp casephp,php php$valuephp seemsphp tophp bephp aphp simplephp associativephp arrayphp php(onephp serverphp onlyphp)
php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp(php0php php=php>php php$valuephp)php;php php/php/php letphp'sphp transformphp itphp intophp aphp classicalphp arrayphp ofphp associativephp arrays
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php'serversphp'php,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_memcachephp php=php newphp Memcachedphp;

php php php php php php php php php/php/php setupphp memcachedphp clientphp options
php php php php php php php php foreachphp php(php$thisphp-php>php_optionsphp[php'clientphp'php]php asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$optIdphp php=php nullphp;
php php php php php php php php php php php php ifphp php(isphp_intphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php php$optIdphp php=php php$namephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$optConstphp php=php php'Memcachedphp:php:OPTphp_php'php php.php strtoupperphp(php$namephp)php;
php php php php php php php php php php php php php php php php ifphp php(definedphp(php$optConstphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optIdphp php=php constantphp(php$optConstphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Unknownphp memcachedphp clientphp optionphp php'php{php$namephp}php'php php(php{php$optConstphp}php)php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$optIdphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_memcachephp-php>setOptionphp(php$optIdphp,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Settingphp memcachedphp clientphp optionphp php'php{php$optIdphp}php'php failedphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php setupphp memcachedphp servers
php php php php php php php php php$serversphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_optionsphp[php'serversphp'php]php asphp php$serverphp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'portphp'php,php php$serverphp)php)php php{
php php php php php php php php php php php php php php php php php$serverphp[php'portphp'php]php php=php selfphp:php:DEFAULTphp_PORTphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'weightphp'php,php php$serverphp)php)php php{
php php php php php php php php php php php php php php php php php$serverphp[php'weightphp'php]php php=php selfphp:php:DEFAULTphp_WEIGHTphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$serversphp[php]php php=php arrayphp(php$serverphp[php'hostphp'php]php,php php$serverphp[php'portphp'php]php,php php$serverphp[php'weightphp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_memcachephp-php>addServersphp(php$serversphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp|falsephp cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php$tmpphp php=php php$thisphp-php>php_memcachephp-php>getphp(php$idphp)php;
php php php php php php php php ifphp php(issetphp(php$tmpphp[php0php]php)php)php php{
php php php php php php php php php php php php returnphp php$tmpphp[php0php]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp intphp|falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$tmpphp php=php php$thisphp-php>php_memcachephp-php>getphp(php$idphp)php;
php php php php php php php php ifphp php(issetphp(php$tmpphp[php0php]php,php php$tmpphp[php1php]php)php)php php{
php php php php php php php php php php php php returnphp php(intphp)php$tmpphp[php1php]php;
php php php php php php php php php}
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
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php php$lifetimephp php=php php$thisphp-php>getLifetimephp(php$specificLifetimephp)php;

php php php php php php php php php/php/php ZFphp-php8php8php5php6php:php usingphp setphp becausephp addphp needsphp aphp secondphp requestphp ifphp itemphp alreadyphp exists
php php php php php php php php php$resultphp php=php php@php$thisphp-php>php_memcachephp-php>setphp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php,php php$lifetimephp)php,php php$lifetimephp)php;
php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$rsCodephp php=php php$thisphp-php>php_memcachephp-php>getResultCodephp(php)php;
php php php php php php php php php php php php php$rsMsgphp php php=php php$thisphp-php>php_memcachephp-php>getResultMessagephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Memcachedphp:php:setphp(php)php failedphp:php php[php{php$rsCodephp}php]php php{php$rsMsgphp}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$tagsphp)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_LIBMEMCACHEDphp_BACKENDphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_memcachephp-php>deletephp(php$idphp)php;
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
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_memcachephp-php>flushphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Libmemcachedphp:php:cleanphp(php)php php:php CLEANINGphp_MODEphp_OLDphp isphp unsupportedphp byphp thephp Libmemcachedphp backendphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_CLEANphp_OFphp_LIBMEMCACHEDphp_BACKENDphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp truephp ifphp thephp automaticphp cleaningphp isphp availablephp forphp thephp backend
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAutomaticCleaningAvailablephp(php)
php php php php php{
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp frontendphp directives
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$directivesphp Assocphp ofphp directives
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDirectivesphp(php$directivesphp)
php php php php php{
php php php php php php php php parentphp:php:setDirectivesphp(php$directivesphp)php;
php php php php php php php php php$lifetimephp php=php php$thisphp-php>getLifetimephp(falsephp)php;
php php php php php php php php ifphp php(php$lifetimephp php>php php2php5php9php2php0php0php0php)php php{
php php php php php php php php php php php php php/php/php php#ZFphp-php3php4php9php0php php:php Forphp thephp memcachedphp backendphp,php therephp isphp aphp lifetimephp limitphp ofphp php3php0php daysphp php(php2php5php9php2php0php0php0php secondsphp)
php php php php php php php php php php php php php$thisphp-php>php_logphp(php'memcachedphp backendphp hasphp aphp limitphp ofphp php3php0php daysphp php(php2php5php9php2php0php0php0php secondsphp)php forphp thephp lifetimephp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$lifetimephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php php#ZFphp-php4php6php1php4php php:php wephp tranformphp nullphp tophp zerophp tophp getphp thephp maximalphp lifetime
php php php php php php php php php php php php parentphp:php:setDirectivesphp(arrayphp(php'lifetimephp'php php=php>php php0php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Libmemcachedphp:php:savephp(php)php php:php gettingphp thephp listphp ofphp cachephp idsphp isphp unsupportedphp byphp thephp Libmemcachedphp backendphp"php)php;
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_LIBMEMCACHEDphp_BACKENDphp)php;
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
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_LIBMEMCACHEDphp_BACKENDphp)php;
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
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_LIBMEMCACHEDphp_BACKENDphp)php;
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
php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_LIBMEMCACHEDphp_BACKENDphp)php;
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php php$memsphp php=php php$thisphp-php>php_memcachephp-php>getStatsphp(php)php;
php php php php php php php php ifphp php(php$memsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}

php php php php php php php php php$memSizephp php=php nullphp;
php php php php php php php php php$memUsedphp php=php nullphp;
php php php php php php php php foreachphp php(php$memsphp asphp php$keyphp php=php>php php$memphp)php php{
php php php php php php php php php php php php ifphp php(php$memphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'canphp\php'tphp getphp statphp fromphp php'php php.php php$keyphp)php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$eachSizephp php=php php$memphp[php'limitphp_maxbytesphp'php]php;
php php php php php php php php php php php php php$eachUsedphp php=php php$memphp[php'bytesphp'php]php;
php php php php php php php php php php php php ifphp php(php$eachUsedphp php>php php$eachSizephp)php php{
php php php php php php php php php php php php php php php php php$eachUsedphp php=php php$eachSizephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$memSizephp php+php=php php$eachSizephp;
php php php php php php php php php php php php php$memUsedphp php+php=php php$eachUsedphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$memSizephp php=php=php=php nullphp php|php|php php$memUsedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Canphp\php'tphp getphp fillingphp percentagephp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php(php(intphp)php php(php1php0php0php.php php*php php(php$memUsedphp php/php php$memSizephp)php)php)php;
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
php php php php php php php php php$tmpphp php=php php$thisphp-php>php_memcachephp-php>getphp(php$idphp)php;
php php php php php php php php ifphp php(issetphp(php$tmpphp[php0php]php,php php$tmpphp[php1php]php,php php$tmpphp[php2php]php)php)php php{
php php php php php php php php php php php php php$dataphp php php php php php=php php$tmpphp[php0php]php;
php php php php php php php php php php php php php$mtimephp php php php php=php php$tmpphp[php1php]php;
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
php php php php php php php php php$tmpphp php=php php$thisphp-php>php_memcachephp-php>getphp(php$idphp)php;
php php php php php php php php ifphp php(issetphp(php$tmpphp[php0php]php,php php$tmpphp[php1php]php,php php$tmpphp[php2php]php)php)php php{
php php php php php php php php php php php php php$dataphp php php php php php=php php$tmpphp[php0php]php;
php php php php php php php php php php php php php$mtimephp php php php php=php php$tmpphp[php1php]php;
php php php php php php php php php php php php php$lifetimephp php=php php$tmpphp[php2php]php;
php php php php php php php php php php php php php$newLifetimephp php=php php$lifetimephp php-php php(timephp(php)php php-php php$mtimephp)php php+php php$extraLifetimephp;
php php php php php php php php php php php php ifphp php(php$newLifetimephp <php=php0php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php php#ZFphp-php5php7php0php2php php:php wephp tryphp replacephp(php)php firstphp becasephp setphp(php)php seemsphp tophp bephp slower
php php php php php php php php php php php php ifphp php(php!php(php$resultphp php=php php$thisphp-php>php_memcachephp-php>replacephp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php,php php$newLifetimephp)php,php php$newLifetimephp)php)php)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_memcachephp-php>setphp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php,php php$newLifetimephp)php,php php$newLifetimephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$resultphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$rsCodephp php=php php$thisphp-php>php_memcachephp-php>getResultCodephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$rsMsgphp php php=php php$thisphp-php>php_memcachephp-php>getResultMessagephp(php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Memcachedphp:php:setphp(php)php failedphp:php php[php{php$rsCodephp}php]php php{php$rsMsgphp}php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$resultphp;
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
php php php php php php php php php php php php php'getphp_listphp'php php=php>php false
php php php php php php php php php)php;
php php php php php}

php}
