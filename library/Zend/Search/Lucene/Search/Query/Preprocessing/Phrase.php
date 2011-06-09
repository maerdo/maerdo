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
php php*php php@versionphp php php php php$Idphp:php Phrasephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
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
classphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessingphp_Phrasephp extendsphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessing
php{
php php php php php/php*php*
php php php php php php*php Phrasephp tophp findphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_phrasephp;

php php php php php/php*php*
php php php php php php*php Phrasephp encodingphp php(fieldphp namephp isphp alwaysphp providedphp usingphp UTFphp-php8php encodingphp sincephp itphp mayphp bephp retrievedphp fromphp indexphp)php.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_phraseEncodingphp;


php php php php php/php*php*
php php php php php php*php Fieldphp namephp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_fieldphp;

php php php php php/php*php*
php php php php php php*php Setsphp thephp numberphp ofphp otherphp wordsphp permittedphp betweenphp wordsphp inphp queryphp phrasephp.
php php php php php php*php Ifphp zerophp,php thenphp thisphp isphp anphp exactphp phrasephp searchphp.php php Forphp largerphp valuesphp thisphp works
php php php php php php*php likephp aphp WITHINphp orphp NEARphp operatorphp.
php php php php php php*
php php php php php php*php Thephp slopphp isphp inphp factphp anphp editphp-distancephp,php wherephp thephp unitsphp correspondphp to
php php php php php php*php movesphp ofphp termsphp inphp thephp queryphp phrasephp outphp ofphp positionphp.php php Forphp examplephp,php tophp switch
php php php php php php*php thephp orderphp ofphp twophp wordsphp requiresphp twophp movesphp php(thephp firstphp movephp placesphp thephp words
php php php php php php*php atopphp onephp anotherphp)php,php sophp tophp permitphp rephp-orderingsphp ofphp phrasesphp,php thephp slopphp mustphp be
php php php php php php*php atphp leastphp twophp.
php php php php php php*php Morephp exactphp matchesphp arephp scoredphp higherphp thanphp sloppierphp matchesphp,php thusphp search
php php php php php php*php resultsphp arephp sortedphp byphp exactnessphp.
php php php php php php*
php php php php php php*php Thephp slopphp isphp zerophp byphp defaultphp,php requiringphp exactphp matchesphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_slopphp;

php php php php php/php*php*
php php php php php php*php Classphp constructorphp.php php Createphp aphp newphp preprocessingphp objectphp forphp prasephp queryphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$phrasephp php php php php php php php php php Phrasephp tophp searchphp.
php php php php php php*php php@paramphp stringphp php$phraseEncodingphp php Phrasephp encodingphp.
php php php php php php*php php@paramphp stringphp php$fieldNamephp php php php php php php Fieldphp namephp.
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$phrasephp,php php$phraseEncodingphp,php php$fieldNamephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_phrasephp php php php php php php php php php=php php$phrasephp;
php php php php php php php php php$thisphp-php>php_phraseEncodingphp php=php php$phraseEncodingphp;
php php php php php php php php php$thisphp-php>php_fieldphp php php php php php php php php php php=php php$fieldNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp slop
php php php php php php*
php php php php php php*php php@paramphp integerphp php$slop
php php php php php php*php/
php php php php publicphp functionphp setSlopphp(php$slopphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_slopphp php=php php$slopphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp slop
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getSlopphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_slopphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rephp-writephp queryphp intophp primitivephp queriesphp inphp thephp contextphp ofphp specifiedphp index
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Interfacephp php$index
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp rewritephp(Zendphp_Searchphp_Lucenephp_Interfacephp php$indexphp)
php php php php php{
php/php/php Allowphp tophp usephp wildcardsphp withinphp phrases
php/php/php Theyphp arephp eitherphp removedphp byphp textphp analyzerphp orphp usedphp asphp aphp partphp ofphp keywordphp forphp keywordphp fields
php/php/
php/php/php php php php php php php php ifphp php(strposphp(php$thisphp-php>php_phrasephp,php php'php?php'php)php php!php=php=php falsephp php|php|php strposphp(php$thisphp-php>php_phrasephp,php php'php*php'php)php php!php=php=php falsephp)php php{
php/php/php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php/php/php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Wildcardsphp arephp onlyphp allowedphp inphp aphp singlephp termsphp.php'php)php;
php/php/php php php php php php php php php}

php php php php php php php php php/php/php Splitphp queryphp intophp subqueriesphp ifphp fieldphp namephp isphp notphp specified
php php php php php php php php ifphp php(php$thisphp-php>php_fieldphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp:php:getDefaultSearchFieldphp(php)php php=php=php=php nullphp)php php{
php php php php php php php php php php php php php php php php php$searchFieldsphp php=php php$indexphp-php>getFieldNamesphp(truephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$searchFieldsphp php=php arrayphp(Zendphp_Searchphp_Lucenephp:php:getDefaultSearchFieldphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php foreachphp php(php$searchFieldsphp asphp php$fieldNamephp)php php{
php php php php php php php php php php php php php php php php php$subqueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Preprocessingphp_Phrasephp(php$thisphp-php>php_phrasephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_phraseEncodingphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$fieldNamephp)php;
php php php php php php php php php php php php php php php php php$subqueryphp-php>setSlopphp(php$thisphp-php>getSlopphp(php)php)php;

php php php php php php php php php php php php php php php php php$queryphp-php>addSubqueryphp(php$subqueryphp-php>rewritephp(php$indexphp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;
php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php}

php php php php php php php php php/php/php Recognizephp exactphp termphp matchingphp php(itphp correspondsphp tophp Keywordphp fieldsphp storedphp inphp thephp indexphp)
php php php php php php php php php/php/php encodingphp isphp notphp usedphp sincephp wephp expectphp binaryphp matching
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$thisphp-php>php_phrasephp,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php ifphp php(php$indexphp-php>hasTermphp(php$termphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Termphp(php$termphp)php;
php php php php php php php php php php php php php$queryphp-php>setBoostphp(php$thisphp-php>getBoostphp(php)php)php;

php php php php php php php php php php php php php$thisphp-php>php_matchesphp php=php php$queryphp-php>getQueryTermsphp(php)php;
php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php}


php php php php php php php php php/php/php tokenizephp phrasephp usingphp currentphp analyzerphp andphp processphp itphp asphp aphp phrasephp query
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_phrasephp,php php$thisphp-php>php_phraseEncodingphp)php;

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

php php php php php php php php php/php/Itphp'sphp nonphp-trivialphp phrasephp query
php php php php php php php php php$positionphp php=php php-php1php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Phrasephp.phpphp'php;
php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Phrasephp(php)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php foreachphp php(php$tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php$positionphp php+php=php php$tokenphp-php>getPositionIncrementphp(php)php;
php php php php php php php php php php php php php$termphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$tokenphp-php>getTermTextphp(php)php,php php$thisphp-php>php_fieldphp)php;
php php php php php php php php php php php php php$queryphp-php>addTermphp(php$termphp,php php$positionphp)php;
php php php php php php php php php php php php php$queryphp-php>setSlopphp(php$thisphp-php>getSlopphp(php)php)php;
php php php php php php php php php}
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

php php php php php php php php php/php*php*php Skipphp wildcardphp queriesphp recognitionphp.php Supportedphp wildcardsphp arephp removedphp byphp textphp analyzerphp php*php/


php php php php php php php php php/php/php tokenizephp phrasephp usingphp currentphp analyzerphp andphp processphp itphp asphp aphp phrasephp query
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_phrasephp,php php$thisphp-php>php_phraseEncodingphp)php;

php php php php php php php php ifphp php(countphp(php$tokensphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php$highlighterphp-php>highlightphp(php$tokensphp[php0php]php-php>getTermTextphp(php)php)php;
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php/php/Itphp'sphp nonphp-trivialphp phrasephp query
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

php php php php php php php php php$queryphp php.php=php php'php"php'php php.php php$thisphp-php>php_phrasephp php.php php'php"php'php;

php php php php php php php php ifphp php(php$thisphp-php>php_slopphp php!php=php php0php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php'php~php'php php.php php$thisphp-php>php_slopphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$thisphp-php>getBoostphp(php)php php!php=php php1php)php php{
php php php php php php php php php php php php php$queryphp php.php=php php'php^php'php php.php roundphp(php$thisphp-php>getBoostphp(php)php,php php4php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}
php}
