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
php php*php php@versionphp php php php php$Idphp:php Sliderphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Dijitphp.phpphp'php;

php/php*php*
php php*php Abstractphp classphp forphp Dojophp Sliderphp dijits
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php php*php/
abstractphp classphp Zendphp_Dojophp_Viewphp_Helperphp_Sliderphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php Dojophp modulephp tophp use
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_modulephp php=php php'dijitphp.formphp.Sliderphp'php;

php php php php php/php*php*
php php php php php php*php Requiredphp sliderphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_requiredParamsphp php=php arrayphp(php'minimumphp'php,php php'maximumphp'php,php php'discreteValuesphp'php)php;

php php php php php/php*php*
php php php php php php*php Sliderphp typephp php-php-php verticalphp orphp horizontal
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_sliderTypephp;

php php php php php/php*php*
php php php php php php*php dijitphp.formphp.Slider
php php php php php php*
php php php php php php*php php@paramphp php intphp php$id
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@paramphp php arrayphp php$paramsphp php Parametersphp tophp usephp forphp dijitphp creation
php php php php php php*php php@paramphp php arrayphp php$attribsphp HTMLphp attributes
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp prepareSliderphp(php$idphp,php php$valuephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php,php arrayphp php$attribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_sliderTypephp php=php strtolowerphp(php$thisphp-php>php_sliderTypephp)php;

php php php php php php php php php/php/php Preparephp twophp itemsphp:php aphp hiddenphp elementphp tophp storephp thephp valuephp,php andphp thephp slider
php php php php php php php php php$hiddenphp php=php php$thisphp-php>php_renderHiddenElementphp(php$idphp,php php$valuephp)php;
php php php php php php php php php$hiddenphp php=php pregphp_replacephp(php'php/php(namephp=php"php)php(php[php^php"php]php*php)php"php/php'php,php php'idphp=php"php$php2php"php php$php1php$php2php"php'php,php php$hiddenphp)php;

php php php php php php php php foreachphp php(php$thisphp-php>php_requiredParamsphp asphp php$paramphp)php php{
php php php php php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php$paramphp,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(php'prepareSliderphp(php)php requiresphp minimallyphp thephp php"minimumphp"php,php php"maximumphp"php,php andphp php"discreteValuesphp"php parametersphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$contentphp php=php php'php'php;
php php php php php php php php php$paramsphp[php'valuephp'php]php php=php php$valuephp;

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'onChangephp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$attribsphp[php'onChangephp'php]php php=php php"dojophp.byIdphp(php'php"php php.php php$idphp php.php php"php'php)php.valuephp php=php argumentsphp[php0php]php;php"php;
php php php php php php php php php}

php php php php php php php php php$idphp php php=php strphp_replacephp(php'php]php[php'php,php php'php-php'php,php php$idphp)php;
php php php php php php php php php$idphp php php=php strphp_replacephp(arrayphp(php'php[php'php,php php'php]php'php)php,php php'php-php'php,php php$idphp)php;
php php php php php php php php php$idphp php php=php rtrimphp(php$idphp,php php'php-php'php)php;
php php php php php php php php php$idphp php.php=php php'php-sliderphp'php;

php php php php php php php php switchphp php(php$thisphp-php>php_sliderTypephp)php php{
php php php php php php php php php php php php casephp php'horizontalphp'php:
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'topDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>php_prepareDecorationphp(php'topDecorationphp'php,php php$idphp,php php$paramsphp[php'topDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'topDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'bottomDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>php_prepareDecorationphp(php'bottomDecorationphp'php,php php$idphp,php php$paramsphp[php'bottomDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'bottomDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'leftDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'leftDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'rightDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'rightDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php casephp php'verticalphp'php:
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'leftDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>php_prepareDecorationphp(php'leftDecorationphp'php,php php$idphp,php php$paramsphp[php'leftDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'leftDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'rightDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>php_prepareDecorationphp(php'rightDecorationphp'php,php php$idphp,php php$paramsphp[php'rightDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'rightDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'topDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'topDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'bottomDecorationphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php unsetphp(php$paramsphp[php'bottomDecorationphp'php]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Dojophp_Viewphp_Exceptionphp(php'Invalidphp sliderphp typephp;php sliderphp mustphp bephp horizontalphp orphp verticalphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$hiddenphp php.php php$thisphp-php>php_createLayoutContainerphp(php$idphp,php php$contentphp,php php$paramsphp,php php$attribsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp sliderphp decoration
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$position
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php arrayphp php$decInfo
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_prepareDecorationphp(php$positionphp,php php$idphp,php php$decInfophp)
php php php php php{
php php php php php php php php ifphp php(php!inphp_arrayphp(php$positionphp,php arrayphp(php'topDecorationphp'php,php php'bottomDecorationphp'php,php php'leftDecorationphp'php,php php'rightDecorationphp'php)php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php!isphp_arrayphp(php$decInfophp)
php php php php php php php php php php php php php|php|php php!arrayphp_keyphp_existsphp(php'labelsphp'php,php php$decInfophp)
php php php php php php php php php php php php php|php|php php!isphp_arrayphp(php$decInfophp[php'labelsphp'php]php)
php php php php php php php php php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php$idphp php.php=php php'php-php'php php.php php$positionphp;

php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'dijitphp'php,php php$decInfophp)php)php php{
php php php php php php php php php php php php php$dijitphp php=php php'dijitphp.formphp.php'php php.php ucfirstphp(php$thisphp-php>php_sliderTypephp)php php.php php'Rulephp'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$dijitphp php=php php$decInfophp[php'dijitphp'php]php;
php php php php php php php php php php php php ifphp php(php'dijitphp.formphp.php'php php!php=php substrphp(php$dijitphp,php php0php,php php1php0php)php)php php{
php php php php php php php php php php php php php php php php php$dijitphp php=php php'dijitphp.formphp.php'php php.php php$dijitphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$paramsphp php php=php arrayphp(php)php;
php php php php php php php php php$attribsphp php=php arrayphp(php)php;
php php php php php php php php php$labelsphp php php=php php$decInfophp[php'labelsphp'php]php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'paramsphp'php,php php$decInfophp)php)php php{
php php php php php php php php php php php php php$paramsphp php=php php$decInfophp[php'paramsphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'attribsphp'php,php php$decInfophp)php)php php{
php php php php php php php php php php php php php$attribsphp php=php php$decInfophp[php'attribsphp'php]php;
php php php php php php php php php}

php php php php php php php php php$containerParamsphp php=php nullphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'containerphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$containerParamsphp php=php php$paramsphp[php'containerphp'php]php;
php php php php php php php php php php php php unsetphp(php$paramsphp[php'containerphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'labelsphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$labelsParamsphp php=php php$paramsphp[php'labelsphp'php]php;
php php php php php php php php php php php php unsetphp(php$paramsphp[php'labelsphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$labelsParamsphp php=php php$paramsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$containerParamsphp)php php{
php php php php php php php php php php php php php$containerParamsphp php=php php$paramsphp;
php php php php php php php php php}

php php php php php php php php php$containerAttribsphp php=php nullphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'containerphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$containerAttribsphp php=php php$attribsphp[php'containerphp'php]php;
php php php php php php php php php php php php unsetphp(php$attribsphp[php'containerphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'labelsphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$labelsAttribsphp php=php php$attribsphp[php'labelsphp'php]php;
php php php php php php php php php php php php unsetphp(php$attribsphp[php'labelsphp'php]php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$labelsAttribsphp php=php php$attribsphp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php=php=php=php php$containerAttribsphp)php php{
php php php php php php php php php php php php php$containerAttribsphp php=php php$attribsphp;
php php php php php php php php php}

php php php php php php php php php$containerParamsphp[php'containerphp'php]php php=php php$positionphp;
php php php php php php php php php$labelsParamsphp[php'containerphp'php]php php php php php=php php$positionphp;

php php php php php php php php php$labelListphp php=php php$thisphp-php>php_prepareLabelsListphp(php$idphp,php php$labelsParamsphp,php php$labelsAttribsphp,php php$labelsphp)php;

php php php php php php php php php$dijitphp php=php php'dijitphp.formphp.php'php php.php ucfirstphp(php$thisphp-php>php_sliderTypephp)php php.php php'Rulephp'php;
php php php php php php php php php$containerAttribsphp[php'idphp'php]php php=php php$idphp;
php php php php php php php php php$containerAttribsphp php=php php$thisphp-php>php_prepareDijitphp(php$containerAttribsphp,php php$containerParamsphp,php php'layoutphp'php,php php$dijitphp)php;
php php php php php php php php php$containerHtmlphp php=php php'php<divphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$containerAttribsphp)php php.php php"php><php/divphp>php\nphp"php;

php php php php php php php php switchphp php(php$positionphp)php php{
php php php php php php php php php php php php casephp php'topDecorationphp'php:
php php php php php php php php php php php php casephp php'leftDecorationphp'php:
php php php php php php php php php php php php php php php php returnphp php$labelListphp php.php php$containerHtmlphp;
php php php php php php php php php php php php casephp php'bottomDecorationphp'php:
php php php php php php php php php php php php casephp php'rightDecorationphp'php:
php php php php php php php php php php php php php php php php returnphp php$containerHtmlphp php.php php$labelListphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Preparephp sliderphp labelphp list
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@paramphp php arrayphp php$labels
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_prepareLabelsListphp(php$idphp,php arrayphp php$paramsphp,php arrayphp php$attribsphp,php arrayphp php$labelsphp)
php php php php php{
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$idphp php.php php'php-labelsphp'php;
php php php php php php php php php$dijitphp php=php php'dijitphp.formphp.php'php php.php ucfirstphp(php$thisphp-php>php_sliderTypephp)php php.php php'RuleLabelsphp'php;
php php php php php php php php php$attribsphp php=php php$thisphp-php>php_prepareDijitphp(php$attribsphp,php php$paramsphp,php php'layoutphp'php,php php$dijitphp)php;

php php php php php php php php returnphp php$thisphp-php>viewphp-php>htmlListphp(php$labelsphp,php truephp,php php$attribsphp)php;
php php php php php}
php}
