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
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@subpackagephp Parser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Bbcodephp.phpphp php2php1php1php2php7php php2php0php1php0php-php0php2php-php2php1php php1php5php:php3php5php:php0php3Zphp kokxphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Markupphp_TokenList
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/TokenListphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Markupphp_Parserphp_ParserInterface
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/Parserphp/ParserInterfacephp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@subpackagephp Parser
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Markupphp_Parserphp_Bbcodephp implementsphp Zendphp_Markupphp_Parserphp_ParserInterface
php{
php php php php constphp NEWLINEphp php php php=php php"php[newlinephp\php0php]php"php;

php php php php php/php/php therephp isphp aphp parsingphp differencephp betweenphp thephp defaultphp tagsphp andphp singlephp tags
php php php php constphp TYPEphp_DEFAULTphp php=php php'defaultphp'php;
php php php php constphp TYPEphp_SINGLEphp php php=php php'singlephp'php;

php php php php constphp NAMEphp_CHARSETphp php=php php'php^php\php[php\php]php=php\sphp'php;

php php php php constphp STATEphp_SCANphp php php php php php php php=php php0php;
php php php php constphp STATEphp_SCANATTRSphp php php=php php1php;
php php php php constphp STATEphp_PARSEVALUEphp php=php php2php;

php php php php php/php*php*
php php php php php php*php Tokenphp tree
php php php php php php*
php php php php php php*php php@varphp Zendphp_Markupphp_TokenList
php php php php php php*php/
php php php php protectedphp php$php_treephp;

php php php php php/php*php*
php php php php php php*php Currentphp token
php php php php php php*
php php php php php php*php php@varphp Zendphp_Markupphp_Token
php php php php php php*php/
php php php php protectedphp php$php_currentphp;

php php php php php/php*php*
php php php php php php*php Sourcephp tophp tokenize
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_valuephp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Lengthphp ofphp thephp value
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_valueLenphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Currentphp pointer
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_pointerphp php=php php0php;

php php php php php/php*php*
php php php php php php*php Thephp buffer
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_bufferphp php=php php'php'php;

php php php php php/php*php*
php php php php php php*php Temporaryphp tagphp storage
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tempphp;

php php php php php/php*php*
php php php php php php*php Stoppersphp thatphp wephp arephp searchingphp for
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_searchedStoppersphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Tagphp information
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tagsphp php=php arrayphp(
php php php php php php php php php'Zendphp_Markupphp_Rootphp'php php=php>php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php=php>php selfphp:php:TYPEphp_DEFAULTphp,
php php php php php php php php php php php php php'stoppersphp'php php=php>php arrayphp(php)php,
php php php php php php php php php)php,
php php php php php php php php php'php*php'php php=php>php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php=php>php selfphp:php:TYPEphp_DEFAULTphp,
php php php php php php php php php php php php php'stoppersphp'php php=php>php arrayphp(selfphp:php:NEWLINEphp,php php'php[php/php*php]php'php,php php'php[php/php]php'php)php,
php php php php php php php php php)php,
php php php php php php php php php'hrphp'php php=php>php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php=php>php selfphp:php:TYPEphp_SINGLEphp,
php php php php php php php php php php php php php'stoppersphp'php php=php>php arrayphp(php)php,
php php php php php php php php php)php,
php php php php php php php php php'codephp'php php=php>php arrayphp(
php php php php php php php php php php php php php'typephp'php php php php php php php php php php=php>php selfphp:php:TYPEphp_DEFAULTphp,
php php php php php php php php php php php php php'stoppersphp'php php php php php php=php>php arrayphp(php'php[php/codephp]php'php,php php'php[php/php]php'php)php,
php php php php php php php php php php php php php'parsephp_insidephp'php php=php>php false
php php php php php php php php php)
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Tokenphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tokensphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php State
php php php php php php*
php php php php php php*php php@varphp int
php php php php php php*php/
php php php php protectedphp php$php_statephp php=php selfphp:php:STATEphp_SCANphp;


php php php php php/php*php*
php php php php php php*php Preparephp thephp parsingphp ofphp aphp bbcodephp stringphp,php thephp realphp parsingphp isphp donephp inphp php{php@linkphp php_parsephp(php)php}
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Markupphp_TokenList
php php php php php php*php/
php php php php publicphp functionphp parsephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_stringphp(php$valuephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Markupphp_Parserphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Markupphp/Parserphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Markupphp_Parserphp_Exceptionphp(php'Valuephp tophp parsephp shouldphp bephp aphp stringphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php/php*php*
php php php php php php php php php php php php php php*php php@seephp Zendphp_Markupphp_Parserphp_Exception
php php php php php php php php php php php php php php*php/
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Markupphp/Parserphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Markupphp_Parserphp_Exceptionphp(php'Valuephp tophp parsephp cannotphp bephp leftphp emptyphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_valuephp php=php strphp_replacephp(arrayphp(php"php\rphp\nphp"php,php php"php\rphp"php,php php"php\nphp"php)php,php selfphp:php:NEWLINEphp,php php$valuephp)php;

php php php php php php php php php/php/php variablephp initializationphp forphp tokenizer
php php php php php php php php php$thisphp-php>php_valueLenphp php php php php php php php php php=php strlenphp(php$thisphp-php>php_valuephp)php;
php php php php php php php php php$thisphp-php>php_pointerphp php php php php php php php php php php=php php0php;
php php php php php php php php php$thisphp-php>php_bufferphp php php php php php php php php php php php=php php'php'php;
php php php php php php php php php$thisphp-php>php_tempphp php php php php php php php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_statephp php php php php php php php php php php php php=php selfphp:php:STATEphp_SCANphp;
php php php php php php php php php$thisphp-php>php_tokensphp php php php php php php php php php php php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>php_tokenizephp(php)php;

php php php php php php php php php/php/php variablephp initializationphp forphp treebuilder
php php php php php php php php php$thisphp-php>php_searchedStoppersphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_treephp php php php php php php php php php php php php php=php newphp Zendphp_Markupphp_TokenListphp(php)php;
php php php php php php php php php$thisphp-php>php_currentphp php php php php php php php php php php=php newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php'Zendphp_Markupphp_Rootphp'
php php php php php php php php php)php;

php php php php php php php php php$thisphp-php>php_treephp-php>addChildphp(php$thisphp-php>php_currentphp)php;

php php php php php php php php php$thisphp-php>php_createTreephp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_treephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Tokenize
php php php php php php*
php php php php php php*php php@paramphp stringphp php$input
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_tokenizephp(php)
php php php php php{
php php php php php php php php php$attributephp php=php php'php'php;

php php php php php php php php whilephp php(php$thisphp-php>php_pointerphp <php php$thisphp-php>php_valueLenphp)php php{
php php php php php php php php php php php php switchphp php(php$thisphp-php>php_statephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:STATEphp_SCANphp:
php php php php php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$regexphp php php php=php php'php#php\Gphp(php?php<textphp>php[php^php\php[php]php*php)php(php?php<openphp>php\php[php(php?php<namephp>php[php'php php.php selfphp:php:NAMEphp_CHARSETphp php.php php'php]php+php)php?php)php?php#php'php;
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php$regexphp,php php$thisphp-php>php_valuephp,php php$matchesphp,php nullphp,php php$thisphp-php>php_pointerphp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp php+php=php strlenphp(php$matchesphp[php0php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'textphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bufferphp php.php=php php$matchesphp[php'textphp'php]php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$matchesphp[php'openphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php greatphp,php nophp tagphp,php wephp arephp endingphp thephp string
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$matchesphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bufferphp php.php=php php$matchesphp[php'openphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php'php[php'php php.php php$matchesphp[php'namephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php$matchesphp[php'namephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_pointerphp php>php=php php$thisphp-php>php_valueLenphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php damnphp,php nophp tag
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bufferphp php.php=php php$thisphp-php>php_tempphp[php'tagphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_valuephp[php$thisphp-php>php_pointerphp]php php=php=php php'php=php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp+php+php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'tagphp'php]php php.php=php php'php=php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php php php php php php php php=php selfphp:php:STATEphp_PARSEVALUEphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$attributephp php php php php php php php php php php php=php php$thisphp-php>php_tempphp[php'namephp'php]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:STATEphp_SCANATTRSphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:STATEphp_SCANATTRSphp:
php php php php php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$regexphp php php php=php php'php#php\Gphp(php(php?php<endphp>php\sphp*php\php]php)php|php\sphp+php(php?php<attributephp>php[php'php php.php selfphp:php:NAMEphp_CHARSETphp php.php php'php]php+php)php(php?php<eqphp>php=php?php)php)php#php'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php$regexphp,php php$thisphp-php>php_valuephp,php php$matchesphp,php nullphp,php php$thisphp-php>php_pointerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php breakphp php2php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp php+php=php strlenphp(php$matchesphp[php0php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'endphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_bufferphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php=php>php php$thisphp-php>php_bufferphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONE
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bufferphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'tagphp'php]php php.php=php php$matchesphp[php'endphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'typephp'php]php php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php php$thisphp-php>php_tempphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp php php php php php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:STATEphp_SCANphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php attributephp name
php php php php php php php php php php php php php php php php php php php php php php php php php$attributephp php=php php$matchesphp[php'attributephp'php]php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'tagphp'php]php php.php=php php$matchesphp[php0php]php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'attributesphp'php]php[php$attributephp]php php=php php'php'php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$matchesphp[php'eqphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:STATEphp_SCANATTRSphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:STATEphp_PARSEVALUEphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:STATEphp_PARSEVALUEphp:
php php php php php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php$regexphp php php php=php php'php#php\Gphp(php(php?php<quotephp>php"php|php\php'php)php(php?php<valuequotephp>php.php*php?php)php\php\php2php|php(php?php<valuephp>php[php^php\php]php\sphp]php+php)php)php#php'php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php$regexphp,php php$thisphp-php>php_valuephp,php php$matchesphp,php nullphp,php php$thisphp-php>php_pointerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:STATEphp_SCANATTRSphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp php+php=php strlenphp(php$matchesphp[php0php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'quotephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'attributesphp'php]php[php$attributephp]php php=php php$matchesphp[php'valuequotephp'php]php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'attributesphp'php]php[php$attributephp]php php=php php$matchesphp[php'valuephp'php]php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'tagphp'php]php php.php=php php$matchesphp[php0php]php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_statephp php=php selfphp:php:STATEphp_SCANATTRSphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_bufferphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'tagphp'php php php=php>php php$thisphp-php>php_bufferphp,
php php php php php php php php php php php php php php php php php'typephp'php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONE
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Parsephp thephp tokenphp arrayphp intophp aphp tree
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$tokens
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_createTreephp(php)
php php php php php{
php php php php php php php php foreachphp php(php$thisphp-php>php_tokensphp asphp php$tokenphp)php php{
php php php php php php php php php php php php php/php/php firstphp wephp wantphp tophp knowphp ifphp thisphp tagphp isphp aphp stopperphp,php orphp atphp leastphp aphp searchedphp one
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isStopperphp(php$tokenphp[php'tagphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php/php/php findphp thephp stopper
php php php php php php php php php php php php php php php php php$oldItemsphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php whilephp php(php!inphp_arrayphp(php$tokenphp[php'tagphp'php]php,php php$thisphp-php>php_tagsphp[php$thisphp-php>php_currentphp-php>getNamephp(php)php]php[php'stoppersphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$oldItemsphp[php]php php php php php php=php clonephp php$thisphp-php>php_currentphp;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_currentphp-php>getParentphp(php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php/php/php wephp foundphp thephp stopperphp,php sophp stopphp thephp tag
php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>setStopperphp(php$tokenphp[php'tagphp'php]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_removeFromSearchedStoppersphp(php$thisphp-php>php_currentphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_currentphp-php>getParentphp(php)php;

php php php php php php php php php php php php php php php php php/php/php addphp thephp oldphp itemsphp againphp ifphp therephp arephp any
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$oldItemsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php foreachphp php(arrayphp_reversephp(php$oldItemsphp)php asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php*php php@varphp php$tokenphp Zendphp_Markupphp_Tokenphp php*php/
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(php$itemphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$itemphp-php>setParentphp(php$thisphp-php>php_currentphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$itemphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php ifphp php(php$tokenphp[php'typephp'php]php php=php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(php$tokenphp[php'tagphp'php]php php=php=php selfphp:php:NEWLINEphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php thisphp isphp aphp newlinephp tagphp,php addphp itphp asphp aphp token
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php"php\nphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(issetphp(php$tokenphp[php'namephp'php]php)php php&php&php php(php$tokenphp[php'namephp'php]php[php0php]php php=php=php php'php/php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php thisphp isphp aphp stopperphp,php addphp itphp asphp aphp emptyphp token
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(issetphp(php$thisphp-php>php_tagsphp[php$thisphp-php>php_currentphp-php>getNamephp(php)php]php[php'parsephp_insidephp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php&php&php php!php$thisphp-php>php_tagsphp[php$thisphp-php>php_currentphp-php>getNamephp(php)php]php[php'parsephp_insidephp'php]
php php php php php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php addphp thephp tag
php php php php php php php php php php php php php php php php php php php php php php php php php$childphp php=php newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'typephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'namephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'attributesphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(php$childphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php addphp stoppersphp forphp thisphp tagphp,php ifphp itsphp hasphp stoppers
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_getTypephp(php$tokenphp[php'namephp'php]php)php php=php=php selfphp:php:TYPEphp_DEFAULTphp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$childphp;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_addToSearchedStoppersphp(php$thisphp-php>php_currentphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php nophp tagphp,php justphp addphp itphp asphp aphp simplephp token
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp therephp isphp aphp tagphp declarationphp,php andphp ifphp itphp isntphp therephp,php addphp it
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_checkTagDeclarationphp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_tagsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tagsphp[php$namephp]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php selfphp:php:TYPEphp_DEFAULTphp,
php php php php php php php php php php php php php php php php php'stoppersphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'php[php/php'php php.php php$namephp php.php php'php]php'php,
php php php php php php php php php php php php php php php php php php php php php'php[php/php]php'
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php;
php php php php php php php php php}
php php php php php}
php php php php php/php*php*
php php php php php php*php Checkphp thephp tagphp'sphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getTypephp(php$namephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkTagDeclarationphp(php$namephp)php;

php php php php php php php php returnphp php$thisphp-php>php_tagsphp[php$namephp]php[php'typephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp tagphp isphp aphp stopper
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_isStopperphp(php$tagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkTagDeclarationphp(php$thisphp-php>php_currentphp-php>getNamephp(php)php)php;

php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_searchedStoppersphp[php$tagphp]php)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp tophp searchedphp stoppers
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_addToSearchedStoppersphp(Zendphp_Markupphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkTagDeclarationphp(php$tokenphp-php>getNamephp(php)php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_tagsphp[php$tokenphp-php>getNamephp(php)php]php[php'stoppersphp'php]php asphp php$stopperphp)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_searchedStoppersphp[php$stopperphp]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_searchedStoppersphp[php$stopperphp]php php=php php0php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php+php+php$thisphp-php>php_searchedStoppersphp[php$stopperphp]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp fromphp searchedphp stoppers
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_removeFromSearchedStoppersphp(Zendphp_Markupphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_checkTagDeclarationphp(php$tokenphp-php>getNamephp(php)php)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_tagsphp[php$tokenphp-php>getNamephp(php)php]php[php'stoppersphp'php]php asphp php$stopperphp)php php{
php php php php php php php php php php php php php-php-php$thisphp-php>php_searchedStoppersphp[php$stopperphp]php;
php php php php php php php php php}
php php php php php}

php}
