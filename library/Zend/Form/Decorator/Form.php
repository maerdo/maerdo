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
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*php Zendphp_Formphp_Decoratorphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_Form
php php*
php php*php Renderphp aphp Zendphp_Formphp objectphp.
php php*
php php*php Acceptsphp followingphp optionsphp:
php php*php php-php separatorphp:php Separatorphp tophp usephp betweenphp elements
php php*php php-php helperphp:php whichphp viewphp helperphp tophp usephp whenphp renderingphp formphp.php Shouldphp acceptphp three
php php*php php php argumentsphp,php stringphp contentphp,php aphp namephp,php andphp anphp arrayphp ofphp attributesphp.
php php*
php php*php Anyphp otherphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp formphp tagphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Formphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Formphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Defaultphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_helperphp php=php php'formphp'php;

php php php php php/php*php*
php php php php php php*php Setphp viewphp helperphp forphp renderingphp form
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$helper
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Form
php php php php php php*php/
php php php php publicphp functionphp setHelperphp(php$helperphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_helperphp php=php php(stringphp)php php$helperphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp viewphp helperphp forphp renderingphp form
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHelperphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$helperphp php=php php$thisphp-php>getOptionphp(php'helperphp'php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setHelperphp(php$helperphp)php;
php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'helperphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_helperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp decoratorphp options
php php php php php php*
php php php php php php*php Assuresphp thatphp formphp actionphp andphp methodphp arephp setphp,php andphp setsphp appropriate
php php php php php php*php encodingphp typephp ifphp currentphp methodphp isphp POSTphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php ifphp php(php$elementphp instanceofphp Zendphp_Formphp)php php{
php php php php php php php php php php php php php php php php php$elementphp-php>getActionphp(php)php;
php php php php php php php php php php php php php php php php php$methodphp php=php php$elementphp-php>getMethodphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$methodphp php=php=php Zendphp_Formphp:php:METHODphp_POSTphp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setOptionphp(php'enctypephp'php,php php'applicationphp/xphp-wwwphp-formphp-urlencodedphp'php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php foreachphp php(php$elementphp-php>getAttribsphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elseifphp php(php$elementphp instanceofphp Zendphp_Formphp_DisplayGroupphp)php php{
php php php php php php php php php php php php php php php php foreachphp php(php$elementphp-php>getAttribsphp(php)php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setOptionphp(php$keyphp,php php$valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php'methodphp'php]php)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_optionsphp[php'methodphp'php]php php=php strtolowerphp(php$thisphp-php>php_optionsphp[php'methodphp'php]php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp form
php php php php php php*
php php php php php php*php Replacesphp php$contentphp entirelyphp fromphp currentlyphp setphp elementphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$formphp php php php php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php$viewphp php php php php=php php$formphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$helperphp php php php php php php php php=php php$thisphp-php>getHelperphp(php)php;
php php php php php php php php php$attribsphp php php php php php php php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php$namephp php php php php php php php php php php=php php$formphp-php>getFullyQualifiedNamephp(php)php;
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$formphp-php>getIdphp(php)php;
php php php php php php php php returnphp php$viewphp-php>php$helperphp(php$namephp,php php$attribsphp,php php$contentphp)php;
php php php php php}
php}
