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
php php*php php@versionphp php php php php$Idphp:php Xliffphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Translatephp_Adapterphp_Xliffphp extendsphp Zendphp_Translatephp_Adapterphp php{
php php php php php/php/php Internalphp variables
php php php php privatephp php$php_filephp php php php php php php php php=php falsephp;
php php php php privatephp php$php_useIdphp php php php php php php php=php truephp;
php php php php privatephp php$php_clearedphp php php php php php=php arrayphp(php)php;
php php php php privatephp php$php_transunitphp php php php=php nullphp;
php php php php privatephp php$php_sourcephp php php php php php php=php nullphp;
php php php php privatephp php$php_targetphp php php php php php php=php nullphp;
php php php php privatephp php$php_langIdphp php php php php php php=php nullphp;
php php php php privatephp php$php_scontentphp php php php php=php nullphp;
php php php php privatephp php$php_tcontentphp php php php php=php nullphp;
php php php php privatephp php$php_stagphp php php php php php php php php=php falsephp;
php php php php privatephp php$php_ttagphp php php php php php php php php=php falsephp;
php php php php privatephp php$php_dataphp php php php php php php php php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Loadphp translationphp dataphp php(XLIFFphp filephp readerphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$localephp php php php Localephp/Languagephp tophp addphp dataphp forphp,php identicalphp withphp localephp identifierphp,
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php seephp Zendphp_Localephp forphp morephp information
php php php php php php*php php@paramphp php stringphp php php$filenamephp php XLIFFphp filephp tophp addphp,php fullphp pathphp mustphp bephp givenphp forphp access
php php php php php php*php php@paramphp php arrayphp php php php$optionphp php php php OPTIONALphp Optionsphp tophp use
php php php php php php*php php@throwsphp Zendphp_Translationphp_Exception
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_loadTranslationDataphp(php$filenamephp,php php$localephp,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_dataphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php!isphp_readablephp(php$filenamephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php'Translationphp filephp php\php'php'php php.php php$filenamephp php.php php'php\php'php isphp notphp readablephp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$optionsphp[php'useIdphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_useIdphp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_useIdphp php=php truephp;
php php php php php php php php php}

php php php php php php php php php$encodingphp php php php php php php=php php$thisphp-php>php_findEncodingphp(php$filenamephp)php;
php php php php php php php php php$thisphp-php>php_targetphp php=php php$localephp;
php php php php php php php php php$thisphp-php>php_filephp php php php=php xmlphp_parserphp_createphp(php$encodingphp)php;
php php php php php php php php xmlphp_setphp_objectphp(php$thisphp-php>php_filephp,php php$thisphp)php;
php php php php php php php php xmlphp_parserphp_setphp_optionphp(php$thisphp-php>php_filephp,php XMLphp_OPTIONphp_CASEphp_FOLDINGphp,php php0php)php;
php php php php php php php php xmlphp_setphp_elementphp_handlerphp(php$thisphp-php>php_filephp,php php"php_startElementphp"php,php php"php_endElementphp"php)php;
php php php php php php php php xmlphp_setphp_characterphp_dataphp_handlerphp(php$thisphp-php>php_filephp,php php"php_contentElementphp"php)php;

php php php php php php php php ifphp php(php!xmlphp_parsephp(php$thisphp-php>php_filephp,php filephp_getphp_contentsphp(php$filenamephp)php)php)php php{
php php php php php php php php php php php php php$exphp php=php sprintfphp(php'XMLphp errorphp:php php%sphp atphp linephp php%dphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php xmlphp_errorphp_stringphp(xmlphp_getphp_errorphp_codephp(php$thisphp-php>php_filephp)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php xmlphp_getphp_currentphp_linephp_numberphp(php$thisphp-php>php_filephp)php)php;
php php php php php php php php php php php php xmlphp_parserphp_freephp(php$thisphp-php>php_filephp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Translatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Translatephp_Exceptionphp(php$exphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dataphp;
php php php php php}

php php php php privatephp functionphp php_startElementphp(php$filephp,php php$namephp,php php$attribphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_stagphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_scontentphp php.php=php php"<php"php.php$namephp;
php php php php php php php php php php php php foreachphp(php$attribphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_scontentphp php.php=php php"php php$keyphp=php\php"php$valuephp\php"php"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_scontentphp php.php=php php"php>php"php;
php php php php php php php php php}php elsephp ifphp php(php$thisphp-php>php_ttagphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php.php=php php"<php"php.php$namephp;
php php php php php php php php php php php php foreachphp(php$attribphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php.php=php php"php php$keyphp=php\php"php$valuephp\php"php"php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php.php=php php"php>php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php switchphp(strtolowerphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php casephp php'filephp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_sourcephp php=php php$attribphp[php'sourcephp-languagephp'php]php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$attribphp[php'targetphp-languagephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_targetphp php=php php$attribphp[php'targetphp-languagephp'php]php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_sourcephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_sourcephp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_targetphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_targetphp]php php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'transphp-unitphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_transunitphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_langIdphp php=php php$attribphp[php'idphp'php]php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'sourcephp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_transunitphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_scontentphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stagphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ttagphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'targetphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_transunitphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ttagphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stagphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php privatephp functionphp php_endElementphp(php$filephp,php php$namephp)
php php php php php{
php php php php php php php php ifphp php(php(php$thisphp-php>php_stagphp php=php=php=php truephp)php andphp php(php$namephp php!php=php=php php'sourcephp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_scontentphp php.php=php php"<php/php"php.php$namephp.php"php>php"php;
php php php php php php php php php}php elsephp ifphp php(php(php$thisphp-php>php_ttagphp php=php=php=php truephp)php andphp php(php$namephp php!php=php=php php'targetphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php.php=php php"<php/php"php.php$namephp.php"php>php"php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$namephp)php)php php{
php php php php php php php php php php php php php php php php casephp php'transphp-unitphp'php:
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_transunitphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_langIdphp php php php php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_scontentphp php php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php php=php nullphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'sourcephp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_useIdphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_scontentphp)php php&php&php php!emptyphp(php$thisphp-php>php_langIdphp)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_sourcephp]php[php$thisphp-php>php_langIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_sourcephp]php[php$thisphp-php>php_langIdphp]php php=php php$thisphp-php>php_scontentphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_scontentphp)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_sourcephp]php[php$thisphp-php>php_scontentphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_sourcephp]php[php$thisphp-php>php_scontentphp]php php=php php$thisphp-php>php_scontentphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_stagphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'targetphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_useIdphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_tcontentphp)php php&php&php php!emptyphp(php$thisphp-php>php_langIdphp)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_targetphp]php[php$thisphp-php>php_langIdphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_targetphp]php[php$thisphp-php>php_langIdphp]php php=php php$thisphp-php>php_tcontentphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_tcontentphp)php php&php&php php!emptyphp(php$thisphp-php>php_scontentphp)php php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_targetphp]php[php$thisphp-php>php_scontentphp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_targetphp]php[php$thisphp-php>php_scontentphp]php php=php php$thisphp-php>php_tcontentphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_ttagphp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php privatephp functionphp php_contentElementphp(php$filephp,php php$dataphp)
php php php php php{
php php php php php php php php ifphp php(php(php$thisphp-php>php_transunitphp php!php=php=php nullphp)php andphp php(php$thisphp-php>php_sourcephp php!php=php=php nullphp)php andphp php(php$thisphp-php>php_stagphp php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_scontentphp php.php=php php$dataphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$thisphp-php>php_transunitphp php!php=php=php nullphp)php andphp php(php$thisphp-php>php_targetphp php!php=php=php nullphp)php andphp php(php$thisphp-php>php_ttagphp php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tcontentphp php.php=php php$dataphp;
php php php php php php php php php}
php php php php php}

php php php php privatephp functionphp php_findEncodingphp(php$filenamephp)
php php php php php{
php php php php php php php php php$filephp php=php filephp_getphp_contentsphp(php$filenamephp,php nullphp,php nullphp,php php0php,php php1php0php0php)php;
php php php php php php php php ifphp php(strposphp(php$filephp,php php"encodingphp"php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$encodingphp php=php substrphp(php$filephp,php strposphp(php$filephp,php php"encodingphp"php)php php+php php9php)php;
php php php php php php php php php php php php php$encodingphp php=php substrphp(php$encodingphp,php php1php,php strposphp(php$encodingphp,php php$encodingphp[php0php]php,php php1php)php php-php php1php)php;
php php php php php php php php php php php php returnphp php$encodingphp;
php php php php php php php php php}
php php php php php php php php returnphp php'UTFphp-php8php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp adapterphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php"Xliffphp"php;
php php php php php}
php}
