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
classphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Rendererphp_Entry
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
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setBlockphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setDurationphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setExplicitphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setKeywordsphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setSubtitlephp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setSummaryphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_calledphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_appendNamespacesphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp namespacesphp tophp entryphp root
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_appendNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getRootElementphp(php)php-php>setAttributephp(php'xmlnsphp:itunesphp'php,
php php php php php php php php php php php php php'httpphp:php/php/wwwphp.itunesphp.comphp/dtdsphp/podcastphp-php1php.php0php.dtdphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp authors
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setAuthorsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$authorsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesAuthorsphp(php)php;
php php php php php php php php ifphp php(php!php$authorsphp php|php|php emptyphp(php$authorsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$authorsphp asphp php$authorphp)php php{
php php php php php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:authorphp'php)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$authorphp)php;
php php php php php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp itunesphp block
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setBlockphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$blockphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesBlockphp(php)php;
php php php php php php php php ifphp php(php$blockphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:blockphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$blockphp)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp duration
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setDurationphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$durationphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesDurationphp(php)php;
php php php php php php php php ifphp php(php!php$durationphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:durationphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$durationphp)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp explicitphp flag
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setExplicitphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$explicitphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesExplicitphp(php)php;
php php php php php php php php ifphp php(php$explicitphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:explicitphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$explicitphp)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp keywords
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setKeywordsphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$keywordsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesKeywordsphp(php)php;
php php php php php php php php ifphp php(php!php$keywordsphp php|php|php emptyphp(php$keywordsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:keywordsphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(implodephp(php'php,php'php,php php$keywordsphp)php)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp subtitle
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setSubtitlephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$subtitlephp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesSubtitlephp(php)php;
php php php php php php php php ifphp php(php!php$subtitlephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:subtitlephp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$subtitlephp)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp summary
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setSummaryphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$summaryphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesSummaryphp(php)php;
php php php php php php php php ifphp php(php!php$summaryphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:summaryphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$summaryphp)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}
php}
