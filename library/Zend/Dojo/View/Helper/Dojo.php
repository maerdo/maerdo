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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Dojophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Registryphp php*php/
requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;

php/php*php*
php php*php Zendphp_Dojophp_Viewphp_Helperphp_Dojophp:php Dojophp Viewphp Helper
php php*
php php*php Allowsphp specifyingphp stylesheetsphp,php pathphp tophp dojophp,php modulephp pathsphp,php andphp onLoad
php php*php eventsphp.
php php*
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dojophp_Viewphp_Helperphp_Dojo
php{
php php php php php/php*php*php#php@php+
php php php php php php*php Programmaticphp dijitphp creationphp stylephp constants
php php php php php php*php/
php php php php constphp PROGRAMMATICphp_SCRIPTphp php=php php1php;
php php php php constphp PROGRAMMATICphp_NOSCRIPTphp php=php php-php1php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php publicphp php$viewphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Container
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Whetherphp orphp notphp dijitsphp shouldphp bephp declaredphp programmatically
php php php php php php*php/
php php php php protectedphp staticphp php$php_useProgrammaticphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Initializephp helper
php php php php php php*
php php php php php php*php Retrievephp containerphp fromphp registryphp orphp createphp newphp containerphp andphp storephp in
php php php php php php*php registryphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php php$registryphp php=php Zendphp_Registryphp:php:getInstancephp(php)php;
php php php php php php php php ifphp php(php!issetphp(php$registryphp[php_php_CLASSphp_php_php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Dojophp/Containerphp.phpphp'php;
php php php php php php php php php php php php php$containerphp php=php newphp Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Containerphp(php)php;
php php php php php php php php php php php php php$registryphp[php_php_CLASSphp_php_php]php php=php php$containerphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_containerphp php=php php$registryphp[php_php_CLASSphp_php_php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Dojophp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$thisphp-php>viewphp php=php php$viewphp;
php php php php php php php php php$thisphp-php>php_containerphp-php>setViewphp(php$viewphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp dojophp container
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Viewphp_Helperphp_Dojophp_Container
php php php php php php*php/
php php php php publicphp functionphp dojophp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Proxyphp tophp containerphp methods
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Dojophp_Viewphp_Exceptionphp Forphp invalidphp methodphp calls
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php ifphp php(php!methodphp_existsphp(php$thisphp-php>php_containerphp,php php$methodphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(sprintfphp(php'Invalidphp methodphp php"php%sphp"php calledphp onphp dojophp viewphp helperphp'php,php php$methodphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp callphp_userphp_funcphp_arrayphp(arrayphp(php$thisphp-php>php_containerphp,php php$methodphp)php,php php$argsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp orphp notphp dijitsphp shouldphp bephp createdphp declaratively
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setUseDeclarativephp(php)
php php php php php{
php php php php php php php php selfphp:php:php$php_useProgrammaticphp php=php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp orphp notphp dijitsphp shouldphp bephp createdphp programmatically
php php php php php php*
php php php php php php*php Optionallyphp,php specifiyphp whetherphp orphp notphp dijitphp helpersphp shouldphp generatephp the
php php php php php php*php programmaticphp dojophp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php$style
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setUseProgrammaticphp(php$stylephp php=php selfphp:php:PROGRAMMATICphp_SCRIPTphp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$stylephp,php arrayphp(selfphp:php:PROGRAMMATICphp_SCRIPTphp,php selfphp:php:PROGRAMMATICphp_NOSCRIPTphp)php)php)php php{
php php php php php php php php php php php php php$stylephp php=php selfphp:php:PROGRAMMATICphp_SCRIPTphp;
php php php php php php php php php}
php php php php php php php php selfphp:php:php$php_useProgrammaticphp php=php php$stylephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Shouldphp dijitsphp bephp createdphp declarativelyphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp useDeclarativephp(php)
php php php php php{
php php php php php php php php returnphp php(falsephp php=php=php=php selfphp:php:php$php_useProgrammaticphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Shouldphp dijitsphp bephp createdphp programmaticallyphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp useProgrammaticphp(php)
php php php php php{
php php php php php php php php returnphp php(falsephp php!php=php=php selfphp:php:php$php_useProgrammaticphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Shouldphp dijitsphp bephp createdphp programmaticallyphp butphp withoutphp scriptsphp?
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp useProgrammaticNoScriptphp(php)
php php php php php{
php php php php php php php php returnphp php(selfphp:php:PROGRAMMATICphp_NOSCRIPTphp php=php=php=php selfphp:php:php$php_useProgrammaticphp)php;
php php php php php}
php}
