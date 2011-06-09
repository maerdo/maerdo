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
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Delicious
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Deliciousphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Restphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Restphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Jsonphp_Decoder
php php*php/
requirephp_oncephp php'Zendphp/Jsonphp/Decoderphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Deliciousphp_SimplePost
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/SimplePostphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Post
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Postphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Deliciousphp_PostList
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/PostListphp.phpphp'php;


php/php*php*
php php*php Zendphp_Servicephp_Deliciousphp isphp aphp concretephp implementationphp ofphp thephp delphp.iciophp.usphp webphp service
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Delicious
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Delicious
php{
php php php php constphp APIphp_URIphp php=php php'httpsphp:php/php/apiphp.delphp.iciophp.usphp'php;

php php php php constphp PATHphp_UPDATEphp php php php php php php php php=php php'php/vphp1php/postsphp/updatephp'php;
php php php php constphp PATHphp_TAGSphp php php php php php php php php php php=php php'php/vphp1php/tagsphp/getphp'php;
php php php php constphp PATHphp_TAGphp_RENAMEphp php php php php=php php'php/vphp1php/tagsphp/renamephp'php;
php php php php constphp PATHphp_BUNDLESphp php php php php php php php=php php'php/vphp1php/tagsphp/bundlesphp/allphp'php;
php php php php constphp PATHphp_BUNDLEphp_DELETEphp php=php php'php/vphp1php/tagsphp/bundlesphp/deletephp'php;
php php php php constphp PATHphp_BUNDLEphp_ADDphp php php php php=php php'php/vphp1php/tagsphp/bundlesphp/setphp'php;
php php php php constphp PATHphp_DATESphp php php php php php php php php php=php php'php/vphp1php/postsphp/datesphp'php;
php php php php constphp PATHphp_POSTphp_DELETEphp php php php=php php'php/vphp1php/postsphp/deletephp'php;
php php php php constphp PATHphp_POSTSphp_GETphp php php php php php=php php'php/vphp1php/postsphp/getphp'php;
php php php php constphp PATHphp_POSTSphp_ALLphp php php php php php=php php'php/vphp1php/postsphp/allphp'php;
php php php php constphp PATHphp_POSTSphp_ADDphp php php php php php=php php'php/vphp1php/postsphp/addphp'php;
php php php php constphp PATHphp_POSTSphp_RECENTphp php php=php php'php/vphp1php/postsphp/recentphp'php;

php php php php constphp JSONphp_URIphp php php php php php=php php'httpphp:php/php/delphp.iciophp.usphp'php;
php php php php constphp JSONphp_POSTSphp php php php=php php'php/feedsphp/jsonphp/php%sphp/php%sphp'php;
php php php php constphp JSONphp_TAGSphp php php php php=php php'php/feedsphp/jsonphp/tagsphp/php%sphp'php;
php php php php constphp JSONphp_NETWORKphp php=php php'php/feedsphp/jsonphp/networkphp/php%sphp'php;
php php php php constphp JSONphp_FANSphp php php php php=php php'php/feedsphp/jsonphp/fansphp/php%sphp'php;
php php php php constphp JSONphp_URLphp php php php php php=php php'php/feedsphp/jsonphp/urlphp/dataphp'php;

php php php php php/php*php*
php php php php php php*php Zendphp_Servicephp_Restphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_Rest
php php php php php php*php/
php php php php protectedphp php$php_restphp;

php php php php php/php*php*
php php php php php php*php Username
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_authUnamephp;

php php php php php/php*php*
php php php php php php*php Password
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_authPassphp;

php php php php php/php*php*
php php php php php php*php Microtimephp ofphp lastphp request
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php protectedphp staticphp php$php_lastRequestTimephp php=php php0php;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp delphp.iciophp.usphp Webphp Servicesphp Client
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$unamephp Clientphp username
php php php php php php*php php@paramphp php stringphp php$passphp php Clientphp password
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$unamephp php=php nullphp,php php$passphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_restphp php=php newphp Zendphp_Restphp_Clientphp(php)php;
php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>setConfigphp(arrayphp(php'ssltransportphp'php php=php>php php'sslphp'php)php)php;
php php php php php php php php php$thisphp-php>setAuthphp(php$unamephp,php php$passphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp clientphp usernamephp andphp password
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$unamephp Clientphp userphp name
php php php php php php*php php@paramphp php stringphp php$passphp php Clientphp password
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp setAuthphp(php$unamephp,php php$passphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_authUnamephp php=php php$unamephp;
php php php php php php php php php$thisphp-php>php_authPassphp php php=php php$passphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp timephp ofphp thephp lastphp update
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getLastUpdatephp(php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_UPDATEphp)php;

php php php php php php php php php$rootNodephp php=php php$responsephp-php>documentElementphp;
php php php php php php php php ifphp php(php$rootNodephp php&php&php php$rootNodephp-php>nodeNamephp php=php=php php'updatephp'php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@todophp replacephp strtotimephp(php)php withphp Zendphp_Datephp equivalent
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php returnphp newphp Zendphp_Datephp(strtotimephp(php$rootNodephp-php>getAttributephp(php'timephp'php)php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'delphp.iciophp.usphp webphp servicephp hasphp returnedphp somethingphp oddphp!php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp tagsphp,php returningphp anphp arrayphp withphp tagsphp asphp keysphp andphp numberphp ofphp correspondingphp postsphp asphp values
php php php php php php*
php php php php php php*php php@returnphp arrayphp listphp ofphp tags
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_TAGSphp)php;

php php php php php php php php returnphp selfphp:php:php_xmlResponseToArrayphp(php$responsephp,php php'tagsphp'php,php php'tagphp'php,php php'tagphp'php,php php'countphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renamephp aphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$oldphp Oldphp tagphp name
php php php php php php*php php@paramphp php stringphp php$newphp Newphp tagphp name
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp renameTagphp(php$oldphp,php php$newphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_TAGphp_RENAMEphp,php arrayphp(php'oldphp'php php=php>php php$oldphp,php php'newphp'php php=php>php php$newphp)php)php;

php php php php php php php php selfphp:php:php_evalXmlResultphp(php$responsephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp bundlesphp,php returningphp anphp arrayphp withphp bundlesphp asphp keysphp andphp arrayphp ofphp tagsphp asphp values
php php php php php php*
php php php php php php*php php@returnphp arrayphp listphp ofphp bundles
php php php php php php*php/
php php php php publicphp functionphp getBundlesphp(php)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_BUNDLESphp)php;

php php php php php php php php php$bundlesphp php=php selfphp:php:php_xmlResponseToArrayphp(php$responsephp,php php'bundlesphp'php,php php'bundlephp'php,php php'namephp'php,php php'tagsphp'php)php;
php php php php php php php php foreachphp php(php$bundlesphp asphp php&php$tagsphp)php php{
php php php php php php php php php php php php php$tagsphp php=php explodephp(php'php php'php,php php$tagsphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$bundlesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addsphp aphp newphp bundle
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bundlephp Namephp ofphp newphp bundle
php php php php php php*php php@paramphp php arrayphp php php$tagsphp php php Arrayphp ofphp tags
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp addBundlephp(php$bundlephp,php arrayphp php$tagsphp)
php php php php php{
php php php php php php php php php$tagsphp php=php implodephp(php'php php'php,php php(arrayphp)php php$tagsphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_BUNDLEphp_ADDphp,php arrayphp(php'bundlephp'php php=php>php php$bundlephp,php php'tagsphp'php php=php>php php$tagsphp)php)php;

php php php php php php php php selfphp:php:php_evalXmlResultphp(php$responsephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp bundle
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$bundlephp Namephp ofphp bundlephp tophp bephp deleted
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp deleteBundlephp(php$bundlephp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_BUNDLEphp_DELETEphp,php arrayphp(php'bundlephp'php php=php>php php$bundlephp)php)php;

php php php php php php php php selfphp:php:php_evalXmlResultphp(php$responsephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletephp aphp post
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$urlphp URLphp ofphp postphp tophp bephp deleted
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp deletePostphp(php$urlphp)
php php php php php{
php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_POSTphp_DELETEphp,php arrayphp(php'urlphp'php php=php>php php$urlphp)php)php;

php php php php php php php php selfphp:php:php_evalXmlResultphp(php$responsephp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp numberphp ofphp postsphp byphp date
php php php php php php*
php php php php php php*php Returnsphp arrayphp wherephp keysphp arephp datesphp andphp valuesphp arephp numbersphp ofphp posts
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagphp Optionalphp filteringphp byphp tag
php php php php php php*php php@returnphp arrayphp listphp ofphp dates
php php php php php php*php/
php php php php publicphp functionphp getDatesphp(php$tagphp php=php nullphp)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$tagphp)php php{
php php php php php php php php php php php php php$parmsphp[php'tagphp'php]php php=php php$tagphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_DATESphp,php php$parmsphp)php;

php php php php php php php php returnphp selfphp:php:php_xmlResponseToArrayphp(php$responsephp,php php'datesphp'php,php php'datephp'php,php php'datephp'php,php php'countphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp postsphp matchingphp thephp arguments
php php php php php php*
php php php php php php*php Ifphp nophp datephp orphp urlphp isphp givenphp,php mostphp recentphp datephp willphp bephp used
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php php php$tagphp Optionalphp filteringphp byphp tag
php php php php php php*php php@paramphp php Zendphp_Datephp php$dtphp php Optionalphp filteringphp byphp date
php php php php php php*php php@paramphp php stringphp php php php php$urlphp Optionalphp filteringphp byphp url
php php php php php php*php php@throwsphp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp getPostsphp(php$tagphp php=php nullphp,php Zendphp_Datephp php$dtphp php=php nullphp,php php$urlphp php=php nullphp)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$tagphp)php php{
php php php php php php php php php php php php php$parmsphp[php'tagphp'php]php php=php php$tagphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$urlphp)php php{
php php php php php php php php php php php php php$parmsphp[php'urlphp'php]php php=php php$urlphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$dtphp)php php{
php php php php php php php php php php php php php$parmsphp[php'dtphp'php]php php=php php$dtphp-php>getphp(php'Yphp-mphp-dphp\THphp:iphp:sphp\Zphp'php)php;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_POSTSphp_GETphp,php php$parmsphp)php;

php php php php php php php php returnphp php$thisphp-php>php_parseXmlPostListphp(php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp posts
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagphp Optionalphp filteringphp byphp tag
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp getAllPostsphp(php$tagphp php=php nullphp)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$tagphp)php php{
php php php php php php php php php php php php php$parmsphp[php'tagphp'php]php php=php php$tagphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_POSTSphp_ALLphp,php php$parmsphp)php;

php php php php php php php php returnphp php$thisphp-php>php_parseXmlPostListphp(php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp recentphp posts
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagphp php php Optionalphp filteringphp byphp tag
php php php php php php*php php@paramphp php stringphp php$countphp Maximumphp numberphp ofphp postsphp tophp bephp returnedphp php(defaultphp php1php5php)
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp getRecentPostsphp(php$tagphp php=php nullphp,php php$countphp php=php php1php5php)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$tagphp)php php{
php php php php php php php php php php php php php$parmsphp[php'tagphp'php]php php=php php$tagphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$countphp)php php{
php php php php php php php php php php php php php$parmsphp[php'countphp'php]php php=php php$countphp;
php php php php php php php php php}

php php php php php php php php php$responsephp php=php php$thisphp-php>makeRequestphp(selfphp:php:PATHphp_POSTSphp_RECENTphp,php php$parmsphp)php;

php php php php php php php php returnphp php$thisphp-php>php_parseXmlPostListphp(php$responsephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp newphp post
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp createNewPostphp(php$titlephp,php php$urlphp)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Servicephp_Deliciousphp_Postphp(php$thisphp,php arrayphp(php'titlephp'php php=php>php php$titlephp,php php'urlphp'php php=php>php php$urlphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp postsphp ofphp aphp user
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp php Ownerphp ofphp thephp posts
php php php php php php*php php@paramphp php intphp php php php php$countphp Numberphp ofphp postsphp php(defaultphp php1php5php,php maxphp.php php1php0php0php)
php php php php php php*php php@paramphp php stringphp php$tagphp php php Optionalphp filteringphp byphp tag
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp getUserPostsphp(php$userphp,php php$countphp php=php nullphp,php php$tagphp php=php nullphp)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$countphp)php php{
php php php php php php php php php php php php php$parmsphp[php'countphp'php]php php=php php$countphp;
php php php php php php php php php}

php php php php php php php php php$pathphp php=php sprintfphp(selfphp:php:JSONphp_POSTSphp,php php$userphp,php php$tagphp)php;
php php php php php php php php php$resphp php=php php$thisphp-php>makeRequestphp(php$pathphp,php php$parmsphp,php php'jsonphp'php)php;

php php php php php php php php returnphp newphp Zendphp_Servicephp_Deliciousphp_PostListphp(php$thisphp,php php$resphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp tagsphp ofphp aphp user
php php php php php php*
php php php php php php*php Returnedphp arrayphp hasphp tagsphp asphp keysphp andphp numberphp ofphp postsphp asphp values
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp php php php Ownerphp ofphp thephp posts
php php php php php php*php php@paramphp php intphp php php php php$atleastphp Includephp onlyphp tagsphp forphp whichphp therephp arephp atphp leastphp php#php#php#php numberphp ofphp posts
php php php php php php*php php@paramphp php intphp php php php php$countphp php php Numberphp ofphp tagsphp tophp getphp php(defaultphp allphp)
php php php php php php*php php@paramphp php stringphp php$sortphp php php php Orderphp ofphp returnedphp tagsphp php(php'alphaphp'php php|php|php php'countphp'php)
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUserTagsphp(php$userphp,php php$atleastphp php=php nullphp,php php$countphp php=php nullphp,php php$sortphp php=php php'alphaphp'php)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php)php;
php php php php php php php php ifphp php(php$atleastphp)php php{
php php php php php php php php php php php php php$parmsphp[php'atleastphp'php]php php=php php$atleastphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$countphp)php php{
php php php php php php php php php php php php php$parmsphp[php'countphp'php]php php=php php$countphp;
php php php php php php php php php}
php php php php php php php php ifphp php(php$sortphp)php php{
php php php php php php php php php php php php php$parmsphp[php'sortphp'php]php php=php php$sortphp;
php php php php php php php php php}

php php php php php php php php php$pathphp php=php sprintfphp(selfphp:php:JSONphp_TAGSphp,php php$userphp)php;

php php php php php php php php returnphp php$thisphp-php>makeRequestphp(php$pathphp,php php$parmsphp,php php'jsonphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp networkphp ofphp aphp user
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp Ownerphp ofphp thephp network
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUserNetworkphp(php$userphp)
php php php php php{
php php php php php php php php php$pathphp php=php sprintfphp(selfphp:php:JSONphp_NETWORKphp,php php$userphp)php;
php php php php php php php php returnphp php$thisphp-php>makeRequestphp(php$pathphp,php arrayphp(php)php,php php'jsonphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp fansphp ofphp aphp user
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$userphp Ownerphp ofphp thephp fans
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUserFansphp(php$userphp)
php php php php php{
php php php php php php php php php$pathphp php=php sprintfphp(selfphp:php:JSONphp_FANSphp,php php$userphp)php;
php php php php php php php php returnphp php$thisphp-php>makeRequestphp(php$pathphp,php arrayphp(php)php,php php'jsonphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp detailsphp onphp aphp particularphp bookmarkedphp URL
php php php php php php*
php php php php php php*php Returnedphp arrayphp containsphp fourphp elementsphp:
php php php php php php*php php php-php hashphp php-php mdphp5php hashphp ofphp URL
php php php php php php*php php php-php topphp_tagsphp php-php arrayphp ofphp tagsphp andphp theirphp respectivephp usagephp counts
php php php php php php*php php php-php urlphp php-php URLphp forphp whichphp detailsphp werephp returned
php php php php php php*php php php-php totalphp_postsphp php-php numberphp ofphp usersphp thatphp havephp bookmarkedphp URL
php php php php php php*
php php php php php php*php Ifphp URLphp hasenphp'tphp beenphp bookmarkedphp nullphp isphp returnedphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$urlphp URLphp forphp whichphp tophp getphp details
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getUrlDetailsphp(php$urlphp)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(php'hashphp'php php=php>php mdphp5php(php$urlphp)php)php;

php php php php php php php php php$resphp php=php php$thisphp-php>makeRequestphp(selfphp:php:JSONphp_URLphp,php php$parmsphp,php php'jsonphp'php)php;

php php php php php php php php ifphp(issetphp(php$resphp[php0php]php)php)php php{
php php php php php php php php php php php php returnphp php$resphp[php0php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Handlesphp allphp GETphp requestsphp tophp aphp webphp service
php php php php php php*
php php php php php php*php php@paramphp php php stringphp php$pathphp php Path
php php php php php php*php php@paramphp php php arrayphp php php$parmsphp Arrayphp ofphp GETphp parameters
php php php php php php*php php@paramphp php php stringphp php$typephp php Typephp ofphp aphp requestphp php(php"xmlphp"php|php"jsonphp"php)
php php php php php php*php php@returnphp php mixedphp php decodedphp responsephp fromphp webphp service
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php publicphp functionphp makeRequestphp(php$pathphp,php arrayphp php$parmsphp php=php arrayphp(php)php,php php$typephp php=php php'xmlphp'php)
php php php php php{
php php php php php php php php php/php/php ifphp previousphp requestphp wasphp madephp lessphp thenphp php1php secphp ago
php php php php php php php php php/php/php waitphp untilphp wephp canphp makephp aphp newphp request
php php php php php php php php php$timeDiffphp php=php microtimephp(truephp)php php-php selfphp:php:php$php_lastRequestTimephp;
php php php php php php php php ifphp php(php$timeDiffphp <php php1php)php php{
php php php php php php php php php php php php usleepphp(php(php1php php-php php$timeDiffphp)php php*php php1php0php0php0php0php0php0php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_restphp-php>getHttpClientphp(php)php-php>setAuthphp(php$thisphp-php>php_authUnamephp,php php$thisphp-php>php_authPassphp)php;

php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'xmlphp'php:
php php php php php php php php php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(selfphp:php:APIphp_URIphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'jsonphp'php:
php php php php php php php php php php php php php php php php php$parmsphp[php'rawphp'php]php php=php truephp;
php php php php php php php php php php php php php php php php php$thisphp-php>php_restphp-php>setUriphp(selfphp:php:JSONphp_URIphp)php;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'Unknownphp requestphp typephp'php)php;
php php php php php php php php php}

php php php php php php php php selfphp:php:php$php_lastRequestTimephp php=php microtimephp(truephp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_restphp-php>restGetphp(php$pathphp,php php$parmsphp)php;

php php php php php php php php ifphp php(php!php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php"Httpphp clientphp reportedphp anphp errorphp:php php'php{php$responsephp-php>getMessagephp(php)php}php'php"php)php;
php php php php php php php php php}

php php php php php php php php php$responseBodyphp php=php php$responsephp-php>getBodyphp(php)php;

php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php casephp php'xmlphp'php:
php php php php php php php php php php php php php php php php php$domphp php=php newphp DOMDocumentphp(php)php php;

php php php php php php php php php php php php php php php php ifphp php(php!php@php$domphp-php>loadXMLphp(php$responseBodyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'XMLphp Errorphp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp php$domphp;
php php php php php php php php php php php php casephp php'jsonphp'php:
php php php php php php php php php php php php php php php php returnphp Zendphp_Jsonphp_Decoderphp:php:decodephp(php$responseBodyphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformphp XMLphp stringphp tophp array
php php php php php php*
php php php php php php*php php@paramphp php php DOMDocumentphp php$response
php php php php php php*php php@paramphp php php stringphp php php php php php php$rootphp php php php php Namephp ofphp rootphp tag
php php php php php php*php php@paramphp php php stringphp php php php php php php$childphp php php php Namephp ofphp childrenphp tags
php php php php php php*php php@paramphp php php stringphp php php php php php php$attKeyphp php php Attributephp ofphp childphp tagphp tophp bephp usedphp asphp aphp key
php php php php php php*php php@paramphp php php stringphp php php php php php php$attValuephp Attributephp ofphp childphp tagphp tophp bephp usedphp asphp aphp value
php php php php php php*php php@returnphp php array
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php privatephp staticphp functionphp php_xmlResponseToArrayphp(DOMDocumentphp php$responsephp,php php$rootphp,php php$childphp,php php$attKeyphp,php php$attValuephp)
php php php php php{
php php php php php php php php php$rootNodephp php=php php$responsephp-php>documentElementphp;
php php php php php php php php php$arrOutphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php$rootNodephp-php>nodeNamephp php=php=php php$rootphp)php php{
php php php php php php php php php php php php php$childNodesphp php=php php$rootNodephp-php>childNodesphp;

php php php php php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$childNodesphp-php>lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php php php php php$currentNodephp php=php php$childNodesphp-php>itemphp(php$iphp)php;
php php php php php php php php php php php php php php php php ifphp php(php$currentNodephp-php>nodeNamephp php=php=php php$childphp)php php{
php php php php php php php php php php php php php php php php php php php php php$arrOutphp[php$currentNodephp-php>getAttributephp(php$attKeyphp)php]php php=php php$currentNodephp-php>getAttributephp(php$attValuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'delphp.iciophp.usphp webphp servicephp hasphp returnedphp somethingphp oddphp!php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$arrOutphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructsphp Zendphp_Servicephp_Deliciousphp_PostListphp fromphp XMLphp response
php php php php php php*
php php php php php php*php php@paramphp php php DOMDocumentphp php$response
php php php php php php*php php@returnphp php Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php privatephp functionphp php_parseXmlPostListphp(DOMDocumentphp php$responsephp)
php php php php php{
php php php php php php php php php$rootNodephp php=php php$responsephp-php>documentElementphp;

php php php php php php php php ifphp php(php$rootNodephp-php>nodeNamephp php=php=php php'postsphp'php)php php{
php php php php php php php php php php php php returnphp newphp Zendphp_Servicephp_Deliciousphp_PostListphp(php$thisphp,php php$rootNodephp-php>childNodesphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'delphp.iciophp.usphp webphp servicephp hasphp returnedphp somethingphp oddphp!php'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Evaluatesphp XMLphp response
php php php php php php*
php php php php php php*php php@paramphp php php DOMDocumentphp php$response
php php php php php php*php php@returnphp php void
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php privatephp staticphp functionphp php_evalXmlResultphp(DOMDocumentphp php$responsephp)
php php php php php{
php php php php php php php php php$rootNodephp php=php php$responsephp-php>documentElementphp;

php php php php php php php php ifphp php(php$rootNodephp php&php&php php$rootNodephp-php>nodeNamephp php=php=php php'resultphp'php)php php{

php php php php php php php php php php php php ifphp php(php$rootNodephp-php>hasAttributephp(php'codephp'php)php)php php{
php php php php php php php php php php php php php php php php php$strResponsephp php=php php$rootNodephp-php>getAttributephp(php'codephp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$strResponsephp php=php php$rootNodephp-php>nodeValuephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$strResponsephp php!php=php php'donephp'php php&php&php php$strResponsephp php!php=php php'okphp'php)php php{
php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php"delphp.iciophp.usphp webphp servicephp:php php'php{php$strResponsephp}php'php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'delphp.iciophp.usphp webphp servicephp hasphp returnedphp somethingphp oddphp!php'php)php;
php php php php php php php php php}
php php php php php}
php}
