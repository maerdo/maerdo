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
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Pubsubhubbubphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Version
php php*php/
requirephp_oncephp php'Zendphp/Versionphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Pubsubhubbub
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Pubsubhubbub
php{
php php php php php/php*php*
php php php php php php*php Verificationphp Modes
php php php php php php*php/
php php php php constphp VERIFICATIONphp_MODEphp_SYNCphp php php=php php'syncphp'php;
php php php php constphp VERIFICATIONphp_MODEphp_ASYNCphp php=php php'asyncphp'php;

php php php php php/php*php*
php php php php php php*php Subscriptionphp States
php php php php php php*php/
php php php php constphp SUBSCRIPTIONphp_VERIFIEDphp php php php php=php php'verifiedphp'php;
php php php php constphp SUBSCRIPTIONphp_NOTVERIFIEDphp php=php php'notphp_verifiedphp'php;
php php php php constphp SUBSCRIPTIONphp_TODELETEphp php php php php=php php'tophp_deletephp'php;

php php php php php/php*php*
php php php php php php*php Singletonphp instancephp ifphp requiredphp ofphp thephp HTTPphp client
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp staticphp php$httpClientphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Simplephp utilityphp functionphp whichphp importsphp anyphp feedphp URLphp and
php php php php php php*php determinesphp thephp existencephp ofphp Hubphp Serverphp endpointsphp.php Thisphp works
php php php php php php*php bestphp ifphp directlyphp givenphp anphp instancephp ofphp Zendphp_Feedphp_Readerphp_Atomphp|Rss
php php php php php php*php tophp leveragephp offphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Readerphp_FeedAbstractphp|Zendphp_Feedphp_Abstractphp|stringphp php$source
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp detectHubsphp(php$sourcephp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$sourcephp)php)php php{
php php php php php php php php php php php php php$feedphp php=php Zendphp_Feedphp_Readerphp:php:importphp(php$sourcephp)php;
php php php php php php php php php}php elseifphp php(isphp_objectphp(php$sourcephp)php php&php&php php$sourcephp instanceofphp Zendphp_Feedphp_Readerphp_FeedAbstractphp)php php{
php php php php php php php php php php php php php$feedphp php=php php$sourcephp;
php php php php php php php php php}php elseifphp php(isphp_objectphp(php$sourcephp)php php&php&php php$sourcephp instanceofphp Zendphp_Feedphp_Abstractphp)php php{
php php php php php php php php php php php php php$feedphp php=php Zendphp_Feedphp_Readerphp:php:importFeedphp(php$sourcephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Pubsubhubbubphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Pubsubhubbubphp_Exceptionphp(php'Thephp sourcephp parameterphp wasphp'
php php php php php php php php php php php php php.php php'php invalidphp,php iphp.ephp.php notphp aphp URLphp stringphp orphp anphp instancephp ofphp typephp'
php php php php php php php php php php php php php.php php'php Zendphp_Feedphp_Readerphp_FeedAbstractphp orphp Zendphp_Feedphp_Abstractphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$feedphp-php>getHubsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Allowsphp thephp externalphp environmentphp tophp makephp Zendphp_Oauthphp usephp aphp specific
php php php php php php*php Clientphp instancephp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Httpphp_Clientphp php$httpClient
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setHttpClientphp(Zendphp_Httpphp_Clientphp php$httpClientphp)
php php php php php{
php php php php php php php php selfphp:php:php$httpClientphp php=php php$httpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp singletonphp instancephp ofphp thephp HTTPphp Clientphp.php Notephp that
php php php php php php*php thephp instancephp isphp resetphp andphp clearedphp ofphp previousphp parametersphp GETphp/POSTphp.
php php php php php php*php Headersphp arephp NOTphp resetphp butphp handledphp byphp thisphp componentphp ifphp applicablephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp staticphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(selfphp:php:php$httpClientphp)php)php:
php php php php php php php php php php php php selfphp:php:php$httpClientphp php=php newphp Zendphp_Httpphp_Clientphp;
php php php php php php php php elsephp:
php php php php php php php php php php php php selfphp:php:php$httpClientphp-php>resetParametersphp(php)php;
php php php php php php php php endifphp;
php php php php php php php php returnphp selfphp:php:php$httpClientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Simplephp mechanismphp tophp deletephp thephp entirephp singletonphp HTTPphp Clientphp instance
php php php php php php*php whichphp forcesphp anphp newphp instantiationphp forphp subsequentphp requestsphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearHttpClientphp(php)
php php php php php{
php php php php php php php php selfphp:php:php$httpClientphp php=php nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php RFCphp php3php9php8php6php safephp urlphp encodingphp method
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp urlencodephp(php$stringphp)
php php php php php{
php php php php php php php php php$rawencodedphp php=php rawurlencodephp(php$stringphp)php;
php php php php php php php php php$rfcencodedphp php=php strphp_replacephp(php'php%php7Ephp'php,php php'php~php'php,php php$rawencodedphp)php;
php php php php php php php php returnphp php$rfcencodedphp;
php php php php php}
php}
