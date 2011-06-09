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
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mailphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Writerphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Writerphp/Abstractphp.phpphp'php;

php/php*php*php Zendphp_Logphp_Exceptionphp php*php/
requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;

php/php*php*php Zendphp_Logphp_Formatterphp_Simplephp*php/
requirephp_oncephp php'Zendphp/Logphp/Formatterphp/Simplephp.phpphp'php;

php/php*php*
php php*php Classphp usedphp forphp writingphp logphp messagesphp tophp emailphp viaphp Zendphp_Mailphp.
php php*
php php*php Allowsphp forphp emailingphp logphp messagesphp atphp andphp abovephp aphp certainphp levelphp viaphp a
php php*php Zendphp_Mailphp objectphp.php php Notephp thatphp thisphp classphp onlyphp sendsphp thephp emailphp upon
php php*php completionphp,php sophp anyphp logphp entriesphp accumulatedphp arephp sentphp inphp aphp singlephp emailphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mailphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
classphp Zendphp_Logphp_Writerphp_Mailphp extendsphp Zendphp_Logphp_Writerphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Arrayphp ofphp formattedphp eventsphp tophp includephp inphp messagephp bodyphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_eventsToMailphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp formattedphp linesphp forphp usephp inphp anphp HTMLphp emailphp bodyphp;php thesephp events
php php php php php php*php arephp formattedphp withphp anphp optionalphp formatterphp ifphp thephp callerphp isphp using
php php php php php php*php Zendphp_Layoutphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_layoutEventsToMailphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Zendphp_Mailphp instancephp tophp use
php php php php php php*
php php php php php php*php php@varphp Zendphp_Mail
php php php php php php*php/
php php php php protectedphp php$php_mailphp;

php php php php php/php*php*
php php php php php php*php Zendphp_Layoutphp instancephp tophp usephp;php optionalphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Layout
php php php php php php*php/
php php php php protectedphp php$php_layoutphp;

php php php php php/php*php*
php php php php php php*php Optionalphp formatterphp forphp usephp whenphp renderingphp withphp Zendphp_Layoutphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Logphp_Formatterphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_layoutFormatterphp;

php php php php php/php*php*
php php php php php php*php Arrayphp keepingphp trackphp ofphp thephp numberphp ofphp entriesphp perphp priorityphp levelphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_numEntriesPerPriorityphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Subjectphp prependphp textphp.
php php php php php php*
php php php php php php*php Canphp onlyphp bephp usedphp ofphp thephp Zendphp_Mailphp objectphp hasphp notphp alreadyphp hadphp its
php php php php php php*php subjectphp linephp setphp.php php Usingphp thisphp willphp causephp thephp subjectphp tophp havephp thephp entry
php php php php php php*php countsphp perphp-priorityphp levelphp appendedphp tophp itphp.
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_subjectPrependTextphp;

php php php php php/php*php*
php php php php php php*php MethodMapphp forphp Zendphp_Mailphp'sphp headers
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_methodMapHeadersphp php=php arrayphp(
php php php php php php php php php'fromphp'php php=php>php php'setFromphp'php,
php php php php php php php php php'tophp'php php=php>php php'addTophp'php,
php php php php php php php php php'ccphp'php php=php>php php'addCcphp'php,
php php php php php php php php php'bccphp'php php=php>php php'addBccphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.
php php php php php php*
php php php php php php*php Constructsphp thephp mailphp writerphp;php requiresphp aphp Zendphp_Mailphp instancephp,php andphp takesphp an
php php php php php php*php optionalphp Zendphp_Layoutphp instancephp.php php Ifphp Zendphp_Layoutphp isphp beingphp usedphp,
php php php php php php*php php$thisphp-php>php_layoutphp-php>eventsphp willphp bephp setphp forphp usephp inphp thephp layoutphp templatephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Mailphp php$mailphp Mailphp instance
php php php php php php*php php@paramphp php Zendphp_Layoutphp php$layoutphp Layoutphp instancephp;php optional
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Mailphp php$mailphp,php Zendphp_Layoutphp php$layoutphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mailphp php=php php$mailphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$layoutphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLayoutphp(php$layoutphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_formatterphp php=php newphp Zendphp_Logphp_Formatterphp_Simplephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp newphp instancephp ofphp Zendphp_Logphp_Writerphp_Mail
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Mail
php php php php php php*php/
php php php php staticphp publicphp functionphp factoryphp(php$configphp)
php php php php php{
php php php php php php php php php$configphp php=php selfphp:php:php_parseConfigphp(php$configphp)php;
php php php php php php php php php$mailphp php=php selfphp:php:php_constructMailFromConfigphp(php$configphp)php;
php php php php php php php php php$writerphp php=php newphp selfphp(php$mailphp)php;

php php php php php php php php ifphp php(issetphp(php$configphp[php'layoutphp'php]php)php php|php|php issetphp(php$configphp[php'layoutOptionsphp'php]php)php)php php{
php php php php php php php php php php php php php$writerphp-php>setLayoutphp(php$configphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$configphp[php'layoutFormatterphp'php]php)php)php php{
php php php php php php php php php php php php php$layoutFormatterphp php=php newphp php$configphp[php'layoutFormatterphp'php]php;
php php php php php php php php php php php php php$writerphp-php>setLayoutFormatterphp(php$layoutFormatterphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$configphp[php'subjectPrependTextphp'php]php)php)php php{
php php php php php php php php php php php php php$writerphp-php>setSubjectPrependTextphp(php$configphp[php'subjectPrependTextphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$writerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp layout
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Layoutphp|arrayphp php$layout
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Mail
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setLayoutphp(php$layoutphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$layoutphp)php)php php{
php php php php php php php php php php php php php$layoutphp php=php php$thisphp-php>php_constructLayoutFromConfigphp(php$layoutphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$layoutphp instanceofphp Zendphp_Layoutphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Logphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php'Mailphp mustphp bephp anphp instancephp ofphp Zendphp_Layoutphp orphp anphp arrayphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_layoutphp php=php php$layoutphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructphp aphp Zendphp_Mailphp instancephp basedphp onphp aphp configurationphp array
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$config
php php php php php php*php php@returnphp Zendphp_Mail
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_constructMailFromConfigphp(arrayphp php$configphp)
php php php php php{
php php php php php php php php php$mailClassphp php=php php'Zendphp_Mailphp'php;
php php php php php php php php ifphp php(issetphp(php$configphp[php'mailphp'php]php)php)php php{
php php php php php php php php php php php php php$mailClassphp php=php php$configphp[php'mailphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'charsetphp'php,php php$configphp)php)php php{
php php php php php php php php php php php php php$configphp[php'charsetphp'php]php php=php nullphp;
php php php php php php php php php}
php php php php php php php php php$mailphp php=php newphp php$mailClassphp(php$configphp[php'charsetphp'php]php)php;
php php php php php php php php ifphp php(php!php$mailphp instanceofphp Zendphp_Mailphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php$mailphp php.php php'mustphp extendphp Zendphp_Mailphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$configphp[php'subjectphp'php]php)php)php php{
php php php php php php php php php php php php php$mailphp-php>setSubjectphp(php$configphp[php'subjectphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$headerAddressesphp php=php arrayphp_intersectphp_keyphp(php$configphp,php selfphp:php:php$php_methodMapHeadersphp)php;
php php php php php php php php ifphp php(countphp(php$headerAddressesphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$headerAddressesphp asphp php$headerphp php=php>php php$addressphp)php php{
php php php php php php php php php php php php php php php php php$methodphp php=php selfphp:php:php$php_methodMapHeadersphp[php$headerphp]php;
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$addressphp)php php&php&php issetphp(php$addressphp[php'namephp'php]php)
php php php php php php php php php php php php php php php php php php php php php&php&php php!isphp_numericphp(php$addressphp[php'namephp'php]php)
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$addressphp[php'emailphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$addressphp[php'namephp'php]
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$addressphp)php php&php&php issetphp(php$addressphp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp(php$addressphp[php'emailphp'php]php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$paramsphp php=php arrayphp(php$addressphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php callphp_userphp_funcphp_arrayphp(arrayphp(php$mailphp,php php$methodphp)php,php php$paramsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$mailphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructphp aphp Zendphp_Layoutphp instancephp basedphp onphp aphp configurationphp array
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$config
php php php php php php*php php@returnphp Zendphp_Layout
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_constructLayoutFromConfigphp(arrayphp php$configphp)
php php php php php{
php php php php php php php php php$configphp php=php arrayphp_mergephp(arrayphp(
php php php php php php php php php php php php php'layoutphp'php php=php>php php'Zendphp_Layoutphp'php,
php php php php php php php php php php php php php'layoutOptionsphp'php php=php>php null
php php php php php php php php php)php,php php$configphp)php;

php php php php php php php php php$layoutClassphp php=php php$configphp[php'layoutphp'php]php;
php php php php php php php php php$layoutphp php=php newphp php$layoutClassphp(php$configphp[php'layoutOptionsphp'php]php)php;
php php php php php php php php ifphp php(php!php$layoutphp instanceofphp Zendphp_Layoutphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(php$layoutphp php.php php'mustphp extendphp Zendphp_Layoutphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$layoutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Placesphp eventphp linephp intophp arrayphp ofphp linesphp tophp bephp usedphp asphp messagephp bodyphp.
php php php php php php*
php php php php php php*php Handlesphp thephp formattingphp ofphp bothphp plaintextphp entriesphp,php asphp wellphp asphp those
php php php php php php*php renderedphp withphp Zendphp_Layoutphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$eventphp Eventphp data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_writephp(php$eventphp)
php php php php php{
php php php php php php php php php/php/php Trackphp thephp numberphp ofphp entriesphp perphp priorityphp levelphp.
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_numEntriesPerPriorityphp[php$eventphp[php'priorityNamephp'php]php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_numEntriesPerPriorityphp[php$eventphp[php'priorityNamephp'php]php]php php=php php1php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_numEntriesPerPriorityphp[php$eventphp[php'priorityNamephp'php]php]php+php+php;
php php php php php php php php php}

php php php php php php php php php$formattedEventphp php=php php$thisphp-php>php_formatterphp-php>formatphp(php$eventphp)php;

php php php php php php php php php/php/php Allphp plaintextphp eventsphp arephp tophp usephp thephp standardphp formatterphp.
php php php php php php php php php$thisphp-php>php_eventsToMailphp[php]php php=php php$formattedEventphp;

php php php php php php php php php/php/php Ifphp wephp havephp aphp Zendphp_Layoutphp instancephp,php usephp aphp specificphp formatterphp forphp the
php php php php php php php php php/php/php layoutphp ifphp onephp existsphp.php php Otherwisephp,php justphp usephp thephp eventphp withphp its
php php php php php php php php php/php/php defaultphp formatphp.
php php php php php php php php ifphp php(php$thisphp-php>php_layoutphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_layoutFormatterphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_layoutEventsToMailphp[php]php php=
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_layoutFormatterphp-php>formatphp(php$eventphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_layoutEventsToMailphp[php]php php=php php$formattedEventphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp instancephp ofphp Zendphp_Logphp_Formatterphp_Instancephp usedphp forphp formattingphp a
php php php php php php*php messagephp usingphp Zendphp_Layoutphp,php ifphp applicablephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Logphp_Formatterphp_Interfacephp|nullphp Thephp formatterphp,php orphp nullphp.
php php php php php php*php/
php php php php publicphp functionphp getLayoutFormatterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_layoutFormatterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp specificphp formatterphp forphp usephp withphp Zendphp_Layoutphp eventsphp.
php php php php php php*
php php php php php php*php Allowsphp usephp ofphp aphp secondphp formatterphp onphp linesphp thatphp willphp bephp renderedphp with
php php php php php php*php Zendphp_Layoutphp.php php Inphp thephp eventphp thatphp Zendphp_Layoutphp isphp notphp beingphp usedphp,php this
php php php php php php*php formatterphp cannotphp bephp setphp,php sophp anphp exceptionphp willphp bephp thrownphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Logphp_Formatterphp_Interfacephp php$formatter
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Mail
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setLayoutFormatterphp(Zendphp_Logphp_Formatterphp_Interfacephp php$formatterphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_layoutphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'cannotphp setphp formatterphp forphp layoutphp;php php'php php.
php php php php php php php php php php php php php php php php php php php php php'aphp Zendphp_Layoutphp instancephp isphp notphp inphp usephp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_layoutFormatterphp php=php php$formatterphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp callerphp tophp havephp thephp mailphp subjectphp dynamicallyphp setphp tophp containphp the
php php php php php php*php entryphp countsphp perphp-priorityphp levelphp.
php php php php php php*
php php php php php php*php Setsphp thephp textphp forphp usephp inphp thephp subjectphp,php withphp entryphp countsphp perphp-priority
php php php php php php*php levelphp appendedphp tophp thephp endphp.php php Sincephp aphp Zendphp_Mailphp subjectphp canphp onlyphp bephp set
php php php php php php*php oncephp,php thisphp methodphp cannotphp bephp usedphp ifphp thephp Zendphp_Mailphp objectphp alreadyphp hasphp a
php php php php php php*php subjectphp setphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$subjectphp Subjectphp prependphp textphp.
php php php php php php*php php@returnphp Zendphp_Logphp_Writerphp_Mail
php php php php php php*php php@throwsphp Zendphp_Logphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setSubjectPrependTextphp(php$subjectphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_mailphp-php>getSubjectphp(php)php)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Logphp_Exceptionphp(
php php php php php php php php php php php php php php php php php'subjectphp alreadyphp setphp onphp mailphp;php php'php php.
php php php php php php php php php php php php php php php php php php php php php'cannotphp setphp subjectphp prependphp textphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_subjectPrependTextphp php=php php(stringphp)php php$subjectphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendsphp mailphp tophp recipientphp(sphp)php ifphp logphp entriesphp arephp presentphp.php php Notephp thatphp both
php php php php php php*php plaintextphp andphp HTMLphp portionsphp ofphp emailphp arephp handledphp herephp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp shutdownphp(php)
php php php php php{
php php php php php php php php php/php/php Ifphp therephp arephp eventsphp tophp mailphp,php usephp themphp asphp messagephp bodyphp.php php Otherwisephp,
php php php php php php php php php/php/php therephp isphp nophp mailphp tophp bephp sentphp.
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_eventsToMailphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_subjectPrependTextphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Tackphp onphp thephp summaryphp ofphp entriesphp perphp-priorityphp tophp thephp subject
php php php php php php php php php php php php php/php/php linephp andphp setphp itphp onphp thephp Zendphp_Mailphp objectphp.
php php php php php php php php php php php php php$numEntriesphp php=php php$thisphp-php>php_getFormattedNumEntriesPerPriorityphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_mailphp-php>setSubjectphp(
php php php php php php php php php php php php php php php php php"php{php$thisphp-php>php_subjectPrependTextphp}php php(php{php$numEntriesphp}php)php"php)php;
php php php php php php php php php}


php php php php php php php php php/php/php Alwaysphp providephp eventsphp tophp mailphp asphp plaintextphp.
php php php php php php php php php$thisphp-php>php_mailphp-php>setBodyTextphp(implodephp(php'php'php,php php$thisphp-php>php_eventsToMailphp)php)php;

php php php php php php php php php/php/php Ifphp aphp Zendphp_Layoutphp instancephp isphp beingphp usedphp,php setphp itsphp php"eventsphp"
php php php php php php php php php/php/php valuephp tophp thephp linesphp formattedphp forphp usephp withphp thephp layoutphp.
php php php php php php php php ifphp php(php$thisphp-php>php_layoutphp)php php{
php php php php php php php php php php php php php/php/php Setphp thephp requiredphp php"messagesphp"php valuephp forphp thephp layoutphp.php php Herephp we
php php php php php php php php php php php php php/php/php arephp assumingphp thatphp thephp layoutphp isphp forphp usephp withphp HTMLphp.
php php php php php php php php php php php php php$thisphp-php>php_layoutphp-php>eventsphp php=
php php php php php php php php php php php php php php php php implodephp(php'php'php,php php$thisphp-php>php_layoutEventsToMailphp)php;

php php php php php php php php php php php php php/php/php Ifphp anphp exceptionphp occursphp duringphp renderingphp,php convertphp itphp tophp aphp notice
php php php php php php php php php php php php php/php/php sophp wephp canphp avoidphp anphp exceptionphp thrownphp withoutphp aphp stackphp framephp.
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_mailphp-php>setBodyHtmlphp(php$thisphp-php>php_layoutphp-php>renderphp(php)php)php;
php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php triggerphp_errorphp(
php php php php php php php php php php php php php php php php php php php php php"exceptionphp occurredphp whenphp renderingphp layoutphp;php php"php php.
php php php php php php php php php php php php php php php php php php php php php php php php php"unablephp tophp setphp htmlphp bodyphp forphp messagephp;php php"php php.
php php php php php php php php php php php php php php php php php php php php php php php php php"messagephp php=php php{php$ephp-php>getMessagephp(php)php}php;php php"php php.
php php php php php php php php php php php php php php php php php php php php php php php php php"codephp php=php php{php$ephp-php>getCodephp(php)php}php;php php"php php.
php php php php php php php php php php php php php php php php php php php php php php php php php"exceptionphp classphp php=php php"php php.php getphp_classphp(php$ephp)php,
php php php php php php php php php php php php php php php php php php php php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Finallyphp,php sendphp thephp mailphp.php php Ifphp anphp exceptionphp occursphp,php convertphp itphp intophp a
php php php php php php php php php/php/php warningphp-levelphp messagephp sophp wephp canphp avoidphp anphp exceptionphp thrownphp withoutphp a
php php php php php php php php php/php/php stackphp framephp.
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_mailphp-php>sendphp(php)php;
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php triggerphp_errorphp(
php php php php php php php php php php php php php php php php php"unablephp tophp sendphp logphp entriesphp viaphp emailphp;php php"php php.
php php php php php php php php php php php php php php php php php php php php php"messagephp php=php php{php$ephp-php>getMessagephp(php)php}php;php php"php php.
php php php php php php php php php php php php php php php php php php php php php"codephp php=php php{php$ephp-php>getCodephp(php)php}php;php php"php php.
php php php php php php php php php php php php php php php php php php php php php php php php php"exceptionphp classphp php=php php"php php.php getphp_classphp(php$ephp)php,
php php php php php php php php php php php php php php php php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp aphp stringphp ofphp numberphp ofphp entriesphp perphp-priorityphp levelphp thatphp occurredphp,php or
php php php php php php*php anphp emptryphp stringphp ifphp nonephp occurredphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getFormattedNumEntriesPerPriorityphp(php)
php php php php php{
php php php php php php php php php$stringsphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_numEntriesPerPriorityphp asphp php$priorityphp php=php>php php$numEntriesphp)php php{
php php php php php php php php php php php php php$stringsphp[php]php php=php php"php{php$priorityphp}php=php{php$numEntriesphp}php"php;
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php'php,php php'php,php php$stringsphp)php;
php php php php php}
php}
