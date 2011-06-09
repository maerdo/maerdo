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
php php*php php@versionphp php php php php$Idphp:php Headerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Builderphp_Headerphp_Itunes
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Headerphp/Itunesphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;


php/php*php*
php php*php Headerphp ofphp aphp customphp buildphp feed
php php*
php php*php Classesphp implementingphp thephp Zendphp_Feedphp_Builderphp_Interfacephp interface
php php*php usesphp thisphp classphp tophp describephp thephp headerphp ofphp aphp feed
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Builderphp_Headerphp extendsphp ArrayObject
php{
php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$titlephp titlephp ofphp thephp feed
php php php php php php*php php@paramphp php stringphp php$linkphp canonicalphp urlphp ofphp thephp feed
php php php php php php*php php@paramphp php stringphp php$charsetphp charsetphp ofphp thephp textualphp data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$titlephp,php php$linkphp,php php$charsetphp php=php php'utfphp-php8php'php)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'titlephp'php,php php$titlephp)php;
php php php php php php php php php$thisphp-php>offsetSetphp(php'linkphp'php,php php$linkphp)php;
php php php php php php php php php$thisphp-php>offsetSetphp(php'charsetphp'php,php php$charsetphp)php;
php php php php php php php php php$thisphp-php>setLastUpdatephp(timephp(php)php)
php php php php php php php php php php php php php php-php>setGeneratorphp(php'Zendphp_Feedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Readphp onlyphp propertiesphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp propertyphp tophp read
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp NULLphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>offsetGetphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Writephp propertiesphp accessor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namephp php namephp ofphp thephp propertyphp tophp set
php php php php php php*php php@paramphp mixedphp php php$valuephp valuephp tophp set
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_setphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php$namephp,php php$valuephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Issetphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>offsetExistsphp(php$keyphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Unsetphp accessor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_unsetphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>offsetExistsphp(php$keyphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>offsetUnsetphp(php$keyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Timestampphp ofphp thephp updatephp date
php php php php php php*
php php php php php php*php php@paramphp php intphp php$lastUpdate
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setLastUpdatephp(php$lastUpdatephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'lastUpdatephp'php,php php$lastUpdatephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Timestampphp ofphp thephp publicationphp date
php php php php php php*
php php php php php php*php php@paramphp php intphp php$published
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setPublishedDatephp(php$publishedphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'publishedphp'php,php php$publishedphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Shortphp descriptionphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$description
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setDescriptionphp(php$descriptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'descriptionphp'php,php php$descriptionphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp authorphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$author
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setAuthorphp(php$authorphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'authorphp'php,php php$authorphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp authorphp'sphp email
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$email
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setEmailphp(php$emailphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_EmailAddress
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/EmailAddressphp.phpphp'php;
php php php php php php php php php$validatephp php=php newphp Zendphp_Validatephp_EmailAddressphp(php)php;
php php php php php php php php ifphp php(php!php$validatephp-php>isValidphp(php$emailphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp aphp validphp emailphp addressphp intophp thephp emailphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'emailphp'php,php php$emailphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp copyrightphp notice
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$copyright
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setCopyrightphp(php$copyrightphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'copyrightphp'php,php php$copyrightphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp imagephp ofphp thephp feed
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$image
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setImagephp(php$imagephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'imagephp'php,php php$imagephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp generatorphp ofphp thephp feed
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$generator
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setGeneratorphp(php$generatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'generatorphp'php,php php$generatorphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp languagephp ofphp thephp feed
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$language
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setLanguagephp(php$languagephp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'languagephp'php,php php$languagephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Emailphp addressphp forphp personphp responsiblephp forphp technicalphp issues
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$webmaster
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setWebmasterphp(php$webmasterphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_EmailAddress
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/EmailAddressphp.phpphp'php;
php php php php php php php php php$validatephp php=php newphp Zendphp_Validatephp_EmailAddressphp(php)php;
php php php php php php php php ifphp php(php!php$validatephp-php>isValidphp(php$webmasterphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp aphp validphp emailphp addressphp intophp thephp webmasterphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'webmasterphp'php,php php$webmasterphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Howphp longphp inphp minutesphp aphp feedphp canphp bephp cachedphp beforephp refreshing
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php intphp php$ttl
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTtlphp(php$ttlphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Validatephp_Int
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Intphp.phpphp'php;
php php php php php php php php php$validatephp php=php newphp Zendphp_Validatephp_Intphp(php)php;
php php php php php php php php ifphp php(php!php$validatephp-php>isValidphp(php$ttlphp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp havephp tophp setphp anphp integerphp valuephp tophp thephp ttlphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'ttlphp'php,php php$ttlphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php PICSphp ratingphp forphp thephp feed
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$rating
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setRatingphp(php$ratingphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'ratingphp'php,php php$ratingphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Cloudphp tophp bephp notifiedphp ofphp updatesphp ofphp thephp feed
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Uriphp_Httpphp php$uri
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php$procedurephp procedurephp tophp callphp,php ephp.gphp.php myCloudphp.rssPleaseNotify
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php$protocolphp php protocolphp tophp usephp,php ephp.gphp.php soapphp orphp xmlphp-rpc
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCloudphp(php$uriphp,php php$procedurephp,php php$protocolphp)
php php php php php{
php php php php php php php php ifphp php(isphp_stringphp(php$uriphp)php php&php&php Zendphp_Uriphp_Httpphp:php:checkphp(php$uriphp)php)php php{
php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$uriphp instanceofphp Zendphp_Uriphp_Httpphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php'Passedphp parameterphp isphp notphp aphp validphp HTTPphp URIphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$uriphp-php>getPortphp(php)php)php php{
php php php php php php php php php php php php php$uriphp-php>setPortphp(php8php0php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'cloudphp'php,php arrayphp(php'uriphp'php php=php>php php$uriphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'procedurephp'php php=php>php php$procedurephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'protocolphp'php php=php>php php$protocolphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Aphp textphp inputphp boxphp thatphp canphp bephp displayedphp withphp thephp feed
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$titlephp php php php php php php thephp labelphp ofphp thephp Submitphp buttonphp inphp thephp textphp inputphp area
php php php php php php*php php@paramphp php stringphp php$descriptionphp explainsphp thephp textphp inputphp area
php php php php php php*php php@paramphp php stringphp php$namephp php php php php php php php thephp namephp ofphp thephp textphp objectphp inphp thephp textphp inputphp area
php php php php php php*php php@paramphp php stringphp php$linkphp php php php php php php php thephp URLphp ofphp thephp CGIphp scriptphp thatphp processesphp textphp inputphp requests
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setTextInputphp(php$titlephp,php php$descriptionphp,php php$namephp,php php$linkphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'textInputphp'php,php arrayphp(php'titlephp'php php=php>php php$titlephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'descriptionphp'php php=php>php php$descriptionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'linkphp'php php=php>php php$linkphp)php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hintphp tellingphp aggregatorsphp whichphp hoursphp theyphp canphp skip
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$hoursphp listphp ofphp hoursphp inphp php2php4php format
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setSkipHoursphp(arrayphp php$hoursphp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$hoursphp)php php>php php2php4php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp canphp notphp havephp morephp thanphp php2php4php rowsphp inphp thephp skipHoursphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$hoursphp asphp php$hourphp)php php{
php php php php php php php php php php php php ifphp php(php$hourphp <php php0php php|php|php php$hourphp php>php php2php3php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"php$hourphp hasphp tephp bephp betweenphp php0php andphp php2php3php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'skipHoursphp'php,php php$hoursphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hintphp tellingphp aggregatorsphp whichphp daysphp theyphp canphp skip
php php php php php php*php Ignoredphp ifphp atomphp isphp used
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$daysphp listphp ofphp daysphp tophp skipphp,php ephp.gphp.php Monday
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php php@throwsphp Zendphp_Feedphp_Builderphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setSkipDaysphp(arrayphp php$daysphp)
php php php php php{
php php php php php php php php ifphp php(countphp(php$daysphp)php php>php php7php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"youphp canphp notphp havephp morephp thanphp php7php daysphp inphp thephp skipDaysphp propertyphp"php)php;
php php php php php php php php php}
php php php php php php php php php$validphp php=php arrayphp(php'mondayphp'php,php php'tuesdayphp'php,php php'wednesdayphp'php,php php'thursdayphp'php,php php'fridayphp'php,php php'saturdayphp'php,php php'sundayphp'php)php;
php php php php php php php php foreachphp php(php$daysphp asphp php$dayphp)php php{
php php php php php php php php php php php php ifphp php(php!inphp_arrayphp(strtolowerphp(php$dayphp)php,php php$validphp)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Builderphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Builderphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Builderphp_Exceptionphp(php"php$dayphp isphp notphp aphp validphp dayphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>offsetSetphp(php'skipDaysphp'php,php php$daysphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp iTunesphp rssphp extension
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Feedphp_Builderphp_Headerphp_Itunesphp php$itunes
php php php php php php*php php@returnphp Zendphp_Feedphp_Builderphp_Header
php php php php php php*php/
php php php php publicphp functionphp setITunesphp(Zendphp_Feedphp_Builderphp_Headerphp_Itunesphp php$itunesphp)
php php php php php{
php php php php php php php php php$thisphp-php>offsetSetphp(php'itunesphp'php,php php$itunesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
