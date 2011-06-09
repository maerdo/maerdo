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
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php1php6php3php6php php2php0php1php0php-php0php3php-php2php4php php1php7php:php1php0php:php2php3Zphp mabephp php$
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
classphp Zendphp_Cachephp_Backendphp_Filephp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php cachephp_dirphp php:
php php php php php php*php php-php Directoryphp wherephp tophp putphp thephp cachephp files
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php filephp_lockingphp php:
php php php php php php*php php-php Enablephp php/php disablephp filephp_locking
php php php php php php*php php-php Canphp avoidphp cachephp corruptionphp underphp badphp circumstancesphp butphp itphp doesnphp'tphp workphp onphp multithread
php php php php php php*php webserversphp andphp onphp NFSphp filesystemsphp forphp example
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(booleanphp)php readphp_controlphp php:
php php php php php php*php php-php Enablephp php/php disablephp readphp control
php php php php php php*php php-php Ifphp enabledphp,php aphp controlphp keyphp isphp embededphp inphp cachephp filephp andphp thisphp keyphp isphp comparedphp withphp thephp one
php php php php php php*php calculatedphp afterphp thephp readingphp.
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php readphp_controlphp_typephp php:
php php php php php php*php php-php Typephp ofphp readphp controlphp php(onlyphp ifphp readphp controlphp isphp enabledphp)php.php Availablephp valuesphp arephp php:
php php php php php php*php php php php'mdphp5php'php forphp aphp mdphp5php hashphp controlphp php(bestphp butphp slowestphp)
php php php php php php*php php php php'crcphp3php2php'php forphp aphp crcphp3php2php hashphp controlphp php(lightlyphp lessphp safephp butphp fasterphp,php betterphp choicephp)
php php php php php php*php php php php'adlerphp3php2php'php forphp anphp adlerphp3php2php hashphp controlphp php(excellentphp choicephp toophp,php fasterphp thanphp crcphp3php2php)
php php php php php php*php php php php'strlenphp'php forphp aphp lengthphp onlyphp testphp php(fastestphp)
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php hashedphp_directoryphp_levelphp php:
php php php php php php*php php-php Hashedphp directoryphp level
php php php php php php*php php-php Setphp thephp hashedphp directoryphp structurephp levelphp.php php0php meansphp php"nophp hashedphp directory
php php php php php php*php structurephp"php,php php1php meansphp php"onephp levelphp ofphp directoryphp"php,php php2php meansphp php"twophp levelsphp"php.php.php.
php php php php php php*php Thisphp optionphp canphp speedphp upphp thephp cachephp onlyphp whenphp youphp havephp manyphp thousandsphp of
php php php php php php*php cachephp filephp.php Onlyphp specificphp benchsphp canphp helpphp youphp tophp choosephp thephp perfectphp value
php php php php php php*php forphp youphp.php Maybephp,php php1php orphp php2php isphp aphp goodphp startphp.
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php hashedphp_directoryphp_umaskphp php:
php php php php php php*php php-php Umaskphp forphp hashedphp directoryphp structure
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php filephp_namephp_prefixphp php:
php php php php php php*php php-php prefixphp forphp cachephp files
php php php php php php*php php-php bephp reallyphp carefullphp withphp thisphp optionphp becausephp aphp toophp genericphp valuephp inphp aphp systemphp cachephp dir
php php php php php php*php php php php(likephp php/tmpphp)php canphp causephp disastersphp whenphp cleaningphp thephp cache
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php cachephp_filephp_umaskphp php:
php php php php php php*php php-php Umaskphp forphp cachephp files
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(intphp)php metatadatasphp_arrayphp_maxphp_sizephp php:
php php php php php php*php php-php maxphp sizephp forphp thephp metadatasphp arrayphp php(donphp'tphp changephp thisphp valuephp unlessphp you
php php php php php php*php php php knowphp whatphp youphp arephp doingphp)
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'cachephp_dirphp'php php=php>php nullphp,
php php php php php php php php php'filephp_lockingphp'php php=php>php truephp,
php php php php php php php php php'readphp_controlphp'php php=php>php truephp,
php php php php php php php php php'readphp_controlphp_typephp'php php=php>php php'crcphp3php2php'php,
php php php php php php php php php'hashedphp_directoryphp_levelphp'php php=php>php php0php,
php php php php php php php php php'hashedphp_directoryphp_umaskphp'php php=php>php php0php7php0php0php,
php php php php php php php php php'filephp_namephp_prefixphp'php php=php>php php'zendphp_cachephp'php,
php php php php php php php php php'cachephp_filephp_umaskphp'php php=php>php php0php6php0php0php,
php php php php php php php php php'metadatasphp_arrayphp_maxphp_sizephp'php php=php>php php1php0php0
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp metadatasphp php(eachphp itemphp isphp anphp associativephp arrayphp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_metadatasArrayphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php php!php=php=php nullphp)php php{php php/php/php particularphp casephp forphp thisphp option
php php php php php php php php php php php php php$thisphp-php>setCacheDirphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setCacheDirphp(selfphp:php:getTmpDirphp(php)php php.php DIRECTORYphp_SEPARATORphp,php falsephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php)php)php php{php php/php/php particularphp casephp forphp thisphp option
php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php'php~php^php[aphp-zAphp-Zphp0php-php9php_php]php+php$php~Dphp'php,php php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp filephp_namephp_prefixphp php:php mustphp usephp onlyphp php[aphp-zAphp-Zphp0php-php9php_php]php'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'metadatasphp_arrayphp_maxphp_sizephp'php]php <php php1php0php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp metadatasphp_arrayphp_maxphp_sizephp,php mustphp bephp php>php php1php0php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'hashedphp_directoryphp_umaskphp'php]php)php php&php&php isphp_stringphp(php$optionsphp[php'hashedphp_directoryphp_umaskphp'php]php)php)php php{
php php php php php php php php php php php php php/php/php Seephp php#ZFphp-php4php4php2php2
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_umaskphp'php]php php=php octdecphp(php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_umaskphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'cachephp_filephp_umaskphp'php]php)php php&php&php isphp_stringphp(php$optionsphp[php'cachephp_filephp_umaskphp'php]php)php)php php{
php php php php php php php php php php php php php/php/php Seephp php#ZFphp-php4php4php2php2
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'cachephp_filephp_umaskphp'php]php php=php octdecphp(php$thisphp-php>php_optionsphp[php'cachephp_filephp_umaskphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp cachephp_dirphp php(particularphp casephp ofphp setOptionphp(php)php methodphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$value
php php php php php php*php php@paramphp php booleanphp php$trailingSeparatorphp Ifphp truephp,php addphp aphp trailingphp separatorphp isphp necessary
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setCacheDirphp(php$valuephp,php php$trailingSeparatorphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_dirphp(php$valuephp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'cachephp_dirphp mustphp bephp aphp directoryphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!isphp_writablephp(php$valuephp)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'cachephp_dirphp isphp notphp writablephp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$trailingSeparatorphp)php php{
php php php php php php php php php php php php php/php/php addphp aphp trailingphp DIRECTORYphp_SEPARATORphp ifphp necessary
php php php php php php php php php php php php php$valuephp php=php rtrimphp(realpathphp(php$valuephp)php,php php'php\php\php/php'php)php php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php php=php php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@paramphp booleanphp php$doNotTestCacheValidityphp ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp|falsephp cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_testphp(php$idphp,php php$doNotTestCacheValidityphp)php)php)php php{
php php php php php php php php php php php php php/php/php Thephp cachephp isphp notphp hitphp php!
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php php$filephp php=php php$thisphp-php>php_filephp(php$idphp)php;
php php php php php php php php php$dataphp php=php php$thisphp-php>php_fileGetContentsphp(php$filephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'readphp_controlphp'php]php)php php{
php php php php php php php php php php php php php$hashDataphp php=php php$thisphp-php>php_hashphp(php$dataphp,php php$thisphp-php>php_optionsphp[php'readphp_controlphp_typephp'php]php)php;
php php php php php php php php php php php php php$hashControlphp php=php php$metadatasphp[php'hashphp'php]php;
php php php php php php php php php php php php ifphp php(php$hashDataphp php!php=php php$hashControlphp)php php{
php php php php php php php php php php php php php php php php php/php/php Problemphp detectedphp byphp thephp readphp controlphp php!
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Backendphp_Filephp:php:loadphp(php)php php/php readphp_controlphp php:php storedphp hashphp andphp computedphp hashphp dophp notphp matchphp'php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@returnphp mixedphp falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php clearstatcachephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_testphp(php$idphp,php falsephp)php;
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
php php php php php php php php clearstatcachephp(php)php;
php php php php php php php php php$filephp php=php php$thisphp-php>php_filephp(php$idphp)php;
php php php php php php php php php$pathphp php=php php$thisphp-php>php_pathphp(php$idphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_levelphp'php]php php>php php0php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_writablephp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php maybephp,php wephp justphp havephp tophp buildphp thephp directoryphp structure
php php php php php php php php php php php php php php php php php$thisphp-php>php_recursiveMkdirAndChmodphp(php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!isphp_writablephp(php$pathphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'readphp_controlphp'php]php)php php{
php php php php php php php php php php php php php$hashphp php=php php$thisphp-php>php_hashphp(php$dataphp,php php$thisphp-php>php_optionsphp[php'readphp_controlphp_typephp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hashphp php=php php'php'php;
php php php php php php php php php}
php php php php php php php php php$metadatasphp php=php arrayphp(
php php php php php php php php php php php php php'hashphp'php php=php>php php$hashphp,
php php php php php php php php php php php php php'mtimephp'php php=php>php timephp(php)php,
php php php php php php php php php php php php php'expirephp'php php=php>php php$thisphp-php>php_expireTimephp(php$thisphp-php>getLifetimephp(php$specificLifetimephp)php)php,
php php php php php php php php php php php php php'tagsphp'php php=php>php php$tags
php php php php php php php php php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_setMetadatasphp(php$idphp,php php$metadatasphp)php;
php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Backendphp_Filephp:php:savephp(php)php php/php errorphp onphp savingphp metadataphp'php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resphp php=php php$thisphp-php>php_filePutContentsphp(php$filephp,php php$dataphp)php;
php php php php php php php php returnphp php$resphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php php$filephp php=php php$thisphp-php>php_filephp(php$idphp)php;
php php php php php php php php php$boolRemovephp php php php=php php$thisphp-php>php_removephp(php$filephp)php;
php php php php php php php php php$boolMetadataphp php=php php$thisphp-php>php_delMetadatasphp(php$idphp)php;
php php php php php php php php returnphp php$boolMetadataphp php&php&php php$boolRemovephp;
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
php php php php php php*php php@paramphp stringphp php$modephp cleanphp mode
php php php php php php*php php@paramphp tagsphp arrayphp php$tagsphp arrayphp ofphp tags
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php Wephp usephp thisphp protectedphp methodphp tophp hidephp thephp recursivephp stuff
php php php php php php php php clearstatcachephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_cleanphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php,php php$modephp,php php$tagsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp cachephp ids
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp cachephp idsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getIdsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php,php php'idsphp'php,php arrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php,php php'tagsphp'php,php arrayphp(php)php)php;
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
php php php php php php php php returnphp php$thisphp-php>php_getphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php,php php'matchingphp'php,php php$tagsphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_getphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php,php php'notMatchingphp'php,php php$tagsphp)php;
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
php php php php php php php php returnphp php$thisphp-php>php_getphp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php,php php'matchingAnyphp'php,php php$tagsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php php$freephp php=php diskphp_freephp_spacephp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php)php;
php php php php php php php php php$totalphp php=php diskphp_totalphp_spacephp(php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php)php;
php php php php php php php php ifphp php(php$totalphp php=php=php php0php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'canphp\php'tphp getphp diskphp_totalphp_spacephp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$freephp php>php=php php$totalphp)php php{
php php php php php php php php php php php php php php php php returnphp php1php0php0php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php(php(intphp)php php(php1php0php0php.php php*php php(php$totalphp php-php php$freephp)php php/php php$totalphp)php)php;
php php php php php php php php php}
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
php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php ifphp php(php!php$metadatasphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(timephp(php)php php>php php$metadatasphp[php'expirephp'php]php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'expirephp'php php=php>php php$metadatasphp[php'expirephp'php]php,
php php php php php php php php php php php php php'tagsphp'php php=php>php php$metadatasphp[php'tagsphp'php]php,
php php php php php php php php php php php php php'mtimephp'php php=php>php php$metadatasphp[php'mtimephp'php]
php php php php php php php php php)php;
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
php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php ifphp php(php!php$metadatasphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(timephp(php)php php>php php$metadatasphp[php'expirephp'php]php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$newMetadatasphp php=php arrayphp(
php php php php php php php php php php php php php'hashphp'php php=php>php php$metadatasphp[php'hashphp'php]php,
php php php php php php php php php php php php php'mtimephp'php php=php>php timephp(php)php,
php php php php php php php php php php php php php'expirephp'php php=php>php php$metadatasphp[php'expirephp'php]php php+php php$extraLifetimephp,
php php php php php php php php php php php php php'tagsphp'php php=php>php php$metadatasphp[php'tagsphp'php]
php php php php php php php php php)php;
php php php php php php php php php$resphp php=php php$thisphp-php>php_setMetadatasphp(php$idphp,php php$newMetadatasphp)php;
php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
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
php php php php php php php php php php php php php'tagsphp'php php=php>php truephp,
php php php php php php php php php php php php php'expiredphp_readphp'php php=php>php truephp,
php php php php php php php php php php php php php'priorityphp'php php=php>php falsephp,
php php php php php php php php php php php php php'infinitephp_lifetimephp'php php=php>php truephp,
php php php php php php php php php php php php php'getphp_listphp'php php=php>php true
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
php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php ifphp php(php$metadatasphp)php php{
php php php php php php php php php php php php php$metadatasphp[php'expirephp'php]php php=php php1php;
php php php php php php php php php php php php php$thisphp-php>php_setMetadatasphp(php$idphp,php php$metadatasphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp metadatasphp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp php Cachephp id
php php php php php php*php php@returnphp arrayphp|falsephp Associativephp arrayphp ofphp metadatas
php php php php php php*php/
php php php php protectedphp functionphp php_getMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_metadatasArrayphp[php$idphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_metadatasArrayphp[php$idphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_loadMetadatasphp(php$idphp)php;
php php php php php php php php php php php php ifphp php(php!php$metadatasphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_setMetadatasphp(php$idphp,php php$metadatasphp,php falsephp)php;
php php php php php php php php php php php php returnphp php$metadatasphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp metadatasphp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php php$metadatasphp Associativephp arrayphp ofphp metadatas
php php php php php php*php php@paramphp php booleanphp php$savephp php php php php optionalphp passphp falsephp tophp disablephp savingphp tophp file
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php protectedphp functionphp php_setMetadatasphp(php$idphp,php php$metadatasphp,php php$savephp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_metadatasArrayphp)php php>php=php php$thisphp-php>php_optionsphp[php'metadatasphp_arrayphp_maxphp_sizephp'php]php)php php{
php php php php php php php php php php php php php$nphp php=php php(intphp)php php(php$thisphp-php>php_optionsphp[php'metadatasphp_arrayphp_maxphp_sizephp'php]php php/php php1php0php)php;
php php php php php php php php php php php php php$thisphp-php>php_metadatasArrayphp php=php arrayphp_slicephp(php$thisphp-php>php_metadatasArrayphp,php php$nphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$savephp)php php{
php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_saveMetadatasphp(php$idphp,php php$metadatasphp)php;
php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_metadatasArrayphp[php$idphp]php php=php php$metadatasphp;
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Dropphp aphp metadataphp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php protectedphp functionphp php_delMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_metadatasArrayphp[php$idphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_metadatasArrayphp[php$idphp]php)php;
php php php php php php php php php}
php php php php php php php php php$filephp php=php php$thisphp-php>php_metadatasFilephp(php$idphp)php;
php php php php php php php php returnphp php$thisphp-php>php_removephp(php$filephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp thephp metadatasphp array
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_cleanMetadatasphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_metadatasArrayphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp metadatasphp fromphp disk
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp arrayphp|falsephp Metadatasphp associativephp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadMetadatasphp(php$idphp)
php php php php php{
php php php php php php php php php$filephp php=php php$thisphp-php>php_metadatasFilephp(php$idphp)php;
php php php php php php php php php$resultphp php=php php$thisphp-php>php_fileGetContentsphp(php$filephp)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$tmpphp php=php php@unserializephp(php$resultphp)php;
php php php php php php php php returnphp php$tmpphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp metadatasphp tophp disk
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php php$metadatasphp Associativephp array
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php protectedphp functionphp php_saveMetadatasphp(php$idphp,php php$metadatasphp)
php php php php php{
php php php php php php php php php$filephp php=php php$thisphp-php>php_metadatasFilephp(php$idphp)php;
php php php php php php php php php$resultphp php=php php$thisphp-php>php_filePutContentsphp(php$filephp,php serializephp(php$metadatasphp)php)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp andphp returnphp aphp filephp namephp php(withphp pathphp)php forphp metadatas
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp stringphp Metadatasphp filephp namephp php(withphp pathphp)
php php php php php php*php/
php php php php protectedphp functionphp php_metadatasFilephp(php$idphp)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_pathphp(php$idphp)php;
php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_idToFileNamephp(php'internalphp-metadatasphp-php-php-php'php php.php php$idphp)php;
php php php php php php php php returnphp php$pathphp php.php php$fileNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp givenphp filenamephp isphp aphp metadatasphp one
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fileNamephp Filephp name
php php php php php php*php php@returnphp booleanphp Truephp ifphp itphp'sphp aphp metadatasphp one
php php php php php php*php/
php php php php protectedphp functionphp php_isMetadatasFilephp(php$fileNamephp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>php_fileNameToIdphp(php$fileNamephp)php;
php php php php php php php php ifphp php(substrphp(php$idphp,php php0php,php php2php1php)php php=php=php php'internalphp-metadatasphp-php-php-php'php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
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
php php php php protectedphp functionphp php_removephp(php$filephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_filephp(php$filephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php@unlinkphp(php$filephp)php)php php{
php php php php php php php php php php php php php#php wephp canphp'tphp removephp thephp filephp php(becausephp ofphp locksphp orphp anyphp problemphp)
php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_Filephp:php:php_removephp(php)php php:php wephp canphp'tphp removephp php$filephp"php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp recordsphp php(protectedphp methodphp usedphp forphp recursivephp stuffphp)
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
php php php php php php*php php@paramphp php stringphp php$dirphp php Directoryphp tophp clean
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php protectedphp functionphp php_cleanphp(php$dirphp,php php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_dirphp(php$dirphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php$prefixphp php=php php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php;
php php php php php php php php php$globphp php=php php@globphp(php$dirphp php.php php$prefixphp php.php php'php-php-php*php'php)php;
php php php php php php php php ifphp php(php$globphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php Onphp somephp systemsphp itphp isphp impossiblephp tophp distinguishphp betweenphp emptyphp matchphp andphp anphp errorphp.
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$globphp asphp php$filephp)php php php{
php php php php php php php php php php php php ifphp php(isphp_filephp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php$fileNamephp php=php basenamephp(php$filephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isMetadatasFilephp(php$fileNamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php inphp CLEANINGphp_MODEphp_ALLphp,php wephp dropphp anythingphp,php evenphp remainingsphp oldphp metadatasphp files
php php php php php php php php php php php php php php php php php php php php ifphp php(php$modephp php!php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_fileNameToIdphp(php$fileNamephp)php;
php php php php php php php php php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$metadatasphp php=php=php=php FALSEphp)php php{
php php php php php php php php php php php php php php php php php php php php php$metadatasphp php=php arrayphp(php'expirephp'php php=php>php php1php,php php'tagsphp'php php=php>php arrayphp(php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$resphp php=php php$thisphp-php>removephp(php$idphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$resphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php inphp thisphp casephp onlyphp,php wephp acceptphp aphp problemphp withphp thephp metadatasphp filephp drop
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resphp php=php php$thisphp-php>php_removephp(php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$resultphp php&php&php php$resphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(timephp(php)php php>php php$metadatasphp[php'expirephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$tagphp,php php$metadatasphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$matchingphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$tagphp,php php$metadatasphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$matchingphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$tagphp,php php$metadatasphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$matchingphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>removephp(php$idphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php(isphp_dirphp(php$filephp)php)php andphp php(php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_levelphp'php]php>php0php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Recursivephp call
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>php_cleanphp(php$filephp php.php DIRECTORYphp_SEPARATORphp,php php$modephp,php php$tagsphp)php php&php&php php$resultphp;
php php php php php php php php php php php php php php php php ifphp php(php$modephp=php=php'allphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php ifphp modephp=php=php'allphp'php,php wephp tryphp tophp dropphp thephp structurephp too
php php php php php php php php php php php php php php php php php php php php php@rmdirphp(php$filephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php protectedphp functionphp php_getphp(php$dirphp,php php$modephp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!isphp_dirphp(php$dirphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php php$prefixphp php=php php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php;
php php php php php php php php php$globphp php=php php@globphp(php$dirphp php.php php$prefixphp php.php php'php-php-php*php'php)php;
php php php php php php php php ifphp php(php$globphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php Onphp somephp systemsphp itphp isphp impossiblephp tophp distinguishphp betweenphp emptyphp matchphp andphp anphp errorphp.
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$globphp asphp php$filephp)php php php{
php php php php php php php php php php php php ifphp php(isphp_filephp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php$fileNamephp php=php basenamephp(php$filephp)php;
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_fileNameToIdphp(php$fileNamephp)php;
php php php php php php php php php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$metadatasphp php=php=php=php FALSEphp)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(timephp(php)php php>php php$metadatasphp[php'expirephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php switchphp php(php$modephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'idsphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'tagsphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp php=php arrayphp_uniquephp(arrayphp_mergephp(php$resultphp,php php$metadatasphp[php'tagsphp'php]php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'matchingphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(php$tagphp,php php$metadatasphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$matchingphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'notMatchingphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$tagphp,php php$metadatasphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$matchingphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'matchingAnyphp'php:
php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tagsphp asphp php$tagphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$tagphp,php php$metadatasphp[php'tagsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchingphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$matchingphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$resultphp[php]php php=php php$idphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp php_getphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php(isphp_dirphp(php$filephp)php)php andphp php(php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_levelphp'php]php>php0php)php)php php{
php php php php php php php php php php php php php php php php php/php/php Recursivephp call
php php php php php php php php php php php php php php php php php$recursiveRsphp php=php php php$thisphp-php>php_getphp(php$filephp php.php DIRECTORYphp_SEPARATORphp,php php$modephp,php php$tagsphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$recursiveRsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Backendphp_Filephp:php:php_getphp(php)php php/php recursivephp callphp php:php canphp\php'tphp listphp entriesphp ofphp php"php'php.php$filephp.php'php"php'php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$resultphp php=php arrayphp_uniquephp(arrayphp_mergephp(php$resultphp,php php$recursiveRsphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp arrayphp_uniquephp(php$resultphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computephp php&php returnphp thephp expirephp time
php php php php php php*
php php php php php php*php php@returnphp intphp expirephp timephp php(unixphp timestampphp)
php php php php php php*php/
php php php php protectedphp functionphp php_expireTimephp(php$lifetimephp)
php php php php php{
php php php php php php php php ifphp php(php$lifetimephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php9php9php9php9php9php9php9php9php9php9php;
php php php php php php php php php}
php php php php php php php php returnphp timephp(php)php php+php php$lifetimephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp aphp controlphp keyphp withphp thephp stringphp containingphp datas
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php Data
php php php php php php*php php@paramphp php stringphp php$controlTypephp Typephp ofphp controlphp php'mdphp5php'php,php php'crcphp3php2php'php orphp php'strlenphp'
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp stringphp Controlphp key
php php php php php php*php/
php php php php protectedphp functionphp php_hashphp(php$dataphp,php php$controlTypephp)
php php php php php{
php php php php php php php php switchphp php(php$controlTypephp)php php{
php php php php php php php php casephp php'mdphp5php'php:
php php php php php php php php php php php php returnphp mdphp5php(php$dataphp)php;
php php php php php php php php casephp php'crcphp3php2php'php:
php php php php php php php php php php php php returnphp crcphp3php2php(php$dataphp)php;
php php php php php php php php casephp php'strlenphp'php:
php php php php php php php php php php php php returnphp strlenphp(php$dataphp)php;
php php php php php php php php casephp php'adlerphp3php2php'php:
php php php php php php php php php php php php returnphp hashphp(php'adlerphp3php2php'php,php php$dataphp)php;
php php php php php php php php defaultphp:
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php"Incorrectphp hashphp functionphp php:php php$controlTypephp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp aphp cachephp idphp intophp aphp filephp namephp andphp returnphp it
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp stringphp Filephp name
php php php php php php*php/
php php php php protectedphp functionphp php_idToFileNamephp(php$idphp)
php php php php php{
php php php php php php php php php$prefixphp php=php php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php;
php php php php php php php php php$resultphp php=php php$prefixphp php.php php'php-php-php-php'php php.php php$idphp;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp andphp returnphp aphp filephp namephp php(withphp pathphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp stringphp Filephp namephp php(withphp pathphp)
php php php php php php*php/
php php php php protectedphp functionphp php_filephp(php$idphp)
php php php php php{
php php php php php php php php php$pathphp php=php php$thisphp-php>php_pathphp(php$idphp)php;
php php php php php php php php php$fileNamephp php=php php$thisphp-php>php_idToFileNamephp(php$idphp)php;
php php php php php php php php returnphp php$pathphp php.php php$fileNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp completephp directoryphp pathphp ofphp aphp filenamephp php(includingphp hashedDirectoryStructurephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@paramphp php booleanphp php$partsphp ifphp truephp,php returnsphp arrayphp ofphp directoryphp partsphp insteadphp ofphp singlephp string
php php php php php php*php php@returnphp stringphp Completephp directoryphp path
php php php php php php*php/
php php php php protectedphp functionphp php_pathphp(php$idphp,php php$partsphp php=php falsephp)
php php php php php{
php php php php php php php php php$partsArrayphp php=php arrayphp(php)php;
php php php php php php php php php$rootphp php=php php$thisphp-php>php_optionsphp[php'cachephp_dirphp'php]php;
php php php php php php php php php$prefixphp php=php php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php;
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_levelphp'php]php>php0php)php php{
php php php php php php php php php php php php php$hashphp php=php hashphp(php'adlerphp3php2php'php,php php$idphp)php;
php php php php php php php php php php php php forphp php(php$iphp=php0php php;php php$iphp <php php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_levelphp'php]php php;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$rootphp php=php php$rootphp php.php php$prefixphp php.php php'php-php-php'php php.php substrphp(php$hashphp,php php0php,php php$iphp php+php php1php)php php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php php php php php php php php php$partsArrayphp[php]php php=php php$rootphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php$partsphp)php php{
php php php php php php php php php php php php returnphp php$partsArrayphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$rootphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Makephp thephp directoryphp strucuturephp forphp thephp givenphp id
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp cachephp id
php php php php php php*php php@returnphp booleanphp true
php php php php php php*php/
php php php php protectedphp functionphp php_recursiveMkdirAndChmodphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_levelphp'php]php <php=php0php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php php php php php$partsArrayphp php=php php$thisphp-php>php_pathphp(php$idphp,php truephp)php;
php php php php php php php php foreachphp php(php$partsArrayphp asphp php$partphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_dirphp(php$partphp)php)php php{
php php php php php php php php php php php php php php php php php@mkdirphp(php$partphp,php php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_umaskphp'php]php)php;
php php php php php php php php php php php php php php php php php@chmodphp(php$partphp,php php$thisphp-php>php_optionsphp[php'hashedphp_directoryphp_umaskphp'php]php)php;php php/php/php seephp php#ZFphp-php3php2php0php php(thisphp linephp isphp requiredphp inphp somephp configurationsphp)
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp thephp givenphp cachephp idphp isphp availablephp php(andphp stillphp validphp asphp aphp cachephp recordphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp booleanphp|mixedphp falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php protectedphp functionphp php_testphp(php$idphp,php php$doNotTestCacheValidityphp)
php php php php php{
php php php php php php php php php$metadatasphp php=php php$thisphp-php>php_getMetadatasphp(php$idphp)php;
php php php php php php php php ifphp php(php!php$metadatasphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$doNotTestCacheValidityphp php|php|php php(timephp(php)php <php=php php$metadatasphp[php'expirephp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$metadatasphp[php'mtimephp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp filephp contentphp ofphp thephp givenphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filephp Filephp completephp path
php php php php php php*php php@returnphp stringphp Filephp contentphp php(orphp falsephp ifphp problemphp)
php php php php php php*php/
php php php php protectedphp functionphp php_fileGetContentsphp(php$filephp)
php php php php php{
php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php ifphp php(php!isphp_filephp(php$filephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php php$fphp php=php php@fopenphp(php$filephp,php php'rbphp'php)php;
php php php php php php php php ifphp php(php$fphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'filephp_lockingphp'php]php)php php@flockphp(php$fphp,php LOCKphp_SHphp)php;
php php php php php php php php php php php php php$resultphp php=php streamphp_getphp_contentsphp(php$fphp)php;
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'filephp_lockingphp'php]php)php php@flockphp(php$fphp,php LOCKphp_UNphp)php;
php php php php php php php php php php php php php@fclosephp(php$fphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Putphp thephp givenphp stringphp intophp thephp givenphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filephp php php Filephp completephp path
php php php php php php*php php@paramphp php stringphp php$stringphp Stringphp tophp putphp inphp file
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php protectedphp functionphp php_filePutContentsphp(php$filephp,php php$stringphp)
php php php php php{
php php php php php php php php php$resultphp php=php falsephp;
php php php php php php php php php$fphp php=php php@fopenphp(php$filephp,php php'abphp+php'php)php;
php php php php php php php php ifphp php(php$fphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'filephp_lockingphp'php]php)php php@flockphp(php$fphp,php LOCKphp_EXphp)php;
php php php php php php php php php php php php fseekphp(php$fphp,php php0php)php;
php php php php php php php php php php php php ftruncatephp(php$fphp,php php0php)php;
php php php php php php php php php php php php php$tmpphp php=php php@fwritephp(php$fphp,php php$stringphp)php;
php php php php php php php php php php php php ifphp php(php!php(php$tmpphp php=php=php=php FALSEphp)php)php php{
php php php php php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php@fclosephp(php$fphp)php;
php php php php php php php php php}
php php php php php php php php php@chmodphp(php$filephp,php php$thisphp-php>php_optionsphp[php'cachephp_filephp_umaskphp'php]php)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp aphp filephp namephp intophp cachephp idphp andphp returnphp it
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fileNamephp Filephp name
php php php php php php*php php@returnphp stringphp Cachephp id
php php php php php php*php/
php php php php protectedphp functionphp php_fileNameToIdphp(php$fileNamephp)
php php php php php{
php php php php php php php php php$prefixphp php=php php$thisphp-php>php_optionsphp[php'filephp_namephp_prefixphp'php]php;
php php php php php php php php returnphp pregphp_replacephp(php'php~php^php'php php.php php$prefixphp php.php php'php-php-php-php(php.php*php)php$php~php'php,php php'php$php1php'php,php php$fileNamephp)php;
php php php php php}

php}
