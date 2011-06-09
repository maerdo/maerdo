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
php php*php php@versionphp php php php php$Idphp:php Tagphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/

php/php*php*php Zendphp_Loaderphp php*php/
requirephp_oncephp php'Zendphp/Loaderphp.phpphp'php;

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Reflection
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Reflectionphp_Docblockphp_Tagphp implementsphp Reflector
php{
php php php php php/php*php*
php php php php php php*php php@varphp arrayphp Arrayphp ofphp Classphp names
php php php php php php*php/
php php php php protectedphp staticphp php$php_tagClassesphp php=php arrayphp(
php php php php php php php php php'paramphp'php php php=php>php php'Zendphp_Reflectionphp_Docblockphp_Tagphp_Paramphp'php,
php php php php php php php php php'returnphp'php php=php>php php'Zendphp_Reflectionphp_Docblockphp_Tagphp_Returnphp'php,
php php php php php php php php php)php;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php nullphp;

php php php php php/php*php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_descriptionphp php=php nullphp;

php php php php php/php*php*
php php php php php php*php Factoryphp:php Createphp thephp appropriatephp annotationphp tagphp object
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagDocblockLine
php php php php php php*php php@returnphp Zendphp_Reflectionphp_Docblockphp_Tag
php php php php php php*php/
php php php php publicphp staticphp functionphp factoryphp(php$tagDocblockLinephp)
php php php php php{
php php php php php php php php php$matchesphp php=php arrayphp(php)php;

php php php php php php php php ifphp php(php!pregphp_matchphp(php'php#php^php@php(php\wphp+php)php(php\sphp|php$php)php#php'php,php php$tagDocblockLinephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Nophp validphp tagphp namephp foundphp withinphp providedphp docblockphp linephp.php'php)php;
php php php php php php php php php}

php php php php php php php php php$tagNamephp php=php php$matchesphp[php1php]php;
php php php php php php php php ifphp php(arrayphp_keyphp_existsphp(php$tagNamephp,php selfphp:php:php$php_tagClassesphp)php)php php{
php php php php php php php php php php php php php$tagClassphp php=php selfphp:php:php$php_tagClassesphp[php$tagNamephp]php;
php php php php php php php php php php php php ifphp php(php!classphp_existsphp(php$tagClassphp)php)php php{
php php php php php php php php php php php php php php php php Zendphp_Loaderphp:php:loadClassphp(php$tagClassphp)php;
php php php php php php php php php php php php php}
php php php php php php php php php php php php returnphp newphp php$tagClassphp(php$tagDocblockLinephp)php;
php php php php php php php php php}
php php php php php php php php returnphp newphp selfphp(php$tagDocblockLinephp)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Exportphp reflection
php php php php php php*
php php php php php php*php Requiredphp byphp Reflector
php php php php php php*
php php php php php php*php php@todophp php php Whatphp shouldphp thisphp dophp?
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp staticphp functionphp exportphp(php)
php php php php php{
php php php php php}

php php php php php/php*php*
php php php php php php*php Serializephp tophp string
php php php php php php*
php php php php php php*php Requiredphp byphp Reflector
php php php php php php*
php php php php php php*php php@todophp php php Whatphp shouldphp thisphp dophp?
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php php$strphp php=php php"Docblockphp Tagphp php[php php*php php@php"php.php$thisphp-php>php_namephp.php"php php]php"php.PHPphp_EOLphp;

php php php php php php php php returnphp php$strphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$tagDocblockLine
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php$tagDocblockLinephp)
php php php php php{
php php php php php php php php php$matchesphp php=php arrayphp(php)php;

php php php php php php php php php/php/php findphp thephp line
php php php php php php php php ifphp php(php!pregphp_matchphp(php'php#php^php@php(php\wphp+php)php(php?php:php\sphp+php(php[php^php\sphp]php.php*php)php|php$php)php?php#php'php,php php$tagDocblockLinephp,php php$matchesphp)php)php php{
php php php php php php php php php php php php requirephp_oncephp php'Zendphp/Reflectionphp/Exceptionphp.phpphp'php;
php php php php php php php php php php php php throwphp newphp Zendphp_Reflectionphp_Exceptionphp(php'Providedphp docblockphp linephp doesphp notphp containphp aphp validphp tagphp'php)php;
php php php php php php php php php}

php php php php php php php php php$thisphp-php>php_namephp php=php php$matchesphp[php1php]php;
php php php php php php php php ifphp php(issetphp(php$matchesphp[php2php]php)php php&php&php php$matchesphp[php2php]php)php php{
php php php php php php php php php php php php php$thisphp-php>php_descriptionphp php=php php$matchesphp[php2php]php;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp annotationphp tagphp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getphp annotationphp tagphp description
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getDescriptionphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_descriptionphp;
php php php php php}
php}
