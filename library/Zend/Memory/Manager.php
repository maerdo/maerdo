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
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Managerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Memoryphp_Containerphp_Movablephp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Containerphp/Movablephp.phpphp'php;

php/php*php*php Zendphp_Memoryphp_Containerphp_Lockedphp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/Containerphp/Lockedphp.phpphp'php;

php/php*php*php Zendphp_Memoryphp_AccessControllerphp php*php/
requirephp_oncephp php'Zendphp/Memoryphp/AccessControllerphp.phpphp'php;


php/php*php*
php php*php Memoryphp manager
php php*
php php*php Thisphp classphp encapsulatesphp memoryphp menagementphp operationsphp,php whenphp PHPphp works
php php*php inphp limitedphp memoryphp modephp.
php php*
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Memory
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Memoryphp_Manager
php{
php php php php php/php*php*
php php php php php php*php Objectphp storagephp backend
php php php php php php*
php php php php php php*php php@varphp Zendphp_Cachephp_Backendphp_Interface
php php php php php php*php/
php php php php privatephp php$php_backendphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Memoryphp growphp limitphp.
php php php php php php*php Defaultphp valuephp isphp php2php/php3php ofphp memoryphp_limitphp phpphp.iniphp variable
php php php php php php*php Negativephp valuephp meansphp nophp limit
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_memoryLimitphp php=php php-php1php;

php php php php php/php*php*
php php php php php php*php Minimumphp valuephp sizephp tophp bephp swappedphp.
php php php php php php*php Defaultphp valuephp isphp php1php6K
php php php php php php*php Negativephp valuephp meansphp thatphp memoryphp objectsphp arephp neverphp swapped
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_minSizephp php=php php1php6php3php8php4php;

php php php php php/php*php*
php php php php php php*php Overallphp sizephp ofphp memoryphp,php usedphp byphp values
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_memorySizephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Idphp forphp nextphp Zendphp_Memoryphp object
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_nextIdphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp candidatesphp tophp unload
php php php php php php*
php php php php php php*php Itphp alsophp representsphp objectsphp accessphp historyphp.php Lastphp accessedphp objectsphp arephp movedphp tophp thephp endphp ofphp array
php php php php php php*
php php php php php php*php arrayphp(
php php php php php php*php php php php php php<idphp>php php=php>php php<memoryphp containerphp objectphp>php,
php php php php php php*php php php php php php.php.php.
php php php php php php*php php php php php php php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_unloadCandidatesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp objectphp sizesphp.
php php php php php php*
php php php php php php*php Thisphp listphp isphp usedphp tophp calculatephp modificationphp ofphp objectphp sizes
php php php php php php*
php php php php php php*php arrayphp(php php<idphp>php php=php>php php<sizephp>php,php php.php.php.php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_sizesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Lastphp modifiedphp object
php php php php php php*
php php php php php php*php Itphp'sphp usedphp tophp reducephp numberphp ofphp callsphp necessaryphp tophp tracephp objectsphp'php modifications
php php php php php php*php Modificationphp isphp notphp processedphp byphp memoryphp managerphp untilphp wephp dophp notphp switchphp tophp another
php php php php php php*php objectphp.
php php php php php php*php Sophp wephp havephp tophp tracephp onlyphp php_firstphp_php objectphp modificationphp andphp dophp nothingphp forphp others
php php php php php php*
php php php php php php*php php@varphp Zendphp_Memoryphp_Containerphp_Movable
php php php php php php*php/
php php php php privatephp php$php_lastModifiedphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Uniquephp memoryphp managerphp id
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_managerIdphp;

php php php php php/php*php*
php php php php php php*php Tagsphp arrayphp,php usedphp byphp backendphp tophp categorizephp storedphp values
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_tagsphp;

php php php php php/php*php*
php php php php php php*php Thisphp functionphp isphp intendedphp tophp generatephp uniquephp idphp,php usedphp byphp memoryphp manager
php php php php php php*php/
php php php php privatephp functionphp php_generateMemManagerIdphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp php!php!php!
php php php php php php php php php php*php uniqidphp(php)php phpphp functionphp doesnphp'tphp reallyphp garanteephp thephp idphp tophp bephp unique
php php php php php php php php php php*php itphp shouldphp bephp changedphp byphp somethingphp else
php php php php php php php php php php*php php(Exphp.php backendphp interfacephp shouldphp bephp extendedphp tophp providephp thisphp functionalityphp)
php php php php php php php php php php*php/
php php php php php php php php php$thisphp-php>php_managerIdphp php=php uniqidphp(php'ZendMemManagerphp'php,php truephp)php;
php php php php php php php php php$thisphp-php>php_tagsphp php=php arrayphp(php$thisphp-php>php_managerIdphp)php;
php php php php php php php php php$thisphp-php>php_managerIdphp php.php=php php'php_php'php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Memoryphp managerphp constructor
php php php php php php*
php php php php php php*php Ifphp backendphp isphp notphp specifiedphp,php thenphp memoryphp objectsphp arephp neverphp swapped
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Cachephp_Backendphp php$backend
php php php php php php*php php@paramphp arrayphp php$backendOptionsphp associativephp arrayphp ofphp optionsphp forphp thephp correspondingphp backendphp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$backendphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$backendphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_backendphp php=php php$backendphp;
php php php php php php php php php$thisphp-php>php_generateMemManagerIdphp(php)php;

php php php php php php php php php$memoryLimitStrphp php=php trimphp(iniphp_getphp(php'memoryphp_limitphp'php)php)php;
php php php php php php php php ifphp php(php$memoryLimitStrphp php!php=php php'php'php php php&php&php php php$memoryLimitStrphp php!php=php php-php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_memoryLimitphp php=php php(integerphp)php$memoryLimitStrphp;
php php php php php php php php php php php php switchphp php(strtolowerphp(php$memoryLimitStrphp[strlenphp(php$memoryLimitStrphp)php-php1php]php)php)php php{
php php php php php php php php php php php php php php php php casephp php'gphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_memoryLimitphp php*php=php php1php0php2php4php;
php php php php php php php php php php php php php php php php php php php php php/php/php Breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php'mphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_memoryLimitphp php*php=php php1php0php2php4php;
php php php php php php php php php php php php php php php php php php php php php/php/php Breakphp intentionallyphp omitted
php php php php php php php php php php php php php php php php casephp php'kphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_memoryLimitphp php*php=php php1php0php2php4php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_memoryLimitphp php=php php(intphp)php(php$thisphp-php>php_memoryLimitphp*php2php/php3php)php;
php php php php php php php php php}php php/php/php Nophp limitphp otherwise
php php php php php}

php php php php php/php*php*
php php php php php php*php Objectphp destructor
php php php php php php*
php php php php php php*php Cleanphp upphp backendphp storage
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_backendphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_backendphp-php>cleanphp(Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp,php php$thisphp-php>php_tagsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp memoryphp growphp limit
php php php php php php*
php php php php php php*php php@paramphp integerphp php$newLimit
php php php php php php*php php@throwsphp Zendphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMemoryLimitphp(php$newLimitphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_memoryLimitphp php=php php$newLimitphp;

php php php php php php php php php$thisphp-php>php_swapCheckphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp memoryphp growphp limit
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMemoryLimitphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_memoryLimitphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp minimumphp sizephp ofphp valuesphp,php whichphp mayphp bephp swapped
php php php php php php*
php php php php php php*php php@paramphp integerphp php$newSize
php php php php php php*php/
php php php php publicphp functionphp setMinSizephp(php$newSizephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_minSizephp php=php php$newSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp minimumphp sizephp ofphp valuesphp,php whichphp mayphp bephp swapped
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getMinSizephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_minSizephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp Zendphp_Memoryphp valuephp container
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Memoryphp_Containerphp_Interface
php php php php php php*php php@throwsphp Zendphp_Memoryphp_Exception
php php php php php php*php/
php php php php publicphp functionphp createphp(php$valuephp php=php php'php'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_createphp(php$valuephp,php php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp Zendphp_Memoryphp valuephp containerphp,php whichphp hasphp valuephp always
php php php php php php*php lockedphp inphp memory
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@returnphp Zendphp_Memoryphp_Containerphp_Interface
php php php php php php*php php@throwsphp Zendphp_Memoryphp_Exception
php php php php php php*php/
php php php php publicphp functionphp createLockedphp(php$valuephp php=php php'php'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_createphp(php$valuephp,php truephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp Zendphp_Memoryphp object
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp booleanphp php$locked
php php php php php php*php php@returnphp Zendphp_Memoryphp_Containerphp_Interface
php php php php php php*php php@throwsphp Zendphp_Memoryphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_createphp(php$valuephp,php php$lockedphp)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>php_nextIdphp+php+php;

php php php php php php php php ifphp php(php$lockedphp php php|php|php php php(php$thisphp-php>php_backendphp php=php=php=php nullphp)php php/php*php Usephp onlyphp memoryphp lockedphp objectsphp ifphp backendphp isphp notphp specifiedphp php*php/php)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Memoryphp_Containerphp_Lockedphp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Commitphp otherphp objectsphp modifications
php php php php php php php php php$thisphp-php>php_commitphp(php)php;

php php php php php php php php php$valueObjectphp php=php newphp Zendphp_Memoryphp_Containerphp_Movablephp(php$thisphp,php php$idphp,php php$valuephp)php;

php php php php php php php php php/php/php Storephp lastphp objectphp sizephp asphp php0
php php php php php php php php php$thisphp-php>php_sizesphp[php$idphp]php php=php php0php;
php php php php php php php php php/php/php preparephp objectphp forphp nextphp modifications
php php php php php php php php php$thisphp-php>php_lastModifiedphp php=php php$valueObjectphp;

php php php php php php php php returnphp newphp Zendphp_Memoryphp_AccessControllerphp(php$valueObjectphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unlinkphp valuephp containerphp fromphp memoryphp manager
php php php php php php*
php php php php php php*php Usedphp byphp Memoryphp containerphp destroyphp(php)php method
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php php@returnphp Zendphp_Memoryphp_Container
php php php php php php*php/
php php php php publicphp functionphp unlinkphp(Zendphp_Memoryphp_Containerphp_Movablephp php$containerphp,php php$idphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_lastModifiedphp php=php=php=php php$containerphp)php php{
php php php php php php php php php php php php php/php/php Dropphp allphp objectphp modifications
php php php php php php php php php php php php php$thisphp-php>php_lastModifiedphp php=php nullphp;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_sizesphp[php$idphp]php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_unloadCandidatesphp[php$idphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_unloadCandidatesphp[php$idphp]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_memorySizephp php-php=php php$thisphp-php>php_sizesphp[php$idphp]php;
php php php php php php php php unsetphp(php$thisphp-php>php_sizesphp[php$idphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp valuephp update
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Memoryphp_Containerphp_Movablephp php$container
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php/
php php php php publicphp functionphp processUpdatephp(Zendphp_Memoryphp_Containerphp_Movablephp php$containerphp,php php$idphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Thisphp methodphp isphp automaticallyphp invokedphp byphp memoryphp containerphp onlyphp oncephp per
php php php php php php php php php php*php php"modificationphp sessionphp"php,php butphp userphp mayphp callphp memoryphp containerphp touchphp(php)php method
php php php php php php php php php php*php severalphp timesphp dependingphp onphp usedphp algorithmphp.php Sophp wephp havephp tophp usephp thisphp check
php php php php php php php php php php*php tophp optimizephp thisphp casephp.
php php php php php php php php php php*php/
php php php php php php php php ifphp php(php$containerphp php=php=php=php php$thisphp-php>php_lastModifiedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php Removephp justphp updatedphp objectphp fromphp listphp ofphp candidatesphp tophp unload
php php php php php php php php ifphp(php issetphp(php$thisphp-php>php_unloadCandidatesphp[php$idphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_unloadCandidatesphp[php$idphp]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Reducephp usedphp memoryphp mark
php php php php php php php php php$thisphp-php>php_memorySizephp php-php=php php$thisphp-php>php_sizesphp[php$idphp]php;

php php php php php php php php php/php/php Commitphp changesphp ofphp previouslyphp modifiedphp objectphp ifphp necessary
php php php php php php php php php$thisphp-php>php_commitphp(php)php;

php php php php php php php php php$thisphp-php>php_lastModifiedphp php=php php$containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Commitphp modifiedphp objectphp andphp putphp itphp backphp tophp thephp loadedphp objectsphp list
php php php php php php*php/
php php php php privatephp functionphp php_commitphp(php)
php php php php php{
php php php php php php php php ifphp php(php(php$containerphp php=php php$thisphp-php>php_lastModifiedphp)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_lastModifiedphp php=php nullphp;

php php php php php php php php php$idphp php=php php$containerphp-php>getIdphp(php)php;

php php php php php php php php php/php/php Calculatephp newphp objectphp sizephp andphp increasephp usedphp memoryphp sizephp byphp thisphp value
php php php php php php php php php$thisphp-php>php_memorySizephp php+php=php php(php$thisphp-php>php_sizesphp[php$idphp]php php=php strlenphp(php$containerphp-php>getRefphp(php)php)php)php;

php php php php php php php php ifphp php(php$thisphp-php>php_sizesphp[php$idphp]php php>php php$thisphp-php>php_minSizephp)php php{
php php php php php php php php php php php php php/php/php Movephp objectphp tophp php"unloadphp candidatesphp listphp"
php php php php php php php php php php php php php$thisphp-php>php_unloadCandidatesphp[php$idphp]php php=php php$containerphp;
php php php php php php php php php}

php php php php php php php php php$containerphp-php>startTracephp(php)php;

php php php php php php php php php$thisphp-php>php_swapCheckphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp andphp swapphp objectsphp ifphp necessary
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_MemoryException
php php php php php php*php/
php php php php privatephp functionphp php_swapCheckphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_memoryLimitphp <php php0php php php|php|php php php$thisphp-php>php_memorySizephp <php php$thisphp-php>php_memoryLimitphp)php php{
php php php php php php php php php php php php php/php/php Memoryphp limitphp isphp notphp reached
php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php walkphp throughphp loadedphp objectsphp inphp accessphp historyphp order
php php php php php php php php foreachphp php(php$thisphp-php>php_unloadCandidatesphp asphp php$idphp php=php>php php$containerphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_swapphp(php$containerphp,php php$idphp)php;
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_unloadCandidatesphp[php$idphp]php)php;

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_memorySizephp <php php$thisphp-php>php_memoryLimitphp)php php{
php php php php php php php php php php php php php php php php php/php/php Wephp'vephp swappedphp enoughphp objects
php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Memoryphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Memoryphp_Exceptionphp(php'Memoryphp managerphp canphp\php'tphp getphp enoughphp spacephp.php'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Swapphp objectphp dataphp tophp disk
php php php php php php*php Actualyphp swapsphp dataphp orphp onlyphp unloadsphp itphp fromphp memoryphp,
php php php php php php*php ifphp objectphp isphp notphp changedphp sincephp lastphp swap
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Memoryphp_Containerphp_Movablephp php$container
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php/
php php php php privatephp functionphp php_swapphp(Zendphp_Memoryphp_Containerphp_Movablephp php$containerphp,php php$idphp)
php php php php php{
php php php php php php php php ifphp php(php$containerphp-php>isLockedphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$containerphp-php>isSwappedphp(php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_backendphp-php>savephp(php$containerphp-php>getRefphp(php)php,php php$thisphp-php>php_managerIdphp php.php php$idphp,php php$thisphp-php>php_tagsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_memorySizephp php-php=php php$thisphp-php>php_sizesphp[php$idphp]php;

php php php php php php php php php$containerphp-php>markAsSwappedphp(php)php;
php php php php php php php php php$containerphp-php>unloadValuephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp valuephp fromphp swapphp filephp.
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@paramphp Zendphp_Memoryphp_Containerphp_Movablephp php$container
php php php php php php*php php@paramphp integerphp php$id
php php php php php php*php/
php php php php publicphp functionphp loadphp(Zendphp_Memoryphp_Containerphp_Movablephp php$containerphp,php php$idphp)
php php php php php{
php php php php php php php php php$valuephp php=php php$thisphp-php>php_backendphp-php>loadphp(php$thisphp-php>php_managerIdphp php.php php$idphp,php truephp)php;

php php php php php php php php php/php/php Tryphp tophp swapphp otherphp objectsphp ifphp necessary
php php php php php php php php php/php/php php(dophp notphp includephp specifiedphp objectphp intophp checkphp)
php php php php php php php php php$thisphp-php>php_memorySizephp php+php=php strlenphp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_swapCheckphp(php)php;

php php php php php php php php php/php/php Addphp loadedphp obectphp tophp thephp endphp ofphp loadedphp objectsphp list
php php php php php php php php php$containerphp-php>setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_sizesphp[php$idphp]php php>php php$thisphp-php>php_minSizephp)php php{
php php php php php php php php php php php php php/php/php Addphp objectphp tophp thephp endphp ofphp php"unloadphp candidatesphp listphp"
php php php php php php php php php php php php php$thisphp-php>php_unloadCandidatesphp[php$idphp]php php=php php$containerphp;
php php php php php php php php php}
php php php php php}
php}
