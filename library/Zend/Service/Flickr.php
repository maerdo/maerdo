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
php php*php php@subpackagephp Flickr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Flickrphp.phpphp php2php2php5php9php8php php2php0php1php0php-php0php7php-php1php6php php2php1php:php2php4php:php1php4Zphp mikaelkaelphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Flickr
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Flickr
php{
php php php php php/php*php*
php php php php php php*php Basephp URIphp forphp thephp RESTphp client
php php php php php php*php/
php php php php constphp URIphp_BASEphp php=php php'httpphp:php/php/wwwphp.flickrphp.comphp'php;

php php php php php/php*php*
php php php php php php*php Yourphp Flickrphp APIphp key
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$apiKeyphp;

php php php php php/php*php*
php php php php php php*php Referencephp tophp RESTphp clientphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php protectedphp php$php_restClientphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Performsphp objectphp initializations
php php php php php php*
php php php php php php*php php php#php Setsphp upphp characterphp encoding
php php php php php php*php php php#php Savesphp thephp APIphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$apiKeyphp Yourphp Flickrphp APIphp key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$apiKeyphp)
php php php php php{
php php php php php php php php php$thisphp-php>apiKeyphp php=php php(stringphp)php php$apiKeyphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Findphp Flickrphp photosphp byphp tagphp.
php php php php php php*
php php php php php php*php Queryphp optionsphp includephp:
php php php php php php*
php php php php php php*php php php#php perphp_pagephp:php php php php php php php php howphp manyphp resultsphp tophp returnphp perphp query
php php php php php php*php php php#php pagephp:php php php php php php php php php php php php thephp startingphp pagephp offsetphp.php php firstphp resultphp willphp bephp php(pagephp php-php php1php)php php*php perphp_pagephp php+php php1
php php php php php php*php php php#php tagphp_modephp:php php php php php php php php Eitherphp php'anyphp'php forphp anphp ORphp combinationphp ofphp tagsphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php orphp php'allphp'php forphp anphp ANDphp combinationphp.php Defaultphp isphp php'anyphp'php.
php php php php php php*php php php#php minphp_uploadphp_datephp:php Minimumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp unixphp timestampphp.
php php php php php php*php php php#php maxphp_uploadphp_datephp:php Maximumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp unixphp timestampphp.
php php php php php php*php php php#php minphp_takenphp_datephp:php php Minimumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp MySQLphp datetimephp.
php php php php php php*php php php#php maxphp_takenphp_datephp:php php Maximumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp MySQLphp datetimephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$queryphp php php Aphp singlephp tagphp orphp anphp arrayphp ofphp tagsphp.
php php php php php php*php php@paramphp php arrayphp php php php php php php php php$optionsphp Additionalphp parametersphp tophp refinephp yourphp queryphp.
php php php php php php*php php@returnphp Zendphp_Servicephp_Flickrphp_ResultSet
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp tagSearchphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$methodphp php=php php'flickrphp.photosphp.searchphp'php;
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'perphp_pagephp'php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'pagephp'php php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp_modephp'php php=php>php php'orphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'extrasphp'php php php php=php>php php'licensephp,php datephp_uploadphp,php datephp_takenphp,php ownerphp_namephp,php iconphp_serverphp'php)php;

php php php php php php php php php$optionsphp[php'tagsphp'php]php php=php isphp_arrayphp(php$queryphp)php php?php implodephp(php'php,php'php,php php$queryphp)php php:php php$queryphp;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$methodphp,php php$optionsphp,php php$defaultOptionsphp)php;

php php php php php php php php php$thisphp-php>php_validateTagSearchphp(php$optionsphp)php;

php php php php php php php php php/php/php nowphp searchphp forphp photos
php php php php php php php php php$restClientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$restClientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$restClientphp-php>restGetphp(php'php/servicesphp/restphp/php'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Flickrphp_ResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Flickrphp/ResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Flickrphp_ResultSetphp(php$domphp,php php$thisphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Findsphp photosphp byphp aphp userphp'sphp usernamephp orphp emailphp.
php php php php php php*
php php php php php php*php Additionalphp queryphp optionsphp includephp:
php php php php php php*
php php php php php php*php php php#php perphp_pagephp:php php php php php php php php howphp manyphp resultsphp tophp returnphp perphp query
php php php php php php*php php php#php pagephp:php php php php php php php php php php php php thephp startingphp pagephp offsetphp.php php firstphp resultphp willphp bephp php(pagephp php-php php1php)php php*php perphp_pagephp php+php php1
php php php php php php*php php php#php minphp_uploadphp_datephp:php Minimumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp unixphp timestampphp.
php php php php php php*php php php#php maxphp_uploadphp_datephp:php Maximumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp unixphp timestampphp.
php php php php php php*php php php#php minphp_takenphp_datephp:php php Minimumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp MySQLphp datetimephp.
php php php php php php*php php php#php maxphp_takenphp_datephp:php php Maximumphp uploadphp datephp tophp searchphp onphp.php php Datephp shouldphp bephp aphp MySQLphp datetimephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php usernamephp orphp email
php php php php php php*php php@paramphp php arrayphp php php$optionsphp Additionalphp parametersphp tophp refinephp yourphp queryphp.
php php php php php php*php php@returnphp Zendphp_Servicephp_Flickrphp_ResultSet
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp userSearchphp(php$queryphp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php staticphp php$methodphp php=php php'flickrphp.peoplephp.getPublicPhotosphp'php;
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'perphp_pagephp'php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'pagephp'php php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'extrasphp'php php php php=php>php php'licensephp,php datephp_uploadphp,php datephp_takenphp,php ownerphp_namephp,php iconphp_serverphp'php)php;


php php php php php php php php php/php/php canphp'tphp accessphp byphp usernamephp,php mustphp getphp IDphp first
php php php php php php php php ifphp php(strchrphp(php$queryphp,php php'php@php'php)php)php php{
php php php php php php php php php php php php php/php/php optimisticallyphp hopephp thisphp isphp anphp email
php php php php php php php php php php php php php$optionsphp[php'userphp_idphp'php]php php=php php$thisphp-php>getIdByEmailphp(php$queryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php wephp canphp safelyphp ignorephp thisphp exceptionphp here
php php php php php php php php php php php php php$optionsphp[php'userphp_idphp'php]php php=php php$thisphp-php>getIdByUsernamephp(php$queryphp)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$methodphp,php php$optionsphp,php php$defaultOptionsphp)php;
php php php php php php php php php$thisphp-php>php_validateUserSearchphp(php$optionsphp)php;

php php php php php php php php php/php/php nowphp searchphp forphp photos
php php php php php php php php php$restClientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$restClientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$restClientphp-php>restGetphp(php'php/servicesphp/restphp/php'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Flickrphp_ResultSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Flickrphp/ResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Flickrphp_ResultSetphp(php$domphp,php php$thisphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Findsphp photosphp inphp aphp groupphp'sphp poolphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$queryphp php php groupphp id
php php php php php php*php php@paramphp php arrayphp php php$optionsphp Additionalphp parametersphp tophp refinephp yourphp queryphp.
php php php php php php*php php@returnphp Zendphp_Servicephp_Flickrphp_ResultSet
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp groupPoolGetPhotosphp(php$queryphp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php staticphp php$methodphp php=php php'flickrphp.groupsphp.poolsphp.getPhotosphp'php;
php php php php php php php php staticphp php$defaultOptionsphp php=php arrayphp(php'perphp_pagephp'php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'pagephp'php php php php php php=php>php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'extrasphp'php php php php=php>php php'licensephp,php datephp_uploadphp,php datephp_takenphp,php ownerphp_namephp,php iconphp_serverphp'php)php;

php php php php php php php php ifphp php(emptyphp(php$queryphp)php php|php|php php!isphp_stringphp(php$queryphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Youphp mustphp supplyphp aphp groupphp idphp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp[php'groupphp_idphp'php]php php=php php$queryphp;

php php php php php php php php php$optionsphp php=php php$thisphp-php>php_prepareOptionsphp(php$methodphp,php php$optionsphp,php php$defaultOptionsphp)php;

php php php php php php php php php$thisphp-php>php_validateGroupPoolGetPhotosphp(php$optionsphp)php;

php php php php php php php php php/php/php nowphp searchphp forphp photos
php php php php php php php php php$restClientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$restClientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$restClientphp-php>restGetphp(php'php/servicesphp/restphp/php'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;

php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php*php php@seephp Zendphp_Servicephp_Flickrphp_ResultSet
php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Flickrphp/ResultSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Flickrphp_ResultSetphp(php$domphp,php php$thisphp)php;
php php php php php}



php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp findphp Flickrphp Userphp IDsphp forphp usernamesphp.
php php php php php php*
php php php php php php*php php(Youphp canphp onlyphp findphp aphp userphp'sphp photophp withphp theirphp NSIDphp.php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$usernamephp thephp username
php php php php php php*php php@returnphp stringphp thephp NSIDphp php(useridphp)
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getIdByUsernamephp(php$usernamephp)
php php php php php{
php php php php php php php php staticphp php$methodphp php=php php'flickrphp.peoplephp.findByUsernamephp'php;

php php php php php php php php php$optionsphp php=php arrayphp(php'apiphp_keyphp'php php=php>php php$thisphp-php>apiKeyphp,php php'methodphp'php php=php>php php$methodphp,php php'usernamephp'php php=php>php php(stringphp)php php$usernamephp)php;

php php php php php php php php ifphp php(emptyphp(php$usernamephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Youphp mustphp supplyphp aphp usernamephp'php)php;
php php php php php php php php php}

php php php php php php php php php$restClientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$restClientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$restClientphp-php>restGetphp(php'php/servicesphp/restphp/php'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php returnphp php(stringphp)php php$xpathphp-php>queryphp(php'php/php/userphp'php)php-php>itemphp(php0php)php-php>getAttributephp(php'idphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Utilityphp functionphp tophp findphp Flickrphp Userphp IDsphp forphp emailsphp.
php php php php php php*
php php php php php php*php php(Youphp canphp onlyphp findphp aphp userphp'sphp photophp withphp theirphp NSIDphp.php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$emailphp thephp email
php php php php php php*php php@returnphp stringphp thephp NSIDphp php(useridphp)
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getIdByEmailphp(php$emailphp)
php php php php php{
php php php php php php php php staticphp php$methodphp php=php php'flickrphp.peoplephp.findByEmailphp'php;

php php php php php php php php ifphp php(emptyphp(php$emailphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Youphp mustphp supplyphp anphp ephp-mailphp addressphp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(php'apiphp_keyphp'php php=php>php php$thisphp-php>apiKeyphp,php php'methodphp'php php=php>php php$methodphp,php php'findphp_emailphp'php php=php>php php(stringphp)php php$emailphp)php;

php php php php php php php php php$restClientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$restClientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$restClientphp-php>restGetphp(php'php/servicesphp/restphp/php'php,php php$optionsphp)php;

php php php php php php php php ifphp php(php$responsephp-php>isErrorphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Anphp errorphp occurredphp sendingphp requestphp.php Statusphp codephp:php php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$responsephp-php>getStatusphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php returnphp php(stringphp)php php$xpathphp-php>queryphp(php'php/php/userphp'php)php-php>itemphp(php0php)php-php>getAttributephp(php'idphp'php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp Flickrphp photophp detailsphp byphp forphp thephp givenphp photophp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp thephp NSID
php php php php php php*php php@returnphp arrayphp ofphp Zendphp_Servicephp_Flickrphp_Imagephp,php detailsphp forphp thephp specifiedphp image
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getImageDetailsphp(php$idphp)
php php php php php{
php php php php php php php php staticphp php$methodphp php=php php'flickrphp.photosphp.getSizesphp'php;

php php php php php php php php ifphp php(emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Youphp mustphp supplyphp aphp photophp IDphp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php arrayphp(php'apiphp_keyphp'php php=php>php php$thisphp-php>apiKeyphp,php php'methodphp'php php=php>php php$methodphp,php php'photophp_idphp'php php=php>php php$idphp)php;

php php php php php php php php php$restClientphp php=php php$thisphp-php>getRestClientphp(php)php;
php php php php php php php php php$restClientphp-php>getHttpClientphp(php)php-php>resetParametersphp(php)php;
php php php php php php php php php$responsephp php=php php$restClientphp-php>restGetphp(php'php/servicesphp/restphp/php'php,php php$optionsphp)php;

php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$domphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php selfphp:php:php_checkErrorsphp(php$domphp)php;
php php php php php php php php php$retvalphp php=php arrayphp(php)php;
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Flickrphp_Image
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Flickrphp/Imagephp.phpphp'php;
php php php php php php php php foreachphp php(php$xpathphp-php>queryphp(php'php/php/sizephp'php)php asphp php$sizephp)php php{
php php php php php php php php php php php php php$labelphp php=php php(stringphp)php php$sizephp-php>getAttributephp(php'labelphp'php)php;
php php php php php php php php php php php php php$retvalphp[php$labelphp]php php=php newphp Zendphp_Servicephp_Flickrphp_Imagephp(php$sizephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$retvalphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp referencephp tophp thephp RESTphp clientphp,php instantiatingphp itphp ifphp necessary
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Restphp_Client
php php php php php php*php/
php php php php publicphp functionphp getRestClientphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_restClientphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Restphp_Client
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;
php php php php php php php php php php php php php$thisphp-php>php_restClientphp php=php newphp Zendphp_Restphp_Clientphp(selfphp:php:URIphp_BASEphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_restClientphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Userphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateUserSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'apiphp_keyphp'php,php php'methodphp'php,php php'userphp_idphp'php,php php'perphp_pagephp'php,php php'pagephp'php,php php'extrasphp'php,php php'minphp_uploadphp_datephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'minphp_takenphp_datephp'php,php php'maxphp_uploadphp_datephp'php,php php'maxphp_takenphp_datephp'php,php php'safephp_searchphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php5php0php0php,php truephp)php;
php php php php php php php php ifphp php(php!php$betweenphp-php>isValidphp(php$optionsphp[php'perphp_pagephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$optionsphp[php'perphp_pagephp'php]php php.php php'php isphp notphp validphp forphp thephp php"perphp_pagephp"php optionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Int
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Intphp.phpphp'php;
php php php php php php php php php$intphp php=php newphp Zendphp_Validatephp_Intphp(php)php;
php php php php php php php php ifphp php(php!php$intphp-php>isValidphp(php$optionsphp[php'pagephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$optionsphp[php'pagephp'php]php php.php php'php isphp notphp validphp forphp thephp php"pagephp"php optionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php validatephp extrasphp,php whichphp arephp deliveredphp inphp csvphp format
php php php php php php php php ifphp php(php$optionsphp[php'extrasphp'php]php)php php{
php php php php php php php php php php php php php$extrasphp php=php explodephp(php'php,php'php,php php$optionsphp[php'extrasphp'php]php)php;
php php php php php php php php php php php php php$validExtrasphp php=php arrayphp(php'licensephp'php,php php'datephp_uploadphp'php,php php'datephp_takenphp'php,php php'ownerphp_namephp'php,php php'iconphp_serverphp'php)php;
php php php php php php php php php php php php foreachphp(php$extrasphp asphp php$extraphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@todophp Thephp followingphp doesphp notphp dophp anythingphp php[yetphp]php,php sophp itphp isphp commentedphp outphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php/php/inphp_arrayphp(trimphp(php$extraphp)php,php php$validExtrasphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Validatephp Tagphp Searchphp Options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_validateTagSearchphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'methodphp'php,php php'apiphp_keyphp'php,php php'userphp_idphp'php,php php'tagsphp'php,php php'tagphp_modephp'php,php php'textphp'php,php php'minphp_uploadphp_datephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'maxphp_uploadphp_datephp'php,php php'minphp_takenphp_datephp'php,php php'maxphp_takenphp_datephp'php,php php'licensephp'php,php php'sortphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'privacyphp_filterphp'php,php php'bboxphp'php,php php'accuracyphp'php,php php'safephp_searchphp'php,php php'contentphp_typephp'php,php php'machinephp_tagsphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'machinephp_tagphp_modephp'php,php php'groupphp_idphp'php,php php'contactsphp'php,php php'woephp_idphp'php,php php'placephp_idphp'php,php php'mediaphp'php,php php'hasphp_geophp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'geophp_contextphp'php,php php'latphp'php,php php'lonphp'php,php php'radiusphp'php,php php'radiusphp_unitsphp'php,php php'isphp_commonsphp'php,php php'isphp_galleryphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'extrasphp'php,php php'perphp_pagephp'php,php php'pagephp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php5php0php0php,php truephp)php;
php php php php php php php php ifphp php(php!php$betweenphp-php>isValidphp(php$optionsphp[php'perphp_pagephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$optionsphp[php'perphp_pagephp'php]php php.php php'php isphp notphp validphp forphp thephp php"perphp_pagephp"php optionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Int
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Intphp.phpphp'php;
php php php php php php php php php$intphp php=php newphp Zendphp_Validatephp_Intphp(php)php;
php php php php php php php php ifphp php(php!php$intphp-php>isValidphp(php$optionsphp[php'pagephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$optionsphp[php'pagephp'php]php php.php php'php isphp notphp validphp forphp thephp php"pagephp"php optionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php validatephp extrasphp,php whichphp arephp deliveredphp inphp csvphp format
php php php php php php php php ifphp php(php$optionsphp[php'extrasphp'php]php)php php{
php php php php php php php php php php php php php$extrasphp php=php explodephp(php'php,php'php,php php$optionsphp[php'extrasphp'php]php)php;
php php php php php php php php php php php php php$validExtrasphp php=php arrayphp(php'licensephp'php,php php'datephp_uploadphp'php,php php'datephp_takenphp'php,php php'ownerphp_namephp'php,php php'iconphp_serverphp'php)php;
php php php php php php php php php php php php foreachphp(php$extrasphp asphp php$extraphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@todophp Thephp followingphp doesphp notphp dophp anythingphp php[yetphp]php,php sophp itphp isphp commentedphp outphp.
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php/php/inphp_arrayphp(trimphp(php$extraphp)php,php php$validExtrasphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php}


php php php php php/php*php*
php php php php php*php Validatephp Groupphp Searchphp Options
php php php php php*
php php php php php*php php@paramphp php arrayphp php$options
php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php*php php@returnphp void
php php php php php*php/
php php php php protectedphp functionphp php_validateGroupPoolGetPhotosphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$validOptionsphp php=php arrayphp(php'apiphp_keyphp'php,php php'tagsphp'php,php php'methodphp'php,php php'groupphp_idphp'php,php php'perphp_pagephp'php,php php'pagephp'php,php php'extrasphp'php,php php'userphp_idphp'php)php;

php php php php php php php php php$thisphp-php>php_compareOptionsphp(php$optionsphp,php php$validOptionsphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php*php php@seephp Zendphp_Validatephp_Between
php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Betweenphp.phpphp'php;
php php php php php php php php php$betweenphp php=php newphp Zendphp_Validatephp_Betweenphp(php1php,php php5php0php0php,php truephp)php;
php php php php php php php php ifphp php(php!php$betweenphp-php>isValidphp(php$optionsphp[php'perphp_pagephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$optionsphp[php'perphp_pagephp'php]php php.php php'php isphp notphp validphp forphp thephp php"perphp_pagephp"php optionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php*php php@seephp Zendphp_Validatephp_Int
php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Intphp.phpphp'php;
php php php php php php php php php$intphp php=php newphp Zendphp_Validatephp_Intphp(php)php;

php php php php php php php php ifphp php(php!php$intphp-php>isValidphp(php$optionsphp[php'pagephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$optionsphp[php'pagephp'php]php php.php php'php isphp notphp validphp forphp thephp php"pagephp"php optionphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php validatephp extrasphp,php whichphp arephp deliveredphp inphp csvphp format
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'extrasphp'php]php)php)php php{
php php php php php php php php php php php php php$extrasphp php=php explodephp(php'php,php'php,php php$optionsphp[php'extrasphp'php]php)php;
php php php php php php php php php php php php php$validExtrasphp php=php arrayphp(php'licensephp'php,php php'datephp_uploadphp'php,php php'datephp_takenphp'php,php php'ownerphp_namephp'php,php php'iconphp_serverphp'php)php;
php php php php php php php php php php php php foreachphp(php$extrasphp asphp php$extraphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php*php php@todophp Thephp followingphp doesphp notphp dophp anythingphp php[yetphp]php,php sophp itphp isphp commentedphp outphp.
php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php/php/inphp_arrayphp(trimphp(php$extraphp)php,php php$validExtrasphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp andphp onlyphp ifphp thephp responsephp statusphp indicatesphp aphp failure
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_checkErrorsphp(DOMDocumentphp php$domphp)
php php php php php{
php php php php php php php php ifphp php(php$domphp-php>documentElementphp-php>getAttributephp(php'statphp'php)php php=php=php=php php'failphp'php)php php{
php php php php php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$domphp)php;
php php php php php php php php php php php php php$errphp php=php php$xpathphp-php>queryphp(php'php/php/errphp'php)php-php>itemphp(php0php)php;
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Searchphp failedphp duephp tophp errorphp:php php'php php.php php$errphp-php>getAttributephp(php'msgphp'php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php php(errorphp php#php'php php.php php$errphp-php>getAttributephp(php'codephp'php)php php.php php'php)php'php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Preparephp optionsphp forphp thephp request
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$methodphp php php php php php php php php Flickrphp Methodphp tophp call
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php php php php php php php Userphp Options
php php php php php php*php php@paramphp php arrayphp php php$defaultOptionsphp Defaultphp Options
php php php php php php*php php@returnphp arrayphp Mergedphp arrayphp ofphp userphp andphp defaultphp/requiredphp options
php php php php php php*php/
php php php php protectedphp functionphp php_prepareOptionsphp(php$methodphp,php arrayphp php$optionsphp,php arrayphp php$defaultOptionsphp)
php php php php php{
php php php php php php php php php$optionsphp[php'methodphp'php]php php php=php php(stringphp)php php$methodphp;
php php php php php php php php php$optionsphp[php'apiphp_keyphp'php]php php=php php$thisphp-php>apiKeyphp;

php php php php php php php php returnphp arrayphp_mergephp(php$defaultOptionsphp,php php$optionsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Throwsphp anphp exceptionphp ifphp andphp onlyphp ifphp anyphp userphp optionsphp arephp invalid
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp php php php php php Userphp options
php php php php php php*php php@paramphp php arrayphp php$validOptionsphp Validphp options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_compareOptionsphp(arrayphp php$optionsphp,php arrayphp php$validOptionsphp)
php php php php php{
php php php php php php php php php$differencephp php=php arrayphp_diffphp(arrayphp_keysphp(php$optionsphp)php,php php$validOptionsphp)php;
php php php php php php php php ifphp php(php$differencephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php'Thephp followingphp parametersphp arephp invalidphp:php php'php php.php implodephp(php'php,php'php,php php$differencephp)php)php;
php php php php php php php php php}
php php php php php}
php}

