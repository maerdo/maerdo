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
php php*php Zendphp_Formphp_Decoratorphp_FormErrors
php php*
php php*php Displaysphp allphp formphp errorsphp inphp onephp viewphp.
php php*
php php*php Anyphp optionsphp passedphp willphp bephp usedphp asphp HTMLphp attributesphp ofphp thephp ulphp tagphp forphp thephp errorsphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php FormErrorsphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_FormErrorsphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Defaultphp valuesphp forphp markupphp options
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_defaultsphp php=php arrayphp(
php php php php php php php php php'ignoreSubFormsphp'php php php php php php php php php php php=php>php falsephp,
php php php php php php php php php'showCustomFormErrorsphp'php php php php php=php>php truephp,
php php php php php php php php php'onlyCustomFormErrorsphp'php php php php php=php>php falsephp,
php php php php php php php php php'markupElementLabelEndphp'php php php php=php>php php'<php/bphp>php'php,
php php php php php php php php php'markupElementLabelStartphp'php php=php>php php'php<bphp>php'php,
php php php php php php php php php'markupListEndphp'php php php php php php php php php php php php=php>php php'<php/ulphp>php'php,
php php php php php php php php php'markupListItemEndphp'php php php php php php php php=php>php php'<php/liphp>php'php,
php php php php php php php php php'markupListItemStartphp'php php php php php php=php>php php'php<liphp>php'php,
php php php php php php php php php'markupListStartphp'php php php php php php php php php php=php>php php'php<ulphp classphp=php"formphp-errorsphp"php>php'php,
php php php php php)php;

php php php php php/php*php*php#php@php+
php php php php php php*php Markupphp options
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_ignoreSubFormsphp;
php php php php protectedphp php$php_showCustomFormErrorsphp;
php php php php protectedphp php$php_onlyCustomFormErrorsphp;
php php php php protectedphp php$php_markupElementLabelEndphp;
php php php php protectedphp php$php_markupElementLabelStartphp;
php php php php protectedphp php$php_markupListEndphp;
php php php php protectedphp php$php_markupListItemEndphp;
php php php php protectedphp php$php_markupListItemStartphp;
php php php php protectedphp php$php_markupListStartphp;
php php php php php/php*php*php#php@php-php*php/

php php php php php/php*php*
php php php php php php*php Renderphp errors
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$formphp php=php php$thisphp-php>getElementphp(php)php;
php php php php php php php php ifphp php(php!php$formphp instanceofphp Zendphp_Formphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$viewphp php=php php$formphp-php>getViewphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$viewphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>initOptionsphp(php)php;
php php php php php php php php php$markupphp php=php php$thisphp-php>php_recurseFormphp(php$formphp,php php$viewphp)php;

php php php php php php php php ifphp php(emptyphp(php$markupphp)php)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$markupphp php=php php$thisphp-php>getMarkupListStartphp(php)
php php php php php php php php php php php php php php php php php.php php$markup
php php php php php php php php php php php php php php php php php.php php$thisphp-php>getMarkupListEndphp(php)php;

php php php php php php php php switchphp php(php$thisphp-php>getPlacementphp(php)php)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$thisphp-php>getSeparatorphp(php)php php.php php$markupphp;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$markupphp php.php php$thisphp-php>getSeparatorphp(php)php php.php php$contentphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Initializephp options
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp initOptionsphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getMarkupElementLabelEndphp(php)php;
php php php php php php php php php$thisphp-php>getMarkupElementLabelStartphp(php)php;
php php php php php php php php php$thisphp-php>getMarkupListEndphp(php)php;
php php php php php php php php php$thisphp-php>getMarkupListItemEndphp(php)php;
php php php php php php php php php$thisphp-php>getMarkupListItemStartphp(php)php;
php php php php php php php php php$thisphp-php>getMarkupListStartphp(php)php;
php php php php php php php php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$thisphp-php>getSeparatorphp(php)php;
php php php php php php php php php$thisphp-php>ignoreSubFormsphp(php)php;
php php php php php php php php php$thisphp-php>getShowCustomFormErrorsphp(php)php;
php php php php php php php php php$thisphp-php>getOnlyCustomFormErrorsphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupElementLabelStart
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMarkupElementLabelStartphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_markupElementLabelStartphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$markupElementLabelStartphp php=php php$thisphp-php>getOptionphp(php'markupElementLabelStartphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupElementLabelStartphp(php$thisphp-php>php_defaultsphp[php'markupElementLabelStartphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupElementLabelStartphp(php$markupElementLabelStartphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'markupElementLabelStartphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupElementLabelStartphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp markupElementLabelStart
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$markupElementLabelStart
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setMarkupElementLabelStartphp(php$markupElementLabelStartphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupElementLabelStartphp php=php php$markupElementLabelStartphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupElementLabelEnd
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMarkupElementLabelEndphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_markupElementLabelEndphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$markupElementLabelEndphp php=php php$thisphp-php>getOptionphp(php'markupElementLabelEndphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupElementLabelEndphp(php$thisphp-php>php_defaultsphp[php'markupElementLabelEndphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupElementLabelEndphp(php$markupElementLabelEndphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'markupElementLabelEndphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupElementLabelEndphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp markupElementLabelEnd
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$markupElementLabelEnd
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setMarkupElementLabelEndphp(php$markupElementLabelEndphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupElementLabelEndphp php=php php$markupElementLabelEndphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupListStart
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMarkupListStartphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_markupListStartphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$markupListStartphp php=php php$thisphp-php>getOptionphp(php'markupListStartphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListStartphp(php$thisphp-php>php_defaultsphp[php'markupListStartphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListStartphp(php$markupListStartphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'markupListStartphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupListStartphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp markupListStart
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$markupListStart
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setMarkupListStartphp(php$markupListStartphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupListStartphp php=php php$markupListStartphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupListEnd
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMarkupListEndphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_markupListEndphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$markupListEndphp php=php php$thisphp-php>getOptionphp(php'markupListEndphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListEndphp(php$thisphp-php>php_defaultsphp[php'markupListEndphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListEndphp(php$markupListEndphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'markupListEndphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupListEndphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp markupListEnd
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$markupListEnd
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setMarkupListEndphp(php$markupListEndphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupListEndphp php=php php$markupListEndphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupListItemStart
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMarkupListItemStartphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_markupListItemStartphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$markupListItemStartphp php=php php$thisphp-php>getOptionphp(php'markupListItemStartphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListItemStartphp(php$thisphp-php>php_defaultsphp[php'markupListItemStartphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListItemStartphp(php$markupListItemStartphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'markupListItemStartphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupListItemStartphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp markupListItemStart
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$markupListItemStart
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setMarkupListItemStartphp(php$markupListItemStartphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupListItemStartphp php=php php$markupListItemStartphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp markupListItemEnd
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMarkupListItemEndphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_markupListItemEndphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$markupListItemEndphp php=php php$thisphp-php>getOptionphp(php'markupListItemEndphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListItemEndphp(php$thisphp-php>php_defaultsphp[php'markupListItemEndphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setMarkupListItemEndphp(php$markupListItemEndphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'markupListItemEndphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_markupListItemEndphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp markupListItemEnd
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$markupListItemEnd
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setMarkupListItemEndphp(php$markupListItemEndphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_markupListItemEndphp php=php php$markupListItemEndphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp ignoreSubForms
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp ignoreSubFormsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_ignoreSubFormsphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$ignoreSubFormsphp php=php php$thisphp-php>getOptionphp(php'ignoreSubFormsphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setIgnoreSubFormsphp(php$thisphp-php>php_defaultsphp[php'ignoreSubFormsphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setIgnoreSubFormsphp(php$ignoreSubFormsphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'ignoreSubFormsphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_ignoreSubFormsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp ignoreSubForms
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$ignoreSubForms
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setIgnoreSubFormsphp(php$ignoreSubFormsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_ignoreSubFormsphp php=php php(boolphp)php php$ignoreSubFormsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp showCustomFormErrors
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getShowCustomFormErrorsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_showCustomFormErrorsphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$howphp php=php php php$thisphp-php>getOptionphp(php'showCustomFormErrorsphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setShowCustomFormErrorsphp(php$thisphp-php>php_defaultsphp[php'showCustomFormErrorsphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setShowCustomFormErrorsphp(php$showphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'showCustomFormErrorsphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_showCustomFormErrorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp showCustomFormErrors
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$showCustomFormErrors
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setShowCustomFormErrorsphp(php$showCustomFormErrorsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_showCustomFormErrorsphp php=php php(boolphp)php$showCustomFormErrorsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp onlyCustomFormErrors
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp getOnlyCustomFormErrorsphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_onlyCustomFormErrorsphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php=php=php=php php(php$showphp php=php php php$thisphp-php>getOptionphp(php'onlyCustomFormErrorsphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setOnlyCustomFormErrorsphp(php$thisphp-php>php_defaultsphp[php'onlyCustomFormErrorsphp'php]php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>setOnlyCustomFormErrorsphp(php$showphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'onlyCustomFormErrorsphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_onlyCustomFormErrorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp onlyCustomFormErrorsphp,php whetherphp tophp displayphp elementsphp messages
php php php php php php*php inphp additionphp tophp customphp formphp messagesphp.
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$onlyCustomFormErrors
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_FormErrors
php php php php php php*php/
php php php php publicphp functionphp setOnlyCustomFormErrorsphp(php$onlyCustomFormErrorsphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_onlyCustomFormErrorsphp php=php php(boolphp)php$onlyCustomFormErrorsphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Renderphp elementphp label
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Formphp_Elementphp php$element
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderLabelphp(Zendphp_Formphp_Elementphp php$elementphp,php Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$labelphp php=php php$elementphp-php>getLabelphp(php)php;
php php php php php php php php ifphp php(emptyphp(php$labelphp)php)php php{
php php php php php php php php php php php php php$labelphp php=php php$elementphp-php>getNamephp(php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>getMarkupElementLabelStartphp(php)
php php php php php php php php php php php php php php.php php$viewphp-php>escapephp(php$labelphp)
php php php php php php php php php php php php php php.php php$thisphp-php>getMarkupElementLabelEndphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Recursephp throughphp aphp formphp objectphp,php renderingphp errors
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Formphp php$form
php php php php php php*php php@paramphp php Zendphp_Viewphp_Interfacephp php$view
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_recurseFormphp(Zendphp_Formphp php$formphp,php Zendphp_Viewphp_Interfacephp php$viewphp)
php php php php php{
php php php php php php php php php$contentphp php=php php'php'php;

php php php php php php php php php$customphp php=php php$formphp-php>getCustomMessagesphp(php)php;
php php php php php php php php ifphp php(php$thisphp-php>getShowCustomFormErrorsphp(php)php php&php&php countphp(php$customphp)php)php php{
php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>getMarkupListItemStartphp(php)
php php php php php php php php php php php php php php php php php php php php php php.php php php$viewphp-php>formErrorsphp(php$customphp,php php$thisphp-php>getOptionsphp(php)php)
php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>getMarkupListItemEndphp(php)php;
php php php php php php php php php}
php php php php php php php php foreachphp php(php$formphp-php>getElementsAndSubFormsOrderedphp(php)php asphp php$subitemphp)php php{
php php php php php php php php php php php php ifphp php(php$subitemphp instanceofphp Zendphp_Formphp_Elementphp php&php&php php!php$thisphp-php>getOnlyCustomFormErrorsphp(php)php)php php{
php php php php php php php php php php php php php php php php php$messagesphp php=php php$subitemphp-php>getMessagesphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(countphp(php$messagesphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$subitemphp-php>setViewphp(php$viewphp)php;
php php php php php php php php php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>getMarkupListItemStartphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>renderLabelphp(php$subitemphp,php php$viewphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$viewphp-php>formErrorsphp(php$messagesphp,php php$thisphp-php>getOptionsphp(php)php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php php$thisphp-php>getMarkupListItemEndphp(php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}php elsephp ifphp php(php$subitemphp instanceofphp Zendphp_Formphp php&php&php php!php$thisphp-php>ignoreSubFormsphp(php)php)php php{
php php php php php php php php php php php php php php php php php$contentphp php.php=php php$thisphp-php>getMarkupListStartphp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>php_recurseFormphp(php$subitemphp,php php$viewphp)
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php$thisphp-php>getMarkupListEndphp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$contentphp;
php php php php php}
php}
