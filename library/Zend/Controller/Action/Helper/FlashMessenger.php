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
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Session
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Flashphp Messengerphp php-php implementphp sessionphp-basedphp messages
php php*
php php*php php@usesphp php php php php php php Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FlashMessengerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Controllerphp_Actionphp_Helperphp_FlashMessengerphp extendsphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstractphp implementsphp IteratorAggregatephp,php Countable
php{
php php php php php/php*php*
php php php php php php*php php$php_messagesphp php-php Messagesphp fromphp previousphp request
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php staticphp protectedphp php$php_messagesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php$php_sessionphp php-php Zendphp_Sessionphp storagephp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Session
php php php php php php*php/
php php php php staticphp protectedphp php$php_sessionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php$php_messageAddedphp php-php Wetherphp aphp messagephp hasphp beenphp previouslyphp added
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php staticphp protectedphp php$php_messageAddedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php$php_namespacephp php-php Instancephp namespacephp,php defaultphp isphp php'defaultphp'
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namespacephp php=php php'defaultphp'php;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)php php-php Instancephp constructorphp,php neededphp tophp getphp iteratorsphp,php etc
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namespace
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_sessionphp instanceofphp Zendphp_Sessionphp_Namespacephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_sessionphp php=php newphp Zendphp_Sessionphp_Namespacephp(php$thisphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php foreachphp php(selfphp:php:php$php_sessionphp asphp php$namespacephp php=php>php php$messagesphp)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_messagesphp[php$namespacephp]php php=php php$messagesphp;
php php php php php php php php php php php php php php php php unsetphp(selfphp:php:php$php_sessionphp-php>php{php$namespacephp}php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php postDispatchphp(php)php php-php runsphp afterphp actionphp isphp dispatchedphp,php inphp this
php php php php php php*php casephp,php itphp isphp resettingphp thephp namespacephp inphp casephp wephp havephp forwardedphp tophp aphp different
php php php php php php*php actionphp,php Flashmessagephp willphp bephp php'cleanphp'php php(defaultphp namespacephp)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_FlashMessengerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>resetNamespacephp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setNamespacephp(php)php php-php changephp thephp namespacephp messagesphp arephp addedphp tophp,php usefulphp for
php php php php php php*php perphp actionphp controllerphp messagingphp betweenphp requests
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namespace
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_FlashMessengerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setNamespacephp(php$namespacephp php=php php'defaultphp'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_namespacephp php=php php$namespacephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php resetNamespacephp(php)php php-php resetphp thephp namespacephp tophp thephp default
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_FlashMessengerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp resetNamespacephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>setNamespacephp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php addMessagephp(php)php php-php Addphp aphp messagephp tophp flashphp message
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@returnphp Zendphp_Controllerphp_Actionphp_Helperphp_FlashMessengerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addMessagephp(php$messagephp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_messageAddedphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php selfphp:php:php$php_sessionphp-php>setExpirationHopsphp(php1php,php nullphp,php truephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(selfphp:php:php$php_sessionphp-php>php{php$thisphp-php>php_namespacephp}php)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_sessionphp-php>php{php$thisphp-php>php_namespacephp}php php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_sessionphp-php>php{php$thisphp-php>php_namespacephp}php[php]php php=php php$messagephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasMessagesphp(php)php php-php Wetherphp aphp specificphp namespacephp hasphp messages
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasMessagesphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(selfphp:php:php$php_messagesphp[php$thisphp-php>php_namespacephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getMessagesphp(php)php php-php Getphp messagesphp fromphp aphp specificphp namespace
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getMessagesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasMessagesphp(php)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_messagesphp[php$thisphp-php>php_namespacephp]php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp messagesphp fromphp thephp previousphp requestphp php&php currentphp namespace
php php php php php php*
php php php php php php*php php@returnphp booleanphp Truephp ifphp messagesphp werephp clearedphp,php falsephp ifphp nonephp existed
php php php php php php*php/
php php php php publicphp functionphp clearMessagesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasMessagesphp(php)php)php php{
php php php php php php php php php php php php unsetphp(selfphp:php:php$php_messagesphp[php$thisphp-php>php_namespacephp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasCurrentMessagesphp(php)php php-php checkphp tophp seephp ifphp messagesphp havephp beenphp addedphp tophp current
php php php php php php*php namespacephp withinphp thisphp request
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp hasCurrentMessagesphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(selfphp:php:php$php_sessionphp-php>php{php$thisphp-php>php_namespacephp}php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getCurrentMessagesphp(php)php php-php getphp messagesphp thatphp havephp beenphp addedphp tophp thephp current
php php php php php php*php namespacephp withinphp thisphp request
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCurrentMessagesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasCurrentMessagesphp(php)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_sessionphp-php>php{php$thisphp-php>php_namespacephp}php;
php php php php php php php php php}

php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php clearphp messagesphp fromphp thephp currentphp requestphp php&php currentphp namespace
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp clearCurrentMessagesphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasCurrentMessagesphp(php)php)php php{
php php php php php php php php php php php php unsetphp(selfphp:php:php$php_sessionphp-php>php{php$thisphp-php>php_namespacephp}php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php completephp thephp IteratorAggregatephp interfacephp,php forphp iterating
php php php php php php*
php php php php php php*php php@returnphp ArrayObject
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasMessagesphp(php)php)php php{
php php php php php php php php php php php php returnphp newphp ArrayObjectphp(php$thisphp-php>getMessagesphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp ArrayObjectphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php countphp(php)php php-php Completephp thephp countablephp interface
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasMessagesphp(php)php)php php{
php php php php php php php php php php php php returnphp countphp(php$thisphp-php>getMessagesphp(php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Strategyphp patternphp:php proxyphp tophp addMessagephp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$message
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp directphp(php$messagephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>addMessagephp(php$messagephp)php;
php php php php php}
php}
