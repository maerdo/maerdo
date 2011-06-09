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
php php*php Zendphp_Formphp_Decoratorphp_Label
php php*
php php*php Acceptsphp thephp optionsphp:
php php*php php-php separatorphp:php separatorphp tophp usephp betweenphp labelphp andphp contentphp php(defaultsphp tophp PHPphp_EOLphp)
php php*php php-php placementphp:php whetherphp tophp appendphp orphp prependphp labelphp tophp contentphp php(defaultsphp tophp prependphp)
php php*php php-php tagphp:php ifphp setphp,php usedphp tophp wrapphp thephp labelphp inphp anphp additionalphp HTMLphp tag
php php*php php-php optphp(ionalphp)Prefixphp:php aphp prefixphp tophp thephp labelphp tophp usephp whenphp thephp elementphp isphp optional
php php*php php-php optphp(ionaphp)lSuffixphp:php aphp suffixphp tophp thephp labelphp tophp usephp whenphp thephp elementphp isphp optional
php php*php php-php reqphp(uiredphp)Prefixphp:php aphp prefixphp tophp thephp labelphp tophp usephp whenphp thephp elementphp isphp required
php php*php php-php reqphp(uiredphp)Suffixphp:php aphp suffixphp tophp thephp labelphp tophp usephp whenphp thephp elementphp isphp required
php php*
php php*php Anyphp otherphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp labelphp tagphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Labelphp.phpphp php2php2php1php2php8php php2php0php1php0php-php0php5php-php0php6php php1php1php:php1php8php:php0php2Zphp alabphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Labelphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php prepend
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php php'PREPENDphp'php;

php php php php php/php*php*
php php php php php php*php HTMLphp tagphp withphp whichphp tophp surroundphp label
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_tagphp;

php php php php php/php*php*
php php php php php php*php Setphp elementphp ID
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Label
php php php php php php*php/
php php php php publicphp functionphp setIdphp(php$idphp)
php php php php php{
php php php php php php php php php$thisphp-php>setOptionphp(php'idphp'php,php php$idphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp elementphp IDphp php(usedphp inphp php'forphp'php attributephp)
php php php php php php*
php php php php php php*php Ifphp nonephp setphp inphp decoratorphp,php looksphp firstphp forphp elementphp php'idphp'php attributephp,php and
php php php php php php*php defaultsphp tophp elementphp namephp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getIdphp(php)
php php php php php{
php php php php php php php php php$idphp php=php php$thisphp-php>getOptionphp(php'idphp'php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$idphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$idphp php=php php$elementphp-php>getIdphp(php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setIdphp(php$idphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$idphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp HTMLphp tagphp withphp whichphp tophp surroundphp label
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tag
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Label
php php php php php php*php/
php php php php publicphp functionphp setTagphp(php$tagphp)
php php php php php{
php php php php php php php php ifphp php(emptyphp(php$tagphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_tagphp php=php nullphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_tagphp php=php php(stringphp)php php$tagphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>removeOptionphp(php'tagphp'php)php;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp HTMLphp tagphp,php ifphp anyphp,php withphp whichphp tophp surroundphp label
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getTagphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_tagphp)php php{
php php php php php php php php php php php php php$tagphp php=php php$thisphp-php>getOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$tagphp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'tagphp'php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>setTagphp(php$tagphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp php$tagphp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_tagphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp classphp withphp whichphp tophp definephp label
php php php php php php*
php php php php php php*php Appendsphp eitherphp php'optionalphp'php orphp php'requiredphp'php tophp classphp,php dependingphp onphp whether
php php php php php php*php orphp notphp thephp elementphp isphp requiredphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getClassphp(php)
php php php php php{
php php php php php php php php php$classphp php php php=php php'php'php;
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;

php php php php php php php php php$decoratorClassphp php=php php$thisphp-php>getOptionphp(php'classphp'php)php;
php php php php php php php php ifphp php(php!emptyphp(php$decoratorClassphp)php)php php{
php php php php php php php php php php php php php$classphp php.php=php php'php php'php php.php php$decoratorClassphp;
php php php php php php php php php}

php php php php php php php php php$typephp php php=php php$elementphp-php>isRequiredphp(php)php php?php php'requiredphp'php php:php php'optionalphp'php;

php php php php php php php php ifphp php(php!strstrphp(php$classphp,php php$typephp)php)php php{
php php php php php php php php php php php php php$classphp php.php=php php'php php'php php.php php$typephp;
php php php php php php php php php php php php php$classphp php=php trimphp(php$classphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$classphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Loadphp anphp optionalphp/requiredphp suffixphp/prefixphp key
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_loadOptReqKeyphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php$keyphp)php)php php{
php php php php php php php php php php php php php$valuephp php=php php$thisphp-php>getOptionphp(php$keyphp)php;
php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php(stringphp)php php$valuephp;
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$valuephp)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php$keyphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Overloading
php php php php php php*
php php php php php php*php Currentlyphp overloadsphp:
php php php php php php*
php php php php php php*php php-php getOptphp(ionalphp)Prefixphp(php)
php php php php php php*php php-php getOptphp(ionalphp)Suffixphp(php)
php php php php php php*php php-php getReqphp(uiredphp)Prefixphp(php)
php php php php php php*php php-php getReqphp(uiredphp)Suffixphp(php)
php php php php php php*php php-php setOptphp(ionalphp)Prefixphp(php)
php php php php php php*php php-php setOptphp(ionalphp)Suffixphp(php)
php php php php php php*php php-php setReqphp(uiredphp)Prefixphp(php)
php php php php php php*php php-php setReqphp(uiredphp)Suffixphp(php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$method
php php php php php php*php php@paramphp php arrayphp php$args
php php php php php php*php php@returnphp mixed
php php php php php php*php php@throwsphp Zendphp_Formphp_Exceptionphp forphp unsupportedphp methods
php php php php php php*php/
php php php php publicphp functionphp php_php_callphp(php$methodphp,php php$argsphp)
php php php php php{
php php php php php php php php php$tailphp php=php substrphp(php$methodphp,php php-php6php)php;
php php php php php php php php php$headphp php=php substrphp(php$methodphp,php php0php,php php3php)php;
php php php php php php php php ifphp php(inphp_arrayphp(php$headphp,php arrayphp(php'getphp'php,php php'setphp'php)php)
php php php php php php php php php php php php php&php&php php(php(php'Prefixphp'php php=php=php php$tailphp)php php|php|php php(php'Suffixphp'php php=php=php php$tailphp)php)
php php php php php php php php php)php php{
php php php php php php php php php php php php php$positionphp php=php substrphp(php$methodphp,php php-php6php)php;
php php php php php php php php php php php php php$typephp php php php php php=php strtolowerphp(substrphp(php$methodphp,php php3php,php php3php)php)php;
php php php php php php php php php php php php switchphp php(php$typephp)php php{
php php php php php php php php php php php php php php php php casephp php'reqphp'php:
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'requiredphp'php php.php php$positionphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp php'optphp'php:
php php php php php php php php php php php php php php php php php php php php php$keyphp php=php php'optionalphp'php php.php php$positionphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Exceptionphp(sprintfphp(php'Invalidphp methodphp php"php%sphp"php calledphp inphp Labelphp decoratorphp,php andphp detectedphp asphp typephp php%sphp'php,php php$methodphp,php php$typephp)php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php switchphp php(php$headphp)php php{
php php php php php php php php php php php php php php php php casephp php'setphp'php:
php php php php php php php php php php php php php php php php php php php php ifphp php(php0php php=php=php=php countphp(php$argsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Exceptionphp(sprintfphp(php'Methodphp php"php%sphp"php requiresphp atphp leastphp onephp argumentphp;php nonephp providedphp'php,php php$methodphp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php$valuephp php=php arrayphp_shiftphp(php$argsphp)php;
php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php$valuephp;
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php php php php php php php php casephp php'getphp'php:
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_loadOptReqKeyphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elseifphp php(issetphp(php$elementphp-php>php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php$keyphp php=php php(stringphp)php php$elementphp-php>php$keyphp;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>php_loadOptReqKeyphp(php$keyphp)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php returnphp php$thisphp-php>php$keyphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Formphp_Exceptionphp(sprintfphp(php'Invalidphp methodphp php"php%sphp"php calledphp inphp Labelphp decoratorphp'php,php php$methodphp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp labelphp tophp render
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp getLabelphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php$labelphp php=php php$elementphp-php>getLabelphp(php)php;
php php php php php php php php php$labelphp php=php trimphp(php$labelphp)php;

php php php php php php php php ifphp php(emptyphp(php$labelphp)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$translatorphp php=php php$elementphp-php>getTranslatorphp(php)php)php)php php{
php php php php php php php php php php php php php$labelphp php=php php$translatorphp-php>translatephp(php$labelphp)php;
php php php php php php php php php}

php php php php php php php php php$optPrefixphp php=php php$thisphp-php>getOptPrefixphp(php)php;
php php php php php php php php php$optSuffixphp php=php php$thisphp-php>getOptSuffixphp(php)php;
php php php php php php php php php$reqPrefixphp php=php php$thisphp-php>getReqPrefixphp(php)php;
php php php php php php php php php$reqSuffixphp php=php php$thisphp-php>getReqSuffixphp(php)php;
php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;

php php php php php php php php ifphp php(php!emptyphp(php$labelphp)php)php php{
php php php php php php php php php php php php ifphp php(php$elementphp-php>isRequiredphp(php)php)php php{
php php php php php php php php php php php php php php php php php$labelphp php=php php$reqPrefixphp php.php php$labelphp php.php php$reqSuffixphp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$labelphp php=php php$optPrefixphp php.php php$labelphp php.php php$optSuffixphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$labelphp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Renderphp aphp label
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

php php php php php php php php php$labelphp php php php php php=php php$thisphp-php>getLabelphp(php)php;
php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$tagphp php php php php php php php=php php$thisphp-php>getTagphp(php)php;
php php php php php php php php php$idphp php php php php php php php php=php php$thisphp-php>getIdphp(php)php;
php php php php php php php php php$classphp php php php php php=php php$thisphp-php>getClassphp(php)php;
php php php php php php php php php$optionsphp php php php=php php$thisphp-php>getOptionsphp(php)php;


php php php php php php php php ifphp php(emptyphp(php$labelphp)php php&php&php emptyphp(php$tagphp)php)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php ifphp php(php!emptyphp(php$labelphp)php)php php{
php php php php php php php php php php php php php$optionsphp[php'classphp'php]php php=php php$classphp;
php php php php php php php php php php php php php$labelphp php=php php$viewphp-php>formLabelphp(php$elementphp-php>getFullyQualifiedNamephp(php)php,php trimphp(php$labelphp)php,php php$optionsphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$labelphp php=php php'php&php#php1php6php0php;php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php$tagphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/HtmlTagphp.phpphp'php;
php php php php php php php php php php php php php$decoratorphp php=php newphp Zendphp_Formphp_Decoratorphp_HtmlTagphp(php)php;
php php php php php php php php php php php php php$decoratorphp-php>setOptionsphp(arrayphp(php'tagphp'php php=php>php php$tagphp,
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php'idphp'php php php=php>php php$idphp php.php php'php-labelphp'php)php)php;

php php php php php php php php php php php php php$labelphp php=php php$decoratorphp-php>renderphp(php$labelphp)php;
php php php php php php php php php}

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$labelphp;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$labelphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php}
php php php php php}
php}
