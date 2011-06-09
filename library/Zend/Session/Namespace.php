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
php php*php php@packagephp php php php Zendphp_Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Namespacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@sincephp php php php php php Previewphp Releasephp php0php.php2
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Session
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp.phpphp'php;


php/php*php*
php php*php php@seephp Zendphp_Sessionphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp/Abstractphp.phpphp'php;


php/php*php*
php php*php Zendphp_Sessionphp_Namespace
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Sessionphp_Namespacephp extendsphp Zendphp_Sessionphp_Abstractphp implementsphp IteratorAggregate
php{

php php php php php/php*php*
php php php php php php*php usedphp asphp optionphp tophp constructorphp tophp preventphp additionalphp instancesphp tophp thephp samephp namespace
php php php php php php*php/
php php php php constphp SINGLEphp_INSTANCEphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Namespacephp php-php whichphp namespacephp thisphp instancephp ofphp zendphp-sessionphp isphp savingphp-tophp/gettingphp-from
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namespacephp php=php php"Defaultphp"php;

php php php php php/php*php*
php php php php php php*php Namespacephp lockingphp mechanism
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_namespaceLocksphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Singlephp instancephp namespacephp arrayphp tophp ensurephp dataphp securityphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_singleInstancesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php resetSingleInstancephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespaceName
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp staticphp functionphp resetSingleInstancephp(php$namespaceNamephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$namespaceNamephp php!php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namespaceNamephp,php selfphp:php:php$php_singleInstancesphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(selfphp:php:php$php_singleInstancesphp[php$namespaceNamephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_singleInstancesphp php=php arrayphp(php)php;
php php php php php php php php returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)php php-php Returnsphp anphp instancephp objectphp boundphp tophp aphp particularphp,php isolatedphp section
php php php php php php*php ofphp thephp sessionphp,php identifiedphp byphp php$namespacephp namephp php(defaultingphp tophp php'Defaultphp'php)php.
php php php php php php*php Thephp optionalphp argumentphp php$singleInstancephp willphp preventphp constructionphp ofphp additional
php php php php php php*php instancephp objectsphp actingphp asphp accessorsphp tophp thisphp php$namespacephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespacephp php php php php php php php-php programmaticphp namephp ofphp thephp requestedphp namespace
php php php php php php*php php@paramphp boolphp php$singleInstancephp php php php php-php preventphp creationphp ofphp additionalphp accessorphp instancephp objectsphp forphp thisphp namespace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$namespacephp php=php php'Defaultphp'php,php php$singleInstancephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$namespacephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Sessionphp namespacephp mustphp bephp aphp nonphp-emptyphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$namespacephp[php0php]php php=php=php php"php_php"php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Sessionphp namespacephp mustphp notphp startphp withphp anphp underscorephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(pregphp_matchphp(php'php#php(php^php[php0php-php9php]php)php#iphp'php,php php$namespacephp[php0php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Sessionphp namespacephp mustphp notphp startphp withphp aphp numberphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_singleInstancesphp[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Aphp sessionphp namespacephp objectphp alreadyphp existsphp forphp thisphp namespacephp php(php'php$namespacephp'php)php,php andphp nophp additionalphp accessorsphp php(sessionphp namespacephp objectsphp)php forphp thisphp namespacephp arephp permittedphp.php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$singleInstancephp php=php=php=php truephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_singleInstancesphp[php$namespacephp]php php=php truephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_namespacephp php=php php$namespacephp;

php php php php php php php php php/php/php Processphp metadataphp specificphp onlyphp tophp thisphp namespacephp.
php php php php php php php php Zendphp_Sessionphp:php:startphp(truephp)php;php php/php/php attemptphp autophp-startphp php(throwsphp exceptionphp ifphp strictphp optionphp setphp)

php php php php php php php php ifphp php(selfphp:php:php$php_readablephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(selfphp:php:php_THROWphp_NOTphp_READABLEphp_MSGphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php)php php{
php php php php php php php php php php php php returnphp;php php/php/php nophp furtherphp processingphp needed
php php php php php php php php php}

php php php php php php php php php/php/php dophp notphp allowphp writephp accessphp tophp namespacesphp,php afterphp stopphp(php)php orphp writeClosephp(php)
php php php php php php php php ifphp php(parentphp:php:php$php_writablephp php=php=php=php truephp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php)php php{

php php php php php php php php php php php php php php php php php/php/php Expirephp Namespacephp byphp Namespacephp Hopphp php(ENNHphp)
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENNHphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENNHphp'php]php-php-php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENNHphp'php]php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_expiringDataphp[php$namespacephp]php php=php php$php_SESSIONphp[php$namespacephp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php$namespacephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Expirephp Namespacephp Variablesphp byphp Namespacephp Hopphp php(ENVNHphp)
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php asphp php$variablephp php=php>php php$hopsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php[php$variablephp]php-php-php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php[php$variablephp]php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_expiringDataphp[php$namespacephp]php[php$variablephp]php php=php php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php[php$variablephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp(emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVNHphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php returnphp anphp iteratablephp objectphp forphp usephp inphp foreachphp andphp thephp likephp,
php php php php php php*php thisphp completesphp thephp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@returnphp ArrayObjectphp php-php iteratablephp containerphp ofphp thephp namespacephp contents
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayObjectphp(parentphp:php:php_namespaceGetAllphp(php$thisphp-php>php_namespacephp)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php lockphp(php)php php-php markphp aphp sessionphp/namespacephp asphp readonly
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp lockphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_namespaceLocksphp[php$thisphp-php>php_namespacephp]php php=php truephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php unlockphp(php)php php-php unmarkphp aphp sessionphp/namespacephp tophp enablephp readphp php&php write
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp unlockphp(php)
php php php php php{
php php php php php php php php unsetphp(selfphp:php:php$php_namespaceLocksphp[php$thisphp-php>php_namespacephp]php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php unlockAllphp(php)php php-php unmarkphp allphp sessionphp/namespacesphp tophp enablephp readphp php&php write
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp unlockAllphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_namespaceLocksphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php isLockedphp(php)php php-php returnphp lockphp statusphp,php truephp ifphp,php andphp onlyphp ifphp,php readphp-only
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isLockedphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(selfphp:php:php$php_namespaceLocksphp[php$thisphp-php>php_namespacephp]php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php unsetAllphp(php)php php-php unsetphp allphp variablesphp inphp thisphp namespace
php php php php php php*
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp unsetAllphp(php)
php php php php php{
php php php php php php php php returnphp parentphp:php:php_namespaceUnsetphp(php$thisphp-php>php_namespacephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php php_php_getphp(php)php php-php methodphp tophp getphp aphp variablephp inphp thisphp objectphp'sphp currentphp namespace
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php-php programmaticphp namephp ofphp aphp keyphp,php inphp aphp php<keyphp,valuephp>php pairphp inphp thephp currentphp namespace
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php&php php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Thephp php'php$namephp'php keyphp mustphp bephp aphp nonphp-emptyphp stringphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_namespaceGetphp(php$thisphp-php>php_namespacephp,php php$namephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php php_php_setphp(php)php php-php methodphp tophp setphp aphp variablephp/valuephp inphp thisphp objectphp'sphp namespace
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php-php programmaticphp namephp ofphp aphp keyphp,php inphp aphp php<keyphp,valuephp>php pairphp inphp thephp currentphp namespace
php php php php php php*php php@paramphp mixedphp php$valuephp php-php valuephp inphp thephp php<keyphp,valuephp>php pairphp tophp assignphp tophp thephp php$namephp key
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_namespaceLocksphp[php$thisphp-php>php_namespacephp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Thisphp sessionphp/namespacephp hasphp beenphp markedphp asphp readphp-onlyphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$namephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Thephp php'php$namephp'php keyphp mustphp bephp aphp nonphp-emptyphp stringphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(parentphp:php:php$php_writablephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(parentphp:php:php_THROWphp_NOTphp_WRITABLEphp_MSGphp)php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php php(stringphp)php php$namephp;

php php php php php php php php php$php_SESSIONphp[php$thisphp-php>php_namespacephp]php[php$namephp]php php=php php$valuephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php applyphp(php)php php-php enablesphp applyingphp userphp-selectedphp functionphp,php suchphp asphp arrayphp_mergephp(php)php tophp thephp namespace
php php php php php php*php Parametersphp followingphp thephp php$callbackphp argumentphp arephp passedphp tophp thephp callbackphp functionphp.
php php php php php php*php Caveatphp:php ignoresphp membersphp expiringphp nowphp.
php php php php php php*
php php php php php php*php Examplephp:
php php php php php php*php php php php$namespacephp-php>applyphp(php'arrayphp_mergephp'php,php arrayphp(php'treephp'php php=php>php php'applephp'php,php php'fruitphp'php php=php>php php'peachphp'php)php,php arrayphp(php'flowerphp'php php=php>php php'rosephp'php)php)php;
php php php php php php*php php php php$namespacephp-php>applyphp(php'countphp'php)php;
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$callbackphp php-php callbackphp function
php php php php php php*php/
php php php php publicphp functionphp applyphp(php$callbackphp)
php php php php php{
php php php php php php php php php$argphp_listphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php$argphp_listphp[php0php]php php=php php$php_SESSIONphp[php$thisphp-php>php_namespacephp]php;
php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(php$callbackphp,php php$argphp_listphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php applySetphp(php)php php-php enablesphp applyingphp userphp-selectedphp functionphp,php andphp setsphp entirephp namespacephp tophp thephp result
php php php php php php*php Resultphp ofphp php$callbackphp mustphp bephp anphp arrayphp.
php php php php php php*php Parametersphp followingphp thephp php$callbackphp argumentphp arephp passedphp tophp thephp callbackphp functionphp.
php php php php php php*php Caveatphp:php ignoresphp membersphp expiringphp nowphp.
php php php php php php*
php php php php php php*php Examplephp:
php php php php php php*php php php php$namespacephp-php>applySetphp(php'arrayphp_mergephp'php,php arrayphp(php'treephp'php php=php>php php'applephp'php,php php'fruitphp'php php=php>php php'peachphp'php)php,php arrayphp(php'flowerphp'php php=php>php php'rosephp'php)php)php;
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$callbackphp php-php callbackphp function
php php php php php php*php/
php php php php publicphp functionphp applySetphp(php$callbackphp)
php php php php php{
php php php php php php php php php$argphp_listphp php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php$argphp_listphp[php0php]php php=php php$php_SESSIONphp[php$thisphp-php>php_namespacephp]php;
php php php php php php php php php$resultphp php=php callphp_userphp_funcphp_arrayphp(php$callbackphp,php php$argphp_listphp)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$resultphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Resultphp mustphp bephp anphp arrayphp.php Gotphp:php php'php php.php gettypephp(php$resultphp)php)php;
php php php php php php php php php}
php php php php php php php php php$php_SESSIONphp[php$thisphp-php>php_namespacephp]php php=php php$resultphp;
php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php php_php_issetphp(php)php php-php determinephp ifphp aphp variablephp inphp thisphp objectphp'sphp namespacephp isphp set
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php-php programmaticphp namephp ofphp aphp keyphp,php inphp aphp php<keyphp,valuephp>php pairphp inphp thephp currentphp namespace
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Thephp php'php$namephp'php keyphp mustphp bephp aphp nonphp-emptyphp stringphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_namespaceIssetphp(php$thisphp-php>php_namespacephp,php php$namephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php php_php_unsetphp(php)php php-php unsetphp aphp variablephp inphp thisphp objectphp'sphp namespacephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php-php programmaticphp namephp ofphp aphp keyphp,php inphp aphp php<keyphp,valuephp>php pairphp inphp thephp currentphp namespace
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Thephp php'php$namephp'php keyphp mustphp bephp aphp nonphp-emptyphp stringphp"php)php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_namespaceUnsetphp(php$thisphp-php>php_namespacephp,php php$namephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php setExpirationSecondsphp(php)php php-php expirephp thephp namespacephp,php orphp specificphp variablesphp afterphp aphp specified
php php php php php php*php numberphp ofphp seconds
php php php php php php*
php php php php php php*php php@paramphp intphp php$secondsphp php php php php php-php expiresphp inphp thisphp manyphp seconds
php php php php php php*php php@paramphp mixedphp php$variablesphp php-php OPTIONALphp listphp ofphp variablesphp tophp expirephp php(defaultsphp tophp allphp)
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setExpirationSecondsphp(php$secondsphp,php php$variablesphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(parentphp:php:php$php_writablephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(parentphp:php:php_THROWphp_NOTphp_WRITABLEphp_MSGphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$secondsphp <php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Secondsphp mustphp bephp positivephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$variablesphp php=php=php=php nullphp)php php{

php php php php php php php php php php php php php/php/php applyphp expirationphp tophp entirephp namespace
php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$thisphp-php>php_namespacephp]php[php'ENTphp'php]php php=php timephp(php)php php+php php$secondsphp;

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php ifphp php(isphp_stringphp(php$variablesphp)php)php php{
php php php php php php php php php php php php php php php php php$variablesphp php=php arrayphp(php$variablesphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$variablesphp asphp php$variablephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$variablephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$thisphp-php>php_namespacephp]php[php'ENVTphp'php]php[php$variablephp]php php=php timephp(php)php php+php php$secondsphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php setExpirationHopsphp(php)php php-php expirephp thephp namespacephp,php orphp specificphp variablesphp afterphp aphp specified
php php php php php php*php numberphp ofphp pagephp hops
php php php php php php*
php php php php php php*php php@paramphp intphp php$hopsphp php php php php php php php php-php howphp manyphp php"hopsphp"php php(numberphp ofphp subsequentphp requestsphp)php beforephp expiring
php php php php php php*php php@paramphp mixedphp php$variablesphp php-php OPTIONALphp listphp ofphp variablesphp tophp expirephp php(defaultsphp tophp allphp)
php php php php php php*php php@paramphp booleanphp php$hopCountOnUsageOnlyphp php-php OPTIONALphp ifphp setphp,php onlyphp countphp aphp hopphp/requestphp ifphp thisphp namespacephp isphp used
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setExpirationHopsphp(php$hopsphp,php php$variablesphp php=php nullphp,php php$hopCountOnUsageOnlyphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(parentphp:php:php$php_writablephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(parentphp:php:php_THROWphp_NOTphp_WRITABLEphp_MSGphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$hopsphp <php=php php0php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Sessionphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Hopsphp mustphp bephp positivephp numberphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$variablesphp php=php=php=php nullphp)php php{

php php php php php php php php php php php php php/php/php applyphp expirationphp tophp entirephp namespace
php php php php php php php php php php php php ifphp php(php$hopCountOnUsageOnlyphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$thisphp-php>php_namespacephp]php[php'ENGHphp'php]php php=php php$hopsphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$thisphp-php>php_namespacephp]php[php'ENNHphp'php]php php=php php$hopsphp;
php php php php php php php php php php php php php}

php php php php php php php php php}php elsephp php{

php php php php php php php php php php php php ifphp php(isphp_stringphp(php$variablesphp)php)php php{
php php php php php php php php php php php php php php php php php$variablesphp php=php arrayphp(php$variablesphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$variablesphp asphp php$variablephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$variablephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$hopCountOnUsageOnlyphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$thisphp-php>php_namespacephp]php[php'ENVGHphp'php]php[php$variablephp]php php=php php$hopsphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$thisphp-php>php_namespacephp]php[php'ENVNHphp'php]php[php$variablephp]php php=php php$hopsphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp namespacephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namespacephp;
php php php php php}
php}
