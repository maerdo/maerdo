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
php php*php php@versionphp php php php php$Idphp:php PostListphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Listphp ofphp postsphp retrivedphp fromphp thephp delphp.iciophp.usphp webphp service
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Delicious
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Deliciousphp_PostListphp implementsphp Countablephp,php Iteratorphp,php ArrayAccess
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp Zendphp_Servicephp_Deliciousphp_Post
php php php php php php*php/
php php php php protectedphp php$php_postsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Servicephp_Deliciousphp Servicephp thatphp hasphp downloadedphp thephp postphp list
php php php php php php*php/
php php php php protectedphp php$php_servicephp;

php php php php php/php*php*
php php php php php php*php php@varphp intphp Iteratorphp key
php php php php php php*php/
php php php php protectedphp php$php_iteratorKeyphp php=php php0php;

php php php php php/php*php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_Deliciousphp php$servicephp Servicephp thatphp hasphp downloadedphp thephp post
php php php php php php*php php@paramphp php DOMNodeListphp|arrayphp php php php php php php$posts
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Servicephp_Deliciousphp php$servicephp,php php$postsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_servicephp php=php php$servicephp;
php php php php php php php php ifphp php(php$postsphp instanceofphp DOMNodeListphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_constructFromNodeListphp(php$postsphp)php;
php php php php php php php php php}php elsephp ifphp php(isphp_arrayphp(php$postsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_constructFromArrayphp(php$postsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformsphp DOMNodeListphp tophp arrayphp ofphp posts
php php php php php php*
php php php php php php*php php@paramphp php DOMNodeListphp php$nodeList
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_constructFromNodeListphp(DOMNodeListphp php$nodeListphp)
php php php php php{
php php php php php php php php forphp php(php$iphp php=php php0php;php php$iphp <php php$nodeListphp-php>lengthphp;php php$iphp+php+php)php php{
php php php php php php php php php php php php php$curentNodephp php=php php$nodeListphp-php>itemphp(php$iphp)php;
php php php php php php php php php php php php ifphp(php$curentNodephp-php>nodeNamephp php=php=php php'postphp'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_addPostphp(newphp Zendphp_Servicephp_Deliciousphp_Postphp(php$thisphp-php>php_servicephp,php php$curentNodephp)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Transformsphp thephp Arrayphp tophp arrayphp ofphp posts
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$postList
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php privatephp functionphp php_constructFromArrayphp(arrayphp php$postListphp)
php php php php php{
php php php php php php php php foreachphp php(php$postListphp asphp php$fphp_postphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_addPostphp(newphp Zendphp_Servicephp_Deliciousphp_SimplePostphp(php$fphp_postphp)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp post
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_Deliciousphp_SimplePostphp php$post
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php protectedphp functionphp php_addPostphp(Zendphp_Servicephp_Deliciousphp_SimplePostphp php$postphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_postsphp[php]php php=php php$postphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp listphp byphp listphp ofphp tags
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$tags
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp withTagsphp(arrayphp php$tagsphp)
php php php php php{
php php php php php php php php php$postListphp php=php newphp selfphp(php$thisphp-php>php_servicephp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_postsphp asphp php$postphp)php php{
php php php php php php php php php php php php ifphp php(countphp(arrayphp_diffphp(php$tagsphp,php php$postphp-php>getTagsphp(php)php)php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$postListphp-php>php_addPostphp(php$postphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$postListphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp listphp byphp tag
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp withTagphp(php$tagphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>withTagsphp(funcphp_getphp_argsphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp listphp byphp urlsphp matchingphp aphp regularphp expression
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$regexp
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_PostList
php php php php php php*php/
php php php php publicphp functionphp withUrlphp(php$regexpphp)
php php php php php{
php php php php php php php php php$postListphp php=php newphp selfphp(php$thisphp-php>php_servicephp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_postsphp asphp php$postphp)php php{
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php$regexpphp,php php$postphp-php>getUrlphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$postListphp-php>php_addPostphp(php$postphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$postListphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp numberphp ofphp posts
php php php php php php*
php php php php php php*php Implementphp Countablephp:php:countphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp countphp(php)
php php php php php{
php php php php php php php php returnphp countphp(php$thisphp-php>php_postsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp currentphp element
php php php php php php*
php php php php php php*php Implementphp Iteratorphp:php:currentphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Servicephp_Deliciousphp_SimplePost
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_postsphp[php$thisphp-php>php_iteratorKeyphp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp keyphp ofphp thephp currentphp element
php php php php php php*
php php php php php php*php Implementphp Iteratorphp:php:keyphp(php)
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_iteratorKeyphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp forwardphp tophp nextphp element
php php php php php php*
php php php php php php*php Implementphp Iteratorphp:php:nextphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorKeyphp php+php=php php1php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp thephp Iteratorphp tophp thephp firstphp element
php php php php php php*
php php php php php php*php Implementphp Iteratorphp:php:rewindphp(php)
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_iteratorKeyphp php=php php0php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp currentphp elementphp afterphp callsphp tophp rewindphp(php)php orphp nextphp(php)
php php php php php php*
php php php php php php*php Implementphp Iteratorphp:php:validphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php php$numItemsphp php=php php$thisphp-php>countphp(php)php;

php php php php php php php php ifphp php(php$numItemsphp php>php php0php php&php&php php$thisphp-php>php_iteratorKeyphp <php php$numItemsphp)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp thephp offsetphp exists
php php php php php php*
php php php php php php*php Implementphp ArrayAccessphp:php:offsetExistsphp(php)
php php php php php php*
php php php php php php*php php@paramphp php php intphp php php php php php$offset
php php php php php php*php php@returnphp php bool
php php php php php php*php/
php php php php publicphp functionphp offsetExistsphp(php$offsetphp)
php php php php php{
php php php php php php php php returnphp php(php$offsetphp <php php$thisphp-php>countphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp valuephp atphp givenphp offset
php php php php php php*
php php php php php php*php Implementphp ArrayAccessphp:php:offsetGetphp(php)
php php php php php php*
php php php php php php*php php@paramphp php php intphp php php php php php$offset
php php php php php php*php php@throwsphp php OutOfBoundsException
php php php php php php*php php@returnphp php Zendphp_Servicephp_Deliciousphp_SimplePost
php php php php php php*php/
php php php php publicphp functionphp offsetGetphp(php$offsetphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>offsetExistsphp(php$offsetphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_postsphp[php$offsetphp]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php throwphp newphp OutOfBoundsExceptionphp(php'Illegalphp indexphp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp exceptionphp becausephp allphp valuesphp arephp readphp-only
php php php php php php*
php php php php php php*php Implementphp ArrayAccessphp:php:offsetSetphp(php)
php php php php php php*
php php php php php php*php php@paramphp php php intphp php php php php php$offset
php php php php php php*php php@paramphp php php stringphp php php$value
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetSetphp(php$offsetphp,php php$valuephp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'Youphp arephp tryingphp tophp setphp readphp-onlyphp propertyphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Throwsphp exceptionphp becausephp allphp valuesphp arephp readphp-only
php php php php php php*
php php php php php php*php Implementphp ArrayAccessphp:php:offsetUnsetphp(php)
php php php php php php*
php php php php php php*php php@paramphp php php intphp php php php php php$offset
php php php php php php*php php@throwsphp php Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php*php/
php php php php publicphp functionphp offsetUnsetphp(php$offsetphp)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Deliciousphp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Deliciousphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Servicephp_Deliciousphp_Exceptionphp(php'Youphp arephp tryingphp tophp unsetphp readphp-onlyphp propertyphp'php)php;
php php php php php}
php}
