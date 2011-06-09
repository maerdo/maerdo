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
php php*php php@subpackagephp Renderer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php RendererAbstractphp.phpphp php2php2php1php9php7php php2php0php1php0php-php0php5php-php1php9php php1php3php:php3php2php:php2php5Zphp kokxphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_config
php php*php/
requirephp_oncephp php'Zendphp/Configphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Filter
php php*php/
requirephp_oncephp php'Zendphp/Filterphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Markupphp_Rendererphp_TokenConverterInterface
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/TokenConverterInterfacephp.phpphp'php;

php/php*php*
php php*php Definesphp thephp basicphp renderingphp functionality
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@subpackagephp Renderer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
abstractphp classphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php{
php php php php constphp TYPEphp_CALLBACKphp php=php php4php;
php php php php constphp TYPEphp_REPLACEphp php php=php php8php;
php php php php constphp TYPEphp_ALIASphp php php php php=php php1php6php;

php php php php php/php*php*
php php php php php php*php Tagphp info
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_markupsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Parser
php php php php php php*
php php php php php php*php php@varphp Zendphp_Markupphp_Parserphp_ParserInterface
php php php php php php*php/
php php php php protectedphp php$php_parserphp;

php php php php php/php*php*
php php php php php php*php Whatphp filterphp tophp use
php php php php php php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_filterphp;

php php php php php/php*php*
php php php php php php*php Filterphp chain
php php php php php php*
php php php php php php*php php@varphp Zendphp_Filter
php php php php php php*php/
php php php php protectedphp php$php_defaultFilterphp;

php php php php php/php*php*
php php php php php php*php Thephp currentphp group
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_groupphp;

php php php php php/php*php*
php php php php php php*php Groupsphp definition
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_groupsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Pluginphp loaderphp forphp tags
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp php$php_pluginLoaderphp;

php php php php php/php*php*
php php php php php php*php Thephp currentphp token
php php php php php php*
php php php php php php*php php@varphp Zendphp_Markupphp_Token
php php php php php php*php/
php php php php protectedphp php$php_tokenphp;

php php php php php/php*php*
php php php php php php*php Encoding
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp staticphp php$php_encodingphp php=php php'UTFphp-php8php'php;


php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp arrayphp|Zendphp_Configphp php$options
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$optionsphp[php'encodingphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEncodingphp(php$optionsphp[php'encodingphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'parserphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setParserphp(php$optionsphp[php'parserphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'useDefaultFiltersphp'php]php)php php|php|php php(php$optionsphp[php'useDefaultFiltersphp'php]php php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDefaultFiltersphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'defaultFilterphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDefaultFilterphp(php$optionsphp[php'defaultFilterphp'php]php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp parser
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Parserphp_ParserInterfacephp php$parser
php php php php php php*php php@returnphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setParserphp(Zendphp_Markupphp_Parserphp_ParserInterfacephp php$parserphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_parserphp php=php php$parserphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp parser
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_Parserphp_ParserInterface
php php php php php php*php/
php php php php publicphp functionphp getParserphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_parserphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp pluginphp loader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp functionphp getPluginLoaderphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_pluginLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp rendererphp'sphp encoding
php php php php php php*
php php php php php php*php php@paramphp stringphp php$encoding
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp setEncodingphp(php$encodingphp)
php php php php php{
php php php php php php php php selfphp:php:php$php_encodingphp php=php php$encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp rendererphp'sphp encoding
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp getEncodingphp(php)
php php php php php{
php php php php php php php php returnphp selfphp:php:php$php_encodingphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp newphp markup
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp addMarkupphp(php$namephp,php php$typephp,php arrayphp php$optionsphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'groupphp'php]php)php php&php&php php(php$typephp php^php selfphp:php:TYPEphp_ALIASphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Markupphp_Rendererphp_Exceptionphp(php"Therephp isphp nophp renderphp groupphp definedphp.php"php)php;
php php php php php php php php php}

php php php php php php php php php/php/php addphp thephp filter
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'filterphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php$optionsphp[php'filterphp'php]php instanceofphp Zendphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php$filterphp php=php php$optionsphp[php'filterphp'php]php;
php php php php php php php php php php php php php}php elseifphp php(php$optionsphp[php'filterphp'php]php php=php=php=php truephp)php php{
php php php php php php php php php php php php php php php php php$filterphp php=php php$thisphp-php>getDefaultFilterphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$filterphp php=php falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$filterphp php=php php$thisphp-php>getDefaultFilterphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp thephp type
php php php php php php php php ifphp php(php$typephp php&php selfphp:php:TYPEphp_CALLBACKphp)php php{
php php php php php php php php php php php php php/php/php addphp aphp callbackphp tag
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'callbackphp'php]php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(php!php(php$optionsphp[php'callbackphp'php]php instanceofphp Zendphp_Markupphp_Rendererphp_TokenConverterInterfacephp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Markupphp_Rendererphp_Exceptionphp(php"Notphp aphp validphp tagphp callbackphp.php"php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$optionsphp[php'callbackphp'php]php,php php'setRendererphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'callbackphp'php]php-php>setRendererphp(php$thisphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$optionsphp[php'callbackphp'php]php php=php nullphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp[php'typephp'php]php php=php php$typephp;
php php php php php php php php php php php php php$optionsphp[php'filterphp'php]php php=php php$filterphp;

php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$namephp]php php=php php$optionsphp;
php php php php php php php php php}php elseifphp php(php$typephp php&php selfphp:php:TYPEphp_ALIASphp)php php{
php php php php php php php php php php php php php/php/php addphp anphp alias
php php php php php php php php php php php php ifphp php(emptyphp(php$optionsphp[php'namephp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Markupphp_Rendererphp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php php php php php'Nophp aliasphp wasphp providedphp butphp tagphp wasphp definedphp asphp suchphp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$namephp]php php=php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php selfphp:php:TYPEphp_ALIASphp,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php$optionsphp[php'namephp'php]
php php php php php php php php php php php php php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php ifphp php(php$typephp php&php&php arrayphp_keyphp_existsphp(php'emptyphp'php,php php$optionsphp)php php&php&php php$optionsphp[php'emptyphp'php]php)php php{
php php php php php php php php php php php php php php php php php/php/php addphp aphp singlephp replacephp markup
php php php php php php php php php php php php php php php php php$optionsphp[php'typephp'php]php php php php=php php$typephp;
php php php php php php php php php php php php php php php php php$optionsphp[php'filterphp'php]php php=php php$filterphp;

php php php php php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$namephp]php php=php php$optionsphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php addphp aphp replacephp markup
php php php php php php php php php php php php php php php php php$optionsphp[php'typephp'php]php php php php=php php$typephp;
php php php php php php php php php php php php php php php php php$optionsphp[php'filterphp'php]php php=php php$filterphp;

php php php php php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$namephp]php php=php php$optionsphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp markup
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp removeMarkupphp(php$namephp)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_markupsphp[php$namephp]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp thephp defaultphp tags
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp clearMarkupsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupsphp php=php arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp function
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_TokenListphp|stringphp php$tokenList
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$valuephp instanceofphp Zendphp_Markupphp_TokenListphp)php php{
php php php php php php php php php php php php php$tokenListphp php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tokenListphp php=php php$thisphp-php>getParserphp(php)php-php>parsephp(php$valuephp)php;
php php php php php php php php php}

php php php php php php php php php$rootphp php=php php$tokenListphp-php>currentphp(php)php;

php php php php php php php php php$thisphp-php>php_filterphp php=php php$thisphp-php>getDefaultFilterphp(php)php;

php php php php php php php php returnphp php$thisphp-php>php_renderphp(php$rootphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp singlephp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_renderphp(Zendphp_Markupphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php php$returnphp php php php php=php php'php'php;

php php php php php php php php php$thisphp-php>php_tokenphp php=php php$tokenphp;

php php php php php php php php php/php/php ifphp thisphp tagphp hasphp childrenphp,php executephp them
php php php php php php php php ifphp php(php$tokenphp-php>hasChildrenphp(php)php)php php{
php php php php php php php php php php php php foreachphp php(php$tokenphp-php>getChildrenphp(php)php asphp php$childphp)php php{
php php php php php php php php php php php php php php php php php$returnphp php.php=php php$thisphp-php>php_executephp(php$childphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp groupphp ofphp aphp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@returnphp stringphp|bool
php php php php php php*php/
php php php php protectedphp functionphp php_getGroupphp(Zendphp_Markupphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_markupsphp[php$tokenphp-php>getNamephp(php)php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$tagphp php=php php$thisphp-php>php_markupsphp[php$tokenphp-php>getNamephp(php)php]php;

php php php php php php php php php/php/php aliasphp processing
php php php php php php php php whilephp php(php$tagphp[php'typephp'php]php php&php selfphp:php:TYPEphp_ALIASphp)php php{
php php php php php php php php php php php php php$tagphp php=php php$thisphp-php>php_markupsphp[php$tagphp[php'namephp'php]php]php;
php php php php php php php php php}

php php php php php php php php returnphp issetphp(php$tagphp[php'groupphp'php]php)php php?php php$tagphp[php'groupphp'php]php php:php falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp thephp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_executephp(Zendphp_Markupphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php php/php/php firstphp returnphp thephp normalphp textphp tags
php php php php php php php php ifphp php(php$tokenphp-php>getTypephp(php)php php=php=php Zendphp_Markupphp_Tokenphp:php:TYPEphp_NONEphp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_filterphp(php$tokenphp-php>getTagphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php ifphp thephp tokenphp doesnphp'tphp havephp aphp notationphp,php returnphp thephp plainphp text
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_markupsphp[php$tokenphp-php>getNamephp(php)php]php)php)php php{
php php php php php php php php php php php php php$oldTokenphp php php=php php$thisphp-php>php_tokenphp;
php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_filterphp(php$tokenphp-php>getTagphp(php)php)php php.php php$thisphp-php>php_renderphp(php$tokenphp)php php.php php$tokenphp-php>getStopperphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php php$oldTokenphp;
php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}

php php php php php php php php php$namephp php php php=php php$thisphp-php>php_getMarkupNamephp(php$tokenphp)php;
php php php php php php php php php$markupphp php=php php(php!php$namephp)php php?php falsephp php:php php$thisphp-php>php_markupsphp[php$namephp]php;
php php php php php php php php php$emptyphp php php=php php(isphp_arrayphp(php$markupphp)php php&php&php arrayphp_keyphp_existsphp(php'emptyphp'php,php php$markupphp)php php&php&php php$markupphp[php'emptyphp'php]php)php;

php php php php php php php php php/php/php checkphp ifphp thephp tagphp hasphp content
php php php php php php php php ifphp php(php!php$emptyphp php&php&php php!php$tokenphp-php>hasChildrenphp(php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp forphp thephp context
php php php php php php php php ifphp php(isphp_arrayphp(php$markupphp)php php&php&php php!inphp_arrayphp(php$markupphp[php'groupphp'php]php,php php$thisphp-php>php_groupsphp[php$thisphp-php>php_groupphp]php)php)php php{
php php php php php php php php php php php php php$oldTokenphp php=php php$thisphp-php>php_tokenphp;
php php php php php php php php php php php php php$returnphp php php php=php php$thisphp-php>php_filterphp(php$tokenphp-php>getTagphp(php)php)php php.php php$thisphp-php>php_renderphp(php$tokenphp)php php.php php$tokenphp-php>getStopperphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_tokenphp php=php php$oldTokenphp;
php php php php php php php php php php php php returnphp php$returnphp;
php php php php php php php php php}

php php php php php php php php php/php/php checkphp forphp thephp filter
php php php php php php php php ifphp php(php!issetphp(php$markupphp[php'filterphp'php]php)
php php php php php php php php php php php php php|php|php php(php!php(php$markupphp[php'filterphp'php]php instanceofphp Zendphp_Filterphp_Interfacephp)php php&php&php php(php$markupphp[php'filterphp'php]php php!php=php=php falsephp)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$namephp]php[php'filterphp'php]php php=php php$thisphp-php>getDefaultFilterphp(php)php;
php php php php php php php php php}

php php php php php php php php php/php/php savephp oldphp valuesphp tophp resetphp themphp afterphp thephp workphp isphp done
php php php php php php php php php$oldFilterphp php=php php$thisphp-php>php_filterphp;
php php php php php php php php php$oldGroupphp php php=php php$thisphp-php>php_groupphp;

php php php php php php php php php$returnphp php=php php'php'php;

php php php php php php php php php/php/php setphp thephp filterphp andphp thephp group
php php php php php php php php php$thisphp-php>php_filterphp php=php php$thisphp-php>getFilterphp(php$namephp)php;

php php php php php php php php ifphp php(php$groupphp php=php php$thisphp-php>php_getGroupphp(php$tokenphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_groupphp php=php php$groupphp;
php php php php php php php php php}

php php php php php php php php php/php/php callback
php php php php php php php php ifphp php(isphp_arrayphp(php$markupphp)php php&php&php php(php$markupphp[php'typephp'php]php php&php selfphp:php:TYPEphp_CALLBACKphp)php)php php{
php php php php php php php php php php php php php/php/php loadphp thephp callbackphp ifphp thephp tagphp doesnphp'tphp exist
php php php php php php php php php php php php ifphp php(php!php(php$markupphp[php'callbackphp'php]php instanceofphp Zendphp_Markupphp_Rendererphp_TokenConverterInterfacephp)php)php php{
php php php php php php php php php php php php php php php php php$classphp php=php php$thisphp-php>getPluginLoaderphp(php)php-php>loadphp(php$namephp)php;

php php php php php php php php php php php php php php php php php$markupphp[php'callbackphp'php]php php=php newphp php$classphp;

php php php php php php php php php php php php php php php php ifphp php(php!php(php$markupphp[php'callbackphp'php]php instanceofphp Zendphp_Markupphp_Rendererphp_TokenConverterInterfacephp)php)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Markupphp_Rendererphp_Exceptionphp(php"Callbackphp forphp tagphp php'php$namephp'php foundphp,php butphp itphp isnphp'tphp validphp.php"php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$markupphp[php'callbackphp'php]php,php php'setRendererphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$markupphp[php'callbackphp'php]php-php>setRendererphp(php$thisphp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(php$markupphp[php'typephp'php]php php&php&php php!php$emptyphp)php php{
php php php php php php php php php php php php php php php php php$returnphp php=php php$markupphp[php'callbackphp'php]php-php>convertphp(php$tokenphp,php php$thisphp-php>php_renderphp(php$tokenphp)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnphp php=php php$markupphp[php'callbackphp'php]php-php>convertphp(php$tokenphp,php nullphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php replace
php php php php php php php php php php php php ifphp php(php$markupphp[php'typephp'php]php php&php&php php!php$emptyphp)php php{
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_executeReplacephp(php$tokenphp,php php$markupphp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$returnphp php=php php$thisphp-php>php_executeSingleReplacephp(php$tokenphp,php php$markupphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php resetphp tophp thephp oldphp values
php php php php php php php php php$thisphp-php>php_filterphp php=php php$oldFilterphp;
php php php php php php php php php$thisphp-php>php_groupphp php php=php php$oldGroupphp;

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Filterphp method
php php php php php php*
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_filterphp instanceofphp Zendphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_filterphp-php>filterphp(php$valuephp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$valuephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp markupphp name
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Markupphp_Token
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_getMarkupNamephp(Zendphp_Markupphp_Tokenphp php$tokenphp)
php php php php php{
php php php php php php php php php$namephp php=php php$tokenphp-php>getNamephp(php)php;
php php php php php php php php ifphp php(emptyphp(php$namephp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_resolveMarkupNamephp(php$namephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Resolvephp aliasesphp forphp aphp markupphp name
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_resolveMarkupNamephp(php$namephp)
php php php php php{
php php php php php php php php whilephp php(php(php$typephp php=php php$thisphp-php>php_getMarkupTypephp(php$namephp)php)
php php php php php php php php php php php php php php php php&php&php php(php$typephp php&php selfphp:php:TYPEphp_ALIASphp)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$namephp php=php php$thisphp-php>php_markupsphp[php$namephp]php[php'namephp'php]php;
php php php php php php php php php}

php php php php php php php php returnphp php$namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupphp type
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp falsephp|int
php php php php php php*php/
php php php php protectedphp functionphp php_getMarkupTypephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_markupsphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_markupsphp[php$namephp]php[php'typephp'php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_markupsphp[php$namephp]php[php'typephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp aphp replacephp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@paramphp php arrayphp php$tag
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_executeReplacephp(Zendphp_Markupphp_Tokenphp php$tokenphp,php php$tagphp)
php php php php php{
php php php php php php php php returnphp php$tagphp[php'startphp'php]php php.php php$thisphp-php>php_renderphp(php$tokenphp)php php.php php$tagphp[php'endphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp aphp singlephp replacephp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@paramphp php arrayphp php$tag
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_executeSingleReplacephp(Zendphp_Markupphp_Tokenphp php$tokenphp,php php$tagphp)
php php php php php{
php php php php php php php php returnphp php$tagphp[php'replacephp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp defaultphp filter
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getDefaultFilterphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_defaultFilterphp)php php{
php php php php php php php php php php php php php$thisphp-php>addDefaultFiltersphp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_defaultFilterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp defaultphp filter
php php php php php php*
php php php php php php*php php@paramphp stringphp php$filter
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addDefaultFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp,php php$placementphp php=php Zendphp_Filterphp:php:CHAINphp_APPENDphp)
php php php php php{
php php php php php php php php ifphp php(php!php(php$thisphp-php>php_defaultFilterphp instanceofphp Zendphp_Filterphp)php)php php{
php php php php php php php php php php php php php$defaultFilterphp php=php newphp Zendphp_Filterphp(php)php;
php php php php php php php php php php php php php$defaultFilterphp-php>addFilterphp(php$filterphp)php;
php php php php php php php php php php php php php$thisphp-php>php_defaultFilterphp php=php php$defaultFilterphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_defaultFilterphp-php>addFilterphp(php$filterphp,php php$placementphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp filter
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp setDefaultFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultFilterphp php=php php$filterphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp filterphp forphp anphp existingphp markup
php php php php php php*
php php php php php php*php php@paramphp stringphp php$markup
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Filterphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getFilterphp(php$markupphp)
php php php php php{
php php php php php php php php php$markupphp php=php php$thisphp-php>php_resolveMarkupNamephp(php$markupphp)php;

php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php)
php php php php php php php php php php php php php|php|php php!php(php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php instanceofphp Zendphp_Filterphp_Interfacephp)
php php php php php php php php php)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php)php php&php&php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php php=php php$thisphp-php>getDefaultFilterphp(php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp filterphp forphp anphp existingphp markup
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*php php@paramphp stringphp php$markup
php php php php php php*php php@paramphp stringphp php$placement
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp addFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp,php php$markupphp,php php$placementphp php=php Zendphp_Filterphp:php:CHAINphp_APPENDphp)
php php php php php{
php php php php php php php php php$markupphp php=php php$thisphp-php>php_resolveMarkupNamephp(php$markupphp)php;

php php php php php php php php php$oldFilterphp php=php php$thisphp-php>getFilterphp(php$markupphp)php;

php php php php php php php php php/php/php ifphp thisphp filterphp isphp thephp defaultphp filterphp,php clonephp itphp first
php php php php php php php php ifphp php(php$oldFilterphp php=php=php=php php$thisphp-php>getDefaultFilterphp(php)php)php php{
php php php php php php php php php php php php php$oldFilterphp php=php clonephp php$oldFilterphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!php(php$oldFilterphp instanceofphp Zendphp_Filterphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php php=php newphp Zendphp_Filterphp(php)php;

php php php php php php php php php php php php ifphp php(php$oldFilterphp instanceofphp Zendphp_Filterphp_Interfacephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php-php>addFilterphp(php$oldFilterphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php php=php php$oldFilterphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php-php>addFilterphp(php$filterphp,php php$placementphp)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp filterphp forphp anphp existing
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Filterphp_Interfacephp php$filter
php php php php php php*php php@paramphp stringphp php$markup
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp functionphp setFilterphp(Zendphp_Filterphp_Interfacephp php$filterphp,php php$markupphp)
php php php php php{
php php php php php php php php php$markupphp php=php php$thisphp-php>php_resolveMarkupNamephp(php$markupphp)php;

php php php php php php php php php$thisphp-php>php_markupsphp[php$markupphp]php[php'filterphp'php]php php=php php$filterphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp renderphp group
php php php php php php*
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp arrayphp php$allowedInside
php php php php php php*php php@paramphp arrayphp php$allowsInside
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addGroupphp(php$namephp,php arrayphp php$allowedInsidephp php=php arrayphp(php)php,php arrayphp php$allowsInsidephp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_groupsphp[php$namephp]php php=php php$allowsInsidephp;

php php php php php php php php foreachphp php(php$allowedInsidephp asphp php$groupphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_groupsphp[php$groupphp]php[php]php php=php php$namephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp groupphp definitions
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getGroupsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_groupsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp defaultphp filters
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php abstractphp publicphp functionphp addDefaultFiltersphp(php)php;

php}
