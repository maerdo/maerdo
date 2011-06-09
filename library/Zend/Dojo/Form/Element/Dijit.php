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
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Elementphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Elementphp.phpphp'php;

php/php*php*
php php*php Basephp elementphp forphp dijitphp elements
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Dijitphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
abstractphp classphp Zendphp_Dojophp_Formphp_Elementphp_Dijitphp extendsphp Zendphp_Formphp_Element
php{
php php php php php/php*php*
php php php php php php*php Dijitphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$dijitParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Viewphp helperphp tophp use
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@todophp Shouldphp wephp setphp dojophp viewphp helperphp pathsphp herephp?
php php php php php php*php php@paramphp php mixedphp php$spec
php php php php php php*php php@paramphp php mixedphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$specphp,php php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$thisphp-php>addPrefixPathphp(php'Zendphp_Dojophp_Formphp_Decoratorphp'php,php php'Zendphp/Dojophp/Formphp/Decoratorphp'php,php php'decoratorphp'php)php;
php php php php php php php php parentphp:php:php_php_constructphp(php$specphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp dijitphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php php php php php php*php/
php php php php publicphp functionphp setDijitParamphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php php$thisphp-php>dijitParamsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp multiplephp dijitphp paramsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php php php php php php*php/
php php php php publicphp functionphp setDijitParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$thisphp-php>dijitParamsphp php=php arrayphp_mergephp(php$thisphp-php>dijitParamsphp,php php$paramsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Doesphp thephp givenphp dijitphp parameterphp existphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasDijitParamphp(php$keyphp)
php php php php php{
php php php php php php php php returnphp arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>dijitParamsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp aphp singlephp dijitphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getDijitParamphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(php$thisphp-php>hasDijitParamphp(php$keyphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>dijitParamsphp[php$keyphp]php;
php php php php php php php php php}
php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp allphp dijitphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDijitParamsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>dijitParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp singlephp dijitphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php php php php php php*php/
php php php php publicphp functionphp removeDijitParamphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>dijitParamsphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>dijitParamsphp[php$keyphp]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp dijitphp parameters
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php php php php php php*php/
php php php php publicphp functionphp clearDijitParamsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>dijitParamsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp defaultphp decorators
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
php php php php php php php php php php php php php$thisphp-php>addDecoratorphp(php'DijitElementphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Errorsphp'php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Descriptionphp'php,php arrayphp(php'tagphp'php php=php>php php'pphp'php,php php'classphp'php php=php>php php'descriptionphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'HtmlTagphp'php,php arrayphp(php'tagphp'php php=php>php php'ddphp'php)php)
php php php php php php php php php php php php php php php php php php-php>addDecoratorphp(php'Labelphp'php,php arrayphp(php'tagphp'php php=php>php php'dtphp'php)php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp thephp viewphp object
php php php php php php*
php php php php php php*php Ensuresphp thatphp thephp viewphp objectphp hasphp thephp dojophp viewphp helperphp pathphp setphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php php php php php php*php/
php php php php publicphp functionphp setViewphp(Zendphp_Viewphp_Interfacephp php$viewphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$viewphp)php php{
php php php php php php php php php php php php ifphp php(falsephp php=php=php=php php$viewphp-php>getPluginLoaderphp(php'helperphp'php)php-php>getPathsphp(php'Zendphp_Dojophp_Viewphp_Helperphp'php)php)php php{
php php php php php php php php php php php php php php php php php$viewphp-php>addHelperPathphp(php'Zendphp/Dojophp/Viewphp/Helperphp'php,php php'Zendphp_Dojophp_Viewphp_Helperphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp parentphp:php:setViewphp(php$viewphp)php;
php php php php php}
php}
