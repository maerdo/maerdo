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
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Barcodephp.phpphp php2php2php6php6php8php php2php0php1php0php-php0php7php-php2php5php php1php4php:php5php0php:php4php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Loader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Barcodephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp INVALIDphp php php php php php php php php=php php'barcodeInvalidphp'php;
php php php php constphp FAILEDphp php php php php php php php php php=php php'barcodeFailedphp'php;
php php php php constphp INVALIDphp_CHARSphp php php=php php'barcodeInvalidCharsphp'php;
php php php php constphp INVALIDphp_LENGTHphp php=php php'barcodeInvalidLengthphp'php;

php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:FAILEDphp php php php php php php php php php=php>php php"php'php%valuephp%php'php failedphp checksumphp validationphp"php,
php php php php php php php php selfphp:php:INVALIDphp_CHARSphp php php=php>php php"php'php%valuephp%php'php containsphp invalidphp charactersphp"php,
php php php php php php php php selfphp:php:INVALIDphp_LENGTHphp php=php>php php"php'php%valuephp%php'php shouldphp havephp aphp lengthphp ofphp php%lengthphp%php charactersphp"php,
php php php php php php php php selfphp:php:INVALIDphp php php php php php php php php=php>php php"Invalidphp typephp givenphp.php Stringphp expectedphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Additionalphp variablesphp availablephp forphp validationphp failurephp messages
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'lengthphp'php php=php>php php'php_lengthphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Lengthphp forphp thephp setphp subtype
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_lengthphp;

php php php php php/php*php*
php php php php php php*php Barcodephp adapter
php php php php php php*
php php php php php php*php php@varphp Zendphp_Validatephp_Barcodephp_BarcodeAdapter
php php php php php php*php/
php php php php protectedphp php$php_adapterphp;

php php php php php/php*php*
php php php php php php*php Generatesphp thephp standardphp validatorphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Configphp|
php php php php php php*php php php php php php php php php Zendphp_Validatephp_Barcodephp_BarcodeAdapterphp php$adapterphp Barcodephp adapterphp tophp use
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$adapterphp)
php php php php php{
php php php php php php php php ifphp php(php$adapterphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$adapterphp php=php php$adapterphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php php=php nullphp;
php php php php php php php php php$checksumphp php=php nullphp;
php php php php php php php php ifphp php(isphp_arrayphp(php$adapterphp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$adapterphp)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp php=php php$adapterphp[php'optionsphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'checksumphp'php,php php$adapterphp)php)php php{
php php php php php php php php php php php php php php php php php$checksumphp php=php php$adapterphp[php'checksumphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'adapterphp'php,php php$adapterphp)php)php php{
php php php php php php php php php php php php php php php php php$adapterphp php=php php$adapterphp[php'adapterphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Missingphp optionphp php'adapterphp'php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setAdapterphp(php$adapterphp,php php$optionsphp)php;
php php php php php php php php ifphp php(php$checksumphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setChecksumphp(php$checksumphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp adapter
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Validatephp_Barcodephp_BarcodeAdapter
php php php php php php*php/
php php php php publicphp functionphp getAdapterphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_adapterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp barcodephp adapter
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Validatephp_Barcodephp php$adapterphp Barcodephp adapterphp tophp use
php php php php php php*php php@paramphp php arrayphp php php$optionsphp Optionsphp forphp thisphp adapter
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setAdapterphp(php$adapterphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$adapterphp php=php ucfirstphp(strtolowerphp(php$adapterphp)php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(Zendphp_Loaderphp:php:isReadablephp(php'Zendphp/Validatephp/Barcodephp/php'php php.php php$adapterphp.php php'php.phpphp'php)php)php php{
php php php php php php php php php php php php php$adapterphp php=php php'Zendphp_Validatephp_Barcodephp_php'php php.php php$adapterphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!classphp_existsphp(php$adapterphp)php)php php{
php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$adapterphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_adapterphp php=php newphp php$adapterphp(php$optionsphp)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_adapterphp instanceofphp Zendphp_Validatephp_Barcodephp_AdapterInterfacephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(
php php php php php php php php php php php php php php php php php"Adapterphp php"php php.php php$adapterphp php.php php"php doesphp notphp implementphp Zendphp_Validatephp_Barcodephp_AdapterInterfacephp"
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp checksumphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getChecksumphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getAdapterphp(php)php-php>getCheckphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp checksumphp option
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$checksum
php php php php php php*php php@returnphp Zendphp_Validatephp_Barcode
php php php php php php*php/
php php php php publicphp functionphp setChecksumphp(php$checksumphp)
php php php php php{
php php php php php php php php php$thisphp-php>getAdapterphp(php)php-php>setCheckphp(php$checksumphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp andphp onlyphp ifphp php$valuephp containsphp aphp validphp barcode
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;
php php php php php php php php php$adapterphp php php php php php php php=php php$thisphp-php>getAdapterphp(php)php;
php php php php php php php php php$thisphp-php>php_lengthphp php=php php$adapterphp-php>getLengthphp(php)php;
php php php php php php php php php$resultphp php php php php php php php php=php php$adapterphp-php>checkLengthphp(php$valuephp)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_lengthphp)php)php php{
php php php php php php php php php php php php php php php php php$tempphp php=php php$thisphp-php>php_lengthphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_lengthphp php=php php"php"php;
php php php php php php php php php php php php php php php php foreachphp(php$tempphp asphp php$lengthphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_lengthphp php.php=php php"php/php"php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_lengthphp php.php=php php$lengthphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_lengthphp php=php substrphp(php$thisphp-php>php_lengthphp,php php1php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_LENGTHphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$resultphp php=php php$adapterphp-php>checkCharsphp(php$valuephp)php;
php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:INVALIDphp_CHARSphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getChecksumphp(php)php)php php{
php php php php php php php php php php php php php$resultphp php=php php$adapterphp-php>checksumphp(php$valuephp)php;
php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:FAILEDphp)php;
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}