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
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Digitsphp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php/


php/php*php*
php php*php php@seephp Zendphp_Filterphp_Interface
php php*php/
requirephp_oncephp php'Zendphp/Filterphp/Interfacephp.phpphp'php;


php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Filter
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Filterphp_Digitsphp implementsphp Zendphp_Filterphp_Interface
php{
php php php php php/php*php*
php php php php php php*php Isphp PCREphp isphp compiledphp withphp UTFphp-php8php andphp Unicodephp support
php php php php php php*
php php php php php php*php php@varphp mixed
php php php php php php*php*php/
php php php php protectedphp staticphp php$php_unicodeEnabledphp;

php php php php php/php*php*
php php php php php php*php Classphp constructor
php php php php php php*
php php php php php php*php Checksphp ifphp PCREphp isphp compiledphp withphp UTFphp-php8php andphp Unicodephp support
php php php php php php*
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp php_php_constructphp(php)
php php php php php{
php php php php php php php php ifphp php(nullphp php=php=php=php selfphp:php:php$php_unicodeEnabledphp)php php{
php php php php php php php php php php php php selfphp:php:php$php_unicodeEnabledphp php=php php(php@pregphp_matchphp(php'php/php\pLphp/uphp'php,php php'aphp'php)php)php php?php truephp php:php falsephp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Definedphp byphp Zendphp_Filterphp_Interface
php php php php php php*
php php php php php php*php Returnsphp thephp stringphp php$valuephp,php removingphp allphp butphp digitphp characters
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$value
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp filterphp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(php!selfphp:php:php$php_unicodeEnabledphp)php php{
php php php php php php php php php php php php php/php/php POSIXphp namedphp classesphp arephp notphp supportedphp,php usephp alternativephp php0php-php9php match
php php php php php php php php php php php php php$patternphp php=php php'php/php[php^php0php-php9php]php/php'php;
php php php php php php php php php}php elsephp ifphp php(extensionphp_loadedphp(php'mbstringphp'php)php)php php{
php php php php php php php php php php php php php/php/php Filterphp forphp thephp valuephp withphp mbstring
php php php php php php php php php php php php php$patternphp php=php php'php/php[php^php[php:digitphp:php]php]php/php'php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php/php/php Filterphp forphp thephp valuephp withoutphp mbstring
php php php php php php php php php php php php php$patternphp php=php php'php/php[php\pphp{php^Nphp}php]php/php'php;
php php php php php php php php php}

php php php php php php php php returnphp pregphp_replacephp(php$patternphp,php php'php'php,php php(stringphp)php php$valuephp)php;
php php php php php}
php}
