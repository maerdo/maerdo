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
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Navigationphp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Resourcephp forphp settingphp navigationphp structure
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@authorphp php php php php Dolfphp Schimmel
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Navigation
php php php php extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php constphp DEFAULTphp_REGISTRYphp_KEYphp php=php php'Zendphp_Navigationphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Navigation
php php php php php php*php/
php php php php protectedphp php$php_containerphp;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Navigation
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php ifphp php(php!php$thisphp-php>php_containerphp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php php php php php php$pagesphp php=php issetphp(php$optionsphp[php'pagesphp'php]php)php php?php php$optionsphp[php'pagesphp'php]php php:php arrayphp(php)php;
php php php php php php php php php php php php php$thisphp-php>php_containerphp php=php newphp Zendphp_Navigationphp(php$pagesphp)php;

php php php php php php php php php php php php ifphp(issetphp(php$optionsphp[php'defaultPageTypephp'php]php)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Navigationphp_Pagephp:php:setDefaultPageTypephp(php$optionsphp[php'defaultPageTypephp'php]php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>storephp(php)php;
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storesphp navigationphp containerphp inphp registryphp orphp Navigationphp viewphp helper
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp storephp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php ifphp php(issetphp(php$optionsphp[php'storagephp'php]php[php'registryphp'php]php)php php&php&
php php php php php php php php php php php php php$optionsphp[php'storagephp'php]php[php'registryphp'php]php php=php=php truephp)php php{
php php php php php php php php php php php php php$thisphp-php>php_storeRegistryphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_storeHelperphp(php)php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Storesphp navigationphp containerphp inphp thephp registry
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_storeRegistryphp(php)
php php php php php{
php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;
php php php php php php php php ifphp(issetphp(php$optionsphp[php'storagephp'php]php[php'registryphp'php]php[php'keyphp'php]php)php php&php&
php php php php php php php php php php php php!isphp_numericphp(php$optionsphp[php'storagephp'php]php[php'registryphp'php]php[php'keyphp'php]php)php)php php/php/php seephp ZFphp-php7php4php6php1
php php php php php php php php php{
php php php php php php php php php php php php$keyphp php=php php$optionsphp[php'storagephp'php]php[php'registryphp'php]php[php'keyphp'php]php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$keyphp php=php selfphp:php:DEFAULTphp_REGISTRYphp_KEYphp;
php php php php php php php php php}

php php php php php php php php Zendphp_Registryphp:php:setphp(php$keyphp,php$thisphp-php>getContainerphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Storesphp navigationphp containerphp inphp thephp Navigationphp helper
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_storeHelperphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>getBootstrapphp(php)php-php>bootstrapphp(php'viewphp'php)php;
php php php php php php php php php$viewphp php=php php$thisphp-php>getBootstrapphp(php)php-php>viewphp;
php php php php php php php php php$viewphp-php>getHelperphp(php'navigationphp'php)php-php>navigationphp(php$thisphp-php>getContainerphp(php)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp navigationphp container
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Navigation
php php php php php php*php/
php php php php publicphp functionphp getContainerphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_containerphp;
php php php php php}
php}
