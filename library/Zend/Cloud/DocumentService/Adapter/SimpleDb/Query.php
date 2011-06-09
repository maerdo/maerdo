<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*
php php*php php@seephp Zendphp_Cloudphp_DocumentServicephp_Query
php php*php/
requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Queryphp.phpphp'php;

php/php*php*
php php*php Classphp implementingphp Queryphp adapterphp forphp workingphp withphp SimpleDbphp queriesphp inphp a
php php*php structuredphp way
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Cloud
php php*php php@subpackagephp DocumentService
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp_Query
php php php php extendsphp Zendphp_Cloudphp_DocumentServicephp_Query
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDb
php php php php php php*php/
php php php php protectedphp php$php_adapterphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp php$adapter
php php php php php php*php php@paramphp php nullphp|stringphp php$collectionName
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDbphp php$adapterphp,php php$collectionNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_adapterphp php=php php$adapterphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php$collectionNamephp)php php{
php php php php php php php php php php php php php$thisphp-php>fromphp(php$collectionNamephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cloudphp_DocumentServicephp_Adapterphp_SimpleDb
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Assemblephp thephp queryphp intophp aphp formatphp thephp adapterphp canphp utilize
php php php php php php*
php php php php php php*php php@varphp php php php stringphp php$collectionNamephp Namephp ofphp collectionphp fromphp whichphp tophp select
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp assemblephp(php$collectionNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$adapterphp php=php php$thisphp-php>getAdapterphp(php)php-php>getClientphp(php)php;
php php php php php php php php php$selectphp php php=php nullphp;
php php php php php php php php php$fromphp php php php php=php nullphp;
php php php php php php php php php$wherephp php php php=php nullphp;
php php php php php php php php php$orderphp php php php=php nullphp;
php php php php php php php php php$limitphp php php php=php nullphp;
php php php php php php php php foreachphp php(php$thisphp-php>getClausesphp(php)php asphp php$clausephp)php php{
php php php php php php php php php php php php listphp(php$namephp,php php$argsphp)php php=php php$clausephp;

php php php php php php php php php php php php switchphp php(php$namephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:QUERYphp_SELECTphp:
php php php php php php php php php php php php php php php php php php php php php$selectphp php=php php$argsphp[php0php]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:QUERYphp_FROMphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$fromphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Onlyphp allowphp settingphp FROMphp clausephp once
php php php php php php php php php php php php php php php php php php php php php php php php php$fromphp php=php php$adapterphp-php>quoteNamephp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:QUERYphp_WHEREphp:
php php php php php php php php php php php php php php php php php php php php php$statementphp php=php php$thisphp-php>php_parseWherephp(php$argsphp[php0php]php,php php$argsphp[php1php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$wherephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$wherephp php=php php$statementphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$operatorphp php=php emptyphp(php$argsphp[php2php]php)php php?php php'ANDphp'php php:php php$argsphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$wherephp php.php=php php'php php'php php.php php$operatorphp php.php php'php php'php php.php php$statementphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:QUERYphp_WHEREIDphp:
php php php php php php php php php php php php php php php php php php php php php$statementphp php=php php$thisphp-php>php_parseWherephp(php'ItemNamephp(php)php php=php php?php'php,php arrayphp(php$argsphp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$wherephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$wherephp php=php php$statementphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$operatorphp php=php emptyphp(php$argsphp[php2php]php)php php?php php'ANDphp'php php:php php$argsphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$wherephp php.php=php php'php php'php php.php php$operatorphp php.php php'php php'php php.php php$statementphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:QUERYphp_ORDERphp:
php php php php php php php php php php php php php php php php php php php php php$orderphp php=php php$adapterphp-php>quoteNamephp(php$argsphp[php0php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$argsphp[php1php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$orderphp php.php=php php'php php'php php.php php$argsphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:QUERYphp_LIMITphp:
php php php php php php php php php php php php php php php php php php php php php$limitphp php=php php$argsphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php/php/php Ignorephp unknownphp clauses
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$selectphp)php)php php{
php php php php php php php php php php php php php$selectphp php=php php"php*php"php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$fromphp)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php$collectionNamephp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Cloudphp/DocumentServicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Cloudphp_DocumentServicephp_Exceptionphp(php"Queryphp requiresphp aphp FROMphp clausephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$fromphp php=php php$adapterphp-php>quoteNamephp(php$collectionNamephp)php;
php php php php php php php php php}
php php php php php php php php php$queryphp php=php php"selectphp php$selectphp fromphp php$fromphp"php;
php php php php php php php php ifphp php(php!emptyphp(php$wherephp)php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php"php wherephp php$wherephp"php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$orderphp)php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php"php orderphp byphp php$orderphp"php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$limitphp)php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php"php limitphp php$limitphp"php;
php php php php php php php php php}
php php php php php php php php returnphp php$queryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp aphp wherephp statementphp intophp servicephp-specificphp language
php php php php php php*
php php php php php php*php php@todophp php php Ensurephp thisphp fulfillsphp thephp entirephp SimpleDBphp queryphp specificationphp forphp WHERE
php php php php php php*php php@paramphp php stringphp php$where
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_parseWherephp(php$wherephp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$argsphp)php)php php{
php php php php php php php php php php php php php$argsphp php=php php(arrayphp)php php$argsphp;
php php php php php php php php php}
php php php php php php php php php$adapterphp php=php php$thisphp-php>getAdapterphp(php)php-php>getClientphp(php)php;
php php php php php php php php php$iphp php=php php0php;
php php php php php php php php whilephp php(falsephp php!php=php=php php(php$posphp php=php strposphp(php$wherephp,php php'php?php'php)php)php)php php{
php php php php php php php php php php php php$wherephp php=php substrphp_replacephp(php$wherephp,php php$adapterphp-php>quotephp(php$argsphp[php$iphp]php)php,php php$posphp)php;
php php php php php php php php php php php php+php+php$iphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php'php(php'php php!php=php php$wherephp[php0php]php)php php|php|php php(php'php)php'php php!php=php php$wherephp[strlenphp(php$wherephp)php php-php php1php]php)php)php php{
php php php php php php php php php php php php php$wherephp php=php php'php(php'php php.php php$wherephp php.php php'php)php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$wherephp;
php php php php php}
php php}
