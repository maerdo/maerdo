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
php php*php php@versionphp php php php php$Idphp:php BooleanExpressionRecognizerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*php Zendphp_Searchphp_Lucenephp_FSMphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/FSMphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_BooleanExpressionRecognizerphp extendsphp Zendphp_Searchphp_Lucenephp_FSM
php{
php php php php php/php*php*php Statephp Machinephp statesphp php*php/
php php php php constphp STphp_STARTphp php php php php php php php php php php php=php php0php;
php php php php constphp STphp_LITERALphp php php php php php php php php php=php php1php;
php php php php constphp STphp_NOTphp_OPERATORphp php php php php=php php2php;
php php php php constphp STphp_ANDphp_OPERATORphp php php php php=php php3php;
php php php php constphp STphp_ORphp_OPERATORphp php php php php php=php php4php;

php php php php php/php*php*php Inputphp symbolsphp php*php/
php php php php constphp INphp_LITERALphp php php php php php php php php php=php php0php;
php php php php constphp INphp_NOTphp_OPERATORphp php php php php=php php1php;
php php php php constphp INphp_ANDphp_OPERATORphp php php php php=php php2php;
php php php php constphp INphp_ORphp_OPERATORphp php php php php php=php php3php;


php php php php php/php*php*
php php php php php php*php NOTphp operatorphp signal
php php php php php php*
php php php php php php*php php@varphp boolean
php php php php php php*php/
php php php php privatephp php$php_negativeLiteralphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Currentphp literal
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php privatephp php$php_literalphp;


php php php php php/php*php*
php php php php php php*php Setphp ofphp booleanphp queryphp conjunctions
php php php php php php*
php php php php php php*php Eachphp conjunctionphp isphp anphp arrayphp ofphp conjunctionphp elements
php php php php php php*php Eachphp conjunctionphp elementphp isphp presentedphp withphp twophp-elementsphp arrayphp:
php php php php php php*php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)
php php php php php php*
php php php php php php*php Sophp,php itphp hasphp aphp structurephp:
php php php php php php*php arrayphp(php arrayphp(php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php firstphp literalphp ofphp firstphp conjuction
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php secondphp literalphp ofphp firstphp conjuction
php php php php php php*php php php php php php php php php php php php php php php php.php.php.
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)
php php php php php php*php php php php php php php php php php php php php php)php,php php/php/php endphp ofphp firstphp conjuction
php php php php php php*php php php php php php php php arrayphp(php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php firstphp literalphp ofphp secondphp conjuction
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php secondphp literalphp ofphp secondphp conjuction
php php php php php php*php php php php php php php php php php php php php php php php.php.php.
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)
php php php php php php*php php php php php php php php php php php php php php)php,php php/php/php endphp ofphp secondphp conjuction
php php php php php php*php php php php php php php php php.php.php.
php php php php php php*php php php php php php php)php php/php/php endphp ofphp structure
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_conjunctionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Currentphp conjuction
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_currentConjunctionphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Objectphp constructor
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php arrayphp(selfphp:php:STphp_STARTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_LITERALphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_NOTphp_OPERATORphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_ANDphp_OPERATORphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_ORphp_OPERATORphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:INphp_LITERALphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_NOTphp_OPERATORphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_ANDphp_OPERATORphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_ORphp_OPERATORphp)php)php;

php php php php php php php php php$emptyOperatorActionphp php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'emptyOperatorActionphp'php)php;
php php php php php php php php php$emptyNotOperatorActionphp php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'emptyNotOperatorActionphp'php)php;

php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_STARTphp,php php php php php php php php selfphp:php:INphp_LITERALphp,php php php php php php php php selfphp:php:STphp_LITERALphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_STARTphp,php php php php php php php php selfphp:php:INphp_NOTphp_OPERATORphp,php php php selfphp:php:STphp_NOTphp_OPERATORphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LITERALphp,php php php php php php selfphp:php:INphp_ANDphp_OPERATORphp,php php php selfphp:php:STphp_ANDphp_OPERATORphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LITERALphp,php php php php php php selfphp:php:INphp_ORphp_OPERATORphp,php php php php selfphp:php:STphp_ORphp_OPERATORphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LITERALphp,php php php php php php selfphp:php:INphp_LITERALphp,php php php php php php php php selfphp:php:STphp_LITERALphp,php php php php php php php$emptyOperatorActionphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LITERALphp,php php php php php php selfphp:php:INphp_NOTphp_OPERATORphp,php php php selfphp:php:STphp_NOTphp_OPERATORphp,php php$emptyNotOperatorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NOTphp_OPERATORphp,php selfphp:php:INphp_LITERALphp,php php php php php php php php selfphp:php:STphp_LITERALphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ANDphp_OPERATORphp,php selfphp:php:INphp_LITERALphp,php php php php php php php php selfphp:php:STphp_LITERALphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ANDphp_OPERATORphp,php selfphp:php:INphp_NOTphp_OPERATORphp,php php php selfphp:php:STphp_NOTphp_OPERATORphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ORphp_OPERATORphp,php php selfphp:php:INphp_LITERALphp,php php php php php php php php selfphp:php:STphp_LITERALphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ORphp_OPERATORphp,php php selfphp:php:INphp_NOTphp_OPERATORphp,php php php selfphp:php:STphp_NOTphp_OPERATORphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;

php php php php php php php php php$notOperatorActionphp php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'notOperatorActionphp'php)php;
php php php php php php php php php$orOperatorActionphp php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'orOperatorActionphp'php)php;
php php php php php php php php php$literalActionphp php php php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'literalActionphp'php)php;


php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_NOTphp_OPERATORphp,php php$notOperatorActionphp)php;
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_ORphp_OPERATORphp,php php php$orOperatorActionphp)php;
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_LITERALphp,php php php php php php php$literalActionphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Processphp nextphp operatorphp.
php php php php php php*
php php php php php php*php Operatorsphp arephp definedphp byphp classphp constantsphp:php INphp_ANDphp_OPERATORphp,php INphp_ORphp_OPERATORphp andphp INphp_NOTphp_OPERATOR
php php php php php php*
php php php php php php*php php@paramphp integerphp php$operator
php php php php php php*php/
php php php php publicphp functionphp processOperatorphp(php$operatorphp)
php php php php php{
php php php php php php php php php$thisphp-php>processphp(php$operatorphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp expressionphp literalphp.
php php php php php php*
php php php php php php*php php@paramphp integerphp php$operator
php php php php php php*php/
php php php php publicphp functionphp processLiteralphp(php$literalphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_literalphp php=php php$literalphp;

php php php php php php php php php$thisphp-php>processphp(selfphp:php:INphp_LITERALphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Finishphp anphp expressionphp andphp returnphp result
php php php php php php*
php php php php php php*php Resultphp isphp aphp setphp ofphp booleanphp queryphp conjunctions
php php php php php php*
php php php php php php*php Eachphp conjunctionphp isphp anphp arrayphp ofphp conjunctionphp elements
php php php php php php*php Eachphp conjunctionphp elementphp isphp presentedphp withphp twophp-elementsphp arrayphp:
php php php php php php*php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)
php php php php php php*
php php php php php php*php Sophp,php itphp hasphp aphp structurephp:
php php php php php php*php arrayphp(php arrayphp(php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php firstphp literalphp ofphp firstphp conjuction
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php secondphp literalphp ofphp firstphp conjuction
php php php php php php*php php php php php php php php php php php php php php php php.php.php.
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)
php php php php php php*php php php php php php php php php php php php php php)php,php php/php/php endphp ofphp firstphp conjuction
php php php php php php*php php php php php php php php arrayphp(php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php firstphp literalphp ofphp secondphp conjuction
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)php,php php/php/php secondphp literalphp ofphp secondphp conjuction
php php php php php php*php php php php php php php php php php php php php php php php.php.php.
php php php php php php*php php php php php php php php php php php php php php php arrayphp(php<literalphp>php,php php<isphp_negativephp>php)
php php php php php php*php php php php php php php php php php php php php php)php,php php/php/php endphp ofphp secondphp conjuction
php php php php php php*php php php php php php php php php.php.php.
php php php php php php*php php php php php php php)php php/php/php endphp ofphp structure
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Exception
php php php php php php*php/
php php php php publicphp functionphp finishExpressionphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>getStatephp(php)php php!php=php selfphp:php:STphp_LITERALphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Exceptionphp(php'Literalphp expectedphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_conjunctionsphp[php]php php=php php$thisphp-php>php_currentConjunctionphp;

php php php php php php php php returnphp php$thisphp-php>php_conjunctionsphp;
php php php php php}



php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Actionsphp implementation
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php defaultphp php(omittedphp)php operatorphp processing
php php php php php php*php/
php php php php publicphp functionphp emptyOperatorActionphp(php)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserphp.phpphp'php;

php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:getDefaultOperatorphp(php)php php=php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:Bphp_ANDphp)php php{
php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>orOperatorActionphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Processphp literal
php php php php php php php php php$thisphp-php>literalActionphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php defaultphp php(omittedphp)php php+php NOTphp operatorphp processing
php php php php php php*php/
php php php php publicphp functionphp emptyNotOperatorActionphp(php)
php php php php php{
php php php php php php php php php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp php*php/
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserphp.phpphp'php;

php php php php php php php php ifphp php(Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:getDefaultOperatorphp(php)php php=php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp:php:Bphp_ANDphp)php php{
php php php php php php php php php php php php php/php/php Dophp nothing
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>orOperatorActionphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php Processphp NOTphp operator
php php php php php php php php php$thisphp-php>notOperatorActionphp(php)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php NOTphp operatorphp processing
php php php php php php*php/
php php php php publicphp functionphp notOperatorActionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_negativeLiteralphp php=php truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php ORphp operatorphp processing
php php php php php php*php Closephp currentphp conjunction
php php php php php php*php/
php php php php publicphp functionphp orOperatorActionphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_conjunctionsphp[php]php php php php php php=php php$thisphp-php>php_currentConjunctionphp;
php php php php php php php php php$thisphp-php>php_currentConjunctionphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Literalphp processing
php php php php php php*php/
php php php php publicphp functionphp literalActionphp(php)
php php php php php{
php php php php php php php php php/php/php Addphp literalphp tophp thephp currentphp conjunction
php php php php php php php php php$thisphp-php>php_currentConjunctionphp[php]php php=php arrayphp(php$thisphp-php>php_literalphp,php php!php$thisphp-php>php_negativeLiteralphp)php;

php php php php php php php php php/php/php Switchphp offphp negativephp signal
php php php php php php php php php$thisphp-php>php_negativeLiteralphp php=php falsephp;
php php php php php}
php}
