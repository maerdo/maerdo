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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FormErrorsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php Abstractphp classphp forphp extension
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;


php/php*php*
php php*php Helperphp tophp renderphp errorsphp forphp aphp formphp element
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_FormErrorsphp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Formphp_Element
php php php php php php*php/
php php php php protectedphp php$php_elementphp;

php php php php php/php*php*php#php@php+
php php php php php php*php php@varphp stringphp Elementphp blockphp startphp/endphp tagsphp andphp separator
php php php php php php*php/
php php php php protectedphp php$php_htmlElementEndphp php php php php php php php=php php'<php/liphp><php/ulphp>php'php;
php php php php protectedphp php$php_htmlElementStartphp php php php php php=php php'php<ulphp%sphp>php<liphp>php'php;
php php php php protectedphp php$php_htmlElementSeparatorphp php=php php'<php/liphp>php<liphp>php'php;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Renderphp formphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp|arrayphp php$errorsphp Errorphp(sphp)php tophp render
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp formErrorsphp(php$errorsphp,php arrayphp php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php php$escapephp php=php truephp;
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'escapephp'php]php)php)php php{
php php php php php php php php php php php php php$escapephp php=php php(boolphp)php php$optionsphp[php'escapephp'php]php;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'escapephp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$optionsphp[php'classphp'php]php)php)php php{
php php php php php php php php php php php php php$optionsphp[php'classphp'php]php php=php php'errorsphp'php;
php php php php php php php php php}

php php php php php php php php php$startphp php=php php$thisphp-php>getElementStartphp(php)php;
php php php php php php php php ifphp php(strstrphp(php$startphp,php php'php%sphp'php)php)php php{
php php php php php php php php php php php php php$attribsphp php=php php$thisphp-php>php_htmlAttribsphp(php$optionsphp)php;
php php php php php php php php php php php php php$startphp php php php=php sprintfphp(php$startphp,php php$attribsphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$escapephp)php php{
php php php php php php php php php php php php foreachphp php(php$errorsphp asphp php$keyphp php=php>php php$errorphp)php php{
php php php php php php php php php php php php php php php php php$errorsphp[php$keyphp]php php=php php$thisphp-php>viewphp-php>escapephp(php$errorphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$htmlphp php php=php php$start
php php php php php php php php php php php php php php php php.php implodephp(php$thisphp-php>getElementSeparatorphp(php)php,php php(arrayphp)php php$errorsphp)
php php php php php php php php php php php php php php php php.php php$thisphp-php>getElementEndphp(php)php;

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp endphp stringphp forphp displayingphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setElementEndphp(php$stringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_htmlElementEndphp php=php php(stringphp)php php$stringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp endphp stringphp forphp displayingphp errors
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getElementEndphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_htmlElementEndphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp separatorphp stringphp forphp displayingphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setElementSeparatorphp(php$stringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_htmlElementSeparatorphp php=php php(stringphp)php php$stringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp separatorphp stringphp forphp displayingphp errors
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getElementSeparatorphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_htmlElementSeparatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp startphp stringphp forphp displayingphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$string
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setElementStartphp(php$stringphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_htmlElementStartphp php=php php(stringphp)php php$stringphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp startphp stringphp forphp displayingphp errors
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getElementStartphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_htmlElementStartphp;
php php php php php}

php}
