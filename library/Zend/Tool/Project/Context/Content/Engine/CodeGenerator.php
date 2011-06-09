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
php php*php php@versionphp php php php php$Idphp:php CodeGeneratorphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

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
classphp Zendphp_Toolphp_Projectphp_Contextphp_Contentphp_Enginephp_CodeGenerator
php{
php php php php php/php*php*
php php php php php php*php php@varphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storage
php php php php php php*php/
php php php php protectedphp php$php_storagephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_contentPrefixphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php_php_constructphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp php$storage
php php php php php php*php php@paramphp stringphp php$contentPrefix
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(Zendphp_Toolphp_Frameworkphp_Clientphp_Storagephp php$storagephp,php php$contentPrefixphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_storagephp php php php php php php php=php php$storagephp;
php php php php php php php php php$thisphp-php>php_contentPrefixphp php=php php$contentPrefixphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php hasContentphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$context
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp hasContentphp(Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$contextphp,php php$methodphp)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_storagephp-php>hasphp(php$thisphp-php>php_contentPrefixphp php.php php'php/php'php php.php php$contextphp-php>getNamephp(php)php php.php php'php/php'php php.php php$methodphp php.php php'php.phpphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php getContentphp(php)
php php php php php php*
php php php php php php*php php@paramphp Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$context
php php php php php php*php php@paramphp stringphp php$method
php php php php php php*php php@paramphp mixedphp php$parameters
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getContentphp(Zendphp_Toolphp_Projectphp_Contextphp_Interfacephp php$contextphp,php php$methodphp,php php$parametersphp)
php php php php php{
php php php php php php php php php$streamUriphp php=php php$thisphp-php>php_storagephp-php>getStreamUriphp(php$thisphp-php>php_contentPrefixphp php.php php'php/php'php php.php php$contextphp-php>getNamephp(php)php php.php php'php/php'php php.php php$methodphp php.php php'php.phpphp'php)php;

php php php php php php php php ifphp php(methodphp_existsphp(php$contextphp,php php'getCodeGeneratorphp'php)php)php php{
php php php php php php php php php php php php php$codeGeneratorphp php=php php$contextphp-php>getCodeGeneratorphp(php)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$codeGeneratorphp php=php newphp Zendphp_CodeGeneratorphp_Phpphp_Filephp(php)php;
php php php php php php php php php}

php php php php php php php php php$codeGeneratorphp php=php includephp php$streamUriphp;

php php php php php php php php ifphp php(php!php$codeGeneratorphp instanceofphp Zendphp_CodeGeneratorphp_Abstractphp)php php{
php php php php php php php php php php php php throwphp newphp Zendphp_Toolphp_Projectphp_Exceptionphp(php'Customphp filephp atphp php'php php.php php$streamUriphp php.php php'php didphp notphp returnphp thephp php$codeGeneratorphp objectphp.php'php)php;
php php php php php php php php php}

php php php php php php php php returnphp php$codeGeneratorphp-php>generatephp(php)php;
php php php php php}


php}