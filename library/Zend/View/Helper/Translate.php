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
php php*php php@versionphp php php php php$Idphp:php Translatephp.phpphp php2php0php1php4php0php php2php0php1php0php-php0php1php-php0php8php php0php5php:php2php1php:php0php4Zphp thomasphp php$
php php*php/

php/php*php*php Zendphp_Localephp php*php/
requirephp_oncephp php'Zendphp/Localephp.phpphp'php;

php/php*php*php Zendphp_Viewphp_Helperphp_Abstractphp.phpphp php*php/
requirephp_oncephp php'Zendphp/Viewphp/Helperphp/Abstractphp.phpphp'php;

php/php*php*
php php*php Translationphp viewphp helper
php php*
php php*php php@categoryphp php Zend
php php*php php@packagephp php php Zendphp_View
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Translatephp extendsphp Zendphp_Viewphp_Helperphp_Abstract
php{
php php php php php/php*php*
php php php php php php*php Translationphp object
php php php php php php*
php php php php php php*php php@varphp Zendphp_Translatephp_Adapter
php php php php php php*php/
php php php php protectedphp php$php_translatorphp;

php php php php php/php*php*
php php php php php php*php Constructorphp forphp manuallyphp handling
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp php$translatephp Instancephp ofphp Zendphp_Translate
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$translatephp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$translatephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$thisphp-php>setTranslatorphp(php$translatephp)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Translatephp aphp message
php php php php php php*php Youphp canphp givephp multiplephp paramsphp orphp anphp arrayphp ofphp paramsphp.
php php php php php php*php Ifphp youphp wantphp tophp outputphp anotherphp localephp justphp setphp itphp asphp lastphp singlephp parameter
php php php php php php*php Examplephp php1php:php translatephp(php'php%php1php\php$sphp php+php php%php2php\php$sphp'php,php php$valuephp1php,php php$valuephp2php,php php$localephp)php;
php php php php php php*php Examplephp php2php:php translatephp(php'php%php1php\php$sphp php+php php%php2php\php$sphp'php,php arrayphp(php$valuephp1php,php php$valuephp2php)php,php php$localephp)php;
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$messageidphp Idphp ofphp thephp messagephp tophp bephp translated
php php php php php php*php php@returnphp stringphp|Zendphp_Viewphp_Helperphp_Translatephp Translatedphp message
php php php php php php*php/
php php php php publicphp functionphp translatephp(php$messageidphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$messageidphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php returnphp php$thisphp;
php php php php php php php php php}

php php php php php php php php php$translatephp php=php php$thisphp-php>getTranslatorphp(php)php;
php php php php php php php php php$optionsphp php php php=php funcphp_getphp_argsphp(php)php;

php php php php php php php php arrayphp_shiftphp(php$optionsphp)php;
php php php php php php php php php$countphp php php=php countphp(php$optionsphp)php;
php php php php php php php php php$localephp php=php nullphp;
php php php php php php php php ifphp php(php$countphp php>php php0php)php php{
php php php php php php php php php php php php ifphp php(Zendphp_Localephp:php:isLocalephp(php$optionsphp[php(php$countphp php-php php1php)php]php,php nullphp,php falsephp)php php!php=php=php falsephp)php php{
php php php php php php php php php php php php php php php php php$localephp php=php arrayphp_popphp(php$optionsphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php ifphp php(php(countphp(php$optionsphp)php php=php=php=php php1php)php andphp php(isphp_arrayphp(php$optionsphp[php0php]php)php php=php=php=php truephp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp[php0php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$translatephp php!php=php=php nullphp)php php{
php php php php php php php php php php php php php$messageidphp php=php php$translatephp-php>translatephp(php$messageidphp,php php$localephp)php;
php php php php php php php php php}

php php php php php php php php ifphp php(countphp(php$optionsphp)php php=php=php=php php0php)php php{
php php php php php php php php php php php php returnphp php$messageidphp;
php php php php php php php php php}

php php php php php php php php returnphp vsprintfphp(php$messageidphp,php php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp aphp translationphp Adapterphp forphp translation
php php php php php php*
php php php php php php*php php@paramphp php Zendphp_Translatephp|Zendphp_Translatephp_Adapterphp php$translatephp Instancephp ofphp Zendphp_Translate
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp Whenphp nophp orphp aphp falsephp instancephp wasphp set
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Translate
php php php php php php*php/
php php php php publicphp functionphp setTranslatorphp(php$translatephp)
php php php php php{
php php php php php php php php ifphp php(php$translatephp instanceofphp Zendphp_Translatephp_Adapterphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatephp;
php php php php php php php php php}php elsephp ifphp php(php$translatephp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_translatorphp php=php php$translatephp-php>getAdapterphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Youphp mustphp setphp anphp instancephp ofphp Zendphp_Translatephp orphp Zendphp_Translatephp_Adapterphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp translationphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translatephp_Adapterphp|null
php php php php php php*php/
php php php php publicphp functionphp getTranslatorphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_translatorphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Registryphp.phpphp'php;
php php php php php php php php php php php php ifphp php(Zendphp_Registryphp:php:isRegisteredphp(php'Zendphp_Translatephp'php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>setTranslatorphp(Zendphp_Registryphp:php:getphp(php'Zendphp_Translatephp'php)php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_translatorphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setphp'sphp anphp newphp localephp forphp allphp furtherphp translations
php php php php php php*
php php php php php php*php php@paramphp php stringphp|Zendphp_Localephp php$localephp Newphp localephp tophp set
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp Whenphp nophp Zendphp_Translatephp instancephp wasphp set
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Translate
php php php php php php*php/
php php php php publicphp functionphp setLocalephp(php$localephp php=php nullphp)
php php php php php{
php php php php php php php php php$translatephp php=php php$thisphp-php>getTranslatorphp(php)php;
php php php php php php php php ifphp php(php$translatephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Youphp mustphp setphp anphp instancephp ofphp Zendphp_Translatephp orphp Zendphp_Translatephp_Adapterphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php php$translatephp-php>setLocalephp(php$localephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp setphp localephp forphp translations
php php php php php php*
php php php php php php*php php@throwsphp Zendphp_Viewphp_Exceptionphp Whenphp nophp Zendphp_Translatephp instancephp wasphp set
php php php php php php*php php@returnphp stringphp|Zendphp_Locale
php php php php php php*php/
php php php php publicphp functionphp getLocalephp(php)
php php php php php{
php php php php php php php php php$translatephp php=php php$thisphp-php>getTranslatorphp(php)php;
php php php php php php php php ifphp php(php$translatephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Viewphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php$ephp php=php newphp Zendphp_Viewphp_Exceptionphp(php'Youphp mustphp setphp anphp instancephp ofphp Zendphp_Translatephp orphp Zendphp_Translatephp_Adapterphp'php)php;
php php php php php php php php php php php php php$ephp-php>setViewphp(php$thisphp-php>viewphp)php;
php php php php php php php php php php php php throwphp php$ephp;
php php php php php php php php php}

php php php php php php php php returnphp php$translatephp-php>getLocalephp(php)php;
php php php php php}
php}
