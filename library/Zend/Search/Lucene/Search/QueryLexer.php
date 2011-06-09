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
php php*php php@versionphp php php php php$Idphp:php QueryLexerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Searchphp_Lucenephp_FSMphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/FSMphp.phpphp'php;

php/php*php*php Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserphp php*php/
requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryTokenphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Searchphp_Lucene
php php*php php@subpackagephp Search
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryLexerphp extendsphp Zendphp_Searchphp_Lucenephp_FSM
php{
php php php php php/php*php*php Statephp Machinephp statesphp php*php/
php php php php constphp STphp_WHITEphp_SPACEphp php php php php php=php php0php;
php php php php constphp STphp_SYNTphp_LEXEMEphp php php php php php=php php1php;
php php php php constphp STphp_LEXEMEphp php php php php php php php php php php=php php2php;
php php php php constphp STphp_QUOTEDphp_LEXEMEphp php php php=php php3php;
php php php php constphp STphp_ESCAPEDphp_CHARphp php php php php=php php4php;
php php php php constphp STphp_ESCAPEDphp_QCHARphp php php php=php php5php;
php php php php constphp STphp_LEXEMEphp_MODIFIERphp php=php php6php;
php php php php constphp STphp_NUMBERphp php php php php php php php php php php=php php7php;
php php php php constphp STphp_MANTISSAphp php php php php php php php php=php php8php;
php php php php constphp STphp_ERRORphp php php php php php php php php php php php=php php9php;

php php php php php/php*php*php Inputphp symbolsphp php*php/
php php php php constphp INphp_WHITEphp_SPACEphp php php php php php=php php0php;
php php php php constphp INphp_SYNTphp_CHARphp php php php php php php php=php php1php;
php php php php constphp INphp_LEXEMEphp_MODIFIERphp php=php php2php;
php php php php constphp INphp_ESCAPEphp_CHARphp php php php php php=php php3php;
php php php php constphp INphp_QUOTEphp php php php php php php php php php php php=php php4php;
php php php php constphp INphp_DECIMALphp_POINTphp php php php=php php5php;
php php php php constphp INphp_ASCIIphp_DIGITphp php php php php php=php php6php;
php php php php constphp INphp_CHARphp php php php php php php php php php php php php=php php7php;
php php php php constphp INphp_MUTABLEphp_CHARphp php php php php=php php8php;

php php php php constphp QUERYphp_WHITEphp_SPACEphp_CHARSphp php php php php php php=php php"php php\nphp\rphp\tphp"php;
php php php php constphp QUERYphp_SYNTphp_CHARSphp php php php php php php php php php php php php php=php php'php:php(php)php[php]php{php}php!php|php&php'php;
php php php php constphp QUERYphp_MUTABLEphp_CHARSphp php php php php php php php php php php=php php'php+php-php'php;
php php php php constphp QUERYphp_DOUBLECHARLEXEMEphp_CHARSphp php=php php'php|php&php'php;
php php php php constphp QUERYphp_LEXEMEMODIFIERphp_CHARSphp php php php=php php'php~php^php'php;
php php php php constphp QUERYphp_ASCIIDIGITSphp_CHARSphp php php php php php php=php php'php0php1php2php3php4php5php6php7php8php9php'php;

php php php php php/php*php*
php php php php php php*php Listphp ofphp recognizedphp lexemes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_lexemesphp;

php php php php php/php*php*
php php php php php php*php Queryphp stringphp php(arrayphp ofphp singlephp-php orphp nonphp singlephp-bytephp charactersphp)
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php privatephp php$php_queryStringphp;

php php php php php/php*php*
php php php php php php*php Currentphp positionphp withinphp aphp queryphp string
php php php php php php*php Usedphp tophp createphp appropriatephp errorphp messages
php php php php php php*
php php php php php php*php php@varphp integer
php php php php php php*php/
php php php php privatephp php$php_queryStringPositionphp;

php php php php php/php*php*
php php php php php php*php Recognizedphp partphp ofphp currentphp lexeme
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php privatephp php$php_currentLexemephp;

php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php parentphp:php:php_php_constructphp(php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_ESCAPEDphp_CHARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_ESCAPEDphp_QCHARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp_MODIFIERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_NUMBERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_MANTISSAphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:STphp_ERRORphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:INphp_WHITEphp_SPACEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_SYNTphp_CHARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_MUTABLEphp_CHARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_ESCAPEphp_CHARphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_QUOTEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_DECIMALphp_POINTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_ASCIIphp_DIGITphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:INphp_CHARphp)php)php;


php php php php php php php php php$lexemeModifierErrorActionphp php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'lexModifierErrExceptionphp'php)php;
php php php php php php php php php$quoteWithinLexemeErrorActionphp php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'quoteWithinLexemeErrExceptionphp'php)php;
php php php php php php php php php$wrongNumberErrorActionphp php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'wrongNumberErrExceptionphp'php)php;



php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ESCAPEDphp_CHARphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_WHITEphp_SPACEphp,php php php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ESCAPEDphp_CHARphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ESCAPEDphp_CHARphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_QUOTEphp php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$quoteWithinLexemeErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ESCAPEDphp_QCHARphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_CHARphp,php php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_LEXEMEphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_QUOTEDphp_LEXEMEphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_ESCAPEphp_CHARphp php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ERRORphp,php php$lexemeModifierErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_QUOTEphp php php php php php php php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$lexemeModifierErrorActionphp)php,


php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_MANTISSAphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_NUMBERphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_CHARphp php php php php php php php php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$lexemeModifierErrorActionphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_ESCAPEphp_CHARphp php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_QUOTEphp php php php php php php php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_MANTISSAphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_NUMBERphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_CHARphp php php php php php php php php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_NUMBERphp,php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php$thisphp-php>addRulesphp(arrayphp(php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_WHITEphp_SPACEphp,php php php php php selfphp:php:STphp_WHITEphp_SPACEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_SYNTphp_CHARphp,php php php php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_MUTABLEphp_CHARphp,php php php php selfphp:php:STphp_SYNTphp_LEXEMEphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_LEXEMEphp_MODIFIERphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_ESCAPEphp_CHARphp php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_ESCAPEphp_CHARphp,php php php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_QUOTEphp php php php php php php php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_QUOTEphp,php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_DECIMALphp_POINTphp php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_DECIMALphp_POINTphp,php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_ASCIIphp_DIGITphp,php php php php php selfphp:php:STphp_MANTISSAphp)php,

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php INphp_CHARphp php php php php php php php php php php php php php notphp allowed
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:INphp_CHARphp,php php php php php php php php php php php php selfphp:php:STphp_ERRORphp,php php$wrongNumberErrorActionphp)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;


php php php php php php php php php/php*php*php Actionsphp php*php/
php php php php php php php php php$syntaxLexemeActionphp php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addQuerySyntaxLexemephp'php)php;
php php php php php php php php php$lexemeModifierActionphp php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addLexemeModifierphp'php)php;
php php php php php php php php php$addLexemeActionphp php php php php php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addLexemephp'php)php;
php php php php php php php php php$addQuotedLexemeActionphp php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addQuotedLexemephp'php)php;
php php php php php php php php php$addNumberLexemeActionphp php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addNumberLexemephp'php)php;
php php php php php php php php php$addLexemeCharActionphp php php php=php newphp Zendphp_Searchphp_Lucenephp_FSMActionphp(php$thisphp,php php'addLexemeCharphp'php)php;


php php php php php php php php php/php*php*php Syntaxphp lexemephp php*php/
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php$syntaxLexemeActionphp)php;
php php php php php php php php php/php/php Twophp lexemesphp inphp succession
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_SYNTphp_LEXEMEphp,php selfphp:php:STphp_SYNTphp_LEXEMEphp,php php$syntaxLexemeActionphp)php;


php php php php php php php php php/php*php*php Lexemephp php*php/
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_LEXEMEphp,php php php php php php php php php php php php php php php php php php php php php php php php$addLexemeCharActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_LEXEMEphp,php php$addLexemeCharActionphp)php;
php php php php php php php php php/php/php STphp_ESCAPEDphp_CHARphp php=php>php STphp_LEXEMEphp transitionphp isphp coveredphp byphp STphp_LEXEMEphp entryphp action

php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_WHITEphp_SPACEphp,php php php php php php$addLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php php php php$addLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php php php php$addLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php php$addLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_NUMBERphp,php php php php php php php php php php php$addLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_LEXEMEphp,php selfphp:php:STphp_MANTISSAphp,php php php php php php php php php$addLexemeActionphp)php;


php php php php php php php php php/php*php*php Quotedphp lexemephp php*php/
php php php php php php php php php/php/php Wephp donphp'tphp needphp entryphp actionphp php(skeepphp quotephp)
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php php$addLexemeCharActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_ESCAPEDphp_QCHARphp,php selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php php$addLexemeCharActionphp)php;
php php php php php php php php php/php/php Closingphp quotephp changesphp statephp tophp thephp STphp_WHITEphp_SPACEphp php php otherphp statesphp arephp notphp used
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_QUOTEDphp_LEXEMEphp,php selfphp:php:STphp_WHITEphp_SPACEphp,php php php php$addQuotedLexemeActionphp)php;


php php php php php php php php php/php*php*php Lexemephp modifierphp php*php/
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php php$lexemeModifierActionphp)php;


php php php php php php php php php/php*php*php Numberphp php*php/
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_NUMBERphp,php php php php php php php php php php php php php php php php php php php php php php php php php php php php$addLexemeCharActionphp)php;
php php php php php php php php php$thisphp-php>addEntryActionphp(selfphp:php:STphp_MANTISSAphp,php php php php php php php php php php php php php php php php php php php php php php php php php php$addLexemeCharActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_NUMBERphp,php php php selfphp:php:STphp_NUMBERphp,php php php php$addLexemeCharActionphp)php;
php php php php php php php php php/php/php STphp_NUMBERphp php=php>php STphp_MANTISSAphp transitionphp isphp coveredphp byphp STphp_MANTISSAphp entryphp action
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:STphp_MANTISSAphp,php php$addLexemeCharActionphp)php;

php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_NUMBERphp,php php php selfphp:php:STphp_WHITEphp_SPACEphp,php php php php php php$addNumberLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_NUMBERphp,php php php selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php php php php$addNumberLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_NUMBERphp,php php php selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php php$addNumberLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:STphp_WHITEphp_SPACEphp,php php php php php php$addNumberLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:STphp_SYNTphp_LEXEMEphp,php php php php php php$addNumberLexemeActionphp)php;
php php php php php php php php php$thisphp-php>addTransitionActionphp(selfphp:php:STphp_MANTISSAphp,php selfphp:php:STphp_LEXEMEphp_MODIFIERphp,php php$addNumberLexemeActionphp)php;
php php php php php}




php php php php php/php*php*
php php php php php php*php Translatephp inputphp charphp tophp anphp inputphp symbolphp ofphp statephp machine
php php php php php php*
php php php php php php*php php@paramphp stringphp php$char
php php php php php php*php php@returnphp integer
php php php php php php*php/
php php php php privatephp functionphp php_translateInputphp(php$charphp)
php php php php php{
php php php php php php php php ifphp php php php php php php php php(strposphp(selfphp:php:QUERYphp_WHITEphp_SPACEphp_CHARSphp,php php php php php$charphp)php php!php=php=php falsephp)php php{php returnphp selfphp:php:INphp_WHITEphp_SPACEphp;
php php php php php php php php php}php elsephp ifphp php(strposphp(selfphp:php:QUERYphp_SYNTphp_CHARSphp,php php php php php php php php php php php php$charphp)php php!php=php=php falsephp)php php{php returnphp selfphp:php:INphp_SYNTphp_CHARphp;
php php php php php php php php php}php elsephp ifphp php(strposphp(selfphp:php:QUERYphp_MUTABLEphp_CHARSphp,php php php php php php php php php$charphp)php php!php=php=php falsephp)php php{php returnphp selfphp:php:INphp_MUTABLEphp_CHARphp;
php php php php php php php php php}php elsephp ifphp php(strposphp(selfphp:php:QUERYphp_LEXEMEMODIFIERphp_CHARSphp,php php$charphp)php php!php=php=php falsephp)php php{php returnphp selfphp:php:INphp_LEXEMEphp_MODIFIERphp;
php php php php php php php php php}php elsephp ifphp php(strposphp(selfphp:php:QUERYphp_ASCIIDIGITSphp_CHARSphp,php php php php php$charphp)php php!php=php=php falsephp)php php{php returnphp selfphp:php:INphp_ASCIIphp_DIGITphp;
php php php php php php php php php}php elsephp ifphp php(php$charphp php=php=php=php php'php"php'php php)php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php returnphp selfphp:php:INphp_QUOTEphp;
php php php php php php php php php}php elsephp ifphp php(php$charphp php=php=php=php php'php.php'php php)php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php returnphp selfphp:php:INphp_DECIMALphp_POINTphp;
php php php php php php php php php}php elsephp ifphp php(php$charphp php=php=php=php php'php\php\php'php)php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php returnphp selfphp:php:INphp_ESCAPEphp_CHARphp;
php php php php php php php php php}php elsephp php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php{php returnphp selfphp:php:INphp_CHARphp;
php php php php php php php php php}
php php php php php}


php php php php php/php*php*
php php php php php php*php Thisphp methodphp isphp usedphp tophp tokenizephp queryphp stringphp intophp lexemes
php php php php php php*
php php php php php php*php php@paramphp stringphp php$inputString
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*php php@returnphp array
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp functionphp tokenizephp(php$inputStringphp,php php$encodingphp)
php php php php php{
php php php php php php php php php$thisphp-php>resetphp(php)php;

php php php php php php php php php$thisphp-php>php_lexemesphp php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_queryStringphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(PHPphp_OSphp php=php=php php'AIXphp'php php&php&php php$encodingphp php=php=php php'php'php)php php{
php php php php php php php php php php php php php$encodingphp php=php php'ISOphp8php8php5php9php-php1php'php;
php php php php php php php php php}
php php php php php php php php php$strLengthphp php=php iconvphp_strlenphp(php$inputStringphp,php php$encodingphp)php;

php php php php php php php php php/php/php Workaroundphp forphp iconvphp_substrphp bug
php php php php php php php php php$inputStringphp php.php=php php'php php'php;

php php php php php php php php forphp php(php$countphp php=php php0php;php php$countphp <php php$strLengthphp;php php$countphp+php+php)php php{
php php php php php php php php php php php php php$thisphp-php>php_queryStringphp[php$countphp]php php=php iconvphp_substrphp(php$inputStringphp,php php$countphp,php php1php,php php$encodingphp)php;
php php php php php php php php php}

php php php php php php php php forphp php(php$thisphp-php>php_queryStringPositionphp php=php php0php;
php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp <php countphp(php$thisphp-php>php_queryStringphp)php;
php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp+php+php)php php{
php php php php php php php php php php php php php$thisphp-php>processphp(php$thisphp-php>php_translateInputphp(php$thisphp-php>php_queryStringphp[php$thisphp-php>php_queryStringPositionphp]php)php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>processphp(selfphp:php:INphp_WHITEphp_SPACEphp)php;

php php php php php php php php ifphp php(php$thisphp-php>getStatephp(php)php php!php=php selfphp:php:STphp_WHITEphp_SPACEphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Unexpectedphp endphp ofphp queryphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_queryStringphp php=php nullphp;

php php php php php php php php returnphp php$thisphp-php>php_lexemesphp;
php php php php php}



php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Actionsphp implementation
php php php php php php*
php php php php php php*php Actionsphp affectphp onphp recognizedphp lexemesphp list
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/

php php php php php/php*php*
php php php php php php*php Addphp queryphp syntaxphp lexeme
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserException
php php php php php php*php/
php php php php publicphp functionphp addQuerySyntaxLexemephp(php)
php php php php php{
php php php php php php php php php$lexemephp php=php php$thisphp-php>php_queryStringphp[php$thisphp-php>php_queryStringPositionphp]php;

php php php php php php php php php/php/php Processphp twophp charphp lexemes
php php php php php php php php ifphp php(strposphp(selfphp:php:QUERYphp_DOUBLECHARLEXEMEphp_CHARSphp,php php$lexemephp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php/php/php increasephp currentphp positionphp inphp aphp queryphp string
php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp+php+php;

php php php php php php php php php php php php php/php/php checkphp,
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_queryStringPositionphp php=php=php countphp(php$thisphp-php>php_queryStringphp)php php php|php|
php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringphp[php$thisphp-php>php_queryStringPositionphp]php php!php=php php$lexemephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Twophp charsphp lexemephp expectedphp.php php'php php.php php$thisphp-php>php_positionMsgphp(php)php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php duplicatephp character
php php php php php php php php php php php php php$lexemephp php.php=php php$lexemephp;
php php php php php php php php php}

php php php php php php php php php$tokenphp php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TCphp_SYNTAXphp_ELEMENTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$lexemephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp)php;

php php php php php php php php php/php/php Skipphp thisphp lexemephp ifphp itphp'sphp aphp fieldphp indicatorphp php'php:php'php andphp treatphp previousphp asphp php'fieldphp'php insteadphp ofphp php'wordphp'
php php php php php php php php ifphp php(php$tokenphp-php>typephp php=php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FIELDphp_INDICATORphp)php php{
php php php php php php php php php php php php php$tokenphp php=php arrayphp_popphp(php$thisphp-php>php_lexemesphp)php;
php php php php php php php php php php php php ifphp php(php$tokenphp php=php=php=php nullphp php php|php|php php php$tokenphp-php>typephp php!php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_WORDphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Fieldphp markphp php\php'php:php\php'php mustphp followphp fieldphp namephp.php php'php php.php php$thisphp-php>php_positionMsgphp(php)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$tokenphp-php>typephp php=php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TTphp_FIELDphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_lexemesphp[php]php php=php php$tokenphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp lexemephp modifier
php php php php php php*php/
php php php php publicphp functionphp addLexemeModifierphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_lexemesphp[php]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TCphp_SYNTAXphp_ELEMENTphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringphp[php$thisphp-php>php_queryStringPositionphp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp)php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Addphp lexeme
php php php php php php*php/
php php php php publicphp functionphp addLexemephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_lexemesphp[php]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TCphp_WORDphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentLexemephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp php-php php1php)php;

php php php php php php php php php$thisphp-php>php_currentLexemephp php=php php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp quotedphp lexeme
php php php php php php*php/
php php php php publicphp functionphp addQuotedLexemephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_lexemesphp[php]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TCphp_PHRASEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentLexemephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp)php;

php php php php php php php php php$thisphp-php>php_currentLexemephp php=php php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp numberphp lexeme
php php php php php php*php/
php php php php publicphp functionphp addNumberLexemephp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_lexemesphp[php]php php=php newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Searchphp_Lucenephp_Searchphp_QueryTokenphp:php:TCphp_NUMBERphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentLexemephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_queryStringPositionphp php-php php1php)php;
php php php php php php php php php$thisphp-php>php_currentLexemephp php=php php'php'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extendphp lexemephp byphp onephp char
php php php php php php*php/
php php php php publicphp functionphp addLexemeCharphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_currentLexemephp php.php=php php$thisphp-php>php_queryStringphp[php$thisphp-php>php_queryStringPositionphp]php;
php php php php php}


php php php php php/php*php*
php php php php php php*php Positionphp message
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php privatephp functionphp php_positionMsgphp(php)
php php php php php{
php php php php php php php php returnphp php'Positionphp isphp php'php php.php php$thisphp-php>php_queryStringPositionphp php.php php'php.php'php;
php php php php php}


php php php php php/php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*
php php php php php php*php Syntaxphp errorsphp actions
php php php php php php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php*php/
php php php php publicphp functionphp lexModifierErrExceptionphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Lexemephp modifierphp characterphp canphp bephp followedphp onlyphp byphp numberphp,php whitephp spacephp orphp queryphp syntaxphp elementphp.php php'php php.php php$thisphp-php>php_positionMsgphp(php)php)php;
php php php php php}
php php php php publicphp functionphp quoteWithinLexemeErrExceptionphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Quotephp withinphp lexemephp mustphp bephp escapedphp byphp php\php'php\php\php\php'php charphp.php php'php php.php php$thisphp-php>php_positionMsgphp(php)php)php;
php php php php php}
php php php php publicphp functionphp wrongNumberErrExceptionphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Searchphp/Lucenephp/Searchphp/QueryParserExceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Searchphp_Lucenephp_Searchphp_QueryParserExceptionphp(php'Wrongphp numberphp syntaxphp.php'php php.php php$thisphp-php>php_positionMsgphp(php)php)php;
php php php php php}
php}

