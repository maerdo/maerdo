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
php php*php php@versionphp php php php php$Idphp:php Editorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Formphp_Elementphp_Dijitphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Formphp/Elementphp/Dijitphp.phpphp'php;

php/php*php*
php php*php Editorphp dijit
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Formphp_Elementphp_Dijit
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp Formphp_Element
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Dojophp_Formphp_Elementphp_Editorphp extendsphp Zendphp_Dojophp_Formphp_Elementphp_Dijit
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Viewphp helper
php php php php php php*php/
php php php php publicphp php$helperphp php=php php'Editorphp'php;

php php php php php/php*php*
php php php php php php*php Addphp aphp singlephp eventphp tophp connectphp tophp thephp editingphp area
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$event
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addCaptureEventphp(php$eventphp)
php php php php php{
php php php php php php php php php$eventphp php=php php(stringphp)php php$eventphp;
php php php php php php php php php$captureEventsphp php=php php$thisphp-php>getCaptureEventsphp(php)php;
php php php php php php php php ifphp php(inphp_arrayphp(php$eventphp,php php$captureEventsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$captureEventsphp[php]php php=php php(stringphp)php php$eventphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'captureEventsphp'php,php php$captureEventsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp capturephp events
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$events
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addCaptureEventsphp(arrayphp php$eventsphp)
php php php php php{
php php php php php php php php foreachphp php(php$eventsphp asphp php$eventphp)php php{
php php php php php php php php php php php php php$thisphp-php>addCaptureEventphp(php$eventphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp manyphp capturephp eventsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$events
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setCaptureEventsphp(arrayphp php$eventsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearCaptureEventsphp(php)php;
php php php php php php php php php$thisphp-php>addCaptureEventsphp(php$eventsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp capturephp events
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getCaptureEventsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'captureEventsphp'php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'captureEventsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp givenphp capturephp eventphp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$event
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasCaptureEventphp(php$eventphp)
php php php php php{
php php php php php php php php php$captureEventsphp php=php php$thisphp-php>getCaptureEventsphp(php)php;
php php php php php php php php returnphp inphp_arrayphp(php(stringphp)php php$eventphp,php php$captureEventsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp givenphp capturephp event
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$event
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp removeCaptureEventphp(php$eventphp)
php php php php php{
php php php php php php php php php$eventphp php=php php(stringphp)php php$eventphp;
php php php php php php php php php$captureEventsphp php=php php$thisphp-php>getCaptureEventsphp(php)php;
php php php php php php php php ifphp php(falsephp php=php=php=php php(php$indexphp php=php arrayphp_searchphp(php$eventphp,php php$captureEventsphp)php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php unsetphp(php$captureEventsphp[php$indexphp]php)php;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'captureEventsphp'php,php php$captureEventsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp capturephp events
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp clearCaptureEventsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>removeDijitParamphp(php'captureEventsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp singlephp eventphp tophp thephp dijit
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$event
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addEventphp(php$eventphp)
php php php php php{
php php php php php php php php php$eventphp php=php php(stringphp)php php$eventphp;
php php php php php php php php php$eventsphp php=php php$thisphp-php>getEventsphp(php)php;
php php php php php php php php ifphp php(inphp_arrayphp(php$eventphp,php php$eventsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$eventsphp[php]php php=php php(stringphp)php php$eventphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'eventsphp'php,php php$eventsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp events
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$events
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addEventsphp(arrayphp php$eventsphp)
php php php php php{
php php php php php php php php foreachphp php(php$eventsphp asphp php$eventphp)php php{
php php php php php php php php php php php php php$thisphp-php>addEventphp(php$eventphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp manyphp eventsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$events
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setEventsphp(arrayphp php$eventsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearEventsphp(php)php;
php php php php php php php php php$thisphp-php>addEventsphp(php$eventsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp events
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getEventsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'eventsphp'php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'eventsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp givenphp eventphp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$event
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasEventphp(php$eventphp)
php php php php php{
php php php php php php php php php$eventsphp php=php php$thisphp-php>getEventsphp(php)php;
php php php php php php php php returnphp inphp_arrayphp(php(stringphp)php php$eventphp,php php$eventsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp givenphp event
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$event
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp removeEventphp(php$eventphp)
php php php php php{
php php php php php php php php php$eventsphp php=php php$thisphp-php>getEventsphp(php)php;
php php php php php php php php ifphp php(falsephp php=php=php=php php(php$indexphp php=php arrayphp_searchphp(php$eventphp,php php$eventsphp)php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php unsetphp(php$eventsphp[php$indexphp]php)php;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'eventsphp'php,php php$eventsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp events
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp clearEventsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>removeDijitParamphp(php'eventsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp singlephp editorphp plugin
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$plugin
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addPluginphp(php$pluginphp)
php php php php php{
php php php php php php php php php$pluginphp php=php php(stringphp)php php$pluginphp;
php php php php php php php php php$pluginsphp php=php php$thisphp-php>getPluginsphp(php)php;
php php php php php php php php ifphp php(inphp_arrayphp(php$pluginphp,php php$pluginsphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$pluginsphp[php]php php=php php(stringphp)php php$pluginphp;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'pluginsphp'php,php php$pluginsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp plugins
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$plugins
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addPluginsphp(arrayphp php$pluginsphp)
php php php php php{
php php php php php php php php foreachphp php(php$pluginsphp asphp php$pluginphp)php php{
php php php php php php php php php php php php php$thisphp-php>addPluginphp(php$pluginphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp manyphp pluginsphp atphp once
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$plugins
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setPluginsphp(arrayphp php$pluginsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearPluginsphp(php)php;
php php php php php php php php php$thisphp-php>addPluginsphp(php$pluginsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp plugins
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPluginsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'pluginsphp'php)php)php php{
php php php php php php php php php php php php returnphp arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'pluginsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp givenphp pluginphp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$plugin
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasPluginphp(php$pluginphp)
php php php php php{
php php php php php php php php php$pluginsphp php=php php$thisphp-php>getPluginsphp(php)php;
php php php php php php php php returnphp inphp_arrayphp(php(stringphp)php php$pluginphp,php php$pluginsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp givenphp plugin
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$plugin
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp removePluginphp(php$pluginphp)
php php php php php{
php php php php php php php php php$pluginsphp php=php php$thisphp-php>getPluginsphp(php)php;
php php php php php php php php ifphp php(falsephp php=php=php=php php(php$indexphp php=php arrayphp_searchphp(php$pluginphp,php php$pluginsphp)php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}
php php php php php php php php unsetphp(php$pluginsphp[php$indexphp]php)php;
php php php php php php php php php$thisphp-php>setDijitParamphp(php'pluginsphp'php,php php$pluginsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp plugins
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp clearPluginsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>removeDijitParamphp(php'pluginsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp editphp actionphp interval
php php php php php php*
php php php php php php*php php@paramphp php intphp php$interval
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setEditActionIntervalphp(php$intervalphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'editActionIntervalphp'php,php php(intphp)php php$intervalphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp editphp actionphp intervalphp;php defaultsphp tophp php3
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getEditActionIntervalphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'editActionIntervalphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>setEditActionIntervalphp(php3php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'editActionIntervalphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp focusphp onphp loadphp flag
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setFocusOnLoadphp(php$flagphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'focusOnLoadphp'php,php php(boolphp)php php$flagphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp focusphp onphp loadphp flag
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getFocusOnLoadphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'focusOnLoadphp'php)php)php php{
php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'focusOnLoadphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp editorphp height
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$height
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setHeightphp(php$heightphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php\dphp+php(emphp|pxphp|php%php)php?php$php/iphp'php,php php$heightphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(php'Invalidphp heightphp providedphp;php mustphp bephp integerphp orphp CSSphp measurementphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php(emphp|pxphp|php%php)php$php/php'php,php php$heightphp)php)php php{
php php php php php php php php php php php php php$heightphp php.php=php php'pxphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'heightphp'php,php php$heightphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp height
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHeightphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'heightphp'php)php)php php{
php php php php php php php php php php php php returnphp php'php3php0php0pxphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'heightphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp whetherphp orphp notphp tophp inheritphp parentphp'sphp width
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$flag
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setInheritWidthphp(php$flagphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'inheritWidthphp'php,php php(boolphp)php php$flagphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp tophp inheritphp thephp parentphp'sphp width
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getInheritWidthphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'inheritWidthphp'php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'inheritWidthphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp minimumphp heightphp ofphp editor
php php php php php php*
php php php php php php*php php@paramphp php stringphp|intphp php$minHeight
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setMinHeightphp(php$minHeightphp)
php php php php php{
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php/php^php\dphp+php(emphp)php?php$php/iphp'php,php php$minHeightphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Elementphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Elementphp_Exceptionphp(php'Invalidphp minHeightphp providedphp;php mustphp bephp integerphp orphp CSSphp measurementphp'php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php'emphp'php php!php=php substrphp(php$minHeightphp,php php-php2php)php)php php{
php php php php php php php php php php php php php$minHeightphp php.php=php php'emphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'minHeightphp'php,php php$minHeightphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp minimumphp heightphp ofphp editor
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMinHeightphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'minHeightphp'php)php)php php{
php php php php php php php php php php php php returnphp php'php1emphp'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'minHeightphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp aphp customphp stylesheet
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$styleSheet
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addStyleSheetphp(php$styleSheetphp)
php php php php php{
php php php php php php php php php$stylesheetsphp php=php php$thisphp-php>getStyleSheetsphp(php)php;
php php php php php php php php ifphp php(strstrphp(php$stylesheetsphp,php php'php;php'php)php)php php{
php php php php php php php php php php php php php$stylesheetsphp php=php explodephp(php'php;php'php,php php$stylesheetsphp)php;
php php php php php php php php php}php elseifphp php(php!emptyphp(php$stylesheetsphp)php)php php{
php php php php php php php php php php php php php$stylesheetsphp php=php php(arrayphp)php php$stylesheetsphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$stylesheetsphp php=php arrayphp(php)php;
php php php php php php php php php}
php php php php php php php php ifphp php(php!inphp_arrayphp(php$styleSheetphp,php php$stylesheetsphp)php)php php{
php php php php php php php php php php php php php$stylesheetsphp[php]php php=php php(stringphp)php php$styleSheetphp;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'styleSheetsphp'php,php implodephp(php'php;php'php,php php$stylesheetsphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp multiplephp customphp stylesheets
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$styleSheets
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp addStyleSheetsphp(arrayphp php$styleSheetsphp)
php php php php php{
php php php php php php php php foreachphp php(php$styleSheetsphp asphp php$styleSheetphp)php php{
php php php php php php php php php php php php php$thisphp-php>addStyleSheetphp(php$styleSheetphp)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Overwritephp allphp stylesheets
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$styleSheets
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setStyleSheetsphp(arrayphp php$styleSheetsphp)
php php php php php{
php php php php php php php php php$thisphp-php>clearStyleSheetsphp(php)php;
php php php php php php php php returnphp php$thisphp-php>addStyleSheetsphp(php$styleSheetsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp stylesheets
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getStyleSheetsphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'styleSheetsphp'php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'styleSheetsphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Isphp aphp givenphp stylesheetphp registeredphp?
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$styleSheet
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp hasStyleSheetphp(php$styleSheetphp)
php php php php php{
php php php php php php php php php$styleSheetsphp php=php php$thisphp-php>getStyleSheetsphp(php)php;
php php php php php php php php php$styleSheetsphp php=php explodephp(php'php;php'php,php php$styleSheetsphp)php;
php php php php php php php php returnphp inphp_arrayphp(php$styleSheetphp,php php$styleSheetsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp aphp singlephp stylesheet
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$styleSheet
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp removeStyleSheetphp(php$styleSheetphp)
php php php php php{
php php php php php php php php php$styleSheetsphp php=php php$thisphp-php>getStyleSheetsphp(php)php;
php php php php php php php php php$styleSheetsphp php=php explodephp(php'php;php'php,php php$styleSheetsphp)php;
php php php php php php php php ifphp php(falsephp php!php=php=php php(php$indexphp php=php arrayphp_searchphp(php$styleSheetphp,php php$styleSheetsphp)php)php)php php{
php php php php php php php php php php php php unsetphp(php$styleSheetsphp[php$indexphp]php)php;
php php php php php php php php php php php php php$thisphp-php>setDijitParamphp(php'styleSheetsphp'php,php implodephp(php'php;php'php,php php$styleSheetsphp)php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp stylesheets
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp clearStyleSheetsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>hasDijitParamphp(php'styleSheetsphp'php)php)php php{
php php php php php php php php php php php php php$thisphp-php>removeDijitParamphp(php'styleSheetsphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp updatephp interval
php php php php php php*
php php php php php php*php php@paramphp php intphp php$interval
php php php php php php*php php@returnphp Zendphp_Dojophp_Formphp_Elementphp_Editor
php php php php php php*php/
php php php php publicphp functionphp setUpdateIntervalphp(php$intervalphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setDijitParamphp(php'updateIntervalphp'php,php php(intphp)php php$intervalphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp updatephp interval
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getUpdateIntervalphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>hasDijitParamphp(php'updateIntervalphp'php)php)php php{
php php php php php php php php php php php php php returnphp php2php0php0php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>getDijitParamphp(php'updateIntervalphp'php)php;
php php php php php}
php}
