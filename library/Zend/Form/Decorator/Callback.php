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
php php*php Zendphp_Formphp_Decoratorphp_Callback
php php*
php php*php Executephp anphp arbitraryphp callbackphp tophp decoratephp anphp elementphp.php Callbacksphp shouldphp take
php php*php threephp argumentsphp,php php$contentphp,php php$elementphp,php andphp php$optionsphp:
php php*
php php*php functionphp mycallbackphp(php$contentphp,php php$elementphp,php arrayphp php$optionsphp)
php php*php php{
php php*php php}
php php*
php php*php andphp shouldphp returnphp aphp stringphp.php php(php$optionsphp arephp whateverphp optionsphp werephp providedphp to
php php*php thephp decoratorphp.php)
php php*
php php*php Tophp specifyphp aphp callbackphp,php passphp aphp validphp callbackphp asphp thephp php'callbackphp'php optionphp.
php php*
php php*php Callbackphp resultsphp willphp bephp eitherphp appendedphp,php prependedphp,php orphp replacephp thephp provided
php php*php contentphp.php Tophp replacephp thephp contentphp,php specifyphp aphp placementphp ofphp booleanphp falsephp;
php php*php defaultsphp tophp appendphp contentphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Form
php php*php php@subpackagephp Decorator
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Callbackphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/
classphp Zendphp_Formphp_Decoratorphp_Callbackphp extendsphp Zendphp_Formphp_Decoratorphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Callback
php php php php php php*php php@varphp stringphp|array
php php php php php php*php/
php php php php protectedphp php$php_callbackphp;

php php php php php/php*php*
php php php php php php*php Setphp callback
php php php php php php*
php php php php php php*php php@paramphp php callbackphp php$callback
php php php php php php*php php@returnphp Zendphp_Formphp_Decoratorphp_Callback
php php php php php php*php php@throwsphp Zendphp_Formphp_Exception
php php php php php php*php/
php php php php publicphp functionphp setCallbackphp(php$callbackphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Formphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Formphp_Exceptionphp(php'Invalidphp callbackphp providedphp tophp callbackphp decoratorphp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_callbackphp php=php php$callbackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp registeredphp callback
php php php php php php*
php php php php php php*php Ifphp notphp previouslyphp registeredphp,php checksphp tophp seephp ifphp itphp existsphp inphp registered
php php php php php php*php optionsphp.
php php php php php php*
php php php php php php*php php@returnphp nullphp|stringphp|array
php php php php php php*php/
php php php php publicphp functionphp getCallbackphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_callbackphp)php php{
php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php(php$callbackphp php=php php$thisphp-php>getOptionphp(php'callbackphp'php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setCallbackphp(php$callbackphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>removeOptionphp(php'callbackphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_callbackphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Render
php php php php php php*
php php php php php php*php Ifphp nophp callbackphp registeredphp,php returnsphp callbackphp.php Otherwisephp,php getsphp return
php php php php php php*php valuephp ofphp callbackphp andphp eitherphp appendsphp,php prependsphp,php orphp replacesphp passedphp in
php php php php php php*php contentphp.
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$content
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp renderphp(php$contentphp)
php php php php php{
php php php php php php php php php$callbackphp php=php php$thisphp-php>getCallbackphp(php)php;
php php php php php php php php ifphp php(nullphp php=php=php=php php$callbackphp)php php{
php php php php php php php php php php php php returnphp php$contentphp;
php php php php php php php php php}

php php php php php php php php php$placementphp php=php php$thisphp-php>getPlacementphp(php)php;
php php php php php php php php php$separatorphp php=php php$thisphp-php>getSeparatorphp(php)php;

php php php php php php php php php$responsephp php=php callphp_userphp_funcphp(php$callbackphp,php php$contentphp,php php$thisphp-php>getElementphp(php)php,php php$thisphp-php>getOptionsphp(php)php)php;

php php php php php php php php switchphp php(php$placementphp)php php{
php php php php php php php php php php php php casephp selfphp:php:APPENDphp:
php php php php php php php php php php php php php php php php returnphp php$contentphp php.php php$separatorphp php.php php$responsephp;
php php php php php php php php php php php php casephp selfphp:php:PREPENDphp:
php php php php php php php php php php php php php php php php returnphp php$responsephp php.php php$separatorphp php.php php$contentphp;
php php php php php php php php php php php php defaultphp:
php php php php php php php php php php php php php php php php php/php/php replacephp content
php php php php php php php php php php php php php php php php returnphp php$responsephp;
php php php php php php php php php}
php php php php php}
php}
