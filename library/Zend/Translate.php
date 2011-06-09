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
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Translatephp.phpphp php2php2php5php9php1php php2php0php1php0php-php0php7php-php1php6php php2php0php:php5php8php:php0php5Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Translatephp_Adapter
php php*php/
requirephp_oncephp php'Zendphp/Translatephp/Adapterphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Translate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Translatephp php{
php php php php php/php*php*
php php php php php php*php Adapterphp namesphp constants
php php php php php php*php/
php php php php constphp ANphp_ARRAYphp php php php=php php'Arrayphp'php;
php php php php constphp ANphp_CSVphp php php php php php=php php'Csvphp'php;
php php php php constphp ANphp_GETTEXTphp php=php php'Gettextphp'php;
php php php php constphp ANphp_INIphp php php php php php=php php'Iniphp'php;
php php php php constphp ANphp_QTphp php php php php php php=php php'Qtphp'php;
php php php php constphp ANphp_TBXphp php php php php php=php php'Tbxphp'php;
php php php php constphp ANphp_TMXphp php php php php php=php php'Tmxphp'php;
php php php php constphp ANphp_XLIFFphp php php php=php php'Xliffphp'php;
php php php php constphp ANphp_XMLTMphp php php php=php php'XmlTmphp'php;

php php php php constphp LOCALEphp_DIRECTORYphp php=php php'directoryphp'php;
php php php php constphp LOCALEphp_FILENAMEphp php php=php php'filenamephp'php;

php php php php php/php*php*
php php php php php php*php Adapter
php php php php php php*
php php php php php php*php php@varphp Zendphp_Translatephp_Adapter
php php php php php php*php/
php php php php privatephp php$php_adapterphp;

php php php php php/php*php*
php php php php php php*php Generatesphp thephp standardphp translationphp object
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Optionsphp tophp use
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php php php php php php php php php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$optionsphp[php'adapterphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optphp php php php php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optphp,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'adapterphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setAdapterphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp adapter
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$optionsphp Optionsphp tophp use
php php php php php php*php php@throwsphp Zendphp_Translatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elsephp ifphp php(funcphp_numphp_argsphp(php)php php>php php1php)php php{
php php php php php php php php php php php php php$argsphp php php php php php php php php php php php php php php php=php funcphp_getphp_argsphp(php)php;
php php php php php php php php php php php php php$optionsphp php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php php php php php$optionsphp[php'adapterphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'localephp'php]php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php$optphp php php php php php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$optphp,php php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php arrayphp(php'adapterphp'php php=php>php php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php'Zendphp/Translatephp/Adapterphp/php'php php.php ucfirstphp(php$optionsphp[php'adapterphp'php]php)php.php php'php.phpphp'php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'adapterphp'php]php php=php php'Zendphp_Translatephp_Adapterphp_php'php php.php ucfirstphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!classphp_existsphp(php$optionsphp[php'adapterphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'cachephp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php Zendphp_Translatephp_Adapterphp:php:setCachephp(php$optionsphp[php'cachephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$adapterphp php=php php$optionsphp[php'adapterphp'php]php;
php php php php php php php php unsetphp(php$optionsphp[php'adapterphp'php]php)php;
php php php php php php php php php$thisphp-php>php_adapterphp php=php newphp php$adapterphp(php$optionsphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp instanceofphp Zendphp_Translatephp_Adapterphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php"Adapterphp php"php php.php php$adapterphp php.php php"php doesphp notphp extendphp Zendphp_Translatephp_Adapterphp"php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adaptersphp namephp andphp itphp'sphp options
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp cache
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Cachephp_Corephp Thephp setphp cache
php php php php php php*php/
php php php php publicphp staticphp functionphp getCachephp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Translatephp_Adapterphp:php:getCachephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp cachephp forphp allphp instancesphp ofphp Zendphp_Translate
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Cachephp_Corephp php$cachephp Cachephp tophp storephp to
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setCachephp(Zendphp_Cachephp_Corephp php$cachephp)
php php php php php{
php php php php php php php php Zendphp_Translatephp_Adapterphp:php:setCachephp(php$cachephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp aphp cachephp isphp set
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp hasCachephp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Translatephp_Adapterphp:php:hasCachephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp anyphp setphp cache
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp removeCachephp(php)
php php php php php{
php php php php php php php php Zendphp_Translatephp_Adapterphp:php:removeCachephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearsphp allphp setphp cachephp data
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tagphp Tagphp tophp clearphp whenphp thephp defaultphp tagphp namephp isphp notphp used
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp clearCachephp(php$tagphp php=php nullphp)
php php php php php{
php php php php php php php php Zendphp_Translatephp_Adapterphp:php:clearCachephp(php$tagphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Callsphp allphp methodsphp fromphp thephp adapter
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(methodphp_existsphp(php$thisphp-php>php_adapterphp,php php$methodphp)php)php php{
php php php php php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_adapterphp,php php$methodphp)php,php php$optionsphp)php;
php php php php php php php php php}
php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php"Unknownphp methodphp php'php"php php.php php$methodphp php.php php"php'php calledphp!php"php)php;
php php php php php}
php}
