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
php php*php php@versionphp php php php php$Idphp:php Messagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Zendphp_Mailphp_Part
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Partphp.phpphp'php;

php/php*php*
php php*php Zendphp_Mailphp_Messagephp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Mailphp/Messagephp/Interfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Mail
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Mailphp_Messagephp extendsphp Zendphp_Mailphp_Partphp implementsphp Zendphp_Mailphp_Messagephp_Interface
php{
php php php php php/php*php*
php php php php php php*php flagsphp forphp thisphp message
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_flagsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Publicphp constructor
php php php php php php*
php php php php php php*php Inphp additionphp tophp thephp parametersphp ofphp Zendphp_Mailphp_Partphp:php:php_php_constructphp(php)php thisphp constructorphp supportsphp:
php php php php php php*php php-php filephp php filenamephp orphp filephp handlephp ofphp aphp filephp withphp rawphp messagephp content
php php php php php php*php php-php flagsphp arrayphp withphp flagsphp forphp messagephp,php keysphp arephp ignoredphp,php usephp constantsphp definedphp inphp Zendphp_Mailphp_Storage
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$rawMessagephp php fullphp messagephp withphp orphp withoutphp headers
php php php php php php*php php@throwsphp Zendphp_Mailphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'filephp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!isphp_resourcephp(php$paramsphp[php'filephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$paramsphp[php'rawphp'php]php php=php php@filephp_getphp_contentsphp(php$paramsphp[php'filephp'php]php)php;
php php php php php php php php php php php php php php php php ifphp php(php$paramsphp[php'rawphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Mailphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Mailphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Mailphp_Exceptionphp(php'couldphp notphp openphp filephp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$paramsphp[php'rawphp'php]php php=php streamphp_getphp_contentsphp(php$paramsphp[php'filephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$paramsphp[php'flagsphp'php]php)php)php php{
php php php php php php php php php php php php php/php/php setphp keyphp andphp valuephp tophp thephp samephp valuephp forphp easyphp lookup
php php php php php php php php php php php php php$thisphp-php>php_flagsphp php=php arrayphp_combinephp(php$paramsphp[php'flagsphp'php]php,php php$paramsphp[php'flagsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$paramsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php returnphp toplinesphp asphp foundphp afterphp headers
php php php php php php*
php php php php php php*php php@returnphp stringphp toplines
php php php php php php*php/
php php php php publicphp functionphp getTopLinesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_topLinesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php checkphp ifphp flagphp isphp set
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$flagphp aphp flagphp namephp,php usephp constantsphp definedphp inphp Zendphp_Mailphp_Storage
php php php php php php*php php@returnphp boolphp truephp ifphp setphp,php otherwisephp false
php php php php php php*php/
php php php php publicphp functionphp hasFlagphp(php$flagphp)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_flagsphp[php$flagphp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getphp allphp setphp flags
php php php php php php*
php php php php php php*php php@returnphp arrayphp arrayphp withphp flagsphp,php keyphp andphp valuephp arephp thephp samephp forphp easyphp lookup
php php php php php php*php/
php php php php publicphp functionphp getFlagsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_flagsphp;
php php php php php}
php}
