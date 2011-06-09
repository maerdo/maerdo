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
php php*php php@versionphp php php php php$Idphp:php Atomphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Feedphp_Abstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Abstractphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Entryphp_Atom
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Entryphp/Atomphp.phpphp'php;


php/php*php*
php php*php Atomphp feedphp class
php php*
php php*php Thephp Zendphp_Feedphp_Atomphp classphp isphp aphp concretephp subclassphp ofphp thephp general
php php*php Zendphp_Feedphp_Abstractphp classphp,php tailoredphp forphp representingphp anphp Atom
php php*php feedphp.php Itphp sharesphp allphp ofphp thephp samephp methodsphp withphp itsphp abstract
php php*php parentphp.php Thephp distinctionphp isphp madephp inphp thephp formatphp ofphp dataphp that
php php*php Zendphp_Feedphp_Atomphp expectsphp,php andphp asphp aphp furtherphp pointerphp forphp usersphp asphp to
php php*php whatphp kindphp ofphp feedphp objectphp theyphp havephp beenphp passedphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feed
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Atomphp extendsphp Zendphp_Feedphp_Abstract
php{

php php php php php/php*php*
php php php php php php*php Thephp classnamephp forphp individualphp feedphp elementsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_entryClassNamephp php=php php'Zendphp_Feedphp_Entryphp_Atomphp'php;

php php php php php/php*php*
php php php php php php*php Thephp elementphp namephp forphp individualphp feedphp elementsphp php(Atomphp php<entryphp>
php php php php php php*php elementsphp)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_entryElementNamephp php=php php'entryphp'php;

php php php php php/php*php*
php php php php php php*php Thephp defaultphp namespacephp forphp Atomphp feedsphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_defaultNamespacephp php=php php'atomphp'php;


php php php php php/php*php*
php php php php php php*php Overridephp Zendphp_Feedphp_Abstractphp tophp setphp upphp thephp php$php_elementphp andphp php$php_entriesphp aliasesphp.
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Feedphp_Exception
php php php php php php*php/
php php php php publicphp functionphp php_php_wakeupphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_wakeupphp(php)php;

php php php php php php php php php/php/php Findphp thephp basephp feedphp elementphp andphp createphp anphp aliasphp tophp itphp.
php php php php php php php php php$elementphp php=php php$thisphp-php>php_elementphp-php>getElementsByTagNamephp(php'feedphp'php)php-php>itemphp(php0php)php;
php php php php php php php php ifphp php(php!php$elementphp)php php{
php php php php php php php php php php php php php/php/php Tryphp tophp findphp aphp singlephp php<entryphp>php insteadphp.
php php php php php php php php php php php php php$elementphp php=php php$thisphp-php>php_elementphp-php>getElementsByTagNamephp(php$thisphp-php>php_entryElementNamephp)php-php>itemphp(php0php)php;
php php php php php php php php php php php php ifphp php(php!php$elementphp)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Feedphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Feedphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Nophp rootphp php<feedphp>php orphp <php'php php.php php$thisphp-php>php_entryElementName
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php>php elementphp foundphp,php cannotphp parsephp feedphp.php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php$thisphp-php>php_elementphp-php>versionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_elementphp-php>actualEncodingphp)php;
php php php php php php php php php php php php php$feedphp php=php php$docphp-php>appendChildphp(php$docphp-php>createElementphp(php'feedphp'php)php)php;
php php php php php php php php php php php php php$feedphp-php>appendChildphp(php$docphp-php>importNodephp(php$elementphp,php truephp)php)php;
php php php php php php php php php php php php php$elementphp php=php php$feedphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_elementphp php=php php$elementphp;

php php php php php php php php php/php/php Findphp thephp entriesphp andphp savephp aphp pointerphp tophp themphp forphp speedphp and
php php php php php php php php php/php/php simplicityphp.
php php php php php php php php php$thisphp-php>php_buildEntryCachephp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Easyphp accessphp tophp php<linkphp>php tagsphp keyedphp byphp php"relphp"php attributesphp.
php php php php php php*
php php php php php php*php Ifphp php$eltphp-php>linkphp(php)php isphp calledphp withphp nophp argumentsphp,php wephp willphp attemptphp to
php php php php php php*php returnphp thephp valuephp ofphp thephp php<linkphp>php tagphp(sphp)php likephp allphp other
php php php php php php*php methodphp-syntaxphp attributephp accessphp.php Ifphp anphp argumentphp isphp passedphp to
php php php php php php*php linkphp(php)php,php howeverphp,php thenphp wephp willphp returnphp thephp php"hrefphp"php valuephp ofphp the
php php php php php php*php firstphp php<linkphp>php tagphp thatphp hasphp aphp php"relphp"php attributephp matchingphp php$relphp:
php php php php php php*
php php php php php php*php php$eltphp-php>linkphp(php)php:php returnsphp thephp valuephp ofphp thephp linkphp tagphp.
php php php php php php*php php$eltphp-php>linkphp(php'selfphp'php)php:php returnsphp thephp hrefphp fromphp thephp firstphp php<linkphp relphp=php"selfphp"php>php inphp thephp entryphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$relphp Thephp php"relphp"php attributephp tophp lookphp forphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp linkphp(php$relphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$relphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp parentphp:php:php_php_callphp(php'linkphp'php,php nullphp)php;
php php php php php php php php php}

php php php php php php php php php/php/php indexphp linkphp tagsphp byphp theirphp php"relphp"php attributephp.
php php php php php php php php php$linksphp php=php parentphp:php:php_php_getphp(php'linkphp'php)php;
php php php php php php php php ifphp php(php!isphp_arrayphp(php$linksphp)php)php php{
php php php php php php php php php php php php ifphp php(php$linksphp instanceofphp Zendphp_Feedphp_Elementphp)php php{
php php php php php php php php php php php php php php php php php$linksphp php=php arrayphp(php$linksphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp php$linksphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$linksphp asphp php$linkphp)php php{
php php php php php php php php php php php php ifphp php(emptyphp(php$linkphp[php'relphp'php]php)php)php php{
php php php php php php php php php php php php php php php php continuephp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$relphp php=php=php php$linkphp[php'relphp'php]php)php php{
php php php php php php php php php php php php php php php php returnphp php$linkphp[php'hrefphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Makephp accessingphp somephp individualphp elementsphp ofphp thephp feedphp easierphp.
php php php php php php*
php php php php php php*php Specialphp accessorsphp php'entryphp'php andphp php'entriesphp'php arephp providedphp sophp thatphp if
php php php php php php*php youphp wishphp tophp iteratephp overphp anphp Atomphp feedphp'sphp entriesphp,php youphp canphp dophp so
php php php php php php*php usingphp foreachphp php(php$feedphp-php>entriesphp asphp php$entryphp)php orphp foreach
php php php php php php*php php(php$feedphp-php>entryphp asphp php$entryphp)php.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$varphp Thephp propertyphp tophp accessphp.
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp php_php_getphp(php$varphp)
php php php php php{
php php php php php php php php switchphp php(php$varphp)php php{
php php php php php php php php php php php php casephp php'entryphp'php:
php php php php php php php php php php php php php php php php php/php/php fallphp throughphp tophp thephp nextphp case
php php php php php php php php php php php php casephp php'entriesphp'php:
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
php php php php php php php php php$feedphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'feedphp'php)php;
php php php php php php php php php$feedphp-php>setAttributephp(php'xmlnsphp'php,php php'httpphp:php/php/wwwphp.wphp3php.orgphp/php2php0php0php5php/Atomphp'php)php;

php php php php php php php php php$idphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'idphp'php,php php$arrayphp-php>linkphp)php;
php php php php php php php php php$feedphp-php>appendChildphp(php$idphp)php;

php php php php php php php php php$titlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php$titlephp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$arrayphp-php>titlephp)php)php;
php php php php php php php php php$feedphp-php>appendChildphp(php$titlephp)php;

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>authorphp)php)php php{
php php php php php php php php php php php php php$authorphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'authorphp'php)php;
php php php php php php php php php php php php php$namephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'namephp'php,php php$arrayphp-php>authorphp)php;
php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$namephp)php;
php php php php php php php php php php php php ifphp php(issetphp(php$arrayphp-php>emailphp)php)php php{
php php php php php php php php php php php php php php php php php$emailphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'emailphp'php,php php$arrayphp-php>emailphp)php;
php php php php php php php php php php php php php php php php php$authorphp-php>appendChildphp(php$emailphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$feedphp-php>appendChildphp(php$authorphp)php;
php php php php php php php php php}

php php php php php php php php php$updatedphp php=php issetphp(php$arrayphp-php>lastUpdatephp)php php?php php$arrayphp-php>lastUpdatephp php:php timephp(php)php;
php php php php php php php php php$updatedphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'updatedphp'php,php datephp(DATEphp_ATOMphp,php php$updatedphp)php)php;
php php php php php php php php php$feedphp-php>appendChildphp(php$updatedphp)php;

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>publishedphp)php)php php{
php php php php php php php php php php php php php$publishedphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'publishedphp'php,php datephp(DATEphp_ATOMphp,php php$arrayphp-php>publishedphp)php)php;
php php php php php php php php php php php php php$feedphp-php>appendChildphp(php$publishedphp)php;
php php php php php php php php php}

php php php php php php php php php$linkphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php$linkphp-php>setAttributephp(php'relphp'php,php php'selfphp'php)php;
php php php php php php php php php$linkphp-php>setAttributephp(php'hrefphp'php,php php$arrayphp-php>linkphp)php;
php php php php php php php php ifphp php(issetphp(php$arrayphp-php>languagephp)php)php php{
php php php php php php php php php php php php php$linkphp-php>setAttributephp(php'hreflangphp'php,php php$arrayphp-php>languagephp)php;
php php php php php php php php php}
php php php php php php php php php$feedphp-php>appendChildphp(php$linkphp)php;

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>descriptionphp)php)php php{
php php php php php php php php php php php php php$subtitlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'subtitlephp'php)php;
php php php php php php php php php php php php php$subtitlephp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$arrayphp-php>descriptionphp)php)php;
php php php php php php php php php php php php php$feedphp-php>appendChildphp(php$subtitlephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>copyrightphp)php)php php{
php php php php php php php php php php php php php$copyrightphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'rightsphp'php,php php$arrayphp-php>copyrightphp)php;
php php php php php php php php php php php php php$feedphp-php>appendChildphp(php$copyrightphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$arrayphp-php>imagephp)php)php php{
php php php php php php php php php php php php php$imagephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'logophp'php,php php$arrayphp-php>imagephp)php;
php php php php php php php php php php php php php$feedphp-php>appendChildphp(php$imagephp)php;
php php php php php php php php php}

php php php php php php php php php$generatorphp php=php php!emptyphp(php$arrayphp-php>generatorphp)php php?php php$arrayphp-php>generatorphp php:php php'Zendphp_Feedphp'php;
php php php php php php php php php$generatorphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'generatorphp'php,php php$generatorphp)php;
php php php php php php php php php$feedphp-php>appendChildphp(php$generatorphp)php;

php php php php php php php php returnphp php$feedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp thephp entriesphp ofphp thephp feedphp whenphp workingphp inphp writephp mode
php php php php php php*
php php php php php php*php Thephp followingphp nodesphp arephp constructedphp forphp eachphp feedphp entry
php php php php php php*php php<entryphp>
php php php php php php*php php php php php<idphp>urlphp tophp feedphp entry<php/idphp>
php php php php php php*php php php php php<titlephp>entryphp title<php/titlephp>
php php php php php php*php php php php php<updatedphp>lastphp update<php/updatedphp>
php php php php php php*php php php php php<linkphp relphp=php"alternatephp"php hrefphp=php"urlphp tophp feedphp entryphp"php php/php>
php php php php php php*php php php php php<summaryphp>shortphp text<php/summaryphp>
php php php php php php*php php php php php<contentphp>longphp versionphp,php canphp containphp html<php/contentphp>
php php php php php php*php <php/entryphp>
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php php php php php php$arrayphp thephp dataphp tophp use
php php php php php php*php php@paramphp php DOMElementphp php$rootphp php thephp rootphp nodephp tophp use
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_mapFeedEntriesphp(DOMElementphp php$rootphp,php php$arrayphp)
php php php php php{
php php php php php php php php foreachphp php(php$arrayphp asphp php$dataentryphp)php php{
php php php php php php php php php php php php php$entryphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'entryphp'php)php;

php php php php php php php php php php php php php$idphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'idphp'php,php issetphp(php$dataentryphp-php>guidphp)php php?php php$dataentryphp-php>guidphp php:php php$dataentryphp-php>linkphp)php;
php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$idphp)php;

php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php)php;
php php php php php php php php php php php php php$titlephp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$dataentryphp-php>titlephp)php)php;
php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$titlephp)php;

php php php php php php php php php php php php php$updatedphp php=php issetphp(php$dataentryphp-php>lastUpdatephp)php php?php php$dataentryphp-php>lastUpdatephp php:php timephp(php)php;
php php php php php php php php php php php php php$updatedphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'updatedphp'php,php datephp(DATEphp_ATOMphp,php php$updatedphp)php)php;
php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$updatedphp)php;

php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php php php php php$linkphp-php>setAttributephp(php'relphp'php,php php'alternatephp'php)php;
php php php php php php php php php php php php php$linkphp-php>setAttributephp(php'hrefphp'php,php php$dataentryphp-php>linkphp)php;
php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$linkphp)php;

php php php php php php php php php php php php php$summaryphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'summaryphp'php)php;
php php php php php php php php php php php php php$summaryphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$dataentryphp-php>descriptionphp)php)php;
php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$summaryphp)php;

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>contentphp)php)php php{
php php php php php php php php php php php php php php php php php$contentphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'contentphp'php)php;
php php php php php php php php php php php php php php php php php$contentphp-php>setAttributephp(php'typephp'php,php php'htmlphp'php)php;
php php php php php php php php php php php php php php php php php$contentphp-php>appendChildphp(php$thisphp-php>php_elementphp-php>createCDATASectionphp(php$dataentryphp-php>contentphp)php)php;
php php php php php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$contentphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>categoryphp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$dataentryphp-php>categoryphp asphp php$categoryphp)php php{
php php php php php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'categoryphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'termphp'php,php php$categoryphp[php'termphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$categoryphp[php'schemephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'schemephp'php,php php$categoryphp[php'schemephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>sourcephp)php)php php{
php php php php php php php php php php php php php php php php php$sourcephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'sourcephp'php)php;
php php php php php php php php php php php php php php php php php$titlephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'titlephp'php,php php$dataentryphp-php>sourcephp[php'titlephp'php]php)php;
php php php php php php php php php php php php php php php php php$sourcephp-php>appendChildphp(php$titlephp)php;
php php php php php php php php php php php php php php php php php$linkphp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php,php php$dataentryphp-php>sourcephp[php'titlephp'php]php)php;
php php php php php php php php php php php php php php php php php$linkphp-php>setAttributephp(php'relphp'php,php php'alternatephp'php)php;
php php php php php php php php php php php php php php php php php$linkphp-php>setAttributephp(php'hrefphp'php,php php$dataentryphp-php>sourcephp[php'urlphp'php]php)php;
php php php php php php php php php php php php php php php php php$sourcephp-php>appendChildphp(php$linkphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>enclosurephp)php)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$dataentryphp-php>enclosurephp asphp php$enclosurephp)php php{
php php php php php php php php php php php php php php php php php php php php php$nodephp php=php php$thisphp-php>php_elementphp-php>createElementphp(php'linkphp'php)php;
php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'relphp'php,php php'enclosurephp'php)php;
php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'hrefphp'php,php php$enclosurephp[php'urlphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$enclosurephp[php'typephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'typephp'php,php php$enclosurephp[php'typephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$enclosurephp[php'lengthphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$nodephp-php>setAttributephp(php'lengthphp'php,php php$enclosurephp[php'lengthphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$nodephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>commentsphp)php)php php{
php php php php php php php php php php php php php php php php php$commentsphp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wellformedwebphp.orgphp/CommentAPIphp/php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'wfwphp:commentphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataentryphp-php>commentsphp)php;
php php php php php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$commentsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(issetphp(php$dataentryphp-php>commentRssphp)php)php php{
php php php php php php php php php php php php php php php php php$commentsphp php=php php$thisphp-php>php_elementphp-php>createElementNSphp(php'httpphp:php/php/wellformedwebphp.orgphp/CommentAPIphp/php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'wfwphp:commentRssphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$dataentryphp-php>commentRssphp)php;
php php php php php php php php php php php php php php php php php$entryphp-php>appendChildphp(php$commentsphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$rootphp-php>appendChildphp(php$entryphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overridephp Zendphp_Feedphp_Elementphp tophp allowphp formatedphp feeds
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp saveXmlphp(php)
php php php php php{
php php php php php php php php php/php/php Returnphp aphp completephp documentphp includingphp XMLphp prologuephp.
php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>versionphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>actualEncodingphp)php;
php php php php php php php php php$docphp-php>appendChildphp(php$docphp-php>importNodephp(php$thisphp-php>php_elementphp,php truephp)php)php;
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
php php php php php php php php php php php php throwphp newphp Zendphp_Feedphp_Exceptionphp(php'Cannotphp sendphp ATOMphp becausephp headersphp havephp alreadyphp beenphp sentphp.php'php)php;
php php php php php php php php php}

php php php php php php php php headerphp(php'Contentphp-Typephp:php applicationphp/atomphp+xmlphp;php charsetphp=php'php php.php php$thisphp-php>php_elementphp-php>ownerDocumentphp-php>actualEncodingphp)php;

php php php php php php php php echophp php$thisphp-php>saveXMLphp(php)php;
php php php php php}
php}
