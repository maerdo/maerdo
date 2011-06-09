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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Decoratorphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_ViewScript
php php*
php php*php Renderphp aphp viewphp scriptphp asphp aphp decorator
php php*
php php*php Acceptsphp thephp optionsphp:
php php*php php-php separatorphp:php separatorphp tophp usephp betweenphp viewphp scriptphp contentphp andphp providedphp contentphp php(defaultsphp tophp PHPphp_EOLphp)
php php*php php-php placementphp:php whetherphp tophp appendphp orphp prependphp viewphp scriptphp contentphp tophp providedphp contentphp php(defaultsphp tophp prependphp)
php php*php php-php viewScriptphp:php viewphp scriptphp tophp use
php php*php php-php viewModulephp:php modulephp thatphp viewphp scriptphp isphp inphp php(optionalphp)
php php*
php php*php Thephp viewphp scriptphp isphp renderedphp asphp aphp partialphp;php thephp elementphp beingphp decoratedphp is
php php*php passedphp inphp asphp thephp php'elementphp'php variablephp:
php php*php php<codephp>
php php*php php/php/php inphp viewphp scriptphp:
php php*php echophp php$thisphp-php>elementphp-php>getLabelphp(php)php;
php php*php <php/codephp>
php php*
php php*php Anyphp optionsphp otherphp thanphp separatorphp,php placementphp,php viewScriptphp,php andphp viewModulephp arephp passedphp to
php php*php thephp partialphp asphp localphp variablesphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ViewScriptphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_ViewScriptphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php append
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php php'APPENDphp'php;

php php php php php/php*php*
php php php php php php*php Viewphp scriptphp tophp render
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewScriptphp;

php php php php php/php*php*
php php php php php php*php Viewphp scriptphp module
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_viewModulephp;

php php php php php/php*php*
php php php php php php*php Setphp viewphp script
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$script
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_ViewScript
php php php php php php*php/
php php php php publicphp functionphp setViewScriptphp(php$scriptphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewScriptphp php=php php(stringphp)php php$scriptphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp viewphp script
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getViewScriptphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_viewScriptphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$viewScriptphp php=php php$elementphp-php>getAttribphp(php'viewScriptphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setViewScriptphp(php$viewScriptphp)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$viewScriptphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$viewScriptphp php=php php$thisphp-php>getOptionphp(php'viewScriptphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setViewScriptphp(php$viewScriptphp)
php php php php php php php php php php php php php php php php php php php php php php-php>removeOptionphp(php'viewScriptphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_viewScriptphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp viewphp scriptphp module
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$module
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_ViewScript
php php php php php php*php/
php php php php publicphp functionphp setViewModulephp(php$viewModulephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_viewModulephp php=php php(stringphp)php php$viewModulephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp viewphp scriptphp module
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getViewModulephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_viewModulephp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$viewModulephp php=php php$elementphp-php>getAttribphp(php'viewModulephp'php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setViewModulephp(php$viewModulephp)php;
php php php php php php php php php php php php php php php php php php php php returnphp php$viewModulephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$viewModulephp php=php php$thisphp-php>getOptionphp(php'viewModulephp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setViewModulephp(php$viewModulephp)
php php php php php php php php php php php php php php php php php php php php php php-php>removeOptionphp(php'viewModulephp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_viewModulephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp viewphp script
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php$viewphp php php php php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$viewScriptphp php=php php$thisphp-php>getViewScriptphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$viewScriptphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Exceptionphp(php'Nophp viewphp scriptphp registeredphp withphp ViewScriptphp decoratorphp'php)php;
php php php php php php php php php}

php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;

php php php php php php php php php$varsphp php php php php php php php php php php php php php php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php$varsphp[php'elementphp'php]php php php php=php php$elementphp;
php php php php php php php php php$varsphp[php'contentphp'php]php php php php=php php$contentphp;
php php php php php php php php php$varsphp[php'decoratorphp'php]php php=php php$thisphp;

php php php php php php php php php$viewModulephp php=php php$thisphp-php>getViewModulephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$viewModulephp)php)php php{
php php php php php php php php php php php php php$renderedContentphp php=php php$viewphp-php>partialphp(php$viewScriptphp,php php$varsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$renderedContentphp php=php php$viewphp-php>partialphp(php$viewScriptphp,php php$viewModulephp,php php$varsphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Getphp placementphp againphp tophp seephp ifphp itphp hasphp changed
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$renderedContentphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$renderedContentphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$renderedContentphp;
php php php php php php php php php}
php php php php php}
php}
