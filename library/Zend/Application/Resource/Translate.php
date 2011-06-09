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
php php*php php@versionphp php php php php$Idphp:php Translatephp.phpphp php2php2php9php6php8php php2php0php1php0php-php0php9php-php1php8php php1php9php:php5php0php:php0php2Zphp intiilapaphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php/
requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/ResourceAbstractphp.phpphp'php;


php/php*php*
php php*php Resourcephp forphp settingphp translationphp options
php php*
php php*php php@usesphp php php php php php php Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Application
php php*php php@subpackagephp Resource
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Applicationphp_Resourcephp_Translatephp extendsphp Zendphp_Applicationphp_Resourcephp_ResourceAbstract
php{
php php php php constphp DEFAULTphp_REGISTRYphp_KEYphp php=php php'Zendphp_Translatephp'php;

php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Translate
php php php php php php*php/
php php php php protectedphp php$php_translatephp;

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Applicationphp_Resourcephp_Resource
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translate
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>getTranslatephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp translatephp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Translate
php php php php php php*php php@throwsphp Zendphp_Applicationphp_Resourcephp_Exceptionphp ifphp registryphp keyphp wasphp used
php php php php php php*php php php php php php php php php php alreadyphp butphp isphp nophp instancephp ofphp Zendphp_Translate
php php php php php php*php/
php php php php publicphp functionphp getTranslatephp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php php$thisphp-php>php_translatephp)php php{
php php php php php php php php php php php php php$optionsphp php=php php$thisphp-php>getOptionsphp(php)php;

php php php php php php php php php php php php ifphp php(php!issetphp(php$optionsphp[php'contentphp'php]php)php php&php&php php!issetphp(php$optionsphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(php'Nophp translationphp sourcephp dataphp providedphp.php'php)php;
php php php php php php php php php php php php php}php elsephp ifphp php(arrayphp_keyphp_existsphp(php'contentphp'php,php php$optionsphp)php php&php&php arrayphp_keyphp_existsphp(php'dataphp'php,php php$optionsphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(
php php php php php php php php php php php php php php php php php php php php php'Conflictphp onphp translationphp sourcephp dataphp:php choosephp onlyphp onephp keyphp betweenphp contentphp andphp dataphp.php'
php php php php php php php php php php php php php php php php php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(emptyphp(php$optionsphp[php'adapterphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'adapterphp'php]php php=php Zendphp_Translatephp:php:ANphp_ARRAYphp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'dataphp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$optionsphp[php'contentphp'php]php php=php php$optionsphp[php'dataphp'php]php;
php php php php php php php php php php php php php php php php unsetphp(php$optionsphp[php'dataphp'php]php)php;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(issetphp(php$optionsphp[php'optionsphp'php]php)php)php php{
php php php php php php php php php php php php php php php php foreachphp(php$optionsphp[php'optionsphp'php]php asphp php$keyphp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php php php php php php php php php$optionsphp[php$keyphp]php php=php php$valuephp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!emptyphp(php$optionsphp[php'cachephp'php]php)php php&php&php isphp_stringphp(php$optionsphp[php'cachephp'php]php)php)php php{
php php php php php php php php php php php php php php php php php$bootstrapphp php=php php$thisphp-php>getBootstrapphp(php)php;
php php php php php php php php php php php php php php php php ifphp php(php$bootstrapphp instanceofphp Zendphp_Applicationphp_Bootstrapphp_ResourceBootstrapperphp php&php&
php php php php php php php php php php php php php php php php php php php php php$bootstrapphp-php>hasPluginResourcephp(php'CacheManagerphp'php)
php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php$cacheManagerphp php=php php$bootstrapphp-php>bootstrapphp(php'CacheManagerphp'php)
php php php php php php php php php php php php php php php php php php php php php php php php php-php>getResourcephp(php'CacheManagerphp'php)php;
php php php php php php php php php php php php php php php php php php php php ifphp php(nullphp php!php=php=php php$cacheManagerphp php&php&
php php php php php php php php php php php php php php php php php php php php php php php php php$cacheManagerphp-php>hasCachephp(php$optionsphp[php'cachephp'php]php)
php php php php php php php php php php php php php php php php php php php php php)php php{
php php php php php php php php php php php php php php php php php php php php php php php php php$optionsphp[php'cachephp'php]php php=php php$cacheManagerphp-php>getCachephp(php$optionsphp[php'cachephp'php]php)php;
php php php php php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$keyphp php=php php(issetphp(php$optionsphp[php'registryphp_keyphp'php]php)php php&php&php php!isphp_numericphp(php$optionsphp[php'registryphp_keyphp'php]php)php)
php php php php php php php php php php php php php php php php php php?php php$optionsphp[php'registryphp_keyphp'php]
php php php php php php php php php php php php php php php php php php:php selfphp:php:DEFAULTphp_REGISTRYphp_KEYphp;
php php php php php php php php php php php php unsetphp(php$optionsphp[php'registryphp_keyphp'php]php)php;

php php php php php php php php php php php php ifphp(Zendphp_Registryphp:php:isRegisteredphp(php$keyphp)php)php php{
php php php php php php php php php php php php php php php php php$translatephp php=php Zendphp_Registryphp:php:getphp(php$keyphp)php;
php php php php php php php php php php php php php php php php ifphp(php!php$translatephp instanceofphp Zendphp_Translatephp)php php{
php php php php php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Applicationphp/Resourcephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Applicationphp_Resourcephp_Exceptionphp(php$key
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'php alreadyphp registeredphp inphp registryphp butphp isphp php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php'nophp instancephp ofphp Zendphp_Translatephp'php)php;
php php php php php php php php php php php php php php php php php}

php php php php php php php php php php php php php php php php php$translatephp-php>addTranslationphp(php$optionsphp)php;
php php php php php php php php php php php php php php php php php$thisphp-php>php_translatephp php=php php$translatephp;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_translatephp php=php newphp Zendphp_Translatephp(php$optionsphp)php;
php php php php php php php php php php php php php php php php Zendphp_Registryphp:php:setphp(php$keyphp,php php$thisphp-php>php_translatephp)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_translatephp;
php php php php php}
php}
