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
php php*php php@versionphp php php php php$Idphp:php Maildirphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Messagephp_File
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Messagephp/Filephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storage
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Storagephp_Maildirphp extendsphp Zendphp_Mailphp_Storagephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php usedphp messagephp classphp,php changephp itphp inphp anphp extenedphp classphp tophp extendphp thephp returnedphp messagephp class
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messageClassphp php=php php'Zendphp_Mailphp_Messagephp_Filephp'php;

php php php php php/php*php*
php php php php php php*php dataphp ofphp foundphp messagephp filesphp inphp maildirphp dir
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_filesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php knownphp flagphp charsphp inphp filenames
php php php php php php*
php php php php php php*php Thisphp listphp hasphp tophp bephp inphp alphabeticalphp orderphp forphp setFlagsphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_knownFlagsphp php=php arrayphp(php'Dphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_DRAFTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Fphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_FLAGGEDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Pphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_PASSEDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Rphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_ANSWEREDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Sphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_SEENphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'Tphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_DELETEDphp)php;

php php php php php/php/php TODOphp:php getFlagsphp(php$idphp)php forphp fastphp accessphp ifphp headersphp arephp notphp neededphp php(iphp.ephp.php justphp settingphp flagsphp)php?

php php php php php/php*php*
php php php php php php*php Countphp messagesphp allphp messagesphp inphp currentphp box
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp messages
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp countMessagesphp(php$flagsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$flagsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp countphp(php$thisphp-php>php_filesphp)php;
php php php php php php php php php}

php php php php php php php php php$countphp php=php php0php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$flagsphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$filephp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$filephp[php'flaglookupphp'php]php[php$flagsphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php+php+php$countphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$countphp;
php php php php php php php php php}

php php php php php php php php php$flagsphp php=php arrayphp_flipphp(php$flagsphp)php;
php php php php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$filephp)php php{
php php php php php php php php php php php php php php php foreachphp php(php$flagsphp asphp php$flagphp php=php>php php$vphp)php php{
php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$filephp[php'flaglookupphp'php]php[php$flagphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php continuephp php2php;
php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php+php+php$countphp;
php php php php php php php php php php php php}
php php php php php php php php php php php returnphp php$countphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp onephp orphp allphp fieldsphp fromphp filephp structurephp.php Alsophp checksphp ifphp messagephp isphp valid
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php$idphp php php php messagephp number
php php php php php php*php php@paramphp php stringphp|nullphp php$fieldphp wantedphp field
php php php php php php*php php@returnphp stringphp|arrayphp wantedphp fieldphp orphp allphp fieldsphp asphp array
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_getFileDataphp(php$idphp,php php$fieldphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_filesphp[php$idphp php-php php1php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'idphp doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$fieldphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_filesphp[php$idphp php-php php1php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_filesphp[php$idphp php-php php1php]php[php$fieldphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'fieldphp doesphp notphp existphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_filesphp[php$idphp php-php php1php]php[php$fieldphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp listphp ofphp messagesphp withphp numberphp andphp size
php php php php php php*
php php php php php php*php php@paramphp php intphp|nullphp php$idphp numberphp ofphp messagephp orphp nullphp forphp allphp messages
php php php php php php*php php@returnphp intphp|arrayphp sizephp ofphp givenphp messagephp ofphp listphp withphp allphp messagesphp asphp arrayphp(numphp php=php>php sizephp)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php$idphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$idphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$filedataphp php=php php$thisphp-php>php_getFileDataphp(php$idphp)php;
php php php php php php php php php php php php returnphp issetphp(php$filedataphp[php'sizephp'php]php)php php?php php$filedataphp[php'sizephp'php]php php:php filesizephp(php$filedataphp[php'filenamephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$numphp php=php>php php$dataphp)php php{
php php php php php php php php php php php php php$resultphp[php$numphp php+php php1php]php php=php issetphp(php$dataphp[php'sizephp'php]php)php php?php php$dataphp[php'sizephp'php]php php:php filesizephp(php$dataphp[php'filenamephp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
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
php php php php php php php php php php php php returnphp newphp php$thisphp-php>php_messageClassphp(arrayphp(php'filephp'php php php=php>php php$thisphp-php>php_getFileDataphp(php$idphp,php php'filenamephp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'flagsphp'php php=php>php php$thisphp-php>php_getFileDataphp(php$idphp,php php'flagsphp'php)php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp php$thisphp-php>php_messageClassphp(arrayphp(php'handlerphp'php php=php>php php$thisphp,php php'idphp'php php=php>php php$idphp,php php'headersphp'php php=php>php php$thisphp-php>getRawHeaderphp(php$idphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'flagsphp'php php php php=php>php php$thisphp-php>php_getFileDataphp(php$idphp,php php'flagsphp'php)php)php)php;
php php php php php}

php php php php php/php*
php php php php php php*php Getphp rawphp headerphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php php php php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp php php php php pathphp tophp partphp orphp nullphp forphp messsagephp header
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$topLinesphp includephp thisphp manyphp linesphp withphp headerphp php(afterphp anphp emptyphp linephp)
php php php php php php*php php@returnphp stringphp rawphp header
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

php php php php php php php php php$fhphp php=php fopenphp(php$thisphp-php>php_getFileDataphp(php$idphp,php php'filenamephp'php)php,php php'rphp'php)php;

php php php php php php php php php$contentphp php=php php'php'php;
php php php php php php php php whilephp php(php!feofphp(php$fhphp)php)php php{
php php php php php php php php php php php php php$linephp php=php fgetsphp(php$fhphp)php;
php php php php php php php php php php php php ifphp php(php!trimphp(php$linephp)php)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$contentphp php.php=php php$linephp;
php php php php php php php php php}

php php php php php php php php fclosephp(php$fhphp)php;
php php php php php php php php returnphp php$contentphp;
php php php php php}

php php php php php/php*
php php php php php php*php Getphp rawphp contentphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp pathphp tophp partphp orphp nullphp forphp messsagephp content
php php php php php php*php php@returnphp stringphp rawphp content
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

php php php php php php php php php$fhphp php=php fopenphp(php$thisphp-php>php_getFileDataphp(php$idphp,php php'filenamephp'php)php,php php'rphp'php)php;

php php php php php php php php whilephp php(php!feofphp(php$fhphp)php)php php{
php php php php php php php php php php php php php$linephp php=php fgetsphp(php$fhphp)php;
php php php php php php php php php php php php ifphp php(php!trimphp(php$linephp)php)php php{
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$contentphp php=php streamphp_getphp_contentsphp(php$fhphp)php;
php php php php php php php php fclosephp(php$fhphp)php;
php php php php php php php php returnphp php$contentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp instancephp withphp parameters
php php php php php php*php Supportedphp parametersphp arephp:
php php php php php php*php php php php-php dirnamephp dirnamephp ofphp mboxphp file
php php php php php php*
php php php php php php*php php@paramphp php php$paramsphp arrayphp mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php(objectphp)php$paramsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$paramsphp-php>dirnamephp)php php|php|php php!isphp_dirphp(php$paramsphp-php>dirnamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'nophp validphp dirnamephp givenphp inphp paramsphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_isMaildirphp(php$paramsphp-php>dirnamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'invalidphp maildirphp givenphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hasphp[php'topphp'php]php php=php truephp;
php php php php php php php php php$thisphp-php>php_hasphp[php'flagsphp'php]php php=php truephp;
php php php php php php php php php$thisphp-php>php_openMaildirphp(php$paramsphp-php>dirnamephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php checkphp ifphp aphp givenphp dirphp isphp aphp validphp maildir
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dirnamephp namephp ofphp dir
php php php php php php*php php@returnphp boolphp dirphp isphp validphp maildir
php php php php php php*php/
php php php php protectedphp functionphp php_isMaildirphp(php$dirnamephp)
php php php php php{
php php php php php php php php ifphp php(filephp_existsphp(php$dirnamephp php.php php'php/newphp'php)php php&php&php php!isphp_dirphp(php$dirnamephp php.php php'php/newphp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(filephp_existsphp(php$dirnamephp php.php php'php/tmpphp'php)php php&php&php php!isphp_dirphp(php$dirnamephp php.php php'php/tmpphp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp isphp_dirphp(php$dirnamephp php.php php'php/curphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php openphp givenphp dirphp asphp currentphp maildir
php php php php php php*
php php php php php php*php php@paramphp stringphp php$dirnamephp namephp ofphp maildir
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_openMaildirphp(php$dirnamephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_filesphp)php php{
php php php php php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php php php php php}

php php php php php php php php php$dhphp php=php php@opendirphp(php$dirnamephp php.php php'php/curphp/php'php)php;
php php php php php php php php ifphp php(php!php$dhphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp openphp maildirphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_getMaildirFilesphp(php$dhphp,php php$dirnamephp php.php php'php/curphp/php'php)php;
php php php php php php php php closedirphp(php$dhphp)php;

php php php php php php php php php$dhphp php=php php@opendirphp(php$dirnamephp php.php php'php/newphp/php'php)php;
php php php php php php php php ifphp php(php$dhphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_getMaildirFilesphp(php$dhphp,php php$dirnamephp php.php php'php/newphp/php'php,php arrayphp(Zendphp_Mailphp_Storagephp:php:FLAGphp_RECENTphp)php)php;
php php php php php php php php php php php php closedirphp(php$dhphp)php;
php php php php php php php php php}php elsephp ifphp php(filephp_existsphp(php$dirnamephp php.php php'php/newphp/php'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp readphp recentphp mailsphp inphp maildirphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php findphp allphp filesphp inphp openedphp dirphp handlephp andphp addphp tophp maildirphp files
php php php php php php*
php php php php php php*php php@paramphp resourcephp php$dhphp php php php php php php php php php php php dirphp handlephp usedphp forphp search
php php php php php php*php php@paramphp stringphp php php php$dirnamephp php php php php php php dirnamephp ofphp dirphp inphp php$dh
php php php php php php*php php@paramphp arrayphp php php php php$defaultphp_flagsphp defaultphp flagsphp forphp givenphp dir
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php protectedphp functionphp php_getMaildirFilesphp(php$dhphp,php php$dirnamephp,php php$defaultphp_flagsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php whilephp php(php(php$entryphp php=php readdirphp(php$dhphp)php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php ifphp php(php$entryphp[php0php]php php=php=php php'php.php'php php|php|php php!isphp_filephp(php$dirnamephp php.php php$entryphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php@listphp(php$uniqphp,php php$infophp)php php=php explodephp(php'php:php'php,php php$entryphp,php php2php)php;
php php php php php php php php php php php php php@listphp(php,php$sizephp)php php=php explodephp(php'php,php'php,php php$uniqphp,php php2php)php;
php php php php php php php php php php php php ifphp php(php$sizephp php&php&php php$sizephp[php0php]php php=php=php php'Sphp'php php&php&php php$sizephp[php1php]php php=php=php php'php=php'php)php php{
php php php php php php php php php php php php php php php php php$sizephp php=php substrphp(php$sizephp,php php2php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!ctypephp_digitphp(php$sizephp)php)php php{
php php php php php php php php php php php php php php php php php$sizephp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php@listphp(php$versionphp,php php$flagsphp)php php=php explodephp(php'php,php'php,php php$infophp,php php2php)php;
php php php php php php php php php php php php ifphp php(php$versionphp php!php=php php2php)php php{
php php php php php php php php php php php php php php php php php$flagsphp php=php php'php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$namedphp_flagsphp php=php php$defaultphp_flagsphp;
php php php php php php php php php php php php php$lengthphp php=php strlenphp(php$flagsphp)php;
php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$lengthphp;php php+php+php$iphp)php php{
php php php php php php php php php php php php php php php php php$flagphp php=php php$flagsphp[php$iphp]php;
php php php php php php php php php php php php php php php php php$namedphp_flagsphp[php$flagphp]php php=php issetphp(selfphp:php:php$php_knownFlagsphp[php$flagphp]php)php php?php selfphp:php:php$php_knownFlagsphp[php$flagphp]php php:php php$flagphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$dataphp php=php arrayphp(php'uniqphp'php php php php php php php php=php>php php$uniqphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php'flagsphp'php php php php php php php=php>php php$namedphp_flagsphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php'flaglookupphp'php php=php>php arrayphp_flipphp(php$namedphp_flagsphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php'filenamephp'php php php php=php>php php$dirnamephp php.php php$entryphp)php;
php php php php php php php php php php php php ifphp php(php$sizephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$dataphp[php'sizephp'php]php php=php php(intphp)php$sizephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_filesphp[php]php php=php php$dataphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Closephp resourcephp forphp mailphp libphp.php Ifphp youphp needphp tophp controlphp,php whenphp thephp resource
php php php php php php*php isphp closedphp.php Otherwisephp thephp destructorphp wouldphp callphp thisphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp(php)php;
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
php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'maildirphp isphp php(currentlyphp)php readphp-onlyphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp uniquephp idphp forphp onephp orphp allphp messages
php php php php php php*
php php php php php php*php ifphp storagephp doesphp notphp supportphp uniquephp idsphp itphp'sphp thephp samephp asphp thephp messagephp number
php php php php php php*
php php php php php php*php php@paramphp intphp|nullphp php$idphp messagephp number
php php php php php php*php php@returnphp arrayphp|stringphp messagephp numberphp forphp givenphp messagephp orphp allphp messagesphp asphp array
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getUniqueIdphp(php$idphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$idphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_getFileDataphp(php$idphp,php php'uniqphp'php)php;
php php php php php php php php php}

php php php php php php php php php$idsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$numphp php=php>php php$filephp)php php{
php php php php php php php php php php php php php$idsphp[php$numphp php+php php1php]php php=php php$filephp[php'uniqphp'php]php;
php php php php php php php php php}
php php php php php php php php returnphp php$idsphp;
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
php php php php php php php php foreachphp php(php$thisphp-php>php_filesphp asphp php$numphp php=php>php php$filephp)php php{
php php php php php php php php php php php php ifphp php(php$filephp[php'uniqphp'php]php php=php=php php$idphp)php php{
php php php php php php php php php php php php php php php php returnphp php$numphp php+php php1php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'uniquephp idphp notphp foundphp'php)php;
php php php php php}
php}
