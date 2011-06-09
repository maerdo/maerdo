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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Audioscrobbler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Audioscrobblerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Audioscrobbler
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Audioscrobbler
php{
php php php php php/php*php*
php php php php php php*php Zendphp_Httpphp_Clientphp Object
php php php php php php*
php php php php php php*php php@varphp php php php php Zendphp_Httpphp_Client
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_clientphp;

php php php php php/php*php*
php php php php php php*php Arrayphp thatphp containsphp parametersphp beingphp usedphp byphp thephp webservice
php php php php php php*
php php php php php php*php php@varphp php php php php array
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_paramsphp;

php php php php php/php*php*
php php php php php php*php Holdsphp errorphp informationphp php(ephp.gphp.php,php forphp handlingphp simplexmlphp_loadphp_stringphp(php)php warningsphp)
php php php php php php*
php php php php php php*php php@varphp php php php php array
php php php php php php*php php@accessphp php protected
php php php php php php*php/
php php php php protectedphp php$php_errorphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Setsphp upphp characterphp encodingphp,php instantiatesphp thephp HTTPphp clientphp,php andphp assignsphp thephp webphp servicephp versionphp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>setphp(php'versionphp'php,php php'php1php.php0php'php)php;

php php php php php php php php iconvphp_setphp_encodingphp(php'outputphp_encodingphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php iconvphp_setphp_encodingphp(php'inputphp_encodingphp'php,php php'UTFphp-php8php'php)php;
php php php php php php php php iconvphp_setphp_encodingphp(php'internalphp_encodingphp'php,php php'UTFphp-php8php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp Httpphp Client
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Httpphp_Clientphp php$client
php php php php php php*php/
php php php php publicphp functionphp setHttpClientphp(Zendphp_Httpphp_Clientphp php$clientphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_clientphp php=php php$clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp currentphp httpphp clientphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php ifphp(php$thisphp-php>php_clientphp php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>lazyLoadHttpClientphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_clientphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Lazyphp loadphp Httpphp Clientphp ifphp nonephp isphp instantiatedphp yetphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp lazyLoadHttpClientphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_clientphp php=php newphp Zendphp_Httpphp_Clientphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp fieldphp valuephp,php orphp falsephp ifphp thephp namedphp fieldphp doesphp notphp exist
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$field
php php php php php php*php php@returnphp stringphp|false
php php php php php php*php/
php php php php publicphp functionphp getphp(php$fieldphp)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$fieldphp,php php$thisphp-php>php_paramsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_paramsphp[php$fieldphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Genericphp setphp actionphp forphp aphp fieldphp inphp thephp parametersphp beingphp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fieldphp namephp ofphp fieldphp tophp set
php php php php php php*php php@paramphp php stringphp php$valuephp valuephp tophp assignphp tophp thephp namedphp field
php php php php php php*php php@returnphp Zendphp_Servicephp_Audioscrobblerphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setphp(php$fieldphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_paramsphp[php$fieldphp]php php=php urlencodephp(php$valuephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Protectedphp methodphp thatphp queriesphp RESTphp servicephp andphp returnsphp SimpleXMLphp responsephp set
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$servicephp namephp ofphp Audioscrobblerphp servicephp filephp wephp'rephp accessing
php php php php php php*php php@paramphp php stringphp php$paramsphp php parametersphp thatphp wephp sendphp tophp thephp servicephp ifphp needded
php php php php php php*php php@throwsphp Zendphp_Httpphp_Clientphp_Exception
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp SimpleXMLElementphp resultphp set
php php php php php php*php php@accessphp protected
php php php php php php*php/
php php php php protectedphp functionphp php_getInfophp(php$servicephp,php php$paramsphp php=php nullphp)
php php php php php{
php php php php php php php php php$servicephp php=php php(stringphp)php php$servicephp;
php php php php php php php php php$paramsphp php php=php php(stringphp)php php$paramsphp;

php php php php php php php php ifphp php(php$paramsphp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php$thisphp-php>getHttpClientphp(php)php-php>setUriphp(php"httpphp:php/php/wsphp.audioscrobblerphp.comphp{php$servicephp}php"php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>getHttpClientphp(php)php-php>setUriphp(php"httpphp:php/php/wsphp.audioscrobblerphp.comphp{php$servicephp}php?php{php$paramsphp}php"php)php;
php php php php php php php php php}

php php php php php php php php php$responsephp php php php php php=php php$thisphp-php>getHttpClientphp(php)php-php>requestphp(php)php;
php php php php php php php php php$responseBodyphp php=php php$responsephp-php>getBodyphp(php)php;

php php php php php php php php ifphp php(pregphp_matchphp(php'php/Nophp suchphp pathphp/php'php,php php$responseBodyphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Httpphp_Clientphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Couldphp notphp findphp:php php'php php.php php$thisphp-php>php_clientphp-php>getUriphp(php)php)php;
php php php php php php php php php}php elseifphp php(pregphp_matchphp(php'php/Nophp userphp existsphp withphp thisphp namephp/php'php,php php$responseBodyphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Httpphp_Clientphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Nophp userphp existsphp withphp thisphp namephp'php)php;
php php php php php php php php php}php elseifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Httpphp_Clientphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_Clientphp_Exceptionphp(php'Thephp webphp servicephp php'php php.php php$thisphp-php>php_clientphp-php>getUriphp(php)php php.php php'php returnedphp thephp followingphp statusphp codephp:php php'php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php$thisphp,php php'php_errorHandlerphp'php)php)php;

php php php php php php php php ifphp php(php!php$simpleXmlElementResponsephp php=php simplexmlphp_loadphp_stringphp(php$responseBodyphp)php)php php{
php php php php php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$exceptionphp php=php newphp Zendphp_Servicephp_Exceptionphp(php'Responsephp failedphp tophp loadphp withphp SimpleXMLphp'php)php;
php php php php php php php php php php php php php$exceptionphp-php>errorphp php php php php=php php$thisphp-php>php_errorphp;
php php php php php php php php php php php php php$exceptionphp-php>responsephp php=php php$responseBodyphp;
php php php php php php php php php php php php throwphp php$exceptionphp;
php php php php php php php php php}

php php php php php php php php restorephp_errorphp_handlerphp(php)php;

php php php php php php php php returnphp php$simpleXmlElementResponsephp;
php php php php php}

php php php php php/php*php*
php php php php php*php Utilityphp functionphp tophp getphp Audioscrobblerphp profilephp informationphp php(egphp:php Namephp,php Genderphp)
php php php php php php*
php php php php php*php php@returnphp arrayphp containingphp information
php php php php php*php/
php php php php publicphp functionphp userGetProfileInformationphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/profilephp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp getphp thisphp userphp'sphp php5php0php mostphp playedphp artists
php php php php php php*
php php php php php php*php php@returnphp arrayphp containingphp info
php php php php php*php/
php php php php publicphp functionphp userGetTopArtistsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/topartistsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp getphp thisphp userphp'sphp php5php0php mostphp playedphp albums
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php*php/
php php php php publicphp functionphp userGetTopAlbumsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/topalbumsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp getphp thisphp userphp'sphp php5php0php mostphp playedphp tracks
php php php php php php*php php@returnphp SimpleXMLphp objectphp containingphp resutphp set
php php php php php*php/
php php php php publicphp functionphp userGetTopTracksphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/toptracksphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp getphp thisphp userphp'sphp php5php0php mostphp usedphp tags
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetTopTagsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/tagsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp thephp userphp'sphp topphp tagsphp usedphp mostphp usedphp onphp aphp specificphp artist
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetTopTagsForArtistphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/artisttagsphp.xmlphp"php;
php php php php php php php php php$paramsphp php=php php"artistphp=php{php$thisphp-php>getphp(php'artistphp'php)php}php"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp thisphp userphp'sphp topphp tagsphp forphp anphp album
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetTopTagsForAlbumphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/albumtagsphp.xmlphp"php;
php php php php php php php php php$paramsphp php=php php"artistphp=php{php$thisphp-php>getphp(php'artistphp'php)php}php&albumphp=php{php$thisphp-php>getphp(php'albumphp'php)php}php"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp thisphp userphp'sphp topphp tagsphp forphp aphp track
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetTopTagsForTrackphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/tracktagsphp.xmlphp"php;
php php php php php php php php php$paramsphp php=php php"artistphp=php{php$thisphp-php>getphp(php'artistphp'php)php}php&trackphp=php{php$thisphp-php>getphp(php'trackphp'php)php}php"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp retrievesphp thisphp userphp'sphp listphp ofphp friends
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetFriendsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/friendsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp peoplephp withphp similarphp listeningphp preferencesphp tophp thisphp user
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetNeighboursphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/neighboursphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thephp php1php0php mostphp recentphp tracksphp playedphp byphp thisphp user
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetRecentTracksphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/recenttracksphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thephp php1php0php tracksphp mostphp recentlyphp bannedphp byphp thisphp user
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetRecentBannedTracksphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/recentbannedtracksphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thephp php1php0php tracksphp mostphp recentlyphp lovedphp byphp thisphp user
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetRecentLovedTracksphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/recentlovedtracksphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp datesphp ofphp availablephp weeklyphp chartsphp forphp aphp thisphp user
php php php php php php*
php php php php php php*php Shouldphp actuallyphp bephp namedphp userGetWeeklyChartDateListphp(php)php butphp wephp havephp tophp followphp audioscrobblerphp'sphp naming
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetWeeklyChartListphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/weeklychartlistphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp weeklyphp albumphp chartphp dataphp forphp thisphp user
php php php php php php*
php php php php php php*php php@paramphp integerphp php$fromphp optionalphp UNIXphp timestampphp forphp startphp ofphp datephp range
php php php php php php*php php@paramphp integerphp php$tophp optionalphp UNIXphp timestampphp forphp endphp ofphp datephp range
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetWeeklyAlbumChartphp(php$fromphp php=php NULLphp,php php$tophp php=php NULLphp)
php php php php php{
php php php php php php php php php$paramsphp php=php php"php"php;

php php php php php php php php ifphp php(php$fromphp php!php=php NULLphp php&php&php php$tophp php!php=php NULLphp)php php{
php php php php php php php php php php php php php$fromphp php=php php(intphp)php$fromphp;
php php php php php php php php php php php php php$tophp php=php php(intphp)php$tophp;
php php php php php php php php php php php php php$paramsphp php=php php"fromphp=php{php$fromphp}php&tophp=php{php$tophp}php"php;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/weeklyalbumchartphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp weeklyphp artistphp chartphp dataphp forphp thisphp user
php php php php php php*
php php php php php php*php php@paramphp integerphp php$fromphp optionalphp UNIXphp timestampphp forphp startphp ofphp datephp range
php php php php php php*php php@paramphp integerphp php$tophp optionalphp UNIXphp timestampphp forphp endphp ofphp datephp range
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetWeeklyArtistChartphp(php$fromphp php=php NULLphp,php php$tophp php=php NULLphp)
php php php php php{
php php php php php php php php php$paramsphp php=php php"php"php;

php php php php php php php php ifphp php(php$fromphp php!php=php NULLphp php&php&php php$tophp php!php=php NULLphp)php php{
php php php php php php php php php php php php php$fromphp php=php php(intphp)php$fromphp;
php php php php php php php php php php php php php$tophp php=php php(intphp)php$tophp;
php php php php php php php php php php php php php$paramsphp php=php php"fromphp=php{php$fromphp}php&tophp=php{php$tophp}php"php;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/weeklyartistchartphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp weeklyphp trackphp chartphp dataphp forphp thisphp user
php php php php php php*
php php php php php php*php php@paramphp integerphp php$fromphp optionalphp UNIXphp timestampphp forphp startphp ofphp datephp range
php php php php php php*php php@paramphp integerphp php$tophp optionalphp UNIXphp timestampphp forphp endphp ofphp datephp range
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp userGetWeeklyTrackChartphp(php$fromphp php=php NULLphp,php php$tophp php=php NULLphp)
php php php php php{
php php php php php php php php php$paramsphp php=php php"php"php;

php php php php php php php php ifphp php(php$fromphp php!php=php NULLphp php&php&php php$tophp php!php=php NULLphp)php php{
php php php php php php php php php php php php php$fromphp php=php php(intphp)php$fromphp;
php php php php php php php php php php php php php$tophp php=php php(intphp)php$tophp;
php php php php php php php php php php php php php$paramsphp php=php php"fromphp=php{php$fromphp}php&tophp=php{php$tophp}php"php;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/userphp/php{php$thisphp-php>getphp(php'userphp'php)php}php/weeklytrackchartphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp artistsphp similiarphp tophp thisphp artist
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp artistGetRelatedArtistsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/artistphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/similarphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thisphp artistphp'sphp topphp listeners
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp artistGetTopFansphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/artistphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/fansphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thisphp artistphp'sphp topphp-ratedphp tracks
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp artistGetTopTracksphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/artistphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/toptracksphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thisphp artistphp'sphp topphp-ratedphp albums
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp artistGetTopAlbumsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/artistphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/topalbumsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Utilityphp functionphp thatphp returnsphp aphp listphp ofphp thisphp artistphp'sphp topphp-ratedphp tags
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElementphp objectphp containingphp resultphp set
php php php php php php*php/
php php php php publicphp functionphp artistGetTopTagsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/artistphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/toptagsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp informationphp aboutphp anphp album
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp albumGetInfophp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/albumphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/php{php$thisphp-php>getphp(php'albumphp'php)php}php/infophp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp topphp fansphp ofphp thephp currentphp trackphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp trackGetTopFansphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/trackphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/php{php$thisphp-php>getphp(php'trackphp'php)php}php/fansphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp topphp tagsphp ofphp thephp currentphp trackphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp trackGetTopTagsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/trackphp/php{php$thisphp-php>getphp(php'artistphp'php)php}php/php{php$thisphp-php>getphp(php'trackphp'php)php}php/toptagsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Topphp Tagsphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp tagGetTopTagsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/tagphp/toptagsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp topphp albumsphp byphp currentphp tagphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp tagGetTopAlbumsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/tagphp/php{php$thisphp-php>getphp(php'tagphp'php)php}php/topalbumsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp topphp artistsphp byphp currentphp tagphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp tagGetTopArtistsphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/tagphp/php{php$thisphp-php>getphp(php'tagphp'php)php}php/topartistsphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp Topphp Tracksphp byphp currentlyphp setphp tagphp.
php php php php php php*
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp tagGetTopTracksphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/tagphp/php{php$thisphp-php>getphp(php'tagphp'php)php}php/toptracksphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp weeklyphp chartphp listphp byphp currentphp setphp groupphp.
php php php php php php*
php php php php php php*php php@seephp setphp(php)
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp groupGetWeeklyChartListphp(php)
php php php php php{
php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/groupphp/php{php$thisphp-php>getphp(php'groupphp'php)php}php/weeklychartlistphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp weeklyphp Artistphp Charts
php php php php php php*
php php php php php php*php php@paramphp php intphp php$from
php php php php php php*php php@paramphp php intphp php$to
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp groupGetWeeklyArtistChartListphp(php$fromphp php=php NULLphp,php php$tophp php=php NULLphp)
php php php php php{

php php php php php php php php ifphp php(php$fromphp php!php=php NULLphp php&php&php php$tophp php!php=php NULLphp)php php{
php php php php php php php php php php php php php$fromphp php=php php(intphp)php$fromphp;
php php php php php php php php php php php php php$tophp php=php php(intphp)php$tophp;
php php php php php php php php php php php php php$paramsphp php=php php"fromphp=php{php$fromphp}php&php$tophp=php{php$tophp}php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp php=php php"php"php;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/groupphp/php{php$thisphp-php>getphp(php'groupphp'php)php}php/weeklyartistchartphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp Weeklyphp Trackphp Charts
php php php php php php*
php php php php php php*php php@paramphp php intphp php$from
php php php php php php*php php@paramphp php intphp php$to
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp groupGetWeeklyTrackChartListphp(php$fromphp php=php NULLphp,php php$tophp php=php NULLphp)
php php php php php{
php php php php php php php php ifphp php(php$fromphp php!php=php NULLphp php&php&php php$tophp php!php=php NULLphp)php php{
php php php php php php php php php php php php php$fromphp php=php php(intphp)php$fromphp;
php php php php php php php php php php php php php$tophp php=php php(intphp)php$tophp;
php php php php php php php php php php php php php$paramsphp php=php php"fromphp=php{php$fromphp}php&tophp=php{php$tophp}php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp php=php php"php"php;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/groupphp/php{php$thisphp-php>getphp(php'groupphp'php)php}php/weeklytrackchartphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp Weeklyphp albumphp chartsphp.
php php php php php php*
php php php php php php*php php@paramphp intphp php$from
php php php php php php*php php@paramphp intphp php$to
php php php php php php*php php@returnphp SimpleXMLElement
php php php php php php*php/
php php php php publicphp functionphp groupGetWeeklyAlbumChartListphp(php$fromphp php=php NULLphp,php php$tophp php=php NULLphp)
php php php php php{
php php php php php php php php ifphp php(php$fromphp php!php=php NULLphp php&php&php php$tophp php!php=php NULLphp)php php{
php php php php php php php php php php php php php$fromphp php=php php(intphp)php$fromphp;
php php php php php php php php php php php php php$tophp php=php php(intphp)php$tophp;
php php php php php php php php php php php php php$paramsphp php=php php"fromphp=php{php$fromphp}php&tophp=php{php$tophp}php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$paramsphp php=php php"php"php;
php php php php php php php php php}

php php php php php php php php php$servicephp php=php php"php/php{php$thisphp-php>getphp(php'versionphp'php)php}php/groupphp/php{php$thisphp-php>getphp(php'groupphp'php)php}php/weeklyalbumchartphp.xmlphp"php;
php php php php php php php php returnphp php$thisphp-php>php_getInfophp(php$servicephp,php php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp thephp providedphp errorphp informationphp tophp thisphp instance
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$errno
php php php php php php*php php@paramphp php stringphp php php$errstr
php php php php php php*php php@paramphp php stringphp php php$errfile
php php php php php php*php php@paramphp php integerphp php$errline
php php php php php php*php php@paramphp php arrayphp php php php$errcontext
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_errorHandlerphp(php$errnophp,php php$errstrphp,php php$errfilephp,php php$errlinephp,php arrayphp php$errcontextphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_errorphp php=php arrayphp(
php php php php php php php php php php php php php'errnophp'php php php php php php php=php>php php$errnophp,
php php php php php php php php php php php php php'errstrphp'php php php php php php=php>php php$errstrphp,
php php php php php php php php php php php php php'errfilephp'php php php php php=php>php php$errfilephp,
php php php php php php php php php php php php php'errlinephp'php php php php php=php>php php$errlinephp,
php php php php php php php php php php php php php'errcontextphp'php php=php>php php$errcontext
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callphp Interceptphp forphp setphp(php$namephp,php php$fieldphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php php$args
php php php php php php*php php@returnphp Zendphp_Servicephp_Audioscrobbler
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp(substrphp(php$methodphp,php php0php,php php3php)php php!php=php=php php"setphp"php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Servicephp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Methodphp php"php.php$methodphp.php"php doesphp notphp existphp inphp classphp Zendphp_Servicephp_Audioscrobblerphp.php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$fieldphp php=php strtolowerphp(substrphp(php$methodphp,php php3php)php)php;

php php php php php php php php ifphp(php!isphp_arrayphp(php$argsphp)php php|php|php countphp(php$argsphp)php php!php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php"Zendphp/Servicephp/Exceptionphp.phpphp"php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Aphp valuephp isphp requiredphp forphp settingphp aphp parameterphp fieldphp.php"
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>setphp(php$fieldphp,php php$argsphp[php0php]php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
