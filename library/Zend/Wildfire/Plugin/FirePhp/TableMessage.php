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
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Plugin
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php TableMessagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Wildfirephp_Pluginphp_FirePhpphp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Pluginphp/FirePhpphp.phpphp'php;

php/php*php*php Zendphp_Wildfirephp_Pluginphp_FirePhpphp_Messagephp php*php/
requirephp_oncephp php'Zendphp/Wildfirephp/Pluginphp/FirePhpphp/Messagephp.phpphp'php;

php/php*php*
php php*php Aphp messagephp envelopephp thatphp canphp bephp updatedphp forphp thephp durationphp ofphp thephp requetphp before
php php*php itphp getsphp flushedphp atphp thephp endphp ofphp thephp requestphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Wildfire
php php*php php@subpackagephp Plugin
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Wildfirephp_Pluginphp_FirePhpphp_TableMessagephp extendsphp Zendphp_Wildfirephp_Pluginphp_FirePhpphp_Message
php{
php php php php php/php*php*
php php php php php php*php Thephp headerphp ofphp thephp tablephp containingphp allphp columns
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_headerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Thephp rowsphp ofphp thephp table
php php php php php php*php php$varphp array
php php php php php php*php/
php php php php protectedphp php$php_rowsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$labelphp Thephp labelphp ofphp thephp table
php php php php php php*php/
php php php php functionphp php_php_constructphp(php$labelphp)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(Zendphp_Wildfirephp_Pluginphp_FirePhpphp:php:TABLEphp,php nullphp)php;
php php php php php php php php php$thisphp-php>setLabelphp(php$labelphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp tablephp header
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$headerphp Thephp headerphp columns
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setHeaderphp(php$headerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_headerphp php=php php$headerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp aphp rowphp tophp thephp endphp ofphp thephp tablephp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$rowphp Anphp arrayphp ofphp columnphp valuesphp representingphp aphp rowphp.
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addRowphp(php$rowphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_rowsphp[php]php php=php php$rowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp actualphp messagephp tophp bephp sentphp inphp itsphp finalphp formatphp.
php php php php php php*
php php php php php php*php php@returnphp mixedphp Returnsphp thephp messagephp tophp bephp sentphp.
php php php php php php*php/
php php php php publicphp functionphp getMessagephp(php)
php php php php php{
php php php php php php php php php$tablephp php=php php$thisphp-php>php_rowsphp;
php php php php php php php php ifphp(php$thisphp-php>php_headerphp)php php{
php php php php php php php php php php php php arrayphp_unshiftphp(php$tablephp,php$thisphp-php>php_headerphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$tablephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp rowphp atphp thephp givenphp index
php php php php php php*
php php php php php php*php php@paramphp integerphp php$indexphp Thephp indexphp ofphp thephp row
php php php php php php*php php@returnphp arrayphp Returnsphp thephp row
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getRowAtphp(php$indexphp)
php php php php php{
php php php php php php php php php$countphp php=php php$thisphp-php>getRowCountphp(php)php;

php php php php php php php php ifphp(php$indexphp <php php0php php|php|php php$indexphp php>php php$countphp-php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Rowphp indexphp(php'php.php$indexphp.php'php)php outphp ofphp boundsphp(php'php.php$countphp.php'php)php!php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_rowsphp[php$indexphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp rowphp onphp thephp givenphp indexphp tophp aphp newphp row
php php php php php php*
php php php php php php*php php@paramphp integerphp php$indexphp Thephp indexphp ofphp thephp row
php php php php php php*php php@paramphp arrayphp php$rowphp Thephp newphp dataphp forphp thephp row
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setRowAtphp(php$indexphp,php php$rowphp)
php php php php php{
php php php php php php php php php$countphp php=php php$thisphp-php>getRowCountphp(php)php;

php php php php php php php php ifphp(php$indexphp <php php0php php|php|php php$indexphp php>php php$countphp-php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Rowphp indexphp(php'php.php$indexphp.php'php)php outphp ofphp boundsphp(php'php.php$countphp.php'php)php!php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_rowsphp[php$indexphp]php php=php php$rowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp numberphp ofphp rows
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getRowCountphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_rowsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp lastphp rowphp ofphp thephp table
php php php php php php*
php php php php php php*php php@returnphp arrayphp Returnsphp thephp lastphp row
php php php php php php*php php@throwsphp Zendphp_Wildfirephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getLastRowphp(php)
php php php php php{
php php php php php php php php php$countphp php=php php$thisphp-php>getRowCountphp(php)php;

php php php php php php php php ifphp(php$countphp=php=php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Wildfirephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Wildfirephp_Exceptionphp(php'Cannotphp getphp lastphp rowphp asphp nophp rowsphp existphp!php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_rowsphp[php$countphp-php1php]php;
php php php php php}
php}
