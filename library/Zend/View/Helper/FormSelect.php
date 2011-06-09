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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FormSelectphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Abstractphp classphp forphp extension
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;


php/php*php*
php php*php Helperphp tophp generatephp php"selectphp"php listphp ofphp options
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_FormSelectphp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{
php php php php php/php*php*
php php php php php php*php Generatesphp php'selectphp'php listphp ofphp optionsphp.
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$namephp Ifphp aphp stringphp,php thephp elementphp namephp.php php Ifphp an
php php php php php php*php arrayphp,php allphp otherphp parametersphp arephp ignoredphp,php andphp thephp arrayphp elements
php php php php php php*php arephp extractedphp inphp placephp ofphp addedphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp optionphp valuephp tophp markphp asphp php'selectedphp'php;php ifphp an
php php php php php php*php arrayphp,php willphp markphp allphp valuesphp inphp thephp arrayphp asphp php'selectedphp'php php(usedphp for
php php php php php php*php multiplephp-selectphp elementsphp)php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$attribsphp Attributesphp addedphp tophp thephp php'selectphp'php tagphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp Anphp arrayphp ofphp keyphp-valuephp pairsphp wherephp thephp array
php php php php php php*php keyphp isphp thephp radiophp valuephp,php andphp thephp arrayphp valuephp isphp thephp radiophp textphp.
php php php php php php*
php php php php php php*php php@paramphp stringphp php$listsepphp Whenphp disabledphp,php usephp thisphp listphp separatorphp string
php php php php php php*php betweenphp listphp valuesphp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp selectphp tagphp andphp optionsphp XHTMLphp.
php php php php php php*php/
php php php php publicphp functionphp formSelectphp(php$namephp,php php$valuephp php=php nullphp,php php$attribsphp php=php nullphp,
php php php php php php php php php$optionsphp php=php nullphp,php php$listsepphp php=php php"php<brphp php/php>php\nphp"php)
php php php php php{
php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfophp(php$namephp,php php$valuephp,php php$attribsphp,php php$optionsphp,php php$listsepphp)php;
php php php php php php php php extractphp(php$infophp)php;php php/php/php namephp,php idphp,php valuephp,php attribsphp,php optionsphp,php listsepphp,php disable

php php php php php php php php php/php/php forcephp php$valuephp tophp arrayphp sophp wephp canphp comparephp multiplephp valuesphp tophp multiple
php php php php php php php php php/php/php optionsphp;php alsophp ensurephp itphp'sphp aphp stringphp forphp comparisonphp purposesphp.
php php php php php php php php php$valuephp php=php arrayphp_mapphp(php'strvalphp'php,php php(arrayphp)php php$valuephp)php;

php php php php php php php php php/php/php checkphp ifphp elementphp mayphp havephp multiplephp values
php php php php php php php php php$multiplephp php=php php'php'php;

php php php php php php php php ifphp php(substrphp(php$namephp,php php-php2php)php php=php=php php'php[php]php'php)php php{
php php php php php php php php php php php php php/php/php multiplephp impliedphp byphp thephp name
php php php php php php php php php php php php php$multiplephp php=php php'php multiplephp=php"multiplephp"php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$attribsphp[php'multiplephp'php]php)php)php php{
php php php php php php php php php php php php php/php/php Attributephp set
php php php php php php php php php php php php ifphp php(php$attribsphp[php'multiplephp'php]php)php php{
php php php php php php php php php php php php php php php php php/php/php Truephp attributephp;php setphp multiplephp attribute
php php php php php php php php php php php php php php php php php$multiplephp php=php php'php multiplephp=php"multiplephp"php'php;

php php php php php php php php php php php php php php php php php/php/php Makephp surephp namephp indicatesphp multiplephp valuesphp arephp allowed
php php php php php php php php php php php php php php php php ifphp php(php!emptyphp(php$multiplephp)php php&php&php php(substrphp(php$namephp,php php-php2php)php php!php=php php'php[php]php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$namephp php.php=php php'php[php]php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php/php/php Falsephp attributephp;php ensurephp attributephp notphp set
php php php php php php php php php php php php php php php php php$multiplephp php=php php'php'php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$attribsphp[php'multiplephp'php]php)php;
php php php php php php php php php}

php php php php php php php php php/php/php nowphp startphp buildingphp thephp XHTMLphp.
php php php php php php php php php$disabledphp php=php php'php'php;
php php php php php php php php ifphp php(truephp php=php=php=php php$disablephp)php php{
php php php php php php php php php php php php php$disabledphp php=php php'php disabledphp=php"disabledphp"php'php;
php php php php php php php php php}

php php php php php php php php php/php/php Buildphp thephp surroundingphp selectphp elementphp firstphp.
php php php php php php php php php$xhtmlphp php=php php'php<selectphp'
php php php php php php php php php php php php php php php php php.php php'php namephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$namephp)php php.php php'php"php'
php php php php php php php php php php php php php php php php php.php php'php idphp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$idphp)php php.php php'php"php'
php php php php php php php php php php php php php php php php php.php php$multiple
php php php php php php php php php php php php php php php php php.php php$disabled
php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)
php php php php php php php php php php php php php php php php php.php php"php>php\nphp php php php php"php;

php php php php php php php php php/php/php buildphp thephp listphp ofphp options
php php php php php php php php php$listphp php php php php php php php=php arrayphp(php)php;
php php php php php php php php php$translatorphp php=php php$thisphp-php>getTranslatorphp(php)php;
php php php php php php php php foreachphp php(php(arrayphp)php php$optionsphp asphp php$optphp_valuephp php=php>php php$optphp_labelphp)php php{
php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$optphp_labelphp)php)php php{
php php php php php php php php php php php php php php php php php$optphp_disablephp php=php php'php'php;
php php php php php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$disablephp)php php&php&php inphp_arrayphp(php$optphp_valuephp,php php$disablephp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$optphp_disablephp php=php php'php disabledphp=php"disabledphp"php'php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$translatorphp)php php{
php php php php php php php php php php php php php php php php php php php php php$optphp_valuephp php=php php$translatorphp-php>translatephp(php$optphp_valuephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$listphp[php]php php=php php'php<optgroupphp'
php php php php php php php php php php php php php php php php php php php php php php php php php.php php$optphp_disable
php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php labelphp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$optphp_valuephp)php php.php'php"php>php'php;
php php php php php php php php php php php php php php php php foreachphp php(php$optphp_labelphp asphp php$valphp php=php>php php$labphp)php php{
php php php php php php php php php php php php php php php php php php php php php$listphp[php]php php=php php$thisphp-php>php_buildphp(php$valphp,php php$labphp,php php$valuephp,php php$disablephp)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php$listphp[php]php php=php php'<php/optgroupphp>php'php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$listphp[php]php php=php php$thisphp-php>php_buildphp(php$optphp_valuephp,php php$optphp_labelphp,php php$valuephp,php php$disablephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php addphp thephp optionsphp tophp thephp xhtmlphp andphp closephp thephp select
php php php php php php php php php$xhtmlphp php.php=php implodephp(php"php\nphp php php php php"php,php php$listphp)php php.php php"php\n<php/selectphp>php"php;

php php php php php php php php returnphp php$xhtmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Buildsphp thephp actualphp php<optionphp>php tag
php php php php php php*
php php php php php php*php php@paramphp stringphp php$valuephp Optionsphp Value
php php php php php php*php php@paramphp stringphp php$labelphp Optionsphp Label
php php php php php php*php php@paramphp arrayphp php php$selectedphp Thephp optionphp valuephp(sphp)php tophp markphp asphp php'selectedphp'
php php php php php php*php php@paramphp arrayphp|boolphp php$disablephp Whetherphp thephp selectphp isphp disabledphp,php orphp individualphp optionsphp are
php php php php php php*php php@returnphp stringphp Optionphp Tagphp XHTML
php php php php php php*php/
php php php php protectedphp functionphp php_buildphp(php$valuephp,php php$labelphp,php php$selectedphp,php php$disablephp)
php php php php php{
php php php php php php php php ifphp php(isphp_boolphp(php$disablephp)php)php php{
php php php php php php php php php php php php php$disablephp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$optphp php=php php'php<optionphp'
php php php php php php php php php php php php php php.php php'php valuephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$valuephp)php php.php php'php"php'
php php php php php php php php php php php php php php.php php'php labelphp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$labelphp)php php.php php'php"php'php;

php php php php php php php php php/php/php selectedphp?
php php php php php php php php ifphp php(inphp_arrayphp(php(stringphp)php php$valuephp,php php$selectedphp)php)php php{
php php php php php php php php php php php php php$optphp php.php=php php'php selectedphp=php"selectedphp"php'php;
php php php php php php php php php}

php php php php php php php php php/php/php disabledphp?
php php php php php php php php ifphp php(inphp_arrayphp(php$valuephp,php php$disablephp)php)php php{
php php php php php php php php php php php php php$optphp php.php=php php'php disabledphp=php"disabledphp"php'php;
php php php php php php php php php}

php php php php php php php php php$optphp php.php=php php'php>php'php php.php php$thisphp-php>viewphp-php>escapephp(php$labelphp)php php.php php"<php/optionphp>php"php;

php php php php php php php php returnphp php$optphp;
php php php php php}

php}
