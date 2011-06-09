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
php php*php php@versionphp php php php php$Idphp:php Staticphp.phpphp php2php2php9php5php0php php2php0php1php0php-php0php9php-php1php6php php1php9php:php3php3php:php0php0Zphp mabephp php$
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
classphp Zendphp_Cachephp_Backendphp_Static
php php php php extendsphp Zendphp_Cachephp_Backend
php php php php implementsphp Zendphp_Cachephp_Backendphp_Interface
php{
php php php php constphp INNERphp_CACHEphp_NAMEphp php=php php'zendphp_cachephp_backendphp_staticphp_tagcachephp'php;

php php php php php/php*php*
php php php php php php*php Staticphp backendphp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'publicphp_dirphp'php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'subphp_dirphp'php php php php php php php php php php php php php php php php=php>php php'htmlphp'php,
php php php php php php php php php'filephp_extensionphp'php php php php php php php php php=php>php php'php.htmlphp'php,
php php php php php php php php php'indexphp_filenamephp'php php php php php php php php php=php>php php'indexphp'php,
php php php php php php php php php'filephp_lockingphp'php php php php php php php php php php php=php>php truephp,
php php php php php php php php php'cachephp_filephp_umaskphp'php php php php php php php=php>php php0php6php0php0php,
php php php php php php php php php'cachephp_directoryphp_umaskphp'php php=php>php php0php7php0php0php,
php php php php php php php php php'debugphp_headerphp'php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php'tagphp_cachephp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'disablephp_cachingphp'php php php php php php php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Cachephp forphp handlingphp tags
php php php php php php*php php@varphp Zendphp_Cachephp_Core
php php php php php php*php/
php php php php protectedphp php$php_tagCachephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Taggedphp items
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_taggedphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Interceptorphp childphp methodphp tophp handlephp thephp casephp wherephp anphp Inner
php php php php php php*php Cachephp objectphp isphp beingphp setphp sincephp itphp'sphp notphp supportedphp byphp the
php php php php php php*php standardphp backendphp interface
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Cachephp_Backendphp_Static
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php php'tagphp_cachephp'php)php php{
php php php php php php php php php php php php php$thisphp-php>setInnerCachephp(php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php parentphp:php:setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp anyphp optionphp viaphp interceptionphp ofphp thephp parentphp'sphp staticallyphp held
php php php php php php*php optionsphp includingphp thephp localphp optionphp forphp aphp tagphp cachephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php php'tagphp_cachephp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getInnerCachephp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$namephp,php php$thisphp-php>php_optionsphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$namephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$namephp php=php=php php'lifetimephp'php)php php{
php php php php php php php php php php php php php php php php returnphp parentphp:php:getLifetimephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php Notephp php:php returnphp valuephp isphp alwaysphp php"stringphp"php php(unserializationphp isphp donephp byphp thephp corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp|falsephp cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_detectIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_decodeIdphp(php$idphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_verifyPathphp(php$idphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp cachephp idphp:php doesphp notphp matchphp expectedphp publicphp_dirphp pathphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$doNotTestCacheValidityphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Staticphp:php:loadphp(php)php php:php php\php$doNotTestCacheValidityphp=truephp isphp unsupportedphp byphp thephp Staticphp backendphp"php)php;
php php php php php php php php php}

php php php php php php php php php$fileNamephp php=php basenamephp(php$idphp)php;
php php php php php php php php ifphp php(emptyphp(php$fileNamephp)php)php php{
php php php php php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_optionsphp[php'indexphp_filenamephp'php]php;
php php php php php php php php php}
php php php php php php php php php$pathNamephp php=php php$thisphp-php>php_optionsphp[php'publicphp_dirphp'php]php php.php dirnamephp(php$idphp)php;
php php php php php php php php php$filephp php php php php php=php rtrimphp(php$pathNamephp,php php'php/php'php)php php.php php'php/php'php php.php php$fileNamephp php.php php$thisphp-php>php_optionsphp[php'filephp_extensionphp'php]php;
php php php php php php php php ifphp php(filephp_existsphp(php$filephp)php)php php{
php php php php php php php php php php php php php$contentphp php=php filephp_getphp_contentsphp(php$filephp)php;
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>php_decodeIdphp(php$idphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_verifyPathphp(php$idphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp cachephp idphp:php doesphp notphp matchphp expectedphp publicphp_dirphp pathphp'php)php;
php php php php php php php php php}

php php php php php php php php php$fileNamephp php=php basenamephp(php$idphp)php;
php php php php php php php php ifphp php(emptyphp(php$fileNamephp)php)php php{
php php php php php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_optionsphp[php'indexphp_filenamephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp php&php&php php$taggedphp php=php php$thisphp-php>getInnerCachephp(php)php-php>loadphp(selfphp:php:INNERphp_CACHEphp_NAMEphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php php$taggedphp;
php php php php php php php php php}php elseifphp php(php!php$thisphp-php>php_taggedphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$pathNamephp php=php php$thisphp-php>php_optionsphp[php'publicphp_dirphp'php]php php.php dirnamephp(php$idphp)php;

php php php php php php php php php/php/php Switchphp extensionphp ifphp needed
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_taggedphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php$extensionphp php=php php$thisphp-php>php_taggedphp[php$idphp]php[php'extensionphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$extensionphp php=php php$thisphp-php>php_optionsphp[php'filephp_extensionphp'php]php;
php php php php php php php php php}
php php php php php php php php php$filephp php php php php php=php php$pathNamephp php.php php'php/php'php php.php php$fileNamephp php.php php$extensionphp;
php php php php php php php php ifphp php(filephp_existsphp(php$filephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Notephp php:php php$dataphp isphp alwaysphp php"stringphp"php php(serializationphp isphp donephp byphp the
php php php php php php*php corephp notphp byphp thephp backendphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php php php php php Datasphp tophp cache
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php$tagsphp php php php php php php php php php php php php Arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp php intphp php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'disablephp_cachingphp'php]php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php php$extensionphp php=php nullphp;
php php php php php php php php ifphp php(php$thisphp-php>php_isSerializedphp(php$dataphp)php)php php{
php php php php php php php php php php php php php$dataphp php=php unserializephp(php$dataphp)php;
php php php php php php php php php php php php php$extensionphp php=php php'php.php'php php.php ltrimphp(php$dataphp[php1php]php,php php'php.php'php)php;
php php php php php php php php php php php php php$dataphp php=php php$dataphp[php0php]php;
php php php php php php php php php}

php php php php php php php php clearstatcachephp(php)php;
php php php php php php php php ifphp php(php$idphp php=php=php=php nullphp php|php|php strlenphp(php$idphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_detectIdphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_decodeIdphp(php$idphp)php;
php php php php php php php php php}

php php php php php php php php php$fileNamephp php=php basenamephp(php$idphp)php;
php php php php php php php php ifphp php(emptyphp(php$fileNamephp)php)php php{
php php php php php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_optionsphp[php'indexphp_filenamephp'php]php;
php php php php php php php php php}

php php php php php php php php php$pathNamephp php=php realpathphp(php$thisphp-php>php_optionsphp[php'publicphp_dirphp'php]php)php php.php dirnamephp(php$idphp)php;
php php php php php php php php php$thisphp-php>php_createDirectoriesForphp(php$pathNamephp)php;

php php php php php php php php ifphp php(php$idphp php=php=php=php nullphp php|php|php strlenphp(php$idphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$dataUnserializedphp php=php unserializephp(php$dataphp)php;
php php php php php php php php php php php php php$dataphp php=php php$dataUnserializedphp[php'dataphp'php]php;
php php php php php php php php php}
php php php php php php php php php$extphp php=php php$thisphp-php>php_optionsphp[php'filephp_extensionphp'php]php;
php php php php php php php php ifphp php(php$extensionphp)php php$extphp php=php php$extensionphp;
php php php php php php php php php$filephp php=php rtrimphp(php$pathNamephp,php php'php/php'php)php php.php php'php/php'php php.php php$fileNamephp php.php php$extphp;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'filephp_lockingphp'php]php)php php{
php php php php php php php php php php php php php$resultphp php=php filephp_putphp_contentsphp(php$filephp,php php$dataphp,php LOCKphp_EXphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$resultphp php=php filephp_putphp_contentsphp(php$filephp,php php$dataphp)php;
php php php php php php php php php}
php php php php php php php php php@chmodphp(php$filephp,php php$thisphp-php>php_octdecphp(php$thisphp-php>php_optionsphp[php'cachephp_filephp_umaskphp'php]php)php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp php&php&php php$taggedphp php=php php$thisphp-php>getInnerCachephp(php)php-php>loadphp(selfphp:php:INNERphp_CACHEphp_NAMEphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php php$taggedphp;
php php php php php php php php php}php elseifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_taggedphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_taggedphp[php$idphp]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_taggedphp[php$idphp]php[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_taggedphp[php$idphp]php[php'tagsphp'php]php php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_taggedphp[php$idphp]php[php'tagsphp'php]php php=php arrayphp_uniquephp(arrayphp_mergephp(php$thisphp-php>php_taggedphp[php$idphp]php[php'tagsphp'php]php,php php$tagsphp)php)php;
php php php php php php php php php$thisphp-php>php_taggedphp[php$idphp]php[php'extensionphp'php]php php=php php$extphp;
php php php php php php php php php$thisphp-php>getInnerCachephp(php)php-php>savephp(php$thisphp-php>php_taggedphp,php selfphp:php:INNERphp_CACHEphp_NAMEphp)php;
php php php php php php php php returnphp php(boolphp)php php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Recursivelyphp createphp thephp directoriesphp neededphp tophp writephp thephp staticphp file
php php php php php php*php/
php php php php protectedphp functionphp php_createDirectoriesForphp(php$pathphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_dirphp(php$pathphp)php)php php{
php php php php php php php php php php php php php$oldUmaskphp php=php umaskphp(php0php)php;
php php php php php php php php php php php php ifphp php(php php!php@mkdirphp(php$pathphp,php php$thisphp-php>php_octdecphp(php$thisphp-php>php_optionsphp[php'cachephp_directoryphp_umaskphp'php]php)php,php truephp)php)php php{
php php php php php php php php php php php php php php php php php$lastErrphp php=php errorphp_getphp_lastphp(php)php;
php php php php php php php php php php php php php php php php umaskphp(php$oldUmaskphp)php;
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Canphp'tphp createphp directoryphp:php php{php$lastErrphp[php'messagephp'php]php}php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php umaskphp(php$oldUmaskphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp serializationphp ofphp dataphp php(cannotphp predictphp sincephp thisphp isphp thephp onlyphp way
php php php php php php*php tophp obeyphp thephp interfacephp yetphp passphp inphp anotherphp parameterphp)php.
php php php php php php*
php php php php php php*php Inphp futurephp,php ZFphp php2php.php0php,php checkphp ifphp wephp canphp justphp avoidphp thephp interfacephp restraintsphp.
php php php php php php*
php php php php php php*php Thisphp formatphp isphp thephp onlyphp validphp onephp possiblephp forphp thephp classphp,php sophp itphp'sphp simple
php php php php php php*php tophp justphp runphp aphp regularphp expressionphp forphp thephp startingphp serializedphp formatphp.
php php php php php php*php/
php php php php protectedphp functionphp php_isSerializedphp(php$dataphp)
php php php php php{
php php php php php php php php returnphp pregphp_matchphp(php"php/aphp:php2php:php\php{iphp:php0php;sphp:php\dphp+php:php\php"php/php"php,php php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_verifyPathphp(php$idphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp cachephp idphp:php doesphp notphp matchphp expectedphp publicphp_dirphp pathphp'php)php;
php php php php php php php php php}
php php php php php php php php php$fileNamephp php=php basenamephp(php$idphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp php&php&php php$taggedphp php=php php$thisphp-php>getInnerCachephp(php)php-php>loadphp(selfphp:php:INNERphp_CACHEphp_NAMEphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php php$taggedphp;
php php php php php php php php php}php elseifphp php(php!php$thisphp-php>php_taggedphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_taggedphp[php$idphp]php)php)php php{
php php php php php php php php php php php php php$extensionphp php=php php$thisphp-php>php_taggedphp[php$idphp]php[php'extensionphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$extensionphp php=php php$thisphp-php>php_optionsphp[php'filephp_extensionphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$fileNamephp)php)php php{
php php php php php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_optionsphp[php'indexphp_filenamephp'php]php;
php php php php php php php php php}
php php php php php php php php php$pathNamephp php=php php$thisphp-php>php_optionsphp[php'publicphp_dirphp'php]php php.php dirnamephp(php$idphp)php;
php php php php php php php php php$filephp php php php php php=php realpathphp(php$pathNamephp)php php.php php'php/php'php php.php php$fileNamephp php.php php$extensionphp;
php php php php php php php php ifphp php(php!filephp_existsphp(php$filephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp unlinkphp(php$filephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp recordphp recursivelyphp forphp thephp givenphp directoryphp matchingphp a
php php php php php php*php REQUESTphp_URIphp basedphp relativephp pathphp php(deletesphp thephp actualphp filephp matchingphp this
php php php php php php*php inphp additionphp tophp thephp matchingphp directoryphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removeRecursivelyphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_verifyPathphp(php$idphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp cachephp idphp:php doesphp notphp matchphp expectedphp publicphp_dirphp pathphp'php)php;
php php php php php php php php php}
php php php php php php php php php$fileNamephp php=php basenamephp(php$idphp)php;
php php php php php php php php ifphp php(emptyphp(php$fileNamephp)php)php php{
php php php php php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_optionsphp[php'indexphp_filenamephp'php]php;
php php php php php php php php php}
php php php php php php php php php$pathNamephp php php=php php$thisphp-php>php_optionsphp[php'publicphp_dirphp'php]php php.php dirnamephp(php$idphp)php;
php php php php php php php php php$filephp php php php php php php=php php$pathNamephp php.php php'php/php'php php.php php$fileNamephp php.php php$thisphp-php>php_optionsphp[php'filephp_extensionphp'php]php;
php php php php php php php php php$directoryphp php=php php$pathNamephp php.php php'php/php'php php.php php$fileNamephp;
php php php php php php php php ifphp php(filephp_existsphp(php$directoryphp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_writablephp(php$directoryphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php foreachphp php(newphp DirectoryIteratorphp(php$directoryphp)php asphp php$filephp)php php{
php php php php php php php php php php php php php php php php ifphp php(truephp php=php=php=php php$filephp-php>isFilephp(php)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(falsephp php=php=php=php unlinkphp(php$filephp-php>getPathNamephp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php rmdirphp(dirnamephp(php$pathphp)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(filephp_existsphp(php$filephp)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_writablephp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp unlinkphp(php$filephp)php;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp php(defaultphp)php php php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp php php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp php=php>php removephp cachephp entriesphp notphp php{matchingphp onephp ofphp thephp givenphp tagsphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp php=php>php removephp cachephp entriesphp matchingphp anyphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tagsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'Cannotphp usephp tagphp matchingphp modesphp asphp nophp tagsphp werephp definedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp php&php&php php$taggedphp php=php php$thisphp-php>getInnerCachephp(php)php-php>loadphp(selfphp:php:INNERphp_CACHEphp_NAMEphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php php$taggedphp;
php php php php php php php php php php php php php php php php php}php elseifphp php(php!php$thisphp-php>php_taggedphp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php$urlsphp php=php arrayphp_keysphp(php$thisphp-php>php_taggedphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$urlsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_taggedphp[php$urlphp]php[php'tagsphp'php]php)php php&php&php inphp_arrayphp(php$tagphp,php php$thisphp-php>php_taggedphp[php$urlphp]php[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>removephp(php$urlphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_taggedphp[php$urlphp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>getInnerCachephp(php)php-php>savephp(php$thisphp-php>php_taggedphp,php selfphp:php:INNERphp_CACHEphp_NAMEphp)php;
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$taggedphp php=php php$thisphp-php>getInnerCachephp(php)php-php>loadphp(selfphp:php:INNERphp_CACHEphp_NAMEphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php php$taggedphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp php|php|php emptyphp(php$thisphp-php>php_taggedphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$urlsphp php=php arrayphp_keysphp(php$thisphp-php>php_taggedphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$urlsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>removephp(php$urlphp)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_taggedphp[php$urlphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>getInnerCachephp(php)php-php>savephp(php$thisphp-php>php_taggedphp,php selfphp:php:INNERphp_CACHEphp_NAMEphp)php;
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Staticphp php:php Selectedphp Cleaningphp Modephp Currentlyphp Unsupportedphp Byphp Thisphp Backendphp"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$tagsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Exceptionphp(php'Cannotphp usephp tagphp matchingphp modesphp asphp nophp tagsphp werephp definedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$taggedphp php=php php$thisphp-php>getInnerCachephp(php)php-php>loadphp(selfphp:php:INNERphp_CACHEphp_NAMEphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_taggedphp php=php php$taggedphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_taggedphp php=php=php=php nullphp php|php|php emptyphp(php$thisphp-php>php_taggedphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$urlsphp php=php arrayphp_keysphp(php$thisphp-php>php_taggedphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$urlsphp asphp php$urlphp)php php{
php php php php php php php php php php php php php php php php php php php php php$differencephp php=php arrayphp_diffphp(php$tagsphp,php php$thisphp-php>php_taggedphp[php$urlphp]php[php'tagsphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(countphp(php$tagsphp)php php=php=php countphp(php$differencephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>removephp(php$urlphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_taggedphp[php$urlphp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>getInnerCachephp(php)php-php>savephp(php$thisphp-php>php_taggedphp,php selfphp:php:INNERphp_CACHEphp_NAMEphp)php;
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp anphp Innerphp Cachephp,php usedphp herephp primarilyphp tophp storephp Tagsphp associated
php php php php php php*php withphp cachesphp createdphp byphp thisphp backendphp.php Notephp:php Ifphp Tagsphp arephp lostphp,php thephp cache
php php php php php php*php shouldphp bephp completelyphp cleanedphp asphp thephp mappingphp ofphp tagsphp tophp cachesphp will
php php php php php php*php havephp beenphp irrevocablyphp lostphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cachephp_Core
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setInnerCachephp(Zendphp_Cachephp_Corephp php$cachephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagCachephp php=php php$cachephp;
php php php php php php php php php$thisphp-php>php_optionsphp[php'tagphp_cachephp'php]php php=php php$cachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp Innerphp Cachephp ifphp set
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Core
php php php php php php*php/
php php php php publicphp functionphp getInnerCachephp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_tagCachephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Anphp Innerphp Cachephp hasphp notphp beenphp setphp;php usephp setInnerCachephp(php)php'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_tagCachephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Verifyphp pathphp existsphp andphp isphp nonphp-empty
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_verifyPathphp(php$pathphp)
php php php php php{
php php php php php php php php php$pathphp php=php realpathphp(php$pathphp)php;
php php php php php php php php php$basephp php=php realpathphp(php$thisphp-php>php_optionsphp[php'publicphp_dirphp'php]php)php;
php php php php php php php php returnphp strncmpphp(php$pathphp,php php$basephp,php strlenphp(php$basephp)php)php php!php=php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp thephp pagephp tophp savephp fromphp thephp request
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_detectIdphp(php)
php php php php php{
php php php php php php php php returnphp php$php_SERVERphp[php'REQUESTphp_URIphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Validatephp aphp cachephp idphp orphp aphp tagphp php(securityphp,php reliablephp filenamesphp,php reservedphp prefixesphp.php.php.php)
php php php php php php*
php php php php php php*php Throwphp anphp exceptionphp ifphp aphp problemphp isphp found
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$stringphp Cachephp idphp orphp tag
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php php@deprecatedphp Notphp usablephp untilphp perhapsphp ZFphp php2php.php0
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_validateIdOrTagphp(php$stringphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$stringphp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp idphp orphp tagphp php:php mustphp bephp aphp stringphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Internalphp onlyphp checkedphp inphp Frontendphp php-php notphp herephp!
php php php php php php php php ifphp php(substrphp(php$stringphp,php php0php,php php9php)php php=php=php php'internalphp-php'php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Validationphp assumesphp nophp queryphp stringphp,php fragmentsphp orphp schemephp includedphp php-php onlyphp thephp path
php php php php php php php php ifphp php(php!pregphp_matchphp(
php php php php php php php php php php php php php php php php php'php/php^php(php?php:php\php/php(php?php:php(php?php:php%php[php[php:xdigitphp:php]php]php{php2php}php|php[Aphp-Zaphp-zphp0php-php9php-php_php.php!php~php*php\php'php(php)php\php[php\php]php:php@php&php=php+php$php,php;php]php)php*php)php?php)php+php$php/php'php,
php php php php php php php php php php php php php php php php php$string
php php php php php php php php php php php php php)
php php php php php php php php php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Invalidphp idphp orphp tagphp php'php$stringphp'php php:php mustphp bephp aphp validphp URLphp pathphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Detectphp anphp octalphp stringphp andphp returnphp itsphp octalphp valuephp forphp filephp permissionphp ops
php php php php php php*php otherwisephp returnphp thephp nonphp-stringphp php(assumedphp octalphp orphp decimalphp intphp alreadyphp)
php php php php php php*
php php php php php php*php php@paramphp php$valphp Thephp potentialphp octalphp inphp needphp ofphp conversion
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php protectedphp functionphp php_octdecphp(php$valphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$valphp)php php&php&php decoctphp(octdecphp(php$valphp)php)php php=php=php php$valphp)php php{
php php php php php php php php php php php php returnphp octdecphp(php$valphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decodephp aphp requestphp URIphp fromphp thephp providedphp ID
php php php php php php*php/
php php php php protectedphp functionphp php_decodeIdphp(php$idphp)
php php php php php{
php php php php php php php php returnphp packphp(php'Hphp*php'php,php php$idphp)php;php;
php php php php php}
php}
