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

php/php*php*php Zendphp_Formphp_Decoratorphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Dojophp_Formphp_Decoratorphp_DijitContainer
php php*
php php*php Renderphp aphp dojophp dijitphp layoutphp containerphp viaphp aphp viewphp helper
php php*
php php*php Acceptsphp thephp followingphp optionsphp:
php php*php php-php helperphp:php php php php thephp namephp ofphp thephp viewphp helperphp tophp use
php php*
php php*php Assumesphp thephp viewphp helperphp acceptsphp fourphp parametersphp,php thephp idphp,php contentphp,php dijit
php php*php parametersphp,php andphp php(Xphp)HTMLphp attributesphp;php thesephp willphp bephp providedphp byphp thephp elementphp.
php php*
php php*php php@usesphp php php php php php php Zendphp_Formphp_Decoratorphp_Abstract
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DijitContainerphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
abstractphp classphp Zendphp_Dojophp_Formphp_Decoratorphp_DijitContainerphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_helperphp;

php php php php php/php*php*
php php php php php php*php Elementphp attributes
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attribsphp;

php php php php php/php*php*
php php php php php php*php Dijitphp optionphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dijitParamsphp;

php php php php php/php*php*
php php php php php php*php Containerphp title
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_titlephp;

php php php php php/php*php*
php php php php php php*php Getphp viewphp helperphp forphp renderingphp container
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHelperphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_helperphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Decoratorphp_Exceptionphp(php'Nophp viewphp helperphp specifiedphp fophp DijitContainerphp decoratorphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_helperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp elementphp attributes
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttribsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_attribsphp)php php{
php php php php php php php php php php php php php$attribsphp php=php php$thisphp-php>getElementphp(php)php-php>getAttribsphp(php)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'dijitParamsphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php'dijitParamsphp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_attribsphp php=php php$attribsphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_attribsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp dijitphp optionphp parameters
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getDijitParamsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_dijitParamsphp)php php{
php php php php php php php php php php php php php$attribsphp php=php php$thisphp-php>getElementphp(php)php-php>getAttribsphp(php)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'dijitParamsphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dijitParamsphp php=php php$attribsphp[php'dijitParamsphp'php]php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dijitParamsphp php=php arrayphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'dijitParamsphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_dijitParamsphp php=php arrayphp_mergephp(php$thisphp-php>php_dijitParamsphp,php php$optionsphp[php'dijitParamsphp'php]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'dijitParamsphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Ensurephp wephp havephp aphp titlephp param
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'titlephp'php,php php$thisphp-php>php_dijitParamsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_dijitParamsphp[php'titlephp'php]php php=php php$thisphp-php>getTitlephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_dijitParamsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp title
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTitlephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_titlephp)php php{
php php php php php php php php php php php php php$titlephp php=php nullphp;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$elementphp,php php'getLegendphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$titlephp php=php php$elementphp-php>getLegendphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$titlephp)php php&php&php php(nullphp php!php=php=php php(php$titlephp php=php php$thisphp-php>getOptionphp(php'legendphp'php)php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'legendphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php ifphp php(emptyphp(php$titlephp)php php&php&php php(nullphp php!php=php=php php(php$titlephp php=php php$thisphp-php>getOptionphp(php'titlephp'php)php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'titlephp'php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$titlephp)php)php php{
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$elementphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$titlephp php=php php$translatorphp-php>translatephp(php$titlephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$thisphp-php>php_titlephp php=php php$titlephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php(emptyphp(php$thisphp-php>php_titlephp)php php?php php'php'php php:php php$thisphp-php>php_titlephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp dijitphp layoutphp container
php php php php php php*
php php php php php php*php Replacesphp php$contentphp entirelyphp fromphp currentlyphp setphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php$viewphp php php php php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$dijitParamsphp php=php php$thisphp-php>getDijitParamsphp(php)php;
php php php php php php php php php$attribsphp php php php php php=php arrayphp_mergephp(php$thisphp-php>getAttribsphp(php)php,php php$thisphp-php>getOptionsphp(php)php)php;

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'legendphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'titlephp'php,php php$dijitParamsphp)php php|php|php emptyphp(php$dijitParamsphp[php'titlephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$dijitParamsphp[php'titlephp'php]php php=php php$attribsphp[php'legendphp'php]php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$attribsphp[php'legendphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$helperphp php php php php php php=php php$thisphp-php>getHelperphp(php)php;
php php php php php php php php php$idphp php php php php php php php php php php=php php$elementphp-php>getIdphp(php)php php.php php'php-php'php php.php php$helperphp;

php php php php php php php php ifphp php(php$viewphp-php>dojophp(php)php-php>hasDijitphp(php$idphp)php)php php{
php php php php php php php php php php php php triggerphp_errorphp(sprintfphp(php'Duplicatephp dijitphp IDphp detectedphp forphp idphp php"php%sphp;php temporarilyphp generatingphp uniqidphp"php'php,php php$idphp)php,php Ephp_USERphp_WARNINGphp)php;
php php php php php php php php php php php php php$basephp php=php php$idphp;
php php php php php php php php php php php php dophp php{
php php php php php php php php php php php php php php php php php$idphp php=php php$basephp php.php php'php-php'php php.php uniqidphp(php)php;
php php php php php php php php php php php php php}php whilephp php(php$viewphp-php>dojophp(php)php-php>hasDijitphp(php$idphp)php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$viewphp-php>php$helperphp(php$idphp,php php$contentphp,php php$dijitParamsphp,php php$attribsphp)php;
php php php php php}
php}
