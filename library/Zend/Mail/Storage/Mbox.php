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
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Mboxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php Mayphp bephp usedphp inphp constructorphp,php butphp commentedphp outphp forphp now
php php*php/
php/php/php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Messagephp_File
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Messagephp/Filephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Storagephp_Mboxphp extendsphp Zendphp_Mailphp_Storagephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php filephp handlephp tophp mboxphp file
php php php php php php*php php@varphp nullphp|resource
php php php php php php*php/
php php php php protectedphp php$php_fhphp;

php php php php php/php*php*
php php php php php php*php filenamephp ofphp mboxphp filephp forphp php_php_wakeup
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filenamephp;

php php php php php/php*php*
php php php php php php*php modificationphp datephp ofphp mboxphp filephp forphp php_php_wakeup
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_filemtimephp;

php php php php php/php*php*
php php php php php php*php startphp andphp endphp positionphp ofphp messagesphp asphp arrayphp(php'startphp'php php=php>php startphp,php php'seperatorphp'php php=php>php headersepphp,php php'endphp'php php=php>php endphp)
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_positionsphp;

php php php php php/php*php*
php php php php php php*php usedphp messagephp classphp,php changephp itphp inphp anphp extenedphp classphp tophp extendphp thephp returnedphp messagephp class
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messageClassphp php=php php'Zendphp_Mailphp_Messagephp_Filephp'php;

php php php php php/php*php*
php php php php php php*php Countphp messagesphp allphp messagesphp inphp currentphp box
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp messages
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp countMessagesphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_positionsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp aphp listphp ofphp messagesphp withphp numberphp andphp size
php php php php php php*
php php php php php php*php php@paramphp php intphp|nullphp php$idphp php numberphp ofphp messagephp orphp nullphp forphp allphp messages
php php php php php php*php php@returnphp intphp|arrayphp sizephp ofphp givenphp messagephp ofphp listphp withphp allphp messagesphp asphp arrayphp(numphp php=php>php sizephp)
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php$idphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php$idphp)php php{
php php php php php php php php php php php php php$posphp php=php php$thisphp-php>php_positionsphp[php$idphp php-php php1php]php;
php php php php php php php php php php php php returnphp php$posphp[php'endphp'php]php php-php php$posphp[php'startphp'php]php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_positionsphp asphp php$numphp php=php>php php$posphp)php php{
php php php php php php php php php php php php php$resultphp[php$numphp php+php php1php]php php=php php$posphp[php'endphp'php]php php-php php$posphp[php'startphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp positionsphp forphp mailphp messagephp orphp throwphp exeptionphp ifphp idphp isphp invalid
php php php php php php*
php php php php php php*php php@paramphp intphp php$idphp numberphp ofphp message
php php php php php php*php php@returnphp arrayphp positionsphp asphp inphp php_positions
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_getPosphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_positionsphp[php$idphp php-php php1php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'idphp doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_positionsphp[php$idphp php-php php1php]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Fetchphp aphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp numberphp ofphp message
php php php php php php*php php@returnphp Zendphp_Mailphp_Messagephp_File
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php$idphp)
php php php php php{
php php php php php php php php php/php/php TODOphp thatphp'sphp uglyphp,php wouldphp bephp betterphp tophp letphp thephp messagephp classphp decide
php php php php php php php php ifphp php(strtolowerphp(php$thisphp-php>php_messageClassphp)php php=php=php php'zendphp_mailphp_messagephp_filephp'php php|php|php isphp_subclassphp_ofphp(php$thisphp-php>php_messageClassphp,php php'zendphp_mailphp_messagephp_filephp'php)php)php php{
php php php php php php php php php php php php php/php/php TODOphp topphp/bodyphp lines
php php php php php php php php php php php php php$messagePosphp php=php php$thisphp-php>php_getPosphp(php$idphp)php;
php php php php php php php php php php php php returnphp newphp php$thisphp-php>php_messageClassphp(arrayphp(php'filephp'php php=php>php php$thisphp-php>php_fhphp,php php'startPosphp'php php=php>php php$messagePosphp[php'startphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'endPosphp'php php=php>php php$messagePosphp[php'endphp'php]php)php)php;
php php php php php php php php php}

php php php php php php php php php$bodyLinesphp php=php php0php;php php/php/php TODOphp:php needphp aphp wayphp tophp changephp that

php php php php php php php php php$messagephp php=php php$thisphp-php>getRawHeaderphp(php$idphp)php;
php php php php php php php php php/php/php filephp pointerphp isphp afterphp headersphp now
php php php php php php php php ifphp php(php$bodyLinesphp)php php{
php php php php php php php php php php php php php$messagephp php.php=php php"php\nphp"php;
php php php php php php php php php php php php whilephp php(php$bodyLinesphp-php-php php&php&php ftellphp(php$thisphp-php>php_fhphp)php <php php$thisphp-php>php_positionsphp[php$idphp php-php php1php]php[php'endphp'php]php)php php{
php php php php php php php php php php php php php php php php php$messagephp php.php=php fgetsphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp newphp php$thisphp-php>php_messageClassphp(arrayphp(php'handlerphp'php php=php>php php$thisphp,php php'idphp'php php=php>php php$idphp,php php'headersphp'php php=php>php php$messagephp)php)php;
php php php php php}

php php php php php/php*
php php php php php php*php Getphp rawphp headerphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php php php php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp php php php php pathphp tophp partphp orphp nullphp forphp messsagephp header
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$topLinesphp includephp thisphp manyphp linesphp withphp headerphp php(afterphp anphp emptyphp linephp)
php php php php php php*php php@returnphp stringphp rawphp header
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getRawHeaderphp(php$idphp,php php$partphp php=php nullphp,php php$topLinesphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php$partphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php TODOphp:php implement
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'notphp implementedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$messagePosphp php=php php$thisphp-php>php_getPosphp(php$idphp)php;
php php php php php php php php php/php/php TODOphp:php toplines
php php php php php php php php returnphp streamphp_getphp_contentsphp(php$thisphp-php>php_fhphp,php php$messagePosphp[php'separatorphp'php]php php-php php$messagePosphp[php'startphp'php]php,php php$messagePosphp[php'startphp'php]php)php;
php php php php php}

php php php php php/php*
php php php php php php*php Getphp rawphp contentphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp pathphp tophp partphp orphp nullphp forphp messsagephp content
php php php php php php*php php@returnphp stringphp rawphp content
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getRawContentphp(php$idphp,php php$partphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$partphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php TODOphp:php implement
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'notphp implementedphp'php)php;
php php php php php php php php php}
php php php php php php php php php$messagePosphp php=php php$thisphp-php>php_getPosphp(php$idphp)php;
php php php php php php php php returnphp streamphp_getphp_contentsphp(php$thisphp-php>php_fhphp,php php$messagePosphp[php'endphp'php]php php-php php$messagePosphp[php'separatorphp'php]php,php php$messagePosphp[php'separatorphp'php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp instancephp withphp parameters
php php php php php php*php Supportedphp parametersphp arephp:
php php php php php php*php php php php-php filenamephp filenamephp ofphp mboxphp file
php php php php php php*
php php php php php php*php php@paramphp php php$paramsphp arrayphp mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php(objectphp)php$paramsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$paramsphp-php>filenamephp)php php/php*php php|php|php Zendphp_Loaderphp:php:isReadablephp(php$paramsphp[php'filenamephp'php]php)php php*php/php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'nophp validphp filenamephp givenphp inphp paramsphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_openMboxFilephp(php$paramsphp-php>filenamephp)php;
php php php php php php php php php$thisphp-php>php_hasphp[php'topphp'php]php php php php php php php=php truephp;
php php php php php php php php php$thisphp-php>php_hasphp[php'uniqueidphp'php]php php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php checkphp ifphp givenphp filephp isphp aphp mboxphp file
php php php php php php*
php php php php php php*php ifphp php$filephp isphp aphp resourcephp itsphp filephp pointerphp isphp movedphp afterphp thephp firstphp line
php php php php php php*
php php php php php php*php php@paramphp php resourcephp|stringphp php$filephp streamphp resourcephp ofphp namephp ofphp file
php php php php php php*php php@paramphp php boolphp php$fileIsStringphp filephp isphp stringphp orphp resource
php php php php php php*php php@returnphp boolphp filephp isphp mboxphp file
php php php php php php*php/
php php php php protectedphp functionphp php_isMboxFilephp(php$filephp,php php$fileIsStringphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(php$fileIsStringphp)php php{
php php php php php php php php php php php php php$filephp php=php php@fopenphp(php$filephp,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$filephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php fseekphp(php$filephp,php php0php)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php falsephp;

php php php php php php php php php$linephp php=php fgetsphp(php$filephp)php;
php php php php php php php php ifphp php(strposphp(php$linephp,php php'Fromphp php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$resultphp php=php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$fileIsStringphp)php php{
php php php php php php php php php php php php php@fclosephp(php$filephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php openphp givenphp filephp asphp currentphp mboxphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filenamephp filenamephp ofphp mboxphp file
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_openMboxFilephp(php$filenamephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_fhphp)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fhphp php=php php@fopenphp(php$filenamephp,php php'rphp'php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_fhphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp openphp mboxphp filephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_filenamephp php=php php$filenamephp;
php php php php php php php php php$thisphp-php>php_filemtimephp php=php filemtimephp(php$thisphp-php>php_filenamephp)php;

php php php php php php php php ifphp php(php!php$thisphp-php>php_isMboxFilephp(php$thisphp-php>php_fhphp,php falsephp)php)php php{
php php php php php php php php php php php php php@fclosephp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'filephp isphp notphp aphp validphp mboxphp formatphp'php)php;
php php php php php php php php php}

php php php php php php php php php$messagePosphp php=php arrayphp(php'startphp'php php=php>php ftellphp(php$thisphp-php>php_fhphp)php,php php'separatorphp'php php=php>php php0php,php php'endphp'php php=php>php php0php)php;
php php php php php php php php whilephp php(php(php$linephp php=php fgetsphp(php$thisphp-php>php_fhphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(strposphp(php$linephp,php php'Fromphp php'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$messagePosphp[php'endphp'php]php php=php ftellphp(php$thisphp-php>php_fhphp)php php-php strlenphp(php$linephp)php php-php php2php;php php/php/php php+php newline
php php php php php php php php php php php php php php php php ifphp php(php!php$messagePosphp[php'separatorphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$messagePosphp[php'separatorphp'php]php php=php php$messagePosphp[php'endphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_positionsphp[php]php php=php php$messagePosphp;
php php php php php php php php php php php php php php php php php$messagePosphp php=php arrayphp(php'startphp'php php=php>php ftellphp(php$thisphp-php>php_fhphp)php,php php'separatorphp'php php=php>php php0php,php php'endphp'php php=php>php php0php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!php$messagePosphp[php'separatorphp'php]php php&php&php php!trimphp(php$linephp)php)php php{
php php php php php php php php php php php php php php php php php$messagePosphp[php'separatorphp'php]php php=php ftellphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$messagePosphp[php'endphp'php]php php=php ftellphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php ifphp php(php!php$messagePosphp[php'separatorphp'php]php)php php{
php php php php php php php php php php php php php$messagePosphp[php'separatorphp'php]php php=php php$messagePosphp[php'endphp'php]php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_positionsphp[php]php php=php php$messagePosphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp resourcephp forphp mailphp libphp.php Ifphp youphp needphp tophp controlphp,php whenphp thephp resource
php php php php php php*php isphp closedphp.php Otherwisephp thephp destructorphp wouldphp callphp thisphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php php@fclosephp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php$thisphp-php>php_positionsphp php=php arrayphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Wastephp somephp CPUphp cyclesphp doingphp nothingphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp noopphp(php)
php php php php php{
php php php php php php php php returnphp truephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php stubphp forphp notphp supportedphp messagephp deletion
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeMessagephp(php$idphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'mboxphp isphp readphp-onlyphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp uniquephp idphp forphp onephp orphp allphp messages
php php php php php php*
php php php php php php*php Mboxphp doesphp notphp supportphp uniquephp idsphp php(yetphp)php php-php itphp'sphp alwaysphp thephp samephp asphp thephp messagephp numberphp.
php php php php php php*php Thatphp shouldnphp'tphp bephp aphp problemphp,php becausephp wephp canphp'tphp changephp mboxphp filesphp.php Thereforphp thephp message
php php php php php php*php numberphp isphp savephp enoughphp.
php php php php php php*
php php php php php php*php php@paramphp intphp|nullphp php$idphp messagephp number
php php php php php php*php php@returnphp arrayphp|stringphp messagephp numberphp forphp givenphp messagephp orphp allphp messagesphp asphp array
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getUniqueIdphp(php$idphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$idphp)php php{
php php php php php php php php php php php php php/php/php checkphp ifphp idphp exists
php php php php php php php php php php php php php$thisphp-php>php_getPosphp(php$idphp)php;
php php php php php php php php php php php php returnphp php$idphp;
php php php php php php php php php}

php php php php php php php php php$rangephp php=php rangephp(php1php,php php$thisphp-php>countMessagesphp(php)php)php;
php php php php php php php php returnphp arrayphp_combinephp(php$rangephp,php php$rangephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp aphp messagephp numberphp fromphp aphp uniquephp id
php php php php php php*
php php php php php php*php Iphp.ephp.php ifphp youphp havephp aphp webmailerphp thatphp supportsphp deletingphp messagesphp youphp shouldphp usephp uniquephp ids
php php php php php php*php asphp parameterphp andphp usephp thisphp methodphp tophp translatephp itphp tophp messagephp numberphp rightphp beforephp callingphp removeMessagephp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$idphp uniquephp id
php php php php php php*php php@returnphp intphp messagephp number
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getNumberByUniqueIdphp(php$idphp)
php php php php php{
php php php php php php php php php/php/php checkphp ifphp idphp exists
php php php php php php php php php$thisphp-php>php_getPosphp(php$idphp)php;
php php php php php php php php returnphp php$idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php magicphp methodphp forphp serializephp(php)
php php php php php php*
php php php php php php*php withphp thisphp methodphp youphp canphp cachephp thephp mboxphp class
php php php php php php*
php php php php php php*php php@returnphp arrayphp namephp ofphp variables
php php php php php php*php/
php php php php publicphp functionphp php_php_sleepphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'php_filenamephp'php,php php'php_positionsphp'php,php php'php_filemtimephp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php magicphp methodphp forphp unserializephp(php)
php php php php php php*
php php php php php php*php withphp thisphp methodphp youphp canphp cachephp thephp mboxphp class
php php php php php php*php forphp cachephp validationphp thephp mtimephp ofphp thephp mboxphp filephp isphp used
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_filemtimephp php!php=php php@filemtimephp(php$thisphp-php>php_filenamephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_openMboxFilephp(php$thisphp-php>php_filenamephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fhphp php=php php@fopenphp(php$thisphp-php>php_filenamephp,php php'rphp'php)php;
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_fhphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp openphp mboxphp filephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php}
