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
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php3php5php0php7php php2php0php1php0php-php1php2php-php1php5php php1php7php:php3php6php:php1php5Zphp andriesphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Controllerphp_Action
php php*php/
requirephp_oncephp php'Zendphp/Controllerphp/Actionphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Controller
php php*php php@subpackagephp Zendphp_Controllerphp_Actionphp_Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Controllerphp_Actionphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php php$php_actionController
php php php php php php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Actionphp php$php_actionController
php php php php php php*php/
php php php php protectedphp php$php_actionControllerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp mixedphp php$php_frontController
php php php php php php*php/
php php php php protectedphp php$php_frontControllerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php setActionControllerphp(php)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Controllerphp_Actionphp php$actionController
php php php php php php*php php@returnphp Zendphp_Controllerphp_ActionHelperphp_Abstractphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setActionControllerphp(Zendphp_Controllerphp_Actionphp php$actionControllerphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_actionControllerphp php=php php$actionControllerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp actionphp controller
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Action
php php php php php php*php/
php php php php publicphp functionphp getActionControllerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_actionControllerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp frontphp controllerphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp getFrontControllerphp(php)
php php php php php{
php php php php php php php php returnphp Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Hookphp intophp actionphp controllerphp initialization
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Hookphp intophp actionphp controllerphp preDispatchphp(php)php workflow
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp preDispatchphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Hookphp intophp actionphp controllerphp postDispatchphp(php)php workflow
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp postDispatchphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php getRequestphp(php)php php-
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Requestphp_Abstractphp php$request
php php php php php php*php/
php php php php publicphp functionphp getRequestphp(php)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php php$controllerphp php=php php$thisphp-php>getFrontControllerphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$controllerphp-php>getRequestphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getResponsephp(php)php php-
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Responsephp_Abstractphp php$response
php php php php php php*php/
php php php php publicphp functionphp getResponsephp(php)
php php php php php{
php php php php php php php php php$controllerphp php=php php$thisphp-php>getActionControllerphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$controllerphp)php php{
php php php php php php php php php php php php php$controllerphp php=php php$thisphp-php>getFrontControllerphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$controllerphp-php>getResponsephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php php$fullClassNamephp php=php getphp_classphp(php$thisphp)php;
php php php php php php php php ifphp php(strposphp(php$fullClassNamephp,php php'php_php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$helperNamephp php=php strrchrphp(php$fullClassNamephp,php php'php_php'php)php;
php php php php php php php php php php php php returnphp ltrimphp(php$helperNamephp,php php'php_php'php)php;
php php php php php php php php php}php elseifphp php(strposphp(php$fullClassNamephp,php php'php\php\php'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php$helperNamephp php=php strrchrphp(php$fullClassNamephp,php php'php\php\php'php)php;
php php php php php php php php php php php php returnphp ltrimphp(php$helperNamephp,php php'php\php\php'php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$fullClassNamephp;
php php php php php php php php php}
php php php php php}
php}
