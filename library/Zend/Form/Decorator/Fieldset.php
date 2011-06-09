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
php php*php Zendphp_Formphp_Decoratorphp_Fieldset
php php*
php php*php Anyphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp fieldsetphp tagphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Fieldsetphp.phpphp php2php3php4php2php6php php2php0php1php0php-php1php1php-php2php2php php2php2php:php5php0php:php2php5Zphp bittarmanphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Fieldsetphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Attribsphp thatphp shouldphp bephp removedphp priorphp tophp rendering
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php publicphp php$stripAttribsphp php=php arrayphp(
php php php php php php php php php'actionphp'php,
php php php php php php php php php'enctypephp'php,
php php php php php php php php php'helperphp'php,
php php php php php php php php php'methodphp'php,
php php php php php php php php php'namephp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Fieldsetphp legend
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_legendphp;

php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php surroundphp content
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Getphp options
php php php php php php*
php php php php php php*php Mergesphp inphp elementphp attributesphp asphp wellphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php parentphp:php:getOptionsphp(php)php;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php$attribsphp php=php php$elementphp-php>getAttribsphp(php)php;
php php php php php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$attribsphp,php php$optionsphp)php;
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp legend
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Fieldset
php php php php php php*php/
php php php php publicphp functionphp setLegendphp(php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_legendphp php=php php(stringphp)php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp legend
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getLegendphp(php)
php php php php php{
php php php php php php php php php$legendphp php=php php$thisphp-php>php_legendphp;
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$legendphp)php php&php&php php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php)php php{
php php php php php php php php php php php php ifphp php(methodphp_existsphp(php$elementphp,php php'getLegendphp'php)php)php php{
php php php php php php php php php php php php php php php php php$legendphp php=php php$elementphp-php>getLegendphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setLegendphp(php$legendphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php ifphp php(php(nullphp php=php=php=php php$legendphp)php php&php&php php(nullphp php!php=php=php php(php$legendphp php=php php$thisphp-php>getOptionphp(php'legendphp'php)php)php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setLegendphp(php$legendphp)php;
php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'legendphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$legendphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp aphp fieldset
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

php php php php php php php php php$legendphp php php=php php$thisphp-php>getLegendphp(php)php;
php php php php php php php php php$attribsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php$namephp php php php php=php php$elementphp-php>getFullyQualifiedNamephp(php)php;
php php php php php php php php php$idphp php php php php php php=php php(stringphp)php$elementphp-php>getIdphp(php)php;

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php php&php&php php'php'php php!php=php=php php$idphp)php php{
php php php php php php php php php php php php php$attribsphp[php'idphp'php]php php=php php'fieldsetphp-php'php php.php php$idphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$legendphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$elementphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$legendphp php=php php$translatorphp-php>translatephp(php$legendphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$attribsphp[php'legendphp'php]php php=php php$legendphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(arrayphp_keysphp(php$attribsphp)php asphp php$attribphp)php php{
php php php php php php php php php php php php php$testAttribphp php=php strtolowerphp(php$attribphp)php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$testAttribphp,php php$thisphp-php>stripAttribsphp)php)php php{
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$attribphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$viewphp-php>fieldsetphp(php$namephp,php php$contentphp,php php$attribsphp)php;
php php php php php}
php}
