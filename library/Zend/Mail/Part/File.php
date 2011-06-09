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
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Mimephp_Decode
php php*php/
requirephp_oncephp php'Zendphp/Mimephp/Decodephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Mailphp_Part
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Partphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Partphp_Filephp extendsphp Zendphp_Mailphp_Part
php{
php php php php protectedphp php$php_contentPosphp php=php arrayphp(php)php;
php php php php protectedphp php$php_partPosphp php=php arrayphp(php)php;
php php php php protectedphp php$php_fhphp;

php php php php php/php*php*
php php php php php php*php Publicphp constructor
php php php php php php*
php php php php php php*php Thisphp handlerphp supportsphp thephp followingphp paramsphp:
php php php php php php*php php-php filephp php php php php filenamephp orphp openphp filephp handlerphp withphp messagephp contentphp php(requiredphp)
php php php php php php*php php-php startPosphp startphp positionphp ofphp messagephp orphp partphp inphp filephp php(defaultphp:php currentphp positionphp)
php php php php php php*php php-php endPosphp php php endphp positionphp ofphp messagephp orphp partphp inphp filephp php(defaultphp:php endphp ofphp filephp)
php php php php php php*
php php php php php php*php php@paramphp php php arrayphp php$paramsphp php fullphp messagephp withphp orphp withoutphp headers
php php php php php php*php php@throwsphp php Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'filephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'nophp filephp givenphp inphp paramsphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_resourcephp(php$paramsphp[php'filephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fhphp php=php fopenphp(php$paramsphp[php'filephp'php]php,php php'rphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fhphp php=php php$paramsphp[php'filephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_fhphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'couldphp notphp openphp filephp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'startPosphp'php]php)php)php php{
php php php php php php php php php php php php fseekphp(php$thisphp-php>php_fhphp,php php$paramsphp[php'startPosphp'php]php)php;
php php php php php php php php php}
php php php php php php php php php$headerphp php=php php'php'php;
php php php php php php php php php$endPosphp php=php issetphp(php$paramsphp[php'endPosphp'php]php)php php?php php$paramsphp[php'endPosphp'php]php php:php nullphp;
php php php php php php php php whilephp php(php(php$endPosphp php=php=php=php nullphp php|php|php ftellphp(php$thisphp-php>php_fhphp)php <php php$endPosphp)php php&php&php trimphp(php$linephp php=php fgetsphp(php$thisphp-php>php_fhphp)php)php)php php{
php php php php php php php php php php php php php$headerphp php.php=php php$linephp;
php php php php php php php php php}

php php php php php php php php Zendphp_Mimephp_Decodephp:php:splitMessagephp(php$headerphp,php php$thisphp-php>php_headersphp,php php$nullphp)php;

php php php php php php php php php$thisphp-php>php_contentPosphp[php0php]php php=php ftellphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php ifphp php(php$endPosphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_contentPosphp[php1php]php php=php php$endPosphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php fseekphp(php$thisphp-php>php_fhphp,php php0php,php SEEKphp_ENDphp)php;
php php php php php php php php php php php php php$thisphp-php>php_contentPosphp[php1php]php php=php ftellphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>isMultipartphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$boundaryphp php=php php$thisphp-php>getHeaderFieldphp(php'contentphp-typephp'php,php php'boundaryphp'php)php;
php php php php php php php php ifphp php(php!php$boundaryphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'nophp boundaryphp foundphp inphp contentphp typephp tophp splitphp messagephp'php)php;
php php php php php php php php php}

php php php php php php php php php$partphp php=php arrayphp(php)php;
php php php php php php php php php$posphp php=php php$thisphp-php>php_contentPosphp[php0php]php;
php php php php php php php php fseekphp(php$thisphp-php>php_fhphp,php php$posphp)php;
php php php php php php php php whilephp php(php!feofphp(php$thisphp-php>php_fhphp)php php&php&php php(php$endPosphp php=php=php=php nullphp php|php|php php$posphp <php php$endPosphp)php)php php{
php php php php php php php php php php php php php$linephp php=php fgetsphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php php php php ifphp php(php$linephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php ifphp php(feofphp(php$thisphp-php>php_fhphp)php)php php{
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'errorphp readingphp filephp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$lastPosphp php=php php$posphp;
php php php php php php php php php php php php php$posphp php=php ftellphp(php$thisphp-php>php_fhphp)php;
php php php php php php php php php php php php php$linephp php=php trimphp(php$linephp)php;

php php php php php php php php php php php php ifphp php(php$linephp php=php=php php'php-php-php'php php.php php$boundaryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$partphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php notphp firstphp part
php php php php php php php php php php php php php php php php php php php php php$partphp[php1php]php php=php php$lastPosphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_partPosphp[php]php php=php php$partphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$partphp php=php arrayphp(php$posphp)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$linephp php=php=php php'php-php-php'php php.php php$boundaryphp php.php php'php-php-php'php)php php{
php php php php php php php php php php php php php php php php php$partphp[php1php]php php=php php$lastPosphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_partPosphp[php]php php=php php$partphp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_countPartsphp php=php countphp(php$thisphp-php>php_partPosphp)php;

php php php php php}


php php php php php/php*php*
php php php php php php*php Bodyphp ofphp part
php php php php php php*
php php php php php php*php Ifphp partphp isphp multipartphp thephp rawphp contentphp ofphp thisphp partphp withphp allphp subphp partsphp isphp returned
php php php php php php*
php php php php php php*php php@returnphp stringphp body
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php$streamphp php=php nullphp)
php php php php php{
php php php php php php php php fseekphp(php$thisphp-php>php_fhphp,php php$thisphp-php>php_contentPosphp[php0php]php)php;
php php php php php php php php ifphp php(php$streamphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp streamphp_copyphp_tophp_streamphp(php$thisphp-php>php_fhphp,php php$streamphp,php php$thisphp-php>php_contentPosphp[php1php]php php-php php$thisphp-php>php_contentPosphp[php0php]php)php;
php php php php php php php php php}
php php php php php php php php php$lengthphp php=php php$thisphp-php>php_contentPosphp[php1php]php php-php php$thisphp-php>php_contentPosphp[php0php]php;
php php php php php php php php returnphp php$lengthphp <php php1php php?php php'php'php php:php freadphp(php$thisphp-php>php_fhphp,php php$lengthphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp sizephp ofphp part
php php php php php php*
php php php php php php*php Quitephp simplephp implementedphp currentlyphp php(notphp decodingphp)php.php Handlephp withphp carephp.
php php php php php php*
php php php php php php*php php@returnphp intphp size
php php php php php php*php/
php php php php publicphp functionphp getSizephp(php)php php{
php php php php php php php php returnphp php$thisphp-php>php_contentPosphp[php1php]php php-php php$thisphp-php>php_contentPosphp[php0php]php;
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
php php php php php php php php php-php-php$numphp;
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_partPosphp[php$numphp]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'partphp notphp foundphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp newphp selfphp(arrayphp(php'filephp'php php=php>php php$thisphp-php>php_fhphp,php php'startPosphp'php php=php>php php$thisphp-php>php_partPosphp[php$numphp]php[php0php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'endPosphp'php php=php>php php$thisphp-php>php_partPosphp[php$numphp]php[php1php]php)php)php;
php php php php php}
php}
