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
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Httpphp_UserAgentphp_Storage
php php*php/
requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Storagephp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Sessionphp_Namespace
php php*php/
requirephp_oncephp php'Zendphp/Sessionphp/Namespacephp.phpphp'php;

php/php*php*
php php*php php@packagephp php php php Zendphp_Http
php php*php php@subpackagephp UserAgent
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Httpphp_UserAgentphp_Storagephp_Sessionphp implementsphp Zendphp_Httpphp_UserAgentphp_Storage
php{
php php php php php/php*php*
php php php php php php*php Defaultphp sessionphp namespace
php php php php php php*php/
php php php php constphp NAMESPACEphp_DEFAULTphp php=php php'Zendphp_Httpphp_UserAgentphp'php;

php php php php php/php*php*
php php php php php php*php Defaultphp sessionphp objectphp memberphp name
php php php php php php*php/
php php php php constphp MEMBERphp_DEFAULTphp php=php php'storagephp'php;

php php php php php/php*php*
php php php php php php*php Objectphp tophp proxyphp php$php_SESSIONphp storage
php php php php php php*
php php php php php php*php php@varphp Zendphp_Sessionphp_Namespace
php php php php php php*php/
php php php php protectedphp php$php_sessionphp;

php php php php php/php*php*
php php php php php php*php Sessionphp namespace
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_namespacephp;

php php php php php/php*php*
php php php php php php*php Sessionphp objectphp member
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php/
php php php php protectedphp php$php_memberphp;

php php php php php/php*php*
php php php php php php*php Setsphp sessionphp storagephp optionsphp andphp initializesphp sessionphp namespacephp object
php php php php php php*
php php php php php php*php Expectsphp optionsphp tophp containphp php0php orphp morephp ofphp thephp followingphp keysphp:
php php php php php php*php php-php browserphp_typephp php-php-php mapsphp tophp php"namespacephp"php internally
php php php php php php*php php-php member
php php php php php php*
php php php php php php*php php@paramphp php nullphp|arrayphp|objectphp php$options
php php php php php php*php php@returnphp void
php php php php php php*php php@throwsphp Zendphp_Httpphp_UserAgentphp_Storagephp_Exceptionphp onphp invalidphp php$optionsphp argument
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$optionsphp php=php nullphp)
php php php php php{
php php php php php php php php ifphp php(isphp_objectphp(php$optionsphp)php php&php&php methodphp_existsphp(php$optionsphp,php php'toArrayphp'php)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php$optionsphp-php>toArrayphp(php)php;
php php php php php php php php php}php elseifphp php(isphp_objectphp(php$optionsphp)php)php php{
php php php php php php php php php php php php php$optionsphp php=php php(arrayphp)php php$optionsphp;
php php php php php php php php php}
php php php php php php php php ifphp php(nullphp php!php=php=php php$optionsphp php&php&php php!isphp_arrayphp(php$optionsphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Httpphp/UserAgentphp/Storagephp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Httpphp_UserAgentphp_Storagephp_Exceptionphp(sprintfphp(
php php php php php php php php php php php php php php php php php'Expectedphp arrayphp orphp objectphp optionsphp;php php"php%sphp"php providedphp'php,
php php php php php php php php php php php php php php php php gettypephp(php$optionsphp)
php php php php php php php php php php php php php)php)php;
php php php php php php php php php}

php php php php php php php php php/php/php addphp php'php.php'php tophp preventphp thephp messagephp php'php'Sessionphp namespacephp mustphp notphp startphp withphp aphp numberphp'
php php php php php php php php php$thisphp-php>php_namespacephp php=php php'php.php'
php php php php php php php php php php php php php php php php php php php php php php php php php php php.php php(issetphp(php$optionsphp[php'browserphp_typephp'php]php)
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php?php php$optionsphp[php'browserphp_typephp'php]
php php php php php php php php php php php php php php php php php php php php php php php php php php php php php php:php selfphp:php:NAMESPACEphp_DEFAULTphp)php;
php php php php php php php php php$thisphp-php>php_memberphp php php php php=php issetphp(php$optionsphp[php'memberphp'php]php)php php?php php$optionsphp[php'memberphp'php]php php:php selfphp:php:MEMBERphp_DEFAULTphp;
php php php php php php php php php$thisphp-php>php_sessionphp php php php=php newphp Zendphp_Sessionphp_Namespacephp(php$thisphp-php>php_namespacephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp sessionphp namespacephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamespacephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namespacephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnsphp thephp namephp ofphp thephp sessionphp objectphp member
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getMemberphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_memberphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Httpphp_UserAgentphp_Storage
php php php php php php*
php php php php php php*php php@returnphp boolean
php php php php php php*php/
php php php php publicphp functionphp isEmptyphp(php)
php php php php php{
php php php php php php php php returnphp emptyphp(php$thisphp-php>php_sessionphp-php>php{php$thisphp-php>php_memberphp}php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Httpphp_UserAgentphp_Storage
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp readphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_sessionphp-php>php{php$thisphp-php>php_memberphp}php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Httpphp_UserAgentphp_Storage
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$contents
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp writephp(php$contentphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_sessionphp-php>php{php$thisphp-php>php_memberphp}php php=php php$contentphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Httpphp_UserAgentphp_Storage
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp clearphp(php)
php php php php php{
php php php php php php php php unsetphp(php$thisphp-php>php_sessionphp-php>php{php$thisphp-php>php_memberphp}php)php;
php php php php php}
php}
