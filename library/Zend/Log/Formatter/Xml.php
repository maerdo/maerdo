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
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Formatter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Xmlphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/

php/php*php*php Zendphp_Logphp_Formatterphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Logphp/Formatterphp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Log
php php*php php@subpackagephp Formatter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Xmlphp.phpphp php2php3php5php7php6php php2php0php1php0php-php1php2php-php2php3php php2php3php:php2php5php:php4php4Zphp ramonphp php$
php php*php/
classphp Zendphp_Logphp_Formatterphp_Xmlphp implementsphp Zendphp_Logphp_Formatterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Namephp ofphp rootphp element
php php php php php php*php/
php php php php protectedphp php$php_rootElementphp;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Relatesphp XMLphp elementsphp tophp logphp dataphp fieldphp keysphp.
php php php php php php*php/
php php php php protectedphp php$php_elementMapphp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Encodingphp tophp usephp inphp XML
php php php php php php*php/
php php php php protectedphp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$rootElementphp Namephp ofphp rootphp element
php php php php php php*php php@paramphp arrayphp php$elementMapphp Relatesphp XMLphp elementsphp tophp logphp dataphp fieldphp keys
php php php php php php*php php@paramphp stringphp php$encodingphp Encodingphp tophp usephp php(defaultsphp tophp UTFphp-php8php)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$rootElementphp php=php php'logEntryphp'php,php php$elementMapphp php=php nullphp,php php$encodingphp php=php php'UTFphp-php8php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rootElementphp php=php php$rootElementphp;
php php php php php php php php php$thisphp-php>php_elementMapphp php php=php php$elementMapphp;
php php php php php php php php php$thisphp-php>setEncodingphp(php$encodingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp encoding
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Logphp_Formatterphp_Xml
php php php php php php*php/
php php php php publicphp functionphp setEncodingphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatsphp dataphp intophp aphp singlephp linephp tophp bephp writtenphp byphp thephp writerphp.
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php$eventphp php php php eventphp data
php php php php php php*php php@returnphp stringphp php php php php php php php php php php php php formattedphp linephp tophp writephp tophp thephp log
php php php php php php*php/
php php php php publicphp functionphp formatphp(php$eventphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_elementMapphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$dataToInsertphp php=php php$eventphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataToInsertphp php=php arrayphp(php)php;
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_elementMapphp asphp php$elementNamephp php=php>php php$fieldKeyphp)php php{
php php php php php php php php php php php php php php php php php$dataToInsertphp[php$elementNamephp]php php=php php$eventphp[php$fieldKeyphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$encphp php=php php$thisphp-php>getEncodingphp(php)php;
php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php$encphp)php;
php php php php php php php php php$eltphp php=php php$domphp-php>appendChildphp(newphp DOMElementphp(php$thisphp-php>php_rootElementphp)php)php;

php php php php php php php php foreachphp php(php$dataToInsertphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp(php$keyphp php=php=php php"messagephp"php)php php{
php php php php php php php php php php php php php php php php php$valuephp php=php htmlspecialcharsphp(php$valuephp,php ENTphp_COMPATphp,php php$encphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$eltphp-php>appendChildphp(newphp DOMElementphp(php$keyphp,php php$valuephp)php)php;
php php php php php php php php php}

php php php php php php php php php$xmlphp php=php php$domphp-php>saveXMLphp(php)php;
php php php php php php php php php$xmlphp php=php pregphp_replacephp(php'php/<php\php?xmlphp versionphp=php"php1php.php0php"php(php encodingphp=php"php[php^php\php"php]php*php"php)php?php\php?php>php\nphp/uphp'php,php php'php'php,php php$xmlphp)php;

php php php php php php php php returnphp php$xmlphp php.php PHPphp_EOLphp;
php php php php php}

php}
