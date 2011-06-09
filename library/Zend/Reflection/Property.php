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
php php*php php@versionphp php php php php$Idphp:php Propertyphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@todophp php php php php php php implementphp linephp numbers
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Reflectionphp_Propertyphp extendsphp ReflectionProperty
php{
php php php php php/php*php*
php php php php php php*php Getphp declaringphp classphp reflectionphp object
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Class
php php php php php php*php/
php php php php publicphp functionphp getDeclaringClassphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Classphp'php)
php php php php php{
php php php php php php php php php$phpReflectionphp php php=php parentphp:php:getDeclaringClassphp(php)php;
php php php php php php php php php$zendReflectionphp php=php newphp php$reflectionClassphp(php$phpReflectionphp-php>getNamephp(php)php)php;
php php php php php php php php ifphp php(php!php$zendReflectionphp instanceofphp Zendphp_Reflectionphp_Classphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp providedphp;php mustphp extendphp Zendphp_Reflectionphp_Classphp'php)php;
php php php php php php php php php}
php php php php php php php php unsetphp(php$phpReflectionphp)php;
php php php php php php php php returnphp php$zendReflectionphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp docblockphp comment
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$reflectionClass
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Docblockphp|falsephp Falsephp ifphp nophp docblockphp defined
php php php php php php*php/
php php php php publicphp functionphp getDocCommentphp(php$reflectionClassphp php=php php'Zendphp_Reflectionphp_Docblockphp'php)
php php php php php{
php php php php php php php php php$docblockphp php=php parentphp:php:getDocCommentphp(php)php;
php php php php php php php php ifphp php(php!php$docblockphp)php php{
php php php php php php php php php php php php returnphp falsephp;
php php php php php php php php php}

php php php php php php php php php$rphp php=php newphp php$reflectionClassphp(php$docblockphp)php;
php php php php php php php php ifphp php(php!php$rphp instanceofphp Zendphp_Reflectionphp_Docblockphp)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Invalidphp reflectionphp classphp providedphp;php mustphp extendphp Zendphp_Reflectionphp_Docblockphp'php)php;
php php php php php php php php php}
php php php php php php php php returnphp php$rphp;
php php php php php}
php}
