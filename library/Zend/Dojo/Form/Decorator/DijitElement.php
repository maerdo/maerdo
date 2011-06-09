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
php php*php php@packagephp php php php Zendphp_Form
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Decoratorphp_ViewHelperphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/ViewHelperphp.phpphp'php;

php/php*php*
php php*php Zendphp_Dojophp_Formphp_Decoratorphp_DijitElement
php php*
php php*php Renderphp aphp dojophp dijitphp elementphp viaphp aphp viewphp helper
php php*
php php*php Acceptsphp thephp followingphp optionsphp:
php php*php php-php separatorphp:php stringphp withphp whichphp tophp separatephp passedphp inphp contentphp andphp generatedphp content
php php*php php-php placementphp:php whetherphp tophp appendphp orphp prependphp thephp generatedphp contentphp tophp thephp passedphp inphp content
php php*php php-php helperphp:php php php php thephp namephp ofphp thephp viewphp helperphp tophp use
php php*
php php*php Assumesphp thephp viewphp helperphp acceptsphp threephp parametersphp,php thephp namephp,php valuephp,php and
php php*php optionalphp attributesphp;php thesephp willphp bephp providedphp byphp thephp elementphp.
php php*
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DijitElementphp.phpphp php2php0php6php2php1php php2php0php1php0php-php0php1php-php2php5php php2php0php:php2php5php:php2php3Zphp matthewphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Decoratorphp_DijitElementphp extendsphp Zendphp_Formphp_Decoratorphp_ViewHelper
php{
php php php php php/php*php*
php php php php php php*php Elementphp attributes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attribsphp;

php php php php php/php*php*
php php php php php php*php Elementphp typesphp thatphp representphp buttons
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_buttonTypesphp php=php arrayphp(
php php php php php php php php php'Zendphp_Dojophp_Formphp_Elementphp_Buttonphp'php,
php php php php php php php php php'Zendphp_Formphp_Elementphp_Buttonphp'php,
php php php php php php php php php'Zendphp_Formphp_Elementphp_Resetphp'php,
php php php php php php php php php'Zendphp_Formphp_Elementphp_Submitphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Dijitphp optionphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dijitParamsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Getphp elementphp attributes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getElementAttribsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_attribsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_attribsphp php=php parentphp:php:getElementAttribsphp(php)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'dijitParamsphp'php,php php$thisphp-php>php_attribsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setDijitParamsphp(php$thisphp-php>php_attribsphp[php'dijitParamsphp'php]php)php;
php php php php php php php php php php php php php php php php unsetphp(php$thisphp-php>php_attribsphp[php'dijitParamsphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_attribsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp aphp singlephp dijitphp optionphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Decoratorphp_DijitContainer
php php php php php php*php/
php php php php publicphp functionphp setDijitParamphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dijitParamsphp[php(stringphp)php php$keyphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp dijitphp optionphp parameters
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Decoratorphp_DijitContainer
php php php php php php*php/
php php php php publicphp functionphp setDijitParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_dijitParamsphp php=php arrayphp_mergephp(php$thisphp-php>php_dijitParamsphp,php php$paramsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp aphp singlephp dijitphp optionphp parameter
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixedphp|null
php php php php php php*php/
php php php php publicphp functionphp getDijitParamphp(php$keyphp)
php php php php php{
php php php php php php php php php$thisphp-php>getElementAttribsphp(php)php;
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$thisphp-php>php_dijitParamsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dijitParamsphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp dijitphp optionphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDijitParamsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getElementAttribsphp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_dijitParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp anphp elementphp usingphp aphp viewphp helper
php php php php php php*
php php php php php php*php Determinephp viewphp helperphp fromphp php'helperphp'php optionphp,php orphp,php ifphp nonephp setphp,php from
php php php php php php*php thephp elementphp typephp.php Thenphp callphp as
php php php php php php*php helperphp(php$elementphp-php>getNamephp(php)php,php php$elementphp-php>getValuephp(php)php,php php$elementphp-php>getAttribsphp(php)php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Formphp_Decoratorphp_Exceptionphp ifphp elementphp orphp viewphp arephp notphp registered
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php$viewphp php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Decoratorphp_Exceptionphp(php'DijitElementphp decoratorphp cannotphp renderphp withoutphp aphp registeredphp viewphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php php$optionsphp php=php nullphp;
php php php php php php php php php$helperphp php php php php=php php$thisphp-php>getHelperphp(php)php;
php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$valuephp php php php php php=php php$thisphp-php>getValuephp(php$elementphp)php;
php php php php php php php php php$attribsphp php php php=php php$thisphp-php>getElementAttribsphp(php)php;
php php php php php php php php php$namephp php php php php php php=php php$elementphp-php>getFullyQualifiedNamephp(php)php;

php php php php php php php php php$dijitParamsphp php=php php$thisphp-php>getDijitParamsphp(php)php;
php php php php php php php php php$dijitParamsphp[php'requiredphp'php]php php=php php$elementphp-php>isRequiredphp(php)php;

php php php php php php php php php$idphp php=php php$elementphp-php>getIdphp(php)php;
php php php php php php php php ifphp php(php$viewphp-php>dojophp(php)php-php>hasDijitphp(php$idphp)php)php php{
php php php php php php php php php php php php triggerphp_errorphp(sprintfphp(php'Duplicatephp dijitphp IDphp detectedphp forphp idphp php"php%sphp;php temporarilyphp generatingphp uniqidphp"php'php,php php$idphp)php,php Ephp_USERphp_NOTICEphp)php;
php php php php php php php php php php php php php$basephp php=php php$idphp;
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php$idphp php=php php$basephp php.php php'php-php'php php.php uniqidphp(php)php;
php php php php php php php php php php php php php}php whilephp php(php$viewphp-php>dojophp(php)php-php>hasDijitphp(php$idphp)php)php;
php php php php php php php php php}
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php php php php$optionsphp php=php php$attribsphp[php'optionsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$elementContentphp php=php php$viewphp-php>php$helperphp(php$namephp,php php$valuephp,php php$dijitParamsphp,php php$attribsphp,php php$optionsphp)php;
php php php php php php php php switchphp php(php$thisphp-php>getPlacementphp(php)php)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$elementContentphp;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$elementContentphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$elementContentphp;
php php php php php php php php php}
php php php php php}
php}
