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
php php*php php@versionphp php php php php$Idphp:php Tokenphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Analysis
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Analysisphp_Token
php{
php php php php php/php*php*
php php php php php php*php Thephp textphp ofphp thephp termphp.
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_termTextphp;

php php php php php/php*php*
php php php php php php*php Startphp inphp sourcephp textphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_startOffsetphp;

php php php php php/php*php*
php php php php php php*php Endphp inphp sourcephp text
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_endOffsetphp;

php php php php php/php*php*
php php php php php php*php Thephp positionphp ofphp thisphp tokenphp relativephp tophp thephp previousphp Tokenphp.
php php php php php php*
php php php php php php*php Thephp defaultphp valuephp isphp onephp.
php php php php php php*
php php php php php php*php Somephp commonphp usesphp forphp thisphp arephp:
php php php php php php*php Setphp itphp tophp zerophp tophp putphp multiplephp termsphp inphp thephp samephp positionphp.php php Thisphp is
php php php php php php*php usefulphp ifphp,php ephp.gphp.php,php aphp wordphp hasphp multiplephp stemsphp.php php Searchesphp forphp phrases
php php php php php php*php includingphp eitherphp stemphp willphp matchphp.php php Inphp thisphp casephp,php allphp butphp thephp firstphp stemphp's
php php php php php php*php incrementphp shouldphp bephp setphp tophp zerophp:php thephp incrementphp ofphp thephp firstphp instance
php php php php php php*php shouldphp bephp onephp.php php Repeatingphp aphp tokenphp withphp anphp incrementphp ofphp zerophp canphp alsophp be
php php php php php php*php usedphp tophp boostphp thephp scoresphp ofphp matchesphp onphp thatphp tokenphp.
php php php php php php*
php php php php php php*php Setphp itphp tophp valuesphp greaterphp thanphp onephp tophp inhibitphp exactphp phrasephp matchesphp.
php php php php php php*php Ifphp,php forphp examplephp,php onephp doesphp notphp wantphp phrasesphp tophp matchphp acrossphp removedphp stop
php php php php php php*php wordsphp,php thenphp onephp couldphp buildphp aphp stopphp wordphp filterphp thatphp removesphp stopphp wordsphp and
php php php php php php*php alsophp setsphp thephp incrementphp tophp thephp numberphp ofphp stopphp wordsphp removedphp beforephp each
php php php php php php*php nonphp-stopphp wordphp.php php Thenphp exactphp phrasephp queriesphp willphp onlyphp matchphp whenphp thephp terms
php php php php php php*php occurphp withphp nophp interveningphp stopphp wordsphp.
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_positionIncrementphp;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php php$text
php php php php php php*php php@paramphp integerphp php$start
php php php php php php*php php@paramphp integerphp php$end
php php php php php php*php php@paramphp stringphp php php$type
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$textphp,php php$startphp,php php$endphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_termTextphp php php php php=php php$textphp;
php php php php php php php php php$thisphp-php>php_startOffsetphp php=php php$startphp;
php php php php php php php php php$thisphp-php>php_endOffsetphp php php php=php php$endphp;

php php php php php php php php php$thisphp-php>php_positionIncrementphp php=php php1php;
php php php php php}


php php php php php/php*php*
php php php php php php*php positionIncrementphp setter
php php php php php php*
php php php php php php*php php@paramphp integerphp php$positionIncrement
php php php php php php*php/
php php php php publicphp functionphp setPositionIncrementphp(php$positionIncrementphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_positionIncrementphp php=php php$positionIncrementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp positionphp incrementphp ofphp thisphp Tokenphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getPositionIncrementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_positionIncrementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp Tokenphp'sphp termphp textphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTermTextphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_termTextphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thisphp Tokenphp'sphp startingphp offsetphp,php thephp positionphp ofphp thephp firstphp character
php php php php php php*php correspondingphp tophp thisphp tokenphp inphp thephp sourcephp textphp.
php php php php php php*
php php php php php php*php Notephp:
php php php php php php*php Thephp differencephp betweenphp getEndOffsetphp(php)php andphp getStartOffsetphp(php)php mayphp notphp bephp equal
php php php php php php*php tophp strlenphp(Zendphp_Searchphp_Lucenephp_Analysisphp_Tokenphp:php:getTermTextphp(php)php)php,php asphp thephp termphp textphp mayphp havephp beenphp altered
php php php php php php*php byphp aphp stemmerphp orphp somephp otherphp filterphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getStartOffsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_startOffsetphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thisphp Tokenphp'sphp endingphp offsetphp,php onephp greaterphp thanphp thephp positionphp ofphp the
php php php php php php*php lastphp characterphp correspondingphp tophp thisphp tokenphp inphp thephp sourcephp textphp.
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp functionphp getEndOffsetphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_endOffsetphp;
php php php php php}
php}

