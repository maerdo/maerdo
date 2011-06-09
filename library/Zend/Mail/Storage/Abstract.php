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
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@subpackagephp Storage
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Mailphp_Storagephp_Abstractphp implementsphp Countablephp,php ArrayAccessphp,php SeekableIterator
php{
php php php php php/php*php*
php php php php php php*php classphp capabilitiesphp withphp defaultphp values
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_hasphp php=php arrayphp(php'uniqueidphp'php php php=php>php truephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'deletephp'php php php php php=php>php falsephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'createphp'php php php php php=php>php falsephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'topphp'php php php php php php php php=php>php falsephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'fetchPartphp'php php=php>php truephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'flagsphp'php php php php php php=php>php falsephp)php;

php php php php php/php*php*
php php php php php php*php currentphp iterationphp position
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_iterationPosphp php=php php0php;

php php php php php/php*php*
php php php php php php*php maximumphp iterationphp positionphp php(php=php messagephp countphp)
php php php php php php*php php@varphp nullphp|int
php php php php php php*php/
php php php php protectedphp php$php_iterationMaxphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php usedphp messagephp classphp,php changephp itphp inphp anphp extenedphp classphp tophp extendphp thephp returnedphp messagephp class
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_messageClassphp php=php php'Zendphp_Mailphp_Messagephp'php;

php php php php php/php*php*
php php php php php php*php Getterphp forphp hasphp-propertiesphp.php Thephp standardphp hasphp properties
php php php php php php*php arephp:php hasFolderphp,php hasUniqueidphp,php hasDeletephp,php hasCreatephp,php hasTop
php php php php php php*
php php php php php php*php Thephp validphp valuesphp forphp thephp hasphp-propertiesphp arephp:
php php php php php php*php php php php-php truephp ifphp aphp featurephp isphp supported
php php php php php php*php php php php-php falsephp ifphp aphp featurephp isphp notphp supported
php php php php php php*php php php php-php nullphp isphp itphp'sphp notphp yetphp knownphp orphp itphp canphp'tphp bephp knowphp ifphp aphp featurephp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp php propertyphp name
php php php php php php*php php@returnphp boolphp php php php php php php php php supportedphp orphp not
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$varphp)
php php php php php{
php php php php php php php php ifphp php(strposphp(php$varphp,php php'hasphp'php)php php=php=php=php php0php)php php{
php php php php php php php php php php php php php$varphp php=php strtolowerphp(substrphp(php$varphp,php php3php)php)php;
php php php php php php php php php php php php returnphp issetphp(php$thisphp-php>php_hasphp[php$varphp]php)php php?php php$thisphp-php>php_hasphp[php$varphp]php php:php nullphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php$varphp php.php php'php notphp foundphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp aphp fullphp listphp ofphp featuresphp supportedphp byphp thephp specificphp mailphp libphp andphp thephp server
php php php php php php*
php php php php php php*php php@returnphp arrayphp listphp ofphp featuresphp asphp arrayphp(featurenamephp php=php>php truephp|falsephp[php|nullphp]php)
php php php php php php*php/
php php php php publicphp functionphp getCapabilitiesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_hasphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Countphp messagesphp messagesphp inphp currentphp boxphp/folder
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp messages
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp countMessagesphp(php)php;


php php php php php/php*php*
php php php php php php*php Getphp aphp listphp ofphp messagesphp withphp numberphp andphp size
php php php php php php*
php php php php php php*php php@paramphp php intphp php$idphp php numberphp ofphp message
php php php php php php*php php@returnphp intphp|arrayphp sizephp ofphp givenphp messagephp ofphp listphp withphp allphp messagesphp asphp arrayphp(numphp php=php>php sizephp)
php php php php php php*php/
php php php php abstractphp publicphp functionphp getSizephp(php$idphp php=php php0php)php;


php php php php php/php*php*
php php php php php php*php Getphp aphp messagephp withphp headersphp andphp body
php php php php php php*
php php php php php php*php php@paramphp php php$idphp intphp numberphp ofphp message
php php php php php php*php php@returnphp Zendphp_Mailphp_Message
php php php php php php*php/
php php php php abstractphp publicphp functionphp getMessagephp(php$idphp)php;


php php php php php/php*php*
php php php php php php*php Getphp rawphp headerphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php php php php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp php php php php pathphp tophp partphp orphp nullphp forphp messsagephp header
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$topLinesphp includephp thisphp manyphp linesphp withphp headerphp php(afterphp anphp emptyphp linephp)
php php php php php php*php php@returnphp stringphp rawphp header
php php php php php php*php/
php php php php abstractphp publicphp functionphp getRawHeaderphp(php$idphp,php php$partphp php=php nullphp,php php$topLinesphp php=php php0php)php;

php php php php php/php*php*
php php php php php php*php Getphp rawphp contentphp ofphp messagephp orphp part
php php php php php php*
php php php php php php*php php@paramphp php intphp php php php php php php php php php php php php php php php$idphp php php numberphp ofphp message
php php php php php php*php php@paramphp php nullphp|arrayphp|stringphp php$partphp pathphp tophp partphp orphp nullphp forphp messsagephp content
php php php php php php*php php@returnphp stringphp rawphp content
php php php php php php*php/
php php php php abstractphp publicphp functionphp getRawContentphp(php$idphp,php php$partphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Createphp instancephp withphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$paramsphp mailphp readerphp specificphp parameters
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp php_php_constructphp(php$paramsphp)php;


php php php php php/php*php*
php php php php php php*php Destructorphp callsphp closephp(php)php andphp thereforephp closesphp thephp resourcephp.
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>closephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Closephp resourcephp forphp mailphp libphp.php Ifphp youphp needphp tophp controlphp,php whenphp thephp resource
php php php php php php*php isphp closedphp.php Otherwisephp thephp destructorphp wouldphp callphp thisphp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php abstractphp publicphp functionphp closephp(php)php;


php php php php php/php*php*
php php php php php php*php Keepphp thephp resourcephp alivephp.
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php abstractphp publicphp functionphp noopphp(php)php;

php php php php php/php*php*
php php php php php php*php deletephp aphp messagephp fromphp currentphp boxphp/folder
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php abstractphp publicphp functionphp removeMessagephp(php$idphp)php;

php php php php php/php*php*
php php php php php php*php getphp uniquephp idphp forphp onephp orphp allphp messages
php php php php php php*
php php php php php php*php ifphp storagephp doesphp notphp supportphp uniquephp idsphp itphp'sphp thephp samephp asphp thephp messagephp number
php php php php php php*
php php php php php php*php php@paramphp intphp|nullphp php$idphp messagephp number
php php php php php php*php php@returnphp arrayphp|stringphp messagephp numberphp forphp givenphp messagephp orphp allphp messagesphp asphp array
php php php php php php*php php@throwsphp Zendphp_Mailphp_Storagephp_Exception
php php php php php php*php/
php php php php abstractphp publicphp functionphp getUniqueIdphp(php$idphp php=php nullphp)php;

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
php php php php abstractphp publicphp functionphp getNumberByUniqueIdphp(php$idphp)php;

php php php php php/php/php interfacephp implementationsphp follows

php php php php php/php*php*
php php php php php php*php Countablephp:php:countphp(php)
php php php php php php*
php php php php php php*php php@returnphp php php int
php php php php php php*php/
php php php php php publicphp functionphp countphp(php)
php php php php php php{
php php php php php php php php returnphp php$thisphp-php>countMessagesphp(php)php;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php ArrayAccessphp:php:offsetExistsphp(php)
php php php php php php php*
php php php php php php php*php php@paramphp php php php intphp php php php php php$id
php php php php php php php*php php@returnphp php php boolean
php php php php php php php*php/
php php php php php publicphp functionphp offsetExistsphp(php$idphp)
php php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getMessagephp(php$idphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp(Zendphp_Mailphp_Storagephp_Exceptionphp php$ephp)php php{php}

php php php php php php php php returnphp falsephp;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php ArrayAccessphp:php:offsetGetphp(php)
php php php php php php php*
php php php php php php php*php php@paramphp php php php intphp php$id
php php php php php php php*php php@returnphp php php Zendphp_Mailphp_Messagephp messagephp object
php php php php php php php*php/
php php php php php publicphp functionphp offsetGetphp(php$idphp)
php php php php php php{
php php php php php php php php returnphp php$thisphp-php>getMessagephp(php$idphp)php;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php ArrayAccessphp:php:offsetSetphp(php)
php php php php php php php*
php php php php php php php*php php@paramphp php php php idphp php php php php php$id
php php php php php php php*php php@paramphp php php php mixedphp php php$value
php php php php php php php*php php@throwsphp php php Zendphp_Mailphp_Storagephp_Exception
php php php php php php php*php php@returnphp php php void
php php php php php php php*php/
php php php php php publicphp functionphp offsetSetphp(php$idphp,php php$valuephp)
php php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Storagephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Mailphp_Storagephp_Exceptionphp(php'cannotphp writephp mailphp messagesphp viaphp arrayphp accessphp'php)php;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php ArrayAccessphp:php:offsetUnsetphp(php)
php php php php php php php*
php php php php php php php*php php@paramphp php php php intphp php php php$id
php php php php php php php*php php@returnphp php php booleanphp success
php php php php php php php*php/
php php php php php publicphp functionphp offsetUnsetphp(php$idphp)
php php php php php php{
php php php php php php php php returnphp php$thisphp-php>removeMessagephp(php$idphp)php;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php Iteratorphp:php:rewindphp(php)
php php php php php php php*
php php php php php php php*php Rewindphp alwaysphp getsphp thephp newphp countphp fromphp thephp storagephp.php Thusphp ifphp youphp use
php php php php php php php*php thephp interfacesphp andphp yourphp scriptsphp takephp longphp youphp shouldphp usephp resetphp(php)
php php php php php php php*php fromphp timephp tophp timephp.
php php php php php php php*
php php php php php php php*php php@returnphp php php void
php php php php php php php*php/
php php php php php publicphp functionphp rewindphp(php)
php php php php php php{
php php php php php php php php php$thisphp-php>php_iterationMaxphp php=php php$thisphp-php>countMessagesphp(php)php;
php php php php php php php php php$thisphp-php>php_iterationPosphp php=php php1php;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php Iteratorphp:php:currentphp(php)
php php php php php php php*
php php php php php php php*php php@returnphp php php Zendphp_Mailphp_Messagephp currentphp message
php php php php php php php*php/
php php php php php publicphp functionphp currentphp(php)
php php php php php php{
php php php php php php php php returnphp php$thisphp-php>getMessagephp(php$thisphp-php>php_iterationPosphp)php;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php Iteratorphp:php:keyphp(php)
php php php php php php php*
php php php php php php php*php php@returnphp php php intphp idphp ofphp currentphp position
php php php php php php php*php/
php php php php php publicphp functionphp keyphp(php)
php php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iterationPosphp;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php Iteratorphp:php:nextphp(php)
php php php php php php php*
php php php php php php php*php php@returnphp php php void
php php php php php php php*php/
php php php php php publicphp functionphp nextphp(php)
php php php php php php{
php php php php php php php php php+php+php$thisphp-php>php_iterationPosphp;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php Iteratorphp:php:validphp(php)
php php php php php php php*
php php php php php php php*php php@returnphp php php boolean
php php php php php php php*php/
php php php php php publicphp functionphp validphp(php)
php php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_iterationMaxphp php=php=php=php nullphp)php php{
php php php php php php php php php php php$thisphp-php>php_iterationMaxphp php=php php$thisphp-php>countMessagesphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_iterationPosphp php&php&php php$thisphp-php>php_iterationPosphp <php=php php$thisphp-php>php_iterationMaxphp;
php php php php php php}


php php php php php php/php*php*
php php php php php php php*php SeekableIteratorphp:php:seekphp(php)
php php php php php php php*
php php php php php php php*php php@paramphp php intphp php$pos
php php php php php php php*php php@returnphp void
php php php php php php php*php php@throwsphp OutOfBoundsException
php php php php php php php*php/
php php php php php publicphp functionphp seekphp(php$posphp)
php php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_iterationMaxphp php=php=php=php nullphp)php php{
php php php php php php php php php php php$thisphp-php>php_iterationMaxphp php=php php$thisphp-php>countMessagesphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$posphp php>php php$thisphp-php>php_iterationMaxphp)php php{
php php php php php php php php php php php php throwphp newphp OutOfBoundsExceptionphp(php'thisphp positionphp doesphp notphp existphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_iterationPosphp php=php php$posphp;
php php php php php php}

php}
