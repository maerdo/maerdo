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

php/php*php*php Zendphp_Formphp_Decoratorphp_Abstractphp php*php/
requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Zendphp_Formphp_Decoratorphp_ViewHelper
php php*
php php*php Decoratephp anphp elementphp byphp usingphp aphp viewphp helperphp tophp renderphp itphp.
php php*
php php*php Acceptsphp thephp followingphp optionsphp:
php php*php php-php separatorphp:php stringphp withphp whichphp tophp separatephp passedphp inphp contentphp andphp generatedphp content
php php*php php-php placementphp:php whetherphp tophp appendphp orphp prependphp thephp generatedphp contentphp tophp thephp passedphp inphp content
php php*php php-php helperphp:php php php php thephp namephp ofphp thephp viewphp helperphp tophp use
php php*
php php*php Assumesphp thephp viewphp helperphp acceptsphp threephp parametersphp,php thephp namephp,php valuephp,php and
php php*php optionalphp attributesphp;php thesephp willphp bephp providedphp byphp thephp elementphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php ViewHelperphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_ViewHelperphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Elementphp typesphp thatphp representphp buttons
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_buttonTypesphp php=php arrayphp(
php php php php php php php php php'Zendphp_Formphp_Elementphp_Buttonphp'php,
php php php php php php php php php'Zendphp_Formphp_Elementphp_Resetphp'php,
php php php php php php php php php'Zendphp_Formphp_Elementphp_Submitphp'php,
php php php php php)php;

php php php php php/php*php*
php php php php php php*php Viewphp helperphp tophp usephp whenphp rendering
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_helperphp;

php php php php php/php*php*
php php php php php php*php Setphp viewphp helperphp tophp usephp whenphp rendering
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$helper
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Elementphp_ViewHelper
php php php php php php*php/
php php php php publicphp functionphp setHelperphp(php$helperphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_helperphp php=php php(stringphp)php php$helperphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp viewphp helperphp forphp renderingphp element
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getHelperphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_helperphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'helperphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setHelperphp(php$optionsphp[php'helperphp'php]php)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'helperphp'php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$elementphp)php php{
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$helperphp php=php php$elementphp-php>getAttribphp(php'helperphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHelperphp(php$helperphp)php;
php php php php php php php php php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php php$elementphp-php>getTypephp(php)php;
php php php php php php php php php php php php php php php php php php php php php php php php ifphp php(php$posphp php=php strrposphp(php$typephp,php php'php_php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php$typephp php=php substrphp(php$typephp,php php$posphp php+php php1php)php;
php php php php php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php php php php php php php php php$thisphp-php>setHelperphp(php'formphp'php php.php ucfirstphp(php$typephp)php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_helperphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp name
php php php php php php*
php php php php php php*php Ifphp elementphp isphp aphp Zendphp_Formphp_Elementphp,php willphp attemptphp tophp namespacephp itphp ifphp the
php php php php php php*php elementphp belongsphp tophp anphp arrayphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php returnphp php'php'php;
php php php php php php php php php}

php php php php php php php php php$namephp php=php php$elementphp-php>getNamephp(php)php;

php php php php php php php php ifphp php(php!php$elementphp instanceofphp Zendphp_Formphp_Elementphp)php php{
php php php php php php php php php php php php returnphp php$namephp;
php php php php php php php php php}

php php php php php php php php ifphp php(nullphp php!php=php=php php(php$belongsTophp php=php php$elementphp-php>getBelongsTophp(php)php)php)php php{
php php php php php php php php php php php php php$namephp php=php php$belongsTophp php.php php'php[php'
php php php php php php php php php php php php php php php php php php php.php php$name
php php php php php php php php php php php php php php php php php php php.php php'php]php'php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$elementphp-php>isArrayphp(php)php)php php{
php php php php php php php php php php php php php$namephp php.php=php php'php[php]php'php;
php php php php php php php php php}

php php php php php php php php returnphp php$namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp elementphp attributes
php php php php php php*
php php php php php php*php Setphp idphp tophp elementphp namephp andphp/orphp arrayphp itemphp.
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getElementAttribsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php(php$elementphp php=php php$thisphp-php>getElementphp(php)php)php)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php php$attribsphp php=php php$elementphp-php>getAttribsphp(php)php;
php php php php php php php php ifphp php(issetphp(php$attribsphp[php'helperphp'php]php)php)php php{
php php php php php php php php php php php php unsetphp(php$attribsphp[php'helperphp'php]php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$elementphp,php php'getSeparatorphp'php)php)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$listsepphp php=php php$elementphp-php>getSeparatorphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$attribsphp[php'listsepphp'php]php php=php php$listsepphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$attribsphp[php'idphp'php]php)php)php php{
php php php php php php php php php php php php returnphp php$attribsphp;
php php php php php php php php php}

php php php php php php php php php$idphp php=php php$elementphp-php>getNamephp(php)php;

php php php php php php php php ifphp php(php$elementphp instanceofphp Zendphp_Formphp_Elementphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$belongsTophp php=php php$elementphp-php>getBelongsTophp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$belongsTophp php=php pregphp_replacephp(php'php/php\php[php(php[php^php\php]php]php+php)php\php]php/php'php,php php'php-php$php1php'php,php php$belongsTophp)php;
php php php php php php php php php php php php php php php php php$idphp php=php php$belongsTophp php.php php'php-php'php php.php php$idphp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$elementphp-php>setAttribphp(php'idphp'php,php php$idphp)php;
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php returnphp php$attribsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp value
php php php php php php*
php php php php php php*php Ifphp elementphp typephp isphp onephp ofphp thephp buttonphp typesphp,php returnsphp thephp labelphp.
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Formphp_Elementphp php$element
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getValuephp(php$elementphp)
php php php php php{
php php php php php php php php ifphp php(php!php$elementphp instanceofphp Zendphp_Formphp_Elementphp)php php{
php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php}

php php php php php php php php foreachphp php(php$thisphp-php>php_buttonTypesphp asphp php$typephp)php php{
php php php php php php php php php php php php ifphp php(php$elementphp instanceofphp php$typephp)php php{
php php php php php php php php php php php php php php php php ifphp php(stristrphp(php$typephp,php php'buttonphp'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$elementphp-php>contentphp php=php php$elementphp-php>getLabelphp(php)php;
php php php php php php php php php php php php php php php php php php php php returnphp nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php returnphp php$elementphp-php>getLabelphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$elementphp-php>getValuephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp anphp elementphp usingphp aphp viewphp helper
php php php php php php*
php php php php php php*php Determinephp viewphp helperphp fromphp php'viewHelperphp'php optionphp,php orphp,php ifphp nonephp setphp,php from
php php php php php php*php thephp elementphp typephp.php Thenphp callphp as
php php php php php php*php helperphp(php$elementphp-php>getNamephp(php)php,php php$elementphp-php>getValuephp(php)php,php php$elementphp-php>getAttribsphp(php)php)
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php php@throwsphp Zendphp_Formphp_Decoratorphp_Exceptionphp ifphp elementphp orphp viewphp arephp notphp registered
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$elementphp php=php php$thisphp-php>getElementphp(php)php;

php php php php php php php php php$viewphp php=php php$elementphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Decoratorphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Decoratorphp_Exceptionphp(php'ViewHelperphp decoratorphp cannotphp renderphp withoutphp aphp registeredphp viewphp objectphp'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(methodphp_existsphp(php$elementphp,php php'getMultiOptionsphp'php)php)php php{
php php php php php php php php php php php php php$elementphp-php>getMultiOptionsphp(php)php;
php php php php php php php php php}

php php php php php php php php php$helperphp php php php php php php php php=php php$thisphp-php>getHelperphp(php)php;
php php php php php php php php php$separatorphp php php php php php=php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$valuephp php php php php php php php php php=php php$thisphp-php>getValuephp(php$elementphp)php;
php php php php php php php php php$attribsphp php php php php php php php=php php$thisphp-php>getElementAttribsphp(php)php;
php php php php php php php php php$namephp php php php php php php php php php php=php php$elementphp-php>getFullyQualifiedNamephp(php)php;
php php php php php php php php php$idphp php php php php php php php php php php php php=php php$elementphp-php>getIdphp(php)php;
php php php php php php php php php$attribsphp[php'idphp'php]php php=php php$idphp;

php php php php php php php php php$helperObjectphp php php=php php$viewphp-php>getHelperphp(php$helperphp)php;
php php php php php php php php ifphp php(methodphp_existsphp(php$helperObjectphp,php php'setTranslatorphp'php)php)php php{
php php php php php php php php php php php php php$helperObjectphp-php>setTranslatorphp(php$elementphp-php>getTranslatorphp(php)php)php;
php php php php php php php php php}

php php php php php php php php php$elementContentphp php=php php$viewphp-php>php$helperphp(php$namephp,php php$valuephp,php php$attribsphp,php php$elementphp-php>optionsphp)php;
php php php php php php php php switchphp php(php$thisphp-php>getPlacementphp(php)php)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$elementContentphp;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$elementContentphp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php returnphp php$elementContentphp;
php php php php php php php php php}
php php php php php}
php}
