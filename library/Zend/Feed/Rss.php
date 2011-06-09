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
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Rssphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Entryphp_Rss
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Entryphp/Rssphp.phpphp'php;


php/php*php*
php php*php RSSphp channelphp class
php php*
php php*php Thephp Zendphp_Feedphp_Rssphp classphp isphp aphp concretephp subclassphp of
php php*php Zendphp_Feedphp_Abstractphp meantphp forphp representingphp RSSphp channelsphp.php Itphp doesphp not
php php*php addphp anyphp methodsphp tophp itsphp parentphp,php justphp providesphp aphp classnamephp tophp check
php php*php againstphp withphp thephp instanceofphp operatorphp,php andphp expectsphp tophp bephp handling
php php*php RSSphp-formattedphp dataphp insteadphp ofphp Atomphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Rssphp extendsphp Zendphp_Feedphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Thephp classnamephp forphp individualphp channelphp elementsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_entryClassNamephp php=php php'Zendphp_Feedphp_Entryphp_Rssphp'php;

php php php php php/php*php*
php php php php php php*php Thephp elementphp namephp forphp individualphp channelphp elementsphp php(RSSphp php<itemphp>sphp)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_entryElementNamephp php=php php'itemphp'php;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp namespacephp forphp RSSphp channelsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultNamespacephp php=php php'rssphp'php;

php php php php php/php*php*
php php php php php php*php Overridephp Zendphp_Feedphp_Abstractphp tophp setphp upphp thephp php$php_elementphp andphp php$php_entriesphp aliasesphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_wakeupphp(php)php;

php php php php php php php php php/php/php Findphp thephp basephp channelphp elementphp andphp createphp anphp aliasphp tophp itphp.
php php php php php php php php php$rdfTagsphp php=php php$thisphp-php>php_elementphp-php>getElementsByTagNameNSphp(php'httpphp:php/php/wwwphp.wphp3php.orgphp/php1php9php9php9php/php0php2php/php2php2php-rdfphp-syntaxphp-nsphp#php'php,php php'RDFphp'php)php;
php php php php php php php php ifphp php(php$rdfTagsphp-php>lengthphp php!php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$rdfTagsphp-php>itemphp(php0php)php;
php php php php php php php php php}php elsephp php php{
php php php php php php php php php php php php php$thisphp-php>php_elementphp php=php php$thisphp-php>php_elementphp-php>getElementsByTagNamephp(php'channelphp'php)php-php>itemphp(php0php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!php$thisphp-php>php_elementphp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Nophp rootphp php<channelphp>php elementphp foundphp,php cannotphp parsephp channelphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Findphp thephp entriesphp andphp savephp aphp pointerphp tophp themphp forphp speedphp and
php php php php php php php php php/php/php simplicityphp.
php php php php php php php php php$thisphp-php>php_buildEntryCachephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp accessingphp somephp individualphp elementsphp ofphp thephp channelphp easierphp.
php php php php php php*
php php php php php php*php Specialphp accessorsphp php'itemphp'php andphp php'itemsphp'php arephp providedphp sophp thatphp if
php php php php php php*php youphp wishphp tophp iteratephp overphp anphp RSSphp channelphp'sphp itemsphp,php youphp canphp dophp so
php php php php php php*php usingphp foreachphp php(php$channelphp-php>itemsphp asphp php$itemphp)php orphp foreach
php php php php php php*php php(php$channelphp-php>itemphp asphp php$itemphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Thephp propertyphp tophp accessphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$varphp)
php php php php php{
php php php php php php php php switchphp php(php$varphp)php php{
php php php php php php php php php php php php casephp php'itemphp'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp thephp nextphp case
php php php php php php php php php php php php casephp php'itemsphp'php:
php php php php php php php php php php php php php php php php returnphp php$thisphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp parentphp:php:php_php_getphp(php$varphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp thephp headerphp ofphp thephp feedphp whenphp workingphp inphp writephp mode
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$arrayphp thephp dataphp tophp use
php php php php php php*php php@returnphp DOMElementphp rootphp node
php php php php php php*php/
php php php php protectedphp functionphp php_mapFeedHeadersphp(php$arrayphp)
php php php php php{
php php php php php php php php php$channelphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'channelphp'php)php;

php php php php php php php php php$titlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php$titlephp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$arrayphp-php>titlephp)php)php;
php php php php php php php php php$channelphp-php>appendChildphp(php$titlephp)php;

php php php php php php php php php$linkphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php,php php$arrayphp-php>linkphp)php;
php php php php php php php php php$channelphp-php>appendChildphp(php$linkphp)php;

php php php php php php php php php$descphp php=php issetphp(php$arrayphp-php>descriptionphp)php php?php php$arrayphp-php>descriptionphp php:php php'php'php;
php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'descriptionphp'php)php;
php php php php php php php php php$descriptionphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$descphp)php)php;
php php php php php php php php php$channelphp-php>appendChildphp(php$descriptionphp)php;

php php php php php php php php php$pubdatephp php=php issetphp(php$arrayphp-php>lastUpdatephp)php php?php php$arrayphp-php>lastUpdatephp php:php timephp(php)php;
php php php php php php php php php$pubdatephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'pubDatephp'php,php datephp(DATEphp_RSSphp,php php$pubdatephp)php)php;
php php php php php php php php php$channelphp-php>appendChildphp(php$pubdatephp)php;

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>publishedphp)php)php php{
php php php php php php php php php php php php php$lastBuildDatephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'lastBuildDatephp'php,php datephp(DATEphp_RSSphp,php php$arrayphp-php>publishedphp)php)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$lastBuildDatephp)php;
php php php php php php php php php}

php php php php php php php php php$editorphp php=php php'php'php;
php php php php php php php php ifphp php(php!emptyphp(php$arrayphp-php>emailphp)php)php php{
php php php php php php php php php php php php php$editorphp php.php=php php$arrayphp-php>emailphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$arrayphp-php>authorphp)php)php php{
php php php php php php php php php php php php php$editorphp php.php=php php'php php(php'php php.php php$arrayphp-php>authorphp php.php php'php)php'php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$editorphp)php)php php{
php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'managingEditorphp'php,php ltrimphp(php$editorphp)php)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>webmasterphp)php)php php{
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'webMasterphp'php,php php$arrayphp-php>webmasterphp)php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$arrayphp-php>copyrightphp)php)php php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'copyrightphp'php,php php$arrayphp-php>copyrightphp)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$copyrightphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>categoryphp)php)php php{
php php php php php php php php php php php php php$categoryphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'categoryphp'php,php php$arrayphp-php>categoryphp)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$categoryphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$arrayphp-php>imagephp)php)php php{
php php php php php php php php php php php php php$imagephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'imagephp'php)php;
php php php php php php php php php php php php php$urlphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'urlphp'php,php php$arrayphp-php>imagephp)php;
php php php php php php php php php php php php php$imagephp-php>appendChildphp(php$urlphp)php;
php php php php php php php php php php php php php$imagetitlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php php php php php$imagetitlephp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$arrayphp-php>titlephp)php)php;
php php php php php php php php php php php php php$imagephp-php>appendChildphp(php$imagetitlephp)php;
php php php php php php php php php php php php php$imagelinkphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php,php php$arrayphp-php>linkphp)php;
php php php php php php php php php php php php php$imagephp-php>appendChildphp(php$imagelinkphp)php;

php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$imagephp)php;
php php php php php php php php php}

php php php php php php php php php$generatorphp php=php php!emptyphp(php$arrayphp-php>generatorphp)php php?php php$arrayphp-php>generatorphp php:php php'Zendphp_Feedphp'php;
php php php php php php php php php$generatorphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'generatorphp'php,php php$generatorphp)php;
php php php php php php php php php$channelphp-php>appendChildphp(php$generatorphp)php;

php php php php php php php php ifphp php(php!emptyphp(php$arrayphp-php>languagephp)php)php php{
php php php php php php php php php php php php php$languagephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'languagephp'php,php php$arrayphp-php>languagephp)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$languagephp)php;
php php php php php php php php php}

php php php php php php php php php$docphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'docsphp'php,php php'httpphp:php/php/blogsphp.lawphp.harvardphp.eduphp/techphp/rssphp'php)php;
php php php php php php php php php$channelphp-php>appendChildphp(php$docphp)php;

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>cloudphp)php)php php{
php php php php php php php php php php php php php$cloudphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'cloudphp'php)php;
php php php php php php php php php php php php php$cloudphp-php>setAttributephp(php'domainphp'php,php php$arrayphp-php>cloudphp[php'uriphp'php]php-php>getHostphp(php)php)php;
php php php php php php php php php php php php php$cloudphp-php>setAttributephp(php'portphp'php,php php$arrayphp-php>cloudphp[php'uriphp'php]php-php>getPortphp(php)php)php;
php php php php php php php php php php php php php$cloudphp-php>setAttributephp(php'pathphp'php,php php$arrayphp-php>cloudphp[php'uriphp'php]php-php>getPathphp(php)php)php;
php php php php php php php php php php php php php$cloudphp-php>setAttributephp(php'registerProcedurephp'php,php php$arrayphp-php>cloudphp[php'procedurephp'php]php)php;
php php php php php php php php php php php php php$cloudphp-php>setAttributephp(php'protocolphp'php,php php$arrayphp-php>cloudphp[php'protocolphp'php]php)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$cloudphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>ttlphp)php)php php{
php php php php php php php php php php php php php$ttlphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'ttlphp'php,php php$arrayphp-php>ttlphp)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$ttlphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>ratingphp)php)php php{
php php php php php php php php php php php php php$ratingphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'ratingphp'php,php php$arrayphp-php>ratingphp)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$ratingphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>textInputphp)php)php php{
php php php php php php php php php php php php php$textinputphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'textInputphp'php)php;
php php php php php php php php php php php php php$textinputphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php,php php$arrayphp-php>textInputphp[php'titlephp'php]php)php)php;
php php php php php php php php php php php php php$textinputphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'descriptionphp'php,php php$arrayphp-php>textInputphp[php'descriptionphp'php]php)php)php;
php php php php php php php php php php php php php$textinputphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'namephp'php,php php$arrayphp-php>textInputphp[php'namephp'php]php)php)php;
php php php php php php php php php php php php php$textinputphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php,php php$arrayphp-php>textInputphp[php'linkphp'php]php)php)php;
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$textinputphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>skipHoursphp)php)php php{
php php php php php php php php php php php php php$skipHoursphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'skipHoursphp'php)php;
php php php php php php php php php php php php foreachphp php(php$arrayphp-php>skipHoursphp asphp php$hourphp)php php{
php php php php php php php php php php php php php php php php php$skipHoursphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'hourphp'php,php php$hourphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$skipHoursphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>skipDaysphp)php)php php{
php php php php php php php php php php php php php$skipDaysphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'skipDaysphp'php)php;
php php php php php php php php php php php php foreachphp php(php$arrayphp-php>skipDaysphp asphp php$dayphp)php php{
php php php php php php php php php php php php php php php php php$skipDaysphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createElementphp(php'dayphp'php,php php$dayphp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$channelphp-php>appendChildphp(php$skipDaysphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_buildiTunesphp(php$channelphp,php php$arrayphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$channelphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp thephp iTunesphp extensionsphp tophp aphp rootphp node
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$root
php php php php php php*php php@paramphp php arrayphp php$array
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_buildiTunesphp(DOMElementphp php$rootphp,php php$arrayphp)
php php php php php{
php php php php php php php php php/php*php authorphp nodephp php*php/
php php php php php php php php php$authorphp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>authorphp)php)php php{
php php php php php php php php php php php php php$authorphp php=php php$arrayphp-php>itunesphp-php>authorphp;
php php php php php php php php php}php elseifphp php(issetphp(php$arrayphp-php>authorphp)php)php php{
php php php php php php php php php php php php php$authorphp php=php php$arrayphp-php>authorphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$authorphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:authorphp'php,php php$authorphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}

php php php php php php php php php/php*php ownerphp nodephp php*php/
php php php php php php php php php$authorphp php=php php'php'php;
php php php php php php php php php$emailphp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>ownerphp)php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>ownerphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$authorphp php=php php$arrayphp-php>itunesphp-php>ownerphp[php'namephp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>ownerphp[php'emailphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$emailphp php=php php$arrayphp-php>itunesphp-php>ownerphp[php'emailphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$authorphp)php php&php&php issetphp(php$arrayphp-php>authorphp)php)php php{
php php php php php php php php php php php php php$authorphp php=php php$arrayphp-php>authorphp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$emailphp)php php&php&php issetphp(php$arrayphp-php>emailphp)php)php php{
php php php php php php php php php php php php php$emailphp php=php php$arrayphp-php>emailphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$authorphp)php php|php|php php!emptyphp(php$emailphp)php)php php{
php php php php php php php php php php php php php$ownerphp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:ownerphp'php)php;
php php php php php php php php php php php php ifphp php(php!emptyphp(php$authorphp)php)php php{
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:namephp'php,php php$authorphp)php;
php php php php php php php php php php php php php php php php php$ownerphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php!emptyphp(php$emailphp)php)php php{
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:emailphp'php,php php$emailphp)php;
php php php php php php php php php php php php php php php php php$ownerphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$ownerphp)php;
php php php php php php php php php}
php php php php php php php php php$imagephp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>imagephp)php)php php{
php php php php php php php php php php php php php$imagephp php=php php$arrayphp-php>itunesphp-php>imagephp;
php php php php php php php php php}php elseifphp php(issetphp(php$arrayphp-php>imagephp)php)php php{
php php php php php php php php php php php php php$imagephp php=php php$arrayphp-php>imagephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$imagephp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:imagephp'php)php;
php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'hrefphp'php,php php$imagephp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php php$subtitlephp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>subtitlephp)php)php php{
php php php php php php php php php php php php php$subtitlephp php=php php$arrayphp-php>itunesphp-php>subtitlephp;
php php php php php php php php php}php elseifphp php(issetphp(php$arrayphp-php>descriptionphp)php)php php{
php php php php php php php php php php php php php$subtitlephp php=php php$arrayphp-php>descriptionphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$subtitlephp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:subtitlephp'php,php php$subtitlephp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php php$summaryphp php=php php'php'php;
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>summaryphp)php)php php{
php php php php php php php php php php php php php$summaryphp php=php php$arrayphp-php>itunesphp-php>summaryphp;
php php php php php php php php php}php elseifphp php(issetphp(php$arrayphp-php>descriptionphp)php)php php{
php php php php php php php php php php php php php$summaryphp php=php php$arrayphp-php>descriptionphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$summaryphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:summaryphp'php,php php$summaryphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>blockphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:blockphp'php,php php$arrayphp-php>itunesphp-php>blockphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>explicitphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:explicitphp'php,php php$arrayphp-php>itunesphp-php>explicitphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>keywordsphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:keywordsphp'php,php php$arrayphp-php>itunesphp-php>keywordsphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>newphp_feedphp_urlphp)php)php php{
php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:newphp-feedphp-urlphp'php,php php$arrayphp-php>itunesphp-php>newphp_feedphp_urlphp)php;
php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>itunesphp-php>categoryphp)php)php php{
php php php php php php php php php php php php foreachphp php(php$arrayphp-php>itunesphp-php>categoryphp asphp php$iphp php=php>php php$categoryphp)php php{
php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:categoryphp'php)php;
php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'textphp'php,php php$categoryphp[php'mainphp'php]php)php;
php php php php php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php$addphp_endphp_categoryphp php=php falsephp;
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$categoryphp[php'subphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$addphp_endphp_categoryphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:categoryphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'textphp'php,php php$categoryphp[php'subphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(php$iphp php>php php0php php|php|php php$addphp_endphp_categoryphp)php php{
php php php php php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wwwphp.itunesphp.comphp/DTDsphp/Podcastphp-php1php.php0php.dtdphp'php,php php'itunesphp:categoryphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp thephp entriesphp ofphp thephp feedphp whenphp workingphp inphp writephp mode
php php php php php php*
php php php php php php*php Thephp followingphp nodesphp arephp constructedphp forphp eachphp feedphp entry
php php php php php php*php php<itemphp>
php php php php php php*php php php php php<titlephp>entryphp title<php/titlephp>
php php php php php php*php php php php php<linkphp>urlphp tophp feedphp entry<php/linkphp>
php php php php php php*php php php php php<guidphp>urlphp tophp feedphp entry<php/guidphp>
php php php php php php*php php php php php<descriptionphp>shortphp text<php/descriptionphp>
php php php php php php*php php php php php<contentphp:encodedphp>longphp versionphp,php canphp containphp html<php/contentphp:encodedphp>
php php php php php php*php <php/itemphp>
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$rootphp thephp rootphp nodephp tophp use
php php php php php php*php php@paramphp php arrayphp php$arrayphp thephp dataphp tophp use
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_mapFeedEntriesphp(DOMElementphp php$rootphp,php php$arrayphp)
php php php php php{
php php php php php php php php Zendphp_Feedphp:php:registerNamespacephp(php'contentphp'php,php php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/contentphp/php'php)php;

php php php php php php php php foreachphp php(php$arrayphp asphp php$dataentryphp)php php{
php php php php php php php php php php php php php$itemphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'itemphp'php)php;

php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php php php php php$titlephp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$dataentryphp-php>titlephp)php)php;
php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$titlephp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>authorphp)php)php php{
php php php php php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'authorphp'php,php php$dataentryphp-php>authorphp)php;
php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php,php php$dataentryphp-php>linkphp)php;
php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$linkphp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>guidphp)php)php php{
php php php php php php php php php php php php php php php php php$guidphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'guidphp'php,php php$dataentryphp-php>guidphp)php;
php php php php php php php php php php php php php php php php ifphp php(php!Zendphp_Uriphp:php:checkphp(php$dataentryphp-php>guidphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$guidphp-php>setAttributephp(php'isPermaLinkphp'php,php php'falsephp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$guidphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$descriptionphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'descriptionphp'php)php;
php php php php php php php php php php php php php$descriptionphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$dataentryphp-php>descriptionphp)php)php;
php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$descriptionphp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>contentphp)php)php php{
php php php php php php php php php php php php php php php php php$contentphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'contentphp:encodedphp'php)php;
php php php php php php php php php php php php php php php php php$contentphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$dataentryphp-php>contentphp)php)php;
php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$contentphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$pubdatephp php=php issetphp(php$dataentryphp-php>lastUpdatephp)php php?php php$dataentryphp-php>lastUpdatephp php:php timephp(php)php;
php php php php php php php php php php php php php$pubdatephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'pubDatephp'php,php datephp(DATEphp_RSSphp,php php$pubdatephp)php)php;
php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$pubdatephp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>categoryphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$dataentryphp-php>categoryphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'categoryphp'php,php php$categoryphp[php'termphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$categoryphp[php'schemephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'domainphp'php,php php$categoryphp[php'schemephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>sourcephp)php)php php{
php php php php php php php php php php php php php php php php php$sourcephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'sourcephp'php,php php$dataentryphp-php>sourcephp[php'titlephp'php]php)php;
php php php php php php php php php php php php php php php php php$sourcephp-php>setAttributephp(php'urlphp'php,php php$dataentryphp-php>sourcephp[php'urlphp'php]php)php;
php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$sourcephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>commentsphp)php)php php{
php php php php php php php php php php php php php php php php php$commentsphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'commentsphp'php,php php$dataentryphp-php>commentsphp)php;
php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$commentsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>commentRssphp)php)php php{
php php php php php php php php php php php php php php php php php$commentsphp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wellformedwebphp.orgphp/CommentAPIphp/php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'wfwphp:commentRssphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataentryphp-php>commentRssphp)php;
php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$commentsphp)php;
php php php php php php php php php php php php php}


php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>enclosurephp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$dataentryphp-php>enclosurephp asphp php$enclosurephp)php php{
php php php php php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'enclosurephp'php)php;
php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'urlphp'php,php php$enclosurephp[php'urlphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$enclosurephp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'typephp'php,php php$enclosurephp[php'typephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$enclosurephp[php'lengthphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'lengthphp'php,php php$enclosurephp[php'lengthphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$itemphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$itemphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp Zendphp_Feedphp_Elementphp tophp includephp php<rssphp>php rootphp node
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php/php/php Returnphp aphp completephp documentphp includingphp XMLphp prologuephp.
php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>versionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>actualEncodingphp)php;
php php php php php php php php php$rootphp php=php php$docphp-php>createElementphp(php'rssphp'php)php;

php php php php php php php php php/php/php Usephp rssphp versionphp php2php.php0
php php php php php php php php php$rootphp-php>setAttributephp(php'versionphp'php,php php'php2php.php0php'php)php;

php php php php php php php php php/php/php Contentphp namespace
php php php php php php php php php$rootphp-php>setAttributeNSphp(php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php0php/xmlnsphp/php'php,php php'xmlnsphp:contentphp'php,php php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/contentphp/php'php)php;
php php php php php php php php php$rootphp-php>appendChildphp(php$docphp-php>importNodephp(php$thisphp-php>php_elementphp,php truephp)php)php;

php php php php php php php php php/php/php Appendphp rootphp node
php php php php php php php php php$docphp-php>appendChildphp(php$rootphp)php;

php php php php php php php php php/php/php Formatphp output
php php php php php php php php php$docphp-php>formatOutputphp php=php truephp;

php php php php php php php php returnphp php$docphp-php>saveXMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendphp feedphp tophp aphp httpphp clientphp withphp thephp correctphp header
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exceptionphp ifphp headersphp havephp alreadyphp beenphp sent
php php php php php php*php/
php php php php publicphp functionphp sendphp(php)
php php php php php{
php php php php php php php php ifphp php(headersphp_sentphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Cannotphp sendphp RSSphp becausephp headersphp havephp alreadyphp beenphp sentphp.php'php)php;
php php php php php php php php php}

php php php php php php php php headerphp(php'Contentphp-Typephp:php applicationphp/rssphp+xmlphp;php charsetphp=php'php php.php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>actualEncodingphp)php;

php php php php php php php php echophp php$thisphp-php>saveXmlphp(php)php;
php php php php php}

php}
