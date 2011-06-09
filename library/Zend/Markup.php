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
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Markupphp.phpphp php2php0php2php7php7php php2php0php1php0php-php0php1php-php1php4php php1php4php:php1php7php:php1php2Zphp kokxphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Loaderphp_PluginLoader
php php*php/
requirephp_oncephp php'Zendphp/Loaderphp/PluginLoaderphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Markup
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Markup
php{
php php php php constphp CALLBACKphp php=php php'callbackphp'php;
php php php php constphp REPLACEphp php php=php php'replacephp'php;


php php php php php/php*php*
php php php php php php*php Thephp parserphp loader
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp staticphp php$php_parserLoaderphp;

php php php php php/php*php*
php php php php php php*php Thephp rendererphp loader
php php php php php php*
php php php php php php*php php@varphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php protectedphp staticphp php$php_rendererLoaderphp;


php php php php php/php*php*
php php php php php php*php Disablephp instantiationphp ofphp Zendphp_Markup
php php php php php php*php/
php php php php privatephp functionphp php_php_constructphp(php)php php{php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp parserphp loader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getParserLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php(selfphp:php:php$php_parserLoaderphp instanceofphp Zendphp_Loaderphp_PluginLoaderphp)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_parserLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp_Markupphp_Parserphp'php php=php>php php'Zendphp/Markupphp/Parserphp/php'php,
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_parserLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp rendererphp loader
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp getRendererLoaderphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php(selfphp:php:php$php_rendererLoaderphp instanceofphp Zendphp_Loaderphp_PluginLoaderphp)php)php php{
php php php php php php php php php php php php selfphp:php:php$php_rendererLoaderphp php=php newphp Zendphp_Loaderphp_PluginLoaderphp(arrayphp(
php php php php php php php php php php php php php php php php php'Zendphp_Markupphp_Rendererphp'php php=php>php php'Zendphp/Markupphp/Rendererphp/php'php,
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php returnphp selfphp:php:php$php_rendererLoaderphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp parserphp path
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp addParserPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php returnphp selfphp:php:getParserLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp rendererphp path
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$prefix
php php php php php php*php php@paramphp php stringphp php$path
php php php php php php*php php@returnphp Zendphp_Loaderphp_PluginLoader
php php php php php php*php/
php php php php publicphp staticphp functionphp addRendererPathphp(php$prefixphp,php php$pathphp)
php php php php php{
php php php php php php php php returnphp selfphp:php:getRendererLoaderphp(php)php-php>addPrefixPathphp(php$prefixphp,php php$pathphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Factoryphp pattern
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$parser
php php php php php php*php php@paramphp php stringphp php$renderer
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Markupphp_Rendererphp_RendererAbstract
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$parserphp,php php$rendererphp php=php php'Htmlphp'php,php arrayphp php$optionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$parserClassphp php php php=php selfphp:php:getParserLoaderphp(php)php-php>loadphp(php$parserphp)php;
php php php php php php php php php$rendererClassphp php=php selfphp:php:getRendererLoaderphp(php)php-php>loadphp(php$rendererphp)php;

php php php php php php php php php$parserphp php php php php php php php php php php php php=php newphp php$parserClassphp(php)php;
php php php php php php php php php$optionsphp[php'parserphp'php]php php=php php$parserphp;
php php php php php php php php php$rendererphp php php php php php php php php php php=php newphp php$rendererClassphp(php$optionsphp)php;

php php php php php php php php returnphp php$rendererphp;
php php php php php}
php}
