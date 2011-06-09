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
php php*php php@versionphp php php php php$Idphp:php QueryParserphp.phpphp php2php1php6php3php7php php2php0php1php0php-php0php3php-php2php4php php1php7php:php5php2php:php0php4Zphp alexanderphp php$
php php*php/


php/php*php*php Internallyphp usedphp classesphp php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Analysisphp/Analyzerphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryTokenphp.phpphp'php;



php/php*php*php Zendphp_Searchphp_Lucenephp_FSMphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/FSMphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp extendsphp Zendphp_Searchphp_Lucenephp_FSM
php{
php php php php php/php*php*
php php php php php php*php Parserphp instance
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParser
php php php php php php*php/
php php php php privatephp staticphp php$php_instancephp php=php nullphp;


php php php php php/php*php*
php php php php php php*php Queryphp lexer
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryLexer
php php php php php php*php/
php php php php privatephp php$php_lexerphp;

php php php php php/php*php*
php php php php php php*php Tokensphp list
php php php php php php*php Arrayphp ofphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp objects
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_tokensphp;

php php php php php/php*php*
php php php php php php*php Currentphp token
php php php php php php*
php php php php php php*php php@varphp integerphp|string
php php php php php php*php/
php php php php privatephp php$php_currentTokenphp;

php php php php php/php*php*
php php php php php php*php Lastphp token
php php php php php php*
php php php php php php*php Itphp canphp bephp processedphp withinphp FSMphp statesphp,php butphp thisphp addirionalphp statephp simplifiesphp FSM
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryToken
php php php php php php*php/
php php php php privatephp php$php_lastTokenphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Rangephp queryphp firstphp term
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_rqFirstTermphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Currentphp queryphp parserphp context
php php php php php php*
php php php php php php*php php@varphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserContext
php php php php php php*php/
php php php php privatephp php$php_contextphp;

php php php php php/php*php*
php php php php php php*php Contextphp stack
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_contextStackphp;

php php php php php/php*php*
php php php php php php*php Queryphp stringphp encoding
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_encodingphp;

php php php php php/php*php*
php php php php php php*php Queryphp stringphp defaultphp encoding
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_defaultEncodingphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Definesphp queryphp parsingphp modephp.
php php php php php php*
php php php php php php*php Ifphp thisphp optionphp isphp turnedphp onphp,php thenphp queryphp parserphp suppressphp queryphp parserphp exceptions
php php php php php php*php andphp constructsphp multiphp-termphp queryphp usingphp allphp wordsphp fromphp aphp queryphp.
php php php php php php*
php php php php php php*php Thatphp helpsphp tophp avoidphp exceptionsphp causedphp byphp queriesphp,php whichphp donphp'tphp conformphp tophp queryphp languagephp,
php php php php php php*php butphp limitsphp possibilitiesphp tophp checkphp,php thatphp queryphp enteredphp byphp userphp hasphp somephp inconsistenciesphp.
php php php php php php*
php php php php php php*
php php php php php php*php Defaultphp isphp truephp.
php php php php php php*
php php php php php php*php Usephp php{php@linkphp Zendphp_Searchphp_Lucenephp:php:suppressQueryParsingExceptionsphp(php)php}php,
php php php php php php*php php{php@linkphp Zendphp_Searchphp_Lucenephp:php:dontSuppressQueryParsingExceptionsphp(php)php}php and
php php php php php php*php php{php@linkphp Zendphp_Searchphp_Lucenephp:php:checkQueryParsingExceptionsSuppressModephp(php)php}php tophp operate
php php php php php php*php withphp thisphp settingphp.
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_suppressQueryParsingExceptionsphp php=php truephp;

php php php php php/php*php*
php php php php php php*php Booleanphp operatorsphp constants
php php php php php php*php/
php php php php constphp Bphp_ORphp php php=php php0php;
php php php php constphp Bphp_ANDphp php=php php1php;

php php php php php/php*php*
php php php php php php*php Defaultphp booleanphp queriesphp operator
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_defaultOperatorphp php=php selfphp:php:Bphp_ORphp;


php php php php php/php*php*php Queryphp parserphp Statephp Machinephp statesphp php*php/
php php php php constphp STphp_COMMONphp_QUERYphp_ELEMENTphp php php php php php php php=php php0php;php php php php/php/php Termsphp,php phrasesphp,php operators
php php php php constphp STphp_CLOSEDINTphp_RQphp_STARTphp php php php php php php php php php=php php1php;php php php php/php/php Rangephp queryphp startphp php(closedphp intervalphp)php php-php php'php[php'
php php php php constphp STphp_CLOSEDINTphp_RQphp_FIRSTphp_TERMphp php php php php=php php2php;php php php php/php/php Firstphp termphp inphp php'php[termphp1php tophp termphp2php]php'php construction
php php php php constphp STphp_CLOSEDINTphp_RQphp_TOphp_TERMphp php php php php php php php=php php3php;php php php php/php/php php'TOphp'php lexemephp inphp php'php[termphp1php tophp termphp2php]php'php construction
php php php php constphp STphp_CLOSEDINTphp_RQphp_LASTphp_TERMphp php php php php php=php php4php;php php php php/php/php Secondphp termphp inphp php'php[termphp1php tophp termphp2php]php'php construction
php php php php constphp STphp_CLOSEDINTphp_RQphp_ENDphp php php php php php php php php php php php=php php5php;php php php php/php/php Rangephp queryphp endphp php(closedphp intervalphp)php php-php php'php]php'
php php php php constphp STphp_OPENEDINTphp_RQphp_STARTphp php php php php php php php php php=php php6php;php php php php/php/php Rangephp queryphp startphp php(openedphp intervalphp)php php-php php'php{php'
php php php php constphp STphp_OPENEDINTphp_RQphp_FIRSTphp_TERMphp php php php php=php php7php;php php php php/php/php Firstphp termphp inphp php'php{termphp1php tophp termphp2php}php'php construction
php php php php constphp STphp_OPENEDINTphp_RQphp_TOphp_TERMphp php php php php php php php=php php8php;php php php php/php/php php'TOphp'php lexemephp inphp php'php{termphp1php tophp termphp2php}php'php construction
php php php php constphp STphp_OPENEDINTphp_RQphp_LASTphp_TERMphp php php php php php=php php9php;php php php php/php/php Secondphp termphp inphp php'php{termphp1php tophp termphp2php}php'php construction
php php php php constphp STphp_OPENEDINTphp_RQphp_ENDphp php php php php php php php php php php php=php php1php0php;php php php/php/php Rangephp queryphp endphp php(openedphp intervalphp)php php-php php'php}php'

php php php php php/php*php*
php php php php php php*php Parserphp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_STARTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_FIRSTphp_TERMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_TOphp_TERMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_LASTphp_TERMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_ENDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_STARTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_FIRSTphp_TERMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_TOphp_TERMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_LASTphp_TERMphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_END
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:getTypesphp(php)php)php;

php php php php php php php php php$thisphp-php>addRulesphp(
php php php php php php php php php php php php php arrayphp(arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp,php php php php php php php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_PHRASEphp,php php php php php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FIELDphp,php php php php php php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_REQUIREDphp,php php php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_PROHIBITEDphp,php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FUZZYphp_PROXphp_MARKphp,php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_BOOSTINGphp_MARKphp,php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_RANGEphp_INCLphp_STARTphp,php selfphp:php:STphp_CLOSEDINTphp_RQphp_STARTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_RANGEphp_EXCLphp_STARTphp,php selfphp:php:STphp_OPENEDINTphp_RQphp_STARTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_SUBQUERYphp_STARTphp,php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_SUBQUERYphp_ENDphp,php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_ANDphp_LEXEMEphp,php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_ORphp_LEXEMEphp,php php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_NOTphp_LEXEMEphp,php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_NUMBERphp,php php php php php php php php php php php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)
php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(
php php php php php php php php php php php php php arrayphp(arrayphp(selfphp:php:STphp_CLOSEDINTphp_RQphp_STARTphp,php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp,php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_FIRSTphp_TERMphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_CLOSEDINTphp_RQphp_FIRSTphp_TERMphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_TOphp_LEXEMEphp,php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_TOphp_TERMphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_CLOSEDINTphp_RQphp_TOphp_TERMphp,php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp,php php php php php php php php php php php selfphp:php:STphp_CLOSEDINTphp_RQphp_LASTphp_TERMphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_CLOSEDINTphp_RQphp_LASTphp_TERMphp,php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_RANGEphp_INCLphp_ENDphp,php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)
php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(
php php php php php php php php php php php php php arrayphp(arrayphp(selfphp:php:STphp_OPENEDINTphp_RQphp_STARTphp,php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp,php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_FIRSTphp_TERMphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_OPENEDINTphp_RQphp_FIRSTphp_TERMphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_TOphp_LEXEMEphp,php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_TOphp_TERMphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_OPENEDINTphp_RQphp_TOphp_TERMphp,php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp,php php php php php php php php php php php selfphp:php:STphp_OPENEDINTphp_RQphp_LASTphp_TERMphp)php,
php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_OPENEDINTphp_RQphp_LASTphp_TERMphp,php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_RANGEphp_EXCLphp_ENDphp,php selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp)
php php php php php php php php php php php php php php php php php php php)php)php;



php php php php php php php php php$addTermEntryActionphp php php php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addTermEntryphp'php)php;
php php php php php php php php php$addPhraseEntryActionphp php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addPhraseEntryphp'php)php;
php php php php php php php php php$setFieldActionphp php php php php php php php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'setFieldphp'php)php;
php php php php php php php php php$setSignActionphp php php php php php php php php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'setSignphp'php)php;
php php php php php php php php php$setFuzzyProxActionphp php php php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'processFuzzyProximityModifierphp'php)php;
php php php php php php php php php$processModifierParameterActionphp php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'processModifierParameterphp'php)php;
php php php php php php php php php$subqueryStartActionphp php php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'subqueryStartphp'php)php;
php php php php php php php php php$subqueryEndActionphp php php php php php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'subqueryEndphp'php)php;
php php php php php php php php php$logicalOperatorActionphp php php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'logicalOperatorphp'php)php;
php php php php php php php php php$openedRQFirstTermActionphp php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'openedRQFirstTermphp'php)php;
php php php php php php php php php$openedRQLastTermActionphp php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'openedRQLastTermphp'php)php;
php php php php php php php php php$closedRQFirstTermActionphp php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'closedRQFirstTermphp'php)php;
php php php php php php php php php$closedRQLastTermActionphp php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'closedRQLastTermphp'php)php;


php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp,php php php php php php php php php php php php php$addTermEntryActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_PHRASEphp,php php php php php php php php php php php$addPhraseEntryActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FIELDphp,php php php php php php php php php php php php$setFieldActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_REQUIREDphp,php php php php php php php php php$setSignActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_PROHIBITEDphp,php php php php php php php$setSignActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FUZZYphp_PROXphp_MARKphp,php php$setFuzzyProxActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_NUMBERphp,php php php php php php php php php php php$processModifierParameterActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_SUBQUERYphp_STARTphp,php php php$subqueryStartActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_SUBQUERYphp_ENDphp,php php php php php$subqueryEndActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_ANDphp_LEXEMEphp,php php php php php php php$logicalOperatorActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_ORphp_LEXEMEphp,php php php php php php php php$logicalOperatorActionphp)php;
php php php php php php php php php$thisphp-php>addInputActionphp(selfphp:php:STphp_COMMONphp_QUERYphp_ELEMENTphp,php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_NOTphp_LEXEMEphp,php php php php php php php$logicalOperatorActionphp)php;

php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_OPENEDINTphp_RQphp_FIRSTphp_TERMphp,php php$openedRQFirstTermActionphp)php;
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_OPENEDINTphp_RQphp_LASTphp_TERMphp,php php php$openedRQLastTermActionphp)php;
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_CLOSEDINTphp_RQphp_FIRSTphp_TERMphp,php php$closedRQFirstTermActionphp)php;
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_CLOSEDINTphp_RQphp_LASTphp_TERMphp,php php php$closedRQLastTermActionphp)php;


php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryLexerphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_lexerphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryLexerphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp queryphp parserphp instance
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParser
php php php php php php*php/
php php php php privatephp staticphp functionphp php_getInstancephp(php)
php php php php php{
php php php php php php php php ifphp php(selfphp:php:php$php_instancephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_instancephp php=php newphp selfphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp selfphp:php:php$php_instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp queryphp stringphp defaultphp encoding
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php selfphp:php:php_getInstancephp(php)php-php>php_defaultEncodingphp php=php php$encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp queryphp stringphp defaultphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultEncodingphp(php)
php php php php php{
php php php php php php php returnphp selfphp:php:php_getInstancephp(php)php-php>php_defaultEncodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp defaultphp booleanphp operator
php php php php php php*
php php php php php php*php php@paramphp integerphp php$operator
php php php php php php*php/
php php php php publicphp staticphp functionphp setDefaultOperatorphp(php$operatorphp)
php php php php php{
php php php php php php php php selfphp:php:php_getInstancephp(php)php-php>php_defaultOperatorphp php=php php$operatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp defaultphp booleanphp operator
php php php php php php*
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php publicphp staticphp functionphp getDefaultOperatorphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_getInstancephp(php)php-php>php_defaultOperatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Turnphp onphp php'suppressphp queryphp parserphp exceptionsphp'php modephp.
php php php php php php*php/
php php php php publicphp staticphp functionphp suppressQueryParsingExceptionsphp(php)
php php php php php{
php php php php php php php php selfphp:php:php_getInstancephp(php)php-php>php_suppressQueryParsingExceptionsphp php=php truephp;
php php php php php}
php php php php php/php*php*
php php php php php php*php Turnphp offphp php'suppressphp queryphp parserphp exceptionsphp'php modephp.
php php php php php php*php/
php php php php publicphp staticphp functionphp dontSuppressQueryParsingExceptionsphp(php)
php php php php php{
php php php php php php php php selfphp:php:php_getInstancephp(php)php-php>php_suppressQueryParsingExceptionsphp php=php falsephp;
php php php php php}
php php php php php/php*php*
php php php php php php*php Checkphp php'suppressphp queryphp parserphp exceptionsphp'php modephp.
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp staticphp functionphp queryParsingExceptionsSuppressedphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php_getInstancephp(php)php-php>php_suppressQueryParsingExceptionsphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Escapephp keywordphp tophp forcephp itphp tophp bephp parsedphp asphp onephp term
php php php php php php*
php php php php php php*php php@paramphp stringphp php$keyword
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp escapephp(php$keywordphp)
php php php php php{
php php php php php php php php returnphp php'php\php\php'php php.php implodephp(php'php\php\php'php,php strphp_splitphp(php$keywordphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsesphp aphp queryphp string
php php php php php php*
php php php php php php*php php@paramphp stringphp php$strQuery
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp Zendphp_Searchphp_Lucenephp_Searchphp_Query
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp staticphp functionphp parsephp(php$strQueryphp,php php$encodingphp php=php nullphp)
php php php php php{
php php php php php php php php selfphp:php:php_getInstancephp(php)php;

php php php php php php php php php/php/php Resetphp FSMphp ifphp previousphp parsephp operationphp didnphp'tphp returnphp itphp intophp aphp correctphp state
php php php php php php php php selfphp:php:php$php_instancephp-php>resetphp(php)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php tryphp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserContextphp.phpphp'php;

php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_encodingphp php php php php php=php php(php$encodingphp php!php=php=php nullphp)php php?php php$encodingphp php:php selfphp:php:php$php_instancephp-php>php_defaultEncodingphp;
php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_lastTokenphp php php php php=php nullphp;
php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_contextphp php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserContextphp(selfphp:php:php$php_instancephp-php>php_encodingphp)php;
php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_contextStackphp php=php arrayphp(php)php;
php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_tokensphp php php php php php php php=php selfphp:php:php$php_instancephp-php>php_lexerphp-php>tokenizephp(php$strQueryphp,php selfphp:php:php$php_instancephp-php>php_encodingphp)php;

php php php php php php php php php php php php php/php/php Emptyphp query
php php php php php php php php php php php php ifphp php(countphp(selfphp:php:php$php_instancephp-php>php_tokensphp)php php=php=php php0php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Insignificantphp.phpphp'php;
php php php php php php php php php php php php php php php php returnphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Insignificantphp(php)php;
php php php php php php php php php php php php php}


php php php php php php php php php php php php foreachphp php(selfphp:php:php$php_instancephp-php>php_tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php tryphp php{
php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_currentTokenphp php=php php$tokenphp;
php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>processphp(php$tokenphp-php>typephp)php;

php php php php php php php php php php php php php php php php php php php php selfphp:php:php$php_instancephp-php>php_lastTokenphp php=php php$tokenphp;
php php php php php php php php php php php php php php php php php}php catchphp php(Exceptionphp php$ephp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(strposphp(php$ephp-php>getMessagephp(php)php,php php'Therephp isphp nophp anyphp rulephp forphp'php)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php php'Syntaxphp errorphp atphp charphp positionphp php'php php.php php$tokenphp-php>positionphp php.php php'php.php'php,php php0php,php php$ephp)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(countphp(selfphp:php:php$php_instancephp-php>php_contextStackphp)php php!php=php php0php)php php{
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Syntaxphp Errorphp:php mismatchedphp parenthesesphp,php everyphp openingphp mustphp havephp closingphp.php'php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php returnphp selfphp:php:php$php_instancephp-php>php_contextphp-php>getQueryphp(php)php;
php php php php php php php php php}php catchphp php(Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp php$ephp)php php{
php php php php php php php php php php php php ifphp php(selfphp:php:php$php_instancephp-php>php_suppressQueryParsingExceptionsphp)php php{
php php php php php php php php php php php php php php php php php$queryTokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$strQueryphp,php selfphp:php:php$php_instancephp-php>php_encodingphp)php;

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/MultiTermphp.phpphp'php;
php php php php php php php php php php php php php php php php php$queryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_MultiTermphp(php)php;
php php php php php php php php php php php php php php php php php$termsSignphp php=php php(selfphp:php:php$php_instancephp-php>php_defaultOperatorphp php=php=php selfphp:php:Bphp_ANDphp)php php?php truephp php/php*php requiredphp termphp php*php/php php:
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php nullphp php/php*php optionalphp termphp php*php/php;

php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php php php php foreachphp php(php$queryTokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php php php php php php php php php$queryphp-php>addTermphp(newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(php$tokenphp-php>getTermTextphp(php)php)php,php php$termsSignphp)php;
php php php php php php php php php php php php php php php php php}


php php php php php php php php php php php php php php php php returnphp php$queryphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php$ephp-php>getMessagephp(php)php,php php$ephp-php>getCodephp(php)php,php php$ephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Actionsphp implementation
php php php php php php*
php php php php php php*php Actionsphp affectphp onphp recognizedphp lexemesphp list
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Addphp termphp tophp aphp query
php php php php php php*php/
php php php php publicphp functionphp addTermEntryphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryEntryphp/Termphp.phpphp'php;
php php php php php php php php php$entryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp_Termphp(php$thisphp-php>php_currentTokenphp-php>textphp,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php php php php php$thisphp-php>php_contextphp-php>addEntryphp(php$entryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp phrasephp tophp aphp query
php php php php php php*php/
php php php php publicphp functionphp addPhraseEntryphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryEntryphp/Phrasephp.phpphp'php;
php php php php php php php php php$entryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp_Phrasephp(php$thisphp-php>php_currentTokenphp-php>textphp,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php php php php php$thisphp-php>php_contextphp-php>addEntryphp(php$entryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp field
php php php php php php*php/
php php php php publicphp functionphp setFieldphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp-php>setNextEntryFieldphp(php$thisphp-php>php_currentTokenphp-php>textphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp entryphp sign
php php php php php php*php/
php php php php publicphp functionphp setSignphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp-php>setNextEntrySignphp(php$thisphp-php>php_currentTokenphp-php>typephp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Processphp fuzzyphp searchphp/proximityphp modifierphp php-php php'php~php'
php php php php php php*php/
php php php php publicphp functionphp processFuzzyProximityModifierphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp-php>processFuzzyProximityModifierphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp modifierphp parameter
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp processModifierParameterphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_lastTokenphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Lexemephp modifierphp parameterphp mustphp followphp lexemephp modifierphp.php Charphp positionphp php0php.php'php php)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$thisphp-php>php_lastTokenphp-php>typephp)php php{
php php php php php php php php php php php php casephp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FUZZYphp_PROXphp_MARKphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contextphp-php>processFuzzyProximityModifierphp(php$thisphp-php>php_currentTokenphp-php>textphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php casephp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_BOOSTINGphp_MARKphp:
php php php php php php php php php php php php php php php php php$thisphp-php>php_contextphp-php>boostphp(php$thisphp-php>php_currentTokenphp-php>textphp)php;
php php php php php php php php php php php php php php php php breakphp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php Itphp'sphp notphp aphp userphp inputphp exception
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Lexemephp modifierphp parameterphp mustphp followphp lexemephp modifierphp.php Charphp positionphp php0php.php'php php)php;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Startphp subquery
php php php php php php*php/
php php php php publicphp functionphp subqueryStartphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserContextphp.phpphp'php;

php php php php php php php php php$thisphp-php>php_contextStackphp[php]php php=php php$thisphp-php>php_contextphp;
php php php php php php php php php$thisphp-php>php_contextphp php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserContextphp(php$thisphp-php>php_encodingphp,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Endphp subquery
php php php php php php*php/
php php php php publicphp functionphp subqueryEndphp(php)
php php php php php{
php php php php php php php php ifphp php(countphp(php$thisphp-php>php_contextStackphp)php php=php=php php0php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Syntaxphp Errorphp:php mismatchedphp parenthesesphp,php everyphp openingphp mustphp havephp closingphp.php Charphp positionphp php'php php.php php$thisphp-php>php_currentTokenphp-php>positionphp php.php php'php.php'php php)php;
php php php php php php php php php}

php php php php php php php php php$queryphp php php php php php php php php php php=php php$thisphp-php>php_contextphp-php>getQueryphp(php)php;
php php php php php php php php php$thisphp-php>php_contextphp php=php arrayphp_popphp(php$thisphp-php>php_contextStackphp)php;

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryEntryphp/Subqueryphp.phpphp'php;
php php php php php php php php php$thisphp-php>php_contextphp-php>addEntryphp(newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp_Subqueryphp(php$queryphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp logicalphp operator
php php php php php php*php/
php php php php publicphp functionphp logicalOperatorphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_contextphp-php>addLogicalOperatorphp(php$thisphp-php>php_currentTokenphp-php>typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp firstphp rangephp queryphp termphp php(openedphp intervalphp)
php php php php php php*php/
php php php php publicphp functionphp openedRQFirstTermphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rqFirstTermphp php=php php$thisphp-php>php_currentTokenphp-php>textphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp lastphp rangephp queryphp termphp php(openedphp intervalphp)
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp functionphp openedRQLastTermphp(php)
php php php php php{
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_rqFirstTermphp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php ifphp php(countphp(php$tokensphp)php php>php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Rangephp queryphp boundaryphp termsphp mustphp bephp nonphp-multiplephp wordphp termsphp'php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$fromphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(resetphp(php$tokensphp)php-php>getTermTextphp(php)php,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$fromphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_currentTokenphp-php>textphp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php ifphp php(countphp(php$tokensphp)php php>php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Rangephp queryphp boundaryphp termsphp mustphp bephp nonphp-multiplephp wordphp termsphp'php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$tophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(resetphp(php$tokensphp)php-php>getTermTextphp(php)php,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tophp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$fromphp php=php=php=php nullphp php php&php&php php php$tophp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Atphp leastphp onephp rangephp queryphp boundaryphp termphp mustphp bephp nonphp-emptyphp termphp'php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Rangephp.phpphp'php;
php php php php php php php php php$rangeQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Rangephp(php$fromphp,php php$tophp,php falsephp)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryEntryphp/Subqueryphp.phpphp'php;
php php php php php php php php php$entryphp php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp_Subqueryphp(php$rangeQueryphp)php;
php php php php php php php php php$thisphp-php>php_contextphp-php>addEntryphp(php$entryphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp firstphp rangephp queryphp termphp php(closedphp intervalphp)
php php php php php php*php/
php php php php publicphp functionphp closedRQFirstTermphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_rqFirstTermphp php=php php$thisphp-php>php_currentTokenphp-php>textphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp lastphp rangephp queryphp termphp php(closedphp intervalphp)
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp functionphp closedRQLastTermphp(php)
php php php php php{
php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_rqFirstTermphp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php ifphp php(countphp(php$tokensphp)php php>php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Rangephp queryphp boundaryphp termsphp mustphp bephp nonphp-multiplephp wordphp termsphp'php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$fromphp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(resetphp(php$tokensphp)php-php>getTermTextphp(php)php,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$fromphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$tokensphp php=php Zendphp_Searchphp_Lucenephp_Analysisphp_Analyzerphp:php:getDefaultphp(php)php-php>tokenizephp(php$thisphp-php>php_currentTokenphp-php>textphp,php php$thisphp-php>php_encodingphp)php;
php php php php php php php php ifphp php(countphp(php$tokensphp)php php>php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Rangephp queryphp boundaryphp termsphp mustphp bephp nonphp-multiplephp wordphp termsphp'php)php;
php php php php php php php php php}php elsephp ifphp php(countphp(php$tokensphp)php php=php=php php1php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Indexphp/Termphp.phpphp'php;
php php php php php php php php php php php php php$tophp php=php newphp Zendphp_Searchphp_Lucenephp_Indexphp_Termphp(resetphp(php$tokensphp)php-php>getTermTextphp(php)php,php php$thisphp-php>php_contextphp-php>getFieldphp(php)php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tophp php=php nullphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$fromphp php=php=php=php nullphp php php&php&php php php$tophp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Atphp leastphp onephp rangephp queryphp boundaryphp termphp mustphp bephp nonphp-emptyphp termphp'php)php;
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/Queryphp/Rangephp.phpphp'php;
php php php php php php php php php$rangeQueryphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_Queryphp_Rangephp(php$fromphp,php php$tophp,php truephp)php;
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryEntryphp/Subqueryphp.phpphp'php;
php php php php php php php php php$entryphp php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryEntryphp_Subqueryphp(php$rangeQueryphp)php;
php php php php php php php php php$thisphp-php>php_contextphp-php>addEntryphp(php$entryphp)php;
php php php php php}
php}

