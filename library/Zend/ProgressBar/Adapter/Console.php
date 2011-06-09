<php?php
php/php*php*
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
php php*php php@packagephp php php php Zendphp_ProgressBar
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Consolephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_ProgressBarphp_Adapter
php php*php/
requirephp_oncephp php'Zendphp/ProgressBarphp/Adapterphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Textphp_MultiByte
php php*php/
requirephp_oncephp php'Zendphp/Textphp/MultiBytephp.phpphp'php;

php/php*php*
php php*php Zendphp_ProgressBarphp_Adapterphp_Consolephp offersphp aphp textphp-basedphp progressbarphp forphp console
php php*php applications
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_ProgressBar
php php*php php@usesphp php php php php php Zendphp_ProgressBarphp_Adapterphp_Interface
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_ProgressBarphp_Adapterphp_Consolephp extendsphp Zendphp_ProgressBarphp_Adapter
php{
php php php php php/php*php*
php php php php php php*php Percentagephp valuephp ofphp thephp progress
php php php php php php*php/
php php php php constphp ELEMENTphp_PERCENTphp php=php php'ELEMENTphp_PERCENTphp'php;

php php php php php/php*php*
php php php php php php*php Visualphp valuephp ofphp thephp progress
php php php php php php*php/
php php php php constphp ELEMENTphp_BARphp php=php php'ELEMENTphp_BARphp'php;

php php php php php/php*php*
php php php php php php*php ETAphp ofphp thephp progress
php php php php php php*php/
php php php php constphp ELEMENTphp_ETAphp php=php php'ELEMENTphp_ETAphp'php;

php php php php php/php*php*
php php php php php php*php Textphp partphp ofphp thephp progress
php php php php php php*php/
php php php php constphp ELEMENTphp_TEXTphp php=php php'ELEMENTphp_TEXTphp'php;

php php php php php/php*php*
php php php php php php*php Finishphp actionphp:php Endphp ofphp Line
php php php php php php*php/
php php php php constphp FINISHphp_ACTIONphp_EOLphp php=php php'FINISHphp_ACTIONphp_EOLphp'php;

php php php php php/php*php*
php php php php php php*php Finishphp actionphp:php Clearphp Line
php php php php php php*php/
php php php php constphp FINISHphp_ACTIONphp_CLEARphp_LINEphp php=php php'FINISHphp_ACTIONphp_CLEARphp_LINEphp'php;

php php php php php/php*php*
php php php php php php*php Finishphp actionphp:php None
php php php php php php*php/
php php php php constphp FINISHphp_ACTIONphp_NONEphp php=php php'FINISHphp_ACTIONphp_NONEphp'php;

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp progressbar
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_widthphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Elementsphp tophp display
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_elementsphp php=php arrayphp(selfphp:php:ELEMENTphp_PERCENTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:ELEMENTphp_BARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:ELEMENTphp_ETAphp)php;

php php php php php/php*php*
php php php php php php*php Whichphp actionphp tophp dophp atphp finishphp call
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_finishActionphp php=php selfphp:php:FINISHphp_ACTIONphp_EOLphp;

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp barphp element
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php protectedphp php$php_barWidthphp;

php php php php php/php*php*
php php php php php php*php Leftphp characterphp(sphp)php withinphp thephp bar
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_barLeftCharphp php=php php'php#php'php;

php php php php php/php*php*
php php php php php php*php Indicatorphp characterphp(sphp)php withinphp thephp bar
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_barIndicatorCharphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Rightphp characterphp(sphp)php withinphp thephp bar
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_barRightCharphp php=php php'php-php'php;

php php php php php/php*php*
php php php php php php*php Outputphp-streamphp,php whenphp STDOUTphp isphp notphp definedphp php(ephp.gphp.php inphp CGIphp)php orphp setphp manually
php php php php php php*
php php php php php php*php php@varphp resource
php php php php php php*php/
php php php php protectedphp php$php_outputStreamphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Widthphp ofphp thephp textphp element
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_textWidthphp php=php php2php0php;

php php php php php/php*php*
php php php php php php*php Wetherphp thephp outputphp startedphp yetphp orphp not
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php protectedphp php$php_outputStartedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Charsetphp ofphp textphp element
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_charsetphp php=php php'utfphp-php8php'php;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_ProgressBarphp_Adapter
php php php php php php*
php php php php php php*php php@paramphp nullphp|arrayphp|Zendphp_Configphp php$options
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Callphp parentphp constructorphp withphp options
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;

php php php php php php php php php/php/php Checkphp ifphp aphp widthphp wasphp setphp,php elsephp usephp autophp width
php php php php php php php php ifphp php(php$thisphp-php>php_widthphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setWidthphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Closephp localphp stdoutphp,php whenphp open
php php php php php php*php/
php php php php publicphp functionphp php_php_destructphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outputStreamphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php fclosephp(php$thisphp-php>php_outputStreamphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp differentphp outputphp-stream
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$resource
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setOutputStreamphp(php$resourcephp)
php php php php php{
php php php php php php php php$streamphp php=php php@fopenphp(php$resourcephp,php php'wphp'php)php;

php php php php php php php ifphp php(php$streamphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp(php'Unablephp tophp openphp streamphp'php)php;
php php php php php php php php}

php php php php php php php ifphp php(php$thisphp-php>php_outputStreamphp php!php=php=php nullphp)php php{
php php php php php php php php php php php fclosephp(php$thisphp-php>php_outputStreamphp)php;
php php php php php php php php}

php php php php php php php php$thisphp-php>php_outputStreamphp php=php php$streamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp currentphp outputphp stream
php php php php php php*
php php php php php php*php php@returnphp resource
php php php php php php*php/
php php php php publicphp functionphp getOutputStreamphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_outputStreamphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(php!definedphp(php'STDOUTphp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_outputStreamphp php=php fopenphp(php'phpphp:php/php/stdoutphp'php,php php'wphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp STDOUTphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_outputStreamphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp widthphp ofphp thephp progressbar
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$width
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setWidthphp(php$widthphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$widthphp php=php=php=php nullphp php|php|php php!isphp_integerphp(php$widthphp)php)php php{
php php php php php php php php php php php php ifphp php(substrphp(PHPphp_OSphp,php php0php,php php3php)php php=php=php=php php'WINphp'php)php php{
php php php php php php php php php php php php php php php php php/php/php Wephp havephp tophp defaultphp tophp php7php9php onphp windowsphp,php becausephp thephp windows
php php php php php php php php php php php php php php php php php/php/php terminalphp alwaysphp hasphp aphp fixedphp widthphp ofphp php8php0php charactersphp andphp the
php php php php php php php php php php php php php php php php php/php/php cursorphp isphp countedphp tophp thephp linephp,php elsephp windowsphp wouldphp linephp break
php php php php php php php php php php php php php php php php php/php/php afterphp everyphp updatephp.
php php php php php php php php php php php php php php php php php$thisphp-php>php_widthphp php=php php7php9php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Setphp thephp defaultphp widthphp ofphp php8php0
php php php php php php php php php php php php php php php php php$thisphp-php>php_widthphp php=php php8php0php;

php php php php php php php php php php php php php php php php php/php/php Tryphp tophp determinephp thephp widthphp throughphp stty
php php php php php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php#php\dphp+php php(php\dphp+php)php#php'php,php php@shellphp_execphp(php'sttyphp sizephp'php)php,php php$matchphp)php php=php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_widthphp php=php php(intphp)php php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php}php elsephp ifphp php(pregphp_matchphp(php'php#columnsphp php=php php(php\dphp+php)php;php#php'php,php php@shellphp_execphp(php'sttyphp'php)php,php php$matchphp)php php=php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_widthphp php=php php(intphp)php php$matchphp[php1php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_widthphp php=php php(intphp)php php$widthphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_calculateBarWidthphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp elementsphp tophp displayphp withphp thephp progressbar
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$elements
php php php php php php*php php@throwsphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp Whenphp anphp invalidphp elementphp isphp foudnphp inphp thephp array
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setElementsphp(arrayphp php$elementsphp)
php php php php php{
php php php php php php php php php$allowedElementsphp php=php arrayphp(selfphp:php:ELEMENTphp_PERCENTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:ELEMENTphp_BARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:ELEMENTphp_ETAphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:ELEMENTphp_TEXTphp)php;

php php php php php php php php ifphp php(countphp(arrayphp_diffphp(php$elementsphp,php php$allowedElementsphp)php)php php>php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp(php'Invalidphp elementphp foundphp inphp php$elementsphp arrayphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_elementsphp php=php php$elementsphp;

php php php php php php php php php$thisphp-php>php_calculateBarWidthphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp leftphp-handphp characterphp forphp thephp bar
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$char
php php php php php php*php php@throwsphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp Whenphp characterphp isphp empty
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setBarLeftCharphp(php$charphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$charphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp(php'Characterphp mayphp notphp bephp emptyphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_barLeftCharphp php=php php(stringphp)php php$charphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp rightphp-handphp characterphp forphp thephp bar
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$char
php php php php php php*php php@throwsphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp Whenphp characterphp isphp empty
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setBarRightCharphp(php$charphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$charphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp(php'Characterphp mayphp notphp bephp emptyphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_barRightCharphp php=php php(stringphp)php php$charphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp indicatorphp characterphp forphp thephp bar
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$char
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setBarIndicatorCharphp(php$charphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_barIndicatorCharphp php=php php(stringphp)php php$charphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp widthphp ofphp thephp textphp element
php php php php php php*
php php php php php php*php php@paramphp php integerphp php$width
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setTextWidthphp(php$widthphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_textWidthphp php=php php(intphp)php php$widthphp;

php php php php php php php php php$thisphp-php>php_calculateBarWidthphp(php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp charsetphp ofphp thephp textphp element
php php php php php php*
php php php php php php*php php@paramphp stringphp php$charset
php php php php php php*php/
php php php php publicphp functionphp setCharsetphp(php$charsetphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_charsetphp php=php php$charsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp finishphp action
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$action
php php php php php php*php php@throwsphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp Whenphp anphp invalidphp actionphp isphp specified
php php php php php php*php php@returnphp Zendphp_ProgressBarphp_Adapterphp_Console
php php php php php php*php/
php php php php publicphp functionphp setFinishActionphp(php$actionphp)
php php php php php{
php php php php php php php php php$allowedActionsphp php=php arrayphp(selfphp:php:FINISHphp_ACTIONphp_CLEARphp_LINEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:FINISHphp_ACTIONphp_EOLphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:FINISHphp_ACTIONphp_NONEphp)php;

php php php php php php php php ifphp php(php!inphp_arrayphp(php$actionphp,php php$allowedActionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/ProgressBarphp/Adapterphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_ProgressBarphp_Adapterphp_Exceptionphp(php'Invalidphp finishphp actionphp specifiedphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_finishActionphp php=php php$actionphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_ProgressBarphp_Adapterphp_Interface
php php php php php php*
php php php php php php*php php@paramphp php floatphp php php php$currentphp php php php php php php Currentphp progressphp value
php php php php php php*php php@paramphp php floatphp php php php$maxphp php php php php php php php php php php Maxphp progressphp value
php php php php php php*php php@paramphp php floatphp php php php$percentphp php php php php php php Currentphp percentphp value
php php php php php php*php php@paramphp php integerphp php$timeTakenphp php php php php Takenphp timephp inphp seconds
php php php php php php*php php@paramphp php integerphp php$timeRemainingphp Remainingphp timephp inphp seconds
php php php php php php*php php@paramphp php stringphp php php$textphp php php php php php php php php php Statusphp text
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp notifyphp(php$currentphp,php php$maxphp,php php$percentphp,php php$timeTakenphp,php php$timeRemainingphp,php php$textphp)
php php php php php{
php php php php php php php php php/php/php Seephp ifphp wephp mustphp clearphp thephp line
php php php php php php php php ifphp php(php$thisphp-php>php_outputStartedphp)php php{
php php php php php php php php php php php php php$dataphp php=php strphp_repeatphp(php"php\xphp0php8php"php,php php$thisphp-php>php_widthphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dataphp php=php php'php'php;
php php php php php php php php php php php php php$thisphp-php>php_outputStartedphp php=php truephp;
php php php php php php php php php}

php php php php php php php php php/php/php Buildphp allphp elements
php php php php php php php php php$renderedElementsphp php=php arrayphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_elementsphp asphp php$elementphp)php php{
php php php php php php php php php php php php switchphp php(php$elementphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:ELEMENTphp_BARphp:
php php php php php php php php php php php php php php php php php php php php php$visualWidthphp php=php php$thisphp-php>php_barWidthphp php-php php2php;
php php php php php php php php php php php php php php php php php php php php php$barphp php php php php php php php php php=php php'php[php'php;

php php php php php php php php php php php php php php php php php php php php php$indicatorWidthphp php=php strlenphp(php$thisphp-php>php_barIndicatorCharphp)php;

php php php php php php php php php php php php php php php php php php php php php$doneWidthphp php=php minphp(php$visualWidthphp php-php php$indicatorWidthphp,php roundphp(php$visualWidthphp php*php php$percentphp)php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$doneWidthphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$barphp php.php=php substrphp(strphp_repeatphp(php$thisphp-php>php_barLeftCharphp,php ceilphp(php$doneWidthphp php/php strlenphp(php$thisphp-php>php_barLeftCharphp)php)php)php,php php0php,php php$doneWidthphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$barphp php.php=php php$thisphp-php>php_barIndicatorCharphp;

php php php php php php php php php php php php php php php php php php php php php$leftWidthphp php=php php$visualWidthphp php-php php$doneWidthphp php-php php$indicatorWidthphp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php$leftWidthphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$barphp php.php=php substrphp(strphp_repeatphp(php$thisphp-php>php_barRightCharphp,php ceilphp(php$leftWidthphp php/php strlenphp(php$thisphp-php>php_barRightCharphp)php)php)php,php php0php,php php$leftWidthphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$barphp php.php=php php'php]php'php;

php php php php php php php php php php php php php php php php php php php php php$renderedElementsphp[php]php php=php php$barphp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:ELEMENTphp_PERCENTphp:
php php php php php php php php php php php php php php php php php php php php php$renderedElementsphp[php]php php=php strphp_padphp(roundphp(php$percentphp php*php php1php0php0php)php,php php3php,php php'php php'php,php STRphp_PADphp_LEFTphp)php php.php php'php%php'php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:ELEMENTphp_ETAphp:
php php php php php php php php php php php php php php php php php php php php php/php/php Inphp thephp firstphp php5php secondsphp wephp donphp'tphp getphp accuratephp resultsphp,
php php php php php php php php php php php php php php php php php php php php php/php/php thisphp skippingphp techniquephp isphp foundphp inphp manyphp progressbar
php php php php php php php php php php php php php php php php php php php php php/php/php implementationsphp.
php php php php php php php php php php php php php php php php php php php php ifphp php(php$timeTakenphp <php php5php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$renderedElementsphp[php]php php=php strphp_repeatphp(php'php php'php,php php1php2php)php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$timeRemainingphp php=php=php=php nullphp php|php|php php$timeRemainingphp php>php php8php6php4php0php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$etaFormattedphp php=php php'php?php?php:php?php?php:php?php?php'php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$hoursphp php php php=php floorphp(php$timeRemainingphp php/php php3php6php0php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$minutesphp php=php floorphp(php(php$timeRemainingphp php%php php3php6php0php0php)php php/php php6php0php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$secondsphp php=php php(php$timeRemainingphp php%php php3php6php0php0php php%php php6php0php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$etaFormattedphp php=php sprintfphp(php'php%php0php2dphp:php%php0php2dphp:php%php0php2dphp'php,php php$hoursphp,php php$minutesphp,php php$secondsphp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$renderedElementsphp[php]php php=php php'ETAphp php'php php.php php$etaFormattedphp;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp selfphp:php:ELEMENTphp_TEXTphp:
php php php php php php php php php php php php php php php php php php php php php$renderedElementsphp[php]php php=php Zendphp_Textphp_MultiBytephp:php:strPadphp(substrphp(php$textphp,php php0php,php php$thisphp-php>php_textWidthphp)php,php php$thisphp-php>php_textWidthphp,php php'php php'php,php STRphp_PADphp_RIGHTphp,php php$thisphp-php>php_charsetphp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$dataphp php.php=php implodephp(php'php php'php,php php$renderedElementsphp)php;

php php php php php php php php php/php/php Outputphp linephp data
php php php php php php php php php$thisphp-php>php_outputDataphp(php$dataphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_ProgressBarphp_Adapterphp_Interface
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp finishphp(php)
php php php php php{
php php php php php php php php switchphp php(php$thisphp-php>php_finishActionphp)php php{
php php php php php php php php php php php php casephp selfphp:php:FINISHphp_ACTIONphp_EOLphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_outputDataphp(PHPphp_EOLphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:FINISHphp_ACTIONphp_CLEARphp_LINEphp:
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_outputStartedphp)php php{
php php php php php php php php php php php php php php php php php php php php php$dataphp php=php strphp_repeatphp(php"php\xphp0php8php"php,php php$thisphp-php>php_widthphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php strphp_repeatphp(php'php php'php,php php$thisphp-php>php_widthphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php strphp_repeatphp(php"php\xphp0php8php"php,php php$thisphp-php>php_widthphp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_outputDataphp(php$dataphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp selfphp:php:FINISHphp_ACTIONphp_NONEphp:
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Calculatephp thephp barphp widthphp whenphp otherphp elementsphp changed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_calculateBarWidthphp(php)
php php php php php{
php php php php php php php php ifphp php(inphp_arrayphp(selfphp:php:ELEMENTphp_BARphp,php php$thisphp-php>php_elementsphp)php)php php{
php php php php php php php php php php php php php$barWidthphp php=php php$thisphp-php>php_widthphp;

php php php php php php php php php php php php ifphp php(inphp_arrayphp(selfphp:php:ELEMENTphp_PERCENTphp,php php$thisphp-php>php_elementsphp)php)php php{
php php php php php php php php php php php php php php php php php$barWidthphp php-php=php php4php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(inphp_arrayphp(selfphp:php:ELEMENTphp_ETAphp,php php$thisphp-php>php_elementsphp)php)php php{
php php php php php php php php php php php php php php php php php$barWidthphp php-php=php php1php2php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(inphp_arrayphp(selfphp:php:ELEMENTphp_TEXTphp,php php$thisphp-php>php_elementsphp)php)php php{
php php php php php php php php php php php php php php php php php$barWidthphp php-php=php php$thisphp-php>php_textWidthphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_barWidthphp php=php php$barWidthphp php-php php(countphp(php$thisphp-php>php_elementsphp)php php-php php1php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Outputsphp givenphp dataphp tophp STDOUTphp.
php php php php php php*
php php php php php php*php Thisphp splitphp-offphp isphp requiredphp forphp unitphp-testingphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$data
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_outputDataphp(php$dataphp)
php php php php php{
php php php php php php php php fwritephp(php$thisphp-php>getOutputStreamphp(php)php,php php$dataphp)php;
php php php php php}
php}