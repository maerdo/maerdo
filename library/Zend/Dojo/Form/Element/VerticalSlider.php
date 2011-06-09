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

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_Sliderphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/Sliderphp.phpphp'php;

php/php*php*
php php*php VerticalSliderphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_Slider
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php VerticalSliderphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_VerticalSliderphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_Slider
php{
php php php php php/php*php*
php php php php php php*php Usephp VerticalSliderphp dijitphp viewphp helper
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'VerticalSliderphp'php;

php php php php php/php*php*
php php php php php php*php Getphp leftphp decorationphp data
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getLeftDecorationphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasDijitParamphp(php'leftDecorationphp'php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'leftDecorationphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp dijitphp tophp usephp withphp leftphp decoration
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$dijit
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setLeftDecorationDijitphp(php$dijitphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getLeftDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'dijitphp'php]php php=php php(stringphp)php php$dijitphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'leftDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp containerphp tophp usephp withphp leftphp decoration
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$container
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setLeftDecorationContainerphp(php$containerphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getLeftDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'containerphp'php]php php=php php(stringphp)php php$containerphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'leftDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp labelsphp tophp usephp withphp leftphp decoration
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$labels
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setLeftDecorationLabelsphp(arrayphp php$labelsphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getLeftDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'labelsphp'php]php php=php arrayphp_valuesphp(php$labelsphp)php;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'leftDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp paramsphp tophp usephp withphp leftphp decoration
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setLeftDecorationParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getLeftDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'paramsphp'php]php php=php php$paramsphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'leftDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp attribsphp tophp usephp withphp leftphp decoration
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setLeftDecorationAttribsphp(arrayphp php$attribsphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getLeftDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'attribsphp'php]php php=php php$attribsphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'leftDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp rightphp decorationphp data
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getRightDecorationphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasDijitParamphp(php'rightDecorationphp'php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'rightDecorationphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp arrayphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp dijitphp tophp usephp withphp rightphp decoration
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$dijit
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setRightDecorationDijitphp(php$dijitphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getRightDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'dijitphp'php]php php=php php(stringphp)php php$dijitphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'rightDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp containerphp tophp usephp withphp rightphp decoration
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$container
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setRightDecorationContainerphp(php$containerphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getRightDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'containerphp'php]php php=php php(stringphp)php php$containerphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'rightDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp labelsphp tophp usephp withphp rightphp decoration
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$labels
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setRightDecorationLabelsphp(arrayphp php$labelsphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getRightDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'labelsphp'php]php php=php arrayphp_valuesphp(php$labelsphp)php;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'rightDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp paramsphp tophp usephp withphp rightphp decoration
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setRightDecorationParamsphp(arrayphp php$paramsphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getRightDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'paramsphp'php]php php=php php$paramsphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'rightDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp attribsphp tophp usephp withphp rightphp decoration
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_HorizontalSlider
php php php php php php*php/
php php php php publicphp functionphp setRightDecorationAttribsphp(arrayphp php$attribsphp)
php php php php php{
php php php php php php php php php$decorationphp php=php php$thisphp-php>getRightDecorationphp(php)php;
php php php php php php php php php$decorationphp[php'attribsphp'php]php php=php php$attribsphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'rightDecorationphp'php,php php$decorationphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}
php}
