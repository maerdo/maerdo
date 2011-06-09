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


php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Processingphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Preprocessingphp.phpphp'php;


php/php*php*
php php*php Itphp'sphp anphp internalphp abstractphp classphp intendedphp tophp finalizephp asephp aphp queryphp processingphp afterphp queryphp parsingphp.
php php*php Thisphp typephp ofphp queryphp isphp notphp actuallyphp involvedphp intophp queryphp executionphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@internal
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessingphp_Termphp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessing
php{
php php php php php/php*php*
php php php php php php*php wordphp php(queryphp parserphp lexemephp)php tophp findphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_wordphp;

php php php php php/php*php*
php php php php php php*php Wordphp encodingphp php(fieldphp namephp isphp alwaysphp providedphp usingphp UTFphp-php8php encodingphp sincephp itphp mayphp bephp retrievedphp fromphp indexphp)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_encodingphp;


php php php php php/php*php*
php php php php php php*php Fieldphp namephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_fieldphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Createphp aphp newphp preprocessingphp objectphp forphp prasephp queryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$wordphp php php php php php php Nonphp-tokenizedphp wordphp php(queryphp parserphp lexemephp)php tophp searchphp.
php php php php php php*php php@paramphp stringphp php$encodingphp php php Wordphp encodingphp.
php php php php php php*php php@paramphp stringphp php$fieldNamephp php Fieldphp namephp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$wordphp,php php$encodingphp,php php$fieldNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_wordphp php php php php php=php php$wordphp;
php php php php php php php php php$thisphp-php>php_encodingphp php=php php$encodingphp;
php php php php php php php php php$thisphp-php>php_fieldphp php php php php=php php$fieldNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_fieldphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php php$hasInsignificantSubqueriesphp php=php falsephp;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp:php:getDefaultSearchFieldphp(php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$searchFieldsphp php=php php$indexphp-php>getFieldNamesphp(truephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$searchFieldsphp php=php arrayphp(Zendphp_Searchphp_Lucenephp:php:getDefaultSearchFieldphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Preprocessingphp/Termphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$searchFieldsphp asphp php$fieldNamephp)php php{
php php php php php php php php php php php php php php php php php$subqueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessingphp_Termphp(php$thisphp-php>php_wordphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_encodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldNamephp)php;
php php php php php php php php php php php php php php php php php$rewrittenSubqueryphp php=php php$subqueryphp-php>rewritephp(php$indexphp)php;
php php php php php php php php php php php php php php php php foreachphp php(php$rewrittenSubqueryphp-php>getQueryTermsphp(php)php asphp php$termphp)php php{
php php php php php php php php php php php php php php php php php php php php php$queryphp-php>addTermphp(php$termphp)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php$rewrittenSubqueryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp)php php{
php php php php php php php php php php php php php php php php php php php php php$hasInsignificantSubqueriesphp php=php truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(php$queryphp-php>getTermsphp(php)php)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$hasInsignificantSubqueriesphp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Insignificantphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp(php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Emptyphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Emptyphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;
php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php}

php php php php php php php php php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php/php/php Recognizephp exactphp termphp matchingphp php(itphp correspondsphp tophp Keywordphp fieldsphp storedphp inphp thephp indexphp)
php php php php php php php php php/php/php encodingphp isphp notphp usedphp sincephp wephp expectphp binaryphp matching
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$thisphp-php>php_wordphp,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php ifphp php(php$indexphp-php>hasTermphp(php$termphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(php$termphp)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;
php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php}


php php php php php php php php php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php/php/php Recognizephp wildcardphp queries

php php php php php php php php php/php*php*php php@todophp checkphp forphp PCREphp unicodephp supportphp mayphp bephp performedphp throughphp Zendphp_Environmentphp inphp somephp futurephp php*php/
php php php php php php php php ifphp php(php@pregphp_matchphp(php'php/php\pLphp/uphp'php,php php'aphp'php)php php=php=php php1php)php php{
php php php php php php php php php php php php php$wordphp php=php iconvphp(php$thisphp-php>php_encodingphp,php php'UTFphp-php8php'php,php php$thisphp-php>php_wordphp)php;
php php php php php php php php php php php php php$wildcardsPatternphp php=php php'php/php[php*php?php]php/uphp'php;
php php php php php php php php php php php php php$subPatternsEncodingphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$wordphp php=php php$thisphp-php>php_wordphp;
php php php php php php php php php php php php php$wildcardsPatternphp php=php php'php/php[php*php?php]php/php'php;
php php php php php php php php php php php php php$subPatternsEncodingphp php=php php$thisphp-php>php_encodingphp;
php php php php php php php php php}

php php php php php php php php php$subPatternsphp php=php pregphp_splitphp(php$wildcardsPatternphp,php php$wordphp,php php-php1php,php PREGphp_SPLITphp_OFFSETphp_CAPTUREphp)php;

php php php php php php php php ifphp php(countphp(php$subPatternsphp)php php>php php1php)php php{
php php php php php php php php php php php php php/php/php Wildcardphp queryphp isphp recognized

php php php php php php php php php php php php php$patternphp php=php php'php'php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$subPatternsphp asphp php$idphp php=php>php php$subPatternphp)php php{
php php php php php php php php php php php php php php php php php/php/php Appendphp correspondingphp wildcardphp characterphp tophp thephp patternphp beforephp eachphp subphp-patternphp php(exceptphp firstphp)
php php php php php php php php php php php php php php php php ifphp php(php$idphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$patternphp php.php=php php$wordphp[php php$subPatternphp[php1php]php php-php php1php php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp eachphp subputternphp isphp aphp singlephp wordphp inphp termsphp ofphp currentphp analyzer
php php php php php php php php php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$subPatternphp[php0php]php,php php$subPatternsEncodingphp)php;
php php php php php php php php php php php php php php php php ifphp php(countphp(php$tokensphp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Wildcardphp searchphp isphp supportedphp onlyphp forphp nonphp-multiplephp wordphp termsphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php php php php php$patternphp php.php=php php$tokenphp-php>getTermTextphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$termphp php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$patternphp,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Wildcardphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Wildcardphp(php$termphp)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php php/php/php Getphp rewrittenphp queryphp.php Importantphp!php Itphp alsophp fillsphp termsphp matchingphp containerphp.
php php php php php php php php php php php php php$rewrittenQueryphp php=php php$queryphp-php>rewritephp(php$indexphp)php;
php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;

php php php php php php php php php php php php returnphp php$rewrittenQueryphp;
php php php php php php php php php}


php php php php php php php php php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php/php/php Recognizephp onephp-termphp multiphp-termphp andphp php"insignificantphp"php queries
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_wordphp,php php$thisphp-php>php_encodingphp)php;

php php php php php php php php ifphp php(countphp(php$tokensphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Insignificantphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$termphp php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$tokensphp[php0php]php-php>getTermTextphp(php)php,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(php$termphp)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;
php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php}

php php php php php php php php php/php/Itphp'sphp notphp insignificantphp orphp onephp termphp query
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php)php;

php php php php php php php php php/php*php*
php php php php php php php php php php*php php@todophp Processphp php$tokenphp-php>getPositionIncrementphp(php)php tophp supportphp stemmingphp,php synonymsphp andphp other
php php php php php php php php php php*php analizerphp designphp features
php php php php php php php php php php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$tokenphp-php>getTermTextphp(php)php,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php php php php php php$queryphp-php>addTermphp(php$termphp,php truephp)php;php php/php/php allphp subtermsphp arephp required
php php php php php php php php php}

php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;
php php php php php php php php returnphp php$queryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Queryphp specificphp matchesphp highlighting
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp php Highlighterphp objectphp php(alsophp containsphp docphp forphp highlightingphp)
php php php php php php*php/
php php php php protectedphp functionphp php_highlightMatchesphp(Zendphp_Searchphp_Lucenephp_Searchphp_Highlighterphp_Interfacephp php$highlighterphp)
php php php php php{
php php php php php php php php php/php*php*php Skipphp fieldsphp detectionphp.php Wephp donphp'tphp needphp itphp,php sincephp wephp expectphp allphp fieldsphp presentedphp inphp thephp HTMLphp bodyphp andphp donphp'tphp differentiatephp themphp php*php/

php php php php php php php php php/php*php*php Skipphp exactphp termphp matchingphp recognitionphp,php keywordphp fieldsphp highlightingphp isphp notphp supportedphp php*php/

php php php php php php php php php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php/php/php Recognizephp wildcardphp queries
php php php php php php php php php/php*php*php php@todophp checkphp forphp PCREphp unicodephp supportphp mayphp bephp performedphp throughphp Zendphp_Environmentphp inphp somephp futurephp php*php/
php php php php php php php php ifphp php(php@pregphp_matchphp(php'php/php\pLphp/uphp'php,php php'aphp'php)php php=php=php php1php)php php{
php php php php php php php php php php php php php$wordphp php=php iconvphp(php$thisphp-php>php_encodingphp,php php'UTFphp-php8php'php,php php$thisphp-php>php_wordphp)php;
php php php php php php php php php php php php php$wildcardsPatternphp php=php php'php/php[php*php?php]php/uphp'php;
php php php php php php php php php php php php php$subPatternsEncodingphp php=php php'UTFphp-php8php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$wordphp php=php php$thisphp-php>php_wordphp;
php php php php php php php php php php php php php$wildcardsPatternphp php=php php'php/php[php*php?php]php/php'php;
php php php php php php php php php php php php php$subPatternsEncodingphp php=php php$thisphp-php>php_encodingphp;
php php php php php php php php php}
php php php php php php php php php$subPatternsphp php=php pregphp_splitphp(php$wildcardsPatternphp,php php$wordphp,php php-php1php,php PREGphp_SPLITphp_OFFSETphp_CAPTUREphp)php;
php php php php php php php php ifphp php(countphp(php$subPatternsphp)php php>php php1php)php php{
php php php php php php php php php php php php php/php/php Wildcardphp queryphp isphp recognized

php php php php php php php php php php php php php$patternphp php=php php'php'php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php php php php foreachphp php(php$subPatternsphp asphp php$idphp php=php>php php$subPatternphp)php php{
php php php php php php php php php php php php php php php php php/php/php Appendphp correspondingphp wildcardphp characterphp tophp thephp patternphp beforephp eachphp subphp-patternphp php(exceptphp firstphp)
php php php php php php php php php php php php php php php php ifphp php(php$idphp php!php=php php0php)php php{
php php php php php php php php php php php php php php php php php php php php php$patternphp php.php=php php$wordphp[php php$subPatternphp[php1php]php php-php php1php php]php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php Checkphp ifphp eachphp subputternphp isphp aphp singlephp wordphp inphp termsphp ofphp currentphp analyzer
php php php php php php php php php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$subPatternphp[php0php]php,php php$subPatternsEncodingphp)php;
php php php php php php php php php php php php php php php php ifphp php(countphp(php$tokensphp)php php>php php1php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php Dophp nothingphp php(nothingphp isphp highlightedphp)
php php php php php php php php php php php php php php php php php php php php returnphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php php php php php$patternphp php.php=php php$tokenphp-php>getTermTextphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$termphp php php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$patternphp,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Wildcardphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Wildcardphp(php$termphp)php;

php php php php php php php php php php php php php$queryphp-php>php_highlightMatchesphp(php$highlighterphp)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}


php php php php php php php php php/php/php php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-php-
php php php php php php php php php/php/php Recognizephp onephp-termphp multiphp-termphp andphp php"insignificantphp"php queries
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_wordphp,php php$thisphp-php>php_encodingphp)php;

php php php php php php php php ifphp php(countphp(php$tokensphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php$highlighterphp-php>highlightphp(php$tokensphp[php0php]php-php>getTermTextphp(php)php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/Itphp'sphp notphp insignificantphp orphp onephp termphp query
php php php php php php php php php$wordsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php$wordsphp[php]php php=php php$tokenphp-php>getTermTextphp(php)php;
php php php php php php php php php}
php php php php php php php php php$highlighterphp-php>highlightphp(php$wordsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Printphp aphp query
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php/php/php Itphp'sphp usedphp onlyphp forphp queryphp visualisationphp,php sophp wephp donphp'tphp carephp aboutphp charactersphp escaping
php php php php php php php php ifphp php(php$thisphp-php>php_fieldphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$queryphp php=php php$thisphp-php>php_fieldphp php.php php'php:php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$queryphp php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php$queryphp php.php=php php$thisphp-php>php_wordphp;

php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php'php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}
