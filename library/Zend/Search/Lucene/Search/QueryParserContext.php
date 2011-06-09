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
php php*php php@versionphp php php php php$Idphp:php QueryParserContextphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryTokenphp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserContext
php{
php php php php php/php*php*
php php php php php php*php Defaultphp fieldphp forphp thephp contextphp.
php php php php php php*
php php php php php php*php nullphp meansphp,php thatphp termphp shouldphp bephp searchedphp throughphp allphp fields
php php php php php php*php Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp:php:rewriteQueryphp(php$indexphp)php transletesphp suchphp queriesphp tophp several
php php php php php php*
php php php php php php*php php@varphp stringphp|null
php php php php php php*php/
php php php php privatephp php$php_defaultFieldphp;

php php php php php/php*php*
php php php php php php*php Fieldphp specifiedphp forphp nextphp entry
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_nextEntryFieldphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Truephp meansphp,php thatphp termphp isphp requiredphp.
php php php php php php*php Falsephp meansphp,php thatphp termphp isphp prohibitedphp.
php php php php php php*php nullphp meansphp,php thatphp termphp isphp neitherphp prohibitedphp,php norphp required
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_nextEntrySignphp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Entriesphp groupingphp mode
php php php php php php*php/
php php php php constphp GMphp_SIGNSphp php php php=php php0php;php php php/php/php Signsphp modephp:php php'php+termphp1php termphp2php php-termphp3php php+php(subqueryphp1php)php php-php(subqueryphp2php)php'
php php php php constphp GMphp_BOOLEANphp php=php php1php;php php php/php/php Booleanphp operatorsphp modephp:php php'termphp1php andphp termphp2php php orphp php php(subqueryphp1php)php andphp notphp php(subqueryphp2php)php'

php php php php php/php*php*
php php php php php php*php Groupingphp mode
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_modephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Entriesphp signsphp.
php php php php php php*php Usedphp inphp GMphp_SIGNSphp groupingphp mode
php php php php php php*
php php php php php php*php php@varphp arrays
php php php php php php*php/
php php php php privatephp php$php_signsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Queryphp entries
php php php php php php*php Eachphp entryphp isphp aphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp objectphp or
php php php php php php*php booleanphp operatorphp php(Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp classphp constantphp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_entriesphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Queryphp stringphp encoding
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_encodingphp;


php php php php php/php*php*
php php php php php php*php Contextphp objectphp constructor
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@paramphp stringphp|nullphp php$defaultField
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$encodingphp,php php$defaultFieldphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_encodingphp php php php php php=php php$encodingphp;
php php php php php php php php php$thisphp-php>php_defaultFieldphp php=php php$defaultFieldphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Getphp contextphp defaultphp field
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getFieldphp(php)
php php php php php{
php php php php php php php php returnphp php(php$thisphp-php>php_nextEntryFieldphp php!php=php=php nullphp)php php php?php php php$thisphp-php>php_nextEntryFieldphp php:php php$thisphp-php>php_defaultFieldphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp fieldphp forphp nextphp entry
php php php php php php*
php php php php php php*php php@paramphp stringphp php$field
php php php php php php*php/
php php php php publicphp functionphp setNextEntryFieldphp(php$fieldphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_nextEntryFieldphp php=php php$fieldphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Setphp signphp forphp nextphp entry
php php php php php php*
php php php php php php*php php@paramphp integerphp php$sign
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp setNextEntrySignphp(php$signphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_modephp php=php=php=php selfphp:php:GMphp_BOOLEANphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Itphp\php'sphp notphp allowedphp tophp mixphp booleanphp andphp signsphp stylesphp inphp thephp samephp subqueryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_modephp php=php selfphp:php:GMphp_SIGNSphp;

php php php php php php php php ifphp php(php$signphp php=php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_REQUIREDphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_nextEntrySignphp php=php truephp;
php php php php php php php php php}php elsephp ifphp php(php$signphp php=php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_PROHIBITEDphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_nextEntrySignphp php=php falsephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Unrecognizedphp signphp typephp.php'php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp entryphp tophp aphp query
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp php$entry
php php php php php php*php/
php php php php publicphp functionphp addEntryphp(Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp php$entryphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_modephp php!php=php=php selfphp:php:GMphp_BOOLEANphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_signsphp[php]php php=php php$thisphp-php>php_nextEntrySignphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$entryphp;

php php php php php php php php php$thisphp-php>php_nextEntryFieldphp php=php nullphp;
php php php php php php php php php$thisphp-php>php_nextEntrySignphp php php=php nullphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Processphp fuzzyphp searchphp orphp proximityphp searchphp modifier
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp functionphp processFuzzyProximityModifierphp(php$parameterphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Checkphp,php thatphp modifierphp hasphp camephp justphp afterphp wordphp orphp phrase
php php php php php php php php ifphp php(php$thisphp-php>php_nextEntryFieldphp php!php=php=php nullphp php php|php|php php php$thisphp-php>php_nextEntrySignphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'php\php'php~php\php'php modifierphp mustphp followphp wordphp orphp phrasephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$lastEntryphp php=php arrayphp_popphp(php$thisphp-php>php_entriesphp)php;

php php php php php php php php ifphp php(php!php$lastEntryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp)php php{
php php php php php php php php php php php php php/php/php therephp arephp nophp entriesphp orphp lastphp entryphp isphp booleanphp operator
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'php\php'php~php\php'php modifierphp mustphp followphp wordphp orphp phrasephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$lastEntryphp-php>processFuzzyProximityModifierphp(php$parameterphp)php;

php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$lastEntryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp boostphp factorphp tophp thephp entry
php php php php php php*
php php php php php php*php php@paramphp floatphp php$boostFactor
php php php php php php*php/
php php php php publicphp functionphp boostphp(php$boostFactorphp)
php php php php php{
php php php php php php php php php/php/php Checkphp,php thatphp modifierphp hasphp camephp justphp afterphp wordphp orphp phrase
php php php php php php php php ifphp php(php$thisphp-php>php_nextEntryFieldphp php!php=php=php nullphp php php|php|php php php$thisphp-php>php_nextEntrySignphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'php\php'php^php\php'php modifierphp mustphp followphp wordphp,php phrasephp orphp subqueryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$lastEntryphp php=php arrayphp_popphp(php$thisphp-php>php_entriesphp)php;

php php php php php php php php ifphp php(php!php$lastEntryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp)php php{
php php php php php php php php php php php php php/php/php therephp arephp nophp entriesphp orphp lastphp entryphp isphp booleanphp operator
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'php\php'php^php\php'php modifierphp mustphp followphp wordphp,php phrasephp orphp subqueryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$lastEntryphp-php>boostphp(php$boostFactorphp)php;

php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$lastEntryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp logicalphp operator
php php php php php php*
php php php php php php*php php@paramphp integerphp php$operator
php php php php php php*php/
php php php php publicphp functionphp addLogicalOperatorphp(php$operatorphp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_modephp php=php=php=php selfphp:php:GMphp_SIGNSphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Itphp\php'sphp notphp allowedphp tophp mixphp booleanphp andphp signsphp stylesphp inphp thephp samephp subqueryphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_modephp php=php selfphp:php:GMphp_BOOLEANphp;

php php php php php php php php php$thisphp-php>php_entriesphp[php]php php=php php$operatorphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Generatephp php'signsphp stylephp'php queryphp fromphp thephp context
php php php php php php*php php'php+termphp1php termphp2php php-termphp3php php+php(php<subqueryphp1php>php)php php.php.php.php'
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp php_signStyleExpressionQueryphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserphp.phpphp'php;
php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:getDefaultOperatorphp(php)php php=php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:Bphp_ANDphp)php php{
php php php php php php php php php php php php php$defaultSignphp php=php truephp;php php/php/php required
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:Bphp_OR
php php php php php php php php php php php php php$defaultSignphp php=php nullphp;php php/php/php optional
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_entriesphp asphp php$entryIdphp php=php>php php$entryphp)php php{
php php php php php php php php php php php php php$signphp php=php php(php$thisphp-php>php_signsphp[php$entryIdphp]php php!php=php=php nullphp)php php?php php php$thisphp-php>php_signsphp[php$entryIdphp]php php:php php$defaultSignphp;
php php php php php php php php php php php php php$queryphp-php>addSubqueryphp(php$entryphp-php>getQueryphp(php$thisphp-php>php_encodingphp)php,php php$signphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Generatephp php'booleanphp stylephp'php queryphp fromphp thephp context
php php php php php php*php php'termphp1php andphp termphp2php php php orphp php php termphp3php andphp php(php<subqueryphp1php>php)php andphp notphp php(php<subqueryphp2php>php)php'
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucene
php php php php php php*php/
php php php php privatephp functionphp php_booleanExpressionQueryphp(php)
php php php php php{
php php php php php php php php php/php*php*
php php php php php php php php php php*php Wephp treatphp eachphp levelphp ofphp anphp expressionphp asphp aphp booleanphp expressionphp in
php php php php php php php php php php*php aphp Disjunctivephp Normalphp Form
php php php php php php php php php php*
php php php php php php php php php php*php ANDphp operatorphp hasphp higherphp precedencephp thanphp OR
php php php php php php php php php php*
php php php php php php php php php php*php Thusphp logicalphp queryphp isphp aphp disjunctionphp ofphp onephp orphp morephp conjunctionsphp of
php php php php php php php php php php*php onephp orphp morephp queryphp entries
php php php php php php php php php php*php/

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/BooleanExpressionRecognizerphp.phpphp'php;
php php php php php php php php php$expressionRecognizerphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_BooleanExpressionRecognizerphp(php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_entriesphp asphp php$entryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$entryphp instanceofphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp)php php{
php php php php php php php php php php php php php php php php php php php php php$expressionRecognizerphp-php>processLiteralphp(php$entryphp)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php switchphp php(php$entryphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_ANDphp_LEXEMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$expressionRecognizerphp-php>processOperatorphp(Zendphp_Searchphp_Lucenephp_Searchphp_BooleanExpressionRecognizerphp:php:INphp_ANDphp_OPERATORphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_ORphp_LEXEMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$expressionRecognizerphp-php>processOperatorphp(Zendphp_Searchphp_Lucenephp_Searchphp_BooleanExpressionRecognizerphp:php:INphp_ORphp_OPERATORphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php casephp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_NOTphp_LEXEMEphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$expressionRecognizerphp-php>processOperatorphp(Zendphp_Searchphp_Lucenephp_Searchphp_BooleanExpressionRecognizerphp:php:INphp_NOTphp_OPERATORphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp(php'Booleanphp expressionphp errorphp.php Unknownphp operatorphp typephp.php'php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$conjuctionsphp php=php php$expressionRecognizerphp-php>finishExpressionphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Searchphp_Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php/php/php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Booleanphp expressionphp errorphp.php Errorphp messagephp:php php\php'php'php php.
php php php php php php php php php php php php php/php/php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$ephp-php>getMessagephp(php)php php.php php'php\php'php.php'php php)php;
php php php php php php php php php php php php php/php/php Itphp'sphp queryphp syntaxphp errorphp messagephp andphp itphp shouldphp bephp userphp friendlyphp.php Sophp FSMphp messagephp isphp omitted
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Booleanphp expressionphp errorphp.php'php,php php0php,php php$ephp)php;
php php php php php php php php php}

php php php php php php php php php/php/php Removephp php'onlyphp negativephp'php conjunctions
php php php php php php php php foreachphp php(php$conjuctionsphp asphp php$conjuctionIdphp php=php>php php$conjuctionphp)php php{
php php php php php php php php php php php php php$nonNegativeEntryFoundphp php=php falsephp;

php php php php php php php php php php php php foreachphp php(php$conjuctionphp asphp php$conjuctionEntryphp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$conjuctionEntryphp[php1php]php)php php{
php php php php php php php php php php php php php php php php php php php php php$nonNegativeEntryFoundphp php=php truephp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!php$nonNegativeEntryFoundphp)php php{
php php php php php php php php php php php php php php php php unsetphp(php$conjuctionsphp[php$conjuctionIdphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}


php php php php php php php php php$subqueriesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$conjuctionsphp asphp php php$conjuctionphp)php php{
php php php php php php php php php php php php php/php/php Checkphp,php ifphp itphp'sphp aphp onephp termphp conjuction
php php php php php php php php php php php php ifphp php(countphp(php$conjuctionphp)php php=php=php php1php)php php{
php php php php php php php php php php php php php php php php php$subqueriesphp[php]php php=php php$conjuctionphp[php0php]php[php0php]php-php>getQueryphp(php$thisphp-php>php_encodingphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php php php php php php php php php$subqueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;

php php php php php php php php php php php php php php php php foreachphp php(php$conjuctionphp asphp php$conjuctionEntryphp)php php{
php php php php php php php php php php php php php php php php php php php php php$subqueryphp-php>addSubqueryphp(php$conjuctionEntryphp[php0php]php-php>getQueryphp(php$thisphp-php>php_encodingphp)php,php php$conjuctionEntryphp[php1php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$subqueriesphp[php]php php=php php$subqueryphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$subqueriesphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Insignificantphp.phpphp'php;
php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$subqueriesphp)php php=php=php php1php)php php{
php php php php php php php php php php php php returnphp php$subqueriesphp[php0php]php;
php php php php php php php php php}


php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Booleanphp.phpphp'php;
php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Booleanphp(php)php;

php php php php php php php php foreachphp php(php$subqueriesphp asphp php$subqueryphp)php php{
php php php php php php php php php php php php php/php/php Nonphp-requireredphp entryphp/subquery
php php php php php php php php php php php php php$queryphp-php>addSubqueryphp(php$subqueryphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$queryphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatephp queryphp fromphp currentphp context
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php/
php php php php publicphp functionphp getQueryphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_modephp php=php=php=php selfphp:php:GMphp_BOOLEANphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_booleanExpressionQueryphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_signStyleExpressionQueryphp(php)php;
php php php php php php php php php}
php php php php php}
php}
