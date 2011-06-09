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
php php*php php@versionphp php php php php$Idphp:php Classphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_Property
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Propertyphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Reflectionphp_Method
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Methodphp.phpphp'php;

php/php*php*
php php*php Zendphp_Reflectionphp_Docblock
php php*php/
requirephp_oncephp php'Zendphp/Reflectionphp/Docblockphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Reflectionphp_Classphp extendsphp ReflectionClass
php{
php php php php php/php*php*
php php php php php php*php Returnphp thephp reflectionphp filephp ofphp thephp declaringphp filephp.
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Reflectionphp_File
php php php php php php*php/
php php php php publicphp functionphp getDeclaringFilephp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Filephp'php)
php php php php php{
php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$thisphp-php>getFileNamephp(php)php)php;
php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Filephp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Filephp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp classesphp Docblockphp reflectionphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp use
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Docblock
php php php php php php*php php@throwsphp Zendphp_Reflectionphp_Exceptionphp forphp missingphp docblockphp orphp invalidphp reflectionphp class
php php php php php php*php/
php php php php publicphp functionphp getDocblockphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Docblockphp'php)
php php php php php{
php php php php php php php php ifphp php(php'php'php php=php=php php$thisphp-php>getDocCommentphp(php)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php$thisphp-php>getNamephp(php)php php.php php'php doesphp notphp havephp aphp docblockphp'php)php;
php php php php php php php php php}

php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$thisphp)php;
php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Docblockphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Docblockphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$instancephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp startphp linephp ofphp thephp class
php php php php php php*
php php php php php php*php php@paramphp boolphp php$includeDocComment
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
php php php php php php*php Returnphp thephp contentsphp ofphp thephp class
php php php php php php*
php php php php php php*php php@paramphp boolphp php$includeDocblock
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentsphp(php$includeDocblockphp php=php truephp)
php php php php php{
php php php php php php php php php$filenamephp php php=php php$thisphp-php>getFileNamephp(php)php;
php php php php php php php php php$filelinesphp php=php filephp(php$filenamephp)php;
php php php php php php php php php$startnumphp php php=php php$thisphp-php>getStartLinephp(php$includeDocblockphp)php;
php php php php php php php php php$endnumphp php php php php=php php$thisphp-php>getEndLinephp(php)php php-php php$thisphp-php>getStartLinephp(php)php;

php php php php php php php php returnphp implodephp(php'php'php,php arrayphp_splicephp(php$filelinesphp,php php$startnumphp,php php$endnumphp,php truephp)php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp allphp reflectionphp objectsphp ofphp implementedphp interfaces
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp use
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Reflectionphp_Class
php php php php php php*php/
php php php php publicphp functionphp getInterfacesphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Classphp'php)
php php php php php{
php php php php php php php php php$phpReflectionsphp php php=php parentphp:php:getInterfacesphp(php)php;
php php php php php php php php php$zendReflectionsphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$phpReflectionsphp php&php&php php(php$phpReflectionphp php=php arrayphp_shiftphp(php$phpReflectionsphp)php)php)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$zendReflectionsphp[php]php php=php php$instancephp;
php php php php php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$phpReflectionsphp)php;
php php php php php php php php returnphp php$zendReflectionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp methodphp reflectionphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Reflectionphp classphp tophp utilize
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Method
php php php php php php*php/
php php php php publicphp functionphp getMethodphp(php$namephp,php php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Methodphp'php)
php php php php php{
php php php php php php php php php$phpReflectionphp php php=php parentphp:php:getMethodphp(php$namephp)php;
php php php php php php php php php$zendReflectionphp php=php newphp php$reflectionClassphp(php$thisphp-php>getNamephp(php)php,php php$phpReflectionphp-php>getNamephp(php)php)php;

php php php php php php php php ifphp php(php!php$zendReflectionphp instanceofphp Zendphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Methodphp'php)php;
php php php php php php php php php}

php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php returnphp php$zendReflectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp reflectionphp objectsphp ofphp allphp methods
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$filter
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Reflectionphp classphp tophp usephp forphp methods
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Reflectionphp_Methodphp objects
php php php php php php*php/
php php php php publicphp functionphp getMethodsphp(php$filterphp php=php php-php1php,php php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Methodphp'php)
php php php php php{
php php php php php php php php php$phpReflectionsphp php php=php parentphp:php:getMethodsphp(php$filterphp)php;
php php php php php php php php php$zendReflectionsphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$phpReflectionsphp php&php&php php(php$phpReflectionphp php=php arrayphp_shiftphp(php$phpReflectionsphp)php)php)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$thisphp-php>getNamephp(php)php,php php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Methodphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Methodphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$zendReflectionsphp[php]php php=php php$instancephp;
php php php php php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$phpReflectionsphp)php;
php php php php php php php php returnphp php$zendReflectionsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp parentphp reflectionphp classphp ofphp reflectedphp class
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp Reflectionphp classphp tophp use
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Class
php php php php php php*php/
php php php php publicphp functionphp getParentClassphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Classphp'php)
php php php php php{
php php php php php php php php php$phpReflectionphp php=php parentphp:php:getParentClassphp(php)php;
php php php php php php php php ifphp php(php$phpReflectionphp)php php{
php php php php php php php php php php php php php$zendReflectionphp php=php newphp php$reflectionClassphp(php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php ifphp php(php!php$zendReflectionphp instanceofphp Zendphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Classphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php php php php php returnphp php$zendReflectionphp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp reflectionphp propertyphp ofphp thisphp classphp byphp name
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp use
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Property
php php php php php php*php/
php php php php publicphp functionphp getPropertyphp(php$namephp,php php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Propertyphp'php)
php php php php php{
php php php php php php php php php$phpReflectionphp php php=php parentphp:php:getPropertyphp(php$namephp)php;
php php php php php php php php php$zendReflectionphp php=php newphp php$reflectionClassphp(php$thisphp-php>getNamephp(php)php,php php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php ifphp php(php!php$zendReflectionphp instanceofphp Zendphp_Reflectionphp_Propertyphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Propertyphp'php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php returnphp php$zendReflectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp reflectionphp propertiesphp ofphp thisphp class
php php php php php php*
php php php php php php*php php@paramphp php intphp php$filter
php php php php php php*php php@paramphp php stringphp php$reflectionClassphp Namephp ofphp reflectionphp classphp tophp use
php php php php php php*php php@returnphp arrayphp Arrayphp ofphp Zendphp_Reflectionphp_Property
php php php php php php*php/
php php php php publicphp functionphp getPropertiesphp(php$filterphp php=php php-php1php,php php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Propertyphp'php)
php php php php php{
php php php php php php php php php$phpReflectionsphp php=php parentphp:php:getPropertiesphp(php$filterphp)php;
php php php php php php php php php$zendReflectionsphp php=php arrayphp(php)php;
php php php php php php php php whilephp php(php$phpReflectionsphp php&php&php php(php$phpReflectionphp php=php arrayphp_shiftphp(php$phpReflectionsphp)php)php)php php{
php php php php php php php php php php php php php$instancephp php=php newphp php$reflectionClassphp(php$thisphp-php>getNamephp(php)php,php php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php php php php php ifphp php(php!php$instancephp instanceofphp Zendphp_Reflectionphp_Propertyphp)php php{
php php php php php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp specifiedphp;php mustphp extendphp Zendphp_Reflectionphp_Propertyphp'php)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php php$zendReflectionsphp[php]php php=php php$instancephp;
php php php php php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$phpReflectionsphp)php;
php php php php php php php php returnphp php$zendReflectionsphp;
php php php php php}
php}
