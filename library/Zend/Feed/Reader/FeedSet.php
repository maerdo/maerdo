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
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FeedSetphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Uri
php php*php/
requirephp_oncephp php'Zendphp/Uriphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_FeedSetphp extendsphp ArrayObject
php{

php php php php publicphp php$rssphp php=php nullphp;

php php php php publicphp php$rdfphp php=php nullphp;

php php php php publicphp php$atomphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Importphp aphp DOMNodeListphp fromphp anyphp documentphp containingphp aphp setphp ofphp links
php php php php php php*php forphp alternatephp versionsphp ofphp aphp documentphp,php whichphp willphp normallyphp referphp to
php php php php php php*php RSSphp/RDFphp/Atomphp feedsphp forphp thephp currentphp documentphp.
php php php php php php*
php php php php php php*php Allphp suchphp linksphp arephp storedphp internallyphp,php howeverphp thephp firstphp instancephp of
php php php php php php*php eachphp RSSphp,php RDFphp orphp Atomphp typephp hasphp itsphp URIphp storedphp asphp aphp publicphp property
php php php php php php*php asphp aphp shortcutphp wherephp thephp usephp casephp isphp simplyphp tophp getphp aphp quickphp feedphp refphp.
php php php php php php*
php php php php php php*php Notephp thatphp feedsphp arephp notphp loadedphp atphp thisphp pointphp,php butphp willphp bephp lazy
php php php php php php*php loadedphp automaticallyphp whenphp eachphp linksphp php'feedphp'php arrayphp keyphp isphp accessedphp.
php php php php php php*
php php php php php php*php php@paramphp DOMNodeListphp php$links
php php php php php php*php php@paramphp stringphp php$uri
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addLinksphp(DOMNodeListphp php$linksphp,php php$uriphp)
php php php php php{
php php php php php php php php foreachphp php(php$linksphp asphp php$linkphp)php php{
php php php php php php php php php php php php ifphp php(strtolowerphp(php$linkphp-php>getAttributephp(php'relphp'php)php)php php!php=php=php php'alternatephp'
php php php php php php php php php php php php php php php php php|php|php php!php$linkphp-php>getAttributephp(php'typephp'php)php php|php|php php!php$linkphp-php>getAttributephp(php'hrefphp'php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>rssphp)php php&php&php php$linkphp-php>getAttributephp(php'typephp'php)php php=php=php php'applicationphp/rssphp+xmlphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>rssphp php=php php$thisphp-php>php_absolutiseUriphp(trimphp(php$linkphp-php>getAttributephp(php'hrefphp'php)php)php,php php$uriphp)php;
php php php php php php php php php php php php php}php elseifphp(php!issetphp(php$thisphp-php>atomphp)php php&php&php php$linkphp-php>getAttributephp(php'typephp'php)php php=php=php php'applicationphp/atomphp+xmlphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>atomphp php=php php$thisphp-php>php_absolutiseUriphp(trimphp(php$linkphp-php>getAttributephp(php'hrefphp'php)php)php,php php$uriphp)php;
php php php php php php php php php php php php php}php elseifphp(php!issetphp(php$thisphp-php>rdfphp)php php&php&php php$linkphp-php>getAttributephp(php'typephp'php)php php=php=php php'applicationphp/rdfphp+xmlphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>rdfphp php=php php$thisphp-php>php_absolutiseUriphp(trimphp(php$linkphp-php>getAttributephp(php'hrefphp'php)php)php,php php$uriphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp[php]php php=php newphp selfphp(arrayphp(
php php php php php php php php php php php php php php php php php'relphp'php php=php>php php'alternatephp'php,
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php$linkphp-php>getAttributephp(php'typephp'php)php,
php php php php php php php php php php php php php php php php php'hrefphp'php php=php>php php$thisphp-php>php_absolutiseUriphp(trimphp(php$linkphp-php>getAttributephp(php'hrefphp'php)php)php,php php$uriphp)php,
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php php Attemptphp tophp turnphp aphp relativephp URIphp intophp anphp absolutephp URI
php php php php php php*php/
php php php php protectedphp functionphp php_absolutiseUriphp(php$linkphp,php php$uriphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php ifphp php(php$uriphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$uriphp php=php Zendphp_Uriphp:php:factoryphp(php$uriphp)php;

php php php php php php php php php php php php php php php php ifphp php(php$linkphp[php0php]php php!php=php=php php'php/php'php)php php{
php php php php php php php php php php php php php php php php php php php php php$linkphp php=php php$uriphp-php>getPathphp(php)php php.php php'php/php'php php.php php$linkphp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$linkphp php=php php$uriphp-php>getSchemephp(php)php php.php php'php:php/php/php'php php.php php$uriphp-php>getHostphp(php)php php.php php'php/php'php php.php php$thisphp-php>php_canonicalizePathphp(php$linkphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$linkphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$linkphp php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$linkphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php Canonicalizephp relativephp path
php php php php php php*php/
php php php php protectedphp functionphp php_canonicalizePathphp(php$pathphp)
php php php php php{
php php php php php php php php php$partsphp php=php arrayphp_filterphp(explodephp(php'php/php'php,php php$pathphp)php)php;
php php php php php php php php php$absolutesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$partsphp asphp php$partphp)php php{
php php php php php php php php php php php php ifphp php(php'php.php'php php=php=php php$partphp)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php'php.php.php'php php=php=php php$partphp)php php{
php php php php php php php php php php php php php php php php arrayphp_popphp(php$absolutesphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$absolutesphp[php]php php=php php$partphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp implodephp(php'php/php'php,php php$absolutesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Supportsphp lazyphp loadingphp ofphp feedsphp usingphp Zendphp_Feedphp_Readerphp:php:importphp(php)php but
php php php php php php*php delegatesphp anyphp otherphp operationsphp tophp thephp parentphp classphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$offset
php php php php php php*php php@returnphp mixed
php php php php php php*php php@usesphp Zendphp_Feedphp_Reader
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(php$offsetphp php=php=php php'feedphp'php php&php&php php!php$thisphp-php>offsetExistsphp(php'feedphp'php)php)php php{
php php php php php php php php php php php php ifphp php(php!php$thisphp-php>offsetExistsphp(php'hrefphp'php)php)php php{
php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$feedphp php=php Zendphp_Feedphp_Readerphp:php:importphp(php$thisphp-php>offsetGetphp(php'hrefphp'php)php)php;
php php php php php php php php php php php php php$thisphp-php>offsetSetphp(php'feedphp'php,php php$feedphp)php;
php php php php php php php php php php php php returnphp php$feedphp;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:offsetGetphp(php$offsetphp)php;
php php php php php}

php}
