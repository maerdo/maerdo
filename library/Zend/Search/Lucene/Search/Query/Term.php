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
php php*php php@versionphp php php php php$Idphp:php Termphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php{
php php php php php/php*php*
php php php php php php*php Termphp tophp findphp.
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php privatephp php$php_termphp;

php php php php php/php*php*
php php php php php php*php Documentsphp vectorphp.
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_docVectorphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Termphp freqsphp vectorphp.
php php php php php php*php arrayphp(docIdphp php=php>php freqphp,php php.php.php.php)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_termFreqsphp;


php php php php php/php*php*
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp constructor
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$term
php php php php php php*php php@paramphp booleanphp php$sign
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Searchphp_Lucenephp_Indexphp_Termphp php$termphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_termphp php=php php$termphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_termphp-php>fieldphp php!php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$indexphp-php>getFieldNamesphp(truephp)php asphp php$fieldNamephp)php php{
php php php php php php php php php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$thisphp-php>php_termphp-php>textphp,php php$fieldNamephp)php;

php php php php php php php php php php php php php php php php php$queryphp-php>addTermphp(php$termphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp php$queryphp-php>rewritephp(php$indexphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Optimizephp queryphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp optimizephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php php/php/php Checkphp,php thatphp indexphp containsphp specifiedphp term
php php php php php php php php ifphp php(php!php$indexphp-php>hasTermphp(php$thisphp-php>php_termphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Constructsphp anphp appropriatephp Weightphp implementationphp forphp thisphp queryphp.
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Weight
php php php php php php*php/
php php php php publicphp functionphp createWeightphp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Weightphp/Termphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_weightphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Weightphp_Termphp(php$thisphp-php>php_termphp,php php$thisphp,php php$readerphp)php;
php php php php php php php php returnphp php$thisphp-php>php_weightphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp queryphp inphp contextphp ofphp indexphp reader
php php php php php php*php Itphp alsophp initializesphp necessaryphp internalphp structures
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Indexphp_DocsFilterphp|nullphp php$docsFilter
php php php php php php*php/
php php php php publicphp functionphp executephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp,php php$docsFilterphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_docVectorphp php=php arrayphp_flipphp(php$readerphp-php>termDocsphp(php$thisphp-php>php_termphp,php php$docsFilterphp)php)php;
php php php php php php php php php$thisphp-php>php_termFreqsphp php=php php$readerphp-php>termFreqsphp(php$thisphp-php>php_termphp,php php$docsFilterphp)php;

php php php php php php php php php/php/php Initializephp weightphp ifphp itphp'sphp notphp donephp yet
php php php php php php php php php$thisphp-php>php_initWeightphp(php$readerphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp documentphp idsphp likelyphp matchingphp thephp query
php php php php php php*
php php php php php php*php Itphp'sphp anphp arrayphp withphp documentphp idsphp asphp keysphp php(performancephp considerationsphp)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp matchedDocsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_docVectorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Scorephp specifiedphp document
php php php php php php*
php php php php php php*php php@paramphp integerphp php$docId
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$reader
php php php php php php*php php@returnphp float
php php php php php php*php/
php php php php publicphp functionphp scorephp(php$docIdphp,php Zendphp_Searchphp_Lucenephp_Interfacephp php$readerphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_docVectorphp[php$docIdphp]php)php)php php{
php php php php php php php php php php php php returnphp php$readerphp-php>getSimilarityphp(php)php-php>tfphp(php$thisphp-php>php_termFreqsphp[php$docIdphp]php)php php*
php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_weightphp-php>getValuephp(php)php php*
php php php php php php php php php php php php php php php php php php php php$readerphp-php>normphp(php$docIdphp,php php$thisphp-php>php_termphp-php>fieldphp)php php*
php php php php php php php php php php php php php php php php php php php php$thisphp-php>getBoostphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp terms
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getQueryTermsphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php$thisphp-php>php_termphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp queryphp term
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Indexphp_Term
php php php php php php*php/
php php php php publicphp functionphp getTermphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_termphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php php$highlighterphp-php>highlightphp(php$thisphp-php>php_termphp-php>textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Printphp aphp query
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php/php/php Itphp'sphp usedphp onlyphp forphp queryphp visualisationphp,php sophp wephp donphp'tphp carephp aboutphp charactersphp escaping
php php php php php php php php ifphp php(php$thisphp-php>php_termphp-php>fieldphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$queryphp php=php php$thisphp-php>php_termphp-php>fieldphp php.php php'php:php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$queryphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$queryphp php.php=php php$thisphp-php>php_termphp-php>textphp;

php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php php{
php php php php php php php php php php php php php$queryphp php=php php$queryphp php.php php'php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}

