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
php php*php php@versionphp php php php php$Idphp:php Xcachephp.phpphp php2php3php3php4php5php php2php0php1php0php-php1php1php-php1php5php php1php6php:php3php1php:php1php4Zphp mabephp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Backendphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/Interfacephp.phpphp'php;

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
classphp Zendphp_Cachephp_Backendphp_Xcachephp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_Interface
php{

php php php php php/php*php*
php php php php php php*php Logphp message
php php php php php php*php/
php php php php constphp TAGSphp_UNSUPPORTEDphp_BYphp_CLEANphp_OFphp_XCACHEphp_BACKENDphp php=php php'Zendphp_Cachephp_Backendphp_Xcachephp:php:cleanphp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Xcachephp backendphp'php;
php php php php constphp TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_XCACHEphp_BACKENDphp php=php php php'Zendphp_Cachephp_Backendphp_Xcachephp:php:savephp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Xcachephp backendphp'php;

php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php userphp php:
php php php php php php*php xcachephp.adminphp.userphp php(necessaryphp forphp thephp cleanphp(php)php methodphp)
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php passwordphp php:
php php php php php php*php xcachephp.adminphp.passphp php(clearphp,php notphp MDphp5php)php php(necessaryphp forphp thephp cleanphp(php)php methodphp)
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'userphp'php php=php>php nullphp,
php php php php php php php php php'passwordphp'php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!extensionphp_loadedphp(php'xcachephp'php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Thephp xcachephp extensionphp mustphp bephp loadedphp forphp usingphp thisphp backendphp php!php'php)php;
php php php php php php php php php}
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php WARNINGphp php$doNotTestCacheValidityphp=truephp isphp unsupportedphp byphp thephp Xcachephp backend
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp cachedphp datasphp php(orphp falsephp)
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$doNotTestCacheValidityphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Xcachephp:php:loadphp(php)php php:php php\php$doNotTestCacheValidityphp=truephp isphp unsupportedphp byphp thephp Xcachephp backendphp"php)php;
php php php php php php php php php}
php php php php php php php php php$tmpphp php=php xcachephp_getphp(php$idphp)php;
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
php php php php php php php php ifphp php(xcachephp_issetphp(php$idphp)php)php php{
php php php php php php php php php php php php php$tmpphp php=php xcachephp_getphp(php$idphp)php;
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$tmpphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$tmpphp[php1php]php;
php php php php php php php php php php php php php}
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
php php php php php php php php php$resultphp php=php xcachephp_setphp(php$idphp,php arrayphp(php$dataphp,php timephp(php)php)php,php php$lifetimephp)php;
php php php php php php php php ifphp php(countphp(php$tagsphp)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_SAVEphp_OFphp_XCACHEphp_BACKENDphp)php;
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
php php php php php php php php returnphp xcachephp_unsetphp(php$idphp)php;
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
php php php php php php php php php php php php php php php php php/php/php Necessaryphp becausephp xcachephp_clearphp_cachephp(php)php needphp basicphp authentification
php php php php php php php php php php php php php php php php php$backupphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'PHPphp_AUTHphp_USERphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$backupphp[php'PHPphp_AUTHphp_USERphp'php]php php=php php$php_SERVERphp[php'PHPphp_AUTHphp_USERphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'PHPphp_AUTHphp_PWphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$backupphp[php'PHPphp_AUTHphp_PWphp'php]php php=php php$php_SERVERphp[php'PHPphp_AUTHphp_PWphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'userphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$php_SERVERphp[php'PHPphp_AUTHphp_USERphp'php]php php=php php$thisphp-php>php_optionsphp[php'userphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'passwordphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$php_SERVERphp[php'PHPphp_AUTHphp_PWphp'php]php php=php php$thisphp-php>php_optionsphp[php'passwordphp'php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$cntphp php=php xcachephp_countphp(XCphp_TYPEphp_VARphp)php;
php php php php php php php php php php php php php php php php forphp php(php$iphp=php0php;php php$iphp <php php$cntphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php php php php xcachephp_clearphp_cachephp(XCphp_TYPEphp_VARphp,php php$iphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(issetphp(php$backupphp[php'PHPphp_AUTHphp_USERphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$php_SERVERphp[php'PHPphp_AUTHphp_USERphp'php]php php=php php$backupphp[php'PHPphp_AUTHphp_USERphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$php_SERVERphp[php'PHPphp_AUTHphp_PWphp'php]php php=php php$backupphp[php'PHPphp_AUTHphp_PWphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Xcachephp:php:cleanphp(php)php php:php CLEANINGphp_MODEphp_OLDphp isphp unsupportedphp byphp thephp Xcachephp backendphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(selfphp:php:TAGSphp_UNSUPPORTEDphp_BYphp_CLEANphp_OFphp_XCACHEphp_BACKENDphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
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

php}
