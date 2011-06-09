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
php php*php Zendphp_Formphp_Decoratorphp_Description
php php*
php php*php Acceptsphp thephp optionsphp:
php php*php php-php separatorphp:php separatorphp tophp usephp betweenphp labelphp andphp contentphp php(defaultsphp tophp PHPphp_EOLphp)
php php*php php-php placementphp:php whetherphp tophp appendphp orphp prependphp labelphp tophp contentphp php(defaultsphp tophp prependphp)
php php*php php-php tagphp:php ifphp setphp,php usedphp tophp wrapphp thephp labelphp inphp anphp additionalphp HTMLphp tag
php php*php php-php classphp:php ifphp setphp,php overridephp defaultphp classphp usedphp withphp HTMLphp tag
php php*php php-php escapephp:php whetherphp orphp notphp tophp escapephp descriptionphp php(truephp byphp defaultphp)
php php*
php php*php Anyphp otherphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp HTMLphp tagphp usedphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Descriptionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Descriptionphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp escapephp thephp description
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_escapephp;

php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php append
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php php'APPENDphp'php;

php php php php php/php*php*
php php php php php php*php HTMLphp tagphp withphp whichphp tophp surroundphp description
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tagphp;

php php php php php/php*php*
php php php php php php*php Setphp HTMLphp tagphp withphp whichphp tophp surroundphp description
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Description
php php php php php php*php/
php php php php publicphp functionphp setTagphp(php$tagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_tagphp php=php php(stringphp)php php$tagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp HTMLphp tagphp,php ifphp anyphp,php withphp whichphp tophp surroundphp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getTagphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_tagphp)php php{
php php php php php php php php php php php php php$tagphp php=php php$thisphp-php>getOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$tagphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$tagphp php=php php'pphp'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$thisphp-php>setTagphp(php$tagphp)php;
php php php php php php php php php php php php returnphp php$tagphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_tagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp classphp withphp whichphp tophp definephp description
php php php php php php*
php php php php php php*php Defaultsphp tophp php'hintphp'
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getClassphp(php)
php php php php php{
php php php php php php php php php$classphp php=php php$thisphp-php>getOptionphp(php'classphp'php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$classphp)php php{
php php php php php php php php php php php php php$classphp php=php php'hintphp'php;
php php php php php php php php php php php php php$thisphp-php>setOptionphp(php'classphp'php,php php$classphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$classphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp orphp notphp tophp escapephp description
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Description
php php php php php php*php/
php php php php publicphp functionphp setEscapephp(php$flagphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_escapephp php=php php(boolphp)php php$flagphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp escapephp flag
php php php php php php*
php php php php php php*php php@returnphp true
php php php php php php*php/
php php php php publicphp functionphp getEscapephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_escapephp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$escapephp php=php php$thisphp-php>getOptionphp(php'escapephp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setEscapephp(php$escapephp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'escapephp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setEscapephp(truephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_escapephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp description
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

php php php php php php php php php$descriptionphp php=php php$elementphp-php>getDescriptionphp(php)php;
php php php php php php php php php$descriptionphp php=php trimphp(php$descriptionphp)php;

php php php php php php php php ifphp php(php!emptyphp(php$descriptionphp)php php&php&php php(nullphp php!php=php=php php(php$translatorphp php=php php$elementphp-php>getTranslatorphp(php)php)php)php)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$translatorphp-php>translatephp(php$descriptionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(emptyphp(php$descriptionphp)php)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$tagphp php php php php php php php=php php$thisphp-php>getTagphp(php)php;
php php php php php php php php php$classphp php php php php php=php php$thisphp-php>getClassphp(php)php;
php php php php php php php php php$escapephp php php php php=php php$thisphp-php>getEscapephp(php)php;

php php php php php php php php php$optionsphp php php php=php php$thisphp-php>getOptionsphp(php)php;

php php php php php php php php ifphp php(php$escapephp)php php{
php php php php php php php php php php php php php$descriptionphp php=php php$viewphp-php>escapephp(php$descriptionphp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$tagphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/HtmlTagphp.phpphp'php;
php php php php php php php php php php php php php$optionsphp[php'tagphp'php]php php=php php$tagphp;
php php php php php php php php php php php php php$decoratorphp php=php newphp Zendphp_Formphp_Decoratorphp_HtmlTagphp(php$optionsphp)php;
php php php php php php php php php php php php php$descriptionphp php=php php$decoratorphp-php>renderphp(php$descriptionphp)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$descriptionphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$descriptionphp;
php php php php php php php php php}
php php php php php}
php}
