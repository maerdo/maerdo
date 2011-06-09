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

php/php*php*php Zendphp_Formphp_Decoratorphp_Interfacephp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Interfacephp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_Abstract
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Abstractphp.phpphp php2php1php1php4php6php php2php0php1php0php-php0php2php-php2php3php php1php4php:php3php5php:php5php7Zphp yoshidaphp@zendphp.cophp.jpphp php$
php php*php/
abstractphp classphp Zendphp_Formphp_Decoratorphp_Abstractphp implementsphp Zendphp_Formphp_Decoratorphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Placementphp constants
php php php php php php*php/
php php php php constphp APPENDphp php php=php php'APPENDphp'php;
php php php php constphp PREPENDphp php=php php'PREPENDphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp placementphp:php append
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_placementphp php=php php'APPENDphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Formphp_Elementphp|Zendphp_Form
php php php php php php*php/
php php php php protectedphp php$php_elementphp;

php php php php php/php*php*
php php php php php php*php Decoratorphp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_optionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php Separatorphp betweenphp newphp contentphp andphp old
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_separatorphp php=php PHPphp_EOLphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php arrayphp|Zendphp_Configphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}php elseifphp php(php$optionsphp instanceofphp Zendphp_Configphp)php php{
php php php php php php php php php php php php php$thisphp-php>setConfigphp(php$optionsphp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp options
php php php php php php*
php php php php php php*php php@paramphp php arrayphp php$options
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php php$optionsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp optionsphp fromphp configphp object
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Configphp php$config
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setConfigphp(Zendphp_Configphp php$configphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>setOptionsphp(php$configphp-php>toArrayphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp setOptionphp(php$keyphp,php php$valuephp)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp[php(stringphp)php php$keyphp]php php=php php$valuephp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp option
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$key
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp getOptionphp(php$keyphp)
php php php php php{
php php php php php php php php php$keyphp php=php php(stringphp)php php$keyphp;
php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_optionsphp[php$keyphp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_optionsphp[php$keyphp]php;
php php php php php php php php php}

php php php php php php php php returnphp nullphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp options
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getOptionsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_optionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Removephp singlephp option
php php php php php php*
php php php php php php*php php@paramphp mixedphp php$key
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp removeOptionphp(php$keyphp)
php php php php php{
php php php php php php php php ifphp php(nullphp php!php=php=php php$thisphp-php>getOptionphp(php$keyphp)php)php php{
php php php php php php php php php php php php unsetphp(php$thisphp-php>php_optionsphp[php$keyphp]php)php;
php php php php php php php php php php php php returnphp truephp;
php php php php php php php php php}

php php php php php php php php returnphp falsephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Clearphp allphp options
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Abstract
php php php php php php*php/
php php php php publicphp functionphp clearOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_optionsphp php=php arrayphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp currentphp formphp element
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Formphp_Elementphp|Zendphp_Formphp php$element
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Abstract
php php php php php php*php php@throwsphp Zendphp_Formphp_Decoratorphp_Exceptionphp onphp invalidphp elementphp type
php php php php php php*php/
php php php php publicphp functionphp setElementphp(php$elementphp)
php php php php php{
php php php php php php php php ifphp php(php(php!php$elementphp instanceofphp Zendphp_Formphp_Elementphp)
php php php php php php php php php php php php php&php&php php(php!php$elementphp instanceofphp Zendphp_Formphp)
php php php php php php php php php php php php php&php&php php(php!php$elementphp instanceofphp Zendphp_Formphp_DisplayGroupphp)php)
php php php php php php php php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Decoratorphp_Exceptionphp(php'Invalidphp elementphp typephp passedphp tophp decoratorphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_elementphp php=php php$elementphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp currentphp element
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Formphp_Elementphp|Zendphp_Form
php php php php php php*php/
php php php php publicphp functionphp getElementphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_elementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Determinephp ifphp decoratorphp shouldphp appendphp orphp prependphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getPlacementphp(php)
php php php php php{
php php php php php php php php php$placementphp php=php php$thisphp-php>php_placementphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$placementOptphp php=php php$thisphp-php>getOptionphp(php'placementphp'php)php)php)php php{
php php php php php php php php php php php php php$placementOptphp php=php strtoupperphp(php$placementOptphp)php;
php php php php php php php php php php php php switchphp php(php$placementOptphp)php php{
php php php php php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php php php php php php$placementphp php=php php$thisphp-php>php_placementphp php=php php$placementOptphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php casephp falsephp:
php php php php php php php php php php php php php php php php php php php php php$placementphp php=php php$thisphp-php>php_placementphp php=php nullphp;
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php php php php breakphp;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'placementphp'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$placementphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp separatorphp tophp usephp betweenphp oldphp andphp newphp content
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getSeparatorphp(php)
php php php php php{
php php php php php php php php php$separatorphp php=php php$thisphp-php>php_separatorphp;
php php php php php php php php ifphp php(nullphp php!php=php=php php(php$separatorOptphp php=php php$thisphp-php>getOptionphp(php'separatorphp'php)php)php)php php{
php php php php php php php php php php php php php$separatorphp php=php php$thisphp-php>php_separatorphp php=php php(stringphp)php php$separatorOptphp;
php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'separatorphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$separatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Decoratephp contentphp andphp/orphp element
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Formphp_Decoratorphp_Exceptionphp whenphp unimplemented
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Exceptionphp.phpphp'php;
php php php php php php php php throwphp newphp Zendphp_Formphp_Decoratorphp_Exceptionphp(php'renderphp(php)php notphp implementedphp'php)php;
php php php php php}
php}
