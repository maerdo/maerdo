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
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@subpackagephp Framework
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Responsephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php{
php php php php php/php*php*
php php php php php php*php php@varphp callbackphp|null
php php php php php php*php/
php php php php protectedphp php$php_callbackphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_contentphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Exception
php php php php php php*php/
php php php php protectedphp php$php_exceptionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_decoratorsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_defaultDecoratorOptionsphp php=php arrayphp(php)php;

php php php php php/php*php*
php php php php php php*php setContentCallbackphp(php)
php php php php php php*
php php php php php php*php php@paramphp callbackphp php$callback
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php publicphp functionphp setContentCallbackphp(php$callbackphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_callablephp(php$callbackphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Frameworkphp/Clientphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Frameworkphp_Clientphp_Exceptionphp(php'Thephp callbackphp providedphp isphp notphp callablephp'php)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_callbackphp php=php php$callbackphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setContentphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php publicphp functionphp setContentphp(php$contentphp,php Arrayphp php$decoratorOptionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$thisphp-php>php_applyDecoratorsphp(php$contentphp,php php$decoratorOptionsphp)php;

php php php php php php php php php$thisphp-php>php_contentphp php=php arrayphp(php)php;
php php php php php php php php php$thisphp-php>appendContentphp(php$contentphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php appendCallback
php php php php php php*
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php publicphp functionphp appendContentphp(php$contentphp,php Arrayphp php$decoratorOptionsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php php$contentphp php=php php$thisphp-php>php_applyDecoratorsphp(php$contentphp,php php$decoratorOptionsphp)php;

php php php php php php php php ifphp php(php$thisphp-php>php_callbackphp php!php=php=php nullphp)php php{
php php php php php php php php php php php php callphp_userphp_funcphp(php$thisphp-php>php_callbackphp,php php$contentphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentphp[php]php php=php php$contentphp;

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php setDefaultDecoratorOptionsphp(php)
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$decoratorOptions
php php php php php php*php php@paramphp boolphp php$mergeIntoExisting
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php publicphp functionphp setDefaultDecoratorOptionsphp(Arrayphp php$decoratorOptionsphp,php php$mergeIntoExistingphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$mergeIntoExistingphp php=php=php falsephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_defaultDecoratorOptionsphp php=php arrayphp(php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_defaultDecoratorOptionsphp php=php arrayphp_mergephp(php$thisphp-php>php_defaultDecoratorOptionsphp,php php$decoratorOptionsphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentphp(php)
php php php php php{
php php php php php php php php returnphp implodephp(php'php'php,php php$thisphp-php>php_contentphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php isExceptionphp(php)
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isExceptionphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_exceptionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php setExceptionphp(php)
php php php php php php*
php php php php php php*php php@paramphp Exceptionphp php$exception
php php php php php php*php php@returnphp Zendphp_Toolphp_Frameworkphp_Clientphp_Response
php php php php php php*php/
php php php php publicphp functionphp setExceptionphp(Exceptionphp php$exceptionphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_exceptionphp php=php php$exceptionphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getExceptionphp(php)
php php php php php php*
php php php php php php*php php@returnphp Exception
php php php php php php*php/
php php php php publicphp functionphp getExceptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_exceptionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp Contentphp Decorator
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Clientphp_Responsephp_ContentDecoratorphp_Interfacephp php$contentDecorator
php php php php php php*php php@returnphp unknown
php php php php php php*php/
php php php php publicphp functionphp addContentDecoratorphp(Zendphp_Toolphp_Frameworkphp_Clientphp_Responsephp_ContentDecoratorphp_Interfacephp php$contentDecoratorphp)
php php php php php{
php php php php php php php php php$decoratorNamephp php=php strtolowerphp(php$contentDecoratorphp-php>getNamephp(php)php)php;
php php php php php php php php php$thisphp-php>php_decoratorsphp[php$decoratorNamephp]php php=php php$contentDecoratorphp;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentDecoratorsphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getContentDecoratorsphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_decoratorsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_toStringphp(php)php tophp castphp tophp aphp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php(stringphp)php implodephp(php'php'php,php php$thisphp-php>php_contentphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_applyDecoratorsphp(php)php applyphp aphp groupphp ofphp decorators
php php php php php php*
php php php php php php*php php@paramphp stringphp php$content
php php php php php php*php php@paramphp arrayphp php$decoratorOptions
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php protectedphp functionphp php_applyDecoratorsphp(php$contentphp,php Arrayphp php$decoratorOptionsphp)
php php php php php{
php php php php php php php php php$optionsphp php=php arrayphp_mergephp(php$thisphp-php>php_defaultDecoratorOptionsphp,php php$decoratorOptionsphp)php;

php php php php php php php php php$optionsphp php=php arrayphp_changephp_keyphp_casephp(php$optionsphp,php CASEphp_LOWERphp)php;

php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php foreachphp php(php$thisphp-php>php_decoratorsphp asphp php$decoratorNamephp php=php>php php$decoratorphp)php php{
php php php php php php php php php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$decoratorNamephp,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php php php php php php$contentphp php=php php$decoratorphp-php>decoratephp(php$contentphp,php php$optionsphp[php$decoratorNamephp]php)php;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$contentphp;

php php php php php}

php}
