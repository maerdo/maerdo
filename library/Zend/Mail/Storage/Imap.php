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
php php*php php@versionphp php php php php$Idphp:php Imapphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Protocolphp_Imap
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Imapphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Writablephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Writablephp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Folderphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Folderphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Folder
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Folderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Message
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Messagephp.phpphp'php;

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
classphp Zendphp_Mailphp_Storagephp_Imapphp extendsphp Zendphp_Mailphp_Storagephp_Abstract
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php implementsphp Zendphp_Mailphp_Storagephp_Folderphp_Interfacephp,php Zendphp_Mailphp_Storagephp_Writablephp_Interface
php{
php php php php php/php/php TODOphp:php withphp anphp internalphp cachephp wephp couldphp optimizephp thisphp classphp,php orphp createphp anphp extraphp classphp with
php php php php php/php/php suchphp optimizationsphp.php Especiallyphp thephp variousphp fetchphp callsphp couldphp bephp combinedphp tophp onephp cachephp call

php php php php php/php*php*
php php php php php php*php protocolphp handler
php php php php php php*php php@varphp nullphp|Zendphp_Mailphp_Protocolphp_Imap
php php php php php php*php/
php php php php protectedphp php$php_protocolphp;

php php php php php/php*php*
php php php php php php*php namephp ofphp currentphp folder
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_currentFolderphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php imapphp flagsphp tophp constantsphp translation
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_knownFlagsphp php=php arrayphp(php'php\Passedphp'php php php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_PASSEDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Answeredphp'php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_ANSWEREDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Seenphp'php php php php php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_SEENphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Deletedphp'php php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_DELETEDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Draftphp'php php php php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_DRAFTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Flaggedphp'php php php=php>php Zendphp_Mailphp_Storagephp:php:FLAGphp_FLAGGEDphp)php;

php php php php php/php*php*
php php php php php php*php mapphp flagsphp tophp searchphp criterias
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_searchFlagsphp php=php arrayphp(php'php\Recentphp'php php php php=php>php php'RECENTphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Answeredphp'php php=php>php php'ANSWEREDphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Seenphp'php php php php php php=php>php php'SEENphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Deletedphp'php php php=php>php php'DELETEDphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Draftphp'php php php php php=php>php php'DRAFTphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php\Flaggedphp'php php php=php>php php'FLAGGEDphp'php)php;

php php php php php/php*php*
php php php php php php*php Countphp messagesphp allphp messagesphp inphp currentphp box
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp messages
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp countMessagesphp(php$flagsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_currentFolderphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'Nophp selectedphp folderphp tophp countphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$flagsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp countphp(php$thisphp-php>php_protocolphp-php>searchphp(arrayphp(php'ALLphp'php)php)php)php;
php php php php php php php php php}

php php php php php php php php php$paramsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php(arrayphp)php$flagsphp asphp php$flagphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_searchFlagsphp[php$flagphp]php)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php]php php=php selfphp:php:php$php_searchFlagsphp[php$flagphp]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$paramsphp[php]php php=php php'KEYWORDphp'php;
php php php php php php php php php php php php php php php php php$paramsphp[php]php php=php php$thisphp-php>php_protocolphp-php>escapeStringphp(php$flagphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp countphp(php$thisphp-php>php_protocolphp-php>searchphp(php$paramsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp aphp listphp ofphp messagesphp withphp numberphp andphp size
php php php php php php*
php php php php php php*php php@paramphp intphp php$idphp numberphp ofphp message
php php php php php php*php php@returnphp intphp|arrayphp sizephp ofphp givenphp messagephp ofphp listphp withphp allphp messagesphp asphp arrayphp(numphp php=php>php sizephp)
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php$idphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(php$idphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>fetchphp(php'RFCphp8php2php2php.SIZEphp'php,php php$idphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>fetchphp(php'RFCphp8php2php2php.SIZEphp'php,php php1php,php INFphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Fetchphp aphp message
php php php php php php*
php php php php php php*php php@paramphp intphp php$idphp numberphp ofphp message
php php php php php php*php php@returnphp Zendphp_Mailphp_Message
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php$idphp)
php php php php php{
php php php php php php php php php$dataphp php=php php$thisphp-php>php_protocolphp-php>fetchphp(arrayphp(php'FLAGSphp'php,php php'RFCphp8php2php2php.HEADERphp'php)php,php php$idphp)php;
php php php php php php php php php$headerphp php=php php$dataphp[php'RFCphp8php2php2php.HEADERphp'php]php;

php php php php php php php php php$flagsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$dataphp[php'FLAGSphp'php]php asphp php$flagphp)php php{
php php php php php php php php php php php php php$flagsphp[php]php php=php issetphp(selfphp:php:php$php_knownFlagsphp[php$flagphp]php)php php?php selfphp:php:php$php_knownFlagsphp[php$flagphp]php php:php php$flagphp;
php php php php php php php php php}

php php php php php php php php returnphp newphp php$thisphp-php>php_messageClassphp(arrayphp(php'handlerphp'php php=php>php php$thisphp,php php'idphp'php php=php>php php$idphp,php php'headersphp'php php=php>php php$headerphp,php php'flagsphp'php php=php>php php$flagsphp)php)php;
php php php php php}

php php php php php/php*
php php php php php php*php Getphp rawphp headerphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php php php php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp php php php php pathphp tophp partphp orphp nullphp forphp messsagephp header
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$topLinesphp includephp thisphp manyphp linesphp withphp headerphp php(afterphp anphp emptyphp linephp)
php php php php php php*php php@paramphp php intphp php$topLinesphp includephp thisphp manyphp linesphp withphp headerphp php(afterphp anphp emptyphp linephp)
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

php php php php php php php php php/php/php TODOphp:php toplines
php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>fetchphp(php'RFCphp8php2php2php.HEADERphp'php,php php$idphp)php;
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

php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>fetchphp(php'RFCphp8php2php2php.TEXTphp'php,php php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp instancephp withphp parameters
php php php php php php*php Supportedphp paramtersphp are
php php php php php php*php php php php-php userphp username
php php php php php php*php php php php-php hostphp hostnamephp orphp ipphp addressphp ofphp IMAPphp serverphp php[optionalphp,php defaultphp php=php php'localhostphp'php]
php php php php php php*php php php php-php passwordphp passwordphp forphp userphp php'usernamephp'php php[optionalphp,php defaultphp php=php php'php'php]
php php php php php php*php php php php-php portphp portphp forphp IMAPphp serverphp php[optionalphp,php defaultphp php=php php1php1php0php]
php php php php php php*php php php php-php sslphp php'SSLphp'php orphp php'TLSphp'php forphp securephp sockets
php php php php php php*php php php php-php folderphp selectphp thisphp folderphp php[optionalphp,php defaultphp php=php php'INBOXphp'php]
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$paramsphp mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php(objectphp)php$paramsphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hasphp[php'flagsphp'php]php php=php truephp;

php php php php php php php php ifphp php(php$paramsphp instanceofphp Zendphp_Mailphp_Protocolphp_Imapphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_protocolphp php=php php$paramsphp;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$thisphp-php>selectFolderphp(php'INBOXphp'php)php;
php php php php php php php php php php php php php}php catchphp(Zendphp_Mailphp_Storagephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp selectphp INBOXphp,php isphp thisphp aphp validphp transportphp?php'php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$paramsphp-php>userphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'needphp atphp leastphp userphp inphp paramsphp'php)php;
php php php php php php php php php}

php php php php php php php php php$hostphp php php php php php=php issetphp(php$paramsphp-php>hostphp)php php php php php php?php php$paramsphp-php>hostphp php php php php php:php php'localhostphp'php;
php php php php php php php php php$passwordphp php=php issetphp(php$paramsphp-php>passwordphp)php php?php php$paramsphp-php>passwordphp php:php php'php'php;
php php php php php php php php php$portphp php php php php php=php issetphp(php$paramsphp-php>portphp)php php php php php php?php php$paramsphp-php>portphp php php php php php:php nullphp;
php php php php php php php php php$sslphp php php php php php php=php issetphp(php$paramsphp-php>sslphp)php php php php php php php?php php$paramsphp-php>sslphp php php php php php php:php falsephp;

php php php php php php php php php$thisphp-php>php_protocolphp php=php newphp Zendphp_Mailphp_Protocolphp_Imapphp(php)php;
php php php php php php php php php$thisphp-php>php_protocolphp-php>connectphp(php$hostphp,php php$portphp,php php$sslphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>loginphp(php$paramsphp-php>userphp,php php$passwordphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp loginphp,php userphp orphp passwordphp wrongphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>selectFolderphp(issetphp(php$paramsphp-php>folderphp)php php?php php$paramsphp-php>folderphp php:php php'INBOXphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp resourcephp forphp mailphp libphp.php Ifphp youphp needphp tophp controlphp,php whenphp thephp resource
php php php php php php*php isphp closedphp.php Otherwisephp thephp destructorphp wouldphp callphp thisphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentFolderphp php=php php'php'php;
php php php php php php php php php$thisphp-php>php_protocolphp-php>logoutphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Keepphp thephp serverphp busyphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp noopphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>noopphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'couldphp notphp dophp nothingphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp messagephp fromphp serverphp.php Ifphp youphp'rephp doingphp thatphp fromphp aphp webphp enviroment
php php php php php php*php youphp shouldphp bephp carefulphp andphp usephp aphp uniqueidphp asphp parameterphp ifphp possiblephp to
php php php php php php*php identifyphp thephp messagephp.
php php php php php php*
php php php php php php*php php@paramphp php php intphp php$idphp numberphp ofphp message
php php php php php php*php php@returnphp php null
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeMessagephp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>storephp(arrayphp(Zendphp_Mailphp_Storagephp:php:FLAGphp_DELETEDphp)php,php php$idphp,php nullphp,php php'php+php'php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp setphp deletedphp flagphp'php)php;
php php php php php php php php php}
php php php php php php php php php/php/php TODOphp:php expungephp herephp orphp atphp closephp?php wephp canphp handlephp anphp errorphp herephp betterphp andphp arephp morephp failphp safe
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>expungephp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'messagephp markedphp asphp deletedphp,php butphp couldphp notphp expungephp'php)php;
php php php php php php php php php}
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
php php php php php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>fetchphp(php'UIDphp'php,php php$idphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>fetchphp(php'UIDphp'php,php php1php,php INFphp)php;
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
php php php php php php php php php/php/php TODOphp:php usephp searchphp tophp findphp numberphp directly
php php php php php php php php php$idsphp php=php php$thisphp-php>getUniqueIdphp(php)php;
php php php php php php php php foreachphp php(php$idsphp asphp php$kphp php=php>php php$vphp)php php{
php php php php php php php php php php php php ifphp php(php$vphp php=php=php php$idphp)php php{
php php php php php php php php php php php php php php php php returnphp php$kphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'uniquephp idphp notphp foundphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php getphp rootphp folderphp orphp givenphp folder
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$rootFolderphp getphp folderphp structurephp forphp givenphp folderphp,php elsephp root
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp rootphp orphp wantedphp folder
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getFoldersphp(php$rootFolderphp php=php nullphp)
php php php php php{
php php php php php php php php php$foldersphp php=php php$thisphp-php>php_protocolphp-php>listMailboxphp(php(stringphp)php$rootFolderphp)php;
php php php php php php php php ifphp php(php!php$foldersphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'folderphp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php ksortphp(php$foldersphp,php SORTphp_STRINGphp)php;
php php php php php php php php php$rootphp php=php newphp Zendphp_Mailphp_Storagephp_Folderphp(php'php/php'php,php php'php/php'php,php falsephp)php;
php php php php php php php php php$stackphp php=php arrayphp(nullphp)php;
php php php php php php php php php$folderStackphp php=php arrayphp(nullphp)php;
php php php php php php php php php$parentFolderphp php=php php$rootphp;
php php php php php php php php php$parentphp php=php php'php'php;

php php php php php php php php foreachphp php(php$foldersphp asphp php$globalNamephp php=php>php php$dataphp)php php{
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php ifphp php(php!php$parentphp php|php|php strposphp(php$globalNamephp,php php$parentphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$posphp php=php strrposphp(php$globalNamephp,php php$dataphp[php'delimphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$posphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$localNamephp php=php php$globalNamephp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$localNamephp php=php substrphp(php$globalNamephp,php php$posphp php+php php1php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$selectablephp php=php php!php$dataphp[php'flagsphp'php]php php|php|php php!inphp_arrayphp(php'php\php\Noselectphp'php,php php$dataphp[php'flagsphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$stackphp,php php$parentphp)php;
php php php php php php php php php php php php php php php php php php php php php$parentphp php=php php$globalNamephp php.php php$dataphp[php'delimphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$folderphp php=php newphp Zendphp_Mailphp_Storagephp_Folderphp(php$localNamephp,php php$globalNamephp,php php$selectablephp)php;
php php php php php php php php php php php php php php php php php php php php php$parentFolderphp-php>php$localNamephp php=php php$folderphp;
php php php php php php php php php php php php php php php php php php php php arrayphp_pushphp(php$folderStackphp,php php$parentFolderphp)php;
php php php php php php php php php php php php php php php php php php php php php$parentFolderphp php=php php$folderphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$stackphp)php php{
php php php php php php php php php php php php php php php php php php php php php$parentphp php=php arrayphp_popphp(php$stackphp)php;
php php php php php php php php php php php php php php php php php php php php php$parentFolderphp php=php arrayphp_popphp(php$folderStackphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php whilephp php(php$stackphp)php;
php php php php php php php php php php php php ifphp php(php!php$stackphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'errorphp whilephp constructingphp folderphp treephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$rootphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php selectphp givenphp folder
php php php php php php*
php php php php php php*php folderphp mustphp bephp selectablephp!
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Mailphp_Storagephp_Folderphp|stringphp php$globalNamephp globalphp namephp ofphp folderphp orphp instancephp forphp subfolder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp selectFolderphp(php$globalNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentFolderphp php=php php$globalNamephp;
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>selectphp(php$thisphp-php>php_currentFolderphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_currentFolderphp php=php php'php'php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp changephp folderphp,php maybephp itphp doesphp notphp existphp'php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php getphp Zendphp_Mailphp_Storagephp_Folderphp instancephp forphp currentphp folder
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Storagephp_Folderphp instancephp ofphp currentphp folder
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getCurrentFolderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_currentFolderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp aphp newphp folder
php php php php php php*
php php php php php php*php Thisphp methodphp alsophp createsphp parentphp foldersphp ifphp necessaryphp.php Somephp mailphp storagesphp mayphp restrictphp,php whichphp folder
php php php php php php*php mayphp bephp usedphp asphp parentphp orphp whichphp charsphp mayphp bephp usedphp inphp thephp folderphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php php globalphp namephp ofphp folderphp,php localphp namephp ifphp php$parentFolderphp isphp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$parentFolderphp parentphp folderphp forphp newphp folderphp,php elsephp rootphp folderphp isphp parent
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp createFolderphp(php$namephp,php php$parentFolderphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php TODOphp:php wephp assumephp php/php asphp thephp hierarchyphp delimphp php-php needphp tophp getphp thatphp fromphp thephp folderphp classphp!
php php php php php php php php ifphp php(php$parentFolderphp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php php{
php php php php php php php php php php php php php$folderphp php=php php$parentFolderphp-php>getGlobalNamephp(php)php php.php php'php/php'php php.php php$namephp;
php php php php php php php php php}php elsephp ifphp php(php$parentFolderphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$folderphp php=php php$parentFolderphp php.php php'php/php'php php.php php$namephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$folderphp php=php php$namephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>createphp(php$folderphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp createphp folderphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php removephp aphp folder
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$namephp php php php php php namephp orphp instancephp ofphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeFolderphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php php{
php php php php php php php php php php php php php$namephp php=php php$namephp-php>getGlobalNamephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>deletephp(php$namephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp deletephp folderphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php renamephp andphp/orphp movephp folder
php php php php php php*
php php php php php php*php Thephp newphp namephp hasphp thephp samephp restrictionsphp asphp inphp createFolderphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$oldNamephp namephp orphp instancephp ofphp folder
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$newNamephp newphp globalphp namephp ofphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp renameFolderphp(php$oldNamephp,php php$newNamephp)
php php php php php{
php php php php php php php php ifphp php(php$oldNamephp instanceofphp Zendphp_Mailphp_Storagephp_Folderphp)php php{
php php php php php php php php php php php php php$oldNamephp php=php php$oldNamephp-php>getGlobalNamephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>renamephp(php$oldNamephp,php php$newNamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp renamephp folderphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php appendphp aphp newphp messagephp tophp mailphp storage
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$messagephp messagephp asphp stringphp orphp instancephp ofphp messagephp class
php php php php php php*php php@paramphp php nullphp|stringphp|Zendphp_Mailphp_Storagephp_Folderphp php php php php php php php$folderphp php folderphp forphp newphp messagephp,php elsephp currentphp folderphp isphp taken
php php php php php php*php php@paramphp php nullphp|arrayphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$flagsphp php php setphp flagsphp forphp newphp messagephp,php elsephp aphp defaultphp setphp isphp used
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php php php/php/php notphp yetphp php*php php@paramphp stringphp|Zendphp_Mailphp_Messagephp|Zendphp_Mimephp_Messagephp php$messagephp messagephp asphp stringphp orphp instancephp ofphp messagephp class
php php php php publicphp functionphp appendMessagephp(php$messagephp,php php$folderphp php=php nullphp,php php$flagsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$folderphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$folderphp php=php php$thisphp-php>php_currentFolderphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$flagsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$flagsphp php=php arrayphp(Zendphp_Mailphp_Storagephp:php:FLAGphp_SEENphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php TODOphp:php handlephp classphp instancesphp forphp php$message
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>appendphp(php$folderphp,php php$messagephp,php php$flagsphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp createphp messagephp,php pleasephp checkphp ifphp thephp folderphp existsphp andphp yourphp flagsphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php copyphp anphp existingphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$idphp php php php php numberphp ofphp message
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$folderphp namephp orphp instancephp ofphp targerphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp copyMessagephp(php$idphp,php php$folderphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>copyphp(php$folderphp,php php$idphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp copyphp messagephp,php doesphp thephp folderphp existphp?php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php movephp anphp existingphp message
php php php php php php*
php php php php php php*php NOTEphp:php imapphp hasphp nophp nativephp movephp commandphp,php thusphp itphp'sphp emulatedphp withphp copyphp andphp delete
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$idphp php php php php numberphp ofphp message
php php php php php php*php php@paramphp php stringphp|Zendphp_Mailphp_Storagephp_Folderphp php$folderphp namephp orphp instancephp ofphp targerphp folder
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp moveMessagephp(php$idphp,php php$folderphp)php php{
php php php php php php php php php$thisphp-php>copyMessagephp(php$idphp,php php$folderphp)php;
php php php php php php php php php$thisphp-php>removeMessagephp(php$idphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setphp flagsphp forphp message
php php php php php php*
php php php php php php*php NOTEphp:php thisphp methodphp canphp'tphp setphp thephp recentphp flagphp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php$idphp php php php numberphp ofphp message
php php php php php php*php php@paramphp php arrayphp php$flagsphp newphp flagsphp forphp message
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setFlagsphp(php$idphp,php php$flagsphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_protocolphp-php>storephp(php$flagsphp,php php$idphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp setphp flagsphp,php havephp youphp triedphp tophp setphp thephp recentphp flagphp orphp specialphp charsphp?php'php)php;
php php php php php php php php php}
php php php php php}
php}

