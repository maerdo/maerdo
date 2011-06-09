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
php php*php php@versionphp php php php php$Idphp:php Popphp3php.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mailphp_Storagephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Protocolphp_Popphp3
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Protocolphp/Popphp3php.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Message
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Messagephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Storagephp_Popphp3php extendsphp Zendphp_Mailphp_Storagephp_Abstract
php{
php php php php php/php*php*
php php php php php php*php protocolphp handler
php php php php php php*php php@varphp nullphp|Zendphp_Mailphp_Protocolphp_Popphp3
php php php php php php*php/
php php php php protectedphp php$php_protocolphp;


php php php php php/php*php*
php php php php php php*php Countphp messagesphp allphp messagesphp inphp currentphp box
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp messages
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp countMessagesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_protocolphp-php>statusphp(php$countphp,php php$nullphp)php;
php php php php php php php php returnphp php(intphp)php$countphp;
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
php php php php php php php php php$idphp php=php php$idphp php?php php$idphp php:php nullphp;
php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>getListphp(php$idphp)php;
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
php php php php php php php php php$bodyLinesphp php=php php0php;
php php php php php php php php php$messagephp php=php php$thisphp-php>php_protocolphp-php>topphp(php$idphp,php php$bodyLinesphp,php truephp)php;

php php php php php php php php returnphp newphp php$thisphp-php>php_messageClassphp(arrayphp(php'handlerphp'php php=php>php php$thisphp,php php'idphp'php php=php>php php$idphp,php php'headersphp'php php=php>php php$messagephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'noToplinesphp'php php=php>php php$bodyLinesphp <php php1php)php)php;
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

php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>topphp(php$idphp,php php0php,php truephp)php;
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

php php php php php php php php php$contentphp php=php php$thisphp-php>php_protocolphp-php>retrievephp(php$idphp)php;
php php php php php php php php php/php/php TODOphp:php findphp aphp wayphp tophp avoidphp decodingphp thephp headers
php php php php php php php php Zendphp_Mimephp_Decodephp:php:splitMessagephp(php$contentphp,php php$nullphp,php php$bodyphp)php;
php php php php php php php php returnphp php$bodyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php createphp instancephp withphp parameters
php php php php php php*php Supportedphp paramtersphp are
php php php php php php*php php php php-php hostphp hostnamephp orphp ipphp addressphp ofphp POPphp3php server
php php php php php php*php php php php-php userphp username
php php php php php php*php php php php-php passwordphp passwordphp forphp userphp php'usernamephp'php php[optionalphp,php defaultphp php=php php'php'php]
php php php php php php*php php php php-php portphp portphp forphp POPphp3php serverphp php[optionalphp,php defaultphp php=php php1php1php0php]
php php php php php php*php php php php-php sslphp php'SSLphp'php orphp php'TLSphp'php forphp securephp sockets
php php php php php php*
php php php php php php*php php@paramphp php php$paramsphp arrayphp php mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php(objectphp)php$paramsphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_hasphp[php'fetchPartphp'php]php php=php falsephp;
php php php php php php php php php$thisphp-php>php_hasphp[php'topphp'php]php php php php php php php php=php nullphp;
php php php php php php php php php$thisphp-php>php_hasphp[php'uniqueidphp'php]php php php=php nullphp;

php php php php php php php php ifphp php(php$paramsphp instanceofphp Zendphp_Mailphp_Protocolphp_Popphp3php)php php{
php php php php php php php php php php php php php$thisphp-php>php_protocolphp php=php php$paramsphp;
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

php php php php php php php php php$thisphp-php>php_protocolphp php=php newphp Zendphp_Mailphp_Protocolphp_Popphp3php(php)php;
php php php php php php php php php$thisphp-php>php_protocolphp-php>connectphp(php$hostphp,php php$portphp,php php$sslphp)php;
php php php php php php php php php$thisphp-php>php_protocolphp-php>loginphp(php$paramsphp-php>userphp,php php$passwordphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp resourcephp forphp mailphp libphp.php Ifphp youphp needphp tophp controlphp,php whenphp thephp resource
php php php php php php*php isphp closedphp.php Otherwisephp thephp destructorphp wouldphp callphp thisphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp closephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_protocolphp-php>logoutphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Keepphp thephp serverphp busyphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp noopphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>noopphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp messagephp fromphp serverphp.php Ifphp youphp'rephp doingphp thatphp fromphp aphp webphp enviroment
php php php php php php*php youphp shouldphp bephp carefulphp andphp usephp aphp uniqueidphp asphp parameterphp ifphp possiblephp to
php php php php php php*php identifyphp thephp messagephp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp numberphp ofphp message
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Protocolphp_Exception
php php php php php php*php/
php php php php publicphp functionphp removeMessagephp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_protocolphp-php>deletephp(php$idphp)php;
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
php php php php php php php php ifphp php(php!php$thisphp-php>hasUniqueidphp)php php{
php php php php php php php php php php php php ifphp php(php$idphp)php php{
php php php php php php php php php php php php php php php php returnphp php$idphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$countphp php=php php$thisphp-php>countMessagesphp(php)php;
php php php php php php php php php php php php ifphp php(php$countphp <php php1php)php php{
php php php php php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rangephp php=php rangephp(php1php,php php$countphp)php;
php php php php php php php php php php php php returnphp arrayphp_combinephp(php$rangephp,php php$rangephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>uniqueidphp(php$idphp)php;
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
php php php php php php php php ifphp php(php!php$thisphp-php>hasUniqueidphp)php php{
php php php php php php php php php php php php returnphp php$idphp;
php php php php php php php php php}

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
php php php php php php*php Specialphp handlingphp forphp hasTopphp andphp hasUniqueidphp.php Thephp headersphp ofphp thephp firstphp messagephp is
php php php php php php*php retrievedphp ifphp Topphp wasnphp'tphp neededphp/triedphp yetphp.
php php php php php php*
php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Abstractphp:php_php_getphp(php)
php php php php php php*php php@paramphp php stringphp php$var
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$varphp)
php php php php php{
php php php php php php php php php$resultphp php=php parentphp:php:php_php_getphp(php$varphp)php;
php php php php php php php php ifphp php(php$resultphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$resultphp;
php php php php php php php php php}

php php php php php php php php ifphp php(strtolowerphp(php$varphp)php php=php=php php'hastopphp'php)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_protocolphp-php>hasTopphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php/php/php needphp tophp makephp aphp realphp callphp,php becausephp notphp allphp serverphp arephp honestphp inphp theirphp capas
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_protocolphp-php>topphp(php1php,php php0php,php falsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp(Zendphp_Mailphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php ignoringphp error
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_hasphp[php'topphp'php]php php=php php$thisphp-php>php_protocolphp-php>hasTopphp;
php php php php php php php php php php php php returnphp php$thisphp-php>php_protocolphp-php>hasTopphp;
php php php php php php php php php}

php php php php php php php php ifphp php(strtolowerphp(php$varphp)php php=php=php php'hasuniqueidphp'php)php php{
php php php php php php php php php php php php php$idphp php=php nullphp;
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_protocolphp-php>uniqueidphp(php1php)php;
php php php php php php php php php php php php php}php catchphp(Zendphp_Mailphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php ignoringphp error
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_hasphp[php'uniqueidphp'php]php php=php php$idphp php?php truephp php:php falsephp;
php php php php php php php php php php php php returnphp php$thisphp-php>php_hasphp[php'uniqueidphp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}
php}
