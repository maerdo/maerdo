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
php php*php php@versionphp php php php php$Idphp:php Modulesphp.phpphp php2php0php8php1php4php php2php0php1php0php-php0php2php-php0php1php php2php0php:php1php3php:php0php8Zphp freakphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Modulephp bootstrappingphp resource
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Modulesphp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php php/php*php*
php php php php php php*php php@varphp ArrayObject
php php php php php php*php/
php php php php protectedphp php$php_bootstrapsphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_bootstrapsphp php=php newphp ArrayObjectphp(arrayphp(php)php,php ArrayObjectphp:php:ARRAYphp_ASphp_PROPSphp)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp modules
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Resourcephp_Exceptionphp Whenphp bootstrapphp classphp wasphp notphp found
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php;
php php php php php php php php php$bootstrapphp-php>bootstrapphp(php'FrontControllerphp'php)php;
php php php php php php php php php$frontphp php=php php$bootstrapphp-php>getResourcephp(php'FrontControllerphp'php)php;

php php php php php php php php php$modulesphp php=php php$frontphp-php>getControllerDirectoryphp(php)php;
php php php php php php php php php$defaultphp php=php php$frontphp-php>getDefaultModulephp(php)php;
php php php php php php php php php$curBootstrapClassphp php=php getphp_classphp(php$bootstrapphp)php;
php php php php php php php php foreachphp php(php$modulesphp asphp php$modulephp php=php>php php$moduleDirectoryphp)php php{
php php php php php php php php php php php php php$bootstrapClassphp php=php php$thisphp-php>php_formatModuleNamephp(php$modulephp)php php.php php'php_Bootstrapphp'php;
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$bootstrapClassphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php$bootstrapPathphp php php=php dirnamephp(php$moduleDirectoryphp)php php.php php'php/Bootstrapphp.phpphp'php;
php php php php php php php php php php php php php php php php ifphp php(filephp_existsphp(php$bootstrapPathphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$eMsgTplphp php=php php'Bootstrapphp filephp foundphp forphp modulephp php"php%sphp"php butphp bootstrapphp classphp php"php%sphp"php notphp foundphp'php;
php php php php php php php php php php php php php php php php php php php php includephp_oncephp php$bootstrapPathphp;
php php php php php php php php php php php php php php php php php php php php ifphp php(php(php$defaultphp php!php=php php$modulephp)
php php php php php php php php php php php php php php php php php php php php php php php php php&php&php php!classphp_existsphp(php$bootstrapClassphp,php falsephp)
php php php php php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$eMsgTplphp,php php$modulephp,php php$bootstrapClass
php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php$defaultphp php=php=php php$modulephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$bootstrapClassphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$bootstrapClassphp php=php php'Bootstrapphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$bootstrapClassphp,php falsephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$eMsgTplphp,php php$modulephp,php php$bootstrapClass
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$bootstrapClassphp php=php=php php$curBootstrapClassphp)php php{
php php php php php php php php php php php php php php php php php/php/php Ifphp thephp foundphp bootstrapphp classphp matchesphp thephp onephp callingphp this
php php php php php php php php php php php php php php php php php/php/php resourcephp,php donphp'tphp rephp-executephp.
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$moduleBootstrapphp php=php newphp php$bootstrapClassphp(php$bootstrapphp)php;
php php php php php php php php php php php php php$moduleBootstrapphp-php>bootstrapphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_bootstrapsphp[php$modulephp]php php=php php$moduleBootstrapphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_bootstrapsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp bootstrapsphp thatphp havephp beenphp run
php php php php php php*
php php php php php php*php php@returnphp ArrayObject
php php php php php php*php/
php php php php publicphp functionphp getExecutedBootstrapsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_bootstrapsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Formatphp aphp modulephp namephp tophp thephp modulephp classphp prefix
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_formatModuleNamephp(php$namephp)
php php php php php{
php php php php php php php php php$namephp php=php strtolowerphp(php$namephp)php;
php php php php php php php php php$namephp php=php strphp_replacephp(arrayphp(php'php-php'php,php php'php.php'php)php,php php'php php'php,php php$namephp)php;
php php php php php php php php php$namephp php=php ucwordsphp(php$namephp)php;
php php php php php php php php php$namephp php=php strphp_replacephp(php'php php'php,php php'php'php,php php$namephp)php;
php php php php php php php php returnphp php$namephp;
php php php php php}
php}
