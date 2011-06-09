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
php php*php php@versionphp php php php php$Idphp:php Testphp.phpphp php2php3php0php5php1php php2php0php1php0php-php1php0php-php0php7php php1php7php:php0php1php:php2php1Zphp mabephp php$
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
classphp Zendphp_Cachephp_Backendphp_Testphp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_ExtendedInterface
php{
php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Frontendphp orphp Corephp directives
php php php php php php*
php php php php php php*php php@varphp arrayphp directives
php php php php php php*php/
php php php php protectedphp php$php_directivesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp tophp logphp actions
php php php php php php*
php php php php php php*php php@varphp arrayphp php$php_log
php php php php php php*php/
php php php php privatephp php$php_logphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Currentphp indexphp forphp logphp array
php php php php php php*
php php php php php php*php php@varphp intphp php$php_index
php php php php php php*php/
php php php php privatephp php$php_indexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp associativephp arrayphp ofphp options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'constructphp'php,php arrayphp(php$optionsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp frontendphp directives
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$directivesphp assocphp ofphp directives
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDirectivesphp(php$directivesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'setDirectivesphp'php,php arrayphp(php$directivesphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php Forphp thisphp testphp backendphp onlyphp,php ifphp php$idphp php=php=php php'falsephp'php,php thenphp thephp methodphp willphp returnphp false
php php php php php php*php ifphp php$idphp php=php=php php'serializedphp'php,php thephp methodphp willphp returnphp aphp serializedphp array
php php php php php php*php php(php'foophp'php elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp Cachedphp datasphp php(orphp falsephp)
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'getphp'php,php arrayphp(php$idphp,php php$doNotTestCacheValidityphp)php)php;

php php php php php php php php ifphp php(php php$idphp php=php=php php'falsephp'
php php php php php php php php php php php|php|php php$idphp php=php=php php'dphp8php5php2php3bphp3eephp4php4php1php0php0php6php2php6php1eeffaphp5cphp3dphp3aphp0aphp7php'
php php php php php php php php php php php|php|php php$idphp php=php=php php'ephp8php3php2php4php9eaphp2php2php1php7php8php2php7php7dphp5befcphp2cphp5ephp2ephp9acephp'
php php php php php php php php php php php|php|php php$idphp php=php=php php'php4php0fphp6php4php9bphp9php4php9php7php7cphp0aphp6ephp7php6php9php0php2ephp2aphp0bphp4php3php5php8php7php'
php php php php php php php php php php php|php|php php$idphp php=php=php php'php8php8php1php6php1php9php8php9bphp7php3aphp4cbfdphp0bphp7php0php1cphp4php4php6php1php1php5aphp9php9php'
php php php php php php php php php php php|php|php php$idphp php=php=php php'php2php0php5fcphp7php9cbaphp2php4fphp0fphp0php0php1php8ebphp9php2cphp7cphp8bphp3baphp4php'
php php php php php php php php php php php|php|php php$idphp php=php=php php'php1php7php0php7php2php0ephp3php5fphp3php8php1php5php0bphp8php1php1fphp6php8aphp9php3php7fbphp0php4php2dphp'php)
php php php php php php php php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$idphp=php=php'serializedphp'php)php php{
php php php php php php php php php php php php returnphp serializephp(arrayphp(php'foophp'php)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$idphp=php=php'serializedphp2php'php)php php{
php php php php php php php php php php php php returnphp serializephp(arrayphp(php'headersphp'php php=php>php arrayphp(php)php,php php'dataphp'php php=php>php php'foophp'php)php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php php$idphp php=php=php php'php7php1php7php6php9fphp3php9php0php5php4fphp7php5php8php9php4php2php8php8ephp3php9php7dfphp0php4ephp4php4php5php'php php|php|php php$idphp php=php=php php'php6php1php5dphp2php2php2php6php1php9fbphp2php0bphp5php2php7php1php6php8php3php4php0cebdphp0php5php7php8php'
php php php php php php php php php php php|php|php php$idphp php=php=php php'php8aphp0php2dphp2php1php8aphp5php1php6php5cphp4php6php7ephp7aphp5php7php4php7ccphp6bdphp4bphp6php'php php|php|php php$idphp php=php=php php'php6php4php8acaphp1php3php6php6php2php1php1dphp1php7cbfphp4php8ephp6php5dcphp5php7php0beephp'
php php php php php php php php php php php|php|php php$idphp php=php=php php'php4aphp9php2php3efphp0php2dphp7fphp9php9php7caphp1php4dphp5php6dfeaephp2php5eaphp7php'php)php php{
php php php php php php php php php php php php returnphp serializephp(arrayphp(php'foophp'php,php php'barphp'php)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php'foophp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php Forphp thisphp testphp backendphp onlyphp,php ifphp php$idphp php=php=php php'falsephp'php,php thenphp thephp methodphp willphp returnphp false
php php php php php php*php php(php1php2php3php4php5php6php elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp mixedphp|falsephp falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'testphp'php,php arrayphp(php$idphp)php)php;
php php php php php php php php ifphp php(php$idphp=php=php'falsephp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$idphp=php=php'php3cphp4php3php9cphp9php2php2php2php0php9ephp2cbphp0bphp5php4dphp6deffccdphp7php5aphp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php1php2php3php4php5php6php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savephp somephp stringphp datasphp intophp aphp cachephp record
php php php php php php*
php php php php php php*php Forphp thisphp testphp backendphp onlyphp,php ifphp php$idphp php=php=php php'falsephp'php,php thenphp thephp methodphp willphp returnphp false
php php php php php php*php php(truephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$dataphp php php php php php php php php php php php php Datasphp tophp cache
php php php php php php*php php@paramphp php stringphp php$idphp php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php arrayphp php php$tagsphp php php php php php php php php php php php php Arrayphp ofphp stringsphp,php thephp cachephp recordphp willphp bephp taggedphp byphp eachphp stringphp entry
php php php php php php*php php@paramphp php intphp php php php php$specificLifetimephp Ifphp php!php=php falsephp,php setphp aphp specificphp lifetimephp forphp thisphp cachephp recordphp php(nullphp php=php>php infinitephp lifetimephp)
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp savephp(php$dataphp,php php$idphp,php php$tagsphp php=php arrayphp(php)php,php php$specificLifetimephp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'savephp'php,php arrayphp(php$dataphp,php php$idphp,php php$tagsphp)php)php;
php php php php php php php php ifphp php(php$idphp=php=php'falsephp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php Forphp thisphp testphp backendphp onlyphp,php ifphp php$idphp php=php=php php'falsephp'php,php thenphp thephp methodphp willphp returnphp false
php php php php php php*php php(truephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'removephp'php,php arrayphp(php$idphp)php)php;
php php php php php php php php ifphp php(php$idphp=php=php'falsephp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cleanphp somephp cachephp records
php php php php php php*
php php php php php php*php Forphp thisphp testphp backendphp onlyphp,php ifphp php$modephp php=php=php php'falsephp'php,php thenphp thephp methodphp willphp returnphp false
php php php php php php*php php(truephp elsephp)
php php php php php php*
php php php php php php*php Availablephp modesphp arephp php:
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp php(defaultphp)php php php php php=php>php removephp allphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp php php php php php php php php php php php php php php=php>php removephp toophp oldphp cachephp entriesphp php(php$tagsphp isphp notphp usedphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp php php php php php=php>php removephp cachephp entriesphp matchingphp allphp givenphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp php=php>php removephp cachephp entriesphp notphp php{matchingphp onephp ofphp thephp givenphp tagsphp}
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(php$tagsphp canphp bephp anphp arrayphp ofphp stringsphp orphp aphp singlephp stringphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$modephp Cleanphp mode
php php php php php php*php php@paramphp php arrayphp php php$tagsphp Arrayphp ofphp tags
php php php php php php*php php@returnphp booleanphp Truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp cleanphp(php$modephp php=php Zendphp_Cachephp:php:CLEANINGphp_MODEphp_ALLphp,php php$tagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_addLogphp(php'cleanphp'php,php arrayphp(php$modephp,php php$tagsphp)php)php;
php php php php php php php php ifphp php(php$modephp=php=php'falsephp'php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp lastphp log
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp lastphp log
php php php php php php*php/
php php php php publicphp functionphp getLastLogphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_logphp[php$thisphp-php>php_indexphp php-php php1php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp logphp index
php php php php php php*
php php php php php php*php php@returnphp intphp Logphp index
php php php php php php*php/
php php php php publicphp functionphp getLogIndexphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_indexphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp completephp logphp array
php php php php php php*
php php php php php php*php php@returnphp arrayphp Completephp logphp array
php php php php php php*php/
php php php php publicphp functionphp getAllLogsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_logphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp truephp ifphp thephp automaticphp cleaningphp isphp availablephp forphp thephp backend
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isAutomaticCleaningAvailablephp(php)
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
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'prefixphp_idphp1php'php,php php'prefixphp_idphp2php'
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp anphp arrayphp ofphp storedphp tags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp ofphp storedphp tagsphp php(stringphp)
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'tagphp1php'php,php php'tagphp2php'
php php php php php php php php php)php;
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
php php php php php php php php ifphp php(php$tagsphp php=php=php arrayphp(php'tagphp1php'php,php php'tagphp2php'php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php'prefixphp_idphp1php'php,php php'prefixphp_idphp2php'php)php;
php php php php php php php php php}

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
php php php php php php php php ifphp php(php$tagsphp php=php=php arrayphp(php'tagphp3php'php,php php'tagphp4php'php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php'prefixphp_idphp3php'php,php php'prefixphp_idphp4php'php)php;
php php php php php php php php php}

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
php php php php php php php php ifphp php(php$tagsphp php=php=php arrayphp(php'tagphp5php'php,php php'tagphp6php'php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php'prefixphp_idphp5php'php,php php'prefixphp_idphp6php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp fillingphp percentagephp ofphp thephp backendphp storage
php php php php php php*
php php php php php php*php php@returnphp intphp integerphp betweenphp php0php andphp php1php0php0
php php php php php php*php/
php php php php publicphp functionphp getFillingPercentagephp(php)
php php php php php{
php php php php php php php php returnphp php5php0php;
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
php php php php php php php php php php php php php'tagsphp'php php php php php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'expiredphp_readphp'php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php'priorityphp'php php php php php php php php php php php php=php>php truephp,
php php php php php php php php php php php php php'infinitephp_lifetimephp'php php php=php>php truephp,
php php php php php php php php php php php php php'getphp_listphp'php php php php php php php php php php php php=php>php true
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp anphp eventphp tophp thephp logphp array
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodNamephp MethodName
php php php php php php*php php@paramphp php arrayphp php php$argsphp php php php php php php Arguments
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_addLogphp(php$methodNamephp,php php$argsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_logphp[php$thisphp-php>php_indexphp]php php=php arrayphp(
php php php php php php php php php php php php php'methodNamephp'php php=php>php php$methodNamephp,
php php php php php php php php php php php php php'argsphp'php php=php>php php$args
php php php php php php php php php)php;
php php php php php php php php php$thisphp-php>php_indexphp php=php php$thisphp-php>php_indexphp php+php php1php;
php php php php php}

php}
