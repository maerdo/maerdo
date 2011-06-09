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
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Interfacephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Action
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
interfacephp Zendphp_Controllerphp_Actionphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php Thephp requestphp andphp responsephp objectsphp shouldphp bephp registeredphp withphp the
php php php php php php*php controllerphp,php asphp shouldphp bephp anyphp additionalphp optionalphp argumentsphp;php thesephp willphp be
php php php php php php*php availablephp viaphp php{php@linkphp getRequestphp(php)php}php,php php{php@linkphp getResponsephp(php)php}php,php and
php php php php php php*php php{php@linkphp getInvokeArgsphp(php)php}php,php respectivelyphp.
php php php php php php*
php php php php php php*php Whenphp overridingphp thephp constructorphp,php pleasephp considerphp thisphp usagephp asphp aphp best
php php php php php php*php practicephp andphp ensurephp thatphp eachphp isphp registeredphp appropriatelyphp;php thephp easiest
php php php php php php*php wayphp tophp dophp sophp isphp tophp simplyphp callphp parentphp:php:php_php_constructphp(php$requestphp,php php$responsephp,
php php php php php php*php php$invokeArgsphp)php.
php php php php php php*
php php php php php php*php Afterphp thephp requestphp,php responsephp,php andphp invokeArgsphp arephp setphp,php the
php php php php php php*php php{php@linkphp php$php_helperphp helperphp brokerphp}php isphp initializedphp.
php php php php php php*
php php php php php php*php Finallyphp,php php{php@linkphp initphp(php)php}php isphp calledphp asphp thephp finalphp actionphp of
php php php php php php*php instantiationphp,php andphp mayphp bephp safelyphp overriddenphp tophp performphp initialization
php php php php php php*php tasksphp;php asphp aphp generalphp rulephp,php overridephp php{php@linkphp initphp(php)php}php insteadphp ofphp the
php php php php php php*php constructorphp tophp customizephp anphp actionphp controllerphp'sphp instantiationphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php php@paramphp Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php php@paramphp arrayphp php$invokeArgsphp Anyphp additionalphp invocationphp arguments
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Controllerphp_Requestphp_Abstractphp php$requestphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Responsephp_Abstractphp php$responsephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp php$invokeArgsphp php=php arrayphp(php)php)php;

php php php php php/php*php*
php php php php php php*php Dispatchphp thephp requestedphp action
php php php php php php*
php php php php php php*php php@paramphp stringphp php$actionphp Methodphp namephp ofphp action
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp dispatchphp(php$actionphp)php;
php}
