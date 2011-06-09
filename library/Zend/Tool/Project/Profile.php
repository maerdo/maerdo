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
php php*php php@versionphp php php php php$Idphp:php Profilephp.phpphp php2php3php4php8php4php php2php0php1php0php-php1php2php-php1php0php php0php3php:php5php7php:php5php9Zphp mjhphp_caphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xml
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/FileParserphp/Xmlphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php php*php/
requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Resourcephp/Containerphp.phpphp'php;

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
classphp Zendphp_Toolphp_Projectphp_Profilephp extendsphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Container
php{

php php php php php/php*php*
php php php php php php*php php@varphp bool
php php php php php php*php/
php php php php protectedphp staticphp php$php_traverseEnabledphp php=php falsephp;

php php php php php/php*php*
php php php php php php*php Constructorphp,php standardphp usagephp wouldphp allowphp thephp settingphp ofphp options
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(php$optionsphp)php php{
php php php php php php php php php php php php php$thisphp-php>setOptionsphp(php$optionsphp)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_topResourcesphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_Resourcephp_Containerphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Processphp optionsphp andphp eitherphp setphp aphp profilephp propertyphp or
php php php php php php*php setphp aphp profilephp php'attributephp'
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$options
php php php php php php*php/
php php php php publicphp functionphp setOptionsphp(Arrayphp php$optionsphp)
php php php php php{
php php php php php php php php php$thisphp-php>setAttributesphp(php$optionsphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getIteratorphp(php)php php-php reqruiedphp byphp thephp RecursiveIteratorphp interface
php php php php php php*
php php php php php php*php php@returnphp RecursiveIteratorIterator
php php php php php php*php/
php php php php publicphp functionphp getIteratorphp(php)
php php php php php{
php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Profilephp/Iteratorphp/EnabledResourceFilterphp.phpphp'php;

php php php php php php php php returnphp newphp RecursiveIteratorIteratorphp(
php php php php php php php php php php php php newphp Zendphp_Toolphp_Projectphp_Profilephp_Iteratorphp_EnabledResourceFilterphp(php$thisphp)php,
php php php php php php php php php php php php RecursiveIteratorIteratorphp:php:SELFphp_FIRST
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php loadFromDataphp(php)php php-php Loadphp aphp profilephp fromphp dataphp providedphp byphp the
php php php php php php*php php'profilDataphp'php attribute
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp loadFromDataphp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_attributesphp[php'profileDataphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'loadFromDataphp(php)php mustphp havephp php"profileDataphp"php setphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$profileFileParserphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xmlphp(php)php;
php php php php php php php php php$profileFileParserphp-php>unserializephp(php$thisphp-php>php_attributesphp[php'profileDataphp'php]php,php php$thisphp)php;

php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php isLoadableFromFilephp(php)php php-php canphp aphp profilephp bephp loadedphp fromphp aphp file
php php php php php php*
php php php php php php*php wetherphp orphp notphp aphp profilephp canphp bephp loadedphp fromphp the
php php php php php php*php filephp inphp attributephp php'projectProfileFilephp'php,php orphp fromphp aphp filephp named
php php php php php php*php php'php.zfprojectphp.xmlphp'php insidephp aphp directoryphp inphp keyphp php'projectDirectoryphp'
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp isLoadableFromFilephp(php)
php php php php php{
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php)php php&php&php php!issetphp(php$thisphp-php>php_attributesphp[php'projectDirectoryphp'php]php)php)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php)php)php php{
php php php php php php php php php php php php php$projectProfileFilePathphp php=php php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$projectProfileFilePathphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$projectProfileFilePathphp php=php rtrimphp(php$thisphp-php>php_attributesphp[php'projectDirectoryphp'php]php,php php'php/php\php\php'php)php php.php php'php/php.zfprojectphp.xmlphp'php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$projectProfileFilePathphp)php)php php{
php php php php php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp truephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php loadFromFilephp(php)php php-php Loadphp dataphp fromphp file
php php php php php php*
php php php php php php*php thisphp attemptsphp tophp loadphp aphp projectphp profilephp filephp fromphp aphp varietyphp ofphp locationsphp depending
php php php php php php*php onphp whatphp informationphp thephp userphp providedphp viephp php$optionsphp orphp attributesphp,php specificallyphp the
php php php php php php*php php'projectDirectoryphp'php orphp php'projectProfileFilephp'
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp loadFromFilephp(php)
php php php php php{
php php php php php php php php php/php/php ifphp nophp dataphp isphp suppliedphp,php needphp eitherphp aphp projectProfileFilephp orphp aphp projectDirectory
php php php php php php php php ifphp php(php!issetphp(php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php)php php&php&php php!issetphp(php$thisphp-php>php_attributesphp[php'projectDirectoryphp'php]php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'loadFromFilephp(php)php mustphp havephp atphp leastphp php"projectProfileFilephp"php orphp php"projectDirectoryphp"php setphp.php'php)php;
php php php php php php php php php}

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php)php)php php{
php php php php php php php php php php php php php$projectProfileFilePathphp php=php php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$projectProfileFilePathphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'php"projectProfileFilephp"php wasphp suppliedphp butphp filephp wasphp notphp foundphp atphp locationphp php'php php.php php$projectProfileFilePathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_attributesphp[php'projectDirectoryphp'php]php php=php dirnamephp(php$projectProfileFilePathphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$projectProfileFilePathphp php=php rtrimphp(php$thisphp-php>php_attributesphp[php'projectDirectoryphp'php]php,php php'php/php\php\php'php)php php.php php'php/php.zfprojectphp.xmlphp'php;
php php php php php php php php php php php php ifphp php(php!filephp_existsphp(php$projectProfileFilePathphp)php)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'php"projectDirectoryphp"php wasphp suppliedphp butphp nophp profilephp filephp filephp wasphp notphp foundphp atphp locationphp php'php php.php php$projectProfileFilePathphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php php=php php$projectProfileFilePathphp;
php php php php php php php php php}

php php php php php php php php php$profileDataphp php=php filephp_getphp_contentsphp(php$projectProfileFilePathphp)php;

php php php php php php php php php$profileFileParserphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xmlphp(php)php;
php php php php php php php php php$profileFileParserphp-php>unserializephp(php$profileDataphp,php php$thisphp)php;

php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php storeToFilephp(php)php php-php storephp thephp currentphp profilephp tophp file
php php php php php php*
php php php php php php*php Thisphp willphp storephp thephp profilephp inphp memoryphp tophp aphp placephp onphp diskphp determinedphp byphp thephp attributes
php php php php php php*php availablephp,php specificallyphp ifphp thephp keyphp php'projectProfileFilephp'php isphp available
php php php php php php*
php php php php php php*php/
php php php php publicphp functionphp storeToFilephp(php)
php php php php php{
php php php php php php php php php$filephp php=php nullphp;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php)php)php php{
php php php php php php php php php php php php php$filephp php=php php$thisphp-php>php_attributesphp[php'projectProfileFilephp'php]php;
php php php php php php php php php}

php php php php php php php php ifphp php(php$filephp php=php=php nullphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Toolphp/Projectphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'storeToFilephp(php)php mustphp havephp aphp php"projectProfileFilephp"php attributephp setphp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$parserphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xmlphp(php)php;
php php php php php php php php php$xmlphp php=php php$parserphp-php>serializephp(php$thisphp)php;
php php php php php php php php filephp_putphp_contentsphp(php$filephp,php php$xmlphp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php storeToDataphp(php)php php-php createphp aphp stringphp representationphp ofphp thephp profilephp inphp memory
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp storeToDataphp(php)
php php php php php{
php php php php php php php php php$parserphp php=php newphp Zendphp_Toolphp_Projectphp_Profilephp_FileParserphp_Xmlphp(php)php;
php php php php php php php php php$xmlphp php=php php$parserphp-php>serializephp(php$thisphp)php;
php php php php php php php php returnphp php$xmlphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php php_php_toStringphp(php)php php-php castphp thisphp profilephp tophp stringphp tophp bephp ablephp tophp viewphp itphp.
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php$stringphp php=php php'php'php;
php php php php php php php php foreachphp php(php$thisphp asphp php$resourcephp)php php{
php php php php php php php php php php php php php$stringphp php.php=php php$resourcephp-php>getNamephp(php)php php.php PHPphp_EOLphp;
php php php php php php php php php php php php php$riiphp php=php newphp RecursiveIteratorIteratorphp(php$resourcephp,php RecursiveIteratorIteratorphp:php:SELFphp_FIRSTphp)php;
php php php php php php php php php php php php foreachphp php(php$riiphp asphp php$itemphp)php php{
php php php php php php php php php php php php php php php php php$stringphp php.php=php strphp_repeatphp(php'php php php'php,php php$riiphp-php>getDepthphp(php)php+php1php)php php.php php$itemphp-php>getNamephp(php)
php php php php php php php php php php php php php php php php php php php php php php php php php.php php(php(countphp(php$attributesphp php=php php$itemphp-php>getAttributesphp(php)php)php php>php php0php)php php?php php'php php[php'php php.php httpphp_buildphp_queryphp(php$attributesphp)php php.php php'php]php'php php:php php'php'php)
php php php php php php php php php php php php php php php php php php php php php php php php php.php PHPphp_EOLphp;
php php php php php php php php php php php php php}
php php php php php php php php php}
php php php php php php php php returnphp php$stringphp;
php php php php php}
php}