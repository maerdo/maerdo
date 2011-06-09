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
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php ExcludeMimeTypephp.phpphp php2php1php9php3php5php php2php0php1php0php-php0php4php-php1php8php php1php6php:php2php1php:php3php5Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Filephp_MimeType
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Filephp/MimeTypephp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp mimephp typephp ofphp aphp file
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_ExcludeMimeTypephp extendsphp Zendphp_Validatephp_Filephp_MimeType
php{
php php php php constphp FALSEphp_TYPEphp php php php=php php'fileExcludeMimeTypeFalsephp'php;
php php php php constphp NOTphp_DETECTEDphp php=php php'fileExcludeMimeTypeNotDetectedphp'php;
php php php php constphp NOTphp_READABLEphp php=php php'fileExcludeMimeTypeNotReadablephp'php;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp thephp mimetypephp ofphp thephp filephp doesphp notphp matchephp thephp givenphp onesphp.php Alsophp parts
php php php php php php*php ofphp mimetypesphp canphp bephp checkedphp.php Ifphp youphp givephp forphp examplephp php"imagephp"php allphp image
php php php php php php*php mimephp typesphp willphp notphp bephp acceptedphp likephp php"imagephp/gifphp"php,php php"imagephp/jpegphp"php andphp sophp onphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$valuephp Realphp filephp tophp checkphp forphp mimetype
php php php php php php*php php@paramphp php arrayphp php php$filephp php Filephp dataphp fromphp Zendphp_Filephp_Transfer
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp,php php$filephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$filephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$filephp php=php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$value
php php php php php php php php php php php php php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Isphp filephp readablephp php?
php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php ifphp php(php!Zendphp_Loaderphp:php:isReadablephp(php$valuephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_READABLEphp)php;
php php php php php php php php php}

php php php php php php php php php$mimefilephp php=php php$thisphp-php>getMagicFilephp(php)php;
php php php php php php php php ifphp php(classphp_existsphp(php'finfophp'php,php falsephp)php)php php{
php php php php php php php php php php php php php$constphp php=php definedphp(php'FILEINFOphp_MIMEphp_TYPEphp'php)php php?php FILEINFOphp_MIMEphp_TYPEphp php:php FILEINFOphp_MIMEphp;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$mimefilephp)php)php php{
php php php php php php php php php php php php php php php php php$mimephp php=php newphp finfophp(php$constphp,php php$mimefilephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$mimephp php=php newphp finfophp(php$constphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$mimephp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp php=php php$mimephp-php>filephp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$mimephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_typephp)php)php php{
php php php php php php php php php php php php ifphp php(functionphp_existsphp(php'mimephp_contentphp_typephp'php)php php&php&php iniphp_getphp(php'mimephp_magicphp.magicfilephp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp php=php mimephp_contentphp_typephp(php$valuephp)php;
php php php php php php php php php php php php php}php elseifphp php(php$thisphp-php>php_headerCheckphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp php=php php$filephp[php'typephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_typephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_DETECTEDphp)php;
php php php php php php php php php}

php php php php php php php php php$mimetypephp php=php php$thisphp-php>getMimeTypephp(truephp)php;
php php php php php php php php ifphp php(inphp_arrayphp(php$thisphp-php>php_typephp,php php$mimetypephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:FALSEphp_TYPEphp)php;
php php php php php php php php php}

php php php php php php php php php$typesphp php=php explodephp(php'php/php'php,php php$thisphp-php>php_typephp)php;
php php php php php php php php php$typesphp php=php arrayphp_mergephp(php$typesphp,php explodephp(php'php-php'php,php php$thisphp-php>php_typephp)php)php;
php php php php php php php php foreachphp(php$mimetypephp asphp php$mimephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$mimephp,php php$typesphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:FALSEphp_TYPEphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
