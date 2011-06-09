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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Repositoryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterface
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Registryphp/EnabledInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Actionphp_Repository
php php php php implementsphp Zendphp_Toolphp_Frameworkphp_Registryphp_EnabledInterfacephp,php IteratorAggregatephp,php Countable
php{

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_registryphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_actionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php setRegistryphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registry
php php php php php php*php/
php php php php publicphp functionphp setRegistryphp(Zendphp_Toolphp_Frameworkphp_Registryphp_Interfacephp php$registryphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_registryphp php=php php$registryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php addActionphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Actionphp_Interfacephp php$action
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Actionphp_Repository
php php php php php php*php/
php php php php publicphp functionphp addActionphp(Zendphp_Toolphp_Frameworkphp_Actionphp_Interfacephp php$actionphp,php php$overrideExistingActionphp php=php falsephp)
php php php php php{
php php php php php php php php php$actionNamephp php=php php$actionphp-php>getNamephp(php)php;

php php php php php php php php ifphp php(php$actionNamephp php=php=php php'php'php php|php|php php$actionNamephp php=php=php php'Basephp'php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Actionphp_Exceptionphp(php'Anphp actionphp namephp forphp thephp providedphp actionphp couldphp notphp bephp determinedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$overrideExistingActionphp php&php&php arrayphp_keyphp_existsphp(strtolowerphp(php$actionNamephp)php,php php$thisphp-php>php_actionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Actionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Actionphp_Exceptionphp(php'Anphp actionphp byphp thephp namephp php'php php.php php$actionName
php php php php php php php php php php php php php php php php php.php php'php isphp alreadyphp registeredphp andphp php$overrideExistingActionphp isphp setphp tophp falsephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_actionsphp[strtolowerphp(php$actionNamephp)php]php php=php php$actionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php processphp(php)php php-php thisphp isphp calledphp whenphp thephp clientphp isphp donephp constructingphp php(afterphp initphp(php)php)
php php php php php php*
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp processphp(php)
php php php php php{
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionsphp(php)php php-php getphp allphp actionsphp inphp thephp repository
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getActionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getActionphp(php)php php-php getphp anphp actionphp byphp aphp specificphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Actionphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getActionphp(php$actionNamephp)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(strtolowerphp(php$actionNamephp)php,php php$thisphp-php>php_actionsphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_actionsphp[strtolowerphp(php$actionNamephp)php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php countphp(php)php requiredphp byphp thephp Countablephp interface
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_actionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php getphp allphp actionsphp,php thisphp supportsphp thephp IteratorAggregatephp interface
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php returnphp newphp ArrayIteratorphp(php$thisphp-php>php_actionsphp)php;
php php php php php}

php}
