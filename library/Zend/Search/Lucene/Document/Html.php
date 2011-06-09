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
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Htmlphp.phpphp php2php3php3php9php2php php2php0php1php0php-php1php1php-php1php9php php0php9php:php5php3php:php1php6Zphp ramonphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp.phpphp'php;


php/php*php*
php php*php HTMLphp documentphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Document
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp extendsphp Zendphp_Searchphp_Lucenephp_Document
php{
php php php php php/php*php*
php php php php php php*php Listphp ofphp documentphp links
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_linksphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp documentphp headerphp links
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_headerLinksphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Storedphp DOMphp representation
php php php php php php*
php php php php php php*php php@varphp DOMDocument
php php php php php php*php/
php php php php privatephp php$php_docphp;

php php php php php/php*php*
php php php php php php*php Excludphp nofollowphp linksphp flag
php php php php php php*
php php php php php php*php Ifphp truephp thenphp linksphp withphp relphp=php'nofollowphp'php attributephp arephp notphp includedphp into
php php php php php php*php documentphp linksphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp staticphp php$php_excludeNoFollowLinksphp php=php falsephp;

php php php php php/php*php*
php php php php php php*
php php php php php php*php Listphp ofphp inlinephp tags
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_inlineTagsphp php=php arrayphp(php'aphp'php,php php'abbrphp'php,php php'acronymphp'php,php php'dfnphp'php,php php'emphp'php,php php'strongphp'php,php php'codephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'sampphp'php,php php'kbdphp'php,php php'varphp'php,php php'bphp'php,php php'iphp'php,php php'bigphp'php,php php'smallphp'php,php php'strikephp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'ttphp'php,php php'uphp'php,php php'fontphp'php,php php'spanphp'php,php php'bdophp'php,php php'citephp'php,php php'delphp'php,php php'insphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'qphp'php,php php'subphp'php,php php'supphp'php)php;

php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$dataphp php php php php php php php php HTMLphp stringphp php(mayphp bephp HTMLphp fragmentphp,php php)
php php php php php php*php php@paramphp booleanphp php$isFile
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@paramphp stringphp php php$defaultEncodingphp php php HTMLphp encodingphp,php isphp usedphp ifphp itphp'sphp notphp specifiedphp usingphp Contentphp-typephp HTTPphp-EQUIVphp metaphp tagphp.
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php$dataphp,php php$isFilephp,php php$storeContentphp,php php$defaultEncodingphp php=php php'php'php)
php php php php php{
php php php php php php php php php$thisphp-php>php_docphp php=php newphp DOMDocumentphp(php)php;
php php php php php php php php php$thisphp-php>php_docphp-php>substituteEntitiesphp php=php truephp;

php php php php php php php php ifphp php(php$isFilephp)php php{
php php php php php php php php php php php php php$htmlDataphp php=php filephp_getphp_contentsphp(php$dataphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$htmlDataphp php=php php$dataphp;
php php php php php php php php php}
php php php php php php php php php@php$thisphp-php>php_docphp-php>loadHTMLphp(php$htmlDataphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_docphp-php>encodingphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php/php/php Documentphp encodingphp isphp notphp recognized

php php php php php php php php php php php php php/php*php*php php@todophp improvephp HTMLphp vsphp HTMLphp fragmentphp recognitionphp php*php/
php php php php php php php php php php php php ifphp php(pregphp_matchphp(php'php/php<htmlphp[php^php>php]php*php>php/iphp'php,php php$htmlDataphp,php php$matchesphp,php PREGphp_OFFSETphp_CAPTUREphp)php)php php{
php php php php php php php php php php php php php php php php php/php/php Itphp'sphp anphp HTMLphp document
php php php php php php php php php php php php php php php php php/php/php Addphp additionalphp HEADphp sectionphp andphp recognizephp document
php php php php php php php php php php php php php php php php php$htmlTagOffsetphp php=php php$matchesphp[php0php]php[php1php]php php+php strlenphp(php$matchesphp[php0php]php[php0php]php)php;

php php php php php php php php php php php php php php php php php@php$thisphp-php>php_docphp-php>loadHTMLphp(iconvphp(php$defaultEncodingphp,php php'UTFphp-php8php/php/IGNOREphp'php,php substrphp(php$htmlDataphp,php php0php,php php$htmlTagOffsetphp)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php<headphp>php<METAphp HTTPphp-EQUIVphp=php"Contentphp-typephp"php CONTENTphp=php"textphp/htmlphp;php charsetphp=UTFphp-php8php"php/php><php/headphp>php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php iconvphp(php$defaultEncodingphp,php php'UTFphp-php8php/php/IGNOREphp'php,php substrphp(php$htmlDataphp,php php$htmlTagOffsetphp)php)php)php;

php php php php php php php php php php php php php php php php php/php/php Removephp additionalphp HEADphp section
php php php php php php php php php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$thisphp-php>php_docphp)php;
php php php php php php php php php php php php php php php php php$headphp php php=php php$xpathphp-php>queryphp(php'php/htmlphp/headphp'php)php-php>itemphp(php0php)php;
php php php php php php php php php php php php php php php php php$headphp-php>parentNodephp-php>removeChildphp(php$headphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Itphp'sphp anphp HTMLphp fragment
php php php php php php php php php php php php php php php php php@php$thisphp-php>php_docphp-php>loadHTMLphp(php'php<htmlphp>php<headphp>php<METAphp HTTPphp-EQUIVphp=php"Contentphp-typephp"php CONTENTphp=php"textphp/htmlphp;php charsetphp=UTFphp-php8php"php/php><php/headphp>php<bodyphp>php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php iconvphp(php$defaultEncodingphp,php php'UTFphp-php8php/php/IGNOREphp'php,php php$htmlDataphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'<php/bodyphp><php/htmlphp>php'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}
php php php php php php php php php/php*php*php php@todophp Addphp correctionphp ofphp wrongphp HTMLphp encodingphp recognitionphp processing
php php php php php php php php php php*php Thephp casephp isphp:
php php php php php php php php php php*php Contentphp-typephp HTTPphp-EQUIVphp metaphp tagphp isphp presentedphp,php butphp ISOphp-php8php8php5php9php-php5php encodingphp isphp actuallyphp usedphp,
php php php php php php php php php php*php evenphp php$thisphp-php>php_docphp-php>encodingphp demonstratesphp anotherphp recognizedphp encoding
php php php php php php php php php php*php/

php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$thisphp-php>php_docphp)php;

php php php php php php php php php$docTitlephp php=php php'php'php;
php php php php php php php php php$titleNodesphp php=php php$xpathphp-php>queryphp(php'php/htmlphp/headphp/titlephp'php)php;
php php php php php php php php foreachphp php(php$titleNodesphp asphp php$titleNodephp)php php{
php php php php php php php php php php php php php/php/php titlephp shouldphp alwaysphp havephp onlyphp onephp entryphp,php butphp wephp processphp allphp nodesetphp entries
php php php php php php php php php php php php php$docTitlephp php.php=php php$titleNodephp-php>nodeValuephp php.php php'php php'php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'titlephp'php,php php$docTitlephp,php php'UTFphp-php8php'php)php)php;

php php php php php php php php php$metaNodesphp php=php php$xpathphp-php>queryphp(php'php/htmlphp/headphp/metaphp[php@namephp]php'php)php;
php php php php php php php php foreachphp php(php$metaNodesphp asphp php$metaNodephp)php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php$metaNodephp-php>getAttributephp(php'namephp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$metaNodephp-php>getAttributephp(php'contentphp'php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}

php php php php php php php php php$docBodyphp php=php php'php'php;
php php php php php php php php php$bodyNodesphp php=php php$xpathphp-php>queryphp(php'php/htmlphp/bodyphp'php)php;
php php php php php php php php foreachphp php(php$bodyNodesphp asphp php$bodyNodephp)php php{
php php php php php php php php php php php php php/php/php bodyphp shouldphp alwaysphp havephp onlyphp onephp entryphp,php butphp wephp processphp allphp nodesetphp entries
php php php php php php php php php php php php php$thisphp-php>php_retrieveNodeTextphp(php$bodyNodephp,php php$docBodyphp)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php$storeContentphp)php php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:Textphp(php'bodyphp'php,php php$docBodyphp,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>addFieldphp(Zendphp_Searchphp_Lucenephp_Fieldphp:php:UnStoredphp(php'bodyphp'php,php php$docBodyphp,php php'UTFphp-php8php'php)php)php;
php php php php php php php php php}

php php php php php php php php php$linkNodesphp php=php php$thisphp-php>php_docphp-php>getElementsByTagNamephp(php'aphp'php)php;
php php php php php php php php foreachphp php(php$linkNodesphp asphp php$linkNodephp)php php{
php php php php php php php php php php php php ifphp php(php(php$hrefphp php=php php$linkNodephp-php>getAttributephp(php'hrefphp'php)php)php php!php=php php'php'php php&php&
php php php php php php php php php php php php php php php php php(php!selfphp:php:php$php_excludeNoFollowLinksphp php php|php|php php strtolowerphp(php$linkNodephp-php>getAttributephp(php'relphp'php)php)php php!php=php php'nofollowphp'php php)
php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_linksphp[php]php php=php php$hrefphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$linkNodesphp php=php php$thisphp-php>php_docphp-php>getElementsByTagNamephp(php'areaphp'php)php;
php php php php php php php php foreachphp php(php$linkNodesphp asphp php$linkNodephp)php php{
php php php php php php php php php php php php ifphp php(php(php$hrefphp php=php php$linkNodephp-php>getAttributephp(php'hrefphp'php)php)php php!php=php php'php'php php&php&
php php php php php php php php php php php php php php php php php(php!selfphp:php:php$php_excludeNoFollowLinksphp php php|php|php php strtolowerphp(php$linkNodephp-php>getAttributephp(php'relphp'php)php)php php!php=php php'nofollowphp'php php)
php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_linksphp[php]php php=php php$hrefphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_linksphp php=php arrayphp_uniquephp(php$thisphp-php>php_linksphp)php;

php php php php php php php php php$linkNodesphp php=php php$xpathphp-php>queryphp(php'php/htmlphp/headphp/linkphp'php)php;
php php php php php php php php foreachphp php(php$linkNodesphp asphp php$linkNodephp)php php{
php php php php php php php php php php php php ifphp php(php(php$hrefphp php=php php$linkNodephp-php>getAttributephp(php'hrefphp'php)php)php php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_headerLinksphp[php]php php=php php$hrefphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_headerLinksphp php=php arrayphp_uniquephp(php$thisphp-php>php_headerLinksphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp excludephp nofollowphp linksphp flag
php php php php php php*
php php php php php php*php php@paramphp booleanphp php$newValue
php php php php php php*php/
php php php php publicphp staticphp functionphp setExcludeNoFollowLinksphp(php$newValuephp)
php php php php php{
php php php php php php php php selfphp:php:php$php_excludeNoFollowLinksphp php=php php$newValuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp excludephp nofollowphp linksphp flag
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp getExcludeNoFollowLinksphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_excludeNoFollowLinksphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp nodephp text
php php php php php php*
php php php php php php*php Wephp shouldphp excludephp scriptsphp,php whichphp mayphp bephp notphp includedphp intophp commentphp tagsphp,php CDATAphp sectionsphp,
php php php php php php*
php php php php php php*php php@paramphp DOMNodephp php$node
php php php php php php*php php@paramphp stringphp php&php$text
php php php php php php*php/
php php php php privatephp functionphp php_retrieveNodeTextphp(DOMNodephp php$nodephp,php php&php$textphp)
php php php php php{
php php php php php php php php ifphp php(php$nodephp-php>nodeTypephp php=php=php XMLphp_TEXTphp_NODEphp)php php{
php php php php php php php php php php php php php$textphp php.php=php php$nodephp-php>nodeValuephp;
php php php php php php php php php php php php ifphp(php!inphp_arrayphp(php$nodephp-php>parentNodephp-php>tagNamephp,php php$thisphp-php>php_inlineTagsphp)php)php php{
php php php php php php php php php php php php php php php php php$textphp php.php=php php'php php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp ifphp php(php$nodephp-php>nodeTypephp php=php=php XMLphp_ELEMENTphp_NODEphp php php&php&php php php$nodephp-php>nodeNamephp php!php=php php'scriptphp'php)php php{
php php php php php php php php php php php php foreachphp php(php$nodephp-php>childNodesphp asphp php$childNodephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_retrieveNodeTextphp(php$childNodephp,php php$textphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp HREFphp links
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLinksphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_linksphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp headerphp links
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHeaderLinksphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_headerLinksphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp HTMLphp documentphp fromphp aphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$data
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@paramphp stringphp php php$defaultEncodingphp php php HTMLphp encodingphp,php isphp usedphp ifphp itphp'sphp notphp specifiedphp usingphp Contentphp-typephp HTTPphp-EQUIVphp metaphp tagphp.
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Documentphp_Html
php php php php php php*php/
php php php php publicphp staticphp functionphp loadHTMLphp(php$dataphp,php php$storeContentphp php=php falsephp,php php$defaultEncodingphp php=php php'php'php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp(php$dataphp,php falsephp,php php$storeContentphp,php php$defaultEncodingphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp HTMLphp documentphp fromphp aphp file
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$file
php php php php php php*php php@paramphp booleanphp php$storeContent
php php php php php php*php php@paramphp stringphp php php$defaultEncodingphp php php HTMLphp encodingphp,php isphp usedphp ifphp itphp'sphp notphp specifiedphp usingphp Contentphp-typephp HTTPphp-EQUIVphp metaphp tagphp.
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Documentphp_Html
php php php php php php*php/
php php php php publicphp staticphp functionphp loadHTMLFilephp(php$filephp,php php$storeContentphp php=php falsephp,php php$defaultEncodingphp php=php php'php'php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp(php$filephp,php truephp,php php$storeContentphp,php php$defaultEncodingphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Highlightphp textphp inphp textphp node
php php php php php php*
php php php php php php*php php@paramphp DOMTextphp php$node
php php php php php php*php php@paramphp arrayphp php php php$wordsToHighlight
php php php php php php*php php@paramphp callbackphp php$callbackphp php php Callbackphp methodphp,php usedphp tophp transformphp php(highlightingphp)php textphp.
php php php php php php*php php@paramphp arrayphp php php php php$paramsphp php php php php Arrayphp ofphp additionallphp callbackphp parametersphp php(firstphp nonphp-optionalphp parameterphp isphp aphp textphp tophp transformphp)
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php protectedphp functionphp php_highlightTextNodephp(DOMTextphp php$nodephp,php php$wordsToHighlightphp,php php$callbackphp,php php$paramsphp)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;

php php php php php php php php php$analyzerphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php;
php php php php php php php php php$analyzerphp-php>setInputphp(php$nodephp-php>nodeValuephp,php php'UTFphp-php8php'php)php;

php php php php php php php php php$matchedTokensphp php=php arrayphp(php)php;

php php php php php php php php whilephp php(php(php$tokenphp php=php php$analyzerphp-php>nextTokenphp(php)php)php php!php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$wordsToHighlightphp[php$tokenphp-php>getTermTextphp(php)php]php)php)php php{
php php php php php php php php php php php php php php php php php$matchedTokensphp[php]php php=php php$tokenphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$matchedTokensphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$matchedTokensphp php=php arrayphp_reversephp(php$matchedTokensphp)php;

php php php php php php php php foreachphp php(php$matchedTokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php/php/php Cutphp textphp afterphp matchedphp token
php php php php php php php php php php php php php$nodephp-php>splitTextphp(php$tokenphp-php>getEndOffsetphp(php)php)php;

php php php php php php php php php php php php php/php/php Cutphp matchedphp node
php php php php php php php php php php php php php$matchedWordNodephp php=php php$nodephp-php>splitTextphp(php$tokenphp-php>getStartOffsetphp(php)php)php;

php php php php php php php php php php php php php/php/php Retrievephp HTMLphp stringphp representationphp forphp highlihtedphp word
php php php php php php php php php php php php php$fullCallbackparamsListphp php=php php$paramsphp;
php php php php php php php php php php php php arrayphp_unshiftphp(php$fullCallbackparamsListphp,php php$matchedWordNodephp-php>nodeValuephp)php;
php php php php php php php php php php php php php$highlightedWordNodeSetHtmlphp php=php callphp_userphp_funcphp_arrayphp(php$callbackphp,php php$fullCallbackparamsListphp)php;

php php php php php php php php php php php php php/php/php Transformphp HTMLphp stringphp tophp aphp DOMphp representationphp andphp automaticallyphp transformphp retrievedphp string
php php php php php php php php php php php php php/php/php intophp validphp XHTMLphp php(Itphp'sphp automaticallyphp donephp byphp loadHTMLphp(php)php methodphp)
php php php php php php php php php php php php php$highlightedWordNodeSetDomDocumentphp php=php newphp DOMDocumentphp(php'php1php.php0php'php,php php'UTFphp-php8php'php)php;
php php php php php php php php php php php php php$successphp php=php php@php$highlightedWordNodeSetDomDocumentphp-php>
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php loadHTMLphp(php'php<htmlphp>php<headphp>php<metaphp httpphp-equivphp=php"Contentphp-typephp"php contentphp=php"textphp/htmlphp;php charsetphp=UTFphp-php8php"php/php><php/headphp>php<bodyphp>php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$highlightedWordNodeSetHtml
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'<php/bodyphp><php/htmlphp>php'php)php;
php php php php php php php php php php php php ifphp php(php!php$successphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php"Errorphp occuredphp whilephp loadingphp highlightedphp textphp fragmentphp:php php'php$highlightedWordNodeSetHtmlphp'php.php"php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$highlightedWordNodeSetXpathphp php=php newphp DOMXPathphp(php$highlightedWordNodeSetDomDocumentphp)php;
php php php php php php php php php php php php php$highlightedWordNodeSetphp php php php php php php=php php$highlightedWordNodeSetXpathphp-php>queryphp(php'php/htmlphp/bodyphp'php)php-php>itemphp(php0php)php-php>childNodesphp;

php php php php php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$highlightedWordNodeSetphp-php>lengthphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php php php php php$nodeToImportphp php=php php$highlightedWordNodeSetphp-php>itemphp(php$countphp)php;
php php php php php php php php php php php php php php php php php$nodephp-php>parentNodephp-php>insertBeforephp(php$thisphp-php>php_docphp-php>importNodephp(php$nodeToImportphp,php truephp php/php*php deepphp copyphp php*php/php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$matchedWordNodephp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$nodephp-php>parentNodephp-php>removeChildphp(php$matchedWordNodephp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php highlightphp wordsphp inphp contentphp ofphp thephp specifiedphp node
php php php php php php*
php php php php php php*php php@paramphp DOMNodephp php$contextNode
php php php php php php*php php@paramphp arrayphp php$wordsToHighlight
php php php php php php*php php@paramphp callbackphp php$callbackphp php php Callbackphp methodphp,php usedphp tophp transformphp php(highlightingphp)php textphp.
php php php php php php*php php@paramphp arrayphp php php php php$paramsphp php php php php Arrayphp ofphp additionallphp callbackphp parametersphp php(firstphp nonphp-optionalphp parameterphp isphp aphp textphp tophp transformphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightNodeRecursivephp(DOMNodephp php$contextNodephp,php php$wordsToHighlightphp,php php$callbackphp,php php$paramsphp)
php php php php php{
php php php php php php php php php$textNodesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!php$contextNodephp-php>hasChildNodesphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$contextNodephp-php>childNodesphp asphp php$childNodephp)php php{
php php php php php php php php php php php php ifphp php(php$childNodephp-php>nodeTypephp php=php=php XMLphp_TEXTphp_NODEphp)php php{
php php php php php php php php php php php php php php php php php/php/php processphp nodephp laterphp tophp leavephp childNodesphp structurephp untouched
php php php php php php php php php php php php php php php php php$textNodesphp[php]php php=php php$childNodephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Processphp nodephp ifphp itphp'sphp notphp aphp scriptphp node
php php php php php php php php php php php php php php php php ifphp php(php$childNodephp-php>nodeNamephp php!php=php php'scriptphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_highlightNodeRecursivephp(php$childNodephp,php php$wordsToHighlightphp,php php$callbackphp,php php$paramsphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$textNodesphp asphp php$textNodephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_highlightTextNodephp(php$textNodephp,php php$wordsToHighlightphp,php php$callbackphp,php php$paramsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Standardphp callbackphp methodphp usedphp tophp highlightphp wordsphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php php$stringToHighlight
php php php php php php*php php@returnphp string
php php php php php php*php php@internal
php php php php php php*php/
php php php php publicphp functionphp applyColourphp(php$stringToHighlightphp,php php$colourphp)
php php php php php{
php php php php php php php php returnphp php'php<bphp stylephp=php"colorphp:blackphp;backgroundphp-colorphp:php'php php.php php$colourphp php.php php'php"php>php'php php.php php$stringToHighlightphp php.php php'<php/bphp>php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Highlightphp textphp withphp specifiedphp color
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$words
php php php php php php*php php@paramphp stringphp php$colour
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp highlightphp(php$wordsphp,php php$colourphp php=php php'php#php6php6ffffphp'php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>highlightExtendedphp(php$wordsphp,php arrayphp(php$thisphp,php php'applyColourphp'php)php,php arrayphp(php$colourphp)php)php;
php php php php php}



php php php php php/php*php*
php php php php php php*php Highlightphp textphp usingphp specifiedphp Viewphp helperphp orphp callbackphp functionphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$wordsphp php Wordsphp tophp highlightphp.php Wordsphp couldphp bephp organizedphp usingphp thephp arrayphp orphp stringphp.
php php php php php php*php php@paramphp callbackphp php$callbackphp php php Callbackphp methodphp,php usedphp tophp transformphp php(highlightingphp)php textphp.
php php php php php php*php php@paramphp arrayphp php php php php$paramsphp php php php php Arrayphp ofphp additionallphp callbackphp parametersphp passedphp throughphp intophp it
php php php php php php*php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php(firstphp nonphp-optionalphp parameterphp isphp anphp HTMLphp fragmentphp forphp highlightingphp)
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp highlightExtendedphp(php$wordsphp,php php$callbackphp,php php$paramsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$wordsphp)php)php php{
php php php php php php php php php php php php php$wordsphp php=php arrayphp(php$wordsphp)php;
php php php php php php php php php}

php php php php php php php php php$wordsToHighlightListphp php=php arrayphp(php)php;
php php php php php php php php php$analyzerphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php;
php php php php php php php php foreachphp php(php$wordsphp asphp php$wordStringphp)php php{
php php php php php php php php php php php php php$wordsToHighlightListphp[php]php php=php php$analyzerphp-php>tokenizephp(php$wordStringphp)php;
php php php php php php php php php}
php php php php php php php php php$wordsToHighlightphp php=php callphp_userphp_funcphp_arrayphp(php'arrayphp_mergephp'php,php php$wordsToHighlightListphp)php;

php php php php php php php php ifphp php(countphp(php$wordsToHighlightphp)php php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_docphp-php>saveHTMLphp(php)php;
php php php php php php php php php}

php php php php php php php php php$wordsToHighlightFlippedphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$wordsToHighlightphp asphp php$idphp php=php>php php$tokenphp)php php{
php php php php php php php php php php php php php$wordsToHighlightFlippedphp[php$tokenphp-php>getTermTextphp(php)php]php php=php php$idphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'php$viewHelperphp parameterphp mastphp bephp aphp Viewphp Helperphp namephp,php Viewphp Helperphp objectphp orphp callbackphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$thisphp-php>php_docphp)php;

php php php php php php php php php$matchedNodesphp php=php php$xpathphp-php>queryphp(php"php/htmlphp/bodyphp"php)php;
php php php php php php php php foreachphp php(php$matchedNodesphp asphp php$matchedNodephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_highlightNodeRecursivephp(php$matchedNodephp,php php$wordsToHighlightFlippedphp,php php$callbackphp,php php$paramsphp)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp HTML
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHTMLphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docphp-php>saveHTMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp HTMLphp body
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHtmlBodyphp(php)
php php php php php{
php php php php php php php php php$xpathphp php=php newphp DOMXPathphp(php$thisphp-php>php_docphp)php;
php php php php php php php php php$bodyNodesphp php=php php$xpathphp-php>queryphp(php'php/htmlphp/bodyphp'php)php-php>itemphp(php0php)php-php>childNodesphp;

php php php php php php php php php$outputFragmentsphp php=php arrayphp(php)php;
php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$bodyNodesphp-php>lengthphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php$outputFragmentsphp[php]php php=php php$thisphp-php>php_docphp-php>saveXMLphp(php$bodyNodesphp-php>itemphp(php$countphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp implodephp(php$outputFragmentsphp)php;
php php php php php}
php}

