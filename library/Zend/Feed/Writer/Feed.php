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
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writer
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Entry
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Entryphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Deleted
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Deletedphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Atom
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Atomphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_Rss
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Rendererphp/Feedphp/Rssphp.phpphp'php;

requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Feedphp/FeedAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Feedphp extendsphp Zendphp_Feedphp_Writerphp_Feedphp_FeedAbstract
implementsphp Iteratorphp,php Countable
php{

php php php php php/php*php*
php php php php php php*php Containsphp allphp entryphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_entriesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Aphp pointerphp forphp thephp iteratorphp tophp keepphp trackphp ofphp thephp entriesphp array
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_entriesKeyphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Zendphp_Feedphp_Writerphp_Entryphp dataphp containerphp forphp usephp.php Thisphp isphp NOT
php php php php php php*php addedphp tophp thephp currentphp feedphp automaticallyphp,php butphp isphp necessaryphp tophp createphp a
php php php php php php*php containerphp withphp somephp initialphp valuesphp presetphp basedphp onphp thephp currentphp feedphp dataphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Entry
php php php php php php*php/
php php php php publicphp functionphp createEntryphp(php)
php php php php php{
php php php php php php php php php$entryphp php=php newphp Zendphp_Feedphp_Writerphp_Entryphp;
php php php php php php php php ifphp php(php$thisphp-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php$entryphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$entryphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php returnphp php$entryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp aphp Zendphp_Feedphp_Writerphp_Deletedphp objectphp representingphp aphp newphp entryphp tombstone
php php php php php php*php tophp thephp feedphp dataphp containerphp'sphp internalphp groupphp ofphp entriesphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Feedphp_Writerphp_Deletedphp php$entry
php php php php php php*php/
php php php php publicphp functionphp addTombstonephp(Zendphp_Feedphp_Writerphp_Deletedphp php$deletedphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$deletedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createsphp aphp newphp Zendphp_Feedphp_Writerphp_Deletedphp dataphp containerphp forphp usephp.php Thisphp isphp NOT
php php php php php php*php addedphp tophp thephp currentphp feedphp automaticallyphp,php butphp isphp necessaryphp tophp createphp a
php php php php php php*php containerphp withphp somephp initialphp valuesphp presetphp basedphp onphp thephp currentphp feedphp dataphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Writerphp_Deleted
php php php php php php*php/
php php php php publicphp functionphp createTombstonephp(php)
php php php php php{
php php php php php php php php php$deletedphp php=php newphp Zendphp_Feedphp_Writerphp_Deletedphp;
php php php php php php php php ifphp php(php$thisphp-php>getEncodingphp(php)php)php php{
php php php php php php php php php php php php php$deletedphp-php>setEncodingphp(php$thisphp-php>getEncodingphp(php)php)php;
php php php php php php php php php}
php php php php php php php php php$deletedphp-php>setTypephp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php returnphp php$deletedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendsphp aphp Zendphp_Feedphp_Writerphp_Entryphp objectphp representingphp aphp newphp entryphp/item
php php php php php php*php thephp feedphp dataphp containerphp'sphp internalphp groupphp ofphp entriesphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Feedphp_Writerphp_Entryphp php$entry
php php php php php php*php/
php php php php publicphp functionphp addEntryphp(Zendphp_Feedphp_Writerphp_Entryphp php$entryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$entryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp aphp specificphp indexedphp entryphp fromphp thephp internalphp queuephp.php Entriesphp mustphp be
php php php php php php*php addedphp tophp aphp feedphp containerphp inphp orderphp tophp bephp indexedphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$index
php php php php php php*php/
php php php php publicphp functionphp removeEntryphp(php$indexphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_entriesphp[php$indexphp]php)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_entriesphp[php$indexphp]php)php;
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Undefinedphp indexphp:php php'php php.php php$indexphp php.php php'php.php Entryphp doesphp notphp existphp.php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp specificphp indexedphp entryphp fromphp thephp internalphp queuephp.php Entriesphp mustphp be
php php php php php php*php addedphp tophp aphp feedphp containerphp inphp orderphp tophp bephp indexedphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$index
php php php php php php*php/
php php php php publicphp functionphp getEntryphp(php$indexphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_entriesphp[php$indexphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_entriesphp[php$indexphp]php;
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Undefinedphp indexphp:php php'php php.php php$indexphp php.php php'php.php Entryphp doesphp notphp existphp.php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Ordersphp allphp indexedphp entriesphp byphp datephp,php thusphp offeringphp datephp orderedphp readable
php php php php php php*php contentphp wherephp aphp parserphp php(orphp Homophp Sapienphp)php ignoresphp thephp genericphp rulephp that
php php php php php php*php XMLphp elementphp orderphp isphp irrelevantphp andphp hasphp nophp intrinsicphp meaningphp.
php php php php php php*
php php php php php php*php Usingphp thisphp methodphp willphp alterphp thephp originalphp indexationphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp orderByDatephp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Couldphp dophp withphp somephp improvementphp forphp performancephp perhaps
php php php php php php php php php php*php/
php php php php php php php php php$timestampphp php=php timephp(php)php;
php php php php php php php php php$entriesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$thisphp-php>php_entriesphp asphp php$entryphp)php php{
php php php php php php php php php php php php ifphp php(php$entryphp-php>getDateModifiedphp(php)php)php php{
php php php php php php php php php php php php php php php php php$timestampphp php=php php(intphp)php php$entryphp-php>getDateModifiedphp(php)php-php>getphp(Zendphp_Datephp:php:TIMESTAMPphp)php;
php php php php php php php php php php php php php}php elseifphp php(php$entryphp-php>getDateCreatedphp(php)php)php php{
php php php php php php php php php php php php php php php php php$timestampphp php=php php(intphp)php php$entryphp-php>getDateCreatedphp(php)php-php>getphp(Zendphp_Datephp:php:TIMESTAMPphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$entriesphp[php$timestampphp]php php=php php$entryphp;
php php php php php php php php php}
php php php php php php php php krsortphp(php$entriesphp,php SORTphp_NUMERICphp)php;
php php php php php php php php php$thisphp-php>php_entriesphp php=php arrayphp_valuesphp(php$entriesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp numberphp ofphp feedphp entriesphp.
php php php php php php*php Requiredphp byphp thephp Iteratorphp interfacephp.
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_entriesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp entry
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Readerphp_Entryphp_Interface
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_entriesphp[php$thisphp-php>keyphp(php)php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp feedphp key
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_entriesKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp thephp feedphp pointerphp forward
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php+php+php$thisphp-php>php_entriesKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resetphp thephp pointerphp inphp thephp feedphp object
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_entriesKeyphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp tophp seephp ifphp thephp iteratorphp isphp stillphp valid
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp php0php <php=php php$thisphp-php>php_entriesKeyphp php&php&php php$thisphp-php>php_entriesKeyphp <php php$thisphp-php>countphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Attemptphp tophp buildphp andphp returnphp thephp feedphp resultingphp fromphp thephp dataphp set
php php php php php php*
php php php php php php*php php@paramphp php$typephp Thephp feedphp typephp php"rssphp"php orphp php"atomphp"php tophp exportphp as
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp exportphp(php$typephp,php php$ignoreExceptionsphp php=php falsephp)
php php php php php{
php php php php php php php php php$thisphp-php>setTypephp(strtolowerphp(php$typephp)php)php;
php php php php php php php php php$typephp php=php ucfirstphp(php$thisphp-php>getTypephp(php)php)php;
php php php php php php php php ifphp php(php$typephp php!php=php=php php'Rssphp'php php&php&php php$typephp php!php=php=php php'Atomphp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Invalidphp feedphp typephp specifiedphp:php php'php php.php php$typephp php.php php'php.php'
php php php php php php php php php php php php php.php php'php Shouldphp bephp onephp ofphp php"rssphp"php orphp php"atomphp"php.php'php)php;
php php php php php php php php php}
php php php php php php php php php$renderClassphp php=php php'Zendphp_Feedphp_Writerphp_Rendererphp_Feedphp_php'php php.php php$typephp;
php php php php php php php php php$rendererphp php=php newphp php$renderClassphp(php$thisphp)php;
php php php php php php php php ifphp php(php$ignoreExceptionsphp)php php{
php php php php php php php php php php php php php$rendererphp-php>ignoreExceptionsphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$rendererphp-php>renderphp(php)php-php>saveXmlphp(php)php;
php php php php php}

php}
