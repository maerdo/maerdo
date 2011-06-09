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
php php*php Zendphp_Formphp_Decoratorphp_Image
php php*
php php*php Acceptsphp thephp optionsphp:
php php*php php-php separatorphp:php separatorphp tophp usephp betweenphp imagephp andphp contentphp php(defaultsphp tophp PHPphp_EOLphp)
php php*php php-php placementphp:php whetherphp tophp appendphp orphp prependphp labelphp tophp contentphp php(defaultsphp tophp appendphp)
php php*php php-php tagphp:php ifphp setphp,php usedphp tophp wrapphp thephp labelphp inphp anphp additionalphp HTMLphp tag
php php*
php php*php Anyphp otherphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp imagephp tagphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Imagephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Imagephp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Attributesphp thatphp shouldphp notphp bephp passedphp tophp helper
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_attribBlacklistphp php=php arrayphp(php'helperphp'php,php php'placementphp'php,php php'separatorphp'php,php php'tagphp'php)php;

php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php append
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php php'APPENDphp'php;

php php php php php/php*php*
php php php php php php*php HTMLphp tagphp withphp whichphp tophp surroundphp image
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tagphp;

php php php php php/php*php*
php php php php php php*php Setphp HTMLphp tagphp withphp whichphp tophp surroundphp label
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Image
php php php php php php*php/
php php php php publicphp functionphp setTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagphp php=php php(stringphp)php php$tagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp HTMLphp tagphp,php ifphp anyphp,php withphp whichphp tophp surroundphp label
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getTagphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_tagphp)php php{
php php php php php php php php php php php php php$tagphp php=php php$thisphp-php>getOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$tagphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setTagphp(php$tagphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$tagphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_tagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp attributesphp tophp passphp tophp imagephp helper
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAttribsphp(php)
php php php php php{
php php php php php php php php php$attribsphp php=php php$thisphp-php>getOptionsphp(php)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php$attribsphp[php'altphp'php]php php=php php$elementphp-php>getLabelphp(php)php;
php php php php php php php php php php php php php$attribsphp php=php arrayphp_mergephp(php$attribsphp,php php$elementphp-php>getAttribsphp(php)php)php;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_attribBlacklistphp asphp php$keyphp)php php{
php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$keyphp,php php$attribsphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$attribsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp formphp image
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

php php php php php php php php php$tagphp php php php php php php php php php php php=php php$thisphp-php>getTagphp(php)php;
php php php php php php php php php$placementphp php php php php php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$separatorphp php php php php php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$namephp php php php php php php php php php php=php php$elementphp-php>getFullyQualifiedNamephp(php)php;
php php php php php php php php php$attribsphp php php php php php php php=php php$thisphp-php>getAttribsphp(php)php;
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$elementphp-php>getIdphp(php)php;

php php php php php php php php php$imagephp php=php php$viewphp-php>formImagephp(php$namephp,php php$elementphp-php>getImageValuephp(php)php,php php$attribsphp)php;

php php php php php php php php ifphp php(nullphp php!php=php=php php$tagphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/HtmlTagphp.phpphp'php;
php php php php php php php php php php php php php$decoratorphp php=php newphp Zendphp_Formphp_Decoratorphp_HtmlTagphp(php)php;
php php php php php php php php php php php php php$decoratorphp-php>setOptionsphp(arrayphp(php'tagphp'php php=php>php php$tagphp)php)php;
php php php php php php php php php php php php php$imagephp php=php php$decoratorphp-php>renderphp(php$imagephp)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$imagephp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$imagephp;
php php php php php php php php php}
php php php php php}
php}
