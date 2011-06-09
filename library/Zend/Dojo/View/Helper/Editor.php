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
php php*php php@versionphp php php php php$Idphp:php Editorphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Dijitphp.phpphp'php;

php/php*php*php Zendphp_Jsonphp php*php/
requirephp_oncephp php'Zendphp/Jsonphp.phpphp'php;

php/php*php*
php php*php Dojophp Editorphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_Textarea
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dojophp_Viewphp_Helperphp_Editorphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php php@paramphp stringphp Dijitphp type
php php php php php php*php/
php php php php protectedphp php$php_dijitphp php=php php'dijitphp.Editorphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp stringphp Dijitphp modulephp tophp load
php php php php php php*php/
php php php php protectedphp php$php_modulephp php=php php'dijitphp.Editorphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Mapsphp nonphp-corephp pluginphp tophp modulephp basename
php php php php php php*php/
php php php php protectedphp php$php_pluginsModulesphp php=php arrayphp(
php php php php php php php php php'createLinkphp'php php=php>php php'LinkDialogphp'php,
php php php php php php php php php'insertImagephp'php php=php>php php'LinkDialogphp'php,
php php php php php php php php php'fontNamephp'php php=php>php php'FontChoicephp'php,
php php php php php php php php php'fontSizephp'php php=php>php php'FontChoicephp'php,
php php php php php php php php php'formatBlockphp'php php=php>php php'FontChoicephp'php,
php php php php php php php php php'foreColorphp'php php=php>php php'TextColorphp'php,
php php php php php php php php php'hiliteColorphp'php php=php>php php'TextColorphp'
php php php php php)php;

php php php php php/php*php*
php php php php php php*php JSONphp-encodedphp parameters
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_jsonParamsphp php=php arrayphp(php'captureEventsphp'php,php php'eventsphp'php,php php'pluginsphp'php)php;

php php php php php/php*php*
php php php php php php*php dijitphp.Editor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php arrayphp php$params
php php php php php php*php php@paramphp php arrayphp php$attribs
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp editorphp(php$idphp,php php$valuephp php=php nullphp,php php$paramsphp php=php arrayphp(php)php,php php$attribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'pluginsphp'php]php)php)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_getRequiredModulesphp(php$paramsphp[php'pluginsphp'php]php)php asphp php$modulephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>dojophp-php>requireModulephp(php$modulephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php Previousphp versionsphp allowedphp specifyingphp php"degradephp"php tophp allowphp usingphp a
php php php php php php php php php/php/php textareaphp insteadphp ofphp aphp divphp php-php-php butphp thisphp isphp insecurephp.php Removingphp the
php php php php php php php php php/php/php parameterphp ifphp setphp tophp preventphp itsphp injectionphp inphp thephp dijitphp.
php php php php php php php php ifphp php(issetphp(php$paramsphp[php'degradephp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$paramsphp[php'degradephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php$hiddenNamephp php=php php$idphp;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php'idphp'php,php php$attribsphp)php)php php{
php php php php php php php php php php php php php$hiddenIdphp php=php php$attribsphp[php'idphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$hiddenIdphp php=php php$hiddenNamephp;
php php php php php php php php php}
php php php php php php php php php$hiddenIdphp php=php php$thisphp-php>php_normalizeIdphp(php$hiddenIdphp)php;

php php php php php php php php php$textareaNamephp php=php php$thisphp-php>php_normalizeEditorNamephp(php$hiddenNamephp)php;
php php php php php php php php php$textareaIdphp php php php=php php$hiddenIdphp php.php php'php-Editorphp'php;

php php php php php php php php php$hiddenAttribsphp php=php arrayphp(
php php php php php php php php php php php php php'idphp'php php php php php=php>php php$hiddenIdphp,
php php php php php php php php php php php php php'namephp'php php php=php>php php$hiddenNamephp,
php php php php php php php php php php php php php'valuephp'php php=php>php php$valuephp,
php php php php php php php php php php php php php'typephp'php php php=php>php php'hiddenphp'php,
php php php php php php php php php)php;
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$textareaIdphp;

php php php php php php php php php$thisphp-php>php_createGetParentFormFunctionphp(php)php;
php php php php php php php php php$thisphp-php>php_createEditorOnSubmitphp(php$hiddenIdphp,php php$textareaIdphp)php;

php php php php php php php php php$attribsphp php=php php$thisphp-php>php_prepareDijitphp(php$attribsphp,php php$paramsphp,php php'textareaphp'php)php;

php php php php php php php php php$htmlphp php php=php php'php<inputphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$hiddenAttribsphp)php php.php php$thisphp-php>getClosingBracketphp(php)php;
php php php php php php php php php$htmlphp php.php=php php'php<divphp'php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)php php.php php'php>php'
php php php php php php php php php php php php php php php php.php php$value
php php php php php php php php php php php php php php php php.php php"<php/divphp>php\nphp"php;

php php php php php php php php php/php/php Embedphp aphp textareaphp inphp aphp php<noscriptphp>php tagphp tophp allowphp forphp graceful
php php php php php php php php php/php/php degradation
php php php php php php php php php$htmlphp php.php=php php'php<noscriptphp>php'
php php php php php php php php php php php php php php php php.php php$thisphp-php>viewphp-php>formTextareaphp(php$hiddenIdphp,php php$valuephp,php php$attribsphp)
php php php php php php php php php php php php php php php php.php php'<php/noscriptphp>php'php;

php php php php php php php php returnphp php$htmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Generatesphp thephp listphp ofphp requiredphp modulesphp tophp includephp,php ifphp anyphp isphp neededphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$pluginsphp pluginsphp tophp include
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php protectedphp functionphp php_getRequiredModulesphp(arrayphp php$pluginsphp)
php php php php php{
php php php php php php php php php$modulesphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$pluginsphp asphp php$commandNamephp)php php{
php php php php php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_pluginsModulesphp[php$commandNamephp]php)php)php php{
php php php php php php php php php php php php php php php php php$pluginNamephp php=php php$thisphp-php>php_pluginsModulesphp[php$commandNamephp]php;
php php php php php php php php php php php php php php php php php$modulesphp[php]php php=php php'dijitphp.php_editorphp.pluginsphp.php'php php.php php$pluginNamephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp arrayphp_uniquephp(php$modulesphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Normalizephp editorphp elementphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_normalizeEditorNamephp(php$namephp)
php php php php php{
php php php php php php php php ifphp php(php'php[php]php'php php=php=php substrphp(php$namephp,php php-php2php)php)php php{
php php php php php php php php php php php php php$namephp php=php substrphp(php$namephp,php php0php,php strlenphp(php$namephp)php php-php php2php)php;
php php php php php php php php php php php php php$namephp php.php=php php'php[Editorphp]php[php]php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$namephp php.php=php php'php[Editorphp]php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Createphp onSubmitphp bindingphp forphp element
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$hiddenId
php php php php php php*php php@paramphp php stringphp php$editorId
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_createEditorOnSubmitphp(php$hiddenIdphp,php php$editorIdphp)
php php php php php{
php php php php php php php php php$thisphp-php>dojophp-php>onLoadCaptureStartphp(php)php;
php php php php php php php php echophp <php<php<EOJ
functionphp(php)php php{
php php php php varphp formphp php=php zendphp.findParentFormphp(dojophp.byIdphp(php'php$hiddenIdphp'php)php)php;
php php php php dojophp.connectphp(formphp,php php'submitphp'php,php functionphp(ephp)php php{
php php php php php php php php dojophp.byIdphp(php'php$hiddenIdphp'php)php.valuephp php=php dijitphp.byIdphp(php'php$editorIdphp'php)php.getValuephp(falsephp)php;
php php php php php}php)php;
php}
EOJphp;
php php php php php php php php php$thisphp-php>dojophp-php>onLoadCaptureEndphp(php)php;
php php php php php}
php}
