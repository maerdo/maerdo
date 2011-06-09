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
php php*php php@versionphp php php php php$Idphp:php SubmitButtonphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Dojophp_Viewphp_Helperphp_Buttonphp php*php/
requirephp_oncephp php'Zendphp/Dojophp/Viewphp/Helperphp/Buttonphp.phpphp'php;

php/php*php*
php php*php Dojophp Buttonphp dijitphp tiedphp tophp submitphp input
php php*
php php*php php@usesphp php php php php php php Zendphp_Dojophp_Viewphp_Helperphp_Button
php php*php php@packagephp php php php Zendphp_Dojo
php php*php php@subpackagephp View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php php*php/
classphp Zendphp_Dojophp_Viewphp_Helperphp_SubmitButtonphp extendsphp Zendphp_Dojophp_Viewphp_Helperphp_Button
php{
php php php php php/php*php*
php php php php php php*php php@varphp stringphp Submitphp input
php php php php php php*php/
php php php php protectedphp php$php_elementTypephp php=php php'submitphp'php;

php php php php php/php*php*
php php php php php php*php dijitphp.formphp.Buttonphp tiedphp tophp submitphp input
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$id
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@paramphp php arrayphp php$paramsphp php Parametersphp tophp usephp forphp dijitphp creation
php php php php php php*php php@paramphp php arrayphp php$attribsphp HTMLphp attributes
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp submitButtonphp(php$idphp,php php$valuephp php=php nullphp,php arrayphp php$paramsphp php=php arrayphp(php)php,php arrayphp php$attribsphp php=php arrayphp(php)php)
php php php php php{
php php php php php php php php ifphp php(php!arrayphp_keyphp_existsphp(php'labelphp'php,php php$paramsphp)php)php php{
php php php php php php php php php php php php php$paramsphp[php'labelphp'php]php php=php php$valuephp;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'labelphp'php]php)php php&php&php php!emptyphp(php$paramsphp[php'contentphp'php]php)php)php php{
php php php php php php php php php php php php php$paramsphp[php'labelphp'php]php php=php php$paramsphp[php'contentphp'php]php;
php php php php php php php php php php php php php$valuephp php=php php$paramsphp[php'contentphp'php]php;
php php php php php php php php php}
php php php php php php php php ifphp php(emptyphp(php$paramsphp[php'labelphp'php]php)php php&php&php php!emptyphp(php$attribsphp[php'contentphp'php]php)php)php php{
php php php php php php php php php php php php php$paramsphp[php'labelphp'php]php php=php php$attribsphp[php'contentphp'php]php;
php php php php php php php php php php php php php$valuephp php=php php$attribsphp[php'contentphp'php]php;
php php php php php php php php php php php php unsetphp(php$attribsphp[php'contentphp'php]php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$thisphp-php>php_createFormElementphp(php$idphp,php php$valuephp,php php$paramsphp,php php$attribsphp)php;
php php php php php}
php}
