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
php php*php php@versionphp php php php php$Idphp:php FormRadiophp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php Abstractphp classphp forphp extension
php php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/FormElementphp.phpphp'php;


php/php*php*
php php*php Helperphp tophp generatephp aphp setphp ofphp radiophp buttonphp elements
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_FormRadiophp extendsphp Zendphp_Viewphp_Helperphp_FormElement
php{
php php php php php/php*php*
php php php php php php*php Inputphp typephp tophp use
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_inputTypephp php=php php'radiophp'php;

php php php php php/php*php*
php php php php php php*php Whetherphp orphp notphp thisphp elementphp representsphp anphp arrayphp collectionphp byphp default
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp php$php_isArrayphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Generatesphp aphp setphp ofphp radiophp buttonphp elementsphp.
php php php php php php*
php php php php php php*php php@accessphp public
php php php php php php*
php php php php php php*php php@paramphp stringphp|arrayphp php$namephp Ifphp aphp stringphp,php thephp elementphp namephp.php php Ifphp an
php php php php php php*php arrayphp,php allphp otherphp parametersphp arephp ignoredphp,php andphp thephp arrayphp elements
php php php php php php*php arephp extractedphp inphp placephp ofphp addedphp parametersphp.
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$valuephp Thephp radiophp valuephp tophp markphp asphp php'checkedphp'php.
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$optionsphp Anphp arrayphp ofphp keyphp-valuephp pairsphp wherephp thephp array
php php php php php php*php keyphp isphp thephp radiophp valuephp,php andphp thephp arrayphp valuephp isphp thephp radiophp textphp.
php php php php php php*
php php php php php php*php php@paramphp arrayphp|stringphp php$attribsphp Attributesphp addedphp tophp eachphp radiophp.
php php php php php php*
php php php php php php*php php@returnphp stringphp Thephp radiophp buttonsphp XHTMLphp.
php php php php php php*php/
php php php php publicphp functionphp formRadiophp(php$namephp,php php$valuephp php=php nullphp,php php$attribsphp php=php nullphp,
php php php php php php php php php$optionsphp php=php nullphp,php php$listsepphp php=php php"php<brphp php/php>php\nphp"php)
php php php php php{

php php php php php php php php php$infophp php=php php$thisphp-php>php_getInfophp(php$namephp,php php$valuephp,php php$attribsphp,php php$optionsphp,php php$listsepphp)php;
php php php php php php php php extractphp(php$infophp)php;php php/php/php namephp,php valuephp,php attribsphp,php optionsphp,php listsepphp,php disable

php php php php php php php php php/php/php retrievephp attributesphp forphp labelsphp php(prefixedphp withphp php'labelphp_php'php orphp php'labelphp'php)
php php php php php php php php php$labelphp_attribsphp php=php arrayphp(php)php;
php php php php php php php php foreachphp php(php$attribsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php php$tmpphp php php php php=php falsephp;
php php php php php php php php php php php php php$keyLenphp php=php strlenphp(php$keyphp)php;
php php php php php php php php php php php php ifphp php(php(php6php <php php$keyLenphp)php php&php&php php(substrphp(php$keyphp,php php0php,php php6php)php php=php=php php'labelphp_php'php)php)php php{
php php php php php php php php php php php php php php php php php$tmpphp php=php substrphp(php$keyphp,php php6php)php;
php php php php php php php php php php php php php}php elseifphp php(php(php5php <php php$keyLenphp)php php&php&php php(substrphp(php$keyphp,php php0php,php php5php)php php=php=php php'labelphp'php)php)php php{
php php php php php php php php php php php php php php php php php$tmpphp php=php substrphp(php$keyphp,php php5php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$tmpphp)php php{
php php php php php php php php php php php php php php php php php/php/php makephp surephp firstphp charphp isphp lowercase
php php php php php php php php php php php php php php php php php$tmpphp[php0php]php php=php strtolowerphp(php$tmpphp[php0php]php)php;
php php php php php php php php php php php php php php php php php$labelphp_attribsphp[php$tmpphp]php php=php php$valphp;
php php php php php php php php php php php php php php php php unsetphp(php$attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$labelPlacementphp php=php php'appendphp'php;
php php php php php php php php foreachphp php(php$labelphp_attribsphp asphp php$keyphp php=php>php php$valphp)php php{
php php php php php php php php php php php php switchphp php(strtolowerphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php casephp php'placementphp'php:
php php php php php php php php php php php php php php php php php php php php unsetphp(php$labelphp_attribsphp[php$keyphp]php)php;
php php php php php php php php php php php php php php php php php php php php php$valphp php=php strtolowerphp(php$valphp)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$valphp,php arrayphp(php'prependphp'php,php php'appendphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$labelPlacementphp php=php php$valphp;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php/php/php thephp radiophp buttonphp valuesphp andphp labels
php php php php php php php php php$optionsphp php=php php(arrayphp)php php$optionsphp;

php php php php php php php php php/php/php buildphp thephp element
php php php php php php php php php$xhtmlphp php=php php'php'php;
php php php php php php php php php$listphp php php=php arrayphp(php)php;

php php php php php php php php php/php/php shouldphp thephp namephp affectphp anphp arrayphp collectionphp?
php php php php php php php php php$namephp php=php php$thisphp-php>viewphp-php>escapephp(php$namephp)php;
php php php php php php php php ifphp php(php$thisphp-php>php_isArrayphp php&php&php php(php'php[php]php'php php!php=php substrphp(php$namephp,php php-php2php)php)php)php php{
php php php php php php php php php php php php php$namephp php.php=php php'php[php]php'php;
php php php php php php php php php}

php php php php php php php php php/php/php ensurephp valuephp isphp anphp arrayphp tophp allowphp matchingphp multiplephp times
php php php php php php php php php$valuephp php=php php(arrayphp)php php$valuephp;

php php php php php php php php php/php/php XHTMLphp orphp HTMLphp endphp tagphp?
php php php php php php php php php$endTagphp php=php php'php php/php>php'php;
php php php php php php php php ifphp php(php(php$thisphp-php>viewphp instanceofphp Zendphp_Viewphp_Abstractphp)php php&php&php php!php$thisphp-php>viewphp-php>doctypephp(php)php-php>isXhtmlphp(php)php)php php{
php php php php php php php php php php php php php$endTagphp=php php'php>php'php;
php php php php php php php php php}

php php php php php php php php php/php/php addphp radiophp buttonsphp tophp thephp listphp.
php php php php php php php php requirephp_oncephp php'Zendphp/Filterphp/Alnumphp.phpphp'php;
php php php php php php php php php$filterphp php=php newphp Zendphp_Filterphp_Alnumphp(php)php;
php php php php php php php php foreachphp php(php$optionsphp asphp php$optphp_valuephp php=php>php php$optphp_labelphp)php php{

php php php php php php php php php php php php php/php/php Shouldphp thephp labelphp bephp escapedphp?
php php php php php php php php php php php php ifphp php(php$escapephp)php php{
php php php php php php php php php php php php php php php php php$optphp_labelphp php=php php$thisphp-php>viewphp-php>escapephp(php$optphp_labelphp)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php isphp itphp disabledphp?
php php php php php php php php php php php php php$disabledphp php=php php'php'php;
php php php php php php php php php php php php ifphp php(truephp php=php=php=php php$disablephp)php php{
php php php php php php php php php php php php php php php php php$disabledphp php=php php'php disabledphp=php"disabledphp"php'php;
php php php php php php php php php php php php php}php elseifphp php(isphp_arrayphp(php$disablephp)php php&php&php inphp_arrayphp(php$optphp_valuephp,php php$disablephp)php)php php{
php php php php php php php php php php php php php php php php php$disabledphp php=php php'php disabledphp=php"disabledphp"php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php isphp itphp checkedphp?
php php php php php php php php php php php php php$checkedphp php=php php'php'php;
php php php php php php php php php php php php ifphp php(inphp_arrayphp(php$optphp_valuephp,php php$valuephp)php)php php{
php php php php php php php php php php php php php php php php php$checkedphp php=php php'php checkedphp=php"checkedphp"php'php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php php/php/php generatephp ID
php php php php php php php php php php php php php$optIdphp php=php php$idphp php.php php'php-php'php php.php php$filterphp-php>filterphp(php$optphp_valuephp)php;

php php php php php php php php php php php php php/php/php Wrapphp thephp radiosphp inphp labels
php php php php php php php php php php php php php$radiophp php=php php'php<labelphp'
php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$labelphp_attribsphp)php php.php php'php forphp=php"php'php php.php php$optIdphp php.php php'php"php>php'
php php php php php php php php php php php php php php php php php php php php php.php php(php(php'prependphp'php php=php=php php$labelPlacementphp)php php?php php$optphp_labelphp php:php php'php'php)
php php php php php php php php php php php php php php php php php php php php php.php php'php<inputphp typephp=php"php'php php.php php$thisphp-php>php_inputTypephp php.php php'php"php'
php php php php php php php php php php php php php php php php php php php php php.php php'php namephp=php"php'php php.php php$namephp php.php php'php"php'
php php php php php php php php php php php php php php php php php php php php php.php php'php idphp=php"php'php php.php php$optIdphp php.php php'php"php'
php php php php php php php php php php php php php php php php php php php php php.php php'php valuephp=php"php'php php.php php$thisphp-php>viewphp-php>escapephp(php$optphp_valuephp)php php.php php'php"php'
php php php php php php php php php php php php php php php php php php php php php.php php$checked
php php php php php php php php php php php php php php php php php php php php php.php php$disabled
php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_htmlAttribsphp(php$attribsphp)
php php php php php php php php php php php php php php php php php php php php php.php php$endTag
php php php php php php php php php php php php php php php php php php php php php.php php(php(php'appendphp'php php=php=php php$labelPlacementphp)php php?php php$optphp_labelphp php:php php'php'php)
php php php php php php php php php php php php php php php php php php php php php.php php'<php/labelphp>php'php;

php php php php php php php php php php php php php/php/php addphp tophp thephp arrayphp ofphp radiophp buttons
php php php php php php php php php php php php php$listphp[php]php php=php php$radiophp;
php php php php php php php php php}

php php php php php php php php php/php/php donephp!
php php php php php php php php php$xhtmlphp php.php=php implodephp(php$listsepphp,php php$listphp)php;

php php php php php php php php returnphp php$xhtmlphp;
php php php php php}
php}
