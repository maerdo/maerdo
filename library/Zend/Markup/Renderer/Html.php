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
php php*php php@versionphp php php php php$Idphp:php Htmlphp.phpphp php2php2php2php8php6php php2php0php1php0php-php0php5php-php2php5php php1php4php:php2php6php:php4php5Zphp matthewphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Filterphp_HtmlEntities
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/HtmlEntitiesphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Filterphp_PregReplace
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/PregReplacephp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Filterphp_Callback
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Callbackphp.phpphp'php;
php/php*php*
php php*php php@seephp Zendphp_Markupphp_Rendererphp_RendererAbstract
php php*php/
requirephp_oncephp php'Zendphp/Markupphp/Rendererphp/RendererAbstractphp.phpphp'php;

php/php*php*
php php*php HTMLphp renderer
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@subpackagephp Renderer
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Markupphp_Rendererphp_Htmlphp extendsphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php{

php php php php php/php*php*
php php php php php php*php Elementphp groups
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_groupsphp php=php arrayphp(
php php php php php php php php php'blockphp'php php php php php php php php php=php>php arrayphp(php'blockphp'php,php php'inlinephp'php,php php'blockphp-emptyphp'php,php php'inlinephp-emptyphp'php,php php'listphp'php)php,
php php php php php php php php php'inlinephp'php php php php php php php php=php>php arrayphp(php'inlinephp'php,php php'inlinephp-emptyphp'php)php,
php php php php php php php php php'listphp'php php php php php php php php php php=php>php arrayphp(php'listphp-itemphp'php)php,
php php php php php php php php php'listphp-itemphp'php php php php php=php>php arrayphp(php'inlinephp'php,php php'inlinephp-emptyphp'php,php php'listphp'php)php,
php php php php php php php php php'blockphp-emptyphp'php php php=php>php arrayphp(php)php,
php php php php php php php php php'inlinephp-emptyphp'php php=php>php arrayphp(php)php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Thephp currentphp group
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_groupphp php=php php'blockphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp attributes
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp staticphp php$php_defaultAttributesphp php=php arrayphp(
php php php php php php php php php'idphp'php php php php php=php>php php'php'php,
php php php php php php php php php'classphp'php php=php>php php'php'php,
php php php php php php php php php'stylephp'php php=php>php php'php'php,
php php php php php php php php php'langphp'php php php=php>php php'php'php,
php php php php php php php php php'titlephp'php php=php>php php'php'
php php php php php)php;


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

php php php php php php php php php$thisphp-php>php_pluginLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php'Zendphp_Markupphp_Rendererphp_Htmlphp'php php=php>php php'Zendphp/Markupphp/Rendererphp/Htmlphp/php'
php php php php php php php php php)php)php;

php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'useDefaultMarkupsphp'php]php)php php&php&php issetphp(php$optionsphp[php'useDefaultTagsphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'useDefaultMarkupsphp'php]php php=php php$optionsphp[php'useDefaultTagsphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'useDefaultMarkupsphp'php]php)php php&php&php php(php$optionsphp[php'useDefaultMarkupsphp'php]php php!php=php=php falsephp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_defineDefaultMarkupsphp(php)php;
php php php php php php php php php}php elseifphp php(php!issetphp(php$optionsphp[php'useDefaultMarkupsphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_defineDefaultMarkupsphp(php)php;
php php php php php php php php php}

php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definephp thephp defaultphp markups
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_defineDefaultMarkupsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupsphp php=php arrayphp(
php php php php php php php php php php php php php'bphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,php php/php/php selfphp:php:TYPEphp_REPLACEphp php|php selfphp:php:TAGphp_NORMAL
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'strongphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'uphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php php php php php php=php>php php'spanphp'php,
php php php php php php php php php php php php php php php php php'attributesphp'php php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php php php php php'stylephp'php php=php>php php'textphp-decorationphp:php underlinephp;php'php,
php php php php php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php php php php php'groupphp'php php php php php php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php php php php php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'iphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'emphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'citephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'citephp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'delphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'delphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'insphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'insphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'subphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'subphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'supphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'supphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'spanphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'spanphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'acronymphp'php php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'acronymphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php/php/php headings
php php php php php php php php php php php php php'hphp1php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'hphp1php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'hphp2php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'hphp2php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'hphp3php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'hphp3php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'hphp4php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'hphp4php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'hphp5php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'hphp5php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'hphp6php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'hphp6php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php/php/php callbackphp tags
php php php php php php php php php php php php php'urlphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php php6php,php php/php/php selfphp:php:TYPEphp_CALLBACKphp php|php selfphp:php:TAGphp_NORMAL
php php php php php php php php php php php php php php php php php'callbackphp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php'groupphp'php php php php php=php>php php'inlinephp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'imgphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php php6php,
php php php php php php php php php php php php php php php php php'callbackphp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php'groupphp'php php php php php=php>php php'inlinephp-emptyphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'codephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php php6php,
php php php php php php php php php php php php php php php php php'callbackphp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php'groupphp'php php php php php=php>php php'blockphp-emptyphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php php php=php>php falsephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'pphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'pphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'blockphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'ignorephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'startphp'php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php'endphp'php php php php php=php>php php'php'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'blockphp-emptyphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'quotephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'blockquotephp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'blockphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'listphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php php=php>php php6php,
php php php php php php php php php php php php php php php php php'callbackphp'php php=php>php nullphp,
php php php php php php php php php php php php php php php php php'groupphp'php php php php php=php>php php'listphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php php php=php>php newphp Zendphp_Filterphp_PregReplacephp(php'php/php.php*php/isphp'php,php php'php'php)php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'php*php'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php=php>php php1php0php,
php php php php php php php php php php php php php php php php php'tagphp'php php php php php=php>php php'liphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php=php>php php'listphp-itemphp'php,
php php php php php php php php php php php php php php php php php'filterphp'php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'hrphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php php php php=php>php php9php,php php/php/php selfphp:php:TYPEphp_REPLACEphp php|php selfphp:php:TAGphp_SINGLE
php php php php php php php php php php php php php php php php php'tagphp'php php php php php php=php>php php'hrphp'php,
php php php php php php php php php php php php php php php php php'groupphp'php php php php=php>php php'blockphp'php,
php php php php php php php php php php php php php php php php php'emptyphp'php php php php=php>php truephp,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php/php/php aliases
php php php php php php php php php php php php php'boldphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'bphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'strongphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'bphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'italicphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'iphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'emphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'iphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'emphasizedphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'iphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'underlinephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'uphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'citationphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'citephp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'deletedphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'delphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'insertphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'insphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'strikephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'sphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'sphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'delphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'subscriptphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'subphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'superscriptphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'supphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'aphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'urlphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'imagephp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'imgphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'liphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'php*php'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php php php php php'colorphp'php php=php>php arrayphp(
php php php php php php php php php php php php php php php php php'typephp'php php=php>php php1php6php,
php php php php php php php php php php php php php php php php php'namephp'php php=php>php php'spanphp'php,
php php php php php php php php php php php php php)php,
php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp thephp defaultphp filters
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addDefaultFiltersphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_defaultFilterphp php=php newphp Zendphp_Filterphp(php)php;

php php php php php php php php php$thisphp-php>php_defaultFilterphp-php>addFilterphp(newphp Zendphp_Filterphp_HtmlEntitiesphp(arrayphp(php'encodingphp'php php=php>php selfphp:php:getEncodingphp(php)php)php)php)php;
php php php php php php php php php$thisphp-php>php_defaultFilterphp-php>addFilterphp(newphp Zendphp_Filterphp_Callbackphp(php'nlphp2brphp'php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp aphp replacephp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@paramphp php arrayphp php$markup
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_executeReplacephp(Zendphp_Markupphp_Tokenphp php$tokenphp,php php$markupphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$markupphp[php'tagphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$markupphp[php'attributesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$markupphp[php'attributesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$attrsphp php=php selfphp:php:renderAttributesphp(php$tokenphp,php php$markupphp[php'attributesphp'php]php)php;
php php php php php php php php php php php php returnphp php"<php{php$markupphp[php'tagphp'php]php}php{php$attrsphp}php>php{php$thisphp-php>php_renderphp(php$tokenphp)php}<php/php{php$markupphp[php'tagphp'php]php}php>php"php;
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:php_executeReplacephp(php$tokenphp,php php$markupphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Executephp aphp singlephp replacephp token
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@paramphp php arrayphp php$markup
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_executeSingleReplacephp(Zendphp_Markupphp_Tokenphp php$tokenphp,php php$markupphp)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$markupphp[php'tagphp'php]php)php)php php{
php php php php php php php php php php php php ifphp php(php!issetphp(php$markupphp[php'attributesphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$markupphp[php'attributesphp'php]php php=php arrayphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$attrsphp php=php selfphp:php:renderAttributesphp(php$tokenphp,php php$markupphp[php'attributesphp'php]php)php;
php php php php php php php php php php php php returnphp php"<php{php$markupphp[php'tagphp'php]php}php{php$attrsphp}php php/php>php"php;
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:php_executeSingleReplacephp(php$tokenphp,php php$markupphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp somephp attributes
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Markupphp_Tokenphp php$token
php php php php php php*php php@paramphp php arrayphp php$attributes
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp staticphp functionphp renderAttributesphp(Zendphp_Markupphp_Tokenphp php$tokenphp,php arrayphp php$attributesphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$attributesphp php=php arrayphp_mergephp(selfphp:php:php$php_defaultAttributesphp,php php$attributesphp)php;

php php php php php php php php php$returnphp php=php php'php'php;

php php php php php php php php php$tokenAttributesphp php=php php$tokenphp-php>getAttributesphp(php)php;

php php php php php php php php php/php/php correctphp stylephp attribute
php php php php php php php php ifphp php(issetphp(php$tokenAttributesphp[php'stylephp'php]php)php)php php{
php php php php php php php php php php php php php$tokenAttributesphp[php'stylephp'php]php php=php trimphp(php$tokenAttributesphp[php'stylephp'php]php)php;

php php php php php php php php php php php php ifphp php(php$tokenAttributesphp[php'stylephp'php]php[strlenphp(php$tokenAttributesphp[php'stylephp'php]php)php php-php php1php]php php!php=php php'php;php'php)php php{
php php php php php php php php php php php php php php php php php$tokenAttributesphp[php'stylephp'php]php php.php=php php'php;php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$tokenAttributesphp[php'stylephp'php]php php=php php'php'php;
php php php php php php php php php}

php php php php php php php php php/php/php specialphp treathmentphp forphp php'alignphp'php andphp php'colorphp'php attribute
php php php php php php php php ifphp php(issetphp(php$tokenAttributesphp[php'alignphp'php]php)php)php php{
php php php php php php php php php php php php php$tokenAttributesphp[php'stylephp'php]php php.php=php php'textphp-alignphp:php php'php php.php php$tokenAttributesphp[php'alignphp'php]php php.php php'php;php'php;
php php php php php php php php php php php php unsetphp(php$tokenAttributesphp[php'alignphp'php]php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(issetphp(php$tokenAttributesphp[php'colorphp'php]php)php php&php&php selfphp:php:checkColorphp(php$tokenAttributesphp[php'colorphp'php]php)php)php php{
php php php php php php php php php php php php php$tokenAttributesphp[php'stylephp'php]php php.php=php php'colorphp:php php'php php.php php$tokenAttributesphp[php'colorphp'php]php php.php php'php;php'php;
php php php php php php php php php php php php unsetphp(php$tokenAttributesphp[php'colorphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php*
php php php php php php php php php php*php loopphp throughphp allphp thephp availablephp attributesphp,php andphp checkphp ifphp therephp is
php php php php php php php php php php*php aphp valuephp definedphp byphp thephp token
php php php php php php php php php php*php ifphp therephp isphp nophp valuephp definedphp byphp thephp tokenphp,php usephp thephp defaultphp valuephp or
php php php php php php php php php php*php donphp'tphp setphp thephp attribute
php php php php php php php php php php*php/
php php php php php php php php foreachphp php(php$attributesphp asphp php$attributephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$tokenAttributesphp[php$attributephp]php)php php&php&php php!emptyphp(php$tokenAttributesphp[php$attributephp]php)php)php php{
php php php php php php php php php php php php php php php php php$returnphp php.php=php php'php php'php php.php php$attributephp php.php php'php=php"php'php php.php htmlentitiesphp(php$tokenAttributesphp[php$attributephp]php,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php ENTphp_QUOTESphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php selfphp:php:getEncodingphp(php)php)php php.php php'php"php'php;
php php php php php php php php php php php php php}php elseifphp php(php!emptyphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$returnphp php.php=php php'php php'php php.php php$attributephp php.php php'php=php"php'php php.php htmlentitiesphp(php$valuephp,php ENTphp_QUOTESphp,php selfphp:php:getEncodingphp(php)php)php php.php php'php"php'php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$returnphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp aphp colorphp isphp aphp validphp HTMLphp color
php php php php php php*
php php php php php php*php php@paramphp stringphp php$color
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp checkColorphp(php$colorphp)
php php php php php{
php php php php php php php php php/php*
php php php php php php php php php php*php aquaphp,php blackphp,php bluephp,php fuchsiaphp,php grayphp,php greenphp,php limephp,php maroonphp,php navyphp,php olivephp,
php php php php php php php php php php*php purplephp,php redphp,php silverphp,php tealphp,php whitephp,php andphp yellowphp.
php php php php php php php php php php*php/
php php php php php php php php php$colorsphp php=php arrayphp(
php php php php php php php php php php php php php'aquaphp'php,php php'blackphp'php,php php'bluephp'php,php php'fuchsiaphp'php,php php'grayphp'php,php php'greenphp'php,php php'limephp'php,
php php php php php php php php php php php php php'maroonphp'php,php php'navyphp'php,php php'olivephp'php,php php'purplephp'php,php php'redphp'php,php php'silverphp'php,php php'tealphp'php,
php php php php php php php php php php php php php'whitephp'php,php php'yellowphp'
php php php php php php php php php)php;

php php php php php php php php ifphp php(inphp_arrayphp(php$colorphp,php php$colorsphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(pregphp_matchphp(php'php/php\php#php[php0php-php9aphp-fphp]php{php6php}php/iphp'php,php php$colorphp)php)php php{
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp thephp URIphp isphp valid
php php php php php php*
php php php php php php*php php@paramphp stringphp php$uri
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp staticphp functionphp isValidUriphp(php$uriphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php(php[aphp-zphp]php[aphp-zphp+php\php-php.php]php*php)php:php/iphp'php,php php$uriphp,php php$matchesphp)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$schemephp php=php strtolowerphp(php$matchesphp[php1php]php)php;

php php php php php php php php switchphp php(php$schemephp)php php{
php php php php php php php php php php php php casephp php'javascriptphp'php:
php php php php php php php php php php php php php php php php php/php/php JavaScriptphp schemephp isphp notphp allowedphp forphp securityphp reason
php php php php php php php php php php php php php php php php returnphp falsephp;

php php php php php php php php php php php php casephp php'httpphp'php:
php php php php php php php php php php php php casephp php'httpsphp'php:
php php php php php php php php php php php php casephp php'ftpphp'php:
php php php php php php php php php php php php php php php php php$componentsphp php=php php@parsephp_urlphp(php$uriphp)php;

php php php php php php php php php php php php php php php php ifphp php(php$componentsphp php=php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(php!issetphp(php$componentsphp[php'hostphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php returnphp truephp;

php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}
php php php php php}
php}
