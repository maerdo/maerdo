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
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
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
classphp Zendphp_Feedphp_Writerphp_Extensionphp_Atomphp_Rendererphp_Feed
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
php php php php php php*php Renderphp feed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp renderphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php RSSphp php2php.php0php onlyphp.php Usedphp mainlyphp tophp includephp Atomphp linksphp and
php php php php php php php php php php*php Pubsubhubbubphp Hubphp endpointphp URIsphp underphp thephp Atomphp namespace
php php php php php php php php php php*php/
php php php php php php php php ifphp php(strtolowerphp(php$thisphp-php>getTypephp(php)php)php php=php=php php'atomphp'php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_setFeedLinksphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setHubsphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_calledphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_appendNamespacesphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp namespacesphp tophp rootphp elementphp ofphp feed
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_appendNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getRootElementphp(php)php-php>setAttributephp(php'xmlnsphp:atomphp'php,
php php php php php php php php php php php php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php5php/Atomphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp linkphp elements
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setFeedLinksphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$flinksphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getFeedLinksphp(php)php;
php php php php php php php php ifphp(php!php$flinksphp php|php|php emptyphp(php$flinksphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$flinksphp asphp php$typephp php=php>php php$hrefphp)php php{
php php php php php php php php php php php php php$mimephp php php=php php'applicationphp/php'php php.php strtolowerphp(php$typephp)php php.php php'php+xmlphp'php;
php php php php php php php php php php php php php$flinkphp php=php php$domphp-php>createElementphp(php'atomphp:linkphp'php)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$flinkphp)php;
php php php php php php php php php php php php php$flinkphp-php>setAttributephp(php'relphp'php,php php'selfphp'php)php;
php php php php php php php php php php php php php$flinkphp-php>setAttributephp(php'typephp'php,php php$mimephp)php;
php php php php php php php php php php php php php$flinkphp-php>setAttributephp(php'hrefphp'php,php php$hrefphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp PuSHphp hubs
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setHubsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$hubsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getHubsphp(php)php;
php php php php php php php php ifphp php(php!php$hubsphp php|php|php emptyphp(php$hubsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$hubsphp asphp php$hubUrlphp)php php{
php php php php php php php php php php php php php$hubphp php=php php$domphp-php>createElementphp(php'atomphp:linkphp'php)php;
php php php php php php php php php php php php php$hubphp-php>setAttributephp(php'relphp'php,php php'hubphp'php)php;
php php php php php php php php php php php php php$hubphp-php>setAttributephp(php'hrefphp'php,php php$hubUrlphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$hubphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}
php}
