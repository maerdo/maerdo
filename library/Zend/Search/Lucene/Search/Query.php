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
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Queryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{
php php php php php/php*php*
php php php php php php*php queryphp boostphp factor
php php php php php php*
php php php php php php*php php@varphp float
php php php php php php*php/
php php php php privatephp php$php_boostphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Queryphp weight
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php/
php php php php protectedphp php$php_weightphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp highlightphp color
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_currentColorIndexphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Getsphp thephp boostphp forphp thisphp clausephp.php php Documentsphp matching
php php php php php php*php thisphp clausephp willphp php(inphp additionphp tophp thephp normalphp weightingsphp)php havephp theirphp score
php php php php php php*php multipliedphp byphp boostphp.php php php Thephp boostphp isphp php1php.php0php byphp defaultphp.
php php php php php php*
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp getBoostphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_boostphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp thephp boostphp forphp thisphp queryphp clausephp tophp php$boostphp.
php php php php php php*
php php php php php php*php php@paramphp floatphp php$boost
php php php php php php*php/
php php php php publicphp functionphp setBoostphp(php$boostphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_boostphp php=php php$boostphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp specifiedphp document
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php abstractphp publicphp functionphp scorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)php;

php php php php php/php*php*
php php php php php php*php Getphp documentphp idsphp likelyphp matchingphp thephp query
php php php php php php*
php php php php php php*php Itphp'sphp anphp arrayphp withphp documentphp idsphp asphp keysphp php(performancephp considerationsphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp publicphp functionphp matchedDocsphp(php)php;

php php php php php/php*php*
php php php php php php*php Executephp queryphp inphp contextphp ofphp indexphp reader
php php php php php php*php Itphp alsophp initializesphp necessaryphp internalphp structures
php php php php php php*
php php php php php php*php Queryphp specificphp implementation
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php/
php php php php abstractphp publicphp functionphp executephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp,php php$docsFilterphp php=php nullphp)php;

php php php php php/php*php*
php php php php php php*php Constructsphp anphp appropriatephp Weightphp implementationphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php/
php php php php abstractphp publicphp functionphp createWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)php;

php php php php php/php*php*
php php php php php php*php Constructsphp anphp initializesphp aphp Weightphp forphp aphp php_topphp-levelphp_queryphp_php.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php/
php php php php protectedphp functionphp php_initWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php php/php/php Checkphp,php thatphp itphp'sphp aphp topphp-levelphp queryphp andphp queryphp weightphp isphp notphp initializedphp yetphp.
php php php php php php php php ifphp php(php$thisphp-php>php_weightphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_weightphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>createWeightphp(php$readerphp)php;
php php php php php php php php php$sumphp php=php php$thisphp-php>php_weightphp-php>sumOfSquaredWeightsphp(php)php;
php php php php php php php php php$queryNormphp php=php php$readerphp-php>getSimilarityphp(php)php-php>queryNormphp(php$sumphp)php;
php php php php php php php php php$thisphp-php>php_weightphp-php>normalizephp(php$queryNormphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php abstractphp publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)php;

php php php php php/php*php*
php php php php php php*php Optimizephp queryphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php abstractphp publicphp functionphp optimizephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)php;

php php php php php/php*php*
php php php php php php*php Resetphp queryphp,php sophp itphp canphp bephp reusedphp withinphp otherphp queriesphp or
php php php php php php*php withphp otherphp indeces
php php php php php php*php/
php php php php publicphp functionphp resetphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_weightphp php=php nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Printphp aphp query
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php abstractphp publicphp functionphp php_php_toStringphp(php)php;

php php php php php/php*php*
php php php php php php*php Returnphp queryphp terms
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php abstractphp publicphp functionphp getQueryTermsphp(php)php;

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php abstractphp protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)php;

php php php php php/php*php*
php php php php php php*php Highlightphp matchesphp inphp php$inputHTML
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inputHTML
php php php php php php*php php@paramphp stringphp php php$defaultEncodingphp php php HTMLphp encodingphp,php isphp usedphp ifphp itphp'sphp notphp specifiedphp usingphp Contentphp-typephp HTTPphp-EQUIVphp metaphp tagphp.
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp|nullphp php$highlighter
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp highlightMatchesphp(php$inputHTMLphp,php php$defaultEncodingphp php=php php'php'php,php php$highlighterphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$highlighterphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Highlighterphp/Defaultphp.phpphp'php;
php php php php php php php php php php php php php$highlighterphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Defaultphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp/Htmlphp.phpphp'php;

php php php php php php php php php$docphp php=php Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp:php:loadHTMLphp(php$inputHTMLphp,php falsephp,php php$defaultEncodingphp)php;
php php php php php php php php php$highlighterphp-php>setDocumentphp(php$docphp)php;

php php php php php php php php php$thisphp-php>php_highlightMatchesphp(php$highlighterphp)php;

php php php php php php php php returnphp php$docphp-php>getHTMLphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Highlightphp matchesphp inphp php$inputHtmlFragmentphp andphp returnphp itphp php(withoutphp HTMLphp headerphp andphp bodyphp tagphp)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inputHtmlFragment
php php php php php php*php php@paramphp stringphp php php$encodingphp php php Inputphp HTMLphp stringphp encoding
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp|nullphp php$highlighter
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp htmlFragmentHighlightMatchesphp(php$inputHtmlFragmentphp,php php$encodingphp php=php php'UTFphp-php8php'php,php php$highlighterphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$highlighterphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Highlighterphp/Defaultphp.phpphp'php;
php php php php php php php php php php php php php$highlighterphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Defaultphp(php)php;
php php php php php php php php php}

php php php php php php php php php$inputHTMLphp php=php php'php<htmlphp>php<headphp>php<METAphp HTTPphp-EQUIVphp=php"Contentphp-typephp"php CONTENTphp=php"textphp/htmlphp;php charsetphp=UTFphp-php8php"php/php><php/headphp>php<bodyphp>php'
php php php php php php php php php php php php php php php php php php php php.php iconvphp(php$encodingphp,php php'UTFphp-php8php/php/IGNOREphp'php,php php$inputHtmlFragmentphp)php php.php php'<php/bodyphp><php/htmlphp>php'php;

php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Documentphp/Htmlphp.phpphp'php;

php php php php php php php php php$docphp php=php Zendphp_Searchphp_Lucenephp_Documentphp_Htmlphp:php:loadHTMLphp(php$inputHTMLphp)php;
php php php php php php php php php$highlighterphp-php>setDocumentphp(php$docphp)php;

php php php php php php php php php$thisphp-php>php_highlightMatchesphp(php$highlighterphp)php;

php php php php php php php php returnphp php$docphp-php>getHtmlBodyphp(php)php;
php php php php php}
php}

