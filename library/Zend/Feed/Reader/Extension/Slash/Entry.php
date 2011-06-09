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
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Entryphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Reader
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp.phpphp'php;

php/php*php*
php php*php php@seephp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php php*php/
requirephp_oncephp php'Zendphp/Feedphp/Readerphp/Extensionphp/EntryAbstractphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Feedphp_Reader
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Feedphp_Readerphp_Extensionphp_Slashphp_Entry
php php php php extendsphp Zendphp_Feedphp_Readerphp_Extensionphp_EntryAbstract
php{
php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp section
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getSectionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getDataphp(php'sectionphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp department
php php php php php php*
php php php php php php*php php@returnphp stringphp|null
php php php php php php*php/
php php php php publicphp functionphp getDepartmentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_getDataphp(php'departmentphp'php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp hitphp_parade
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getHitParadephp(php)
php php php php php{
php php php php php php php php php$namephp php=php php'hitphp_paradephp'php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php php$stringParadephp php=php php$thisphp-php>php_getDataphp(php$namephp)php;
php php php php php php php php php$hitParadephp php php php php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!emptyphp(php$stringParadephp)php)php php{
php php php php php php php php php php php php php$stringParadephp php=php explodephp(php'php,php'php,php php$stringParadephp)php;

php php php php php php php php php php php php foreachphp php(php$stringParadephp asphp php$hitphp)
php php php php php php php php php php php php php php php php php$hitParadephp[php]php php=php php$hitphp php+php php0php;php php/php/castphp tophp integer
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php$hitParadephp;
php php php php php php php php returnphp php$hitParadephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp comments
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp getCommentCountphp(php)
php php php php php{
php php php php php php php php php$namephp php=php php'commentsphp'php;

php php php php php php php php ifphp php(issetphp(php$thisphp-php>php_dataphp[php$namephp]php)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php php$commentsphp php=php php$thisphp-php>php_getDataphp(php$namephp,php php'stringphp'php)php;

php php php php php php php php ifphp php(php!php$commentsphp)php php{
php php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php nullphp;
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php returnphp php$commentsphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp thephp entryphp dataphp specifiedphp byphp name
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@paramphp stringphp php$type
php php php php php php*
php php php php php php*php php@returnphp mixedphp|null
php php php php php php*php/
php php php php protectedphp functionphp php_getDataphp(php$namephp,php php$typephp php=php php'stringphp'php)
php php php php php{
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$namephp,php php$thisphp-php>php_dataphp)php)php php{
php php php php php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$namephp]php;
php php php php php php php php php}

php php php php php php php php php$dataphp php=php php$thisphp-php>php_xpathphp-php>evaluatephp(php$typephp php.php php'php(php'php php.php php$thisphp-php>getXpathPrefixphp(php)php php.php php'php/slashphp1php0php:php'php php.php php$namephp php.php php'php)php'php)php;

php php php php php php php php ifphp php(php!php$dataphp)php php{
php php php php php php php php php php php php php$dataphp php=php nullphp;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php$dataphp;

php php php php php php php php returnphp php$dataphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Registerphp Slashphp namespaces
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php protectedphp functionphp php_registerNamespacesphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_xpathphp-php>registerNamespacephp(php'slashphp1php0php'php,php php'httpphp:php/php/purlphp.orgphp/rssphp/php1php.php0php/modulesphp/slashphp/php'php)php;
php php php php php}
php}
