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
php php*php php@versionphp php php php php$Idphp:php Sessionphp.phpphp php2php0php8php1php4php php2php0php1php0php-php0php2php-php0php1php php2php0php:php1php3php:php0php8Zphp freakphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Resourcephp forphp settingphp sessionphp options
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Sessionphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php Savephp handlerphp tophp use
php php php php php php*
php php php php php php*php php@varphp Zendphp_Sessionphp_SaveHandlerphp_Interface
php php php php php php*php/
php php php php protectedphp php$php_saveHandlerphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Setphp sessionphp savephp handler
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|stringphp|Zendphp_Sessionphp_SaveHandlerphp_Interfacephp php$saveHandler
php php php php php php*php php@returnphp Zendphp_Applicationphp_Resourcephp_Session
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Resourcephp_Exceptionphp Whenphp php$saveHandlerphp isphp nophp validphp savephp handler
php php php php php php*php/
php php php php publicphp functionphp setSaveHandlerphp(php$saveHandlerphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_saveHandlerphp php=php php$saveHandlerphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp sessionphp savephp handler
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Sessionphp_SaveHandlerphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getSaveHandlerphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_saveHandlerphp instanceofphp Zendphp_Sessionphp_SaveHandlerphp_Interfacephp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$thisphp-php>php_saveHandlerphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'classphp'php,php php$thisphp-php>php_saveHandlerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(php'Sessionphp savephp handlerphp classphp notphp providedphp inphp optionsphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$optionsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$thisphp-php>php_saveHandlerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>php_saveHandlerphp[php'optionsphp'php]php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_saveHandlerphp php=php php$thisphp-php>php_saveHandlerphp[php'classphp'php]php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_saveHandlerphp php=php newphp php$thisphp-php>php_saveHandlerphp(php$optionsphp)php;
php php php php php php php php php php php php php}php elseifphp php(isphp_stringphp(php$thisphp-php>php_saveHandlerphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_saveHandlerphp php=php newphp php$thisphp-php>php_saveHandlerphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$thisphp-php>php_saveHandlerphp instanceofphp Zendphp_Sessionphp_SaveHandlerphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(php'Invalidphp sessionphp savephp handlerphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_saveHandlerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_hasSaveHandlerphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_saveHandlerphp php!php=php=php nullphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp_changephp_keyphp_casephp(php$thisphp-php>getOptionsphp(php)php,php CASEphp_LOWERphp)php;
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'savehandlerphp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$optionsphp[php'savehandlerphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$optionsphp)php php>php php0php)php php{
php php php php php php php php php php php php Zendphp_Sessionphp:php:setOptionsphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>php_hasSaveHandlerphp(php)php)php php{
php php php php php php php php php php php php Zendphp_Sessionphp:php:setSaveHandlerphp(php$thisphp-php>getSaveHandlerphp(php)php)php;
php php php php php php php php php}
php php php php php}
php}
