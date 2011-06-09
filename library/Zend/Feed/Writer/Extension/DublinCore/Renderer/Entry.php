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
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Writerphp/Extensionphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Writer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Writerphp_Extensionphp_DublinCorephp_Rendererphp_Entry
php php php php extendsphp Zendphp_Feedphp_Writerphp_Extensionphp_RendererAbstract
php{

php php php php php/php*php*
php php php php php php*php Setphp tophp TRUEphp ifphp aphp renderingphp methodphp actuallyphp rendersphp somethingphp.php This
php php php php php php*php isphp usedphp tophp preventphp prematurephp appendingphp ofphp aphp XMLphp namespacephp declaration
php php php php php php*php untilphp anphp elementphp whichphp requiresphp itphp isphp actuallyphp appendedphp.
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_calledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Renderphp entry
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php ifphp php(strtolowerphp(php$thisphp-php>getTypephp(php)php)php php=php=php php'atomphp'php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_calledphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_appendNamespacesphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp namespacesphp tophp entry
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_appendNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getRootElementphp(php)php-php>setAttributephp(php'xmlnsphp:dcphp'php,
php php php php php php php php php php php php php'httpphp:php/php/purlphp.orgphp/dcphp/elementsphp/php1php.php1php/php'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp authorphp elements
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setAuthorsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getAuthorsphp(php)php;
php php php php php php php php ifphp php(php!php$authorsphp php|php|php emptyphp(php$authorsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$authorsphp asphp php$dataphp)php php{
php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_domphp-php>createElementphp(php'dcphp:creatorphp'php)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'namephp'php,php php$dataphp)php)php php{
php php php php php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$dataphp[php'namephp'php]php)php;
php php php php php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}
php}
