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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Frontcontrollerphp.phpphp php2php3php4php8php6php php2php0php1php0php-php1php2php-php1php0php php0php4php:php0php5php:php3php0Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Frontphp Controllerphp resource
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Frontcontrollerphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php protectedphp php$php_frontphp;

php php php php php/php*php*
php php php php php php*php Initializephp Frontphp Controller
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$frontphp php=php php$thisphp-php>getFrontControllerphp(php)php;

php php php php php php php php foreachphp php(php$thisphp-php>getOptionsphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'controllerdirectoryphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setControllerDirectoryphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$modulephp php=php>php php$directoryphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$frontphp-php>addControllerDirectoryphp(php$directoryphp,php php$modulephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'modulecontrollerdirectorynamephp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setModuleControllerDirectoryNamephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'moduledirectoryphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$frontphp-php>addModuleDirectoryphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp(php$valuephp asphp php$moduleDirphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$frontphp-php>addModuleDirectoryphp(php$moduleDirphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'defaultcontrollernamephp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setDefaultControllerNamephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'defaultactionphp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setDefaultActionphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'defaultmodulephp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setDefaultModulephp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'baseurlphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setBaseUrlphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'paramsphp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setParamsphp(php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'pluginsphp'php:
php php php php php php php php php php php php php php php php php php php php foreachphp php(php(arrayphp)php php$valuephp asphp php$pluginClassphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$stackIndexphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp(isphp_arrayphp(php$pluginClassphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pluginClassphp php=php arrayphp_changephp_keyphp_casephp(php$pluginClassphp,php CASEphp_LOWERphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(issetphp(php$pluginClassphp[php'classphp'php]php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp(issetphp(php$pluginClassphp[php'stackindexphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$stackIndexphp php=php php$pluginClassphp[php'stackindexphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$pluginClassphp php=php php$pluginClassphp[php'classphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$pluginphp php=php newphp php$pluginClassphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$frontphp-php>registerPluginphp(php$pluginphp,php php$stackIndexphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'returnresponsephp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>returnResponsephp(php(boolphp)php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'throwexceptionsphp'php:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>throwExceptionsphp(php(boolphp)php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php casephp php'actionhelperpathsphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$valuephp asphp php$helperPrefixphp php=php>php php$helperPathphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Controllerphp_Actionphp_HelperBrokerphp:php:addPathphp(php$helperPathphp,php php$helperPrefixphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php$frontphp-php>setParamphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>getBootstrapphp(php)php-php>frontControllerphp php=php php$frontphp;
php php php php php php php php php}

php php php php php php php php returnphp php$frontphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp frontphp controllerphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Controllerphp_Front
php php php php php php*php/
php php php php publicphp functionphp getFrontControllerphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_frontphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_frontphp php=php Zendphp_Controllerphp_Frontphp:php:getInstancephp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_frontphp;
php php php php php}
php}
