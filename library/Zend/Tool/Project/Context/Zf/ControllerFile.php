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
php php*php php@versionphp php php php php$Idphp:php ControllerFilephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php Thisphp classphp isphp thephp frontphp mostphp classphp forphp utilizingphp Zendphp_Toolphp_Project
php php*
php php*php Aphp profilephp isphp aphp hierarchicalphp setphp ofphp resourcesphp thatphp keepphp trackphp of
php php*php itemsphp withinphp aphp specificphp projectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ControllerFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_controllerNamephp php=php php'indexphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_moduleNamephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'controllerNamephp'php;

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_controllerNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'controllerNamephp'php)php;
php php php php php php php php php$thisphp-php>php_moduleNamephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'moduleNamephp'php)php;
php php php php php php php php php$thisphp-php>php_filesystemNamephp php=php ucfirstphp(php$thisphp-php>php_controllerNamephp)php php.php php'Controllerphp.phpphp'php;
php php php php php php php php parentphp:php:initphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPersistentAttributes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'controllerNamephp'php php=php>php php$thisphp-php>getControllerNamephp(php)
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ControllerFilephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getControllerNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getControllerNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_controllerNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentsphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{
php php php php php php php php php$classNamephp php=php php(php$thisphp-php>php_moduleNamephp)php php?php ucfirstphp(php$thisphp-php>php_moduleNamephp)php php.php php'php_php'php php:php php'php'php;
php php php php php php php php php$classNamephp php.php=php ucfirstphp(php$thisphp-php>php_controllerNamephp)php php.php php'Controllerphp'php;

php php php php php php php php php$codeGenFilephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(arrayphp(
php php php php php php php php php php php php php'fileNamephp'php php=php>php php$thisphp-php>getPathphp(php)php,
php php php php php php php php php php php php php'classesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Classphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php'extendedClassphp'php php=php>php php'Zendphp_Controllerphp_Actionphp'php,
php php php php php php php php php php php php php php php php php php php php php'methodsphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'initphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php=php>php php'php/php*php Initializephp actionphp controllerphp herephp php*php/php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php)php;


php php php php php php php php ifphp php(php$classNamephp php=php=php php'ErrorControllerphp'php)php php{

php php php php php php php php php php php php php$codeGenFilephp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(arrayphp(
php php php php php php php php php php php php php php php php php'fileNamephp'php php=php>php php$thisphp-php>getPathphp(php)php,
php php php php php php php php php php php php php php php php php'classesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Classphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$classNamephp,
php php php php php php php php php php php php php php php php php php php php php php php php php'extendedClassphp'php php=php>php php'Zendphp_Controllerphp_Actionphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php'methodsphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'errorActionphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php=php>php <php<php<EOS
php\php$errorsphp php=php php\php$thisphp-php>php_getParamphp(php'errorphp_handlerphp'php)php;

ifphp php(php!php\php$errorsphp)php php{
php php php php php\php$thisphp-php>viewphp-php>messagephp php=php php'Youphp havephp reachedphp thephp errorphp pagephp'php;
php php php php returnphp;
php}

switchphp php(php\php$errorsphp-php>typephp)php php{
php php php php casephp Zendphp_Controllerphp_Pluginphp_ErrorHandlerphp:php:EXCEPTIONphp_NOphp_ROUTEphp:
php php php php casephp Zendphp_Controllerphp_Pluginphp_ErrorHandlerphp:php:EXCEPTIONphp_NOphp_CONTROLLERphp:
php php php php casephp Zendphp_Controllerphp_Pluginphp_ErrorHandlerphp:php:EXCEPTIONphp_NOphp_ACTIONphp:

php php php php php php php php php/php/php php4php0php4php errorphp php-php-php controllerphp orphp actionphp notphp found
php php php php php php php php php\php$thisphp-php>getResponsephp(php)php-php>setHttpResponseCodephp(php4php0php4php)php;
php php php php php php php php php\php$thisphp-php>viewphp-php>messagephp php=php php'Pagephp notphp foundphp'php;
php php php php php php php php breakphp;
php php php php defaultphp:
php php php php php php php php php/php/php applicationphp error
php php php php php php php php php\php$thisphp-php>getResponsephp(php)php-php>setHttpResponseCodephp(php5php0php0php)php;
php php php php php php php php php\php$thisphp-php>viewphp-php>messagephp php=php php'Applicationphp errorphp'php;
php php php php php php php php breakphp;
php}

php/php/php Logphp exceptionphp,php ifphp loggerphp available
ifphp php(php\php$logphp php=php php\php$thisphp-php>getLogphp(php)php)php php{
php php php php php\php$logphp-php>critphp(php\php$thisphp-php>viewphp-php>messagephp,php php\php$errorsphp-php>exceptionphp)php;
php}

php/php/php conditionallyphp displayphp exceptions
ifphp php(php\php$thisphp-php>getInvokeArgphp(php'displayExceptionsphp'php)php php=php=php truephp)php php{
php php php php php\php$thisphp-php>viewphp-php>exceptionphp php=php php\php$errorsphp-php>exceptionphp;
php}

php\php$thisphp-php>viewphp-php>requestphp php php php=php php\php$errorsphp-php>requestphp;
EOS
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php newphp Zendphp_CodeGeneratorphp_Phpphp_Methodphp(arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'getLogphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'bodyphp'php php=php>php <php<php<EOS
php\php$bootstrapphp php=php php\php$thisphp-php>getInvokeArgphp(php'bootstrapphp'php)php;
ifphp php(php!php\php$bootstrapphp-php>hasResourcephp(php'Logphp'php)php)php php{
php php php php returnphp falsephp;
php}
php\php$logphp php=php php\php$bootstrapphp-php>getResourcephp(php'Logphp'php)php;
returnphp php\php$logphp;
EOS
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php)
php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php}

php php php php php php php php php/php/php storephp thephp generatorphp intophp thephp registryphp sophp thatphp thephp addActionphp commandphp canphp usephp thephp samephp objectphp later
php php php php php php php php Zendphp_CodeGeneratorphp_Phpphp_Filephp:php:registerFileCodeGeneratorphp(php$codeGenFilephp)php;php php/php/php REQUIRESphp filenamephp tophp bephp set
php php php php php php php php returnphp php$codeGenFilephp-php>generatephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php addActionphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$actionName
php php php php php php*php/
php php php php publicphp functionphp addActionphp(php$actionNamephp)
php php php php php{
php php php php php php php php php$classCodeGenphp php=php php$thisphp-php>getCodeGeneratorphp(php)php;
php php php php php php php php php$classCodeGenphp-php>setMethodphp(arrayphp(php'namephp'php php=php>php php$actionNamephp php.php php'Actionphp'php,php php'bodyphp'php php=php>php php'php php php php php php php php php/php/php actionphp bodyphp herephp'php)php)php;
php php php php php php php php filephp_putphp_contentsphp(php$thisphp-php>getPathphp(php)php,php php$classCodeGenphp-php>generatephp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getCodeGeneratorphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_CodeGeneratorphp_Phpphp_Class
php php php php php php*php/
php php php php publicphp functionphp getCodeGeneratorphp(php)
php php php php php{
php php php php php php php php php$codeGenFilephp php=php Zendphp_CodeGeneratorphp_Phpphp_Filephp:php:fromReflectedFileNamephp(php$thisphp-php>getPathphp(php)php)php;
php php php php php php php php php$codeGenFileClassesphp php=php php$codeGenFilephp-php>getClassesphp(php)php;
php php php php php php php php php$classphp php=php arrayphp_shiftphp(php$codeGenFileClassesphp)php;
php php php php php php php php returnphp php$classphp;
php php php php php}

php}
