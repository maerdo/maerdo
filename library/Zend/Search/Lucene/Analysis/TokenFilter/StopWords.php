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
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php StopWordsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/TokenFilterphp.phpphp'php;

php/php*php*
php php*php Tokenphp filterphp thatphp removesphp stopphp wordsphp.php Thesephp wordsphp mustphp bephp providedphp asphp arrayphp php(setphp)php,php examplephp:
php php*php php$stopwordsphp php=php arrayphp(php'thephp'php php=php>php php1php,php php'anphp'php php=php>php php'php1php'php)php;
php php*
php php*php Wephp dophp recommendphp tophp providephp allphp wordsphp inphp lowercasephp andphp concatenatephp thisphp classphp afterphp thephp lowercasephp filterphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

classphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilterphp_StopWordsphp extendsphp Zendphp_Searchphp_Lucenephp_Analysisphp_TokenFilter
php{
php php php php php/php*php*
php php php php php php*php Stopphp Words
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_stopSetphp;

php php php php php/php*php*
php php php php php php*php Constructsphp newphp instancephp ofphp thisphp filterphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$stopwordsphp arrayphp php(setphp)php ofphp wordsphp thatphp willphp bephp filteredphp out
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$stopwordsphp php=php arrayphp(php)php)php php{
php php php php php php php php php$thisphp-php>php_stopSetphp php=php arrayphp_flipphp(php$stopwordsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp Tokenphp orphp removephp itphp php(ifphp nullphp isphp returnedphp)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$srcToken
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Analysisphp_Token
php php php php php php*php/
php php php php publicphp functionphp normalizephp(Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp php$srcTokenphp)php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$srcTokenphp-php>getTermTextphp(php)php,php php$thisphp-php>php_stopSetphp)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$srcTokenphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Fillsphp stopwordsphp setphp fromphp aphp textphp filephp.php Eachphp linephp containsphp onephp stopwordphp,php linesphp withphp php'php#php'php inphp thephp first
php php php php php php*php columnphp arephp ignoredphp php(asphp commentsphp)php.
php php php php php php*
php php php php php php*php Youphp canphp callphp thisphp methodphp onephp orphp morephp timesphp.php Newphp stopwordsphp arephp alwaysphp addedphp tophp currentphp setphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filepathphp fullphp pathphp forphp textphp filephp withphp stopwords
php php php php php php*php php@throwsphp Zendphp_Searchphp_Exceptionphp Whenphp thephp filephp doesnphp`tphp existsphp orphp isphp notphp readablephp.
php php php php php php*php/
php php php php publicphp functionphp loadFromFilephp(php$filepathphp php=php nullphp)php php{
php php php php php php php php ifphp php(php!php php$filepathphp php|php|php php!php filephp_existsphp(php$filepathphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Youphp havephp tophp providephp validphp filephp pathphp'php)php;
php php php php php php php php php}
php php php php php php php php php$fdphp php=php fopenphp(php$filepathphp,php php"rphp"php)php;
php php php php php php php php ifphp php(php!php php$fdphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Cannotphp openphp filephp php'php php.php php$filepathphp)php;
php php php php php php php php php}
php php php php php php php php whilephp php(php!feofphp php(php$fdphp)php)php php{
php php php php php php php php php php php php php$bufferphp php=php trimphp(fgetsphp(php$fdphp)php)php;
php php php php php php php php php php php php ifphp php(strlenphp(php$bufferphp)php php>php php0php php&php&php php$bufferphp[php0php]php php!php=php php'php#php'php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_stopSetphp[php$bufferphp]php php=php php1php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php!fclosephp(php$fdphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Cannotphp closephp filephp php'php php.php php$filepathphp)php;
php php php php php php php php php}
php php php php php}
php}

