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
php php*php php@subpackagephp Simpy
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Simpyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_Client
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/Clientphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Service
php php*php php@subpackagephp Simpy
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@linkphp php php php php php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/
php php*php/
classphp Zendphp_Servicephp_Simpy
php{
php php php php php/php*php*
php php php php php php*php Basephp URIphp tophp whichphp APIphp methodsphp andphp parametersphp willphp bephp appended
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_baseUriphp php=php php'httpphp:php/php/simpyphp.comphp/simpyphp/apiphp/restphp/php'php;

php php php php php/php*php*
php php php php php php*php HTTPphp clientphp forphp usephp inphp makingphp webphp servicephp calls
php php php php php php*
php php php php php php*php php@varphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php protectedphp php$php_httpphp;

php php php php php/php*php*
php php php php php php*php Constructsphp aphp newphp Simpyphp php(freephp)php RESTphp APIphp Client
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$usernamephp Usernamephp forphp thephp Simpyphp userphp account
php php php php php php*php php@paramphp php stringphp php$passwordphp Passwordphp forphp thephp Simpyphp userphp account
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$usernamephp,php php$passwordphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_httpphp php=php newphp Zendphp_Httpphp_Clientphp;
php php php php php php php php php$thisphp-php>php_httpphp-php>setAuthphp(php$usernamephp,php php$passwordphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp HTTPphp clientphp currentlyphp inphp usephp byphp thisphp classphp forphp RESTphp API
php php php php php php*php callsphp,php intendedphp mainlyphp forphp testingphp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Httpphp_Client
php php php php php php*php/
php php php php publicphp functionphp getHttpClientphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_httpphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Sendsphp aphp requestphp tophp thephp RESTphp APIphp servicephp andphp doesphp initialphp processing
php php php php php php*php onphp thephp responsephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$opphp php php php Namephp ofphp thephp operationphp forphp thephp request
php php php php php php*php php@paramphp php arrayphp php php$queryphp Queryphp dataphp forphp thephp requestphp php(optionalphp)
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp DOMDocumentphp Parsedphp XMLphp response
php php php php php php*php/
php php php php protectedphp functionphp php_makeRequestphp(php$opphp,php php$queryphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$queryphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$queryphp php=php arrayphp_diffphp(php$queryphp,php arrayphp_filterphp(php$queryphp,php php'isphp_nullphp'php)php)php;
php php php php php php php php php php php php php$queryphp php=php php'php?php'php php.php httpphp_buildphp_queryphp(php$queryphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_httpphp-php>setUriphp(php$thisphp-php>php_baseUriphp php.php php$opphp php.php php'php.dophp'php php.php php$queryphp)php;
php php php php php php php php php$responsephp php=php php$thisphp-php>php_httpphp-php>requestphp(php'GETphp'php)php;

php php php php php php php php ifphp php(php$responsephp-php>isSuccessfulphp(php)php)php php{
php php php php php php php php php php php php php$docphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php php php php php$docphp-php>loadXMLphp(php$responsephp-php>getBodyphp(php)php)php;
php php php php php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$docphp)php;
php php php php php php php php php php php php php$listphp php=php php$xpathphp-php>queryphp(php'php/statusphp/codephp'php)php;

php php php php php php php php php php php php ifphp php(php$listphp-php>lengthphp php>php php0php)php php{
php php php php php php php php php php php php php php php php php$codephp php=php php$listphp-php>itemphp(php0php)php-php>nodeValuephp;

php php php php php php php php php php php php php php php php ifphp php(php$codephp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$listphp php=php php$xpathphp-php>queryphp(php'php/statusphp/messagephp'php)php;
php php php php php php php php php php php php php php php php php php php php php$messagephp php=php php$listphp-php>itemphp(php0php)php-php>nodeValuephp;
php php php php php php php php php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$messagephp,php php$codephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$docphp;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Exception
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Servicephp_Exceptionphp(php$responsephp-php>getMessagephp(php)php,php php$responsephp-php>getStatusphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp aphp listphp ofphp allphp tagsphp andphp theirphp countsphp,php orderedphp byphp countphp in
php php php php php php*php decreasingphp order
php php php php php php*
php php php php php php*php php@paramphp php intphp php$limitphp Limitsphp thephp numberphp ofphp tagsphp returnedphp php(optionalphp)
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/GetTags
php php php php php php*php php@throwsphp Zendphp_Servicephp_Exception
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp_TagSet
php php php php php php*php/
php php php php publicphp functionphp getTagsphp(php$limitphp php=php nullphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'limitphp'php php=php>php php$limit
php php php php php php php php php)php;

php php php php php php php php php$docphp php=php php$thisphp-php>php_makeRequestphp(php'GetTagsphp'php,php php$queryphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Simpyphp_TagSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Simpyphp/TagSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Simpyphp_TagSetphp(php$docphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removesphp aphp tagphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagphp Tagphp tophp bephp removed
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/RemoveTag
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp removeTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'tagphp'php php=php>php php$tag
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'RemoveTagphp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renamesphp aphp tagphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fromTagphp Tagphp tophp bephp renamed
php php php php php php*php php@paramphp php stringphp php$toTagphp php php Newphp tagphp name
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/RenameTag
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp renameTagphp(php$fromTagphp,php php$toTagphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'fromTagphp'php php=php>php php$fromTagphp,
php php php php php php php php php php php php php'toTagphp'php php=php>php php$toTag
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'RenameTagphp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Mergesphp twophp tagsphp intophp aphp newphp tagphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$fromTagphp1php Firstphp tagphp tophp mergephp.
php php php php php php*php php@paramphp php stringphp php$fromTagphp2php Secondphp tagphp tophp mergephp.
php php php php php php*php php@paramphp php stringphp php$toTagphp php php php Tagphp tophp mergephp thephp twophp tagsphp intophp.
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/MergeTags
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp mergeTagsphp(php$fromTagphp1php,php php$fromTagphp2php,php php$toTagphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'fromTagphp1php'php php=php>php php$fromTagphp1php,
php php php php php php php php php php php php php'fromTagphp2php'php php=php>php php$fromTagphp2php,
php php php php php php php php php php php php php'toTagphp'php php=php>php php$toTag
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'MergeTagsphp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Splitsphp aphp singlephp tagphp intophp twophp separatephp tagsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagphp php php php Tagphp tophp split
php php php php php php*php php@paramphp php stringphp php$toTagphp1php Firstphp tagphp tophp splitphp into
php php php php php php*php php@paramphp php stringphp php$toTagphp2php Secondphp tagphp tophp splitphp into
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/SplitTag
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp splitTagphp(php$tagphp,php php$toTagphp1php,php php$toTagphp2php)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'tagphp'php php=php>php php$tagphp,
php php php php php php php php php php php php php'toTagphp1php'php php=php>php php$toTagphp1php,
php php php php php php php php php php php php php'toTagphp2php'php php=php>php php$toTagphp2
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'SplitTagphp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Performsphp aphp queryphp onphp existingphp linksphp andphp returnsphp thephp resultsphp orphp returnsphp all
php php php php php php*php linksphp ifphp nophp particularphp queryphp isphp specifiedphp php(whichphp shouldphp bephp usedphp sparingly
php php php php php php*php tophp preventphp overloadingphp Simpyphp serversphp)
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Servicephp_Simpyphp_LinkQueryphp php$qphp Queryphp objectphp tophp usephp php(optionalphp)
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp_LinkSet
php php php php php php*php/
php php php php publicphp functionphp getLinksphp(Zendphp_Servicephp_Simpyphp_LinkQueryphp php$qphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$qphp php!php=php nullphp)php php{
php php php php php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php php php php php'qphp'php php php php php php php php php php php=php>php php$qphp-php>getQueryStringphp(php)php,
php php php php php php php php php php php php php php php php php'limitphp'php php php php php php php=php>php php$qphp-php>getLimitphp(php)php,
php php php php php php php php php php php php php php php php php'datephp'php php php php php php php php=php>php php$qphp-php>getDatephp(php)php,
php php php php php php php php php php php php php php php php php'afterDatephp'php php php=php>php php$qphp-php>getAfterDatephp(php)php,
php php php php php php php php php php php php php php php php php'beforeDatephp'php php=php>php php$qphp-php>getBeforeDatephp(php)
php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php$docphp php=php php$thisphp-php>php_makeRequestphp(php'GetLinksphp'php,php php$queryphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$docphp php=php php$thisphp-php>php_makeRequestphp(php'GetLinksphp'php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Simpyphp_LinkSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Simpyphp/LinkSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Simpyphp_LinkSetphp(php$docphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp aphp givenphp linkphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$titlephp php php php php php php Titlephp ofphp thephp pagephp tophp save
php php php php php php*php php@paramphp php stringphp php$hrefphp php php php php php php php URLphp ofphp thephp pagephp tophp save
php php php php php php*php php@paramphp php intphp php php php php$accessTypephp php ACCESSTYPEphp_PUBLICphp orphp ACCESSTYPEphp_PRIVATE
php php php php php php*php php@paramphp php mixedphp php php$tagsphp php php php php php php php Stringphp containingphp aphp commaphp-separatedphp listphp of
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php tagsphp orphp arrayphp ofphp stringsphp containingphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(optionalphp)
php php php php php php*php php@paramphp php stringphp php$urlNicknamephp Alternativephp customphp titlephp php(optionalphp)
php php php php php php*php php@paramphp php stringphp php$notephp php php php php php php php Freephp textphp notephp php(optionalphp)
php php php php php php*php php@linkphp php php Zendphp_Servicephp_Simpyphp:php:ACCESSTYPEphp_PUBLIC
php php php php php php*php php@linkphp php php Zendphp_Servicephp_Simpyphp:php:ACCESSTYPEphp_PRIVATE
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/SaveLink
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp saveLinkphp(php$titlephp,php php$hrefphp,php php$accessTypephp,php php$tagsphp php=php nullphp,php php$urlNicknamephp php=php nullphp,php php$notephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$tagsphp)php)php php{
php php php php php php php php php php php php php$tagsphp php=php implodephp(php'php,php'php,php php$tagsphp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'titlephp'php php php php php php php php=php>php php$titlephp,
php php php php php php php php php php php php php'hrefphp'php php php php php php php php php=php>php php$hrefphp,
php php php php php php php php php php php php php'accessTypephp'php php php=php>php php$accessTypephp,
php php php php php php php php php php php php php'tagsphp'php php php php php php php php php=php>php php$tagsphp,
php php php php php php php php php php php php php'urlNicknamephp'php php=php>php php$urlNicknamephp,
php php php php php php php php php php php php php'notephp'php php php php php php php php php=php>php php$note
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'SaveLinkphp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp givenphp linkphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hrefphp URLphp ofphp thephp bookmarkphp tophp delete
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/DeleteLink
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp deleteLinkphp(php$hrefphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'hrefphp'php php=php>php php$href
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'DeleteLinkphp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp aphp listphp ofphp watchlistsphp andphp theirphp metaphp-dataphp,php includingphp thephp number
php php php php php php*php ofphp newphp linksphp addedphp tophp eachphp watchlistphp sincephp lastphp loginphp.
php php php php php php*
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/GetWatchlists
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp_WatchlistSet
php php php php php php*php/
php php php php publicphp functionphp getWatchlistsphp(php)
php php php php php{
php php php php php php php php php$docphp php=php php$thisphp-php>php_makeRequestphp(php'GetWatchlistsphp'php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Simpyphp_WatchlistSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Simpyphp/WatchlistSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Simpyphp_WatchlistSetphp(php$docphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp metaphp-dataphp forphp aphp givenphp watchlistphp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php$watchlistIdphp IDphp ofphp thephp watchlistphp tophp retrieve
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/GetWatchlist
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp_Watchlist
php php php php php php*php/
php php php php publicphp functionphp getWatchlistphp(php$watchlistIdphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'watchlistIdphp'php php=php>php php$watchlistId
php php php php php php php php php)php;

php php php php php php php php php$docphp php=php php$thisphp-php>php_makeRequestphp(php'GetWatchlistphp'php,php php$queryphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Simpyphp_Watchlist
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Simpyphp/Watchlistphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Simpyphp_Watchlistphp(php$docphp-php>documentElementphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp allphp notesphp inphp reversephp chronologicalphp orderphp byphp addphp datephp orphp by
php php php php php php*php rankphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$qphp php php php php Queryphp stringphp formattedphp usingphp Simpyphp searchphp syntax
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php andphp searchphp fieldsphp php(optionalphp)
php php php php php php*php php@paramphp php intphp php php php php$limitphp Limitsphp thephp numberphp notesphp returnedphp php(optionalphp)
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/GetNotes
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/simpyphp/FAQphp.dophp#searchSyntax
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/simpyphp/FAQphp.dophp#searchFieldsLinks
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp_NoteSet
php php php php php php*php/
php php php php publicphp functionphp getNotesphp(php$qphp php=php nullphp,php php$limitphp php=php nullphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'qphp'php php php php php php=php>php php$qphp,
php php php php php php php php php php php php php'limitphp'php php=php>php php$limit
php php php php php php php php php)php;

php php php php php php php php php$docphp php=php php$thisphp-php>php_makeRequestphp(php'GetNotesphp'php,php php$queryphp)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@seephp Zendphp_Servicephp_Simpyphp_NoteSet
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Servicephp/Simpyphp/NoteSetphp.phpphp'php;
php php php php php php php php returnphp newphp Zendphp_Servicephp_Simpyphp_NoteSetphp(php$docphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Savesphp aphp notephp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$titlephp php php php php php php Titlephp ofphp thephp note
php php php php php php*php php@paramphp php mixedphp php php$tagsphp php php php php php php php Stringphp containingphp aphp commaphp-separatedphp listphp of
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php tagsphp orphp arrayphp ofphp stringsphp containingphp tags
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(optionalphp)
php php php php php php*php php@paramphp php stringphp php$descriptionphp Freephp-textphp notephp php(optionalphp)
php php php php php php*php php@paramphp php intphp php php php php$noteIdphp php php php php php Uniquephp identifierphp forphp anphp existingphp notephp to
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php updatephp php(optionalphp)
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/SaveNote
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp saveNotephp(php$titlephp,php php$tagsphp php=php nullphp,php php$descriptionphp php=php nullphp,php php$noteIdphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$tagsphp)php)php php{
php php php php php php php php php php php php php$tagsphp php=php implodephp(php'php,php'php,php php$tagsphp)php;
php php php php php php php php php}

php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'titlephp'php php php php php php php php=php>php php$titlephp,
php php php php php php php php php php php php php'tagsphp'php php php php php php php php php=php>php php$tagsphp,
php php php php php php php php php php php php php'descriptionphp'php php=php>php php$descriptionphp,
php php php php php php php php php php php php php'noteIdphp'php php php php php php php=php>php php$noteId
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'SaveNotephp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Deletesphp aphp givenphp notephp.
php php php php php php*
php php php php php php*php php@paramphp php intphp php$noteIdphp IDphp ofphp thephp notephp tophp delete
php php php php php php*php php@linkphp php php httpphp:php/php/wwwphp.simpyphp.comphp/docphp/apiphp/restphp/DeleteNote
php php php php php php*php php@returnphp Zendphp_Servicephp_Simpyphp Providesphp aphp fluentphp interface
php php php php php php*php/
php php php php publicphp functionphp deleteNotephp(php$noteIdphp)
php php php php php{
php php php php php php php php php$queryphp php=php arrayphp(
php php php php php php php php php php php php php'noteIdphp'php php=php>php php$noteId
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_makeRequestphp(php'DeleteNotephp'php,php php$queryphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
