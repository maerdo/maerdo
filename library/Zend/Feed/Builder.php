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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Builderphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Builderphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Builderphp_Header
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Headerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Builderphp_Entry
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Entryphp.phpphp'php;


php/php*php*
php php*php Aphp simplephp implementationphp ofphp Zendphp_Feedphp_Builderphp_Interfacephp.
php php*
php php*php Usersphp arephp encouragedphp tophp makephp theirphp ownphp classesphp tophp implementphp Zendphp_Feedphp_Builderphp_Interface
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Builderphp implementsphp Zendphp_Feedphp_Builderphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Thephp dataphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@varphp php$php_dataphp array
php php php php php php*php/
php php php php privatephp php$php_dataphp;

php php php php php/php*php*
php php php php php php*php Headerphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@varphp php$php_headerphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php privatephp php$php_headerphp;

php php php php php/php*php*
php php php php php php*php Listphp ofphp thephp entriesphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@varphp php$php_entriesphp array
php php php php php php*php/
php php php php privatephp php$php_entriesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructorphp.php Thephp php$dataphp arrayphp mustphp conformphp tophp thephp followingphp formatphp:
php php php php php php*php php<codephp>
php php php php php php*php php arrayphp(
php php php php php php*php php php'titlephp'php php php php php php php php=php>php php'titlephp ofphp thephp feedphp'php,php php/php/required
php php php php php php*php php php'linkphp'php php php php php php php php php=php>php php'canonicalphp urlphp tophp thephp feedphp'php,php php/php/required
php php php php php php*php php php'lastUpdatephp'php php php=php>php php'timestampphp ofphp thephp updatephp datephp'php,php php/php/php optional
php php php php php php*php php php'publishedphp'php php php php=php>php php'timestampphp ofphp thephp publicationphp datephp'php,php php/php/optional
php php php php php php*php php php'charsetphp'php php php php php php=php>php php'charsetphp'php,php php/php/php required
php php php php php php*php php php'descriptionphp'php php=php>php php'shortphp descriptionphp ofphp thephp feedphp'php,php php/php/optional
php php php php php php*php php php'authorphp'php php php php php php php=php>php php'authorphp/publisherphp ofphp thephp feedphp'php,php php/php/optional
php php php php php php*php php php'emailphp'php php php php php php php php=php>php php'emailphp ofphp thephp authorphp'php,php php/php/optional
php php php php php php*php php php'webmasterphp'php php php php=php>php php'emailphp addressphp forphp personphp responsiblephp forphp technicalphp issuesphp'php php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'copyrightphp'php php php php=php>php php'copyrightphp noticephp'php,php php/php/optional
php php php php php php*php php php'imagephp'php php php php php php php php=php>php php'urlphp tophp imagephp'php,php php/php/optional
php php php php php php*php php php'generatorphp'php php php php=php>php php'generatorphp'php,php php/php/php optional
php php php php php php*php php php'languagephp'php php php php php=php>php php'languagephp thephp feedphp isphp writtenphp inphp'php,php php/php/php optional
php php php php php php*php php php'ttlphp'php php php php php php php php php php=php>php php'howphp longphp inphp minutesphp aphp feedphp canphp bephp cachedphp beforephp refreshingphp'php,php php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'ratingphp'php php php php php php php=php>php php'Thephp PICSphp ratingphp forphp thephp channelphp.php'php,php php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'cloudphp'php php php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'domainphp'php php php php php php php php php php php php php=php>php php'domainphp ofphp thephp cloudphp,php ephp.gphp.php rpcphp.sysphp.comphp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'portphp'php php php php php php php php php php php php php php php=php>php php'portphp tophp connectphp tophp'php php/php/php optionalphp,php defaultphp tophp php8php0
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'pathphp'php php php php php php php php php php php php php php php=php>php php'pathphp ofphp thephp cloudphp,php ephp.gphp.php php/RPCphp2php php/php/required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'registerProcedurephp'php php=php>php php'procedurephp tophp callphp,php ephp.gphp.php myCloudphp.rssPleaseNotifyphp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'protocolphp'php php php php php php php php php php php=php>php php'protocolphp tophp usephp,php ephp.gphp.php soapphp orphp xmlphp-rpcphp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php,php aphp cloudphp tophp bephp notifiedphp ofphp updatesphp php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'textInputphp'php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'titlephp'php php php php php php php php=php>php php'thephp labelphp ofphp thephp Submitphp buttonphp inphp thephp textphp inputphp areaphp'php php/php/php requiredphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'descriptionphp'php php=php>php php'explainsphp thephp textphp inputphp areaphp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php php=php>php php'thephp namephp ofphp thephp textphp objectphp inphp thephp textphp inputphp areaphp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'linkphp'php php php php php php php php php=php>php php'thephp URLphp ofphp thephp CGIphp scriptphp thatphp processesphp textphp inputphp requestsphp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php php/php/php aphp textphp inputphp boxphp thatphp canphp bephp displayedphp withphp thephp feedphp php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'skipHoursphp'php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'hourphp inphp php2php4php formatphp'php,php php/php/php ephp.gphp php1php3php php(php1pmphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php/php/php upphp tophp php2php4php rowsphp whosephp valuephp isphp aphp numberphp betweenphp php0php andphp php2php3
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php php/php/php Hintphp tellingphp aggregatorsphp whichphp hoursphp theyphp canphp skipphp php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'skipDaysphp php'php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'aphp dayphp tophp skipphp'php,php php/php/php ephp.gphp Monday
php php php php php php*php php php php php php php php php php php php php php php php php php php php php/php/php upphp tophp php7php rowsphp whosephp valuephp isphp aphp Mondayphp,php Tuesdayphp,php Wednesdayphp,php Thursdayphp,php Fridayphp,php Saturdayphp orphp Sunday
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php php/php/php Hintphp tellingphp aggregatorsphp whichphp daysphp theyphp canphp skipphp php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'itunesphp'php php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'authorphp'php php php php php php php php=php>php php'Artistphp columnphp'php php/php/php optionalphp,php defaultphp tophp thephp mainphp authorphp value
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'ownerphp'php php php php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'namephp ofphp thephp ownerphp'php php/php/php optionalphp,php defaultphp tophp mainphp authorphp value
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'emailphp'php php=php>php php'emailphp ofphp thephp ownerphp'php php/php/php optionalphp,php defaultphp tophp mainphp emailphp value
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php/php/php Ownerphp ofphp thephp podcastphp php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'imagephp'php php php php php php php php php=php>php php'albumphp/podcastphp artphp'php php/php/php optionalphp,php defaultphp tophp thephp mainphp imagephp value
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'subtitlephp'php php php php php php=php>php php'shortphp descriptionphp'php php/php/php optionalphp,php defaultphp tophp thephp mainphp descriptionphp value
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'summaryphp'php php php php php php php=php>php php'longerphp descriptionphp'php php/php/php optionalphp,php defaultphp tophp thephp mainphp descriptionphp value
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'blockphp'php php php php php php php php php=php>php php'Preventphp anphp episodephp fromphp appearingphp php(yesphp|nophp)php'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'categoryphp'php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php'mainphp'php php=php>php php'mainphp categoryphp'php,php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'subphp'php php php=php>php php'subphp categoryphp'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php upphp tophp php3php rows
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php/php/php php'Categoryphp columnphp andphp inphp iTunesphp Musicphp Storephp Browsephp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'explicitphp'php php php php php php=php>php php'parentalphp advisoryphp graphicphp php(yesphp|nophp|cleanphp)php'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'keywordsphp'php php php php php php=php>php php'aphp commaphp separatedphp listphp ofphp php1php2php keywordsphp maximumphp'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'newphp-feedphp-urlphp'php php=php>php php'usedphp tophp informphp iTunesphp ofphp newphp feedphp URLphp locationphp'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php)php php/php/php Itunesphp extensionphp dataphp php/php/php optionalphp,php ignoredphp ifphp atomphp isphp used
php php php php php php*php php php'entriesphp'php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'titlephp'php php php php php php php php php=php>php php'titlephp ofphp thephp feedphp entryphp'php,php php/php/required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'linkphp'php php php php php php php php php php=php>php php'urlphp tophp aphp feedphp entryphp'php,php php/php/required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'descriptionphp'php php php=php>php php'shortphp versionphp ofphp aphp feedphp entryphp'php,php php/php/php onlyphp textphp,php nophp htmlphp,php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'guidphp'php php php php php php php php php php=php>php php'idphp ofphp thephp articlephp,php ifphp notphp givenphp linkphp valuephp willphp usedphp'php,php php/php/optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'contentphp'php php php php php php php=php>php php'longphp versionphp'php,php php/php/php canphp containphp htmlphp,php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'lastUpdatephp'php php php php=php>php php'timestampphp ofphp thephp publicationphp datephp'php,php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'commentsphp'php php php php php php=php>php php'commentsphp pagephp ofphp thephp feedphp entryphp'php,php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'commentRssphp'php php php php=php>php php'thephp feedphp urlphp ofphp thephp associatedphp commentsphp'php,php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'sourcephp'php php php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'titlephp'php php=php>php php'titlephp ofphp thephp originalphp sourcephp'php php/php/php requiredphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'urlphp'php php=php>php php'urlphp ofphp thephp originalphp sourcephp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php/php/php originalphp sourcephp ofphp thephp feedphp entryphp php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'categoryphp'php php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'termphp'php php=php>php php'firstphp categoryphp labelphp'php php/php/php requiredphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'schemephp'php php=php>php php'urlphp thatphp identifiesphp aphp categorizationphp schemephp'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/dataphp forphp thephp secondphp categoryphp andphp sophp on
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php/php/php listphp ofphp thephp attachedphp categoriesphp php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php'enclosurephp'php php php php php=php>php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'urlphp'php php=php>php php'urlphp ofphp thephp linkedphp enclosurephp'php php/php/php required
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php php'mimephp typephp ofphp thephp enclosurephp'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'lengthphp'php php=php>php php'lengthphp ofphp thephp linkedphp contentphp inphp octetsphp'php php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/dataphp forphp thephp secondphp enclosurephp andphp sophp on
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php php/php/php listphp ofphp thephp enclosuresphp ofphp thephp feedphp entryphp php/php/php optional
php php php php php php*php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php*php php php php php php php php php php php php php php php php php php php arrayphp(
php php php php php php*php php php php php php php php php php php php php php php php php php php php/php/dataphp forphp thephp secondphp entryphp andphp sophp on
php php php php php php*php php php php php php php php php php php php php php php php php php php php)
php php php php php php*php php php php php php php php php php php php php php php php php php)
php php php php php php*php php)php;
php php php php php php*php <php/codephp>
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php php$dataphp;
php php php php php php php php php$thisphp-php>php_createHeaderphp(php$dataphp)php;
php php php php php php php php ifphp php(issetphp(php$dataphp[php'entriesphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_createEntriesphp(php$dataphp[php'entriesphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp instancephp ofphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php describingphp thephp headerphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp ofphp Zendphp_Feedphp_Builderphp_Entryphp instances
php php php php php php*php describingphp thephp entriesphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@returnphp arrayphp ofphp Zendphp_Feedphp_Builderphp_Entry
php php php php php php*php/
php php php php publicphp functionphp getEntriesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_entriesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp thephp Zendphp_Feedphp_Builderphp_Headerphp instance
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_createHeaderphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php php$mandatoriesphp php=php arrayphp(php'titlephp'php,php php'linkphp'php,php php'charsetphp'php)php;
php php php php php php php php foreachphp php(php$mandatoriesphp asphp php$mandatoryphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php$mandatoryphp]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"php$mandatoryphp keyphp isphp missingphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_headerphp php=php newphp Zendphp_Feedphp_Builderphp_Headerphp(php$dataphp[php'titlephp'php]php,php php$dataphp[php'linkphp'php]php,php php$dataphp[php'charsetphp'php]php)php;
php php php php php php php php ifphp php(issetphp(php$dataphp[php'lastUpdatephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setLastUpdatephp(php$dataphp[php'lastUpdatephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'publishedphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setPublishedDatephp(php$dataphp[php'publishedphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'descriptionphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setDescriptionphp(php$dataphp[php'descriptionphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'authorphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setAuthorphp(php$dataphp[php'authorphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setEmailphp(php$dataphp[php'emailphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'webmasterphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setWebmasterphp(php$dataphp[php'webmasterphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'copyrightphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setCopyrightphp(php$dataphp[php'copyrightphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'imagephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setImagephp(php$dataphp[php'imagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'generatorphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setGeneratorphp(php$dataphp[php'generatorphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'languagephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setLanguagephp(php$dataphp[php'languagephp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'ttlphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setTtlphp(php$dataphp[php'ttlphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'ratingphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setRatingphp(php$dataphp[php'ratingphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'cloudphp'php]php)php)php php{
php php php php php php php php php php php php php$mandatoriesphp php=php arrayphp(php'domainphp'php,php php'pathphp'php,php php'registerProcedurephp'php,php php'protocolphp'php)php;
php php php php php php php php php php php php foreachphp php(php$mandatoriesphp asphp php$mandatoryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php'cloudphp'php]php[php$mandatoryphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp definephp php$mandatoryphp propertyphp ofphp yourphp cloudphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$uriphp_strphp php=php php'httpphp:php/php/php'php php.php php$dataphp[php'cloudphp'php]php[php'domainphp'php]php php.php php$dataphp[php'cloudphp'php]php[php'pathphp'php]php;
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setCloudphp(php$uriphp_strphp,php php$dataphp[php'cloudphp'php]php[php'registerProcedurephp'php]php,php php$dataphp[php'cloudphp'php]php[php'protocolphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'textInputphp'php]php)php)php php{
php php php php php php php php php php php php php$mandatoriesphp php=php arrayphp(php'titlephp'php,php php'descriptionphp'php,php php'namephp'php,php php'linkphp'php)php;
php php php php php php php php php php php php foreachphp php(php$mandatoriesphp asphp php$mandatoryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$dataphp[php'textInputphp'php]php[php$mandatoryphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp definephp php$mandatoryphp propertyphp ofphp yourphp textInputphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setTextInputphp(php$dataphp[php'textInputphp'php]php[php'titlephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php'textInputphp'php]php[php'descriptionphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php'textInputphp'php]php[php'namephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataphp[php'textInputphp'php]php[php'linkphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'skipHoursphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setSkipHoursphp(php$dataphp[php'skipHoursphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'skipDaysphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setSkipDaysphp(php$dataphp[php'skipDaysphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php)php)php php{
php php php php php php php php php php php php php$itunesphp php=php newphp Zendphp_Feedphp_Builderphp_Headerphp_Itunesphp(php$dataphp[php'itunesphp'php]php[php'categoryphp'php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'authorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setAuthorphp(php$dataphp[php'itunesphp'php]php[php'authorphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'ownerphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$namephp php=php issetphp(php$dataphp[php'itunesphp'php]php[php'ownerphp'php]php[php'namephp'php]php)php php?php php$dataphp[php'itunesphp'php]php[php'ownerphp'php]php[php'namephp'php]php php:php php'php'php;
php php php php php php php php php php php php php php php php php$emailphp php=php issetphp(php$dataphp[php'itunesphp'php]php[php'ownerphp'php]php[php'emailphp'php]php)php php?php php$dataphp[php'itunesphp'php]php[php'ownerphp'php]php[php'emailphp'php]php php:php php'php'php;
php php php php php php php php php php php php php php php php php$itunesphp-php>setOwnerphp(php$namephp,php php$emailphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'imagephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setImagephp(php$dataphp[php'itunesphp'php]php[php'imagephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'subtitlephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setSubtitlephp(php$dataphp[php'itunesphp'php]php[php'subtitlephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'summaryphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setSummaryphp(php$dataphp[php'itunesphp'php]php[php'summaryphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'blockphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setBlockphp(php$dataphp[php'itunesphp'php]php[php'blockphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'explicitphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setExplicitphp(php$dataphp[php'itunesphp'php]php[php'explicitphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'keywordsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setKeywordsphp(php$dataphp[php'itunesphp'php]php[php'keywordsphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataphp[php'itunesphp'php]php[php'newphp-feedphp-urlphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$itunesphp-php>setNewFeedUrlphp(php$dataphp[php'itunesphp'php]php[php'newphp-feedphp-urlphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_headerphp-php>setITunesphp(php$itunesphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp thephp arrayphp ofphp articlephp entries
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$data
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_createEntriesphp(arrayphp php$dataphp)
php php php php php{
php php php php php php php php foreachphp php(php$dataphp asphp php$rowphp)php php{
php php php php php php php php php php php php php$mandatoriesphp php=php arrayphp(php'titlephp'php,php php'linkphp'php,php php'descriptionphp'php)php;
php php php php php php php php php php php php foreachphp php(php$mandatoriesphp asphp php$mandatoryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$rowphp[php$mandatoryphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"php$mandatoryphp keyphp isphp missingphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$entryphp php=php newphp Zendphp_Feedphp_Builderphp_Entryphp(php$rowphp[php'titlephp'php]php,php php$rowphp[php'linkphp'php]php,php php$rowphp[php'descriptionphp'php]php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'authorphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setAuthorphp(php$rowphp[php'authorphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'guidphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setIdphp(php$rowphp[php'guidphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'contentphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setContentphp(php$rowphp[php'contentphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'lastUpdatephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setLastUpdatephp(php$rowphp[php'lastUpdatephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'commentsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setCommentsUrlphp(php$rowphp[php'commentsphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'commentRssphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setCommentsRssUrlphp(php$rowphp[php'commentRssphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'sourcephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$mandatoriesphp php=php arrayphp(php'titlephp'php,php php'urlphp'php)php;
php php php php php php php php php php php php php php php php foreachphp php(php$mandatoriesphp asphp php$mandatoryphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$rowphp[php'sourcephp'php]php[php$mandatoryphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"php$mandatoryphp keyphp ofphp sourcephp propertyphp isphp missingphp"php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$entryphp-php>setSourcephp(php$rowphp[php'sourcephp'php]php[php'titlephp'php]php,php php$rowphp[php'sourcephp'php]php[php'urlphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'categoryphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setCategoriesphp(php$rowphp[php'categoryphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$rowphp[php'enclosurephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$entryphp-php>setEnclosuresphp(php$rowphp[php'enclosurephp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$entryphp;
php php php php php php php php php}
php php php php php}
php}
