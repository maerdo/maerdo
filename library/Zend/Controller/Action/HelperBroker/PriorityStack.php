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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php PriorityStackphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStackphp implementsphp IteratorAggregatephp,php ArrayAccessphp,php Countable
php{

php php php php protectedphp php$php_helpersByPriorityphp php=php arrayphp(php)php;
php php php php protectedphp php$php_helpersByNameRefphp php php=php arrayphp(php)php;
php php php php protectedphp php$php_nextDefaultPriorityphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Magicphp propertyphp overloadingphp forphp returningphp helperphp byphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$helperNamephp php php php Thephp helperphp name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$helperNamephp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$helperNamephp,php php$thisphp-php>php_helpersByNameRefphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_helpersByNameRefphp[php$helperNamephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp propertyphp overloadingphp forphp returningphp ifphp helperphp isphp setphp byphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$helperNamephp php php php Thephp helperphp name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$helperNamephp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$helperNamephp,php php$thisphp-php>php_helpersByNameRefphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Magicphp propertyphp overloadingphp forphp unsettingphp ifphp helperphp isphp existsphp byphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$helperNamephp php php php Thephp helperphp name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$helperNamephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>offsetUnsetphp(php$helperNamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php pushphp helperphp ontophp thephp stack
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp php$helper
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php publicphp functionphp pushphp(Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp php$helperphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php$thisphp-php>getNextFreeHigherPriorityphp(php)php,php php$helperphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp somethingphp iterable
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayObjectphp(php$thisphp-php>php_helpersByPriorityphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php offsetExistsphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp|stringphp php$priorityOrHelperName
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$priorityOrHelperNamephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$priorityOrHelperNamephp)php)php php{
php php php php php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$priorityOrHelperNamephp,php php$thisphp-php>php_helpersByNameRefphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$priorityOrHelperNamephp,php php$thisphp-php>php_helpersByPriorityphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php offsetGetphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp|stringphp php$priorityOrHelperName
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$priorityOrHelperNamephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php$priorityOrHelperNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Aphp helperphp withphp priorityphp php'php php.php php$priorityOrHelperNamephp php.php php'php doesphp notphp existphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$priorityOrHelperNamephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_helpersByNameRefphp[php$priorityOrHelperNamephp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_helpersByPriorityphp[php$priorityOrHelperNamephp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php offsetSetphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp php$priority
php php php php php php*php php@paramphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp php$helper
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$priorityphp,php php$helperphp)
php php php php php{
php php php php php php php php php$priorityphp php=php php(intphp)php php$priorityphp;

php php php php php php php php ifphp php(php!php$helperphp instanceofphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'php$helperphp mustphp extendphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$helperphp-php>getNamephp(php)php,php php$thisphp-php>php_helpersByNameRefphp)php)php php{
php php php php php php php php php php php php php/php/php removephp anyphp objectphp withphp thephp samephp namephp tophp retainphp BCphp compailitbility
php php php php php php php php php php php php php/php/php php@todophp Atphp ZFphp php2php.php0php timephp throwphp anphp exceptionphp herephp.
php php php php php php php php php php php php php$thisphp-php>offsetUnsetphp(php$helperphp-php>getNamephp(php)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$priorityphp,php php$thisphp-php>php_helpersByPriorityphp)php)php php{
php php php php php php php php php php php php php$priorityphp php=php php$thisphp-php>getNextFreeHigherPriorityphp(php$priorityphp)php;php php php/php/php ensuresphp LIFO
php php php php php php php php php php php php triggerphp_errorphp(php"Aphp helperphp withphp thephp samephp priorityphp alreadyphp existsphp,php reassigningphp tophp php$priorityphp"php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_helpersByPriorityphp[php$priorityphp]php php=php php$helperphp;
php php php php php php php php php$thisphp-php>php_helpersByNameRefphp[php$helperphp-php>getNamephp(php)php]php php=php php$helperphp;

php php php php php php php php ifphp php(php$priorityphp php=php=php php(php$nextFreeDefaultphp php=php php$thisphp-php>getNextFreeHigherPriorityphp(php$thisphp-php>php_nextDefaultPriorityphp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_nextDefaultPriorityphp php=php php$nextFreeDefaultphp;
php php php php php php php php php}

php php php php php php php php krsortphp(php$thisphp-php>php_helpersByPriorityphp)php;php php php/php/php alwaysphp makephp surephp priorityphp andphp LIFOphp arephp bothphp enforced
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php offsetUnsetphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp|stringphp php$priorityOrHelperNamephp Priorityphp integerphp orphp thephp helperphp name
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_HelperBrokerphp_PriorityStack
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$priorityOrHelperNamephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php$priorityOrHelperNamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Controllerphp_Actionphp_Exceptionphp(php'Aphp helperphp withphp priorityphp orphp namephp php'php php.php php$priorityOrHelperNamephp php.php php'php doesphp notphp existphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_stringphp(php$priorityOrHelperNamephp)php)php php{
php php php php php php php php php php php php php$helperNamephp php=php php$priorityOrHelperNamephp;
php php php php php php php php php php php php php$helperphp php=php php$thisphp-php>php_helpersByNameRefphp[php$helperNamephp]php;
php php php php php php php php php php php php php$priorityphp php=php arrayphp_searchphp(php$helperphp,php php$thisphp-php>php_helpersByPriorityphp,php truephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$priorityphp php=php php$priorityOrHelperNamephp;
php php php php php php php php php php php php php$helperNamephp php=php php$thisphp-php>php_helpersByPriorityphp[php$priorityOrHelperNamephp]php-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_helpersByNameRefphp[php$helperNamephp]php)php;
php php php php php php php php unsetphp(php$thisphp-php>php_helpersByPriorityphp[php$priorityphp]php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnphp thephp countphp ofphp helpers
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_helpersByPriorityphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp thephp nextphp freephp higherphp priorityphp.php php Ifphp anphp indexphp isphp givenphp,php itphp will
php php php php php php*php findphp thephp nextphp freephp highestphp priorityphp afterphp itphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$indexPriorityphp OPTIONAL
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getNextFreeHigherPriorityphp(php$indexPriorityphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$indexPriorityphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$indexPriorityphp php=php php$thisphp-php>php_nextDefaultPriorityphp;
php php php php php php php php php}

php php php php php php php php php$prioritiesphp php=php arrayphp_keysphp(php$thisphp-php>php_helpersByPriorityphp)php;

php php php php php php php php whilephp php(inphp_arrayphp(php$indexPriorityphp,php php$prioritiesphp)php)php php{
php php php php php php php php php php php php php$indexPriorityphp+php+php;
php php php php php php php php php}

php php php php php php php php returnphp php$indexPriorityphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findphp thephp nextphp freephp lowerphp priorityphp.php php Ifphp anphp indexphp isphp givenphp,php itphp will
php php php php php php*php findphp thephp nextphp freephp lowerphp priorityphp beforephp itphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$indexPriority
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getNextFreeLowerPriorityphp(php$indexPriorityphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$indexPriorityphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$indexPriorityphp php=php php$thisphp-php>php_nextDefaultPriorityphp;
php php php php php php php php php}

php php php php php php php php php$prioritiesphp php=php arrayphp_keysphp(php$thisphp-php>php_helpersByPriorityphp)php;

php php php php php php php php whilephp php(inphp_arrayphp(php$indexPriorityphp,php php$prioritiesphp)php)php php{
php php php php php php php php php php php php php$indexPriorityphp-php-php;
php php php php php php php php php}

php php php php php php php php returnphp php$indexPriorityphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnphp thephp highestphp priority
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getHighestPriorityphp(php)
php php php php php{
php php php php php php php php returnphp maxphp(arrayphp_keysphp(php$thisphp-php>php_helpersByPriorityphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnphp thephp lowestphp priority
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getLowestPriorityphp(php)
php php php php php{
php php php php php php php php returnphp minphp(arrayphp_keysphp(php$thisphp-php>php_helpersByPriorityphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnphp thephp helpersphp referencedphp byphp name
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHelpersByNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_helpersByNameRefphp;
php php php php php}

php}
