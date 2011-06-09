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
classphp Zendphp_Feedphp_Writerphp_Extensionphp_ITunesphp_Rendererphp_Feed
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
php php php php php php php php php$thisphp-php>php_setAuthorsphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setBlockphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setCategoriesphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setImagephp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setDurationphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setExplicitphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setKeywordsphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setNewFeedUrlphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setOwnersphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setSubtitlephp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php php$thisphp-php>php_setSummaryphp(php$thisphp-php>php_domphp,php php$thisphp-php>php_basephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_calledphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_appendNamespacesphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Appendphp feedphp namespaces
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_appendNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getRootElementphp(php)php-php>setAttributephp(php'xmlnsphp:itunesphp'php,
php php php php php php php php php php php php php'httpphp:php/php/wwwphp.itunesphp.comphp/dtdsphp/podcastphp-php1php.php0php.dtdphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp authors
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
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp itunesphp block
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
php php php php php php*php Setphp feedphp categories
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setCategoriesphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$catsphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesCategoriesphp(php)php;
php php php php php php php php ifphp php(php!php$catsphp php|php|php emptyphp(php$catsphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$catsphp asphp php$keyphp=php>php$catphp)php php{
php php php php php php php php php php php php ifphp php(php!isphp_arrayphp(php$catphp)php)php php{
php php php php php php php php php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:categoryphp'php)php;
php php php php php php php php php php php php php php php php php$elphp-php>setAttributephp(php'textphp'php,php php$catphp)php;
php php php php php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:categoryphp'php)php;
php php php php php php php php php php php php php php php php php$elphp-php>setAttributephp(php'textphp'php,php php$keyphp)php;
php php php php php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$catphp asphp php$subcatphp)php php{
php php php php php php php php php php php php php php php php php php php php php$elphp2php php=php php$domphp-php>createElementphp(php'itunesphp:categoryphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$elphp2php-php>setAttributephp(php'textphp'php,php php$subcatphp)php;
php php php php php php php php php php php php php php php php php php php php php$elphp-php>appendChildphp(php$elphp2php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp imagephp php(iconphp)
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setImagephp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$imagephp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesImagephp(php)php;
php php php php php php php php ifphp php(php!php$imagephp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:imagephp'php)php;
php php php php php php php php php$elphp-php>setAttributephp(php'hrefphp'php,php php$imagephp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp cumulativephp duration
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
php php php php php php*php Setphp feedphp keywords
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
php php php php php php*php Setphp feedphp'sphp newphp URL
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setNewFeedUrlphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$urlphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesNewFeedUrlphp(php)php;
php php php php php php php php ifphp php(php!php$urlphp)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:newphp-feedphp-urlphp'php)php;
php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$urlphp)php;
php php php php php php php php php$elphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp owners
php php php php php php*
php php php php php php*php php@paramphp php DOMDocumentphp php$dom
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_setOwnersphp(DOMDocumentphp php$domphp,php DOMElementphp php$rootphp)
php php php php php{
php php php php php php php php php$ownersphp php=php php$thisphp-php>getDataContainerphp(php)php-php>getItunesOwnersphp(php)php;
php php php php php php php php ifphp php(php!php$ownersphp php|php|php emptyphp(php$ownersphp)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$ownersphp asphp php$ownerphp)php php{
php php php php php php php php php php php php php$elphp php=php php$domphp-php>createElementphp(php'itunesphp:ownerphp'php)php;
php php php php php php php php php php php php php$namephp php=php php$domphp-php>createElementphp(php'itunesphp:namephp'php)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$ownerphp[php'namephp'php]php)php;
php php php php php php php php php php php php php$namephp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$emailphp php=php php$domphp-php>createElementphp(php'itunesphp:emailphp'php)php;
php php php php php php php php php php php php php$textphp php=php php$domphp-php>createTextNodephp(php$ownerphp[php'emailphp'php]php)php;
php php php php php php php php php php php php php$emailphp-php>appendChildphp(php$textphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$elphp)php;
php php php php php php php php php php php php php$elphp-php>appendChildphp(php$namephp)php;
php php php php php php php php php php php php php$elphp-php>appendChildphp(php$emailphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_calledphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp feedphp subtitle
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
php php php php php php*php Setphp feedphp summary
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
