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
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Form
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_SubFormphp php*php/
requirephp_oncephp php'Zendphp/Formphp/SubFormphp.phpphp'php;

php/php*php*
php php*php Dijitphp-enabledphp SubForm
php php*
php php*php php@usesphp php php php php php php Zendphp_Formphp_SubForm
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Form
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php SubFormphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_SubFormphp extendsphp Zendphp_Formphp_SubForm
php{
php php php php php/php*php*
php php php php php php*php Hasphp thephp dojophp viewphp helperphp pathphp beenphp registeredphp?
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_dojoViewPathRegisteredphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp|nullphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>addPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php,php php'decoratorphp'php)
php php php php php php php php php php php php php php-php>addPrefixPathphp(php'Zendphp_Dojophp_Formphp_Elementphp'php,php php'Zendphp/Dojophp/Formphp/Elementphp'php,php php'elementphp'php)
php php php php php php php php php php php php php php-php>addElementPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php,php php'decoratorphp'php)
php php php php php php php php php php php php php php-php>addDisplayGroupPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php)
php php php php php php php php php php php php php php-php>setDefaultDisplayGroupClassphp(php'Zendphp_Dojophp_Formphp_DisplayGroupphp'php)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp thephp defaultphp decorators
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp loadDefaultDecoratorsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>loadDefaultDecoratorsIsDisabledphp(php)php)php php{
php php php php php php php php php php php php returnphp;
php php php php php php php php php}

php php php php php php php php php$decoratorsphp php=php php$thisphp-php>getDecoratorsphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$decoratorsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'FormElementsphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'HtmlTagphp'php,php arrayphp(php'tagphp'php php=php>php php'dlphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'ContentPanephp'php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp view
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Interface
php php php php php php*php/
php php php php publicphp functionphp getViewphp(php)
php php php php php{
php php php php php php php php php$viewphp php=php parentphp:php:getViewphp(php)php;
php php php php php php php php ifphp php(php!php$thisphp-php>php_dojoViewPathRegisteredphp)php php{
php php php php php php php php php php php php ifphp php(falsephp php=php=php=php php$viewphp-php>getPluginLoaderphp(php'helperphp'php)php-php>getPathsphp(php'Zendphp_Dojophp_Viewphp_Helperphp'php)php)php php{
php php php php php php php php php php php php php php php php php$viewphp-php>addHelperPathphp(php'Zendphp/Dojophp/Viewphp/Helperphp'php,php php'Zendphp_Dojophp_Viewphp_Helperphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_dojoViewPathRegisteredphp php=php truephp;
php php php php php php php php php}
php php php php php php php php returnphp php$viewphp;
php php php php php}
php}
