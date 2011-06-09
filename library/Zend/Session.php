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
php php*php php@packagephp php php php Zendphp_Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Sessionphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php php@sincephp php php php php php Previewphp Releasephp php0php.php2
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Sessionphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Sessionphp_Namespace
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp/Namespacephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Sessionphp_SaveHandlerphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp/SaveHandlerphp/Interfacephp.phpphp'php;


php/php*php*
php php*php Zendphp_Session
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Session
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Sessionphp extendsphp Zendphp_Sessionphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp Zendphp_Sessionphp isphp beingphp usedphp withphp unitphp tests
php php php php php php*
php php php php php php*php php@internal
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php publicphp staticphp php$php_unitTestEnabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php php$php_throwStartupException
php php php php php php*
php php php php php php*php php@varphp boolphp|bitsetphp Thisphp couldphp alsophp bephp aphp combiniationphp ofphp errorphp codesphp tophp catch
php php php php php php*php/
php php php php protectedphp staticphp php$php_throwStartupExceptionsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Checkphp whetherphp orphp notphp thephp sessionphp wasphp started
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp staticphp php$php_sessionStartedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp thephp sessionphp idphp hasphp beenphp regeneratedphp thisphp requestphp.
php php php php php php*
php php php php php php*php Idphp regenerationphp state
php php php php php php*php <php0php php-php regeneratephp requestedphp whenphp sessionphp isphp started
php php php php php php*php php0php php php-php dophp nothing
php php php php php php*php php>php0php php-php alreadyphp calledphp sessionphp_regeneratephp_idphp(php)
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php privatephp staticphp php$php_regenerateIdStatephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Privatephp listphp ofphp phpphp'sphp iniphp valuesphp forphp extphp/session
php php php php php php*php nullphp valuesphp willphp defaultphp tophp thephp phpphp.iniphp valuephp,php otherwise
php php php php php php*php thephp valuephp belowphp willphp overwritephp thephp defaultphp iniphp valuephp,php unless
php php php php php php*php thephp userphp hasphp setphp anphp optionphp explicityphp withphp setOptionsphp(php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp staticphp php$php_defaultOptionsphp php=php arrayphp(
php php php php php php php php php'savephp_pathphp'php php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'namephp'php php php php php php php php php php php php php php php php php php php php php php php=php>php nullphp,php php/php*php thisphp shouldphp bephp setphp tophp aphp uniquephp valuephp forphp eachphp applicationphp php*php/
php php php php php php php php php'savephp_handlerphp'php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php/php/php'autophp_startphp'php php php php php php php php php php php php php php php php php=php>php nullphp,php php/php*php intentionallyphp excludedphp php(seephp manualphp)php php*php/
php php php php php php php php php'gcphp_probabilityphp'php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'gcphp_divisorphp'php php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'gcphp_maxlifetimephp'php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'serializephp_handlerphp'php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cookiephp_lifetimephp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cookiephp_pathphp'php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cookiephp_domainphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cookiephp_securephp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cookiephp_httponlyphp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'usephp_cookiesphp'php php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'usephp_onlyphp_cookiesphp'php php php php php php php php php php php=php>php php'onphp'php,
php php php php php php php php php'refererphp_checkphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'entropyphp_filephp'php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'entropyphp_lengthphp'php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cachephp_limiterphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'cachephp_expirephp'php php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'usephp_transphp_sidphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'bugphp_compatphp_php4php2php'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'bugphp_compatphp_warnphp'php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'hashphp_functionphp'php php php php php php php php php php php php php php=php>php nullphp,
php php php php php php php php php'hashphp_bitsphp_perphp_characterphp'php php php php=php>php null
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp optionsphp pertainingphp tophp Zendphp_Sessionphp thatphp canphp bephp setphp byphp developers
php php php php php php*php usingphp Zendphp_Sessionphp:php:setOptionsphp(php)php.php Thisphp listphp intentionallyphp duplicates
php php php php php php*php thephp individualphp declarationphp ofphp staticphp php"classphp"php variablesphp byphp thephp samephp namesphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp staticphp php$php_localOptionsphp php=php arrayphp(
php php php php php php php php php'strictphp'php php php php php php php php php php php php php php php php php=php>php php'php_strictphp'php,
php php php php php php php php php'rememberphp_mephp_secondsphp'php php php php=php>php php'php_rememberMeSecondsphp'php,
php php php php php php php php php'throwphp_startupphp_exceptionsphp'php php=php>php php'php_throwStartupExceptionsphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp writephp closephp hasphp beenphp performedphp.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp staticphp php$php_writeClosedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp sessionphp idphp cookiephp hasphp beenphp deleted
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp staticphp php$php_sessionCookieDeletedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp sessionphp hasphp beenphp destroyedphp viaphp sessionphp_destroyphp(php)
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp staticphp php$php_destroyedphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp sessionphp mustphp bephp initiatedphp beforephp usage
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp staticphp php$php_strictphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Defaultphp numberphp ofphp secondsphp thephp sessionphp willphp bephp rememberedphp forphp whenphp askedphp tophp bephp remembered
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php privatephp staticphp php$php_rememberMeSecondsphp php=php php1php2php0php9php6php0php0php;php php/php/php php2php weeks

php php php php php/php*php*
php php php php php php*php Whetherphp thephp defaultphp optionsphp listedphp inphp Zendphp_Sessionphp:php:php$php_localOptionsphp havephp beenphp set
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php privatephp staticphp php$php_defaultOptionsSetphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Aphp referencephp tophp thephp setphp sessionphp savephp handler
php php php php php php*
php php php php php php*php php@varphp Zendphp_Sessionphp_SaveHandlerphp_Interface
php php php php php php*php/
php php php php privatephp staticphp php$php_saveHandlerphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Constructorphp overridingphp php-php makephp surephp thatphp aphp developerphp cannotphp instantiate
php php php php php php*php/
php php php php protectedphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php}


php php php php php/php*php*
php php php php php php*php setOptionsphp php-php setphp bothphp thephp classphp specified
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$userOptionsphp php-php passphp-byphp-keywordphp stylephp arrayphp ofphp php<optionphp namephp,php optionphp valuephp>php pairs
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setOptionsphp(arrayphp php$userOptionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php/php setphp defaultphp optionsphp onphp firstphp runphp onlyphp php(beforephp applyingphp userphp settingsphp)
php php php php php php php php ifphp php(php!selfphp:php:php$php_defaultOptionsSetphp)php php{
php php php php php php php php php php php php foreachphp php(selfphp:php:php$php_defaultOptionsphp asphp php$defaultOptionNamephp php=php>php php$defaultOptionValuephp)php php{
php php php php php php php php php php php php php php php php ifphp php(issetphp(selfphp:php:php$php_defaultOptionsphp[php$defaultOptionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php iniphp_setphp(php"sessionphp.php$defaultOptionNamephp"php,php php$defaultOptionValuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php selfphp:php:php$php_defaultOptionsSetphp php=php truephp;
php php php php php php php php php}

php php php php php php php php php/php/php setphp thephp optionsphp thephp userphp hasphp requestedphp tophp set
php php php php php php php php foreachphp php(php$userOptionsphp asphp php$userOptionNamephp php=php>php php$userOptionValuephp)php php{

php php php php php php php php php php php php php$userOptionNamephp php=php strtolowerphp(php$userOptionNamephp)php;

php php php php php php php php php php php php php/php/php setphp thephp iniphp basedphp values
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$userOptionNamephp,php selfphp:php:php$php_defaultOptionsphp)php)php php{
php php php php php php php php php php php php php php php php iniphp_setphp(php"sessionphp.php$userOptionNamephp"php,php php$userOptionValuephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elseifphp php(issetphp(selfphp:php:php$php_localOptionsphp[php$userOptionNamephp]php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php{selfphp:php:php$php_localOptionsphp[php$userOptionNamephp]php}php php=php php$userOptionValuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php elsephp php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Unknownphp optionphp:php php$userOptionNamephp php=php php$userOptionValuephp"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php getOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$optionNamephp OPTIONAL
php php php php php php*php php@returnphp arrayphp|string
php php php php php php*php/
php php php php publicphp staticphp functionphp getOptionsphp(php$optionNamephp php=php nullphp)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(iniphp_getphp_allphp(php'sessionphp'php)php asphp php$sysOptionNamephp php=php>php php$sysOptionValuesphp)php php{
php php php php php php php php php php php php php$optionsphp[substrphp(php$sysOptionNamephp,php php8php)php]php php=php php$sysOptionValuesphp[php'localphp_valuephp'php]php;
php php php php php php php php php}
php php php php php php php php foreachphp php(selfphp:php:php$php_localOptionsphp asphp php$localOptionNamephp php=php>php php$localOptionMemberNamephp)php php{
php php php php php php php php php php php php php$optionsphp[php$localOptionNamephp]php php=php selfphp:php:php$php{php$localOptionMemberNamephp}php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$optionNamephp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$optionNamephp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php returnphp php$optionsphp[php$optionNamephp]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setSaveHandlerphp(php)php php-php Sessionphp Savephp Handlerphp assignment
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Sessionphp_SaveHandlerphp_Interfacephp php$interface
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setSaveHandlerphp(Zendphp_Sessionphp_SaveHandlerphp_Interfacephp php$saveHandlerphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_saveHandlerphp php=php php$saveHandlerphp;

php php php php php php php php ifphp php(selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php sessionphp_setphp_savephp_handlerphp(
php php php php php php php php php php php php arrayphp(php&php$saveHandlerphp,php php'openphp'php)php,
php php php php php php php php php php php php arrayphp(php&php$saveHandlerphp,php php'closephp'php)php,
php php php php php php php php php php php php arrayphp(php&php$saveHandlerphp,php php'readphp'php)php,
php php php php php php php php php php php php arrayphp(php&php$saveHandlerphp,php php'writephp'php)php,
php php php php php php php php php php php php arrayphp(php&php$saveHandlerphp,php php'destroyphp'php)php,
php php php php php php php php php php php php arrayphp(php&php$saveHandlerphp,php php'gcphp'php)
php php php php php php php php php php php php php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php getSaveHandlerphp(php)php php-php Getphp thephp sessionphp Savephp Handler
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Sessionphp_SaveHandlerphp_Interface
php php php php php php*php/
php php php php publicphp staticphp functionphp getSaveHandlerphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_saveHandlerphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php regenerateIdphp(php)php php-php Regeneratephp thephp sessionphp idphp.php php Bestphp practicephp isphp tophp callphp thisphp after
php php php php php php*php sessionphp isphp startedphp.php php Ifphp calledphp priorphp tophp sessionphp startingphp,php sessionphp idphp willphp bephp regenerated
php php php php php php*php atphp startphp timephp.
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp regenerateIdphp(php)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp php&php&php headersphp_sentphp(php$filenamephp,php php$linenumphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Youphp mustphp callphp php"php php.php php_php_CLASSphp_php_php php.php php'php:php:php'php php.php php_php_FUNCTIONphp_php_php php.
php php php php php php php php php php php php php php php php php"php(php)php beforephp anyphp outputphp hasphp beenphp sentphp tophp thephp browserphp;php outputphp startedphp inphp php{php$filenamephp}php/php{php$linenumphp}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:php$php_sessionStartedphp php&php&php selfphp:php:php$php_regenerateIdStatephp <php=php php0php)php php{
php php php php php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php php php php php sessionphp_regeneratephp_idphp(truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php selfphp:php:php$php_regenerateIdStatephp php=php php1php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@todophp Ifphp wephp canphp detectphp thatphp thisphp requesterphp hadphp nophp sessionphp previouslyphp,
php php php php php php php php php php php php php php*php php php php php php php thenphp whyphp regeneratephp thephp idphp beforephp thephp sessionphp hasphp startedphp?
php php php php php php php php php php php php php php*php php php php php php php Feedbackphp wantedphp forphp:
php php php php php php php php php php php php php php/php/
php php php php php php php php php php php php ifphp php(issetphp(php$php_COOKIEphp[sessionphp_namephp(php)php]php)php php|php|php php(php!usephp onlyphp cookiesphp php&php&php issetphp(php$php_REQUESTphp[sessionphp_namephp(php)php]php)php)php)php php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_regenerateIdStatephp php=php php1php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php selfphp:php:php$php_regenerateIdStatephp php=php php-php1php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php/php/php*php/
php php php php php php php php php php php php selfphp:php:php$php_regenerateIdStatephp php=php php-php1php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php rememberMephp(php)php php-php Writephp aphp persistentphp cookiephp thatphp expiresphp afterphp aphp numberphp ofphp secondsphp inphp thephp futurephp.php Ifphp nophp numberphp of
php php php php php php*php secondsphp isphp specifiedphp,php thenphp thisphp defaultsphp tophp selfphp:php:php$php_rememberMeSecondsphp.php php Duephp tophp clockphp errorsphp onphp endphp usersphp'php systemsphp,
php php php php php php*php largephp valuesphp arephp recommendedphp tophp avoidphp undesirablephp expirationphp ofphp sessionphp cookiesphp.
php php php php php php*
php php php php php php*php php@paramphp php$secondsphp integerphp php-php OPTIONALphp specifiesphp TTLphp forphp cookiephp inphp secondsphp fromphp presentphp time
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp rememberMephp(php$secondsphp php=php nullphp)
php php php php php{
php php php php php php php php php$secondsphp php=php php(intphp)php php$secondsphp;
php php php php php php php php php$secondsphp php=php php(php$secondsphp php>php php0php)php php?php php$secondsphp php:php selfphp:php:php$php_rememberMeSecondsphp;

php php php php php php php php selfphp:php:rememberUntilphp(php$secondsphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php forgetMephp(php)php php-php Writephp aphp volatilephp sessionphp cookiephp,php removingphp anyphp persistentphp cookiephp thatphp mayphp havephp existedphp.php Thephp session
php php php php php php*php wouldphp endphp uponphp,php forphp examplephp,php terminationphp ofphp aphp webphp browserphp programphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp forgetMephp(php)
php php php php php{
php php php php php php php php selfphp:php:rememberUntilphp(php0php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php rememberUntilphp(php)php php-php Thisphp methodphp doesphp thephp workphp ofphp changingphp thephp statephp ofphp thephp sessionphp cookiephp andphp making
php php php php php php*php surephp thatphp itphp getsphp resentphp tophp thephp browserphp viaphp regenerateIdphp(php)
php php php php php php*
php php php php php php*php php@paramphp intphp php$seconds
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp rememberUntilphp(php$secondsphp php=php php0php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php selfphp:php:regenerateIdphp(php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$cookieParamsphp php=php sessionphp_getphp_cookiephp_paramsphp(php)php;

php php php php php php php php sessionphp_setphp_cookiephp_paramsphp(
php php php php php php php php php php php php php$secondsphp,
php php php php php php php php php php php php php$cookieParamsphp[php'pathphp'php]php,
php php php php php php php php php php php php php$cookieParamsphp[php'domainphp'php]php,
php php php php php php php php php php php php php$cookieParamsphp[php'securephp'php]
php php php php php php php php php php php php php)php;

php php php php php php php php php/php/php normallyphp php"rememberMephp(php)php"php representsphp aphp securityphp contextphp changephp,php sophp shouldphp usephp newphp sessionphp id
php php php php php php php php selfphp:php:regenerateIdphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php sessionExistsphp(php)php php-php whetherphp orphp notphp aphp sessionphp existsphp forphp thephp currentphp request
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp sessionExistsphp(php)
php php php php php{
php php php php php php php php ifphp php(iniphp_getphp(php'sessionphp.usephp_cookiesphp'php)php php=php=php php'php1php'php php&php&php issetphp(php$php_COOKIEphp[sessionphp_namephp(php)php]php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elseifphp php(php!emptyphp(php$php_REQUESTphp[sessionphp_namephp(php)php]php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elseifphp php(selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp sessionphp hasphp beenphp destroyedphp viaphp sessionphp_destroyphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isDestroyedphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_destroyedphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php startphp(php)php php-php Startphp thephp sessionphp.
php php php php php php*
php php php php php php*php php@paramphp boolphp|arrayphp php$optionsphp php OPTIONALphp Eitherphp userphp suppliedphp optionsphp,php orphp flagphp indicatingphp ifphp startphp initiatedphp automatically
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp startphp(php$optionsphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_sessionStartedphp php&php&php selfphp:php:php$php_destroyedphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Thephp sessionphp wasphp explicitlyphp destroyedphp duringphp thisphp requestphp,php attemptingphp tophp rephp-startphp isphp notphp allowedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:php$php_sessionStartedphp)php php{
php php php php php php php php php php php php returnphp;php php/php/php alreadyphp started
php php php php php php php php php}

php php php php php php php php php/php/php makephp surephp ourphp defaultphp optionsphp php(atphp thephp leastphp)php havephp beenphp set
php php php php php php php php ifphp php(php!selfphp:php:php$php_defaultOptionsSetphp)php php{
php php php php php php php php php php php php selfphp:php:setOptionsphp(isphp_arrayphp(php$optionsphp)php php?php php$optionsphp php:php arrayphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Inphp strictphp modephp,php dophp notphp allowphp autophp-startingphp Zendphp_Sessionphp,php suchphp asphp viaphp php"newphp Zendphp_Sessionphp_Namespacephp(php)php"
php php php php php php php php ifphp php(selfphp:php:php$php_strictphp php&php&php php$optionsphp php=php=php=php truephp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Youphp mustphp explicitlyphp startphp thephp sessionphp withphp Zendphp_Sessionphp:php:startphp(php)php whenphp sessionphp optionsphp arephp setphp tophp strictphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$filenamephp php=php php$linenumphp php=php nullphp;
php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp php&php&php headersphp_sentphp(php$filenamephp,php php$linenumphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Sessionphp mustphp bephp startedphp beforephp anyphp outputphp hasphp beenphp sentphp tophp thephp browserphp;php"
php php php php php php php php php php php php php php php php.php php"php outputphp startedphp inphp php{php$filenamephp}php/php{php$linenumphp}php"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Seephp httpphp:php/php/wwwphp.phpphp.netphp/manualphp/enphp/refphp.sessionphp.phpphp forphp explanation
php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp php&php&php definedphp(php'SIDphp'php)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'sessionphp hasphp alreadyphp beenphp startedphp byphp sessionphp.autophp-startphp orphp sessionphp_startphp(php)php'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php Hackphp tophp throwphp exceptionsphp onphp startphp insteadphp ofphp phpphp errors
php php php php php php php php php php*php php@seephp httpphp:php/php/frameworkphp.zendphp.comphp/issuesphp/browsephp/ZFphp-php1php3php2php5
php php php php php php php php php php*php/

php php php php php php php php php$errorLevelphp php=php php(isphp_intphp(selfphp:php:php$php_throwStartupExceptionsphp)php)php php?php selfphp:php:php$php_throwStartupExceptionsphp php:php Ephp_ALLphp;

php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp)php php{

php php php php php php php php php php php php ifphp php(selfphp:php:php$php_throwStartupExceptionsphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php'Zendphp_Sessionphp_Exceptionphp'php,php php'handleSessionStartErrorphp'php)php,php php$errorLevelphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$startedCleanlyphp php=php sessionphp_startphp(php)php;

php php php php php php php php php php php php ifphp php(selfphp:php:php$php_throwStartupExceptionsphp)php php{
php php php php php php php php php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$startedCleanlyphp php|php|php Zendphp_Sessionphp_Exceptionphp:php:php$sessionStartErrorphp php!php=php nullphp)php php{
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_throwStartupExceptionsphp)php php{
php php php php php php php php php php php php php php php php php php php php setphp_errorphp_handlerphp(arrayphp(php'Zendphp_Sessionphp_Exceptionphp'php,php php'handleSilentWriteClosephp'php)php,php php$errorLevelphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php sessionphp_writephp_closephp(php)php;
php php php php php php php php php php php php php php php php ifphp php(selfphp:php:php$php_throwStartupExceptionsphp)php php{
php php php php php php php php php php php php php php php php php php php php restorephp_errorphp_handlerphp(php)php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php_php_CLASSphp_php_php php.php php'php:php:php'php php.php php_php_FUNCTIONphp_php_php php.php php'php(php)php php-php php'php php.php Zendphp_Sessionphp_Exceptionphp:php:php$sessionStartErrorphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php parentphp:php:php$php_readablephp php=php truephp;
php php php php php php php php parentphp:php:php$php_writablephp php=php truephp;
php php php php php php php php selfphp:php:php$php_sessionStartedphp php=php truephp;
php php php php php php php php ifphp php(selfphp:php:php$php_regenerateIdStatephp php=php=php=php php-php1php)php php{
php php php php php php php php php php php php selfphp:php:regenerateIdphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php runphp validatorsphp ifphp theyphp exist
php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php'VALIDphp'php]php)php)php php{
php php php php php php php php php php php php selfphp:php:php_processValidatorsphp(php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php_processStartupMetadataGlobalphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php php_processGlobalMetadataphp(php)php php-php thisphp methodphp initizesphp thephp sessionsphp GLOBAL
php php php php php php*php metadataphp,php mostlyphp globalphp dataphp expirationphp calculationsphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp staticphp functionphp php_processStartupMetadataGlobalphp(php)
php php php php php{
php php php php php php php php php/php/php processphp globalphp metadata
php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php)php php{

php php php php php php php php php php php php php/php/php expirephp globallyphp expiredphp values
php php php php php php php php php php php php foreachphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php asphp php$namespacephp php=php>php php$namespacephp_metadataphp)php php{

php php php php php php php php php php php php php php php php php/php/php Expirephp Namespacephp byphp Timephp php(ENTphp)
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$namespacephp_metadataphp[php'ENTphp'php]php)php php&php&php php(php$namespacephp_metadataphp[php'ENTphp'php]php php>php php0php)php php&php&php php(timephp(php)php php>php php$namespacephp_metadataphp[php'ENTphp'php]php)php php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php$namespacephp]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Expirephp Namespacephp byphp Globalphp Hopphp php(ENGHphp)php ifphp itphp wasntphp expiredphp above
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php php&php&php issetphp(php$namespacephp_metadataphp[php'ENGHphp'php]php)php php&php&php php$namespacephp_metadataphp[php'ENGHphp'php]php php>php=php php1php)php php{

php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENGHphp'php]php-php-php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENGHphp'php]php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_expiringDataphp[php$namespacephp]php php=php php$php_SESSIONphp[php$namespacephp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php$namespacephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Expirephp Namespacephp Variablesphp byphp Timephp php(ENVTphp)
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$namespacephp_metadataphp[php'ENVTphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$namespacephp_metadataphp[php'ENVTphp'php]php asphp php$variablephp php=php>php php$timephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(timephp(php)php php>php php$timephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVTphp'php]php[php$variablephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVTphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVTphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Expirephp Namespacephp Variablesphp byphp Globalphp Hopphp php(ENVGHphp)
php php php php php php php php php php php php php php php php ifphp php(issetphp(php$namespacephp_metadataphp[php'ENVGHphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(php$namespacephp_metadataphp[php'ENVGHphp'php]php asphp php$variablephp php=php>php php$hopsphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVGHphp'php]php[php$variablephp]php-php-php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVGHphp'php]php[php$variablephp]php php=php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php parentphp:php:php$php_expiringDataphp[php$namespacephp]php[php$variablephp]php php=php php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php$namespacephp]php[php$variablephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVGHphp'php]php[php$variablephp]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVGHphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php[php'ENVGHphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$namespacephp)php php&php&php emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php$namespacephp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php php&php&php emptyphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$php_SESSIONphp[php'php_php_ZFphp'php]php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php isStartedphp(php)php php-php conveniencephp methodphp tophp determinephp ifphp thephp sessionphp isphp alreadyphp startedphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isStartedphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_sessionStartedphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php isRegeneratedphp(php)php php-php conveniencephp methodphp tophp determinephp ifphp sessionphp_regeneratephp_idphp(php)
php php php php php php*php hasphp beenphp calledphp duringphp thisphp requestphp byphp Zendphp_Sessionphp.
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isRegeneratedphp(php)
php php php php php{
php php php php php php php php returnphp php(php php(selfphp:php:php$php_regenerateIdStatephp php>php php0php)php php?php truephp php:php falsephp php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php getIdphp(php)php php-php getphp thephp currentphp sessionphp id
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php returnphp sessionphp_idphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php setIdphp(php)php php-php setphp anphp idphp tophp aphp userphp specifiedphp id
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@paramphp stringphp php$id
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setIdphp(php$idphp)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp php&php&php definedphp(php'SIDphp'php)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Thephp sessionphp hasphp alreadyphp beenphp startedphp.php php Thephp sessionphp idphp mustphp bephp setphp firstphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!selfphp:php:php$php_unitTestEnabledphp php&php&php headersphp_sentphp(php$filenamephp,php php$linenumphp)php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Youphp mustphp callphp php"php.php_php_CLASSphp_php_php.php'php:php:php'php.php_php_FUNCTIONphp_php_php.
php php php php php php php php php php php php php php php php php"php(php)php beforephp anyphp outputphp hasphp beenphp sentphp tophp thephp browserphp;php outputphp startedphp inphp php{php$filenamephp}php/php{php$linenumphp}php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_stringphp(php$idphp)php php|php|php php$idphp php=php=php=php php'php'php)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php'Youphp mustphp providephp aphp nonphp-emptyphp stringphp asphp aphp sessionphp identifierphp.php'php)php;
php php php php php php php php php}

php php php php php php php php sessionphp_idphp(php$idphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php registerValidatorphp(php)php php-php registerphp aphp validatorphp thatphp willphp attemptphp tophp validatephp thisphp sessionphp for
php php php php php php*php everyphp futurephp request
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Sessionphp_Validatorphp_Interfacephp php$validator
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp registerValidatorphp(Zendphp_Sessionphp_Validatorphp_Interfacephp php$validatorphp)
php php php php php{
php php php php php php php php php$validatorphp-php>setupphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php stopphp(php)php php-php Disablephp writephp accessphp.php php Optionallyphp disablephp readphp php(notphp implementedphp)php.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp stopphp(php)
php php php php php{
php php php php php php php php parentphp:php:php$php_writablephp php=php falsephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php writeClosephp(php)php php-php Shutdownphp thephp sesssionphp,php closephp writingphp andphp detachphp php$php_SESSIONphp fromphp thephp backphp-endphp storagephp mechanismphp.
php php php php php php*php Thisphp willphp completephp thephp internalphp dataphp transformationphp onphp thisphp requestphp.
php php php php php php*
php php php php php php*php php@paramphp boolphp php$readonlyphp php-php OPTIONALphp removephp writephp accessphp php(iphp.ephp.php throwphp errorphp ifphp Zendphp_Sessionphp'sphp attemptphp writesphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp writeClosephp(php$readonlyphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:php$php_writeClosedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$readonlyphp)php php{
php php php php php php php php php php php php parentphp:php:php$php_writablephp php=php falsephp;
php php php php php php php php php}

php php php php php php php php sessionphp_writephp_closephp(php)php;
php php php php php php php php selfphp:php:php$php_writeClosedphp php=php truephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php destroyphp(php)php php-php Thisphp isphp usedphp tophp destroyphp sessionphp dataphp,php andphp optionallyphp,php thephp sessionphp cookiephp itself
php php php php php php*
php php php php php php*php php@paramphp boolphp php$removephp_cookiephp php-php OPTIONALphp removephp sessionphp idphp cookiephp,php defaultsphp tophp truephp php(removephp cookiephp)
php php php php php php*php php@paramphp boolphp php$readonlyphp php-php OPTIONALphp removephp writephp accessphp php(iphp.ephp.php throwphp errorphp ifphp Zendphp_Sessionphp'sphp attemptphp writesphp)
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp destroyphp(php$removephp_cookiephp php=php truephp,php php$readonlyphp php=php truephp)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:php$php_destroyedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$readonlyphp)php php{
php php php php php php php php php php php php parentphp:php:php$php_writablephp php=php falsephp;
php php php php php php php php php}

php php php php php php php php sessionphp_destroyphp(php)php;
php php php php php php php php selfphp:php:php$php_destroyedphp php=php truephp;

php php php php php php php php ifphp php(php$removephp_cookiephp)php php{
php php php php php php php php php php php php selfphp:php:expireSessionCookiephp(php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php expireSessionCookiephp(php)php php-php Sendsphp anphp expiredphp sessionphp idphp cookiephp,php causingphp thephp clientphp tophp deletephp thephp sessionphp cookie
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp expireSessionCookiephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_unitTestEnabledphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(selfphp:php:php$php_sessionCookieDeletedphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_sessionCookieDeletedphp php=php truephp;

php php php php php php php php ifphp php(issetphp(php$php_COOKIEphp[sessionphp_namephp(php)php]php)php)php php{
php php php php php php php php php php php php php$cookiephp_paramsphp php=php sessionphp_getphp_cookiephp_paramsphp(php)php;

php php php php php php php php php php php php setcookiephp(
php php php php php php php php php php php php php php php php sessionphp_namephp(php)php,
php php php php php php php php php php php php php php php php falsephp,
php php php php php php php php php php php php php php php php php3php1php5php5php5php4php4php0php0php,php php/php/php strtotimephp(php'php1php9php8php0php-php0php1php-php0php1php'php)php,
php php php php php php php php php php php php php php php php php$cookiephp_paramsphp[php'pathphp'php]php,
php php php php php php php php php php php php php php php php php$cookiephp_paramsphp[php'domainphp'php]php,
php php php php php php php php php php php php php php php php php$cookiephp_paramsphp[php'securephp'php]
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php php_processValidatorphp(php)php php-php internalphp functionphp thatphp isphp calledphp inphp thephp existencephp ofphp VALIDphp metadata
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp staticphp functionphp php_processValidatorsphp(php)
php php php php php{
php php php php php php php php foreachphp php(php$php_SESSIONphp[php'php_php_ZFphp'php]php[php'VALIDphp'php]php asphp php$validatorphp_namephp php=php>php php$validphp_dataphp)php php{
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$validatorphp_namephp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$validatorphp_namephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$validatorphp php=php newphp php$validatorphp_namephp;
php php php php php php php php php php php php ifphp php(php$validatorphp-php>validatephp(php)php php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(php"Thisphp sessionphp isphp notphp validphp accordingphp tophp php{php$validatorphp_namephp}php.php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php namespaceIssetphp(php)php php-php checkphp tophp seephp ifphp aphp namespacephp isphp set
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp namespaceIssetphp(php$namespacephp)
php php php php php{
php php php php php php php php returnphp parentphp:php:php_namespaceIssetphp(php$namespacephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php namespaceUnsetphp(php)php php-php unsetphp aphp namespacephp orphp aphp variablephp withinphp aphp namespace
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp namespaceUnsetphp(php$namespacephp)
php php php php php{
php php php php php php php php parentphp:php:php_namespaceUnsetphp(php$namespacephp)php;
php php php php php php php php Zendphp_Sessionphp_Namespacephp:php:resetSingleInstancephp(php$namespacephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php namespaceGetphp(php)php php-php getphp allphp variablesphp inphp aphp namespace
php php php php php php*php Deprecatedphp:php Usephp getIteratorphp(php)php inphp Zendphp_Sessionphp_Namespacephp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$namespace
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp staticphp functionphp namespaceGetphp(php$namespacephp)
php php php php php{
php php php php php php php php returnphp parentphp:php:php_namespaceGetAllphp(php$namespacephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php returnphp anphp iteratablephp objectphp forphp usephp inphp foreachphp andphp thephp likephp,
php php php php php php*php thisphp completesphp thephp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Sessionphp_Exception
php php php php php php*php php@returnphp ArrayObject
php php php php php php*php/
php php php php publicphp staticphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php ifphp php(parentphp:php:php$php_readablephp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php/php*php*php php@seephp Zendphp_Sessionphp_Exceptionphp php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Sessionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Sessionphp_Exceptionphp(parentphp:php:php_THROWphp_NOTphp_READABLEphp_MSGphp)php;
php php php php php php php php php}

php php php php php php php php php$spacesphp php php=php arrayphp(php)php;
php php php php php php php php ifphp php(issetphp(php$php_SESSIONphp)php)php php{
php php php php php php php php php php php php php$spacesphp php=php arrayphp_keysphp(php$php_SESSIONphp)php;
php php php php php php php php php php php php foreachphp(php$spacesphp asphp php$keyphp php=php>php php$spacephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php!strncmpphp(php$spacephp,php php'php_php_php'php,php php2php)php php|php|php php!isphp_arrayphp(php$php_SESSIONphp[php$spacephp]php)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$spacesphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp newphp ArrayObjectphp(arrayphp_mergephp(php$spacesphp,php arrayphp_keysphp(parentphp:php:php$php_expiringDataphp)php)php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php isWritablephp(php)php php-php returnsphp aphp booleanphp indicatingphp ifphp namespacesphp canphp writephp php(usephp settersphp)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isWritablephp(php)
php php php php php{
php php php php php php php php returnphp parentphp:php:php$php_writablephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php isReadablephp(php)php php-php returnsphp aphp booleanphp indicatingphp ifphp namespacesphp canphp writephp php(usephp settersphp)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isReadablephp(php)
php php php php php{
php php php php php php php php returnphp parentphp:php:php$php_readablephp;
php php php php php}

php}
