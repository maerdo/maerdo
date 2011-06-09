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
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@versionphp php php php php$Idphp:php Cyclephp.phpphp php2php0php0php9php6php php2php0php1php0php-php0php1php-php0php6php php0php2php:php0php5php:php0php9Zphp bkarwinphp php$
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/

php/php*php*
php php*php Helperphp forphp alternatingphp betweenphp setphp ofphp values
php php*
php php*php php@packagephp php php php Zendphp_View
php php*php php@subpackagephp Helper
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Viewphp_Helperphp_Cyclephp implementsphp Iterator
php{

php php php php php/php*php*
php php php php php php*php Defaultphp name
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php constphp DEFAULTphp_NAMEphp php=php php'defaultphp'php;

php php php php php/php*php*
php php php php php php*php Pointers
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_pointersphp php=php arrayphp(selfphp:php:DEFAULTphp_NAMEphp php=php>php-php1php)php php;

php php php php php/php*php*
php php php php php php*php Arrayphp ofphp values
php php php php php php*
php php php php php php*php php@varphp array
php php php php php php*php/
php php php php protectedphp php$php_dataphp php=php arrayphp(selfphp:php:DEFAULTphp_NAMEphp=php>arrayphp(php)php)php;

php php php php php/php*php*
php php php php php php*php Actualphp namephp ofphp cycle
php php php php php php*
php php php php php php*php php@varphp string
php php php php php php*php/
php php php php protectedphp php$php_namephp php=php selfphp:php:DEFAULTphp_NAMEphp;

php php php php php/php*php*
php php php php php php*php Addphp elementsphp tophp alternate
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Cycle
php php php php php php*php/
php php php php publicphp functionphp cyclephp(arrayphp php$dataphp php=php arrayphp(php)php,php php$namephp php=php selfphp:php:DEFAULTphp_NAMEphp)
php php php php php{
php php php php php php php php ifphp(php!emptyphp(php$dataphp)php)
php php php php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php$dataphp;

php php php php php php php php php$thisphp-php>setNamephp(php$namephp)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp elementsphp tophp alternate
php php php php php php*
php php php php php php*php php@paramphp arrayphp php$data
php php php php php php*php php@paramphp stringphp php$name
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Cycle
php php php php php php*php/
php php php php publicphp functionphp assignphp(Arrayphp php$dataphp php,php php$namephp php=php selfphp:php:DEFAULTphp_NAMEphp)
php php php php php{
php php php php php php php php php$thisphp-php>setNamephp(php$namephp)php;
php php php php php php php php php$thisphp-php>php_dataphp[php$namephp]php php=php php$dataphp;
php php php php php php php php php$thisphp-php>rewindphp(php)php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Setsphp actualphp namephp ofphp cycle
php php php php php php*
php php php php php php*php php@paramphp php$name
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Cycle
php php php php php php*php/
php php php php publicphp functionphp setNamephp(php$namephp php=php selfphp:php:DEFAULTphp_NAMEphp)
php php php php php{
php php php php php php php php$thisphp-php>php_namephp php=php php$namephp;

php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php)php)
php php php php php php php php php php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php php=php arrayphp(php)php;

php php php php php php php ifphp(php!issetphp(php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php)php)
php php php php php php php php php php$thisphp-php>rewindphp(php)php;

php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Getsphp actualphp namephp ofphp cycle
php php php php php php*
php php php php php php*php php@paramphp php$name
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}


php php php php php/php*php*
php php php php php php*php Returnphp allphp elements
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getAllphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Turnphp helperphp intophp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp toStringphp(php)
php php php php php{
php php php php php php php php returnphp php(stringphp)php php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php[php$thisphp-php>keyphp(php)php]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Castphp tophp string
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp php_php_toStringphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>toStringphp(php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp tophp nextphp value
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Cycle
php php php php php php*php/
php php php php publicphp functionphp nextphp(php)
php php php php php{
php php php php php php php php php$countphp php=php countphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php php=php=php php(php$countphp php-php php1php)php)
php php php php php php php php php php php php php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php php=php php0php;
php php php php php php php php else
php php php php php php php php php php php php php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php php=php php+php+php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Movephp tophp previousphp value
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Cycle
php php php php php php*php/
php php php php publicphp functionphp prevphp(php)
php php php php php{
php php php php php php php php php$countphp php=php countphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php)php;
php php php php php php php php ifphp php(php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php <php=php php0php)
php php php php php php php php php php php php php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php php=php php$countphp php-php php1php;
php php php php php php php php else
php php php php php php php php php php php php php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php php=php php-php-php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp iterationphp number
php php php php php php*
php php php php php php*php php@returnphp int
php php php php php php*php/
php php php php publicphp functionphp keyphp(php)
php php php php php{
php php php php php php php php ifphp php(php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php <php php0php)
php php php php php php php php php php php php returnphp php0php;
php php php php php php php php else
php php php php php php php php php php php php returnphp php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Rewindphp pointer
php php php php php php*
php php php php php php*php php@returnphp Zendphp_Viewphp_Helperphp_Cycle
php php php php php php*php/
php php php php publicphp functionphp rewindphp(php)
php php php php php{
php php php php php php php php php$thisphp-php>php_pointersphp[php$thisphp-php>php_namephp]php php=php php-php1php;
php php php php php php php php returnphp php$thisphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Checkphp ifphp elementphp isphp valid
php php php php php php*
php php php php php php*php php@returnphp bool
php php php php php php*php/
php php php php publicphp functionphp validphp(php)
php php php php php{
php php php php php php php php returnphp issetphp(php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php[php$thisphp-php>keyphp(php)php]php)php;
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp php currentphp element
php php php php php php*
php php php php php php*php php@returnphp mixed
php php php php php php*php/
php php php php publicphp functionphp currentphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_dataphp[php$thisphp-php>php_namephp]php[php$thisphp-php>keyphp(php)php]php;
php php php php php}
php}
