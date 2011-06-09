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
php php*php php@versionphp php php php php$Idphp:php ApplicationConfigFilephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Contextphp/Filesystemphp/Filephp.phpphp'php;

php/php*php*
php php*php Thisphp classphp isphp thephp frontphp mostphp classphp forphp utilizingphp Zendphp_Toolphp_Project
php php*
php php*php Aphp profilephp isphp aphp hierarchicalphp setphp ofphp resourcesphp thatphp keepphp trackphp of
php php*php itemsphp withinphp aphp specificphp projectphp.
php php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Tool
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ApplicationConfigFilephp extendsphp Zendphp_Toolphp_Projectphp_Contextphp_Filesystemphp_File
php{

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_filesystemNamephp php=php php'applicationphp.iniphp'php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contentphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php getNamephp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php'ApplicationConfigFilephp'php;
php php php php php}

php php php php php/php*php*
php php php php php php*php initphp(php)
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ApplicationConfigFile
php php php php php php*php/
php php php php publicphp functionphp initphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_typephp php=php php$thisphp-php>php_resourcephp-php>getAttributephp(php'typephp'php)php;
php php php php php php php php parentphp:php:initphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php getPersistentAttributesphp(php)
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getPersistentAttributesphp(php)
php php php php php{
php php php php php php php php returnphp arrayphp(php'typephp'php php=php>php php$thisphp-php>php_typephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentsphp(php)
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_contentphp php=php=php=php nullphp)php php{
php php php php php php php php php php php php ifphp php(filephp_existsphp(php$thisphp-php>getPathphp(php)php)php)php php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentphp php=php filephp_getphp_contentsphp(php$thisphp-php>getPathphp(php)php)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$thisphp-php>php_contentphp php=php php$thisphp-php>php_getDefaultContentsphp(php)php;
php php php php php php php php php php php php php}

php php php php php php php php php}

php php php php php php php php returnphp php$thisphp-php>php_contentphp;
php php php php php}

php php php php publicphp functionphp getAsZendConfigphp(php$sectionphp php=php php'productionphp'php)
php php php php php{
php php php php php php php php returnphp newphp Zendphp_Configphp_Iniphp(php$thisphp-php>getPathphp(php)php,php php$sectionphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php addStringItemphp(php)
php php php php php php*
php php php php php php*php php@paramphp stringphp php$key
php php php php php php*php php@paramphp stringphp php$value
php php php php php php*php php@paramphp stringphp php$section
php php php php php php*php php@paramphp boolphp php php php$quoteValue
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ApplicationConfigFile
php php php php php php*php/
php php php php publicphp functionphp addStringItemphp(php$keyphp,php php$valuephp,php php$sectionphp php=php php'productionphp'php,php php$quoteValuephp php=php truephp)
php php php php php{
php php php php php php php php php/php/php nullphp quotephp valuephp meansphp tophp autophp-detect
php php php php php php php php ifphp php(php$quoteValuephp php=php=php=php nullphp)php php{
php php php php php php php php php php php php php$quoteValuephp php=php pregphp_matchphp(php'php#php[php\php"php\php'php]php#php'php,php php$valuephp)php php?php falsephp php:php truephp;
php php php php php php php php php}

php php php php php php php php ifphp php(php$quoteValuephp php=php=php truephp)php php{
php php php php php php php php php php php php php$valuephp php=php php'php"php'php php.php php$valuephp php.php php'php"php'php;
php php php php php php php php php}

php php php php php php php php php$contentLinesphp php=php pregphp_splitphp(php'php#php[php\nphp\rphp]php#php'php,php php$thisphp-php>getContentsphp(php)php)php;

php php php php php php php php php$newLinesphp php=php arrayphp(php)php;
php php php php php php php php php$insideSectionphp php=php falsephp;

php php php php php php php php foreachphp php(php$contentLinesphp asphp php$contentLineIndexphp php=php>php php$contentLinephp)php php{

php php php php php php php php php php php php ifphp php(php$insideSectionphp php=php=php=php falsephp php&php&php pregphp_matchphp(php'php#php^php\php[php'php php.php php$sectionphp php.php php'php#php'php,php php$contentLinephp)php)php php{
php php php php php php php php php php php php php php php php php$insideSectionphp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$insideSectionphp)php php{
php php php php php php php php php php php php php php php php php/php/php ifphp itsphp blankphp,php orphp aphp sectionphp heading
php php php php php php php php php php php php php php php php ifphp php(php(trimphp(php$contentLinephp)php php=php=php nullphp)php php|php|php php(issetphp(php$contentLinesphp[php$contentLineIndexphp php+php php1php]php{php0php}php)php php&php&php php$contentLinesphp[php$contentLineIndexphp php+php php1php]php{php0php}php php=php=php php'php[php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$newLinesphp[php]php php=php php$keyphp php.php php'php php=php php'php php.php php$valuephp;
php php php php php php php php php php php php php php php php php php php php php$insideSectionphp php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php php$newLinesphp[php]php php=php php$contentLinephp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentphp php=php implodephp(php"php\nphp"php,php php$newLinesphp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$item
php php php php php php*php php@paramphp stringphp php$section
php php php php php php*php php@paramphp boolphp php$quoteValue
php php php php php php*php php@returnphp Zendphp_Toolphp_Projectphp_Contextphp_Zfphp_ApplicationConfigFile
php php php php php php*php/
php php php php publicphp functionphp addItemphp(php$itemphp,php php$sectionphp php=php php'productionphp'php,php php$quoteValuephp php=php truephp)
php php php php php{
php php php php php php php php php$stringItemsphp php=php arrayphp(php)php;
php php php php php php php php php$stringValuesphp php=php arrayphp(php)php;
php php php php php php php php php$configKeyNamesphp php=php arrayphp(php)php;

php php php php php php php php php$riiphp php=php newphp RecursiveIteratorIteratorphp(
php php php php php php php php php php php php newphp RecursiveArrayIteratorphp(php$itemphp)php,
php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRST
php php php php php php php php php php php php php)php;

php php php php php php php php php$lastDepthphp php=php php0php;

php php php php php php php php php/php/php loopphp throughphp arrayphp structurephp recursivelyphp tophp createphp properphp keys
php php php php php php php php foreachphp php(php$riiphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$lastDepthphp php=php php$riiphp-php>getDepthphp(php)php;

php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$configKeyNamesphp,php php$namephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$stringItemsphp[php]php php=php implodephp(php'php.php'php,php php$configKeyNamesphp)php php.php php'php.php'php php.php php$namephp;
php php php php php php php php php php php php php php php php php$stringValuesphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$stringItemsphp asphp php$stringItemIndexphp php=php>php php$stringItemphp)php php{
php php php php php php php php php php php php php$thisphp-php>addStringItemphp(php$stringItemphp,php php$stringValuesphp[php$stringItemIndexphp]php,php php$sectionphp,php php$quoteValuephp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php publicphp functionphp removeStringItemphp(php$keyphp,php php$sectionphp php=php php'productionphp'php)
php php php php php{
php php php php php php php php php$contentLinesphp php=php filephp(php$thisphp-php>getPathphp(php)php)php;

php php php php php php php php php$newLinesphp php=php arrayphp(php)php;
php php php php php php php php php$insideSectionphp php=php falsephp;

php php php php php php php php foreachphp php(php$contentLinesphp asphp php$contentLineIndexphp php=php>php php$contentLinephp)php php{

php php php php php php php php php php php php ifphp php(php$insideSectionphp php=php=php=php falsephp php&php&php pregphp_matchphp(php'php#php^php\php[php'php php.php php$sectionphp php.php php'php#php'php,php php$contentLinephp)php)php php{
php php php php php php php php php php php php php php php php php$insideSectionphp php=php truephp;
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php$insideSectionphp)php php{
php php php php php php php php php php php php php php php php php/php/php ifphp itsphp blankphp,php orphp aphp sectionphp heading
php php php php php php php php php php php php php php php php ifphp php(php(trimphp(php$contentLinephp)php php=php=php nullphp)php php|php|php php(php$contentLinesphp[php$contentLineIndexphp php+php php1php]php[php0php]php php=php=php php'php[php'php)php)php php{
php php php php php php php php php php php php php php php php php php php php php$insideSectionphp php=php nullphp;
php php php php php php php php php php php php php php php php php}
php php php php php php php php php php php php php}

php php php php php php php php php php php php ifphp php(php!pregphp_matchphp(php'php#php'php php.php php$keyphp php.php php'php\sphp?php=php.php*php#php'php,php php$contentLinephp)php)php php{
php php php php php php php php php php php php php php php php php$newLinesphp[php]php php=php php$contentLinephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_contentphp php=php implodephp(php'php'php,php php$newLinesphp)php;
php php php php php}

php php php php publicphp functionphp removeItemphp(php$itemphp,php php$sectionphp php=php php'productionphp'php)
php php php php php{
php php php php php php php php php$stringItemsphp php=php arrayphp(php)php;
php php php php php php php php php$stringValuesphp php=php arrayphp(php)php;
php php php php php php php php php$configKeyNamesphp php=php arrayphp(php)php;

php php php php php php php php php$riiphp php=php newphp RecursiveIteratorIteratorphp(
php php php php php php php php php php php php newphp RecursiveArrayIteratorphp(php$itemphp)php,
php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRST
php php php php php php php php php php php php php)php;

php php php php php php php php php$lastDepthphp php=php php0php;

php php php php php php php php php/php/php loopphp throughphp arrayphp structurephp recursivelyphp tophp createphp properphp keys
php php php php php php php php foreachphp php(php$riiphp asphp php$namephp php=php>php php$valuephp)php php{
php php php php php php php php php php php php php$lastDepthphp php=php php$riiphp-php>getDepthphp(php)php;

php php php php php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php php php arrayphp_pushphp(php$configKeyNamesphp,php php$namephp)php;
php php php php php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php php php php php$stringItemsphp[php]php php=php implodephp(php'php.php'php,php php$configKeyNamesphp)php php.php php'php.php'php php.php php$namephp;
php php php php php php php php php php php php php php php php php$stringValuesphp[php]php php=php php$valuephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php foreachphp php(php$stringItemsphp asphp php$stringItemIndexphp php=php>php php$stringItemphp)php php{
php php php php php php php php php php php php php$thisphp-php>removeStringItemphp(php$stringItemphp,php php$sectionphp)php;
php php php php php php php php php}

php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php protectedphp functionphp php_getDefaultContentsphp(php)
php php php php php{

php php php php php php php php php$contentsphp php=<php<php<EOS
php[productionphp]
phpSettingsphp.displayphp_startupphp_errorsphp php=php php0
phpSettingsphp.displayphp_errorsphp php=php php0
includePathsphp.libraryphp php=php APPLICATIONphp_PATHphp php"php/php.php.php/libraryphp"
bootstrapphp.pathphp php=php APPLICATIONphp_PATHphp php"php/Bootstrapphp.phpphp"
bootstrapphp.classphp php=php php"Bootstrapphp"
appnamespacephp php=php php"Applicationphp"
resourcesphp.frontControllerphp.controllerDirectoryphp php=php APPLICATIONphp_PATHphp php"php/controllersphp"
resourcesphp.frontControllerphp.paramsphp.displayExceptionsphp php=php php0

php[stagingphp php:php productionphp]

php[testingphp php:php productionphp]
phpSettingsphp.displayphp_startupphp_errorsphp php=php php1
phpSettingsphp.displayphp_errorsphp php=php php1

php[developmentphp php:php productionphp]
phpSettingsphp.displayphp_startupphp_errorsphp php=php php1
phpSettingsphp.displayphp_errorsphp php=php php1
resourcesphp.frontControllerphp.paramsphp.displayExceptionsphp php=php php1

EOSphp;

php php php php php php php php returnphp php$contentsphp;
php php php php php}

php}
