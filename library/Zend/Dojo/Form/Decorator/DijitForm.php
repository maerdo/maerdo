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

php/php*php*php Zendphp_Dojophp_Formphp_Decoratorphp_DijitContainerphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Decoratorphp/DijitContainerphp.phpphp'php;

php/php*php*
php php*php Zendphp_Dojophp_Formphp_Decoratorphp_DijitForm
php php*
php php*php Renderphp aphp dojophp formphp dijitphp viaphp aphp viewphp helper
php php*
php php*php Acceptsphp thephp followingphp optionsphp:
php php*php php-php helperphp:php php php php thephp namephp ofphp thephp viewphp helperphp tophp use
php php*
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php DijitFormphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Decoratorphp_DijitFormphp extendsphp Zendphp_Dojophp_Formphp_Decoratorphp_DijitContainer
php{
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
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php$viewphp php php php php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$dijitParamsphp php=php php$thisphp-php>getDijitParamsphp(php)php;
php php php php php php php php php$attribsphp php php php php php=php arrayphp_mergephp(php$thisphp-php>getAttribsphp(php)php,php php$thisphp-php>getOptionsphp(php)php)php;

php php php php php php php php returnphp php$viewphp-php>formphp(php$elementphp-php>getNamephp(php)php,php php$attribsphp,php php$contentphp)php;
php php php php php}
php}
