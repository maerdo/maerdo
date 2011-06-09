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
php php*php php@versionphp php php php php$Idphp:php Ibanphp.phpphp php2php2php4php0php0php php2php0php1php0php-php0php6php-php0php9php php1php9php:php2php5php:php0php2Zphp thomasphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Validatephp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Validatephp/Abstractphp.phpphp'php;

php/php*php*
php php*php Validatesphp IBANphp Numbersphp php(Internationalphp Bankphp Accountphp Numbersphp)
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Validate
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Validatephp_Ibanphp extendsphp Zendphp_Validatephp_Abstract
php{
php php php php constphp NOTSUPPORTEDphp php=php php'ibanNotSupportedphp'php;
php php php php constphp FALSEFORMATphp php php=php php'ibanFalseFormatphp'php;
php php php php constphp CHECKFAILEDphp php php=php php'ibanCheckFailedphp'php;

php php php php php/php*php*
php php php php php php*php Validationphp failurephp messagephp templatephp definitions
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_messageTemplatesphp php=php arrayphp(
php php php php php php php php selfphp:php:NOTSUPPORTEDphp php=php>php php"Unknownphp countryphp withinphp thephp IBANphp php'php%valuephp%php'php"php,
php php php php php php php php selfphp:php:FALSEFORMATphp php php=php>php php"php'php%valuephp%php'php hasphp aphp falsephp IBANphp formatphp"php,
php php php php php php php php selfphp:php:CHECKFAILEDphp php php=php>php php"php'php%valuephp%php'php hasphp failedphp thephp IBANphp checkphp"php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Optionalphp locale
php php php php php php*
php php php php php php*php php@varphp stringphp|Zendphp_Localephp|null
php php php php php php*php/
php php php php protectedphp php$php_localephp;

php php php php php/php*php*
php php php php php php*php IBANphp regexesphp byphp region
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_ibanregexphp php=php arrayphp(
php php php php php php php php php'ADphp'php php=php>php php'php/php^ADphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php8php}php[Aphp-Zphp0php-php9php]php{php1php2php}php$php/php'php,
php php php php php php php php php'ATphp'php php=php>php php'php/php^ATphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[php0php-php9php]php{php1php1php}php$php/php'php,
php php php php php php php php php'BAphp'php php=php>php php'php/php^BAphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php6php}php[php0php-php9php]php{php1php0php}php$php/php'php,
php php php php php php php php php'BEphp'php php=php>php php'php/php^BEphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php3php}php[php0php-php9php]php{php9php}php$php/php'php,
php php php php php php php php php'BGphp'php php=php>php php'php/php^BGphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php2php}php[Aphp-Zphp0php-php9php]php{php8php}php$php/php'php,
php php php php php php php php php'CHphp'php php=php>php php'php/php^CHphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[Aphp-Zphp0php-php9php]php{php1php2php}php$php/php'php,
php php php php php php php php php'CSphp'php php=php>php php'php/php^CSphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php3php}php[php0php-php9php]php{php1php5php}php$php/php'php,
php php php php php php php php php'CYphp'php php=php>php php'php/php^CYphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php8php}php[Aphp-Zphp0php-php9php]php{php1php6php}php$php/php'php,
php php php php php php php php php'CZphp'php php=php>php php'php/php^CZphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php1php6php}php$php/php'php,
php php php php php php php php php'DEphp'php php=php>php php'php/php^DEphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php8php}php[php0php-php9php]php{php1php0php}php$php/php'php,
php php php php php php php php php'DKphp'php php=php>php php'php/php^DKphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php1php0php}php$php/php'php,
php php php php php php php php php'EEphp'php php=php>php php'php/php^EEphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php1php2php}php$php/php'php,
php php php php php php php php php'ESphp'php php=php>php php'php/php^ESphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php8php}php[php0php-php9php]php{php1php2php}php$php/php'php,
php php php php php php php php php'FRphp'php php=php>php php'php/php^FRphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php1php0php}php[Aphp-Zphp0php-php9php]php{php1php3php}php$php/php'php,
php php php php php php php php php'FIphp'php php=php>php php'php/php^FIphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php6php}php[php0php-php9php]php{php8php}php$php/php'php,
php php php php php php php php php'GBphp'php php=php>php php'php/php^GBphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[php0php-php9php]php{php1php4php}php$php/php'php,
php php php php php php php php php'GIphp'php php=php>php php'php/php^GIphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[Aphp-Zphp0php-php9php]php{php1php5php}php$php/php'php,
php php php php php php php php php'GRphp'php php=php>php php'php/php^GRphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php7php}php[Aphp-Zphp0php-php9php]php{php1php6php}php$php/php'php,
php php php php php php php php php'HRphp'php php=php>php php'php/php^HRphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php7php}php[php0php-php9php]php{php1php0php}php$php/php'php,
php php php php php php php php php'HUphp'php php=php>php php'php/php^HUphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php7php}php[php0php-php9php]php{php1php}php[php0php-php9php]php{php1php5php}php[php0php-php9php]php{php1php}php$php/php'php,
php php php php php php php php php'IEphp'php php=php>php php'php/php^IEphp[php0php-php9php]php{php2php}php[Aphp-Zphp0php-php9php]php{php4php}php[php0php-php9php]php{php6php}php[php0php-php9php]php{php8php}php$php/php'php,
php php php php php php php php php'ISphp'php php=php>php php'php/php^ISphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php1php8php}php$php/php'php,
php php php php php php php php php'ITphp'php php=php>php php'php/php^ITphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php1php}php[php0php-php9php]php{php1php0php}php[Aphp-Zphp0php-php9php]php{php1php2php}php$php/php'php,
php php php php php php php php php'LIphp'php php=php>php php'php/php^LIphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[Aphp-Zphp0php-php9php]php{php1php2php}php$php/php'php,
php php php php php php php php php'LUphp'php php=php>php php'php/php^LUphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php3php}php[Aphp-Zphp0php-php9php]php{php1php3php}php$php/php'php,
php php php php php php php php php'LTphp'php php=php>php php'php/php^LTphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[php0php-php9php]php{php1php1php}php$php/php'php,
php php php php php php php php php'LVphp'php php=php>php php'php/php^LVphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[Aphp-Zphp0php-php9php]php{php1php3php}php$php/php'php,
php php php php php php php php php'MKphp'php php=php>php php'php/php^MKphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php3php}php[Aphp-Zphp0php-php9php]php{php1php0php}php[php0php-php9php]php{php2php}php$php/php'php,
php php php php php php php php php'MTphp'php php=php>php php'php/php^MTphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[php0php-php9php]php{php5php}php[Aphp-Zphp0php-php9php]php{php1php8php}php$php/php'php,
php php php php php php php php php'NLphp'php php=php>php php'php/php^NLphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[php0php-php9php]php{php1php0php}php$php/php'php,
php php php php php php php php php'NOphp'php php=php>php php'php/php^NOphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php7php}php$php/php'php,
php php php php php php php php php'PLphp'php php=php>php php'php/php^PLphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php8php}php[php0php-php9php]php{php1php6php}php$php/php'php,
php php php php php php php php php'PTphp'php php=php>php php'php/php^PTphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php8php}php[php0php-php9php]php{php1php3php}php$php/php'php,
php php php php php php php php php'ROphp'php php=php>php php'php/php^ROphp[php0php-php9php]php{php2php}php[Aphp-Zphp]php{php4php}php[Aphp-Zphp0php-php9php]php{php1php6php}php$php/php'php,
php php php php php php php php php'SEphp'php php=php>php php'php/php^SEphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php3php}php[php0php-php9php]php{php1php7php}php$php/php'php,
php php php php php php php php php'SIphp'php php=php>php php'php/php^SIphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[php0php-php9php]php{php8php}php[php0php-php9php]php{php2php}php$php/php'php,
php php php php php php php php php'SKphp'php php=php>php php'php/php^SKphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php4php}php[php0php-php9php]php{php1php6php}php$php/php'php,
php php php php php php php php php'TNphp'php php=php>php php'php/php^TNphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[php0php-php9php]php{php1php5php}php$php/php'php,
php php php php php php php php php'TRphp'php php=php>php php'php/php^TRphp[php0php-php9php]php{php2php}php[php0php-php9php]php{php5php}php[Aphp-Zphp0php-php9php]php{php1php7php}php$php/php'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Setsphp validatorphp options
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Configphp|Zendphp_Localephp php$localephp OPTIONAL
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$localephp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$localephp php=php php$localephp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$localephp)php)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'localephp'php,php php$localephp)php)php php{
php php php php php php php php php php php php php php php php php$localephp php=php php$localephp[php'localephp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$localephp php=php nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$localephp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Localephp'php)php)php php{
php php php php php php php php php php php php php php php php php$localephp php=php Zendphp_Registryphp:php:getphp(php'Zendphp_Localephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setLocalephp(php$localephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp localephp option
php php php php php php*
php php php php php php*php php@returnphp stringphp|Zendphp_Localephp|null
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp localephp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$locale
php php php php php php*php php@returnphp Zendphp_Validatephp_Datephp providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$localephp php!php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Localephp.phpphp'php;
php php php php php php php php php php php php php$localephp php=php Zendphp_Localephp:php:findLocalephp(php$localephp)php;
php php php php php php php php php php php php ifphp php(strlenphp(php$localephp)php <php php4php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Validatephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Validatephp_Exceptionphp(php'Regionphp mustphp bephp givenphp forphp IBANphp validationphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_localephp php=php php$localephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Validatephp_Interface
php php php php php php*
php php php php php php*php Returnsphp truephp ifphp php$valuephp isphp aphp validphp IBAN
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isValidphp(php$valuephp)
php php php php php{
php php php php php php php php php$valuephp php=php strtoupperphp(php$valuephp)php;
php php php php php php php php php$thisphp-php>php_setValuephp(php$valuephp)php;

php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_localephp)php)php php{
php php php php php php php php php php php php php$regionphp php=php substrphp(php$valuephp,php php0php,php php2php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$regionphp php=php newphp Zendphp_Localephp(php$thisphp-php>php_localephp)php;
php php php php php php php php php php php php php$regionphp php=php php$regionphp-php>getRegionphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$regionphp,php php$thisphp-php>php_ibanregexphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_setValuephp(php$regionphp)php;
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:NOTSUPPORTEDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!pregphp_matchphp(php$thisphp-php>php_ibanregexphp[php$regionphp]php,php php$valuephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:FALSEFORMATphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$formatphp php=php substrphp(php$valuephp,php php4php)php php.php substrphp(php$valuephp,php php0php,php php4php)php;
php php php php php php php php php$formatphp php=php strphp_replacephp(
php php php php php php php php php php php php arrayphp(php'Aphp'php,php php php'Bphp'php,php php php'Cphp'php,php php php'Dphp'php,php php php'Ephp'php,php php php'Fphp'php,php php php'Gphp'php,php php php'Hphp'php,php php php'Iphp'php,php php php'Jphp'php,php php php'Kphp'php,php php php'Lphp'php,php php php'Mphp'php,
php php php php php php php php php php php php php php php php php php php'Nphp'php,php php php'Ophp'php,php php php'Pphp'php,php php php'Qphp'php,php php php'Rphp'php,php php php'Sphp'php,php php php'Tphp'php,php php php'Uphp'php,php php php'Vphp'php,php php php'Wphp'php,php php php'Xphp'php,php php php'Yphp'php,php php php'Zphp'php)php,
php php php php php php php php php php php php arrayphp(php'php1php0php'php,php php'php1php1php'php,php php'php1php2php'php,php php'php1php3php'php,php php'php1php4php'php,php php'php1php5php'php,php php'php1php6php'php,php php'php1php7php'php,php php'php1php8php'php,php php'php1php9php'php,php php'php2php0php'php,php php'php2php1php'php,php php'php2php2php'php,
php php php php php php php php php php php php php php php php php php php'php2php3php'php,php php'php2php4php'php,php php'php2php5php'php,php php'php2php6php'php,php php'php2php7php'php,php php'php2php8php'php,php php'php2php9php'php,php php'php3php0php'php,php php'php3php1php'php,php php'php3php2php'php,php php'php3php3php'php,php php'php3php4php'php,php php'php3php5php'php)php,
php php php php php php php php php php php php php$formatphp)php;

php php php php php php php php php$tempphp php=php intvalphp(substrphp(php$formatphp,php php0php,php php1php)php)php;
php php php php php php php php php$lenphp php php=php strlenphp(php$formatphp)php;
php php php php php php php php forphp php(php$xphp php=php php1php;php php$xphp <php php$lenphp;php php+php+php$xphp)php php{
php php php php php php php php php php php php php$tempphp php*php=php php1php0php;
php php php php php php php php php php php php php$tempphp php+php=php intvalphp(substrphp(php$formatphp,php php$xphp,php php1php)php)php;
php php php php php php php php php php php php php$tempphp php%php=php php9php7php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$tempphp php!php=php php1php)php php{
php php php php php php php php php php php php php$thisphp-php>php_errorphp(selfphp:php:CHECKFAILEDphp)php;
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}
php}
