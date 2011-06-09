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
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Filephp.phpphp php2php3php3php3php0php php2php0php1php0php-php1php1php-php1php4php php2php0php:php0php8php:php0php9Zphp mabephp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Cachephp_Core
php php*php/
requirephp_oncephp php'Zendphp/Cachephp/Corephp.phpphp'php;


php/php*php*
php php*php php@packagephp php php php Zendphp_Cache
php php*php php@subpackagephp Zendphp_Cachephp_Frontend
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Cachephp_Frontendphp_Filephp extendsphp Zendphp_Cachephp_Core
php{

php php php php php/php*php*
php php php php php php*php Constsphp forphp masterphp_filesphp_mode
php php php php php php*php/
php php php php constphp MODEphp_ANDphp php=php php'ANDphp'php;
php php php php constphp MODEphp_ORphp php php=php php'ORphp'php;

php php php php php/php*php*
php php php php php php*php Availablephp options
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(stringphp)php masterphp_filephp php:
php php php php php php*php php-php aphp completephp pathphp ofphp thephp masterphp file
php php php php php php*php php-php deprecatedphp php(seephp masterphp_filesphp)
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(arrayphp)php masterphp_filesphp php:
php php php php php php*php php-php anphp arrayphp ofphp completephp pathphp ofphp masterphp files
php php php php php php*php php-php thisphp optionphp hasphp tophp bephp setphp php!
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(stringphp)php masterphp_filesphp_modephp php:
php php php php php php*php php-php Zendphp_Cachephp_Frontendphp_Filephp:php:MODEphp_ANDphp orphp Zendphp_Cachephp_Frontendphp_Filephp:php:MODEphp_OR
php php php php php php*php php-php ifphp MODEphp_ANDphp,php thenphp allphp masterphp filesphp havephp tophp bephp touchedphp tophp getphp aphp cachephp invalidation
php php php php php php*php php-php ifphp MODEphp_ORphp php(defaultphp)php,php thenphp aphp singlephp touchedphp masterphp filephp isphp enoughphp tophp getphp aphp cachephp invalidation
php php php php php php*
php php php php php php*php php=php=php=php=php>php php(booleanphp)php ignorephp_missingphp_masterphp_files
php php php php php php*php php-php ifphp setphp tophp truephp,php missingphp masterphp filesphp arephp ignoredphp silently
php php php php php php*php php-php ifphp setphp tophp falsephp php(defaultphp)php,php anphp exceptionphp isphp thrownphp ifphp therephp isphp aphp missingphp masterphp file
php php php php php php*php php@varphp arrayphp availablephp options
php php php php php php*php/
php php php php protectedphp php$php_specificOptionsphp php=php arrayphp(
php php php php php php php php php'masterphp_filephp'php php=php>php nullphp,
php php php php php php php php php'masterphp_filesphp'php php=php>php nullphp,
php php php php php php php php php'masterphp_filesphp_modephp'php php=php>php php'ORphp'php,
php php php php php php php php php'ignorephp_missingphp_masterphp_filesphp'php php=php>php false
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Masterphp filephp mtimes
php php php php php php*
php php php php php php*php Arrayphp ofphp int
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_masterFilephp_mtimesphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$optionsphp Associativephp arrayphp ofphp options
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php whilephp php(listphp(php$namephp,php php$valuephp)php php=php eachphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_specificOptionsphp[php'masterphp_filesphp'php]php)php)php php{
php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'masterphp_filesphp optionphp mustphp bephp setphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Changephp thephp masterphp_filesphp option
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$masterFilesphp thephp completephp pathsphp andphp namephp ofphp thephp masterphp files
php php php php php php*php/
php php php php publicphp functionphp setMasterFilesphp(arrayphp php$masterFilesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_specificOptionsphp[php'masterphp_filephp'php]php php php=php nullphp;php php/php/php tophp keepphp aphp compatibility
php php php php php php php php php$thisphp-php>php_specificOptionsphp[php'masterphp_filesphp'php]php php=php nullphp;
php php php php php php php php php$thisphp-php>php_masterFilephp_mtimesphp php=php arrayphp(php)php;

php php php php php php php php clearstatcachephp(php)php;
php php php php php php php php php$iphp php=php php0php;
php php php php php php php php foreachphp php(php$masterFilesphp asphp php$masterFilephp)php php{
php php php php php php php php php php php php php$mtimephp php=php php@filemtimephp(php$masterFilephp)php;

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_specificOptionsphp[php'ignorephp_missingphp_masterphp_filesphp'php]php php&php&php php!php$mtimephp)php php{
php php php php php php php php php php php php php php php php Zendphp_Cachephp:php:throwExceptionphp(php'Unablephp tophp readphp masterphp_filephp php:php php'php php.php php$masterFilephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_masterFilephp_mtimesphp[php$iphp]php php=php php$mtimephp;
php php php php php php php php php php php php php$thisphp-php>php_specificOptionsphp[php'masterphp_filesphp'php]php[php$iphp]php php=php php$masterFilephp;
php php php php php php php php php php php php ifphp php(php$iphp php=php=php=php php0php)php php{php php/php/php tophp keepphp aphp compatibility
php php php php php php php php php php php php php php php php php$thisphp-php>php_specificOptionsphp[php'masterphp_filesphp'php]php php=php php$masterFilephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$iphp+php+php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Changephp thephp masterphp_filephp option
php php php php php php*
php php php php php php*php Tophp keepphp thephp compatibility
php php php php php php*
php php php php php php*php php@deprecated
php php php php php php*php php@paramphp stringphp php$masterFilephp thephp completephp pathphp andphp namephp ofphp thephp masterphp file
php php php php php php*php/
php php php php publicphp functionphp setMasterFilephp(php$masterFilephp)
php php php php php{
php php php php php php php php php php php$thisphp-php>setMasterFilesphp(arrayphp(php$masterFilephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Publicphp frontendphp tophp setphp anphp option
php php php php php php*
php php php php php php*php Justphp aphp wrapperphp tophp getphp aphp specificphp behaviourphp forphp masterphp_file
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$namephp php Namephp ofphp thephp option
php php php php php php*php php@paramphp php mixedphp php php$valuephp Valuephp ofphp thephp option
php php php php php php*php php@throwsphp Zendphp_Cachephp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$namephp,php php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php php'masterphp_filephp'php)php php{
php php php php php php php php php php php php php$thisphp-php>setMasterFilephp(php$valuephp)php;
php php php php php php php php php}php elsephp ifphp php(php$namephp php=php=php php'masterphp_filesphp'php)php php{
php php php php php php php php php php php php php$thisphp-php>setMasterFilesphp(php$valuephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php parentphp:php:setOptionphp(php$namephp,php php$valuephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp idphp andphp php(ifphp yesphp)php returnphp itphp php(falsephp elsephp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$idphp php php php php php php php php php php php php php php php php php php php php Cachephp id
php php php php php php*php php@paramphp php booleanphp php$doNotTestCacheValidityphp Ifphp setphp tophp truephp,php thephp cachephp validityphp wonphp'tphp bephp tested
php php php php php php*php php@paramphp php booleanphp php$doNotUnserializephp php php php php php php Dophp notphp serializephp php(evenphp ifphp automaticphp_serializationphp isphp truephp)php php=php>php forphp internalphp use
php php php php php php*php php@returnphp mixedphp|falsephp Cachedphp datas
php php php php php php*php/
php php php php publicphp functionphp loadphp(php$idphp,php php$doNotTestCacheValidityphp php=php falsephp,php php$doNotUnserializephp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php!php$doNotTestCacheValidityphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>testphp(php$idphp)php)php php{
php php php php php php php php php php php php php php php php returnphp parentphp:php:loadphp(php$idphp,php truephp,php php$doNotUnserializephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:loadphp(php$idphp,php truephp,php php$doNotUnserializephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Testphp ifphp aphp cachephp isphp availablephp forphp thephp givenphp id
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Cachephp id
php php php php php php*php php@returnphp intphp|falsephp Lastphp modifiedphp timephp ofphp cachephp entryphp ifphp itphp isphp availablephp,php falsephp otherwise
php php php php php php*php/
php php php php publicphp functionphp testphp(php$idphp)
php php php php php{
php php php php php php php php php$lastModifiedphp php=php parentphp:php:testphp(php$idphp)php;
php php php php php php php php ifphp php(php$lastModifiedphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_specificOptionsphp[php'masterphp_filesphp_modephp'php]php php=php=php selfphp:php:MODEphp_ANDphp)php php{
php php php php php php php php php php php php php php php php php/php/php MODEphp_AND
php php php php php php php php php php php php php php php php foreachphp(php$thisphp-php>php_masterFilephp_mtimesphp asphp php$masterFileMTimephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$masterFileMTimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$lastModifiedphp php>php php$masterFileMTimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$lastModifiedphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php MODEphp_OR
php php php php php php php php php php php php php php php php php$resphp php=php truephp;
php php php php php php php php php php php php php php php php foreachphp(php$thisphp-php>php_masterFilephp_mtimesphp asphp php$masterFileMTimephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$masterFileMTimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$lastModifiedphp <php=php php$masterFileMTimephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$lastModifiedphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php}

