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
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php php@versionphp php php php php$Idphp:php Responsephp.phpphp php1php7php5php3php9php php2php0php0php9php-php0php8php-php1php0php php2php2php:php5php1php:php2php6Zphp mikaelkaelphp php$
php php*php/

php/php*php*
php php*php php@categoryphp php php Zend
php php*php php@packagephp php php php Zendphp_Servicephp_Amazon
php php*php php@subpackagephp SimpleDb
php php*php php@copyrightphp php Copyrightphp php(cphp)php php2php0php0php5php-php2php0php1php0php Zendphp Technologiesphp USAphp Incphp.php php(httpphp:php/php/wwwphp.zendphp.comphp)
php php*php php@licensephp php php php httpphp:php/php/frameworkphp.zendphp.comphp/licensephp/newphp-bsdphp php php php php Newphp BSDphp License
php php*php/
classphp Zendphp_Servicephp_Amazonphp_SimpleDbphp_Attribute
php{
php php php php protectedphp php$php_itemNamephp;
php php php php protectedphp php$php_namephp;
php php php php protectedphp php$php_valuesphp;

php php php php php/php*php*
php php php php php php*php Constructor
php php php php php php*
php php php php php php*php php@paramphp php stringphp php$itemName
php php php php php php*php php@paramphp php stringphp php$name
php php php php php php*php php@paramphp php arrayphp php$values
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php functionphp php_php_constructphp(php$itemNamephp,php php$namephp,php php$valuesphp)
php php php php php{
php php php php php php php php php$thisphp-php>php_itemNamephp php=php php$itemNamephp;
php php php php php php php php php$thisphp-php>php_namephp php php php php php=php php$namephp;

php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuesphp)php)php php{
php php php php php php php php php php php php php$thisphp-php>php_valuesphp php=php arrayphp(php$valuesphp)php;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_valuesphp php=php php$valuesphp;
php php php php php php php php php}
php php php php php}

php php php php php/php*php*
php php php php php php*php Returnphp thephp itemphp namephp tophp whichphp thephp attributephp belongs
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getItemNamephp php(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_itemNamephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp attributephp values
php php php php php php*
php php php php php php*php php@returnphp array
php php php php php php*php/
php php php php publicphp functionphp getValuesphp(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_valuesphp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Retrievephp thephp attributephp name
php php php php php php*
php php php php php php*php php@returnphp string
php php php php php php*php/
php php php php publicphp functionphp getNamephp php(php)
php php php php php{
php php php php php php php php returnphp php$thisphp-php>php_namephp;
php php php php php}

php php php php php/php*php*
php php php php php php*php Addphp value
php php php php php php*
php php php php php php*php php@paramphp php mixedphp php$value
php php php php php php*php php@returnphp void
php php php php php php*php/
php php php php publicphp functionphp addValuephp(php$valuephp)
php php php php php{
php php php php php php php php ifphp php(isphp_arrayphp(php$valuephp)php)php php{
php php php php php php php php php php php php php php$thisphp-php>php_valuesphp php+php=php php$valuephp;
php php php php php php php php php}php elsephp php{
php php php php php php php php php php php php php$thisphp-php>php_valuesphp[php]php php=php php$valuephp;
php php php php php php php php php}
php php php php php}

php php php php publicphp functionphp setValuesphp(php$valuesphp)
php php php php php{
php php php php php php php php ifphp php(php!isphp_arrayphp(php$valuesphp)php)php php{
php php php php php php php php php php php php php$valuesphp php=php arrayphp(php$valuesphp)php;
php php php php php php php php php}
php php php php php php php php php$thisphp-php>php_valuesphp php=php php$valuesphp;
php php php php php}
php}
