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
php php*php php@versionphp php php php php$Idphp:php Textilephp.phpphp php2php0php2php7php7php php2php0php1php0php-php0php1php-php1php4php php1php4php:php1php7php:php1php2Zphp kokxphp php$
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
classphp Zendphp_Markupphp_Parserphp_Textilephp implementsphp Zendphp_Markupphp_Parserphp_ParserInterface
php{

php php php php constphp STATEphp_SCANphp php php php php php php php php php php=php php0php;
php php php php constphp STATEphp_NEWphp_PARAGRAPHphp php=php php1php;
php php php php constphp STATEphp_NEWLINEphp php php php php php php php=php php2php;

php php php php constphp MATCHphp_ATTRphp_CLASSIDphp php=php php'php\php(php(php?php<attrphp_classphp>php[aphp-zAphp-Zphp0php-php9php_php]php+php)php?php(php?php:php\php#php(php?php<attrphp_idphp>php[aphp-zAphp-Zphp0php-php9php_php]php+php)php)php?php\php)php'php;
php php php php constphp MATCHphp_ATTRphp_STYLEphp php php php=php php"php\php{php(php?php<attrphp_stylephp>php[php^php\php}php\nphp]php+php)php\php}php"php;
php php php php constphp MATCHphp_ATTRphp_LANGphp php php php php=php php'php\php[php(php?php<attrphp_langphp>php[aphp-zAphp-Zphp_php]php+php)php\php]php'php;
php php php php constphp MATCHphp_ATTRphp_ALIGNphp php php php=php php'php(php?php<attrphp_alignphp>php\<php\php>php?php|php\php>php|php=php)php'php;



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
php php php php php php*php Simplephp tagphp translation
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_simpleTagsphp php=php arrayphp(
php php php php php php php php php'php*php'php php php=php>php php'strongphp'php,
php php php php php php php php php'php*php*php'php php=php>php php'boldphp'php,
php php php php php php php php php'php_php'php php php=php>php php'emphasizedphp'php,
php php php php php php php php php'php_php_php'php php=php>php php'italicphp'php,
php php php php php php php php php'php?php?php'php php=php>php php'citationphp'php,
php php php php php php php php php'php-php'php php php=php>php php'deletedphp'php,
php php php php php php php php php'php+php'php php php=php>php php'insertphp'php,
php php php php php php php php php'php^php'php php php=php>php php'superscriptphp'php,
php php php php php php php php php'php~php'php php php=php>php php'subscriptphp'php,
php php php php php php php php php'php%php'php php php=php>php php'spanphp'php,
php php php php php php php php php/php/php thesephp arephp aphp littlephp morephp complicated
php php php php php php php php php'php@php'php php php=php>php php'codephp'php,
php php php php php php php php php'php!php'php php php=php>php php'imgphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Tokenphp array
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_tokensphp php=php arrayphp(php)php;


php php php php php/php*php*
php php php php php php*php Preparephp thephp parsingphp ofphp aphp Textilephp stringphp,php thephp realphp parsingphp isphp donephp inphp php{php@linkphp php_parsephp(php)php}
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*
php php php php php php*php php@returnphp array
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

php php php php php php php php php/php/php firstphp makephp wephp onlyphp havephp LFphp newlinesphp,php alsophp trimphp thephp value
php php php php php php php php php$thisphp-php>php_valuephp php=php strphp_replacephp(arrayphp(php"php\rphp\nphp"php,php php"php\rphp"php)php,php php"php\nphp"php,php php$valuephp)php;
php php php php php php php php php$thisphp-php>php_valuephp php=php trimphp(php$thisphp-php>php_valuephp)php;

php php php php php php php php php/php/php initializephp variablesphp andphp tokenize
php php php php php php php php php$thisphp-php>php_valueLenphp php=php iconvphp_strlenphp(php$thisphp-php>php_valuephp,php php'UTFphp-php8php'php)php;
php php php php php php php php php$thisphp-php>php_pointerphp php php=php php0php;
php php php php php php php php php$thisphp-php>php_bufferphp php php php=php php'php'php;
php php php php php php php php php$thisphp-php>php_tempphp php php php php php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>php_tokensphp php php php=php arrayphp(php)php;

php php php php php php php php php$thisphp-php>php_tokenizephp(php)php;

php php php php php php php php php/php/php createphp thephp tree
php php php php php php php php php$thisphp-php>php_treephp php php php php php=php newphp Zendphp_Markupphp_TokenListphp(php)php;

php php php php php php php php php$thisphp-php>php_currentphp php php=php newphp Zendphp_Markupphp_Tokenphp(php'php'php,php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,php php'Zendphp_Markupphp_Rootphp'php)php;
php php php php php php php php php$thisphp-php>php_treephp-php>addChildphp(php$thisphp-php>php_currentphp)php;

php php php php php php php php php$thisphp-php>php_createTreephp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_treephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Tokenizephp aphp textilephp string
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_tokenizephp(php)
php php php php php{
php php php php php php php php php$statephp php php php php=php selfphp:php:STATEphp_NEWphp_PARAGRAPHphp;

php php php php php php php php php$attrsMatchphp php=php implodephp(php'php|php'php,php arrayphp(
php php php php php php php php php php php php selfphp:php:MATCHphp_ATTRphp_CLASSIDphp,
php php php php php php php php php php php php selfphp:php:MATCHphp_ATTRphp_STYLEphp,
php php php php php php php php php php php php selfphp:php:MATCHphp_ATTRphp_LANGphp,
php php php php php php php php php php php php selfphp:php:MATCHphp_ATTRphp_ALIGN
php php php php php php php php php)php)php;

php php php php php php php php php$paragraphphp php=php php'php'php;

php php php php php php php php whilephp php(php$thisphp-php>php_pointerphp <php php$thisphp-php>php_valueLenphp)php php{
php php php php php php php php php php php php switchphp php(php$statephp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:STATEphp_SCANphp:
php php php php php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;php php/php/php[php^php\nphp*php_php?php+php~php%php@php!php-php]
php php php php php php php php php php php php php php php php php php php php php$acronymphp php=php php'php(php?php<acronymphp>php[Aphp-Zphp]php{php2php,php}php)php\php(php(php?php<titlephp>php[php^php\php)php]php+php)php\php)php'php;
php php php php php php php php php php php php php php php php php php php php php$regexphp php php php=php php'php#php\Gphp(php?php<textphp>php.php*php?php)php(php?php:php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php(php?php:php(php?php<nlphp_paragraphphp>php\nphp{php2php,php}php)php|php(php?php<nlphp_breakphp>php\nphp)php)php|php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php(php?php<tagphp>php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php(php?php<namephp>php\php*php{php1php,php2php}php|php_php{php1php,php2php}php|php\php?php{php2php}php|php\php-php|php\php+php|php\php~php|php\php^php|php%php|php@php|php!php|php$php|php{php$acronymphp}php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php|php"php:php(php?php<urlphp>php[php^php\sphp]php+php)php|php"php)php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php"php(php?php:php{php$attrsMatchphp}php)php*php)php"
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php)php#siphp'php;
php php php php php php php php php php php php php php php php php php php php pregphp_matchphp(php$regexphp,php php$thisphp-php>php_valuephp,php php$matchesphp,php nullphp,php php$thisphp-php>php_pointerphp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp php+php=php strlenphp(php$matchesphp[php0php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'textphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bufferphp php.php=php php$matchesphp[php'textphp'php]php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php firstphp addphp thephp buffer
php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$thisphp-php>php_bufferphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php=php>php php$thisphp-php>php_bufferphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONE
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_bufferphp php=php php'php'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'nlphp_paragraphphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php$matchesphp[php'nlphp_paragraphphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'pphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php=php selfphp:php:STATEphp_NEWphp_PARAGRAPHphp;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php!emptyphp(php$matchesphp[php'nlphp_breakphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php$matchesphp[php'nlphp_breakphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'breakphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php php php=php selfphp:php:STATEphp_NEWLINEphp;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php!emptyphp(php$matchesphp[php'tagphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_simpleTagsphp[php$matchesphp[php'namephp'php]php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php nowphp addphp thephp newphp token
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php$matchesphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php$thisphp-php>php_simpleTagsphp[php$matchesphp[php'namephp'php]php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php php$thisphp-php>php_extractAttributesphp(php$matchesphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp php=php php$thisphp-php>php_extractAttributesphp(php$matchesphp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$matchesphp[php'tagphp'php]php[php0php]php php=php=php php'php"php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php=php php'urlphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$matchesphp[php'urlphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'urlphp'php]php php=php php$matchesphp[php'urlphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php$matchesphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php$namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php php$attributes
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php=php php'acronymphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'acronymphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'titlephp'php php=php>php php$matchesphp[php'titlephp'php]
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php=php>php php$matchesphp[php'acronymphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONE
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php'php(php'php php.php php$matchesphp[php'titlephp'php]php php.php php'php)php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'acronymphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php=php selfphp:php:STATEphp_SCANphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:STATEphp_NEWphp_PARAGRAPHphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(emptyphp(php$thisphp-php>php_tempphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'pphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php"php\nphp"php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php'pphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php arrayphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'tagphp'php]php php=php substrphp(php$thisphp-php>php_tempphp[php'tagphp'php]php,php php1php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;php php/php/php[php^php\nphp*php_php?php+php~php%php@php!php-php]php php(php\php(php)php?php php[php^php(php)php]php+php php(php?php(php1php)php\php)php)
php php php php php php php php php php php php php php php php php php php php php$regexphp php php php=php php"php#php\Gphp(php?php<namephp>php(hphp[php1php-php6php]php|pphp)php|php(php?php:php\php#php|php\php*php)php)php(php?php:php{php$attrsMatchphp}php)php*php(php?php(php2php)php\php.php\sphp|php\sphp)php#iphp"php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php$regexphp,php php$thisphp-php>php_valuephp,php php$matchesphp,php nullphp,php php$thisphp-php>php_pointerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php php$thisphp-php>php_tempphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php php php php=php selfphp:php:STATEphp_SCANphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp php+php=php strlenphp(php$matchesphp[php0php]php)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$matchesphp[php'namephp'php]php php=php=php php'pphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'tagphp'php]php php php php php php php php.php=php php$matchesphp[php0php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp[php'attributesphp'php]php php=php php$thisphp-php>php_extractAttributesphp(php$matchesphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php php php php=php php$thisphp-php>php_tempphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php php$thisphp-php>php_tempphp;
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tempphp php=php arrayphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php=php php$matchesphp[php'namephp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp php=php php$thisphp-php>php_extractAttributesphp(php$matchesphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$namephp php=php=php php'php#php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php php php php php php php php php=php php'listphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'listphp'php]php php=php php'decimalphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php$namephp php=php=php php'php*php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php=php php'listphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php$matchesphp[php0php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php$namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php php$attributes
php php php php php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$statephp php=php selfphp:php:STATEphp_SCANphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp selfphp:php:STATEphp_NEWLINEphp:
php php php php php php php php php php php php php php php php php php php php php$matchesphp php=php arrayphp(php)php;php php/php/php[php^php\nphp*php_php?php+php~php%php@php!php-php]
php php php php php php php php php php php php php php php php php php php php php$regexphp php php php=php php"php#php\Gphp(php?php<namephp>php(hphp[php1php-php6php]php)php|php(php?php:php\php#php|php\php*php)php)php(php?php:php{php$attrsMatchphp}php)php*php(php?php(php2php)php\php.php\sphp|php\sphp)php#siphp"php;
php php php php php php php php php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php$regexphp,php php$thisphp-php>php_valuephp,php php$matchesphp,php nullphp,php php$thisphp-php>php_pointerphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$statephp php=php selfphp:php:STATEphp_SCANphp;
php php php php php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_pointerphp php+php=php strlenphp(php$matchesphp[php0php]php)php;

php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php=php php$matchesphp[php'namephp'php]php;
php php php php php php php php php php php php php php php php php php php php php$attributesphp php=php php$thisphp-php>php_extractAttributesphp(php$matchesphp)php;

php php php php php php php php php php php php php php php php php php php php ifphp php(php$namephp php=php=php php'php#php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php php php php php php php php php php php php php php php=php php'listphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'listphp'php]php php=php php'decimalphp'php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php$namephp php=php=php php'php*php'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$namephp php=php php'listphp'php;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_tokensphp[php]php php=php arrayphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php=php>php php$matchesphp[php0php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php'namephp'php php php php php php php php=php>php php$namephp,
php php php php php php php php php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php=php>php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'attributesphp'php php=php>php php$attributes
php php php php php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp aphp treephp fromphp thephp tokenizedphp text
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_createTreephp(php)
php php php php php{
php php php php php php php php php$insidephp php=php truephp;

php php php php php php php php foreachphp php(php$thisphp-php>php_tokensphp asphp php$keyphp php=php>php php$tokenphp)php php{
php php php php php php php php php php php php php/php/php firstphp checkphp ifphp thephp tokenphp isphp aphp stopper
php php php php php php php php php php php php ifphp php(php$thisphp-php>php_isStopperphp(php$tokenphp,php php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp-php>getNamephp(php)php php=php=php php'liphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php listphp itemsphp arephp handledphp differently
php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_tokensphp[php$keyphp php+php php1php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php&php&php php(php$thisphp-php>php_tokensphp[php$keyphp php+php php1php]php[php'typephp'php]php php=php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp)
php php php php php php php php php php php php php php php php php php php php php php php php php&php&php php(php$thisphp-php>php_tokensphp[php$keyphp php+php php1php]php[php'namephp'php]php php=php=php php'listphp'php)
php php php php php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php thephp nextphp itemphp isphp aphp correctphp tag
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>setStopperphp(php$tokenphp[php'tagphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_currentphp-php>getParentphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php/php/php closephp thephp list
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>setStopperphp(php$tokenphp[php'tagphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_currentphp-php>getParentphp(php)php-php>getParentphp(php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php/php/php gophp upphp inphp thephp treephp untilphp wephp foundphp thephp end
php php php php php php php php php php php php php php php php php php php php php php php php whilephp php(php$thisphp-php>php_isStopperphp(php$tokenphp,php php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>setStopperphp(php$tokenphp[php'tagphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_currentphp-php>getParentphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php gophp upphp inphp thephp treephp untilphp wephp foundphp thephp endphp ofphp stoppers
php php php php php php php php php php php php php php php php php php php php whilephp php(php$thisphp-php>php_isStopperphp(php$tokenphp,php php$thisphp-php>php_currentphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>setStopperphp(php$tokenphp[php'tagphp'php]php)php;

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$tokenphp[php'attributesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php foreachphp php(php$tokenphp[php'attributesphp'php]php asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addAttributephp(php$namephp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$thisphp-php>php_currentphp-php>getParentphp(php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$insidephp php=php truephp;
php php php php php php php php php php php php php}php elseifphp php(php(php$tokenphp[php'typephp'php]php php=php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp)php php&php&php php$insidephp)php php{
php php php php php php php php php php php php php php php php ifphp php(php$tokenphp[php'namephp'php]php php=php=php php'breakphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php/php/php addphp thephp newlinephp andphp continuephp parsing
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php/php/php handlephp aphp listphp item
php php php php php php php php php php php php php php php php php php php php ifphp php(php$tokenphp[php'namephp'php]php php=php=php php'listphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp php=php arrayphp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(issetphp(php$tokenphp[php'attributesphp'php]php[php'listphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'listphp'php]php php=php php$tokenphp[php'attributesphp'php]php[php'listphp'php]php;
php php php php php php php php php php php php php php php php php php php php php php php php php php php php unsetphp(php$tokenphp[php'attributesphp'php]php[php'listphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$thisphp-php>php_currentphp-php>getNamephp(php)php php!php=php php'listphp'php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php/php/php thephp listphp isnphp'tphp startedphp yetphp,php createphp it
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$childphp php=php newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'listphp'php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$attributesphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(php$childphp)php;

php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$childphp;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'namephp'php]php php=php php'liphp'php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(php(php$tokenphp[php'namephp'php]php php=php=php php'imgphp'php)php php|php|php php(php$tokenphp[php'namephp'php]php php=php=php php'urlphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$insidephp php=php falsephp;
php php php php php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php php php php php/php/php addphp thephp token
php php php php php php php php php php php php php php php php php php php php php$childphp php=php newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp,
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'namephp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'attributesphp'php]php,
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php php php php php)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(php$childphp)php;

php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp php=php php$childphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php simplyphp addphp thephp tokenphp asphp text
php php php php php php php php php php php php php php php php php$thisphp-php>php_currentphp-php>addChildphp(newphp Zendphp_Markupphp_Tokenphp(
php php php php php php php php php php php php php php php php php php php php php$tokenphp[php'tagphp'php]php,
php php php php php php php php php php php php php php php php php php php php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp,
php php php php php php php php php php php php php php php php php php php php php'php'php,
php php php php php php php php php php php php php php php php php php php php arrayphp(php)php,
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_current
php php php php php php php php php php php php php php php php php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp aphp tagphp isphp aphp stopper
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$token
php php php php php php*php php@paramphp Zendphp_Markupphp_Tokenphp php$current
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php protectedphp functionphp php_isStopperphp(arrayphp php$tokenphp,php Zendphp_Markupphp_Tokenphp php$currentphp)
php php php php php{
php php php php php php php php switchphp php(php$currentphp-php>getNamephp(php)php)php php{
php php php php php php php php php php php php casephp php'hphp1php'php:
php php php php php php php php php php php php casephp php'hphp2php'php:
php php php php php php php php php php php php casephp php'hphp3php'php:
php php php php php php php php php php php php casephp php'hphp4php'php:
php php php php php php php php php php php php casephp php'hphp5php'php:
php php php php php php php php php php php php casephp php'hphp6php'php:
php php php php php php php php php php php php casephp php'listphp'php:
php php php php php php php php php php php php casephp php'liphp'php:
php php php php php php php php php php php php php php php php ifphp php(php(php$tokenphp[php'typephp'php]php php=php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp)
php php php php php php php php php php php php php php php php php php php php php&php&php php(php(php$tokenphp[php'namephp'php]php php=php=php php'breakphp'php)php php|php|php php(php$tokenphp[php'namephp'php]php php=php=php php'pphp'php)php)
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'breakphp'php:
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php ifphp php(php(php$tokenphp[php'typephp'php]php php=php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_TAGphp)php php&php&php php(php$tokenphp[php'namephp'php]php php=php=php php$currentphp-php>getNamephp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php}
php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Extractphp thephp attributes
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$matches
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_extractAttributesphp(arrayphp php$matchesphp)
php php php php php{
php php php php php php php php php$attributesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'attrphp_classphp'php]php)php)php php{
php php php php php php php php php php php php php$attributesphp[php'classphp'php]php php=php php$matchesphp[php'attrphp_classphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'attrphp_idphp'php]php)php)php php{
php php php php php php php php php php php php php$attributesphp[php'idphp'php]php php=php php$matchesphp[php'attrphp_idphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'attrphp_stylephp'php]php)php)php php{
php php php php php php php php php php php php php$attributesphp[php'stylephp'php]php php=php php$matchesphp[php'attrphp_stylephp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'attrphp_langphp'php]php)php)php php{
php php php php php php php php php php php php php$attributesphp[php'langphp'php]php php=php php$matchesphp[php'attrphp_langphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!emptyphp(php$matchesphp[php'attrphp_alignphp'php]php)php)php php{
php php php php php php php php php php php php switchphp php(php$matchesphp[php'attrphp_alignphp'php]php)php php{
php php php php php php php php php php php php php php php php casephp php'php=php'php:
php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'alignphp'php]php php=php php'centerphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'php>php'php:
php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'alignphp'php]php php=php php'rightphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'<php>php'php:
php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'alignphp'php]php php=php php'justifyphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php casephp php'<php'php:
php php php php php php php php php php php php php php php php php php php php php$attributesphp[php'alignphp'php]php php=php php'leftphp'php;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$attributesphp;
php php php php php}

php}