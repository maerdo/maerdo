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
php php*php php@packagephp php php Zendphp_Date
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php$Idphp:php Datephp.phpphp php2php2php7php1php3php php2php0php1php0php-php0php7php-php2php9php php1php1php:php4php1php:php5php6Zphp thomasphp php$
php php*php/

php/php*php*
php php*php Includephp neededphp Datephp classes
php php*php/
requirephp_oncephp php'Zendphp/Datephp/DateObjectphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp/Formatphp.phpphp'php;
requirephp_oncephp php'Zendphp/Localephp/Mathphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_Date
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Datephp extendsphp Zendphp_Datephp_DateObject
php{
php php php php privatephp php$php_localephp php php=php nullphp;

php php php php php/php/php Fractionalphp secondphp variables
php php php php privatephp php$php_fractionalphp php=php php0php;
php php php php privatephp php$php_precisionphp php php=php php3php;

php php php php privatephp staticphp php$php_optionsphp php=php arrayphp(
php php php php php php php php php'formatphp_typephp'php php php=php>php php'isophp'php,php php php php php php php/php/php formatphp forphp datephp stringsphp php'isophp'php orphp php'phpphp'
php php php php php php php php php'fixphp_dstphp'php php php php php php php=php>php truephp,php php php php php php php php/php/php fixphp dstphp onphp summerphp/winterphp timephp change
php php php php php php php php php'extendphp_monthphp'php php=php>php falsephp,php php php php php php php/php/php falsephp php-php addMonthphp likephp SQLphp,php truephp likephp excel
php php php php php php php php php'cachephp'php php php php php php php php php=php>php nullphp,php php php php php php php php/php/php cachephp tophp set
php php php php php php php php php'timesyncphp'php php php php php php=php>php nullphp php php php php php php php php/php/php timesyncphp serverphp tophp set
php php php php php)php;

php php php php php/php/php Classphp widephp Datephp Constants
php php php php constphp DAYphp php php php php php php php php php php php php php php php=php php'ddphp'php;
php php php php constphp DAYphp_SHORTphp php php php php php php php php php=php php'dphp'php;
php php php php constphp DAYphp_SUFFIXphp php php php php php php php php=php php'SSphp'php;
php php php php constphp DAYphp_OFphp_YEARphp php php php php php php php=php php'Dphp'php;
php php php php constphp WEEKDAYphp php php php php php php php php php php php=php php'EEEEphp'php;
php php php php constphp WEEKDAYphp_SHORTphp php php php php php=php php'EEEphp'php;
php php php php constphp WEEKDAYphp_NARROWphp php php php php=php php'Ephp'php;
php php php php constphp WEEKDAYphp_NAMEphp php php php php php php=php php'EEphp'php;
php php php php constphp WEEKDAYphp_php8php6php0php1php php php php php php php=php php'eeephp'php;
php php php php constphp WEEKDAYphp_DIGITphp php php php php php=php php'ephp'php;
php php php php constphp WEEKphp php php php php php php php php php php php php php php=php php'wwphp'php;
php php php php constphp MONTHphp php php php php php php php php php php php php php=php php'MMphp'php;
php php php php constphp MONTHphp_SHORTphp php php php php php php php=php php'Mphp'php;
php php php php constphp MONTHphp_DAYSphp php php php php php php php php=php php'dddphp'php;
php php php php constphp MONTHphp_NAMEphp php php php php php php php php=php php'MMMMphp'php;
php php php php constphp MONTHphp_NAMEphp_SHORTphp php php=php php'MMMphp'php;
php php php php constphp MONTHphp_NAMEphp_NARROWphp php=php php'MMMMMphp'php;
php php php php constphp YEARphp php php php php php php php php php php php php php php=php php'yphp'php;
php php php php constphp YEARphp_SHORTphp php php php php php php php php=php php'yyphp'php;
php php php php constphp YEARphp_php8php6php0php1php php php php php php php php php php=php php'Yphp'php;
php php php php constphp YEARphp_SHORTphp_php8php6php0php1php php php php=php php'YYphp'php;
php php php php constphp LEAPYEARphp php php php php php php php php php php=php php'lphp'php;
php php php php constphp MERIDIEMphp php php php php php php php php php php=php php'aphp'php;
php php php php constphp SWATCHphp php php php php php php php php php php php php=php php'Bphp'php;
php php php php constphp HOURphp php php php php php php php php php php php php php php=php php'HHphp'php;
php php php php constphp HOURphp_SHORTphp php php php php php php php php=php php'Hphp'php;
php php php php constphp HOURphp_AMphp php php php php php php php php php php php=php php'hhphp'php;
php php php php constphp HOURphp_SHORTphp_AMphp php php php php php=php php'hphp'php;
php php php php constphp MINUTEphp php php php php php php php php php php php php=php php'mmphp'php;
php php php php constphp MINUTEphp_SHORTphp php php php php php php=php php'mphp'php;
php php php php constphp SECONDphp php php php php php php php php php php php php=php php'ssphp'php;
php php php php constphp SECONDphp_SHORTphp php php php php php php=php php'sphp'php;
php php php php constphp MILLISECONDphp php php php php php php php=php php'Sphp'php;
php php php php constphp TIMEZONEphp_NAMEphp php php php php php=php php'zzzzphp'php;
php php php php constphp DAYLIGHTphp php php php php php php php php php php=php php'Iphp'php;
php php php php constphp GMTphp_DIFFphp php php php php php php php php php php=php php'Zphp'php;
php php php php constphp GMTphp_DIFFphp_SEPphp php php php php php php=php php'ZZZZphp'php;
php php php php constphp TIMEZONEphp php php php php php php php php php php=php php'zphp'php;
php php php php constphp TIMEZONEphp_SECSphp php php php php php=php php'Xphp'php;
php php php php constphp ISOphp_php8php6php0php1php php php php php php php php php php php=php php'cphp'php;
php php php php constphp RFCphp_php2php8php2php2php php php php php php php php php php php=php php'rphp'php;
php php php php constphp TIMESTAMPphp php php php php php php php php php=php php'Uphp'php;
php php php php constphp ERAphp php php php php php php php php php php php php php php php=php php'Gphp'php;
php php php php constphp ERAphp_NAMEphp php php php php php php php php php php=php php'GGGGphp'php;
php php php php constphp ERAphp_NARROWphp php php php php php php php php=php php'GGGGGphp'php;
php php php php constphp DATESphp php php php php php php php php php php php php php=php php'Fphp'php;
php php php php constphp DATEphp_FULLphp php php php php php php php php php=php php'FFFFFphp'php;
php php php php constphp DATEphp_LONGphp php php php php php php php php php=php php'FFFFphp'php;
php php php php constphp DATEphp_MEDIUMphp php php php php php php php=php php'FFFphp'php;
php php php php constphp DATEphp_SHORTphp php php php php php php php php=php php'FFphp'php;
php php php php constphp TIMESphp php php php php php php php php php php php php php=php php'WWphp'php;
php php php php constphp TIMEphp_FULLphp php php php php php php php php php=php php'TTTTTphp'php;
php php php php constphp TIMEphp_LONGphp php php php php php php php php php=php php'TTTTphp'php;
php php php php constphp TIMEphp_MEDIUMphp php php php php php php php=php php'TTTphp'php;
php php php php constphp TIMEphp_SHORTphp php php php php php php php php=php php'TTphp'php;
php php php php constphp DATETIMEphp php php php php php php php php php php=php php'Kphp'php;
php php php php constphp DATETIMEphp_FULLphp php php php php php=php php'KKKKKphp'php;
php php php php constphp DATETIMEphp_LONGphp php php php php php=php php'KKKKphp'php;
php php php php constphp DATETIMEphp_MEDIUMphp php php php=php php'KKKphp'php;
php php php php constphp DATETIMEphp_SHORTphp php php php php=php php'KKphp'php;
php php php php constphp ATOMphp php php php php php php php php php php php php php php=php php'OOOphp'php;
php php php php constphp COOKIEphp php php php php php php php php php php php php=php php'CCCphp'php;
php php php php constphp RFCphp_php8php2php2php php php php php php php php php php php php=php php'Rphp'php;
php php php php constphp RFCphp_php8php5php0php php php php php php php php php php php php=php php'RRphp'php;
php php php php constphp RFCphp_php1php0php3php6php php php php php php php php php php php=php php'RRRphp'php;
php php php php constphp RFCphp_php1php1php2php3php php php php php php php php php php php=php php'RRRRphp'php;
php php php php constphp RFCphp_php3php3php3php9php php php php php php php php php php php=php php'RRRRRphp'php;
php php php php constphp RSSphp php php php php php php php php php php php php php php php=php php'SSSphp'php;
php php php php constphp Wphp3Cphp php php php php php php php php php php php php php php php=php php'WWWphp'php;

php php php php php/php*php*
php php php php php php*php Generatesphp thephp standardphp datephp objectphp,php couldphp bephp aphp unixphp timestampphp,php localizedphp datephp,
php php php php php php*php stringphp,php integerphp,php arrayphp andphp sophp onphp.php Alsophp partsphp ofphp datesphp orphp timephp arephp supported
php php php php php php*php Alwaysphp setphp thephp defaultphp timezonephp:php httpphp:php/php/phpphp.netphp/datephp_defaultphp_timezonephp_set
php php php php php php*php Forphp examplephp,php inphp yourphp bootstrapphp:php datephp_defaultphp_timezonephp_setphp(php'Americaphp/Losphp_Angelesphp'php)php;
php php php php php php*php Forphp detailedphp instructionsphp pleasephp lookphp inphp thephp docuphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp|arrayphp php php$datephp php php php OPTIONALphp Datephp valuephp orphp valuephp ofphp datephp partphp tophp set
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php,dependingphp onphp php$partphp.php Ifphp nullphp thephp actualphp timephp isphp set
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Definesphp thephp inputphp formatphp ofphp php$date
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$datephp php=php nullphp,php php$partphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$datephp)php andphp php!php(php$datephp instanceofphp Zendphp_TimeSyncphp_Protocolphp)php and
php php php php php php php php php php php php php!php(php$datephp instanceofphp Zendphp_Datephp)php)php php{
php php php php php php php php php php php php ifphp php(php$localephp instanceofphp Zendphp_Localephp)php php{
php php php php php php php php php php php php php php php php php$localephp php=php php$datephp;
php php php php php php php php php php php php php php php php php$datephp php php php=php nullphp;
php php php php php php php php php php php php php php php php php$partphp php php php=php nullphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$datephp php=php php(stringphp)php php$datephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$datephp php!php=php=php nullphp)php andphp php!isphp_arrayphp(php$datephp)php andphp php!php(php$datephp instanceofphp Zendphp_TimeSyncphp_Protocolphp)php and
php php php php php php php php php php php php php!php(php$datephp instanceofphp Zendphp_Datephp)php andphp php!definedphp(php$datephp)php andphp Zendphp_Localephp:php:isLocalephp(php$datephp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$datephp;
php php php php php php php php php php php php php$datephp php php php=php nullphp;
php php php php php php php php php php php php php$partphp php php php=php nullphp;
php php php php php php php php php}php elsephp ifphp php(php(php$partphp php!php=php=php nullphp)php andphp php!definedphp(php$partphp)php andphp Zendphp_Localephp:php:isLocalephp(php$partphp,php truephp,php falsephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$partphp;
php php php php php php php php php php php php php$partphp php php php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>setLocalephp(php$localephp)php;
php php php php php php php php ifphp php(isphp_stringphp(php$datephp)php php&php&php php(php$partphp php=php=php=php nullphp)php php&php&php php(strlenphp(php$datephp)php <php=php php5php)php)php php{
php php php php php php php php php php php php php$partphp php=php php$datephp;
php php php php php php php php php php php php php$datephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php$partphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$datephp php=php timephp(php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$partphp php!php=php=php selfphp:php:TIMESTAMPphp)php php{
php php php php php php php php php php php php php php php php php$datephp php=php selfphp:php:nowphp(php$localephp)php;
php php php php php php php php php php php php php php php php php$datephp php=php php$datephp-php>getphp(php$partphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$datephp instanceofphp Zendphp_TimeSyncphp_Protocolphp)php php{
php php php php php php php php php php php php php$datephp php=php php$datephp-php>getInfophp(php)php;
php php php php php php php php php php php php php$datephp php=php php$thisphp-php>php_getTimephp(php$datephp[php'offsetphp'php]php)php;
php php php php php php php php php php php php php$partphp php=php nullphp;
php php php php php php php php php}php elsephp ifphp php(parentphp:php:php$php_defaultOffsetphp php!php=php php0php)php php{
php php php php php php php php php php php php php$datephp php=php php$thisphp-php>php_getTimephp(parentphp:php:php$php_defaultOffsetphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp thephp timezonephp andphp offsetphp forphp php$this
php php php php php php php php php$zonephp php=php php@datephp_defaultphp_timezonephp_getphp(php)php;
php php php php php php php php php$thisphp-php>setTimezonephp(php$zonephp)php;

php php php php php php php php php/php/php tryphp tophp getphp timezonephp fromphp datephp-string
php php php php php php php php ifphp php(php!isphp_intphp(php$datephp)php)php php{
php php php php php php php php php php php php php$zonephp php=php php$thisphp-php>getTimezoneFromStringphp(php$datephp)php;
php php php php php php php php php php php php php$thisphp-php>setTimezonephp(php$zonephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php setphp datepart
php php php php php php php php ifphp php(php(php$partphp php!php=php=php nullphp php&php&php php$partphp php!php=php=php selfphp:php:TIMESTAMPphp)php orphp php(php!isphp_numericphp(php$datephp)php)php)php php{
php php php php php php php php php php php php php/php/php switchphp offphp dstphp handlingphp forphp valuephp setting
php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(php$thisphp-php>getGmtOffsetphp(php)php)php;
php php php php php php php php php php php php php$thisphp-php>setphp(php$datephp,php php$partphp,php php$thisphp-php>php_localephp)php;

php php php php php php php php php php php php php/php/php DSTphp fix
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$datephp)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$datephp[php'hourphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$datephp[php'hourphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$hourphp php=php php$thisphp-php>toStringphp(php'Hphp'php,php php'isophp'php,php truephp)php;
php php php php php php php php php php php php php php php php php$hourphp php=php php$datephp[php'hourphp'php]php php-php php$hourphp;
php php php php php php php php php php php php php php php php switchphp php(php$hourphp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php1php php:
php php php php php php php php php php php php php php php php php php php php casephp php-php2php3php php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addTimestampphp(php3php6php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php-php1php php:
php php php php php php php php php php php php php php php php php php php php casephp php2php3php php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>subTimestampphp(php3php6php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php2php php:
php php php php php php php php php php php php php php php php php php php php casephp php-php2php2php php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>addTimestampphp(php7php2php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php-php2php php:
php php php php php php php php php php php php php php php php php php php php casephp php2php2php php:
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>subTimestampphp(php7php2php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(php$datephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp classphp widephp optionsphp,php ifphp nophp optionphp wasphp givenphp,php thephp actualphp setphp optionsphp willphp bephp returned
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php$optionsphp php Optionsphp tophp set
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php php@returnphp Optionsphp arrayphp ifphp nophp optionphp wasphp given
php php php php php php*php/
php php php php publicphp staticphp functionphp setOptionsphp(arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$optionsphp)php)php php{
php php php php php php php php php php php php returnphp selfphp:php:php$php_optionsphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$optionsphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$namephp php php=php strtolowerphp(php$namephp)php;

php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php selfphp:php:php$php_optionsphp)php)php php{
php php php php php php php php php php php php php php php php switchphp(php$namephp)php php{
php php php php php php php php php php php php php php php php php php php php casephp php'formatphp_typephp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(strtolowerphp(php$valuephp)php php!php=php php'phpphp'php)php php&php&php php(strtolowerphp(php$valuephp)php php!php=php php'isophp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"Unknownphp formatphp typephp php(php$valuephp)php forphp datesphp,php onlyphp php'isophp'php andphp php'phpphp'php supportedphp"php,php php0php,php nullphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'fixphp_dstphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"php'fixphp_dstphp'php hasphp tophp bephp booleanphp"php,php php0php,php nullphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'extendphp_monthphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_boolphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"php'extendphp_monthphp'php hasphp tophp bephp booleanphp"php,php php0php,php nullphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'cachephp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_cachephp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$valuephp instanceofphp Zendphp_Cachephp_Corephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"Instancephp ofphp Zendphp_Cachephp expectedphp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_cachephp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_cacheTagsphp php=php Zendphp_Datephp_DateObjectphp:php:php_getTagSupportForCachephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Localephp_Dataphp:php:setCachephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp php'timesyncphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_defaultOffsetphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php$valuephp instanceofphp Zendphp_TimeSyncphp_Protocolphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"Instancephp ofphp Zendphp_TimeSyncphp expectedphp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$valuephp-php>getInfophp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_defaultOffsetphp php=php php$datephp[php'offsetphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php selfphp:php:php$php_optionsphp[php$namephp]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"Unknownphp optionphp:php php$namephp php=php php$valuephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thisphp objectphp'sphp internalphp UNIXphp timestampphp php(equivalentphp tophp Zendphp_Datephp:php:TIMESTAMPphp)php.
php php php php php php*php Ifphp thephp timestampphp isphp toophp largephp forphp integersphp,php thenphp thephp returnphp valuephp willphp bephp aphp stringphp.
php php php php php php*php Thisphp functionphp doesphp notphp returnphp thephp timestampphp asphp anphp objectphp.
php php php php php php*php Usephp clonephp(php)php orphp copyPartphp(php)php insteadphp.
php php php php php php*
php php php php php php*php php@returnphp integerphp|stringphp php UNIXphp timestamp
php php php php php php*php/
php php php php publicphp functionphp getTimestampphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getUnixTimestampphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp calculatedphp timestamp
php php php php php php*php HINTphp:php timestampsphp arephp alwaysphp GMT
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php php Typephp ofphp calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$stampphp php php Timestampphp tophp calculatephp,php whenphp nullphp thephp actualphp timestampphp isphp calculated
php php php php php php*php php@returnphp Zendphp_Datephp|integer
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_timestampphp(php$calcphp,php php$stampphp)
php php php php php{
php php php php php php php php ifphp php(php$stampphp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php/php/php extractphp timestampphp fromphp object
php php php php php php php php php php php php php$stampphp php=php php$stampphp-php>getTimestampphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$stampphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$stampphp[php'timestampphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$stampphp php=php php$stampphp[php'timestampphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'nophp timestampphp givenphp inphp arrayphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$calcphp php=php=php=php php'setphp'php)php php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>setUnixTimestampphp(php$stampphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$stampphp,php selfphp:php:TIMESTAMPphp,php nullphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp timestamp
php php php php php php*
php php php php php php*php php@paramphp php integerphp|stringphp|arrayphp|Zendphp_Datephp php php$timestampphp php Timestampphp tophp set
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTimestampphp(php$timestampphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timestampphp(php'setphp'php,php php$timestampphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp timestamp
php php php php php php*
php php php php php php*php php@paramphp php integerphp|stringphp|arrayphp|Zendphp_Datephp php php$timestampphp php Timestampphp tophp add
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addTimestampphp(php$timestampphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timestampphp(php'addphp'php,php php$timestampphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Subtractsphp aphp timestamp
php php php php php php*
php php php php php php*php php@paramphp php integerphp|stringphp|arrayphp|Zendphp_Datephp php php$timestampphp php Timestampphp tophp sub
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subTimestampphp(php$timestampphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timestampphp(php'subphp'php,php php$timestampphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparesphp twophp timestampsphp,php returningphp thephp differencephp asphp integer
php php php php php php*
php php php php php php*php php@paramphp php integerphp|stringphp|arrayphp|Zendphp_Datephp php php$timestampphp php Timestampphp tophp compare
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareTimestampphp(php$timestampphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timestampphp(php'cmpphp'php,php php$timestampphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representationphp ofphp thephp object
php php php php php php*php Supportedphp formatphp tokensphp arephp:
php php php php php php*php Gphp php-php eraphp,php yphp php-php yearphp,php Yphp php-php ISOphp yearphp,php Mphp php-php monthphp,php wphp php-php weekphp ofphp yearphp,php Dphp php-php dayphp ofphp yearphp,php dphp php-php dayphp ofphp month
php php php php php php*php Ephp php-php dayphp ofphp weekphp,php ephp php-php numberphp ofphp weekdayphp php(php1php-php7php)php,php hphp php-php hourphp php1php-php1php2php,php Hphp php-php hourphp php0php-php2php3php,php mphp php-php minutephp,php sphp php-php second
php php php php php php*php Aphp php-php millisecondsphp ofphp dayphp,php zphp php-php timezonephp,php Zphp php-php timezonephp offsetphp,php Sphp php-php fractionalphp secondphp,php aphp php-php periodphp ofphp day
php php php php php php*
php php php php php php*php Additionallyphp formatphp tokensphp butphp nonphp ISOphp conformphp arephp:
php php php php php php*php SSphp php-php dayphp suffixphp,php eeephp php-php phpphp numberphp ofphp weekdayphp(php0php-php6php)php,php dddphp php-php numberphp ofphp daysphp perphp month
php php php php php php*php lphp php-php Leapphp yearphp,php Bphp php-php swatchphp internetphp timephp,php Iphp php-php daylightphp savingphp timephp,php Xphp php-php timezonephp offsetphp inphp seconds
php php php php php php*php rphp php-php RFCphp2php8php2php2php formatphp,php Uphp php-php unixphp timestamp
php php php php php php*
php php php php php php*php Notphp supportedphp ISOphp tokensphp are
php php php php php php*php uphp php-php extendedphp yearphp,php Qphp php-php quarterphp,php qphp php-php quarterphp,php Lphp php-php standphp alonephp monthphp,php Wphp php-php weekphp ofphp month
php php php php php php*php Fphp php-php dayphp ofphp weekphp ofphp monthphp,php gphp php-php modifiedphp julianphp,php cphp php-php standphp alonephp weekdayphp,php kphp php-php hourphp php0php-php1php1php,php Kphp php-php hourphp php1php-php2php4
php php php php php php*php vphp php-php wallphp zone
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$formatphp php OPTIONALphp Rulephp forphp formattingphp outputphp.php Ifphp nullphp thephp defaultphp datephp formatphp isphp used
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$typephp php php php OPTIONALphp Typephp forphp thephp formatphp stringphp whichphp overridesphp thephp standardphp setting
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php$formatphp php=php nullphp,php php$typephp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$formatphp)php)php php{
php php php php php php php php php php php php ifphp php(php$formatphp instanceofphp Zendphp_Localephp)php php{
php php php php php php php php php php php php php php php php php$localephp php=php php$formatphp;
php php php php php php php php php php php php php php php php php$formatphp php=php nullphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$formatphp php=php php(stringphp)php php$formatphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_objectphp(php$typephp)php)php php{
php php php php php php php php php php php php ifphp php(php$typephp instanceofphp Zendphp_Localephp)php php{
php php php php php php php php php php php php php php php php php$localephp php=php php$typephp;
php php php php php php php php php php php php php php php php php$typephp php php php=php nullphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$typephp php=php php(stringphp)php php$typephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$formatphp php!php=php=php nullphp)php php&php&php php!definedphp(php$formatphp)
php php php php php php php php php php php php php&php&php php(php$formatphp php!php=php php'eephp'php)php php&php&php php(php$formatphp php!php=php php'ssphp'php)php php&php&php php(php$formatphp php!php=php php'GGphp'php)php php&php&php php(php$formatphp php!php=php php'MMphp'php)php php&php&php php(php$formatphp php!php=php php'EEphp'php)php php&php&php php(php$formatphp php!php=php php'TTphp'php)
php php php php php php php php php php php php php&php&php Zendphp_Localephp:php:isLocalephp(php$formatphp,php nullphp,php falsephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$formatphp;
php php php php php php php php php php php php php$formatphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$typephp php!php=php=php nullphp)php andphp php(php$typephp php!php=php php'phpphp'php)php andphp php(php$typephp php!php=php php'isophp'php)php and
php php php php php php php php php php php php Zendphp_Localephp:php:isLocalephp(php$typephp,php nullphp,php falsephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$typephp;
php php php php php php php php php php php php php$typephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$formatphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Formatphp:php:getDateFormatphp(php$localephp)php php.php php'php php'php php.php Zendphp_Localephp_Formatphp:php:getTimeFormatphp(php$localephp)php;
php php php php php php php php php}php elsephp ifphp php(php(php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php&php&php php(php$typephp php=php=php=php nullphp)php)php orphp php(php$typephp php=php=php php'phpphp'php)php)php php{
php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$formatphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>datephp(php$thisphp-php>php_toTokenphp(php$formatphp,php php$localephp)php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp stringphp representationphp ofphp thephp datephp whichphp isphp equalphp withphp thephp timestamp
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(nullphp,php php$thisphp-php>php_localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp integerphp representationphp ofphp thephp object
php php php php php php*php Butphp returnsphp falsephp whenphp thephp givenphp partphp isphp nophp valuephp fphp.ephp.php Monthphp-Name
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$partphp php OPTIONALphp Definesphp thephp datephp orphp datepartphp tophp returnphp asphp integer
php php php php php php*php php@returnphp integerphp|false
php php php php php php*php/
php php php php publicphp functionphp toValuephp(php$partphp php=php nullphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>getphp(php$partphp)php;
php php php php php php php php ifphp php(isphp_numericphp(php$resultphp)php)php php{
php php php php php php php php php php returnphp intvalphp(php"php$resultphp"php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp representationphp ofphp thephp object
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp toArrayphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'dayphp'php php php php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:DAYphp_SHORTphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'monthphp'php php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:MONTHphp_SHORTphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'yearphp'php php php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:YEARphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'hourphp'php php php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:HOURphp_SHORTphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'minutephp'php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:MINUTEphp_SHORTphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'secondphp'php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:SECONDphp_SHORTphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'timezonephp'php php php=php>php php$thisphp-php>toStringphp(selfphp:php:TIMEZONEphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'timestampphp'php php=php>php php$thisphp-php>toStringphp(selfphp:php:TIMESTAMPphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'weekdayphp'php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_php8php6php0php1php,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'dayofyearphp'php php=php>php php$thisphp-php>toStringphp(selfphp:php:DAYphp_OFphp_YEARphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'weekphp'php php php php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:WEEKphp,php php'isophp'php)php,
php php php php php php php php php php php php php php php php php php php php php php'gmtsecsphp'php php php php=php>php php$thisphp-php>toStringphp(selfphp:php:TIMEZONEphp_SECSphp,php php'isophp'php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp representationphp ofphp aphp datephp orphp datepart
php php php php php php*php Thisphp couldphp bephp forphp examplephp aphp localizedphp monthnamephp,php thephp timephp withoutphp datephp,
php php php php php php*php thephp eraphp orphp onlyphp thephp fractionalphp secondsphp.php Therephp arephp aboutphp php5php0php differentphp supportedphp datephp partsphp.
php php php php php php*php Forphp aphp completephp listphp ofphp supportedphp datepartphp valuesphp lookphp intophp thephp docu
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp returnphp,php ifphp nullphp thephp timestampphp isphp returned
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp stringphp php datephp orphp datepart
php php php php php php*php/
php php php php publicphp functionphp getphp(php$partphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$partphp php!php=php=php nullphp)php php&php&php php!definedphp(php$partphp)
php php php php php php php php php php php php php&php&php php(php$partphp php!php=php php'eephp'php)php php&php&php php(php$partphp php!php=php php'ssphp'php)php php&php&php php(php$partphp php!php=php php'GGphp'php)php php&php&php php(php$partphp php!php=php php'MMphp'php)php php&php&php php(php$partphp php!php=php php'EEphp'php)php php&php&php php(php$partphp php!php=php php'TTphp'php)
php php php php php php php php php php php php php&php&php Zendphp_Localephp:php:isLocalephp(php$partphp,php nullphp,php falsephp)php)php php{
php php php php php php php php php php php php php$localephp php=php php$partphp;
php php php php php php php php php php php php php$partphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$partphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$partphp php=php selfphp:php:TIMESTAMPphp;
php php php php php php php php php}php elsephp ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$partphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$partphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>datephp(php$thisphp-php>php_toTokenphp(php$partphp,php php$localephp)php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp methodphp tophp applyphp tokens
php php php php php php*
php php php php php php*php php@paramphp stringphp php$part
php php php php php php*php php@paramphp stringphp php$locale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_toTokenphp(php$partphp,php php$localephp)php php{
php php php php php php php php php/php/php getphp formatphp tokens
php php php php php php php php php$commentphp php=php falsephp;
php php php php php php php php php$formatphp php php=php php'php'php;
php php php php php php php php php$origphp php php php php=php php'php'php;
php php php php php php php php forphp php(php$iphp php=php php0php;php issetphp(php$partphp[php$iphp]php)php;php php+php+php$iphp)php php{
php php php php php php php php php php php php ifphp php(php$partphp[php$iphp]php php=php=php php"php'php"php)php php{
php php php php php php php php php php php php php php php php php$commentphp php=php php$commentphp php?php falsephp php:php truephp;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$partphp[php$iphp+php1php]php)php php&php&php php(php$partphp[php$iphp+php1php]php php=php=php php"php'php"php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$commentphp php=php php$commentphp php?php falsephp php:php truephp;
php php php php php php php php php php php php php php php php php php php php php$formatphp php.php=php php"php\php\php'php"php;
php php php php php php php php php php php php php php php php php php php php php+php+php$iphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$origphp php=php php'php'php;
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$commentphp)php php{
php php php php php php php php php php php php php php php php php$formatphp php.php=php php'php\php\php'php php.php php$partphp[php$iphp]php;
php php php php php php php php php php php php php php php php php$origphp php=php php'php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$origphp php.php=php php$partphp[php$iphp]php;
php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$partphp[php$iphp+php1php]php)php php|php|php php(issetphp(php$origphp[php0php]php)php php&php&php php(php$origphp[php0php]php php!php=php php$partphp[php$iphp+php1php]php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php.php=php php$thisphp-php>php_parseIsoToDatephp(php$origphp,php php$localephp)php;
php php php php php php php php php php php php php php php php php php php php php$origphp php php=php php'php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$formatphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp parsingphp method
php php php php php php*
php php php php php php*php php@paramphp stringphp php$token
php php php php php php*php php@paramphp stringphp php$locale
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_parseIsoToDatephp(php$tokenphp,php php$localephp)php php{
php php php php php php php php switchphp(php$tokenphp)php php{
php php php php php php php php php php php php casephp selfphp:php:DAYphp php:
php php php php php php php php php php php php php php php php returnphp php'dphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_SHORTphp php:
php php php php php php php php php php php php php php php php php$weekdayphp php=php strtolowerphp(php$thisphp-php>datephp(php'Dphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php)php;
php php php php php php php php php php php php php php php php php$dayphp php php php php php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'dayphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'widephp'php,php php$weekdayphp)php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(iconvphp_substrphp(php$dayphp,php php0php,php php3php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php'jphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp php:
php php php php php php php php php php php php php php php php php$weekdayphp php=php strtolowerphp(php$thisphp-php>datephp(php'Dphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'dayphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'widephp'php,php php$weekdayphp)php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_php8php6php0php1php php:
php php php php php php php php php php php php php php php php returnphp php'Nphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'eephp'php php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'Nphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYphp_SUFFIXphp php:
php php php php php php php php php php php php php php php php returnphp php'Sphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_DIGITphp php:
php php php php php php php php php php php php php php php php returnphp php'wphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYphp_OFphp_YEARphp php:
php php php php php php php php php php php php php php php php returnphp php'zphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'DDDphp'php php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'zphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php3php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'DDphp'php php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'zphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_NARROWphp php:
php php php php php php php php php php php php casephp php'EEEEEphp'php php:
php php php php php php php php php php php php php php php php php$weekdayphp php=php strtolowerphp(php$thisphp-php>datephp(php'Dphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php)php;
php php php php php php php php php php php php php php php php php$dayphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'dayphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php,php php$weekdayphp)php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(iconvphp_substrphp(php$dayphp,php php0php,php php1php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_NAMEphp php:
php php php php php php php php php php php php php php php php php$weekdayphp php=php strtolowerphp(php$thisphp-php>datephp(php'Dphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'dayphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php,php php$weekdayphp)php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'wphp'php php:
php php php php php php php php php php php php php php php php php$weekphp php=php php$thisphp-php>datephp(php'Wphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(php(php$weekphp[php0php]php php=php=php php'php0php'php)php php?php php$weekphp[php1php]php php:php php$weekphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKphp php:
php php php php php php php php php php php php php php php php returnphp php'Wphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp php:
php php php php php php php php php php php php php php php php php$monthphp php=php php$thisphp-php>datephp(php'nphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'monthphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'widephp'php,php php$monthphp)php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp php:
php php php php php php php php php php php php php php php php returnphp php'mphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp_SHORTphp php:
php php php php php php php php php php php php php php php php php$monthphp php=php php$thisphp-php>datephp(php'nphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'monthphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php,php php$monthphp)php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php'nphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_DAYSphp php:
php php php php php php php php php php php php php php php php returnphp php'tphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp_NARROWphp php:
php php php php php php php php php php php php php php php php php$monthphp php=php php$thisphp-php>datephp(php'nphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php php$monphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'monthphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php,php php$monthphp)php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(iconvphp_substrphp(php$monphp,php php0php,php php1php,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:LEAPYEARphp php:
php php php php php php php php php php php php php php php php returnphp php'Lphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp_php8php6php0php1php php:
php php php php php php php php php php php php php php php php returnphp php'ophp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp php:
php php php php php php php php php php php php php php php php returnphp php'Yphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php'yphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp_SHORTphp_php8php6php0php1php php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(substrphp(php$thisphp-php>datephp(php'ophp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php-php2php,php php2php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MERIDIEMphp php:
php php php php php php php php php php php php php php php php php$amphp php=php php$thisphp-php>datephp(php'aphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$amphp php=php=php php'amphp'php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'amphp'php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'pmphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SWATCHphp php:
php php php php php php php php php php php php php php php php returnphp php'Bphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp_SHORTphp_AMphp php:
php php php php php php php php php php php php php php php php returnphp php'gphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php'Gphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp_AMphp php:
php php php php php php php php php php php php php php php php returnphp php'hphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp php:
php php php php php php php php php php php php php php php php returnphp php'Hphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MINUTEphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'iphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SECONDphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'sphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MINUTEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php'iphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SECONDphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php'sphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MILLISECONDphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(php$thisphp-php>getMilliSecondphp(php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp_NAMEphp php:
php php php php php php php php php php php php casephp php'vvvvphp'php php:
php php php php php php php php php php php php php php php php returnphp php'ephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYLIGHTphp php:
php php php php php php php php php php php php php php php php returnphp php'Iphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:GMTphp_DIFFphp php:
php php php php php php php php php php php php casephp php'ZZphp'php php:
php php php php php php php php php php php php casephp php'ZZZphp'php php:
php php php php php php php php php php php php php php php php returnphp php'Ophp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:GMTphp_DIFFphp_SEPphp php:
php php php php php php php php php php php php php php php php returnphp php'Pphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp php:
php php php php php php php php php php php php casephp php'vphp'php php:
php php php php php php php php php php php php casephp php'zzphp'php php:
php php php php php php php php php php php php casephp php'zzzphp'php php:
php php php php php php php php php php php php php php php php returnphp php'Tphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp_SECSphp php:
php php php php php php php php php php php php php php php php returnphp php'Zphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ISOphp_php8php6php0php1php php:
php php php php php php php php php php php php php php php php returnphp php'cphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php2php8php2php2php php:
php php php php php php php php php php php php php php php php returnphp php'rphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMESTAMPphp php:
php php php php php php php php php php php php php php php php returnphp php'Uphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ERAphp php:
php php php php php php php php php php php php casephp php'GGphp'php php:
php php php php php php php php php php php php casephp php'GGGphp'php php:
php php php php php php php php php php php php php php php php php$yearphp php=php php$thisphp-php>datephp(php'Yphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$yearphp <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'eraphp'php,php arrayphp(php'gregorianphp'php,php php'Abbrphp'php,php php'php0php'php)php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'eraphp'php,php arrayphp(php'gregorianphp'php,php php'Abbrphp'php,php php'php1php'php)php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ERAphp_NARROWphp php:
php php php php php php php php php php php php php php php php php$yearphp php=php php$thisphp-php>datephp(php'Yphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$yearphp <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(iconvphp_substrphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'eraphp'php,php arrayphp(php'gregorianphp'php,php php'Abbrphp'php,php php'php0php'php)php)php,php php0php,php php1php,php php'UTFphp-php8php'php)php)php php.php php'php.php'php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(iconvphp_substrphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'eraphp'php,php arrayphp(php'gregorianphp'php,php php'Abbrphp'php,php php'php1php'php)php)php,php php0php,php php1php,php php'UTFphp-php8php'php)php)php php.php php'php.php'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ERAphp_NAMEphp php:
php php php php php php php php php php php php php php php php php$yearphp php=php php$thisphp-php>datephp(php'Yphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$yearphp <php php0php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'eraphp'php,php arrayphp(php'gregorianphp'php,php php'Namesphp'php,php php'php0php'php)php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'eraphp'php,php arrayphp(php'gregorianphp'php,php php'Namesphp'php,php php'php1php'php)php)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATESphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Formatphp:php:getDateFormatphp(php$localephp)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_FULLphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_LONGphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_MEDIUMphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMESphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Formatphp:php:getTimeFormatphp(php$localephp)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_FULLphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php php'fullphp'php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_LONGphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php php'longphp'php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_MEDIUMphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php php'mediumphp'php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php php'shortphp'php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Formatphp:php:getDateTimeFormatphp(php$localephp)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_FULLphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_LONGphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_MEDIUMphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toTokenphp(Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:ATOMphp php:
php php php php php php php php php php php php php php php php returnphp php'Yphp\php-mphp\php-dphp\THphp\php:iphp\php:sPphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:COOKIEphp php:
php php php php php php php php php php php php php php php php returnphp php'lphp\php,php dphp\php-Mphp\php-yphp Hphp\php:iphp\php:sphp ephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php8php2php2php php:
php php php php php php php php php php php php php php php php returnphp php'Dphp\php,php dphp Mphp yphp Hphp\php:iphp\php:sphp Ophp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php8php5php0php php:
php php php php php php php php php php php php php php php php returnphp php'lphp\php,php dphp\php-Mphp\php-yphp Hphp\php:iphp\php:sphp ephp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php1php0php3php6php php:
php php php php php php php php php php php php php php php php returnphp php'Dphp\php,php dphp Mphp yphp Hphp\php:iphp\php:sphp Ophp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php1php1php2php3php php:
php php php php php php php php php php php php php php php php returnphp php'Dphp\php,php dphp Mphp Yphp Hphp\php:iphp\php:sphp Ophp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php3php3php3php9php php:
php php php php php php php php php php php php php php php php returnphp php'Yphp\php-mphp\php-dphp\THphp\php:iphp\php:sPphp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RSSphp php:
php php php php php php php php php php php php php php php php returnphp php'Dphp\php,php dphp Mphp Yphp Hphp\php:iphp\php:sphp Ophp'php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:Wphp3Cphp php:
php php php php php php php php php php php php php php php php returnphp php'Yphp\php-mphp\php-dphp\THphp\php:iphp\php:sPphp'php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$tokenphp php=php=php php'php'php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$tokenphp[php0php]php)php php{
php php php php php php php php php php php php casephp php'yphp'php php:
php php php php php php php php php php php php php php php php ifphp php(php(strlenphp(php$tokenphp)php php=php=php php4php)php php&php&php php(absphp(php$thisphp-php>getUnixTimestampphp(php)php)php <php=php php0xphp7FFFFFFFphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php'Yphp'php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$lengthphp php=php iconvphp_strlenphp(php$tokenphp,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'Yphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php$lengthphp,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Yphp'php php:
php php php php php php php php php php php php php php php php ifphp php(php(strlenphp(php$tokenphp)php php=php=php php4php)php php&php&php php(absphp(php$thisphp-php>getUnixTimestampphp(php)php)php <php=php php0xphp7FFFFFFFphp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php'ophp'php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$lengthphp php=php iconvphp_strlenphp(php$tokenphp,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$thisphp-php>datephp(php'ophp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php,php php$lengthphp,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp php'Aphp'php php:
php php php php php php php php php php php php php php php php php$lengthphp php php=php iconvphp_strlenphp(php$tokenphp,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php$resultphp php php=php substrphp(php$thisphp-php>getMilliSecondphp(php)php,php php0php,php php3php)php;
php php php php php php php php php php php php php php php php php$resultphp php+php=php php$thisphp-php>datephp(php'sphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php php*php php1php0php0php0php;
php php php php php php php php php php php php php php php php php$resultphp php+php=php php$thisphp-php>datephp(php'iphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php php*php php6php0php0php0php0php;
php php php php php php php php php php php php php php php php php$resultphp php+php=php php$thisphp-php>datephp(php'Hphp'php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php php*php php3php6php0php0php0php0php0php;

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(strphp_padphp(php$resultphp,php php$lengthphp,php php'php0php'php,php STRphp_PADphp_LEFTphp)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_toCommentphp(php$tokenphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Privatephp functionphp tophp makephp aphp commentphp ofphp aphp token
php php php php php php*
php php php php php php*php php@paramphp stringphp php$token
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_toCommentphp(php$tokenphp)
php php php php php{
php php php php php php php php php$tokenphp php=php strphp_splitphp(php$tokenphp)php;
php php php php php php php php php$resultphp php=php php'php'php;
php php php php php php php php foreachphp php(php$tokenphp asphp php$tokphp)php php{
php php php php php php php php php php php php php$resultphp php.php=php php'php\php\php'php php.php php$tokphp;
php php php php php php php php php}

php php php php php php php php returnphp php$resultphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp digitphp fromphp standardphp namesphp php(englishphp)
php php php php php php*php Fasterphp implementationphp thanphp localephp awarephp searching
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$name
php php php php php php*php php@returnphp integerphp php Numberphp ofphp thisphp month
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_getDigitFromNamephp(php$namephp)
php php php php php{
php php php php php php php php switchphp(php$namephp)php php{
php php php php php php php php php php php php casephp php"Janphp"php:
php php php php php php php php php php php php php php php php returnphp php1php;

php php php php php php php php php php php php casephp php"Febphp"php:
php php php php php php php php php php php php php php php php returnphp php2php;

php php php php php php php php php php php php casephp php"Marphp"php:
php php php php php php php php php php php php php php php php returnphp php3php;

php php php php php php php php php php php php casephp php"Aprphp"php:
php php php php php php php php php php php php php php php php returnphp php4php;

php php php php php php php php php php php php casephp php"Mayphp"php:
php php php php php php php php php php php php php php php php returnphp php5php;

php php php php php php php php php php php php casephp php"Junphp"php:
php php php php php php php php php php php php php php php php returnphp php6php;

php php php php php php php php php php php php casephp php"Julphp"php:
php php php php php php php php php php php php php php php php returnphp php7php;

php php php php php php php php php php php php casephp php"Augphp"php:
php php php php php php php php php php php php php php php php returnphp php8php;

php php php php php php php php php php php php casephp php"Sepphp"php:
php php php php php php php php php php php php php php php php returnphp php9php;

php php php php php php php php php php php php casephp php"Octphp"php:
php php php php php php php php php php php php php php php php returnphp php1php0php;

php php php php php php php php php php php php casephp php"Novphp"php:
php php php php php php php php php php php php php php php php returnphp php1php1php;

php php php php php php php php php php php php casephp php"Decphp"php:
php php php php php php php php php php php php php php php php returnphp php1php2php;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'Monthphp php(php$namephp)php isphp notphp aphp knownphp monthphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Countsphp thephp exactphp yearphp number
php php php php php php*php <php php7php0php php-php php2php0php0php0php addedphp,php php>php7php0php <php php1php0php0php php-php php1php9php0php0php,php othersphp justphp returned
php php php php php php*
php php php php php php*php php@paramphp php integerphp php php$valuephp yearphp number
php php php php php php*php php@returnphp integerphp php Numberphp ofphp year
php php php php php php*php/
php php php php publicphp staticphp functionphp getFullYearphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php>php=php php0php)php php{
php php php php php php php php php php php php ifphp php(php$valuephp <php php7php0php)php php{
php php php php php php php php php php php php php php php php php$valuephp php+php=php php2php0php0php0php;
php php php php php php php php php php php php php}php elsephp ifphp php(php$valuephp <php php1php0php0php)php php{
php php php php php php php php php php php php php php php php php$valuephp php+php=php php1php9php0php0php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp givenphp datephp asphp newphp datephp orphp aphp givenphp datepartphp asphp newphp datepartphp returningphp thephp newphp datepart
php php php php php php*php Thisphp couldphp bephp forphp examplephp aphp localizedphp daynamephp,php thephp datephp withoutphp timephp,
php php php php php php*php thephp monthphp orphp onlyphp thephp secondsphp.php Therephp arephp aboutphp php5php0php differentphp supportedphp datephp partsphp.
php php php php php php*php Forphp aphp completephp listphp ofphp supportedphp datepartphp valuesphp lookphp intophp thephp docu
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp set
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp setphp,php ifphp nullphp thephp timestampphp isphp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setphp(php$datephp,php php$partphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$partphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$partphp)php;
php php php php php php php php php}

php php php php php php php php php$zonephp php=php php$thisphp-php>getTimezoneFromStringphp(php$datephp)php;
php php php php php php php php php$thisphp-php>setTimezonephp(php$zonephp)php;

php php php php php php php php php$thisphp-php>php_calculatephp(php'setphp'php,php php$datephp,php php$partphp,php php$localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp datephp orphp datepartphp tophp thephp existingphp datephp,php byphp extractingphp php$partphp fromphp php$datephp,
php php php php php php*php andphp modifyingphp thisphp objectphp byphp addingphp thatphp partphp.php php Thephp php$partphp isphp thenphp extractedphp from
php php php php php php*php thisphp objectphp andphp returnedphp asphp anphp integerphp orphp numericphp stringphp php(forphp largephp valuesphp,php orphp php$partphp's
php php php php php php*php correspondingphp tophp prephp-definedphp formattedphp datephp stringsphp)php.
php php php php php php*php Thisphp couldphp bephp forphp examplephp aphp ISOphp php8php6php0php1php datephp,php thephp hourphp thephp monthnamephp orphp onlyphp thephp minutephp.
php php php php php php*php Therephp arephp aboutphp php5php0php differentphp supportedphp datephp partsphp.
php php php php php php*php Forphp aphp completephp listphp ofphp supportedphp datepartphp valuesphp lookphp intophp thephp docuphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp add
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp addphp,php ifphp nullphp thephp timestampphp isphp added
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addphp(php$datephp,php php$partphp php=php selfphp:php:TIMESTAMPphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$partphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$partphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_calculatephp(php'addphp'php,php php$datephp,php php$partphp,php php$localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Subtractsphp aphp datephp fromphp anotherphp datephp.
php php php php php php*php Thisphp couldphp bephp forphp examplephp aphp RFCphp2php8php2php2php datephp,php thephp timephp,
php php php php php php*php thephp yearphp orphp onlyphp thephp timestampphp.php Therephp arephp aboutphp php5php0php differentphp supportedphp datephp partsphp.
php php php php php php*php Forphp aphp completephp listphp ofphp supportedphp datepartphp valuesphp lookphp intophp thephp docu
php php php php php php*php Bephp awarephp:php Addingphp php-php2php Monthsphp isphp notphp equalphp tophp Subtractingphp php2php Monthsphp php!php!php!
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp subtract
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp subphp,php ifphp nullphp thephp timestampphp isphp subtracted
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subphp(php$datephp,php php$partphp php=php selfphp:php:TIMESTAMPphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$partphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$partphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_calculatephp(php'subphp'php,php php$datephp,php php$partphp,php php$localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparesphp aphp datephp orphp datepartphp withphp thephp existingphp onephp.
php php php php php php*php Returnsphp php-php1php ifphp earlierphp,php php0php ifphp equalphp andphp php1php ifphp laterphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp comparephp withphp thephp datephp object
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp comparephp,php ifphp nullphp thephp timestampphp isphp subtracted
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp comparephp(php$datephp,php php$partphp php=php selfphp:php:TIMESTAMPphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$partphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$partphp)php;
php php php php php php php php php}

php php php php php php php php php$comparephp php=php php$thisphp-php>php_calculatephp(php'cmpphp'php,php php$datephp,php php$partphp,php php$localephp)php;

php php php php php php php php ifphp php(php$comparephp php>php php0php)php php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}php elsephp ifphp php(php$comparephp <php php0php)php php{
php php php php php php php php php php php php returnphp php-php1php;
php php php php php php php php php}
php php php php php php php php returnphp php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp newphp instancephp ofphp Zendphp_Datephp withphp thephp selectedphp partphp copiedphp.
php php php php php php*php Tophp makephp anphp exactphp copyphp,php usephp PHPphp'sphp clonephp keywordphp.
php php php php php php*php Forphp aphp completephp listphp ofphp supportedphp datephp partphp valuesphp lookphp intophp thephp docuphp.
php php php php php php*php Ifphp aphp datephp partphp isphp copiedphp,php allphp otherphp datephp partsphp arephp setphp tophp standardphp valuesphp.
php php php php php php*php Forphp examplephp:php Ifphp onlyphp YEARphp isphp copiedphp,php thephp returnedphp datephp objectphp isphp equalphp to
php php php php php php*php php0php1php-php0php1php-YEARphp php0php0php:php0php0php:php0php0php php(php0php1php-php0php1php-php1php9php7php0php php0php0php:php0php0php:php0php0php isphp equalphp tophp timestampphp php0php)
php php php php php php*php Ifphp onlyphp HOURphp isphp copiedphp,php thephp returnedphp datephp objectphp isphp equalphp to
php php php php php php*php php0php1php-php0php1php-php1php9php7php0php HOURphp:php0php0php:php0php0php php(sophp php$thisphp containsphp aphp timestampphp equalphp tophp aphp timestampphp ofphp php0php plusphp HOURphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php$partphp php php php Partphp ofphp thephp datephp tophp comparephp,php ifphp nullphp thephp timestampphp isphp subtracted
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Newphp objectphp'sphp localephp.php php Nophp adjustmentsphp tophp timezonephp arephp madephp.
php php php php php php*php php@returnphp Zendphp_Datephp Newphp clonephp withphp requestedphp part
php php php php php php*php/
php php php php publicphp functionphp copyPartphp(php$partphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$clonephp php=php clonephp php$thisphp;php php php php php php php php php php php php/php/php copyphp allphp instancephp variables
php php php php php php php php php$clonephp-php>setUnixTimestampphp(php0php)php;php php php php php/php/php exceptphp thephp timestamp
php php php php php php php php ifphp php(php$localephp php!php=php nullphp)php php{
php php php php php php php php php php php php php$clonephp-php>setLocalephp(php$localephp)php;php php/php/php setphp anphp otherphp localephp ifphp selected
php php php php php php php php php}
php php php php php php php php php$clonephp-php>setphp(php$thisphp,php php$partphp)php;
php php php php php php php php returnphp php$clonephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp functionphp,php returnsphp thephp offsetphp ofphp aphp givenphp timezone
php php php php php php*
php php php php php php*php php@paramphp stringphp php$zone
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getTimezoneFromStringphp(php$zonephp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$zonephp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getTimezonephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$zonephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php returnphp php$zonephp-php>getTimezonephp(php)php;
php php php php php php php php php}

php php php php php php php php php$matchphp php=php arrayphp(php)php;
php php php php php php php php pregphp_matchphp(php'php/php\dZphp$php/php'php,php php$zonephp,php php$matchphp)php;
php php php php php php php php ifphp php(php!emptyphp(php$matchphp)php)php php{
php php php php php php php php php php php php returnphp php"Etcphp/UTCphp"php;
php php php php php php php php php}

php php php php php php php php pregphp_matchphp(php'php/php(php[php+php-php]php\dphp{php2php}php)php:php{php0php,php1php}php\dphp{php2php}php/php'php,php php$zonephp,php php$matchphp)php;
php php php php php php php php ifphp php(php!emptyphp(php$matchphp)php andphp php(php$matchphp[countphp(php$matchphp)php php-php php1php]php <php=php php1php2php)php andphp php(php$matchphp[countphp(php$matchphp)php php-php php1php]php php>php=php php-php1php2php)php)php php{
php php php php php php php php php php php php php$zonephp php=php php"Etcphp/GMTphp"php;
php php php php php php php php php php php php php$zonephp php.php=php php(php$matchphp[countphp(php$matchphp)php php-php php1php]php <php php0php)php php?php php"php+php"php php:php php"php-php"php;
php php php php php php php php php php php php php$zonephp php.php=php php(intphp)php absphp(php$matchphp[countphp(php$matchphp)php php-php php1php]php)php;
php php php php php php php php php php php php returnphp php$zonephp;
php php php php php php php php php}

php php php php php php php php pregphp_matchphp(php'php/php(php[php[php:alphaphp:php]php\php/php]php{php3php,php3php0php}php)php(php?php!php.php*php(php[php[php:alphaphp:php]php\php/php]php{php3php,php3php0php}php)php)php/php'php,php php$zonephp,php php$matchphp)php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchphp)php andphp php(php!isphp_intphp(php$matchphp[countphp(php$matchphp)php php-php php1php]php)php)php)php php{
php php php php php php php php php php php php php php php php php$oldzonephp php=php php$thisphp-php>getTimezonephp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setTimezonephp(php$matchphp[countphp(php$matchphp)php php-php php1php]php)php;
php php php php php php php php php php php php php php php php php$resultphp php=php php$thisphp-php>getTimezonephp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setTimezonephp(php$oldzonephp)php;
php php php php php php php php php php php php php php php php ifphp php(php$resultphp php!php=php=php php$oldzonephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$matchphp[countphp(php$matchphp)php php-php php1php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php fallphp through
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getTimezonephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatesphp thephp datephp orphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$calcphp php Calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp php php php php php php php php php php php php$datephp php Datephp forphp calculation
php php php php php php*php php@paramphp php stringphp|integerphp php php php php php php php php php php php php$compphp php Secondphp datephp forphp calculation
php php php php php php*php php@paramphp php booleanphp|integerphp php php php php php php php php php php php$dstphp php php Usephp dstphp correctionphp ifphp optionphp isphp set
php php php php php php*php php@returnphp integerphp|stringphp|Zendphp_Datephp php newphp timestampphp orphp Zendphp_Datephp dependingphp onphp calculation
php php php php php php*php/
php php php php privatephp functionphp php_assignphp(php$calcphp,php php$datephp,php php$compphp php=php php0php,php php$dstphp php=php falsephp)
php php php php php{
php php php php php php php php switchphp php(php$calcphp)php php{
php php php php php php php php php php php php casephp php'setphp'php php:
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$compphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$subphp,php php$thisphp-php>getUnixTimestampphp(php)php,php php$compphp)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$addphp,php php$thisphp-php>getUnixTimestampphp(php)php,php php$datephp)php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getUnixTimestampphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'addphp'php php:
php php php php php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$addphp,php php$thisphp-php>getUnixTimestampphp(php)php,php php$datephp)php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getUnixTimestampphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'subphp'php php:
php php php php php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$subphp,php php$thisphp-php>getUnixTimestampphp(php)php,php php$datephp)php)php;
php php php php php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getUnixTimestampphp(php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php php/php/php cmpphp php-php compare
php php php php php php php php php php php php php php php php returnphp callphp_userphp_funcphp(Zendphp_Localephp_Mathphp:php:php$compphp,php php$compphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php php/php/php dstphp-correctionphp ifphp php'fixphp_dstphp'php php=php truephp andphp dstphp php!php=php=php falsephp butphp onlyphp forphp nonphp UTCphp andphp nonphp GMT
php php php php php php php php ifphp php(php(selfphp:php:php$php_optionsphp[php'fixphp_dstphp'php]php php=php=php=php truephp)php andphp php(php$dstphp php!php=php=php falsephp)php andphp php(php$thisphp-php>php_dstphp php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php$hourphp php=php php$thisphp-php>toStringphp(selfphp:php:HOURphp,php php'isophp'php)php;
php php php php php php php php php php php php ifphp php(php$hourphp php!php=php php$dstphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php(php$dstphp php=php=php php(php$hourphp php+php php1php)php)php orphp php(php$dstphp php=php=php php(php$hourphp php-php php2php3php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php+php=php php3php6php0php0php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php(php$dstphp php=php=php php(php$hourphp php-php php1php)php)php orphp php(php$dstphp php=php=php php(php$hourphp php+php php2php3php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$valuephp php-php=php php3php6php0php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>setUnixTimestampphp(php$valuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getUnixTimestampphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Calculatesphp thephp datephp orphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php php Calculationphp tophp makephp,php onephp ofphp:php php'addphp'php|php'subphp'php|php'cmpphp'php|php'copyphp'php|php'setphp'
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp calculatephp with
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php Partphp ofphp thephp datephp tophp calculatephp,php ifphp nullphp thephp timestampphp isphp used
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp|stringphp|Zendphp_Datephp php php php php php php php newphp timestamp
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_calculatephp(php$calcphp,php php$datephp,php php$partphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'parameterphp php$datephp mustphp bephp setphp,php nullphp isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$partphp php!php=php=php nullphp)php php&php&php php(strlenphp(php$partphp)php php!php=php=php php2php)php php&php&php php(Zendphp_Localephp:php:isLocalephp(php$partphp,php nullphp,php falsephp)php)php)php php{
php php php php php php php php php php php php php$localephp php=php php$partphp;
php php php php php php php php php php php php php$partphp php php php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php php$localephp php=php php(stringphp)php php$localephp;

php php php php php php php php php/php/php Createphp datephp parts
php php php php php php php php php$yearphp php php php=php php$thisphp-php>toStringphp(selfphp:php:YEARphp,php php'isophp'php)php;
php php php php php php php php php$monthphp php php=php php$thisphp-php>toStringphp(selfphp:php:MONTHphp_SHORTphp,php php'isophp'php)php;
php php php php php php php php php$dayphp php php php php=php php$thisphp-php>toStringphp(selfphp:php:DAYphp_SHORTphp,php php'isophp'php)php;
php php php php php php php php php$hourphp php php php=php php$thisphp-php>toStringphp(selfphp:php:HOURphp_SHORTphp,php php'isophp'php)php;
php php php php php php php php php$minutephp php=php php$thisphp-php>toStringphp(selfphp:php:MINUTEphp_SHORTphp,php php'isophp'php)php;
php php php php php php php php php$secondphp php=php php$thisphp-php>toStringphp(selfphp:php:SECONDphp_SHORTphp,php php'isophp'php)php;
php php php php php php php php php/php/php Ifphp objectphp extractphp value
php php php php php php php php ifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$datephp php=php php$datephp-php>toStringphp(php$partphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$datephp)php php=php=php=php truephp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$partphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php switchphp(php$partphp)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:DAYphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:DAYphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'dayphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_DIGITphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_NARROWphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_NAMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'weekdayphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'weekdayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php=php selfphp:php:WEEKDAYphp_DIGITphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:DAYphp_OFphp_YEARphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'dayphp_ofphp_yearphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'dayphp_ofphp_yearphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MONTHphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MONTHphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp_NARROWphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'monthphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:YEARphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:YEARphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:YEARphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:YEARphp_SHORTphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'yearphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'yearphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:HOURphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:HOURphp_AMphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:HOURphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:HOURphp_SHORTphp_AMphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'hourphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'hourphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MINUTEphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:MINUTEphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'minutephp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'minutephp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:SECONDphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:SECONDphp_SHORTphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'secondphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'secondphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php/php/php Fallphp through
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp:
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp_NAMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'timezonephp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'timezonephp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:TIMESTAMPphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'timestampphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'timestampphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:WEEKphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'weekphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'weekphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp_SECSphp:
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'gmtsecsphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$datephp[php'gmtsecsphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"datepartphp forphp partphp php(php$partphp)php notphp foundphp inphp arrayphp"php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$hoursphp php=php php0php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'hourphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$hoursphp php=php php$datephp[php'hourphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$minutesphp php=php php0php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'minutephp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$minutesphp php=php php$datephp[php'minutephp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$secondsphp php=php php0php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'secondphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$secondsphp php=php php$datephp[php'secondphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$monthsphp php=php php0php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'monthphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$monthsphp php=php php$datephp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$daysphp php=php php0php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'dayphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$daysphp php=php php$datephp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$yearsphp php=php php0php;
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$datephp[php'yearphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$yearsphp php=php php$datephp[php'yearphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$hoursphp,php php$minutesphp,php php$secondsphp,php php$monthsphp,php php$daysphp,php php$yearsphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php php$datephp asphp objectphp,php partphp ofphp foreignphp datephp asphp ownphp date
php php php php php php php php switchphp(php$partphp)php php{

php php php php php php php php php php php php php/php/php dayphp formats
php php php php php php php php php php php php casephp selfphp:php:DAYphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php intvalphp(php$datephp)php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php intvalphp(php$dayphp)php,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php dayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_SHORTphp:
php php php php php php php php php php php php php php php php php$daylistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'dayphp'php)php;
php php php php php php php php php php php php php php php php php$weekdayphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_DIGITphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;

php php php php php php php php php php php php php php php php foreachphp php(php$daylistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(iconvphp_substrphp(php$valuephp,php php0php,php php3php,php php'UTFphp-php8php'php)php)php php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$cntphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php7php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$foundphp,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$weekdayphp,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekdayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYphp_SHORTphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php intvalphp(php$datephp)php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php intvalphp(php$dayphp)php,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php dayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp:
php php php php php php php php php php php php php php php php php$daylistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'dayphp'php)php;
php php php php php php php php php php php php php php php php php$weekdayphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_DIGITphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;

php php php php php php php php php php php php php php php php foreachphp php(php$daylistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(php$valuephp)php php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$cntphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php7php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$foundphp,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$weekdayphp,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekdayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php php$weekdayphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_php8php6php0php1php,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php ifphp php(php(intvalphp(php$datephp)php php>php php0php)php andphp php(intvalphp(php$datephp)php <php php8php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php intvalphp(php$datephp)php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$weekdayphp,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekdayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYphp_SUFFIXphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'dayphp suffixphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_DIGITphp:
php php php php php php php php php php php php php php php php php$weekdayphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_DIGITphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php andphp php(intvalphp(php$datephp)php php>php=php php0php)php andphp php(intvalphp(php$datephp)php <php php7php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$datephp,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$weekdayphp,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekdayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYphp_OFphp_YEARphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'addphp'php)php php|php|php php(php$calcphp php=php=php php'subphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php+php+php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php+php+php$dayphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php$datephp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php dayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_NARROWphp:
php php php php php php php php php php php php php php php php php$daylistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'dayphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php)php)php;
php php php php php php php php php php php php php php php php php$weekdayphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_DIGITphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$daylistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(iconvphp_substrphp(php$valuephp,php php0php,php php1php,php php'UTFphp-php8php'php)php)php php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$cntphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php7php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$foundphp,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$weekdayphp,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekdayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:WEEKDAYphp_NAMEphp:
php php php php php php php php php php php php php php php php php$daylistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'dayphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php)php)php;
php php php php php php php php php php php php php php php php php$weekdayphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKDAYphp_DIGITphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$daylistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(php$valuephp)php php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$cntphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php7php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$foundphp,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php$weekdayphp,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Weekdayphp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekdayphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php weekphp formats
php php php php php php php php php php php php casephp selfphp:php:WEEKphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$weekphp php=php php(intphp)php php$thisphp-php>toStringphp(selfphp:php:WEEKphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php parentphp:php:mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php(php$datephp php*php php7php)php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:mktimephp(php0php,php php0php,php php0php,php php1php,php php1php php+php php(php$weekphp php*php php7php)php,php php1php9php7php0php,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php weekphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php monthphp formats
php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp:
php php php php php php php php php php php php php php php php php$monthlistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'monthphp'php)php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$monthlistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(php$valuephp)php php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$datephp php=php arrayphp_searchphp(php$datephp,php php$monthlistphp)php;

php php php php php php php php php php php php php php php php php/php/php Monthnamephp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php1php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$monthphp php-php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$datephp,php php php$dayphp php+php php$fixdayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Monthnamephp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php monthphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$monthphp php-php php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$datephp,php php$dayphp php+php php$fixdayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php monthphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp_SHORTphp:
php php php php php php php php php php php php php php php php php$monthlistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'monthphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php)php)php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$monthlistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(php$valuephp)php php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$datephp php=php arrayphp_searchphp(php$datephp,php php$monthlistphp)php;

php php php php php php php php php php php php php php php php php/php/php Monthnamephp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php1php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$monthphp php-php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$datephp,php php$dayphp php+php php$fixdayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Monthnamephp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php monthphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_SHORTphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$monthphp php-php php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$datephp,php php php$dayphp php+php php$fixdayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php php php php php php php php php php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php monthphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_DAYSphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'monthphp daysphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MONTHphp_NAMEphp_NARROWphp:
php php php php php php php php php php php php php php php php php$monthlistphp php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'monthphp'php,php arrayphp(php'gregorianphp'php,php php'standphp-alonephp'php,php php'narrowphp'php)php)php;
php php php php php php php php php php php php php php php php php$cntphp php php php php php php php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$monthlistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(php$valuephp)php php=php=php=php strtoupperphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$keyphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$datephp php=php arrayphp_searchphp(php$datephp,php php$monthlistphp)php;

php php php php php php php php php php php php php php php php php/php/php Monthnamephp found
php php php php php php php php php php php php php php php php ifphp php(php$cntphp <php php1php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php0php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$monthphp php-php php$foundphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'extendphp_monthphp'php]php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partsphp php=php php$thisphp-php>getDatePartsphp(php$thisphp-php>mktimephp(php$hourphp,php php$minutephp,php php$secondphp,php php$datephp,php php$dayphp,php php$yearphp,php falsephp)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$partsphp[php'mdayphp'php]php php!php=php php$dayphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fixdayphp php=php php(php$partsphp[php'mdayphp'php]php <php php$dayphp)php php?php php-php$partsphp[php'mdayphp'php]php php:php php(php$partsphp[php'mdayphp'php]php php-php php$dayphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$datephp,php php php$dayphp php+php php$fixdayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php php php php php php php php php php php$yearphp,php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Monthnamephp notphp found
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php monthphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php yearphp formats
php php php php php php php php php php php php casephp selfphp:php:LEAPYEARphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'leapphp yearphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$yearphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$yearphp php-php php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php intvalphp(php$datephp)php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php php php php php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php yearphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$yearphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$yearphp php-php php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php intvalphp(php$datephp)php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php php php php php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php yearphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp_SHORTphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$datephp php=php intvalphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php selfphp:php:getFullYearphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$yearphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$yearphp php-php php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$datephp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php yearphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:YEARphp_SHORTphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$datephp php=php intvalphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php selfphp:php:getFullYearphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php=php=php=php php'addphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php+php=php php$yearphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp ifphp php(php$calcphp php=php=php=php php'subphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$datephp php=php php$yearphp php-php php$datephp;
php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php=php php'setphp'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$datephp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php yearphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php timephp formats
php php php php php php php php php php php php casephp selfphp:php:MERIDIEMphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'meridiemphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SWATCHphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$restphp php php php php=php intvalphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php$hoursphp php php php=php floorphp(php$restphp php*php php2php4php php/php php1php0php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php$restphp php php php php=php php$restphp php-php php(php$hoursphp php*php php1php0php0php0php php/php php2php4php)php;
php php php php php php php php php php php php php php php php php php php php php$minutesphp php=php floorphp(php$restphp php*php php1php4php4php0php php/php php1php0php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php$restphp php php php php=php php$restphp php-php php(php$minutesphp php*php php1php0php0php0php php/php php1php4php4php0php)php;
php php php php php php php php php php php php php php php php php php php php php$secondsphp php=php floorphp(php$restphp php*php php8php6php4php0php0php php/php php1php0php0php0php)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$hoursphp,php php$minutesphp,php php$secondsphp,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php$minutephp,php php php$secondphp,php php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php swatchstampphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp_SHORTphp_AMphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(intvalphp(php$datephp)php,php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php hourphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp_SHORTphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(intvalphp(php$datephp)php,php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php hourphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp_AMphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(intvalphp(php$datephp)php,php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php hourphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:HOURphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(intvalphp(php$datephp)php,php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php0php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php hourphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MINUTEphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php intvalphp(php$datephp)php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php$minutephp,php php php php php php php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php minutephp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SECONDphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php intvalphp(php$datephp)php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php$secondphp,php php php php php php php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php secondphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MILLISECONDphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php switchphp(php$calcphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'setphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>setMillisecondphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'addphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>addMillisecondphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php casephp php'subphp'php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>subMillisecondphp(php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>compareMillisecondphp(php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php millisecondsphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:MINUTEphp_SHORTphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php intvalphp(php$datephp)php,php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php$minutephp,php php php php php php php php0php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php minutephp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:SECONDphp_SHORTphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php intvalphp(php$datephp)php,php php1php,php php1php,php php1php9php7php0php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php$secondphp,php php php php php php php php1php,php php1php,php php1php9php7php0php,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php secondphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php timezonephp formats
php php php php php php php php php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp_NAMEphp:
php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp:
php php php php php php php php php php php php casephp selfphp:php:TIMEZONEphp_SECSphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'timezonephp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DAYLIGHTphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'daylightphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:GMTphp_DIFFphp:
php php php php php php php php php php php php casephp selfphp:php:GMTphp_DIFFphp_SEPphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'gmtdiffphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php datephp strings
php php php php php php php php php php php php casephp selfphp:php:ISOphp_php8php6php0php1php:
php php php php php php php php php php php php php php php php php/php/php php(php-php)YYYYphp-MMphp-dd
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php^php(php-php{php0php,php1php}php\dphp{php4php}php)php-php(php\dphp{php2php}php)php-php(php\dphp{php2php}php)php/php'php,php php$datephp,php php$datematchphp)php;
php php php php php php php php php php php php php php php php php/php/php php(php-php)YYphp-MMphp-dd
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$datematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php^php(php-php{php0php,php1php}php\dphp{php2php}php)php-php(php\dphp{php2php}php)php-php(php\dphp{php2php}php)php/php'php,php php$datephp,php php$datematchphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php php(php-php)YYYYMMdd
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$datematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php^php(php-php{php0php,php1php}php\dphp{php4php}php)php(php\dphp{php2php}php)php(php\dphp{php2php}php)php/php'php,php php$datephp,php php$datematchphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php php(php-php)YYMMdd
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$datematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php^php(php-php{php0php,php1php}php\dphp{php2php}php)php(php\dphp{php2php}php)php(php\dphp{php2php}php)php/php'php,php php$datephp,php php$datematchphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$tmpdatephp php=php php$datephp;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$datematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$dateMatchCharCountphp php=php iconvphp_strlenphp(php$datematchphp[php0php]php,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php php php php php$tmpdatephp php=php iconvphp_substrphp(php$datephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dateMatchCharCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php iconvphp_strlenphp(php$datephp,php php'UTFphp-php8php'php)php php-php php$dateMatchCharCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php/php/php php(Tphp)hhphp:mmphp:ss
php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[Tphp,php\sphp]php{php0php,php1php}php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php/php'php,php php$tmpdatephp,php php$timematchphp)php;
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$timematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php'php/php[Tphp,php\sphp]php{php0php,php1php}php(php\dphp{php2php}php)php(php\dphp{php2php}php)php(php\dphp{php2php}php)php/php'php,php php$tmpdatephp,php php$timematchphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$datematchphp)php andphp emptyphp(php$timematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"unsupportedphp ISOphp8php6php0php1php formatphp php(php$datephp)php"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$timematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$timeMatchCharCountphp php=php iconvphp_strlenphp(php$timematchphp[php0php]php,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php php php php php$tmpdatephp php=php iconvphp_substrphp(php$tmpdatephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$timeMatchCharCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php iconvphp_strlenphp(php$tmpdatephp,php php'UTFphp-php8php'php)php php-php php$timeMatchCharCountphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$datematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$datematchphp[php1php]php php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$datematchphp[php2php]php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php$datematchphp[php3php]php php=php php1php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(iconvphp_strlenphp(php$datematchphp[php1php]php,php php'UTFphp-php8php'php)php php=php=php php2php)php php{
php php php php php php php php php php php php php php php php php php php php php$datematchphp[php1php]php php=php selfphp:php:getFullYearphp(php$datematchphp[php1php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$timematchphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$timematchphp[php1php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$timematchphp[php2php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php$timematchphp[php3php]php php=php php0php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$datematchphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$datematchphp[php3php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$datematchphp[php1php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$timematchphp[php1php]php,php php$timematchphp[php2php]php,php php$timematchphp[php3php]php,php php1php php+php php$datematchphp[php2php]php,php php1php php+php php$datematchphp[php3php]php,php php1php9php7php0php php+php php$datematchphp[php1php]php,php falsephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php$minutephp,php php php php php php php php$secondphp,php php php php php php php php1php php+php php$monthphp,php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php falsephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php2php8php2php2php:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php\wphp{php3php}php,php\sphp(php\dphp{php1php,php2php}php)php\sphp(php\wphp{php3php}php)php\sphp(php\dphp{php4php}php)php\sphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php{php0php,php1php}php(php\dphp{php0php,php2php}php)php\sphp(php[php+php-php]php{php1php}php\dphp{php4php}php)php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp RFCphp php2php8php2php2php formatphp php(php$datephp)php"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$monthsphp php php=php php$thisphp-php>php_getDigitFromNamephp(php$matchphp[php2php]php)php;

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$monthsphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php3php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$monthsphp,php php1php php+php php$matchphp[php1php]php,php php1php9php7php0php php+php php$matchphp[php3php]php,php falsephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php falsephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMESTAMPphp:
php php php php php php php php php php php php php php php php ifphp php(isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$datephp,php php$thisphp-php>getUnixTimestampphp(php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php timestampphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php additionalphp formats
php php php php php php php php php php php php php/php/php breakphp intentionallyphp omitted
php php php php php php php php php php php php casephp selfphp:php:ERAphp:
php php php php php php php php php php php php casephp selfphp:php:ERAphp_NAMEphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'eraphp notphp supportedphp'php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATESphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'localephp'php php=php>php php$localephp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'fixphp_datephp'php php=php>php truephp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_FULLphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_LONGphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_MEDIUMphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATEphp_SHORTphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php selfphp:php:getFullYearphp(php$parsedphp[php'yearphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMESphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php!php=php php'setphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$monthphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$dayphp php php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getTimephp(php$datephp,php arrayphp(php'localephp'php php=php>php php$localephp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'fixphp_datephp'php php=php>php truephp)php)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_FULLphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php!php=php php'setphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$monthphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$dayphp php php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$parsedphp[php'secondphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'secondphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_LONGphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php!php=php php'setphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$monthphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$dayphp php php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_MEDIUMphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php!php=php php'setphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$monthphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$dayphp php php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:TIMEphp_SHORTphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$calcphp php!php=php php'setphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$monthphp php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$dayphp php php php=php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$parsedphp[php'secondphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'secondphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php$monthphp,php php$dayphp,php php$yearphp,php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDateTimephp(php$datephp,php arrayphp(php'localephp'php php=php>php php$localephp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'fixphp_datephp'php php=php>php truephp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_FULLphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDateTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$parsedphp[php'secondphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'secondphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_LONGphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDateTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_MEDIUMphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDateTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_SHORTphp:
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDateTimephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,php php'localephp'php php=php>php php$localephp)php)php;

php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php selfphp:php:getFullYearphp(php$parsedphp[php'yearphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$parsedphp[php'secondphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'secondphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,php php1php php+php php$parsedphp[php'monthphp'php]php,php php1php php+php php$parsedphp[php'dayphp'php]php,php php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php php php php php php php$minutephp,php php php php php php php php php php php php$secondphp,php php php php php php php php php php php php1php php+php php$monthphp,php php php php php php php php php php php php1php php+php php$dayphp,php php php php php php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php php php php php php php truephp)php,php php$hourphp)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php/php/php ATOMphp andphp RFCphp_php3php3php3php9php arephp identical
php php php php php php php php php php php php casephp selfphp:php:ATOMphp:
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php3php3php3php9php:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php(php\dphp{php4php}php)php-php(php\dphp{php2php}php)php-php(php\dphp{php2php}php)Tphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php\dphp{php0php,php4php}php(php[php+php-php]php{php1php}php\dphp{php2php}php:php\dphp{php2php}php|Zphp)php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php ATOMphp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php3php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php1php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$matchphp[php2php]php,php php1php php+php php$matchphp[php3php]php,php php1php9php7php0php php+php php$matchphp[php1php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:COOKIEphp:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php"php/php^php\wphp{php6php,php9php}php,php\sphp(php\dphp{php2php}php)php-php(php\wphp{php3php}php)php-php(php\dphp{php2php}php)php\sphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php\sphp.php{php3php,php2php0php}php$php/php"php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php COOKIEphp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$matchStartPosphp php=php iconvphp_strposphp(php$matchphp[php0php]php,php php'php php'php,php php0php,php php'UTFphp-php8php'php)php php+php php1php;
php php php php php php php php php php php php php php php php php$matchphp[php0php]php php=php iconvphp_substrphp(php$matchphp[php0php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchStartPosphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php iconvphp_strlenphp(php$matchphp[php0php]php,php php'UTFphp-php8php'php)php php-php php$matchStartPosphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UTFphp-php8php'php)php;

php php php php php php php php php php php php php php php php php$monthsphp php php php php=php php$thisphp-php>php_getDigitFromNamephp(php$matchphp[php2php]php)php;
php php php php php php php php php php php php php php php php php$matchphp[php3php]php php=php selfphp:php:getFullYearphp(php$matchphp[php3php]php)php;

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$monthsphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php3php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$monthsphp,php php1php php+php php$matchphp[php1php]php,php php1php9php7php0php php+php php$matchphp[php3php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php8php2php2php:
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php1php0php3php6php:
php php php php php php php php php php php php php php php php php/php/php newphp RFCphp php8php2php2php formatphp,php identicalphp tophp RFCphp php1php0php3php6php standard
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php\wphp{php0php,php3php}php,php{php0php,php1php}php\sphp{php0php,php1php}php(php\dphp{php1php,php2php}php)php\sphp(php\wphp{php3php}php)php\sphp(php\dphp{php2php}php)php\sphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php{php0php,php1php}php(php\dphp{php0php,php2php}php)php\sphp(php[php+php-php]php{php1php}php\dphp{php4php}php|php\wphp{php1php,php2php0php}php)php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php RFCphp php8php2php2php datephp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$monthsphp php php php php=php php$thisphp-php>php_getDigitFromNamephp(php$matchphp[php2php]php)php;
php php php php php php php php php php php php php php php php php$matchphp[php3php]php php=php selfphp:php:getFullYearphp(php$matchphp[php3php]php)php;

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$monthsphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php3php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$monthsphp,php php1php php+php php$matchphp[php1php]php,php php1php9php7php0php php+php php$matchphp[php3php]php,php falsephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php falsephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php8php5php0php:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php\wphp{php6php,php9php}php,php\sphp(php\dphp{php2php}php)php-php(php\wphp{php3php}php)php-php(php\dphp{php2php}php)php\sphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php\sphp.php{php3php,php2php1php}php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php RFCphp php8php5php0php datephp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$monthsphp php php php php=php php$thisphp-php>php_getDigitFromNamephp(php$matchphp[php2php]php)php;
php php php php php php php php php php php php php php php php php$matchphp[php3php]php php=php selfphp:php:getFullYearphp(php$matchphp[php3php]php)php;

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$monthsphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php3php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$monthsphp,php php1php php+php php$matchphp[php1php]php,php php1php9php7php0php php+php php$matchphp[php3php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RFCphp_php1php1php2php3php:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php\wphp{php0php,php3php}php,php{php0php,php1php}php\sphp{php0php,php1php}php(php\dphp{php1php,php2php}php)php\sphp(php\wphp{php3php}php)php\sphp(php\dphp{php2php,php4php}php)php\sphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php{php0php,php1php}php(php\dphp{php0php,php2php}php)php\sphp(php[php+php-php]php{php1php}php\dphp{php4php}php|php\wphp{php1php,php2php0php}php)php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php RFCphp php1php1php2php3php datephp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$monthsphp php php=php php$thisphp-php>php_getDigitFromNamephp(php$matchphp[php2php]php)php;

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$monthsphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php3php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$monthsphp,php php1php php+php php$matchphp[php1php]php,php php1php9php7php0php php+php php$matchphp[php3php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:RSSphp:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php\wphp{php3php}php,php\sphp(php\dphp{php2php}php)php\sphp(php\wphp{php3php}php)php\sphp(php\dphp{php2php,php4php}php)php\sphp(php\dphp{php1php,php2php}php)php:php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php\sphp.php{php1php,php2php1php}php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php RSSphp datephp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$monthsphp php php=php php$thisphp-php>php_getDigitFromNamephp(php$matchphp[php2php]php)php;
php php php php php php php php php php php php php php php php php$matchphp[php3php]php php=php selfphp:php:getFullYearphp(php$matchphp[php3php]php)php;

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$monthsphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php3php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$monthsphp,php php1php php+php php$matchphp[php1php]php,php php1php9php7php0php php+php php$matchphp[php3php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:Wphp3Cphp:
php php php php php php php php php php php php php php php php php$resultphp php=php pregphp_matchphp(php'php/php^php(php\dphp{php4php}php)php-php(php\dphp{php2php}php)php-php(php\dphp{php2php}php)Tphp(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php:php(php\dphp{php2php}php)php[php+php-php]php{php1php}php\dphp{php2php}php:php\dphp{php2php}php$php/php'php,php php$datephp,php php$matchphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!php$resultphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp datephp php(php$datephp)php operandphp,php Wphp3Cphp datephp formatphp expectedphp"php,php php0php,php nullphp,php php$datephp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php2php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$monthphp;
php php php php php php php php php php php php php php php php php php php php php-php-php$matchphp[php3php]php;
php php php php php php php php php php php php php php php php php php php php php-php-php$dayphp;
php php php php php php php php php php php php php php php php php php php php php$matchphp[php1php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php$yearphp php php php php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(php$matchphp[php4php]php,php php$matchphp[php5php]php,php php$matchphp[php6php]php,php php1php php+php php$matchphp[php2php]php,php php1php php+php php$matchphp[php3php]php,php php1php9php7php0php php+php php$matchphp[php1php]php,php truephp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>mktimephp(php$hourphp,php php php php php php$minutephp,php php php php$secondphp,php php php php1php php+php php$monthphp,php php php php php1php php+php php$dayphp,php php php php php php php1php9php7php0php php+php php$yearphp,php php php php php truephp)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php ifphp php(php!isphp_numericphp(php$datephp)php php|php|php php!emptyphp(php$partphp)php)php php{
php php php php php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$partphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php=php Zendphp_Localephp_Formatphp:php:getDateFormatphp(php$localephp)php php.php php"php php"php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php.php=php Zendphp_Localephp_Formatphp:php:getTimeFormatphp(php$localephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$partphp,php php'localephp'php php=php>php php$localephp,php php'fixphp_datephp'php php=php>php truephp,php php'formatphp_typephp'php php=php>php php'isophp'php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(strposphp(strtoupperphp(php$partphp)php,php php'YYphp'php)php php!php=php=php falsephp)php andphp php(strposphp(strtoupperphp(php$partphp)php,php php'YYYYphp'php)php php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php selfphp:php:getFullYearphp(php$parsedphp[php'yearphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$calcphp php=php=php php'setphp'php)php php|php|php php(php$calcphp php=php=php php'cmpphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$parsedphp[php'monthphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'monthphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$parsedphp[php'dayphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php-php-php$parsedphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'dayphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$parsedphp[php'yearphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php-php=php php1php9php7php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php php0php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$thisphp-php>mktimephp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php issetphp(php$parsedphp[php'hourphp'php]php)php php?php php$parsedphp[php'hourphp'php]php php:php php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php issetphp(php$parsedphp[php'minutephp'php]php)php php?php php$parsedphp[php'minutephp'php]php php:php php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php issetphp(php$parsedphp[php'secondphp'php]php)php php?php php$parsedphp[php'secondphp'php]php php:php php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php issetphp(php$parsedphp[php'monthphp'php]php)php php?php php(php1php php+php php$parsedphp[php'monthphp'php]php)php php:php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php issetphp(php$parsedphp[php'dayphp'php]php)php php?php php(php1php php+php php$parsedphp[php'dayphp'php]php)php php:php php1php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php issetphp(php$parsedphp[php'yearphp'php]php)php php?php php(php1php9php7php0php php+php php$parsedphp[php'yearphp'php]php)php php:php php1php9php7php0php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php falsephp)php,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!isphp_numericphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp,php php$datephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php_assignphp(php$calcphp,php php$datephp,php php$thisphp-php>getUnixTimestampphp(php)php,php falsephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp truephp whenphp bothphp datephp objectsphp orphp datephp partsphp arephp equalphp.
php php php php php php*php Forphp examplephp:
php php php php php php*php php1php5php.Mayphp.php2php0php0php0php <php-php>php php1php5php.Junephp.php2php0php0php0php Equalsphp onlyphp forphp Dayphp orphp Yearphp.php.php.php allphp otherphp willphp returnphp false
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp equalphp with
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp comparephp,php ifphp nullphp thephp timestampphp isphp used
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp equalsphp(php$datephp,php php$partphp php=php selfphp:php:TIMESTAMPphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>comparephp(php$datephp,php php$partphp,php php$localephp)php;

php php php php php php php php ifphp php(php$resultphp php=php=php php0php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp givenphp datephp orphp datepartphp isphp earlier
php php php php php php*php Forphp examplephp:
php php php php php php*php php1php5php.Mayphp.php2php0php0php0php <php-php>php php1php3php.Junephp.php1php9php9php9php willphp returnphp truephp forphp dayphp,php yearphp andphp datephp,php butphp notphp forphp month
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp comparephp with
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp comparephp,php ifphp nullphp thephp timestampphp isphp used
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp isEarlierphp(php$datephp,php php$partphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>comparephp(php$datephp,php php$partphp,php php$localephp)php;

php php php php php php php php ifphp php(php$resultphp php=php=php php-php1php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp givenphp datephp orphp datepartphp isphp later
php php php php php php*php Forphp examplephp:
php php php php php php*php php1php5php.Mayphp.php2php0php0php0php <php-php>php php1php3php.Junephp.php1php9php9php9php willphp returnphp truephp forphp monthphp butphp falsephp forphp dayphp,php yearphp andphp date
php php php php php php*php Returnsphp ifphp thephp givenphp datephp isphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp datepartphp tophp comparephp with
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php OPTIONALphp Partphp ofphp thephp datephp tophp comparephp,php ifphp nullphp thephp timestampphp isphp used
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp boolean
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp isLaterphp(php$datephp,php php$partphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$resultphp php=php php$thisphp-php>comparephp(php$datephp,php php$partphp,php php$localephp)php;

php php php php php php php php ifphp php(php$resultphp php=php=php php1php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp onlyphp thephp timephp ofphp thephp datephp asphp newphp Zendphp_Datephp object
php php php php php php*php Forphp examplephp:
php php php php php php*php php1php5php.Mayphp.php2php0php0php0php php1php0php:php1php1php:php2php3php willphp returnphp aphp dateobjectphp equalphp tophp php0php1php.Janphp.php1php9php7php0php php1php0php:php1php1php:php2php3
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getTimephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'Hphp:iphp:sphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:TIMEphp_MEDIUMphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp calculatedphp time
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$calcphp php php php Calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$timephp php php php Timephp tophp calculatephp withphp,php ifphp nullphp thephp actualphp timephp isphp taken
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php Timeformatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp|Zendphp_Datephp php newphp time
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_timephp(php$calcphp,php php$timephp,php php$formatphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$timephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'parameterphp php$timephp mustphp bephp setphp,php nullphp isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$timephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php/php/php extractphp timephp fromphp object
php php php php php php php php php php php php php$timephp php=php php$timephp-php>toStringphp(php'HHphp:mmphp:ssphp'php,php php'isophp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$timephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php(issetphp(php$timephp[php'hourphp'php]php)php php=php=php=php truephp)php orphp php(issetphp(php$timephp[php'minutephp'php]php)php php=php=php=php truephp)php or
php php php php php php php php php php php php php php php php php php php php php(issetphp(php$timephp[php'secondphp'php]php)php php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php php$timephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp hourphp,php minutephp orphp secondphp givenphp inphp arrayphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$formatphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getTimephp(php$timephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'localephp'php php=php>php php$localephp,php php'formatphp_typephp'php php=php>php php'isophp'php)php)php;
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'hourphp'php,php php$parsedphp)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'hourphp'php]php php=php php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'minutephp'php,php php$parsedphp)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'minutephp'php]php php=php php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'secondphp'php,php php$parsedphp)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'secondphp'php]php php=php php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$timephp php php=php strphp_padphp(php$parsedphp[php'hourphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php php.php php"php:php"php;
php php php php php php php php php php php php php$timephp php.php=php strphp_padphp(php$parsedphp[php'minutephp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php php.php php"php:php"php;
php php php php php php php php php php php php php$timephp php.php=php strphp_padphp(php$parsedphp[php'secondphp'php]php,php php2php,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$timephp,php selfphp:php:TIMESphp,php php'dephp'php)php;
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp timephp forphp thephp datephp objectphp.php Formatphp definesphp howphp tophp parsephp thephp timephp stringphp.
php php php php php php*php Alsophp aphp completephp datephp canphp bephp givenphp,php butphp onlyphp thephp timephp isphp usedphp forphp settingphp.
php php php php php php*php Forphp examplephp:php ddphp.MMMMphp.yyTHHphp:mmphp'php andphp php'ssphp secphp'php-php>php php1php0php.Mayphp.php0php7Tphp2php5php:php1php1php andphp php4php4php secphp php=php>php php1hphp1php1minphp4php4secphp php+php php1php day
php php php php php php*php Returnedphp isphp thephp newphp datephp objectphp andphp thephp existingphp datephp isphp leftphp asphp itphp wasphp before
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$timephp php php php Timephp tophp set
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Timeformatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setTimephp(php$timephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timephp(php'setphp'php,php php$timephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp timephp tophp thephp existingphp datephp.php Formatphp definesphp howphp tophp parsephp thephp timephp stringphp.
php php php php php php*php Ifphp onlyphp partsphp arephp givenphp thephp otherphp partsphp arephp setphp tophp php0php.
php php php php php php*php Ifphp nophp formatphp isphp givenphp,php thephp standardformatphp ofphp thisphp localephp isphp usedphp.
php php php php php php*php Forphp examplephp:php HHphp:mmphp:ssphp php-php>php php1php0php php-php>php php+php1php0php hours
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$timephp php php php Timephp tophp add
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Timeformatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addTimephp(php$timephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timephp(php'addphp'php,php php$timephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp aphp timephp fromphp thephp existingphp datephp.php Formatphp definesphp howphp tophp parsephp thephp timephp stringphp.
php php php php php php*php Ifphp onlyphp partsphp arephp givenphp thephp otherphp partsphp arephp setphp tophp php0php.
php php php php php php*php Ifphp nophp formatphp isphp givenphp,php thephp standardformatphp ofphp thisphp localephp isphp usedphp.
php php php php php php*php Forphp examplephp:php HHphp:mmphp:ssphp php-php>php php1php0php php-php>php php-php1php0php hours
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$timephp php php php Timephp tophp sub
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Timeformatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp inteface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subTimephp(php$timephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timephp(php'subphp'php,php php$timephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp timephp fromphp thephp existingphp datephp.php Formatphp definesphp howphp tophp parsephp thephp timephp stringphp.
php php php php php php*php Ifphp onlyphp partsphp arephp givenphp thephp otherphp partsphp arephp setphp tophp defaultphp.
php php php php php php*php Ifphp nophp formatphp usphp givenphp,php thephp standardformatphp ofphp thisphp localephp isphp usedphp.
php php php php php php*php Forphp examplephp:php HHphp:mmphp:ssphp php-php>php php1php0php php-php>php php1php0php hours
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$timephp php php php Timephp tophp compare
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Timeformatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareTimephp(php$timephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_timephp(php'cmpphp'php,php php$timephp,php php$formatphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp clonephp ofphp php$thisphp,php withphp thephp timephp partphp setphp tophp php0php0php:php0php0php:php0php0php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$origphp php=php selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php;
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php php'isophp'php;
php php php php php php php php php}

php php php php php php php php php$datephp php=php php$thisphp-php>copyPartphp(selfphp:php:DATEphp_MEDIUMphp,php php$localephp)php;
php php php php php php php php php$datephp-php>addTimestampphp(php$thisphp-php>getGmtOffsetphp(php)php)php;
php php php php php php php php selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php php$origphp;

php php php php php php php php returnphp php$datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp calculatedphp date
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php php Calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp tophp calculatephp withphp,php ifphp nullphp thephp actualphp datephp isphp taken
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php Datephp formatphp forphp parsing
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp|Zendphp_Datephp php newphp date
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_datephp(php$calcphp,php php$datephp,php php$formatphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$datephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'parameterphp php$datephp mustphp bephp setphp,php nullphp isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php/php/php extractphp datephp fromphp object
php php php php php php php php php php php php php$datephp php=php php$datephp-php>toStringphp(php'dphp.Mphp.yphp'php,php php'isophp'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$datephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php(issetphp(php$datephp[php'yearphp'php]php)php php=php=php=php truephp)php orphp php(issetphp(php$datephp[php'monthphp'php]php)php php=php=php=php truephp)php or
php php php php php php php php php php php php php php php php php php php php php(issetphp(php$datephp[php'dayphp'php]php)php php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php php$datephp;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp dayphp,monthphp orphp yearphp givenphp inphp arrayphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php&php&php php!definedphp(php$formatphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$formatphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'datephp_formatphp'php php=php>php php$formatphp,php php'localephp'php php=php>php php$localephp,php php'formatphp_typephp'php php=php>php php'isophp'php)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php(strposphp(strtoupperphp(php$formatphp)php,php php'YYphp'php)php php!php=php=php falsephp)php andphp php(strposphp(strtoupperphp(php$formatphp)php,php php'YYYYphp'php)php php=php=php=php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php selfphp:php:getFullYearphp(php$parsedphp[php'yearphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dayphp'php,php php$parsedphp)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'dayphp'php]php php=php php1php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'monthphp'php,php php$parsedphp)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'monthphp'php]php php=php php1php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'yearphp'php,php php$parsedphp)php)php php{
php php php php php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php php0php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$datephp php php=php php$parsedphp[php'dayphp'php]php php.php php"php.php"php php.php php$parsedphp[php'monthphp'php]php php.php php"php.php"php php.php php$parsedphp[php'yearphp'php]php;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$datephp,php selfphp:php:DATEphp_MEDIUMphp,php php'dephp'php)php;
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp datephp forphp thephp datephp objectphp.php Formatphp definesphp howphp tophp parsephp thephp datephp stringphp.
php php php php php php*php Alsophp aphp completephp datephp withphp timephp canphp bephp givenphp,php butphp onlyphp thephp datephp isphp usedphp forphp settingphp.
php php php php php php*php Forphp examplephp:php MMMMphp.yyphp HHphp:mmphp-php>php Mayphp.php0php7php php2php2php:php1php1php php=php>php php0php1php.Mayphp.php0php7php php0php0php:php0php0
php php php php php php*php Returnedphp isphp thephp newphp datephp objectphp andphp thephp existingphp timephp isphp leftphp asphp itphp wasphp before
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp tophp set
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Datephp formatphp forphp parsing
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setDatephp(php$datephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp(php'setphp'php,php php$datephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp datephp tophp thephp existingphp datephp objectphp.php Formatphp definesphp howphp tophp parsephp thephp datephp stringphp.
php php php php php php*php Ifphp onlyphp partsphp arephp givenphp thephp otherphp partsphp arephp setphp tophp php0php.
php php php php php php*php Ifphp nophp formatphp isphp givenphp,php thephp standardformatphp ofphp thisphp localephp isphp usedphp.
php php php php php php*php Forphp examplephp:php MMphp.ddphp.YYYYphp php-php>php php1php0php php-php>php php+php1php0php months
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp tophp add
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Datephp formatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addDatephp(php$datephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp(php'addphp'php,php php$datephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp aphp datephp fromphp thephp existingphp datephp objectphp.php Formatphp definesphp howphp tophp parsephp thephp datephp stringphp.
php php php php php php*php Ifphp onlyphp partsphp arephp givenphp thephp otherphp partsphp arephp setphp tophp php0php.
php php php php php php*php Ifphp nophp formatphp isphp givenphp,php thephp standardformatphp ofphp thisphp localephp isphp usedphp.
php php php php php php*php Forphp examplephp:php MMphp.ddphp.YYYYphp php-php>php php1php0php php-php>php php-php1php0php months
php php php php php php*php Bephp awarephp:php Subtractingphp php2php monthsphp isphp notphp equalphp tophp Addingphp php-php2php monthsphp php!php!php!
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp tophp sub
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Datephp formatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subDatephp(php$datephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp(php'subphp'php,php php$datephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp datephp fromphp thephp existingphp datephp objectphp,php ignoringphp thephp timephp.
php php php php php php*php Formatphp definesphp howphp tophp parsephp thephp datephp stringphp.
php php php php php php*php Ifphp onlyphp partsphp arephp givenphp thephp otherphp partsphp arephp setphp tophp php0php.
php php php php php php*php Ifphp nophp formatphp isphp givenphp,php thephp standardformatphp ofphp thisphp localephp isphp usedphp.
php php php php php php*php Forphp examplephp:php php1php0php.php0php1php.php2php0php0php0php php=php>php php1php0php.php0php2php.php1php9php9php9php php-php>php false
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp tophp compare
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$formatphp php OPTIONALphp Datephp formatphp forphp parsingphp input
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareDatephp(php$datephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp(php'cmpphp'php,php php$datephp,php php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp fullphp ISOphp php8php6php0php1php datephp fromphp thephp datephp objectphp.
php php php php php php*php Alwaysphp thephp completephp ISOphp php8php6php0php1php specifictionphp isphp usedphp.php Ifphp anphp otherphp ISOphp datephp isphp needed
php php php php php php*php php(ISOphp php8php6php0php1php definesphp severalphp formatsphp)php usephp toStringphp(php)php insteadphp.
php php php php php php*php Thisphp functionphp doesphp notphp returnphp thephp ISOphp datephp asphp objectphp.php Usephp copyphp(php)php insteadphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIsophp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(selfphp:php:ISOphp_php8php6php0php1php,php php'isophp'php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp datephp forphp thephp datephp objectphp.php Notphp givenphp partsphp arephp setphp tophp defaultphp.
php php php php php php*php Onlyphp supportedphp ISOphp php8php6php0php1php formatsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php php0php5php0php9php0php1php php-php>php php0php1php.Septphp.php2php0php0php5php php0php0php:php0php0php:php0php0php,php php2php0php0php5php0php2php0php1Tphp1php0php:php0php0php:php3php0php php-php>php php0php1php.Febphp.php2php0php0php5php php1php0hphp0php0mphp3php0s
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php ISOphp Datephp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setIsophp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$datephp,php php'isophp'php,php selfphp:php:ISOphp_php8php6php0php1php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp ISOphp datephp tophp thephp datephp objectphp.php Notphp givenphp partsphp arephp setphp tophp defaultphp.
php php php php php php*php Onlyphp supportedphp ISOphp php8php6php0php1php formatsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php php0php5php0php9php0php1php php-php>php php+php php0php1php.Septphp.php2php0php0php5php php0php0php:php0php0php:php0php0php,php php1php0php:php0php0php:php0php0php php-php>php php+php1php0h
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php ISOphp Datephp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addIsophp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$datephp,php php'isophp'php,php selfphp:php:ISOphp_php8php6php0php1php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp aphp ISOphp datephp fromphp thephp datephp objectphp.php Notphp givenphp partsphp arephp setphp tophp defaultphp.
php php php php php php*php Onlyphp supportedphp ISOphp php8php6php0php1php formatsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php php0php5php0php9php0php1php php-php>php php-php php0php1php.Septphp.php2php0php0php5php php0php0php:php0php0php:php0php0php,php php1php0php:php0php0php:php0php0php php-php>php php-php1php0h
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php ISOphp Datephp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subIsophp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$datephp,php php'isophp'php,php selfphp:php:ISOphp_php8php6php0php1php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp aphp ISOphp datephp withphp thephp datephp objectphp.php Notphp givenphp partsphp arephp setphp tophp defaultphp.
php php php php php php*php Onlyphp supportedphp ISOphp php8php6php0php1php formatsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php php0php5php0php9php0php1php php-php>php php-php php0php1php.Septphp.php2php0php0php5php php0php0php:php0php0php:php0php0php,php php1php0php:php0php0php:php0php0php php-php>php php-php1php0h
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php ISOphp Datephp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareIsophp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$datephp,php php'isophp'php,php selfphp:php:ISOphp_php8php6php0php1php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp aphp RFCphp php8php2php2php compilantphp datestringphp fromphp thephp datephp objectphp.
php php php php php php*php Thisphp functionphp doesphp notphp returnphp thephp RFCphp datephp asphp objectphp.php Usephp copyphp(php)php insteadphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getArpaphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'Dphp\php,php dphp Mphp yphp Hphp\php:iphp\php:sphp Ophp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:RFCphp_php8php2php2php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>toStringphp(php$formatphp,php php'isophp'php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp RFCphp php8php2php2php datephp asphp newphp datephp forphp thephp datephp objectphp.
php php php php php php*php Onlyphp RFCphp php8php2php2php compilantphp datephp stringsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php Satphp,php php1php4php Febphp php0php9php php0php0php:php3php1php:php3php0php php+php0php1php0php0
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php RFCphp php8php2php2php tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setArpaphp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$datephp,php php'arpaphp'php,php selfphp:php:RFCphp_php8php2php2php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp RFCphp php8php2php2php datephp tophp thephp datephp objectphp.
php php php php php php*php ARPAphp messagesphp arephp usedphp inphp emailsphp orphp HTTPphp Headersphp.
php php php php php php*php Onlyphp RFCphp php8php2php2php compilantphp datephp stringsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php Satphp,php php1php4php Febphp php0php9php php0php0php:php3php1php:php3php0php php+php0php1php0php0
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php RFCphp php8php2php2php Datephp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addArpaphp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$datephp,php php'arpaphp'php,php selfphp:php:RFCphp_php8php2php2php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp aphp RFCphp php8php2php2php datephp fromphp thephp datephp objectphp.
php php php php php php*php ARPAphp messagesphp arephp usedphp inphp emailsphp orphp HTTPphp Headersphp.
php php php php php php*php Onlyphp RFCphp php8php2php2php compilantphp datephp stringsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php Satphp,php php1php4php Febphp php0php9php php0php0php:php3php1php:php3php0php php+php0php1php0php0
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php RFCphp php8php2php2php Datephp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subArpaphp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$datephp,php php'arpaphp'php,php selfphp:php:RFCphp_php8php2php2php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp aphp RFCphp php8php2php2php compilantphp datephp withphp thephp datephp objectphp.
php php php php php php*php ARPAphp messagesphp arephp usedphp inphp emailsphp orphp HTTPphp Headersphp.
php php php php php php*php Onlyphp RFCphp php8php2php2php compilantphp datephp stringsphp arephp acceptedphp.
php php php php php php*php Forphp examplephp:php Satphp,php php1php4php Febphp php0php9php php0php0php:php3php1php:php3php0php php+php0php1php0php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$datephp php php php RFCphp php8php2php2php Datephp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareArpaphp(php$datephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$datephp,php php'arpaphp'php,php selfphp:php:RFCphp_php8php2php2php,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp ifphp locationphp isphp supported
php php php php php php*
php php php php php php*php php@paramphp php$locationphp arrayphp php-php locationsphp array
php php php php php php*php php@returnphp php$horizonphp float
php php php php php php*php/
php php php php privatephp functionphp php_checkLocationphp(php$locationphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$locationphp[php'longitudephp'php]php)php orphp php!issetphp(php$locationphp[php'latitudephp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'Locationphp mustphp includephp php\php'longitudephp\php'php andphp php\php'latitudephp\php'php'php,php php0php,php nullphp,php php$locationphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$locationphp[php'longitudephp'php]php php>php php1php8php0php)php orphp php(php$locationphp[php'longitudephp'php]php <php php-php1php8php0php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'Longitudephp mustphp bephp betweenphp php-php1php8php0php andphp php1php8php0php'php,php php0php,php nullphp,php php$locationphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php(php$locationphp[php'latitudephp'php]php php>php php9php0php)php orphp php(php$locationphp[php'latitudephp'php]php <php php-php9php0php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'Latitudephp mustphp bephp betweenphp php-php9php0php andphp php9php0php'php,php php0php,php nullphp,php php$locationphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!issetphp(php$locationphp[php'horizonphp'php]php)php)php{
php php php php php php php php php php php php php$locationphp[php'horizonphp'php]php php=php php'effectivephp'php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$locationphp[php'horizonphp'php]php)php php{
php php php php php php php php php php php php casephp php'civilphp'php php:
php php php php php php php php php php php php php php php php returnphp php-php0php.php1php0php4php5php2php8php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'nauticphp'php php:
php php php php php php php php php php php php php php php php returnphp php-php0php.php2php0php7php9php1php2php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'astronomicphp'php php:
php php php php php php php php php php php php php php php php returnphp php-php0php.php3php0php9php0php1php7php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php returnphp php-php0php.php0php1php4php5php4php3php9php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp timephp ofphp sunrisephp forphp thisphp datephp andphp aphp givenphp locationphp asphp newphp datephp object
php php php php php php*php Forphp aphp listphp ofphp citiesphp andphp correctphp locationsphp usephp thephp classphp Zendphp_Datephp_Cities
php php php php php php*
php php php php php php*php php@paramphp php php$locationphp arrayphp php-php locationphp ofphp sunrise
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'horizonphp'php]php php php php-php>php civilphp,php nauticphp,php astronomicalphp,php effectivephp php(defaultphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'longitudephp'php]php php-php>php longitudephp ofphp location
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'latitudephp'php]php php php-php>php latitudephp ofphp location
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getSunrisephp(php$locationphp)
php php php php php{
php php php php php php php php php$horizonphp php=php php$thisphp-php>php_checkLocationphp(php$locationphp)php;
php php php php php php php php php$resultphp php=php clonephp php$thisphp;
php php php php php php php php php$resultphp-php>setphp(php$thisphp-php>calcSunphp(php$locationphp,php php$horizonphp,php truephp)php,php selfphp:php:TIMESTAMPphp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp timephp ofphp sunsetphp forphp thisphp datephp andphp aphp givenphp locationphp asphp newphp datephp object
php php php php php php*php Forphp aphp listphp ofphp citiesphp andphp correctphp locationsphp usephp thephp classphp Zendphp_Datephp_Cities
php php php php php php*
php php php php php php*php php@paramphp php php$locationphp arrayphp php-php locationphp ofphp sunset
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'horizonphp'php]php php php php-php>php civilphp,php nauticphp,php astronomicalphp,php effectivephp php(defaultphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'longitudephp'php]php php-php>php longitudephp ofphp location
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'latitudephp'php]php php php-php>php latitudephp ofphp location
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getSunsetphp(php$locationphp)
php php php php php{
php php php php php php php php php$horizonphp php=php php$thisphp-php>php_checkLocationphp(php$locationphp)php;
php php php php php php php php php$resultphp php=php clonephp php$thisphp;
php php php php php php php php php$resultphp-php>setphp(php$thisphp-php>calcSunphp(php$locationphp,php php$horizonphp,php falsephp)php,php selfphp:php:TIMESTAMPphp)php;
php php php php php php php php returnphp php$resultphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp anphp arrayphp withphp thephp sunsetphp andphp sunrisephp datesphp forphp allphp horizonphp types
php php php php php php*php Forphp aphp listphp ofphp citiesphp andphp correctphp locationsphp usephp thephp classphp Zendphp_Datephp_Cities
php php php php php php*
php php php php php php*php php@paramphp php php$locationphp arrayphp php-php locationphp ofphp suninfo
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'horizonphp'php]php php php php-php>php civilphp,php nauticphp,php astronomicalphp,php effectivephp php(defaultphp)
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'longitudephp'php]php php-php>php longitudephp ofphp location
php php php php php php*php php php php php php php php php php php php php php php php php php php php[php'latitudephp'php]php php php-php>php latitudephp ofphp location
php php php php php php*php php@returnphp arrayphp php-php php[sunsetphp|sunrisephp]php[effectivephp|civilphp|nauticphp|astronomicphp]
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp getSunInfophp(php$locationphp)
php php php php php{
php php php php php php php php php$suninfophp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php4php;php php+php+php$iphp)php php{
php php php php php php php php php php php php switchphp php(php$iphp)php php{
php php php php php php php php php php php php php php php php casephp php0php php:
php php php php php php php php php php php php php php php php php php php php php$locationphp[php'horizonphp'php]php php=php php'effectivephp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php1php php:
php php php php php php php php php php php php php php php php php php php php php$locationphp[php'horizonphp'php]php php=php php'civilphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php2php php:
php php php php php php php php php php php php php php php php php php php php php$locationphp[php'horizonphp'php]php php=php php'nauticphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php3php php:
php php php php php php php php php php php php php php php php php php php php php$locationphp[php'horizonphp'php]php php=php php'astronomicphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$horizonphp php=php php$thisphp-php>php_checkLocationphp(php$locationphp)php;
php php php php php php php php php php php php php$resultphp php=php clonephp php$thisphp;
php php php php php php php php php php php php php$resultphp-php>setphp(php$thisphp-php>calcSunphp(php$locationphp,php php$horizonphp,php truephp)php,php selfphp:php:TIMESTAMPphp)php;
php php php php php php php php php php php php php$suninfophp[php'sunrisephp'php]php[php$locationphp[php'horizonphp'php]php]php php=php php$resultphp;
php php php php php php php php php php php php php$resultphp php=php clonephp php$thisphp;
php php php php php php php php php php php php php$resultphp-php>setphp(php$thisphp-php>calcSunphp(php$locationphp,php php$horizonphp,php falsephp)php,php selfphp:php:TIMESTAMPphp)php;
php php php php php php php php php php php php php$suninfophp[php'sunsetphp'php]php[php$locationphp[php'horizonphp'php]php]php php php=php php$resultphp;
php php php php php php php php php}
php php php php php php php php returnphp php$suninfophp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Checkphp aphp givenphp yearphp forphp leapphp yearphp.
php php php php php php*
php php php php php php*php php@paramphp php integerphp|arrayphp|Zendphp_Datephp php php$yearphp php Yearphp tophp check
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp checkLeapYearphp(php$yearphp)
php php php php php{
php php php php php php php php ifphp php(php$yearphp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$yearphp php=php php(intphp)php php$yearphp-php>toStringphp(selfphp:php:YEARphp,php php'isophp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_arrayphp(php$yearphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$yearphp[php'yearphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$yearphp php=php php$yearphp[php'yearphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp yearphp givenphp inphp arrayphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_numericphp(php$yearphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"yearphp php(php$yearphp)php hasphp tophp bephp integerphp forphp checkLeapYearphp(php)php"php,php php0php,php nullphp,php php$yearphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php(boolphp)php parentphp:php:isYearLeapYearphp(php$yearphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp truephp,php ifphp thephp yearphp isphp aphp leapphp yearphp.
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isLeapYearphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:checkLeapYearphp(php$thisphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp setphp datephp isphp todaysphp date
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isTodayphp(php)
php php php php php{
php php php php php php php php php$todayphp php=php php$thisphp-php>datephp(php'Ymdphp'php,php php$thisphp-php>php_getTimephp(php)php)php;
php php php php php php php php php$dayphp php php php=php php$thisphp-php>datephp(php'Ymdphp'php,php php$thisphp-php>getUnixTimestampphp(php)php)php;
php php php php php php php php returnphp php(php$todayphp php=php=php php$dayphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp setphp datephp isphp yesterdaysphp date
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isYesterdayphp(php)
php php php php php{
php php php php php php php php listphp(php$yearphp,php php$monthphp,php php$dayphp)php php=php explodephp(php'php-php'php,php php$thisphp-php>datephp(php'Yphp-mphp-dphp'php,php php$thisphp-php>php_getTimephp(php)php)php)php;
php php php php php php php php php/php/php adjustsphp forphp leapphp daysphp andphp DSTphp changesphp thatphp arephp timezonephp specific
php php php php php php php php php$yesterdayphp php=php php$thisphp-php>datephp(php'Ymdphp'php,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp php-php1php,php php$yearphp)php)php;
php php php php php php php php php$dayphp php php php=php php$thisphp-php>datephp(php'Ymdphp'php,php php$thisphp-php>getUnixTimestampphp(php)php)php;
php php php php php php php php returnphp php$dayphp php=php=php php$yesterdayphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp ifphp thephp setphp datephp isphp tomorrowsphp date
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isTomorrowphp(php)
php php php php php{
php php php php php php php php listphp(php$yearphp,php php$monthphp,php php$dayphp)php php=php explodephp(php'php-php'php,php php$thisphp-php>datephp(php'Yphp-mphp-dphp'php,php php$thisphp-php>php_getTimephp(php)php)php)php;
php php php php php php php php php/php/php adjustsphp forphp leapphp daysphp andphp DSTphp changesphp thatphp arephp timezonephp specific
php php php php php php php php php$tomorrowphp php=php php$thisphp-php>datephp(php'Ymdphp'php,php php$thisphp-php>mktimephp(php0php,php php0php,php php0php,php php$monthphp,php php$dayphp php+php1php,php php$yearphp)php)php;
php php php php php php php php php$dayphp php php php=php php$thisphp-php>datephp(php'Ymdphp'php,php php$thisphp-php>getUnixTimestampphp(php)php)php;
php php php php php php php php returnphp php$dayphp php=php=php php$tomorrowphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp datephp asphp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp staticphp functionphp nowphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Datephp(timephp(php)php,php selfphp:php:TIMESTAMPphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp datephp details
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php php Calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Datephp orphp Partphp tophp calculate
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$partphp php php php Datepartphp forphp Calculation
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp|stringphp php newphp date
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_calcdetailphp(php$calcphp,php php$datephp,php php$typephp,php php$localephp)
php php php php php{
php php php php php php php php php$oldphp php=php falsephp;
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php php'isophp'php;
php php php php php php php php php php php php php$oldphp php=php truephp;
php php php php php php php php php}

php php php php php php php php switchphp(php$calcphp)php php{
php php php php php php php php php php php php casephp php'setphp'php php:
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>setphp(php$datephp,php php$typephp,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'addphp'php php:
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>addphp(php$datephp,php php$typephp,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'subphp'php php:
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>subphp(php$datephp,php php$typephp,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp php:
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>comparephp(php$datephp,php php$typephp,php php$localephp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$oldphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php php'phpphp'php;
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Internalphp calculationphp,php returnsphp thephp requestedphp datephp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php$calcphp php php php Calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp|Zendphp_Datephp php php$valuephp php php Datevaluephp tophp calculatephp withphp,php ifphp nullphp thephp actualphp valuephp isphp taken
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php$localephp php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp|Zendphp_Datephp php newphp date
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_calcvaluephp(php$calcphp,php php$valuephp,php php$typephp,php php$parameterphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"parameterphp php$typephp mustphp bephp setphp,php nullphp isphp notphp allowedphp"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php/php/php extractphp valuephp fromphp object
php php php php php php php php php php php php php$valuephp php=php php$valuephp-php>toStringphp(php$parameterphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_arrayphp(php$valuephp)php php&php&php php!isphp_numericphp(php$valuephp)php php&php&php php(php$typephp php!php=php php'isophp'php)php php&php&php php(php$typephp php!php=php php'arpaphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp php$typephp php(php$valuephp)php operandphp"php,php php0php,php nullphp,php php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$valuephp,php php$parameterphp,php php$localephp)php;
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp onlyphp thephp yearphp fromphp thephp datephp objectphp asphp newphp objectphp.
php php php php php php*php Forphp examplephp:php php1php0php.Mayphp.php2php0php0php0php php1php0php:php3php0php:php0php0php php-php>php php0php1php.Janphp.php2php0php0php0php php0php0php:php0php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getYearphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'Yphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:YEARphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp year
php php php php php php*php Ifphp thephp yearphp isphp betweenphp php0php andphp php6php9php,php php2php0php0php0php willphp bephp setphp php(php2php0php0php0php-php2php0php6php9php)
php php php php php php*php Ifphp thephp yearphp ifphp betweenphp php7php0php andphp php9php9php,php php1php9php9php9php willphp bephp setphp php(php1php9php7php0php-php1php9php9php9php)
php php php php php php*php php3php orphp php4php digitphp yearsphp arephp setphp asphp expectedphp.php Ifphp youphp needphp tophp setphp yearphp php0php-php9php9
php php php php php php*php usephp setphp(php)php insteadphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Yearphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setYearphp(php$yearphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$yearphp,php php'yearphp'php,php selfphp:php:YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp thephp yearphp tophp thephp existingphp datephp object
php php php php php php*php Ifphp thephp yearphp isphp betweenphp php0php andphp php6php9php,php php2php0php0php0php willphp bephp addedphp php(php2php0php0php0php-php2php0php6php9php)
php php php php php php*php Ifphp thephp yearphp ifphp betweenphp php7php0php andphp php9php9php,php php1php9php9php9php willphp bephp addedphp php(php1php9php7php0php-php1php9php9php9php)
php php php php php php*php php3php orphp php4php digitphp yearsphp arephp addedphp asphp expectedphp.php Ifphp youphp needphp tophp addphp yearsphp fromphp php0php-php9php9
php php php php php php*php usephp addphp(php)php insteadphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Yearphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addYearphp(php$yearphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$yearphp,php php'yearphp'php,php selfphp:php:YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subsphp thephp yearphp fromphp thephp existingphp datephp object
php php php php php php*php Ifphp thephp yearphp isphp betweenphp php0php andphp php6php9php,php php2php0php0php0php willphp bephp subtractedphp php(php2php0php0php0php-php2php0php6php9php)
php php php php php php*php Ifphp thephp yearphp ifphp betweenphp php7php0php andphp php9php9php,php php1php9php9php9php willphp bephp subtractedphp php(php1php9php7php0php-php1php9php9php9php)
php php php php php php*php php3php orphp php4php digitphp yearsphp arephp subtractedphp asphp expectedphp.php Ifphp youphp needphp tophp subtractphp yearsphp fromphp php0php-php9php9
php php php php php php*php usephp subphp(php)php insteadphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$datephp php php php Yearphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subYearphp(php$yearphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$yearphp,php php'yearphp'php,php selfphp:php:YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp yearphp withphp thephp existingphp datephp objectphp,php ignoringphp otherphp datephp partsphp.
php php php php php php*php Forphp examplephp:php php1php0php.php0php3php.php2php0php0php0php php-php>php php1php5php.php0php2php.php2php0php0php0php php-php>php true
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$yearphp php php php Yearphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareYearphp(php$yearphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$yearphp,php php'yearphp'php,php selfphp:php:YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp onlyphp thephp monthphp fromphp thephp datephp objectphp asphp newphp objectphp.
php php php php php php*php Forphp examplephp:php php1php0php.Mayphp.php2php0php0php0php php1php0php:php3php0php:php0php0php php-php>php php0php1php.Mayphp.php1php9php7php0php php0php0php:php0php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getMonthphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'mphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:MONTHphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp calculatedphp month
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php php$calcphp php php php Calculationphp tophp make
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Monthphp tophp calculatephp withphp,php ifphp nullphp thephp actualphp monthphp isphp taken
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp|Zendphp_Datephp php newphp time
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_monthphp(php$calcphp,php php$monthphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$monthphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'parameterphp php$monthphp mustphp bephp setphp,php nullphp isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$monthphp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php/php/php extractphp monthphp fromphp object
php php php php php php php php php php php php php$foundphp php=php php$monthphp-php>toStringphp(selfphp:php:MONTHphp_SHORTphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(isphp_numericphp(php$monthphp)php)php php{
php php php php php php php php php php php php php php php php php$foundphp php=php php$monthphp;
php php php php php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$monthphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$monthphp[php'monthphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php php php php php$monthphp php=php php$monthphp[php'monthphp'php]php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp monthphp givenphp inphp arrayphp"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$monthlistphp php php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'monthphp'php)php;
php php php php php php php php php php php php php php php php php$monthlistphp2php php=php Zendphp_Localephp_Dataphp:php:getListphp(php$localephp,php php'monthphp'php,php arrayphp(php'gregorianphp'php,php php'formatphp'php,php php'abbreviatedphp'php)php)php;

php php php php php php php php php php php php php php php php php$monthlistphp php=php arrayphp_mergephp(php$monthlistphp,php php$monthlistphp2php)php;
php php php php php php php php php php php php php php php php php$foundphp php=php php0php;
php php php php php php php php php php php php php php php php php$cntphp php=php php0php;
php php php php php php php php php php php php php php php php foreachphp php(php$monthlistphp asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(php$valuephp)php php=php=php strtoupperphp(php$monthphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php(php$keyphp php%php php1php2php)php php+php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$foundphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$monthlistphp2php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(strtoupperphp(iconvphp_substrphp(php$valuephp,php php0php,php php1php,php php'UTFphp-php8php'php)php)php php=php=php strtoupperphp(php$monthphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$foundphp php=php php$keyphp php+php php1php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php+php+php$cntphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$foundphp php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"unknownphp monthphp namephp php(php$monthphp)php"php,php php0php,php nullphp,php php$monthphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$foundphp,php selfphp:php:MONTHphp_SHORTphp,php php$localephp)php;
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp month
php php php php php php*php Thephp monthphp canphp bephp aphp numberphp orphp aphp stringphp.php Settingphp monthsphp lowerphp thenphp php0php andphp greaterphp thenphp php1php2
php php php php php php*php willphp resultphp inphp addingphp orphp subtractingphp thephp relevantphp yearphp.php php(php1php2php monthsphp equalphp onephp yearphp)
php php php php php php*php Ifphp aphp localizedphp monthnamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Monthphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMonthphp(php$monthphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_monthphp(php'setphp'php,php php$monthphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp monthsphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp monthphp canphp bephp aphp numberphp orphp aphp stringphp.php Addingphp monthsphp lowerphp thenphp php0php andphp greaterphp thenphp php1php2
php php php php php php*php willphp resultphp inphp addingphp orphp subtractingphp thephp relevantphp yearphp.php php(php1php2php monthsphp equalphp onephp yearphp)
php php php php php php*php Ifphp aphp localizedphp monthnamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Monthphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addMonthphp(php$monthphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_monthphp(php'addphp'php,php php$monthphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp monthsphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp monthphp canphp bephp aphp numberphp orphp aphp stringphp.php Subtractingphp monthsphp lowerphp thenphp php0php andphp greaterphp thenphp php1php2
php php php php php php*php willphp resultphp inphp addingphp orphp subtractingphp thephp relevantphp yearphp.php php(php1php2php monthsphp equalphp onephp yearphp)
php php php php php php*php Ifphp aphp localizedphp monthnamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Monthphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subMonthphp(php$monthphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_monthphp(php'subphp'php,php php$monthphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp monthphp withphp thephp existingphp datephp objectphp,php ignoringphp otherphp datephp partsphp.
php php php php php php*php Forphp examplephp:php php1php0php.php0php3php.php2php0php0php0php php-php>php php1php5php.php0php3php.php1php9php5php0php php-php>php true
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Monthphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareMonthphp(php$monthphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_monthphp(php'cmpphp'php,php php$monthphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp dayphp asphp newphp datephp object
php php php php php php*php Examplephp:php php2php0php.Mayphp.php1php9php8php6php php-php>php php2php0php.Janphp.php1php9php7php0php php0php0php:php0php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php$localephp php stringphp|Zendphp_Localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDayphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>copyPartphp(selfphp:php:DAYphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp calculatedphp day
php php php php php php*
php php php php php php*php php@paramphp php$calcphp php php php stringphp php php php php php php php php php php php php php php php php php php php Typephp ofphp calculationphp tophp make
php php php php php php*php php@paramphp php$dayphp php php php php stringphp|integerphp|Zendphp_Datephp php Dayphp tophp calculatephp,php whenphp nullphp thephp actualphp dayphp isphp calculated
php php php php php php*php php@paramphp php$localephp php stringphp|Zendphp_Localephp php php php php php php php Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp|integer
php php php php php php*php/
php php php php privatephp functionphp php_dayphp(php$calcphp,php php$dayphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$dayphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'parameterphp php$dayphp mustphp bephp setphp,php nullphp isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$dayphp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$dayphp php=php php$dayphp-php>toStringphp(selfphp:php:DAYphp_SHORTphp,php php'isophp'php,php php$localephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_numericphp(php$dayphp)php)php php{
php php php php php php php php php php php php php$typephp php=php selfphp:php:DAYphp_SHORTphp;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$dayphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$dayphp[php'dayphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$dayphp php=php php$dayphp[php'dayphp'php]php;
php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp dayphp givenphp inphp arrayphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php switchphp php(iconvphp_strlenphp(php$dayphp,php php'UTFphp-php8php'php)php)php php{
php php php php php php php php php php php php php php php php casephp php1php php:
php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_NARROWphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_NAMEphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_SHORTphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$dayphp,php php$typephp,php php$localephp)php;
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp day
php php php php php php*php Thephp dayphp canphp bephp aphp numberphp orphp aphp stringphp.php Settingphp daysphp lowerphp thenphp php0php orphp greaterphp thanphp thephp numberphp ofphp thisphp monthsphp days
php php php php php php*php willphp resultphp inphp addingphp orphp subtractingphp thephp relevantphp monthphp.
php php php php php php*php Ifphp aphp localizedphp daynamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php setDayphp(php'Montagphp'php,php php'dephp_ATphp'php)php;php willphp setphp thephp mondayphp ofphp thisphp weekphp asphp dayphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Dayphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setDayphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dayphp(php'setphp'php,php php$dayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp daysphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp dayphp canphp bephp aphp numberphp orphp aphp stringphp.php Addingphp daysphp lowerphp thenphp php0php orphp greaterphp thanphp thephp numberphp ofphp thisphp monthsphp days
php php php php php php*php willphp resultphp inphp addingphp orphp subtractingphp thephp relevantphp monthphp.
php php php php php php*php Ifphp aphp localizedphp daynamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Dayphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addDayphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dayphp(php'addphp'php,php php$dayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp daysphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp dayphp canphp bephp aphp numberphp orphp aphp stringphp.php Subtractingphp daysphp lowerphp thenphp php0php orphp greaterphp thanphp thephp numberphp ofphp thisphp monthsphp days
php php php php php php*php willphp resultphp inphp addingphp orphp subtractingphp thephp relevantphp monthphp.
php php php php php php*php Ifphp aphp localizedphp daynamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Dayphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subDayphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dayphp(php'subphp'php,php php$dayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp dayphp withphp thephp existingphp datephp objectphp,php ignoringphp otherphp datephp partsphp.
php php php php php php*php Forphp examplephp:php php'Mondayphp'php,php php'enphp'php php-php>php php0php8php.Janphp.php2php0php0php7php php-php>php php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$dayphp php php php php Dayphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareDayphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dayphp(php'cmpphp'php,php php$dayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp weekdayphp asphp newphp datephp object
php php php php php php*php Weekdayphp isphp alwaysphp fromphp php1php-php7
php php php php php php*php Examplephp:php php0php9php-Janphp-php2php0php0php7php php-php>php php2php php=php Tuesdayphp php-php>php php0php2php-Janphp-php1php9php7php0php php(whenphp php0php2php.php0php1php.php1php9php7php0php isphp alsophp Tuesdayphp)
php php php php php php*
php php php php php php*php php@paramphp php$localephp php stringphp|Zendphp_Localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getWeekdayphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'lphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:WEEKDAYphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp calculatedphp weekday
php php php php php php*
php php php php php php*php php@paramphp php php$calcphp php php php php stringphp php php php php php php php php php php php php php php php php php php php php php php php php php Typephp ofphp calculationphp tophp make
php php php php php php*php php@paramphp php php$weekdayphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php Weekdayphp tophp calculatephp,php whenphp nullphp thephp actualphp weekdayphp isphp calculated
php php php php php php*php php@paramphp php php$localephp php php stringphp|Zendphp_Localephp php php php php php php php php php php php php php Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp|integer
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_weekdayphp(php$calcphp,php php$weekdayphp,php php$localephp)
php php php php php{
php php php php php php php php ifphp php(php$weekdayphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'parameterphp php$weekdayphp mustphp bephp setphp,php nullphp isphp notphp allowedphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$localephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$localephp php=php php$thisphp-php>getLocalephp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$weekdayphp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$weekdayphp php=php php$weekdayphp-php>toStringphp(selfphp:php:WEEKDAYphp_php8php6php0php1php,php php'isophp'php,php php$localephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(isphp_numericphp(php$weekdayphp)php)php php{
php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_php8php6php0php1php;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$weekdayphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$weekdayphp[php'weekdayphp'php]php)php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$weekdayphp php=php php$weekdayphp[php'weekdayphp'php]php;
php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"nophp weekdayphp givenphp inphp arrayphp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php switchphp(iconvphp_strlenphp(php$weekdayphp,php php'UTFphp-php8php'php)php)php php{
php php php php php php php php php php php php php php php php casephp php1php:
php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_NARROWphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php2php:
php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_NAMEphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php3php:
php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp_SHORTphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$typephp php=php selfphp:php:WEEKDAYphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$returnphp php=php php$thisphp-php>php_calcdetailphp(php$calcphp,php php$weekdayphp,php php$typephp,php php$localephp)php;
php php php php php php php php ifphp php(php$calcphp php!php=php php'cmpphp'php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php returnphp php$returnphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp weekday
php php php php php php*php Thephp weekdayphp canphp bephp aphp numberphp orphp aphp stringphp.php Ifphp aphp localizedphp weekdayphp namephp isphp givenphp,
php php php php php php*php thenphp itphp willphp bephp parsedphp asphp aphp datephp inphp php$localephp php(defaultsphp tophp thephp samephp localephp asphp php$thisphp)php.
php php php php php php*php Returnedphp isphp thephp newphp datephp objectphp.
php php php php php php*php Examplephp:php setWeekdayphp(php3php)php;php willphp setphp thephp wednesdayphp ofphp thisphp weekphp asphp dayphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Weekdayphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setWeekdayphp(php$weekdayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_weekdayphp(php'setphp'php,php php$weekdayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp weekdaysphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp weekdayphp canphp bephp aphp numberphp orphp aphp stringphp.
php php php php php php*php Ifphp aphp localizedphp daynamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php addWeekdayphp(php3php)php;php willphp addphp thephp differencephp ofphp daysphp fromphp thephp beginingphp ofphp thephp monthphp until
php php php php php php*php wednesdayphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Weekdayphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addWeekdayphp(php$weekdayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_weekdayphp(php'addphp'php,php php$weekdayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp weekdaysphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp weekdayphp canphp bephp aphp numberphp orphp aphp stringphp.
php php php php php php*php Ifphp aphp localizedphp daynamephp isphp givenphp itphp willphp bephp parsedphp withphp thephp defaultphp localephp orphp thephp optional
php php php php php php*php setphp localephp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php subWeekdayphp(php3php)php;php willphp subtractphp thephp differencephp ofphp daysphp fromphp thephp beginingphp ofphp thephp monthphp until
php php php php php php*php wednesdayphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$monthphp php php Weekdayphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subWeekdayphp(php$weekdayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_weekdayphp(php'subphp'php,php php$weekdayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp weekdayphp withphp thephp existingphp datephp objectphp,php ignoringphp otherphp datephp partsphp.
php php php php php php*php Forphp examplephp:php php'Mondayphp'php,php php'enphp'php php-php>php php0php8php.Janphp.php2php0php0php7php php-php>php php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$weekdayphp php Weekdayphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareWeekdayphp(php$weekdayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_weekdayphp(php'cmpphp'php,php php$weekdayphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp dayphp ofphp yearphp asphp newphp datephp object
php php php php php php*php Examplephp:php php0php2php.Febphp.php1php9php8php6php php1php0php:php0php0php:php0php0php php-php>php php0php2php.Febphp.php1php9php7php0php php0php0php:php0php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDayOfYearphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'Dphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:DAYphp_OFphp_YEARphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp dayphp ofphp year
php php php php php php*php Thephp dayphp ofphp yearphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php2php0php0php4php php-php>php setDayOfYearphp(php1php0php)php php-php>php php1php0php.Janphp.php2php0php0php4
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$dayphp php php php php Dayphp ofphp Yearphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setDayOfYearphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$dayphp,php php'dayphp ofphp yearphp'php,php selfphp:php:DAYphp_OFphp_YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp aphp dayphp ofphp yearphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp dayphp ofphp yearphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php addDayOfYearphp(php1php0php)php;php willphp addphp php1php0php daysphp tophp thephp existingphp datephp objectphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$dayphp php php php php Dayphp ofphp Yearphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addDayOfYearphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$dayphp,php php'dayphp ofphp yearphp'php,php selfphp:php:DAYphp_OFphp_YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp aphp dayphp ofphp yearphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp dayphp ofphp yearphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php subDayOfYearphp(php1php0php)php;php willphp subtractphp php1php0php daysphp fromphp thephp existingphp datephp objectphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$dayphp php php php php Dayphp ofphp Yearphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subDayOfYearphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$dayphp,php php'dayphp ofphp yearphp'php,php selfphp:php:DAYphp_OFphp_YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp dayphp ofphp yearphp withphp thephp existingphp datephp objectphp.
php php php php php php*php Forphp examplephp:php compareDayOfYearphp(php3php3php)php php-php>php php0php2php.Febphp.php2php0php0php7php php-php>php php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$dayphp php php php php Dayphp ofphp Yearphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareDayOfYearphp(php$dayphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$dayphp,php php'dayphp ofphp yearphp'php,php selfphp:php:DAYphp_OFphp_YEARphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp hourphp asphp newphp datephp object
php php php php php php*php Examplephp:php php0php2php.Febphp.php1php9php8php6php php1php0php:php3php0php:php2php5php php-php>php php0php1php.Janphp.php1php9php7php0php php1php0php:php0php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php$localephp php stringphp|Zendphp_Localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getHourphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>copyPartphp(selfphp:php:HOURphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp hour
php php php php php php*php Thephp hourphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php setHourphp(php7php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php0php7php:php0php7php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$hourphp php php php Hourphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setHourphp(php$hourphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$hourphp,php php'hourphp'php,php selfphp:php:HOURphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp hoursphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp hourphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php addHourphp(php1php2php)php;php php-php>php php0php5php.Mayphp.php1php9php9php3php php0php1php:php0php7php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$hourphp php php php Hourphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addHourphp(php$hourphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$hourphp,php php'hourphp'php,php selfphp:php:HOURphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp hoursphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp hourphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php subHourphp(php6php)php;php php-php>php php0php5php.Mayphp.php1php9php9php3php php0php7php:php0php7php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$hourphp php php php Hourphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subHourphp(php$hourphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$hourphp,php php'hourphp'php,php selfphp:php:HOURphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp hourphp withphp thephp existingphp datephp objectphp.
php php php php php php*php Forphp examplephp:php php1php0php:php3php0php:php2php5php php-php>php compareHourphp(php1php0php)php php-php>php php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$hourphp php php php Hourphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareHourphp(php$hourphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$hourphp,php php'hourphp'php,php selfphp:php:HOURphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp minutephp asphp newphp datephp object
php php php php php php*php Examplephp:php php0php2php.Febphp.php1php9php8php6php php1php0php:php3php0php:php2php5php php-php>php php0php1php.Janphp.php1php9php7php0php php0php0php:php3php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getMinutephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'iphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:MINUTEphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp minute
php php php php php php*php Thephp minutephp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php setMinutephp(php2php9php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php1php3php:php2php9php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$minutephp php Minutephp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setMinutephp(php$minutephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$minutephp,php php'minutephp'php,php selfphp:php:MINUTEphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp minutesphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp minutephp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php addMinutephp(php6php5php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php1php3php:php1php2php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$minutephp php Minutephp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addMinutephp(php$minutephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$minutephp,php php'minutephp'php,php selfphp:php:MINUTEphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp minutesphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp minutephp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php subMinutephp(php9php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php1php2php:php5php8php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$minutephp php Minutephp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subMinutephp(php$minutephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$minutephp,php php'minutephp'php,php selfphp:php:MINUTEphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp minutephp withphp thephp existingphp datephp objectphp.
php php php php php php*php Forphp examplephp:php php1php0php:php3php0php:php2php5php php-php>php compareMinutephp(php3php0php)php php-php>php php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$minutephp php Hourphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareMinutephp(php$minutephp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$minutephp,php php'minutephp'php,php selfphp:php:MINUTEphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp secondphp asphp newphp datephp object
php php php php php php*php Examplephp:php php0php2php.Febphp.php1php9php8php6php php1php0php:php3php0php:php2php5php php-php>php php0php1php.Janphp.php1php9php7php0php php0php0php:php0php0php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getSecondphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'sphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:SECONDphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp newphp secondsphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp secondphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php setSecondphp(php1php0php0php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php8php:php4php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php$secondphp Secondphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php$localephp php(Optionalphp)php Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setSecondphp(php$secondphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$secondphp,php php'secondphp'php,php selfphp:php:SECONDphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp secondsphp tophp thephp existingphp datephp objectphp.
php php php php php php*php Thephp secondphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php addSecondphp(php6php5php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php8php:php3php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php$secondphp Secondphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php$localephp php(Optionalphp)php Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addSecondphp(php$secondphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$secondphp,php php'secondphp'php,php selfphp:php:SECONDphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp secondsphp fromphp thephp existingphp datephp objectphp.
php php php php php php*php Thephp secondphp isphp alwaysphp aphp numberphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php2php5php php-php>php subSecondphp(php1php0php)php;php php-php>php php0php4php.Mayphp.php1php9php9php3php php1php3php:php0php7php:php1php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php$secondphp Secondphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php$localephp php(Optionalphp)php Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subSecondphp(php$secondphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$secondphp,php php'secondphp'php,php selfphp:php:SECONDphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Comparesphp thephp secondphp withphp thephp existingphp datephp objectphp.
php php php php php php*php Forphp examplephp:php php1php0php:php3php0php:php2php5php php-php>php compareSecondphp(php2php5php)php php-php>php php0
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php$secondphp Secondphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php$localephp php(Optionalphp)php Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp compareSecondphp(php$secondphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$secondphp,php php'secondphp'php,php selfphp:php:SECONDphp_SHORTphp,php php$localephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp precisionphp forphp fractionalphp seconds
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getFractionalPrecisionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_precisionphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp precisionphp forphp fractionalphp seconds
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$precisionphp Precisionphp forphp thephp fractionalphp datepartphp php3php php=php milliseconds
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setFractionalPrecisionphp(php$precisionphp)
php php php php php{
php php php php php php php php ifphp php(php!intvalphp(php$precisionphp)php orphp php(php$precisionphp <php php0php)php orphp php(php$precisionphp php>php php9php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"precisionphp php(php$precisionphp)php mustphp bephp aphp positivephp integerphp lessphp thanphp php1php0php"php,php php0php,php nullphp,php php$precisionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_precisionphp php=php php(intphp)php php$precisionphp;
php php php php php php php php ifphp php(php$thisphp-php>php_precisionphp <php strlenphp(php$thisphp-php>php_fractionalphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fractionalphp php=php substrphp(php$thisphp-php>php_fractionalphp,php php0php,php php$thisphp-php>php_precisionphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_fractionalphp php=php strphp_padphp(php$thisphp-php>php_fractionalphp,php php$thisphp-php>php_precisionphp,php php'php0php'php,php STRphp_PADphp_RIGHTphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnsphp thephp millisecondsphp ofphp thephp datephp object
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMilliSecondphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_fractionalphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setsphp newphp millisecondsphp forphp thephp datephp object
php php php php php php*php Examplephp:php setMilliSecondphp(php5php5php0php,php php2php)php php-php>php equalsphp php+php5php Secphp php+php5php0php MilliSec
php php php php php php*
php php php php php php*php php@paramphp php integerphp|Zendphp_Datephp php$milliphp php php php php php(Optionalphp)php Millisecondphp tophp setphp,php whenphp nullphp thephp actualphp millisecondphp isphp set
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$precisionphp php(Optionalphp)php Fractionphp precisionphp ofphp thephp givenphp milliseconds
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp setMilliSecondphp(php$milliphp php=php nullphp,php php$precisionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$milliphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php listphp(php$milliphp,php php$timephp)php php=php explodephp(php"php php"php,php microtimephp(php)php)php;
php php php php php php php php php php php php php$milliphp php=php intvalphp(php$milliphp)php;
php php php php php php php php php php php php php$precisionphp php=php php6php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_numericphp(php$milliphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp milliphp secondphp php(php$milliphp)php operandphp"php,php php0php,php nullphp,php php$milliphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$precisionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$precisionphp php=php php$thisphp-php>php_precisionphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_intphp(php$precisionphp)php php|php|php php$precisionphp <php php1php php|php|php php$precisionphp php>php php9php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"precisionphp php(php$precisionphp)php mustphp bephp aphp positivephp integerphp lessphp thanphp php1php0php"php,php php0php,php nullphp,php php$precisionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fractionalphp php=php php0php;
php php php php php php php php php$thisphp-php>addMilliSecondphp(php$milliphp,php php$precisionphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addsphp millisecondsphp tophp thephp datephp object
php php php php php php*
php php php php php php*php php@paramphp php integerphp|Zendphp_Datephp php$milliphp php php php php php(Optionalphp)php Millisecondphp tophp addphp,php whenphp nullphp thephp actualphp millisecondphp isphp added
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$precisionphp php(Optionalphp)php Fractionalphp precisionphp forphp thephp givenphp milliseconds
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp addMilliSecondphp(php$milliphp php=php nullphp,php php$precisionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$milliphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php listphp(php$milliphp,php php$timephp)php php=php explodephp(php"php php"php,php microtimephp(php)php)php;
php php php php php php php php php php php php php$milliphp php=php intvalphp(php$milliphp)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_numericphp(php$milliphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp milliphp secondphp php(php$milliphp)php operandphp"php,php php0php,php nullphp,php php$milliphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$precisionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$precisionphp php=php strlenphp(php$milliphp)php;
php php php php php php php php php php php php ifphp php(php$milliphp <php php0php)php php{
php php php php php php php php php php php php php php php php php-php-php$precisionphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_intphp(php$precisionphp)php php|php|php php$precisionphp <php php1php php|php|php php$precisionphp php>php php9php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"precisionphp php(php$precisionphp)php mustphp bephp aphp positivephp integerphp lessphp thanphp php1php0php"php,php php0php,php nullphp,php php$precisionphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_fractionalphp php+php=php php$milliphp;

php php php php php php php php php/php/php Addphp/subphp millisecondsphp php+php addphp/subphp seconds
php php php php php php php php php$maxphp php=php powphp(php1php0php,php php$thisphp-php>php_precisionphp)php;
php php php php php php php php php/php/php Milliphp includesphp seconds
php php php php php php php php ifphp php(php$thisphp-php>php_fractionalphp php>php=php php$maxphp)php php{
php php php php php php php php php php php php whilephp php(php$thisphp-php>php_fractionalphp php>php=php php$maxphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>addSecondphp(php1php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_fractionalphp php-php=php php$maxphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_fractionalphp <php php0php)php php{
php php php php php php php php php php php php whilephp php(php$thisphp-php>php_fractionalphp <php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>subSecondphp(php1php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_fractionalphp php+php=php php$maxphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_precisionphp php>php strlenphp(php$thisphp-php>php_fractionalphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_fractionalphp php=php strphp_padphp(php$thisphp-php>php_fractionalphp,php php$thisphp-php>php_precisionphp,php php'php0php'php,php STRphp_PADphp_LEFTphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Subtractsphp aphp millisecond
php php php php php php*
php php php php php php*php php@paramphp php integerphp|Zendphp_Datephp php$milliphp php php php php php(Optionalphp)php Millisecondphp tophp subphp,php whenphp nullphp thephp actualphp millisecondphp isphp subtracted
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php$precisionphp php(Optionalphp)php Fractionalphp precisionphp forphp thephp givenphp milliseconds
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php/
php php php php publicphp functionphp subMilliSecondphp(php$milliphp php=php nullphp,php php$precisionphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>addMilliSecondphp(php0php php-php php$milliphp,php php$precisionphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparesphp onlyphp thephp millisecondphp partphp,php returningphp thephp difference
php php php php php php*
php php php php php php*php php@paramphp php integerphp|Zendphp_Datephp php php$milliphp php OPTIONALphp Millisecondphp tophp comparephp,php whenphp nullphp thephp actualphp millisecondphp isphp compared
php php php php php php*php php@paramphp php integerphp php php php php php php php php php php php php$precisionphp php OPTIONALphp Fractionalphp precisionphp forphp thephp givenphp milliseconds
php php php php php php*php php@throwsphp Zendphp_Datephp_Exceptionphp Onphp invalidphp input
php php php php php php*php php@returnphp integerphp php php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php/
php php php php publicphp functionphp compareMilliSecondphp(php$milliphp php=php nullphp,php php$precisionphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$milliphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php listphp(php$milliphp,php php$timephp)php php=php explodephp(php"php php"php,php microtimephp(php)php)php;
php php php php php php php php php php php php php$milliphp php=php intvalphp(php$milliphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_numericphp(php$milliphp)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"invalidphp milliphp secondphp php(php$milliphp)php operandphp"php,php php0php,php nullphp,php php$milliphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$precisionphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$precisionphp php=php strlenphp(php$milliphp)php;
php php php php php php php php php}php elsephp ifphp php(php!isphp_intphp(php$precisionphp)php php|php|php php$precisionphp <php php1php php|php|php php$precisionphp php>php php9php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php"precisionphp php(php$precisionphp)php mustphp bephp aphp positivephp integerphp lessphp thanphp php1php0php"php,php php0php,php nullphp,php php$precisionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$precisionphp php=php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php'precisionphp isphp php0php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$precisionphp php!php=php php$thisphp-php>php_precisionphp)php php{
php php php php php php php php php php php php ifphp php(php$precisionphp php>php php$thisphp-php>php_precisionphp)php php{
php php php php php php php php php php php php php php php php php$diffphp php=php php$precisionphp php-php php$thisphp-php>php_precisionphp;
php php php php php php php php php php php php php php php php php$milliphp php=php php(intphp)php php(php$milliphp php/php php(php1php0php php*php php$diffphp)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$diffphp php=php php$thisphp-php>php_precisionphp php-php php$precisionphp;
php php php php php php php php php php php php php php php php php$milliphp php=php php(intphp)php php(php$milliphp php*php php(php1php0php php*php php$diffphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$compphp php=php php$thisphp-php>php_fractionalphp php-php php$milliphp;
php php php php php php php php ifphp php(php$compphp <php php0php)php php{
php php php php php php php php php php php php returnphp php-php1php;
php php php php php php php php php}php elsephp ifphp php(php$compphp php>php php0php)php php{
php php php php php php php php php php php php returnphp php1php;
php php php php php php php php php}
php php php php php php php php returnphp php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp weekphp asphp newphp datephp objectphp usingphp mondayphp asphp beginingphp ofphp thephp week
php php php php php php*php Examplephp:php php1php2php.Janphp.php2php0php0php7php php-php>php php0php8php.Janphp.php1php9php7php0php php0php0php:php0php0php:php0php0
php php php php php php*
php php php php php php*php php@paramphp php$localephp php stringphp|Zendphp_Localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getWeekphp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php{
php php php php php php php php php php php php php$formatphp php=php php'Wphp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$formatphp php=php selfphp:php:WEEKphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>copyPartphp(php$formatphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp weekphp.php Thephp weekphp isphp alwaysphp aphp numberphp.php Thephp dayphp ofphp weekphp isphp notphp changedphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php9php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5php php-php>php setWeekphp(php1php)php;php php-php>php php0php2php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$weekphp php php php Weekphp tophp set
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setWeekphp(php$weekphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'setphp'php,php php$weekphp,php php'weekphp'php,php selfphp:php:WEEKphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp weekphp.php Thephp weekphp isphp alwaysphp aphp numberphp.php Thephp dayphp ofphp weekphp isphp notphp changedphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php9php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5php php-php>php addWeekphp(php1php)php;php php-php>php php1php6php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$weekphp php php php Weekphp tophp add
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp addWeekphp(php$weekphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'addphp'php,php php$weekphp,php php'weekphp'php,php selfphp:php:WEEKphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Subtractsphp aphp weekphp.php Thephp weekphp isphp alwaysphp aphp numberphp.php Thephp dayphp ofphp weekphp isphp notphp changedphp.
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Examplephp:php php0php9php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5php php-php>php subWeekphp(php1php)php;php php-php>php php0php2php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$weekphp php php php Weekphp tophp sub
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluidphp interface
php php php php php php*php php@throwsphp Zendphp_Datephp_Exception
php php php php php php*php/
php php php php publicphp functionphp subWeekphp(php$weekphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'subphp'php,php php$weekphp,php php'weekphp'php,php selfphp:php:WEEKphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Comparesphp onlyphp thephp weekphp partphp,php returningphp thephp difference
php php php php php php*php Returnedphp isphp thephp newphp datephp object
php php php php php php*php Returnsphp ifphp equalphp,php earlierphp orphp later
php php php php php php*php Examplephp:php php0php9php.Janphp.php2php0php0php7php php1php3php:php0php7php:php2php5php php-php>php compareWeekphp(php2php)php;php php-php>php php0
php php php php php php*
php php php php php php*php php@paramphp php stringphp|integerphp|arrayphp|Zendphp_Datephp php php$weekphp php php php Weekphp tophp compare
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php php php php php php php php php php$localephp php OPTIONALphp Localephp forphp parsingphp input
php php php php php php*php php@returnphp integerphp php0php php=php equalphp,php php1php php=php laterphp,php php-php1php php=php earlier
php php php php php php*php/
php php php php publicphp functionphp compareWeekphp(php$weekphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_calcvaluephp(php'cmpphp'php,php php$weekphp,php php'weekphp'php,php selfphp:php:WEEKphp,php php$localephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp newphp standardphp localephp forphp thephp datephp objectphp.
php php php php php php*php Thisphp localephp willphp bephp usedphp forphp allphp functions
php php php php php php*php Returnedphp isphp thephp reallyphp setphp localephp.
php php php php php php*php Examplephp:php php'dephp_XXphp'php willphp bephp setphp tophp php'dephp'php becausephp php'dephp_XXphp'php doesphp notphp exist
php php php php php php*php php'xxphp_YYphp'php willphp bephp setphp tophp php'rootphp'php becausephp php'xxphp'php doesphp notphp exist
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp php(Optionalphp)php Localephp forphp parsingphp input
php php php php php php*php php@throwsphp Zendphp_Datephp_Exceptionphp Whenphp thephp givenphp localephp doesphp notphp exist
php php php php php php*php php@returnphp Zendphp_Datephp Providesphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php tryphp php{
php php php php php php php php php php php php php$thisphp-php>php_localephp php=php Zendphp_Localephp:php:findLocalephp(php$localephp)php;
php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Datephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Datephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp actualphp setphp locale
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_localephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checksphp ifphp thephp givenphp datephp isphp aphp realphp datephp orphp datepartphp.
php php php php php php*php Returnsphp falsephp ifphp aphp expectedphp datepartphp isphp missingphp orphp aphp datepartphp exceedsphp itsphp possiblephp borderphp.
php php php php php php*php Butphp thephp checkphp willphp onlyphp bephp donephp forphp thephp expectedphp datepartsphp whichphp arephp givenphp byphp formatphp.
php php php php php php*php Ifphp nophp formatphp isphp givenphp thephp standardphp dateformatphp forphp thephp actualphp localephp isphp usedphp.
php php php php php php*php fphp.ephp.php php3php0php.Februaryphp.php2php0php0php7php willphp returnphp falsephp ifphp formatphp isphp php'ddphp.MMMMphp.YYYYphp'
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp|Zendphp_Datephp php$datephp php php Datephp tophp parsephp forphp correctness
php php php php php php*php php@paramphp php stringphp php php php php php php php php php php php php php php php php php$formatphp php(Optionalphp)php Formatphp forphp parsingphp thephp datephp string
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php php php php php$localephp php(Optionalphp)php Localephp forphp parsingphp datephp parts
php php php php php php*php php@returnphp booleanphp php php php php php php php php php php php php php php php Truephp whenphp allphp datephp partsphp arephp correct
php php php php php php*php/
php php php php publicphp staticphp functionphp isDatephp(php$datephp,php php$formatphp php=php nullphp,php php$localephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$datephp)php php&php&php php!isphp_numericphp(php$datephp)php php&php&php php!php(php$datephp instanceofphp Zendphp_Datephp)php php&php&
php php php php php php php php php php php php php!isphp_arrayphp(php$datephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php$formatphp php!php=php=php nullphp)php php&php&php php(php$formatphp php!php=php php'eephp'php)php php&php&php php(php$formatphp php!php=php php'ssphp'php)php php&php&php php(php$formatphp php!php=php php'GGphp'php)php php&php&php php(php$formatphp php!php=php php'MMphp'php)php php&php&php php(php$formatphp php!php=php php'EEphp'php)php php&php&php php(php$formatphp php!php=php php'TTphp'php)
php php php php php php php php php php php php php&php&php php(Zendphp_Localephp:php:isLocalephp(php$formatphp,php nullphp,php falsephp)php)php)php php{
php php php php php php php php php php php php php$localephp php=php php$formatphp;
php php php php php php php php php php php php php$formatphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$localephp php=php Zendphp_Localephp:php:findLocalephp(php$localephp)php;

php php php php php php php php ifphp php(php$formatphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Formatphp:php:getDateFormatphp(php$localephp)php;
php php php php php php php php php}php elsephp ifphp php(php(selfphp:php:php$php_optionsphp[php'formatphp_typephp'php]php php=php=php php'phpphp'php)php php&php&php php!definedphp(php$formatphp)php)php php{
php php php php php php php php php php php php php$formatphp php=php Zendphp_Localephp_Formatphp:php:convertPhpToIsoFormatphp(php$formatphp)php;
php php php php php php php php php}

php php php php php php php php php$formatphp php=php selfphp:php:php_getLocalizedTokenphp(php$formatphp,php php$localephp)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$datephp)php)php php{
php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php$parsedphp php=php Zendphp_Localephp_Formatphp:php:getDatephp(php$datephp,php arrayphp(php'localephp'php php=php>php php$localephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'datephp_formatphp'php php=php>php php$formatphp,php php'formatphp_typephp'php php=php>php php'isophp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'fixphp_datephp'php php=php>php falsephp)php)php;
php php php php php php php php php php php php php}php catchphp php(Zendphp_Localephp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php/php/php Datephp canphp notphp bephp parsed
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$parsedphp php=php php$datephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php(strposphp(php$formatphp,php php'Yphp'php)php php!php=php=php falsephp)php orphp php(strposphp(php$formatphp,php php'yphp'php)php php!php=php=php falsephp)php)php and
php php php php php php php php php php php php php(php!issetphp(php$parsedphp[php'yearphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Yearphp expectedphp butphp notphp found
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$formatphp,php php'Mphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'monthphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Monthphp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$formatphp,php php'dphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'dayphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Dayphp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(php(strposphp(php$formatphp,php php'Hphp'php)php php!php=php=php falsephp)php orphp php(strposphp(php$formatphp,php php'hphp'php)php php!php=php=php falsephp)php)php and
php php php php php php php php php php php php php(php!issetphp(php$parsedphp[php'hourphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Hourphp expectedphp butphp notphp found
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$formatphp,php php'mphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'minutephp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Minutephp expectedphp butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php(strposphp(php$formatphp,php php'sphp'php)php php!php=php=php falsephp)php andphp php(php!issetphp(php$parsedphp[php'secondphp'php]php)php)php)php php{
php php php php php php php php php php php php php/php/php Secondphp expectedphp php butphp notphp found
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php/php/php Setphp notphp givenphp dateparts
php php php php php php php php ifphp php(issetphp(php$parsedphp[php'hourphp'php]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$parsedphp[php'hourphp'php]php php=php php1php2php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$parsedphp[php'minutephp'php]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$parsedphp[php'minutephp'php]php php=php php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$parsedphp[php'secondphp'php]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$parsedphp[php'secondphp'php]php php=php php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$parsedphp[php'monthphp'php]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$parsedphp[php'monthphp'php]php php=php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$parsedphp[php'dayphp'php]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$parsedphp[php'dayphp'php]php php=php php1php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$parsedphp[php'yearphp'php]php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php php1php9php7php0php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:isYearLeapYearphp(php$parsedphp[php'yearphp'php]php)php)php php{
php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php php1php9php7php2php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$parsedphp[php'yearphp'php]php php=php php1php9php7php1php;
php php php php php php php php php}

php php php php php php php php php$datephp php php php php php php=php newphp selfphp(php$parsedphp,php nullphp,php php$localephp)php;
php php php php php php php php php$timestampphp php=php php$datephp-php>mktimephp(php$parsedphp[php'hourphp'php]php,php php$parsedphp[php'minutephp'php]php,php php$parsedphp[php'secondphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$parsedphp[php'monthphp'php]php,php php$parsedphp[php'dayphp'php]php,php php$parsedphp[php'yearphp'php]php)php;

php php php php php php php php ifphp php(php$parsedphp[php'yearphp'php]php php!php=php php$datephp-php>datephp(php'Yphp'php,php php$timestampphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp yearphp differsphp fromphp parsedphp year
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$parsedphp[php'monthphp'php]php php!php=php php$datephp-php>datephp(php'nphp'php,php php$timestampphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp monthphp differsphp fromphp parsedphp month
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$parsedphp[php'dayphp'php]php php!php=php php$datephp-php>datephp(php'jphp'php,php php$timestampphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp dayphp differsphp fromphp parsedphp day
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$parsedphp[php'hourphp'php]php php!php=php php$datephp-php>datephp(php'Gphp'php,php php$timestampphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp hourphp differsphp fromphp parsedphp hour
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$parsedphp[php'minutephp'php]php php!php=php php$datephp-php>datephp(php'iphp'php,php php$timestampphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp minutephp differsphp fromphp parsedphp minute
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$parsedphp[php'secondphp'php]php php!php=php php$datephp-php>datephp(php'sphp'php,php php$timestampphp)php)php php{
php php php php php php php php php php php php php/php/php Givenphp secondphp differsphp fromphp parsedphp second
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp ISOphp Tokenphp forphp allphp localizedphp constants
php php php php php php*
php php php php php php*php php@paramphp stringphp php$tokenphp Tokenphp tophp normalize
php php php php php php*php php@paramphp stringphp php$localephp Localephp tophp search
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_getLocalizedTokenphp(php$tokenphp,php php$localephp)
php php php php php{
php php php php php php php php switchphp(php$tokenphp)php php{
php php php php php php php php php php php php casephp selfphp:php:ISOphp_php8php6php0php1php php:
php php php php php php php php php php php php php php php php returnphp php"yyyyphp-MMphp-ddThhphp:mmphp:ssphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php2php8php2php2php php:
php php php php php php php php php php php php php php php php returnphp php"EEEphp,php ddphp MMMphp yyyyphp HHphp:mmphp:ssphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATESphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATEphp_FULLphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATEphp_LONGphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATEphp_MEDIUMphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TIMESphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TIMEphp_FULLphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TIMEphp_LONGphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TIMEphp_MEDIUMphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:TIMEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'timephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_FULLphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'fullphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_LONGphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'longphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_MEDIUMphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'mediumphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:DATETIMEphp_SHORTphp php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Localephp_Dataphp:php:getContentphp(php$localephp,php php'datetimephp'php,php arrayphp(php'gregorianphp'php,php php'shortphp'php)php)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:ATOMphp php:
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php3php3php3php9php php:
php php php php php php php php php php php php casephp selfphp:php:Wphp3Cphp php:
php php php php php php php php php php php php php php php php returnphp php"yyyyphp-MMphp-DDphp HHphp:mmphp:ssphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:COOKIEphp php:
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php8php5php0php php:
php php php php php php php php php php php php php php php php returnphp php"EEEEphp,php ddphp-MMphp-yyyyphp HHphp:mmphp:ssphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php8php2php2php php:
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php1php0php3php6php php:
php php php php php php php php php php php php casephp selfphp:php:RFCphp_php1php1php2php3php php:
php php php php php php php php php php php php casephp selfphp:php:RSSphp php:
php php php php php php php php php php php php php php php php returnphp php"EEEphp,php ddphp MMphp yyyyphp HHphp:mmphp:ssphp"php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}

php php php php php php php php returnphp php$tokenphp;
php php php php php}
php}
