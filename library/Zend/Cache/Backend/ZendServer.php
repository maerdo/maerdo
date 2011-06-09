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
php php*php php@versionphp php php php php$Idphp:php ZendServerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php php@seephp Zendphp_Cachephp_Backendphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp/Interfacephp.phpphp'php;

php/php*php*php php@seephp Zendphp_Cachephp_Backendphp php*php/
requirephp_oncephp php'Zendphp/Cachephp/Backendphp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Backend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Cachephp_Backendphp_ZendServerphp extendsphp Zendphp_Cachephp_Backendphp implementsphp Zendphp_Cachephp_Backendphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php=php>php php(stringphp)php namespacephp php:
php php php php php php*php Namespacephp tophp bephp usedphp forphp chachingphp operations
php php php php php php*
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'namespacephp'php php=php>php php'zendframeworkphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Storephp data
php php php php php php*
php php php php php php*php php@paramphp mixedphp php php$dataphp php php php php php php php Objectphp tophp store
php php php php php php*php php@paramphp stringphp php$idphp php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp intphp php php php php$timeToLivephp php Timephp tophp livephp inphp seconds
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_storephp(php$dataphp,php php$idphp,php php$timeToLivephp)php;

php php php php php/php*php*
php php php php php php*php Fetchphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp php php php php php php php php php Cachephp id
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_fetchphp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Unsetphp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp php php php php php php php php php Cachephp id
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_unsetphp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php Clearphp cache
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_clearphp(php)php;

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@returnphp stringphp cachedphp datasphp php(orphp falsephp)
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp)
php php php php php{
php php php php php php php php php$tmpphp php=php php$thisphp-php>php_fetchphp(php$idphp)php;
php php php php php php php php ifphp php(php$tmpphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$tmpphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp orphp notphp php(forphp thephp givenphp idphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp mixedphp falsephp php(aphp cachephp isphp notphp availablephp)php orphp php"lastphp modifiedphp"php timestampphp php(intphp)php ofphp thephp availablephp cachephp record
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$tmpphp php=php php$thisphp-php>php_fetchphp(php'internalphp-metadatasphp-php-php-php'php php.php php$idphp)php;
php php php php php php php php ifphp php(php$tmpphp php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$tmpphp)php php|php|php php!issetphp(php$tmpphp[php'mtimephp'php]php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Cachephp metadataphp forphp php\php'php'php php.php php$idphp php.php php'php\php'php idphp isphp corruptedphp'php php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$tmpphp[php'mtimephp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Computephp php&php returnphp thephp expirephp time
php php php php php php*
php php php php php php*php php@returnphp intphp expirephp timephp php(unixphp timestampphp)
php php php php php php*php/
php php php php privatephp functionphp php_expireTimephp(php$lifetimephp)
php php php php php{
php php php php php php php php ifphp php(php$lifetimephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php9php9php9php9php9php9php9php9php9php9php;
php php php php php php php php php}
php php php php php php php php returnphp timephp(php)php php+php php$lifetimephp;
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
php php php php php php php php php$metadatasphp php=php arrayphp(
php php php php php php php php php php php php php'mtimephp'php php=php>php timephp(php)php,
php php php php php php php php php php php php php'expirephp'php php=php>php php$thisphp-php>php_expireTimephp(php$lifetimephp)php,
php php php php php php php php php)php;

php php php php php php php php ifphp php(countphp(php$tagsphp)php php>php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Backendphp_ZendServerphp:php:savephp(php)php php:php tagsphp arephp unsupportedphp byphp thephp ZendServerphp backendsphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php php$thisphp-php>php_storephp(php$dataphp,php php$idphp,php php$lifetimephp)php php&php&
php php php php php php php php php php php php php php php php php$thisphp-php>php_storephp(php$metadatasphp,php php'internalphp-metadatasphp-php-php-php'php php.php php$idphp,php php$lifetimephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp cachephp record
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp cachephp id
php php php php php php*php php@returnphp booleanphp truephp ifphp nophp problem
php php php php php php*php/
php php php php publicphp functionphp removephp(php$idphp)
php php php php php{
php php php php php php php php php$resultphp1php php=php php$thisphp-php>php_unsetphp(php$idphp)php;
php php php php php php php php php$resultphp2php php=php php$thisphp-php>php_unsetphp(php'internalphp-metadatasphp-php-php-php'php php.php php$idphp)php;

php php php php php php php php returnphp php$resultphp1php php&php&php php$resultphp2php;
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
php php php php php php php php php php php php php php php php php$thisphp-php>php_clearphp(php)php;
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_OLDphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php"Zendphp_Cachephp_Backendphp_ZendServerphp:php:cleanphp(php)php php:php CLEANINGphp_MODEphp_OLDphp isphp unsupportedphp byphp thephp Zendphp Serverphp backendsphp.php"php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_NOTphp_MATCHINGphp_TAGphp:
php php php php php php php php php php php php casephp Zendphp_Cachephp:php:CLEANINGphp_MODEphp_MATCHINGphp_ANYphp_TAGphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_clearphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_logphp(php'Zendphp_Cachephp_Backendphp_ZendServerphp:php:cleanphp(php)php php:php tagsphp arephp unsupportedphp byphp thephp Zendphp Serverphp backendsphp.php'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Invalidphp modephp forphp cleanphp(php)php methodphp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}
php}
