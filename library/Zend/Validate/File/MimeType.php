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
php php*php php@versionphp php php php$Idphp:php MimeTypephp.phpphp php2php2php8php3php2php php2php0php1php0php-php0php8php-php1php2php php1php8php:php0php2php:php4php1Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatorphp forphp thephp mimephp typephp ofphp aphp file
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Filephp_MimeTypephp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php php/php*php*php#php@php+
php php php php php php*php php@constphp Errorphp typephp constants
php php php php php php*php/
php php php php constphp FALSEphp_TYPEphp php php php=php php'fileMimeTypeFalsephp'php;
php php php php constphp NOTphp_DETECTEDphp php=php php'fileMimeTypeNotDetectedphp'php;
php php php php constphp NOTphp_READABLEphp php=php php'fileMimeTypeNotReadablephp'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Errorphp messagephp templates
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:FALSEphp_TYPEphp php php php=php>php php"Filephp php'php%valuephp%php'php hasphp aphp falsephp mimetypephp ofphp php'php%typephp%php'php"php,
php php php php php php php php selfphp:php:NOTphp_DETECTEDphp php=php>php php"Thephp mimetypephp ofphp filephp php'php%valuephp%php'php couldphp notphp bephp detectedphp"php,
php php php php php php php php selfphp:php:NOTphp_READABLEphp php=php>php php"Filephp php'php%valuephp%php'php isphp notphp readablephp orphp doesphp notphp existphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageVariablesphp php=php arrayphp(
php php php php php php php php php'typephp'php php=php>php php'php_typephp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_typephp;

php php php php php/php*php*
php php php php php php*php Mimetypes
php php php php php php*
php php php php php php*php Ifphp nullphp,php therephp isphp nophp mimetype
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_mimetypephp;

php php php php php/php*php*
php php php php php php*php Magicfilephp tophp use
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php protectedphp php$php_magicfilephp;

php php php php php/php*php*
php php php php php php*php Finfophp objectphp tophp use
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_finfophp;

php php php php php/php*php*
php php php php php php*php Ifphp nophp php$php_ENVphp[php'MAGICphp'php]php isphp setphp,php tryphp andphp autodiscoverphp itphp basedphp onphp commonphp locations
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_magicFilesphp php=php arrayphp(
php php php php php php php php php'php/usrphp/sharephp/miscphp/magicphp'php,
php php php php php php php php php'php/usrphp/sharephp/miscphp/magicphp.mimephp'php,
php php php php php php php php php'php/usrphp/sharephp/miscphp/magicphp.mgcphp'php,
php php php php php php php php php'php/usrphp/sharephp/mimephp/magicphp'php,
php php php php php php php php php'php/usrphp/sharephp/mimephp/magicphp.mimephp'php,
php php php php php php php php php'php/usrphp/sharephp/mimephp/magicphp.mgcphp'php,
php php php php php php php php php'php/usrphp/sharephp/filephp/magicphp'php,
php php php php php php php php php'php/usrphp/sharephp/filephp/magicphp.mimephp'php,
php php php php php php php php php'php/usrphp/sharephp/filephp/magicphp.mgcphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Optionphp tophp allowphp headerphp check
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_headerCheckphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php Mimetypephp tophp accept
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$mimetypephp MimeType
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$mimetypephp)
php php php php php{
php php php php php php php php ifphp php(php$mimetypephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$mimetypephp php=php php$mimetypephp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_stringphp(php$mimetypephp)php)php php{
php php php php php php php php php php php php php$mimetypephp php=php explodephp(php'php,php'php,php php$mimetypephp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$mimetypephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Invalidphp optionsphp tophp validatorphp providedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$mimetypephp[php'magicfilephp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setMagicFilephp(php$mimetypephp[php'magicfilephp'php]php)php;
php php php php php php php php php php php php unsetphp(php$mimetypephp[php'magicfilephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$mimetypephp[php'headerCheckphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>enableHeaderCheckphp(php$mimetypephp[php'headerCheckphp'php]php)php;
php php php php php php php php php php php php unsetphp(php$mimetypephp[php'headerCheckphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setMimeTypephp(php$mimetypephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp setphp magicfile
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMagicFilephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_magicfilephp)php php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$php_ENVphp[php'MAGICphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMagicFilephp(php$php_ENVphp[php'MAGICphp'php]php)php;
php php php php php php php php php php php php php}php elseifphp php(php!php(php@iniphp_getphp(php"safephp_modephp"php)php php=php=php php'Onphp'php php|php|php php@iniphp_getphp(php"safephp_modephp"php)php php=php=php=php php1php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_magicFilesphp asphp php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php supressingphp errorsphp whichphp arephp thrownphp duephp tophp openbasephp_dirphp restrictions
php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setMagicFilephp(php$filephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_magicfilephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Validatephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php Intentionallyphp,php catchphp andphp fallphp through
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$thisphp-php>php_magicfilephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_magicfilephp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_magicfilephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp magicfilephp tophp use
php php php php php php*php ifphp nullphp,php thephp MAGICphp constantphp fromphp phpphp isphp used
php php php php php php*php ifphp thephp MAGICphp filephp isphp errorousphp,php nophp filephp willphp bephp set
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@throwsphp Zendphp_Validatephp_Exceptionphp Whenphp finfophp canphp notphp readphp thephp magicfile
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_MimeTypephp Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setMagicFilephp(php$filephp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$filephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_magicfilephp php=php nullphp;
php php php php php php php php php}php elsephp ifphp php(php!php(classphp_existsphp(php'finfophp'php,php falsephp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_magicfilephp php=php nullphp;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Magicfilephp canphp notphp bephp setphp.php Therephp isphp nophp finfophp extensionphp installedphp'php)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_filephp(php$filephp)php php|php|php php!isphp_readablephp(php$filephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Thephp givenphp magicfilephp canphp notphp bephp readphp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$constphp php=php definedphp(php'FILEINFOphp_MIMEphp_TYPEphp'php)php php?php FILEINFOphp_MIMEphp_TYPEphp php:php FILEINFOphp_MIMEphp;
php php php php php php php php php php php php php$thisphp-php>php_finfophp php=php php@finfophp_openphp(php$constphp,php php$filephp)php;
php php php php php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_finfophp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_finfophp php=php nullphp;
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Thephp givenphp magicfilephp isphp notphp acceptedphp byphp finfophp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_magicfilephp php=php php$filephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Headerphp Checkphp option
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp getHeaderCheckphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headerCheckphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definesphp ifphp thephp httpphp headerphp shouldphp bephp used
php php php php php php*php Notephp thatphp thisphp isphp unsavephp andphp thereforphp thephp defaultphp valuephp isphp false
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$checkHeader
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_MimeTypephp Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp enableHeaderCheckphp(php$headerCheckphp php=php truephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_headerCheckphp php=php php(booleanphp)php php$headerCheckphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp mimetypes
php php php php php php*
php php php php php php*php php@paramphp php booleanphp php$asArrayphp Returnsphp thephp valuesphp asphp arrayphp,php whenphp falsephp anphp concatedphp stringphp isphp returned
php php php php php php*php php@returnphp stringphp|array
php php php php php php*php/
php php php php publicphp functionphp getMimeTypephp(php$asArrayphp php=php falsephp)
php php php php php{
php php php php php php php php php$asArrayphp php php php=php php(boolphp)php php$asArrayphp;
php php php php php php php php php$mimetypephp php=php php(stringphp)php php$thisphp-php>php_mimetypephp;
php php php php php php php php ifphp php(php$asArrayphp)php php{
php php php php php php php php php php php php php$mimetypephp php=php explodephp(php'php,php'php,php php$mimetypephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$mimetypephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp mimetypes
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$mimetypephp Thephp mimetypesphp tophp validate
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setMimeTypephp(php$mimetypephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_mimetypephp php=php nullphp;
php php php php php php php php php$thisphp-php>addMimeTypephp(php$mimetypephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp thephp mimetypes
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$mimetypephp Thephp mimetypesphp tophp addphp forphp validation
php php php php php php*php php@returnphp Zendphp_Validatephp_Filephp_Extensionphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addMimeTypephp(php$mimetypephp)
php php php php php{
php php php php php php php php php$mimetypesphp php=php php$thisphp-php>getMimeTypephp(truephp)php;

php php php php php php php php ifphp php(isphp_stringphp(php$mimetypephp)php)php php{
php php php php php php php php php php php php php$mimetypephp php=php explodephp(php'php,php'php,php php$mimetypephp)php;
php php php php php php php php php}php elseifphp php(php!isphp_arrayphp(php$mimetypephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php"Invalidphp optionsphp tophp validatorphp providedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$mimetypephp[php'magicfilephp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$mimetypephp[php'magicfilephp'php]php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$mimetypephp asphp php$contentphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$contentphp)php php|php|php php!isphp_stringphp(php$contentphp)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$mimetypesphp[php]php php=php trimphp(php$contentphp)php;
php php php php php php php php php}
php php php php php php php php php$mimetypesphp php=php arrayphp_uniquephp(php$mimetypesphp)php;

php php php php php php php php php/php/php Sanityphp checkphp tophp ensurephp nophp emptyphp values
php php php php php php php php foreachphp php(php$mimetypesphp asphp php$keyphp php=php>php php$mtphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$mtphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$mimetypesphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_mimetypephp php=php implodephp(php'php,php'php,php php$mimetypesphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp thephp mimetypephp ofphp thephp filephp matchesphp thephp givenphp onesphp.php Alsophp parts
php php php php php php*php ofphp mimetypesphp canphp bephp checkedphp.php Ifphp youphp givephp forphp examplephp php"imagephp"php allphp image
php php php php php php*php mimephp typesphp willphp bephp acceptedphp likephp php"imagephp/gifphp"php,php php"imagephp/jpegphp"php andphp sophp onphp.
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
php php php php php php php php php php php php ifphp php(php!emptyphp(php$mimefilephp)php php&php&php emptyphp(php$thisphp-php>php_finfophp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_finfophp php=php php@finfophp_openphp(php$constphp,php php$mimefilephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_finfophp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_finfophp php=php php@finfophp_openphp(php$constphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_typephp php=php nullphp;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_finfophp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp php=php finfophp_filephp(php$thisphp-php>php_finfophp,php php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_typephp)php php&php&
php php php php php php php php php php php php php(functionphp_existsphp(php'mimephp_contentphp_typephp'php)php php&php&php iniphp_getphp(php'mimephp_magicphp.magicfilephp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_typephp php=php mimephp_contentphp_typephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_typephp)php php&php&php php$thisphp-php>php_headerCheckphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_typephp php=php php$filephp[php'typephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_typephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:NOTphp_DETECTEDphp)php;
php php php php php php php php php}

php php php php php php php php php$mimetypephp php=php php$thisphp-php>getMimeTypephp(truephp)php;
php php php php php php php php ifphp php(inphp_arrayphp(php$thisphp-php>php_typephp,php php$mimetypephp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php php$typesphp php=php explodephp(php'php/php'php,php php$thisphp-php>php_typephp)php;
php php php php php php php php php$typesphp php=php arrayphp_mergephp(php$typesphp,php explodephp(php'php-php'php,php php$thisphp-php>php_typephp)php)php;
php php php php php php php php php$typesphp php=php arrayphp_mergephp(php$typesphp,php explodephp(php'php;php'php,php php$thisphp-php>php_typephp)php)php;
php php php php php php php php foreachphp(php$mimetypephp asphp php$mimephp)php php{
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$mimephp,php php$typesphp)php)php php{
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_throwphp(php$filephp,php selfphp:php:FALSEphp_TYPEphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp anphp errorphp ofphp thephp givenphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$file
php php php php php php*php php@paramphp php stringphp php$errorType
php php php php php php*php php@returnphp false
php php php php php php*php/
php php php php protectedphp functionphp php_throwphp(php$filephp,php php$errorTypephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_valuephp php=php php$filephp[php'namephp'php]php;
php php php php php php php php php$thisphp-php>php_errorphp(php$errorTypephp)php;
php php php php php php php php returnphp falsephp;
php php php php php}
php}
