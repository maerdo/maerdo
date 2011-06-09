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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Partphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mimephp_Decode
php php*php/
requirephp_oncephp php'Zendphp/Mimephp/Decodephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Partphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Partphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Partphp implementsphp RecursiveIteratorphp,php Zendphp_Mailphp_Partphp_Interface
php{
php php php php php/php*php*
php php php php php php*php headersphp ofphp partphp asphp array
php php php php php php*php php@varphp nullphp|array
php php php php php php*php/
php php php php protectedphp php$php_headersphp;

php php php php php/php*php*
php php php php php php*php rawphp partphp body
php php php php php php*php php@varphp nullphp|string
php php php php php php*php/
php php php php protectedphp php$php_contentphp;

php php php php php/php*php*
php php php php php php*php toplinesphp asphp fetchedphp withphp headers
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_topLinesphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php partsphp ofphp multipartphp message
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_partsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php countphp ofphp partsphp ofphp aphp multipartphp message
php php php php php php*php php@varphp nullphp|int
php php php php php php*php/
php php php php protectedphp php$php_countPartsphp;

php php php php php/php*php*
php php php php php php*php currentphp positionphp ofphp iterator
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_iterationPosphp php=php php1php;

php php php php php/php*php*
php php php php php php*php mailphp handlerphp,php ifphp latephp fetchphp isphp active
php php php php php php*php php@varphp nullphp|Zendphp_Mailphp_Storagephp_Abstract
php php php php php php*php/
php php php php protectedphp php$php_mailphp;

php php php php php/php*php*
php php php php php php*php messagephp numberphp forphp mailphp handler
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_messageNumphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Publicphp constructor
php php php php php php*
php php php php php php*php Zendphp_Mailphp_Partphp supportsphp differentphp sourcesphp forphp contentphp.php Thephp possiblephp paramsphp arephp:
php php php php php php*php php-php handlerphp php php php aphp instancephp ofphp Zendphp_Mailphp_Storagephp_Abstractphp forphp latephp fetch
php php php php php php*php php-php idphp php php php php php php php php numberphp ofphp messagephp forphp handler
php php php php php php*php php-php rawphp php php php php php php php rawphp contentphp withphp headerphp andphp bodyphp asphp string
php php php php php php*php php-php headersphp php php php headersphp asphp arrayphp php(namephp php=php>php valuephp)php orphp stringphp,php ifphp aphp contentphp partphp isphp foundphp itphp'sphp usedphp asphp toplines
php php php php php php*php php-php noToplinesphp ignorephp contentphp foundphp afterphp headersphp inphp paramphp php'headersphp'
php php php php php php*php php-php contentphp php php php contentphp asphp string
php php php php php php*
php php php php php php*php php@paramphp php php arrayphp php$paramsphp php fullphp messagephp withphp orphp withoutphp headers
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'handlerphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$paramsphp[php'handlerphp'php]php instanceofphp Zendphp_Mailphp_Storagephp_Abstractphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'handlerphp isphp notphp aphp validphp mailphp handlerphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!issetphp(php$paramsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'needphp aphp messagephp idphp withphp aphp handlerphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_mailphp php php php php php php php=php php$paramsphp[php'handlerphp'php]php;
php php php php php php php php php php php php php$thisphp-php>php_messageNumphp php=php php$paramsphp[php'idphp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$paramsphp[php'rawphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Mimephp_Decodephp:php:splitMessagephp(php$paramsphp[php'rawphp'php]php,php php$thisphp-php>php_headersphp,php php$thisphp-php>php_contentphp)php;
php php php php php php php php php}php elsephp ifphp php(issetphp(php$paramsphp[php'headersphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$paramsphp[php'headersphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_headersphp php=php php$paramsphp[php'headersphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'noToplinesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Mimephp_Decodephp:php:splitMessagephp(php$paramsphp[php'headersphp'php]php,php php$thisphp-php>php_headersphp,php php$nullphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php Zendphp_Mimephp_Decodephp:php:splitMessagephp(php$paramsphp[php'headersphp'php]php,php php$thisphp-php>php_headersphp,php php$thisphp-php>php_topLinesphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$paramsphp[php'contentphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentphp php=php php$paramsphp[php'contentphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp partphp isphp aphp multipartphp message
php php php php php php*
php php php php php php*php php@returnphp boolphp ifphp partphp isphp multipart
php php php php php php*php/
php php php php publicphp functionphp isMultipartphp(php)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php returnphp striposphp(php$thisphp-php>contentTypephp,php php'multipartphp/php'php)php php=php=php=php php0php;
php php php php php php php php php}php catchphp(Zendphp_Mailphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Bodyphp ofphp part
php php php php php php*
php php php php php php*php Ifphp partphp isphp multipartphp thephp rawphp contentphp ofphp thisphp partphp withphp allphp subphp partsphp isphp returned
php php php php php php*
php php php php php php*php php@returnphp stringphp body
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_contentphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_contentphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_mailphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_mailphp-php>getRawContentphp(php$thisphp-php>php_messageNumphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'nophp contentphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp sizephp ofphp part
php php php php php php*
php php php php php php*php Quitephp simplephp implementedphp currentlyphp php(notphp decodingphp)php.php Handlephp withphp carephp.
php php php php php php*
php php php php php php*php php@returnphp intphp size
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php)php php{
php php php php php php php php returnphp strlenphp(php$thisphp-php>getContentphp(php)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Cachephp contentphp andphp splitphp inphp partsphp ifphp multipart
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_cacheContentphp(php)
php php php php php{
php php php php php php php php php/php/php cachingphp contentphp ifphp wephp canphp'tphp fetchphp parts
php php php php php php php php ifphp php(php$thisphp-php>php_contentphp php=php=php=php nullphp php&php&php php$thisphp-php>php_mailphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_contentphp php=php php$thisphp-php>php_mailphp-php>getRawContentphp(php$thisphp-php>php_messageNumphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>isMultipartphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php splitphp contentphp inphp parts
php php php php php php php php php$boundaryphp php=php php$thisphp-php>getHeaderFieldphp(php'contentphp-typephp'php,php php'boundaryphp'php)php;
php php php php php php php php ifphp php(php!php$boundaryphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'nophp boundaryphp foundphp inphp contentphp typephp tophp splitphp messagephp'php)php;
php php php php php php php php php}
php php php php php php php php php$partsphp php=php Zendphp_Mimephp_Decodephp:php:splitMessageStructphp(php$thisphp-php>php_contentphp,php php$boundaryphp)php;
php php php php php php php php ifphp php(php$partsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$counterphp php=php php1php;
php php php php php php php php foreachphp php(php$partsphp asphp php$partphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_partsphp[php$counterphp+php+php]php php=php newphp selfphp(arrayphp(php'headersphp'php php=php>php php$partphp[php'headerphp'php]php,php php'contentphp'php php=php>php php$partphp[php'bodyphp'php]php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp partphp ofphp multipartphp message
php php php php php php*
php php php php php php*php php@paramphp php intphp php$numphp numberphp ofphp partphp startingphp withphp php1php forphp firstphp part
php php php php php php*php php@returnphp Zendphp_Mailphp_Partphp wantedphp part
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getPartphp(php$numphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_partsphp[php$numphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_partsphp[php$numphp]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$thisphp-php>php_mailphp php&php&php php$thisphp-php>php_contentphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'partphp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_mailphp php&php&php php$thisphp-php>php_mailphp-php>hasFetchPartphp)php php{
php php php php php php php php php php php php php/php/php TODOphp:php fetchphp part
php php php php php php php php php php php php php/php/php return
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_cacheContentphp(php)php;

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_partsphp[php$numphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'partphp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_partsphp[php$numphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Countphp partsphp ofphp aphp multipartphp part
php php php php php php*
php php php php php php*php php@returnphp intphp numberphp ofphp subphp-parts
php php php php php php*php/
php php php php publicphp functionphp countPartsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_countPartsphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_countPartsphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_countPartsphp php=php countphp(php$thisphp-php>php_partsphp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_countPartsphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_countPartsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_mailphp php&php&php php$thisphp-php>php_mailphp-php>hasFetchPartphp)php php{
php php php php php php php php php php php php php/php/php TODOphp:php fetchphp part
php php php php php php php php php php php php php/php/php return
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_cacheContentphp(php)php;

php php php php php php php php php$thisphp-php>php_countPartsphp php=php countphp(php$thisphp-php>php_partsphp)php;
php php php php php php php php returnphp php$thisphp-php>php_countPartsphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp allphp headers
php php php php php php*
php php php php php php*php Thephp returnedphp headersphp arephp asphp savedphp internallyphp.php Allphp namesphp arephp lowercasedphp.php Thephp valuephp isphp aphp stringphp orphp anphp array
php php php php php php*php ifphp aphp headerphp withphp thephp samephp namephp occursphp morephp thanphp oncephp.
php php php php php php*
php php php php php php*php php@returnphp arrayphp headersphp asphp arrayphp(namephp php=php>php valuephp)
php php php php php php*php/
php php php php publicphp functionphp getHeadersphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_headersphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_mailphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_headersphp php=php arrayphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$partphp php=php php$thisphp-php>php_mailphp-php>getRawHeaderphp(php$thisphp-php>php_messageNumphp)php;
php php php php php php php php php php php php php php php php Zendphp_Mimephp_Decodephp:php:splitMessagephp(php$partphp,php php$thisphp-php>php_headersphp,php php$nullphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_headersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp headerphp inphp specificedphp format
php php php php php php*
php php php php php php*php Internallyphp headersphp thatphp occurphp morephp thanphp oncephp arephp savedphp asphp arrayphp,php allphp otherphp asphp stringphp.php Ifphp php$format
php php php php php php*php isphp setphp tophp stringphp implodephp isphp usedphp tophp concatphp thephp valuesphp php(withphp Zendphp_Mimephp:php:LINEENDphp asphp delimphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php php namephp ofphp headerphp,php matchesphp casephp-insensitivephp,php butphp camelphp-casephp isphp replacedphp withphp dashes
php php php php php php*php php@paramphp php stringphp php$formatphp changephp typephp ofphp returnphp valuephp tophp php'stringphp'php orphp php'arrayphp'
php php php php php php*php php@returnphp stringphp|arrayphp valuephp ofphp headerphp inphp wantedphp orphp internalphp format
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderphp(php$namephp,php php$formatphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_headersphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>getHeadersphp(php)php;
php php php php php php php php php}

php php php php php php php php php$lowerNamephp php=php strtolowerphp(php$namephp)php;

php php php php php php php php ifphp php(php$thisphp-php>headerExistsphp(php$namephp)php php=php=php falsephp)php php{
php php php php php php php php php php php php php$lowerNamephp php=php strtolowerphp(pregphp_replacephp(php'php%php(php[aphp-zphp]php)php(php[Aphp-Zphp]php)php%php'php,php php'php\php1php-php\php2php'php,php php$namephp)php)php;
php php php php php php php php php php php php ifphp(php$thisphp-php>headerExistsphp(php$lowerNamephp)php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php"nophp Headerphp withphp Namephp php$namephp orphp php$lowerNamephp foundphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$namephp php=php php$lowerNamephp;

php php php php php php php php php$headerphp php=php php$thisphp-php>php_headersphp[php$namephp]php;

php php php php php php php php switchphp php(php$formatphp)php php{
php php php php php php php php php php php php casephp php'stringphp'php:
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$headerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$headerphp php=php implodephp(Zendphp_Mimephp:php:LINEENDphp,php php$headerphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'arrayphp'php:
php php php php php php php php php php php php php php php php php$headerphp php=php php(arrayphp)php$headerphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php dophp nothing
php php php php php php php php php}

php php php php php php php php returnphp php$headerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp wheaterphp thephp Mailphp partphp hasphp aphp specificphp headerphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp headerExistsphp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php ifphp(issetphp(php$thisphp-php>php_headersphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp specificphp fieldphp fromphp aphp headerphp likephp contentphp typephp orphp allphp fieldsphp asphp array
php php php php php php*
php php php php php php*php Ifphp thephp headerphp occursphp morephp thanphp oncephp,php onlyphp thephp valuephp fromphp thephp firstphp header
php php php php php php*php isphp returnedphp.
php php php php php php*
php php php php php php*php Throwsphp aphp Zendphp_Mailphp_Exceptionphp ifphp thephp requestedphp headerphp doesphp notphp existphp.php If
php php php php php php*php thephp specificphp headerphp fieldphp doesphp notphp existphp,php returnsphp nullphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php php php php php php namephp ofphp headerphp,php likephp inphp getHeaderphp(php)
php php php php php php*php php@paramphp php stringphp php$wantedPartphp thephp wantedphp partphp,php defaultphp isphp firstphp,php ifphp nullphp anphp arrayphp withphp allphp partsphp isphp returned
php php php php php php*php php@paramphp php stringphp php$firstNamephp php keyphp namephp forphp thephp firstphp part
php php php php php php*php php@returnphp stringphp|arrayphp wantedphp partphp orphp allphp partsphp asphp arrayphp(php$firstNamephp php=php>php firstPartphp,php partnamephp php=php>php valuephp)
php php php php php php*php php@throwsphp Zendphp_Exceptionphp,php Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getHeaderFieldphp(php$namephp,php php$wantedPartphp php=php php0php,php php$firstNamephp php=php php0php)php php{
php php php php php php php php returnphp Zendphp_Mimephp_Decodephp:php:splitHeaderFieldphp(currentphp(php$thisphp-php>getHeaderphp(php$namephp,php php'arrayphp'php)php)php,php php$wantedPartphp,php php$firstNamephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getterphp forphp mailphp headersphp php-php namephp isphp matchedphp inphp lowercase
php php php php php php*
php php php php php php*php Thisphp getterphp isphp shortphp forphp Zendphp_Mailphp_Partphp:php:getHeaderphp(php$namephp,php php'stringphp'php)
php php php php php php*
php php php php php php*php php@seephp Zendphp_Mailphp_Partphp:php:getHeaderphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp headerphp name
php php php php php php*php php@returnphp stringphp valuephp ofphp header
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getHeaderphp(php$namephp,php php'stringphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Issetphp magicphp methodphp proxyphp tophp hasHeader
php php php php php php*
php php php php php php*php Thisphp methodphp isphp shortphp syntaxphp forphp Zendphp_Mailphp_Partphp:php:hasHeaderphp(php$namephp)php;
php php php php php php*
php php php php php php*php php@seephp Zendphp_Mailphp_Partphp:php:hasHeader
php php php php php php*
php php php php php php*php php@paramphp php string
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp php_php_issetphp(php$namephp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>headerExistsphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php magicphp methodphp tophp getphp contentphp ofphp part
php php php php php php*
php php php php php php*php php@returnphp stringphp content
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getContentphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp RecursiveIteratorphp:php:hasChildrenphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolphp currentphp elementphp hasphp childrenphp/isphp multipart
php php php php php php*php/
php php php php publicphp functionphp hasChildrenphp(php)
php php php php php{
php php php php php php php php php$currentphp php=php php$thisphp-php>currentphp(php)php;
php php php php php php php php returnphp php$currentphp php&php&php php$currentphp instanceofphp Zendphp_Mailphp_Partphp php&php&php php$currentphp-php>isMultipartphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp RecursiveIteratorphp:php:getChildrenphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Partphp samephp asphp selfphp:php:currentphp(php)
php php php php php php*php/
php php php php publicphp functionphp getChildrenphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>currentphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:validphp(php)
php php php php php php*
php php php php php php*php php@returnphp boolphp checkphp ifphp therephp'sphp aphp currentphp element
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_countPartsphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>countPartsphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_iterationPosphp php&php&php php$thisphp-php>php_iterationPosphp <php=php php$thisphp-php>php_countPartsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php+php+php$thisphp-php>php_iterationPosphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:keyphp(php)
php php php php php php*
php php php php php php*php php@returnphp stringphp keyphp/numberphp ofphp currentphp part
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iterationPosphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:currentphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Mailphp_Partphp currentphp part
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getPartphp(php$thisphp-php>php_iterationPosphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php implementsphp Iteratorphp:php:rewindphp(php)
php php php php php php*
php php php php php php*php php@returnphp null
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>countPartsphp(php)php;
php php php php php php php php php$thisphp-php>php_iterationPosphp php=php php1php;
php php php php php}
php}
