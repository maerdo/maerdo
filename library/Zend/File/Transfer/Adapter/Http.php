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
php php*php php@packagephp php php Zendphp_Filephp_Transfer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Httpphp.phpphp php2php2php5php6php3php php2php0php1php0php-php0php7php-php1php5php php2php0php:php4php2php:php0php4Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Filephp/Transferphp/Adapterphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Filephp transferphp adapterphp classphp forphp thephp HTTPphp protocol
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Filephp_Transfer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filephp_Transferphp_Adapterphp_Httpphp extendsphp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php{
php php php php protectedphp staticphp php$php_callbackApcphp php php php php php php php php php php php php=php php'apcphp_fetchphp'php;
php php php php protectedphp staticphp php$php_callbackUploadProgressphp php=php php'uploadprogressphp_getphp_infophp'php;

php php php php php/php*php*
php php php php php php*php Constructorphp forphp Httpphp Filephp Transfers
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp OPTIONALphp Optionsphp tophp set
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(iniphp_getphp(php'filephp_uploadsphp'php)php php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php'Filephp uploadsphp arephp notphp allowedphp inphp yourphp phpphp configphp!php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php$thisphp-php>php_prepareFilesphp(php)php;
php php php php php php php php php$thisphp-php>addValidatorphp(php'Uploadphp'php,php falsephp,php php$thisphp-php>php_filesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp validatorphp forphp thephp classphp,php erasingphp allphp previousphp set
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$validatorphp Validatorphp tophp set
php php php php php php*php php@paramphp php stringphp|arrayphp php$filesphp php php php php Filesphp tophp limitphp thisphp validatorphp to
php php php php php php*php php@returnphp Zendphp_Filephp_Transferphp_Adapter
php php php php php php*php/
php php php php publicphp functionphp setValidatorsphp(arrayphp php$validatorsphp,php php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearValidatorsphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addValidatorsphp(php$validatorsphp,php php$filesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp individualphp validator
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp removeValidatorphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php$namephp php=php=php php'Uploadphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:removeValidatorphp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp anphp individualphp validator
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp Zendphp_Filephp_Transferphp_Adapterphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearValidatorsphp(php)
php php php php php{
php php php php php php php php parentphp:php:clearValidatorsphp(php)php;
php php php php php php php php php$thisphp-php>addValidatorphp(php'Uploadphp'php,php falsephp,php php$thisphp-php>php_filesphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp thephp filephp tophp thephp clientphp php(Downloadphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$optionsphp Optionsphp forphp thephp filephp(sphp)php tophp send
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Filephp_Transferphp_Exceptionphp Notphp implemented
php php php php php php*php/
php php php php publicphp functionphp sendphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php'Methodphp notphp implementedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp filesphp arephp valid
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filesphp php(Optionalphp)php Filesphp tophp check
php php php php php php*php php@returnphp booleanphp Truephp ifphp allphp checksphp arephp valid
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Workaroundphp forphp WebServerphp notphp conformingphp HTTPphp andphp omittingphp CONTENTphp_LENGTH
php php php php php php php php php$contentphp php=php php0php;
php php php php php php php php ifphp php(issetphp(php$php_SERVERphp[php'CONTENTphp_LENGTHphp'php]php)php)php php{
php php php php php php php php php php php php php$contentphp php=php php$php_SERVERphp[php'CONTENTphp_LENGTHphp'php]php;
php php php php php php php php php}php elsephp ifphp php(php!emptyphp(php$php_POSTphp)php)php php{
php php php php php php php php php php php php php$contentphp php=php serializephp(php$php_POSTphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Workaroundphp forphp aphp PHPphp errorphp returningphp emptyphp php$php_FILESphp whenphp formphp dataphp exceedsphp phpphp settings
php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_filesphp)php php&php&php php(php$contentphp php>php php0php)php)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$filesphp)php)php php{
php php php php php php php php php php php php php php php php php$filesphp php=php currentphp(php$filesphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tempphp php=php arrayphp(php$filesphp php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'namephp'php php php=php>php php$filesphp,
php php php php php php php php php php php php php php php php php'errorphp'php php=php>php php1php)php)php;
php php php php php php php php php php php php php$validatorphp php=php php$thisphp-php>php_validatorsphp[php'Zendphp_Validatephp_Filephp_Uploadphp'php]php;
php php php php php php php php php php php php php$validatorphp-php>setFilesphp(php$tempphp)
php php php php php php php php php php php php php php php php php php php php php php php-php>isValidphp(php$filesphp,php nullphp)php;
php php php php php php php php php php php php php$thisphp-php>php_messagesphp php+php=php php$validatorphp-php>getMessagesphp(php)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:isValidphp(php$filesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Receivephp thephp filephp fromphp thephp clientphp php(Uploadphp)
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filesphp php(Optionalphp)php Filesphp tophp receive
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp receivephp(php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>isValidphp(php$filesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$checkphp php=php php$thisphp-php>php_getFilesphp(php$filesphp)php;
php php php php php php php php foreachphp php(php$checkphp asphp php$filephp php=php>php php$contentphp)php php{
php php php php php php php php php php php php ifphp php(php!php$contentphp[php'receivedphp'php]php)php php{
php php php php php php php php php php php php php php php php php$directoryphp php php php=php php'php'php;
php php php php php php php php php php php php php php php php php$destinationphp php=php php$thisphp-php>getDestinationphp(php$filephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$destinationphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$directoryphp php=php php$destinationphp php.php DIRECTORYphp_SEPARATORphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$filenamephp php=php php$directoryphp php.php php$contentphp[php'namephp'php]php;
php php php php php php php php php php php php php php php php php$renamephp php php php=php php$thisphp-php>getFilterphp(php'Renamephp'php)php;
php php php php php php php php php php php php php php php php ifphp php(php$renamephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$tmpphp php=php php$renamephp-php>getNewNamephp(php$contentphp[php'tmpphp_namephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$tmpphp php!php=php php$contentphp[php'tmpphp_namephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filenamephp php=php php$tmpphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(dirnamephp(php$filenamephp)php php=php=php php'php.php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$filenamephp php=php php$directoryphp php.php php$filenamephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$keyphp php=php arrayphp_searchphp(getphp_classphp(php$renamephp)php,php php$thisphp-php>php_filesphp[php$filephp]php[php'filtersphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_filesphp[php$filephp]php[php'filtersphp'php]php[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Shouldphp neverphp returnphp falsephp whenphp itphp'sphp testedphp byphp thephp uploadphp validator
php php php php php php php php php php php php php php php php ifphp php(php!movephp_uploadedphp_filephp(php$contentphp[php'tmpphp_namephp'php]php,php php$filenamephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$contentphp[php'optionsphp'php]php[php'ignoreNoFilephp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'receivedphp'php]php php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'filteredphp'php]php php=php truephp;
php php php php php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'receivedphp'php]php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$renamephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'destinationphp'php]php php=php dirnamephp(php$filenamephp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'namephp'php]php php php php php php php php php=php basenamephp(php$filenamephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'tmpphp_namephp'php]php php=php php$filenamephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'receivedphp'php]php php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$contentphp[php'filteredphp'php]php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_filterphp(php$filephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'filteredphp'php]php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$filephp]php[php'filteredphp'php]php php=php truephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp filephp wasphp alreadyphp sent
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filephp Filesphp tophp check
php php php php php php*php php@returnphp bool
php php php php php php*php php@throwsphp Zendphp_Filephp_Transferphp_Exceptionphp Notphp implemented
php php php php php php*php/
php php php php publicphp functionphp isSentphp(php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php'Methodphp notphp implementedphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp filephp wasphp alreadyphp received
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filesphp php(Optionalphp)php Filesphp tophp check
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isReceivedphp(php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php php$filesphp php=php php$thisphp-php>php_getFilesphp(php$filesphp,php falsephp,php truephp)php;
php php php php php php php php ifphp php(emptyphp(php$filesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$filesphp asphp php$contentphp)php php{
php php php php php php php php php php php php ifphp php(php$contentphp[php'receivedphp'php]php php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp filephp wasphp alreadyphp filtered
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$filesphp php(Optionalphp)php Filesphp tophp check
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isFilteredphp(php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php php$filesphp php=php php$thisphp-php>php_getFilesphp(php$filesphp,php falsephp,php truephp)php;
php php php php php php php php ifphp php(emptyphp(php$filesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$filesphp asphp php$contentphp)php php{
php php php php php php php php php php php php ifphp php(php$contentphp[php'filteredphp'php]php php!php=php=php truephp)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hasphp aphp filephp beenphp uploadedphp php?
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp|nullphp php$file
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isUploadedphp(php$filesphp php=php nullphp)
php php php php php{
php php php php php php php php php$filesphp php=php php$thisphp-php>php_getFilesphp(php$filesphp,php falsephp,php truephp)php;
php php php php php php php php ifphp php(emptyphp(php$filesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$filesphp asphp php$filephp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$filephp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp progressphp ofphp filephp upphp-php/downloads
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$idphp Thephp uploadphp tophp getphp thephp progressphp for
php php php php php php*php php@returnphp arrayphp|null
php php php php php php*php/
php php php php publicphp staticphp functionphp getProgressphp(php$idphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!functionphp_existsphp(php'apcphp_fetchphp'php)php andphp php!functionphp_existsphp(php'uploadprogressphp_getphp_infophp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php'Neitherphp APCphp norphp uploadprogressphp extensionphp installedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$sessionphp php=php php'Zendphp_Filephp_Transferphp_Adapterphp_Httpphp_ProgressBarphp'php;
php php php php php php php php php$statusphp php php=php arrayphp(
php php php php php php php php php php php php php'totalphp'php php php php php=php>php php0php,
php php php php php php php php php php php php php'currentphp'php php php=php>php php0php,
php php php php php php php php php php php php php'ratephp'php php php php php php=php>php php0php,
php php php php php php php php php php php php php'messagephp'php php php=php>php php'php'php,
php php php php php php php php php php php php php'donephp'php php php php php php=php>php false
php php php php php php php php php)php;

php php php php php php php php ifphp php(isphp_arrayphp(php$idphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$idphp[php'progressphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$adapterphp php=php php$idphp[php'progressphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$idphp[php'sessionphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$sessionphp php=php php$idphp[php'sessionphp'php]php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$idphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$idphp[php'idphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php unsetphp(php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$idphp)php php&php&php php(php(php$idphp instanceofphp Zendphp_ProgressBarphp_Adapterphp)php php|php|php php(php$idphp instanceofphp Zendphp_ProgressBarphp)php)php)php php{
php php php php php php php php php php php php php$adapterphp php=php php$idphp;
php php php php php php php php php php php php unsetphp(php$idphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$php_GETphp[php'progressphp_keyphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$statusphp[php'messagephp'php]php php=php php'Nophp uploadphp inphp progressphp'php;
php php php php php php php php php php php php php php php php php$statusphp[php'donephp'php]php php php php php=php truephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$idphp php=php php$php_GETphp[php'progressphp_keyphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$idphp)php)php php{
php php php php php php php php php php php php ifphp php(selfphp:php:isApcAvailablephp(php)php)php php{

php php php php php php php php php php php php php php php php php$callphp php=php callphp_userphp_funcphp(selfphp:php:php$php_callbackApcphp,php iniphp_getphp(php'apcphp.rfcphp1php8php6php7php_prefixphp'php)php php.php php$idphp)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$callphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$statusphp php=php php$callphp php+php php$statusphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(selfphp:php:isUploadProgressAvailablephp(php)php)php php{
php php php php php php php php php php php php php php php php php$callphp php=php callphp_userphp_funcphp(selfphp:php:php$php_callbackUploadProgressphp,php php$idphp)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$callphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$statusphp php=php php$callphp php+php php$statusphp;
php php php php php php php php php php php php php php php php php php php php php$statusphp[php'totalphp'php]php php php php=php php$statusphp[php'bytesphp_totalphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$statusphp[php'currentphp'php]php php=php php$statusphp[php'bytesphp_uploadedphp'php]php;
php php php php php php php php php php php php php php php php php php php php php$statusphp[php'ratephp'php]php php php php php=php php$statusphp[php'speedphp_averagephp'php]php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$statusphp[php'totalphp'php]php php=php=php php$statusphp[php'currentphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$statusphp[php'donephp'php]php php=php truephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$callphp)php)php php{
php php php php php php php php php php php php php php php php php$statusphp[php'donephp'php]php php php php php=php truephp;
php php php php php php php php php php php php php php php php php$statusphp[php'messagephp'php]php php=php php'Failurephp whilephp retrievingphp thephp uploadphp progressphp'php;
php php php php php php php php php php php php php}php elsephp ifphp php(php!emptyphp(php$statusphp[php'cancelphp_uploadphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$statusphp[php'donephp'php]php php php php php=php truephp;
php php php php php php php php php php php php php php php php php$statusphp[php'messagephp'php]php php=php php'Thephp uploadphp hasphp beenphp canceledphp'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$statusphp[php'messagephp'php]php php=php selfphp:php:php_toByteStringphp(php$statusphp[php'currentphp'php]php)php php.php php"php php-php php"php php.php selfphp:php:php_toByteStringphp(php$statusphp[php'totalphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$statusphp[php'idphp'php]php php=php php$idphp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$adapterphp)php php&php&php issetphp(php$statusphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$adapterphp instanceofphp Zendphp_ProgressBarphp_Adapterphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp.phpphp'php;
php php php php php php php php php php php php php php php php php$adapterphp php=php newphp Zendphp_ProgressBarphp(php$adapterphp,php php0php,php php$statusphp[php'totalphp'php]php,php php$sessionphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php(php$adapterphp instanceofphp Zendphp_ProgressBarphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Filephp/Transferphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Filephp_Transferphp_Exceptionphp(php'Unknownphp Adapterphp givenphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$statusphp[php'donephp'php]php)php php{
php php php php php php php php php php php php php php php php php$adapterphp-php>finishphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$adapterphp-php>updatephp(php$statusphp[php'currentphp'php]php,php php$statusphp[php'messagephp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$statusphp[php'progressphp'php]php php=php php$adapterphp;
php php php php php php php php php}

php php php php php php php php returnphp php$statusphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp thephp APCphp extensionphp forphp progressphp information
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isApcAvailablephp(php)
php php php php php{
php php php php php php php php returnphp php(boolphp)php iniphp_getphp(php'apcphp.enabledphp'php)php php&php&php php(boolphp)php iniphp_getphp(php'apcphp.rfcphp1php8php6php7php'php)php php&php&php isphp_callablephp(selfphp:php:php$php_callbackApcphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp thephp UploadProgressphp extensionphp forphp progressphp information
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp isUploadProgressAvailablephp(php)
php php php php php{
php php php php php php php php returnphp isphp_callablephp(selfphp:php:php$php_callbackUploadProgressphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp thephp php$php_FILESphp arrayphp tophp matchphp thephp internalphp syntaxphp ofphp onephp filephp perphp entry
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$files
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_prepareFilesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_filesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$php_FILESphp asphp php$formphp php=php>php php$contentphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$contentphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$contentphp asphp php$paramphp php=php>php php$filephp)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$filephp asphp php$numberphp php=php>php php$targetphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp php.php php'php_php'php php.php php$numberphp php.php php'php_php'php]php[php$paramphp]php php php php php php php=php php$targetphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'multifilesphp'php]php[php$numberphp]php php=php php$formphp php.php php'php_php'php php.php php$numberphp php.php php'php_php'php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'namephp'php]php php=php php$formphp;
php php php php php php php php php php php php php php php php foreachphp(php$thisphp-php>php_filesphp[php$formphp]php[php'multifilesphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$valuephp]php[php'optionsphp'php]php php php php=php php$thisphp-php>php_optionsphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$valuephp]php[php'validatedphp'php]php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$valuephp]php[php'receivedphp'php]php php php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$valuephp]php[php'filteredphp'php]php php php=php falsephp;

php php php php php php php php php php php php php php php php php php php php php$mimetypephp php=php php$thisphp-php>php_detectMimeTypephp(php$thisphp-php>php_filesphp[php$valuephp]php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$valuephp]php[php'typephp'php]php php=php php$mimetypephp;

php php php php php php php php php php php php php php php php php php php php php$filesizephp php=php php$thisphp-php>php_detectFileSizephp(php$thisphp-php>php_filesphp[php$valuephp]php)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$valuephp]php[php'sizephp'php]php php=php php$filesizephp;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'detectInfosphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$php_FILESphp[php$formphp]php[php'typephp'php]php[php$keyphp]php php=php php$mimetypephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$php_FILESphp[php$formphp]php[php'sizephp'php]php[php$keyphp]php php=php php$filesizephp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php php php php php php php php php php php php php php php=php php$contentphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'optionsphp'php]php php php php=php php$thisphp-php>php_optionsphp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'validatedphp'php]php php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'receivedphp'php]php php php=php falsephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'filteredphp'php]php php php=php falsephp;

php php php php php php php php php php php php php php php php php$mimetypephp php=php php$thisphp-php>php_detectMimeTypephp(php$thisphp-php>php_filesphp[php$formphp]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'typephp'php]php php=php php$mimetypephp;

php php php php php php php php php php php php php php php php php$filesizephp php=php php$thisphp-php>php_detectFileSizephp(php$thisphp-php>php_filesphp[php$formphp]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_filesphp[php$formphp]php[php'sizephp'php]php php=php php$filesizephp;

php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_optionsphp[php'detectInfosphp'php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$php_FILESphp[php$formphp]php[php'typephp'php]php php=php php$mimetypephp;
php php php php php php php php php php php php php php php php php php php php php$php_FILESphp[php$formphp]php[php'sizephp'php]php php=php php$filesizephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
