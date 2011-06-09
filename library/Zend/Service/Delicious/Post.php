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
php php*php php@versionphp php php php php$Idphp:php Postphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Date
php php*php/
requirephp_oncephp php'Zendphp/Datephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Servicephp_Deliciousphp_SimplePost
php php*php/
requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/SimplePostphp.phpphp'php;


php/php*php*
php php*php Zendphp_Servicephp_Deliciousphp_Postphp representsphp aphp postphp ofphp aphp userphp thatphp canphp bephp edited
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Delicious
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Deliciousphp_Postphp extendsphp Zendphp_Servicephp_Deliciousphp_SimplePost
php{
php php php php php/php*php*
php php php php php php*php Servicephp thatphp hasphp downloadedphp thephp post
php php php php php php*
php php php php php php*php php@varphp Zendphp_Servicephp_Delicious
php php php php php php*php/
php php php php protectedphp php$php_servicephp;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Numberphp ofphp peoplephp thatphp havephp thephp samephp post
php php php php php php*php/
php php php php protectedphp php$php_othersphp;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Datephp Postphp date
php php php php php php*php/
php php php php protectedphp php$php_datephp;

php php php php php/php*php*
php php php php php php*php php@varphp boolphp Postphp share
php php php php php php*php/
php php php php protectedphp php$php_sharedphp php=php truephp;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Postphp hash
php php php php php php*php/
php php php php protectedphp php$php_hashphp;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp delphp.iciophp.usphp post
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_Deliciousphp php$servicephp Servicephp thatphp hasphp downloadedphp thephp post
php php php php php php*php php@paramphp php DOMElementphp|arrayphp php php php php php php php$valuesphp php Postphp content
php php php php php php*php php@throwsphp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Servicephp_Deliciousphp php$servicephp,php php$valuesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_servicephp php=php php$servicephp;

php php php php php php php php ifphp php(php$valuesphp instanceofphp DOMElementphp)php php{
php php php php php php php php php php php php php$valuesphp php=php selfphp:php:php_parsePostNodephp(php$valuesphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuesphp)php php|php|php php!issetphp(php$valuesphp[php'urlphp'php]php)php php|php|php php!issetphp(php$valuesphp[php'titlephp'php]php)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php"Secondphp argumentphp mustphp bephp arrayphp withphp atphp leastphp php2php keysphp php(php'urlphp'php andphp"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php php'titlephp'php)php"php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$valuesphp[php'datephp'php]php)php php&php&php php!php php$valuesphp[php'datephp'php]php instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php"Datephp hasphp tophp bephp anphp instancephp ofphp Zendphp_Datephp"php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp(php'urlphp'php,php php'titlephp'php,php php'notesphp'php,php php'othersphp'php,php php'tagsphp'php,php php'datephp'php,php php'sharedphp'php,php php'hashphp'php)php asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$valuesphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php{php"php_php$keyphp"php}php php php=php php$valuesphp[php$keyphp]php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp title
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$newTitle
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp setTitlephp(php$newTitlephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_titlephp php=php php(stringphp)php php$newTitlephp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp notes
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$newNotes
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp setNotesphp(php$newNotesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_notesphp php=php php(stringphp)php php$newNotesphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp tags
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tags
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp setTagsphp(arrayphp php$tagsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagsphp php=php php$tagsphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp addTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagsphp[php]php php=php php(stringphp)php php$tagphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp removeTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagsphp php=php arrayphp_diffphp(php$thisphp-php>php_tagsphp,php arrayphp(php(stringphp)php php$tagphp)php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp date
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Date
php php php php php php*php/
php php php php publicphp functionphp getDatephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_datephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp others
php php php php php php*
php php php php php php*php Thisphp propertyphp isphp onlyphp populatedphp whenphp postsphp arephp retrieved
php php php php php php*php withphp getPostsphp(php)php methodphp.php Thephp getAllPostsphp(php)php andphp getRecentPostsphp(php)
php php php php php php*php methodsphp willphp notphp populatephp thisphp propertyphp.
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getOthersphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_othersphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp hash
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHashphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_hashphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getterphp forphp shared
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getSharedphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sharedphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setterphp forphp shared
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$isShared
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php publicphp functionphp setSharedphp(php$isSharedphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sharedphp php=php php(boolphp)php php$isSharedphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp post
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Delicious
php php php php php php*php/
php php php php publicphp functionphp deletephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_servicephp-php>deletePostphp(php$thisphp-php>php_urlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp post
php php php php php php*
php php php php php php*php php@returnphp DOMDocument
php php php php php php*php/
php php php php publicphp functionphp savephp(php)
php php php php php{
php php php php php php php php php$parmsphp php=php arrayphp(
php php php php php php php php php php php php php'urlphp'php php php php php php php php php=php>php php$thisphp-php>php_urlphp,
php php php php php php php php php php php php php'descriptionphp'php=php>php php$thisphp-php>php_titlephp,
php php php php php php php php php php php php php'extendedphp'php php php php=php>php php$thisphp-php>php_notesphp,
php php php php php php php php php php php php php'sharedphp'php php php php php php=php>php php(php$thisphp-php>php_sharedphp php?php php'yesphp'php php:php php'nophp'php)php,
php php php php php php php php php php php php php'tagsphp'php php php php php php php php=php>php implodephp(php'php php'php,php php(arrayphp)php php$thisphp-php>php_tagsphp)php,
php php php php php php php php php php php php php'replacephp'php php php php php=php>php php'yesphp'
php php php php php php php php php)php;
php php php php php php php php php/php*
php php php php php php php php ifphp php(php$thisphp-php>php_datephp instanceofphp Zendphp_Datephp)php php{
php php php php php php php php php php php php php$parmsphp[php'dtphp'php]php php=php php$thisphp-php>php_datephp-php>getphp(php'Yphp-mphp-dphp\THphp:iphp:sphp\Zphp'php)php;
php php php php php php php php php}
php php php php php php php php php*php/

php php php php php php php php returnphp php$thisphp-php>php_servicephp-php>makeRequestphp(Zendphp_Servicephp_Deliciousphp:php:PATHphp_POSTSphp_ADDphp,php php$parmsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractsphp contentphp fromphp thephp DOMphp elementphp ofphp aphp post
php php php php php php*
php php php php php php*php php@paramphp php DOMElementphp php$node
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp staticphp functionphp php_parsePostNodephp(DOMElementphp php$nodephp)
php php php php php{
php php php php php php php php returnphp arrayphp(
php php php php php php php php php php php php php'urlphp'php php php php php=php>php php$nodephp-php>getAttributephp(php'hrefphp'php)php,
php php php php php php php php php php php php php'titlephp'php php php=php>php php$nodephp-php>getAttributephp(php'descriptionphp'php)php,
php php php php php php php php php php php php php'notesphp'php php php=php>php php$nodephp-php>getAttributephp(php'extendedphp'php)php,
php php php php php php php php php php php php php'othersphp'php php=php>php php(intphp)php php$nodephp-php>getAttributephp(php'othersphp'php)php,
php php php php php php php php php php php php php'tagsphp'php php php php=php>php explodephp(php'php php'php,php php$nodephp-php>getAttributephp(php'tagphp'php)php)php,
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@todophp replacephp strtotimephp(php)php withphp Zendphp_Datephp equivalent
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php'datephp'php php php php=php>php newphp Zendphp_Datephp(strtotimephp(php$nodephp-php>getAttributephp(php'timephp'php)php)php)php,
php php php php php php php php php php php php php'sharedphp'php php=php>php php(php$nodephp-php>getAttributephp(php'sharedphp'php)php php=php=php php'nophp'php php?php falsephp php:php truephp)php,
php php php php php php php php php php php php php'hashphp'php php php php=php>php php$nodephp-php>getAttributephp(php'hashphp'php)
php php php php php php php php php)php;
php php php php php}
php}
