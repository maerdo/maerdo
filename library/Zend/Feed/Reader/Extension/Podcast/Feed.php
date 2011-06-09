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
php php*php php@versionphp php php php php$Idphp:php Feedphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/FeedAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_Podcastphp_Feedphp extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_FeedAbstract
php{
php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp author
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCastAuthorphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'authorphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorphp'php]php;
php php php php php php php php php}

php php php php php php php php php$authorphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:authorphp)php'php)php;

php php php php php php php php ifphp php(php!php$authorphp)php php{
php php php php php php php php php php php php php$authorphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'authorphp'php]php php=php php$authorphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'authorphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp block
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getBlockphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'blockphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'blockphp'php]php;
php php php php php php php php php}

php php php php php php php php php$blockphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:blockphp)php'php)php;

php php php php php php php php ifphp php(php!php$blockphp)php php{
php php php php php php php php php php php php php$blockphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'blockphp'php]php php=php php$blockphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'blockphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp category
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getCategoriesphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'categoriesphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php php php php php}

php php php php php php php php php$categoryListphp php=php php$thisphp-php>php_xpathphp-php>queryphp(php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:categoryphp'php)php;

php php php php php php php php php$categoriesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$categoryListphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php foreachphp php(php$categoryListphp asphp php$nodephp)php php{
php php php php php php php php php php php php php php php php php$childrenphp php=php nullphp;

php php php php php php php php php php php php php php php php ifphp php(php$nodephp-php>childNodesphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$childrenphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php foreachphp php(php$nodephp-php>childNodesphp asphp php$childNodephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!php(php$childNodephp instanceofphp DOMTextphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$childrenphp[php$childNodephp-php>getAttributephp(php'textphp'php)php]php php=php nullphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$categoriesphp[php$nodephp-php>getAttributephp(php'textphp'php)php]php php=php php$childrenphp;
php php php php php php php php php php php php php}
php php php php php php php php php}


php php php php php php php php ifphp php(php!php$categoriesphp)php php{
php php php php php php php php php php php php php$categoriesphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'categoriesphp'php]php php=php php$categoriesphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'categoriesphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp explicit
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getExplicitphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'explicitphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'explicitphp'php]php;
php php php php php php php php php}

php php php php php php php php php$explicitphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:explicitphp)php'php)php;

php php php php php php php php ifphp php(php!php$explicitphp)php php{
php php php php php php php php php php php php php$explicitphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'explicitphp'php]php php=php php$explicitphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'explicitphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp image
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getImagephp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'imagephp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php php php php php}

php php php php php php php php php$imagephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:imagephp/php@hrefphp)php'php)php;

php php php php php php php php ifphp php(php!php$imagephp)php php{
php php php php php php php php php php php php php$imagephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'imagephp'php]php php=php php$imagephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'imagephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp keywords
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getKeywordsphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'keywordsphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'keywordsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$keywordsphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:keywordsphp)php'php)php;

php php php php php php php php ifphp php(php!php$keywordsphp)php php{
php php php php php php php php php php php php php$keywordsphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'keywordsphp'php]php php=php php$keywordsphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'keywordsphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp'sphp newphp feedphp url
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNewFeedUrlphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'newphp-feedphp-urlphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'newphp-feedphp-urlphp'php]php;
php php php php php php php php php}

php php php php php php php php php$newFeedUrlphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:newphp-feedphp-urlphp)php'php)php;

php php php php php php php php ifphp php(php!php$newFeedUrlphp)php php{
php php php php php php php php php php php php php$newFeedUrlphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'newphp-feedphp-urlphp'php]php php=php php$newFeedUrlphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'newphp-feedphp-urlphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp owner
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getOwnerphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'ownerphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'ownerphp'php]php;
php php php php php php php php php}

php php php php php php php php php$ownerphp php=php nullphp;

php php php php php php php php php$emailphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:ownerphp/itunesphp:emailphp)php'php)php;
php php php php php php php php php$namephp php php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:ownerphp/itunesphp:namephp)php'php)php;

php php php php php php php php ifphp php(php!emptyphp(php$emailphp)php)php php{
php php php php php php php php php php php php php$ownerphp php=php php$emailphp php.php php(emptyphp(php$namephp)php php?php php'php'php php:php php'php php(php'php php.php php$namephp php.php php'php)php'php)php;
php php php php php php php php php}php elsephp ifphp php(php!emptyphp(php$namephp)php)php php{
php php php php php php php php php php php php php$ownerphp php=php php$namephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php$ownerphp)php php{
php php php php php php php php php php php php php$ownerphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'ownerphp'php]php php=php php$ownerphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'ownerphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp subtitle
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSubtitlephp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'subtitlephp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'subtitlephp'php]php;
php php php php php php php php php}

php php php php php php php php php$subtitlephp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:subtitlephp)php'php)php;

php php php php php php php php ifphp php(php!php$subtitlephp)php php{
php php php php php php php php php php php php php$subtitlephp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'subtitlephp'php]php php=php php$subtitlephp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'subtitlephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp summary
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSummaryphp(php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php'summaryphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'summaryphp'php]php;
php php php php php php php php php}

php php php php php php php php php$summaryphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php'stringphp(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/itunesphp:summaryphp)php'php)php;

php php php php php php php php ifphp php(php!php$summaryphp)php php{
php php php php php php php php php php php php php$summaryphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php'summaryphp'php]php php=php php$summaryphp;

php php php php php php php php returnphp php$thisphp-php>php_dataphp[php'summaryphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp iTunesphp namespace
php php php php php php*
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'itunesphp'php,php php'httpphp:php/php/wwwphp.itunesphp.comphp/dtdsphp/podcastphp-php1php.php0php.dtdphp'php)php;
php php php php php}
php}