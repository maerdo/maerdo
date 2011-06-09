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
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php CheckBoxphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Dijitphp.phpphp'php;

php/php*php*
php php*php Dojophp CheckBoxphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php php*php/
classphp Zendphp_Dojophp_Viewphp_Helperphp_CheckBoxphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php Dijitphp beingphp used
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_dijitphp php php=php php'dijitphp.formphp.CheckBoxphp'php;

php php php php php/php*php*
php php php php php php*php Elementphp type
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_elementTypephp php=php php'checkboxphp'php;

php php php php php/php*php*
php php php php php php*php Dojophp modulephp tophp use
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_modulephp php=php php'dijitphp.formphp.CheckBoxphp'php;

php php php php php/php*php*
php php php php php php*php dijitphp.formphp.CheckBox
php php php php php php*
php php php php php php*php php@paramphp php intphp php$id
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@paramphp php arrayphp php$paramsphp php Parametersphp tophp usephp forphp dijitphp creation
php php php php php php*php php@paramphp php arrayphp php$attribsphp HTMLphp attributes
php php php php php php*php php@paramphp php arrayphp php$checkedOptionsphp Shouldphp containphp eitherphp twophp itemsphp,php orphp thephp keysphp checkedValuephp andphp uncheckedValue
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp checkBoxphp(php$idphp,php php$valuephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php,php arrayphp php$attribsphp php=php arrayphp(php)php,php arrayphp php$checkedOptionsphp php=php nullphp)
php php php php php{
php php php php php php php php php/php/php Preparephp thephp checkboxphp options
php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormCheckboxphp.phpphp'php;
php php php php php php php php php$checkedphp php=php falsephp;
php php php php php php php php ifphp php(issetphp(php$attribsphp[php'checkedphp'php]php)php php&php&php php$attribsphp[php'checkedphp'php]php)php php{
php php php php php php php php php php php php php$checkedphp php=php truephp;
php php php php php php php php php}php elseifphp php(issetphp(php$attribsphp[php'checkedphp'php]php)php)php php{
php php php php php php php php php php php php php$checkedphp php=php falsephp;
php php php php php php php php php}
php php php php php php php php php$checkboxInfophp php=php Zendphp_Viewphp_Helperphp_FormCheckboxphp:php:determineCheckboxInfophp(php$valuephp,php php$checkedphp,php php$checkedOptionsphp)php;
php php php php php php php php php$attribsphp[php'checkedphp'php]php php=php php$checkboxInfophp[php'checkedphp'php]php;
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$idphp;
php php php php php php php php php}

php php php php php php php php php$attribsphp php=php php$thisphp-php>php_prepareDijitphp(php$attribsphp,php php$paramsphp,php php'elementphp'php)php;

php php php php php php php php php/php/php stripphp optionsphp sophp theyphp donphp'tphp showphp upphp inphp markup
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'optionsphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php unsetphp(php$attribsphp[php'optionsphp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php andphp nowphp wephp createphp itphp:
php php php php php php php php php$htmlphp php=php php'php'php;
php php php php php php php php ifphp php(php!strstrphp(php$idphp,php php'php[php]php'php)php)php php{
php php php php php php php php php php php php php/php/php hiddenphp elementphp forphp uncheckedphp value
php php php php php php php php php php php php php$htmlphp php.php=php php$thisphp-php>php_renderHiddenElementphp(php$idphp,php php$checkboxInfophp[php'uncheckedValuephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php andphp finalphp element
php php php php php php php php php$htmlphp php.php=php php$thisphp-php>php_createFormElementphp(php$idphp,php php$checkboxInfophp[php'checkedValuephp'php]php,php php$paramsphp,php php$attribsphp)php;

php php php php php php php php returnphp php$htmlphp;
php php php php php}
php}
