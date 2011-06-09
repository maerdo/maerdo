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
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Functionphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_Parameter
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Parameterphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Reflectionphp_Functionphp extendsphp ReflectionFunction
php{
php php php php php/php*php*
php php php php php php*php Getphp functionphp docblock
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp use
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Docblock
php php php php php php*php/
php php php php publicphp functionphp getDocblockphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Docblockphp'php)
php php php php php{
php php php php php php php php ifphp php(php'php'php php=php=php php(php$commentphp php=php php$thisphp-php>getDocCommentphp(php)php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php$thisphp-php>getNamephp(php)php php.php php'php doesphp notphp havephp aphp docblockphp'php)php;
php php php php php php php php php}
php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$commentphp)php;
php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Docblockphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp providedphp;php mustphp extendphp Zendphp_Reflectionphp_Docblockphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp startphp linephp php(positionphp)php ofphp function
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$includeDocComment
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getStartLinephp(php$includeDocCommentphp php=php falsephp)
php php php php php{
php php php php php php php php ifphp php(php$includeDocCommentphp)php php{
php php php php php php php php php php php php ifphp php(php$thisphp-php>getDocCommentphp(php)php php!php=php php'php'php)php php{
php php php php php php php php php php php php php php php php returnphp php$thisphp-php>getDocblockphp(php)php-php>getStartLinephp(php)php;
php php php php php php php php php php php php php}
php php php php php php php php php}

php php php php php php php php returnphp parentphp:php:getStartLinephp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp contentsphp ofphp function
php php php php php php*
php php php php php php*php php@paramphp php boolphp php$includeDocblock
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php$includeDocblockphp php=php truephp)
php php php php php{
php php php php php php php php returnphp implodephp(php"php\nphp"php,
php php php php php php php php php php php php arrayphp_splicephp(
php php php php php php php php php php php php php php php php filephp(php$thisphp-php>getFileNamephp(php)php)php,
php php php php php php php php php php php php php php php php php$thisphp-php>getStartLinephp(php$includeDocblockphp)php,
php php php php php php php php php php php php php php php php php(php$thisphp-php>getEndLinephp(php)php php-php php$thisphp-php>getStartLinephp(php)php)php,
php php php php php php php php php php php php php php php php true
php php php php php php php php php php php php php php php php php)
php php php php php php php php php php php php php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp functionphp parameters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp use
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Reflectionphp_Parameter
php php php php php php*php/
php php php php publicphp functionphp getParametersphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Parameterphp'php)
php php php php php{
php php php php php php php php php$phpReflectionsphp php php=php parentphp:php:getParametersphp(php)php;
php php php php php php php php php$zendReflectionsphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$phpReflectionsphp php&php&php php(php$phpReflectionphp php=php arrayphp_shiftphp(php$phpReflectionsphp)php)php)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$thisphp-php>getNamephp(php)php,php php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Parameterphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp providedphp;php mustphp extendphp Zendphp_Reflectionphp_Parameterphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$zendReflectionsphp[php]php php=php php$instancephp;
php php php php php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$phpReflectionsphp)php;
php php php php php php php php returnphp php$zendReflectionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp returnphp typephp tag
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Docblockphp_Tagphp_Return
php php php php php php*php/
php php php php publicphp functionphp getReturnphp(php)
php php php php php{
php php php php php php php php php$docblockphp php=php php$thisphp-php>getDocblockphp(php)php;
php php php php php php php php ifphp php(php!php$docblockphp-php>hasTagphp(php'returnphp'php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Functionphp doesphp notphp specifyphp anphp php@returnphp annotationphp tagphp;php cannotphp determinephp returnphp typephp'php)php;
php php php php php php php php php}
php php php php php php php php php$tagphp php php php php=php php$docblockphp-php>getTagphp(php'returnphp'php)php;
php php php php php php php php php$returnphp php=php Zendphp_Reflectionphp_Docblockphp_Tagphp:php:factoryphp(php'php@returnphp php'php php.php php$tagphp-php>getDescriptionphp(php)php)php;
php php php php php php php php returnphp php$returnphp;
php php php php php}
php}
