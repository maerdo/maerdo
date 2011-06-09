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
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Gettextphp.phpphp php2php2php6php5php3php php2php0php1php0php-php0php7php-php2php2php php1php8php:php4php1php:php3php9Zphp mabephp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Localephp php*php/
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*php Zendphp_Translatephp_Adapterphp php*php/
requirephp_oncephp php'Zendphp/Translatephp/Adapterphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Translatephp_Adapterphp_Gettextphp extendsphp Zendphp_Translatephp_Adapterphp php{
php php php php php/php/php Internalphp variables
php php php php privatephp php$php_bigEndianphp php php php=php falsephp;
php php php php privatephp php$php_filephp php php php php php php php php=php falsephp;
php php php php privatephp php$php_adapterInfophp php=php arrayphp(php)php;
php php php php privatephp php$php_dataphp php php php php php php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Readphp valuesphp fromphp thephp MOphp file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$bytes
php php php php php php*php/
php php php php privatephp functionphp php_readMODataphp(php$bytesphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_bigEndianphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php returnphp unpackphp(php'Vphp'php php.php php$bytesphp,php freadphp(php$thisphp-php>php_filephp,php php4php php*php php$bytesphp)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp unpackphp(php'Nphp'php php.php php$bytesphp,php freadphp(php$thisphp-php>php_filephp,php php4php php*php php$bytesphp)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp translationphp dataphp php(MOphp filephp readerphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$filenamephp php MOphp filephp tophp addphp,php fullphp pathphp mustphp bephp givenphp forphp access
php php php php php php*php php@paramphp php stringphp php php$localephp php php php Newphp Localephp/Languagephp tophp setphp,php identicalphp withphp localephp identifierphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@paramphp php arrayphp php php php$optionphp php php php OPTIONALphp Optionsphp tophp use
php php php php php php*php php@throwsphp Zendphp_Translationphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadTranslationDataphp(php$filenamephp,php php$localephp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_bigEndianphp php=php falsephp;
php php php php php php php php php$thisphp-php>php_filephp php php php php php php=php php@fopenphp(php$filenamephp,php php'rbphp'php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_filephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'Errorphp openingphp translationphp filephp php\php'php'php php.php php$filenamephp php.php php'php\php'php.php'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php@filesizephp(php$filenamephp)php <php php1php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'php\php'php'php php.php php$filenamephp php.php php'php\php'php isphp notphp aphp gettextphp filephp'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php getphp Endian
php php php php php php php php php$inputphp php=php php$thisphp-php>php_readMODataphp(php1php)php;
php php php php php php php php ifphp php(strtolowerphp(substrphp(dechexphp(php$inputphp[php1php]php)php,php php-php8php)php)php php=php=php php"php9php5php0php4php1php2dephp"php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bigEndianphp php=php falsephp;
php php php php php php php php php}php elsephp ifphp php(strtolowerphp(substrphp(dechexphp(php$inputphp[php1php]php)php,php php-php8php)php)php php=php=php php"dephp1php2php0php4php9php5php"php)php php{
php php php php php php php php php php php php php$thisphp-php>php_bigEndianphp php=php truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'php\php'php'php php.php php$filenamephp php.php php'php\php'php isphp notphp aphp gettextphp filephp'php)php;
php php php php php php php php php}
php php php php php php php php php/php/php readphp revisionphp php-php notphp supportedphp forphp now
php php php php php php php php php$inputphp php=php php$thisphp-php>php_readMODataphp(php1php)php;

php php php php php php php php php/php/php numberphp ofphp bytes
php php php php php php php php php$inputphp php=php php$thisphp-php>php_readMODataphp(php1php)php;
php php php php php php php php php$totalphp php=php php$inputphp[php1php]php;

php php php php php php php php php/php/php numberphp ofphp originalphp strings
php php php php php php php php php$inputphp php=php php$thisphp-php>php_readMODataphp(php1php)php;
php php php php php php php php php$OOffsetphp php=php php$inputphp[php1php]php;

php php php php php php php php php/php/php numberphp ofphp translationphp strings
php php php php php php php php php$inputphp php=php php$thisphp-php>php_readMODataphp(php1php)php;
php php php php php php php php php$TOffsetphp php=php php$inputphp[php1php]php;

php php php php php php php php php/php/php fillphp thephp originalphp table
php php php php php php php php fseekphp(php$thisphp-php>php_filephp,php php$OOffsetphp)php;
php php php php php php php php php$origtempphp php=php php$thisphp-php>php_readMODataphp(php2php php*php php$totalphp)php;
php php php php php php php php fseekphp(php$thisphp-php>php_filephp,php php$TOffsetphp)php;
php php php php php php php php php$transtempphp php=php php$thisphp-php>php_readMODataphp(php2php php*php php$totalphp)php;

php php php php php php php php forphp(php$countphp php=php php0php;php php$countphp <php php$totalphp;php php+php+php$countphp)php php{
php php php php php php php php php php php php ifphp php(php$origtempphp[php$countphp php*php php2php php+php php1php]php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php fseekphp(php$thisphp-php>php_filephp,php php$origtempphp[php$countphp php*php php2php php+php php2php]php)php;
php php php php php php php php php php php php php php php php php$originalphp php=php php@freadphp(php$thisphp-php>php_filephp,php php$origtempphp[php$countphp php*php php2php php+php php1php]php)php;
php php php php php php php php php php php php php php php php php$originalphp php=php explodephp(php"php\php0php"php,php php$originalphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$originalphp[php0php]php php=php php'php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$transtempphp[php$countphp php*php php2php php+php php1php]php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php fseekphp(php$thisphp-php>php_filephp,php php$transtempphp[php$countphp php*php php2php php+php php2php]php)php;
php php php php php php php php php php php php php php php php php$translatephp php=php freadphp(php$thisphp-php>php_filephp,php php$transtempphp[php$countphp php*php php2php php+php php1php]php)php;
php php php php php php php php php php php php php php php php php$translatephp php=php explodephp(php"php\php0php"php,php php$translatephp)php;
php php php php php php php php php php php php php php php php ifphp php(php(countphp(php$originalphp)php php>php php1php)php php&php&php php(countphp(php$translatephp)php php>php php1php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$localephp]php[php$originalphp[php0php]php]php php=php php$translatephp;
php php php php php php php php php php php php php php php php php php php php arrayphp_shiftphp(php$originalphp)php;
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$originalphp asphp php$origphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$localephp]php[php$origphp]php php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$localephp]php[php$originalphp[php0php]php]php php=php php$translatephp[php0php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php$localephp]php[php'php'php]php php=php trimphp(php$thisphp-php>php_dataphp[php$localephp]php[php'php'php]php)php;
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_dataphp[php$localephp]php[php'php'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_adapterInfophp[php$filenamephp]php php=php php'Nophp adapterphp informationphp availablephp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_adapterInfophp[php$filenamephp]php php=php php$thisphp-php>php_dataphp[php$localephp]php[php'php'php]php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$thisphp-php>php_dataphp[php$localephp]php[php'php'php]php)php;
php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp informations
php php php php php php*
php php php php php php*php php@returnphp arrayphp Eachphp loadedphp adapterphp informationphp asphp arrayphp value
php php php php php php*php/
php php php php publicphp functionphp getAdapterInfophp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterInfophp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php"Gettextphp"php;
php php php php php}
php}
